<?php

namespace App\Http\Controllers;

use App\Event;
use App\Participant;
use Illuminate\Http\Request;
use Google_Client;
use Google_Service_Oauth2;
//use DB;
use Mail;
use Carbon\Carbon;
use Image;
use Illuminate\Support\Facades\DB;
use Redirect;


class MainController extends Controller
{
    //takes request with optional code to see if google login is present
    public function google_auth(Request $request){
        $client = new Google_Client();
        $client->setApplicationName('All Auths');
        $client->setClientId('218886856483-4lnh6s9mvguid18098antfdltvosd7ln.apps.googleusercontent.com');
        $client->setClientSecret('3U0LIJc7Iq_EYmPex07c7X7m');
//        $client->setRedirectUri('https://'.request()->getHost());
        $client->setRedirectUri($request->root());
        $client->setScopes(array(
            'https://www.googleapis.com/auth/plus.me',
            'https://www.googleapis.com/auth/userinfo.email',
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
    //paras's code
//    public function compireg(){
//        return view('2019.test');
//    }

    public function compireg(Request $request){
        if(!isset($request->code) && !session()->has('user')) return view('2019.test');
        $client = $this->google_auth($request);
        $oauth2 = new Google_Service_Oauth2($client);
        $userInfo = $oauth2->userinfo->get();
        if ($client) {
            $oauth2 = new Google_Service_Oauth2($client);
            $userInfo = $oauth2->userinfo->get();
            $user = DB::table('tf_reg')->where(['email'=>$userInfo->email])->first();
            session(['user'=>$user]);  //todo session started

            if(!$user){
                DB::table('tf_reg')->insert(['email'=>$userInfo->email, 'name'=>$userInfo->name, 'picture'=>$userInfo->picture, 'gender'=>$userInfo->gender]);
            }       //If user does not exist, save him and ask for his profile update

            return view('2019.test')->with(['user'=>$user]);
        }
    }

    public function adminDashboard(){
        if(session()->has('user')) {
            $current_user = session()->get('user');
            $admin = DB::table('admins')->where('email', '=', $current_user->email)->first();// row ko array bana ke return ki;
            if ($admin->email == $current_user->email) {
                $big_data = DB::table('tf_reg')->get();
                return view('2019.adminDashboard.adminDashboard')->with(['big_data' => $big_data, 'admin'=>$current_user]);
            }
            else return "you are not admin";
        }
        else return "sign in to ca portal first";
    }


    public function reg_logout(){
        session()->flush();
        return redirect('/compireg');
    }
    public function competitions_logout(){
        session()->flush();
        return redirect('/2019/competitions');
    }



//individual reg button request
    public function regift(){

        if(session()->has('user')) {
            $current_user_data = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            DB::table('tf_reg')->where(['email'=>$current_user_data->email])->update(['ift'=>'1']);
            DB::table('tf_backup')->insert(['name'=>$current_user_data->name, 'email'=>$current_user_data->email, 'event_workshop'=>'e_ift']);
            return redirect('/compireg');
        }        else return "first signin";
    }

    public function cozmo(Request $request){
        if(!isset($request->code) && !session()->has('user')) return view('2019.competitions.cozmo');
        $client = $this->google_auth($request);
        if ($client) {
            $oauth2 = new Google_Service_Oauth2($client);
            $userInfo = $oauth2->userinfo->get();
            $user = DB::table('tf_reg')->where(['email' => $userInfo->email])->first();
            session(['user' => $user]);  //todo session started
            if (!$user) {
                DB::table('tf_reg')->insert(['email' => $userInfo->email, 'name' => $userInfo->name, 'picture' => $userInfo->picture, 'no_of_login' => '1']);
            }
            if ($user) {
                DB::table('tf_reg')->where(['email' => $user->email])->update(['picture' => $userInfo->picture]);
                $user_row = DB::table('tf_reg')->where(['email' => session()->get('user')->email])->first();// return the first row containing the user(session wala user)
                if($user_row->cozmo > 0 && empty($user_row->number)){
                    return redirect('/2019/competitions/details_form');
                }
                return view("2019.competitions.cozmo")->with(['user_row' => $user_row]);
            }
        }
        return redirect("https://techfest.org/2019/competitions/cozmo/");
    }

    public function regcozmo(Request $request){
        $user_row = DB::table('tf_reg')->where(['email' => session()->get('user')->email])->first();// return the first row containing the user(session wala user)
        DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->update(['cozmo'=>'1']);
        $subject = "Welcome to the Techfest College Ambassador Program 2019-20!";
        $txt = "Dear $user_row->name,

COMPI MAIL
Create a team or join a team
Dream on!";

        mail($user_row->email, $subject, $txt, "From:competitions@techfest.org" );
        return redirect("https://techfest.org/2019/competitions/cozmo/");
    }

    public function cozmo_create_team_form(Request $data){
        $current_user_data = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
        return view("2019.competitions.cozmo_create_teamform")->with(['current_user_data'=>$current_user_data]);
    }

    public function cozmo_join_team_form(Request $data){
        $current_user_data = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
        return view("2019.competitions.cozmo_join_teamform")->with(['current_user_data'=>$current_user_data]);
    }

    public function cozmo_leave_team(){
        if(session()->has('user')) {
            $current_team =  DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            if(!empty($current_team->cozmo_team)){
                DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->update(['cozmo_team'=>'']);
                return redirect("https://techfest.org/2019/competitions/cozmo");
            }
            else return "you are not in a team";
        }
    }

    public function cozmo_create_team_reg(Request $data){
        if (session()->has('user')) {
            $current_user_data = DB::table('tf_reg')->where(['email' => session()->get('user')->email])->first();

            $p2_exist = DB::table('tf_reg')->where(['email'=>$data->email2])->first();
            if (!empty($p2_exist->email)) {
                $p2 = DB::table('tf_reg')->where(['email' => $data->email2])->first();
//                check if he is already in a team
                if (empty($p2->cozmo_team)) {
                    DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(['cozmo_team' => $current_user_data->email]);
                    DB::table('tf_reg')->where(['email' => $data->email2])->update(['cozmo_team' => $current_user_data->email]);
                    DB::table('tf_reg')->where(['email' => $data->email2])->update(['cozmo' => '1']);
                    DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(['cozmo_team' => $current_user_data->email]);



                    $subject2 = "CozmoClench, Techfeat IIT Bomabay";
                    $txt2 = "Dear $p2_exist->name, you have been successfully added to $current_user_data->name's team for Cozmo with Team ID ZZZZ.
Your Team ID and Registered Mail ID are very important and will be used in future.
You can leave your current team by clicking on Leave a Team. 
Regards.";

                    mail($p2_exist->email, $subject2, $txt2, "From:competitions@techfest.org" );



                    $subject0 = "CozmoClench, Techfeat IIT Bomabay";
                    $txt0 = "Dear $current_user_data->name, your team is successfully created for CozmoClench with Team ID ZZZZZ. 
You are the Team Leader, you can Remove a Team member or Dissolve the existing team. Hoping to see you at Techfest  
Regards. ";

                    mail($current_user_data->email, $subject0, $txt0, "From:competitions@techfest.org" );

                    return redirect("https://techfest.org/2019/competitions/cozmo");
                } else return Redirect::back()->withErrors(["$p2->email is already in another team, tell him to leave that team first"]);

            } else return Redirect::back()->withErrors(["$data->email2 is not registered on techfest"]);

            $p3_exist = DB::table('tf_reg')->where(['email'=>$data->email3])->first();
            if (!empty($p3_exist->email)) {
                $p3 = DB::table('tf_reg')->where(['email' => $data->email3])->first();
//                check if he is already in a team
                if (empty($p3->cozmo_team)) {
                    DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(['cozmo_team' => $current_user_data->email]);
                    DB::table('tf_reg')->where(['email' => $data->email3])->update(['cozmo_team' => $current_user_data->email]);
                    DB::table('tf_reg')->where(['email' => $data->email3])->update(['cozmo' => '1']);
                    DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(['cozmo_team' => $current_user_data->email]);



                    $subject2 = "CozmoClench, Techfeat IIT Bomabay";
                    $txt1 = "Dear $p3_exist->name, you have been successfully added to $current_user_data->name's team for Cozmo with Team ID ZZZZ.
Your Team ID and Registered Mail ID are very important and will be used in future.
You can leave your current team by clicking on Leave a Team. 
Regards.";

                    mail($p3_exist->email, $subject2, $txt2, "From:competitions@techfest.org" );

                    return redirect("https://techfest.org/2019/competitions/cozmo");
                } else return Redirect::back()->withErrors(["$p3->email is already in another team, tell him to leave that team first"]);

            } else return Redirect::back()->withErrors(["$data->email3 is not registered on techfest"]);

            $p4_exist = DB::table('tf_reg')->where(['email'=>$data->email4])->first();
            if (!empty($p4_exist->email)) {
                $p4 = DB::table('tf_reg')->where(['email' => $data->email4])->first();
//                check if he is already in a team
                if (empty($p4->cozmo_team)) {
                    DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(['cozmo_team' => $current_user_data->email]);
                    DB::table('tf_reg')->where(['email' => $data->email4])->update(['cozmo_team' => $current_user_data->email]);
                    DB::table('tf_reg')->where(['email' => $data->email4])->update(['cozmo' => '1']);
                    DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(['cozmo_team' => $current_user_data->email]);



                    $subject4 = "CozmoClench, Techfeat IIT Bomabay";
                    $txt4 = "Dear $p4_exist->name, you have been successfully added to $current_user_data->name's team for Cozmo with Team ID ZZZZ.
Your Team ID and Registered Mail ID are very important and will be used in future.
You can leave your current team by clicking on Leave a Team. 
Regards.";

                    mail($p4_exist->email, $subject4, $txt4, "From:competitions@techfest.org" );


                    return redirect("https://techfest.org/2019/competitions/cozmo");
                } else return  Redirect::back()->withErrors(["$p4->email is already in another team, tell him to leave that team first"]);

            } else return Redirect::back()->withErrors(["$data->email4 is not registered on techfest"]);



        } else return redirect("https://techfest.org/2019/competitions/cozmo");
    }



//    public function cozmo_create_team_reg2(Request $data){
//            if(session()->has('user')) {
//                $current_user_data = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
//                if(empty($current_user_data->cozmo_team)) {
//                    if (!empty($data->email2)) {
////                        p2 is person 2 row
//                        $p2 = DB::table('tf_reg')->where(['email' => $data->email2])->first();
//                        if(empty($p2->cozmo_team)){
//                            DB::table('tf_reg')->where(['email' => $data->email2])->update(['cozmo_team' => $current_user_data->email]);
//                            DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(['cozmo_team' => $current_user_data->email]);
//                            if (!empty($data->email3)) {
//                                $p3 = DB::table('tf_reg')->where(['email' => $data->email3])->first();
//                                if(empty($p3)){
//                                    DB::table('tf_reg')->where(['email' => $data->email3])->update(['cozmo_team' => $current_user_data->email]);
//                                }
//                                else return "$data->email3 not registered on techfest, tell him to register for cozmo first,";
//                            }
//                        }
//                        else return "$data->email2 not registered on techfest, tell him to register for cozmo first 1234,  team not created";
//                    }
//                    return redirect('https://techfest.org/2019/competitions/cozmo');
//                }
//                else return "you are already registered in a team, drop current team to join new one";
//            }
//            else return "first signin";
//    }

    public function cozmo_join_team_reg(Request $data){
        if(session()->has('user')) {
            $current_user_data = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            $team_member_row = DB::table('tf_reg')->where(['email'=>$data->email])->first();
            $team_member_count = DB::table('tf_reg')->where(['cozmo_team' => $team_member_row->cozmo_team])->get();
            dd($team_member_count);
            return "$team_member_count";
            if(empty($current_user_data->cozmo_team)){
                if($team_member_count <= 4){
                    if(!empty($data->email)){DB::table('tf_reg')->where(['email'=>$current_user_data->email])->update(['cozmo_team'=>$team_member_row->cozmo_team]);}
                    return "successfully added to their team123121";
                }
                else return "team already full";
            }
            else return "you are already registered in a team, drop current team to join new one";
        }
        else return "first signin";
    }

    public function cozmo_remove_member (Request $request, $id){
        $user_row = DB::table('tf_reg')->where(['id' => $id])->first();
        $subject = "CozmoClench, Techfeat IIT Bomabay";
        $txt = "Dear $user_row->name, you have been removed from the CozmoClench Team by your team leader $user_row->cozmo_team which had team id zzz, you can either join another team or create your own team as a single member if you want.";

        mail($user_row->email, $subject, $txt, "From:competitions@techfest.org" );

        DB::table('tf_reg')->where(['id' => $id])->update(['cozmo_team'=> '']);

        return redirect("https://techfest.org/2019/competitions/cozmo");
    }
    public function cozmo_dissolve (){
        $current_user_data = DB::table('tf_reg')->where(['email' => session()->get('user')->email])->first();
        $team =  DB::table('tf_reg')->where(['cozmo_team' => $current_user_data->cozmo_team])->get();
        if (!empty($team[0]->id)){DB::table('tf_reg')->where(['id' => $team[0]->id])->update(['cozmo_team'=> '']);}
        if (!empty($team[1]->id)){DB::table('tf_reg')->where(['id' => $team[1]->id])->update(['cozmo_team'=> '']);}
        if (!empty($team[2]->id)){DB::table('tf_reg')->where(['id' => $team[2]->id])->update(['cozmo_team'=> '']);}
        if (!empty($team[3]->id)){DB::table('tf_reg')->where(['id' => $team[3]->id])->update(['cozmo_team'=> '']);}
        return redirect("https://techfest.org/2019/competitions/cozmo");
    }
    public function details_form(){
        if (session()->has('user')) {
            $current_user_data = DB::table('tf_reg')->where(['email' => session()->get('user')->email])->first();
            return view('2019.competitions.studenr_details_form')->with(['current_user_data'=>$current_user_data]);
        }

    }
    public function details_form_reg(Request $data){
//        return "$data->url";
        if (session()->has('user')) {
            DB::table('tf_reg')->where(['email' => session()->get('user')->email])->update([
                'number'=>$data->phone,
                'college'=>$data->college_name,
                'pincode'=>$data->college_pincode,
                'year'=>$data->college_year,
                'address'=>$data->student_address,

            ]);
            return redirect("https://techfest.org/2019/competitions/");
        }
    }


    public function zonals_form(){
        if (session()->has('user')) {
            $current_user_data = DB::table('tf_reg')->where(['email' => session()->get('user')->email])->first();
            return view('2019.competitions.zonals')->with(['current_user_data'=>$current_user_data]);
        }

    }
    public function zonals_form_reg(Request $data){
        if (session()->has('user')) {
            DB::table('tf_reg')->where(['email' => session()->get('user')->email])->update([
                'number'=>$data->phone,
                'college'=>$data->college_name,
                'zonal'=>$data->zonal,
                'pincode'=>$data->college_pincode,
                'year'=>$data->college_year,
                'address'=>$data->student_address,
            ]);
            return redirect("https://techfest.org/2019/competitions/");
        }
    }





    public function meshmerize(){
        if(session()->has('user')) {
            $user_row = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            return view('2019.competitions.meshmerize')->with(['user_row'=>$user_row]);
        }
        return view('2019.competitions.meshmerize');
    }

    public function rowboatics(){
        if(session()->has('user')) {
            $user_row = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            return view('2019.competitions.rowboatics')->with(['user_row'=>$user_row]);
        }
        return view('2019.competitions.rowboatics');
    }

    public function oprahat(){
        if(session()->has('user')) {
            $user_row = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            return view('2019.competitions.oprahat')->with(['user_row'=>$user_row]);
        }
        return view('2019.competitions.oprahat');
    }

    public function imc(){
        if(session()->has('user')) {
            $user_row = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            return view('2019.competitions.imc')->with(['user_row'=>$user_row]);
        }
        return view('2019.competitions.imc');
    }

    public function codecode(){
        if(session()->has('user')) {
            $user_row = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            return view('2019.competitions.codecode')->with(['user_row'=>$user_row]);
        }
        return view('2019.competitions.codecode');
    }








    public function regift_team(Request $data){
        //this will create tame with ift_team= id of participant
        if(session()->has('user')) {
            $current_user_data = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            if(empty($current_user_data->ift_team)) {
                if (!empty($data->email2)) {
                    $p1 = DB::table('tf_reg')->where(['email' => $data->email2])->first();
                    if(!empty($p1)){
                        DB::table('tf_reg')->where(['email' => $data->email2])->update(['ift_team' => $current_user_data->email]);
                        if (!empty($data->email3)) {
                            $p2 = DB::table('tf_reg')->where(['email' => $data->email3])->first();
                            if(!empty($p2)){
                                DB::table('tf_reg')->where(['email' => $data->email3])->update(['ift_team' => $current_user_data->email]);
                                DB::table('tf_reg')->where(['email' => $current_user_data->email])->update(['ift_team' => $current_user_data->email]);
                            }
                            else return "$data->email3 not registered on techfest, tell him to register for ift first,";
                        }
                    }
                    else return "$data->email2 not registered on techfest, tell him to register for ift first,  team not created";


                }

                return redirect('/compireg');
            }
            else return "you are already registered in a team, drop current team to join new one";
        }
        else return "first signin";
    }

    public function regift_jointeam(Request $data){
        if(session()->has('user')) {
            $current_user_data = DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            $team_member_row = DB::table('tf_reg')->where(['email'=>$data->email])->first();
            $team_member_count = DB::table('tf_reg')->where(['ift_team'=>$team_member_row->ift_team])->count();
            if(empty($current_user_data->ift_team)){
                if($team_member_count <= 3){
                    if(!empty($data->email)){DB::table('tf_reg')->where(['email'=>$current_user_data->email])->update(['ift_team'=>$team_member_row->ift_team]);}
                    return "successfully added to their team";
                }
                else return "team already full";
            }
            else return "you are already registered in a team, drop current team to join new one";
        }
        else return "first signin";

    }

    public function regift_leaveteam(){
        if(session()->has('user')) {
            $curretn_team =  DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->first();
            if(!empty($curretn_team->int_team)){
                DB::table('tf_reg')->where(['email'=>session()->get('user')->email])->update(['ift_team'=>'']);
                return "successfully left team";
            }
            else return "you are not in a team";

        }
    }




    public function test(){
        return view('2019.fb_dev');
    }



    //2019 controllers for links
    public function competitions(Request $request){
        if(!isset($request->code) && !session()->has('user')) return view('2019.competitions.competitions');
        $client = $this->google_auth($request);
        if ($client) {
            $oauth2 = new Google_Service_Oauth2($client);
            $userInfo = $oauth2->userinfo->get();
            $user = DB::table('tf_reg')->where(['email' => $userInfo->email])->first();
            session(['user' => $user]);  //todo session started
            if (!$user) {
                DB::table('tf_reg')->insert(['email' => $userInfo->email, 'name' => $userInfo->name, 'picture' => $userInfo->picture, 'no_of_login' => '1']);
            }
            if ($user) {
                DB::table('tf_reg')->where(['email' => $user->email])->update(['picture' => $userInfo->picture]);
                $user_row = DB::table('tf_reg')->where(['email' => session()->get('user')->email])->first();// return the first row containing the user(session wala user)
                return view("2019.competitions.competitions")->with(['user_row' => $user_row]);
            }
        }
        return view("2019.competitions.competitions");

    }
    public function ideate(Request $request){
        if(!isset($request->code) && !session()->has('user')) return view('2019.ideate.ideate');
        $client = $this->google_auth($request);
        if ($client) {
            $oauth2 = new Google_Service_Oauth2($client);
            $userInfo = $oauth2->userinfo->get();
            $user = DB::table('tf_reg')->where(['email' => $userInfo->email])->first();
            session(['user' => $user]);  //todo session started
            if (!$user) {
                DB::table('tf_reg')->insert(['email' => $userInfo->email, 'name' => $userInfo->name, 'picture' => $userInfo->picture, 'no_of_login' => '1']);
            }
            if ($user) {
                DB::table('tf_reg')->where(['email' => $user->email])->update(['picture' => $userInfo->picture]);
                $user_row = DB::table('tf_reg')->where(['email' => session()->get('user')->email])->first();// return the first row containing the user(session wala user)
                return view("2019.ideate.ideate")->with(['user_row' => $user_row]);
            }
        }
        return "Your browser isn't supported, please use another browser";
//        return view('caGet');

    }



    public function summit(Request $data){
        if(!empty($data->email)){
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept'=>'summit']);
            $subject = "Welcome to the International Full Throttle";
            $txt = "Dear $data->email,

ift MAIL
Create a team or join a team
Dream on!";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Congrats You have been successfully subscribed for Summit, Checek your mail for the same.']);

        }
        return view('2019.summit');

    }
    public function esports(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'esports']);
            $subject = "Welcome to the International Full Throttle";
            $txt = "Dear $data->email,

ift MAIL
Create a team or join a team
Dream on!";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Congrats You have been successfully subscribed for Esports, Checek your mail for the same.']);

        }
        return view('2019.esports');

    }
    public function workshops(Request $data){
        if(!empty($data->email)) {

            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'workshops']);
            $subject = "Welcome to the International Full Throttle";
            $txt = "Dear $data->email,

ift MAIL
Create a team or join a team
Dream on!";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Congrats You have been successfully subscribed for Workshops, Checek your mail for the same.']);

        }
        return view('2019.workshops');

    }
    public function hospitality(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'hospitality']);
            $subject = "Welcome to the International Full Throttle";
            $txt = "Dear $data->email,

ift MAIL
Create a team or join a team
Dream on!";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Congrats You have been successfully subscribed for Hospitality, Checek your mail for the same.']);

        }
        return view('2019.hospitality');

    }
    public function schedule(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'schedule']);
            $subject = "Welcome to the International Full Throttle";
            $txt = "Dear $data->email,

ift MAIL
Create a team or join a team
Dream on!";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Congrats You have been successfully subscribed for Techfest Schedule, Checek your mail for the same.']);

        }
        return view('2019.schedule');

    }
    public function initiative(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'initiative']);
            $subject = "Welcome to the International Full Throttle";
            $txt = "Dear $data->email,

ift MAIL
Create a team or join a team
Dream on!";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Congrats You have been successfully subscribed for Initiatives, Checek your mail for the same.']);

        }
        return view('2019.initiative');

    }
    public function mun(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'mun']);
            $subject = "Welcome to the International Full Throttle";
            $txt = "Dear $data->email,

ift MAIL
Create a team or join a team
Dream on!";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Congrats You have been successfully subscribed for MUN, Checek your mail for the same.']);

        }
        return view('2019.mun');

    }
    public function ift(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'ift']);

            $subject = "Welcome to the International Full Throttle";
            $txt = "Dear $data->email,

ift MAIL
Create a team or join a team
Dream on!";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Congrats You have been successfully subscribed for International Full Throttle, Checek your mail for the same.']);
        }
        return view('2019.ift');

    }
    public function ozone(Request $data){
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'ift']);

            $subject = "Welcome to the International Full Throttle";
            $txt = "Dear $data->email,

ift MAIL
Create a team or join a team
Dream on!";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Congrats You have been successfully subscribed for International Full Throttle, Checek your mail for the same.']);
        }
        return view('2019.ozone');

    }

    public function technoholix(Request $data){
        return "dlvjdk";
        if(!empty($data->email)) {
            DB::table('tf_subscribe')->insert(['email' => $data->email, 'dept' => 'ift']);

            $subject = "Welcome to the International Full Throttle";
            $txt = "Dear $data->email,

ift MAIL
Create a team or join a team
Dream on!";

            mail($data->email, $subject, $txt, "From:techfest@techfest.org" );

            return Redirect::back()->withErrors(['Congrats You have been successfully subscribed for International Full Throttle, Checek your mail for the same.']);
        }
        return view('2019.technoholix');

    }








































    public function recaptchaValidate($response){
        $curl = curl_init('https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query(['secret'=>'6Lcyfl0UAAAAAPPn6JB9Tcv2ieJWSQxDqWoZe_Nh','response'=>$response]));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        $response->success = true;
        return $response;
    }
    public function Get(){
        $urlMain = str_replace('https://techfest.org/','',url()->current());
        $urlName = strtolower($urlMain);
        $meta = [
            ''=>[
                'title'=> 'Techfest | Asia\'s Largest Science & Technology Festival',
                'description'=> 'Techfest: 14th to 16th December. IIT Bombay presents Asia\'s Largest Science and Technology Festival. Get ready for an awesome adventurous journey.',
                'keywords'=> 'techfest, largest technical fest, asia\'s largest college festival, largest science fest, largest technology fest,iit mumbai,tech fest, mumbai,techfest 2019, techfest 2018, asia, visit IIT Bombay, visit Bombay, competitions, workshops, exhibitions, lectures, fun, mumbai, festival, tf2k18, tf2k19, tech entertainment, tech extravaganza, representative, 2018, leader'
            ],
            'home'=>[
                'title'=> 'Techfest | Asia\'s Largest Science & Technology Festival',
                'description'=> 'Techfest: 14th to 16th December. IIT Bombay presents Asia\'s Largest Science and Technology Festival. Get ready for an awesome adventurous journey.',
                'keywords'=> 'techfest,iit mumbai,tech fest, mumbai,techfest 2019, techfest 2018, asia, visit IIT Bombay, visit Bombay, competitions, workshops, exhibitions, lectures, fun, mumbai, festival, tf2k18, tf2k19, tech entertainment, tech extravaganza, representative, 2018, leader'
            ],
            'competitions'=>[
                'title'=>'Competitions | Techfest 2018-19',
                'description'=>'Competitions conducted by Techfest, IIT Bombay have participation from national as well as international teams and it covers many genres including robotics, aeromodelling, aquatics, coding, image processing, structural engineering, gaming and many more',
                'keywords'=>'coding, programing, hacking,competitions,international competition, IRC, Robowar ,tech , robots,steel, making technology, electronics, technorion,Techfest competitions'
            ],
            'lectures'=>[
                'title'=>'Lectures | Techfest 2018-19',
                'description'=>' Lectures, Techfest IIT Bombay celebrates some of the most eminent personalities across the globe showcasing an array of motivational and insightful talks by them. With larger than life names, lectures has proved to be a one-stop destination to procure knowledge and inspiration.',
                'keywords' => ' lectures, lecture series,  late APJ Abdul Kalam, Hamid Karzai India, Hamid Karzai, Sophia, Pranab Mukherjee, lecturer,  academic lectures, IITB , IIT Bombay lectures, motivational lectures, Tanmay Bakshi, IBM Watson lecture, video lecture, video lectures, apple cto, Pranav Mistry, sixth sense, convo lecture, convocation lecture,  convocation lectures, pcsa lecture,  pcsa lecture, prefest, prefest lecture '
            ],
            'technoholix' =>[
                'title' => 'Technoholix | Techfest 2018-19' ,
                'description' => 'Technoholix, or TechX are the techno-cultural nights of Techfest, IIT Bombay which enthral the audience with performances from international artists, all free of cost.',
                'keywords' => 'Best late night, Best night shows, Friday night, Sunday night, Last late night, First late night , late night page, Light night show, Live night show, Night show timings, Concert, EDM, DJ marnik, Sountec, best concert, concert junkie, top concerts, amazing laser show, DJ laser show, edm laser show, biggest tech events, electronic show, new technology events, popular tech shows, best techno mix, lights, lasers, DJ music, DJ techno, artists, artists music, artist network, famous performers, performers, female artists, popular artists, performers, thrill, enthusiasm, fun, enjoy, live performance, sand show, shadow dance, LED, interactive show, laser and light, light dance show, light show event, wonderful light show, Electronic Dance Music, Electronic, Dance, Music, Popular, technology, laser, night, late, last, event, performers,'

            ],
            'media' => [
                'title' => 'Media | Techfest 2018-19',
                'description' => 'A glimpse of the Media attraction that Techfest has received in the past years, ranging from National newspapers to TV channels of various genres to a multitude of media platforms.',
                'keywords' => 'Media, TV Channels, Newspapers, Radio, Publicity, Magazines, Reporters, communication, press, press release, journalist, broadcasting, journalism, print, coverage, headlines, multicast, outreach, News, telecast, streaming, conference, press conference, advertisements'
            ],
            'ozone' => [
                'title' => 'Ozone | Techfest 2018-19',
                'description' => 'Keeping the festive spirit alive, ozone brings out the fun in Techfest in various Entertainment based gadgetry. Ozone plays host to a variety of street artists from around the globe and organises engaging workshops.',
                'keywords' => 'fun, fiesta, ozone, artists, games, ambiance, enjoy, live show, live performance, wall painting, aerial ambiance, installations, lazer tag, convo lawns, international, sac back-lawns, entertainment, VR, AR, workshops, wall art, unconventional, adrenaline, gaming, amusement, informal, stage, lively, youth'

            ],
            'twmun' => [
                'title' => ' Techfest World MUN | Techfest 2018-19' ,
                'description' => 'Techfest World MUN or TWMUN is an international conference organized by Techfest, IIT Bombay. It is an annual simulation of United Nations committees, which invites you to debate, discuss and build a better future.' ,
                'keywords' => ' conferences, meeting, meetings, committee, committees, UN, UNESCO, UNHRC, HRC, Human, Rights, Human Rights Council, COPUOS, Outer, Space, HUNSC, UNSC, Security, Council, Security Council, CSTD, SPECPOL, Police, SOCHUM, CSW, Women, UN-Habitat, DISEC, AU, African, Union, African Union, Disarmament, WTO, World, Trade, Organization, World Trade Organization, International, International Conference, Model, United, Nations, Model United Nations, United Nations, Model UN, Agenda, Agendas, TWMUN, Techfest World MUN, World MUN, TFMUN, TFWMUN, World Model United Nations '
            ],
            'robowars' => [
                'title' => 'Robowars | Techfest 2018-19' ,
                'description' => 'International Robowars is the flagship event of Techfest where two powerful robots will smash each other to pieces in the largest Robowars arena in India' ,
                'keywords' => ' Robot, war, fight, robowar, battlebots, robot wars, transformers, terminator, wall e, battle, FMB , king of bots, clash bots, largest, arena, steel, real steel, largest robowars, largest Asia, robowars, international, international robowars, cage, royal rumble, 120lbs, 120 pounds, 60 kg, 30 lbs, 30 pounds, 15kg, entertainment, flagship event'
            ],
            'ideate' => [
                'title' => 'Ideate | Techfest 2018-19',
                'description' => 'Ideate competition of Techfest IIT Bombay is to encourage youth to come up with innovative ideas to reform and transfigure the present situation in the world.' ,
                'keywords' => 'Ideate competition of Techfest IIT Bombay is to encourage youth to come up with innovative ideas to reform and transfigure the present situation in the world.'
            ],
            'initiatives' => [
                'title' => 'Initiatives | Techfest 2018-19' ,
                'description' => 'Initiatives are doing the right thing without being told. Volunteers, organizations and leaders unite to innovate, strategize and execute measures.' ,
                'keywords' => 'Initiatives, CURED, Save the Souls, Nirbhaya, SHE, Sanitary Health, Education, Taapsee Pannu, Diabetes, Self- Defense'
            ],
            'exhibitions' => [
                'title' => 'Exhbitions | Techfest 2018-19' ,
                'description' => 'Exhibitions at Techfest, IIT Bombay are one of those remarkable avenues where you can experience modern day science & technological innovations including humanoid robots' ,
                'keywords' => 'Exhibitions, Exhi, Expo, Autoexpo, Science Exhibitions,Robot, Artificial intelligence Cognitive robotics, Humanoid, Drones, AR/VR, Zero Gravity, Gaming Tech, Nanorobotics, 3d printing robot, Electronics, Science, Pure Mechanics, Simulator, army, Navy, DRDO '
            ],
            'hospitality' => [
                'title' => 'Hospitality | Techfest 2018-19' ,
                'description' => 'The hospitality of the guests in Techfest is of paramount importance. Techfest leaves no stone unturned in fulfilling the needs of a secure accommodation away from home. We strive to make your stay comfortable and your experience, a memorable one. Hospitality management would be one of the prime focuses of Team Techfest 2018-19.' ,
                'keywords' => 'Hospitality, Accommodation, Rooms, Hostels, Hotels, Hotel, Hostel, Registration, Desk, QR Code, Kits, Face-wash, Soap, Deodorants, Welcome, Home, Security, Secure, Stay, Comfortable, Unparalleled, Enjoyments, Memories, Cherish, Cafeteria, Participants, Cuisines, Experience, Management, Line, Queue, Hospi, Acco, Food, Speed, Fast, Fastest, Faster'
            ],
            'summit' => [
                'title' => 'Summit | Techfest 2018-19' ,
                'description' => 'Techfest hosts International Summits bringing together professionals, students and startups to deliberate on new and upcoming technologies in the scientific world with notable speakers sharing their thoughts on topics like AI and IoT.' ,
                'keywords' => 'Techfest Summit, Summit, International Summit, International, AI, Gaming, professional, students, startups, youth, technology, inspirational, potential, workshops, hands-on experience, lectures, keynote, speakers, panel discussions, networking'
            ],
            'cozmo%20clench/competition' => [
                'title'=>'Cozmo Clench | Competitions',
                'description'=>'While travelling in time, Nova certainly wishes to carry entities along for conservation, sustainability or even as a souvenir. How about a technological companion of Nova which can grip the object efficiently and transport it anywhere between the past, present and future time zones.',
                'keywords'=>'cozmo clench, gripper,manual bot, ViceClutch, gripping botcompi, competitions,international competition, IRC, Robowar ,tech , robots,steel, making technology, electronics, technorion,Techfest competitions'
            ],
            'codecode/competition' => [
                'title'=>'CoDecode | Competitions',
                'description'=>'The mysterious signs and illustrations of the past eras have left Nova curious. Even the language used for the interaction of robots in the future is difficult to comprehend. He strongly feels that understanding these and successfully solving the underlying problems can prove to be beneficial for mankind. Help Nova in tackling these issues through the present coding techniques and build a better civilisation',
                'keywords'=>'coding, programing, hacking,competitions,international competition, IRC, Robowar ,tech , robots,steel, making technology, electronics, technorion,Techfest competitions'
            ]

        ];
        $participant = null;
        $competition = Event::where('category','Competition')->get()->toArray();
        $ideate = Event::where('category','Ideate')->orderBy('order_by','DESC')->orderBy('id')->get()->toArray();
        array_shift($ideate);
        array_pop($ideate);
        $metaData = isset($meta[$urlName])?$meta[$urlName]:$meta[''];
        if(strpos($urlName,'competition')!==false){
            $event = Event::where(['url'=>urldecode('/'.$urlMain)])->first();
            if($event!==null){
                $description = json_decode($event->description);
                $metaData = ['title'=>$event->name.' | Competitions','description'=>$description->short_description];
            }
        }
        if(session()->has('participant') && session()->get('participant')->phone) {
            $participant = Participant::whereId(session()->get('participant')->id)->first();
            return view('Get')->with(['participant'=>$participant,'competition'=>$competition,'ideate'=>$ideate,'meta'=>$metaData]);
        }
        else if(session()->has('participant'))
            return redirect()->route('registerUrlGet');
        else return view('Get')->with(['participant'=>$participant,'competition'=>$competition,'ideate'=>$ideate,'meta'=>$metaData]);
    }
    public function alphaGet(){
        $urlName = strtolower(str_replace('https://techfest.org/','',url()->current()));
        $participant = null;
        $competition = Event::where('category','Competition')->get()->toArray();
        $ideate = Event::where('category','Ideate')->orderBy('order_by','DESC')->orderBy('id')->get()->toArray();
        if(session()->has('participant') && session()->get('participant')->phone) {
            $participant = Participant::whereId(session()->get('participant')->id)->first();
            return view('Get')->with(['participant'=>$participant,'competition'=>$competition,'ideate'=>$ideate,'meta'=>$metaData]);
        }
        else if(session()->has('participant'))
            return redirect()->route('registerUrlGet');
        else return view('alpha')->with(['participant'=>$participant,'competition'=>$competition,'ideate'=>$ideate,'meta'=>$metaData]);
    }
    public function registerUrlGet(Request $request){
        if(!session()->has('participant')) abort(404);
        $participant = Participant::where(['email'=>session()->get('participant')->email])->first();
        return view('registerGet')->with(['url'=>$request->url,'participant'=>$participant,'method'=>$request->methon]);
    }
    public function registerUrlPost(Request $request){
        $recaptcha = $this->recaptchaValidate($request['g-recaptcha-response']);
        if(!$recaptcha->success) session()->flash('recaptcha',$recaptcha->success);
        $request->validate([
            'gender'=>'in:male,female,others|required',
            'dob'=>'required|date|before: 2012-12-12|after: 1970-01-01',
            'pin'=>'digits:6|required',
            'phone'=>'confirmed|required',
            'address'=>'max:250|required',
            'college'=>'required'
        ],[
            'gender'=>'Gender is a required field',
            'dob.date'=>'Invalid date of birth format',
            'dob.required'=>'Date of birth is a required field',
            'phone.confirm'=>'Incorrect or missing mobile number confirmation',
            'phone.required'=>'Mobile number is a required field',
            'pin.digits'=>'Pincode should be of six digits',
            'college'=>'Collge is a required field'
        ]);
        if(!$recaptcha->success) return redirect()->back();
        $participant = Participant::where('email',session()->get('participant')->email)->first();
        $participant->phone = $request->phone;
        $participant->pin = $request->pin;
        $participant->gender = $request->gender;
        $participant->dob = $request->dob;
        $participant->address = $request->address;
        $participant->save();
        Mail::send('admin.mail.userRegistered',['participant'=>$participant],function($message) use ($request,$participant){
            $message->from('register@techfest.org','Techfest-NoReply');
            $message->to($participant->email);
            $message->subject("User registration successful");
        });
        session(['participant'=>$participant]);
        if(isset($request->event)) return redirect('/'); //todo update this page to use event do task that is required to be done
        if(isset($request->url) && $request->url) return redirect($request->url);
        else return redirect('/');
    }
    public function loginPost(Request $request){
        return $request;
        if(!isset($request->code)) return 'error';
        $client = $this->google_auth($request);

        if ($client) {
            $oauth2 = new Google_Service_Oauth2($client);
            $userInfo = $oauth2->userinfo->get();
            session(['googleData'=>$userInfo]);
            $participant = Participant::where('email',$userInfo->email)->first();
            if(!$participant){
                $participant = new Participant();
                $participant->email = $userInfo->email;
                if(isset($userInfo->name)) $participant->name = $userInfo->name;
                $participant->save();
                session(['participant'=>$participant]);
                return "new";
            }   //If user does not exist, save him and ask for his profile update
            else if(!($participant->phone && $participant->dob && $participant->address && $participant->gender)){
                session(['participant'=>$participant]);
                return "empty";
            }
            session(['participant'=>$participant]);
            return 'exist';
        }
        return 'error';
    }
    public function apiCheckLogin(){
        return response()->json(session()->has('participant'));
    }
    public function apiRegisterEventPost(Request $request){
        $request->validate([
            'country'=>'required',
            'gender'=>'required|in:male,female,others',
            'dob'=>'required|date|after: -40 years|before: -10 years',
            'college'=>'required',
            'phone'=>'required|confirmed',
            'pin'=>'required|digits:6',
            'address'=>'required'
        ],[
            'gender'=>'Gender is a required field',
            'country'=>'Country is a required field',
            'dob.date'=>'Invalid date of birth format',
            'dob.before'=>'You must be atleast 8 years old to register',
            'dob.after'=>'You have entered an invalid date',
            'dob.required'=>'Date of birth is a required field',
            'pin.digits'=>'ZIP Code should be of six digits'
        ]);
        $participant = Participant::where('email',session()->get('participant')->email)->first();
        $participant->phone = $request->phone;
        $participant->pin = $request->pin;
        $participant->gender = $request->gender;
        $participant->dob = $request->dob;
        $participant->address = $request->address;
        $participant->college = $request->college;
        $participant->country = $request->country;
        $participant->save();
        Mail::send('admin.mail.userRegistered',['participant'=>$participant],function($message) use ($request,$participant){
            $message->from('register@techfest.org','Techfest-NoReply');
            $message->to($participant->email);
            $message->subject("User registration successful");
        });

        session(['participant'=>Participant::where('email',$request->email)->first()]);
        return "success";
    }
    public function apiGetParticipant(){
        if(!session()->has('participant')) return "Not Logged In";
        return Participant::where(['email'=>session()->get('participant')->email])->first()->toArray();
    }
    public function apiGetDetailsPost(){
        if(!session()->has('participant')) return "Not Logged In";
        else if(!session()->get('participant')->phone) return "Empty";
        else {
            $participant = Participant::where(['email'=>session()->get('participant')->email])->first();
            $event = $participant->events()->get();
            $certi = $participant->certificates()->count();
            foreach($event as $e){
                $e->team = $participant->team($e)->first();
                $k = DB::table('event_participant')->where(['event_id'=>$e->id,'is_leader'=>1,'team_id'=>$e->team->id])->first()->zonal;
                if($k==='Balnglore') $k="Bengaluru";
                $e->region = $k;
                $e->cards = $e->tickets()->get();
            }
            $googleImg = session()->get('googleData')->picture;
            return ['participant'=>$participant,'events'=>$event,'img'=>$googleImg,'certi'=>$certi,'admin'=>session()->has('admin')];
        }
    }
    public function apiGetStatusPost(){
        if(session()->has('participant') && session()->get('participant')) {
            if(session()->get('participant')->phone) return "Exists";
            else return "New";
        }
        else return "Not Logged In";
    }
    public function apiGetAndroidStatusPost(){
        if(session()->has('participant') && session()->get('participant')) {
            if(session()->get('participant')->phone) return "Exists";
            else return "New";
        }
        else return "Not Logged In";
    }
    public function apiGetMembersPost(){
        $teams = (new Participant())->current()->teams()->get();

    }
    public function registerEventGet($test=null,$id=null){
        if($test===null||$id===null){
            if(session()->has('participant') && session()->get('participant')->phone)
                return redirect()->route('Get');
            else return view('registerEventGet');
        }
        $k = DB::table('event_participant')->where(['team_id'=>$id,'is_leader'=>1])->first();
        if(!$k) abort(500);
        $participant = Participant::whereId($k->participant_id)->first();
        if($k===null) return abort(403,'Sorry, the url does not point to any registered event. Please verify the link again with the leader');
        $event = Event::whereId($k->event_id)->first();
        if(md5(Participant::whereId($k->participant_id)->first()->email)===$test){
            $count = Event::whereId($k->event_id)->first()->participants;
            if(DB::table('event_participant')->where(['team_id'=>$id])->count()>=$count) return abort(442,'Sorry maximum number of reg reached for this team. Make a new team, or register saperately.');
            else{
                if(session()->has('participant') && session()->get('participant')->phone){
                    $participant = Participant::where('email',session()->get('participant')->email)->first();
                    if(DB::table('event_participant')->where(['team_id'=>$k->team_id])->count()>=$event->participants) return abort(403,"Max number of members in team reached. Make a new team");
                    else if(DB::table('event_participant')->where(['participant_id'=>$participant->id,'event_id'=>$event->id])->count()>0) abort(403,'Sorry, you can not register with more than one team. Leave your previous team and retry again');
                    else {
                        $teamId = DB::table('event_participant')->insertGetId(['event_id'=>$event->id,'participant_id'=>Participant::where('email',session()->get('participant')->email)->first()->id,'team_id'=>$k->team_id,'is_leader'=>0]);
                        $teamId = $k->team_id;
                        Mail::send('admin.mail.eventRegistered',['participant'=>$participant,'teamId'=>$teamId,'event'=>$event,'event_participant'=>$k],function($message) use ($participant){
                            $message->from('register@techfest.org','Techfest-NoReply');
                            $message->to($participant->email);
                            $message->subject("You are now registered");
                        });

                        return redirect($event->url);
                    }
                }
                else return view('registerEventGet')->with(['participant'=>$participant,'event'=>$event]);
            }
        }
        else return abort(403,'Sorry, the link is not correct, please ask your team leader to resend you the link');
        return abort(403,'Sorry, the link is not correct, please ask your team leader to resend you the link');
    }
    public function registerEventPost(Request $request){
        $request->validate([
            'country'=>'required',
            'gender'=>'required|in:male,female,others',
            'dob'=>'required|date|after: -40 years|before: -10 years',
            'college'=>'required',
            'phone'=>'required|confirmed',
            'pin'=>'required|digits:6',
            'address'=>'required'
        ],[
            'gender'=>'Gender is a required field',
            'country'=>'Country is a required field',
            'dob.date'=>'Invalid date of birth format',
            'dob.before'=>'You must be atleast 8 years old to register',
            'dob.after'=>'You have entered an invalid date',
            'dob.required'=>'Date of birth is a required field',
            'pin.digits'=>'ZIP Code should be of six digits'
        ]);
        $participant = Participant::where('email',session()->get('participant')->email)->first();
        $participant->phone = $request->phone;
        $participant->pin = $request->pin;
        $participant->gender = $request->gender;
        $participant->dob = $request->dob;
        $participant->address = $request->address;
        $participant->college = $request->college;
        $participant->country = $request->country;
        $participant->save();

        Mail::send('admin.mail.userRegistered',['participant'=>$participant],function($message) use ($request,$participant){
            $message->from('register@techfest.org','Techfest-NoReply');
            $message->to($participant->email);
            $message->subject("User registration successful");
        });

        session(['participant'=>Participant::where('email',$request->email)]);
    }
    public function registerPersonPost($test,$id){
        $k= DB::table('event_participant')->where(['team_id'=>$id,'is_leader'=>1])->first();
        if(md5(Participant::whereId($k->participant_id)->first()->email)===$test){
            $count = Event::whereId($k->event_id)->first()->participants;
            if(DB::table('event_participant')->where(['team_id'=>$id])->count()>=$count) return abort(442,'Sorry maximum number of reg reached for this team. Make a new team or register ssaperately.');
            else{
                $teamId= DB::table('event_participant')->insertGetId(['event_id'=>$k->event_id,'participant_id'=>Participant::where('email',session()->get('participant')->email)->first()->id,'is_leader'=>0,'team_id'=>$k->team_id]);
                $teamId = $k->team_id;
                $participant = Participant::where('email',session()->get('participant')->email)->first();
                $event = Event::whereId($k->event_id)->first();
                Mail::send('admin.mail.eventRegistered',['participant'=>$participant,'teamId'=>$teamId,'event'=>$event,'event_participant'=>$k],function($message) use ($participant){
                    $message->from('register@techfest.org','Techfest-NoReply');
                    $message->to($participant->email);
                    $message->subject("You are now registered");
                });
                return redirect()->route('Get');
            }
        }
        return abort(404);
    }
    public function apiJoinTeamPost(Request $r){
        $r->validate([
            'team'=>array(
                'required',
                'regex:/[A-Za-z]{2}-[0-9]{6}/'
            ),
            'email'=>'required|email'
        ],[
            'team.required'=>'Team Id is missing',
            'email.required'=>'No email is given',
            'email.email'=>'Email is not correct'
        ]);
        $p = session()->get('participant');
        $e = Event::where('name',$r->event)->first();
//        if($e->zonal===1) return "Sorry, registrations are closed now";
        $l = Participant::where('email',$r->email)->first();
        if(!$l) return "There is no person registered with that email";
        if(DB::table('event_participant')->where(['participant_id'=>$p->id,'event_id'=>$e->id])->count()>0) return "You are already registered in a team, delete that team to join a new team";
        else{
            $team = (int)substr($r->team,3,6);
            $k = DB::table('event_participant')->where(['team_id'=>$team,'participant_id'=>$l->id,'event_id'=>$e->id])->count();
            if($k>=$e->participants) return "Maximum number of teams has been reached";
            if($k===0) return "No such team exists";
            else {
                DB::table('event_participant')->insert(['event_id'=>$e->id,'team_id'=>$team,'participant_id'=>$p->id,'is_leader'=>0]);
                return "success";
            }
        }
        //if he is not, check if the team has total number of members
        //if total number of members in a team is more, then don't register
        //else register and add him to the team
    }
    public function error404(){
        return abort(404);
    }
    public function error404Custom($name,$score){
        return view('errors.404')->with(['name'=>base64_decode($name),'score'=>base64_decode($score)]);
    }
    public function error404Test(){
        return view('404');
    }
    public function successfullyRegistered(){
        return view('events.successfullyRegistered');
    }
    public function googleResponseGet(Request $r){
        DB::table('google_response')->insert(['response'=>json_encode($r->all())]);
        if(Participant::where('email',$r->email)->count()===0){
            $id = Participant::insert([
                'name' => $r->name,
                'dob' => Carbon::parse($r->age),
                'gender'=>$r->gender,
                'country'=>$r->country,
                'college' => $r->college,
                'email' => $r->email,
                'phone' => $r->phone,
                'address' => $r->address,
                'pin'=>$r->pin
            ]);
            $participant = Participant::where('email',$r->email)->first();
            if($participant){
                $request = $r;
                Mail::send('admin.mail.userRegistered',['participant'=>$participant],function($message) use ($request,$participant){
                    $message->from('register@techfest.org','Techfest-NoReply');
                    $message->to($participant->email);
                    $message->subject("User registration successful");
                });
            }
        }
        $participant = Participant::where('email',$r->email)->first();
        $e= Event::where('code','MD')->first();
        if(DB::table('event_participant')->where(['event_id'=>$e->id,'participant_id'=>$participant->id])->count()!==0) return ['response'=>'already registered'];
        $teamId = DB::table('teams')->insertGetId(['leader_id'=>$participant->id]);
        $jj = DB::table('event_participant')->insertGetId(['event_id'=>$e->id,'participant_id'=>$participant->id,'is_leader'=>1,'team_id'=>$teamId]);
        $k = DB::table('event_participant')->whereId($jj)->first();
        Mail::send('admin.mail.eventRegistered',['participant'=>$participant,'teamId'=>$teamId,'event'=>$e,'event_participant'=>$k],function($message) use ($participant){
            $message->from('register@techfest.org','Techfest-NoReply');
            $message->to($participant->email);
            $message->subject("You are now registered");
        });
        return ['response'=>"Success"];
    }
    public function lectureResponse2(Request $r){
        DB::table('google_response')->insert(['response'=>json_encode($r->all())]);
        if(Participant::where('email',$r->email)->count()===0){
            $id = Participant::insertGetId([
                'name' => str_replace("'",'',$r->name),
                'email' => str_replace("'",'',$r->email),
            ]);
            $participant = Participant::where('email',$r->email)->first();
            if($participant){
                $request = $r;
                Mail::send('admin.mail.lectures',['participant'=>$participant],function($message) use ($request,$participant){
                    $message->from('hhdl@techfest.org','Techfest-NoReply');
                    $message->to($participant->email);
                    $message->subject("Verification mail | Techfest IIT Bombay");
                });
            }
        }
        $participant = Participant::where('email',$r->email)->first();
        $e= Event::where('code','LV')->first();
//        if(DB::table('event_participant')->where(['event_id'=>$e->id,'participant_id'=>$participant->id])->count()!==0) return ['response'=>'already registered'];
        $teamId = DB::table('teams')->insertGetId(['leader_id'=>$participant->id]);
        $jj = DB::table('event_participant')->insertGetId(['event_id'=>$e->id,'participant_id'=>$participant->id,'is_leader'=>1,'team_id'=>$teamId]);
        $k = DB::table('event_participant')->whereId($jj)->first();
        Mail::send('admin.lectures2',['participant'=>$participant,'teamId'=>$teamId,'event'=>$e,'event_participant'=>$k],function($message) use ($participant){
            $message->from('register@techfest.org','Techfest-NoReply');
            $message->to($participant->email);
            $message->subject("You are now registered");
        });
        return ['response'=>"Success"];
    }

    public function lectureResponse(Request $r){
        DB::table('google_response')->insert(['response'=>json_encode($r->all())]);
        if(Participant::where('email',$r->email)->count()===0){
            $id = Participant::insertGetId([
                'name' => str_replace("'",'',$r->name),
                'email' => str_replace("'",'',$r->email),
            ]);
            $participant = Participant::where('email',$r->email)->first();
            if($participant){
                $request = $r;
                Mail::send('admin.mail.lectures',['participant'=>$participant],function($message) use ($request,$participant){
                    $message->from('hhdl@techfest.org','Techfest-NoReply');
                    $message->to($participant->email);
                    $message->subject("Verification mail | Techfest IIT Bombay");
                });
            }
        }
        $participant = Participant::where('email',$r->email)->first();
        $e= Event::where('code','LC')->first();
//        if(DB::table('event_participant')->where(['event_id'=>$e->id,'participant_id'=>$participant->id])->count()!==0) return ['response'=>'already registered'];
        $teamId = DB::table('teams')->insertGetId(['leader_id'=>$participant->id]);
        $jj = DB::table('event_participant')->insertGetId(['event_id'=>$e->id,'participant_id'=>$participant->id,'is_leader'=>1,'team_id'=>$teamId]);
        $k = DB::table('event_participant')->whereId($jj)->first();
        Mail::send('admin.lectures',['participant'=>$participant,'teamId'=>$teamId,'event'=>$e,'event_participant'=>$k],function($message) use ($participant){
            $message->from('register@techfest.org','Techfest-NoReply');
            $message->to($participant->email);
            $message->subject("You are now registered");
        });
        return ['response'=>"Success"];
    }

    public function sessionFlushGet(){
        session()->forget(['participant','googleData','google_token']);
        return session()->all();
    }
    public function authUser(Request $request){
        return $request->user();
    }
    public function accoDekho(){
        return Participant::whereNotNull('shirt')->count();
    }
}
