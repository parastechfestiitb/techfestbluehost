<?php

namespace App\Console\Commands;

use App\Event;
use App\Teams;
use Illuminate\Console\Command;
use DB;
use Illuminate\Support\Facades\Mail;

class MailWorkshop extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:workshops';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Daily sends today's participants count of workshops";

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $teams = Teams::pluck('id');
        $links = [];
        foreach($teams as $team)
            $links[] = DB::table('event_participant')->where('team_id',$team)->first()->event_id;
        $events = [];
        foreach($links as $link){
            if(isset($events[$link])) $events[$link]+=1;
            else $events[$link]=1;
        }
        $res = [];
        foreach($events as $e=>$c){
            $e = Event::whereId($e)->first();
            if($e->category==='Workshop')
                $res[$e->name] = $c;
        }
        Mail::send('admin.mail.teamMail',['res'=>$res],function($message) use ($res){
            $message->from('workshops@techfest.org','Workshop Updater');
            $message->to('vaibhawofficial@gmail.com');
            $message->subject("Workshop Registrations");
        });
    }
}
