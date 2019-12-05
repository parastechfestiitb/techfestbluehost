@extends('kannu.topLayer')

@section('title','Automobiles Workshop | Workshops ')




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
	letter-spacing: 3px;color: #fefefe" id="abhinav">Automobiles Workshop</h4>
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
		<div class="row">
			<div class="col-sm-6"><p style="color: yellow">
		SLOT 1:<br>
		Date: 28th-29th December 2017<br>
      Venue: LA302<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p></div>
			<div class="col-sm-6"><p style="color: yellow">
		SLOT 2:<br>
		Date: 30th-31st December 2017<br>
      Venue: LA102<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p></div>
		</div>
		
		<p>
		Few things have captured the passion, the sometimes obsession, of men like the car. There’s no mystery as to why this is. Cars represent a peculiar combination of several manly elements: danger, speed, singular focus, solitude, mechanics, noise, and physical skill.
		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">DETAILS</p>
		<p>
		<b> Date:</b> 28-29th December 2017<br>

		<br><b>Duration:</b>  2 Days [8 hrs per day]<br>

		<br><b>Venue:</b> IIT Bombay <br>

		<br><b>Cost of Workshop:</b>₹ 2,000/- per person<br>
        <br><b>No. of Team Members: </b> 1<br>
       <br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTENT</p>
		<p>
			Session 1: Automobile & Designing Session<br>
			(Expected Session Duration: 1.5- 2.0 hours with Presentations, Demonstrations etc)<br>
			<ul>
			 <li>Introduction to Automobile Mechanics
			<li> Locomotive Vehicles
			 <li>Chassis design
</ul>
			Brief terminology
			1. <li>Multipoint Strut Bar
			2. <li>Fenderbar
			3. <li>Anti Roll Bar
			4.<li> Monocoque
			5. <li>Tubular Space
			6.<li> Longeron RH,LH

			Types of chassis
			1. <li>Ladder Frame Chassis
			2. <li>Tubular Space Frame Chassis
			3. <li>Monocoque Frame Chassis
			4.<li> Ulsab Monocoque
			5.<li> Backbone Frame Chassis
			6. <li>Aluminium Space Frame
			7. <li>Carbon Fibre Monocoque

			Session 2: Suspension Session<br>
			(Expected Session Duration: 1.5- 2.5 hours with Presentations, Demonstrations etc)

			Suspension Unit
			Brief terminology
			1. <li>Weight transfer sprung and unsprung)
			2. <li>Jacking forces
			3.<li> Camber and caster angle
			4. <li>Anti dive & anti squat
			5. <li>Spring Rate
			6. <li>Travel

			Types of suspensions
			1. <li>Dependent suspension
			2. <li>Independent suspension

			Front Independent Suspensions
			1. <li>McPherson Strut
			2. <li>Double wishbone
			3.<li> Coil Spring type1
			4.<li> Coil spring type2
			5. <li>Multi link type
			6. <li>Trailing arm suspension
			7. <li>I beam suspension

			Rear suspension - dependant systems
			1. <li>Solid-axle, leaf-spring
			2. <li>Solid-axle, coil-spring
			3. <li>Beam Axle

			Hydragas Suspension
			Hydropneumatic Suspension
			Progressively wound springs
			Torsion bars

			Session 3: Braking Unit Session<br>
			(Expected Session Duration: 1- 1.5 hours with Presentations, Demonstrations etc)
			Braking Unit
			Disc brakes
			1. Self adjusting nature
			2. Disc damage modes
			3. Servicing your disc

			Drum brakes
			Anti-lock braking system
			1. Four-channel, four-sensor ABS
			2. Three-channel, three-sensor ABS
			3. One-channel, one-sensor ABS

			Brake Actuators
			1. Cable-operated
			2. Solid bar connection
			3. Single-circuit hydraulic
			4. Dual-circuit hydraulic
			5. Brake-by-wire

			Session 4: Transmission Session<br>
			(Expected Session Duration: 2- 2.5 hours with Presentations, Demonstrations etc)
			Transmission system
			Manual transmission
			1. Gear ratio
			2. Different types of gear
			3. Clutch & its components
			4. Reverse & its working

			Automatic transmission
			1. Planetry gearsets
			2. DSG / DCT Gearboxes

			Torque Converters

			1. Semi automatic Transmission
			2. Continuously variable transmission
			Session 5: Differential & Traction Session<br>
			(Expected Session Duration: 2- 2.5 hours with Presentations, Demonstrations etc)
			Differentials
			Differentials
			Open Differentials
			Limited-slip differentials
			Locking differentials
			2WD, 4WD, AWD
			Tyres and Traction Control
			Tyre size notations
			Tyre types for passenger cars
			Tyre constructions
			Cross-ply construction
			Radial construction
			Tyre tread
			Traction & its control
			Demonstration on
			Bike Engine Dis-Assembling / Re assembling

			Session 6: IC Engine Session<br>
			(Expected Session Duration: 3- 3.5 hours with Presentations, Demonstrations etc)
			IC Engines

			Types
			• Compression ignition
			• Spark ignition

			Layout
			Engine balancing
			Spark plug
			Carburettor
			Fuel injector
			Valves & valve timing
			Valve trains
			Engine cooling
			Turbochargers
			Superchargers
			Air/Fuel ratios
			Wankel Engine (6 stroke)

			Session 7: Electronics & Safety Session<br>
			(Expected Session Duration: 1 – 1.5 hours)
			Engine Sensors
			Microcontrollers and applicable sensors
			Electronics Usage and Feedbacking for vehicle analysis and control
			Airbag System
			Seat Belt System



<br>For more detail Content <a href="/resource/workshop/AutomobileMechanics.pdf">Click Here</a>
		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">RULES</p>
		<p>
			<b>Eligibility :   </b> 
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>	
     		<br>Participants will have to register individually. <br>
			<!-- <br><b>Prerequisites :</b>
			<br>Each participant should bring one laptop with CD-ROM drive and a working laptop Webcam preferably with Windows 8 OS or earlier (No VISTA).  <br> -->
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-12">
			<p>Rishi Jain<br>
					rishi@techfest.org<br>
					+91 9930652916<br>
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




<div class="row comeon" style="position:relative; left:10vh;bottom: 20vh;">

<div class="col-sm-12 prize">
<p class="" style="width: 100%;color: white;">Slot 1: 28th-29st December, Slot 2: 30th-31st December</p>
</div>

	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					<a  id="compi01" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;" >
								     DETAILS
							</p>
							<a href="resource/workshop/AutomobileMechanics.pdf" target="_blank"> 
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
		<section class="demo-3" class="lapitopi">   
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">Close (Slot 1)</a>
							</p>
							<a id="compi02" href="/AutomobileMechanics"><!-- ============================================== -->
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
        <section class="demo-3" class="lapitopi">   
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">Register (Slot 2)</a>
							</p>
							<a id="compi02" href="#"><!-- ============================================== -->
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
	
	<h4 id="heading" class="heading">Automobiles Workshop</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>

			
			<p class="contentMobile">
				Few things have captured the passion, the sometimes obsession, of men like the car. There’s no mystery as to why this is. Cars represent a peculiar combination of several manly elements: danger, speed, singular focus, solitude, mechanics, noise, and physical skill.
			</p>
		</div>

		<div class="child">
			<p class="headMobile">DETAILS</p>
			<p class="contentMobile">
				<b> Date:</b> 28-29th December 2017<br>

				<br><b>Duration:</b>  2 Days [8 hrs per day]<br>

				<br><b>Venue:</b> IIT Bombay <br>

				<br><b>Cost of Workshop:</b>₹ 2,000/- per person<br>
		        <br><b>No. of Team Members: </b> 1<br>
		        <br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
		</div>


		<div class="child">
			<p class="headMobile">CONTENT</p>
			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
						Session 1: Automobile & Designing Session<br>
			(Expected Session Duration: 1.5- 2.0 hours with Presentations, Demonstrations etc)<br>
			<ul>
			 <li>Introduction to Automobile Mechanics
			<li> Locomotive Vehicles
			 <li>Chassis design
</ul>
			Brief terminology
			1. <li>Multipoint Strut Bar
			2. <li>Fenderbar
			3. <li>Anti Roll Bar
			4.<li> Monocoque
			5. <li>Tubular Space
			6.<li> Longeron RH,LH

			Types of chassis
			1. <li>Ladder Frame Chassis
			2. <li>Tubular Space Frame Chassis
			3. <li>Monocoque Frame Chassis
			4.<li> Ulsab Monocoque
			5.<li> Backbone Frame Chassis
			6. <li>Aluminium Space Frame
			7. <li>Carbon Fibre Monocoque

			Session 2: Suspension Session<br>
			(Expected Session Duration: 1.5- 2.5 hours with Presentations, Demonstrations etc)

			Suspension Unit
			Brief terminology
			1. <li>Weight transfer sprung and unsprung)
			2. <li>Jacking forces
			3.<li> Camber and caster angle
			4. <li>Anti dive & anti squat
			5. <li>Spring Rate
			6. <li>Travel

			Types of suspensions
			1. <li>Dependent suspension
			2. <li>Independent suspension

			Front Independent Suspensions
			1. <li>McPherson Strut
			2. <li>Double wishbone
			3.<li> Coil Spring type1
			4.<li> Coil spring type2
			5. <li>Multi link type
			6. <li>Trailing arm suspension
			7. <li>I beam suspension

			Rear suspension - dependant systems
			1. <li>Solid-axle, leaf-spring
			2. <li>Solid-axle, coil-spring
			3. <li>Beam Axle

			Hydragas Suspension
			Hydropneumatic Suspension
			Progressively wound springs
			Torsion bars

			Session 3: Braking Unit Session<br>
			(Expected Session Duration: 1- 1.5 hours with Presentations, Demonstrations etc)
			Braking Unit
			Disc brakes
			1. Self adjusting nature
			2. Disc damage modes
			3. Servicing your disc

			Drum brakes
			Anti-lock braking system
			1. Four-channel, four-sensor ABS
			2. Three-channel, three-sensor ABS
			3. One-channel, one-sensor ABS

			Brake Actuators
			1. Cable-operated
			2. Solid bar connection
			3. Single-circuit hydraulic
			4. Dual-circuit hydraulic
			5. Brake-by-wire

			Session 4: Transmission Session<br>
			(Expected Session Duration: 2- 2.5 hours with Presentations, Demonstrations etc)
			Transmission system
			Manual transmission
			1. Gear ratio
			2. Different types of gear
			3. Clutch & its components
			4. Reverse & its working

			Automatic transmission
			1. Planetry gearsets
			2. DSG / DCT Gearboxes

			Torque Converters

			1. Semi automatic Transmission
			2. Continuously variable transmission
			Session 5: Differential & Traction Session<br>
			(Expected Session Duration: 2- 2.5 hours with Presentations, Demonstrations etc)
			Differentials
			Differentials
			Open Differentials
			Limited-slip differentials
			Locking differentials
			2WD, 4WD, AWD
			Tyres and Traction Control
			Tyre size notations
			Tyre types for passenger cars
			Tyre constructions
			Cross-ply construction
			Radial construction
			Tyre tread
			Traction & its control
			Demonstration on
			Bike Engine Dis-Assembling / Re assembling

			Session 6: IC Engine Session<br>
			(Expected Session Duration: 3- 3.5 hours with Presentations, Demonstrations etc)
			IC Engines

			Types
			• Compression ignition
			• Spark ignition

			Layout
			Engine balancing
			Spark plug
			Carburettor
			Fuel injector
			Valves & valve timing
			Valve trains
			Engine cooling
			Turbochargers
			Superchargers
			Air/Fuel ratios
			Wankel Engine (6 stroke)

			Session 7: Electronics & Safety Session<br>
			(Expected Session Duration: 1 – 1.5 hours)
			Engine Sensors
			Microcontrollers and applicable sensors
			Electronics Usage and Feedbacking for vehicle analysis and control
			Airbag System
			Seat Belt System



<br>For more detail Content <a href="/resource/workshop/AutomobileMechanics.pdf">Click Here</a>
			</p>
		</div>

		<div class="child">
			<p class="headMobile">RULES</p>

			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
				<b>Eligibility :   </b> 
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>	
     		<br>Participants will have to register individually. <br>
			<!-- <br><b>Prerequisites :</b>
			<br>Each participant should bring one laptop with CD-ROM drive and a working laptop Webcam preferably with Windows 8 OS or earlier (No VISTA).  <br> -->
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
             </ul>
			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					Rishi Jain<br>
					rishi@techfest.org<br>
					+91 9930652916<br>
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
			<a href="#" style="color:white;"><b>Slot 1: 28-29th December (Closed)</b></a>
			<a href="#" style="color:white;"><b>Slot 2: 30-31th December (Closed)</b></a>
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
					margin-top: 1.5rem;">Details</p>
					<a id="compi02" href="resource/workshop/AutomobileMechanics.pdf"><!-- ============================================== -->
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
    <a href="#" onclick="closeNav(7)">Register <i style="color: white">(For Date 28-29st Dec)<sup>Closed !</sup></i></a>
    <a href="#" onclick="closeNav(6)">Register <i style="color: white">(For Date 30-31st Dec)<sup>Closed !</sup></i></a>
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

	if (argument== 7) {
	window.location.href="/AutomobileMechanics";              // ===================================================
   }

	if (argument== 6) {
	window.location.href="#";              // ===================================================
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