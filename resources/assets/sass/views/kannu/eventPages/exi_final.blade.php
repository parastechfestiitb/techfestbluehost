@extends('kannu.eventLayer')

@section('title','Exhibition | Techfest, IIT Bombay')
@section('style')

    <link rel="stylesheet" type="text/css" href="css/eventmobile.css">
    <link rel="stylesheet" type="text/css" href="css/hamburger.css">
    <link rel="stylesheet" href="css/topNavBar.css">

    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <style type="text/css">
        @import "https://fonts.googleapis.com/css?family=Raleway:400,300,200,500,600,700";
        .fa-spin-fast {
            -webkit-animation: fa-spin-fast 0.2s infinite linear;
            animation: fa-spin-fast 0.2s infinite linear;
        }
        @-webkit-keyframes fa-spin-fast {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }
        @keyframes fa-spin-fast {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(359deg);
                transform: rotate(359deg);
            }
        }
        .material-card {
            position: relative;
            height: 0;
            padding-bottom: calc(100% - 16px);
            margin-bottom: 6.6em;
        }
        .material-card h2 {
            position: absolute;
            top:200px;
            left: 0;
            width: 100%;
            padding: 10px 16px;
            color: #fff;
            font-size: 1.4em;
            line-height: 1.6em;
            margin: 0;
            z-index: 10;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        .material-card h2 span {
            display: block;
        }
        .material-card h2 strong {
            font-size: 15px;
            display: block;
        }
        .material-card h2:before,
        .material-card h2:after {
            content: ' ';
            position: absolute;
            left: 0;
            top: -16px;
            width: 0;
            border: 8px solid;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        .material-card h2:after {
            top: auto;
            bottom: 0;
        }
        @media screen and (max-width: 767px) {
            .material-card.mc-active {
                padding-bottom: 0;
                height: auto;
            }
        }
        .material-card.mc-active h2 {
            top: 0;
            padding: 10px 16px 10px 90px;
        }
        .material-card.mc-active h2:before {
            top: 0;
        }
        .material-card.mc-active h2:after {
            bottom: -16px;
        }
        .material-card .mc-content {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 16px;
            left: 16px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        .material-card .mc-btn-action {
            position: absolute;
            right: 16px;
            top: 15px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 5px solid;
            width: 54px;
            height: 54px;
            line-height: 44px;
            text-align: center;
            color: #fff;
            cursor: pointer;
            z-index: 20;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        .material-card.mc-active .mc-btn-action {
            top: 62px;
        }
        .material-card .mc-description {
            position: absolute;
            top: 100%;
            right: 30px;
            left: 30px;
            bottom: 54px;
            overflow: hidden;
            opacity: 0;
            filter: alpha(opacity=0);
            -webkit-transition: all 1.2s;
            -moz-transition: all 1.2s;
            -ms-transition: all 1.2s;
            -o-transition: all 1.2s;
            transition: all 1.2s;
        }
        .material-card .mc-footer {
            height: 0;
            overflow: hidden;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        .material-card .mc-footer h4 {
            position: absolute;
            width: 100%;
            top: 200px;
            left: 0px;
            padding: 0;
            margin: 0;
            font-size: 16px;
            font-weight: 700;
            -webkit-transition: all 1.4s;
            -moz-transition: all 1.4s;
            -ms-transition: all 1.4s;
            -o-transition: all 1.4s;
            transition: all 1.4s;
        }
        .material-card .mc-footer a {
            display: block;
            float: left;
            position: relative;
            width: 52px;
            height: 52px;
            margin-left: 5px;
            margin-bottom: 15px;
            font-size: 28px;
            color: #fff;
            line-height: 52px;
            text-decoration: none;
            top: 200px;
        }
        .material-card .mc-footer a:nth-child(1) {
            -webkit-transition: all 0.5s;
            -moz-transition: all 0.5s;
            -ms-transition: all 0.5s;
            -o-transition: all 0.5s;
            transition: all 0.5s;
        }
        .material-card .mc-footer a:nth-child(2) {
            -webkit-transition: all 0.6s;
            -moz-transition: all 0.6s;
            -ms-transition: all 0.6s;
            -o-transition: all 0.6s;
            transition: all 0.6s;
        }
        .material-card .mc-footer a:nth-child(3) {
            -webkit-transition: all 0.7s;
            -moz-transition: all 0.7s;
            -ms-transition: all 0.7s;
            -o-transition: all 0.7s;
            transition: all 0.7s;
        }
        .material-card .mc-footer a:nth-child(4) {
            -webkit-transition: all 0.8s;
            -moz-transition: all 0.8s;
            -ms-transition: all 0.8s;
            -o-transition: all 0.8s;
            transition: all 0.8s;
        }
        .material-card .mc-footer a:nth-child(5) {
            -webkit-transition: all 0.9s;
            -moz-transition: all 0.9s;
            -ms-transition: all 0.9s;
            -o-transition: all 0.9s;
            transition: all 0.9s;
        }
        .material-card .img-container {
            overflow: hidden;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 3;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            -ms-transition: all 0.3s;
            -o-transition: all 0.3s;
            transition: all 0.3s;
        }
        .material-card.mc-active .img-container {
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            left: 0;
            top: 12px;
            width: 60px;
            height: 60px;
            z-index: 20;
        }
        .material-card.mc-active .mc-content {
            padding-top: 5.6em;
        }
        @media screen and (max-width: 767px) {
            .material-card.mc-active .mc-content {
                position: relative;
                margin-right: 16px;
            }
        }
        .material-card.mc-active .mc-description {
            top: 50px;
            padding-top: 5.6em;
            opacity: 1;
            filter: alpha(opacity=100);
        }
        @media screen and (max-width: 767px) {
            .material-card.mc-active .mc-description {
                position: relative;
                top: auto;
                right: auto;
                left: auto;
                padding: 50px 30px 70px 30px;
                bottom: 0;
            }
        }
        .material-card.mc-active .mc-footer {
            overflow: visible;
            position: absolute;
            top: calc(100% - 16px);
            left: 16px;
            right: 0;
            height: 0px;
            padding-top: 15px;
            padding-left: 25px;
        }
        .material-card.mc-active .mc-footer a {
            top: 0;
        }
        .material-card.mc-active .mc-footer h4 {
            top: -32px;
        }
        .material-card.Red h2 {
            background-color: #2b5d66;
            opacity: 1;
        }
        .material-card.Red h2:after {
            border-top-color: #2b5d66;
            border-right-color: #2b5d66;
            opacity: 0.7;
            border-bottom-color: transparent;
            border-left-color: transparent;
        }
        .material-card.Red h2:before {
            border-top-color: transparent;
            border-right-color: #2b5d66;
            border-bottom-color: #2b5d66;
            border-left-color: transparent;
        }
        .material-card.Red.mc-active h2:before {
            border-top-color: transparent;
            opacity: 0.7;
            border-right-color: #2b5d66;
            border-bottom-color: #2b5d66;
            border-left-color: transparent;
        }
        .material-card.Red.mc-active h2:after {
            border-top-color: #2b5d66;
            border-right-color: #2b5d66;
            border-bottom-color: transparent;
            border-left-color: transparent;
        }
        .material-card.Red .mc-btn-action {
            background-color: #2b5d66 !important;
        }
        .material-card.Red .mc-btn-action:hover {
            background-color: #2b5d66 !important;
        }
        .material-card.Red .mc-footer h4 {
            color: #2b5d66;
        }
        .material-card.Red .mc-footer a {
            background-color: white;
        }
        .material-card.Red.mc-active .mc-content {
            background-color: #FFEBEE;
        }
        .material-card.Red.mc-active .mc-footer {
            background-color: #FFCDD2;
        }
        .material-card.Red.mc-active .mc-btn-action {
            border-color: #FFEBEE;
        }
        .img-container{
            border-radius: 10px;
        }
        .mc-btn-action {
            display: none;
        }
        /*.img-responsive{
            width: 347.922px;
            height: 344px;
        }*/
        body {
            background-color: black;
            color: #37474F;
            font-family: 'Raleway', sans-serif;
            font-weight: 300;
            font-size: 16px;
        }
        h1,
        h2,
        h3 {
            font-weight: 200;
        }
        .fa-bars{
            line-height: 42px;
        }
        .fa-arrow-left{
            line-height: 42px;
        }
        .material-card .img-container{
            height:260px !important;
            overflow:hidden !important;
        }
    </style>
@endsection


@section('content')


    <div style="width:100%;height:77vh;margin-top:1vh;overflow:scroll; padding-top: 25px;">
        <section class="container">
            <div class="row active-with-click">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Hypervsn Holograms</span><strong><i class="fa fa-fw fa-star"></i>Kino-mo, UK</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/hypervsn.jpg" style="    height: 440px;  max-width: none;    margin-left: -110px;">
                            </div>
                            <div class="mc-description">
                                The details of the Lecture will be updated soon
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Moon Rover</span><strong><i class="fa fa-fw fa-star"></i>Synergy Moon, USA</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/rover.jpg">
                            </div>
                            <div class="mc-description">
                                The details will be uploaded soon
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>DRDO Exhibits</span><strong><i class="fa fa-fw fa-star"></i>DRDO, India</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/LCA.jpg">
                            </div>
                            <div class="mc-description">
                                The details of the Lecture will be updated soon
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Nao Robot</span><strong><i class="fa fa-fw fa-star"></i>Softbank Robotics, Japan
                            </strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/nao-robot.jpg">
                            </div>
                            <div class="mc-description">
                                The details of the Lecture will be updated soon
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Moon Rover</span><strong><i class="fa fa-fw fa-star"></i>Team PULI, Hungary</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/2018/2.jpg"  style="height: 200px;max-width: none;">
                            </div>
                            <div class="mc-description">
                                The details of the Lecture will be updated soon
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Indian Navy</span><strong><br></strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/2018/a.jpg">
                            </div>
                            <div class="mc-description">
                                The details will be uploaded soon
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Nino Robot</span><strong><i class="fa fa-fw fa-star"></i>Sirena Technologies, India <br>Your Education Companion </strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/sirena.jpg">
                            </div>
                            <div class="mc-description">
                                Nino is an educational companion which learns and plays with you .It can be controlled using Android app and Windows Studio .Equipped with speakers and various sensors makes it possible for Nino to make learning fun. If every kid out there gets a chance (access) to play & learn with Humanoid Robots, then perhaps they would grow up and create a much better world through better technologies.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Ijini</span><strong><i class="fa fa-fw fa-star"></i>InnoplayLab, Republic of Korea</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/Innoplaylab.jpg" style="height: 351px;max-width: none;width: auto;margin-left: -371px;margin-top: -20px;">
                            </div>
                            <div class="mc-description">
                                Smart Home Social Robot, iJINI is a home assist robot providing various services at home. It supports voice recognition and natural language processing user interface and has auto charging function to perform various tasks at home. The services of iJINI are personal assistant by performing care services and information provision, home security and monitoring by patrolling user’s home ,detecting various  changes in the environment , home automation and Internet of Things. iJINI can also take photos or read story books and it’s touch sensors shall allow to interact with users by showing emotions moreover its interactive communication will allow user to make video / audio call and messaging.

                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Indian Army</span><strong><br></strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/2018/b.jpg">
                            </div>
                            <div class="mc-description">
                                The details will be uploaded soon
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>2U Comm Sat.</span><strong><i class="fa fa-fw fa-star"></i>Spacekidz India</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/2018/k.jpg">
                            </div>
                            <div class="mc-description">
                                VAIR(VISTouch AIR) is the system for mobile devices(iPhone, Android)
                                using positional tracking function of HTC VIVE. VAIR run on the iPhone and Android,
                                players can look at the virtual world like a window in the display of mobile devices.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Electric Bow</span><strong><i class="fa fa-fw fa-star"></i>Japan</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/2018/c.jpg" style="display: block;width:120%; max-width:none;height:auto">
                            </div>
                            <div class="mc-description">
                                The details of the Lecture will be updated soon
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Robotic Fish</span><strong><i class="fa fa-fw fa-star"></i>Mini Robot Corp. South Korea</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/robot fish.jpg">
                            </div>
                            <div class="mc-description">

                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span></span>Unmanned Ground Vehicles<strong><i class="fa fa-fw fa-star"></i>Nanyang Technological University, Singapore</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/ntu_mecatron.jpg">
                            </div>
                            <div class="mc-description">
                                The details of the Lecture will be updated soon
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Fable</span><strong><i class="fa fa-fw fa-star"></i>Shape Robotics, Denmark</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/fsr.jpg">
                            </div>
                            <div class="mc-description">
                                The details of the Lecture will be updated soon
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Grammy Robot</span><strong><i class="fa fa-fw fa-star"></i>GBL Robotics, USA</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/grammy.jpg" style=" height: 250px;  margin-top: -20px;">
                            </div>
                            <div class="mc-description">
                                Grammy is a multi lingual robot that can speak and understand 20 languages.It can remember and recognise 250000 faces and also guide you to office room or show the way to shelf. Moreover it follows your face while making 5 emotions faces.

                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>VisionLabs &amps; Ace 3 Solutions</span><strong><i class="fa fa-fw fa-star"></i>Netherlands</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/vision_labs.png" style="    height: 400px;    max-width: none;width: auto; margin-left: -400px;   margin-top: -85px;">
                            </div>
                            <div class="mc-description">
                                3D face reconstruction from single photo is made possible by the use of face landmarking technology and a deformable virtual face. Your individual features such as lip contours, eyes, eyebrows and overall outline of the face get detected in the photo, then the virtual face gets fit to those.The algorithms learn from a large corpus of data annotated by hand. The data is comprised of thousands of face images with landmarks positioned on them.The face scans vary in appearance as people do. These variations allow to build new virtual faces as the blends of the actual scans.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Labyrinth</span><strong><i class="fa fa-fw fa-star"></i>Fab Lab, Russia</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/2018/l.jpg">
                            </div>
                            <div class="mc-description">
                                VAIR(VISTouch AIR) is the system for mobile devices(iPhone, Android)
                                using positional tracking function of HTC VIVE. VAIR run on the iPhone and Android,
                                players can look at the virtual world like a window in the display of mobile devices.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Universal Robots</span><strong><i class="fa fa-fw fa-star"></i>Industrial Automation Robots, Denmark</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/universal_robots.png" style="        width: auto;    max-width: none;    height: 93%;    margin-left: -80px;      margin-top: -3%;">
                            </div>
                            <div class="mc-description">
                                Three different collaborative robots are integrated into existing production environments. With six articulation points, and a wide scope of flexibility, the collaborative robot arms are designed to mimic the range of motion of a human arm.Automate virtually anything with the collaborative robot arms. From gluing and mounting to pick and place, and packaging, the robotic arms can streamline and optimise processes across the production operation.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>VAIR</span><strong><i class="fa fa-fw fa-star"></i>Cenote Inc., Japan</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/VAIR.png">
                            </div>
                            <div class="mc-description">
                                VAIR(VISTouch AIR) is the system for mobile devices(iPhone, Android)
                                using positional tracking function of HTC VIVE. VAIR run on the iPhone and Android,
                                players can look at the virtual world like a window in the display of mobile devices.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <article class="material-card Red">
                        <h2><span>Mind Controlled Helicopter</span><strong><i class="fa fa-fw fa-star"></i>Neurosky, USA</strong></h2>
                        <div class="mc-content">
                            <div class="img-container">
                                <img class="img-responsive" src="https://techfest.org/img/exi17/asdfasdf1.jpg">
                            </div>
                            <div class="mc-description">
                                The Puzzlebox Orbit is a brain-controlled helicopter. Operated with an EEG headset, users can fly the Orbit by focusing their concentration
                                and clearing their mind.What makes thePuzzlebox Orbit truly unique however is the open release of all source code.
                                Puzzlebox seeks to aid the pursuit of science and education by inviting its users to modify their products and make them their own.
                            </div>
                        </div>
                        <a class="mc-btn-action">
                            <i class="fa fa-bars"></i>
                        </a>
                        <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

                        <div class="mc-footer">
                            <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                        </div>
                    </article>
                </div>

            </div>
        </section>

    </div>


    <script type="text/javascript">
        $(function() {
            $('.material-card > .mc-btn-action').click(function () {
                var card = $(this).parent('.material-card');
                var icon = $(this).children('i');
                icon.addClass('fa-spin-fast');

                if (card.hasClass('mc-active')) {
                    card.removeClass('mc-active');

                    window.setTimeout(function() {
                        icon
                            .removeClass('fa-arrow-left')
                            .removeClass('fa-spin-fast')
                            .addClass('fa-bars');

                    }, 800);
                } else {
                    card.addClass('mc-active');

                    window.setTimeout(function() {
                        icon
                            .removeClass('fa-bars')
                            .removeClass('fa-spin-fast')
                            .addClass('fa-arrow-left');

                    }, 800);
                }
            });
        });
    </script>
@endsection









