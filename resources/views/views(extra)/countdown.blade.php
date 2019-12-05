<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$meta['title']}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$meta['description']}}">
    <meta name="keywords" content="{{$meta['keywords']}}">
    <meta rel="canonical" content="https://m.techfest.org">
    <link rel="author" href="https://plus.google.com/117706965098999491468" />
    <link rel="icon" href="https://techfest.org/2018/favicon.png">
    <meta name="theme-color" content="#333333">

    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{asset('2018/countdown-thumbnail.jpg')}}">
    <meta property="og:description" content="{{$meta['description']}}">
    <meta property="og:title" content="{{$meta['title']}}">
    <meta property="og:site_name" content="Techfest 2018-19">
    <meta property="og:see_also" content="https://m.techfest.org">

    <meta itemprop="name" content="{{$meta['title']}}">
    <meta itemprop="description" content="{{$meta['description']}}">
    <meta itemprop="image" content="{{asset('2018/countdown.jpg')}}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:title" content="{{$meta['title']}}">
    <meta name="twitter:description" content="{{$meta['description']}}">
    <meta name="twitter:image" content="{{asset('2018/countdown-thumbnail.jpg')}}">
    <style>
        html,body{
            height:100%;
            width:100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            overflow: hidden;
        }
        html {
            background: url('https://techfest.org/2018/countdown.jpg') no-repeat center center fixed;
            background-size: cover;
            height: 100%;
            color:white !important;
        }

        body {
            background: transparent;
            height: 100%;
        }

        .wrap {
            /* OLD browser support */
            display: -webkit-box;
            display: -moz-box;
            display: -ms-flexbox;
            -moz-box-wrap: nowrap;
            -webkit-box-wrap: nowrap;
            -ms-flexbox-wrap: nowrap;
            -moz-box-direction: column;
            -webkit-box-direction: column;
            -ms-flexbox-direction: column;
            /* END OLD browser support */

            display: flex; /* or inline-flex */
            flex-direction: column; /* or usually or row */
            justify-content: center;
            align-items: center;

            height: 100%;
            width: 100%;
        }

        h2 {
            padding: 0;
            max-width: 700px;
            color: white;
            opacity: 0.75;
            font-size:4em;
            margin: 0 auto 0.25em;
        }

        p {
            margin: 0;
            font-size:3em;
        }

        #countdown {
            color: white;
            display: flex;
            max-width: 360px;
            justify-content: center;
            margin: 0 auto;
        }

        #countdown .countdown-section {
            padding: 0 15px;
            font-size:2em;
            text-align: center;
            margin-bottom: 2em;
            border-right: 1px solid rgba(255, 255, 255, 0.36);
        }

        #countdown .countdown-section:last-child {
            border-right: 0;
        }

        #countdown .countdown-section .h1 {
            opacity: 0.75;
        }

        #countdown .countdown-section .text-center {
            color: white;
            opacity: 1.0
        }

        .share {
            position: relative;
            padding: 6px 12px 6px 35px;
            color: white;
            border: 1px solid white;
        }

        .share:hover {
            color: black;
            text-decoration: underline;
            background-color: rgba(255, 255, 255, 0.36);
        }

        .share-twitter {
            height: 24px;
            width: 24px;
            position: absolute;
            top: 3px;
            left: 7px;
        }

        .btn-default {


        }

        .site-footer {
            margin-bottom: 2em;
            bottom:1em;
            position: absolute;
            color: #FFF;
            font-size: 0.875em /* 14px */
            height: 54px;
            padding-bottom: 20px;
        }

        a {
            color: #ff3399;
            text-decoration: none;
        }
        .d-none{
            display:none;
        }
    </style>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M2RJ5L8');</script>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2RJ5L8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div class="wrap">
    <div class="logo text-center">
    </div>
    <h2 class="text-center text-white">Website will be live in...</h2>
    <div id="countdown">
        <div class="countdown-section d-none">
            <span class="h1 days">-</span>
            <div class="text-center">DAYS</div>
        </div>
        <div class="countdown-section">
            <span class="h1 hours">-</span>
            <div class="text-center">HRS</div>
        </div>
        <div class="countdown-section">
            <span class="h1 minutes"></span>
            <div class="text-center">MINS</div>
        </div>
        <div class="countdown-section">
            <span class="h1 seconds"></span>
            <div class="text-center">SECS</div>
        </div>
    </div>
    <footer class="site-footer text-center">
        <span>&copy; Techfest 2018-19</span>
    </footer>
</div>
<script>
    // http://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/
    // https://codepen.io/SitePoint/pen/MwNPVq
    function getTimeRemaining(endtime){
        var t = Date.parse(endtime) - Date.parse(new Date());
        var seconds = Math.floor( (t/1000) % 60 );
        var minutes = Math.floor( (t/1000/60) % 60 );
        var hours = Math.floor( (t/(1000*60*60)) % 24 );
        var days = Math.floor( t/(1000*60*60*24) );
        return {
            'total': t,
            'days': days,
            'hours': hours,
            'minutes': minutes,
            'seconds': seconds
        };
    }

    function initializeClock(id, endtime){
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');

        function updateClock(){
            var t = getTimeRemaining(endtime);
            if(endtime<0) window.location.reload();
            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

            if(t.total<=0){
                clearInterval(timeinterval);
            }
        }

        updateClock();
        var timeinterval = setInterval(updateClock,1000);
    }

    // LAUNCH DATE
    // USE CHRISTMAS DAY so countdown is not a negative value for foreseeable future
    var deadline = '28 July 2018 11:30:00 GMT';
    initializeClock('countdown', deadline);
</script>
</body>
</html>

