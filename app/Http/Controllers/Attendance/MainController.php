<?php

namespace App\Http\Controllers\Attendance;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public $apple = 0;
    function isJson($string) {
        json_decode($string);
        return (json_last_error() == JSON_ERROR_NONE);
    }
    public function eventDetail($team){
        if( DB::table('event_participant')->where('team_id',$team)->first()!==null)
            $eventId = DB::table('event_participant')->where('team_id',$team)->first()->event_id;
        else abort('401','Sorry no event found');
        $event = DB::table('events')->whereId($eventId)->first();
        $t = DB::table('teams')->whereId($team)->first();
        $attendance = DB::table('attendance')->where('team_id',$team)->get();
        $event->team = $t;
        $event->attendance = $attendance;
        return $event;
    }
    public function details($e){
        if(isset($e['team'])) {
            $participants = DB::table('event_participant')->where('team_id',$e['team'])->pluck('participant_id')->toArray();
            $participants = DB::table('participants')->whereIn('id',$participants)->get();
            foreach($participants as $key=>$participant){
                $participants[$key]->status = DB::table('event_participant')->where('participant_id',$participant->id)->where('team_id',$e['team'])->first()->{'slot'.$e['slot']};
            }
            $event = $this->eventDetail($e['team']);
            return [['participants'=>$participants,'event'=>$event]];
        }
        else {
            $teams = DB::table('event_participant')->where(['participant_id'=>$e['participant'],'event_id'=>$e['event']])->pluck('team_id');
            $groups = [];
            foreach($teams as $team){
                $temp = DB::table('event_participant')->where('team_id',$team)->pluck('participant_id')->toArray();
                $participants = DB::table('participants')->whereIn("id",$temp)->get();
                foreach($participants as $key=>$participant){
                    $participants[$key]->status = DB::table('event_participant')->where('participant_id',$participant->id)->where('team_id',$team)->first()->{'slot'.$e['slot']};
                }
                $event = $this->eventDetail($team);
                $groups[] = ['participants'=>$participants,'event'=>$event];
            }
            return $groups;
        }
    }

    public function Get(Request $r){
        $events = DB::table('events')->get();
        if(!isset($r->event) || !isset($r->secret)) return view('attendance.Get',compact('r','events'));
        if(DB::table('events')->where(['id'=>$r->event,'secret'=>$r->secret])->count() === 0) return abort(403);
        if(isset($r->e)){
            $e = $r->e;
            $eno = preg_replace('/[^0-9]/', '', $e);
            if($eno!=null)
                $eno=$eno%1000000;
            if(preg_match('/TF[-]?[0-9]{1,6}$/',$e)){
                $participant  =  DB::table('participants')->whereId($eno)->first();
                $team = $this->details(['participant'=>$participant->id,'slot'=>$r->slot,'event'=>$r->event]);
            }
            else if(preg_match('/[a-zA-Z][a-zA-Z0-9]{1,3}[-]?[0-9]{1,6}$/',$e)){
                $k = explode('-',$e)[0];
                $team = $this->details(['team'=>$eno,'slot'=>$r->slot]);
            }
            else if(preg_match('/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/',$e)){
                $participant = DB::table('participants')->where('email',$e)->first();
                $team = $this->details(['participant'=>$participant->id,'slot'=>$r->slot,'event'=>$r->event]);
            }
            else if(preg_match('/^\d{10,}$/',$e)){
                $participant = DB::table('participants')->where('phone','LIKE',"%$e%")->first();
                $team = $this->details(['participant'=>$participant->id,'slot'=>$r->slot,'event'=>$r->event]);
            }
            else {
                $participant = DB::table('participants')->where('name','LIKE',"%$e%")->first();
                $team = $this->details(['participant'=>$participant->id,'slot'=>$r->slot,'event'=>$r->event]);
            }
            $teams = $team;
            return view('attendance.Get',compact('r','teams','events'));
        }
        else return view('attendance.Get',compact('r','events'));
    }
    public function markGet($eid,$tid,$slot,Request $r){
        foreach($r->members as $key=>$val){
            DB::table('event_participant')->where(['team_id'=>$tid,'participant_id'=>$key])->update([$slot=>1]);
        }
        return redirect()->back();
    }
    public function reset(){
        DB::table('event_participant')->update(['slot1'=>0]);
    }
}

