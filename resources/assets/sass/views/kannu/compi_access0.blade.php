<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-81222017-1', 'auto');
  ga('send', 'pageview');
</script>

  <style type="text/css">
    body {
      height: 100%;
      width: 100%;

    }
    form{
      transform: translate(30%,20vh);
    }
    label {
      margin-right: 30px;
    }
  </style>
</head>
<body>
<h1 style="text-align: center; width: 100%; top: 25vh;"> Techfest Admin Console </h1>
<form action="/compi/givemeaccess2" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div>
<label class="control-label col-md-1 col-sm-2" for="Competition">Competition:</label>
 <select class="form-control" name="compi" style="width: 27vw; margin: 15px;" id="Competition">
    <option value="wildcard_enigma">wildcard_enigma</option>
    <option value="wildcard_viseclutch">wildcard_viseclutch</option>
    <option value="wildcard_meshmerize">wildcard_meshmerize</option>
    <option value="vise_clutch">vise_clutch</option>
    <option value="enigma">enigma</option>
    <option value="full_throttle">full_throttle</option>
    <!-- <option value="icc">icc</option> -->
    <option value="irc">irc</option>
    <option value="meshmerize">meshmerize</option>
    <option value="oprahat">oprahat</option>
    <option value="robowars">robowars</option>
    <!-- <option value="tata1">tata1</option> -->
    <option value="uav_challenge">tata_uav_challenge</option>
    <option value="elixir">elixir</option>
    <option value="isc">isc</option>
    <option value="digitalize">digitalize</option>
    <option value="hilti_cadathon">hilti_cadathon</option>
      <!-- <option value="hilti_cadathon">hilti_cadathon</option> -->
    <option value="CodeTheGame">CodeTheGame</option>
    <option value="boeing">Boeing</option>
    <option value="CraneoMania">CraneOMania</option>
     <option value="summit_17">Summit</option>
      <option value="rollcage">Rollcage</option>
       <option value="overwatch">Overwatch</option>

    

    <!-- <option value="new">new</option> -->

  </select>
  </div>
  <div>
  <label class="control-label col-md-1 col-sm-2" for="zonal">Zonal:</label>
 <select class="form-control" name="zonal" style="width: 27vw; margin: 15px;" id="zonal">
 <option value="">Select Zonal City:</option>
    <option value="1">Bhubaneswar</option>
    <option value="2">Bhopal</option>
    <option value="3">Hyderabad</option>
    <option value="4">Jaipur</option>
    <option value="5">Mumbai</option>
</select>
</div>
  <input  class="btn btn-default" type="password" name="pswd"  style="width: 30vw;  margin: 15px; margin-left: 85px;"><br>
  <br><br>
  <input type="submit" class="btn btn-default" style="width: 30vw;  margin: 15px; margin-left: 85px;">
</form>


<form action="/compi/givemeaccess" method="POST">
    
<input type="hidden" name="_token" value="{{ csrf_token() }}">
  <input  class="btn btn-default" type="password" name="pswd"  style="width: 30vw;  margin: 2px;margin-top: 20px; margin-left: 85px;" placeholder="Put the pass for Team counts">
  <br>
  <br><br>
  <input type="submit" class="btn btn-default" style="width: 30vw;  margin: 2px; margin-left: 85px;"value="For Teams">
  
</form>





</body>
</html>
