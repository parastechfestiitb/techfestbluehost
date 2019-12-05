@extends('kannu.workshopLayer')

@section('title')

Registration | ICC, Techfest IIT Bombay

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
  margin-top: 20px;
}

.form-group {
  margin-bottom: 0;
  text-align: left;
}


  </style>

@endsection


@section('content')


<div id="wrapper" class="container" style="overflow: scroll;">
<!-- <p> Register yourself to get Certificate of Organisation of your Zonal.</p> -->
<!-- <p>Fill all details carefully</p> -->
<!-- <p>Use Team ID </p> -->
<form id="form-work" class="" name="form-work" method="POST" action="/iccresponse" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset>

<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">First Name</label>
<input name="fname" class="form-control" placeholder="First Name" type="text">
<input type="hidden" name="team_members" class="form-control" value=1 >
<input type="hidden" name="compi_name" class="form-control" value="icc" >

</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">Last Name</label>
<input name="lname" class="form-control" placeholder="Last Name" type="text">
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="mobile">Mobile</label>
<input name="phone" class="form-control" placeholder="Mobile No." type="text">

</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">Email</label>
<input name="email" class="form-control" placeholder="Email - ID" type="email">
</div>
</div>

<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">Country</label>
<input name="country" class="form-control" placeholder="Your country" type="text">
</div>
</div>



<!-- <div class="form-group">
<div class="col-md-6">
<label for="sel1">Zonal City : </label>
<select class="form-control" id="sel1" name="zonal_city">
<option value="1">Select</option>
<option value="2">Bhopal</option>
<option value="3">Hyderabad</option>
<option value="4">Jaipur</option>
<option value="5">Mumbai</option>
</select>
</div>
</div> -->

<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">City</label>
<input name="city" class="form-control" placeholder="City" type="text">
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">College</label>
<input name="college" class="form-control" placeholder="College Name" type="text">
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label for="sel1">Year : </label>
<select class="form-control" id="sel11" name="year">
<option>Undergraduate 1st year</option><option>Undergraduate 2nd year</option><option>Undergraduate 3rd year</option><option>Undergraduate 4th year</option><option>DualDegree 5th year</option><option>Postgraduate 1st year</option><option>Postgraduate 2nd year</option>
<option>Postgraduate 3rd year</option>
</select>
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">Address</label>
<input name="address" class="form-control" placeholder="Address" type="text">
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">Code Chef ID <b><a href="https://www.codechef.com/signup" target="_blank">*Create One if you haven't yet</a></label> 
<input name="codechef" class="form-control" placeholder="Code Chef ID" type="text">
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-lg btn-block info">Register For ICC</button>
</div>
</div>
</fieldset>
</form>
</div>


@endsection




