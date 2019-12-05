<?php
$meta = [
    'title' => 'Cyclothon | Techfest 2018-19' ,
    'description' => 'Life is like riding a bicycle. To keep your balance, you must keep moving. If you enjoy cycleing, and you love greenry and you love mumbai, come join us at Cyclothon 2018' ,
    'keywords' => 'Cyclothon, Cycling, mumbai cycling, biker, techfest 2018, cycle techfest, techfest 2018 cycling'
];
?><!DOCTYPE html>
<html>
<head>
    <title>Cyclothon | Techfest 2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Fettle a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <meta charset="utf-8">
    <link rel="icon" href="https://techfest.org/2018/Cyclothon/images/cyclothon-short.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{$meta['title']}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$meta['description']}}">
    <meta name="keywords" content="{{$meta['keywords']}}">
    <link rel="canonical" href="https://m.techfest.org">
    <link rel="author" href="https://plus.google.com/117706965098999491468" />
    <meta name="theme-color" content="#333333">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{asset('2018/Cyclothon/images/thumbnail.jpg')}}">
    <meta property="og:description" content="{{$meta['description']}}">
    <meta property="og:title" content="{{$meta['title']}}">
    <meta property="og:site_name" content="Techfest 2018-19">
    <meta property="og:see_also" content="https://m.techfest.org">

    <meta itemprop="name" content="{{$meta['title']}}">
    <meta itemprop="description" content="{{$meta['description']}}">
    <meta itemprop="image" content="{{asset('2018/Cyclothon/images/thumbnail.jpg')}}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:title" content="{{$meta['title']}}">
    <meta name="twitter:description" content="{{$meta['description']}}">
    <meta name="twitter:image" content="{{asset('2018/Cyclothon/images/thumbnail.jpg')}}">
    <style>
        html{
            scroll-behavior: smooth;
            overflow-x:hidden;
        }
        .mt-2{
            margin-top: 1rem;
        }
        .mb-2{
            margin-bottom: 1rem;
        }
        .short-container{
            margin: inherit 10px;
        }
        @media(min-width:1675px){
            .d-md-none{
                display: none;
            }
        }
        @media(max-width:1675px){
            .d-sm-none{
                display:none;
            }
        }
        @media(max-width: 992px){
            .d-xs-none{
                display: none;
            }
            .timeline-image img{
                height: 55px;
            }
            .cycle-why{
                display: none;
            }
        }
        @media(min-width:992px){
            .d-ls-none{
                display: none;
            }
            .cycle-why{
                width: 100% !important;
            }
        }
        ul.top_nav li{
            margin: 0 !important;
        }
        ul.top_nav a{
            margin: 10px 2px;
        }
        .img-40 img{
            height:50px !important;
        }
        @media(min-height:1200px){
            .hide-up-1200{
                display: none !important;
            }
        }
        @media(max-height:1200px){
            .hide-down-1200{
                display: none !important;
            }
        }
        @media (max-width: 767px){
            ul.top_nav li {
                display: block;
                margin: 18px 0 !important;
            }
        }
        @media (min-width:768px) and (max-width:1250px){
            .dynamic-display{
                display:none !important;
            }
        }
    </style><!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>

    <script type="application/x-javascript">
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <link href="{{asset('/2018/Cyclothon/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('/2018/Cyclothon/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('/2018/Cyclothon/css/font-awesome.css')}}" rel="stylesheet">
</head>
<body>

<div class="header_w3layouts_agile-main" id="homeStart">
    <header class="header" id="home" >
        <!--/top-bar-->
        <div class="top-bar" style="position: fixed;top:0;background: linear-gradient(to right, #fff, rgb(75,12,13)); width:100vw;left: 0;right: 0;padding: 1em;">
            <nav class="navbar navbar-default navbar-expand-xs">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>
                        <a class="navbar-brand hide-down-1200 img-40" href="https://techfest.org/">
                            <img src="https://techfest.org/2018/logo.png" alt="techfest 18-19" style="height: 50px;filter:invert(100%)">
                        </a>
                        <a class="navbar-brand hide-up-1200 img-40" href="https://techfest.org/">
                            <img src="https://techfest.org/2018/logo-main.png" alt="techfest 18-19" style="height: 50px;filter:invert(100%)">
                        </a>
                        <a class="navbar-brand d-sm-none img-40" href="#">
                            <img src="https://techfest.org/2018/Cyclothon/images/cyclothon.png" alt="techfest 18-19" style="height: 80px;">
                        </a>
                        <a class="navbar-brand d-md-none img-40" href="#">
                            <img src="https://techfest.org/2018/Cyclothon/images/cyclothon-short.png" alt="techfest 18-19" style="height: 80px;">
                        </a>
                        {{--<a class="navbar-brand d-xs-none img-40" href="#">--}}
                            {{--<img src="https://techfest.org/2018/Cyclothon/images/sponsor.png" alt="techfest 18-19" style="height: 30px!important;">--}}
                        {{--</a>--}}
                    </h1>
                </div>
                <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                    <nav>
                        <ul class="top_nav">
                            <li class="dynamic-display">
                                <a class="" href="#home">Home</a>
                            </li>
                            <li class="dynamic-display">
                                <a href="#incentives">Incentives</a>
                            </li>
                            <li class="dynamic-display">
                                <a href="#cause">Cause</a>
                            </li>
                            <li class="dynamic-display">
                                <a href="#details">Event Details</a>
                            </li>
                            <li class="dynamic-display">
                                <a href="#schedule">Schedule</a>
                            </li>
                            <li class="dynamic-display">
                                <a href="#gallery">Gallery</a>
                            </li>
                            <li class="dynamic-display">
                                <a href="#sponsors">Sponsors</a>
                            </li>
                            <li class="dynamic-display">
                                <a href="#footer">Contact us</a>
                            </li>
                            <li style="background: rgba(0,255,252,0.7);font-weight: 700;color:black; padding: 10px">
                                <a href="https://goo.gl/forms/EXsQFX0jvAe0et3L2" TARGET="_blank" style="color:black !important;">Register</a>
                            </li>
                            <li style="background: rgba(255,61,0,0.7);font-weight: 700;color:black;padding: 10px">
                                <a href="http://imojo.in/IITCYCLOTHON2018" TARGET="_blank" style="color:black !important;">Rent a Cycle</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div>
    </header>
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides callbacks callbacks1" id="slider4">
                <li>
                    <div class="banner-top">
                        <div class="banner-info">
                            <h3></h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner-top1">
                        <div class="banner-info">
                            <h3></h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner-top2">
                        <div class="banner-info">
                            <h3></h3>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="banner-top3">
                        <div class="banner-info">
                            <h3></h3>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-title d-sm-none">
            <h1 class="title" style="font-weight: bold;">CYCLOTHON</h1>
            <h2 class="title" style="font-size: 3em">Balance Life on Wheels</h2>
        </div>
        <div class="header-title d-md-none">
            <h1 class="title">CYCLOTHON</h1>
            <h2 class="title">Balance Life on Wheels</h2>
        </div>
        <div class="clearfix"> </div>

        <!--banner Slider starts Here-->
    </div>
</div>
<div class=" cl banner_bottom" id="incentives" style="margin-left: 2rem">
    <div class="short-container">
        <h3 class="header_w3layouts_agile" style="text-align: left;" data-aos="fade-down">Incentives</h3>
        <div class="col-md-4 col-md-offset-1 join-form" data-aos="flip-right">
            <div class="signin-form profile join-fm">
                <div class="login-form mt-0">
                    <input type="submit" value="Register Now" onclick="window.open('https://goo.gl/forms/EXsQFX0jvAe0et3L2')">
                </div>
            </div>
            <div class="signin-form profile join-fm">
                <h3 class="sign">Incentives</h3>
                <div class="list-group lorem">
                    <ul class="ipsum">
                        <li>Free Entry</li>
                        <li>Cyclothon T- Shirts For first 1200 participants</li>
                        <li>Free Zumba Workshops</li>
                        <li>Free Health Check Up</li>
                        <li>Free Food &amp; Beverages</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6 yoga-video" data-aos="flip-left" style="height: 100%;">
            <div class="img-container" style="display: inline-block;height: 100%;">
                <img src="{{asset('2018/Cyclothon/images/cyclothon.png')}}" class="img-responsive hide-it " alt="" style="position: absolute;top: 100px;width:90%">
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class=" cl sec_video" id="cause" style="background:rgba(233,233,233,0.88);">
    <div class="container-fluid">
        <div class="about-main about1">
            <div class="col-md-5 about-gd mt-0">
                <div class="about-sub-gd" data-aos="fade-left" style="margin-top:20px;text-align: right;">
                    <h4 style="padding-bottom: 0.5em;margin-bottom: 0.5em;margin-right: -2em;">Why Participate?</h4>
                    <p style="font-size: 1.1em">
                        &nbsp;Life is like riding a bicycle. To keep your balance,<br>you must keep moving.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;Albert Einstein<br><br>
                        Do you enjoy the greenery? And do you like cycling?<br>
                        &nbsp;Come to join us for the Techfest Cyclothon: Balance Life on Wheels<br>and get a mix of all the above
                    </p>
                </div>
            </div>
            <div class="col-md-2 about-gd1 mt-0" data-aos="fade-down">
                <img src="{{asset('/2018/Cyclothon/images/img/cycle.png')}}" class="img-responsive cycle-why d-sm-none" style="margin-left: auto;margin-right: 10px;" alt="">
            </div>
            <div class="col-md-5 about-gd ab-right mt-0" data-aos="fade-right">
                <br>
                <div class="about-sub-gd">
                    <h4>Cause</h4>
                    <p style="font-size:1.2em">
                        Balance life on wheels is an initiative taken up by Techfest 2018-2019, IIT Bombay to break-off the inception of stress and depressed thoughts by primarily promoting a healthy mind. We invite you to join us on 7th October at IIT Bombay, and participate in Cyclothon. Lets cycle to become a self-helper and step towards a healthier mind at this year's Cyclothon!
                    </p>
                </div>
                <div class="about-sub-gd">
                    <h4>History</h4>
                    <p style="font-size:1.2em">
                        In 2016, Techfest brought forth a full-fledged campaign called ReCycle to promote greener environment and fitness among the youth. In 2017, Techfest, IIT Bombay conducted Cyclothon with the motto Pedal for your Heart to increase awareness about heart diseases and how cycling and exercise prevent it.
                    </p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="cl services" id="details" style="background:#c7e1db8f">
    <h3 class="header_w3layouts_agile container">Event Details</h3>
    <div class="inner_sec_w3_agileinfo container" id="test">
        <div class="col-md-3" data-aos="zoom-in">
            <div class="grid_info">
                <div class="icon_info" style="box-shadow: 0 0 5px black;border:0">
                    <span class="fa fa-calendar" style="color: #000000;" aria-hidden="true"></span>
                    <h5>When</h5>
                    <p>Sunday,<br>7th October, 2018 </p>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in">
            <div class="grid_info">
                <div class="icon_info" style="box-shadow: 0 0 5px black;border:0">
                    <span class="fa fa-user" style="color:black;" aria-hidden="true"></span>
                    <h5>Who</h5>
                    <p>Cycle enthusiasts from age 12 and above</p>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in">
            <div class="grid_info">
                <div class="icon_info" style="box-shadow: 0 0 5px black;border:0">
                    <span style="color:black" class="fa fa-question" aria-hidden="true"></span>
                    <h5>How</h5>
                    <p>Sign up, saddle up and show up on 7th Oct. 2018</p>
                </div>
            </div>
        </div>
        <div class="col-md-3" data-aos="zoom-in">
            <div class="grid_info">
                <div class="icon_info" style="box-shadow: 0 0 5px black;border:0">
                    <span class="fa fa-map-marker" style="color: #000000;" aria-hidden="true"></span>
                    <h5>Where</h5>
                    <p>IIT Bombay,<br>Powai</p>
                </div>
            </div>
        </div>

        <div class="clearfix"> </div>
    </div>

</div>
<div class="cl top_spl_courses" id="schedule" style="background: #ffffffd4">
    <div class="container">
        <h3 class="header_w3layouts_agile">Schedule</h3>
        <div class="inner_sec_w3_agileinfo">
            <ul class="timeline" style=";font-size: 2em;">
                <li class="one-tm">
                    <div class="timeline-image">
                        <img class="img-circle img-responsive" src="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.0.0/svg/clock.svg" alt="s">
                    </div>
                    <div class="timeline-panel" data-aos="fade-left" style="margin-left: -40px">
                        <div class="timeline-heading">
                            <h4>6:00 AM</h4>
                            <h4 class="subheading">Reporting time at MAIN GATE, IIT BOMBAY</h4>
                        </div>
                        <!--<div class="timeline-body">-->
                        <!--<p class="text-muted">-->
                        <!--Lorem ipsum dolor sit amet, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.-->
                        <!--</p>-->
                        <!--</div>-->
                    </div>
                    <div class="line"></div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="img-circle img-responsive" src="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.0.0/svg/list-unordered.svg" alt="">
                    </div>
                    <div class="timeline-panel t-m" data-aos="fade-right">
                        <div class="timeline-heading">
                            <h4>6:15 AM</h4>
                            <h4 class="subheading">On spot registrations &amp; collection of <span class="nowrap">T-Shirts</span></h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>
                    <div class="line"></div>
                </li>
                <li>
                    <div class="timeline-image">
                        <img class="img-circle img-responsive" src="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.0.0/svg/info.svg" alt="">
                    </div>
                    <div class="timeline-panel" data-aos="fade-left" style="margin-left:-40px;">
                        <div class="timeline-heading">
                            <h4>6:30 AM</h4>
                            <h4 class="subheading">Briefing about the ride &amp; safety instructions</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>
                    <div class="line"></div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="img-circle img-responsive" src="{{asset('/2018/Cyclothon/images/g5.svg')}}" alt="">
                    </div>
                    <div class="timeline-panel t-m" data-aos="fade-right">
                        <div class="timeline-heading">
                            <h4>6:45 AM</h4>
                            <h4 class="subheading">Ride begins at IIT Bombay</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>
                    <div class="line"></div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <img class="img-circle img-responsive" src="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.0.0/svg/stop.svg" alt="">
                    </div>
                    <div class="timeline-panel t-m" data-aos="fade-right">
                        <div class="timeline-heading">
                            <h4>8:00 AM</h4>
                            <h4 class="subheading">Ride ends at the SAC, IIT Bombay</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>
                    <div class="line"></div>
                </li>
                <li>
                    <div class="timeline-image">
                        <img class="img-circle img-responsive" src="https://cdnjs.cloudflare.com/ajax/libs/octicons/8.0.0/svg/smiley.svg" alt="">
                    </div>
                    <div class="timeline-panel" data-aos="fade-left">
                        <div class="timeline-heading">
                            <h4>8:15 AM</h4>
                            <h4 class="subheading" style="margin-left:-40px">Zumba workshop &amp; Drink distribution starts</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">
                                Lorem ipsum dolor sit amet, do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            </p>
                        </div>
                    </div>
                </li>
                <div class="clearfix"></div>
            </ul>
        </div>
    </div>
</div>
<div class="cl top_spl_courses" id="gallery">
    <div class="container">
        <h3 class="header_w3layouts_agile">Gallery</h3>
        <div class="inner_sec_w3_agileinfo">
            <div class="mid_slider">
                <!-- banner -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- fIndicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/11232378_769079929870778_2469662428092425934_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/12115578_770988886346549_5387361437258485145_n.jpg')}}" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/14713076_977289589049810_6759183212963909521_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/22135310_1810728688967497_6742820740249485329_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/22218613_1810730898967276_6717690189520673561_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/22219924_1294061514039281_750933955858115176_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/22179792_1810726868967679_8856053776283980867_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/11232378_769079929870778_2469662428092425934_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/11232378_769079929870778_2469662428092425934_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/12115578_770988886346549_5387361437258485145_n.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/14713076_977289589049810_6759183212963909521_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/22135310_1810728688967497_6742820740249485329_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/22218613_1810730898967276_6717690189520673561_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/22219924_1294061514039281_750933955858115176_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/22179792_1810726868967679_8856053776283980867_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 slidering">
                                    <div class="thumbnail">
                                        <img src="{{asset('/2018/Cyclothon/images/img/11232378_769079929870778_2469662428092425934_o.jpg')}}" alt="Image" >
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="fa fa-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!-- The Modal -->
                </div>
            </div>
            <!--//slider-->
        </div>
    </div>
</div>
<div class="cl services" id="sponsors" style="background:#c7e1db8f">
    <h3 class="header_w3layouts_agile container">Sponsors</h3>
    <div class="inner_sec_w3_agileinfo container" id="test">
        <div class="col-md-6 col-md-offset-3" data-aos="zoom-in">
            <div class="grid_info text-center">
                <h2>Title Sponsor</h2> <br>
                <img src="https://techfest.org/2018/Cyclothon/images/sponsor.png" alt="" class="img-responsive">
            </div>
        </div>
        <div class="col-md-3"><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
        <div class="col-md-4" data-aos="zoom-in">
            <div class="grid_info text-center">
                <h2>Health Partner</h2><br><br><br><br><br><br><br><br>
                <img src="https://techfest.org/2018/Sponsors/omni.png" alt="" class="img-responsive w-100" style="transform:scale(1.6);margin:auto">
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in">
            <div class="grid_info text-center">
                <h2>Wellness Partner</h2>
                <img src="https://techfest.org/2018/Sponsors/padmavat.png" alt="" class="img-responsive " style="transform: scale(0.5);">
            </div>
        </div>
        <div class="col-md-4" data-aos="zoom-in">
            <div class="grid_info text-center">
                <h2>Hydration Partner</h2>
                <br><br><br><br><br>
                <img src="https://techfest.org/2018/Sponsors/patanjali.png" alt="" class="img-responsive " style="">
            </div>
        </div>
        <div class="col-md-6" data-aos="zoom-in">
            <div class="grid_info text-center">
                <h2>General Sponsor</h2> <br><br>
                <img src="https://techfest.org/2018/Sponsors/bajaj.jpg" alt="" class="img-responsive" style="transform:scale(0.4);margin-top: -100px;">
            </div>
        </div>
        <div class="col-md-6" data-aos="zoom-in">
            <div class="grid_info text-center">
                <h2>General Sponsor</h2> <br><br>
                <br><br><br>
                <img src="https://techfest.org/2018/Sponsors/britishCouncil.png" alt="" class="img-responsive" style="transform:scale(0.6);">
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>

</div>
<footer class="cl contact-footer" id="footer">
    <div class="bottom-social">
        <div class="container">
            <div class="col-md-12 botttom-nav-w3ls-agile text-center">
                <h4 class="col-md-8" style="color:white;text-align: left;">Contact Us</h4>
                <h6 class="col-md-2 d-sm-none" style="color:white;text-align: right;">Follow us at</h6>
                <hr>
                <div class="col-md-4 mt-2 mb-2" style="text-align:left;">
                    <div class="name">Himanshu Rathore</div>
                    <div class="phone">
                        <a href="tel:+91 998 709 1558" class="phone">+91 998 709 1558</a>
                    </div>
                    <div class="email">
                        <a href="mailto:rathore@techfest.org" class="phone">rathore@techfest.org</a>
                    </div>
                </div>
                <div class="col-md-4 mt-2 mb-2" style="text-align:left;">
                    <div class="name">Rajendra Bhaskar</div>
                    <div class="phone">
                        <a href="tel:+91 773 819 9421" class="phone">+91 773 819 9421</a>
                    </div>
                    <div class="email">
                        <a href="mailto:cyclothon@techfest.org" class="phone">cyclothon@techfest.org</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="social-icons text-center">
                        <a class="facebook" href="https://www.facebook.com/iitbombaytechfest/">
                            <span class="fa fa-facebook"></span>
                        </a>
                        <a class="linkedin" href="https://www.instagram.com/techfest_iitbombay/">
                            <span class="fa fa-instagram"></span>
                        </a>
                        <a class="twitter" href="https://twitter.com/Techfest_IITB">
                            <span class="fa fa-twitter"></span>
                        </a>
                        <a class="pinterest" href="https://www.youtube.com/user/techfestiitbombay">
                            <span class="fa fa-youtube"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
        <div class="clearfix"></div>

    </div>

</footer>
<!--/footer -->

<!-- js -->
<script type="text/javascript" src="{{asset('/2018/Cyclothon/js/jquery-2.2.3.min.js')}}"></script>
<!-- //js -->
<!-- password-script -->
<script type="text/javascript">
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    };

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 !== pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<link href='{{asset('/2018/Cyclothon/css/aos.css')}}' rel='stylesheet prefetch' type="text/css" media="all" />
<link href='{{asset('/2018/Cyclothon/css/aos-animation.css')}}' rel='stylesheet prefetch' type="text/css" media="all" />
<script src='{{asset('/2018/Cyclothon/js/aos.js')}}'></script>
<script src="{{asset('/2018/Cyclothon/js/aosindex.js')}}"></script>
<script src="{{asset('/2018/Cyclothon/js/main.js')}}"></script>
<script src="{{asset('/2018/Cyclothon/js/responsiveslides.min.js')}}"></script>
<script>
    $(function () {
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 1000,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });
    });
</script>
<script type="text/javascript" src="{{asset('/2018/Cyclothon/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{asset('/2018/Cyclothon/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
    $(document).ready(function () {
        $().UItoTop({
            easingType: 'easeOutQuart'
        });
    });
</script>
<script type="text/javascript" src="{{asset('/2018/Cyclothon/js/bootstrap.js')}}"></script>
</body>
</html>