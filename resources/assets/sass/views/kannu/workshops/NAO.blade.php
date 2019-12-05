@extends('kannu.topLayer')

@section('title','NAO Robot Programming | Workshops ')
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
	letter-spacing: 3px;color: #fefefe" id="abhinav">NAO Robot Programming </h4>
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
		<p style="color: yellow">Date: 30th December 2017<br>
      Venue: LT 202<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p>	
		<p>
	      Learn and Interact with the famous NAO robot by Softbank. Connect with NAO, upgrade its movements and unlock all its capacities to do various tasks.
		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">DETAILS</p>
		<p>
		<b> Date:</b> 30th December 2017<br>

		<br><b>Duration:</b>  1 Day [8 hours workshop]<br>

		<br><b>Venue:</b> IIT Bombay <br>

		<br><b>Cost of Workshop:</b><br>₹ 1,300/- per team<br>

		<br>Team can consist of maximum 1 member<br>
		<br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTENT</p>
		<p>
			<p style="font-size: 120%"><b>Session One</b></p>

					<b>Introduction</b>
					<ul>
					<li>Presentation of participants and projects</li>
					<li>Introduction and Installation to the software suite:<br>
					 Choregraphe, Monitor, Webots for NAO, APIs and NAOqi, Webpage, documentation and Users website</li>
					 
					 <b>Overview of the Hardware</b>
					<li>Sensor and Actuatorf</li>
					<li>Hardare Architecture</li>
					<!-- <li>Present case studies from different application domains.</li> -->
</ul><br>	
					<b>First step with NAO:</b>
					<ul>
					<li>Connect NAO and use the webpage.</li>
					<li>How to update the BOT and Software.</li>
					<li>Flow diagram, 3D view, stiffness and behavior manager </li>
					<!-- <li></li> -->
				</ul><br>

					<b>Overview of the software SUITE</b><br>
					Overview of Choregraphe and Monitor
					<ul>
					<li>Overview of Aldebaran box library(move, talk, hear, see) and create new boxes, inputs and outputs
					<ul>
						<li>Create and edit a movement using a timeline with the record and motor curve features</li>
						<li>Use NAO's capacities, Vision processing, text to speech, voice recognition and Inertial board </li>
						<li>Create new boxed and add them to the library.</li>
						<li>Understand Logs for debug</li>
						<li>Include files in project content</li>
						<li>Create python script outside Choregraphe using existing APIs</li>
						<li>Understand memory reader</li>
					</ul>
					</li>
					</ul>

					<p style="font-size: 120%"> <b>Phase Two</b></p>
					<ul>
					<b>Program with python and Choregraphe</b>

						<li>Python introduction with NAO</li>
						<li>Structure of a Choregraphe box in python</li>
						<li>Hello World example and the API documentation</li>
						<li>Use loops and conditions inside the script boxes.</li>
					</ul>
						<!-- </li>
					<li></li>
					<li>Engineers / Researchers from Industry</li>
				</ul><br>
					<b>Prerequisites</b>
					<ul>
					<li>Basic programming knowledge</li>
					<li>Laptops wifi connectivity to access the supercomputing cluster</li></ul><br>

					<b>Topics to be covered in the workshop :</b>
					<ul>
					<li>History and fundamentals</li>
					<li>Present and boom</li>
					<li>Future and pursue</li>
					<li>Technology and programming models</li>
					<li>Hands­-on</li>
					<li>Supercomputer access</li>
					<li>Application I</li>
					<li>Application II</li>
					<li>HPC tools</li>
					<li>Performance optimization</li>
					<li>Application III</li>
					<li>Application IV</li>
					<li>Facts and updates</li>
					<li>Supercomputer 101</li>
					<li>Access and environment setup</li>
				</ul><br>
 -->
					Note:​ The schedule and topics are standard and tentative, will be revised and updated if necessary. Software stack for hands-on session would be provided. Exam and assignments are part of the training and would be conducted during or after the workshop. HPC hardware access for hands-on session would be provided.
<br>

				<br>For detailed course content, kindly <a href="/resource/workshop/NAO.pdf">Click here</a>.
                
		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">RULES</p>
		<p>
			<b>Eligibility :   </b> 
            <br>Participants having a valid ID card of their respective educational institutions are eligible for the workshop. <br>

            <br><b>Team specifications  :</b>	
     		<br>Participants will have to register in a team with maximum of one members in it. <br>
			<br><b>Prerequisites :</b>
			<br>Basic programming knowledge, Laptops wifi connectivity to access the supercomputing cluster. Each participant should bring one laptop and a dongle/Jio with them.<br>
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-12">
			<p>Anantshree<br>
				anantshree@techfest.org<br>
				+91 9867654091<br></p>
		</div>
		<div class="col-sm-2"></div>
		<!-- <div class="col-sm-5">
			<p>shubham Kala<br>
 			Events Manager <br>
			shubham@techfest.org<br>
			+91 8003473030
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
							<a href="/resource/workshop/NAO.pdf" target="_blank">
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
			<p class="prizes">Date:<br> 30th December 2017 </p>
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
	
	<h4 id="heading" class="heading">NAO Robot Computing </h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
				<p style="color: yellow">Date: 30th December 2017<br>
      Venue: LT 202<br>
      Reporting Time: 8am<br>
    Time: 9am-5pm</p>	
			Learn and Interact with the famous NAO robot by Softbank. Connect with NAO, upgrade its movements and unlock all its capacities to do various tasks.
			</p>
		</div>

		<div class="child">
			<p class="headMobile">DETAILS</p>
			<p class="contentMobile" style="text-align: center;">
				<br><b> Date:</b> 30th December 2017<br>

				<br><b>Duration:</b>  1 Day [8 hours workshop]<br>

				<br><b>Venue:</b> IIT Bombay <br>

				<br><b>Cost of Workshop:</b><br>₹ 1,300/- per team<br>

				<br>Team can consist of maximum 1 member <br>
				<br><b>Refund Deadline:</b> 1st November 2017, No Refunds will be entertained after the Deadline.<br>
		        <br><b>**Limited number of seats</b><br>
<br><b>**If the Workshop gets cancelled, all the participants will be given full refund, irrespective of the Deadline.</b><br>
			</p>
		</div>


		<div class="child">
			<p class="headMobile">CONTENT</p>
			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
						
<<b>Objectives</b>
					<ul>
					<li>Tools and techniques based on the latest available HPC platforms</li>
					<li>Enable participants to quickly get started with writing their high performance codes</li>
					<li>Provide hands­-on experience in parallel programming. These special sessions will provide the rich hands­-on experience with various languages and tools covered in the lectures.</li>

					<li>They comprise a brief introduction to the programming assignments, followed by
					independent work periods. To help with the assignments, teaching assistants will be
					available in person and via the web.</li>
					<li>Present case studies from different application domains.</li>
</ul><br>
					<b>By the end of the workshop, participants will:</b>
					<ul>
					<li>Be exposed to computational thinking skills for accelerating applications in science and engineering.</li>
					<li>Understand the most important architectural performance considerations for developing parallel applications.</li>
					<li>Be able to design algorithms that are appropriate for accelerators.</li>
					<li>Engage computing accelerators on science and engineering breakthroughs.</li>
				</ul><br>

					<b>Target audience</b><br>
					Anyone who want to learn developing exciting applications for parallel processors, as well as those who want to develop programming tools and future implementations for these processors:
					<ul>
					<li>Students, Faculty and Researchers from Academic Institutes</li>
					<li>Researchers from Govt. Research Organizations</li>
					<li>Engineers / Researchers from Industry</li>
				</ul><br>
					<b>Prerequisites</b>
					<ul>
					<li>Basic programming knowledge</li>
					<li>Laptops wifi connectivity to access the supercomputing cluster</li></ul><br>

					<b>Topics to be covered in the workshop :</b>
					<ul>
					<li>History and fundamentals</li>
					<li>Present and boom</li>
					<li>Future and pursue</li>
					<li>Technology and programming models</li>
					<li>Hands­-on</li>
					<li>Supercomputer access</li>
					<li>Application I</li>
					<li>Application II</li>
					<li>HPC tools</li>
					<li>Performance optimization</li>
					<li>Application III</li>
					<li>Application IV</li>
					<li>Facts and updates</li>
					<li>Supercomputer 101</li>
					<li>Access and environment setup</li>
				</ul><br>

					Note:​ The schedule and topics are standard and tentative, will be revised and updated if necessary. Software stack for hands-on session would be provided. Exam and assignments are part of the training and would be conducted during or after the workshop. HPC hardware access for hands-on session would be provided.
<br>

				<br>For detailed course content, kindly <a href="/resource/workshop/NAO.pdf">Click here</a>.
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
     		<br>Participants will have to register in a team with maximum of one members in it. <br>
			<br><b>Prerequisites :</b>
			<br>Basic programming knowledge Laptops wifi connectivity to access the supercomputing cluster. Each participant should bring one laptop and a dongle/Jio with them.<br>
			<br><b>Certificate criterion :</b>
            <br>Participants should be present in all the sessions. Failing this, no certificate will be awarded to the participant.<br>
             </ul>
			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
				Anantshree<br>
				anantshree@techfest.org<br>
				+91 9867654091<br>
				</div>
				<!-- <div class="row" style="margin: 5vh;">
				shubham Kala<br>
				Events Manager<br>
				shubham@techfest.org<br>
				+91 8003473030<br>
				</div> -->
			</div>
		</div>

		<div class="child">
			Div Six
		</div>
	
</div>







			<div class="psMobi">
			<!-- <hr style="width:93%">	 		 -->
			<a href="#" style="color:white;"><b>Date: 30th December </b></a>
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

	window.location.href="/resource/workshop/NAO.pdf";
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