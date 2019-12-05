<?php
$pageTitle = "College Ambassador | Techfest | IIT Bombay";
$description = "Techfest, IIT Bombay presents its College Ambassador Program, with various incentives like internship opportunities. Become a CA & lead your college into the fest.";
$keywords = "cr,ca,college ambassador,college representative,college rep,techfest,techfest IIT Bombay,IIT Bombay,techfest college ambassador,techfest college representative,iit intern,techfest intern,intern,campus abassador,campus representative,college,opportunity,ambassador";
$googlePlusId = "108017539876187025802";
$pageUrl = "https://techfest.org/ca";
$imageUrl = asset('img/ca/thumbnail.jpg');
$siteTitle = "Techfest 2018-19 | IIT Bombay";
$homepageUrl = "https://techfest.org";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="google-signin-scope" content="profile email">
    <link rel="shortcut icon" href="{{asset('img/ca/favicon.png')}}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css">
    <link rel="stylesheet" href="{{asset('asset/css/jquery.fullpage.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/ca/caNoMiddleware.css')}}">

    <title>{{$pageTitle}}</title>
    <meta charset="utf-8"><!-- html5 version of http-equiv="Content-Type"... -->
    <meta name="description" content="{{$description}}">
    <meta name="keywords" content="{{$keywords}}">
    <link rel="author" href="https://plus.google.com/{{$googlePlusId}}" />
    <link rel="canonical" href="{{$pageUrl}}" />

    <meta property="og:url" content="{{$pageUrl}}">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="806802646185279">
    <meta property="og:image" content="{{$imageUrl}}">
    <meta property="og:description" content="{{$description}}">
    <meta property="og:title" content="{{$pageTitle}}">
    <meta property="og:site_name" content="{{$siteTitle}}">
    <meta property="og:see_also" content="{{$homepageUrl}}">
    <meta property="og:image:alt" content="College Ambassador Portal Thumbnail, Techfest, IIT Bombay">

    <meta itemprop="name" content="{{$pageTitle}}">
    <meta itemprop="description" content="{{$description}}">
    <meta itemprop="image" content="{{$imageUrl}}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{$pageUrl}}">
    <meta name="twitter:title" content="{{$pageTitle}}">
    <meta name="twitter:description" content="{{$description}}">
    <meta name="twitter:image" content="{{$imageUrl}}">

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>

</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2RJ5L8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="app" class="d-none">
    <nav class="navbar fixed-top navbar-expand-lg pl-0">
        <a class="navbar-brand pl-0" href="//techfest.org">
            <img src="{{asset('img/ca/tflogo.svg')}}" alt="Brand">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#toggle" aria-controls="toggle" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="wide-nav">
            <ul class="navbar-nav ml-auto mr-0 white-text">
                <li class="nav-item m-0 active">
                    <a class="nav-link " href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#aboutus">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#whycr">Why CA?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#incentives">Incentives</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#responsibilities">Responsibilities</a>
                </li>
                <li class="nav-item logo">
                    <a class="nav-link" href="#contact-us"><i class="fa fa-phone rotate-90"></i></a>
                </li>
                <li class="nav-item logo">
                    <a class="nav-link" href="#faq"><i class="fas fa-question"></i></a>
                </li>
                <li class="nav-item pointer">
                    <a class="nav-link" id="googleLogin"><i class="fab fa-google"></i></a>
                </li>
            </ul>
        </div>
    </nav>
    <nav class="d-block d-lg-none w-100">
        <a class="navbar-brand pl-0 ml-2 mt-2" href="//techfest.org" style="width:200px;">
            <img src="{{asset('img/ca/tflogo.svg')}}" alt="Brand" >
        </a>
    </nav>
    <div id="main">
        <div id="parallax" class="noselect">
            <div class="wrapper">
                <div class="front-images">
                    <div class="front-relative">
                        <img src="{{asset('img/ca/frontright.svg')}}" alt="people-front" class="right-front" draggable="false">
                        <img src="{{asset('img/ca/frontleft.svg')}}"  alt="people-front" class="left-front" >
                    </div>
                </div>
                @if(rand(0,10)<5)
                    <img src="{{asset('img/ca/main-man.svg')}}" alt="main-person" class="main-person visible">
                    <img src="{{asset('img/ca/main-man-dress.svg')}}" alt="main-person" class="main-person hidden">
                @else
                    <img src="{{asset('img/ca/main-woman.svg')}}" alt="main-person" class="main-person visible" style="width:160px">
                    <img src="{{asset('img/ca/main-woman-dress.svg')}}" alt="main-person" class="main-person hidden" style="width:162px">
                @endif
                <div class="back">
                    <div class="wrapper">
                        <img class="back-left" src="{{asset('img/ca/backleft.svg')}}" alt="persons-behind">
                        <img class="back-right" src="{{asset('img/ca/backright.svg')}}" alt="persons-behind">
                    </div>
                </div>
            </div>
        </div>
        <div class="spotlight-container noselect">
            <img src="{{asset('img/ca/spotlight.svg')}}" alt="spotlight" class="spotlight">
        </div>
        <div id="content">
            <div class="text-left" id="fullpage" >
                <section class="header section active">
                    <div class="wrapper">
                        <h1 class="fx-56 playfair text-bold">College Ambassador <br>Program</h1>
                        <h2 class="w-light header-second-line">Become the Leader of your College</h2>
                        <div class="h1">&nbsp; </div>
                        <button id="signinButton"></button>
                    </div>
                </section>
                <section class="about-us section">
                    <div class="wrapper">
                        <h2 class="playfair fx-56" >About Us</h2>
                        <div class="text-wrapper">
                            <p>
                                Techfest, IIT Bombay is Asia’s Largest Science and Technology festival with a total
                                footfall of more than 1.75 lakhs, a reach of more than 2500 colleges in India and
                                over 500 universities abroad. In the past 21 years, Techfest, IIT Bombay has worked
                                to promote technology, scientific thinking, and innovation among the youth.  A college ambassador
                                is instrumental in igniting this spirit among the young minds of
                                their college.
                            </p>
                        </div>
                    </div>
                </section>
                <section class="why-become-cr section">
                    <div class="wrapper">
                        <h2 class="playfair fx-56"> Why become CA?</h2>
                        <div class="text-wrapper fx-21">
                            <div class="row mb-2">
                                <div class="col-2">
                                    <img src="{{asset('img/ca/skillDevelopment.svg')}}" alt="improve-skill-icon" class="mt-1">
                                </div>
                                <div class="col-10">
                                    <b>Improve your skill set</b> <br>
                                    Enhance your communication and managerial skills <br> &nbsp;
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-2 pt-3">
                                    <img src="{{asset('img/ca/contacts.svg')}}" alt="contacts-icon" class="mt-1">
                                </div>
                                <div class="col-10">
                                    <b>Increase your contacts</b> <br>
                                    Interact with people coming from diverse fields across the country to develop your network
                                    <br>&nbsp;
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-2 pt-1">
                                    <img src="{{asset('img/ca/enhance.svg')}}" alt="enhance-your-image-icon" class="mt-1">
                                </div>
                                <div class="col-10">
                                    <b>Enhance your image</b> <br>
                                    Be associated with Asia's largest science and technology festival and lead your college to a promising future
                                    <br>&nbsp;
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('img/ca/leader.svg')}}" alt="leader-icon" class="mt-1">
                                </div>
                                <div class="col-10">
                                    <b>Become the Leader of your College</b> <br>
                                    An opportunity to represent your College at a higher level
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="incentives section">
                    <div class="wrapper pt-5">
                        <h2 class="playfair fx-56">Incentives</h2>
                        <div class="text-wrapper fx-21">
                            <div class="row mb-1">
                                <div class="col-2 text-center">
                                    <img src="{{asset('img/ca/internship.svg')}}" alt="improve-skill-icon" class="mt-1 invert">
                                </div>
                                <div class="col-10">
                                    <b>Internship Opportunity</b> <br>
                                    Top 75 College Ambassadors would be given an internship opportunity
                                </div>
                                <div class="col-10 offset-2 row internship-container">
                                    <div class="col-3 text-center">
                                        <div class="img-cont first">
                                            <img src="{{asset('img/ca/nexgen.png')}}" alt="nextgen-o">
                                        </div>
                                        <p class="text-nowrap">nexgeno.com</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="img-cont">
                                            <img src="{{asset('img/ca/frapp.png')}}" alt="frapp-icon">
                                        </div>
                                        <p>Frapp</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <div class="img-cont">
                                            <img src="{{asset('img/ca/alphaMotors.png')}}" alt="alphaMotors">
                                        </div>
                                        <p>Alpha Motors</p>
                                    </div>
                                    <div class="col-3 text-center">
                                        <a href="http://smrtbook.in" class="text-white" target="_blank">
                                            <div class="img-cont">
                                                <img src="{{asset('img/ca/smrtbook.jpg')}}" alt="SmrtBook.in" class="rounded">
                                            </div>
                                            <p>SmrtBook.in</p></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-2 text-center">
                                    <img src="{{asset('img/ca/workshops.svg')}}" alt="workshops">
                                </div>
                                <div class="col-10">
                                    <b>Workshop</b> <br>
                                    Free entry to workshops worth Rs 17000 for top 10 College Ambassadors
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-2 text-center">
                                    <img src="{{asset('img/ca/certificates.svg')}}" alt="certificate" class="mt-1">
                                </div>
                                <div class="col-10">
                                    <b>Certificate</b> <br>
                                    Top 500 CAs will be awarded a Certificate Of Organization by Techfest, IIT Bombay recognizing their work
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-2 text-center">
                                    <img src="{{asset('img/ca/accomodation.svg')}}" alt="accommodation" class="invert">
                                </div>
                                <div class="col-10">
                                    <b>Accommodation</b> <br>
                                    Free accommodation to top 10 College Ambassadors at Techfest 2018-19
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="incentives section responsibilities">
                    <div class="wrapper pt-5">
                        <h2 class="playfair fx-56 respo">Responsibilities</h2>
                        <div class="text-wrapper mt-1">
                            <div class="row mb-5">
                                <div class="col-2">
                                    <img src="{{asset('img/ca/publicity.svg')}}" alt="publicity" class=" mt-1">
                                </div>
                                <div class="col-10">
                                    <b>Publicity:</b> Displaying posters of Techfest 2018-19 within 2-3 days of receiving them on college bulletins and notice boards
                                    <br>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-2">
                                    <img src="{{asset('img/ca/events.svg')}}" alt="event-organize" class=" mt-1">
                                </div>
                                <div class="col-10">
                                    <b>Organize Events:</b> Organizing workshops &amp; events in your college or city under the guidance of Techfest, IIT Bombay
                                    <br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-2">
                                    <img src="{{asset('img/ca/socialMedia.svg')}}" alt="social-media" class="mt-1">
                                </div>
                                <div class="col-10">
                                    <b>Social Media:</b> Publicising the events of Techfest on various Social media platforms like Facebook, Twitter, Instagram by sharing the posts of Techfest
                                    <br> <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="contactus section">
                    <div class="wrapper">
                        <blockquote class="ml-0 quote-card blue-card w-auto mr-0 text-justify">
                            <p class="fx-21">
                                Opportunity is missed by most people because it is dressed in overalls and looks like work.
                            </p>
                            <cite>
                                Thomas A. Edison
                            </cite>
                        </blockquote>
                        <h2 class="playfair fx-36 mt-5 mb-3">Contact Us</h2>
                        <div class="text-wrapper fx-21">
                            <div class="name row mb-1">
                                <div class="col-2 text-right"><i class="fas fa-user"></i></div>
                                <div class="col-9" itemprop="name">Bhadri Narayanan R</div>
                            </div>
                            <a href="tel:9136796976" class="phone row mb-1" itemprop="tel">
                                <div class="col-2 text-right text-white"><i class="fas fa-phone rotate-90"></i></div>
                                <div class="col-9 text-white">+91 913 679 6976</div>
                            </a>
                            <a href="mailto:bhadri@techfest.org" class="email row mb-1" itemprop="email">
                                <div class="col-2 text-right text-white"><i class="fas fa-envelope"></i></div>
                                <div class="col-9 text-white">bhadri@techfest.org</div>
                            </a>
                        </div>
                    </div>
                </section>
                <section class="faq section" >
                    <h2 class="playfair fx-56 ml-md-4 pl-md-5">FAQs</h2>
                    <div class="row text-wrapper ml-md-4 ml-2 mr-md-4 mr-1 pl-md-5  pr-md-5 mb-5">
                        <div class="col-12 col-md-6 pr-2 pr-xl-5">
                            <div class="mb-2">
                                <div class="question">
                                    <b>Q. Who is  a College Ambassador?</b><br>
                                </div>
                                <div class="answer">
                                    A person who is the link between Techfest and your college. He/She will be the first
                                    point of contact for the aforementioned responsibilities.
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="question">
                                    <b>
                                        Q. How should I apply?
                                    </b>
                                </div>
                                <div class="answer">
                                    You will need a Google account to register, and you can find registration button above.
                                    Allow popups if asked for. Once you have registered, you won’t be able to change your email ID.
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="question">
                                    <b>Q. How much time and effort would be expected from me?</b>
                                </div>
                                <div class="answer">
                                    Basic commitment and sincerity towards the assigned task is expected.
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="question">
                                    <b>Q. What is the eligibility to become a College Ambassador?</b>
                                </div>
                                <div class="answer">
                                    A valid college ID would do.
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 pl-3 pl-md-5">
                            <div class="mb-2">
                                <div class="question">
                                    <b>Q. What kind of events will I be responsible for, as a CA?</b>
                                </div>
                                <ul class="answer">
                                    <li>
                                        Sharing the posts on all social media platforms and the posters on your college notice boards.
                                    </li>
                                    <li>
                                        Conducting workshops with the help of Techfest, IIT Bombay in your college.
                                    </li>
                                </ul>
                            </div>
                            <div class="mb-2">
                                <div class="question">
                                    <b>Q. What do I do if my points aren’t updated?</b>
                                </div>
                                <div class="answer">
                                    Drop a mail at ca@techfest.org.
                                </div>
                            </div>
                            <div class="mb-2">
                                <div class="question">
                                    <b>Q. Can there be more than one College Ambassador from a college?</b>
                                </div>
                                <div class="answer">
                                    Depending on the necessity, Techfest, IIT Bombay can appoint more than one college ambassador from a college.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="left-footer">&copy; {{date('Y')}} Techfest, IIT Bombay <br></div>
                        <div class="right-footer">Designed &amp; Developed by Team Techfest</div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div id="fb-root"></div>
</div>
<script>
    const _routes = {
        "login":'{!! route('ca.Post') !!}'
    };
    const _csrf = {
        "csrf_token": '{!! csrf_token() !!}',
        "csrf_field": '{!! csrf_field() !!}'
    };
</script>
<script src="{{asset('js/ca/caLogin.js')}}"></script>
<script src="{{asset('asset/js/jquery.fullpage.min.js')}}"></script>
<script>

    let slide1 = function(dir){
        if(dir==="down"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[1]).addClass('active');
            $('.right-front,.left-front').addClass('translated');
        } //front people fade away
        else if(dir==="up"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[0]).addClass('active');
        } //nothing happens
    };
    let slide2 = function(dir){
        if(dir==="down"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[2]).addClass('active');
            $('.back-left,.back-right').addClass('translated');
        } //back people will go behind
        else if(dir==="up"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[0]).addClass('active');
            $('.right-front,.left-front').removeClass('translated');
        } //front people come back
    };
    let slide3 = function(dir){
        if(dir==="down"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[3]).addClass('active');
            $('.back').addClass('scale-7');
        } //main person will zoom in
        else if(dir === "up"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[1]).addClass('active');
            $('.back-left,.back-right').removeClass('translated');
        } //back people will come from behind
    };
    let slide4 = function(dir){
        if(dir==="down") {
            $('.nav-item').removeClass('active');
            $($('.nav-item')[4]).addClass('active');
            $('.back').addClass('scale-0');
            $('.spotlight-container').fadeIn().addClass('active');
        }
        else if(dir==="up"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[2]).addClass('active');
            $('.back').removeClass('scale-7');
        }
    };
    let slide5 = function(dir){
        if(dir==="down"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[5]).addClass('active');
            $('.main-person.visible').fadeOut('slow');
            $('.main-person.hidden').fadeIn().animate({
                opacity:1
            },'slow');
        }
        else if(dir==="up"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[3]).addClass('active');
            $('.back').removeClass('scale-0');
            $('.spotlight-container').removeClass('active');

        }
    };
    let slide6 = function(dir){
        if(dir==="down") {
            $('#content').css({'z-index': 2});
//            $('#parallax').hide();
            $('.nav-item').removeClass('active');
            $($('.nav-item')[6]).addClass('active');
        }
        else if(dir==="up"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[4]).addClass('active');
            $('.main-person.visible').fadeIn('slow');
            $(".main-person.hidden").animate({
                opacity:0
            },'slow');
        }
    };
    let slide7 = function(dir){
        if(dir==="down") {
            $('.nav-item').removeClass('active');
            $($('.nav-item')[7]).addClass('active');
        }
        else if(dir==="up"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[5]).addClass('active');
//            $('#parallax').show();
        }
    };
    let slide8 = function(dir){
        if(dir==="down") return false;
        else if(dir==="up"){
            $('.nav-item').removeClass('active');
            $($('.nav-item')[6]).addClass('active');
        }
    };

    let animateIndex = [slide1,slide1,slide2,slide3,slide4,slide5,slide6,slide7,slide8];
    let currentIndex = 1;
    let animationFunction = function(index,nextIndex,dir){
        p = (nextIndex-index)/Math.abs(nextIndex-index);
        for(let k = index;k!==nextIndex;k+=p){
            animateIndex[k](dir);
        }
        currentIndex = index;
    };
    $(document).ready(function() {
        $('#app').removeClass('d-none');
        $('#fullpage').fullpage({
            easingcss3: 'ease',
            anchors: ['home', 'aboutus', 'whycr', 'incentives', 'responsibilities', 'contact-us', 'faq'],
            css3: true,
            onLeave: function (index, nextIndex, direction) {
                animationFunction(index, nextIndex, direction);
            },
            responsiveWidth: 992
        });
    });
</script>
</body>
</html>
