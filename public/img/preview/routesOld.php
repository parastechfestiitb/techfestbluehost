<?php

/*
|----------------------------------	----------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

header('Access-Control-Allow-Origin: *');

Route::get('/', function () {
    return view('homepage');
});




//ca_message deleate 
// Route::post('CaDelete','yoadmincontroller@CaDelete');

// achyut message handaler portal 
// Route::get('/CAmessage',function(){
//     return view('adminpages/caMessageLogin');
// });

// Route::get('/chacha', function () {
//     return view('homepage');
// });
// to show message and adding password before opening the messages

// Route::post('/CAmessage/admin','yoadmincontroller@	');


/////
// Route::get('/pledge',function(){

//     $pcount = 'abhi';
//     return view('eventpages.pledge');
// });

Route::get('/child','yoadmincontroller@child');



// Route::get('/pledge','yoadmincontroller@pledge');
// Route::get('/ipledge','yoadmincontroller@pledge');
// Route::get('/AK48672donthack55220',function(){
//     return view('/');
// });

// Route::post('/insert','yoadmincontroller@insert');

// techfest CA page start normal info page website
Route::get('/ca',function(){
    return view('eventpages/CAPage');
});
Route::get('/CR',function(){
    return redirect ('/ca');
});

Route::post('CAPortal','yoadmincontroller@ca17');

Route::post('CAPortal/uploadFB','yoadmincontroller@uploadFileFB');
Route::post('CAPortal/uploadWP','yoadmincontroller@uploadFileWP');
Route::post('CAPortal/uploadGM','yoadmincontroller@uploadFileGM');
Route::post('CAPortal/uploadOT','yoadmincontroller@uploadFileOT');


Route::post('CAPortal/message','yoadmincontroller@message');
Route::post('CAPortal/profile','yoadmincontroller@profile');



/*Route::get('twmun','innerpagecontroller@twmun');*/
Route::get('yoadmin',function(){
	return view('admin/admin_index');
});

Route::get('yoadmin/admin_login', function(){
    return View::make('admin/admin_login');

});
Route::get('regsuccess',function(){
	return view('registrations/compi_response');
});
Route::post('yoadmin/login','yoadmincontroller@login');

Route::get('yoadmin/data/{event}', function($event)
{	//$input = Input::all();
   // $event_selected = $input['event'];
    $event_selected = $event;
    if($event_selected == "summit"){
        $event_users = DB::table('summit')->get();
        $i=0;
        foreach ($event_users as $user1) {
            $i = $i+1;
            echo $i;
            echo '#';
            echo $user1->firstname;
            echo '#';
             echo $user1->lastname;
            echo '#';
             echo $user1->email;
            echo '#';
             echo $user1->phone;
            echo '*';
        }
    }
    if($event_selected == "twmun_delegates"){
    	$event_users = DB::table($event_selected)->get();
    	$i = 0;
    	foreach($event_users as $user1){
    		$i = $i+1;
    		echo $i;
    		echo '#';
    		echo $user1->firstname;
    		echo '#';
    		echo $user1->age;
    		echo '#';
    		echo $user1->country;
    		echo '#';
    		echo $user1->college;
    		echo '#';
    		echo $user1->email;
    		echo '#';
    		echo $user1->phone;
    		echo '#';
    		echo $user1->firstcommitee;
    		echo '#';
    		echo $user1->secondcommitee;
    		echo '#';
    		echo $user1->thirdcommitee;
    		echo '#';
    		echo $user1->timestamp;
    		echo '*';
    	}
    }
    if($event_selected == "twmun_rapporteurs"){
    	$event_users = DB::table($event_selected)->get();
    	$i = 0;
    	foreach($event_users as $user1){
    		$i = $i+1;
    		echo $i;
    		echo '#';
    		echo $user1->name;
    		echo '#';
    		echo $user1->age;
    		echo '#';
    		echo $user1->country;
    		echo '#';
    		echo $user1->college;
    		echo '#';
    		echo $user1->email;
    		echo '#';
    		echo $user1->phone;
    		echo '#';
    		echo $user1->best_way_to_research;
    		echo '#';
    		echo $user1->religious_extremism;
    		echo '#';
    		echo $user1->terrorism;
    		echo '#';
    		echo $user1->experience;
    		echo '*';


    	}

    }
    if($event_selected == "twmun_executives"){
    	$event_users = DB::table($event_selected)->get();
    	$i = 0;
    	foreach($event_users as $user1){
    		$i = $i+1;
    		echo $i;
    		echo '#';
    		echo $user1->firstname;
    		echo '#';
    		echo $user1->age;
    		echo '#';
    		echo $user1->country;
    		echo '#';
    		echo $user1->college;
    		echo '#';
    		echo $user1->email;
    		echo '#';
    		echo $user1->phone;
    		echo '#';
    		echo $user1->address;
    		echo '#';
    		echo $user1->number_of_muns;
    		echo '#';
    		echo $user1->firstcommitee;
    		echo '#';
    		echo $user1->secondcommitee;
    		echo '#';
    		echo $user1->thirdcommitee;
    		echo '#';
    		echo $user1->specifics_of_voting;
    		echo '#';
    		echo $user1->way_overzealous_delegate;
    		echo '#';
    		echo $user1->kurdistan;
    		echo '#';
    		echo $user1->experience;
    		echo '*';


    	}

    }

    if($event_selected == 'aad' || $event_selected == 'amiet' || $event_selected == 'amiet2' || $event_selected == 'bigdata' || $event_selected == 'cmd' || $event_selected == 'cyberforensics' || $event_selected == 'fitnessband' || $event_selected == 'haptics' || $event_selected == 'zeb' || $event_selected == 'roboexpedition' || $event_selected == 'sixthsense' || $event_selected == 'solarizer' || $event_selected == 'solarizer2' || $event_selected == 'swarmrobotics' || $event_selected == 'wmg' || $event_selected == 'tuav' || $event_selected == 'embeddedsystems' || $event_selected == 'webench' || $event_selected == 'dir' || $event_selected == 'hcp' ){

        $events = DB::table('workshops')->where('code',$event_selected)->get();
            $event_users = DB::table($events[0]->tablename)->get();
            $i=0;
            foreach($event_users as $user1){
            $display_user = DB::table('ptp')->where('id',$user1->ptpid)->get();
            if($display_user){ $i+=1;
            if($display_user[0]->college!='10000'){
            $colleges = DB::table('college')->where('id',$display_user[0]->college)->get();
            if($colleges){
            $college= $colleges[0]->college;
            }
            else $college= 'conference college';
            }
            else{
            $college = $display_user[0]->other_college;
            }

            $cities= DB::table('cities')->where('id',$display_user[0]->city)->get();
            if($cities){
            $city = $cities[0]->city;
            }
            else $city = 'ditch na';
            echo $i;
            echo '#';
            echo $display_user[0]->id;
            echo '#';
            echo $user1->teamid;
            echo '#';
            echo $display_user[0]->firstname;
            echo '#';
            echo $display_user[0]->lastname;
            echo '#';
            echo $display_user[0]->emailid;
            echo '#';
            echo $college;
            echo '#';
            echo $display_user[0]->year;
            echo '#';
            echo $city;
            echo '#';
            echo $display_user[0]->phone;
            echo '#';
            echo $display_user[0]->address;
            echo '#';
            echo $display_user[0]->pincode;
            echo '#';
            echo $display_user[0]->Time;
            echo '*';
        }

    }


    }
    else{
			$events = DB::table('events')->where('code',$event_selected)->get();
			$event_users = DB::table($events[0]->tablename)->get();
			$i=0;
			foreach($event_users as $user1){
			$display_user = DB::table('ptp')->where('id',$user1->ptpid)->get();
			if($display_user){ $i+=1;
			if($display_user[0]->college!='10000'){
			$colleges = DB::table('college')->where('id',$display_user[0]->college)->get();
			if($colleges){
			$college= $colleges[0]->college;
			}
			else $college= 'conference college';
			}
			else{
			$college = $display_user[0]->other_college;
			}

			$cities= DB::table('cities')->where('id',$display_user[0]->city)->get();
			if($cities){
			$city = $cities[0]->city;
			}
			else $city = 'ditch na';
			echo $i;
			echo '#';
			echo $display_user[0]->id;
			echo '#';
			echo $user1->teamid;
			echo '#';
			echo $display_user[0]->firstname;
			echo '#';
			echo $display_user[0]->lastname;
			echo '#';
			echo $display_user[0]->emailid;
			echo '#';
			echo $college;
			echo '#';
			echo $display_user[0]->year;
			echo '#';
			echo $city;
			echo '#';
			echo $display_user[0]->phone;
			echo '#';
			echo $display_user[0]->address;
			echo '#';
			echo $display_user[0]->pincode;
			echo '#';
			echo $display_user[0]->Time;
			echo '*';
		}

	}
	}
});
Route::get('test',function(){
	$event_selected = "twmun_delegates";
	$event_users=DB::table($event_selected)->get();
	foreach($event_users as $user1){
    		echo $user1->id;
    		echo '#';
    		echo $user1->name;
    		echo '#';
    		echo $user1->country;
    		echo '#';
    		echo $user1->college;
    		echo '#';
    		echo $user1->email;
    		echo '#';
    		echo $user1->phone;
    		echo '#';
    		echo $user1->firstcommitee;
    		echo '#';
    		echo $user1->secondcommitee;
    		echo '#';
    		echo $user1->thirdcommitee;
    		echo '#';
    		echo $user1->experience;
    		echo '*';


    	}
});
Route::get('/hospiadmin', function () {
               return view('hospiadmin.admin');
               });

Route::get('qrcodecheck', function () {



  $users = DB::table("test_certi")->get();
  foreach($users as $user) {

    $img = Image::make('img/qrcode/team/certi.png')->resize(700,500);
    $watermark=QrCode::format('png')->size(75)->generate($user->phone);
   /* return $code;  */
   /*$abhi = $img->insert('C:\Users\abhinav\Desktop/qrcode.svg');*/

  $abhi= $img->insert($watermark, 'top-right',80, 15);
  $final=$abhi->text($user->name,280,255, function($font) {
    $font->file('fonts/AVENGEANCE HEROIC AVENGER AT.ttf');
    $font->size(25);
  });

  
   $final=$final->save('img/qrcode/team/'.$user->id.'.jpg');

   $path = "http://techfest.org/img/qrcode/team/".$user->id.".jpg";

   $email = $user->email;
   $name = $user->name;

   Mail::send('registrations.certi',['name'=>$name],function($message) use ($path,$name,$email){
            $message->from('abhiram@techfest.org', 'Techfest, IIT Bombay');
            $message->to($email, $name)->subject('Certificate of Participation | Techfest IIT Bombay');
            $message->attach($path);
            });
   echo "Sent";
}
   return $final->response('jpg');
     
});
Route::post('IA/response', 'registrationcontroller@IA_store');
Route::post('twmun/response/delegates','registrationcontroller@delegate_store');
Route::post('twmun/response/rapporteurs','registrationcontroller@rapporteur_store');
Route::post('twmun/response/executives','registrationcontroller@executive_store');
Route::post('twmun/response/delegation','registrationcontroller@delegation_store');
Route::post('register/issc/response','registrationcontroller@issc_store');
Route::get('issc',function(){
	return view('eventpages.scc');
});

Route::get('register/issc','registrationcontroller@issc_form');
/*Route::get('register/issc',function (){
    return view('errorpage');
});*/
Route::get('competitions','innerpagecontroller@competitions');
Route::get('twmun',function(){
    return view('eventpages/twmun');
});
Route::get('tempcompi',function(){
    return view('eventpages/tempcompi');
});
Route::get('ccbd',function(){
	$url = "http://techfest.org/workshops#bigdata";
	return redirect($url);
});
Route::get('hpc',function(){
	$url = "http://techfest.org/workshops#hcp";
	return redirect($url);
});
Route::get('datascience',function(){
	$url = "http://techfest.org/workshops#dir";
	return redirect($url);
});
/*Route::get('imagetrail',function(){
    $img = Image::make('public/img/backgrond.jpg');

    $img->text('foo', 0, 0, function($font) {
    $font->file('foo/bar.ttf');
    $font->size(24);
    $font->color('#fdf6e3');
    $font->align('center');
    $font->valign('top');
    $font->angle(45);
});

    return $img;

});*/
Route::get('segreta',function(){
        return view('eventpages.segreta');
});
Route::post('twmun/payment/response','registrationcontroller@delegate_payment');
Route::get('technorion','innerpagecontroller@technorion');
Route::get('ideate','innerpagecontroller@ideate');
Route::get('initiatives','innerpagecontroller@initiatives');
Route::get('workshops','innerpagecontroller@workshops');
Route::get('iot2016',function(){
    return view('eventpages.IOT2016');
});
Route::get('summit/register',function(){
    $url = url('/').'/summit#register';
    return redirect($url);
});
Route::get('technoholix','innerpagecontroller@techx');
Route::get('scc','innerpagecontroller@scc');
Route::get('exhibitions','innerpagecontroller@exhi');
Route::get('exhibitions16','innerpagecontroller@exhi16');
Route::get('lectures','innerpagecontroller@lectures');
Route::get('summit','innerpagecontroller@summit');
Route::get('ozone','innerpagecontroller@ozone');
Route::get('ozone16','innerpagecontroller@ozone16');
Route::get('aboutus','adminpagecontroller@aboutus');
Route::get('segreta_rules',function(){
    return view('eventpages.segreta_rules');
});
Route::get('twmun/hospitality/register','registrationcontroller@twmun_hospiform');
Route::get('privacypolicy','adminpagecontroller@privacypolicy');
Route::get('hospitality','adminpagecontroller@hospi');
Route::get('media','adminpagecontroller@media');
Route::get('hospitality/register','registrationcontroller@hospi_form');
Route::get('hospitality/boeing/register','registrationcontroller@boeing_form');
Route::post('hospitality/register/submit','registrationcontroller@hospi_form_submit');
Route::get('sponsors','adminpagecontroller@sponsors');
Route::get('contactus','adminpagecontroller@contactus');
//new file 2k17
Route::get('team2k16','adminpagecontroller@team2k16');
//new file 2k17
Route::get('contact',function(){
    return redirect("http://techfest.org/contactus");
});
Route::post('register/CR','registrationcontroller@CR_store');
Route::get('register/ticc','registrationcontroller@ticc_form');
/*Route::get('register/ticc',function (){
    return view('errorpage');
});*/

Route::get('register/{event}','registrationcontroller@compi_form');
/*Route::get('register/{event}',function (){
    return view('errorpage');
});*/
Route::get('workshops/register/aad',function(){
    return view("eventpages.aad");
});
Route::get('workshops/register/{workshop}','registrationcontroller@workshop_form');

Route::get('technorion/register/{event}','registrationcontroller@zonal_form');
/*Route::get('technorion/register/{event}',function (){
    return view('errorpage');
});*/
Route::get('ic/register/{event}','registrationcontroller@ic_form');
Route::get('{event}','innerpagecontroller@redirect_event');
Route::post('register/ticc/response','registrationcontroller@ticc_store');
Route::post('twmun/hospitality/response','registrationcontroller@twmun_hospistore');
Route::post('register/{event}/response','registrationcontroller@compi_store');
Route::post('workshops/register/{event}/response','registrationcontroller@workshop_store');
Route::post('technorion/register/{zonal}/response','registrationcontroller@zonal_store');
Route::post('summit/response','registrationcontroller@summit_store');
Route::post('summit/payment/response','registrationcontroller@summit_payment');
Route::post('ic/register/{event}/response','registrationcontroller@compi_store');
Route::get('/register/colleges/{cityId}',function($cityId){
 $collegeList= DB::table('college')->where('city',$cityId)->get();
 foreach($collegeList as $college){
			echo $college->id;
			echo '#';
			echo $college->college;
			echo '*';
	}
 });
Route::get('hospitality/details/{teamid}',function($teamid){
           $cols = explode("*", $teamid);
        
          $prefix = $cols[0];
         $team = $cols[1];

         if($prefix == 'IS'){
            $detail = DB::table('summit')->where('summitid',$team)->get();
            if($detail == null){
            echo "Invalid TeamId";
            return;
           }
            echo $detail[0]->firstname;
            echo '*';       
            echo $detail[0]->lastname;
            echo '*';
            echo $detail[0]->email;
            echo '*';
            echo $detail[0]->phone;
            echo '*';
            echo $detail[0]->summitid;
            echo '#';
            return;

         }

               $event = DB::table('hospi_events')->where('prefix',$prefix)->get();
           $ptp = DB::table($event[0]->tablename)->where('teamid',$team)->get();
           if($ptp == null || $ptp == ""){
            echo "Invalid TeamId";
            return;
           }
           foreach($ptp as $member){
           $detail = DB::table('ptp')->where('id',$member->ptpid)->get();
           if($detail == null){
            echo "Invalid TeamId";
            return;
           }
           else{

           echo $detail[0]->firstname;
           echo '*';
           echo $detail[0]->lastname;
           echo '*';
           echo $detail[0]->emailid;
           echo '*';
           echo $detail[0]->phone;
           echo '*';
           echo $detail[0]->id;
           echo '#';
                    }
           }
          

           
           /*$i=0;
               
               
               foreach($rooms as $room1){
               $i+=1;
               echo $i;
               echo '#';
               echo $room1->hostel;
               echo '#';
               echo $room1->room;
               echo '#';
               echo $room1->capacity;
               echo '#';
               echo $room1->stualloted;
               echo '*';
               
               
               
               }*/

               
               
});

Route::post('hospiadmin/updatehosteldetails', function () {
                            return view('hospiadmin/updatedb');
                            });
Route::get('hospitality/verify/{cfid}','adminpagecontroller@verify');
Route::get('/hospiadmin', function () {
               return view('hospiadmin.admin');
               });
Route::get('/hospiadmin/details', function () {
               return view('hospiadmin.login');
               });
Route::post('/hospiadmin/details','adminpagecontroller@login');
                
     Route::get('hospiadmin/data/{hostel}', function($hostel)
               {    //$input = Input::all();
               // $event_selected = $input['event'];
               $hostel_selected = $hostel;

    $rooms = DB::table('hosteldetails')->where('hostel',$hostel_selected)->get();
        
        $i=0;
        
        
               foreach($rooms as $room1){
               $i+=1;
               echo $i;
               echo '#';
               echo $room1->hostel;
               echo '#';
               echo $room1->room;
               echo '#';
               echo $room1->capacity;
               echo '#';
               echo $room1->stualloted;
               echo '*';
            
             
        
     }
    });
Route::get("hospiadmin/display",function(){
    return view('hospiadmin.login2');
});
Route::get("hospiadmin/onspot",function(){
    return view('hospiadmin.login3');
});
Route::post("hospiadmin/display",'adminpagecontroller@display');
Route::post('hospiadmin/onspot','adminpagecontroller@onspot');
Route::post('hospiadmin/register/onspot','adminpagecontroller@onspot_store');
Route::get("hospiadmin/fdisplay",function(){
    $details = DB::table("fguest")->get();
    $details['ptp'] = json_encode($details);
    return view('hospiadmin.fdisplay')->with('details',$details);
});

Route::post("hospiadmin/sendmail",'adminpagecontroller@sendmail');
Route::post("hospiadmin/fsendmail",'adminpagecontroller@fsendmail');
Route::get("hospiadmin/munhospi",function(){

     $details = DB::table("munguest")->get();
    $details['ptp'] = json_encode($details);
    return view('hospiadmin.munhospi')->with('details',$details);
});

Route::get("hospiadmin/munhospi/sendmail",'adminpagecontroller@munhospi');

Route::get('twmun/countries/{commitee}',function($event_selected){
    $countryList=DB::table($event_selected)->get();
    foreach($countryList as $country){
        echo $country->id;
        echo '#';
        echo $country->country;
        echo '*';
    }
   
});

Route::get('stars',function(){
	return view('space2');
});

Route::get('genpass',function()
{
	$users = DB::table('CRs')->get();
	foreach($users as $user){
		$phn = substr($user->phone,0,3);
		$random = str_random(4);	
		$pass = $phn.$random;
		$id = $user->id;
		DB::table('CRs')->where('id',$id)->update(['password'=> bcrypt($pass),'passcode' => $pass]);
		echo $random;
	}
	return 'successful';
});
Route::get('sendmail',function(){
	$users = DB::table('CRs')->get();
	foreach($users as $user){
		Mail::send('emailview',['user'=>$user],function($message) use ($user){
			$message->from('registrations@techfest.org', 'Techfest, IIT Bombay');
			$message->to($user->email, $user->name)->subject('Techfest 2016-17| CRID');
		});
	}
	return 'successful';
});
