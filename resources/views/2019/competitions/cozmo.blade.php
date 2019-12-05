<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cozmo</title>

    <link rel="shortcut icon" type="image/x-icon" href="/2019/ca/images/favicon_logo.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/style.css">

    {{--    <!-- Modernizr JS -->--}}
    <script src="/2019/compi/cozmo/js/modernizr-2.6.2.min.js"></script>
    {{--    <!-- FOR IE9 below -->--}}
<!--[if lt IE 9]>-->
    <script src="/2019/compi/cozmo/js/respond.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    {{--    <![endif]-->--}}
    <style>
        #toast {
            visibility: hidden;
            max-width: 50px;
            height: 50px;
            /*margin-left: -125px;*/
            margin: auto;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;

            position: fixed;
            z-index: 1;
            left: 0;right:0;
            bottom: 30px;
            font-size: 17px;
            white-space: nowrap;
        }
        #toast #img{
            width: 50px;
            height: 50px;

            float: left;

            padding-top: 16px;
            padding-bottom: 16px;

            box-sizing: border-box;


            background-color: #111;
            color: #fff;
        }
        #toast #desc{


            color: #fff;

            padding: 16px;

            overflow: hidden;
            white-space: nowrap;
        }

        #toast.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes expand {
            from {min-width: 50px}
            to {min-width: 350px}
        }

        @keyframes expand {
            from {min-width: 50px}
            to {min-width: 350px}
        }
        @-webkit-keyframes stay {
            from {min-width: 350px}
            to {min-width: 350px}
        }

        @keyframes stay {
            from {min-width: 350px}
            to {min-width: 350px}
        }
        @-webkit-keyframes shrink {
            from {min-width: 350px;}
            to {min-width: 50px;}
        }

        @keyframes shrink {
            from {min-width: 350px;}
            to {min-width: 50px;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 60px; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 60px; opacity: 0;}
        }

    </style>
    <style>
        .bg_1 {
            position: fixed;
            top: 00vw;
            height: calc(200vw + 4px);
            overflow: hidden;
        }
        body{
            font-family: Lato;
        }
        .border {
            scrollbar-width: none;
        }



        scroll_inside{
            width: 90%;
            display:block;
            border-radius: 20px;
            background-color: #fff;
            margin-bottom: 1%;
            overflow-y: scroll;
            height:20%;
            border: 1px solid #000000;
            font-size: 17px;
            font-family: Lato;

        }

        @media (min-width:992px) {

            .mobile_hide{
                background-color: white;

                background-size: contain;
                background-image: url(/2019/compi/images/cozmo.png) ;
                box-shadow: 5px 5px 6px darkgray;
                /*border: solid 2.5px;*/
                /*border-radius: 5px;*/

            }
            .about-img{

            }
        }
        @media (max-width:992px) {

            .mobile_hide{
                height: 0px;
            }
            .about-img{

            }
        }



    </style>
    <style>

        @-webkit-keyframes rotation {
            from {
                -webkit-transform: rotateZ(0deg);
            }
            to {
                -webkit-transform: rotateZ(359deg);
            }
        }
        .mandala1 {
            position: fixed;
            top: calc(30% - 140px);
            left: calc(2% - 330px);
            height: 900px;
            /*width: 680px;*/
            z-index:0;
            overflow-x: hidden;
            opacity: 0.2;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            /*animation: rotation 30s infinite linear;*/
            /*rotation: 20deg;*/
        }
        .mandala2 {
            position: fixed;
            top: calc(15% - 140px);
            left: calc(90% - 330px);
            height: 300px;
            z-index:0;
            overflow-x: hidden;
            opacity: 0.2;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            animation: rotation 10s infinite linear;
            /*rotation: 20deg;*/
        }
        .mandala3 {
            position: fixed;
            top: calc(75% - 140px);
            left: calc(102% - 330px);
            height: 450px;
            /*width: 680px;*/
            z-index:0;
            overflow-x: hidden;
            opacity: 0.2;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            animation: rotation reverse 15s infinite linear;
            /*rotation: 20deg;*/
        }

    </style>
    <style>
        .dropbtn {
            background-color: transparent;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {background-color: #f1f1f1;}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: black;
        }
    </style>
    <style>
        .sign_in{
            /*margin: 0%;*/
            float: right;
        }
        .mandala1 {
            position: absolute;
            top: calc(30% - 140px);
            left: calc(32% - 330px);
            height: 600px;
            z-index:0;
            overflow: hidden;
            opacity: 0.2;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            /*animation: rotation 30s infinite linear;*/
            /*rotation: 20deg;*/
        }
    </style>
    <style>
        #snackbar {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
        }

        #snackbar.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, fadeout 0.5s 2.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 0; opacity: 0;}
        }
    </style>
</head>

<body>

<img class="bg_1" src="/2019/compi/images/web_backgrounds_1.png"  alt="">
<img class="mandala1" src="/2019/homepage/images/b_mandala.png" >

<div id="colorlib-page"  >
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight" >
        <img src="/2019/homepage/logo_edit.png" alt="" style="width: 130%; margin-left:-15%">
        <nav id="colorlib-main-menu" role="navigation" style="margin-top: 150%; font-size: medium; ">
            <ul>
                <li ><a href="https://techfest.org/2019/competitions">Home</a></li>
                <li ><a onclick="myFunction2()">FaQs</a></li>
                <li ><a onclick="myFunction1()">Structure</a></li>
                <li ><a onclick="myFunction3()">Resources</a></li>
                <li ><a onclick="myFunction4()">Contact Us</a></li>

            </ul>
        </nav>


    </aside>

    <div id="colorlib-main">
        @if(empty($user_row->email))
        <button class="btn btn-primary btn-learn  sign_in" id="signinButton" style="float: right;margin-top: 4px">Sign In</button>
        @endif

        @if(!empty($user_row->email))
        <button class="btn btn-primary btn-learn  sign_in" style="float: right;margin-top: 4px"><a href="https://techfest.org/2019/competitions/logout" >Sign Out</a></button>
        @endif
        <div class="dropdown " style="float:right;">
            <button class=" btn btn-primary btn-learn " style="margin-top: 4px;">All Competitions</button>
            <div class="dropdown-content">
                <a href="#">Cozmo</a>
                <a href="#">Meshmerize</a>
                <a href="#">CoDecode</a>
                <a href="#">Operation Rahat</a>
                <a href="#">Micromouse</a>
                <a href="#">Rowbotics</a>
                <a href="#">CoDecode</a>
            </div>
        </div>


        {{--        <button class="btn sign_in">Sign-In</button>--}}


        <div class="colorlib-about" style="margin-top: -20px;padding-top: 0px;">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-4 " style="margin-left: 4%; width: 30%; height: 50%">
                        <div class="about-img animate-box mobile_hide" data-animate-effect="fadeInLeft"></div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft" style="margin-right:-1%; padding-left:2.5% ;padding-right: -50%">
                        <div class="about-desc" style="margin-right: 20%; padding: 0px" >
                            {{--                            <span class="heading-meta">Welcome &amp; Introduce</span>--}}
                            <h2 style="color: white; font-weight: bold">Cozmo!</h2>
                            <hr style="color: white; border: 1px solid white">
                            <h3 style="color: white">Prize Money </h3>
                            <p style=" font-size: 15px; width:90%; font-family: Lato;color: white ">{{$user_row->name}} Your team must build a manually controlled bot which can do simple tasks of gripping blocks while overcoming the obstacles and completing the run by earning maximum points in minimum time. The bot can be wired or wireless. In case the participants use a wireless mechanism, they must use a dual frequency remote.<p>
                            </p>
                            <?php
                            $current_user_data = DB::table('tf_reg')->where(['email' => session()->get('user')->email])->first();
                            $team =  DB::table('tf_reg')->where(['cozmo_team' => $user_row->cozmo_team])->get();
                            ?>
                            <a href="/2019/compi/ps/PS Cozmo zonals Final.pdf" target="_blank" class="btn btn-primary btn-learn">Problem Statement</a>

                        @if(!empty($user_row->email))
                                    @if($user_row->cozmo == 0 or empty($user_row->cozmo))
{{--                                        if he is not registered--}}
                                        <a href="https://techfest.org/2019/competitions/cozmo/reg" class="btn btn-primary btn-learn" >Register</a>
                                    @endif
                                    @if($user_row->cozmo == 1 && empty($user_row->cozmo_team))
                                    <div class="dropdown ">
                                        <button class=" btn btn-primary btn-learn"><b>Team</b></button>
                                        <div class="dropdown-content">
                                            <a href="https://techfest.org/2019/competitions/cozmo/createteam">Create Team</a>
                                            <a href="https://techfest.org/2019/competitions/cozmo/jointeam">Join Team</a>
                                        </div>
                                    </div>
                                    @endif

                                    @if(!empty($user_row->cozmo_team))
                                        @if($user_row->cozmo_team != $user_row->email )
                                        <a href="https://techfest.org/2019/competitions/cozmo/leaveteam" class="btn btn-primary btn-learn" >Leave current Team</a>
                                        @endif
                                            @if($user_row->cozmo_team == $user_row->email )
                                                <a href="https://techfest.org/2019/competitions/cozmo/dissolveteam" class="btn btn-primary btn-learn" >Dissolve the team</a>
                                                <div class="dropdown ">
                                                    <button class=" btn btn-primary btn-learn">Remove a Member</button>
                                                    <div class="dropdown-content">
                                                        <a href="https://techfest.org/2019/competitions/cozmo/remove/{{$team[1]->id}}">{{$team[1]->name}}</a>
                                                        <a href="https://techfest.org/2019/competitions/cozmo/jointeam">{{$team[2]->name}}</a>
                                                        <a href="https://techfest.org/2019/competitions/cozmo/jointeam">{{$team[3]->name}}</a>
                                                    </div>
                                                </div>
                                            @endif
                                    @endif
                            @endif
                            @if(empty($user_row->email))
                                <button class="btn btn-primary btn-learn" onclick="myFunction()">Register</button>
                            @endif
                            <div id="snackbar">Sign in to register</div>
                            @if($user_row->cozmo > 0 && empty($user_row->cozmo_team))
                                <div class="alert alert-success">
                                    <p><strong>Hi {{$user_row->name}}, you are successfully registered for this compi with <b>{{$user_row->email}}</b> as your registered email id , now you must create/join a team.</strong></p>
                                </div>
                            @endif
                            @if($user_row->cozmo > 0 && !empty($user_row->cozmo_team))
                                <div class="" style="    border: solid 2px white;border-radius: 6px;padding: 2%;width: 95%">
                                    <p style="color: white">
                                        @if(!empty($team[0]->name))
                                        Member1 : {{$team[0]->name}}
                                        @endif
                                        @if(!empty($team[1]->name))
                                        | Member2 : {{$team[1]->name}}
                                            @endif
                                    </p>

                                    <p style="color: white; margin-bottom: 0px;">
                                        @if(!empty($team[2]->name))
                                        Member3 : {{$team[2]->name}}
                                        @endif
                                            @if(!empty($team[3]->name))
                                        | Member4 : {{$team[3]->name}}
                                        @endif
                                    </p>
                                </div>
                                <br>
                            @endif


                        </div>

                    </div>
                </div>
            </div>

        </div>

        {{--        <div class="scroll box123">--}}
        <div id="text_change" class="col-md-12 animate-box scroll_inside" data-animate-effect="fadeInLeft" style="
            width: 80%;
            display:block;
            border-radius: 5px;
            /*background-color: #fff;*/
            margin-bottom: 1%;
            height:20%;
            left: 5%;
            color: white;
            border: 1px solid white;
            font-size: 17px;
            font-family: 'Muli', sans-serif;">
            <p id="text_change" style="margin-bottom: 0px; color: white">
        <br>Teams must build a manually controlled bot which can do simple tasks of gripping blocks while overcoming the obstacles and completing the run by earning maximum points in minimum time. The bot can be wired or wireless. In case the participants use a wireless mechanism, they must use a dual frequency remote.<br>
                <br></p>
        </div>
        {{--        </div>--}}
    </div>
</div>

<form action="" method="post" id="h-form" class="">
    {{csrf_field()}}
    <input type="hidden" name ="code" id="name2" style="background-color: blue">
</form>

<!-- jQuery -->
<script src="/2019/compi/cozmo/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/2019/compi/cozmo/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/2019/compi/cozmo/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/2019/compi/cozmo/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="/2019/compi/cozmo/js/jquery.flexslider-min.js"></script>
<!-- Sticky Kit -->
<script src="/2019/compi/cozmo/js/sticky-kit.min.js"></script>


<!-- MAIN JS -->
<script src="/2019/compi/cozmo/js/main.js"></script>

<script>
    function launch_toast() {
        var x = document.getElementById("toast")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    }
</script>

<script>
    function myFunction() {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
    }
</script>
<script>
    function myFunction0() {
        document.getElementById("text_change").innerHTML = "<br>Teams must build a manually controlled bot which can do simple tasks of gripping blocks while overcoming the obstacles and completing the run by earning maximum points in minimum time. The bot can be wired or wireless. In case the participants use a wireless mechanism, they must use a dual frequency remote.<br>";
        // document.getElementById("text_change").innerHTML = "";
    }
</script>

<script>
    function myFunction1() {
        document.getElementById("text_change").innerHTML = "<br>Top 5 teams of from each Zonal Qualifier will qualify for Grand Finale to be held during Techfest 2019-20 (provided their score is more than a minimum cut-off score which will be decided later).<br><br>";
    }
</script>

<script>
    function myFunction2() {
        document.getElementById("text_change").innerHTML = "<br>Q. Why should I participate in Cozmo Clench? <br>" +
            "A. The competition provides its participants with a reasonable grasp of important mechanical and programming principles that will take them in the direction of being able to design and construct their own gripping robot. Participants work together to design and build a robotic vehicle that can navigate on an obstacle-filled course while moving blocks from one location to another.<br>" +
            "<br>Q. How to register?<br>A.Follow this steps for registration :\n" +
            "www.techfest.org -> Competitions > Cozmo Clench -> Explore More -> Register -> Fill all your details -> Your team will be formed and now you can add other team members<br>" +
            "<br>Q. How many people can be there in one team?\n" +
            "<br>A.One team can have maximum of 4 members.<br>" +
            "<br>Q. Can a team have members from different colleges?\n" +
            "<br>A.Yes, students from different colleges can form a team.<br>" +
            "<br>Q. How many stages does the competition have?\n" +
            "<br>A.The competition has two stages: namely zonal qualifier and finale. Top five teams from Each Zonal Qualifier will qualify for the Grand Finale at Techfest 2019-20." +
            "<br><br>Q. Can I register in more than one competition?\n" +
            "<br>A. Yes, you can participate in more than one competition. However, it is recommended to focus on one competition as there may be some chances of slots clashing." +
            "<br><br>Q. Will any charging facility for our equipment be provided at the venue?\n" +
            "<br>A. Any kind of charging facility will not be provided to the participants at the venue. The bot must have an onboard power supply.<br><br>";
    }
</script>


<script>
    function myFunction3() {

        document.getElementById("text_change").innerHTML = " <br>" +
            "<a style='color: white' href='http://lab.fs.uni-lj.si/lasim/studenti/SEMINARJI_MONTAZA/Guidelines%20for%20the%20design%20of%20robotic%20gripping%20system_doc.pdf'>1. <u>Guidelines for Design</u></a> | " +
            "<a style='color: white' href='http://www.hrpub.org/download/201310/ujme.2013.010303.pdf'>2. <u>Home made Gripper Bot</u></a> | " +
            "<a style='color: white' href='https://www.instructables.com/id/Home-made-robot-gripper/'>3. <u>Robotic Arm</u></a><br><br>";

    }
</script>

<script>
    function myFunction4() {
        document.getElementById("text_change").innerHTML = "<br>Name: Nisarg Tolia <br>+91 942 990 4329 <br><br> ";
    }
</script>
<style>
    $(".modal-backdrop").click()
</style>
<script>
    function loadScript( url, callback ){
        script = document.createElement("script");
        script.type = "text/javascript";
        if(script.readyState) {
            script.onreadystatechange = function() {
                if ( script.readyState === "loaded" || script.readyState === "complete" ) {
                    script.onreadystatechange = null;
                    callback();
                }
            };
        } else {
            script.onload = function() {
                callback();
            };
        }
        script.src = url;
    }
    function start() {
        gapi.load('auth2', function() {
            auth2 = gapi.auth2.init({
                client_id: '218886856483-4lnh6s9mvguid18098antfdltvosd7ln.apps.googleusercontent.com',
            });
        });

    }
    function authCheck(){
        console.log('called');
        auth2.grantOfflineAccess().then(response => {
            $('#name2').val(response.code);
            $("#h-form").submit();
        });

    }
    loadScript("https://apis.google.com/js/client:platform.js",function(){
        start();
        $('#signinButton, #googleLogin').click(function(){

            authCheck();
        });

    });
    document.getElementsByTagName( "head" )[0].appendChild( script );

    // $("#h-form").submit();
    // document.getElementById("h-form").submit();// Form submission

</script>

</body>
</html>




{{--        <div class="fancy-collapse-panel">--}}
{{--            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">--}}
{{--                <div class="panel panel-default">--}}
{{--                    <div class="panel-heading" role="tab" id="headingOne">--}}
{{--                        <h4 class="panel-title">--}}
{{--                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why choose me?--}}
{{--                            </a>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">--}}
{{--                        <div class="panel-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="panel panel-default">--}}
{{--                    <div class="panel-heading" role="tab" id="headingTwo">--}}
{{--                        <h4 class="panel-title">--}}
{{--                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What I do?--}}
{{--                            </a>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">--}}
{{--                        <div class="panel-body">--}}
{{--                            <!--									            <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>-->--}}
{{--                            <ul>--}}
{{--                                <li>Q. Why should I participate in Cozmo Clench?</li>--}}
{{--                                <li>A. The competition provides its participants with a reasonable grasp of important mechanical and programming principles that will take them in the direction of being able to design and construct their own gripping robot. Participants work together to design and build a robotic vehicle that can navigate on an obstacle-filled course while moving blocks from one location to another.</li>--}}
{{--                                <li>Q. How to register?</li>--}}
{{--                                <li>A. Follow these steps for registration :</li>--}}
{{--                                <p>   www.techfest.org -> Competitions > Cozmo Clench -> Explore More -> Register -> Fill all your details -> Your team will be formed and now you can add other team members </p>--}}
{{--                                <li>Q. How many people can be there in one team?</li>--}}
{{--                                <li>A. One team can have maximum of 4 members.</li>--}}
{{--                                <li>Q. Can a team have members from different colleges?</li>--}}
{{--                                <li>A. Yes, students from different college can form a team.</li>--}}
{{--                                <li>Q. How many stages does the competition have?</li>--}}
{{--                                <li>A. Two, namely zonal qualifier and finale. Top five teams from Each Zonal Qualifier will qualify for the Grand Finale at Techfest 2019-20.</li>--}}
{{--                                <li>Q. Can I register in more than one competition?</li>--}}
{{--                                <li>A. Yes, you can participate in more than one competition. However, it is recommended to focus on one competition as there may be some chances of slot clash.</li>--}}
{{--                                <li>Q. Will any charging facility for our equipment be provided at the venue?</li>--}}
{{--                                <li>A. Any kind of charging facility will not be provided to the participants at the venue. The bot must have an onboard power supply.</li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="panel panel-default">--}}
{{--                    <div class="panel-heading" role="tab" id="headingThree">--}}
{{--                        <h4 class="panel-title">--}}
{{--                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">My Specialties--}}
{{--                            </a>--}}
{{--                        </h4>--}}
{{--                    </div>--}}
{{--                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">--}}
{{--                        <div class="panel-body">--}}
{{--                            <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

