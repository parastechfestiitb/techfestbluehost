@extends('kannu.topLayer')

@section('title','Vise Clutch | Competitions')

@section('styling')
.overlay-content{top:20%;}
.psMobi{width:100%;text-align:center;font-size:2vh;margin: 1vh;margin-top:0.5vh;}
@media (max-width: 62em) and (orientation: landscape){
.parent {
    height: 50%;
}
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
.hrMobi{width:96%;}
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
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="width: 107%;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 5vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">Vise Clutch</h4>
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
		<p>While on a mission of investigating new planet, Nova found good soil for plantations and metals in large quantity which would lit up the environment for better living. But the place was not safe. Help Nova move these things to a safer place where he can establish a civilization by gripping the objects and placing them in appropriate deposit zones.</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TASK</p>
		<p>
1. Teams must build a manually controlled bot which can do simple tasks of gripping blocks and completing the run by earning maximum points in minimum time.
<br>
2. The bot can be wired or wireless. In case the participants use a wireless mechanism, they must use dual frequency remote.
		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">RESOURCES</p>
		<p>1. <a href="http://lab.fs.uni-lj.si/lasim/studenti/SEMINARJI_MONTAZA/Guidelines%20for%20the%20design%20of%20robotic%20gripping%20system_doc.pdf">Guidelines for Design</a><br>
		2. <a href="http://www.instructables.com/id/Home-made-robot-gripper/">Home made Robot Gripper</a><br>
		3. <a href="http://www.hrpub.org/download/201310/ujme.2013.010303.pdf">Robotic Arm</a>
		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">FAQs</p>
		<p>
<b>Why should I participate in Vise Clutch ?</b><br>
The competition provides the participants with a reasonable grasp of important mechanical and programming principles that will move them in the direction of being able to design and construct their own gripping bot. Participants work together to design and build a robotic vehicle that can navigate on an obstacle-filled course while moving blocks from one location to another.<br><br>
<b> Who can participate ?</b><br> Student from any college & university with a valid ID card.
<br><br>
<b>How to register ?</b><br>
Please follow this process:- www.techfest.org -> Competitions -> TechoZion -> Vise Clutch -> Register
<br><br>
<b>How many persons can be there in one team?
</b><br>
One team can have maximum 4 members.
 <br><br>
<b>Can a team have members from different colleges?</b><br>
Yes, Students from different college can form a team.<br><br>
<b>Will any charging facility for our equipment be provided at the venue?</b><br>
Any kind of charging facility will not be provided to the participants at the venue.<br> <br>
<b>What should I do if I want to change my team member?</b><br>
The participants who wish to change their team member will have to register once again with the details about their new team member, the new team formed will be provided with a different team id.
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-12">
			Siddhant Jadhav<br>
			Competitions Coordinator<br>
			+91 8291474955
		</div>
		<div class="col-sm-2"></div>
		
	</div>	

<div style="height:2vh;"></div>
</div>




<!-- lapi linking of ps -->

<div class="row comeon" style="position:relative; left:10vh;">
<div class="col-sm-12 prize" >
			<p style="text-align: center;width: 100%;color: white;">Prizes worth INR 62,500/-</p>
</div>

	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					<a  id="compi01" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;" >
								Wildcard PS
							</p>
							<a href="resource/ViseClutchWildcard.pdf" target="_blank">
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
		 <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					<a  id="compi01" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;" >

								Finale PS
							</p>
							<a href="resource/ViseClutchFinal.pdf" target="_blank">
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
								<a href="#" id="compiName02" style="color:#dafdff">Register</a>
							</p>
							<a id="compi02" href="https://techfest.org/register/wildcard_viseclutch">
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
	
	<h4 id="heading" class="heading">Vise Clutch</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
While on a mission of investigating new planet, Nova found good soil for plantations and metals in large quantity which would lit up the environment for better living. But the place was not safe. Help Nova move these things to a safer place where he can establish a civilization by gripping the objects and placing them in appropriate deposit Zones.
</p>
		</div>

		<div class="child">
			<p class="headMobile">TASK</p>
			<p class="contentMobile">
1. Teams must build a manually controlled bot which can do simple tasks of gripping blocks and completing the run by earning maximum points in minimum time. <br>

2. The bot can be wired or wireless. In case the participants use a wireless mechanism, they must use dual frequency remote.
			</p>
		</div>
		<div class="child">
			<p class="headMobile">FAQs</p>
			<p>
				<ul class="contentMobile" style="text-align: left;"> 
					<li>
						Why should I participate in Vise Clutch ?
					</li>
					<p>The competition provides the participants with a reasonable grasp of important mechanical and programming principles that will move them in the direction of being able to design and construct their own gripping bot. Participants work together to design and build a robotic vehicle that can navigate on an obstacle-filled course while moving blocks from one location to another.</p>
					<li>
						 Who can participate ?
				    </li>
				    <p>Student from any college & university with a valid ID card.</p>

				    <li>
						 How to register ?
				    </li>
				    <p>Please follow this process:- www.techfest.org -> competitions -> TechoZion -> Vise Clutch -> register</p>
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

			<p class="contentMobile">
				1. <a href="http://lab.fs.uni-lj.si/lasim/studenti/SEMINARJI_MONTAZA/Guidelines%20for%20the%20design%20of%20robotic%20gripping%20system_doc.pdf">Guidelines for Design</a><br>
				2. <a href="http://www.instructables.com/id/Home-made-robot-gripper/">Home made Robot Gripper</a><br>
				3. <a href="http://www.hrpub.org/download/201310/ujme.2013.010303.pdf">Robotic Arm</a>
			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					Siddhant Jadhav<br>
			Competitions Coordinator<br>
			+91 8291474955
				</div>
				
			</div>
		</div>

		<div class="child">
			Div Six
		</div>
	
</div>






<!-- linking of pdf for mobile -->

			<div class="psMobi">
            <!-- <hr style="width: 93%;text-align: center;">	 -->
			<a href="#" style="color:white;"><b>Prizes Worth INR 62,500</b></a>
			</div>




		<div style="padding-top:0vh;" >
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
					<a id="compi02" href="https://techfest.org/register/wildcard_viseclutch">
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
     <a href="#" onclick="closeNav(6)">Wildcard PS</a>
    <a href="#" onclick="closeNav(7)">Finale PS</a>
    <a href="#" onclick="closeNav(3)">FAQs</a>
    <a href="#" onclick="closeNav(4)">Resources</a>
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
	window.location.href="resource/ViseClutchFinal.pdf";
	}
	if (argument== 6 ) {
	window.location.href="resource/ViseClutchWildcard.pdf";
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
				<p class="yo" id="yo-2">RESOURCES</p>
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
