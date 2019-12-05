<?php
if ($_POST['pswd'] == 'Vision23Together'){
$compi = $_POST['compi'];

$cc = '1001';
$dd = 0;

  $data = DB::table($compi)->get();



echo '<style>table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 5px;
    font-weight: normal;
}

#comeon th{
    font-weight: bold;
}
</style>';

if ($compi == 'enigma' || $compi == 'meshmerize' || $compi == 'vise_clutch'){

if($_POST['zonal']){
$data = DB::table($compi)->where('zonal_city',$_POST['zonal'])->get();
// $count = DB::table($compi)->where('zonal_city',$_POST['zonal'])->select('name', 'email as user_email')->get();
}
else {
    $data = DB::table($compi)->get();
}



echo '<table style="width:120%; overflow: auto;">
  <tr style="border: 2px solid black; font-weight: bold;" id="comeon">
    <th>id</th>
    <th>team id</th> 
    <th>zonal city</th>
    <th>first name</th>
    <th>last name</th> 
    <th>email</th>
    <th>city</th>
    <th>college</th> 
    <th>year</th>
    <th>phone</th>
    <th>address 1</th> 
    <th>address 2</th>
    <th>pincode</th>
    <th>Time Stamp</th>
  </tr>';
foreach ($data as $key) {
    # code...

    if ($key->team_id == $cc ) {}
    else {
        $dd = $dd+1;
        $cc = $key->team_id;   }

// $city = DB::table('cities')->where('id',$key->city)->get();

echo '
  <tr>
    <th>'.$key->id.'</th>
    <th>'.$key->team_id.'</th> 
    <th>'.$key->zonal_city.'</th>
    <th>'.$key->fname.'</th>
    <th>'.$key->lname.'</th> 
    <th>'.$key->email.'</th>
    <th>'.$key->city.'</th>
    <th>'.$key->college.'</th> 
    <th>'.$key->year.'</th>
    <th>'.$key->phone.'</th>
    <th>'.$key->address1.'</th> 
    <th>'.$key->address2.'</th>
    <th>'.$key->pincode.'</th>
    <th>'.$key->timestamp.'</th>
  </tr>
';
}

}

else if ($compi == 'irc' || $compi == 'isc' || $compi == 'robowars') {

echo '<table style="width:120%; overflow: auto;">
  <tr style="border: 2px solid black; font-weight: bold;" id="comeon">
    <th>id</th>
    <th>team id</th> 
    <th>first name</th>
    <th>last name</th> 
    <th>email</th>
    <th>country</th>
    <th>city</th>
    <th>college</th> 
    <th>year</th>
    <th>phone</th>
    <th>address 1</th> 
    <th>address 2</th>
    <th>pincode</th>
    <th>Time Stamp</th>
  </tr>';
foreach ($data as $key) {
    # code...

     if ($key->team_id == $cc ) {}
    else {
        $dd = $dd+1;
        $cc = $key->team_id;   }


// $city = DB::table('cities')->where('id',$key->city)->get();

echo '
  <tr>
    <th>'.$key->id.'</th>
    <th>'.$key->team_id.'</th> 
    <th>'.$key->fname.'</th>
    <th>'.$key->lname.'</th> 
    <th>'.$key->email.'</th>
    <th>'.$key->country.'</th>
    <th>'.$key->city.'</th>
    <th>'.$key->college.'</th> 
    <th>'.$key->year.'</th>
    <th>'.$key->phone.'</th>
    <th>'.$key->address1.'</th> 
    <th>'.$key->address2.'</th>
    <th>'.$key->pincode.'</th>
    <th>'.$key->timestamp.'</th>
  </tr>
';
}

}
else{

echo '<table style="width:120%; overflow: auto;">
  <tr style="border: 2px solid black; font-weight: bold;" id="comeon">
    <th>id</th>
    <th>team id</th> 
    <th>first name</th>
    <th>last name</th> 
    <th>email</th>
    <th>city</th>
    <th>college</th> 
    <th>year</th>
    <th>phone</th>
    <th>address 1</th> 
    <th>address 2</th>
    <th>pincode</th>
    <th>Time Stamp</th>
  </tr>';
foreach ($data as $key) {
	# code...

     if ($key->team_id == $cc ) {}
    else {
        $dd = $dd+1;
        $cc = $key->team_id;   }


// $city = DB::table('cities')->where('id',$key->city)->get();

echo '
  <tr>
    <th>'.$key->id.'</th>
    <th>'.$key->team_id.'</th> 
    <th>'.$key->fname.'</th>
    <th>'.$key->lname.'</th> 
    <th>'.$key->email.'</th>
    <th>'.$key->city.'</th>
    <th>'.$key->college.'</th> 
    <th>'.$key->year.'</th>
    <th>'.$key->phone.'</th>
    <th>'.$key->address1.'</th> 
    <th>'.$key->address2.'</th>
    <th>'.$key->pincode.'</th>
    <th>'.$key->timestamp.'</th>
  </tr>
';
}
}

echo '</table>';

echo '<script type="text/javascript">alert("Total Registrations in this event are : '.$dd.'");</script>';


}

else {
  echo 'verified, authenticated, by the Govt. of India ';
}

?>

