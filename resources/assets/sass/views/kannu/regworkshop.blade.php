@extends('kannu.workshopLayer')

@section('title')

Register| Workshop

@endsection

@section('style')
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<meta name="viewport" content="width=device-width, user-scalable=no">

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
    @media only screen and (orientation: portrait)  {

        #sub_heading{
            top: 240px;
            font-size: 30px;

        }
    }
    @media (max-width: 62em)
    {
        #sub_heading{
            top: 110px;
        }
</style>
@endsection
@section('content')
<div style="width: 100%;height: 100%;padding-top:2em;margin-top:4em;">
    <div id="sub_heading" style="height: 2em;">
        {{$workshopData->workshop_name}}
    </div>
    <!-- ==================for only one membered workshops========================= -->
    <div id="1member" style="display: none;margin-top:4em">
        <div id="wrapper" class="container" style="overflow: scroll;">

            <!-- <form id="form-work" class="" name="form-work" method="POST" action="/onspotaccommodation" > -->
            <form id="form-work" class="" name="form-work" method="POST" action="/responseworkshop" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="workshop_code" value="{{ $workshopData->code }}">
                <input type="hidden" name="user_session" value="{{ $session }}">
                
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="team_id">First Name</label>
                            <input name="fname" required class="form-control" placeholder="First Name" type="text">
                            <input type="hidden" name="team_members" class="form-control" value=1 >
                            <input type="hidden" name="workshopData->workshop_name" class="form-control" value="{{$workshopData->workshop_name}}" >

                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="team_id">Last Name</label>
                            <input name="lname" required class="form-control" placeholder="Last Name" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="mobile">Mobile</label>
                            <input name="phone" required class="form-control" placeholder="Mobile No." type="text">

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
                            <label class="control-label" for="team_id">Country</label>
                            <input name="country" required class="form-control" placeholder="Your country" type="text">
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
                            <label class="control-label" for="team_id">College</label>
                            <input name="college" required class="form-control" placeholder="College Name" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="sel1">Year : </label>
                            <select class="form-control" id="sel11" name="year">

                                <option>Undergraduate 1st year</option><option>Undergraduate 2nd year</option><option>Undergraduate 3rd year</option><option>Undergraduate 4th year</option><option>DualDegree 5th year</option><option>Postgraduate 1st year</option><option>Postgraduate 2nd year</option>
                                <option>Postgraduate 3rd year</option><option>Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="team_id">Address</label>
                            <input name="address" required class="form-control" placeholder="Address" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label class="control-label" for="pin_code">Pin Code <b></label>
                            <input name="pincode" required class="form-control" placeholder="Pin Code" type="text">
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
    <!-- =========For more than 1 membererd team============= -->
    <div id="1plusmember" style="display: none;margin-top:4em">
        <div id="wrapper" class="container" style="overflow: scroll;">
            <form id="form-work" class="" name="form-work" method="POST" action="/responseworkshop" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="workshop_code" value="{{ $workshopData->code }}">
                <fieldset>
                    <input type="hidden" name="workshopData->workshop_name" value="{{ $workshopData->workshop_name }}">
                    <label for="team_members" id="sub-sub" style="font-size: 20px;">Number of team members including the team leader<br>(Please check the reCAPTCHA before submiting the form. Refresh the page if you do not see the reCAPTCHA):</label>
                    <select name="team_members" id="team_members" style="width:220px; left:500px;color: black;font-size: 20px;"></select>
                    <div id="forms" >
                    </div>
                    <div class="form-group">
                        <div class="col-md-12" style="margin-top: 10px;">
                        <div class="g-recaptcha" data-sitekey="6Ld5vTYUAAAAALVxcP3iV9aLNCf6oUwsKdj9FgY4"></div>
                        </div>
                    </div>

                    <div id="imp" style="display: none;">
                        <!-- <p class="college_text">Please <a href="http://www.techfest.org/contactus" target="_blank">contact us</a> if you face any difficulties in registration.</p> -->
                        <button type="submit" class="btn btn-primary btn-lg btn-block info" value="Register" id="reg">Register</button>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">

    window.onload=workshop;
    function workshop(){
        var workshop = "{{ $workshopData->workshop_name }}";
        var workshopData->workshop_name = workshop.split('_');
        document.getElementById('sub_heading').innerHTML = "Register for "+ workshopData->workshop_name[0];

        if (workshopData->workshop_name[1]){
            document.getElementById('sub_heading').innerHTML += " " + workshopData->workshop_name[1];
        }

    }
</script>

<script type="text/javascript">
    $( document ).ready(function() {    //function to change options count
        if('{{ $workshopData->max_players }}' == '1'){
            document.getElementById('1member').style.display="block";
            document.getElementById('1plusmember').innerHTML="";
        }
        else if('{{ $workshopData->max_players }}' == '2' ){
            document.getElementById('1plusmember').style.display="block";
            document.getElementById('1member').innerHTML="";
            document.getElementById('team_members').innerHTML='<option value="0">Select</option><option id="1" value="1">1</option><option id="2" value="2">2</option></select>';
        }
        else if('{{ $workshopData->max_players }}' == '3' ){
            document.getElementById('1plusmember').style.display="block";
            document.getElementById('1member').innerHTML="";
            document.getElementById('team_members').innerHTML='<option value="0">Select</option><option id="1" value="1">1</option><option id="2" value="2">2</option><option id="3" value="3">3</option></select>';
        }
        else if('{{ $workshopData->max_players }}' == '4' ) {
            document.getElementById('1plusmember').style.display="block";
            document.getElementById('1member').innerHTML="";
            document.getElementById('team_members').innerHTML='<option value="0">Select</option><option id="1" value="1">1</option><option id="2" value="2">2</option><option id="3" value="3">3</option><option id="4" value="4">4</option></select>';
        }
        else if('{{ $workshopData->max_players }}' == '5'){
            document.getElementById('1plusmember').style.display="block";
            document.getElementById('1member').innerHTML="";
            document.getElementById('team_members').innerHTML='<option value="0">Select</option><option id="1" value="1">1</option><option id="2" value="2">2</option><option id="3" value="3">3</option><option id="4" value="4">4</option><option id="5" value="5">5</option></select>';
        }
        else if('{{ $workshopData->max_players }}' == '6'){
            document.getElementById('1plusmember').style.display="block";
            document.getElementById('1member').innerHTML="";
            document.getElementById('team_members').innerHTML='<option value="0">Select</option><option id="1" value="1">1</option><option id="2" value="2">2</option><option id="3" value="3">3</option><option id="4" value="4">4</option><option id="5" value="5">5</option><option id="6" value="6">6</option></select>';
        }
    });
</script>

<script type="text/javascript">
    var user;
    $("#team_members").change(function(){
        $('#diverge').hide();
        $('#reg').show();
        var formcount=document.getElementById('team_members').value;
        document.getElementById('forms').innerHTML='';

        for(var i=1;i<=formcount;i++){
            document.getElementById('forms').innerHTML+=new_old(i)+new_email(i);
        }
        $("#imp").css("display", "block");
    });
    function create_forms(){
        var formcount=document.getElementById('team_members').value;
        document.getElementById('forms').innerHTML='';
        for(var i=1;i<=formcount;i++){

            document.getElementById('forms').innerHTML+=new_old(i)+new_email(i);
            // var register = '<input type="submit" value="Register" class="btn btn-default" id="reg">';

            // var contact = '<p class="college_text">Please <a href="http://www.techfest.org/contactus" target="_blank">contact us</a> if you face any difficulties in registration.</p></div>';
            $("#imp").css("display", "block");

            // document.getElementById('forms').innerHTML+=contact+register;
        }
    }
    function new_old(n){
        var workshop = "{{ $workshopData->workshop_name }}";
        if(n==1 || n=='1'){
            var heading='<h3 class="team_leader" style="color: #cc6600">Team Leader</h3><br />';
        }
        else{
            var heading='<h3 class="team_leader" style="color: #cc6600;margin-top:15px;">Participant '+n+'</h3><br />';
        }
        var new_old='<input type="radio" class="form-control" id="user' + n + '1" name="user' + n + '" style="display:none" checked="checked" onclick="replace(' + n + ',1)" />';
        var div_open='<div id="section' + n + '">';

        return heading+new_old+div_open;

    }
    function new_email(n) {
        var firstname='    <div class="form-group"><div class="col-md-6"><label class="control-label" for="team_id">First Name</label><input name="fname'+ n +'" required class="form-control" placeholder="First Name" type="text" pattern="[A-Za-z ]{1,70}"><input type="hidden" name="team_members" class="form-control" value=1 > <input type="hidden" name="user_session" value="{{ $session }}"><input type="hidden" name="workshopData->workshop_name" class="form-control" value="{{$workshopData->workshop_name}}"/></div></div>';

        var lastname='    <div class="form-group"><div class="col-md-6"><label class="control-label" for="team_id">Last Name</label><input name="lname'+ n +'" required class="form-control" placeholder="Last Name" pattern="[A-Za-z ]{1,70}" type="text"></div></div>';

        var email='<div class="form-group"><div class="col-md-6"><label class="control-label" for="team_id">Email</label><input name="email'+ n +'" required class="form-control" placeholder="Email ID" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" type="email"></div></div>';

        var country='<div class="form-group"><div class="col-md-6"><label class="control-label" for="team_id">Country</label><input name="country'+ n +'" required class="form-control" placeholder="Your country" pattern="[A-Za-z ]{1,70}" type="text"></div></div>';

        var city = '<div class="form-group"><div class="col-md-6"><label class="control-label" for="team_id">City</label><input name="city'+ n +'" required class="form-control" placeholder="City" pattern="[A-Za-z ]{1,70}" type="text"></div></div>';

        var col='<div class="form-group"><div class="col-md-6"><label class="control-label" for="team_id">College</label><input name="college'+ n +'"  required class="form-control" placeholder="College Name" pattern="[A-Za-z ]{1,70}" type="text"></div></div>';

        var year='<div class="form-group"><div class="col-md-6"><label for="sel1">Year : </label><select class="form-control" id="sel11" name="year'+ n +'"><option>Undergraduate 1st year</option><option>Undergraduate 2nd year</option><option>Undergraduate 3rd year</option><option>Undergraduate 4th year</option><option>DualDegree 5th year</option><option>Postgraduate 1st year</option><option>Postgraduate 2nd year</option><option>Postgraduate 3rd year</option><option>Other</option></select></div></div>';

        var phone='<div class="form-group"><div class="col-md-6"><label class="control-label" for="mobile">Mobile</label><input name="phone'+ n +'" required class="form-control" placeholder="Mobile No." pattern="[0-9 ]{10,10}" type="text"></div></div>';

        var address='<div class="form-group"><div class="col-md-6"><label class="control-label" for="team_id">Address</label><input name="address'+ n +'" required class="form-control" placeholder="Address" type="text"></div></div>';

        var pincode='<div class="form-group"><div class="col-md-6"><label class="control-label" for="pin_code">Pin Code <b></label><input name="pincode'+ n +'" required class="form-control" placeholder="Pin Code" pattern="[0-9 ]{6,6}" type="text"></div></div>';

        return firstname+lastname+email+country+city+col+year+phone+address+pincode;
    }

</script>
@endsection




