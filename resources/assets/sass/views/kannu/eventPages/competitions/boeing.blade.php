@extends('kannu.topLayer')

@section('title','Boeing National Aeromodelling Competition | Competitions ')




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

</style>


@endsection
 
@section('centerOne')



<!-- center element left section for laptop compleate -->
<div style="" class="contentLaptop">
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="max-width: 107%;">
	<img src="https://techfest.org/img/sponsors/18/Boeing.jpg" style="height: 99px !important ;position: fixed;top: 34vh;right: 27vw;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 3vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">Boeing National Aeromodelling Competition</h4>
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
		<p>
		This competition is launched with the vision to provide a unified national platform for students interested in aerospace and related engineering disciplines - to demonstrate their aero-modeling expertise.
		<br><br>
		Date: 29th and 30th December 2017

		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TASK</p>
		<p>
		The competition requires the participants to design and fabricate a RC plane (ready made Planes are not allowed) and perform a set of maneuvers.
		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">Rules & Abstract</p>
		<p>
		<b>General Guidelines for the Competition</b> <br> <br>
1.	The use of 2.4 GHz radio is required for all aircraft competing in the competition. If the participants want to use any other frequency, they will have to inform the organizers in advance.<br>
2.	A limited number of 2.4 GHz radios will be available with the organizers for use by the teams. Teams who do not have access to radios can inform the organizers in advance to request use of these radios.<br>
3.	Receivers installed in the aircraft have to be in 'receiver mode only'.<br>
4.	All the systems (Servos, motor, etc.) will be checked by organizers for functionality before the competition. If found not working, teams will be dismissed from the competition.<br>
5.	Pilot can position himself at any point in the arena to fly the aircraft during the rounds.<br>
6.	Metal propellers are not allowed.<br>
7.	The models can have powered take-off with a landing gear or can be launched manually by a person standing at ground level.<br>
8.	Plane should be built from scratch and not purchased models.<br>
9.	A team member can’t be a part of more than one team.<br>
10.	Teams can participate in more than one zonal event if they are not qualified for the finals already.<br>

11.	Teams that claimed reimbursement in one zonal event cannot claim in any other zonal event in case they are participating in more than one zonal event.<br>
12.	New members cannot be added to the teams who have been selected at Zonals to reach the Final Round.<br>
13.	Bring your college/student I-Card at the time of competition.<br>
14.	Any of the above mentioned rules, if found violated, teams would not be allowed to participate in the competition.<br>
<b>15.	Decision Taken by Judges and Organizers will be final and binding for all.</b><br>

<b>Abstract Submission</b> <br><br>
1.	All the participants need to submit an abstract to boeing@techfest.org on their aircraft, which should be no longer than 15 pages (A4 size 1.5 line spacing) with standard formatting. The Abstract must document the basic design of the aircraft (dimensions, wing areas, velocity, etc.) and should also explain how their design is suitable for given problem.<br>
2.	Along with the abstract, Participants also have to send a zip file containing at-least 5 and no more than 10 photographs of the aircraft while it is being built.<br>
3.	The Abstract has to be submitted as per the standard format(you can download the standard format from the respective IIT websites).<br>
4.	The Abstract has to be submitted to the respective Zonal competition 20 days in advance of the Zonal event date. E.g. For a Zonal happening on the 4th of January, the Abstract deadline is the 15th of December and so on.<br>
5.	The Abstract and the zip file containing the photographs for teams participating in IIT-Bombay Zonal round have to be sent by email to boeing@techfest.org with the team details clearly mentioned in the email. The Team ID should be explicitly mentioned in the email subject as well as the filename for both Abstract and zip file.<br>


		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">FAQs</p>
		<p>
		<b>Who can participate ?</b><br>
Anyone having a valid student ID card of their college or university is eligible to participate in this competition 
<br><br>
<b>How to register ?</b><br> Please follow this process:- www.techfest.org -> Competitions -> Aerostrike -> Boeing National Aeromodelling Competition -> Register 
<br><br>
<b>How many persons can be there in one team?</b><br>
One team can have maximum 4 members. 
<br><br>
<b>Can a team have person from different colleges? </b><br>
Yes.
 <br><br>
<b>What should I do if I want to change my team member? </b><br>
The participants who wish to change their team member will have to register once again with the details about their new team member, the new team formed will be provided with a different team id.
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-5">
			<p>Fazal Ahmad<br>
				Competitions Coordinator<br>
				+91 8454945021<br></p>
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-5">
			Rushikesh Bankar<br>
				Competitions Coordinator<br>
				+91 7021482393<br>
		</div>
	</div>	

<div style="height:2vh;"></div>
</div>




<div class="row comeon" style="position:relative; left:10vh;">
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					<a  id="compi01" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;margin-top:3%;" >
								Problem Statement
							</p>
							<a href="resource/boeing.pdf" target="_blank">
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
			<p class="prizes">Prizes worth<br>INR 2,40,000/-</p>
		</div>
	</div>
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi">   
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">CLOSED !</a>
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
	
	<h4 id="heading" class="heading">Boeing National Aeromodelling Competition</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
				This competition is launched with the vision to provide a unified national platform for students interested in aerospace and related engineering disciplines - to demonstrate their aero-modeling expertise
				<br><br>
		Date: 29th and 30th December 2017
			</p>
		</div>

		<div class="child">
			<p class="headMobile">TASK</p>
			<p class="contentMobile">
					The competition requires the participants to design and fabricate a RC plane (ready made Planes are not allowed) and perform a set of maneuvers.
			</p>
		</div>


		<div class="child">
			<p class="headMobile">FAQs</p>
			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
					<b>Who can participate ?</b><br>
Anyone having a valid student ID card of their college or university is eligible to participate in this competition 
<br><br>
<b>How to register ?</b><br> Please follow this process:- www.techfest.org -> Competitions -> Aerostrike -> Boeing National Aeromodelling Competition -> Register 
<br><br>
<b>How many persons can be there in one team?</b><br>
One team can have maximum 4 members. 
<br><br>
<b>Can a team have person from different colleges? </b><br>
Yes.
 <br><br>
<b>What should I do if I want to change my team member? </b><br>
The participants who wish to change their team member will have to register once again with the details about their new team member, the new team formed will be provided with a different team id.
				   
				</ul>

			</p>
		</div>

		<div class="child">
			<p class="headMobile">ABSTRACT</p>

			<p>
				<ul class="contentMobile"> 
				<b>General Guidelines for the Competition</b> <br> <br>
1.	The use of 2.4 GHz radio is required for all aircraft competing in the competition. If the participants want to use any other frequency, they will have to inform the organizers in advance.<br>
2.	A limited number of 2.4 GHz radios will be available with the organizers for use by the teams. Teams who do not have access to radios can inform the organizers in advance to request use of these radios.<br>
3.	Receivers installed in the aircraft have to be in 'receiver mode only'.<br>
4.	All the systems (Servos, motor, etc.) will be checked by organizers for functionality before the competition. If found not working, teams will be dismissed from the competition.<br>
5.	Pilot can position himself at any point in the arena to fly the aircraft during the rounds.<br>
6.	Metal propellers are not allowed.<br>
7.	The models can have powered take-off with a landing gear or can be launched manually by a person standing at ground level.<br>
8.	Plane should be built from scratch and not purchased models.<br>
9.	A team member can’t be a part of more than one team.<br>
10.	Teams can participate in more than one zonal event if they are not qualified for the finals already.<br>

11.	Teams that claimed reimbursement in one zonal event cannot claim in any other zonal event in case they are participating in more than one zonal event.<br>
12.	New members cannot be added to the teams who have been selected at Zonals to reach the Final Round.<br>
13.	Bring your college/student I-Card at the time of competition.<br>
14.	Any of the above mentioned rules, if found violated, teams would not be allowed to participate in the competition.<br>
<b>15.	Decision Taken by Judges and Organizers will be final and binding for all.</b><br>

<b>Abstract Submission</b> <br><br>
1.	All the participants need to submit an abstract to boeing@techfest.org on their aircraft, which should be no longer than 15 pages (A4 size 1.5 line spacing) with standard formatting. The Abstract must document the basic design of the aircraft (dimensions, wing areas, velocity, etc.) and should also explain how their design is suitable for given problem.<br>
2.	Along with the abstract, Participants also have to send a zip file containing at-least 5 and no more than 10 photographs of the aircraft while it is being built.<br>
3.	The Abstract has to be submitted as per the standard format(you can download the standard format from the respective IIT websites).<br>
4.	The Abstract has to be submitted to the respective Zonal competition 20 days in advance of the Zonal event date. E.g. For a Zonal happening on the 4th of January, the Abstract deadline is the 15th of December and so on.<br>
5.	The Abstract and the zip file containing the photographs for teams participating in IIT-Bombay Zonal round have to be sent by email to boeing@techfest.org with the team details clearly mentioned in the email. The Team ID should be explicitly mentioned in the email subject as well as the filename for both Abstract and zip file.<br>				</ul>

			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					<br>
				Fazal Ahmad<br>
				Competitions Coordinator<br>
				+91 8454945021<br>
				</div>
				<div class="row" style="margin: 5vh;text-align: center;">
				Rushikesh Bankar<br>
				Competitions Coordinator<br>
				+91 7021482393
				</div>
			</div>
		</div>

		<div class="child">
			Div Six
		</div>
	
</div>







			<div class="psMobi">
			<!-- <hr style="width:93%">	 		 -->
			<a href="#" style="color:white;"><b>Prizes Worth INR 2,40,000</b></a>
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
    <a href="#" onclick="closeNav(2)">Task</a>
    <a href="#" onclick="closeNav(6)">PROBLEM STATEMENT</a>
    <a href="#" onclick="closeNav(3)">FAQs</a>
    <a href="#" onclick="closeNav(4)">RULES</a>
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

	window.location.href="resource/boeing.pdf";
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
				<p class="yo" id="yo-1">TASK</p>
				<div class="bro" id="bro-1" ></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(2)">
				<p class="yo" id="yo-2">RULES</p>
				<div class="bro" id="bro-2"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(3)">
				<p class="yo" id="yo-3">FAQs</p>
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