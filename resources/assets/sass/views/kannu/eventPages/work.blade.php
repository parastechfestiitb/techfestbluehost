@extends('kannu.eventLayer')

@section('title','Workshops | Techfest, IIT Bombay')
@section('style')

<link rel="stylesheet" type="text/css" href="css/button.css">
<link rel="stylesheet" type="text/css" href="css/eventmobile.css">
<link rel="stylesheet" type="text/css" href="css/hamburger.css">
<link rel="stylesheet" href="css/topNavBar.css">
    <meta property="og:title" content="Workshops | Techfest 2017-18, IIT Bombay | Asia's Largest Science and Technology Festival" />
    
    <meta property="og:url" content="https://techfest.org/workshop"/>
    <meta property="og:image" content="https://techfest.org/img/workshop/workshop_dp.jpg" />
    <meta name="theme-color" content="#010202">
    <meta name="description" content="Techfest 2017-18: IIT Bombay presents Asia's Largest Science and Technology Festival">
    
    <meta name="viewport" content="width=device-width, user-scalable=no">


@endsection

<style type="text/css">

/*body {*/
	/*font-family: Roboto;*/
/*	font-weight: 400;*/
/*	font-size: 1.6em;*/
/*	line-height: 1.6;*/
/*	color: #666;*/
/*}*/

a {
	text-decoration: none;
	color: #3498db;
}
	a:hover {
		color: #2980b9;
		text-decoration: none;
	}

h2 {
	line-height: 1.2;
	margin-bottom: 1.6rem;
}

.wrapper {
	max-width: 400px;
	/*margin: 50px auto;*/
	padding: 1em;
	/*padding: 1em;*/
}

/**
 * Helpers
 */
.border-tlr-radius { 
	border-top-left-radius: 2px;
	border-top-right-radius: 2px; 
}

.text-center { text-align: center; }

.radius { border-radius: 2px; }

.padding-tb { padding-top: 1.6rem; padding-bottom: 1.6rem;}

.shadowDepth0 { box-shadow: 0 1px 3px rgba(0,0,0, 0.12); }

.shadowDepth1 {
   box-shadow: 
  		0 1px 3px rgba(0,0,0, 0.12),
    	0 1px 2px rgba(0,0,0, 0.24);      
}


/**
 * Card Styles
 */

.card {
	background-color: #fff;
	margin-bottom: 1.6rem;
	background:transparent;
	
	border: solid 2px #8abdff;
    box-shadow: 0 0 15px white;
    border-radius: 15px;
    
}

.card__padding {
	padding: 1rem;
}
 
.card__image {
	min-height: 100px;
	background-color: #eee;
}
	.card__image img {
		width: 100%;
		max-width: 100%;
		display: block;
		border-top-right-radius: 10px;
    border-top-left-radius: 10px;
	}

.card__content {
	position: relative;
	background:rgba(255, 255, 255, 0.1);
}

/* card meta */
.card__meta {
	font-size: 22px;
	color:#3498db;
}

/* card article */

.card__article {
    color: #d5d6ff;
    font-family: 'Play', sans-serif;
    font-size:115%;
    overflow: scroll;
    max-height: 42px;
    
}
.card__article a {
	text-decoration: none;
	color: #444;
	transition: all 0.5s ease;
}
	.card__article a:hover {
		color: #2980b9;
	}

/* card action */
.card__action {
	overflow: hidden;
	padding-right: 1.6rem;
	padding-left: 1.6rem;
	padding-bottom: 1.6rem;
	background:rgba(255, 255, 255, 0.1);
	border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
    
}
	 
.card__author {}

	.card__author img,
	.card__author-content {
		display: inline-block;
		vertical-align: middle;
	}

	.card__author img{
		border-radius: 50%;
		margin-right: 0.6em;
	}


	/*one card design*/

	@media(min-width: 62em){
			body{
				height: 100%;
			}
			html{
				height: 100%;

			}
			#overall{
				height:100%;
			}

	}

</style>


@section('content')

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1086221628179602";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div style="width:100%;height:77vh;margin-top:1vh;overflow:scroll;">
    
    
    
    
    
    <!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/nvidia.jpg" alt="WORKSHOP one Name" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>NVIDIA Deep Learning</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                           DLI Workshop offers hands-on training with deep machine learning by <b>NVIDIA</b>.
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/DeepLearning" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button>
				                            </a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->
    
    
<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/aws.jpg" alt="WORKSHOP one Name" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>All in Cloud</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5>
				                            <b> A Cloud Partner Perspective</b>
				                            Workshop on learning Amazon Webserver by <b>Amazon</b>
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/AllinCloud" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends --> 


<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/14G.jpg" alt="Google Android Development" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Google Android</b>
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">Learn the basics of making an Android app and games by <b>Google Developers</b> 
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <div class="card__author-content" style="width:100%">
				                              <a href="/android" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->



<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/15I.jpg" alt="IoT workshop by Texas Instruments" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Internet of Things</b>
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">Introduction to "Internet of Things" by <b>Texas Instruments</b>
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <div class="card__author-content" style="width:100%">
				                              <a href="/IoT" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->





<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/2.jpg" alt="Solarizer WORKSHOP Techfest " class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Solarizer</b>
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">Design a Solar PV Plant in PVSYST & make a Solar Mobile Charger
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <div class="card__author-content" style="width:100%">
				                              <a href="/Solarizer" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->



<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/16S.jpg" alt="Ethical hacking WORKSHOP Techfest" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>AI Summit</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                            Explore the Artificial Intelligence means by <b>Microsoft</b>
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                            <a href="/summit17" target="_blank">
				                                <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->




<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/6.jpg" alt="Ethical hacking WORKSHOP Techfest" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Ethical Hacking</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                            Penetrate computer systems to finding and fixing security vulnerabilities
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                            <a href="/EthicalHacking" target="_blank">
				                                <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->


<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/18.jpg" alt="Ethical hacking WORKSHOP Techfest" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Automobile Mechanics</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                        Automobile Mechanics and IC Engine Technology
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                            <a href="/AutomobileMechanics" target="_blank">
				                                <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->



<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/7.jpg" alt="Autonomous Robotics Techfest" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>ArduinoBotix</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                            Covering aspects of Autonomous Robotics using Arduino
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/ArduinoBotix" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button>
				                            </a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->

<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/8.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Super Computing</b>
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                        Technology, Application and Programming
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <div class="card__author-content" style="width:100%">
				                              <a href="/HPC" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				                    </div>
				                </div>
				            </div>
<!--caard workshop one ends -->

<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/4.jpg" alt="DataScience Workshop" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Open Data Science</b>
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                        Machine learning and <br>Intelligence
				                        </h5>
				                    </article>
				                </div>
				                 <div class="card__action">
				                    <div class="card__author">
				                        <div class="card__author-content" style="width:100%">
				                              <a href="/DataScience" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                    </div>
				                </div>
				            </div>
				</div>
<!--caard workshop one ends -->




















<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/1.jpg" alt="6th Sense Robotics | Techfest" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>6th Sense Robotics</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                            Platform to enter the field of robotics image processing
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/SixthSense" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->




<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/10.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Zero Energy Building</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                           Develop a Zero Energy Building for a sustainable living
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/ZeroEnergyBuilding" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->




<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/9.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Nano-Technology</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                           Nano-Machines Lab : Designing &  Manufacture
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/NanoMachines" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->



<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/12.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Gesture Robotics</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                          Use Accelerometer to design Gesture controlled robots
				                          
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/Gesture" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->




<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/11.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Embedded Systems</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                           Meet industry needs and provide students with practical learning
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/EmbeddedSystems" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->



<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/3.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Underwater Robotics</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                        A Workshop for Budding deep insight of underwater engineering
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/UnderwaterRobotics" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->




<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/5.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Quadcopter</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                            <b>RC Drone Workshop</b>
				                          Learn about designing, assembly of RC drones
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/RCDrone" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->


<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/D1.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Virtual Reality</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                            <b>Turn your imaginative ideas into reality by virtual reality technology!
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <div class="card__author-content" style="width:100%">
				                              <a href="/vr" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->
<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/D3.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Bot coding </b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                            <b>Learn and Interact with the famous NAO robot by Softbank
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <div class="card__author-content" style="width:100%">
				                              <a href="/NAO" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->






<!--card view workshop no one-->
			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/D2.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Ultrasonic Testing</b>
				                        <!--<time> </time>-->
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                            <b>Non destructive testing by ultrasonic means
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <!--<img src="http://lorempixel.com/40/40/sports/" alt="user">-->
				                        <div class="card__author-content" style="width:100%">
				                            <!--<button>Submit</button>-->
				                              <a href="/ultrasonic" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				            </div>
				</div>
			</div>
<!--caard workshop one ends -->






<!--card view workshop no one-->
<!-- 			<div class="col-sm-3 col-xs-12">
				<div class="wrapper">
				            <div class="card radius shadowDepth1" style="border-radius: 15px;">
				                <div class="card__image border-tlr-radius" style="border-radius: 10px;">
				                    <img src="/img/workshop/8.jpg" alt="Zero energy building WORKSHOP" class="border-tlr-radius" style="border-top-right-radius: 10px;border-top-left-radius: 10px;">
				                </div>
				                <div class="card__content card__padding">
				                    <div class="card__meta">
				                        <b>Super Computing</b>
				                    </div>
				                    <article class="card__article">
				                        <h5 style="">
				                        Technology, Application and Programming
				                        </h5>
				                    </article>
				                </div>
				                <div class="card__action">
				                    <div class="card__author">
				                        <div class="card__author-content" style="width:100%">
				                              <a href="/HPC" target="_blank">
				                            <button class="btn btn-success" style="width: 100%;padding: 2px;border: none;background: #3498db;">Explore More</button></a>
				                        </div>
				                    </div>
				                </div>
				                    </div>
				                </div>
				            </div>
 --><!--caard workshop one ends -->


</div>



@endsection









