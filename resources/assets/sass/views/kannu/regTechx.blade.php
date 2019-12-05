@extends('kannu.workshopLayer')
@section('title')
Register|
@endsection
@section('style')
<meta name="viewport" content="width=device-width, user-scalable=no">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<link rel="icon" href="https://www.techfest.org/img/2018/icon.ico">

<style type="text/css">
    h1, h2, h3, h4, h5, h6 {
        font-weight: 300;
    }
    #sub_heading{
        font-size: 2vw;
        font-family: 'pirulen', serif;
        color: white;
        top: 19%;
        width:40vw;
        position: fixed;
        left:30vw;
        text-align: center;
    }
    #sub_heading:not(:-moz-handler-blocked){
        position: relative;
        transform: translate(-22.3%, 0px);
    }
    p {
        color: #999;
    }
    strong {
        color: #333;
    }
    #wrapper {
        height: 82%;
        width: 100%;
        max-width: 700px;
        margin: 15px auto;
        text-align: center;
        /*padding: 30px 0;*/
    }
    .team_leader{
        margin-top: 10px;
    }
    .page-head-image img {
        border-radius: 50%;
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
    .btn {
        border: 0;
        border-radius: 3px;
        margin-top: 20px;
    }
    .form-group {
        margin-bottom: 0;
        text-align: left;
    }
     #former{
            width: 100%;height: 100%;margin-top:4em;
        }
    @media only screen and (orientation: portrait)  {
        #sub_heading{
            /*top: 240px;*/
            font-size: 15px;
        }
    }
    @media (min-width: 62em)
    {
        #sub_heading{
            top: 20vh;
        }
        #former{
            width: 100%;height: 100%;padding-top:4em;margin-top:4em;
        }
    }
</style>
@endsection
@section('content')
<div id="former" style="">
    <div id="sub_heading" style="height: 2em;">
        {{$majortitle}}
    </div>
    <div id="1member">
        <div id="wrapper" class="container">
            <form id="form-work" class="" name="form-work" method="POST" action="/{{$id}}/success">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="name">Name</label>
                            <input name="name" required class="form-control" placeholder="First Name" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="mobile">Mobile</label>
                            <input name="phone" class="form-control" placeholder="Mobile No." type="text" required  pattern="[0-9]{10,10}">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="team_id">Email</label>
                            <input name="email" required class="form-control" placeholder="Email ID" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="team_id">City</label>
                            <input name="city" required class="form-control" placeholder="City" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="team_id">College/School</label>
                             <select class="form-control" id="sel11" name="year">
                            <option value="">Select</option>
                            <option value="college">College</option><option value="school">School</option><option value="other">Other</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="team_id">Year/Class</label>
                            <input name="college" required class="form-control" placeholder="Year/Class" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                    <div class="col-md-12" style="margin-top: 10px;">
                    <div class="g-recaptcha" data-sitekey="6Ld5vTYUAAAAALVxcP3iV9aLNCf6oUwsKdj9FgY4"></div>
                    </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary btn-lg btn-block info">Register</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection




