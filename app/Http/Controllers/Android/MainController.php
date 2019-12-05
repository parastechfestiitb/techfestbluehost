<?php

namespace App\Http\Controllers\Android;

use App\Participant;
use App\Http\Controllers\Controller;
use Request;
use DB;
use QrCode;
use Image;

class MainController extends Controller
{
    public function loginPost($email,$tfid){
        $tfid = preg_replace("/[^0-9]/", "", $tfid);
        $participant = Participant::where('email',$email)->where('id',$tfid)->first();
        if($participant===null) return "Does Not Exist!";
        $event = $participant->events()->get();
        foreach($event as $e){
            $e->team = $participant->team($e)->first();
            $k = DB::table('event_participant')->where(['event_id'=>$e->id,'is_leader'=>1,'team_id'=>$e->team->id])->first()->zonal;
            if($k==='Balnglore') $k="Bengaluru";
            $e->region = $k;
            $e->cards = $e->tickets()->get();
        }
        return ['res'=>"success",'des'=>$participant,'events'=>$event];
    }
    public function apiGetDetailsPost($id){
            $participant = Participant::whereId($id)->first();
            $event = $participant->events()->get();
            $certi = $participant->certificates()->count();
            foreach($event as $e){
                $e->team = $participant->team($e)->first();
                $k = DB::table('event_participant')->where(['event_id'=>$e->id,'is_leader'=>1,'team_id'=>$e->team->id])->first()->zonal;
                if($k==='Balnglore') $k="Bengaluru";
                $e->region = $k;
                $e->cards = $e->tickets()->get();
            }
            return ['participant'=>$participant,'events'=>$event,'certi'=>$certi,'admin'=>session()->has('admin')];
    }
    public function apiGetParticipant($id){
        return Participant::where('id',$id)->first();
    }
    public function qrGen($id){
        return Image::make(QrCode::size(5000)->format('png')->margin(0)->errorCorrection('H')->generate($id))->resize(350,350)->response('png');
    }
    public function apiGetStatusPost($id){
        if(Participant::whereId($id)->first()->phone===null) return "New";
        else return "Exists";
    }
    //
}
