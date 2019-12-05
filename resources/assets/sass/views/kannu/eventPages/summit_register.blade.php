@extends('kannu.workshopLayer')

@section('title')

Registration | Summit, Techfest IIT Bombay

@endsection

@section('style')
<meta name="viewport" content="width=device-width, user-scalable=no">

<style type="text/css">
    html{
      width: 100%;height: 100%;
    }
    body {
      width: 100%;height: 100%;
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


<div id="wrapper" class="container" style="overflow: scroll;width: 100%;height: 100%;">

<form id="form-work" class="" name="form-work" method="POST" action="/summit17/register" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset>
    <p style="margin-top: 20px;
    width: 100%;
    color: white;
    text-align: center;
    font-size: 200%;
    ">Techfest AI Summit</p>


<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">First Name</label>
<input name="fname" class="form-control" placeholder="First Name" type="text">
<input type="hidden" name="session" class="form-control" value={{$session}} >
<!--<input type="hidden" name="compi_name" class="form-control" value="Summit" >-->

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
<input name="phone" class="form-control" placeholder="Mobile No." type="number">

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
<label for="sel1">You are : </label>
<select class="form-control" id="sel1" name="student_type" required>
<option value="">Select</option>
<option value="student">Student</option>
<option value="professional">Professional</option>
<option value="acadmina">Acadmina(IITB)</option>
</select>
</div>
</div> 

<div class="form-group">
<div class="col-md-6">
<label for="sel1">Gender </label>
<select class="form-control" id="sel1" name="gender" required>
<option value="">Select</option>
<option value="MALE">MALE</option>
<option value="FEMALE">FEMALE</option>

</select>
</div>
</div> 


<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">City</label>
<input name="city" class="form-control" placeholder="City" type="text">
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="team_id">College/Company</label>
<input name="college" class="form-control" placeholder="College/Company Name" type="text">
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
<label class="control-label" for="pin">Pin Code</label>
<input name="pin" class="form-control" placeholder="Pincode " type="number">
</div>
</div>



<div class="form-group">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-lg btn-block info">Register For Summit</button>
</div>
</div>
</fieldset>
</form>


<div class="form-group">
<div class="col-md-12">
<label class="control-label" for="team_id">Please carry your Identity card when you come to attend Techfest AI Summit. After registering, you will be redirected for payment, Please keep the payment main as a proof with you. </label>
</div>
</div>

</div>


@endsection




