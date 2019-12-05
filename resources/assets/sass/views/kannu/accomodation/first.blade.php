@extends('kannu.workshopLayer')

@section('title')

Registration | Accommodation, Techfest IIT Bombay

@endsection

@section('style')
<meta name="viewport" content="width=device-width, user-scalable=no">

<style type="text/css">

    body {
  /*font-family: 'Open Sans', sans-serif;*/
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 300;
}

p {
  color: #999;
}

strong {
  color: #333;
}

#wrapper {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
  padding: 30px 0;
}

.page-head-image img {
  border-radius: 50%;
}

#form-trabalhe {
  margin-top: 30px;
  text-align: left;
}

label {
  font-weight: normal;
  margin-top: 15px;
}

input {
  border: 2px solid #CCC !important;
  height: 35px;
  border-radius: 3px;
  max-width: 100%;
}

.input-group-addon {
  border: 2px solid #CCC !important;
  border-right: 0px !important;
}

.btn {
  border: 0;
  border-radius: 3px;
  margin-top: 13%;
}

.form-group {
  margin-bottom: 0;
  text-align: left;
}

  </style>

@endsection


@section('content')


<div id="wrapper" class="container" style="overflow: scroll;">
<!-- <p style="color: white;margin-top: 5vh;font-weight: 600">Due to some Technical Issues, registrations for accommodation are down, please come back later on 22nd November for further updates.</p> -->
<p style="color: white;font-size: 120%;"><b>Fill all details carefully, Registrations are live for all </b></p>
<!-- <p>Use Team ID </p> -->
<form id="form-work" class="" name="form-work" action="/acco/choose" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset>



<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">Put Your Team ID/Workshop id here</label>
<input name="team_id" class="form-control" placeholder="EG. EN1548" type="text" required>
</div>
</div>

<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="mobile">Team Leader Mobile No</label>
<input name="phone" class="form-control" pattern="[0-9 ]{10,10}" placeholder="Mobile-No of team leader" type="number" required >
</div>
</div>

<!--
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">Put Your Team ID here</label>
<input name="team_id" class="form-control" placeholder="EG. EN1548" type="text">
</div>
</div> -->
<div class="form-group">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-lg btn-block info">Registration</button>
<div class="last_tag">
<p style="color: white;text-align: center;margin-top: 40px;font-size: 150%;">
To get your Team ID, <a href="https://techfest.org/accommodation/register" style="font-size: 120%">Register Here</a>
</p>
<!-- <p style="color: white;">If you are not a participant in any Event, Competition or workshop and just coming to attend the event, and still need accommodation in IIT Bombay. Please register <a href="https://techfest.org/accommodation/register" style="font-size: 120%">here.</a>
<br>You will receive a team ID, using that you can book your accommodation for Techfest.
<br></p><p style="text-align: center;color: white;">***You will be notified soon, if accommodation is available.</p> -->
</div>
</div>
</div>



</fieldset>
</form>
</div>



@endsection




