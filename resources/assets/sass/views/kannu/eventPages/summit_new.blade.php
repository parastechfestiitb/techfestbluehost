<!DOCTYPE html>
<html class="js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths wf-opensans-i3-active wf-opensans-i8-active wf-opensans-n4-active wf-opensans-n3-active wf-opensans-n6-active wf-opensans-n7-active wf-opensans-n8-active wf-montserrat-n4-active wf-montserrat-n7-active wf-active " lang="en" style="">
<head>
    
    <meta property="og:title" content="TECHFEST AI SUMMIT 2017-18, IIT Bombay | Asia's largest Science and Technology festival" />
<meta property="og:type" content="website" />
<meta property="og:url" content="https://techfest.org/summit17" />
<meta property="og:image" content="http://techfest.org/img/summit_img/mockUp.jpg" />


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">

/* The Loader */
#loader-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 1050;
  overflow: hidden;
}
.no-js #loader-wrapper {
  display: none;
}

#loader {
  display: block;
  position: relative;
  left: 50%;
  top: 50%;
  width: 150px;
  height: 150px;
  margin: -75px 0 0 -75px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #16a085;
  -webkit-animation: spin 1.7s linear infinite;
          animation: spin 1.7s linear infinite;
  z-index: 1070;
}
#loader:before {
  content: "";
  position: absolute;
  top: 5px;
  left: 5px;
  right: 5px;
  bottom: 5px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #e74c3c;
  -webkit-animation: spin-reverse .6s linear infinite;
          animation: spin-reverse .6s linear infinite;
}
#loader:after {
  content: "";
  position: absolute;
  top: 15px;
  left: 15px;
  right: 15px;
  bottom: 15px;
  border-radius: 50%;
  border: 3px solid transparent;
  border-top-color: #f9c922;
  -webkit-animation: spin 1s linear infinite;
          animation: spin 1s linear infinite;
}

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
  }
}
@keyframes spin {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}
@-webkit-keyframes spin-reverse {
  0% {
    -webkit-transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-360deg);
  }
}
@keyframes spin-reverse {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-360deg);
    transform: rotate(-360deg);
  }
}
#loader-wrapper .loader-section {
  position: fixed;
  top: 0;
  width: 51%;
  height: 100%;
  background: #222;
  z-index: 1050;
}

#loader-wrapper .loader-section.section-left {
  left: 0;
}

#loader-wrapper .loader-section.section-right {
  right: 0;
}

/* Loaded styles */
.loaded #loader-wrapper .loader-section.section-left {
  -webkit-transform: translateX(-100%);
          transform: translateX(-100%);
  -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.loaded #loader-wrapper .loader-section.section-right {
  -webkit-transform: translateX(100%);
          transform: translateX(100%);
  -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
  transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
}

.loaded #loader {
  opacity: 0;
  -webkit-transition: all 0.3s ease-out;
  transition: all 0.3s ease-out;
}

.loaded #loader-wrapper {
  visibility: hidden;
  -webkit-transform: translateY(-100%);
          transform: translateY(-100%);
  -webkit-transition: all 0.3s 1s ease-out;
  transition: all 0.3s 1s ease-out;
}

.form {
  background: rgba(19, 35, 47, 1);
  padding: 40px;
  max-width: 600px;
  margin: 40px auto;
  border-radius: 4px;
  box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
}

.tab-group {
  list-style: none;
  padding: 0;
  margin: 0 0 40px 0;
}
.tab-group:after {
  content: "";
  display: table;
  clear: both;
}
.tab-group{
  display: block;
  text-decoration: none;
  padding: 15px;
  background: rgba(160, 179, 176, 0.25);
  color: #a0b3b0;
  font-size: 20px;
  /*float: left;*/
  width: 50%;
  text-align: center;
  /*cursor: pointer;*/
  -webkit-transition: .5s ease;
  transition: .5s ease;
}



h1 {
  text-align: center;
  color: #ffffff;
  font-weight: 300;
  margin: 0 0 40px;
}

label {
  position: absolute;
  -webkit-transform: translateY(6px);
          transform: translateY(6px);
  left: 13px;
  color: rgba(255, 255, 255, 0.5);
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
  -webkit-backface-visibility: hidden;
  pointer-events: none;
  font-size: 22px;
}
label .req {
  margin: 2px;
  color: #1ab188;
}

label.active {
  -webkit-transform: translateY(50px);
          transform: translateY(50px);
  left: 2px;
  font-size: 14px;
}
label.active .req {
  opacity: 0;
}

label.highlight {
  color: #ffffff;
}

input, textarea,option,select {
  font-size: 20px !important;
  display: block !important;
  width: 100% !important;
  height: 100% !important;
  padding: 5px 10px !important;
  background: none !important ;
  background-image: none !important;
  border: 1px solid #a0b3b0 !important ;
  color: #ffffff !important ;
  border-radius: 0 !important;
  -webkit-transition: border-color .25s ease, box-shadow .25s ease !important;
  transition: border-color .25s ease, box-shadow .25s ease !important;
}
input:focus, textarea:focus option:focus select:focus {
  outline: 0 !important;
  border-color: #1ab188 !important;
}

textarea {
  border: 2px solid #a0b3b0;
  resize: vertical;
}

.field-wrap {
  position: relative;
  margin-bottom: 40px;
}

.top-row:after {
  content: "";
  display: table;
  clear: both;
}
.top-row > div {
  float: left;
  width: 48%;
  margin-right: 4%;
}
.top-row > div:last-child {
  margin: 0;
}

.button {
  border: 0;
  outline: none;
  border-radius: 0;
  padding: 15px 0;
  font-size: 2rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: .1em;
  background: #1ab188;
  color: #ffffff;
  -webkit-transition: all 0.5s ease;
  transition: all 0.5s ease;
  -webkit-appearance: none;
}

.button-block {
  display: inline-block;
  width: 45%;
}

.forgot {
  margin-top: -20px;
  text-align: right;
}
.social{
  display: inline;
  padding-right: 5px;
}
.socialicon{
  color: #777777 !important;
}
.socialicon :hover{
  color: white !important;
}
.active-sched{
  box-shadow: 0 22px 43px rgba(0, 0, 0, 0.15);
  opacity: 1;
  z-index: 100;

}
.inactive-sched{
  opacity: 0.5;
  filter:blur(5px);
}
.popover-content {
    padding: 2px 14px !important;
}


  .card {
    background-color: #fff;
    bottom: 0;
    box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
  -webkit-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
  -moz-box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.3);
    height: 300px;
    left: 0;
    margin: auto;
    overflow: hidden;
    position: relative;
    right: 0;
    top: 0;
    width: 100%;
     height: 450px;
    width: 100%;
}
.card:hover {
    height: 450px;
    width: 100%;
}
.card:hover .cta-container {
    display: inline;
    margin-top: 380px;
}
.card:hover .card_circle {
    background-size: cover;
    border-radius: 0;
    margin-top: -130px;
}
.card:hover .ak {
    background: #3487f7;
    color: #fff;
    margin-top: 100px;
    padding: 5px;
    display: none;
}
.card:hover .ak small { color: #fff ;}
.card:hover .para { margin-top: 300px ;display: block;}
.card_circle {
    /*background: url('http://lorempixel.com/400/200') no-repeat center bottom;*/
    background-color: #3487f7;
    background-size: cover;
    /*border-radius: 50%;*/
    height: 400px;
    margin-left: -75px;
    margin-top: -270px;
    position: absolute;
    width: 450px;
     background-size: cover;
    border-radius: 0;
    margin-top: -130px;
}
.ak {
    color: #3487f7;
    font-family: 'Raleway', sans-serif;
    font-size: 24px;
    font-weight: 200;
    margin-top: 220px;
    position: absolute;
    text-align: center;
    width: 100%;
    display: block;
    z-index: 1;

    background: #3487f7;
    color: #fff;
    margin-top: 100px;
    padding: 5px;
    display: none;

}
.para {
    color: rgba(0,0,0,.6);
    font-family: 'Raleway', sans-serif;
    font-size: 100%;
    font-weight: normal;
    margin-top: 200px;
    position: absolute;
    text-align: center;
    z-index: 1;
    width: 100%;
    display: none;
    margin-top: 300px ;display: block;
}
.cta-container {
    display: none;
    margin-top: 320px;
    position: absolute;
    text-align: center;
    width: 100%;
    z-index: 1;
    display: inline;
    margin-top: 380px;
}
.cta {
    -moz-border-radius: 2px;
    -moz-transition: 0.2s ease-out;
    -ms-transition: 0.2s ease-out;
    -o-transition: 0.2s ease-out;
    -webkit-border-radius: 2px;
    -webkit-transition: 0.2s ease-out;
    background-clip: padding-box;
    border: 2px solid #3487f7;
    border-radius: 2px;
    color: #3487f7;
    display: inline-block;
    font-family: 'Raleway', sans-serif;
    font-size: 17px;
    font-weight: 400;
    height: 36px;
    letter-spacing: 0.5px;
    line-height: 36px;
    margin-bottom: 15px;
    padding: 0 2rem;
    text-decoration: none;
    text-transform: uppercase;
    transition: 0.2s ease-out;

}
.cta:hover {
    background-color: #3487f7;
    box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    color: #fff;
    -moz-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    -webkit-box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}



 

</style>


    <link type="text/css" rel="stylesheet" href="css/summit_css/name.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TECHFEST AI SUMMIT 2017-18, IIT Bombay | Asia's largest Science and Technology festival</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="https://techfest.org/img/2018/icon.ico" />
    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/summit_css/helpers-all.css">
    <link rel="stylesheet" type="text/css" href="css/summit_css/elements-all.css">
    <link rel="stylesheet" type="text/css" href="css/summit_css/fontawesome.css">
        <link id="framework-color" rel="stylesheet" type="text/css" href="css/summit_css/framework-color.css">

    <link rel="stylesheet" href="css/summit_css/bootstrap.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/summit_css/style.css">
    <link rel="stylesheet" href="css/summit_css/linea-font.css">
    <link rel="stylesheet" href="css/summit_css/font-awesome.min.css">
    <!-- Slider -->
    <link rel="stylesheet" href="css/summit_css/slick.css">
    <!-- Lightbox -->
    <link rel="stylesheet" type="text/css" href="css/summit_css/font-awesome.min.css">
    <link rel="stylesheet" href="css/summit_css/magnific-popup.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="css/summit_css/animate.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Definity CSS -->
    <link rel="stylesheet" href="css/summit_css/main.css">
    <link rel="stylesheet" href="css/summit_css/responsive.css">

    <!-- JS -->
    <script src="js/summit_js/webfont.js" type="text/javascript" async="" style=""></script>
    <script type="text/javascript" src="js/summit_js/analytics.js"></script>
    <script async="" src="js/summit_js/gtm.js"></script>
    <script src="js/summit_js/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="css/summit_css/font.css" media="all">
    <script type="text/javascript"  src="js/summit_js/common.js"></script>
    <!-- <script type="text/javascript"  src="js/summit_js/map.js"></script> -->
    <script type="text/javascript"  src="js/summit_js/util.js"></script>
    <script type="text/javascript"  src="js/summit_js/marker.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/summit_js/onion.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/summit_js/stats.js"></script>
    <script type="text/javascript" charset="UTF-8" src="js/summit_js/controls.js"></script>
    <style type="text/css">
      .popover{
        z-index: 1 !important;
      }
    </style>
</head>
    <body id="page-top" data-spy="scroll" >
        
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81222017-1', 'auto');
  ga('send', 'pageview');
</script>

        <!-- ========== Navigation ========== -->
<script type="text/javascript">
  $(document).ready(function() {
 
  // Fakes the loading setting a timeout
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 4500);
 
});
</script>
<div id="loader-wrapper">
  <div id="loader"></div>
  
  <div class="loader-section section-left"></div>
  <div class="loader-section section-right"></div>
  
</div>
        <nav class="navbar navbar-default navbar-fixed-top mega navbar-inverse mobile-nav" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" onclick="openNav()" aria-expanded="false" aria-controls="navbar" style="margin-top: 23px;">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="overlay-content">
    <a href="#home" onclick="closeNav()">Home</a>
    <a href="#about" onclick="closeNav()">About</a>
    <a href="#attend" onclick="closeNav()">Why Attend?</a>
    <a href="#speaker" onclick="closeNav()">Speakers</a>
    <a href="#blog" onclick="closeNav()">Register</a>
    <a href="#schedule" onclick="closeNav()">Schedule</a>
    <a href="#sponsor" onclick="closeNav()">Sponsors</a> 
    <a href="#contact" onclick="closeNav()">Contact us</a>
  </div>
</div>
<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
              <!-- Logo -->
              <a class="navbar-brand" href="http://www.techfest.org/"><img style="width: 200px;position: fixed;top: -12px;left: 0;" src="../../img/2018/logo.svg" alt="Techfest"></a>
            </div><!-- / .navbar-header -->

            <!-- Navbar Links -->
            <div id="navbar" class="navbar-collapse collapse" style="max-height: 560px;">
              <ul class="nav navbar-nav" style="display: block;float: right;position: fixed;top: 0;right: 0;">

                <!-- Home -->
                <li class="dropdown mega-fw">
                  <a href="#home" class="dropdown-toggle hvr-glow"  >Home</span></a>
                </li><!-- / Home -->
                <li class="dropdown mega-fw">
                  <a href="#about" class="dropdown-toggle hvr-glow"  >About</a>
                </li><!-- / Elements -->
                <li class="dropdown mega-fw">
                  <a href="#attend" class="dropdown-toggle hvr-glow"  >Why Attend?</a>
                </li><!-- / Pages -->
                <li class="dropdown mega-fw">
                  <a href="#speaker" class="dropdown-toggle hvr-glow"  >Speakers</a>
                  <li class="dropdown mega-fw">
                  <a href="#blog" class="dropdown-toggle hvr-glow"  >Register</a>
                </li>
                </li><!-- / Portfolio -->
                <li class="dropdown mega-fw">
                  <a href="#schedule" class="dropdown-toggle hvr-glow"  >Schedule</a>
                </li>
                
                <!-- / Pages -->
                <li class="dropdown mega-fw">
                  <a href="#sponsor" class="dropdown-toggle hvr-glow"  >Sponsors</a>
                </li><!-- / Pages -->
                <li class="dropdown mega-fw">
                  <a href="#contact" class="dropdown-toggle hvr-glow"  >Contact</a>
                </li><!-- / Blog -->
              </ul><!-- / .nav .navbar-nav -->
            </div><!--/.navbar-collapse -->
          </div><!-- / .container -->
        </nav><!-- / .navbar -->


        <!-- ========== Hero Cover ========== -->

        <div id="home" class="agency2-hero" style="background: url(https://www.techfest.org/img/summit_img/summitCover.jpg);background-size: cover;
  background-position: 50%;
  background-attachment: fixed;">
          <div class="bg-overlay">
            <div id="large-header" class="large-header" style="height: 570px;">
              <canvas id="demo-canvas" class="demo-canvas" width="100vw" height="100vh"></canvas>
              <!-- Hero Content -->
              <div class="hero-content-wrapper">
                <div class="hero-content">
                <style type="text/css">
                  
                  .hero-secondary{
                    font-size: 12px;
                  }
                  .hero-lead{
                     font-size: 25px!important;
                  }
                  .ab2{
                    font-size: 15px; font-weight: bold;color: white;margin-top: 30px;
                  }
                  .abhead{
                    font-size: 25px;
                  }
                    .hrab{
                    text-align: center;
                    width: 75%;
                    border: 2px solid #2da2c8;
                    }
                    .abhelo{
                      font-size: 15px;font-weight: 400;letter-spacing: 0.4px;text-align: justify;
                    }
                    .overlay a{
                      padding: 12px;
                      font-size: 24px;
                    }
                    h3, .page-title .subheading{
                        font-size: 0.7em;
                      }
                      .dark-bg h2{
                        color: black;
                        font-size: 0.7em;
                      }
                      .ft-item{
                        height: auto !important;
                      }

                  @media (min-width: 62em){

                      .ft-item{
                        height: 400px !important;
                      }
                      .hero-secondary{
                        font-size: 30px;
                        letter-spacing: 2px!important;
                      }
                      .hero-lead{
                         font-size: 3em!important;
                      } 
                      .ab2{
                        font-size: 30px; font-weight: bold;color: white;margin-top: 30px;
                      } 
                      .abhead{
                        font-size: 40px;
                      }
                      .hrab{ text-align: center;width: 25%;border: 2px solid #2da2c8;  }
                      .abhelo{
                        font-size: 20px;
                      }
                      h3, .page-title .subheading{
                        font-size: 1.2em;
                      }

                      .dark-bg h2{
                        color: black;
                        font-size: 1.2em;
                      }
                  
                  }





         </style>
                  <!-- <img src="img/summit_img/ag2-logo.png" alt="Creative Agency Template"> ASHI-->
                  <h1 class="hero-lead" style="font-weight: bold;">TECHFEST AI SUMMIT</h1>
<h3 class="h-alt hero-secondary" style="font-weight: bold;">29<sup>th</sup> - 30<sup>th</sup> December 2017, IIT BOMBAY</h3>
<h1 class="ab2"> ARTIFICIAL INTELLIGENCE </h1>
                  <a href="#about" class="scroller">
                            <!-- <span class="scroller-text">scroll down</span> -->
                            <span class="fa fa-chevron-down hvr-icon-hang" style="font-size: 40px;"></span>
                        </a>
                </div><!-- / .hero-content -->

              </div><!-- / .hero-content-wrapper -->
            </div><!-- / #large-header -->
          </div><!-- / .bg-overlay -->
        </div><!-- / #home -->
        <!-- ========== About - Section ========== -->

       <section id="about" class="container">
          <div class="row section">

            <header class="sec-heading" style="    margin-bottom: 50px">
              <h2 class="abhead">About AI</h2>
              <hr class="hrab">
            </header>

            <div class="col-md-12  wow fadeInUp" style=" visibility: visible; animation-name: fadeInUp;">
              <p class="abhelo">The world is changing at a rapid pace and so are the machines that we are making and with time the machines are just becoming smarter evolving to the development of Artificial Intelligence.
              It is the simulation of human intelligence processes by machines, especially computer systems.<br> 
            </div>


            <div class="col-md-5  wow fadeInUp" style=" visibility: visible; animation-name: fadeInUp;">
              <img  class="img-responsive" src="img/summit_img\ai4.png"></img>
            </div>
            <div class="col-md-7  wow fadeInUp">
              <p class="abhelo">
           Particular applications of AI include expert systems, speech recognition and machine vision. AI has revolutionized the world of business, gaming, education, healthcare, weather forecasting and manufacturing. It has a series of advantages with the most basic ones being Difficult Exploration, human error reduction and repetitive jobs as well as immediate response hence depicting the real-time experience.<br><br>
        Now every coin has two sides and AI is not an exception. Demerits include that they are expensive, cannot be used without human presence, can only handle specific tasks which they are designed for.
          </p>
            </div>
            
      
          </div><!-- / .row -->
          
        </section><!-- / .container -->

                <div class="gray-bg" id="attend">
                  <section id="services" class="container ft-cards">
                    <div class="row section">

                      <header class="sec-heading">

                              <h2 class="abhead">WHY ATTEND ?</h2>
                              <hr class="hrab">
                        <!--Edited by panda-->

                         <div class="col-md-12  wow fadeInUp" style=" visibility: visible; animation-name: fadeInUp;">
              <p class="abhelo" style="padding-top: 20px;padding-bottom: 20px;">With major technology companies and startups seriously embracing AI strategies, the AI Summit will bring together corporate, entrepreneurs and Entrepreneurs alike, at a common platform, to explore how the Artificial Intelligence means business and more.

            </div>


                        <!-- <span class="subheading  wow fadeInUp" style="text-align: justify;font-family: "Open Sans","Helvetica Neue",Helvetica,sans-serif;"></span> -->
                      </header>

                      <!-- Item 1 -->
                      <div class="col-lg-6 col-md-6 mb-sm-50" >
                        <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="animation-duration: 1s; animation-delay: 0.3s; visibility: visible;height: 400px;">
                          <h4 style="font-size:18px;">
        For Professionals

        </h4>
                          <p><ul style="text-align: justify;"><li>Explore the business opportunities and challenges presented by Artificial Intelligence (AI)
        </li><li>Get insights around the social, ethical and public policy implications
        </li><li>Understand the impact of AI on job creation, job destruction and wages
        </li><li>Learn how to strategically prepare for AI and gain a competitive advantage
        </li>
        <li>Participants will get Techfest, IIT Bombay Certificates after completion of the workshop.
</li></ul></p>
                        </div>
                      </div>

                      <!-- Item 2 -->
                      <div class="col-lg-6 col-md-6 mb-sm-50" style="height: 400px;">
                        <div class="ft-item wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" style="animation-duration: 1s; animation-delay: 0.6s; visibility: visible;height: 400px;">
                          <h4 style="font-size:18px;">For Students</h4>
                          <!--Edited by panda-->
                          <p>
                            <ul><li>Speakers will introduce AI, an area which has gained significant attention from researchers and entrepreneurs around the world.
</li><li>Opportunity of networking session with professionals, the best minds.
</li><li>Foundation for your career by intellectual discussions and individual assessments which will be a great increment in your treasure of knowledge.
</li><li>Participants will get Techfest, IIT Bombay Certificates after completion of the workshop.
</li></ul>
        </p>
                        </div>
                      </div>

                      <!-- Item 3 -->


                    </div><!-- / .row -->
                  </section>
                </div><!-- / .gray-bg -->


        <section class="container-fluid portfolio-layout portfolio-columns-fw" id="speaker" style="margin-top: 40px !important;margin-bottom: 90px !important;">
         <!--  <div class="row">
              <center><h2 style="font-size: 40px;">Speakers</h2></center>
          </div> -->

          <header class="sec-heading" style="    margin-bottom: 50px">
              <h2 class="abhead">Speakers </h2>
              <hr class="hrab">
            </header>

          <div class="row">

           <div class="col-sm-3" style="padding: 20px;">
                <div class="card transition">
                  <h2 class="transition ak">Keshav R. Murugesh</h2>
                  <p class="para">CEO of WNS Global Services,</p>
                  <div class="cta-container transition"><a class="cta">Keshav R. Murugesh</a></div>
                  <div class="card_circle transition" style="background: url('img/summit_img/speakers/wns.jpg') no-repeat 50% 200%;background-size: 50%;"></div>
                </div>

            </div>


            <div class="col-sm-3" style="padding: 20px;">
                <div class="card transition">
                  <h2 class="transition ak">Sundara R Nagalingam</h2>
                  <p class="para">Head – Deep Learning practice <br> NVIDIA Graphics Pvt. Ltd.</p>
                  <div class="cta-container transition"><a class="cta">Sundara R Nagalingam</a></div>
                  <div class="card_circle transition" style="background: url('img/summit_img/speakers/sundar_nvidia.jpg') no-repeat center bottom;background-size: 50%;"></div>
                </div>
            </div>

            <div class="col-sm-3" style="padding: 20px;">
                <div class="card transition">
                  <h2 class="transition ak">Rajeev Rastogi</h2>
                  <p class="para">Director, Machine Learning<br> Amazon </p>
                  <div class="cta-container transition"><a class="cta">Rajeev Rastogi</a></div>
                  <div class="card_circle transition" style="background: url('img/summit_img/speakers/rajeev_amazon.jpg') no-repeat center bottom;"></div>
                </div>

            </div>

            <div class="col-sm-3" style="padding: 20px;">
                <div class="card transition">
                  <h2 class="transition ak">Dr. Aloknath De</h2>
                  <p class="para">Vice President, Samsung Electronics</p>
                  <div class="cta-container transition"><a class="cta" style="text-align: center;">Dr. Aloknath De</a></div>
                  <div class="card_circle transition" style="background: url('img/summit_img/speakers/alok_nath.png') no-repeat center bottom;background-size: 67%;"></div>
                </div>

            </div>

            <div class="col-sm-3" style="padding: 20px;">
                <div class="card transition">
                  <h2 class="transition ak">Prof. Surya S. Durbha</h2>
                  <p class="para">Professor | CSRE, IIT Bombay</p>
                  <div class="cta-container transition"><a class="cta">Prof. Surya S. Durbha</a></div>
                  <div class="card_circle transition" style="background: url('img/summit_img/speakers/sdurbha_prof.jpg') no-repeat center bottom;background-size: 60%;"></div>
                </div>

            </div>
            <div class="col-sm-3" style="padding: 20px;">
                <div class="card transition">
                  <h2 class="transition ak">Venkat Iyer</h2>
                  <p class="para">Global Sales Officer | Capgemini’s Insights & Data Global Practice</p>
                  <div class="cta-container transition"><a class="cta">Venkat Iyer</a></div>
                  <div class="card_circle transition" style="background: url('img/summit_img/speakers/vyler.jpg') no-repeat center bottom;background-size: 60%;"></div>
                </div>

            </div>
            <div class="col-sm-3" style="padding: 20px;">
                <div class="card transition">
                  <h2 class="transition ak"> Bala Natarajan</h2>
                  <p class="para">Leads Data Science & analytics practice for Capgemini in India</p>
                  <div class="cta-container transition"><a class="cta"> Bala Natarajan</a></div>
                  <div class="card_circle transition" style="background: url('img/summit_img/speakers/bala.jpg') no-repeat center bottom;background-size: 60%;"></div>
                </div>

            </div>


          </div>



          <div class="row">
            <div class="col-sm-2" style="padding: 20px;">
               <!--  <div class="card transition">
                  <h2 class="transition">Awesome Headline</h2>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <div class="cta-container transition"><a href="#" class="cta">Call to action</a></div>
                  <div class="card_circle transition"></div>
                </div> -->
            </div>

           <!--  <div class="col-sm-3" style="padding: 20px;">
                <div class="card transition">
                  <h2 class="transition ak">Keshav R. Murugesh</h2>
                  <p class="para">CEO of WNS Global Services,</p>
                  <div class="cta-container transition"><a class="cta">Keshav R. Murugesh</a></div>
                  <div class="card_circle transition" style="background: url('img/summit_img/speakers/wns.jpg') no-repeat center bottom;"></div>
                </div>

            </div> -->

            <div class="col-sm-2"></div>

            <div class="col-sm-3" style="padding: 20px;">
               <!--  <div class="card transition">
                  <h2 class="transition ak">Awesome Headline</h2>
                  <p class="para">Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <div class="cta-container transition"><a href="#" class="cta">Call to action</a></div>
                  <div class="card_circle transition" style="background: url('http://lorempixel.com/400/200') no-repeat center bottom;"></div>
                </div>
 -->
            </div>

            <div class="col-sm-2" style="padding: 20px;">
<!--                 <div class="card transition">
                  <h2 class="transition">Awesome Headline</h2>
                  <p>Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla.</p>
                  <div class="cta-container transition"><a href="#" class="cta">Call to action</a></div>
                  <div class="card_circle transition"></div>
                </div>
 -->
            </div>

            
          </div>




         




        </section>


        <div class="gray-bg">
          <section id="blog" class="section container blog-columns blog-preview">
            <div class="row">

              <header class="sec-heading">
                <h2 class="abhead">REGISTRATIONS</h2>
                <hr class="hrab">
                <!-- <span class="subheading">Check out our blog to see what were up to</span> -->
              </header>


              <!-- Blog Post 1 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" style=" animation-duration: 2s; animation-name: none;">
                  <h2 style="text-align: center;margin-top: 50px;">STUDENTS</h2>
                  <hr style="width: 70%">

                  <div class="bp-content">
                        <div class="price">

                            <del><h1 style="padding-top:5px;text-align: center;">Rs  4000</h1></del>
                               <p style="text-align: center;margin-bottom: -10px;">Early Bird(*25% off)</p>
                            <h1 style="text-align: center;">Rs  3000</h1>
                            <p style="text-align: center;">Per Person </p>
                        </div>
                        <ul style="list-style-type:none;padding:0px; text-align: center;">
                            <li style="textAlign:center;padding-top:5px;">MUST CARRY A VALID ID CARD </li>
                            <li style="textAlign:center;padding-top:5px;">PANEL DISCUSSION </li>
                            <li style="textAlign:center;padding-top:5px;">NETWORKING SESSION </li>
                            <li style="textAlign:center;padding-top:5px;">LUNCH ON FIRST TWO DAYS </li>
                        </ul>

                    <!-- Post Title -->

                    <!-- Link -->
                    <div class="text-center">
                      <p style="margin: auto;display: block;margin-top: 40px;"> <a href="/summit17/register" class="btn btn-small hvr-push" data-toggle="modal"  style="text-align: center;background:#2da2c8;">Register</a></p>
                    </div>


                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->


              <!-- Blog Post 2 -->
              <div class="col-lg-4 col-md-6 mb-sm-50">
                <div class="blog-post wow fadeIn" data-wow-duration="2s" data-wow-delay=".3s" style=" animation-duration: 2s; animation-delay: 0.3s; animation-name: none;">

                   <h2 style="text-align: center;margin-top: 50px;">PROFESSIONAL</h2>
                  <hr style="width: 70%">

                  <div class="bp-content">
                     <div class="price">
                           <del><h1 style="padding-top:5px;text-align: center;">Rs  5000</h1></del>
                               <p style="text-align: center;margin-bottom: -10px;">Early Bird(*20% off)</p>
                            <h1 style="text-align: center;">Rs  4000</h1>
                            <p style="text-align: center;">Per Person </p>
                        </div>
                        <ul style="list-style-type:none;padding:0px; text-align: center;">
                            <li style="textAlign:center;padding-top:5px;    ">MUST CARRY A VALID ID CARD </li>
                            <li style="textAlign:center;padding-top:5px;    ">PANEL DISCUSSION </li>
                            <li style="textAlign:center;padding-top:5px;    ">NETWORKING SESSION </li>
                            <li style="textAlign:center;padding-top:5px;    ">LUNCH ON FIRST TWO DAYS </li>
                        </ul>

                    <!-- Post Title -->

                    <!-- Link -->
                  <div class="text-center">
                      <p style="margin: auto;display: block;margin-top: 40px;"> <a href="/summit17/register" class="btn btn-small hvr-push"  style="text-align: center;background:#2da2c8;">Register</a></p>
                    </div></div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->


              <!-- Blog Post 3 -->
              <div class="col-lg-4 col-md-6">
                <div class="blog-post wow fadeIn third" data-wow-duration="2s" data-wow-delay=".6s" style=" animation-duration: 2s; animation-delay: 0.6s; animation-name: none;height: auto;">

                   <h2 style="text-align: center;margin-top: 50px;height: auto;">Academia (IIT) </h2>
                  <hr style="width: 70%">

                  <div class="bp-content">
                     <div class="price">
                     <del><h1 style="padding-top:5px;text-align: center;">Rs  3600</h1></del>
                               <p style="text-align: center;margin-bottom: -10px;">Early Bird(*25% off)</p>
                            <h1 style="text-align: center;">Rs  2700</h1>
                            <p style="text-align: center;">Per Person </p>
                            <!-- 
                            <h1 style="padding-top:5px;text-align: center;">Rs  2500</h1>
                            <p style="text-align: center;">Per Person</p> -->
                        </div>
                        <ul style="list-style-type:none;padding:0px; text-align: center;">
                            <li style="textAlign:center;padding-top:5px;">MUST CARRY A VALID ID CARD </li>
                            <li style="textAlign:center;padding-top:5px;">PANEL DISCUSSION </li>
                            <li style="textAlign:center;padding-top:5px;">NETWORKING SESSION </li>
                            <li style="textAlign:center;padding-top:5px;">LUNCH ON FIRST TWO DAYS </li>
                            <!-- <li style="textAlign:center;padding-top:5px;    ">CHANCE TO MEET INVESTORS</li> -->
                        </ul>

                    <!-- Post Title -->

                    <!-- Link -->
                    <div class="text-center">
                      <p style="margin: auto;display: block;margin-top: 40px;"> <a href="/summit17/register" class="btn btn-small hvr-push"  style="text-align: center;background:#2da2c8;">Register</a></p>
                    </div></div>

                  </div><!-- / .bp-content -->

                </div><!-- / .blog-post -->
              </div><!-- / .col-lg-4 -->
  <div class="modal fade" id="myModal" role="dialog">
          <div class="form">
          <center><h1 class="tab-group">Registration form</h1></center>
      
      
      <div class="tab-content" style="margin-top: 40px;">
        <div id="signup">   
          
          <form action="/summit17/register" method="post">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="fname" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lname" />
            </div>
          </div>
          <div class="field-wrap">
           <label style="width: 48%;">
                You are <span class="req">*</span>
              </label>
             <select name="section" style="
    display: block;width: 50% !important;margin-left: auto;">
    <option value="student" style="background: #172630 !important;"> Student</option>
    <option value="professional" style="background: #172630 !important;">Professional</option>
    <!-- <option value="fiat" >Fiat</option> -->
    <option value="iitb" style="background: #172630 !important;">Academia (IITB) </option>
  </select>
            </div>
          <div class="field-wrap">
            <label>
              Phone No.<span class="req">*</span>
            </label> 
         <input type = "text" value = "" name = "phone"
         size = "30" maxlength = "10"
         pattern = "[0-9]{10}" autocomplete="off">
          </div>
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email"/>
          </div>
          <div class="field-wrap">
              <label>
                Company/College<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="college"/>
            </div>
          <div class="field-wrap">
            <label>
              City<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="city"/>
          </div>
          <div class="field-wrap">
              <label>
                Pin Code<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="pin"/>
            </div>
          <button type="submit" class="button button-block hvr-glow"/>Register</button>
          <button  class="button button-block hvr-glow" style="margin-left: 25px;" data-dismiss="modal" />Cancel</button>
          </form>

        </div>
      </div><!-- tab-content -->
      </div>
      </div>
      <p style="textAlign:left;">**Refund deadline is 1st November 2017.</p>
      </div>
      <script type="text/javascript">
        $('.form').find('input, textarea').on('keyup blur focus', function (e) {
  
  var $this = $(this),
      label = $this.prev('label');

    if (e.type === 'keyup') {
      if ($this.val() === '') {
          label.removeClass('active highlight');
        } else {
          label.addClass('active highlight');
        }
    } else if (e.type === 'blur') {
      if( $this.val() === '' ) {
        label.removeClass('active highlight'); 
      } else {
        label.removeClass('highlight');   
      }   
    } else if (e.type === 'focus') {
      
      if( $this.val() === '' ) {
        label.removeClass('highlight'); 
      } 
      else if( $this.val() !== '' ) {
        label.addClass('highlight');
      }
    }

});

$('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
      </script>
      </section> 
      </div>


        <!-- / .dark-bg -->
 <section id="schedule">
        <header class="sec-heading" style="margin-top: 30px;">
                      <h2 class="abhead">Schedule</h2>
                       <hr class="hrab">

                      <!-- <span class="subheading">Lorem ipsum dolor sit amet, consectetur</span> -->
                    </header>

                      <style type="text/css">
                        #sched2{
                          margin: 8%;
                          margin-top: 1%;
                        }
                        #sched1{
                          margin: 8%;
                          margin-top: 1%;
                        }
                      </style>

          <div class="container">

         <!--  <div class="row">
            <div class="col-xs-6" style=""><p style="text-align: center;font-size: 150%;"><b style="border:2px solid #9cd159;padding: 5px;padding-left: 15px;padding-right: 15px;">Day One</b></p></div>
            <div class="col-xs-6" style=""><p style="text-align: center;font-size: 150%;"><b style="border:2px solid #9cd159;padding: 5px;padding-left: 15px;padding-right: 15px;">Day Two</b></p></div>
          </div> -->

           <!-- <div class="row">
            <div class="col-sm-3 col-xs-1"></div>
            <div class="col-sm-6 col-xs-12">
             <b> <h3 style="text-align: center;">Workshop On AI, Releasing soon.</h3></b>
            </div>
            <div class="col-sm-3 col-xs-1"></div>
          </div> -->

            <div class="row">
                      <!-- Day 1 -->
                     <div class="col-md-4 active-sched" id="sched1">

                        <div class="content-box mrg25T mrg25B">
                        <p style="text-align: center;font-size: 150%;padding-top: 10px;"><b style="border:2px solid #9cd159;padding: 5px;padding-left: 15px;padding-right: 15px;">Day One</b></p>
                                <div class="content-box-wrapper">
                                    <div class="timeline-box mrg25A">
                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog "></i></div>
                                                <div class="tl-panel">7:30 - 8:30 AM</div>
                                                <div class="popover left" >
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Day 1</div>
                                                        <p class="tl-content"><b>Registration Start</b></p>
                                                        <!--<div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row">
                                            <div class="tl-item float-right">
                                                <div class="tl-icon bg-black"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">8:30 - 9:30 AM </div>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-info">Day 1</div>
                                                        <p class="tl-content"><b>Keynote</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">9:30 - 12:00 PM</div>
                                                <div class="popover left" >
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Day 1</div>
                                                        <p class="tl-content"><b>Panel Discussion</b></p>
                                                        <!--<div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row demo-margin">
                                            <div class="tl-item float-right">
                                                <div class="tl-icon bg-black"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">12:00  - 2:00 PM </div>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-info">Day 1</div>
                                                        <p class="tl-content"><b>Lunch and Networking</b></p>
                                                        <!--<div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">2:00 - 5:00 PM</div>
                                                <div class="popover left" >
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Day 1</div>
                                                        <p class="tl-content"><b>Workshop </b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                        </div>

                      </div>

                      <!-- Day 2 -->
                      <div class="col-md-4 active-sched" id="sched2">
                     

                        <div class="content-box mrg25T mrg25B">
                         <p style="text-align: center;font-size: 150%;padding-top: 10px;"><b style="border:2px solid #9cd159;padding: 5px;padding-left: 15px;padding-right: 15px;">Day Two</b></p>
                                <div class="content-box-wrapper">
                                    <div class="timeline-box mrg25A">
                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog "></i></div>
                                                <div class="tl-panel">8:00 - 8:30 AM</div>
                                                <div class="popover left" >
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Day 2</div>
                                                        <p class="tl-content"><b>Entries Start</b></p>
                                                        <!--<div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row">
                                            <div class="tl-item float-right">
                                                <div class="tl-icon bg-black"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">8:30 - 9:30</div>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-info">Day 2</div>
                                                        <p class="tl-content"><b>Keynote</b></p>
                                                       <!--<div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">9:30 - 12:00 PM</div>
                                                <div class="popover left" >
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Day 2</div>
                                                        <p class="tl-content"><b>Panel Discussion</b></p>
                                                        <!--<div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row demo-margin">
                                            <div class="tl-item float-right">
                                                <div class="tl-icon bg-black"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">12:00 - 2:00 PM</div>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-info">Day 2</div>
                                                        <p class="tl-content"><b>Lunch and Networking</b></p>
                                                        <!--<div class="tl-time"><i class="glyph-icon icon-clock-o"></i> a few seconds ago</div>-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">2:00 - 5:00 PM</div>
                                                <div class="popover left" >
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Day 2</div>
                                                        <p class="tl-content"><b>Workshop</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>

                      </div>

                      <!-- Day 3 -->
                      <!-- <div class="col-md-4 active-sched" id="sched3">
                         <div class="content-box mrg25T mrg25B">
                                <div class="content-box-wrapper">
                                    <div class="timeline-box mrg25A">
                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog "></i></div>
                                                <div class="tl-panel">8:00 - 9:00 AM</div>
                                                <div class="popover left" >
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Day 1</div>
                                                        <p class="tl-content"><b>Entries Start</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row">
                                            <div class="tl-item float-right">
                                                <div class="tl-icon bg-black"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">9:00 - 9:40</div>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-info">Day 1</div>
                                                        <p class="tl-content"><b></b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">10:45 - 12:15 PM</div>
                                                <div class="popover left" >
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Day 1</div>
                                                        <p class="tl-content"><b>Panel Discussion</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row demo-margin">
                                            <div class="tl-item float-right">
                                                <div class="tl-icon bg-black"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">12:00 - 2:00 PM</div>
                                                <div class="popover right">
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-info">Day 1</div>
                                                        <p class="tl-content"><b>Lunch and Networking</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tl-row">
                                            <div class="tl-item">
                                                <div class="tl-icon bg-green"><i class="glyph-icon icon-cog"></i></div>
                                                <div class="tl-panel">1:30 - 2:00 PM</div>
                                                <div class="popover left" >
                                                    <div class="arrow"></div>
                                                    <div class="popover-content">
                                                        <div class="tl-label bs-label label-success">Day 1</div>
                                                        <p class="tl-content"><b>Workshop</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                      </div> -->
          </div>


         
        </div>
     </section>

        <!-- ========== Blog Preview ========== -->



  <section id="sponsor">

      <div class="dark-bg" style="background-color: white;margin-top: 30px;margin-bottom: 50px;font-size: 35px;">
          <div class="container">
         

            <div class="row" style="padding-top: 20px;">
                
                <div class="col-sm-6">
                <img src="img/summit_img/workshop.jpg" style="width: 80%;border-radius: 5%;margin-left: 10%">
                </div>
                <div class="col-sm-6">
                  <div style="">
                    <h3 style="color: black;text-align: center;">Workshop By Microsoft</h3>
                    <p class="abhelo" style="color: #777;font-family: "Open Sans","Helvetica Neue",Helvetica,sans-serif;  ">The workshop will be on Artificial Intelligence. Workshop will be organised by Microsoft.
                   </p>
                    <p style="margin: auto;display: block;margin-top: 40px;text-align: center;"> <a href="/resource/AI.pdf" class=" btn-small hvr-push" style="text-align: center;background:#2da2c8;color: black;font-weight: bold;">Details</a></p>
                  </div>
                </div>
                

            </div>
          </div>
      </div>
                
           
        </section>




<style type="text/css">
    
        .mobile{
            display:block;
        }
                .lapi{
                display:none;
            }
    @media (min-width: 62em){
            .mobile{
                display:none;
            }
            .lapi{
                display:block;
            }
    }


</style>
      <section id="sponsor">
     <div class="dark-bg" style="background-color: white;margin-top: 30px;margin-bottom: 50px;font-size: 35px;">
          <div class="container">
          <h2 >Sponsors</h2>
           <hr class="hrab" style="
    margin-left: 0;margin-bottom: 20px;">

            <div class="row mobile" style="padding-top: 20px;">
                	<div class="col-sm-3">
						<p style="font-size: 20px;text-align: center;margin-top: 10px;">Brought to you by</p>
						<img src="img/summit_img/spo/main.jpg" style="width: 30%; margin-left: 30%;">
					</div>
					<div class="col-sm-3">
						<p style="font-size: 20px;text-align: center;margin-top: 10px;">Workshop Partner</p>
						<img src="img/summit_img/spo/microsoft.png" style="width: 50%;margin-left: 25%;">
					</div>
					<div class="col-sm-3">
						<img src="img/summit_img/spo/wns.png" style=" margin-top: 6%;width: 60%;margin-left: 20%;">
					</div>
					<div class="col-sm-3">
						<p style="font-size: 20px;text-align: center;margin-top: 10px;">Ecosystem partner</p>
						<img src="img/summit_img/spo/sine.jpg" style="width: 30%; margin-left: 30%;">
					</div>
            </div>
            
            
            
             <div class="row lapi" style="padding-top: 20px;">
                	<div class="col-sm-3">
						<p style="font-size: 20px;text-align: center;margin-top: 10px;">Brought to you by</p>
						<img src="img/summit_img/spo/main.jpg" style="width: 30%; margin-left: 30%;">
					</div>
					<div class="col-sm-3">
						<p style="font-size: 20px;text-align: center;margin-top: 10px;">Workshop Partner</p>
						<img src="img/summit_img/spo/microsoft.png" style="width: 50%;margin-left: 25%;">
					</div>
					<div class="col-sm-3">
						<img src="img/summit_img/spo/wns.png" style=" margin-top: 6%;width: 60%;margin-left: 20%;">
					</div>
					<div class="col-sm-3">
						<p style="font-size: 20px;text-align: center;margin-top: 10px;">Ecosystem partner</p>
						<img src="img/summit_img/spo/sine.jpg" style="width: 30%; margin-left: 30%;">
					</div>
            </div>
            
            
          </div><!-- / .container -->
        </div><!-- / .dark-bg -->
        </section>
        <!-- ========== Footer Contact ========== -->
   
        <footer id="contact" class="footer-contact">
          <div class="container-fluid">
            <div class="row" style="background-color:#f8f8f8;">
              <!-- Map and address -->
              <div class="col-lg-6 no-gap contact-info">
                <!-- <a href="" class="show-info-link"><i class="fa fa-info"></i>Show info</a> -->
               <div id="map-canvas" class="footer-map" style="position: relative; overflow: hidden;">
               <!--  <iframe width="100%" height="100%" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=pcsa%20iit%20bombay&key=AIzaSyB6ItXJTl0_DXut9RkBhuLXaISiBqRPJPg" allowfullscreen></iframe> -->
                </div>
                <address class="contact-info-wrapper">
                  <ul>
                    <li class="contact-group">
                      <span class="adr-heading">Venue</span>
                      <span class="adr-info">PC Saxena Auditorium, IIT Bombay</span>
                    </li>
                    <li class="contact-group">
                      <span class="adr-heading">Date</span>
                      <span class="adr-info">29<sup>th</sup> - 30<sup>th</sup> December 2017</span>
                    </li>
                  </ul>
                  <!-- <a href="" class="show-map"><i class="material-icons">place</i></span>  Show on map</a> -->
                </address>
              </div><!-- / .col-lg-6 -->
              <!-- Contact Form -->
              <div class="col-lg-6 no-gap section contact-form">
                <h2 style="font-size: 40px;text-align:center;    margin-bottom: 65px;">Contact</h2>
                  <div class="row">
                     <div class="col-md-6  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="animation-duration: 1s; animation-delay: 0.1s; visibility: visible;">
                      <i class="fa fa-user" style="font-size:90px;width: 100%;text-align: center;"></i>
                      <h4 style="text-align: center;text-transform: uppercase;font-weight: bold;font-family: 'Varela', sans-serif;font-size: 20px;color:black;width: 100%">Abhishek Singhal</h4>
                      <h5 style="text-align: center;font-size:18px;width: 100%">COORDINATOR </h5>
                      <p style="text-align:center; font-size:15px;width: 100%;margin-bottom:0px !important;"><i class="fa fa-envelope-o" style=" ">
                      </i>abhishek.techfest@gmail.com</p>
                      <p style="font-size:15px;text-align:center;margin-top:0px !important;width: 100%"><i class="fa fa-phone fa-2x hvr-icon-grow-rotate" style="font-size:15px; margin-top: -15px;"></i>+91 8291473951</p>
                    </div>
                    <div class="col-md-6  wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s" style="animation-duration: 1s; animation-delay: 0.1s; visibility: visible;">
                      <i class="fa fa-user" style="font-size:90px;width: 100%;text-align: center;"></i>
                      <h4 style="text-align: center;text-transform: uppercase;font-weight: bold;font-family: 'Varela', sans-serif;font-size: 20px;color:black;width: 100%">Abbey George</h4>
                      <h5 style="text-align: center;font-size:18px;width: 100%">COORDINATOR </h5>
                      <p style="text-align:center; font-size:16px;width: 100%;margin-bottom:0px !important;"><i class="fa fa-envelope-o" style=" ">
                      </i>abbey.techfest@gmail.com</p>
                      <p style="font-size:15px;text-align:center;margin-top:0px !important;width: 100%"><i class="fa fa-phone fa-2x hvr-icon-grow-rotate" style="font-size:15px; margin-top: -15px;"></i>+91 8454929799</p>
                    </div>

                  </div>
              </div><!-- / .col-lg-6 -->
            </div><!-- / .row -->
          </div><!-- / .container-fluid -->
          <div class="last" style="background-color: black;">
<a href="#home" style=" position: relative;display: block;margin:auto;"><i class="fa fa-angle-up hvr-icon-up" style="font-size: 35px;color: white;display: block;margin: auto;"></i></a>
                      <div class="container" style="margin-top: 30px;">
            <div class="row">
            <div class="col-md-4"></div>
              <div class="col-md-4">
              <ul style="display: block;list-style: none;text-align: center;">
                <li class="social"><a href="https://www.facebook.com/techfest.iitb/" class="socialicon"><i class="fa fa-facebook hvr-icon-grow-rotate " aria-hidden="true" style="font-size: 27px;padding-right:5px;"></i></a></li>
                <li class="social"><a href="https://twitter.com/Techfest_IITB" class="socialicon"><i class="fa fa-twitter hvr-icon-grow-rotate  " aria-hidden="true" style="font-size: 27px;padding-right:5px;"></i></a></li>
                <li class="social"><a href="https://www.youtube.com/user/techfestiitbombay" class="socialicon"><i class="fa fa-youtube-play hvr-icon-grow-rotate " aria-hidden="true" style="font-size: 27px;padding-right:5px;"></i></a></li>
                <li class="social"><a href="https://www.linkedin.com/company/techfest" class="socialicon"><i class="fa fa-linkedin hvr-icon-grow-rotate" aria-hidden="true" style="font-size: 27px;padding-right:5px; "></i></a></li>
                <li class="social"><a href="https://www.instagram.com/techfest_iitb/?hl=en" class="socialicon"><i class="fa fa-instagram hvr-icon-grow-rotate" aria-hidden="true" style="font-size: 27px;padding-right:5px; "></i></a></li>


              </ul>
              <p style="margin-top: 40px;text-align: center;">Designed And Developed by Abhishek , Ayush,Ashi,Avani</p>
                  <small style="text-align: center;display: block;"><b>© 2017 Techfest | IIT Bombay</b> 
                  <a class="no-style-link" href="http://www.techfest.org/" target="_blank"></a></small>
                </div>
                <div class="col-md-4"></div>
            </div>
          </div>
        </div>
        </footer><!-- / .footer-contact -->
        <!-- ========== Scripts ========== -->
       <script src="js/summit_js/jquery-2.1.4.min.js"></script>
        <script src="js/summit_js/google-fonts.js"></script>
        <script src="js/summit_js/jquery.easing.js"></script>
        <script src="js/summit_js/jquery.waypoints.min.js"></script>
        <script src="js/summit_js/bootstrap.min.js"></script>
        <script src="js/summit_js/bootstrap-hover-dropdown.min.js"></script>
        <script src="js/summit_js/smoothscroll.js"></script>
        <script src="js/summit_js/jquery.localScroll.min.js"></script>
        <script src="js/summit_js/jquery.scrollTo.min.js"></script>
        <script src="js/summit_js/jquery.stellar.min.js"></script>
        <script src="js/summit_js/jquery.parallax.js"></script>
        <script src="js/summit_js/slick.min.js"></script>
        <script src="js/summit_js/jquery.easypiechart.min.js"></script>
        <script src="js/summit_js/countup.min.js"></script>
        <script src="js/summit_js/isotope.min.js"></script>
        <script src="js/summit_js/jquery.magnific-popup.min.js"></script>
        <script src="js/summit_js/wow.min.js"></script>
        <script src="js/summit_js/jquery.ajaxchimp.js"></script>
        <!-- <script src="js/summit_js/animDots.js"></script> -->
        <script src="js/summit_js/main.js"></script>
</body></html>
