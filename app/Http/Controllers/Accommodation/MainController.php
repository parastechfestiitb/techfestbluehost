<?php

namespace App\Http\Controllers\Accommodation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Image;


class MainController extends Controller
{
    /*
     * Not Needed Functions
     */
    public $apple = 0;
    function isJson($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
    public function check(){
        $errors= [];
        $t = DB::table('payment_log')->where('value','LIKE','%programName%')->select('id','value')->get();
        foreach($t as $d){
            json_decode($d->value);
            if(json_last_error() !== JSON_ERROR_NONE) $errors[] = $d;
        }
        return $errors;
    }


    public function getRooms(Request $r){
        return DB::table('rooms')->where('hostel',$r->hostel)->pluck('room');
    }
    public function alloted(Request $r){
        return DB::table('alloted_rooms')->get();
    }
    public function accoTable(Request $r){
        $list=DB::table('participants')->whereNotNull('allocated')->orderBy('allocated')->select('id','name','email','phone','allocated','gender','accomodation')->get();
        return view('accommodation.accoTable',compact('list'));
    }
    public function roomTable(Request $r){
        $list=DB::table('rooms')->orderBy('hostel')->orderBy('room')->get();
        return view('accommodation.accoTable',compact('list'));
    }
    public function putRooms(Request $r){
        DB::table('rooms')->insert([
            'hostel'=>$r->hostel,
            'room'=>$r->room,
            'status'=>1,
            'perroom'=>DB::table('rooms_status')->where('hostel',$r->hostel)->first()->perroom,
            'lockcode'=>(int)substr(preg_replace('/\D/','',md5(($r->hostel*1000+$r->room).' ')),-3)
        ]);
        return "success";
    }
    public function deleteRooms(Request $r){
        DB::table('rooms')->where(['hostel'=>$r->hostel,'room'=>$r->room])->delete();
        return "success";
    }

    /*
     * A recursive function that allocates maximum
     * number of people together
     *
     * Parameters:
     * Array of Participant Ids,
     * Category of Allocation (male, female, student-male, student-female)
     */
    public function allocate($ids=[],$hostels=[],$side=[],$rid=[]){
        if($ids===[]) return [];
        $c = count($ids);
        $rooms = DB::table('rooms')->whereIn('hostel',$hostels)->whereNotIn('id',$rid)->select(DB::raw("perroom - count as stat"),'id','room','hostel','lockcode')->having('stat','=',$c)->orderBy('hostel')->orderBy('room')->get();
        if($rooms->count()!==0) {
            $rid[] = $rooms->first()->id;
            return array_merge([["ids"=>$ids,"room"=>$rooms->first()]],$this->allocate($side,$hostels,[],$rid));
        }
        else{
            $rooms = DB::table('rooms')->whereIn('hostel', $hostels)->whereNotIn('id',$rid)->select(DB::raw("perroom - count as stat"),'id', 'room','hostel','lockcode')->having('stat', '>=', $c)->orderBy('hostel')->orderBy('room')->get();
            if($rooms->count()!==0) return [["ids"=>$ids,"room"=>$rooms->first()]];
            else {
                $side[] = array_pop($ids);
                return $this->allocate($ids,$hostels,$side,$rid);
            }
        }
    }
    /*
     * Finds all the relations that were made
     * when doing the payments
     *
     * send id of participant
     */
    public function paymentRelations($i){
        //First the payments starting with id
        $details = DB::table('payment_relations')->where('value',"$i,")->pluck('value')->toArray();
        $ids = implode(',',$details);
        $ids = array_unique(explode(',',$ids));
        return $ids;
    }
    /*
     * Set the allocation
     */
    public function accommodate(Request $r){
        $categories = json_decode($r->rooms);
        foreach ($categories as $category){
            foreach($category as $group){
                $ids = $group->ids;
                $room = $group->room;
                $db = DB::table('rooms')->where(['hostel'=>$room->hostel,'room'=>$room->room])->first();
                $db->increment('count',count($ids));
                $db->update([]);
            }
        }
        return $r->rooms;
    }
    /*
     * Finds all the ids related to current id,
     * will be used in other functions
     *
     * send id of participants and array of already existing participants
     */
    public function getRelations($i,$arr = []){
        $participants = $arr;
        //sorting the team out
        $teams = DB::table('event_participant')->where('participant_id',$i)->pluck('team_id')->toArray();
        foreach($teams as $team) {
            $temp = DB::table('event_participant')->where('team_id', $team)->pluck('participant_id')->toArray();
            foreach($temp as $t){
                if(!in_array($t,$participants)){
                    array_push($participants,$t);
                }
            }
        }
        $participants = array_unique($participants);
        $participants = array_merge($participants,$this->paymentRelations($i));
        $arrDif = array_diff($participants,array_unique($arr));
        if(count($arrDif)===0) return $participants;
        else foreach($arrDif as $a)
            $participants = $this->getRelations($a,$participants);
        return $participants;
    }

    /*public function getRelations($i,$arr = []){
        $participants = $arr;
        $teams = DB::table('event_participant')->where('participant_id',$i)->pluck('team_id')->toArray();
        foreach($teams as $team)
            $participants[$team] = DB::table('event_participant')->where('team_id',$team)->pluck('participant_id')->toArray();
        return $participants;
    }*/
    /*
     * Master Allocation
     * Differentiates by gender, and then allocate rooms for each gender
     */
    public function masterAllocate($participants){
        $females = $participants->where('gender','female')->where('allocated',null)->pluck('id')->toArray();
        $males = $participants->whereIn('gender',['male',null])->where('allocated',null)->pluck('id')->toArray();
        $temp1 = array_diff($participants->pluck('id')->toArray() , $participants->where('allocated',null)->pluck('id')->toArray());
        $alreadyAllocated= DB::table('participants')->whereIn('id',$temp1)->get();
        $maleHostels = DB::table('rooms_status')->where('gender','male')->orderBy('hostel')->pluck('hostel')->toArray();
        $femaleHostels = DB::table('rooms_status')->where('gender','female')->orderBy('hostel')->pluck('hostel')->toArray();
        $maleRooms=$this->allocate($males,$maleHostels);
        $femaleRooms=$this->allocate($females,$femaleHostels);
        foreach($maleRooms as $roomData){
            $participants = $roomData['ids'];
            $room = $roomData['room'];
            $dd = DB::table('rooms')->where(['id'=>$room->id]);
            $countRooms = $dd->first()->count + count($participants);
            $cur = $dd->first()->current . implode(',',$participants).',';
            $dd->update(['current'=>$cur,'count'=>$countRooms]);
            foreach($participants as $participant){
                DB::table('participants')->whereId($participant)->update(['allocated'=>'Hostel-'.$room->hostel.'-room-'.$room->room.'-code-'.substr('000'.$room->lockcode,-3)]);
            }
        }
        foreach($femaleRooms as $roomData){
            $participants = $roomData['ids'];
            $room = $roomData['room'];
            $dd = DB::table('rooms')->where(['room'=>$room->room,'hostel'=>$room->hostel]);
            $c = $dd->first()->count+count($participants);
            $dd->update(['current'=>implode(',',$participants).',','count'=>$c]);
            foreach($participants as $participant){
                DB::table('participants')->whereId($participant)->update(['allocated'=>'Hostel-'.$room->hostel.'-room-'.$room->room.'-code-'.$room->lockcode]);
            }
        }
        return ['males'=>$maleRooms,'females'=>$femaleRooms,'alreadyAllocated'=>$alreadyAllocated];
    }
    public function reset(){
        DB::table('rooms')->update(['count'=>0,'current'=>null]);
        DB::table('participants')->update(['allocated'=>null]);
    }

    /*
     * remove Allocation
     */
    public function removeAllocation($id){
        DB::table('participants')->whereId($id)->update(['allocated'=>null,'shirt_given'=>null,'kit_given'=>null]);
        $row = DB::table('rooms')->where('current','LIKE',"%,$id,%")->first();
        $first = false;
        if($row===null){
            $row = DB::table('rooms')->where('current','LIKE',"$id,%")->first();
            if($row!==null) $first = true;
            else return "No such room";
        }
        $current = str_replace(",$id,",',',$row->current);
        if($first)
         $current = str_replace("$id,",'',$row->current);
        $count = $row->count-1;
        if($current!=='')
            DB::table('rooms')->whereId($row->id)->update(["count"=>$count,"current"=>$current]);
        else
            DB::table('rooms')->whereId($row->id)->update(["count"=>0,"current"=>null]);
    }
    public function resetAcco(Request $r){
        $ids = json_decode($r->rooms);
        foreach($ids as $id)
            $this->removeAllocation($id);
        return redirect('/admin/accommodation');
    }
    public function details($i){
        return DB::table('participants')->whereIn('id',$this->getRelations($i))->get();
    }
    public function Get(Request $r){
        $arr  = ['151'=>'15A','152'=>'15B','153'=>"15C",'161'=>'16A','162'=>'16B','163'=>'16C'];
        if(isset($r->e)){
            $e = $r->e;
            $eno = preg_replace('/[^0-9]/', '', $e);
            if(preg_match('/TF[-]?[0-9]{1,6}$/i',$e)){
                $participant  =  DB::table('participants')->whereId($eno)->first();
                $checked = [$participant->id];
            }
            else if(preg_match('/[a-zA-Z][a-zA-Z0-9]{1,3}[-]?[0-9]{1,6}$/',$e)){
                $checked = DB::table('event_participant')->where('team_id',$eno)->pluck('participant_id')->toArray();
                $temp = DB::table('event_participant')->where('team_id',$eno)->first()->participant_id;
                $participant = DB::table('participants')->whereId($temp)->first();
            }
            else if(preg_match('/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/',$e)){
                $participant = DB::table('participants')->where('email',$e)->first();
                $checked = [$participant->id];
            }
            else if(preg_match('/^\d{10,}$/',$e)){
                $participant = DB::table('participants')->where('phone','LIKE',"%$e%")->first();
                $checked = [$participant->id];
            }
            else if(!preg_match('/\w+\W+\w+/',$e)){
                $temp = DB::table('payment_log')->where('value','like',"%$e%")->first();
                if(!$temp) return "Sorry, use some other result to search";
                $temp = $temp->value;
                $temp = json_decode($temp);
                if($temp->subProgramName==="Workshop"){
                    $temp = explode("||||",$temp->token_id)[0];
                    $temp = explode("||",$temp)[2];
                    $temp = DB::table('event_participant')->where('team_id',$temp)->first()->participant_id;
                    $checked = DB::table('event_participant')->where('team_id',$temp)->pluck('participant_id')->toArray();
                }
                else if($temp->subProgramName==="Accommodation"){
                    $temp = $temp->token_id;
                    $temp = explode('||',$temp)[0];
                    $checked = [$temp->id];
                }
                $participant = DB::table('participants')->whereId($temp)->first();
            }
            else {
                $participant = DB::table('participants')->where('name','LIKE',"%$e%")->first();
                $checked = [$participant->id];
            }
//            dd($participant);
            $participants = $this->details($participant->id);
            $rooms = $this->masterAllocate($participants->where('accomodation',1));
            return view('accommodation.Get',compact('r','participants','participant','rooms','checked','arr'));
        }
        else return view('accommodation.Get',compact('r'));
    }

    public function updateKits(Request $r){
        foreach($r->kits as $k){
            DB::table('participants')->whereId((int)$k)->update(['kit_given'=>1]);
        }
        foreach($r->shirts as $k){
            DB::table('participants')->whereId($k)->update(['shirt_given'=>1]);
        }
        return 'done';
    }

    /*public function Get1(Request $r){
        if($r->submit==='special'){
            $e = $r->e;
            if(strtolower( substr($e,0,2) )==='tf'){
                $participant = DB::table('participants')->whereId((int) substr($e,2))->first();
            }
            else if(preg_match('/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/',$e)) {
                $participant = DB::table('participants')->where('email',$r->email)->first();
                return response()->json($participant);
            }
            else return view('accommodation.Get',compact('r'));
        }
        else if($r->submit==='search'){
            $e = $r->e;
            $id = preg_match_all('!\d+!', $e, $matches);
            return $id;
            if(strtolower( substr($e,0,2) )==='tf'){
                $participant = DB::table('participants')->whereId($id)->first();
                $participants = $this->details($participant->id);
                return view('accommodation.Get',compact('r','participant','participants'));
            }
            else if(preg_match('/[a-zA-Z][a-zA-Z0-9]{1,3}[-]?[0-9]{1,6}$/',$e)){
                $participantId = DB::table('event_participant')->where('team_id',$id)->first()->participant_id;
                $participant = DB::table('participants')->whereId($participantId)->first();
                $participants = $this->details($participant->id);
                return view('accommodation.Get',compact('r','participant','participants'));

            }
            if(preg_match('/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/',$e)) return "hello";
            else return view('accommodation.Get',compact('r'));
        }
        else return view('accommodation.Get',compact('r'));
    }*/

    /*
     * Decides number of students going per room
     */
    public function perroom(Request $r){
        if(DB::table('rooms_status')->where('hostel',$r->hostel)->count()===0){
            DB::table('rooms_status')->insert(['hostel'=>$r->hostel,'perroom'=>$r->perroom]);
            DB::table('rooms')->where('hostel',$r->hostel)->update(['perroom'=>$r->perrrom]);
        }
        else{
            DB::table('rooms_status')->where('hostel',$r->hostel)->update(['perroom'=>$r->perroom]);
            DB::table('rooms')->where('hostel',$r->hostel)->update(['perroom'=>$r->perroom]);
        }
        return redirect()->back();
    }
    /*
     * Change the gender option for hostels
     */
    public function gender(Request $r){
        DB::table('rooms_status')->where('hostel',$r->hostel)->update(['gender'=>$r->gender]);
        return redirect()->back();
    }
    /*
     * Priorities of different hostels
     */
    public function priorities(Request $r){
        DB::table('rooms_status')->where(['hostel',$r->hostel])->update(['priority'=>$r->priority]);
        return redirect()->back();
    }
    /*
     * making a function that sorts out the payment logs relations
     */
    public function makeRelations(){
        DB::table('payment_relations')->delete();
        $tables = DB::table('payment_log')->where('value','like','%programName%modation%')->pluck('value')->toArray();
        $tables = array_unique($tables);
        echo count($tables);
        $tempArr = [];
        foreach($tables as $k=>$value){
            $temp = json_decode($value);
            if(!isset($temp->token_id)) dd($value);
            $temp = explode('||||',$temp->token_id)[0];
            $temp = explode('shirt',$temp)[0];
            $temp = explode('||',$temp);
            $tempArr[] = ['value'=>implode(',',$temp)];
        }
        $tar = array_unique($tempArr,SORT_REGULAR);
        DB::table('payment_relations')->insert($tar);
        return "Done";
    }
}

/*
 * LOCKCODE
 *
UPDATE `rooms`
SET `lockcode` = ABS(RAND()*1000)
WHERE `lockcode` is NULL
 */