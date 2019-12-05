<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class MakeAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:make';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $admins = "1,13,4,5,6,41,8,9,10,11,12,15,18,53,19,20,21,22,23,24,25,26,30";
        $events = DB::table('events')->where('category','Workshop')->orWhere('category','WorkshopD')->orWhere('category','Workshop1')->get();
        foreach($events as $event){
            $l = $event->id;
            if(DB::table('admin_event')->where('event_id',$l)->count()!==0)
                DB::table('admin_event')->where('event_id',$l)->update(['event_name'=>$event->name,'event_id'=>$l,'admins'=>$admins]);
            else
                DB::table('admin_event')->insert(['event_name'=>$event->name,'event_id'=>$l,'admins'=>$admins]);
        }
    }
}
