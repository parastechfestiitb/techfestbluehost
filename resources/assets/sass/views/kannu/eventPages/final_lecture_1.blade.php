@extends('kannu.eventLayer')

@section('title','Lectures | Techfest, IIT Bombay')
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
  top: calc(100% - 16px);
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
    opacity: 0.7;
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
</style>
@endsection


@section('content')


<div style="width:100%;height:77vh;margin-top:1vh;overflow:scroll; padding-top: 25px;">
	<section class="container">
  <div class="row active-with-click">
    <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
		  <h2><span> Shri Pranab Mukherjee</span><strong><i class="fa fa-fw fa-star"></i>Former President of India</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/pranab.jpg">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
        	<!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

        <div class="mc-footer">
        	<h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
		  <h2><span>Hamid Karzai</span><strong><i class="fa fa-fw fa-star"></i>Former President of Afghanistan</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/Karzai square.jpg">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
        	<!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

        <div class="mc-footer">
        	<h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
        <h2><span>Manohar Parrikar</span><strong><i class="fa fa-fw fa-star"></i>Hon. Chief Minister of Goa</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/Parrikar square.jpg">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
        	<!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

        <div class="mc-footer">
        	<h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
        <h2><span>Randy Schekman</span><strong><i class="fa fa-fw fa-star"></i>Nobel Prize recipient in Physiology</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/Randy_Schekman_8_February_2012.jpg">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
        	<!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

        <div class="mc-footer">
        	<h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
        <h2><span>Tanmay Bakshi</span><strong><i class="fa fa-fw fa-star"></i>Youngest IBM Watson Developer</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/Tanmay Bakshi.png">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
        	<!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

        <div class="mc-footer">
        	<h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
        <h2><span>J. Satyanarayana</span><strong><i class="fa fa-fw fa-star"></i>Chairman UIDAI(Aadhaar Card)</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/J. Satyanarayan.jpg">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
         <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

       <div class="mc-footer">
        	<h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
        <h2><span>Radhanath Swami</span><strong><i class="fa fa-fw fa-star"></i>Governing Body Commission (ISKCON)</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/Radhanath Swami.jpg">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
        	<!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

        <div class="mc-footer">
        	<h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
      <h2><span>George Varghese</span><strong><i class="fa fa-fw fa-star"></i>Principal Researcher at Microsoft Research</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/George Varghese.jpg">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
          <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

        <div class="mc-footer">
          <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div>
     <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
        <h2><span>Marlene Kanga</span><strong><i class="fa fa-fw fa-star"></i>President-elect (WFEO, UNESCO)</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/Marlene square.jpg">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
          <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

        <div class="mc-footer">
          <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div>
     <!-- <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
        <h2><span>Patrick Dai</span><strong><i class="fa fa-fw fa-star"></i>Founder QTUM (BITCOIN)</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/Dr.Marlene-Kanga%20AM-2015_white_cropped%20%282%29.jpg">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
          <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

       <!--  <div class="mc-footer">
          <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div> -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <article class="material-card Red">
        <h2 ><span>Soumodip Sarkar</span><strong><i class="fa fa-fw fa-star"></i>Economist & Management Researcher</strong></h2>
        <div class="mc-content">
          <div class="img-container">
            <img class="img-responsive" src="img/lecture17/Soumodeep Sarkar.jpg">
          </div>
          <div class="mc-description">
            The details of the Lecture will be updated soon
          </div>
        </div>
        <a class="mc-btn-action">
          <i class="fa fa-bars"></i>
        </a>
          <!-- Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017 -->

        <div class="mc-footer">
          <h4>Techfest | 29<sup>TH</sup>-31<sup>ST</sup> Dec, 2017</h4>
        </div>
      </article>
    </div>
  </div>
</section>

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









