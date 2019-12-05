<?php

namespace App\Http\Controllers;

use App\Ca;
use App\Event;
use App\Participant;
use App\Teams;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Oauth2;
use Illuminate\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CaController extends Controller
{
    //takes request with optional code to see if google login is present
    public function google_auth(Request $request){
        $client = new Google_Client();
        $client->setApplicationName('All Auths');
        $client->setClientId('218886856483-4lnh6s9mvguid18098antfdltvosd7ln.apps.googleusercontent.com');
        $client->setClientSecret('3U0LIJc7Iq_EYmPex07c7X7m');
        $client->setRedirectUri($request->root());
        $client->setScopes(array(
            'https://www.googleapis.com/auth/plus.me',
            'https://www.googleapis.com/auth/userinfo.email',
            'https://www.googleapis.com/auth/userinfo.profile',
        ));
//        return $request;
        if (session()->has('google_token') && session('google_token'))
            $client->setAccessToken(session('google_token'));

        else if (isset($request->code)) {
            $client->authenticate($request->code);

            $client->setAccessType("offline");
            $access_token = $client->getAccessToken();
            session(['google_token'=>$access_token]);
        }
//        return $client;
//        return $client->getAccessToken();
        if($client->getAccessToken())
            return $client;
        else return false;
    }

    public function indexPost(Request $request){
        if(!isset($request->code) && !session()->has('user')) return view('thunder.ca.caGet2');
        $client = $this->google_auth($request);

        if ($client) {
            $oauth2 = new Google_Service_Oauth2($client);
            $userInfo = $oauth2->userinfo->get();
            $user = User::where('email',$userInfo->email)->first();
            if(!$user){
                $user = new User();
                $user->email = $userInfo->email;
                if(isset($userInfo->name)) $user->name = $userInfo->name;
                $user->save();
            }       //If user does not exist, save him and ask for his profile update
            session(['user'=>$user]);
            if(Ca::where(['user_id'=>$user->id])->count()) {
                $cas = DB::table('ca_reg')->whereNotNull('points')->orderBy('points','DESC')->get(); //todo rank update
                $id = session()->get('user')->id;
                $rank = 0;
                foreach($cas as $k=>$ca){
                    if($ca->user_id === $id){
                        $rank = $k+1;
                        break;
                    }
                }
                if($rank===0) $rank = "No Rank Yet";
                $ca = Ca::where(['user_id'=>$user->id])->first();
                return view('ca.dashboardGet', compact('user', 'userInfo','rank','ca'));
            }
            else{
                return view('ca.profileGet',compact('user','request')); //Registration CLosed
            }

        }
        return view('caGet');
    }

    //Function to update profile of User
    public function profilePost(Request $request){
//        return "Sorry, you can not register now";
        $request->flash();
        $request->validate([
            'dob'=>'required|date',
            'gender'=>'required|in:male,female,others',
            'address'=>'required|string',
            'college'=>'required|string',
            'semester'=>'required|in:1,2,3,4,other',
            'pin'=>'required|integer|digits:6',
            'phone'=>'required|integer|digits:10'
//            'facebookid'=>'required'
        ],[
            'dob.date'=>'Invalid Date of Birth',
            'dob.required'=>'Date of birth is a required field',
            'phone.required'=>'Phone number is a required field',
            'address.required'=>'Address is a required field',
            'college.required'=>'College name is a required field',
            'semester.required'=>'Year is a required field',
            'gender.required'=>'Gender is a required field',
            'pin.required'=>'Pincode is a required field',
            'phone.digits'=>'Enter a valid 10 digits phone number',
            'college.string'=>'Format of college is invalid',
            'pin.digits'=>'Enter a valid 6-digit pincode',
            'facebookid.required'=>'Facebook id is a required field'
        ]);
        if(!Ca::where('user_id',session()->get('user')->id)->count())
            Ca::insert([
                'phone'=>$request->phone,
                'pin'=>$request->pin,
                'college'=>$request->college,
                'address'=>$request->address,
                'semester'=>$request->semester,
                'dob'=>Carbon::parse($request->dob),
                'gender'=>$request->gender,
                'user_id'=>session()->get('user')->id,
                'facebookid'=>$request->facebookid
            ]);
        else abort(200,'Already Registered');
        return redirect()->route('ca.Get');
    }
    public function uploadPost(Request $request){
        $request->validate([
            'file_name'=>'required'
        ]);
        $file = Storage::put('ca',$request->file);
        DB::table('ca_uploads')->insert(['user_id'=>session()->get('user')->id,'file'=>$file,'category'=>$request->file_name]);
        return abort(200,'true');
    }
    public function logoutGet(){
        session()->flush();
        return redirect()->route('ca.Get');
    }
    public function referralPost(Request $r){
        $participant = Participant::where('email',$r->email)->first()->id;
        $teamId = end(explode('-',$r->team));
        $teamId  = (int) preg_replace('/[^0-9]/', '', $r->team);
        $teamId = $teamId%1000000;
        if(Teams::whereId($teamId)->whereNotNull('ticket_id')->count()===0) return view("ca.error")->with(['error' => 'Sorry no such team exists']);
        $caid = $r->caid;
        $allowed = ['Workshop','WorkshopD','Workshop1','TWMUNdelegates','Summit'];
        if(DB::table('event_participant')->where(['team_id'=>$teamId,'participant_id'=>$participant])->count()){
            $eid = DB::table('event_participant')->where(['team_id'=>$teamId,'participant_id'=>$participant])->first()->event_id;
            if(in_array(Event::whereId($eid)->first()->category,$allowed) && DB::table('referals')->where('team',$teamId)->count()===0){
                DB::table('referals')->insert(['team'=>$teamId,'ca'=>$caid]);
                Ca::where('user_id',DB::table('users')->where('email',$caid)->first()->id)->increment('points',5);
                return view("ca.error")->with(['error' => "Points Added"]); //Points added to your profile
            }
            else return view("ca.error")->with(['error' => 'Sorry, the referral is not valid for this team']);
        };
        return view("ca.error")->with(['error' => 'leader\'s email does not match']);
    }
}


