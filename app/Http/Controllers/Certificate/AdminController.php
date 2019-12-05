<?php

namespace App\Http\Controllers\Certificate;

use App\Certificate;
use App\Participant;
use App\Teams;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Image;
use DB;
use Carbon\Carbon;
use QR;

class AdminController extends Controller
{
    public function generate(Certificate $certificate, Participant $participant){
        $i = DB::table('certificate_participant')->where(['certificate_id'=>$certificate->id,'participant_id'=>$participant->id])->first()->id;
        $cid = substr('000000'.$i,-6);
        $vl = 'https://techfest.org/certificate/verify/'.$cid.'/'.$participant->id;
        $qrT = QR::size(350)->format('png')->margin(0)->errorCorrection('H')->generate($vl );
        $image = Image::make(public_path('2018/Certificate/'.$certificate->image))->resize(3500,2475);
        $content = json_decode($certificate->description);
        $p = new \stdClass();
        foreach($content as $t){
            $p->font = "Play/play.ttf";//$t->font?$t->font:"Play/play.ttf";
            $p->x = $t->x?$t->x:0;
            $p->y = $t->y?$t->y:0;
            $p->size = $t->size?$t->size:60;
            $p->color = $t->color?$t->color:'#000000';
            $p->text = $t->text?$t->text:'';
            $image->text($p->text,$p->x,$p->y,function($a) use ($p) {
                $a->file(public_path('fonts/'.$p->font));
                $a->size($p->size);
                $a->color($p->color);
            });
        }
        $p->font = "Play/play.ttf";
        $p->x = 0;
        $p->y = 0;
        $p->size = 70;
        $p->color = '#000000';
        $image->text($participant->name,330,1135,function($a) use($p){
            $a->file(public_path('fonts/'.$p->font));
            $a->size($p->size);
            $a->color($p->color);
        });
        $p->size = 40;
        $image->text('CID-'.$cid,3000,60,function($a) use($p){
            $a->file(public_path('fonts/'.$p->font));
            $a->size($p->size);
            $a->color($p->color);
        });
        $qr = Image::make("$qrT");
        $qr->resize(250,250);
        $image->insert($qr,"top-right",260,80);
        return $image;
    }
    public function generateTF(Certificate $certificate, Participant $participant){
        $i = DB::table('certificate_participant')->where(['certificate_id'=>$certificate->id,'participant_id'=>$participant->id])->first()->id;
        $cid = substr('000000'.$i,-6);
        $vl = 'https://techfest.org/certificate/verify/'.$cid.'/'.$participant->id;
        $qrT = QR::size(350)->format('png')->margin(0)->errorCorrection('H')->generate($vl);
        $image = Image::make(public_path('2018/Certificate/'.$certificate->image))->resize(3500,2475);
        $content = json_decode($certificate->description);
        $p = new \stdClass();
        foreach($content as $t){
            $p->font = $t->font?$t->font:"Play/play.ttf";
            $p->x = $t->x?$t->x:0;
            $p->y = $t->y?$t->y:0;
            $p->size = $t->size?$t->size:60;
            $p->color = $t->color?$t->color:'#000000';
            $p->text = $t->text?$t->text:'';
            $image->text($p->text,$p->x,$p->y,function($a) use ($p) {
                $a->file(public_path('fonts/'.$p->font));
                $a->size($p->size);
                $a->color($p->color);
            });
        }
        $p->font = "Play/play.ttf";
        $p->x = 0;
        $p->y = 0;
        $p->size = 70;
        $p->color = '#000000';
        $image->text(ucwords(strtolower($participant->name)),1830,1155,function($a) use($p){
            $a->file(public_path('fonts/'.$p->font));
            $a->size($p->size);
            $a->color($p->color);
        });

        $p->size = 40;
        $qr = Image::make("$qrT");
        $qr->resize(250,250);
        $image->insert($qr,"bottom-right",60,80);
        return $image;
    }

    public function Get(){
        return view('admin.certificate.Get');
    }
    public function certificatesGet(){
        return Certificate::get();
    }
    public function certificatePost(Request $request){
        $certificate = Certificate::whereId($request->id)->first();
        $participant = Participant::whereEmail('vaibhawofficial@gmail.com')->first();
        return $this->generate($certificate,$participant)->resize(750,495)->response('data-url');
    }
    public function authenticatePost(Request $request){
        $tfIds = $request->tfIds;
        $teamIds = $request->teamIds;
        $certificate = Certificate::whereId($request->certificate)->first();
        $participants = Participant::whereIn('id',$tfIds)->get();
        foreach ($participants as $participant){
            if($participant->certificates()->where('certificate_id',$certificate->id)->count()===0)
                DB::table('certificate_participant')->insert(['participant_id'=>$participant->id,'certificate_id'=>$certificate->id]);
        }
        $teams = Teams::whereIn('id',$teamIds)->get();
        foreach($teams as $team){
            $p = DB::table('event_participant')->where('team_id',$team->id)->pluck('participant_id');
            foreach($p as $k=>$pid){
                $participant = Participant::whereId($pid)->first();
                if($participant->certificates()->where('certificate_id',$certificate->id)->count()===0)
                    DB::table('certificate_participant')->insert(['participant_id'=>$participant->id,'certificate_id'=>$certificate->id]);
            }
        }
        return "Done!";
    }
    public function nameInsertPost(Request $request){
        $names = $request->names;
        $certificate = Certificate::whereId($request->certificate)->first();
        $certificates = [];
        $ids = [];
        foreach($names as $name){
            $dob = Carbon::now();
            $participant= new Participant();
            $participant->name =$name;
            $participant->dob = $dob;
            $participant->save();
            $participant = Participant::where(['name'=>$name,'dob'=>$dob])->first();
            $ids[] = DB::table('certificate_participant')->insertGetId(['participant_id'=>$participant->id,'certificate_id'=>$certificate->id]);
        }
        return $ids;
    }

    public function GetNew(){
        return view('admin.certificate.newGet');
    }
    public function certificatesGetNew(){
        return Certificate::get();
    }
    public function certificatePostNew(Request $request){
        $certificate = Certificate::whereId($request->id)->first();
        $participant = Participant::whereEmail('vaibhawofficial@gmail.com')->first();
        return $this->generateTF($certificate,$participant)->resize(750,495)->response('data-url');
    }
    public function authenticatePostNew(Request $request){
        $tfIds = $request->tfIds;
        $teamIds = $request->teamIds;
        $certificate = Certificate::whereId($request->certificate)->first();
        $participants = Participant::whereIn('id',$tfIds)->get();
        foreach ($participants as $participant){
            if($participant->certificates()->where('certificate_id',$certificate->id)->count()===0)
                DB::table('certificate_participant')->insert(['participant_id'=>$participant->id,'certificate_id'=>$certificate->id]);
        }
        $teams = Teams::whereIn('id',$teamIds)->get();
        foreach($teams as $team){
            $p = DB::table('event_participant')->where('team_id',$team->id)->pluck('participant_id');
            foreach($p as $k=>$pid){
                $participant = Participant::whereId($pid)->first();
                if($participant->certificates()->where('certificate_id',$certificate->id)->count()===0)
                    DB::table('certificate_participant')->insert(['participant_id'=>$participant->id,'certificate_id'=>$certificate->id]);
            }
        }
        return "Done!";
    }
    public function nameInsertPostNew(Request $request){
        $names = $request->names;
        $certificate = Certificate::whereId($request->certificate)->first();
        $certificates = [];
        $ids = [];
        foreach($names as $name){
            $dob = Carbon::now();
            $participant= new Participant();
            $participant->name =$name;
            $participant->dob = $dob;
            $participant->save();
            $participant = Participant::where(['name'=>$name,'dob'=>$dob])->first();
            $ids[] = DB::table('certificate_participant')->insertGetId(['participant_id'=>$participant->id,'certificate_id'=>$certificate->id]);
        }
        return $ids;
    }
    public function test(){
        return $this->generate(Certificate::whereId(1)->first(),Participant::whereId(107)->first())->response('data-url');
    }

    public function generateId($id){
        $k = DB::table('certificate_participant')->whereId($id)->first();
        $certificate = Certificate::whereId($k->certificate_id)->first();
        $participant = Participant::whereId($k->participant_id)->first();
        header('Content-Type: image/png');
        return $this->generate($certificate,$participant)->encode('data-url');
    }
    public function generateIdNew($id){
        $k = DB::table('certificate_participant')->whereId($id)->first();
        $certificate = Certificate::whereId($k->certificate_id)->first();
        $participant = Participant::whereId($k->participant_id)->first();
        header('Content-Type: image/png');
        return $this->generateTF($certificate,$participant)->encode('data-url');
    }

}
