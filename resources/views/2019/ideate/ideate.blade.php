<!DOCTYPE html>
<html lang="en">
<head>
    <title>Compi Techfest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes&display=swap" rel="stylesheet">

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
        .mandala {
            position: absolute;
            top: calc(50% - 190px);
            left: calc(50% - 190px);
            height: 380px;
            width: 380px;
            z-index: 1;
            /*transform: rotateY(45deg) rotateX(45deg);*/
            /*transform-style: preserve-3d;*/
            animation: rotation 20s infinite linear;
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
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .col-xs-6 col-sm-4 col-md-3:hover .recent_blog_text_inner {
            opacity: 0.3;
        }

        .col-xs-6 col-sm-4 col-md-3:hover .middle {
            opacity: 1;
        }

        .text {
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }

    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<img  class="mandala" src="/2019/homepage/images/mandala_2.png" >


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="index.html" style="font-family: Raleway"><span class="flaticon-bible" ></span>Techfest</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                {{--                <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>--}}
                {{--                <li class="nav-item"><a href="#compi-section" class="nav-link"><span>Compi</span></a></li>--}}
                <li class="nav-item" id="signinButton"><a href="#" class="nav-link" id="signinButton"><span>Registration</span></a></li>
                <form action="" method="post" id="h-form" class="">
                    {{csrf_field()}}
                    <input type="hidden" name ="code" id="name2" style="background-color: blue">
                </form>

            </ul>
        </div>
    </div>
</nav>
<section class="home-slider js-fullheight owl-carousel">
    <div class="slider-item js-fullheight" style="background-image:url(/2019/compi/images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate mt-5">
                    <div class="text">
                        {{--                        <div class="subheading">--}}
                        {{--                            <span>Christian Church</span>--}}
                        {{--                        </div>--}}
                        <h1 class="mb-4">Techfest <span>Competition</span></h1>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>

{{--<section class="ftco-section ftco-no-pt ftco-no-pb ftco-about-section" id="about-section">--}}
{{--    <div class="container-fluid px-0">--}}
{{--        <div class="row d-md-flex text-wrapper">--}}
{{--            <div class="one-half img" style="background-image: url(/2019/compi/images/bg_1.jpg);"></div>--}}
{{--            <div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">--}}
{{--                <div class="text-inner pl-md-5">--}}
{{--                    <h3 class="heading">Welcome {{$user_row->name}}</h3>--}}
{{--                    <p>Far far away,<strong>creative</strong> behind the word mountains, far from the countries Vokalia and Consonantia, there live the <strong>success</strong> blind texts. Separated they live in Bookmarksgrove</p>--}}
{{--                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>--}}
{{--                    <ul class="my-4">--}}
{{--                        <li><span class="ion-ios-checkmark-circle mr-2"></span> Even the all-powerful Pointing</li>--}}
{{--                        <li><span class="ion-ios-checkmark-circle mr-2"></span> Behind the word mountains</li>--}}
{{--                        <li><span class="ion-ios-checkmark-circle mr-2"></span> Separated they live in Bookmarksgrove</li>--}}
{{--                    </ul>--}}


{{--                </div>--}}


{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}
{{--</section>--}}



<!--================Recent Blog Area =================-->


<section class="recent_bloger_area" id="compi-section">
    <div class="container">
        <div class="s_black_title" style="text-align: left">
            <h2>Techfest  Competitions</h2>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-4 col-md-3" style="max-width: 50%; z-index: 1;padding-bottom: 50px;">
                <div class="recent_blog_item">
                    <div class="blog_img">
                        <img src="/2019/compi/images/bg_1.jpg" alt="">
                    </div>
                    <div class="recent_blog_text" >
                        <div class="recent_blog_text_inner" >
                            <h6><a href="https://techfest.org/2019/compi/cozmo">Know More</a></h6>
                            <a href="blog-details.html"><h5 style="padding: 0px">Cozmo Clench</h5></a>
                            <p style="padding: 0px">PRIZE MONEY </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                            <div class="middle">
                                <div class="text">John Doe</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3" style="max-width: 50%; z-index: 1;padding-bottom: 50px;">
                <div class="recent_blog_item">
                    <div class="blog_img">
                        <img src="/2019/compi/images/bg_1.jpg" alt="">
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/compi/mesherize">Know More</a></h6>
                            <a href="blog-details.html"><h5 style="padding: 0px">Meshmerize</h5></a>
                            <p style="padding: 0px">PRIZE MONEY </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3" style="max-width: 50%; z-index: 1;padding-bottom: 50px;">
                <div class="recent_blog_item">
                    <div class="blog_img">
                        <img src="/2019/compi/images/bg_1.jpg" alt="">
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/compi/mesherize">Know More</a></h6>
                            <a href="blog-details.html"><h5 style="padding: 0px">RowBoatics</h5></a>
                            <p style="padding: 0px">PRIZE MONEY </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3" style="max-width: 50%; z-index: 1;padding-bottom: 50px;">
                <div class="recent_blog_item">
                    <div class="blog_img">
                        <img src="/2019/compi/images/bg_1.jpg" alt="">
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/compi/mesherize">Know More</a></h6>
                            <a href="blog-details.html"><h5 style="padding: 0px">Operation Rahat</h5></a>
                            <p style="padding: 0px">Lorem Ipsum </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3" style="max-width: 50%; z-index: 1;padding-bottom: 50px;">
                <div class="recent_blog_item">
                    <div class="blog_img">
                        <img src="/2019/compi/images/bg_1.jpg" alt="">
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/compi/mesherize">Know More</a></h6>
                            <a href="blog-details.html"><h5 style="padding: 0px">Compi 5</h5></a>
                            <p style="padding: 0px">Lorem Ipsum </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3" style="max-width: 50%; z-index: 1;padding-bottom: 50px;">
                <div class="recent_blog_item">
                    <div class="blog_img">
                        <img src="/2019/compi/images/bg_1.jpg" alt="">
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/compi/mesherize">Know More</a></h6>
                            <a href="blog-details.html"><h5 style="padding: 0px">Compi 6</h5></a>
                            <p style="padding: 0px">Lorem Ipsum </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3" style="max-width: 50%; z-index: 1;padding-bottom: 50px;">
                <div class="recent_blog_item">
                    <div class="blog_img">
                        <img src="/2019/compi/images/bg_1.jpg" alt="">
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/compi/mesherize">Know More</a></h6>
                            <a href="blog-details.html"><h5 style="padding: 0px">Compi 7</h5></a>
                            <p style="padding: 0px">Lorem Ipsum </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-4 col-md-3" style="max-width: 50%; z-index: 1;padding-bottom: 50px;">
                <div class="recent_blog_item">
                    <div class="blog_img">
                        <img src="/2019/compi/images/bg_1.jpg" alt="">
                    </div>
                    <div class="recent_blog_text">
                        <div class="recent_blog_text_inner">
                            <h6><a href="https://techfest.org/2019/compi/mesherize">Know More</a></h6>
                            <a href="blog-details.html"><h5 style="padding: 0px">Compi 8</h5></a>
                            <p style="padding: 0px">Lorem Ipsum </p>
                            <!--                                    <a href="#">Feb 11,ac 2017 <span>/</span></a>-->
                            <!--                                    <a href="#">No Comments</a>-->
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
<!--================End Recent Blog Area =================-->



<section class="ftco-counter" id="section-counter">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-5">
                    <div class="text">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-money"></span>
                        </div>
                        <strong class="number" data-number="25">0</strong>
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
                        <span>Prize Money</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 justify-content-center counter-wrap ftco-animate">
                <div class="block-18 text-center py-5">
                    <div class="text">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-user"></span>
                        </div>
                        <strong class="number" data-number="32000">0</strong>
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
</section>

{{--<section class="ftco-section ftco-services-2" id="services-section">--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center pb-5">--}}
{{--            <div class="col-md-12 heading-section text-center ftco-animate">--}}
{{--                <span class="subheading">Services</span>--}}
{{--                <h2 class="mb-4">Christian Church Services</h2>--}}
{{--                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row">--}}
{{--            <div class="col-md d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services text-center d-block">--}}
{{--                    <div class="icon"><span class="flaticon-praying"></span></div>--}}
{{--                    <div class="media-body">--}}
{{--                        <h3 class="heading mb-3">Daily Prayers</h3>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services text-center d-block">--}}
{{--                    <div class="icon"><span class="flaticon-bible"></span></div>--}}
{{--                    <div class="media-body">--}}
{{--                        <h3 class="heading mb-3">Continous Teaching</h3>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services text-center d-block">--}}
{{--                    <div class="icon"><span class="flaticon-church"></span></div>--}}
{{--                    <div class="media-body">--}}
{{--                        <h3 class="heading mb-3">Set of Sermons</h3>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services text-center d-block">--}}
{{--                    <div class="icon"><span class="flaticon-rings"></span></div>--}}
{{--                    <div class="media-body">--}}
{{--                        <h3 class="heading mb-3">Wedding</h3>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md d-flex align-self-stretch ftco-animate">--}}
{{--                <div class="media block-6 services text-center d-block">--}}
{{--                    <div class="icon"><span class="flaticon-social-care"></span></div>--}}
{{--                    <div class="media-body">--}}
{{--                        <h3 class="heading mb-3">Community Helpers</h3>--}}
{{--                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}




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