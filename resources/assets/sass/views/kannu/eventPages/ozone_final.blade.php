@extends('kannu.eventLayer')

@section('title','Ozone | Techfest, IIT Bombay')
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
    


    <div style="width:90%;margin-left:5%;text-align:center;height:70%;position:fixed;font-family:&#39;Play&#39;;top:15%">
        <p style="margin-top:25;color:#fff;font-size:24"> OZONE </p>

        <div style="width:100%;height:77vh;margin-top:1vh;overflow:scroll;padding-top:25px">
            <p style="margin-top:25;color:#fff"><i></i> Artists <i></i></p>

            <div>
                <div>

                    <h2><span>BMX Jam</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="http://./Exhibition+_+Techfest,+IIT+Bombay+_+Techfest+2017-18,+IIT+Bombay+_+Asia&#39;s+Largest+Science+and+Technology+Festival_files/b.jpg" style="height:90%;width:100%">
                        </div>
                        <div>
                           BMX artists will showcase their talent in this  awe-strucking performance <br>
Venue - NCC
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>Cosplay</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Artist/c.jpg">
                        </div>
                        <div>
                           Up your style game by dressing up as your favourite character ime, cartoons, comic books etc.&quot;
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>Juan Pablo</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Artist/jp.jpg">
                        </div>
                        <div>
                           Experience the perfect blend of deception and manipulation  with the Argentian magician , Juan Pablo
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <p style="margin-top:25;color:#fff"><i></i> Setups <i></i></p>
                <div>

                    <h2><span>Augmented Climbing</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Setups/ac.png" style="height:90%;width:100%">
                        </div>
                        <div>
                            Experience this wonderful and thrilling game with its maiden appearance at Techfest IIT Bombay
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>Drone Aviation</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Setups/da.jpg" style="height:250px;max-width:none;width:auto;margin-left:0">
                        </div>
                        <div>
                           Get hands-on experience at flying drones 
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>Fulldome Pro</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Setups/fp.jpg">
                        </div>
                        <div>
                            A never-before experienced 360 degree  immersive visual experience 
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>9D-VR</span><strong>
                        </strong>
                    </h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Setups/9.jpg" style="height:90%">
                        </div>
                        <div>
                            Experience exciting simulation which includes motion effects as well
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>10D-VR Flight Simulator</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Setups/10.jpg" style="height:250px;max-width:none;width:100%">
                        </div>
                        <div>
                           Take your Virtual Reality experience to 10th Dimension;
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>All Terran Vehicle</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Setups/atv.jpg" style="Height:90%">
                        </div>
                        <div>
                           A never-before experienced 360 degree  immersive visual experience 
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>Go Karting</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Setups/g.jpg">
                        </div>
                        <div>
                           Unleash your  passion for GoKarting
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>Laser Tag</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Setups/lt.jpg" style="display:block;width:120%;max-width:none;height:80%">
                        </div>
                        <div>
                           Defeat the opposite team in tactical combat using Laser equipped Guns
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>Paint Ball</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Setups/p.jpg" style="height:80%">
                        </div>
                        <div>
                           Get out on the battlefield as Techfest presents to you the ever so classic game of paintball
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span></span>Sony PS$ VR<strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Setups/s.jpg">
                        </div>
                        <div>
                            Discover a new world of unexpected gaming and entertainment experiences with PlayStation VR
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>Diabolo Workshop</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Workshops/d.jpg" style="height:80%">
                        </div>
                        <div>
                           DIabolo art and juggling by well known Krzysztof Riewold
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>
                <div>

                    <h2><span>Game society</span><strong></strong></h2>
                    <div>
                        <div>
                            <img src="https://techfest.org/img/android/Ozone+Content/Workshops/d.jpg" style="height:80%">
                        </div>
                        <div>
                            Strategise to reach the zenith!. Stretch your minds to outwit your opponents.
                        </div>
                    </div>
                    <a>
                        <i></i>
                    </a>

                    <div>
                        <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
                    </div>

                </div>

                --&gt;











            </div>

        </div>
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









