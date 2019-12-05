<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\Participant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Schema;
use DB;
use App\Teams;

class DatabaseController extends Controller
{
    public function checkAccess($table){
        $item = DB::table('tables')->where('table_name',$table)->first();
        return in_array(session()->get('admin')->id,explode(',',$item->admins));
    }
    public function checkEventAccess($event){
        $item = DB::table('admin_event')->where('event_name',$event)->first();
        return in_array(session()->get('admin')->id,explode(',',$item->admins));
    }
    public function tablePost(Request $r){
        $table = $r->table;
        if(!$this->checkAccess($table)) return abort(403);
        $table = $r->table;
        $columns = Schema::getColumnListing($table);
        $data = DB::table($table)->get();
        return ['columns'=>$columns,'data'=>$data];
    }

    public function eventGet(Request $r){
        $tables = DB::table('admin_event')->get();
        $db = [];
        $id = session()->get('admin')->id;
        foreach($tables as $table){
            $admins = explode(',',$table->admins);
            if(in_array($id,$admins)) $db[] = ['name'=>$table->event_name];
        }
        return $db;
    }
    public function eventPost(Request $r){
        ini_set('memory_limit', '-1');
        if(!$this->checkEventAccess($r->event)) return abort(403);
        $id = DB::table('admin_event')->where('event_name',$r->event)->first()->event_id;
        $teams = DB::table('event_participant')->where(['event_id'=>$id,'is_leader'=>1])->pluck('team_id');
        $events = [];
        foreach($teams as $t){
            if(Teams::whereId($t)->count())
            $events[] = Teams::whereId($t)->first()->details();
        }
        return $events;
    }
    public function paymentGet(){
        $p = Teams::select(['id','ticket_id'])->get();
        $event = [];
        foreach($p as $x){
            $e = DB::table('event_participant')->where(['team_id'=>$x->id])->first()->event_id;
            if(!$e) continue;
            if(!isset($event[$e])){
                $ev= Event::whereId($e)->first();
                $event[$e] = (object) ['name'=>$ev->name,'count'=>0,'payment'=>0,'category'=>$ev->category];
            }
            $event[$e]->count +=1;
            if($x->ticket_id!==null) $event[$e]->payment+=1;
        }
        return ['columns'=>['name','count','payment'],'data'=>(array) $event];
    }
    public function shiftWorkshop(){
        $oldEvent = 46;
        $newEvent = 83;
        $eps = DB::table('event_participant')->where('event_id',$oldEvent)->pluck('team_id');
        $notPaid = [];
        foreach($eps as $ep){
            if(Teams::whereId($ep)->whereNull('ticket_id')->count())
             $notPaid[] = Teams::whereId($ep)->whereNull('ticket_id')->first()->id;
        }
        foreach($notPaid as $tid){
            DB::table('event_participant')->where(['team_id'=>$tid])->update(['event_id'=>$newEvent]);
        }
        return "Succss";
    }
    public function accommodationGet(){
        $columns = Schema::getColumnListing('participants');
        $data = Participant::whereNotNull('accomodation')->get();
        return ['columns'=>$columns,'data'=>$data];
    }
    public function shirtsGet(){
        $data = Participant::whereNotNull('accomodation')->select('shirt',DB::raw('count(*) as total'))->groupBy('shirt')->get();
        return $data;
    }
    public function robowarsGet(){
        $rs = DB::table('robowars')->get();
        $data= [];
        foreach($rs as $r){
            $k = Teams::whereId($r->id)->first()->details();
            if(!$k) continue;
            $k->tname = $r->name;
            $k->achivement = $r->achivement;
            $data[] = $k;
        }

        return ["columns"=>["tname","name","email","country","phone","college","dob","pin","address","gender","name_changed","accomodation","shirt","created_at","updated_at"],'data'=>$data];
    }
    public function techx(){
        return Participant::whereNotNull('technoholix')->pluck('email')->toArray();
    }

}
