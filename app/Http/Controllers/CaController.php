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
use test\Mockery\TraitWithAbstractMethod;

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
            'https://www.googleapis.com/auth/userinfo.profile',
        ));
        if (session()->has('google_token') && session('google_token'))
            $client->setAccessToken(session('google_token'));

        else if (isset($request->code)) {
            $client->authenticate($request->code);

            $client->setAccessType("offline");
            $access_token = $client->getAccessToken();
            session(['google_token'=>$access_token]);
        }
        if($client->getAccessToken())
            return $client;
        else return false;
    }

    public function indexPost(Request $request){
        if(!isset($request->code) && !session()->has('user')) return view('2019.ca.homepage');
        $client = $this->google_auth($request);
        if ($client) {
            $oauth2 = new Google_Service_Oauth2($client);
            $userInfo = $oauth2->userinfo->get();
            $user = DB::table('ca_reg')->where(['email'=>$userInfo->email])->first();
            session(['user'=>$user]);  //todo session started
            if(!$user){
                DB::table('ca_reg')->insert(['email'=>$userInfo->email, 'name'=>$userInfo->name, 'picture'=>$userInfo->picture, 'no_of_login'=>'1']);
            }
            if($user){
                DB::table('ca_reg')->where(['email'=>$user->email])->update(['picture'=>$userInfo->picture]);
                $user_row = DB::table('ca_reg')->where(['email'=>session()->get('user')->email])->first();// return the first row containing the user(session wala user)
                $no_of_login1 = $user_row->no_of_login;  // counts number of login of the user
                $no_of_login1 = $no_of_login1 +1;
                DB::table('ca_reg')->where(['email'=>session()->get('user')->email])->update(['no_of_login'=>$no_of_login1]);
                DB::table('ca_reg_last_login')->insert(['email'=>session()->get('user')->email, 'name'=>$user_row->name]);
            }


            // welcome mail
            if($user->no_of_login < 2 ) {

                $subject = "Welcome to the Techfest College Ambassador Program 2019-20!";
                $txt = "Dear $user->name,

Welcome to the College Ambassador Programme of Asia's Largest Science and Technology Festival: Techfest, IIT Bombay!

This year's CA program has been specifically created keeping you: the CA, in mind. With plenty of exciting incentives and challenging tasks in store for you, we promise this journey shall be a fun one! To stay up to date with developments, follow us on Facebook, Instagram, and Twitter. Also, remember to check your dashboard for new notifications regularly as tasks shall be updated from time to time!
For any other queries or concerns, feel free to mail us at ca@techfest.org.
Once again, welcome to the Techfest, family. We are glad to have you and wish you the very best of luck in all future endeavors to come!
Dream on!";

                mail($userInfo->email, $subject, $txt, "From:Techfest@techfest.org" );
            }
            return redirect("https://techfest.org/dashboard/");
        }

//        mail($admin_email, "$subject", $comment, "From:" . $email);
        return "Your browser isn't supported, please use another browser";
//        return view('caGet');

    }

    //Function to update profile of User


    // ye registration wala page return kar raha bas with the filled value
    public function reg()
    {
        if(session()->has('user')) {
            $w = session()->get('user');
            $ca_data1 = DB::table('ca_reg')->where(['email' => session()->get('user')->email])->first();// return the first row containing the user(session wala user)

            return view('2019.ca.ca_reg')->with([
                'email123' => $w->email,
                'name123' => $w->name,


                // upadtetion ke liye prefilled form aaye\

                'number123' => $ca_data1->number,
                'college_name123' => $ca_data1->college,
                'year123' => $ca_data1->year,
                'address123' => $ca_data1->address,
                'pincode123' => $ca_data1->pincode,
                'refer123' =>$ca_data1->referred_by,
            ]);
        }
        else return redirect("https://techfest.org/ca/");

    }

    public function imgupload(Request $image_data ){

        if(session()->has('user')) {
            return view('2019.ca.img_upload');
        }
        else return redirect("https://techfest.org/ca/");
    }

// ye database me data insert kar raha bas(ise me use nahi kar raha)
    public function reg_form(Request $data)
    {
//        DB::table('event_participant')->where(['team_id'=>$tid])->update(['event_id'=>$newEvent]);
//        return "$data->number";
        $data->flash();
        $data->validate([

            //pass in the front end variable $error
            'address'=>'required|string',
            'college'=>'required|string',
            'pincode'=>'required|integer|digits:6',
            'number'=>'required|integer|digits:10'
        ],[

            'number.required'=>'Phone number is a required field',
            'address.required'=>'Address is a required field',
            'college.required'=>'College name is a required field',


            'pincode.required'=>'Pincode is a required field',
            'number.digits'=>'Enter a valid 10 digits phone number',
            'college.string'=>'Format of college is invalid',
            'pincode.digits'=>'Enter a valid 6-digit pincode',

        ]);

        DB::table('ca_reg')->insert([
//            'server wala var'=>$data->form wala var
//           'name'=>$data->name,
            'email'=>$data->email,
            'number'=>$data->number,
            'college'=>$data->college_name,
            'year'=>$data->year,
            'address'=>$data->address,
            'pincode'=>$data->pincode,
        ]);
        return redirect("https://techfest.org/ca/");
//        return view('2019.ca.dashboard')->with(["dname"=>$data->name, "demail"=>$data->email, "dpoints"=>$data->points]);
    }

    public function ca_data_update(Request $ca_reg_data){
        $no_of_update1 = session()->get('user')->no_of_update;  // counts number of update of the user
        $no_of_update1 = $no_of_update1 + 1;
        if($ca_reg_data->refer == session()->get('user')->email){
            $ca_reg_data->refer = "self refer";
        }
        DB::table('random')->insert(['abcd' =>$ca_reg_data->address, '1234'=> $ca_reg_data->number]);
        DB::table('ca_reg')->where(['email'=>session()->get('user')->email])->update([
            'number'    =>$ca_reg_data->number,
            'college'   =>$ca_reg_data->college_name,
            'year'  =>$ca_reg_data->year,
            'address'   =>$ca_reg_data->address,
            'pincode'   =>$ca_reg_data->pincode,
            'referred_by'=>$ca_reg_data->refer,
            'no_of_update'=>$no_of_update1,
        ]);

//        return "data update successful";
        return redirect("https://techfest.org/dashboard");
    }

    public function dashboard()
    {
        if(session()->has('user')) {
            $ca_data= DB::table('ca_reg')->get();
//            return view('2019.ca.dashboard')->with(['user'=>session()->get('user'), 'cas'=>$ca_data]);

            $user_row = DB::table('ca_reg')->where(['email'=>session()->get('user')->email])->first();// return the first row containing the user(session wala user)
            $ca_events_row = DB::table('ca_reg_events')->orderByDesc('id')->get(); //this return all the events rows(for ca)

//            $count = DB::table('ca_reg_uploads')->where(['email'=>session()->get('user')->email])->count();// count the number of rows of upload by same email(session wali) id

//            $points_system = DB::table('ca_reg')->whereNotNull('points')->orderBy('points','DESC')->get(); //ye sari rows dec order me return karta hai

            $total = DB::table('ca_reg_uploads')->where(['email'=>session()->get('user')->email])->sum('points');

            //referral system
            $ca = session()->get('user')->email; // get currest ca email id
            $refer_count = DB::table('ca_reg')->where(['referred_by'=>$ca])->count(); // count current ca number of referral

            DB::table('ca_reg')->where(['email'=>session()->get('user')->email])->update([
                'no_of_referral'=>$refer_count,
                'points'=>$total,
            ]);

            return view('2019.ca.dashboard')->with(['t'=>$user_row, 's'=>$ca_events_row]);
        }
        else return redirect("https://techfest.org/ca/");
    }


    public function ca_logout(){
        session()->flush();
        return redirect('/ca');
    }

    public function ca_image_upload(Request $request, $id){

        $request->validate([
            'file'=>'required',//file_Nmae is in front end
        ]); //todo theek kar isko
        $event = DB::table('ca_reg_events')->where(['id'=>$id])->first();

        if($event->end_date < Carbon::now()) return abort(404);

        $var=$event->points;
        $file = Storage::put('ca',$request->file);//ca naam ka folder apne aap ban jayega
        DB::table('ca_reg_uploads')->insert(['ca_id'=>session()->get('user')->ca_id,'file'=>$file,'email'=>session()->get('user')->email,'points'=>$var, 'event_id'=>$event->id]);

    }


    public function caevents(){
        if(session()->has('user')){
            $current_user = session()->get('user')->email;
            $admin = DB::table('admins')->where('email', '=', $current_user)->first();// row ko array bana ke return ki;
            if ($admin->email == $current_user) {
                $all_events = DB::table('ca_reg_events')->get();
                return view('2019.ca.admin')->with(['all_events'=>$all_events]);
            }
            else{return " you are not admin";}

        }else {
            return "sigh in to CA portsl first";
        }

    }

    public function adminca(Request $data){
        DB::table('ca_reg_events')->update([
            'task'=>$data->task,
            'info'=>$data->info,
            'end_date'=>$data->end_date,
            'points'=>$data->points,
            'facebook_link'=>$data->facebook_link,
            'insta_link'=>$data->insta_link,
        ]);
        return "success";
    }
//already integrated referral
//    public function referral(){
//        $ca = session()->get('user')->email;
//        $refer_count = DB::table('ca_reg')->where(['referred_by'=>$ca])->count();
//
//        DB::table('ca_reg')->where(['email'=>session()->get('user')->email])->update([
//            'no_of_referral'=>$refer_count,
//        ]);
//        return $refer_count;
//    }

    public function imageverify($email){

        if(session()->has('user')) {
            $current_user = session()->get('user')->email;
            $admin = DB::table('admins')->where('email', '=', $current_user)->first();// row ko array bana ke return ki;
            if ($admin->email == $current_user) {
                $images  = DB::table('ca_reg_uploads')->where(['email'=>$email])->limit(100)->get();
//                $images  = DB::table('ca_reg_uploads')->orderBy('email', 'DESC')->limit(100)->get();
//                $count = (int)(count($images));
                return view('2019.ca.imagegrid')->with(['images'=>$images]);
            }
            else{return " you are not admin";}
        }
        else return "sign in to ca portal first";
    }

    public function deleteImage($path) {
        Storage::Delete($path);
    }
    public function mail(Request $data, $event_id, $email  ){
        $subject = "penalty";
        $txt = "Dear Paras, penalty";

        mail($email, $subject, $txt, "From:Techfest@techfest.org" );
        return view('2019.ca.imagegrid');
    }

    public function cadata(){
        if(session()->has('user')) {
            $current_user = session()->get('user')->email;
            $admin = DB::table('admins')->where('email', '=', $current_user)->first();// row ko array bana ke return ki;
            if ($admin->email == $current_user) {
                $total_reg = DB::table('ca_reg')->count();
                $ca_data = DB::table('ca_reg')->orderByDesc('points')->get();
                return view('2019.ca.cadata')->with(['t'=>$ca_data, 't2'=>$total_reg]);
            }
            else{return " you are not admin";}
        }
        else {return "sign in to CA Portal First";}
    }










































    public function profilePost(Request $request){
//        return "Sorry, you can not register now";
        $request->flash();
        $request->validate([
            'dob'=>'required|date',
            //pass in the front end variable $error
            'gender'=>'required|in:male,female,others',
            'address'=>'required|string',
            'college'=>'required|string',
            'semester'=>'required|in:1,2,3,4,other',
            'pin'=>'required|integer|digits:6',
            'phone'=>'required|integer|digits:10'
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
    public function upload(Request $request){
        $request->validate([
            'file_name'=>'required'
        ]); //todo theek kar isko
        $file = Storage::put('ca',$request->file);
        DB::table('ca_reg_uploads')->insert(['email'=>session()->get('user')->id,'file'=>$file]);
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


