@extends('kannu.topLayer')

@section('title','Underwater Robotics | Workshops ')




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
	letter-spacing: 3px;color: #fefefe" id="abhinav">Underwater Robotics </h4>
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
      Venue: LC 201<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p>
		<p>
	This is an emerging science, which has become more popular with evolving technology. There are many applications of underwater robotics such as scientific exploration and military use.
		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">DETAILS</p>
		<p>
		<b> Date:</b> 30th - 31st December 2017<br>

		<br><b>Duration:</b>  2 Days [8 hrs per day]<br>

		<br><b>Venue:</b> IIT Bombay <br>

		<br><b>Cost of Workshop:</b>₹ 7,000/- per team<br>

		<br>Team can consist of maximum 4 members <br>
		<br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTENT</p>
		<p>

					<b>Topics to be covered on day – 1</b><br><br>

					Underwater Robotics – Basics and why is it different?<ul>
					<li>What is already in place</li>
					<li>Types of underwater robot</li>
					<li>Application of underwater robotics</li>
					<li>What can you do in the future</li></ul>
					Time: 1 hour<br><br>

					Maneuvering of Underwater/Surface water vehicles:<ul>
					<li>Conventional thruster based System</li>
					<li>Surface water locomotion</li>
					<li>The all thruster Models</li>
					<li>Fin Rudder Models</li>
					<li>Bio-mimic mechanisms</li></ul>
					Time: 1.5 hour<br><br>

					Understanding the underwater Sensing System:<ul>
					<li>Depth Sensors and Altitude sensors</li>
					<li>Sonar (side scan sonar, over look sonar )</li>
					<li>Acoustic Ranging (USBL,SSBL,SBL,LBL)</li>
					<li>GPS for surface water vehicles</li>

					<li>Compass and IMU</li>
					<li>Accelerometers and Gyroscopes</li>
					<li>Underwater cameras</li></ul>
					Time: 1.5 hour<br><br>

					Fabrication of a Remotely Operated Vehicle (ROV) using the kit provided<ul>
					<li>Open loop Behavior can be tested in the water tank</li>
					<li>Understanding of Degree of Freedom of vehicle</li></ul>
					Time: 2 hours<br><br>

					Discussion on the topics covered<br>
					Time: 1 hours<br><br>




					<b>Topics to be covered on day-2</b><br><br>

					Application of sensors to develop different kind of abilities for vehicles<ul>
					<li>Station-keeping</li>
					<li>Depth-only keeping</li>
					<li>Obstacle avoidance</li>
					<li>Towing arrays</li>
					<li>Acting as surface beacon for communication</li>
					<li>Survey Vehicle (Remember discovery of titanic wreck?)
	</li></ul>				Time: 1.5 hours<br><br>

					Modeling of System<ul>
					<li>Understanding the Importance of Hydrodynamics</li>
					<li>Modeling the vehicle for control
	</li></ul>				Time: 0.5 hours<br><br>

					Control and Navigation<ul>
					<li>Remotely Operated control.</li>
					<li>Autonomous Navigation using feedback control.</li>
					<li>Various kinds of Autopilot.</li>
					<li>Dynamic Positioning of Vehicle.</li>
					<li>Online system identification.</li></ul>
					Time: 2 hours<br><br>

					The Development on the kit and the testing in the tank<ul>
					<li>Develop mission deployment plan and program the vehicle to do that - Dead reckoning.</li>
					<li>Depth keeping deployment.</li></ul>
					Time: 4 hours<br><br>

				<br>For detailed course content, kindly <a href="/resource/workshop/UnderwaterRobotics.pdf">Click here</a>.
                
		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">RULES</p>
		<p>
			<b>Eligibility :   </b> 
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>	
     		<br>Participants will have to register in a team with maximum of four members in it. <br>
			<br><b>Prerequisites :</b>
			<br>Each participant should bring one laptop with CD-ROM drive and a working laptop Webcam preferably with Windows 8 OS or above (No VISTA).<br>
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-12">
			<p>Harsh Sharma<br>
				harsh@techfest.org<br>
				+91 9407268415<br></p>
		</div>
		<div class="col-sm-2"></div>
		<!-- <div class="col-sm-5">
			<p>harsh Kala<br>
 			Events Manager <br>
			harsh@techfest.org<br>
			+91 9407268415
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
							<a href="/resource/workshop/UnderwaterRobotics.pdf" target="_blank">
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
			<p class="prizes">Date:<br> 30th - 31st December 2017</p>
		</div>
	</div>
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi">   
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">CLOSED ! </a>
							</p>
							<a id="compi02" href="#">
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
	
	<h4 id="heading" class="heading"> Underwater Robotics </h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
				<p style="color: yellow">Date: 30th-31st December 2017<br>
      Venue: LC 201<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p>
			This is an emerging science, which has become more popular with evolving technology. There are many applications of underwater robotics such as scientific exploration and military use.
			</p>
		</div>

		<div class="child">
			<p class="headMobile">DETAILS</p>
			<p class="contentMobile">
				<br><b> Date:</b> 30th - 31st December 2017<br>

				<br><b>Duration:</b>  2 Days [8 hrs per day]<br>

				<br><b>Venue:</b> IIT Bombay <br>

				<br><b>Cost of Workshop:</b>₹ 7,000/- per team<br>

				<br>Team can consist of maximum 4 members <br>
			<br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
			</p>
		</div>


		<div class="child">
			<p class="headMobile">CONTENT</p>
			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
						
<b>Topics to be covered on day – 1</b><br><br>

					Underwater Robotics – Basics and why is it different?<ul>
					<li>What is already in place</li>
					<li>Types of underwater robot</li>
					<li>Application of underwater robotics</li>
					<li>What can you do in the future</li></ul>
					Time: 1 hour<br><br>

					Maneuvering of Underwater/Surface water vehicles:<ul>
					<li>Conventional thruster based System</li>
					<li>Surface water locomotion</li>
					<li>The all thruster Models</li>
					<li>Fin Rudder Models</li>
					<li>Bio-mimic mechanisms</li></ul>
					Time: 1.5 hour<br><br>

					Understanding the underwater Sensing System:<ul>
					<li>Depth Sensors and Altitude sensors</li>
					<li>Sonar (side scan sonar, over look sonar )</li>
					<li>Acoustic Ranging (USBL,SSBL,SBL,LBL)</li>
					<li>GPS for surface water vehicles</li>

					<li>Compass and IMU</li>
					<li>Accelerometers and Gyroscopes</li>
					<li>Underwater cameras</li></ul>
					Time: 1.5 hour<br><br>

					Fabrication of a Remotely Operated Vehicle (ROV) using the kit provided<ul>
					<li>Open loop Behavior can be tested in the water tank</li>
					<li>Understanding of Degree of Freedom of vehicle</li></ul>
					Time: 2 hours<br><br>

					Discussion on the topics covered<br>
					Time: 1 hours<br><br>




					<b>Topics to be covered on day-2</b><br><br>

					Application of sensors to develop different kind of abilities for vehicles<ul>
					<li>Station-keeping</li>
					<li>Depth-only keeping</li>
					<li>Obstacle avoidance</li>
					<li>Towing arrays</li>
					<li>Acting as surface beacon for communication</li>
					<li>Survey Vehicle (Remember discovery of titanic wreck?)
	</li></ul>				Time: 1.5 hours<br><br>

					Modeling of System<ul>
					<li>Understanding the Importance of Hydrodynamics</li>
					<li>Modeling the vehicle for control
	</li></ul>				Time: 0.5 hours<br><br>

					Control and Navigation<ul>
					<li>Remotely Operated control.</li>
					<li>Autonomous Navigation using feedback control.</li>
					<li>Various kinds of Autopilot.</li>
					<li>Dynamic Positioning of Vehicle.</li>
					<li>Online system identification.</li></ul>
					Time: 2 hours<br><br>

					The Development on the kit and the testing in the tank<ul>
					<li>Develop mission deployment plan and program the vehicle to do that - Dead reckoning.</li>
					<li>Depth keeping deployment.</li></ul>
					Time: 4 hours<br><br>
				<br>For detailed course content, kindly <a href="/resource/workshop/UnderwaterRobotics.pdf">Click here</a>.
                </ul>
			</p>
		</div>

		<div class="child">
			<p class="headMobile">RULES</p>

			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
				<b>Eligibility :   </b> 
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>	
     		<br>Participants will have to register in a team with maximum of four members in it. <br>
			<br><b>Prerequisites :</b>
			<br>Each participant should bring one laptop with CD-ROM drive and a working laptop Webcam preferably with Windows 8 OS or above (No VISTA). <br>
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
             </ul>
			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
				Harsh Sharma</a><br>
				
				harsh@techfest.org<br>
				+91 9407268415<br>
				</div>
				<!-- <div class="row" style="margin: 5vh;">
				harsh Kala<br>
				Events Manager<br>
				harsh@techfest.org<br>
				+91 9407268415<br>
				</div> -->
			</div>
		</div>

		<div class="child">
			Div Six
		</div>
	
</div>







			<div class="psMobi">
			<!-- <hr style="width:93%">	 		 -->
			<a href="#" style="color:white;"><b>Date: 30th - 31st December 2017</b></a>
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
					margin-top: 1.5rem;">CLOSED !</p>
					<a id="compi02" href="#">
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

	window.location.href="/resource/workshop/UnderwaterRobotics.pdf";
    // document.getElementById("myNav").style.width = "0%";
    // con[0].style.display="none";
    // con[1].style.display="none";
    // con[2].style.display="none";
    // con[3].style.display="none";
    // con[4].style.display="block";
    // con[5].style.display="none";
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