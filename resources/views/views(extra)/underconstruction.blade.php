<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Techfest | Asia&#039;s Largest Science &amp; Technology Festival</title>
    <meta name="csrf-token" content="FIKpwV2AOOJzWjcunNonu2o0v0oujVxuH5nImJQ5">
    <meta name="description" content="Techfest: 14th to 16th December. IIT Bombay presents Asia&#039;s Largest Science and Technology Festival. Get ready for an awesome adventurous journey.">
    <meta name="keywords" content="techfest,iit mumbai,tech fest, mumbai,techfest 2019, techfest 2018, asia, visit IIT Bombay, visit Bombay, competitions, workshops, exhibitions, lectures, fun, mumbai, festival, tf2k18, tf2k19, tech entertainment, tech extravaganza, representative, 2018, leader">
    <meta rel="canonical" content="https://m.techfest.org">
    <link rel="author" href="https://plus.google.com/117706965098999491468" />
    <link rel="icon" href="https://techfest.org/2018/favicon.png">
    <meta name="theme-color" content="#333333">

    <meta property="og:url" content="https://techfest.org/2018/home">
    <meta property="og:image" content="https://techfest.org/2018/thumbnail.png">
    <meta property="og:description" content="Techfest: 14th to 16th December. IIT Bombay presents Asia&#039;s Largest Science and Technology Festival. Get ready for an awesome adventurous journey.">
    <meta property="og:title" content="Techfest | Asia&#039;s Largest Science &amp; Technology Festival">
    <meta property="og:site_name" content="Techfest 2018-19">
    <meta property="og:see_also" content="https://m.techfest.org">

    <meta itemprop="name" content="Techfest | Asia&#039;s Largest Science &amp; Technology Festival">
    <meta itemprop="description" content="Techfest: 14th to 16th December. IIT Bombay presents Asia&#039;s Largest Science and Technology Festival. Get ready for an awesome adventurous journey.">
    <meta itemprop="image" content="https://techfest.org/2018/thumbnail.png">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://techfest.org/2018/home">
    <meta name="twitter:title" content="Techfest | Asia&#039;s Largest Science &amp; Technology Festival">
    <meta name="twitter:description" content="Techfest: 14th to 16th December. IIT Bombay presents Asia&#039;s Largest Science and Technology Festival. Get ready for an awesome adventurous journey.">
    <meta name="twitter:image" content="https://techfest.org/2018/thumbnail.png">

    <link rel="stylesheet" href="https://techfest.org/asset/css/Get.css">
    <link rel="stylesheet" href="https://techfest.org/css/iziToast.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M2RJ5L8');</script>
    <style>
        .clock {
            width: 650px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
        .text-center{
            position: absolute;
            bottom: 60%;
            left: 0;
            right: 0;
        }
        @media(max-width:992px){
            body{
                transform: scale(0.5) !important;
            }
            .text-center{
                position: relative;
            }
            .clock{
                width: 650px;
                position: relative !important;
                left: 50% !important;
                top:0%;
                transform: translateX(-50%) translateY(10%) !important;
            }
        }
    </style>
</head>
<body>
<div class="display-1 text-center mt-5 text-white pt-5">Portal opening in..</div>
<div class="clock"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://momentjs.com/downloads/moment.js"></script>
<script src="https://momentjs.com/downloads/moment-timezone-with-data-2012-2022.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flipclock/0.7.8/flipclock.js"></script>
<script>
    $(document).ready(function() {
        var clock;

        // Grab the current date
        var currentDate = new Date();

        // Target future date/24 hour time/Timezone
        var targetDate = moment.tz("2018-07-29 12:30", "GMT");

        // Calculate the difference in seconds between the future and current date
        var diff = targetDate / 1000 - currentDate.getTime() / 1000;

        if (diff <= 0) {
            // If remaining countdown is 0
            clock = $(".clock").FlipClock(0, {
                clockFace: "DailyCounter",
                countdown: true,
                autostart: false
            });
            console.log("Date has already passed!")

        } else {
            // Run countdown timer
            clock = $(".clock").FlipClock(diff, {
                clockFace: "DailyCounter",
                countdown: true,
                callbacks: {
                    stop: function() {
                        console.log("Timer has ended!")
                    }
                }
            });

            // Check when timer reaches 0, then stop at 0
            setTimeout(function() {
                checktime();
            }, 1000);

            function checktime() {
                t = clock.getTime();
                if (t <= 0) {
                    clock.setTime(0);
                }
                setTimeout(function() {
                    checktime();
                }, 1000);
            }
        }
    });

</script>
</body>
</html>