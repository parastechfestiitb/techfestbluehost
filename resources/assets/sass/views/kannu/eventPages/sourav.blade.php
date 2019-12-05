@extends('kannu.topLayer')

@section('title','Competitions')


@section('centerOne')
<!-- Modal for registration -->

<style type="text/css">
	#fiveL{
		font-size: 12px;
	}
	#fiveL:hover{
		font-size: 16px;
	}
	#fourL{
		font-size: 16px;
	}
	#fourL:hover{
		font-size: 20px;
	}
	.ring{
		transition: opacity 1s;
		-webkit-transition: opacity 1s;
		-moz-transition: opacity 1s;
	}
</style>

<!-- script for compi popup mobile -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.5/angular.min.js"></script>
<style type="text/css"> 
  .modal-dialog,.modal.right .modal-dialog {
    position: fixed;
    margin: auto;
    width: 60%;
    height: 100%;
    -webkit-transform: translate3d(0%, 0, 0);
        -ms-transform: translate3d(0%, 0, 0);
         -o-transform: translate3d(0%, 0, 0);
            transform: translate3d(0%, 0, 0);
  }

  .modal-content, .modal.right .modal-content {
    height: 100%;
    overflow-y: auto;
  }
  
  .modal-body, .modal.right .modal-body {
    padding: 15px 15px 80px;
  }

  .modal.right.fade .modal-dialog {
    right: -320px;
    -webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
       -moz-transition: opacity 0.3s linear, right 0.3s ease-out;
         -o-transition: opacity 0.3s linear, right 0.3s ease-out;
            transition: opacity 0.3s linear, right 0.3s ease-out;
  }
  
  .modal.right.fade.in .modal-dialog {
    right: 0;
  }

  .modal-content {
    border-radius: 0;
    border: none;
  }

  .modal-header {
    border-bottom-color: #EEEEEE;
    background-color: #FAFAFA;
  }

  #back:hover{
  	cursor: pointer;
  	font-size: 110%;
  }

</style> 

@section('styling')

.overlay-content{top:20%;}

@media (max-width: 62em) and (orientation: landscape){
.parent {
    height: 50%;
}

.grid{
	position: fixed;
    left: 60%;
}
#mobiPrize{
	<!-- font-size:3vh; -->
	text-align:center;
}
.hrMobi{width:96%;}
.overlay-content{top:15%;}
}

@endsection


  <!-- Modal -->


<!-- center element left section for laptop compleate -->
<div style="left:4.3vw;" class="contentLaptop">
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="width: 107%;">
	<div style="position: fixed;
    top: 26vh;
    left: 10vw;
    /*text-align: center;*/
    width: 40%;
	">

	<h4 style="font-family: 'pirulen';    font-size: 4rem;
	letter-spacing: 3px;color: #fefefe" id="abhinav">Competitions</h4>
	<hr style="margin-top: 0px;
	border: 1.5px solid #dafcff;
	-webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
-moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
">
	</div>
<!-- <div class="row" > -->
<div class="col-sm-5 centerLapi" style="position: fixed;
    top: 38vh;
    font-size: 2.5vh;
    left: 9vw;
    color: #fefefe;
    font-family: 'Play', sans-serif;
    height: 44vh;
    overflow: auto;
	">
		<div class="descriptions" id="kaushik0" style="display:block;position:absolute;">
			<p style="margin-top: 1.5vh;">
				Technology refers to the practical application of scientific knowledge and also includes the capability and skills required to apply the knowledge. Techfest presents a series of innovation challenges intended to deepen the understanding of advance solutions in the areas of Science and Technology. We invite you to melt your brains and think hard to aim for extremely mind bending competitions of this edition.
			</p>
		</div>
		<div class="descriptions" id="kaushik1" style="display:none;position:absolute;  height: 80%; overflow: auto;">
          <p style="font-size:25px;color:lightslategray;">
            CONTRIVANCE
          </p>
			<p>
				After been on planet Zion, Nova felt that technology there is far better than our planet, Earth.
He contacted Earth to tell about technological scenario on Zion. It’s time to bring such technologies to our planet, but geography of earth is way more complicated than that of Zion, so let’s contrive new earthly bots which would be able to sustain Earth’s sophisticated terrains filled with various obstacles. 
<p style="color: #f9c111;">
				1. FULL THROTTLE<br>
				2. Code The Game<br>
				3. Hilti Cadathon
			</p>
			</p>
		</div>
		<div class="descriptions" id="kaushik3" style="display:none;position:absolute;">
          <p style="font-size:25px;color:lightslategray;">
            INTERNATIONAL
          </p>
			<p>
				Techfest, marking its presence  all over the world aims to promote Science and Technology. Techfest provides an international platform to the tinkerers all over the world to prove their mettle. It gives you an opportunity to participate in some of the most versatile competitions where your knowledge crosses all the borders.
						<p style="color: #f9c111;">
				1. IRC<br>
				2. ROBOWARS<br>
				3. ICC
			</p>
			</p>
		</div>
		<div class="descriptions" id="kaushik2" style="display:none; position:absolute; height: 80%; overflow-x: hidden;">
          <p style="font-size:25px;color:lightslategray;">
            TECHNORION
          </p>
			<p>
				

				Techfest has been conducting various competitions as a part of National Outreach Program. This year, compete against students across the nation in the three competitions that will be held in four different cities of India. <br>

			<span style="color: #f9c111">Bhopal     : </span>     24th September | <i style="font-size: 80%">Oriental College of Technology</i><br>
			<span style="color: #f9c111">Hyderabad  : </span>  24th September | <i style="font-size: 80%;">Guru Nanak Institutions Technical Campus</i><br>
			<span style="color: #f9c111">     Jaipur: </span>      2nd October | <i style="font-size: 80%">Swami Keshvanand Institute of Technology </i>	<br>
			
			<!-- <span style="color: #f9c111">Bhubaneswar: </span>24th September<br> -->
			<span style="color: #f9c111">Mumbai     : </span>     24th September |<i style="font-size: 80%"> IIT Bombay</i><br>
			
		<br>It consists of:<br>
			
			
				1. Vise Clutch<br>
				2. MeshMerize<br>
				3. Enigma
			</p>
			</span>
		</div>
		<div class="descriptions" id="kaushik4" style="display:none;position:absolute;">
          <p style="font-size:25px;color:lightslategray;">
          Aerostrike 
          </p>
			<p>
				The man who listens to reason is lost. Reason enslaves all whose minds are not strong enough to master her. This time, you have got the opportunity to think beyond the usual barriers. Use your mettle and be the change you want to see in the world. Always remember, creative thinking inspires ideas and ideas in turn inspire change.
			</p>
		</div>
		<div class="descriptions" id="kaushik5" style="display:none;position:absolute;">

			<p>
				The Tata Pioneer’s Makerthon presents some exciting challenges in technology for the student community to solve. The goal is to ignite the pioneering spirit in students while giving an opportunity to be part of real life industrial problems that we are solving at Tata.
			</p>
			<p style="color: #f9c111;">
				1. TATA AUTOMATION CHALLENGE<br>
				2. TATA UAV CHALLENGE
			</p>
		</div>

		<div class="descriptions" id="kaushik6" style="display:none;position:absolute;">

			<p>
				The man who listens to reason is lost. Reason enslaves all whose minds are not strong enough to master her. This time, you have got the opportunity to think beyond the usual barriers. Use your mettle and be the change you want to see in the world. Always remember, creative thinking inspires ideas and ideas in turn inspire change.
			</p>
			<p style="color: #f9c111;">
				1. Boeing National Aeromodelling Competition<br>
				2. Op. Rahat
			</p>
		</div>


	</div>
	<div class="row" style="position: relative;bottom: 15vh;left: 7vw;font-size: 18px;">
		<div class="col-sm-3">
			<a id="back" style="display:none;position:relative;left:200%;text-decoration: none;" onclick="compibtn(0)"><p id="backp" style="color:#ededed;">BACK</p></a>
		</div>
		<div class="col-sm-3">
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-3">
		</div>
		<div class="col-sm-1">
		</div>
	</div>
</div>

<!-- center element left section for laptop compleate -->
<!-- center element left section for laptop compleate -->



<!-- center elements start for mobile -->


<div class="mobileCenter" style="opacity:1;filter:blur(0px);transition:all 0.3s linear;overflow-x;hidden;">

	<h4 id="heading" class="heading">COMPETITIONS</h4>

	<hr class="hrMobi">

<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="contentMobile" style="text-align: justify;
    text-justify: inter-word;">
				Technology refers to the practical application of scientific knowledge and also includes the capability and skills required to apply the knowledge.<br> Techfest presents a series of innovation challenges intended to deepen the understanding of advance solutions in the areas of Science and Technology. <br>We invite you to melt your brains and think hard to aim for extremely mind bending competitions of this edition.
			</p>
		</div>

		<div class="child">
			<div class="contentMobile" style="text-align:center;">
				<div class="row" style="margin: 5vh;">
					Himanshu Kala<br>
					himanshu@techfest.org<br>
					+91 8828290544<br>
				</div>
				<div class="row">
				Harsh Sharma<br>
				harsh@techfest.org<br>
				+91 9407268415<br>
				</div>
			</div>
		</div>

</div>



		<!-- <div class="child">
			<p class="contentMobile">
				Technology refers to the practical application of scientific knowledge and also includes the capability and skills required to apply the knowledge.<br> Techfest Presents a series of innovation challenges intended to deepen the understanding of advance solutions in the areas of Science and Technology. <br>We invite you to melt your brains and think hard to aim for extremely mind bending competitions of this edition.
			</p>
		</div> -->

		<!-- <div class="child">
			<p class="headMobile">TASK</p>
			<p class="contentMobile">
				Teams have to build an autonomous robot which can follow a white line and keep track of directions while going through the mesh. <br>The bot has to analyze the path in the dry run and has to go through the mesh from the start point to end point as mentioned in the arena in minimum time.

			</p>
		</div>
		<div class="child">
			<p class="headMobile">FAQs</p>
			<p>
				<ul class="contentMobile" style="text-align: left;">
					<li>
						Why should I participate in Mesh Flare ?
					</li>
					<p>The competition provides the participants with engineering design challenges, including components of mechanical, computer, control software, and system integration. Participants work together to design and build a robotic vehicle that can navigate on an obstacle-filled course without any human guidance or control</p>
					<li>
						 Who can participate ?
				    </li>
				    <p>Student from any college & university with a valid ID card.</p>

				    <li>
						 How to register ?
				    </li>
				    <p>Please follow this process:- www.techfest.org -> competitions -> TECHNORION -> Mesh-Merize -> Register</p>
				    <li>
						How many persons can be there in one team?
				    </li>
				    <p>One team can have maximum 4 members.</p>
				    <li>
						 Can a team have members from different colleges?
				    </li>
				    <p>Yes, Students from different college can form a team.
					</p>
				    <li>
						  Will any charging facility for our equipment be provided at the venue?
				    </li>
				    <p>Any kind of charging facility will not be provided to the participants at the venue.
					</p>
				    <li>
						What should I do if I want to change my team member?
				    </li>
				    <p>The participants who wish to change their team member will have to register once again with the details about their new team member, the new team formed will be provided with a different team id.
					</p>
				</ul>
			</p>
		</div>
		<div class="child">
			<p class="headMobile">RESOURCES</p>
			<p class="contentMobile">For More Resources Visit<br></p>
			<a href="https://www.pololu.com/file/0J195/line-maze-algorithm.pdf" target="_blank"> <p class="contentMobile">Design a Maze Solver Robot</p></a>
		</div> -->

		<!-- <div class="child">
			Div Six
		</div> -->







			<!-- <div style="width:100%;text-align:center;font-size:2vh;margin: 2vh;">
			<hr>
			<a href="../resources/resemblance.pdf" style="color:white;"><b>PROBLEM STATEMENT</b></a>
			</div>
 -->


		<div style="padding-top:1vh;" >
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
					<a id="compi02" href="#" onclick="compies()">
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
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav(0)">&times;</a> -->
  <div class="overlay-content" style="font-size: 2vh;">
      <!-- <a href="#" onclick="closeNav(1)">CONTRIVANCE</a> -->
  
    <a href="#" onclick="closeNav(2)">TECHNORION</a>
    <a href="#" onclick="closeNav(3)">INTERNATIONAL</a>
    <a href="#" onclick="closeNav(5)">CONTRIVANCE</a>
    <a href="#" onclick="closeNav(1)">Aerostrike</a>
    <a href="#" onclick="closeNav(4)">TATA Pioneer's MAKERTHON</a>
		<a href="javascript:void(0)" onclick="closeNav(0)" style="margin-top:10px;font-weight:bold;color:white;">BACK</a>



  </div>
</div>

<div id="myNav01" class="overlayTwo" >
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNavTwo(0)">&times;</a> -->
  <div class="overlayTwo-content" style="font-size: 2vh;color:white;">
    <a href="http://techfest.org/fullthrottle" style="color:white;">FULL THROTTLE</a>
    <a href="http://techfest.org/codethegame" style="color:white;">Code The Game</a>
    <a href="http://techfest.org/hilti" style="color:white;">Hilti Cadathon</a>

  </div>
</div>

<div id="myNav02" class="overlayTwo">
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNavTwo(0)">&times;</a> -->
  <div class="overlayTwo-content" style="font-size: 2vh;color:white;">
    <a href="http://techfest.org/enigma" style="color:white;">ENIGMA</a>
    <a href="http://techfest.org/meshmerize" style="color:white;">MESHMERIZE</a>
    <a href="http://techfest.org/clutch" style="color:white;">VISE CLUTCH</a>

  </div>
</div>

<div id="myNav03" class="overlayTwo">
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNavTwo(0)">&times;</a> -->
  <div class="overlayTwo-content" style="font-size: 2vh;color:white;">
    <a href="http://techfest.org/irc" style="color:white;">IRC</a>
    <a href="http://techfest.org/robowars" style="color:white;">ROBOWARS</a>
    <a href="http://techfest.org/icc" style="color:white;">ICC</a>

  </div>
</div>

<div id="myNav04" class="overlayTwo">
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNavTwo(0)">&times;</a> -->
  <div class="overlayTwo-content" style="font-size: 2vh;color:white;">
    <a href="http://techfest.org/automation" style="color:white;">AUTOMATION CHALLENGE</a>
    <a href="http://techfest.org/uav" style="color:white;">UAV CHALLENGE</a>
  </div>
</div>

<div id="myNav05" class="overlayTwo">
  <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNavTwo(0)">&times;</a> -->
  <div class="overlayTwo-content" style="font-size: 2vh;color:white;">
    <a href="http://techfest.org/boeing" style="color:white;">Boeing National Aeromodelling Competition</a>
    <a href="http://techfest.org/oprahat" style="color:white;">Op. Rahat</a>
  </div>
</div>




<div id="myCompiNav" class="overlayTwo">
  <div class="overlayTwo-content" style="font-size: 2vh;color:white;top: 5%;height: 80%;
  overflow: scroll;">
  <!-- <a href="http://techfest.org/uav" style="color:white;">Full Throttle</a> -->

    <!-- <a href="http://techfest.org/oprahat" style="color:white;">OP. RAHAT</a> -->
    <a href="http://techfest.org/fullthrottle" style="color:white;">FULL THROTTLE</a>
    <a href="http://techfest.org/codethegame" style="color:white;">Code the game</a>
    <a href="http://techfest.org/hilti" style="color:white;">Hilti cadathon</a>

    <a href="http://techfest.org/clutch" style="color:white;">VICE CLUTCH</a>    
    <a href="http://techfest.org/enigma" style="color:white;">ENIGMA</a>
    <a href="http://techfest.org/meshmerize" style="color:white;">MESHMERIZE</a>




    <a href="http://techfest.org/irc" style="color:white;">IRC</a>
    <a href="http://techfest.org/robowars" style="color:white;">ROBOWARS</a>
    <a href="http://techfest.org/icc" style="color:white;">ICC</a>

    <a href="http://techfest.org/boeing" style="color:white;">Boeing</a>
    <a href="http://techfest.org/oprahat" style="color:white;">OP. RAHAT</a>

    <a href="http://techfest.org/automation" style="color:white;">AUTOMATION CHALLENGE</a>
     
     <a href="http://techfest.org/uav" style="color:white;">UAV CHALLENGE</a>

     <!-- <a href="http://techfest.org/uav" style="color:white;">UAV CHALLENGE</a> -->


    <a href="javascript:void(0)" onclick="compiesClose()" style="margin-top:10px;font-weight:bold;color:white;"><b>BACK</b></a>


  </div>
</div>



<script>

function compies() {
	document.getElementById("myCompiNav").style.width="100%";
	closeNav(0);
}

function compiesClose() {
	// body...
    document.getElementById("myCompiNav").style.width="0%";
}

function openNav() {
    document.getElementById("myNav").style.width = "50%";
		document.getElementsByClassName("mobileCenter")[0].style.filter = "blur(3px)";
		// document.getElementsByClassName("mobileCenter")[0].style.opacity = "0.3";
}

function closeNav(argument) {
	var con = document.getElementsByClassName("child");
	var myNav01= document.getElementById("myNav01");
	var myNav02= document.getElementById("myNav02");
	var myNav03 = document.getElementById("myNav03");
  var myNav04 = document.getElementById("myNav04");
  var myNav05 = document.getElementById("myNav05");


	if (argument== 0 ) {
    document.getElementById("myNav").style.width = "0%";
    myNav01.style.width = "0%";
    myNav02.style.width = "0%";
    myNav03.style.width = "0%";
    myNav05.style.width = "0%";
    
		myNav04.style.width = "0%";
		// document.getElementsByClassName("mobileCenter")[0].style.opacity = "1";
		document.getElementsByClassName("mobileCenter")[0].style.filter = "blur(0px)";

	}
	if (argument== 1 ) {
    // document.getElementById("myNav").style.width = "0%";
    // myNav01.style.width = "50%";
    myNav02.style.width = "0%";
    myNav03.style.width = "0%";
    myNav04.style.width = "0%";
     myNav05.style.width = "51%";
    // con[0].style.display="block";
    // con[1].style.display="none";
    // con[2].style.display="none";
    // con[3].style.display="none";
    // con[4].style.display="none";
    // con[5].style.display="none";
	}

	if (argument== 2 ) {
	myNav01.style.width = "0%";
    myNav02.style.width = "51%";
    myNav03.style.width = "0%";
		myNav04.style.width = "0%";
    // document.getElementById("myNav").style.width = "0%";
   // con[0].style.display="none";
   //  con[1].style.display="block";
   //  con[2].style.display="none";
   //  con[3].style.display="none";
   //  con[4].style.display="none";
   //  con[5].style.display="none";
	}
	if (argument== 3 ) {
	myNav01.style.width = "0%";
    myNav02.style.width = "0%";
    myNav03.style.width = "51%";
		myNav04.style.width = "0%";
    // document.getElementById("myNav").style.width = "0%";
    // con[0].style.display="none";
    // con[1].style.display="none";
    // con[2].style.display="block";
    // con[3].style.display="none";
    // con[4].style.display="none";
    // con[5].style.display="none";
	}
	if (argument== 4) {
    // document.getElementById("myNav").style.width = "0%";
    myNav01.style.width = "0%";
    myNav02.style.width = "0%";
    myNav03.style.width = "0%";
		myNav04.style.width = "51%";
    // window.location.href="#";
    // con[0].style.display="none";
    // con[1].style.display="none";
    // con[2].style.display="none";
    // con[3].style.display="block";
    // con[4].style.display="none";
    // con[5].style.display="none";
	}
	if (argument== 5 ) {
    // document.getElementById("myNav").style.width = "0%";
    myNav01.style.width = "51%";
    myNav02.style.width = "0%";
    myNav03.style.width = "0%";
		myNav04.style.width = "0%";
    // con[0].style.display="none";
    // con[1].style.display="none";
    // con[2].style.display="none";
    // con[3].style.display="none";
    // con[4].style.display="block";
    // con[5].style.display="none";
	}

	if (argument== 6 ) {
    document.getElementById("myNav").style.width = "0%";
    window.location.href="#";
    // con[0].style.display="none";
    // con[1].style.display="none";
    // con[2].style.display="none";
    // con[3].style.display="none";
    // con[4].style.display="block";
    // con[5].style.display="none";
	}

	if (argument== 7) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="block";
    // con[2].style.display="none";
    // con[3].style.display="none";
    // con[4].style.display="block";
    // con[5].style.display="none";
	}





}

function closeNavTwo(argument) {
	// body...
	document.getElementById("myNav01").style.width = "0%";
    document.getElementById("myNav02").style.width = "0%";
    document.getElementById("myNav03").style.width = "0%";
		document.getElementById("myNav04").style.width = "0%";
		document.getElementById("myNav05").style.width = "0%";
}

</script>




<!-- center elements ends here  -->


<!-- circular bar  right section start for lapi  -->


<!-- circular bar  right section start for lapi  -->

<div class="circleLapi">
	<div style="position: relative;
		top: 11.3%;
		left: 54%;" class="circleLapi">
	<img class="ring" id="ft" src="img/2018/ft.png" style="position: absolute;
		width: 55%;top:2.5%;opacity:0;left:4%;" >
	<img class="ring" id="irc" src="img/2018/irc.png" style="position: absolute;
		width: 77%;top:8%;opacity:1;" >
	<img class="ring" id="meshmerize"src="img/2018/meshmerize.png" style="position: absolute;
		width: 77%;top:8%;opacity:0;" >	
	<img class="ring" id="oprahat" src="img/2018/oprahat.png" style="position: absolute;
		width: 77%;top:8%;opacity:0;" >
	<img class="ring" id="enigma" src="img/2018/enigma.png" style="position: absolute;
		width: 77%;top:8%;opacity:0;" >
	<img class="ring" id="icc" src="img/2018/icc.png" style="position: absolute;
		width: 77%;top:8%;opacity:0;" >
	<img class="ring" id="international" src="img/2018/international.png" style="position: absolute;
		width: 77%;top:8%;opacity:0;" >	
	<img class="ring" id="tata" src="img/2018/tata.png" style="position: absolute;
		width: 65%;top:2%;left:5%;opacity:0;" >	
		<img class="ring" id="contrivance" src="img/2018/ft.png" style="position: absolute;
		width: 65%;top:2%;left:5%;opacity:0;" >	

		<img class="ring" id="aero" src="img/2018/oprahat.png" style="position: absolute;
		width: 65%;top:2%;left:5%;opacity:0;" >	



	   <!-- <img src="img/eventFinal/bot.png" style="position: absolute;width: 65%;"> -->
	</div>

	<!-- ARC DEFAULT -->
	<svg id="arc0" height="100%" width="100%" style="position: absolute;
		left: -17%;
		bottom: 1%;z-index: 1" stroke="white"  stroke-width="1.5" >
		<ellipse cx="110%" cy="50%" rx="38%" ry="44%" fill="transparent"/>
		<!-- 	<text x="80%" y="15.2620519696%" id="oneLL" class="nav-tab" fill="#fefefe"  text-anchor="end" style="filter: url(#blurFilter4);">
			AEROSTRIKE
		  </text> -->
		<text x="80%" y="15.2620519696%" id="oneL" class="nav-tab" fill="#ffffff"  text-anchor="end" onmouseover="compibtn(1.1)" onclick="compibtn(1)">
			CONTRIVANCE
		  </text>
		<text x="70%" y="30.5386704767%" id="twoL" class="nav-tab" text-anchor="end" onclick="compibtn(2)" onmouseover="compibtn(2.1)">
			TECHNORION
		</text>
		<text x="65%" y="51%" id="threeL" class="nav-tab" text-anchor="end" onclick="compibtn(3)" onmouseover="compibtn(3.1)">
			INTERNATIONAL
		</text>
		<text x="70%" y="71.5386704767%" id="fourL" class="nav-tab" text-anchor="end" onclick="compibtn(4)" onmouseover="compibtn(4.1)">
			AeroStrike
		</text>
		<text x="80%" y="87.7379480304%" id="fiveL" class="nav-tab" text-anchor="end" onclick="compibtn(5)" onmouseover="compibtn(5.1)">
			TATA PIONEER'S MAKERTHON
		</text>


		<circle  cx="72%" cy="50%" r="4" stroke="white" fill="white"/>
		<circle id="cc03" class="svg_circle" cx="72%" cy="50%" r="12" stroke="white" stroke-width="2" fill="transparent"/>
		<circle id="c03" class="svg_circle" cx="72%" cy="50%" r="14" stroke="white" stroke-width="2" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>

		<!-- <circle x="20" y="20" width="90" height="90" /> -->

		<circle  cx="76%" cy="30%" r="4" stroke="white" fill="white"/>
		<circle id="cc02"  cx="76%" cy="30%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c02"  cx="76%" cy="30%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>



		<circle  cx="87.9871204473%" cy="14.2620519696%" r="4" stroke="white" fill="white"/>
		<circle id="cc01"  cx="87.9871204473%" cy="14.2620519696%" r="12" stroke="white" stroke-width="1" fill="transparent"/>

		<circle id="c01"  cx="87.9871204473%" cy="14.2620519696%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<circle  cx="76%" cy="69.5386704767%" r="4" stroke="white" fill="white"/>
		<circle id="cc04" cx="76%" cy="69.5386704767%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c04" cx="76%" cy="69.5386704767%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<circle  cx="87.9871204473%" cy="85.7379480304%" r="4" stroke="white" fill="white"/>
		<circle id="cc05" cx="87.9871204473%" cy="85.7379480304%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c05" cx="87.9871204473%" cy="85.7379480304%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<circle  cx="99.2%" cy="8%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="99.2%" cy="8%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<circle  cx="99.2%" cy="92.2%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="76%" cy="69.5386704767%" r="12" stroke="white" fill="white"/> -->


		<defs>
			<filter id="blurFilter4" x="-20" y="-20" width="200" height="200">
				<feGaussianBlur in="SourceGraphic" stdDeviation="10" />
			</filter>
		</defs>
	</svg>
	<!-- SECTION 1 COMPIS -->	
	<svg id="arc1" height="100%" width="100%" style="position: absolute;
		left: 50%;opacity: 0;z-index: -1;
		bottom: 1%;" stroke="white"  stroke-width="1.5" >
		<ellipse cx="110%" cy="50%" rx="38%" ry="44%" fill="transparent"/>
		<!-- 	<text x="80%" y="15.2620519696%" id="oneLL" class="nav-tab" fill="#fefefe"  text-anchor="end" style="filter: url(#blurFilter4);">
			AEROSTRIKE
		  </text> -->
		<text x="80%" y="15.2620519696%" id="oneL" class="nav-tab" fill="#fefefe"  text-anchor="end" onclick="">

		  </text>



		<text x="70%" y="30.5386704767%" id="twoL" class="nav-tab" text-anchor="end" onclick="compibtn(11)"s>
			FULL THROTTLE
		</text>
		<text x="65%" y="51%" id="threeL" class="nav-tab" text-anchor="end" onclick="compibtn(12)">
			Code the Game
		</text>
		<text x="70%" y="71.5386704767%" id="fourL" class="nav-tab" text-anchor="end" onclick="compibtn(22)">
			Hilti Cadathon
		</text>
		<text x="80%" y="87.7379480304%" id="fiveL" class="nav-tab" text-anchor="end" onclick="">

		</text>


		<circle  cx="72%" cy="50%" r="4" stroke="white" fill="white"/>
		<circle id="cc03" class="svg_circle" cx="72%" cy="50%" r="12" stroke="white" stroke-width="2" fill="transparent"/>
		<circle id="c03" class="svg_circle" cx="72%" cy="50%" r="14" stroke="white" stroke-width="2" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>

		<!-- <circle x="20" y="20" width="90" height="90" /> -->

		<circle  cx="76%" cy="30%" r="4" stroke="white" fill="white"/>
		<circle id="cc02"  cx="76%" cy="30%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c02"  cx="76%" cy="30%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>



		<!-- <circle  cx="87.9871204473%" cy="14.2620519696%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc01"  cx="87.9871204473%" cy="14.2620519696%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<circle id="c01"  cx="87.9871204473%" cy="14.2620519696%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<circle  cx="76%" cy="69.5386704767%" r="4" stroke="white" fill="white"/>
		<circle id="cc04" cx="76%" cy="69.5386704767%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c04" cx="76%" cy="69.5386704767%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<!-- <circle  cx="87.9871204473%" cy="85.7379480304%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc05" cx="87.9871204473%" cy="85.7379480304%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->
		<!-- <circle id="c05" cx="87.9871204473%" cy="85.7379480304%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/> -->


		<circle  cx="99.2%" cy="8%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="99.2%" cy="8%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<circle  cx="99.2%" cy="92.2%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="76%" cy="69.5386704767%" r="12" stroke="white" fill="white"/> -->


		<defs>
			<filter id="blurFilter4" x="-20" y="-20" width="200" height="200">
				<feGaussianBlur in="SourceGraphic" stdDeviation="10" />
			</filter>
		</defs>
	</svg>




	<!-- SECTION 1 COMPIS -->	
	<svg id="arc4" height="100%" width="100%" style="position: absolute;
		left: 50%;opacity: 0;z-index: -1;
		bottom: 1%;" stroke="white"  stroke-width="1.5" >
		<ellipse cx="110%" cy="50%" rx="38%" ry="44%" fill="transparent"/>
		<!-- 	<text x="80%" y="15.2620519696%" id="oneLL" class="nav-tab" fill="#fefefe"  text-anchor="end" style="filter: url(#blurFilter4);">
			AEROSTRIKE
		  </text> -->
		<text x="80%" y="15.2620519696%" id="oneL" class="nav-tab" fill="#fefefe"  text-anchor="end" onclick="">

		  </text>



		<text x="70%" y="30.5386704767%" id="twoL" class="nav-tab" text-anchor="end" onclick="compibtn(24)"s>
			Boeing Aeromodelling
		</text>
		<!-- <text x="65%" y="51%" id="threeL" class="nav-tab" text-anchor="end" onclick="compibtn(12)">
			Code the Game
		</text> -->
		<text x="70%" y="71.5386704767%" id="fourL" class="nav-tab" text-anchor="end" onclick="compibtn(25)">
			Op. Rahat
		</text>
		<text x="80%" y="87.7379480304%" id="fiveL" class="nav-tab" text-anchor="end" onclick="">

		</text>


		<!-- <circle  cx="72%" cy="50%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc03" class="svg_circle" cx="72%" cy="50%" r="12" stroke="white" stroke-width="2" fill="transparent"/> -->
		<!-- <circle id="c03" class="svg_circle" cx="72%" cy="50%" r="14" stroke="white" stroke-width="2" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/> -->

		<!-- <circle x="20" y="20" width="90" height="90" /> -->

		<circle  cx="76%" cy="30%" r="4" stroke="white" fill="white"/>
		<circle id="cc02"  cx="76%" cy="30%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c02"  cx="76%" cy="30%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>



		<!-- <circle  cx="87.9871204473%" cy="14.2620519696%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc01"  cx="87.9871204473%" cy="14.2620519696%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<circle id="c01"  cx="87.9871204473%" cy="14.2620519696%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<circle  cx="76%" cy="69.5386704767%" r="4" stroke="white" fill="white"/>
		<circle id="cc04" cx="76%" cy="69.5386704767%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c04" cx="76%" cy="69.5386704767%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<!-- <circle  cx="87.9871204473%" cy="85.7379480304%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc05" cx="87.9871204473%" cy="85.7379480304%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->
		<!-- <circle id="c05" cx="87.9871204473%" cy="85.7379480304%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/> -->


		<circle  cx="99.2%" cy="8%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="99.2%" cy="8%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<circle  cx="99.2%" cy="92.2%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="76%" cy="69.5386704767%" r="12" stroke="white" fill="white"/> -->


		<defs>
			<filter id="blurFilter4" x="-20" y="-20" width="200" height="200">
				<feGaussianBlur in="SourceGraphic" stdDeviation="10" />
			</filter>
		</defs>
	</svg>




	<!-- SECTION 2 COMPIS -->
	<svg id="arc2" height="100%" width="100%" style="position: absolute;
		left: 50%;opacity: 0;z-index: -1;
		bottom: 1%;" stroke="white"  stroke-width="1.5" >
		<ellipse cx="110%" cy="50%" rx="38%" ry="44%" fill="transparent"/>
		<!-- 	<text x="80%" y="15.2620519696%" id="oneLL" class="nav-tab" fill="#fefefe"  text-anchor="end" style="filter: url(#blurFilter4);">
			AEROSTRIKE
		  </text> -->
		<text x="80%" y="15.2620519696%" id="oneL" class="nav-tab" fill="#fefefe"  text-anchor="end" onclick="">

		  </text>



		<text x="70%" y="30.5386704767%" id="twoL" class="nav-tab" text-anchor="end" onclick="compibtn(16)">
			VISE CLUTCH
		</text>
		<text x="65%" y="51%" id="threeL" class="nav-tab" text-anchor="end" onclick="compibtn(15)">
			MESHMERIZE
		</text>
		<text x="70%" y="71.5386704767%" id="fourL" class="nav-tab" text-anchor="end" onclick="compibtn(14)">
			 ENIGMA
		</text>
		<text x="80%" y="87.7379480304%" id="fiveL" class="nav-tab" text-anchor="end" onclick="">

		</text>


		<circle  cx="72%" cy="50%" r="4" stroke="white" fill="white"/>
		<circle id="cc03" class="svg_circle" cx="72%" cy="50%" r="12" stroke="white" stroke-width="2" fill="transparent"/>
		<circle id="c03" class="svg_circle" cx="72%" cy="50%" r="14" stroke="white" stroke-width="2" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>

		<!-- <circle x="20" y="20" width="90" height="90" /> -->

		<circle  cx="76%" cy="30%" r="4" stroke="white" fill="white"/>
		<circle id="cc02"  cx="76%" cy="30%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c02"  cx="76%" cy="30%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>



		<!-- <circle  cx="87.9871204473%" cy="14.2620519696%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc01"  cx="87.9871204473%" cy="14.2620519696%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<!-- <circle id="c01"  cx="87.9871204473%" cy="14.2620519696%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/> -->


		<circle  cx="76%" cy="69.5386704767%" r="4" stroke="white" fill="white"/>
		<circle id="cc04" cx="76%" cy="69.5386704767%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c04" cx="76%" cy="69.5386704767%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<!-- <circle  cx="87.9871204473%" cy="85.7379480304%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc05" cx="87.9871204473%" cy="85.7379480304%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->
		<!-- <circle id="c05" cx="87.9871204473%" cy="85.7379480304%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/> -->


		<circle  cx="99.2%" cy="8%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="99.2%" cy="8%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<circle  cx="99.2%" cy="92.2%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="76%" cy="69.5386704767%" r="12" stroke="white" fill="white"/> -->


		<defs>
			<filter id="blurFilter4" x="-20" y="-20" width="200" height="200">
				<feGaussianBlur in="SourceGraphic" stdDeviation="10" />
			</filter>
		</defs>
	</svg>
	<!-- SECTION 3 COMPIS -->
	<svg id="arc3" height="100%" width="100%" style="position: absolute;
		left: 50%;opacity: 0;z-index: -1;
		bottom: 1%;" stroke="white"  stroke-width="1.5" >
		<ellipse cx="110%" cy="50%" rx="38%" ry="44%" fill="transparent"/>
		<!-- 	<text x="80%" y="15.2620519696%" id="oneLL" class="nav-tab" fill="#fefefe"  text-anchor="end" style="filter: url(#blurFilter4);">
			AEROSTRIKE
		  </text> -->
		<text x="80%" y="15.2620519696%" id="oneL" class="nav-tab" fill="#fefefe"  text-anchor="end" onclick="">

		  </text>



		<text x="70%" y="30.5386704767%" id="twoL" class="nav-tab" text-anchor="end" onclick="compibtn(17)">
			IRC
		</text>
		<text x="65%" y="51%" id="threeL" class="nav-tab" text-anchor="end" onclick="compibtn(26)">
			ROBOWARS
		</text>
		<text x="70%" y="71.5386704767%" id="fourL" class="nav-tab" text-anchor="end" onclick="compibtn(19)">
			ICC
		</text>
		<text x="80%" y="87.7379480304%" id="fiveL" class="nav-tab" text-anchor="end" onclick="">

		</text>


		<circle  cx="72%" cy="50%" r="4" stroke="white" fill="white"/>
		<circle id="cc03" class="svg_circle" cx="72%" cy="50%" r="12" stroke="white" stroke-width="2" fill="transparent"/>
		<circle id="c03" class="svg_circle" cx="72%" cy="50%" r="14" stroke="white" stroke-width="2" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>

		<!-- <circle x="20" y="20" width="90" height="90" /> -->

		<circle  cx="76%" cy="30%" r="4" stroke="white" fill="white"/>
		<circle id="cc02"  cx="76%" cy="30%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c02"  cx="76%" cy="30%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>



		<!-- <circle  cx="87.9871204473%" cy="14.2620519696%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc01"  cx="87.9871204473%" cy="14.2620519696%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<!-- <circle id="c01"  cx="87.9871204473%" cy="14.2620519696%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/> -->


		<circle  cx="76%" cy="69.5386704767%" r="4" stroke="white" fill="white"/>
		<circle id="cc04" cx="76%" cy="69.5386704767%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c04" cx="76%" cy="69.5386704767%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<!-- <circle  cx="87.9871204473%" cy="85.7379480304%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc05" cx="87.9871204473%" cy="85.7379480304%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->
		<circle id="c05" cx="87.9871204473%" cy="85.7379480304%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<circle  cx="99.2%" cy="8%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="99.2%" cy="8%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<circle  cx="99.2%" cy="92.2%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="76%" cy="69.5386704767%" r="12" stroke="white" fill="white"/> -->


		<defs>
			<filter id="blurFilter4" x="-20" y="-20" width="200" height="200">
				<feGaussianBlur in="SourceGraphic" stdDeviation="10" />
			</filter>
		</defs>
	</svg>
		<!-- SECTION 3 COMPIS -->
	<svg id="arc5" height="100%" width="100%" style="position: absolute;
		left: 50%;opacity: 0;z-index: -1;
		bottom: 1%;" stroke="white"  stroke-width="1.5" >
		<ellipse cx="110%" cy="50%" rx="38%" ry="44%" fill="transparent"/>
		<!-- 	<text x="80%" y="15.2620519696%" id="oneLL" class="nav-tab" fill="#fefefe"  text-anchor="end" style="filter: url(#blurFilter4);">
			AEROSTRIKE
		  </text> -->
		<text x="80%" y="15.2620519696%" id="oneL" class="nav-tab" fill="#fefefe"  text-anchor="end" onclick="">

		  </text>



		<text x="70%" y="30.5386704767%" id="twoL" class="nav-tab" text-anchor="end" onclick="compibtn(20)" style="font-size: 12px">
			TATA AUTOMATION Challenge
		</text>
<!-- 		<text x="65%" y="51%" id="threeL" class="nav-tab" text-anchor="end" onclick="compibtn(18)">
			ROBOWARS
		</text> -->
		<text x="70%" y="71.5386704767%" id="fourL" class="nav-tab" text-anchor="end" onclick="compibtn(21)" style="font-size: 12px">
			TATA UAV CHALLENGE
		</text>
		<text x="80%" y="87.7379480304%" id="fiveL" class="nav-tab" text-anchor="end" onclick="">

		</text>


		<!-- <circle  cx="72%" cy="50%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc03" class="svg_circle" cx="72%" cy="50%" r="12" stroke="white" stroke-width="2" fill="transparent"/> -->
		<!-- <circle id="c03" class="svg_circle" cx="72%" cy="50%" r="14" stroke="white" stroke-width="2" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/> -->

		<!-- <circle x="20" y="20" width="90" height="90" /> -->

		<circle  cx="76%" cy="30%" r="4" stroke="white" fill="white"/>
		<circle id="cc02"  cx="76%" cy="30%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c02"  cx="76%" cy="30%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>



		<!-- <circle  cx="87.9871204473%" cy="14.2620519696%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc01"  cx="87.9871204473%" cy="14.2620519696%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<circle id="c01"  cx="87.9871204473%" cy="14.2620519696%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<circle  cx="76%" cy="69.5386704767%" r="4" stroke="white" fill="white"/>
		<circle id="cc04" cx="76%" cy="69.5386704767%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
		<circle id="c04" cx="76%" cy="69.5386704767%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>


		<!-- <circle  cx="87.9871204473%" cy="85.7379480304%" r="4" stroke="white" fill="white"/> -->
		<!-- <circle id="cc05" cx="87.9871204473%" cy="85.7379480304%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->
		<!-- <circle id="c05" cx="87.9871204473%" cy="85.7379480304%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/> -->


		<circle  cx="99.2%" cy="8%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="99.2%" cy="8%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->

		<circle  cx="99.2%" cy="92.2%" r="4" stroke="white" fill="white"/>
		<!-- <circle  cx="76%" cy="69.5386704767%" r="12" stroke="white" fill="white"/> -->


		<defs>
			<filter id="blurFilter4" x="-20" y="-20" width="200" height="200">
				<feGaussianBlur in="SourceGraphic" stdDeviation="10" />
			</filter>
		</defs>
	</svg>
</div>






<!-- circular bar right section ends for lapi  -->

<script type="text/javascript">

function compibtn(argument) {

	var divone = document.getElementById('abhinav');
	var divtwo = document.getElementById('kaushik');
	var compi01 = document.getElementById('compi01');
	var compi02 = document.getElementById('compi02');
	var compiName01 = document.getElementById('compiName01');
	var compiName02 = document.getElementById('compiName02');
	var back = document.getElementById('back');

	if (argument==0) {
		$("#arc0").animate({left: '-17%', opacity: '1',filter:blur(5),zIndex:1}, "slow");
		$("#arc1").animate({left: '50%', opacity: '0',filter:blur(5),scale:0.5,zIndex:-1}, "slow");
		$("#arc2").animate({left: '50%', opacity: '0',filter:blur(5),scale:0.5,zIndex:-1}, "slow");
		$("#arc3").animate({left: '50%', opacity: '0',filter:blur(5),scale:0.5,zIndex:-1}, "slow");
		$("#arc4").animate({left: '50%', opacity: '0',filter:blur(5),scale:0.5,zIndex:-1}, "slow");

		$("#arc5").animate({left: '50%', opacity: '0',filter:blur(5),scale:0.5,zIndex:-1}, "slow");
		back.style.display="none";
		divone.innerHTML='COMPETITIONS'
		// document.getElementsByClassName("descriptions").style.display="none";
		document.getElementById("kaushik0").style.display="block";
		document.getElementById("kaushik1").style.display="none";
		document.getElementById("kaushik2").style.display="none";
		document.getElementById("kaushik3").style.display="none";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="none";
		document.getElementById("kaushik6").style.display="none";
		document.getElementById("international").style.opacity="0";
		document.getElementById("icc").style.opacity="0";
		document.getElementById("meshmerize").style.opacity="0";
		document.getElementById("enigma").style.opacity="0";
		document.getElementById("irc").style.opacity="1";
		document.getElementById("ft").style.opacity="0";
		document.getElementById("tata").style.opacity="0";
		document.getElementById("contrivance").style.opacity="0";

		document.getElementById("aero").style.opacity="0";
		
		// contrivance

	}
	if (argument==0.1) {
		document.getElementById("kaushik0").style.display="block";
		document.getElementById("kaushik1").style.display="none";
		document.getElementById("kaushik2").style.display="none";
		document.getElementById("kaushik3").style.display="none";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="none";
	}

	if (argument==1) {
		divone.innerHTML = 'CONTRIVANCE';
		back.style.display="inline";
		$("#arc0").animate({left: '-17%',zIndex:-1, opacity: '0',filter:blur(5)}, "slow");
		$("#arc1").animate({left: '-17%',zIndex:1, opacity: '1',filter:blur(5)}, "slow");
		document.getElementById("kaushik0").style.display="none";
		document.getElementById("kaushik1").style.display="block";
		document.getElementById("kaushik2").style.display="none";
		document.getElementById("kaushik3").style.display="none";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="none";

		document.getElementById("international").style.opacity="0";
		document.getElementById("icc").style.opacity="0";
		document.getElementById("meshmerize").style.opacity="0";
		document.getElementById("enigma").style.opacity="0";
		document.getElementById("irc").style.opacity="0";
		document.getElementById("ft").style.opacity="0";
		document.getElementById("tata").style.opacity="0";
		document.getElementById("contrivance").style.opacity="1";
		document.getElementById("aero").style.opacity="0";
		

				//window.location.href='/oprahat'
				//document.getElementById("tata").style.opacity="0"
		// back.style.display="inline";
		// divone.innerHTML = 'CONTRIVANCE';
		// $("#arc0").animate({left: '-17%', opacity: '0',filter:blur(5),zIndex:-1}, "slow");
		// $("#arc1").animate({left: '-17%',zIndex:1, opacity: '1',filter:blur(5), transform: 'scale(0.5)',width: '100%',height:'100%'}, "slow");
		// document.getElementById("kaushik0").style.display="none";
		// document.getElementById("kaushik1").style.display="block";
		// document.getElementById("kaushik2").style.display="none";
		// document.getElementById("kaushik3").style.display="none";
		// document.getElementById("kaushik4").style.display="none";
		// document.getElementById("kaushik5").style.display="none";
		// document.getElementById("international").style.opacity="0";
		// document.getElementById("icc").style.opacity="0";
		// document.getElementById("meshmerize").style.opacity="0";
		// document.getElementById("enigma").style.opacity="0";
		// document.getElementById("irc").style.opacity="0";
		// document.getElementById("ft").style.opacity="1";
	}
	if (argument==1.1) {
		document.getElementById("kaushik0").style.display="none";
		document.getElementById("kaushik1").style.display="block";
		document.getElementById("kaushik2").style.display="none";
		document.getElementById("kaushik3").style.display="none";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="none";

	}


	if (argument==2) {
		divone.innerHTML = 'TECHNORION';
		back.style.display="inline";
		$("#arc0").animate({left: '-17%',zIndex:-1, opacity: '0',filter:blur(5)}, "slow");
		$("#arc2").animate({left: '-17%',zIndex:1, opacity: '1',filter:blur(5)}, "slow");
		document.getElementById("kaushik0").style.display="none";
		document.getElementById("kaushik1").style.display="none";
		document.getElementById("kaushik2").style.display="block";
		document.getElementById("kaushik3").style.display="none";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="none";
		document.getElementById("international").style.opacity="0";
		document.getElementById("icc").style.opacity="0";
		document.getElementById("meshmerize").style.opacity="1";
		document.getElementById("enigma").style.opacity="0";
		document.getElementById("irc").style.opacity="0";
		document.getElementById("ft").style.opacity="0";
		document.getElementById("tata").style.opacity="0";
		document.getElementById("contrivance").style.opacity="0";
		document.getElementById("aero").style.opacity="0";
		

	}
	if (argument==2.1) {
		document.getElementById("kaushik0").style.display="none";
		document.getElementById("kaushik1").style.display="none";
		document.getElementById("kaushik2").style.display="block";
		document.getElementById("kaushik3").style.display="none";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="none";
	}

	if (argument==3) {
		divone.innerHTML = 'INTERNATIONAL';
		back.style.display="inline";
		$("#arc0").animate({left: '-17%',zIndex:-1, opacity: '0',filter:blur(5)}, "slow");
		$("#arc3").animate({left: '-17%',zIndex:1, opacity: '1',filter:blur(5)}, "slow");
		document.getElementById("kaushik0").style.display="none";
		document.getElementById("kaushik1").style.display="none";
		document.getElementById("kaushik2").style.display="none";
		document.getElementById("kaushik3").style.display="block";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="none";
		document.getElementById("international").style.opacity="1";
		document.getElementById("icc").style.opacity="0";
		document.getElementById("meshmerize").style.opacity="0";
		document.getElementById("enigma").style.opacity="0";
		document.getElementById("irc").style.opacity="0";
		document.getElementById("ft").style.opacity="0";
		document.getElementById("tata").style.opacity="0";
		document.getElementById("contrivance").style.opacity="0";
		document.getElementById("aero").style.opacity="0";
		
	}
	if (argument==3.1) {
		document.getElementById("kaushik0").style.display="none";
		document.getElementById("kaushik1").style.display="none";
		document.getElementById("kaushik2").style.display="none";
		document.getElementById("kaushik3").style.display="block";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="none";
	}

	if (argument==4) {

divone.innerHTML = 'AEROSTRIKE';
		back.style.display="inline";
		$("#arc0").animate({left: '-17%',zIndex:-1, opacity: '0',filter:blur(5)}, "slow");
		$("#arc4").animate({left: '-17%',zIndex:1, opacity: '1',filter:blur(5)}, "slow");
		document.getElementById("kaushik0").style.display="none";
		document.getElementById("kaushik1").style.display="none";
		document.getElementById("kaushik2").style.display="none";
		document.getElementById("kaushik3").style.display="none";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="none";
		document.getElementById("kaushik6").style.display="block";

		document.getElementById("international").style.opacity="0";
		document.getElementById("icc").style.opacity="0";
		document.getElementById("meshmerize").style.opacity="0";
		document.getElementById("enigma").style.opacity="0";
		document.getElementById("irc").style.opacity="0";
		document.getElementById("ft").style.opacity="0";
		document.getElementById("tata").style.opacity="0";
		document.getElementById("contrivance").style.opacity="0";
		document.getElementById("aero").style.opacity="1";
		


		// window.location.href='/hilti'
		// divone.innerHTML = 'TATA PIONEER&asop; MAKERTHON';
		// document.getElementById("kaushik0").style.display="none";
		// document.getElementById("kaushik1").style.display="none";
		// document.getElementById("kaushik2").style.display="none";
		// document.getElementById("kaushik3").style.display="none";
		// document.getElementById("kaushik4").style.display="block";
		// document.getElementById("kaushik5").style.display="none";
	}
	if (argument==4.1) {
		document.getElementById("kaushik0").style.display="none";
		document.getElementById("kaushik1").style.display="none";
		document.getElementById("kaushik2").style.display="none";
		document.getElementById("kaushik3").style.display="none";
		document.getElementById("kaushik4").style.display="block";
		document.getElementById("kaushik5").style.display="none";

	}

	if (argument==5) {
		$('#abhinav').css('font-size', '2rem');
		divone.innerHTML = 'TATA PIONEER&apos;S MAKERTHON';
		// divone.innerHTML = 'INTERNATIONAL';
		back.style.display="inline";
		$("#arc0").animate({left: '-17%',zIndex:-1, opacity: '0',filter:blur(5)}, "slow");
		$("#arc5").animate({left: '-17%',zIndex:1, opacity: '1',filter:blur(5)}, "slow");
		document.getElementById("kaushik0").style.display="none";
		document.getElementById("kaushik1").style.display="none";
		document.getElementById("kaushik2").style.display="none";
		document.getElementById("kaushik3").style.display="none";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="block";
		document.getElementById("international").style.opacity="0";
		document.getElementById("icc").style.opacity="0";
		document.getElementById("meshmerize").style.opacity="0";
		document.getElementById("enigma").style.opacity="0";
		document.getElementById("irc").style.opacity="0";
		document.getElementById("ft").style.opacity="0";
		document.getElementById("tata").style.opacity="1";
		document.getElementById("contrivance").style.opacity="0";
		document.getElementById("aero").style.opacity="0";
		
	}
	if(argument==5.1){
		document.getElementById("kaushik0").style.display="none";
		document.getElementById("kaushik1").style.display="none";
		document.getElementById("kaushik2").style.display="none";
		document.getElementById("kaushik3").style.display="none";
		document.getElementById("kaushik4").style.display="none";
		document.getElementById("kaushik5").style.display="block";
	}

	if (argument==11) {
		window.location.href='/fullthrottle';
	}
	if (argument==12) {
		window.location.href='/codethegame';
	}
	if (argument==13) {
		// window.location.href='/kannu/zonal.html';
	}
	if (argument==14) {
		window.location.href='/enigma';
	}
	if (argument==15) {
		window.location.href='/meshmerize';
	}
	if (argument==16) {
		window.location.href='/clutch';
	}
	if (argument==17) {
		window.location.href='/irc';
	}
	if (argument==18) {
		window.location.href='/hilti';
	}
	if (argument==19) {
		window.location.href='/icc';
	}
	if (argument==20) {
		window.location.href='/automation';
	}
	if (argument==21) {
		window.location.href='/uav';
	}

	if (argument==22) {
		window.location.href='/hilti';
	}

if (argument==24) {
		window.location.href='/boeing';
	}

if (argument==25) {
		window.location.href='/oprahat';
	}

	if (argument==26) {
		window.location.href='/robowars';
	}



}

</script>

<!-- circular bar right section ends for lapi  -->


@endsection
