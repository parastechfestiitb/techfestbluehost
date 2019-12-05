@extends('kannu.eventLayer')

@section('title')

Registeration Successfull

@endsection

@section('style')
<style>
.content{

	padding-left: 40px;
	padding-right: 40px;
  	width: 60%;
  	position: absolute;
  	top:50%;
  	left: 50%;
  	transform:translate(-50%,-50%);
    background-color: rgba(256,256,256,0.1);
    font-family: 'Pirulen';
    color: white;
    text-align: center;
  }

</style>
<script src="https://apis.google.com/js/platform.js" async defer></script>



@endsection


@section('content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1086221628179602";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





  
// captcha validation start
// if(isset($_POST['g-recaptcha-response'])){
//           $captcha=$_POST['g-recaptcha-response'];
//         }

//          $secretKey = "6LcXBysUAAAAAFiKeJ_K6ZmyQ3g9o3SmtyrCLAT_";
//          $ip = $_SERVER['REMOTE_ADDR'];
//          $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
//                  $responseKeys = json_decode($response,true);
// if(intval($responseKeys["success"]) !== 1) {
//           echo '<h2>You are spammer ! Get Lost</h2>';
//         } else {
        

//captcha validation end


 // $n = test_input($_POST['team_members']);
$n=1;
$compi_name = 'icc';


$mobAB =  test_input($_POST['phone']);
$emailAB = test_input($_POST['email']);

$checking = DB::table($compi_name)->where('phone',$mobAB)->value('email');

// if ($checking == $emailAB) {
//   # code...
  
// echo '
// <div class="content">
// <h3>Registration</h3>
// <p>You can not Register Twice</p>
// <br>
// <b>Thanks<br>
// Techfest IIT Bombay</b>';


// }

// else{

$team = DB::table($compi_name)->orderBy('id', 'desc')->first();
$team_id = $team->team_id + 1;

for($x = 1; $x <= $n; $x++){

$fname = test_input($_POST['fname']);
$lname = test_input($_POST['lname']);
$email = test_input($_POST['email']);
$city = test_input($_POST['city']);
// $other_city = $_POST['other_city'.$x];
$college = test_input($_POST['college']);
// $other_college = test_input($_POST['other_college'.$x]);
$year = test_input($_POST['year']);
$phone = test_input($_POST['phone']);
$address1 = test_input($_POST['address']);
$country = test_input($_POST['country']);
$codechef = test_input($_POST['codechef']);
// $pincode = test_input($_POST['pincode']);

// if($other_college){
// 	$college = $other_college;
// }

// if($other_city){
// 	$city = $other_city;
// }

if ($compi_name == "vise_clutch" || $compi_name == "meshmerize" || $compi_name == "enigma"){
                $zonal_city = test_input($_POST['zonal_city']) ;
              

$query = DB::table($compi_name)->insert(
    ['team_id' => $team_id,'zonal_city' => $zonal_city, 'fname' => $fname,'lname' => $lname, 'email' => $email,'city' => $city, 'college' => $college,'year' => $year, 'phone' => $phone,'address1' => $address1, 'address2' => $address2]);
         
         // $student = $email;
         // Mail::send('emails.events',['name'=>$fname,'teamId'=>$team_id,'zonal_city' => $zonal_city, 'college' => $college,'phone' => $phone,'compi'=>$compi_name],function($message) use ($student)  {
         // $message->from('information@techfest.org', 'Techfest, IIT Bombay');
         // $message->to($student, 'Abhinav Kaushik');
         // $message->subject('Successful Registration | Techfest IIT Bombay');
         // });

}

elseif ($compi_name == 'irc' || $compi_name == 'isc' || $compi_name == 'robowars' || $compi_name== 'icc' || $compi_name== 'fullthrottle') {
  $country = test_input($_POST['country']);
  
  $query =  DB::table($compi_name)->insert([
    ['team_id' => $team_id,'fname' => $fname,'lname' => $lname, 'email' => $email,'city' => $city, 'college' => $college,'year' => $year, 'phone' => $phone,'address1' => $address1, 'codechef' => $codechef,'country' => $country]
]);
  # code...
}
else {
$query =  DB::table($compi_name)->insert([
    ['team_id' => $team_id,'fname' => $fname,'lname' => $lname, 'email' => $email,'city' => $city, 'college' => $college,'year' => $year, 'phone' => $phone,'address1' => $address1, 'address2' => $address2,'pincode' => $pincode]
]);


}



$student = $email;
$name=$fname;

$abc= substr($compi_name,0,2);
$abc =strtoupper($abc);
$compi_ID= $abc.$team_id;

if ($compi_name == 'digitalize' || $compi_name == 'isc' || $compi_name == 'elixir' ){
    Mail::send('emails.mail_ideate',['name'=>$fname,'teamId'=>$compi_ID,'compi'=>$compi_name],function($message) use ($student,$name)  {
         $message->from('information@techfest.org', 'Techfest, IIT Bombay');
         $message->to($student, $name);
         $message->subject('Registration Successful | Techfest IIT Bombay');
         }); 
}

if ($compi_name == 'icc') {
  # code...
  Mail::send('emails.icc',['name'=>$fname,'compi'=>$compi_name],function($message) use ($student,$name)  {
         $message->from('information@techfest.org', 'Techfest, IIT Bombay');
         $message->to($student, $name);
         $message->subject('Registration Successful | Techfest IIT Bombay');
         }); 
}
else {
  Mail::send('emails.events',['name'=>$fname,'teamId'=>$compi_ID,'compi'=>$compi_name],function($message) use ($student,$name)  {
         $message->from('information@techfest.org', 'Techfest, IIT Bombay');
         $message->to($student, $name);
         $message->subject('Registration Successful | Techfest IIT Bombay');
         }); 
}
         
                 
}





echo '
<div class="content">
<h3>Registered Successfully</h3>
<br>
<p>A confirmation email will be sent to you shortly.<br></p>
Your Registration ID is : <b style="font-size:130%">';
echo " - ";
echo $compi_ID ;
echo '
</b><p>Take a screenshot of this page for future referance.</p><br>

<p><b>Share your participation with your friends and let them know, you are going to win</b></p>


<g:plusone size="tall" href="http://techfest.org/competitions"></g:plusone>
  
  <div class="fb-share-button" data-href="http://techfest.org/competitions" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftechfest.org%2Fcompetitions&amp;src=sdkpreparse">Share</a></div>
  
  <a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-text="Participating in Techfest" data-url="http://techfest.org/competitions" data-hashtags="techfest" data-related="Techfest_IITB,i_abhi_ak" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

  
  
<p><a href="http://www.techfest.org" style="color: lightslategrey;">HOME</a></p>
</div> '; 


?>

 
@endsection




