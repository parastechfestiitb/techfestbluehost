<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Certificate;
use App\Event;
use App\Participant;
use App\Teams;
use App\User;
use Carbon\Carbon;
use App\CaEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Ca;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //Admin Functions
    public function loginGet(){
        if(session()->has('admin') && session('admin'))
            return redirect()->route('admin.dashboardGet');
        return view("admin/loginGet");
    }
    public function loginPost(Request $request){
        if(!isset($request['name'], $request['password'])) return abort('403');
        else {
            $admin = Admin::where(['name'=>$request['name']])->first();
            if($admin && Hash::check($request['password'],$admin->password)) {
                session(['admin' => $admin]);
                return redirect()->route('admin.dashboardGet');
            }
            else return abort(403);
        }
    }
    public function oldAny(){
        $routes = DB::table('admin_form')->where(['admin_id'=>session()->get('admin')->id,'visible'=>1])->get();
        $links = [];
        foreach($routes as $route){
            $links[$route->name] = route($route->route_name);
        }
        return view('admin.dashboardGet')->with(['user'=>session('admin'),'links'=>$links]);
    }
    public function dashboardGet(){
        $routes = DB::table('admin_form')->where(['admin_id'=>session()->get('admin')->id,'visible'=>1])->get();
        $links = [];
        foreach($routes as $route){
            $links[$route->name] = route($route->route_name);
        }
        return view('admin.Get')->with(['user'=>session('admin'),'links'=>$links]);
    }
    public function logoutGet(){
        session()->flush();
        return redirect('/');
    }
    public function adminRoleGet(){
        return json_encode(session('admin')->roles()->get(['name','id']));
    }
    public function adminRoleIdGet($id){
        $role = session('admin')->roles()->whereId($id)->first();
        $table = DB::table($role->table)->orderBy('id')->get();
        $next = DB::table($role->table)->orderBy('id', 'desc')->first()->id + 1;
        $columns = array_keys((array) $table[0]);
        return json_encode(["role"=>$role,"table"=>$table, "columns" =>$columns, "next" => $next]);
    }
    public function adminRoleIdPost($id,Request $request){
        $role = session('admin')->roles()->whereId($id)->first();
        $columns = array_keys((array)DB::table($role->table)->first());
        $updates = [];
        foreach($columns as $column)
            $updates[$column] = $request[$column];
        if(strpos($role->permission,'U')!==false)
            return DB::table($role->table)->whereId($request->id)->update($updates);
        else return abort(403);
    }
    public function adminRoleCreatePost(Request $request){
        $role = session('admin')->roles()->whereId($request['tableId'])->first();
        if(strpos($role->permission,'C')!==false){
            $columns = array_keys((array) DB::table($role->table)->first());
            $create = [];
            foreach($columns as $column)
                $create[$column] = $request[$column];
            DB::table($role->table)->insert($create);
            abort(200);
        }
        else abort(404);
    }
    public function adminRoleDeleteIdPost(Request $request){
        $role = session('admin')->roles()->whereId($request['tableId'])->first();
        if(strpos($role->permission,'D')!==false){
            DB::table($role->table)->whereId($request->id)->delete();
        }
        return "true";
    }
    public function adminCreateGet(){
        return view('admin.adminCreateGet');
    }
    public function adminCreatePost(Request $request){
        $k = new Admin();
        $k->name = $request->name;
        $k->password = Hash::make($request->password);
        $k->department = $request->department;
        $k->phone = $request->phone;
        $k->email = $request->email;
        $k->save();
        return redirect()->route('admin.adminCreateGet');
    }


    //Ca Functions
    public function caTaskCreateGet(){
        return view('admin.ca.taskCreateGet');
    }
    public function caTaskCreatePost(Request $request){
        $social_links = [];
        $task = new CaEvent();
        $task->title = $request->title;
        $task->information = $request->information;
        $task->task = $request->task;
        $task->start_date = Carbon::parse($request->start_date);
        $task->end_date = Carbon::parse($request->end_date);
        $task->points = $request->points;
        if($request->facebook) $social_links['facebook']= $request->facebook;
        if($request->instagram) $social_links['instagram']= $request->instagram;
        if($request->twitter) $social_links['twitter']= $request->twitter;
        if($request->whatsapp) $social_links['whatsapp']= $request->whatsapp;
        if($request->linkedin) $social_links['linkedin']= $request->linkedin;
        $task->social_links =  json_encode($social_links);
        $task->save();
        return view('admin.ca.taskCreateGet')->with(['success'=>'Success']);
    }
    public function caImageGet(){
        $images  = DB::table('ca_reg_uploads')->orderBy('id')->limit(100)->get();
        $count = (int)(count($images));
        return view('admin.ca.imagesGet')->with(['images'=>$images,'count'=>$count,'i'=>0]);
    }
    public function caImageUpdateIdPointsGet($id,$points){
        $img = DB::table('ca_uploads')->whereId($id)->first();
        if(isset($img)) {
            if(Ca::where(['user_id'=>$img->user_id])->first()->points)
                Ca::where(['user_id'=>$img->user_id])->increment('points',$points);
            else
                Ca::where(['user_id'=>$img->user_id])->update(['points'=>$points]);
            DB::table('ca_uploads')->whereId($id)->delete();
            Storage::delete($img->file);
            return Ca::where(['user_id'=>$img->user_id])->first()->points;
        }
        return "false";
    }
    public function caListGet(){
        $cas = DB::table('cas')->get();
        $users = [];
        foreach($cas as $id=>$ca){
            $users[$id] = DB::table('users')->whereId($ca->user_id)->first();
        }
        return view('admin.ca.list')->with(['users'=>$users,'cas'=>$cas]);
    }
    public function competitionsGet(){

    }
    public function competitionsRegistrationsGet(){
        $event = Event::where(['category'=>'Competition'])->orWhere(['category'=>'Ideate'])->orWhere(['category'=>'Workshop'])->select('name')->get();
        return view('admin.competitions.registrationsGet')->with(['event'=>$event]);
    }
    public function getRegistrationsPost(Request $r){
        $eventId = Event::where(['name'=>$r->competition])->first()->id;
        $participants = [];
        $team = [];
        $details = [];
        if($r->type === 'team'){
            $team_details = DB::table('event_participant')->where(['event_id'=>$eventId,'is_leader'=>1])->get();
            foreach($team_details as $id){
                $k = $id->participant_id;
                $participants[$k] = Participant::whereId($k)->first();
                $team[$k] = $id;
                $details[$k]=DB::table('event_participant')->where('team_id',$id->team_id)->count();
            }
            return ['participants'=>$participants,'team'=>$team,'details'=>$details];
        }
        else if ($r->type === 'participant'){
            $particiapnts_id = DB::table('event_participant')->where(['event_id'=>$eventId])->get();
            foreach($particiapnts_id as $id){
                $particiapnts[] = $id->participant_id;
            }
            $temp_participants =  Participant::whereIn('id',$particiapnts)->get();
            foreach($temp_participants as $par){
                $participants[$par->id] = $temp_participants;
            }
        }
        else return abort(403);
    }
    public function seaærchResult(){
        return view('admin.detailsGet');
    }
    public function searchResultPost(Request $r){
        if($r->type==='name'||$r->type==='email'||$r->type==='phone'||$r->type==='id'){
            if($r->type==='id'){
                $r->data = (int) preg_replace('~\D~', '', $r->data);
            }
            if(Participant::where($r->type,'LIKE','%'.$r->data.'%')->count()>1){
                return ['nonAll'=>true,'participants'=>Participant::where($r->type,'LIKE','%'.$r->data.'%')->get()];
            }
            $participant = Participant::where($r->type,'LIKE','%'.$r->data.'%')->first();
            $teams = $participant->teams()->get();
            $events = [];
            foreach($teams as $key=>$team){
                $events[] = $team->details();
            }
            return $events;
        }
        else{
            $team = (int) preg_replace('~\D~', '', $r->data);
            return [Teams::where('id',$team)->first()->details()];
        }
    }
    public function makeSession(Request $r){
        session()->forget('participant');
        session(['participant'=>Participant::whereEmail($r->e)->first()]);
        dd(session()->all());
    }
    public function databasePost(){
        $tables = DB::table('tables')->get();
        $db = [];
        $id = session()->get('admin')->id;
        foreach($tables as $table){
            $admins = explode(',',$table->admins);
            if(in_array($id,$admins)) $db[] = ['name'=>$table->table_name];
        }
        return $db;
    }

    //create function
    public function createGet($id){
        $arr = ['robowars'=>'pp2wq'];
        return view("admin.createGet")->with(['key'=>$arr[$id]]);
    }
    public function robowarsPost($r){
        //newline k thru teams ko saperate karna hai
            //|||| wale se saparete k ek variable me store
            //[0] th ka team banana hai
                // Team name, category, achivement and bot name
                //Category se event nikalna hai -> $event
            // [1] pe participants ka loop chalana hai
                // :: se saperated name, email and phone mil jayega
                //email check karna hai already exists or not
                //if not, then create a new participant with same details
                //if does use the same participant
                // if he is the first participant store in leader
                //store the participant in participant array
            //Teams wale database me leader ka id store karna hai and team ka id = ye row ka id
            //Team name, bot name and achivement ko id ke sath robowars wale database me store karna hai
            //event_participant k table me
                // participant ka id, team id and event id store karna hai, agar participant leader hai to is_leader 1 karna hai
        $k=['category','teamname','botname','achievements'];
        $details=['name','email','phone'];
        $teams=(explode("\r\n",$r->input));
        $leaders=[];
        foreach ($teams as $team)
        {
            $tS = [];
            $participant=[];
            $level1=explode("||||",$team);
            $level2=explode("|",$level1[0]);
            foreach($level2 as $p=>$item){
                $ts[$k[$p]] = $item;
            }
            $participants=explode("::",$level1[1]);
            $leader = null;
            $pararr=[];
            foreach ($participants as $i=>$it){
                $participant=explode(",",$it);
                $p=null;
                if(Participant::where("email",$participant[1])->count()===0){
                    $np=new Participant();
                    $np->name=$participant[0];
                    $np->email=$participant[1];
                    $np->phone=$participant[2];
                    $np->save();
                    $p=Participant::where("email",$participant[1])->first();
                }
                else{
                    $p=Participant::where("email",$participant[1])->first();
                }
                if($i===0) $leader=$p;
                $pararr[]=$p;
            }
            $teamId=DB::table('teams')->insertGetId(['leader_id'=>$leader->id]);
            DB::table('robowars')->insertGetId(['id'=>$teamId,'name'=>$ts['teamname'],'achivements'=>$ts['achievements'],'bot_name'=>$ts['botname']]);
            if($ts['category']==="120") $eid=42;
            else $eid=41;
            foreach ($pararr as $par)
                DB::table('event_participant')->insert(['event_id'=>$eid,'participant_id'=>$par->id,'team_id'=>$teamId,'is_leader'=>$par===$leader?1:0,]);
        }
        return "data has been inserted";
    }
    public function createPost($id,Request $r){
        if($id==='robowars')
            return $this->robowarsPost($r);
    }
    public function kannikafunction(){
        $k = DB::table('certificate_participant')->pluck('participant_id');
        $p = Participant::whereIn('id',$k)->pluck('email');
        foreach($p as $a){
            echo $a."<br>";
        }
        return null;
    }
    public function zonalsAll(){
        $ps = DB::table('event_participant')->whereNotNull('zonal')->pluck('participant_id');
        return Participant::whereIn('id',$ps)->get();
    }
    public function accommodation(){
        return Participant::whereNotNull('shirt')->count();
    }
    public function workshopDB(){
        ini_set('memory_limit', '-1');
//        $teams = DB::table('teams')->whereNotNull('ticket_id')->pluck('id')->toArray();
        $teams = DB::table('event_participant   ')->where('team_id','>=',46)->pluck('participant_id')->toArray();
        return Participant::whereIn('id',DB::table('event_participant')->whereIn('team_id',$teams)->pluck('participant_id')->toArray())->get();
    }
    public function caReferal(){
        $referals = DB::table("referals")->get();
        $cas = [];
        foreach($referals as $referal){
            $user = DB::table('users')->where('email',$referal->ca)->first();
            if($user===null) continue;
            else $user = (array) $user;
            $data = (array) DB::table('cas')->where('user_id',$user->id)->first();
            $cas[] = array_merge($user,$data,(array) $referal);
        }
        return $cas;
    }

    public function lecturesCreate(){

    }
}

