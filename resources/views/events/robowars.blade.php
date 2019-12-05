    <?php
$meta = [
    'title' => 'Robowars | Techfest 2018-19' ,
    'description' => 'International Robowars is the flagship event of Techfest where two powerful robots will smash each other to pieces in the largest Robowars arena in India' ,
    'keywords' => ' Robot, war, fight, robowar, battlebots, robot wars, transformers, terminator, wall e, battle, FMB , king of bots, clash bots, largest, arena, steel, real steel, largest robowars, largest Asia, robowars, international, International Robowars, cage, royal rumble, 120lbs, 120 pounds, 60 kg, 30 lbs, 30 pounds, 15kg, entertainment, flagship event'
];
?>
        <!doctype html>

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="" xmlns: xmlns:font-family="http://www.w3.org/1999/xhtml"> <!--<![endif]-->
<head>
    <link href="https://fonts.googleapis.com/css?family=Stalinist+One" rel="stylesheet">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>{{$meta['title']}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$meta['description']}}">
    <meta name="keywords" content="{{$meta['keywords']}}">
    <link rel="canonical" href="https://m.techfest.org">
    <link rel="author" href="https://plus.google.com/117706965098999491468" />
    <link rel="icon" href="https://techfest.org/asset/robowars/robowarslogo.png">
    <meta name="theme-color" content="#333333">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{asset('2018/Robowars/thumbnail.jpg')}}">
    <meta property="og:description" content="{{$meta['description']}}">
    <meta property="og:title" content="{{$meta['title']}}">
    <meta property="og:site_name" content="Techfest 2018-19">
    <meta property="og:see_also" content="https://m.techfest.org">

    <meta itemprop="name" content="{{$meta['title']}}">
    <meta itemprop="description" content="{{$meta['description']}}">
    <meta itemprop="image" content="{{asset('2018/Robowars/thumbnail.jpg')}}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:title" content="{{$meta['title']}}">
    <meta name="twitter:description" content="{{$meta['description']}}">
    <meta name="twitter:image" content="{{asset('2018/Robowars/thumbnail.jpg')}}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="/asset/robowars/css/normalize.css">
    <link rel="stylesheet" href="/asset/robowars/css/fonticons.css">
    <link rel="stylesheet" href="/asset/robowars/css/magnific-popup.css">
    <link rel="stylesheet" href="/asset/robowars/css/font-awesome.min.css">
    <link rel="stylesheet" href="/asset/robowars/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/robowars/css/navmenu.css" />
    <link rel="stylesheet" href="/asset/robowars/css/plugins.css" />
    <link rel="stylesheet" href="/asset/robowars/css/style.css">
    <link rel="stylesheet" href="/asset/robowars/css/responsive.css" />
    <link href="https://fonts.googleapis.com/css?family=Creepster" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
    <style>
        ::-webkit-scrollbar{
            display: none!important;
            opacity: 0;
            visibility: hidden;
        }
        *{
            font-family: 'Montserrat', sans-serif !important;
        }
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            margin: 0;
        }
        .mt-10{
            padding: 6rem;}
        .bg-dark{
            background: #333333;
        }
        .text-white{
            color: #ffffff;
        }
        .float-left{
            float:left;
        }
        .d-block,footer li{
            display: block !important;
        }
        .pointer{
            cursor:pointer;
            margin-bottom: 20px;
        }
        .d-none{
            display: none;
        }
        @-webkit-keyframes shine {
            0% {
                background-position: 110% 0%, 0 0;
            }
            100% {
                background-position: -10% 0%, 0 0;
            }
        }
        @keyframes shine {
            0% {
                background-position: 110% 0%, 0 0;
            }
            100% {
                background-position: -10% 0%, 0 0;
            }
        }
        .h-100{
            height: 100vh !important;
        }
        .w-100{
            width: 100% !important;
        }
        .header-container h2 {
            position: relative;
            display: inline-block;
            font-family: 'Source Sans Pro', sans-serif;
            font-weight: 400;
            font-size: 5vw;
            letter-spacing: 1.5vw;
            text-transform: uppercase;
            margin: 0;
        }
        .header-container [data-gold] {
            color: #ac733c;
        }
        @supports (background-clip: text) or (-webkit-background-clip: text) {
            .header-container [data-gold] {
                color: transparent;
                background-image: linear-gradient(to right, transparent 0%, transparent 45%, white 50%, transparent 55%, transparent 100%), linear-gradient(90deg, #c78c48, #cf9147 9.4%, #cf9348 9.4%, #b2763e 33.6%, #ad743c 35.7%, #ac723d 46.9%, #b0773d 51.7%, #b0793e 52.1%, #c4914c 64.6%, #c99750 68.5%, #ce9e54 73.2%, #f4d188);
                background-position: 110% 0%, 0 0;
                background-size: 200% auto, auto;
                -webkit-background-clip: text;
                background-clip: text;
                -webkit-animation: shine 2s ease-in-out 2 alternate 2s;
                animation: shine 2s ease-in-out 2 alternate 2s;
                animation-iteration-count: infinite;

            }
        }
        .header-container [data-gold]:before {
            content: attr(data-gold);
            color: #f0d8a9;
            position: absolute;
            z-index: -1;
            top: -.08vw;
            left: 0px;
            text-shadow: black 0px 0.08vw 12px;
        }
        @supports (background-clip: text) or (-webkit-background-clip: text) {
            .header-container [data-gold]:after {
                content: attr(data-gold);
                position: absolute;
                top: 0;
                left: 0;
                background-image: linear-gradient(to bottom, transparent 0%, transparent 48%, rgba(98, 16, 0, 0.5) 50%, transparent 75%);
                -webkit-background-clip: text;
                background-clip: text;
            }
        }
        .header-container [data-silver] {
            color: #858585;
        }
        @supports (background-clip: text) or (-webkit-background-clip: text) {
            .header-container [data-silver] {
                color: transparent;
                background-image: linear-gradient(to right, transparent 0%, transparent 45%, white 50%, transparent 55%, transparent 100%), linear-gradient(270deg, #8c8c8c 1.3%, #999 15%, #868686 29.6%, #828282 29.6%, #7d7d7d 31.8%, #797979 31.8%, #6a6a6a 38.9%, #d3d3d3);
                background-position: 110% 0%, 0 0;
                background-size: 200% auto, auto;
                -webkit-background-clip: text;
                background-clip: text;
                animation: shine 2s ease-in-out 2 alternate-reverse 2s;
                animation-iteration-count: infinite;
            }
        }
        .header-container [data-silver]:before {
            content: attr(data-silver);
            color: #fff;
            position: absolute;
            z-index: -1;
            top: -.08vw;
            left: 0px;
            text-shadow: black 0px 0.08vw 12px;
        }
        @supports (background-clip: text) or (-webkit-background-clip: text) {
            .header-container [data-silver]:after {
                content: attr(data-silver);
                position: absolute;
                top: 0;
                left: 0;
                background-image: linear-gradient(to bottom, transparent 0%, transparent 48%, rgba(17, 17, 17, 0.5) 50%, transparent 75%);
                -webkit-background-clip: text;
                background-clip: text;
            }
        }
        .register-nav-btn{
            right: 120px;
            width: auto !important;
            cursor:pointer;
            border: 2px solid white;
            background: white;
            color: #000000;
        }
        .rank{
            float: right;
            font-size: 1em;
            color: goldenrod;
            padding-left: 20px;
            border-bottom: 2px solid goldenrod;
            border-top: 2px solid goldenrod;
            padding-right: 20px;
        }
        .header-tf{
            width:20vw;
            margin:auto;
            z-index: 3;
            padding-bottom: 20px;
        }
        .header-present{
            color: #ffffff;
            text-align: center;
            text-transform: uppercase;
            font-size:1.5vw;
            padding-bottom: 10px;
        }
        .home{
            height:100vh;
        }
        .video-title{
            background: #000000;
            color: #ffffff;
            padding-bottom:30px;
            font-size: 1.5em;
        }
        #main-nav{
            z-index: 10;
        }

        .flag{
            height: 17px;
            display: inline;
            float: right;
            margin-top: -4px;
        }
        .flag img{
            height: 31px;
            width: auto !important;
            margin-top: 4px;
            margin-right: 3px;
        }
        @media(max-width:770px){
            .header-tf{
                width: 50vw;
                bottom: 240px;
            }
            .header-present{
                font-size: 4vw;
                bottom: 200px;
            }
            .home{
                height: 470px;
            }
            .home-active{
                height: 470px;
                background-size: auto 100% !important;
            }
            .header-container *{
                font-size: 8.2vw !important;
            }
            .mt-10{
                padding: 1rem;
            }
            .mtc{
                text-align: center;
            }
            .single_abt{
                padding-left: 0 !important;
            }
            .register-nav-btn{
                right:51px;
            }
            .pos-rel{
                position: relative !important;
            }
        }
    </style>
    <link rel="stylesheet" href="https://techfest.org/css/iziToast.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <script src="/asset/robowars/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>

</head>
<body data-spy="scroll" data-target="#scrollspy">
<div class="preloader" style="background:black;">
</div>
<div class="container">
    <div class="div-menu">
        <header class="cd-header">
            <a onclick="$('#goHome').click()" class="brand-logo text-left pointer"><img src="/asset/robowars/robowarslogo.png" alt="" style="width:auto;height:100%" /></a>
            <a href="#!" class="reg-button text-white cd-menu-trigger register-nav-btn">Registrations Closed</a>
            <a class="cd-menu-trigger hamburger" href="#main-nav" style="border: 2px solid white; padding: 0.5em;line-height: 2.5em;text-align: center;"><span></span></a>
        </header>
    </div>
    <nav id="main-nav">
        <ul>
            <li><a id="goHome" href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#service">Useful Information</a></li>
            <li><a href="#team"> Bot Rankings </a></li>
            <li><a href="#portfolio">Gallery</a></li>
            <li><a href="#videos">Videos</a></li>
            <li><a href="#footer">Contact</a></li>
            <li><a href="https://techfest.org/accommodation">Accommodation</a></li>
        </ul>
        <a href="#" class="cd-close-menu">Close<span></span></a>
    </nav>
</div>
<section  id="home" class="home" style="position: relative;overflow:hidden;">
    <div class="filter" style="background: rgba(0,0,0,0.7); position: absolute;top: 0;left: 0;pointer-events: none; width: 100vw;height: 100vh;"></div>
    <div class="header-container" style="padding: 2em;position: absolute;bottom: 11vh;left:0;right:0;margin: auto;text-align: center;">
        <img src="{{asset('2018/logo.png')}}" alt="Techfest-Logo" class="header-tf">
        <div class="header-present">presents</div>
        <h2 data-gold="International" style="height:1.2em;line-height: 1em;">International</h2>
        <h2 data-silver="Robowars" style="height: 1em;line-height: 1em;">Robowars</h2>
    </div>
    {{--<a href="#!" class="reg-button btn btn-default waves-effect waves-purple"  data-toggle="modal" data-target="#myModal" style="display: block;background: black;width: 50%;margin:40px auto;position: absolute;bottom: 10vh; left:0;right:0; margin:auto">Register</a>--}}
</section><!-- End of Home Section -->

<!-- About Section -->
<section id="about" class="about colorsbg p-5 mt-10">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12" style="margin:auto 2rem">
                <a href="http://ps.techfest.org/robowars/30lbs-results.pdf" style="position: relative !important;right:unset;" class="reg-button text-white cd-menu-trigger register-nav-btn pos-rel">30lbs Results</a>
                <a href="http://ps.techfest.org/robowars/120lbs-results.pdf" style="position: relative !important;right:unset;" class="reg-button text-white cd-menu-trigger register-nav-btn pos-rel">120lbs Results</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 mt-10 mtc">
                <h2>About Robowars</h2>
            </div>
            <div class="col-sm-12 ">
                <div class="main_about_area">
                    <div class="about_content colorstext2 wow fadeInUp" data-wow-duration="700ms">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="single_abt single_about">
                                    <p class="text-uppercase colorstext">“Fate rarely calls upon us at the moment of our choosing.” </p>
                                    <p style="line-height:1.5em;font-size:1.25em;">
                                        Everyone has watched and enjoyed Transformers since their childhood. Autobots using their advanced weapons to protect the Earth from Decepticons or Hugh Jackman punching through Robots in Real Steel. Ever wondered how a battle between two such extremely powerful futuristic robots would look like?
                                    </p>
                                    <p style="line-height:1.5em;font-size:1.25em;">
                                        Techfest brings you one of the largest battle arenas in Asia and the best robots from all over the world converging to battle it out to decide who takes the glory. Gear up to witness the largest Robowars in India with charming artist performances for non-stop entertainment. Be a part of the largest audience for International Robowars at one of the grandest venues on the campus!
                                    </p>
                                    <a href="#!" class="btn btn-primary waves-effect waves-teal  margin-top-40 mb-3" onclick="window.open('https://techfest.org/about-techfest')">About Techfest</a>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="bottom_single_about s_bootom_right_area" style="margin-top: 50px">

                                    <div class="s_bottom_ab_text text-center">
                                        <h2>Robowars AfterMovie 2017-18</h2>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/nfUkkjoFte8?rel=0&modestbranding=1&autohide=1&showinfo=0&controls=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        {{--<a href="/asset/robowars/aftermovie.mp4" class="gallery-video"><img src="/asset/robowars/images/vicon.png" alt="" /></a>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- End of col-sm-12 -->
        </div><!-- End of row -->
    </div><!-- End of Container-fluid -->
</section><!-- End of Home Section -->

<!-- Tobias Section -->
<section id="tobias" class="tobias">
    <div class="container">
        <div class="row">
            <div class="main_tobias_area sections">
                <div class="col-sm-5" >
                    <div class="single_abt single_tobias single_tobias_img wow fadeInLeft" style="padding: 0px;" >
                        <img src="/asset/robowars/sethu_vijaykumar.jpg" alt="" style="width: 100%" />
                    </div>
                </div>
                <div class="col-sm-5 col-sm-offset-1">
                    <h4 class="text-uppercase"  style="font-size:25px">Judge</h4>
                    <div class="separator"></div>
                    <h3 class="text-uppercase" style="color:#ffffff">Prof. Sethu Vijayakumar</h3>
                    <p style="font-size: 18px; font-family: 'Merienda', cursive;line-height: 1.2em;">Professor Sethu Vijayakumar is a well-known Roboticist and the Director of Edinburgh Centre of Robotics. He has been the judge of the world famous TV show Robot Wars since 2016. He has been a recipient of numerous prestigious awards for his scientific work including the 2015 Tam Dalyell Prize for Excellence in engaging Public with Science. His research interests range from basic research in the field of robotics, statistical machine learning, motor control, planning and optimisation in autonomous systems and computational Neuroscience. He has also been a part of NASA Johnson Space Center's Valkyrie humanoid robot project which is being prepared for unmanned robotic pre-deployment missions to Mars.</p>
                </div>
            </div><!-- End of main Tobias area -->
        </div><!-- End of row -->
        <div class="row">
            <div class="main_tobias_area sections">
                <div class="col-sm-5">
                    <div class="single_abt single_tobias single_tobias_text wow fadeInRight">
                        <h4 class="text-uppercase"  style="font-size:25px">Anchor, 2017-18</h4>
                        <div class="separator"></div>
                        <h3 class="text-uppercase" style="margin-bottom: 30px;">Mr. Faruq Tauheed Jenkins </h3>
                        <p style="font-size: 18px; font-family: 'Merienda', cursive;line-height: 1.2em;">Mr. Faruq Tauheed Jenkins is arguably the best combat robotics anchor and announcer in the world. He has been an announcer at the famous TV show BATTLEBOTS and hosted the first International Robowars at Techfest, IIT Bombay. He has appeared in numerous TV series such as Cold Case, The Shield, NCIS and New Girl. He has also lent his voice in animation projects like Mass Effect 3 and BioShock Infinite. </p>
                    </div>
                </div>

                <div class="col-sm-5 col-sm-offset-1">
                    <div class="single_abt single_tobias single_tobias_img wow fadeInLeft" style="padding: 0px;">
                        <img src="/asset/robowars/speaker.png" alt="" style="width: 100%"/>
                    </div>
                </div>
            </div><!-- End of main Tobias area -->
        </div><!-- End of row -->
    </div><!-- End of container -->
</section><!-- End of Tobias Section -->

<section id="service" class="service colorsbg" style="position: relative;overflow: hidden;">
    <div class="black-filter" style="position: absolute;top:0;left: 0;width: 100vw;height: 100vw;background: rgba(0,0,0,0.8); pointer-events: none;"></div>
    <div class="container" style="z-index:3">
        <div class="row">
            <div class="main_service_area text-center padding-bottom-80 padding-top-80">
                <div class="head_title text-center wow fadeInUp">
                    <h2>Resources</h2>
                </div>

                <div class="col-sm-4 wow fadeInLeft">
                    <div class="single_service">
                        <div class="single_service_img">
                            <img src="/asset/robowars/images/ps-30.png" alt="" />
                        </div>
                        <div class="service_btn" style="border: 2px solid white;">
                            <a href="https://ps.techfest.org/robowars/30-lbs.pdf" target="_blank" class="btn btn-larg" style="font-size:0.7em">Problem Statement <br> (30 lbs)</a>
                        </div>
                    </div>
                </div><!-- End of col-sm-4 -->

                <div class="col-sm-4 wow fadeInUp">
                    <div class="single_service">
                        <div class="single_service_img">
                            <img src="/asset/robowars/images/ps-120.png" alt="" />
                        </div>
                        <div class="service_btn" style="border: 2px solid white;">
                            <a href="https://ps.techfest.org/robowars/120-lbs.pdf" target="_blank" class="btn btn-larg" style="font-size:0.7em">Problem Statement <br>(120 lbs)</a>
                        </div>
                    </div>
                </div><!-- End of col-sm-4 -->
                <div class="col-sm-4 wow fadeInRight">
                    <div class="single_service">
                        <div class="single_service_img">
                            <img src="/asset/robowars/images/service2.png" alt="" />
                        </div>
                        <div class="service_btn" style="border: 2px solid white;">
                            <a href="//ps.techfest.org/robowars" target="_blank" class="btn btn-larg" style="font-size:0.8em">Other Resources</a>
                        </div>
                    </div>
                </div><!-- End of col-sm-4 -->
            </div><!-- End of main service area -->
        </div><!-- End of row -->
    </div><!-- End of container -->
</section><!-- End of Service Section -->


<!-- Team Section -->
<section id="team" class="team colorsbg">
    <div class="container">
        <div class="main_service_area main_team_area">
            <div class="head_title text-center wow fadeInUp">
                <h2 style="font-size:2em">Bot Rankings</h2>
            </div>

            <div class="main_team_content wow fadeInUp">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/1.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>TAANAJI <div class="rank rank-1">1</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/in.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->

                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/2.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Swag <div class="rank rank-2">2</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/in.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->

                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/3.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Khashaba <div class="rank rank-3">3</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/in.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/4.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Flamingo <div class="rank rank-4">4</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/cn.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/5.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Bose <div class="rank rank-5">5</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/in.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/6.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Defiance <div class="rank rank-6">6</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/in.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/7.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Shadow <div class="rank rank-7">7</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/in.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/8.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Karma <div class="rank rank-8">8</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/in.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/9.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Trinca Botz <div class="rank rank-9">9</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/br.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/10.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Legend <div class="rank rank-10">10</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/in.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/11.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Solarbot <div class="rank rank-11">11</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/ru.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->
                    <div class="col-sm-4 col-xs-12">
                        <div class="single_team margin-top-40">
                            <img src="/2018/Robowars/teams/12.jpg" alt="" />
                            <div class="single_team_text">
                                <h4>Energy <div class="rank rank-12">12</div><div class="flag"><img src="{{asset('/2018/Robowars/flags/ru.svg')}}" alt="Flag"></div></h4>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->

                </div>
            </div><!-- End of main Team area -->
        </div><!-- End of row -->
    </div><!-- End of container -->
</section><!-- End of Team Section -->

<!-- Portfolio Section -->
<section id="portfolio" class="portfolio lightbg" style="overflow:hidden;background:#222;">
    <div class="container">
        <div class="row">
            <div class="maint_portfolio_area">
                <div class="col-sm-12">
                    <div class="head_title text-center margin-top-80 wow w-100 fadeInUp">
                        <h2>Gallery</h2>
                        <p>Here are glimpses of previous edition of Robowars!</p>
                    </div>
                </div>

                <div class="main_portfolio_content sections wow fadeInUp">
                    <div class="col-sm-4">
                        <div class="single_portfolio single_portfolio_1st">
                            <a href="https://techfest.org/2018/Robowars/s-1.jpg" class="gallery-img"><img src="https://techfest.org/2018/Robowars/s-1.jpg" alt="" /></a>
                        </div>
                    </div><!-- End of col-sm-8 -->
                    <div class="col-sm-8">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="single_portfolio" style=" img:hover;{ -webkit-transform: scaleX(-1);transform: scaleX(-1);}">
                                    <a href="https://techfest.org/2018/Robowars/l-1.jpg" class="gallery-img"><img src="https://techfest.org/2018/Robowars/l-1.jpg" alt="" /></a>
                                </div>
                            </div>
                        </div>
                    </div><!-- End of col-sm-4 -->

                    <div class="col-sm-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="single_portfolio margin-top-30">
                                    <a href="https://techfest.org/2018/Robowars/l-2.jpg" class="gallery-img"><img src="https://techfest.org/2018/Robowars/l-2.jpg" alt="" /></a>
                                </div>
                            </div><!-- End of col-sm-4 -->
                            <div class="col-sm-4">
                                <div class="single_portfolio margin-top-30">
                                    <a href="https://techfest.org/2018/Robowars/s-2.jpg" class="gallery-img"><img src="https://techfest.org/2018/Robowars/s-2.jpg" alt="" /></a>
                                </div>
                            </div><!-- End of col-sm-4 -->
                            <div class="col-sm-4">
                                <div class="single_portfolio margin-top-30">
                                    <a href="https://techfest.org/2018/Robowars/s-3.jpg" class="gallery-img"><img src="https://techfest.org/2018/Robowars/s-3.jpg" alt="" /></a>
                                </div>
                            </div><!-- End of col-sm-4 -->
                        </div>
                    </div><!-- End of col-sm-12 -->

                </div>
            </div><!-- End of main Portfolio area -->
        </div><!-- End of row -->
    </div><!-- End of container -->
</section><!-- End of Portfolio Section -->



<section id="videos" class="portfolio lightbg" style="overflow: hidden;">
    <div class="container">
        <div class="row">
            <div class="maint_portfolio_area">
                <div class="col-sm-12">
                    <div class="head_title text-center margin-top-80 w-100 wow fadeInUp">
                        <h2>Videos</h2>
                        <p>Here are some videos of previous editions of Robowars!</p>
                    </div>
                </div>

                <div class="main_portfolio_content sections wow fadeInUp">
                    <div class="row">
                        <div class="col-sm-4 pointer">
                            <img src="https://img.youtube.com/vi/7O4zMa_sqi4/0.jpg" onclick="window.open('https://www.youtube-nocookie.com/embed/7O4zMa_sqi4')" alt="youtube-video-1">
                            <h2 class="video-title">Phoenix vs Gazi</h2>
                        </div>
                        <div class="col-sm-4 pointer">
                            <img src="https://img.youtube.com/vi/PLSstX5mkcE/0.jpg" onclick="window.open('https://www.youtube-nocookie.com/embed/PLSstX5mkcE')" alt="youtube-video-1">
                            <h2 class="video-title">Legend vs Trinca Botz</h2>
                        </div>
                        <div class="col-sm-4 pointer">
                            <img src="https://img.youtube.com/vi/qkuxwh-YMJY/0.jpg" onclick="window.open('https://www.youtube-nocookie.com/embed/qkuxwh-YMJY')" alt="youtube-video-1">
                            <h2 class="video-title">Bose vs Hela</h2>
                        </div>
                        <div class="col-sm-4 pointer">
                            <img src="https://img.youtube.com/vi/B3EbGJM205s/0.jpg" onclick="window.open('https://www.youtube-nocookie.com/embed/B3EbGJM205s')" alt="youtube-video-1">
                            <h2 class="video-title">Death Warrior vs IIT Bombay</h2>
                        </div>
                        <div class="col-sm-4 pointer">
                            <img src="https://img.youtube.com/vi/-9RVbDuzZ8E/0.jpg" onclick="window.open('https://www.youtube-nocookie.com/embed/-9RVbDuzZ8E')" alt="youtube-video-1">
                            <h2 class="video-title">Nemesis vs Inceptor</h2>
                        </div>
                        <div class="col-sm-4 pointer">
                            <img src="https://img.youtube.com/vi/ccXGZ-LHFAI/0.jpg" onclick="window.open('https://www.youtube-nocookie.com/embed/ccXGZ-LHFAI')" alt="youtube-video-1">
                            <h2 class="video-title">Ultra RDX vs TAANAJI</h2>
                        </div>
                        <div class="col-sm-4 pointer">
                            <img src="https://img.youtube.com/vi/nl0gqOUd7cM/0.jpg" onclick="window.open('https://www.youtube-nocookie.com/embed/nl0gqOUd7cM')" alt="youtube-video-1">
                            <h2 class="video-title">Swag vs Bose</h2>
                        </div>
                        <div class="col-sm-4 pointer">
                            <img src="https://img.youtube.com/vi/bcnPhjVOH8w/0.jpg" onclick="window.open('https://www.youtube-nocookie.com/embed/bcnPhjVOH8w')" alt="youtube-video-1">
                            <h2 class="video-title">TAANAJI vs Flamingo</h2>
                        </div>
                        <div class="col-sm-4 pointer">
                            <img src="https://img.youtube.com/vi/8LfN9B2leHE/0.jpg" onclick="window.open('https://www.youtube-nocookie.com/embed/8LfN9B2leHE')" alt="youtube-video-1">
                            <h2 class="video-title">Swag vs TAANAJI</h2>
                        </div>
                        <div class=" col-sm-offset-4 col-sm-4 pointer">
                            <img src="https://img.youtube.com/vi/6pHogDCa7mg/0.jpg" onclick="window.open('https://www.youtube-nocookie.com/embed/6pHogDCa7mg')" alt="youtube-video-1">
                            <h2 class="video-title">Royal Rumble</h2>
                        </div> 
                    </div><!-- End of col-sm-12 -->
                </div>
            </div><!-- End of main Portfolio area -->
        </div><!-- End of row -->
    </div><!-- End of container -->
</section><!-- End of Portfolio Section -->



<footer id="footer" class="footer" style="background: #111">
    <div class="container">
        <div class="row">
            <div class="main_footer">
                <div class="col-sm-4">
                    <div class="footer_logo">
                        <a href="#home"><img src="/asset/robowars/robowarslogo.png" alt="" /></a>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="copyright_text margin-top-20">
                        <img src="{{asset('2018/logo.png')}}" alt="techfest-logo" style="width:70%;margin:auto">
                        <br>
                        <br>
                        &copy; Techfest 2018-19
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="footer_socail text-right  margin-top-20">
                        <ul class="list-inline">
                            <li class="p-name d-block text-white">
                                Devavrat Mahajan
                            </li>
                            <li class="email text-white">
                                <a href="mailto:devavrat@techfest.org">devavrat@techfest.org</a>
                            </li>
                            <li class="phone">
                                <a href="tel:+91 913 047 5759">+91 913 047 5759</a>
                            </li>
                        </ul>
                        <br>
                        <ul class="list-inline">
                            <li class="p-name d-block text-white">
                                Kanishk Samriya
                            </li>
                            <li class="email tw5">
                                <a href="mailto:kanishk@techfest.org">kanishk@techfest.org</a>
                            </li>
                            <li class="phone tw5">
                                <a href="tel:+91 946 031 3067">+91 946 031 3067</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- End of row -->
    </div><!-- End of container-fluid -->
</footer><!-- End of Footer Section -->

<div class="scrollup" style="text-align: center;line-height: 30px;background:whitesmoke">
    <a href="#" class="text-center text-white" style="color:black!important">&#x21EB;</a>
</div>
</div>

{{--<div id="myModal" class="modal fade" role="dialog" style="overflow:auto!important;">--}}
    {{--<div class="modal-dialog modal-lg">--}}
        {{--<div class="modal-content bg-dark text-white">--}}
            {{--<form action="/robowars/2018" method="POST">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                    {{--<h4 class="modal-title">Registration Form</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--@csrf--}}
                    {{--<div class="text-danger error-msg"></div>--}}
                    {{--<input type="hidden" name="category" id="category-hdden" value="{{isset($regError['category'])?$regError['category']:''}}">--}}
                    {{--<button class="btn category-btn @if(isset($regError['category']) && $regError['category']==120) active @endif" id="btn-120" style="padding: 5px; width: 10em;margin-right: 2em;" type="button" onclick="changeCategory(120)">120 LBS</button>--}}
                    {{--<button class="btn category-btn @if(isset($regError['category']) && $regError['category']==30) active @endif"" id="btn-30" style="padding: 5px; width: 10em;margin-right: 2em;" type="button" onclick="changeCategory(30)">30 LBS</button>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="category">Select Category--}}
                        {{--</label>--}}
                        {{--<select class="form-control" name="category" id="category">--}}
                            {{--<option disabled @if(!isset($regError['category'])) selected @endif>Select weight of robot</option>--}}
                            {{--<option value="R2" @if($regError['category']==='R2') selected @endif>120 lbs</option>--}}
                            {{--<option value="R3" @if($regError['category']==='R3') selected @endif>30 lbs</option>--}}
                        {{--</select>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="teamCount" >Number of members</label>--}}
                        {{--<select class="form-control" name="count" id="teamCount" onchange="updateTeam($('#teamCount').val())">--}}
                            {{--@if(isset($regError['count']))--}}
                                {{--<option disabled @if(!isset($regError['count'])) selected @endif>Select number of participants</option>--}}
                                {{--<option value="1" @if($regError['count']==1) selected @endif>1</option>--}}
                                {{--<option value="2" @if($regError['count']==2) selected @endif>2</option>--}}
                                {{--<option value="3" @if($regError['count']==3) selected @endif>3</option>--}}
                                {{--<option value="4" @if($regError['count']==4) selected @endif>4</option>--}}
                                {{--<option value="5" @if($regError['count']==5) selected @endif>5</option>--}}
                                {{--<option value="6" @if($regError['count']==6) selected @endif>6</option>--}}
                            {{--@else--}}
                                {{--<option disabled selected>Select number of participants</option>--}}
                                {{--<option value="1">1</option>--}}
                                {{--<option value="2">2</option>--}}
                                {{--<option value="3">3</option>--}}
                                {{--<option value="4">4</option>--}}
                                {{--<option value="5">5</option>--}}
                                {{--<option value="6">6</option>--}}
                            {{--@endif--}}
                        {{--</select>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label>Team Name:</label>--}}
                        {{--<input required type="text" class="form-control" placeholder="Team Name" name="teamName" value="@if(isset($regError['teamName'])) {{$regError['teamName']}} @endif">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label>Bot Name:</label>--}}
                        {{--<input required type="text" class="form-control" placeholder="Bot Name" name="botName" value="@if(isset($regError['botName'])) {{$regError['botName']}} @endif">--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label>Team Achivements</label>--}}
                        {{--<textarea class="form-control" rows="5" name="achivement" id="comment">@if(isset($regError['achivement'])) {{$regError['achivement']}} @endif</textarea>--}}
                    {{--</div>--}}
                    {{--<hr>--}}
                    {{--<div class="leader-group">--}}
                        {{--<div class="fa-3x">Leader</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Name</label>--}}
                                    {{--<input required type="text" class="form-control" name="leaderName" value="@if(isset($regError['leaderName'])) {{$regError['leaderName']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Date Of Birth</label>--}}
                                    {{--<input required type="date" class="form-control" name="leaderDob" value="@if(isset($regError['leaderDob'])){{$regError['leaderDob']}}@endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Email</label>--}}
                                    {{--<input required type="email" class="form-control" name="leaderEmail" value="@if(isset($regError['leaderEmail'])) {{$regError['leaderEmail']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Phone</label>--}}
                                    {{--<input required type="text" class="form-control" name="leaderPhone" value="@if(isset($regError['leaderPhone'])) {{$regError['leaderPhone']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Institute</label>--}}
                                    {{--<input required type="text" class="form-control" name="leaderSchool" value="@if(isset($regError['leaderSchool'])) {{$regError['leaderSchool']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Address</label>--}}
                                    {{--<textarea rows="5" type="text" class="form-control" name="leaderAddress">--}}
                                        {{--@if(isset($regError['leaderAddress'])) {{$regError['leaderAddress']}} @endif--}}
                                    {{--</textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >City</label>--}}
                                    {{--<input required type="text" class="form-control" name="leaderCity" value="@if(isset($regError['leaderCity'])) {{$regError['leaderCity']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Zip Code</label>--}}
                                    {{--<input required type="number" class="form-control" name="leaderZip" value="@if(isset($regError['leaderZip'])){{$regError['leaderZip']}}@endif">--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}




                    {{--</div>--}}
                    {{--<hr>--}}

                    {{--<div class="member2-group">--}}
                        {{--<div class="fa-3x">Member 2</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Name</label>--}}
                                    {{--<input type="text" class="form-control" name="member2Name" value="@if(isset($regError['member2Name'])) {{$regError['member2Name']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Date Of Birth</label>--}}
                                    {{--<input type="date" class="form-control" name="member2Dob" value="@if(isset($regError['member2Dob'])){{$regError['member2Dob']}}@endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Email</label>--}}
                                    {{--<input type="email" class="form-control" name="member2Email" value="@if(isset($regError['member2Email'])) {{$regError['member2Email']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Phone</label>--}}
                                    {{--<input type="text" class="form-control" name="member2Phone" value="@if(isset($regError['member2Phone'])) {{$regError['member2Phone']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Institute</label>--}}
                                    {{--<input type="text" class="form-control" name="member2School" value="@if(isset($regError['member2School'])) {{$regError['member2School']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Address</label>--}}
                                    {{--<textarea rows="5" type="text" class="form-control" name="member2Address">--}}
                                        {{--@if(isset($regError['member2Address'])) {{$regError['member2Address']}} @endif--}}
                                    {{--</textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >City</label>--}}
                                    {{--<input type="text" class="form-control" name="member2City" value="@if(isset($regError['member2City'])) {{$regError['member2City']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Zip Code</label>--}}
                                    {{--<input type="number" class="form-control" name="member2Zip" value="@if(isset($regError['member2Zip'])){{$regError['member2Zip']}}@endif">--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}


                    {{--</div>--}}
                    {{--<div class="member3-group">--}}
                        {{--<div class="fa-3x">Member 3</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Name</label>--}}
                                    {{--<input type="text" class="form-control" name="member3Name" value="@if(isset($regError['member3Name'])) {{$regError['member3Name']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Date Of Birth</label>--}}
                                    {{--<input type="date" class="form-control" name="member3Dob" value="@if(isset($regError['member3Dob'])){{$regError['member3Dob']}}@endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Email</label>--}}
                                    {{--<input type="email" class="form-control" name="member3Email" value="@if(isset($regError['member3Email'])) {{$regError['member3Email']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Phone</label>--}}
                                    {{--<input type="text" class="form-control" name="member3Phone" value="@if(isset($regError['member3Phone'])) {{$regError['member3Phone']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Institute</label>--}}
                                    {{--<input type="text" class="form-control" name="member3School" value="@if(isset($regError['member3School'])) {{$regError['member3School']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Address</label>--}}
                                    {{--<textarea rows="5" type="text" class="form-control" name="member3Address">--}}
                                        {{--@if(isset($regError['member3Address'])) {{$regError['member3Address']}} @endif--}}
                                    {{--</textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >City</label>--}}
                                    {{--<input type="text" class="form-control" name="member3City" value="@if(isset($regError['member3City'])) {{$regError['member3City']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Zip Code</label>--}}
                                    {{--<input type="number" class="form-control" name="member3Zip" value="@if(isset($regError['member3Zip'])){{$regError['member3Zip']}}@endif">--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}




                    {{--</div>--}}
                    {{--<div class="member4-group">--}}
                        {{--<div class="fa-3x">Member 4</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Name</label>--}}
                                    {{--<input type="text" class="form-control" name="member4Name" value="@if(isset($regError['member4Name'])) {{$regError['member4Name']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Date Of Birth</label>--}}
                                    {{--<input type="date" class="form-control" name="member4Dob" value="@if(isset($regError['member4Dob'])){{$regError['member4Dob']}}@endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Email</label>--}}
                                    {{--<input type="email" class="form-control" name="member4Email" value="@if(isset($regError['member4Email'])) {{$regError['member4Email']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Phone</label>--}}
                                    {{--<input type="text" class="form-control" name="member4Phone" value="@if(isset($regError['member4Phone'])) {{$regError['member4Phone']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Institute</label>--}}
                                    {{--<input type="text" class="form-control" name="member4School" value="@if(isset($regError['member4School'])) {{$regError['member4School']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Address</label>--}}
                                    {{--<textarea rows="5" type="text" class="form-control" name="member4Address">--}}
                                        {{--@if(isset($regError['member4Address'])) {{$regError['member4Address']}} @endif--}}
                                    {{--</textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >City</label>--}}
                                    {{--<input type="text" class="form-control" name="member4City" value="@if(isset($regError['member4City'])) {{$regError['member4City']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Zip Code</label>--}}
                                    {{--<input type="number" class="form-control" name="member4Zip" value="@if(isset($regError['member4Zip'])){{$regError['member4Zip']}}@endif">--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}




                    {{--</div>--}}
                    {{--<div class="member5-group">--}}
                        {{--<div class="fa-3x">Member 5</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Name</label>--}}
                                    {{--<input type="text" class="form-control" name="member5Name" value="@if(isset($regError['member5Name'])) {{$regError['member5Name']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Date Of Birth</label>--}}
                                    {{--<input type="date" class="form-control" name="member5Dob" value="@if(isset($regError['member5Dob'])){{$regError['member5Dob']}}@endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Email</label>--}}
                                    {{--<input type="email" class="form-control" name="member5Email" value="@if(isset($regError['member5Email'])) {{$regError['member5Email']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Phone</label>--}}
                                    {{--<input type="text" class="form-control" name="member5Phone" value="@if(isset($regError['member5Phone'])) {{$regError['member5Phone']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Institute</label>--}}
                                    {{--<input type="text" class="form-control" name="member5School" value="@if(isset($regError['member5School'])) {{$regError['member5School']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Address</label>--}}
                                    {{--<textarea rows="5" type="text" class="form-control" name="member5Address">--}}
                                        {{--@if(isset($regError['member5Address'])) {{$regError['member5Address']}} @endif--}}
                                    {{--</textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >City</label>--}}
                                    {{--<input type="text" class="form-control" name="member5City" value="@if(isset($regError['member5City'])) {{$regError['member5City']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Zip Code</label>--}}
                                    {{--<input type="number" class="form-control" name="member5Zip" value="@if(isset($regError['member5Zip'])){{$regError['member5Zip']}}@endif">--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}




                    {{--</div>--}}
                    {{--<div class="member6-group">--}}
                        {{--<div class="fa-3x">Member 6</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Name</label>--}}
                                    {{--<input type="text" class="form-control" name="member6Name" value="@if(isset($regError['member6Name'])) {{$regError['member6Name']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Date Of Birth</label>--}}
                                    {{--<input type="date" class="form-control" name="member6Dob" value="@if(isset($regError['member6Dob'])){{$regError['member6Dob']}}@endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Email</label>--}}
                                    {{--<input type="email" class="form-control" name="member6Email" value="@if(isset($regError['member6Email'])) {{$regError['member6Email']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Phone</label>--}}
                                    {{--<input type="text" class="form-control" name="member6Phone" value="@if(isset($regError['member6Phone'])) {{$regError['member6Phone']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-12">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Institute</label>--}}
                                    {{--<input type="text" class="form-control" name="member6School" value="@if(isset($regError['member6School'])) {{$regError['member6School']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-8">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Address</label>--}}
                                    {{--<textarea rows="5" type="text" class="form-control" name="member6Address">--}}
                                        {{--@if(isset($regError['member6Address'])) {{$regError['member6Address']}} @endif--}}
                                    {{--</textarea>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >City</label>--}}
                                    {{--<input type="text" class="form-control" name="member6City" value="@if(isset($regError['member6City'])) {{$regError['member6City']}} @endif">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="col-md-4">--}}
                                {{--<div class="form-group">--}}
                                    {{--<label >Zip Code</label>--}}
                                    {{--<input type="number" class="form-control" name="member6Zip" value="@if(isset($regError['member6Zip'])){{$regError['member6Zip']}}@endif">--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="form-group">--}}
                        {{--<label for="registerSubmit">--}}
                            {{--<input id="registerSubmit" type="checkbox" name="checkbox" required>--}}
                            {{--&nbsp;I agree to the <a href="#" onclick="$('#modal-terms').modal()" >terms and conditions</a>--}}
                        {{--</label>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button class="btn btn-default btn-lg float-left">Submit</button>--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            {{--</form>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</div>--}}
<div id="modal-terms" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg bg-dark text-white">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Terms &amp; Conditions</h4>
            </div>
            <div class="modal-body">
                <ol>
                    <li>
                        The Problem Statement may be amended at any point in time. This will be notified to the participants through E-mails.
                    </li>
                    <li>
                        The Prize Money mentioned in the Problem Statement will be bifurcated as Reimbursement Costs of teams from outside the Indian Subcontinent and the cash prize awarded to the winners. The bifurcation will be mentioned explicitly in the problem statement.
                    </li>
                    <li>
                        It is mandatory for all teams to report at the competition venue 1 day prior to the competition (13th December) with a <strong>completely assembled</strong> Bot.
                    </li>
                    <li>
                        The bot will be inspected on that day (13th December) itself and the Bots exceeding their respective weight category (120 lbs or 30 lbs) or the bots which are declared dangerous or unfit for battle by the judges will have to make the necessary changes and get the bot verified before 14th December <strong>at all costs</strong>. Failing to do so will result in disqualification.
                    </li>
                    <li>
                        The Bot rankings may be changed and the top 10 seeds for Robowars 2018 will be displayed on the website. The rankings will be decided by the Event organisers and judges on the basis of the past achivements of the bot or the abstract of the bot if it is participating for the first time. The past achievements / victories of your bot must be mentioned while registering.
                        <br>
                        The match draws will be made on the basis of the Bot Rankings and will be released on 13th December
                    </li>
                    <li>
                        It is mandatory for all teams to have a name for their bot. The name should be clearly visible on the bot during battle. The bot will not be allowed to participate in a royal rumble unless this condition is satisfied.
                    </li>
                </ol>
                <br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>

<script src="/asset/robowars/js/vendor/jquery-1.11.2.min.js"></script>
<script src="/asset/robowars/js/vendor/bootstrap.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="/asset/robowars/js/jquery.easing.1.3.js"></script>
<script src="/asset/robowars/js/jquery.magnific-popup.js"></script>
<script src="/asset/robowars/js/materialize.js"></script>
<script src="/asset/robowars/js/plugins.js"></script>
<script src="/asset/robowars/js/main.js"></script>
<script src="https://techfest.org/js/iziToast.min.js"></script>
<script>
    // function changeCategory(e){
    //     $('#category-hdden').val(e);
    //     $('.category-btn').removeClass('active');
    //     $('#btn-'+e).addClass('active');
    // }
    var c = @if(isset($regError['count'])) {{$regError['count']}} @else 1 @endif;
    function updateTeam(e){
        let p = ['.leader','.member2','.member3','.member4','.member5','.member6'];
        for(let y = 0;y<6;y+=1) {
            $(p[y] + '-group').hide();
            $(p[y]+'-group input').prop('required',false);
            $(p[y]+'-group textarea').prop('required',false);
        }
        for(let y = 0;y<e;y+=1){
            $(p[y]+'-group').show();
            $(p[y]+'-group input').prop('required',true);
            $(p[y]+'-group textarea').prop('required',true);
        }
    }
    @if(isset($regError['count']))
    updateTeam({{$regError['count']}});
    @endif

    @if(isset($errorReg))
    $('#myModal').modal();
    var text = `{{$errorReg}}`;
    var finalResult;
    if(text.split(" ").length === 1){
        var result = text.replace( /([A-Z])/g, " $1" );
        finalResult = result.charAt(0).toUpperCase() + result.slice(1) + ' is missing';
    }
    else{
        finalResult = text;
    }

    setTimeout(function(){
        iziToast.error({
            message: finalResult
        });
    },2000);
    $('.error-msg').text(finalResult);
    @endif

</script>
</body>
</html>