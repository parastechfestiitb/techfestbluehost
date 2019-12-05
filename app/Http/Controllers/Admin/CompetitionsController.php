<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Event;
use DB;

class CompetitionsController extends Controller
{
    public function listGet(){ //Return all the comeptitions, ideates with informations if they are zonal or not
        return Event::where('category','Competition')->orWhere('category','Ideate')->orWhere('category','Robowars')->orWhere('category','Competition1')->get();
    }
    public function getDetailsPost(Request $r){
        $event = Event::whereId($r->id)->first();
        $participants = $event->participants()->get();
        $details = DB::table('event_participant')->where('event_id',$r->id)->get();
        foreach($details as &$val){
            $val->timestamp = $val->created_at;
        }
        return ['participants'=>$participants,'details'=>$details,'event'=>$event];
    }
}
