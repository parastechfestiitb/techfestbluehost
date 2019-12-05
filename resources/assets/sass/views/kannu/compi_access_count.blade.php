<?php
if ($_POST['pswd'] == 'Vision23Together'){
   
$compies = array("boeing", "vise_clutch","enigma","full_throttle","meshmerize","oprahat", "irc","robowars","uav_challenge","elixir","isc","digitalize","hilti_cadathon","CodeTheGame","summit_17","CraneoMania","CodeTheGame","wildcard_meshmerize","wildcard_viseclutch","wildcard_enigma","rollcage","overwatch");

$cc = 1001;
$dd= 0;

 foreach ($compies as $comp) {

 $data = DB::table($comp)->get();
 
 foreach ($data as $key) {
  if ($key->team_id == $cc ) {}
    else {
        $dd = $dd+1;
        $cc = $key->team_id;  
        }
}

echo " Total teams in :- <b> ".$comp ."</b>   are :".$dd ;
if($dd<=30){ echo "<br> Effort Needed guys<br>";}
if($dd>=80){ echo "<br> Compi Gyus macha rahe ho <br>";}
    echo "<br>";
    $dd=0;

}

}
else {
  echo 'verified, authenticated, by the Govt. of India ';
}

?>

