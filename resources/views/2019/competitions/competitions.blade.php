<!DOCTYPE html>
<html lang="en">
<head>
    <title>Compi Techfest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />


    {{--    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">--}}
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/2019/compi/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/2019/compi/css/animate.css">

    <link rel="stylesheet" href="/2019/compi/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/2019/compi/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/2019/compi/css/magnific-popup.css">

    <link rel="stylesheet" href="/2019/compi/css/aos.css">

    <link rel="stylesheet" href="/2019/compi/css/ionicons.min.css">

    <link rel="stylesheet" href="/2019/compi/css/flaticon.css">
    <link rel="stylesheet" href="/2019/compi/css/icomoon.css">
    <link rel="stylesheet" href="/2019/compi/css/style.css">






    <!--	  &lt;!&ndash; Icon css link &ndash;&gt;-->
    <!--	  <link href="vendors3/material-icon/css/materialdesignicons.min.css" rel="stylesheet">-->
    <!--	  <link href="/2019/compi/css3/font-awesome.min.css" rel="stylesheet">-->
    <!--	  <link href="vendors3/linears-icon/style.css" rel="stylesheet">-->
    <!--	  &lt;!&ndash; Bootstrap &ndash;&gt;-->
    <!--	  <link href="/2019/compi/css3/bootstrap.min.css" rel="stylesheet">-->

    <!--	  &lt;!&ndash; Rev slider css &ndash;&gt;-->
    <!--	  <link href="vendors3/revolution/css/settings.css" rel="stylesheet">-->
    <!--	  <link href="vendors3/revolution/css/layers.css" rel="stylesheet">-->
    <!--	  <link href="vendors3/revolution/css/navigation.css" rel="stylesheet">-->

    <!--	  &lt;!&ndash; Extra plugin css &ndash;&gt;-->
    <!--	  <link href="vendors3/bootstrap-selector/bootstrap-select.css" rel="stylesheet">-->
    <!--	  <link href="vendors3/bootatrap-date-time/bootstrap-datetimepicker.min.css" rel="stylesheet">-->
    <!--	  <link href="vendors3/owl-carousel/assets/owl.carousel.css" rel="stylesheet">-->

    <link href="/2019/compi/css3/style.css" rel="stylesheet">
    <!--	  <link href="/2019/compi/css3/responsive.css" rel="stylesheet">-->

    <style>
        body{
            overflow-x: hidden;
        }

        .owl-carousel .owl-stage, .owl-carousel.owl-drag .owl-item{
            -ms-touch-action: auto;
            touch-action: auto;
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
            position: absolute;
            top: calc(110% - 17%);
            left: calc(-8% - 20%);
            height: 950px;
            /*width: 680px;*/
            z-index:0;
            overflow: hidden;
            opacity: 0.2;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            animation: rotation 30s infinite linear;
            /*rotation: 20deg;*/
        }
        .ansh {
            position: absolute;
            z-index:0;
            overflow: hidden;
            /*opacity: 0.2;*/
            /*animation: rotation 30s infinite linear;*/
            /*!*rotation: 20deg;*!*/
        }
        .mandala2 {
            position: absolute;
            bottom: calc(-245% - 140px);
            left: calc(90% - 330px);
            height: 800px;
            z-index:0;
            overflow: hidden;
            opacity: 0.2;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            animation: rotation reverse 20s infinite linear;
            /*rotation: 20deg;*/
        }
        .mandala3 {
            position: fixed;
            top: calc(750% - 140px);
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
{{--    <style>--}}
{{--        .abhinav{--}}
{{--            opacity: 1;--}}
{{--            transition: 0.3s;--}}
{{--        }--}}
{{--        .abhinav_img:hover{--}}

{{--                opacity: .5;--}}

{{--        }--}}
{{--    </style>--}}
    <style>

    .recent_blog_text_inner {
    opacity: 1;
    display: block;
        /*background: white;*/
    width: 100%;
    height: auto;
    transition: .5s ease;
    backface-visibility: hidden;
        z-index: 3;
    }

    .middle {
    transition: .5s ease;
    opacity: 0;
    position: absolute;
        /*background: white;*/
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    text-align: center;
        z-index: 3;
    }

    .recent_bloger_area .recent_blog_item .blog_img:before{
        background-color: white;
        opacity: 0.7;
        /*border: black solid 5px;*/
    }

    .recent_blog_item:hover .blog_img{
        opacity: 1;
        webkit-filter: blur(8px); /* Chrome, Safari, Opera */
        filter: blur(8px);
    }


    .recent_blog_item:hover .recent_blog_text_inner {
        opacity: 1;
    }

    .recent_blog_item:hover .middle {
        opacity: 1;
    }

    .ram1{
        padding: 0px 0px;
        margin:-50px 0px 0px 0px;
        /*background: white;*/
        font-size: 15px;
        /*font-weight: bold;*/
        color:black;
        text-align: left;
        width: 250px;
        height: 100px;
        opacity:1;
        z-index: 5;

    }

    .ram2{
        padding: 0px 0px;
        margin:-7px 0px 0px 0px;
        /*background: white;*/
        font-size: 15px;
        /*font-weight: bold;*/
        color:black;
        text-align: left;
        width: 250px;
        height: 100px;
        opacity:1;
        z-index: 5;

    }


    .textcompi {
        background: rgba(255, 255, 255, 0);
        font-size: 20px;
        color: #ff6111;
    }
    .arrow1{
        margin-top: 2%;
        margin-left: -110%;
        color: white;
        margin-bottom: 13%;
        height: 60px;
        z-index: 2;
    }
    .arrow2{
        margin-top: 2%;
        margin-left: -100%;
        color: white;
        margin-bottom: 13%;
        height: 60px;
        z-index: 2;
    }
        .card{
            width: 100%;
            z-index: 3;
        }
        .img_compi{
            width: 100%;
        }
        .img_c{
            width: 100%;
        }
        .techno_text{
            width: 100%;
            color: white;
            /* background-color: white; */
            padding: 5%;
            border: solid;
            border-radius: 10px;
            z-index: 2;
            text-align: left;
        }
        .layout{
            max-width: 50%;
            z-index: 1;
            padding: 3%;
        }
        .ftco-counter{
            background-color: #fff;
        }
        .recent_blog_text {
            padding: 0px 0px!important;
         }
        @media (max-width: 992px) {
            .navbar-brand {
                display: none;}
        }
    </style>
    <style>
        .bg_1 {
            position: fixed;
            width: 100vw;
            top: 00vw;
            height: 200vw;
        }

    </style>
    <style>
        .arrow
        {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            margin-left:-20px;
            width: 40px;
            height: 40px;
            z-index: 10;

            /**
             * Dark Arrow Down
             */
            background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0yOTMuNzUxLDQ1NS44NjhjLTIwLjE4MSwyMC4xNzktNTMuMTY1LDE5LjkxMy03My42NzMtMC41OTVsMCwwYy0yMC41MDgtMjAuNTA4LTIwLjc3My01My40OTMtMC41OTQtNzMuNjcyICBsMTg5Ljk5OS0xOTBjMjAuMTc4LTIwLjE3OCw1My4xNjQtMTkuOTEzLDczLjY3MiwwLjU5NWwwLDBjMjAuNTA4LDIwLjUwOSwyMC43NzIsNTMuNDkyLDAuNTk1LDczLjY3MUwyOTMuNzUxLDQ1NS44Njh6Ii8+DQo8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNMjIwLjI0OSw0NTUuODY4YzIwLjE4LDIwLjE3OSw1My4xNjQsMTkuOTEzLDczLjY3Mi0wLjU5NWwwLDBjMjAuNTA5LTIwLjUwOCwyMC43NzQtNTMuNDkzLDAuNTk2LTczLjY3MiAgbC0xOTAtMTkwYy0yMC4xNzgtMjAuMTc4LTUzLjE2NC0xOS45MTMtNzMuNjcxLDAuNTk1bDAsMGMtMjAuNTA4LDIwLjUwOS0yMC43NzIsNTMuNDkyLTAuNTk1LDczLjY3MUwyMjAuMjQ5LDQ1NS44Njh6Ii8+DQo8L3N2Zz4=);
            background-size: contain;
        }

        .bounce {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% {
                transform: translateY(0);
            }
            40% {
                transform: translateY(-30px);
            }
            60% {
                transform: translateY(-15px);
            }
        }
    </style>
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,1);
            padding: 12px 16px;
            z-index: 1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<img class="bg_1" src="/2019/compi/images/web_backgrounds_1.png" alt="">
{{--<img class="bg_2" src="/2019/compi/images/web_backgrounds_1.png" alt="">--}}
<div class="arrow bounce"></div>


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="https://techfest.org/2019/homepage/paras.html#1" style="font-family: Lato"><img src="/2019/homepage/logo_edit.png" alt="" style="max-height: 50px; z-index: 2; "></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="#techno-section" class="nav-link"><span>Technorion</span></a></li>
                <li class="nav-item"><a href="#compi-section" class="nav-link"><span>Competitions</span></a></li>
{{--                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>--}}
                <li class="nav-item"><a href="#section-counter" class="nav-link"><span>Stats</span></a></li>

                @if(empty( $user_row->email        ))
                    <li class="nav-item" id="signinButton">
                        <a href="#" class="nav-link" id="signinButton"><span>Sign In</span></a>
                    </li>
                    <form action="" method="post" id="h-form" class="">
                        {{csrf_field()}}
                        <input type="hidden" name ="code" id="name2" style="background-color: blue">
                    </form>
                @endif
                @if(!empty($user_row->email))

                    <li class="nav-item dropdown">
                        <span class="nav-link">PROFILE</span>

                        <div class="dropdown-content">
                                <a href="https://techfest.org/2019/competitions/details_form">Personal Details</a><br>
                            @if($user_row->cozmo > 0)
                                <a href="https://techfest.org/2019/competitions/cozmo/">Cozmo</a><br>
                            @endif
                            @if($user_row->meshmerize > 0)
                                <a href="https://techfest.org/2019/competitions/meshmerize/">Meshmerize</a><br>
                            @endif
                            @if($user_row->codecode > 0)
                                <a href="https://techfest.org/2019/competitions/codecode/">Codecode</a><br>
                            @endif
                            <a href="https://techfest.org/2019/competitions/logout">Logout</a>
                        </div>
                    </li>
                @endif




            </ul>
        </div>
    </div>
</nav>
<section class="home-slider js-fullheight owl-carousel">
    <div class="slider-item js-fullheight " style="background-image:url(/2019/compi/images/mic2-min.jpg); background-repeat: no-repeat; z-index: 2">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate mt-5">
                    <div class="text" style="z-index: 3">
                        <div class="subheading">
                            <span>Techfest Presents</span>
                        </div>
                        <h1 class="mb-4">Competitions</h1>
                        <p>Techfest has been successful in providing
                            a platform to the young enthusiasts to
                            prove their mettle in a plethora of
                            technical competitions. This edition we present a series of mind-boggling competitions which involve the fusion of creative and scientific thinking both of which are essential for creation of something new and innovative.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>



<section class="recent_bloger_area" id="techno-section" style="z-index: 2; padding:0px">
    <div class="container" style="z-index: 2;left: 0px">
        <div class="col-xs-8 col-sm-5" style="z-index: 2;">
            <div style="z-index: 2;">
                <h2 style="position: absolute; margin-top: 15px; z-index: 2; font-weight: bold">Technorion</h2>
                <img style="z-index: 2;" class="arrow1" src="/2019/ozone/images/arrow.png" alt="" >

            </div>
        </div>
        <div class="row">
            <div class="col-md-5" style="z-index: 1;">
                <div class="techno_text">
                    <p >
                        With an aim to promote creative, innovative and technical skills amongst the youth. Techfest is expanding its reach by conducting competitions in multiple cities. We don’t want distance to play a role in hindering innovative minds from participating in Techfest Competitions. This year our zonals are happening in following cities
                        <br><br>Bangalore               xxx
                        <br><br>Bhopal               xxx
                        <br><br>Jaipur      xxxx
                        <br><br>Lucknow           xxxxx
                        <br><br>Mumbai           xxxxx
                        <br><br>Kolkata           xxxxx

                    </p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row">
                        <div class="col-xs-3 col-md-6" style="z-index: 1" >
                            <a href="https://techfest.org/2019/competitions/cozmo">
                            <div class="recent_blog_item " style="margin-bottom: 0px" hr>
                            <div class="blog_img shadow  " >
                                <img src="/2019/compi/images/cozmo.png"   alt="">

                            </div>
                            <div class="middle">
                                <div class="text ram1" >Build a manually controlled gripping bot to do simple tasks. Complete the run by earning maximum points in minimum time</div>
{{--                                 Two statements likho--}}
                            </div>
                            <div class="recent_blog_text" >
                                <div class="recent_blog_text_inner" >
                                    <h6><a href="https://techfest.org/2019/competitions/cozmo">Explore</a></h6>
                                    <a ><h5 style="padding: 0px">Cozmo Clench</h5></a>
                                    <p style="padding: 0px">PRIZE MONEY </p>
                                    <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                                    <!--                                    <a href="#">No Comments</a>-->
                                </div>
                            </div>
                        </div>
                    </a>
                    </div>
                    <div class="col-xs-3 col-md-6" style="z-index: 1">
                        <div class="recent_blog_item" style="margin-bottom: 0px">
                            <div class="blog_img shadow">
                                <img src="/2019/compi/images/meshmerize.jpg"  alt="">

                            </div>
                            <div class="middle">
                                <div class="text ram1" >Build a manually controlled boat which sails through the obstacles and completes the race task</div>
                            </div>
                            <div class="recent_blog_text">
                                <div class="recent_blog_text_inner">
                                    <h6><a href="https://techfest.org/2019/competitions/meshmerize">Explore</a></h6>
                                    <a href="https://techfest.org/2019/competitions/"><h5 style="padding: 0px">Meshmerize</h5></a>
                                    <p style="padding: 0px">PRIZE MONEY </p>
                                    <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                                    <!--                                    <a href="#">No Comments</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3 col-md-6" style="z-index: 1">
                        <div class="recent_blog_item" style="margin-bottom: 0px">
                            <div class="blog_img shadow">
                                <img src="/2019/compi/images/codecode.jpg"  alt="">
                            </div>
                            <div class="recent_blog_text">
                                <div class="recent_blog_text_inner">
                                    <h6><a href="https://techfest.org/2019/competitions/codecode">Explore</a></h6>
                                    <a href="https://techfest.org/2019/competitions/"><h5 style="padding: 0px">CoDecode</h5></a>
                                    <p style="padding: 0px">PRIZE MONEY </p>
                                    <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                                    <!--                                    <a href="#">No Comments</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3 col-md-6" style="z-index: 1">
                        <div class="recent_blog_item " style="margin-bottom: 0px">
                                <div class="blog_img shadow ">
                                    <img src="/2019/compi/images/cozmo.png"  alt="">
                                </div>
                            <div class="middle">
                                <div class="text ram1">Build a manually controlled gripping bot which can do simple tasks and completes the run</div>
                            </div>
                                <div class="recent_blog_text" >
                                    <div class="recent_blog_text_inner" >
                                        <h6><a href="https://techfest.org/2019/competitions/cozmo">Explore</a></h6>
                                        <a ><h5 style="padding: 0px">Cozmo Clench</h5></a>
                                        <p style="padding: 0px">PRIZE MONEY </p>
                                        <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                                        <!--                                    <a href="#">No Comments</a>-->
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--================End Recent Blog Area =================-->


<section class="recent_bloger_area" id="compi-section" style="padding-top: 0px;">
    <div class="container" style="z-index: 2;left: 0p">
        <div class="col-xs-8 col-sm-5">
            <div>
                <h2 style="position: absolute; margin-left: 15px;margin-top: 15px; font-weight: bold">Competitions</h2>
                <img class="arrow2" src="/2019/ozone/images/arrow.png" alt="" >
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-4 layout" >
                <div class="recent_blog_item">
                    <div class="blog_img shadow">
                        <img src="/2019/compi/images/oprahat.jpg"  alt="">
                        <div class="middle">
                            <div class="text" style="padding: 0px 10px; margin:20px 0px 30px 0px;">Drone Bot</div>
                        </div>
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/competitions/oprahat">Explore</a></h6>
                            <a href="https://techfest.org/2019/competitions/"><h5 style="padding: 0px">Operation Rahat</h5></a>
                            <p style="padding: 0px">Prize Money </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 layout" >
                <div class="recent_blog_item">
                    <div class="blog_img shadow">
                        <img src="/2019/compi/images/micro2.png"  alt="">
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/competitions/imc">Explore</a></h6>
                            <a href="https://techfest.org/2019/competitions/"><h5 style="padding: 0px">International Micromouse Challenge</h5></a>
                            <p style="padding: 0px">Prize Money </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 layout" >
                <div class="recent_blog_item">
                    <div class="blog_img shadow">
                        <img src="/2019/compi/images/rowboatics.jpg"  alt="">
                    </div>
                    <div class="middle">
                        <div class="text ram2" >Build a manually controlled boat which sails through the obstacles and completes the race</div>
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/competitions/rowboatics">Explore</a></h6>
                            <a href="https://techfest.org/2019/competitions/"><h5 style="padding: 0px">RowBoatics</h5></a>
                            <p style="padding: 0px">PRIZE MONEY </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6 col-sm-4 col-md-4 layout" >
                <div class="recent_blog_item">
                    <div class="blog_img shadow">
                        <img src="/2019/compi/images/rowboatics.jpg"  alt="">
                    </div>
                    <div class="middle">
                        <div class="text ram2" >1111Build a manually controlled boat which sails through the obstacles and completes the race</div>
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/competitions/rowboatics">Explore</a></h6>
                            <a href="https://techfest.org/2019/competitions/"><h5 style="padding: 0px">JLT 1</h5></a>
                            <p style="padding: 0px">PRIZE MONEY </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 layout" >
                <div class="recent_blog_item">
                    <div class="blog_img shadow">
                        <img src="/2019/compi/images/rowboatics.jpg"  alt="">
                    </div>
                    <div class="middle">
                        <div class="text ram2" >2222Build a manually controlled boat which sails through the obstacles and completes the race</div>
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/competitions/rowboatics">Explore</a></h6>
                            <a href="https://techfest.org/2019/competitions/"><h5 style="padding: 0px">JLT 2</h5></a>
                            <p style="padding: 0px">PRIZE MONEY </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-4 layout" >
                <div class="recent_blog_item">
                    <div class="blog_img shadow">
                        <img src="/2019/compi/images/rowboatics.jpg"  alt="">
                    </div>
                    <div class="middle">
                        <div class="text ram2" >3333Build a manually controlled boat which sails through the obstacles and completes the race</div>
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/competitions/rowboatics">Explore</a></h6>
                            <a href="https://techfest.org/2019/competitions/"><h5 style="padding: 0px">ICC</h5></a>
                            <p style="padding: 0px">PRIZE MONEY </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="col-xs-8 col-sm-5" style="z-index: 2;">
    <div style="z-index: 2;">
        <h2 style="position: absolute; margin-top: 15px; z-index: 2; font-weight: bold;padding-left: 15%;">Past Competitions</h2>
        <img style="z-index: 2;margin-left: -55%;" class="arrow1" src="/2019/ozone/images/arrow.png" alt="" >

    </div>
</div>
<section class="ftco-counter" id="section-counter" style="z-index: 2">
    <div class="container-fluid px-0" style="z-index: 2">

        <div class="row no-gutters animation-timing-function: linear;" style="z-index: 2">
            <div class="col-md-4 justify-content-center counter-wrap ftco-animate " style="z-index: 2">
                <div class="block-18 text-center py-5" style="z-index: 2">
                    <div class="text" style="z-index: 2">
                        <div class="icon d-flex justify-content-center align-items-center" style="z-index: 2">
                            <span class="icon-money" style="z-index: 2"></span>
                        </div>
                        <strong class="number" data-number="25" style="z-index: 2">0</strong>
                        <span>Competitions</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-5">
                    <div class="text">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-users"></span>
                        </div>
                        <strong class="number" data-number="5120000">0</strong>
                        <span>Prize Money (INR)</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-5">
                    <div class="text">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-user"></span>
                        </div>
                        <strong class="number" data-number="32519">0</strong>
                        <span>Participants</span>
                    </div>
                </div>
            </div>
{{--            <div class="col-md-3 justify-content-center counter-wrap ftco-animate">--}}
{{--                <div class="block-18 text-center py-5">--}}
{{--                    <div class="text">--}}
{{--                        <div class="icon d-flex justify-content-center align-items-center">--}}
{{--                            <span class="icon-home"></span>--}}
{{--                        </div>--}}
{{--                        <strong class="number" data-number="206">0</strong>--}}
{{--                        <span>Churches</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        </div>
    </div>
</section>





<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

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


<script src="/2019/compi/js/jquery.min.js"></script>
<script src="/2019/compi/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/2019/compi/js/popper.min.js"></script>
<script src="/2019/compi/js/bootstrap.min.js"></script>
<script src="/2019/compi/js/jquery.easing.1.3.js"></script>
<script src="/2019/compi/js/jquery.waypoints.min.js"></script>
<script src="/2019/compi/js/jquery.stellar.min.js"></script>
<script src="/2019/compi/js/owl.carousel.min.js"></script>
<script src="/2019/compi/js/jquery.magnific-popup.min.js"></script>
<script src="/2019/compi/js/aos.js"></script>
<script src="/2019/compi/js/jquery.animateNumber.min.js"></script>
<script src="/2019/compi/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="/2019/compi/js/google-map.js"></script>

<script src="/2019/compi/js/main.js"></script>







</body>
</html>