<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Event extends Model
{
    public function participants()
    {
        return $this->belongsToMany('App\Participant');
    }
    public function tickets()
    {
        return $this->belongsToMany('App\Ticket','event_ticket','event_id','ticket_id');
    }
    public function orderedTickets(){
        return Ticket::where('event_id',$this->id)->orderBy('priority','DESC')->get();
    }
    public function members(Participant $participant){
        $team_id = DB::table('event_participant')->where(['participant_id'=>$participant->id,'event_id'=>$this->id])->first()->team_id;
        return Participant::whereIn('id',DB::table('event_participant')->where('team_id',$team_id)->pluck('participant_id')->toArray())->get();
    }
    public function teams(){
        return $this->belongsToMany('App\Teams','event_participant','event_id','team_id');
    }
    public function teamIds(){
        return DB::table('event_participant')->where(['event_id'=>$this->id,'is_leader'=>1])->pluck('team_id')->toArray();
    }
}
