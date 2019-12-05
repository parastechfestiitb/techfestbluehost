@extends('kannu.workshopLayer')

@section('title')

Accommodation

@endsection

@section('style')
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="icon" href="https://techfest.org/img/2018/icon.ico">

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<style type="text/css">

 h1,h2,h3,h4,h5,h6{font-weight:300}p{color:#999}strong{color:#333}#wrapper{width:100%;max-width:600px;margin:0 auto;text-align:center;padding:30px 0}.page-head-image img{border-radius:50%}#form-trabalhe{margin-top:30px;text-align:left}label{font-weight:400;margin-top:15px}input{border:2px solid #CCC!important;height:35px;border-radius:3px;max-width:100%}.input-group-addon{border:2px solid #CCC!important;border-right:0!important}.btn{border:0;border-radius:3px;margin-top:13%}.form-group{margin-bottom:0;text-align:left}
  </style>

@endsection


@section('content')
<div id="wrapper" class="container" style="overflow: scroll;">
<h4>Register For Accomodation</h4>
<form id="form-work" class="" name="form-work" method="POST" action="/student" >
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<fieldset>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="name">Name</label>
<input name="name" class="form-control" placeholder="Full Name" type="text" required>
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="email">Email</label>
<input name="email" class="form-control" placeholder="Your Email ID" type="email" required>
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="mobile">Mobile No</label>
<input name="phone" class="form-control" pattern="[0-9 ]{10,10} placeholder="Mobile" type="number" required >
<input type="hidden" name="user_session" value="{{$session or 'rajkumar'}}">
<p style="color: red">{{$err or ''}}</p>
</div>
</div>
<div class="form-group">
<div class="col-md-6" style="height: 104px;">
<label class="control-label" for="mobile">City</label>
<input name="city" class="form-control" placeholder="City" type="text" required >
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="gender">Gender</label>
<select class="form-control" id="" name="gender" required>
<option value="">Select</option>
<option value="MALE">Male</option><option value="FEMALE">Female</option>
</select>
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="mobile">College</label>
<input name="college" class="form-control" placeholder="College Name" type="text" required >
</div>
</div>
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="mobile">Year</label>
<input name="year" class="form-control" placeholder="Year of Study" type="number" required >
</div>
</div>
<!-- <div class="form-group">
<div class="col-md-6">
<label class="control-label" for="room">Choose Hotel</label>
<select class="form-control" id="" name="room_type" required>
<option value="">Select</option>
<option value="">Hotel Crescent(Not Available)</option><option value="Treebo">Treebo Bluebells</option>
</select>
</div>
</div> -->
<div class="form-group">
<div class="col-md-6">
<label class="control-label" for="room">Events You'r Interested In</label>
<input type="event" name="event_name" class="form-control" placeholder="Event Name" id="" required>
<!-- <option value="">Select</option>
<option value='1'>1 Days</option><option value='2'>2 Days</option>
<option value='3'>3 Days</option><option value='4'>4 Days</option>
</select> -->
</div>
</div>
<!-- <div class="form-group">
<div class="col-md-6">
<label class="control-label" for="mun_type">Accommodation Dates</label>
<input name="mun_type" class="form-control" placeholder="dates of your stay, like '29th,30th' " type="text" required>
</div>
</div> -->
<div class="form-group">
<div class="col-md-12" style="margin-top: 10px;">
<div class="g-recaptcha" data-sitekey="6Ld5vTYUAAAAALVxcP3iV9aLNCf6oUwsKdj9FgY4"></div>
</div>
</div>
<div class="form-group">
<div class="col-md-12">
<button type="submit" class="btn btn-primary btn-lg btn-block info">Proceed to Register</button>
</div>
</div>
</fieldset>
</form>
<p style="color: white"><b>**Accommodation will be provided from 27<sup>th</sup> Dec 5PM to 1<sup>st</sup> Jan 10AM</b></p>
<!-- <a href="https://techfest.org/twmun/acco" target="_blank" style="text-decoration: none;color: white;"><b>Have a look at the Hotels</b></a> -->
</div>


@endsection
