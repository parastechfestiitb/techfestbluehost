<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use App\Event;
use App\Certificate;

class Participant extends Model
{
    public function events()
    {
        return $this->belongsToMany('App\Event');
    }
    public function certificates()
    {
        return $this->belongsToMany('App\Certificate','certificate_participant','participant_id','certificate_id');
    }
    public function teams(){
        return $this->belongsToMany('App\Teams','event_participant','participant_id','team_id');
    }
    public function team(Event $event){
        $p = Participant::where('id',session()->get('participant')->id)->first();
        return Teams::whereId(DB::table('event_participant')->where(['participant_id'=>$p->id,'event_id'=>$event->id])->first()->team_id);
    }
    public function members(Event $event){
        $p = Participant::where('id',session()->get('participant')->id)->first();
        $team_id = DB::table('event_participant')->where(['participant_id'=>$p->id,'event_id'=>$event->id])->first()->team_id;
        return Participant::whereIn('id',DB::table('event_participant')->where('team_id',$team_id)->pluck('participant_id')->toArray())->get();
    }
    public function current(){
        return Participant::where('id',session()->get('participant')->id)->first();
    }
    public function zonal(Event $event){
        $p = Participant::where('id',session()->get('participant')->id)->first();
        if($event->zonal===1){
            $team =  DB::table('event_participant')->where(['participant_id'=>$p->id,'event_id'=>$event->id])->first();
            $zone = DB::table('event_participant')->where(['team_id'=>$team->team_id,'is_leader'=>1])->first()->zonal;
            if($zone==='Balnglore') $zone="Bengaluru";
            return $zone;
        }
        else return null;
    }
}
