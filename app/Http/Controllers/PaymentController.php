<?php

namespace App\Http\Controllers;

use anlutro\cURL\cURL;

use App\Event;
use App\Participant;
use App\Teams;
use App\Ticket;
use DB;
use Image;
use Response;

use Illuminate\Http\Request;
use Cookie;

class PaymentController extends Controller
{
    //General Functions
    public function auth(){ //Create session with collegefever
        $curl = new cURL();
        $response = $curl->jsonPost('https://www.thecollegefever.com/v1/auth/basiclogin',['email'=>'vaibhawofficial@gmail.com','password'=>'techfest!8@tcfXiVS129']);
        session(['payment-data'=>json_decode($response->body)]);
        return true;
    }
    public function participantTeams($id){
        DB::table('event_participant')->where(['participant_id'=>$id])->get();
    }
    public function test(){
        $p = Participant::where('email','vaibhawofficial@gmail.com')->first();
        $p->teams()->update(['ticket_id'=>null]);
    }
    public function testPost(Request $r){
        session(['testing'=>$r->all()]);
        dd(session()->get('testing'));
    }

    public function getRelations(){
        $participant = (new Participant)->current();
        $teams = $participant->teams()->get();
        $events = [];
        foreach($teams as $team){
            $events[] = $team->details();
        }

        return $events;
    }

    public function exceptions(){

    }
    public function getLinkPost(Request $r){
        $event = Event::whereId($r->event)->first();
        $ticket = Ticket::whereid($r->ticket)->first();
        $special = null;
        if($ticket->special!==null) {
            if ((int)$r->special < $ticket->special) return "Invalid Request";
            else {
                $special = (int)$r->special;
                $ticket->amount = $ticket->amount * $special;
            }
        }
        $this->auth();
        $cat = $event->category==='Workshop'?'Workshop':'TWMUN';

        $auth = session()->get('payment-data')->sessionId;
        $participant = Participant::whereId(session()->get('participant')->id)->first();
        $extraInfo = "$event->id||$ticket->id||$participant->id";
        $hash = hash('sha256',($participant->email . $extraInfo.'L=?L5+zR(rJUV+g{aJeP5:x_[_]e;J'));
        if($ticket->special!==null)
            $extraInfoValue = "\"$extraInfo||||$hash||||$participant->email||||$special\"";
        else
            $extraInfoValue = "\"$extraInfo||||$hash||||$participant->email\"";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.thecollegefever.com/v1/booking/bookticket",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"eventId\":3978,\"totalFare\":$ticket->amount,\"addExtra\":0,\"attendingEvents\":[{\"programId\":8567,\"programName\":\"Techfest 2018-19 | IIT Bombay\",\"subProgramName\":\"TWMUN\",\"fare\":$ticket->amount,\"attendees\":[{\"name\":\"$participant->name\",\"email\":\"$participant->email\",\"phone\":\"$participant->phone\",\"college\":\"$participant->college\",\"sex\":\"MALE\",\"extraInfoValue\":$extraInfoValue}]}]}",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                "Content-Type: application/json",
                "Postman-Token: 57522174-3080-4e32-9b9b-e4669c2e89ae",
                "Cookie: auth=$auth"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($err) {
            return ['error'=>$err];
        } else {
            return $response;
        }
    }
    public function accomodationPayment($extraInfoValue){
        $vals = explode('shirts',$extraInfoValue[0]);
        $shirts = explode('||',$vals[1]);
        $participants = explode('||',$vals[0]);
        foreach($participants as $p){
            DB::table('participants')->whereId($p)->update(['accomodation'=>1]);
        }
        foreach ($shirts as $p) {
            $k = explode("::",$p);
            DB::table('participants')->whereId($k[0])->update(['shirt'=>$k[1]]);
        }
        return "success";
    }
    public function workshopPayment($vals,$request){
        $team = Teams::whereId($vals[2])->first();
        $ticket = Ticket::whereId($vals[1])->first();
        $team->update(['ticket_id'=>$ticket->id,'token'=>$request->trxn_id]);
        return "success";
    }
    public function paymentTcfPost(Request $r){
        $resp = json_encode($r->all());
        DB::table('payment_log')->insert(['value'=>$resp]);
        $request = $r;
        $extraInfoValue = explode('||||',$request->token_id);
        if($extraInfoValue[1] !== hash('sha256',($extraInfoValue[2] . $extraInfoValue[0] .'L=?L5+zR(rJUV+g{aJeP5:x_[_]e;J'))) {
            DB::table('payment_log')->insert(['value'=>"Invalid Auth"]);
            return "Invalid Auth";
        }
        if($request->subProgramName==='Accomodation' || $request->subProgramName==='Accommodation') return $this->accomodationPayment($extraInfoValue);
        $vals = explode('||',$extraInfoValue[0]);
        foreach($vals as $k=>$v){
            $vals[$k] = (int)$v;
        }
        $event = Event::whereId($vals[0])->first();
        if($event->category==='Workshop'||$event->category==='Workshop1' || $event->category==='WorkshopD' || $event->category==='Robowars') return $this->workshopPayment($vals,$request);
        $ticket = Ticket::whereId($vals[1])->first();
        if(!in_array($ticket->id,$event->tickets()->get()->pluck('id')->toArray())) {
            DB::table('payment_log')->insert(['value'=>"Sorry, no such ticket exists"]);
            return "Sorry, no such ticket exists";
        }
        if($ticket->special!==null){
            if(!isset($extraInfoValue[3]) || (int)$extraInfoValue[3]<$ticket->special) {
                DB::table('payment_log')->insert(['value'=>"Sorry, not a valid request, please contact us at payment@techfest.org"]);
                return "Sorry, not a valid request, please contact us at payment@techfest.org";
            }
            else $ticket->amount = ((int)$extraInfoValue[3])*$ticket->amount;
        }
        $participant = Participant::whereId($vals[2])->first();
        $members = $participant->first()->members($event);

        if($ticket->special!==null){
            $participant->team($event)->update(['ticket_id'=>$ticket->id,'token'=>$request->trxn_id,'special'=>$extraInfoValue[3]]);
        }
        else $participant->team($event)->update(['ticket_id'=>$ticket->id,'token'=>$request->trxn_id]);
        forEach($members as $member)
            DB::table('event_participant')->where(['event_id' => $event->id, 'participant_id' => $member->id])->update(['payment' => 1]);
        DB::table('payment_log')->insert(['value'=>json_encode($request->all())]);
        return "success";
    }
    public function statusPost(Request $r){
        return Participant::whereId(session()->get('participant')->id)->first()->team(Event::whereId($r->event)->first())->get()[0]->ticket_id===null?'Not Payed':'success';
    }
    public function sessionCreate(){
        $participant = Participant::where('email','vaibhawtest@gmail.com')->first();
        session(['participant'=>$participant]);
        return redirect('https://techfest.org/payment');
    }
    public function getMembersPost(){
        $participant = (new Participant())->current();
        $teams = $participant->teams()->get();
        $events = [];
        foreach($teams as $team)
            $events[] = $team->details();
        return $events;
    }
    public function getTeamMembersPost(Request $r){
        if(isset($r->participant))
            return ["participants"=>[Participant::whereId($r->participant)->first()]];
        $teams = [Teams::whereId(($r->teamId%1000000))->first()];
        $events = [];
        foreach($teams as $team)
        {
            if(isset($team))
            $events[] = $team->details();
        }
        if($events[0]->category==='Workshop' || $events[0]->category==='Workshop1' || $events[0]->category==='TWMUNdelegates' || $events[0]->category==='WorkshopD' || $events[0]->category==='Robowars') {
            return $events;
        }
        else if($events[0]->category==='Competition' || $events[0]->category==='Competition1'){
            return $events;
        }
        else
            return ['error'=>"Please use your techfest id for registering for accommodation"];
    }

    public function accomodationGetLinkPost(Request $r){
//        if(session()->has('admin')) dd($r);
        $participants = $r->participants;
        $shirts= $r->shirts;
        $amount = 0;
        $extraInfo="";
        foreach($participants as $p) {
            $amount+=2100;
            $extraInfo.= ($p.'||');
        }
        $extraInfo.="shirts";
        foreach($shirts as $k=>$s) {
            $amount+=200;
            $extraInfo.=($k.'::'.$s."||");
        }
        $extraInfo.="shirtsOff";
        $description = json_encode(['shirts'=>$shirts,'participants'=>$participants]);
        if(session()->has('admin')) $amount = 1;
        $tid = DB::table('accomodation')->insertGetId(['description'=>$description,'title'=>'Accomodation','amount'=>$amount]);
        $ticket = DB::table('accomodation')->whereId($tid)->first();
        $this->auth();
        $cat = 'Accomodation';
        $auth = session()->get('payment-data')->sessionId;
        $participant = Participant::whereId($participants[0])->first();
        $hash = hash('sha256',($participant->email . $extraInfo.'L=?L5+zR(rJUV+g{aJeP5:x_[_]e;J'));
        $extraInfoValue = "\"$extraInfo||||$hash||||$participant->email\"";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.thecollegefever.com/v1/booking/bookticket",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"eventId\":4237,\"totalFare\":$ticket->amount,\"addExtra\":0,\"attendingEvents\":[{\"programId\":9375,\"programName\":\"Accommodation - Techfest IIT Bombay\",\"subProgramName\":\"Accommodation\",\"fare\":$ticket->amount,\"attendees\":[{\"name\":\"$participant->name\",\"email\":\"$participant->email\",\"phone\":\"$participant->phone\",\"college\":\"Test\",\"sex\":\"MALE\",\"extraInfoValue\":$extraInfoValue}]}]}",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                "Content-Type: application/json",
                "Postman-Token: 57522174-3080-4e32-9b9b-e4669c2e89ae",
                "Cookie: auth=$auth"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($err) {
            return ['error'=>$err];
        } else {
            return $response;
        }
    }
    public function directLinks($id){
        $teamId = (int) filter_var($id, FILTER_SANITIZE_NUMBER_INT);;
        $event = Teams::whereId($teamId)->first()->details();
        $events = Event::whereIn('category',['Workshop','Workshop1','WorkshopD'])->where(['payment_amount'=>null])->orWhere(['payment_amount'=>''])->pluck('id')->toArray();
        if(in_array($event->id,$events)) return abort(404,"Registrations are now closed");
        $ticket = $event->cards[0];
        $participant = $event->participants[0];
        $special = null;
        $this->auth();
        $cat = $event->category==='Workshop'?'Workshop':'TWMUN';
        $cat = $event->category==='Workshop1'?'Workshop':$cat;
        $cat = $event->category==='WorkshopD'?'Workshop':$cat;
        $cat = $event->category==='Summit'?'Workshop':$cat;
        $auth = session()->get('payment-data')->sessionId;
        $extraInfo = "$event->id||$ticket->id||$teamId";
        $hash = hash('sha256',($participant->email . $extraInfo.'L=?L5+zR(rJUV+g{aJeP5:x_[_]e;J'));
        if($ticket->special!==null)
            $extraInfoValue = "\"$extraInfo||||$hash||||$participant->email||||$special\"";
        else
            $extraInfoValue = "\"$extraInfo||||$hash||||$participant->email\"";
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://www.thecollegefever.com/v1/booking/bookticket",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\"eventId\":3978,\"totalFare\":$ticket->amount,\"addExtra\":0,\"attendingEvents\":[{\"programId\":8567,\"programName\":\"Techfest 2018-19 | IIT Bombay\",\"subProgramName\":\"$cat\",\"fare\":$ticket->amount,\"attendees\":[{\"name\":\"$participant->name\",\"email\":\"$participant->email\",\"phone\":\"$participant->phone\",\"college\":\"$participant->college\",\"sex\":\"MALE\",\"extraInfoValue\":$extraInfoValue}]}]}",
            CURLOPT_HTTPHEADER => array(
                "Cache-Control: no-cache",
                "Content-Type: application/json",
                "Postman-Token: 57522174-3080-4e32-9b9b-e4669c2e89ae",
                "Cookie: auth=$auth"
            ),
        ));
        $eventArr = [];
        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        if ($err) {
            return ['error'=>$err];
        } else {
            return redirect(json_decode($response)->pgUrl);
        }
    }

    //disaster me kam aye the ye niche wale functions :P (just for memories)
    public function updatePayments2(Request $r){
        $d = DB::table('payment_log')->where('value','LIKE','%"token_id":"46||%')->count();
        return $d;
    }
    public function updatePayments(Request $r){
        $d = DB::table('payment_log')->where('value','!=','[]')->where('created_at','LIKE','%10-'.$r->e.'%')->where('value','LIKE','%programName%')->where('value','LIKE','%Workshop%')->get();
        $tickets = [];
        foreach ($d as $dd){
            $request = json_decode($dd->value);
            $extraInfoValue = explode('||||',$request->token_id);
            $eli = $extraInfoValue[2];
            if($extraInfoValue[1] !== hash('sha256',($extraInfoValue[2] . $extraInfoValue[0] .'L=?L5+zR(rJUV+g{aJeP5:x_[_]e;J'))) continue;
            $ticket = explode('||',$request->token_id);
            $eventId = $ticket[0];
            $ticketId = $ticket[1];
            if(DB::table('event_ticket')->where(['event_id'=>$eventId,'ticket_id'=>$ticketId])->count()===0) return "Ops";
            $participantId = $ticket[2];
            if(DB::table('event_participant')->where(['team_id'=>$participantId,'event_id'=>$eventId])->count()===0) {
                return "Ops";
            }
            else if(Participant::whereId(Teams::whereId($participantId)->leader_id)->first()->email !== $eli){
                return "Bara Ops";
            }
            continue;
            DB::table('teams')->whereId($participantId)->update(['ticket_id'=>$ticketId,'token'=>$request->trxn_id]);
        }
        return "abhi k liye sorted";
    }
    public function getTeams($k){
        return Response::json(Teams::whereId($k)->first()->details());
    }
    public function addPayment(){
        $cur = url()->current();
        $csrf = csrf_field();
        return "<html><body><form action='$cur' method='POST'>$csrf <textarea  style='height: 80vh;width: 90vw;' name='test'></textarea><input type='submit'></form></body></html>";
    }
    public function postPayment(Request $requ){
        $k = preg_split('/\r\n|[\r\n]/', $requ->test);
        $tem = [];
        foreach($k as $r){
            $resp = $r;
            DB::table('payment_log')->insert(['value'=>$resp]);
            $request = json_decode($r);
            $extraInfoValue = explode('||||',$request->token_id);
            if($extraInfoValue[1] !== hash('sha256',($extraInfoValue[2] . $extraInfoValue[0] .'L=?L5+zR(rJUV+g{aJeP5:x_[_]e;J'))) {
                DB::table('payment_log')->insert(['value'=>"Invalid Auth"]);
                return "Invalid Auth";
            }
            if($request->subProgramName==='Accomodation' || $request->subProgramName==='Accommodation') echo $this->accomodationPayment($extraInfoValue);
            $vals = explode('||',$extraInfoValue[0]);
            foreach($vals as $k=>$v){
                $vals[$k] = (int)$v;
            }
            $event = Event::whereId($vals[0])->first();
            if($event->category==='Workshop'||$event->category==='Workshop1' || $event->category==='WorkshopD' || $event->category==='Robowars') echo $this->workshopPayment($vals,$request);
            echo "<BR>";
        }
        return $tem;
    }
    public function adminDebug(){
        return Participant::whereIn('id',DB::table('event_participant')->whereNotNull('zonal')->pluck('participant_id'))->get();
        $d = DB::table('payment_log')->where('value','LIKE','%accomm%')->get();
        echo "<style>*{white-space:nowrap;}</style>";
        foreach($d as $do) {
            $l = json_decode($do->value);
            echo $do->value."<BR><BR>";
            continue;
            $request = $l;
            $extraInfoValue = explode('||||', $request->token_id);
            if ($extraInfoValue[1] !== hash('sha256', ($extraInfoValue[2] . $extraInfoValue[0] . 'L=?L5+zR(rJUV+g{aJeP5:x_[_]e;J'))) {
                return "Invalid Auth";
            }
            if ($request->subProgramName === 'Accomodation' || $request->subProgramName === 'Accommodation') $this->accomodationPayment($extraInfoValue);
        }
    }
    public function refunded(Request $r){
        $data = DB::table('payment_log')->where('value','LIKE','%programName%')->where('value','LIKE','%Workshop%')->get();
        $c = [];
        $conf = 0;
        $pCs = [];
        $tCs = 0;
        foreach($data as $d){
            $j = json_decode($d->value);
            $l = $j->token_id;
            $x = explode('||||',$l);
            $email = $x[2];
            $details = explode('||',$x[0]);
            $event = $details[0];
            $ticket = $details[1];
            $pOrT = $details[2];
            $pC = DB::table('event_participant')->where(['event_id'=>$event,'participant_id'=>$pOrT])->count() ;
            $tC = DB::table('event_participant')->where(['event_id'=>$event,'team_id'=>$pOrT,'is_leader'=>1])->count() ;
            if($pC===1 && $tC === 1) $conf+=1;
            else if($pC===1) continue;//Teams::whereId(DB::table('event_participant')->where(['event_id'=>$event,'participant_id'=>$pOrT])->pluck('team_id'))->update(['ticket_id'=>$ticket,'token'=>$j->ticket_id]);
            else if($tC===1) continue;//Teams::whereId(DB::table('event_participant')->where(['event_id'=>$event,'team_id'=>$pOrT])->pluck('team_id'))->update(['ticket_id'=>$ticket,'token'=>$j->ticket_id]);
            else if($pC>1 && $tC>1) return "Bara Ops";
            else if($pC>1) {
                $tIds = DB::table('event_participant')->where(['event_id'=>$event,'participant_id'=>$pOrT])->first()->team_id;
                $count = Teams::where(['id'=>$tIds,'token'=>null])->count();
                if($count===0) dd('ok',Teams::where(['id'=>$tIds,'token'=>null])->get(),$tIds,$event,$pOrT);
                else if($count===1) continue;
                else if($count>1) return "WTF";
            }
            else if($tC>1) $tCs+=1;
            else continue;
        }
        return dd($pCs,$tCs,$conf);
    }
    public function paidTeams(){
        $ref = "T4GVRFU,VRVC2FC,QJAJRVP,2TJK4TR,T8RCCYG,DHJNEXS,XZNNFFG,DCRXA8U,X9JVXP7,K6GZ26Y,8V6Z479,VFCSENS,ZA8MUNA,SU75MV9,2E56CKN,EFT2DXA,YGRM5GC,AFMB5JP,GPNTPHF,QSMY6B6,BMPUBNB,7XHX5MD,Y56PJFA,E5T2DXA,Y929ETC,3G9Z9Z6,AXDP4FE,4CJBMF6,82RCMDB,E5T2DXA,P9A2TCG,82RCMDB,MPJHUNR,E2B8RCB,66EAJCZ,4QH5Z2E,5PP5BPB,FJVNBD9,SXYM2D3,649FZEC,66EAJCZ,J2JMC7M,Y4EUQSM,JK7MMYQ,C3P5NFQ,RNKJMJ4,ZPHT7UR,JK7MMYQ,B2ZP5U7,7HJ27J8,PY8D2DR,P9A2TCG,KN5SZEE,S74BU5K,XCDCTSS,RKU4DCE,RNKJMJ4,YJ3DZUB,3SBRPAF,AMGVJHX,QM3N3Q9,QJ6G9DP,PXNKNXX,9MBMGAY,T8Y6C5V,BYVSDG6,Y2YCYEN,M3XGTHV,VMUMUSU,FU4NYZG,R7X4K83,UZUXVHS,PQ4YCQ6,YCSXUES,ECT94UK,FH7JXPJ,DHJNEXS,NRS3SDT,H64TTM9,3XF6UVN,9MHY8EB,N486MP7,XZHRJCY,AX49E69,V72F2TP,TDGKBZN,GT3V4NQ,XZHRJCY,3R6TNHQ,J888FZR,V72F2TP,AX49E69,TDGKBZN,GT3V4NQ,KZ6DNBA,Z5GXNHG,RCAP4JG,BGE9XP8,42P95NS,RCAP4JG,BGE9XP8,42P95NS,SNZCHCP,K4CZM3C,6XEYU68,T2ZKFEB,YSE8XRJ,NXXGAJX,P5CY8D6,H6UACCU,76Q6UCM";
        $arr = explode(',',$ref);
        foreach($arr as $item){
            $k = DB::table('payment_log')->where('value','LIKE','%programName":"Accommodation - Techfest%'.$item.'%')->first();
            echo "$k->value<br>";
        }
    }
    public function removeTicket(){
        $j = "9758,14155,9969,14092,7982,8149,3026,12467,16348,10865,8461,14431,13653,9981,14505,10013,14692,14431,9942,14692,12485,11110,14785,13525,7744,7627,7629,7795,14785,10034,10271,10271,16071,14751,9942,14256,146,7957,15443,18771,12294,14755,13550,17167,16397,19133,7577,18470,15539,16179,12126,13494,12383,12130,12156,13491,12119";
        $arr = explode(',',$j);
        foreach($arr as $item){
            $k = DB::table('teams')->whereId($item)->first();
            if($k->ticket_id!==null){
                echo $k->id;
                DB::table('teams')->whereId($item)->update(['ticket_id'=>null,'token'=>null]);
            }
            else echo "not found";
            echo "<BR>";
        }
    }

    //{"programName":"Techfest 2018-19 | IIT Bombay","subProgramName":"TWMUN","fare":1750,"trxn_id":"B6J6Q2U","status":"BOOKED","ticket_id":"B6J6Q2U","token_id":"43||2||6419||||a0c976499644a3a0c0295941ec3edc103c4974303b613a3527ab3902a6aa53cc||||aadya013@gmail.com"}
}
