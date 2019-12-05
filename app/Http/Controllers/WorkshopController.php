<?php

namespace App\Http\Controllers;

use App\Event;
use App\Participant;
use App\Teams;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Mail;

class WorkshopController extends Controller
{
    public function Get(){
        return Event::where('category','Workshop')->orderBy('order_by')->get();
    }
    public function getStatusPost($id){
        if(!session()->has('participant')) return 'unknown';
        $e = DB::table('event_participant')->where(['event_id'=>$id,'participant_id'=>session()->get('participant')->id])->first();
        if(!$e) return "known";
        else if($e->is_leader===1) return "leader";
        else return "member";
    }
    public function getTeamPost(Event $event){
        return (new Participant())->current()->team($event);
    }
    public function registerPost(Request $r){
        $count = $r->count;
        $participants = $r->participant;
        $insertedParticipants = [];
        for($x=0;$x<$count;$x+=1){
            $participant = $participants[$x];
            if(Participant::where('email',$participant['email'])->count()===0){
                $p = new Participant();
                $p->name = $participant['name'];
                $p->email = $participant['email'];
                $p->phone = $participant['phone'];
                $p->country = $participant['country'];
                $p->college = $participant['college'];
                $p->dob = Carbon::parse($participant['dob']);
                $p->pin = $participant['pin'];
                $p->address = $participant['address'];
                $p->gender = $participant['gender'];
                $p->save();
            }
            $insertedParticipants[] = Participant::whereEmail($participant['email'])->first();
        }
        $event = Event::whereId($r->event)->first();
        if($event->category!=='Workshop' && $event->category!=='WorkshopD' && !session()->has('admin')) return "Sorry, this is not a valid workshop";
        else if($count>$event->participants) return "More members than the allowed number";
        $teamId = Teams::insertGetId(['leader_id'=>$insertedParticipants[0]->id]);
        for($x=0;$x<$count;$x+=1){
            $participant = $insertedParticipants[$x];
            Mail::send('admin.mail.workshop',['participant'=>$participant,'event'=>$event,'teamId'=>$teamId],function($message) use ($participant){
                $message->from('register@techfest.org','Techfest-NoReply');
                $message->to($participant->email);
                $message->subject("User registration successful");
            });
            DB::table('event_participant')->insert(['event_id'=>$event->id,'participant_id'=>$participant->id,'team_id'=>$teamId,'is_leader'=>$x===0]);
        }
        return ["success"=>true,'id'=>$teamId];
    }
    public function workshopTransfer(){
        $teams = DB::table('event_participant')->where('event_id',51)->pluck('team_id');
        $ts = Teams::whereIn('id',$teams)->whereNull('ticket_id')->get();
        foreach($ts as $t){
            DB::table('event_participant')->where(['participant_id'=>$t->leader_id,'team_id'=>$t->id])->update(['event_id'=>84]);
        }
    }
}
