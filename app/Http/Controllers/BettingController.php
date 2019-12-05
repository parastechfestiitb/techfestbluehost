<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BettingController extends Controller
{
    public function file_get_contents_curl($url) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }
    public function loginFB(Request $req){
        $client_id = '1952356715083062';
        $client_pw = '16f652adc8c9bdca983fad3095bf63ba';
        $uri = urlencode('http://lololand.com/');
        $requestURL = "https://graph.facebook.com/oauth/access_token?grant_type=fb_exchange_token&client_id={$client_id}&client_secret={$client_pw}&fb_exchange_token={$req->accessToken}";
        $k = json_decode($this->file_get_contents_curl($requestURL));
        session(['accessToken'=>$k->access_token]);
        $requestURL = "https://graph.facebook.com/me?access_token={$k->access_token}&redirect_uri={$uri}&fields=id,name";
        $k = json_decode($this->file_get_contents_curl($requestURL));
        if(DB::table('betting_users_17')->where(['email'=>$k->id])->count()==0){
            DB::table('betting_users_17')->insert(['name'=>$k->name,'email'=>$k->id,'amount'=>200]);
            session(['email'=>$k->id]);
        }
        session(['email'=>$k->id]);
        return 'true';
    }
    public function home(){
        $data = [];
        $admin = DB::table('betting_admin')->first();
        $data['count'] = $admin->count;
        $data['isBettingGoing'] = $admin->status;
        $data['bot1'] = DB::table('betting_bots')->where(['id'=>$admin->bot1])->first();
        $data['bot2'] = DB::table('betting_bots')->where(['id'=>$admin->bot2])->first();
        $data['bot3'] = DB::table('betting_bots')->where(['id'=>$admin->bot3])->first();
        $data['top10'] = DB::table('betting_users_17')->orderBy('amount','DESC')->limit('5')->get();
        $data['user'] = DB::table('betting_users_17')->where(['email'=>session('email')])->first();
        $userBet = DB::table('betting_winning')->where(['email'=>session('email'),'status'=>true])->first();
        if($userBet!=NULL){
            $data['totalBet'] = $userBet->amount;
        }
        else $data['totalBet'] = 0;
        return view('betting.index',compact("data","userBet"));
    }
    public function faq(){
        $data = [];
        $admin = DB::table('betting_admin')->first();
        $data['count'] = $admin->count;
        $data['isBettingGoing'] = $admin->status;
        $data['bot1'] = DB::table('betting_bots')->where(['id'=>$admin->bot1])->first();
        $data['bot2'] = DB::table('betting_bots')->where(['id'=>$admin->bot2])->first();
        $data['bot3'] = DB::table('betting_bots')->where(['id'=>$admin->bot3])->first();
        $data['top10'] = DB::table('betting_users_17')->orderBy('amount','DESC')->limit('5')->get();
        $data['user'] = DB::table('betting_users_17')->where(['email'=>session('email')])->first();
        $userBet = DB::table('betting_winning')->where(['email'=>session('email'),'status'=>true])->first();
        if($userBet!=NULL){
            $data['totalBet'] = $userBet->amount;
        }
        else $data['totalBet'] = 0;
        return view('betting.faq',compact("data","userBet"));
    }
    public function makeUser(Request $req){
        DB::table('betting_users_17')->insert(['email'=>$req->email,'name'=>$req->name,'amount'=>$req->amount]);
        return redirect()->route('admin');
    }
    public function lgnusr(Request $req){
        session(['email'=>$req->email]);
        return redirect()->route('admin');
    }
    public function lgtusr(){
        session()->forget('email');
        return redirect()->route('admin');
    }
    public function winning(Request $req){
        $youCantBet = false;
        if($req->amount<0 || $req->amount > DB::table('betting_users_17')->where('email',session('email'))->first()->amount) return "Betting improper, you will be banned :/";
        if(DB::table('betting_admin')->first()->status === 0) return redirect()->route('home')->with($youCantBet);
        DB::table('betting_users_17')->where('email',session('email'))->decrement('amount',$req->amount);
        if(DB::table('betting_winning')->where(['status'=>true,'email'=>session('email')])->count()) {
            DB::table('betting_winning')->where(['status' => true, 'email' => session('email')])->increment('amount', $req->amount);
        }
        else
            DB::table('betting_winning')->insert(['email'=>session('email'),'amount'=>$req->amount,'terms'=>$req->terms,'status'=>true]);
        return redirect()->route('home');
    }
    public function winningData(){
        $j = [0,0,0];
        $all = DB::table('betting_winning')->where('status',true)->get();
        foreach ($all as $a){
            $j[$a->terms] += $a->amount;
        }
        return $j;
    }
    public function updateWinners(Request $req){
        if($req->password !== '@ch00') return "Sorry something went wrong";
        $aa = DB::table('betting_admin')->first();
        $ab = "bot".$req->terms;
        $odd = DB::table('betting_bots')->where('id',$aa->{"bot".($req->terms+1)})->first()->ods;
        $k = DB::table('betting_winning')->where('status',true)->get();
        $l = DB::table('betting_winning')->where(['status'=>true,'terms'=>$req->terms])->sum('amount');
        $amnt = DB::table('betting_winning')->where(['status'=>true])->sum('amount');
        if($l===0) $l = 1;
        foreach($k as $n){
            if($n->terms == $req->terms){
                DB::table('betting_users_17')->where('email',$n->email)->increment('amount',ceil($odd*$amnt*$n->amount/$l)); //todo update this to the function
            }
            else{
                DB::table('betting_users_17')->where('email',$n->email)->increment('amount',ceil(DB::table('betting_winning')->where(['status'=>true,'email'=>$n->email])->first()->amount *0.8)); //todo update this to the function

            }
        }
        DB::table('betting_winning')->where('status',true)->update(['status'=>false]);
        return redirect()->route('bettingAdmin');
    }
    public function user(){
        $k = DB::table('betting_users_17')->where(['email'=>session('email')])->first();
        return $k;
    }
    public function updateInformations(){
        $bots = DB::table('betting_bots')->get();
        return view('betting.admin',compact("bots"));
    }
    public function updateInfo(Request $req){
        if($req->password === '@ch00'){
            $k = $req->toggle;
            if($k==="Start")    DB::table('betting_admin')->update(['status'=>true]);
            else if($k==="Stop")    DB::table('betting_admin')->update(['status'=>false]);
        }
        return redirect()->route('bettingAdmin');
    }

    public function updateInformationsSubmit(Request $req){
        $countUp = DB::table('betting_bots')->count()+1;
        $count = 0;
        for($x=1;$x<$countUp;$x++){
            $k = $req->{"bot{$x}"};
            if($k === "on"){
                $count++;
                if($count>3) return "Maximum botx exceded";
                DB::table('betting_admin')->update(["bot{$count}"=>$x]);
            }
        }
        DB::table('betting_admin')->update(['count'=>$count]);
        return redirect()->route('bettingAdmin');
    }
    public function major(Request $req){
        $topAll     = DB::table('betting_users_17')->orderBy('amount','DESC')->get();
        $topThis    = DB::table('betting_winning')->orderBy('amount','DESC')->get();
        $bot1       = DB::table('betting_winning')->where(['status'=>true,'terms'=>0])->sum('amount');
        $bot2       = DB::table('betting_winning')->where(['status'=>true,'terms'=>1])->sum('amount');
        $bot3       = DB::table('betting_winning')->where(['status'=>true,'terms'=>2])->sum('amount');
        return view('betting.major',compact('topAll','topThis','bot1','bot2','bot3'));
    }
    public function allUsers(){
        return ['users'=>DB::table('betting_users_17')->select('email','name')->get(),'bots'=>DB::table('betting_bots')->get()];
    }
    public function topAll(){
        $topAll     = DB::table('betting_users_17')->orderBy('amount','DESC')->get();
        return $topAll;
    }
    public function topThis(Request $r){
        $topThis1    = DB::table('betting_winning')->where(['terms'=>0,'status'=>true])->orderBy('amount','DESC')->limit('5')->get();
        $topThis2    = DB::table('betting_winning')->where(['terms'=>1,'status'=>true])->orderBy('amount','DESC')->limit('5')->get();
        $topThis3    = DB::table('betting_winning')->where(['terms'=>2,'status'=>true])->orderBy('amount','DESC')->limit('5')->get();
        return ['term0'=>$topThis1,'term1'=>$topThis2,'term2'=>$topThis3];
    }
    public function totalAmount(Request $r){
        $all = DB::table('betting_winning')->where(['status'=>true])->sum('amount');
        $b1  = DB::table('betting_winning')->where(['status'=>true,'terms'=>0])->sum('amount');
        $b2  = DB::table('betting_winning')->where(['status'=>true,'terms'=>1])->sum('amount');
        $b3  = DB::table('betting_winning')->where(['status'=>true,'terms'=>2])->sum('amount');
        $cnt = DB::table('betting_admin')->first();
        $res = ["all"=>$all,"b1"=>$b1,"b2"=>$b2,"b3"=>$b3,"admin"=>$cnt];
        return $res;
    }
    public function ajax(){
        $app = DB::table('betting_winning')->first();
        $md5 = md5(serialize($app));
        return $md5;
    }
}
