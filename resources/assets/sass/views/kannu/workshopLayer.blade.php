<!DOCTYPE>
<html>
<head>
    <title>@yield('title') | Techfest 2017-18, IIT Bombay | Asia's Largest Science and Technology Festival</title>
 <!-- Facebook OpenGraph tags -->
 <meta property="og:title" content="Techfest 2017-18, IIT Bombay | Asia's Largest Science and Technology Festival" />
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://techfest.org"/>
    <meta property="og:image" content="https://techfest.org/img/preview/2.jpg" />

    <meta name="theme-color" content="#010202">
    <meta name="description" content="Techfest 2017-18: IIT Bombay presents Asia's Largest Science and Technology Festival">
    <meta name="keywords" content="mumbai, festival, India, Asia, best, biggest, largest, iitb, students, robots, country, campaign, initiative, sponsor, games, artists,international, contacts, tf, techfest id, techfest_iitb, techfestiitbombay, techfest.iitb, awesome, largest, Tech fest,Tech Fest, Science, Technology, lectures, exhibitions, tech shows , tech entertainment, tech extravaganza,
        most creative campaign, revolution, social, exhibitions, tf2k16, tf2k17, 2k16, 2k17, 2k18, 2016, 2017, 2016-17,2017-18,tf2k18, iit, bombay,CR,ca,cA,CAMPUS,campus representative,2018,leader" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->



    <meta name="theme-color" content="#010202">

    <!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- bootstrap ends -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script> -->
<link rel="icon" href="img/2018/icon.ico">
<link href="https://fonts.googleapis.com/css?family=Play" rel="stylesheet">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<link rel="stylesheet" type="text/css" href="https://www.techfest.org/css/responsive.css">
<link rel="stylesheet" type="text/css" href="https://www.techfest.org/css/hamburger.css">
<link rel="stylesheet" href="https://www.techfest.org/css/topNavBar.css">
<link rel="stylesheet" href="https://www.techfest.org/css/footer.css">
<link rel="stylesheet" type="text/css" href="https://www.techfest.org/css/siteMap.css">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81222017-1', 'auto');
  ga('send', 'pageview');

</script>



@yield('style')


<style type="text/css">

@yield('styling')

@font-face {
    font-family: 'pirulen';
    src: url('../fonts/pirulen/pirulenrg.ttf');
    src: url('../fonts/pirulen/pirulenrg.ttf') format('embedded-opentype'),
         url('../fonts/pirulen/pirulenrg.ttf') format('woff'),
         url('../fonts/pirulen/pirulenrg.ttf') format('truetype'),
         url('../fonts/pirulen/pirulenrg.ttf') format('svg');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'pirulen';
    src: url('https://techfest.org/fonts/pirulen/pirulenrg.ttf');
    src: url('https://techfest.org/fonts/pirulen/pirulenrg.ttf') format('embedded-opentype'),
         url('https://techfest.org/fonts/pirulen/pirulenrg.ttf') format('woff'),
         url('https://techfest.org/fonts/pirulen/pirulenrg.ttf') format('truetype'),
         url('https://techfest.org/fonts/pirulen/pirulenrg.ttf') format('svg');
    font-weight: normal;
    font-style: normal;
}


.comeon{
     bottom:14vh;
}

a:focus{color: white;text-decoration: none; }

.comeon:not(:root:root){
    /* ^_^ */
    bottom:2vh;
}

#particles-js{display: none;}
.mobiList{display: block;}
.mobiList a{color: #89eeff;text-decoration: none;}

 #ab023{margin-bottom: 2vh;}
.lapiList{display: none;}

@media (max-width: 62em) and (orientation: landscape) {
#menu1 {
    left: 1.5vw;
}
ul#menu1 li {
    font-size: 0.8vw;
    }
ul#menu2 li {
    font-size: 0.8vw;
    }
    #bodymovin{ margin-top:-5%;width:50vw; }
    #ab023{margin-bottom: 10vh;}

}


 @media (min-width: 62em){
body {
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-o-user-select: none;
user-select: none;
}
@supports (-ms-ime-align: auto) {
  .hamburger {
        margin-top: 2.5%;
  }
}
.upper-bar:not(:root:root){
    /* ^_^ */
font-size: 12px;
}
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
     /* IE10+ CSS styles go here */
     .hamburger {
        margin-top: 2.5%;
  }
  .link{
    font-size: 1.8vh;
  }
  ul#menu1 li{
    font-size:1vw;
  }
  ul#menu2 li{
    font-size:1vw;
  }

  .arc{
     /*filter: hue-rotate(90deg);*/
  }

}

@-moz-document url-prefix() {

    .hamburger  {
        margin-top: 2.5%;
    }
    .footer{
        top: 94vh;
    }
}


#particles-js{display: block;position: fixed;width: 100%;height: 100%;}
.mobiList{display: none;}
.lapiList{display: block;}
.content-sub-heading{
    color: lightslategray;
}
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0);
    background-color: black
}

::-webkit-scrollbar {
    width: 2.5px;
    background-color: black
}

::-webkit-scrollbar-thumb {
    background-color: #0ae;
    background-image: -webkit-gradient(linear, 0 0, 0 100%, color-stop(.5, rgba(255, 255, 255, .2)), color-stop(.5, transparent), to(transparent))
}

.icons{
    margin: 0 0 10px;
    color: white;
    font-size: 3.6vh;
    padding: 2vh;
}


@supports (-ms-ime-align: auto) {
  .hamburger {
        margin-top: 2.5%;
  }
}

::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}

#foot3 a:not(:root:root){
    /* ^_^ */
    font-size: 10px;

}
#foot4 a:not(:root:root){
    /* ^_^ */
    font-size: 10px;
}

}

</style>

@yield('style2')

</head>
<body>

<div id="overall" class="alloverAgain" style="width: 100%;height: 100%;overflow: hidden;">

<div id="particles-js" style="z-index: -1"></div>


<!-- top navigation bar -->
<div id="nav-con" style="z-index: 1">
<nav data-v-14b53e32="" class="hamburger" style="position: absolute;z-index: 2" onclick="love()">
    <button data-v-14b53e32="" class="sound">
    <svg data-v-14b53e32="" id="wave" data-name="Layer 1" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 25 38">
    <path data-v-14b53e32="" data-name="Line 1" d="M0.91,15L0.78,15A1,1,0,0,0,0,16v6a1,1,0,1,0,2,0s0,0,0,0V16a1,1,0,0,0-1-1H0.91Z" class="line line-1"></path>
    <path data-v-14b53e32="" data-name="Line 2" d="M6.91,15L6.78,9A1,1,0,0,0,6,10V28a1,1,0,1,0,2,0s0,0,0,0V10A1,1,0,0,0,7,9H6.91Z" class="line line-2"></path>
    <path data-v-14b53e32="" data-name="Line 3" d="M12.91,15L12.78,0A1,1,0,0,0,12,1V37a1,1,0,1,0,2,0s0,0,0,0V1a1,1,0,0,0-1-1H12.91Z" class="line line-3"></path>
    <path data-v-14b53e32="" data-name="Line 4" d="M18.91,15l-0.12,0A1,1,0,0,0,18,11V27a1,1,0,1,0,2,0s0,0,0,0V11a1,1,0,0,0-1-1H18.91Z" class="line line-4"></path>
    <path data-v-14b53e32="" data-name="Line 5" d="M24.91,15l-0.12,0A1,1,0,0,0,24,16v6a1,1,0,0,0,2,0s0,0,0,0V16a1,1,0,0,0-1-1H24.91Z" class="line line-5"></path>
    </svg>
    </button>
</nav>
<img src="https://techfest.org/img/header/navigation.png" id="tf-logo"
 alt="Smiley face" width="100%" style="position:absolute;" class="img-topNavLapi" style="z-index: -1" usemap="#image-map01">
<map name="image-map01">
    <area target="" alt="" title="HOME" href="https://techfest.org/" coords="251,5,249,100,1200,100,1200,4" shape="poly">
</map>

<!-- <img src="https://techfest.org/img/eventsMob/topbox.png" id="tf-logo"
 alt="Smiley face" width="100%" style="position:absolute;z-index: 1" class="img-topNavMobi" usemap="#image-map"> -->

<map name="image-map">
    <area target="" alt="" title="" href="https://techfest.org" coords="365,1,365,200,681,200,684,0" shape="poly">
</map>

<ul id="menu1" style="z-index: 1">
    <div style="    padding-top: 0.5vw;
    position: absolute;
    text-align: center;
    z-index: 2;
    left: -1.5vw;
    font-size: 80%;
    width: 100%;
    top: 0vh;
    float: left;
    height: 4vh;
    display: block;
    z-index: 1;
    background: rgba(86,186,204,1);
    background: linear-gradient(to right, rgba(86,186,204,0.5) 0%, rgba(86,186,204,0.5) 20%, rgba(86,186,204,0.5) 35%, rgba(86,186,204,0.5) 50%, rgba(86,186,204,0.5) 65%, rgba(86,186,204,0.5) 80%, rgba(86,186,204,0) 98%, rgba(86,186,204,0) 99%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#56bacc', endColorstr='#56bacc', GradientType=1 );
">
   <?php echo '<p style="color:white;letter-spacing:2px;text-align:center;" class="blink">Techfest Official App:- <a href="https://play.google.com/store/apps/details?id=com.techfest.tf2017.abcd" target="_blank">Download now</a></p>'
?>

    <style>
        @-webkit-keyframes blinker {
          from {opacity: 1.0;}
          to {opacity: 0.0;}
        }
        .blink{
                text-decoration: blink;
    -webkit-animation-name: blinker;
    -webkit-animation-duration: 0.6s;
    -webkit-animation-iteration-count:infinite;
    -webkit-animation-timing-function:ease-in-out;
    -webkit-animation-direction: alternate;
        }


    </style>
</div>
  <!-- <li onclick="love()">Hamburger</li> -->
  <!-- <li style="margin-right: 0.6%;"><a href="https://techfest.org">HOME</a></li> -->
  <li style="margin-right: 0.6%;"><a href="/initiatives" id="init">INITIATIVES</a></li>
  <li style="margin-right: 0.6%;"><a href="/ideate" id="idea">IDEATE</a></li>
  <li style="margin-right: 0.6%;"><a href="/competitions" id="comp">COMPETITIONS</a></li>
  <li style="margin-right: 0.6%;"><a href="/workshops" id="work">WORKSHOPS</a></li>
   <li style="margin-right: 0.6%;"><a href="/summit" id="summ">SUMMIT</a></li>
</ul>
<ul id="menu2" style="z-index: 1">
     <div style="    padding-top: 0.5vw;
    position: absolute;
    text-align: center;
    z-index: 2;
    left: -1.5vw;
    font-size: 80%;
    width: 100%;
    top: 0vh;
    float: left;
    height: 4vh;
    display: block;
      animation: glowing 1500ms infinite;
    z-index: 1;
    background: rgba(86,186,204,1);
    background: linear-gradient(to left, rgba(86,186,204,0.5) 0%, rgba(86,186,204,0.5) 20%, rgba(86,186,204,0.5) 35%, rgba(86,186,204,0.5) 50%, rgba(86,186,204,0.5) 65%, rgba(86,186,204,0.5) 80%, rgba(86,186,204,0) 98%, rgba(86,186,204,0) 99%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#56bacc', endColorstr='#56bacc', GradientType=1 );
">


   <?php echo '<p style="color:white;letter-spacing:2px;text-align:center;" class="blink">Techfest Schedule:- <a href="https://techfest.org/resource/schedule2017.pdf" target="_blank">View Here</a></p>'
?>

</div>
 <!--  <li style="margin-right: 0.6%;"><a href="/summit" id="summ">SUMMIT</a></li> -->
  <li style="margin-right: 0.6%;"><a href="/lectures" id="lect">LECTURES</a></li>
  <li style="margin-right: 0.6%;"><a href="/exhibitions" id="exhi">EXHIBITIONS</a></li>
  <li style="margin-right: 0.6%;"><a href="/technoholix" id="tech">TECHNOHOLIX</a></li>
  <li style="margin-right: 0.6%;"><a href="/mun" id="mun">TWMUN</a></li>
   <li style="margin-right: 0.6%;"><a href="/ozone" id="ozon">OZONE</a></li>
</ul>
</div>
<!-- top nav bar ends -->
<div style="width: 90%;
    margin-left: 5%;
    text-align: center;
    height: 80%;
    position: fixed;font-family: 'Play';
    overflow: scroll;
    top: 10%;
    padding-top: 40px;">


    @yield('content')



</div>


<!-- footer-->
<div class="footer" style="background: rgba(0, 0, 0, 0.4);">
<div class="infooter">
<div id="foot1">

</div>
<div id="foot3" class="hidden-sm hidden-xs">
        <a style="margin-right:0.6%; padding-top: 0vh;padding-bottom: 0vh" class="link link--kukuri" href="/about" data-letters="ABOUT" id="abou">ABOUT</a>
        <a style="padding-top: 0vh;padding-bottom: 0vh" class="link link--kukuri" href="/media" data-letters="MEDIA" id="medi">MEDIA</a>

        <!-- <a style="padding-top: 0vh;padding-bottom: 0vh" class="link link--kukuri" href="/advanced" data-letters="POLICY" id="adva">POLICY</a> -->

        <a style="padding-top: 0vh;padding-bottom: 0vh" class="link link--kukuri" href="/hospitality" data-letters="HOSPITALITY" id="hosp">HOSPITALITY</a>
        <a style="padding-top: 0vh;padding-bottom: 0vh" class="link link--kukuri " href="/contactus" data-letters="CONTACT US" id="cont">CONTACT US</a>
</div>
<div id="foot4" class="hidden-sm hidden-xs">
    <a style="padding-top: 0vh;padding-bottom: 0vh" class="link link--kukuri " href="https://www.thecollegefever.com/events/techfest-merchandise" target="_blank" data-letters="MERCHANDISE" id="merc">MERCHANDISE</a>
   <!--  <a style="padding-top: 0vh;padding-bottom: 0vh" class="link link--kukuri" href="/ozone" data-letters="OZONE" id="ozon">OZONE</a> -->
    <!-- <a style="padding-top: 0vh;padding-bottom: 0vh" class="link link--kukuri" href="/media" data-letters="MEDIA" id="medi">MEDIA</a> -->

    <a style="padding-top: 0vh;padding-bottom: 0vh" class="link link--kukuri" href="/advanced" data-letters="PRIVACY POLICY" id="adva">PRIVACY POLICY</a>

    <a style="padding-top: 0vh;padding-bottom: 0vh" class="link link--kukuri" href="/sponsors" data-letters="SPONSORS" id="spon">SPONSORS</a>
</div>
<div class="foot5">
<a href="https://www.facebook.com/techfest.iitb/" style="display: inline;" target="_blank">
<i class="fa fa-facebook-f"></i>
</a>
<a href="https://www.instagram.com/techfest_iitb" style="display: inline;" target="_blank">
<i class="fa fa-instagram"></i>
</a>
<a href="https://twitter.com/Techfest_IITB" style="display: inline;" target="_blank">
<i class="fa fa-twitter"></i>
</a>
<a href="https://www.youtube.com/user/techfestiitbombay" style="display: inline;" target="_blank">
<i class="fa fa-youtube"></i>
</a>
<a href="https://www.linkedin.com/company/techfest" style="display: inline;" target="_blank">
<i class="fa fa-linkedin"></i>
</a>
<a href="https://in.pinterest.com/techfestiitbombay/" style="display: inline;" target="_blank">
<i class="fa fa-pinterest-p"></i>
</a>
<a href="https://medium.com/@Techfest" style="display: inline;" target="_blank">
<i class="fa fa-medium"></i>
</a>
</div>
</div>
</div>
<!-- footer ends -->

</div>

<!-- end of overall -->

<!-- start of siteMap -->


<div id="siteMap" class="indexing01">
<div id="change" class="change01" onclick="love()">
 <a href="javascript:void(0)" class="baby" style="font-size: 10vh;
 position: absolute;color: #89eeff;
text-decoration: none;">&times;</a>
</div>

<div id="middleMen" style="opacity: 0;">
<div id="grad3"></div>
<div id="grad4"></div>
<div id="grad1"></div>
<div id="grad2"></div>
</div>

<div id="childOne" style="font-family:'pirulen';">
        <ul>
            <li id="ab01" class="list lapiList">
                <p style="margin-bottom: 0px;" onmouseover="right(1)" onclick="krish(1)"><a href="https://www.techfest.org/" style="color: #88edfe;text-decoration: none;">HOME</a></p>
            </li>
            <li id="ab02" class="list lapiList" >
                <p style="margin-bottom: 0px;" onmouseover="right(2)" onclick="krish(2)">IDEATE</p>
            </li>
            <li id="ab03" class="list lapiList">
                <p style="margin-bottom: 0px;" onmouseover="right(3)" onclick="krish(3)">Competitions</p>
            </li>
            <li id="ab04" class="list lapiList">
                <p style="margin-bottom: 0px;" onmouseover="right(4)" onclick="krish(4)">Events</p>
            </li>
            <li id="ab05" class="list lapiList">
                <p style="margin-bottom: 0px;" onmouseover="right(5)" onclick="krish(5)">
                <a href="https://www.techfest.org/team" style="color: #88edfe;text-decoration: none;">TEAM TECHFEST</a>
                </p>
            </li>



            <li id="ab06" class="list mobiList">
                <a href="/" style="text-decoration: none;"> <p style="margin-bottom: 0px;">HOME</p></a>
            </li>
            <li id="ab07" class="list mobiList">
                <a href="/initiatives" style="text-decoration: none;"> <p style="margin-bottom: 0px;">INITIATIVES</p>
            </li>
            <li id="ab08" class="list mobiList">
                <a href="/ideate" style="text-decoration: none;"> <p style="margin-bottom: 0px;">IDEATE</p>
            </li>
            <li id="ab09" class="list mobiList">
                <a href="/competitions" style="text-decoration: none;"> <p style="margin-bottom: 0px;">COMPETITIONS</p>
            </li>
            <li id="ab010" class="list mobiList">
                <a href="/summit" style="text-decoration: none;"> <p style="margin-bottom: 0px;">SUMMIT</p>
            </li>
             <li id="ab011" class="list mobiList">
                <a href="/mun" style="text-decoration: none;"> <p style="margin-bottom: 0px;">TWMUN</p>
            </li>
             <li id="ab012" class="list mobiList">
                <a href="/workshops" style="text-decoration: none;"> <p style="margin-bottom: 0px;">WORKSHOPS</p>
            </li>
             <li id="ab013" class="list mobiList">
                <a href="/lectures" style="text-decoration: none;"> <p style="margin-bottom: 0px;">LECTURES</p>
            </li>
             <li id="ab014" class="list mobiList">
               <a href="/exhibitions" style="text-decoration: none;"> <p style="margin-bottom: 0px;">EXHIBITIONS</p>
            </li>
             <li id="ab015" class="list mobiList">
                <a href="/technoholix" style="text-decoration: none;"> <p style="margin-bottom: 0px;">TECHNOHOLIX</p>
            </li>


            <li id="ab016" class="list mobiList">
                <a href="/ozone" style="text-decoration: none;"> <p style="margin-bottom: 0px;">OZONE</p></a>
            </li>
            <li id="ab017" class="list mobiList">
                <a href="https://www.thecollegefever.com/events/techfest-merchandise" target="_blank" style="text-decoration: none;"> <p style="margin-bottom: 0px;">MERCHANDISE</p>
            </li>
            <li id="ab018" class="list mobiList">
                <a href="/hospitality" style="text-decoration: none;"> <p style="margin-bottom: 0px;">HOSPITALITY</p>
            </li>
            <li id="ab019" class="list mobiList">
                <a href="/media" style="text-decoration: none;"> <p style="margin-bottom: 0px;">MEDIA</p>
            </li>
            <li id="ab020" class="list mobiList">
                <a href="/advanced" style="text-decoration: none;"> <p style="margin-bottom: 0px;">POLICY</p>
            </li>
             <li id="ab021" class="list mobiList">
                <a href="/about" style="text-decoration: none;"> <p style="margin-bottom: 0px;">ABOUT US</p>
            </li>
             <li id="ab022" class="list mobiList">
                <a href="/sponsors" style="text-decoration: none;"> <p style="margin-bottom: 0px;">SPONSORS</p>
            </li>
             <li id="ab023" class="list mobiList">
                <a href="/contactus" style="text-decoration: none;"> <p>CONTACT US</p>
            </li>



        </ul>
</div>



<div id="childTwo">
    <div id="right01" style="position: absolute;left: -2vw;">
    <img src="https://techfest.org/img/theme/element.png" style="width: 40vh;">
    </div>

    <div id="right02" style="display: none;position: absolute;left: -2vw;width: 40vh;">
    <div style="font-size: 2.6vh;
    position: relative;
    top: 4vh;">
       <ul style="list-style-type: none;color: #ededed">
        <li><a class="siteMap_compi" href="https://www.techfest.org/digitalisation">DIGITALIZE</a></li>
        <li><a class="siteMap_compi" href="https://www.techfest.org/biotechnology">ELIXIR</a></li>
        <li><a class="siteMap_compi" href="https://www.techfest.org/sustainability">INTERNATIONAL SUSTAINABILITY CHALLENGE</a></li>
        <!-- <li>TINKERER</li> -->
        </ul>
    </div>
    </div>



    <div id="right03" style="display: none;position: absolute;left: -2vw;">
            <div style="font-size: 2.6vh;
            position: relative;
            top: -10vh;">
            <ul style="list-style-type: none;color: #ededed">
                <li><a class="siteMap_compi" href="https://www.techfest.org/oprahat" >OPRAHAT</a></li>
                <!-- <li><a href="https://www.techfest.org/aquaeructo" style="color: #fefefe;">AQUA ERUCTO</a></li> -->
                <li style="padding-bottom: 0;">INTERNATIONAL</li>
                        <ul style="font-family: 'Play',sans-serif;list-style-type: none;color: #df9111;">
                            <li><a href="https://www.techfest.org/robowars" style="color: #df9111;font-family: 'Play';">ROBOWARS</a></li>
                            <li><a href="https://www.techfest.org/irc" style="color: #df9111;font-family: 'Play';">IRC</a></li>
                           <?php /*  <li><a href="https://www.techfest.org/icc" style="color: #df9111;font-family: 'Play';">ICC</a></li>*/?>
                        </ul>
                <li style="padding-bottom: 0;">TECHNORION</li>

                <ul style="font-family: 'Play',sans-serif;list-style-type: none;color: #df9111">
                            <li style="padding-bottom: 0;"><a href="https://www.techfest.org/clutch" style="color: #df9111;font-family: 'Play';">VISE CLUTCH</a></li>
                            <li style="padding-bottom: 0;"><a href="https://www.techfest.org/meshmerize" style="color:#df9111;font-family: 'Play';">MESHMERIZE</a></li>
                            <li><a href="https://www.techfest.org/enigma" style="color: #df9111;font-family: 'Play';">ENIGMA</a></li>
                </ul>

                <li style="padding-bottom: 0;">TATA PIONEER's MAKERTHON</li>
                <ul style="font-family: 'Play',sans-serif;list-style-type: none;color: #df9111">
                            <li><a href="https://www.techfest.org/automation" style="color: #df9111;font-family: 'Play';">AUTOMATION CHALLENGE</a></li>
                            <li><a href="https://www.techfest.org/uav" style="color: #df9111;font-family: 'Play';">UAV CHALLENGE</a></li>
                           <!--  <li >ENIGMA</li> -->
                </ul>
                <li><a class="siteMap_compi" href="https://www.techfest.org/fullthrottle" >FULL THROTTLE</a></li>

                <li><a class="siteMap_compi" href="https://www.techfest.org/robovr" >ROBO VR</a></li>
            </ul>
            </div>
    </div>

    <div id="right04"  style="display: none;position: absolute;left: -2vw;">
    <div style="font-size: 2.6vh;
    position: relative;
    top: 1vh;">
    <ul style="list-style-type: none;color: #ededed">
        <li style="padding-bottom: 2vh;"><a class="siteMap_compi" href="https://www.techfest.org/workshops">WORKSHOPS</li>
        <li style="padding-bottom: 2vh;"><a class="siteMap_compi" href="https://www.techfest.org/summit">SUMMIT</li>
        <li style="padding-bottom: 2vh;"><a class="siteMap_compi" href="https://www.techfest.org/mun">TWMUN</li>
        <li style="padding-bottom: 2vh;"><a class="siteMap_compi" href="https://www.techfest.org/exhibitions" >Exhibitions</li>
        <li style="padding-bottom: 2vh;"><a class="siteMap_compi" href="https://www.techfest.org/lectures">LECTURES</li>
        <li style="padding-bottom: 2vh;"><a class="siteMap_compi" href="https://www.techfest.org/technoholix">TECHNOHOLIX</li>
        <li style="padding-bottom: 2vh;"><a class="siteMap_compi" href="https://www.techfest.org/ozone">OZONE</li>
    </ul>
    </div>
    </div>


</div>

<!-- end of siteMap with div below -->




<!-- <script type="text/javascript" src="js/parallex.js"></script> -->
<!-- parallex animation -->

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

<script type="text/javascript">


if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
 // some code..
// alert("mobile ha ye");
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
    document.getElementById("search").classList.toggle("search01");
    }
    function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
    }


}
else{
    // alert("not mobile its Lapi");
// var scene = document.getElementById('js-scene');
// var parallax = new Parallax(scene);
}
</script>

<script type="text/javascript" src="https://www.techfest.org/js/backMotion.js"></script>

<!-- fadein fade out -->

<script type="text/javascript">
    var bb = window.location.href;
    var bb = bb.substring(20, 24);
    // alert(bb);
    document.getElementById(bb).style.color="#fff";
</script>


<script type="text/javascript">
    var bb = window.location.href;
    var bb = bb.substring(24, 28);
    // alert(bb);
    document.getElementById(bb).style.color="#fff";
</script>






<!-- hamburger functions  -->
<script type="text/javascript">
var hide  =  document.getElementById("overall");
var show = document.getElementById("siteMap");
var middleMen = document.getElementById("middleMen");
// var childOne = document.getElementById("childOne");
var childTwo = document.getElementById("childTwo");
var ab = document.getElementsByClassName("list");
var change = document.getElementById("change");
    function love() {
    hide.classList.toggle("allover");
    hide.classList.toggle("alloverAgain");
    show.classList.toggle("indexing01");
    show.classList.toggle("indexing02");

    ab[0].classList.toggle("singleAnimation01")
    ab[1].classList.toggle("singleAnimation02");
    ab[2].classList.toggle("singleAnimation03");
    ab[3].classList.toggle("singleAnimation04");
    ab[4].classList.toggle("singleAnimation05");

    ab[5].classList.toggle("singleAnimation06")
    ab[6].classList.toggle("singleAnimation07");
    ab[7].classList.toggle("singleAnimation08");
    ab[8].classList.toggle("singleAnimation09");
    ab[9].classList.toggle("singleAnimation010");

    ab[10].classList.toggle("singleAnimation011")
    ab[11].classList.toggle("singleAnimation012");
    ab[12].classList.toggle("singleAnimation013");
    ab[13].classList.toggle("singleAnimation014");
    ab[14].classList.toggle("singleAnimation015");

     ab[15].classList.toggle("singleAnimation016");
    ab[16].classList.toggle("singleAnimation017");
    ab[17].classList.toggle("singleAnimation018");
    ab[18].classList.toggle("singleAnimation019");
    ab[19].classList.toggle("singleAnimation020");
    ab[20].classList.toggle("singleAnimation021");
    ab[21].classList.toggle("singleAnimation022");
    ab[22].classList.toggle("singleAnimation023");


    middleMen.classList.toggle("middleMen");
    change.classList.toggle("change02");

    childTwo.classList.toggle("childTwo");

    }
</script>
<script type="text/javascript">
function krish(argument) {
    // body...
    if (argument==1) {window.location.href = "https://techfest.org/";}
    if (argument==2) {window.location.href = "https://techfest.org/ideate";}
    if (argument==3) {window.location.href = "https://techfest.org/competitions";}
    // if (argument==4) {window.location.href = "https://techfest.org/";}
    if (argument==5) {window.location.href = "https://techfest.org/contactus";}

    if (argument==6) {window.location.href = "https://techfest.org/digitalisation";}
    if (argument==7) {window.location.href = "https://techfest.org/biotechnology";}
    if (argument==8) {window.location.href = "https://techfest.org/sustainability";}


    if (argument==9) {window.location.href = "https://techfest.org/";}
    if (argument==10) {window.location.href = "https://techfest.org/contactus";}

}

    var right01 = document.getElementById("right01");
    var right02 = document.getElementById("right02");
    var right03 = document.getElementById("right03");
    var right04 = document.getElementById("right04");
    // var right05 = document.getElementById("right05");
function right(argument) {
    // body...
    if (argument==1) {
        right01.style.display="block";
        right02.style.display="none";
        right03.style.display="none";
        right04.style.display="none";
        // right05.style.display="none";
    }
    if (argument==2) {
        right01.style.display="none";
        right02.style.display="block";
        right03.style.display="none";
        right04.style.display="none";
        // right05.style.display="none";
    }
    if (argument==3) {
        right01.style.display="none";
        right02.style.display="none";
        right03.style.display="block";
        right04.style.display="none";
        // right05.style.display="none";
    }
    if (argument==4) {
        right01.style.display="none";
        right02.style.display="none";
        right03.style.display="none";
        right04.style.display="block";
        // right05.style.display="none";
    }
    if (argument==5) {
        right01.style.display="block";
        right02.style.display="none";
        right03.style.display="none";
        right04.style.display="none";
        // right05.style.display="block";
    }
}
</script>
@yield('java')



</body>
</html>
