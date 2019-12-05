<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Teams extends Model
{
    protected $fillable =['ticket_id'];
    public function participants(){
        return $this->belongsToMany('App\Participant','event_participant','team_id');
    }

    public function event(){
        return $this->belongsToMany('App\Event','event_participant','team_id');
    }
    public function details(){
        $event = $this->event()->first();
        if(!$event) return null;
        $event->cards = $event->tickets()->get();
        $event->participants = $this->participants()->get();
        $event->team = $this;
        return $event;
    }
}
