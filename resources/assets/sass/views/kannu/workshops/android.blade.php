@extends('kannu.topLayer')

@section('title','Google Android Development | Workshops ')

@section('styling')

.content-mobile li{font-size: 3vh;padding: 2vh;}

.overlay-content{top:20%;}
.psMobi{width:100%;text-align:center;font-size:2vh;margin: 1vh;margin-top:0.5vh;}
@media (max-width: 62em) and (orientation: landscape){
.parent {
    height: 50%;
}
.heading{margin-top:5}
.headMobile{}

.content-mobile li{font-size: 3vh;padding: 0vh;}
.overlay-content{top:10%;}
.psMobi{margin: 0.1vh;}
.grid{
	position: fixed;
    left: 60%;
}
#mobiPrize{
	<!-- font-size:3vh; -->
	text-align:center;
}
.centerLapi{
		height: 50% !important;
	}
.hrMobi{width:96%;margin-bottom:1vh}
<!-- .overlay-content{top:15%;} -->
}

@endsection

@section('style')
<style type="text/css">

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
	.centerLapi{
		height: 50% !important;
	}

</style>


@endsection
 
@section('centerOne')



<!-- center element left section for laptop compleate -->
<div style="" class="contentLaptop">
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="max-width: 107%;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 3vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">Google Android Development</h4>
	<hr style="margin-top: 0px;
	border: 1.5px solid #dafcff;
	-webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
-moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
">

</div>
<!-- <div class="row" > -->

<!-- first extend  -->
	<div class="col-sm-5 centerLapi" style="position: fixed;
	top: 32vh;font-size: 1.8rem;height: 36%;overflow: scroll;overflow-x: hidden;
	left: 9vw;color: #fefefe;font-family: 'Play', sans-serif;width:50%;
	">

	<div id="kaushik0" class="kaushik" style="display: block;">
		<p class="content-sub-heading" style="font-size:25px;">ABOUT</p>
		<p style="color: yellow">Date: 30th-31st December 2017<br>
      Venue: LA 101<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p><br>
		<p>
		Google Android Development Workshop mainly focuses on how to use native Android OS for building your own Android Application. Students will be introduced to android development environment and firebase platform with tools and infrastructure designed to help developers build high-quality apps.
		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">DETAILS</p>
		<p>
		<b> Date:</b> 30th-31st December 2017<br>

		<br><b>Duration:</b>  2 Days [8 hrs per day]<br>

		<br><b>Venue:</b> IIT Bombay <br>

		<br><b>Cost of Workshop:</b>₹ 1,600/- per person<br>
        <br><b>No. of Team Members: </b> 1<br>
       <br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTENT</p>
		<p>
			<b>BASIC Session:</b><br>
Learn to build Single screen app with Maps and Firebase<br><br>

This Codelab will provide a guided, hands-on coding experience. Most codelab will step
you through the process of building a small application, or adding a new feature to an
existing application source code.<br><br>
<b>What you'll learn:</b><br>
● What is API Levels?<br>
● Understanding Android Studio<br>
● Basic programming languages intro: Java and XML<br>
● Designing Front-end through XML<br>
● Designing Backend through JAVA<br>
● Practicing various design Layouts<br>
● Working with various Widgets: Text-View, Edit-Text, Buttons, Image-Views, and ScrollView.<br>
● What are Activity and its Life-Cycle?<br>
● Designing an Activity<br>
● Registering the Activity in Manifest File<br>
● Setting up the Android Virtual Devices<br>
● What are Intents<br>
● Starting another Activity using both types of Intents<br>
● Sending Data from one Activity to another<br>
<br><br>


<b>Codelab Session:</b><br> Make your App Material<br><br>

Material design is a comprehensive guide for visual, motion, and interaction design
across platforms and devices. In this codelab, you'll learn the principles of this design
language by building a sample Android app.<br><br>

<b>What you'll learn:</b><br>
● How to use the Android Design Support Library.<br>
● How to use the Vector Drawables.<br>
● How to apply material design to your Android app.<br><br>
● The following key material design components and principles:<br>
● Themes and colors to create tangible surfaces and print-like design<br>
● App layout best practices for improved navigability<br>
● Animation and touch feedback to express meaningful motion.<br><br>
What you'll need:<br>
● Android Studio version 2.1+ and JDK 8+<br>
● A test device with Android 4.1+<br>
● A USB micro to USB cable.<br><br>

* Android devices running Android 2.3.3 (Gingerbread, API Level 10) or higher may be used, however,
some material design effects, such as the ripple effect, will not be visible on devices running on
Android 4.4 (KitKat) or before.<br><br>



<b>SESSION 3:</b><br>  Zero to Hero session<br><br>

This talk will cover common doubts and faq every solo developer student has.It will
include a walkthrough of publishing your app on play store to earning from mobile ads
serving targeted audience worldwide through quality apps<br><br>
<b>What you'll learn:</b><br>
● App publishing on google play store<br>
● Make money while you learn<br>
● General FAQ’s for student developers<br>
● Publishing on Google Play through the Developer Console<br>
● Display ads with AdMob.<br>
● Increase installs with improved store listings<br>
● Pricing and distribution<br>
<br>
<br>For detailed course content, kindly <a href="/resource/workshop/android.pdf">Click here</a>.


		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">RULES</p>
		<p>
			<b>Eligibility :   </b> 
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>	
     		<br>Participants will have to register individually.<br>
			<br><b>Prerequisites :</b>
			<br>Each participant should bring one laptop with Dongle/Jio along with them.  <br>
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-12">
			<p>Sachit Mehrotra<br>
				sachit@techfest.org<br>
					+91 9619264565<br>
				<br></p>
		</div>
		<div class="col-sm-2"></div>
		<!-- <div class="col-sm-5">
			<p>Rishi Jain<br>
 			Events Manager <br>
			rishi@techfest.org<br>
			+91 9930652916
		</div> -->
	</div>	

<div style="height:2vh;"></div>
</div>




<div class="row comeon" style="position:relative; left:10vh;">
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					<a  id="compi01" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;" >
								     DETAILS
							</p>
							<a href="resource/workshop/android.pdf" target="_blank"> 
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
								<line class="top" x1="0" y1="0" x2="200" y2="0"/>
								<line class="left" x1="0" y1="0" x2="0" y2="50"/>
								<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
								<line class="right" x1="200" y1="50" x2="200" y2="0"/>

								<line id="ro01" x1="0" y1="0" x2="200" y2="0"/>
								<line id="ro02" x1="0" y1="0" x2="0" y2="50"/>
								<line id="ro03" x1="0" y1="50" x2="200" y2="50"/>
								<line id="ro04" x1="200" y1="50" x2="200" y2="0"/>
							</svg>
							</a>

						</div>
					</a>
				</div>
		</section>
    </div>
	<div class="col-sm-4">
		<div class="col-sm-12 prize">
			<p class="prizes">Date:<br>30th-31st December</p>
		</div>
	</div>
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi">   
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">Register </a>
							</p>
							<a id="compi02" href="/workshop/android"><!-- ============================================== -->
							<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
								<line class="top" x1="0" y1="0" x2="200" y2="0"/>
								<line class="left" x1="0" y1="0" x2="0" y2="50"/>
								<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
								<line class="right" x1="200" y1="50" x2="200" y2="0"/>

								<line id="ro01" x1="0" y1="0" x2="200" y2="0"/>
								<line id="ro02" x1="0" y1="0" x2="0" y2="50"/>
								<line id="ro03" x1="0" y1="50" x2="200" y2="50"/>
								<line id="ro04" x1="200" y1="50" x2="200" y2="0"/>
							</svg>
							</a>
						</div>
					</a>
				</div>
		</section>
	</div>
</div>
</div>

<!-- center element left section for laptop compleate -->



<!-- center elements start for mobile -->


<div class="mobileCenter">
	
	<h4 id="heading" class="heading">Google Android Development</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
				Google Android Development Workshop mainly focuses on how to use native Android OS for building your own Android Application. Students will be introduced to android development environment and firebase platform with tools and infrastructure designed to help developers build high-quality apps.
			</p>
		</div>

		<div class="child">
			<p class="headMobile">DETAILS</p>
			<p class="contentMobile">
				<b> Date:</b> 30th-31st December 2017<br>

				<br><b>Duration:</b>  2 Days [8 hrs per day]<br>

				<br><b>Venue:</b> IIT Bombay <br>

				<br><b>Cost of Workshop:</b>₹ 1,600/- per person<br>
		        <br><b>No. of Team Members: </b> 1<br>
		        <br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
		</div>


		<div class="child">
			<p class="headMobile">CONTENT</p>
			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
								<b>BASIC Session:</b><br>
Learn to build Single screen app with Maps and Firebase<br><br>

This Codelab will provide a guided, hands-on coding experience. Most codelab will step
you through the process of building a small application, or adding a new feature to an
existing application source code.<br><br>
<b>What you'll learn:</b><br>
● What is API Levels?<br>
● Understanding Android Studio<br>
● Basic programming languages intro: Java and XML<br>
● Designing Front-end through XML<br>
● Designing Backend through JAVA<br>
● Practicing various design Layouts<br>
● Working with various Widgets: Text-View, Edit-Text, Buttons, Image-Views, and ScrollView.<br>
● What are Activity and its Life-Cycle?<br>
● Designing an Activity<br>
● Registering the Activity in Manifest File<br>
● Setting up the Android Virtual Devices<br>
● What are Intents<br>
● Starting another Activity using both types of Intents<br>
● Sending Data from one Activity to another<br>
<br><br>


<b>Codelab Session:</b><br> Make your App Material<br><br>

Material design is a comprehensive guide for visual, motion, and interaction design
across platforms and devices. In this codelab, you'll learn the principles of this design
language by building a sample Android app.<br><br>

<b>What you'll learn:</b><br>
● How to use the Android Design Support Library.<br>
● How to use the Vector Drawables.<br>
● How to apply material design to your Android app.<br><br>
● The following key material design components and principles:<br>
● Themes and colors to create tangible surfaces and print-like design<br>
● App layout best practices for improved navigability<br>
● Animation and touch feedback to express meaningful motion.<br><br>
What you'll need:<br>
● Android Studio version 2.1+ and JDK 8+<br>
● A test device with Android 4.1+<br>
● A USB micro to USB cable.<br><br>

* Android devices running Android 2.3.3 (Gingerbread, API Level 10) or higher may be used, however,
some material design effects, such as the ripple effect, will not be visible on devices running on
Android 4.4 (KitKat) or before.<br><br>



<b>SESSION 3:</b><br>  Zero to Hero session<br><br>

This talk will cover common doubts and faq every solo developer student has.It will
include a walkthrough of publishing your app on play store to earning from mobile ads
serving targeted audience worldwide through quality apps<br><br>
<b>What you'll learn:</b><br>
● App publishing on google play store<br>
● Make money while you learn<br>
● General FAQ’s for student developers<br>
● Publishing on Google Play through the Developer Console<br>
● Display ads with AdMob.<br>
● Increase installs with improved store listings<br>
● Pricing and distribution<br>
<br>
<br>For detailed course content, kindly <a href="/resource/workshop/android.pdf">Click here</a>.
			</p>
		</div>

		<div class="child">
			<p class="headMobile">RULES</p>

			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
				<b>Eligibility :   </b> 
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>	
     		<br>Participants will have to register individually.<br>
			<br><b>Prerequisites :</b>
			<br>Each participant should bring one laptop with Dongle/Jio along with them.  <br>
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
             </ul>
			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					Sachit Mehrotra<br>
				sachit@techfest.org<br>
					+91 9619264565<br>
				<br>
					</div>
				<!-- <div class="row" style="margin: 5vh;">
				Rishi Jain<br>
				Events Manager<br>
				rishi@techfest.org<br>
				+91 9930652916<br>
				</div> -->
			</div>
		</div>

		<div class="child">
			Div Six
		</div>
	
</div>







			<div class="psMobi">
			<!-- <hr style="width:93%">	 		 -->
			<a href="#" style="color:white;"><b>Date: 30th-31st December</b></a>
			</div>



		
		<div style="padding-top:0.5vh;" >
				<section class="demo-3" id="mobi" onclick="openNav()">
								<div class="grid" style="position:absolute;left:15%;">
									<div class="box">
									<p class="btnText" style="font-size: 1.5rem;
					text-align: center;
					margin-top: 8%;">Explore More</p>
										<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
											<line class="top" x1="0" y1="0" x2="200" y2="0"/>
											<line class="left" x1="0" y1="0" x2="0" y2="50"/>
											<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
											<line class="right" x1="200" y1="50" x2="200" y2="0"/>

											<line x1="0" y1="0" x2="200" y2="0"/>
											<line x1="0" y1="0" x2="0" y2="50"/>
											<line x1="0" y1="50" x2="200" y2="50"/>
											<line x1="200" y1="50" x2="200" y2="0"/>
										</svg>
									</div>
								</div>
				</section>
				<section class="demo-3" id="mobi01">
								<div class="grid"  style="position:absolute;right:15%;">
									<div class="box" id="regi">
									<p class="btnText" style="font-size: 1.5rem;
					text-align: center;
					margin-top: 1.5rem;">Register</p>
					<a id="compi02" href="/workshop/android"><!-- ============================================== -->
										<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
											<line class="top" x1="0" y1="0" x2="200" y2="0"/>
											<line class="left" x1="0" y1="0" x2="0" y2="50"/>
											<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>
											<line class="right" x1="200" y1="50" x2="200" y2="0"/>

											<line x1="0" y1="0" x2="200" y2="0"/>
											<line x1="0" y1="0" x2="0" y2="50"/>
											<line x1="0" y1="50" x2="200" y2="50"/>
											<line x1="200" y1="50" x2="200" y2="0"/>
										</svg>
										</a>
									</div>
								</div>
				</section>
		</div>



</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav(0)">&times;</a>
  <div class="overlay-content">
    <a href="#" onclick="closeNav(1)">About</a>
    <a href="#" onclick="closeNav(2)">Details</a>
    <a href="#" onclick="closeNav(3)">Content</a>
    <a href="#" onclick="closeNav(6)">Details</a>

    <a href="#" onclick="closeNav(4)">Rules</a>
    <a href="#" onclick="closeNav(5)">Contact Us</a>

  </div>
</div>





<script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav(argument) {
	var con = document.getElementsByClassName("child");


	if (argument== 0 ) {
    document.getElementById("myNav").style.width = "0%";
	}
	if (argument== 1 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="block";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
	}

	if (argument== 2 ) {
    document.getElementById("myNav").style.width = "0%";
   con[0].style.display="none";
    con[1].style.display="block";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
	}
	if (argument== 3 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="block";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
	}
	if (argument== 4 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="block";
    con[4].style.display="none";
    con[5].style.display="none";
	}
	if (argument== 5 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="block";
    con[5].style.display="none";
	}
	
	if (argument== 6 ) {
	window.location.href="/resource/workshop/android.pdf";              // ===================================================
   }



}

</script>




<!-- center elements ends here  -->


<!-- circular bar  right section start for lapi  -->


<div class="circleLapi" style="width: 25vw;">
	<div style="position: relative; top:8vh;">



	<ul class="mainmenu">
		<li ></li>
		<li>
			<div class="crax-top"></div>
		</li>
		<li>
			<a class="vertical " onclick="btn(0)" >
				<p class="yo" id="yo-0" >ABOUT</p>
				<div class="bro" id="bro-0"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(1)">
				<p class="yo" id="yo-1">DETAILS</p>
				<div class="bro" id="bro-1" ></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(2)">
				<p class="yo" id="yo-2">CONTENT</p>
				<div class="bro" id="bro-2"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(3)">
				<p class="yo" id="yo-3">RULES</p>
				<div class="bro" id="bro-3"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(4)">
				<p class="yo" id="yo-4">CONTACT US</p>
				<div class="bro" id="bro-4"></div>
				<div class="crax"></div>
			</a>
		</li>					


		<li>
			<div class="crax-bottom"></div>
		</li>
	</ul>
	</div>
</div>


@endsection