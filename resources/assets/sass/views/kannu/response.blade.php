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
$n = test_input($_POST['team_members']);

$compi_name = test_input($_POST['compi_name']);


$mobAB =  test_input($_POST['phone1']);
$emailAB = test_input($_POST['emailid1']);

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

$fname = test_input($_POST['firstname'.$x]);
$lname = test_input($_POST['lastname'.$x]);
$email = test_input($_POST['emailid'.$x]);
$city = test_input($_POST['city'.$x]);
// $other_city = $_POST['other_city'.$x];
$college = test_input($_POST['college'.$x]);
$other_college = test_input($_POST['other_college'.$x]);
$year = test_input($_POST['year'.$x]);
$phone = test_input($_POST['phone'.$x]);
$address1 = test_input($_POST['address1'.$x]);
$address2 = test_input($_POST['address2'.$x]);
$pincode = test_input($_POST['pincode'.$x]);

if($other_college){
	$college = $other_college;
}

// if($other_city){
// 	$city = $other_city;
// }

if ($compi_name == "wildcard_viseclutch" || $compi_name == "wildcard_meshmerize" || $compi_name == "wildcard_enigma"){
                // $zonal_city = test_input($_POST['zonal_city']) ;

$query = DB::table($compi_name)->insert(
    ['team_id' => $team_id, 'fname' => $fname,'lname' => $lname, 'email' => $email,'city' => $city, 'college' => $college,'year' => $year, 'phone' => $phone,'address1' => $address1, 'address2' => $address2,'pincode' => $pincode]);
         
         // $student = $email;
         // Mail::send('emails.events',['name'=>$fname,'teamId'=>$team_id,'zonal_city' => $zonal_city, 'college' => $college,'phone' => $phone,'compi'=>$compi_name],function($message) use ($student)  {
         // $message->from('information@techfest.org', 'Techfest, IIT Bombay');
         // $message->to($student, 'Abhinav Kaushik');
         // $message->subject('Successful Registration | Techfest IIT Bombay');
         // });

}

elseif ($compi_name == 'irc' || $compi_name == 'isc' || $compi_name == 'robowars' || $compi_name== 'icc' || $compi_name== 'fullthrottle') {
  $country = test_input($_POST['country'.$x]);
  
  $query =  DB::table($compi_name)->insert([
    ['team_id' => $team_id,'fname' => $fname,'lname' => $lname, 'email' => $email,'city' => $city, 'college' => $college,'year' => $year, 'phone' => $phone,'address1' => $address1, 'address2' => $address2,'pincode' => $pincode, 'country' => $country]
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

if ($compi_name =='wildcard_enigma') {
$abc ='WI';
}
if ($compi_name =='wildcard_meshmerize') {
$abc ='WM';
}
if ($compi_name =='wildcard_viseclutch') {
$abc ='WV';
}

if ($compi_name =='Bajajhackathon') {
$abc ='BH';
}



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




