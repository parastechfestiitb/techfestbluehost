@extends('kannu.topLayer')

@section('title','IRC | Competitions ')


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

	<h4 style="font-family: 'pirulen';    font-size: 3.5vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">International Robotics Challenge</h4>
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
		<p>Since 1998, with it's motto of spreading science and technology, Techfest has evolved to give an International platform to all the tech-enthusiasts who want to prove their calibre in science and technology. Hence, Techfest brings forth the International Robotics Challenge,a perfect combat between robotic gladiators finally leading to the survival of the fittest. 
		<br>
		The zonal qualifying rounds for International Robotics Challenge will be held in various countries. Winning entries of these zonal rounds will be invited to compete in the International Robotics Challenge Grand Finale to be held at Techfest 2017-18, IIT Bombay. The international participants who could not compete in the zonal rounds of IRC are allowed to participate in IRC International Open to be held at Techfest.
</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TASK</p>
		<p>
		1. There will be two bots, a manual bot and an autonomous bot. They need to coordinate with each other to complete the task. <br>
2. The autonomous bot has to solve the grid by following the white lines while avoiding the node,with help of image processing transfer blue block in a transfer zone which would be based on the direction of arrow on the sign board,put red block in red pit,cross the incline and Seesaw, transfer block with Techfest logo to third transfer zone. <br>
3. The manual bot has to cross curved and regular bridge, transfer the blocks from transfer zone to  pits and throw magnetic dart on the target. <br>
4. A maximum of 7 minutes will be allotted to each participating team.

		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:20px;">STRUCTURE</p>
		<p>
		The International zonal rounds for International Robotics Challenge will be held in different countries. The winners of the international zonals rounds will be invited to compete in International Robotics Challenge: The Grand Finale which will be held during Techfest.
<br>
 The Indian teams will have to qualify the IRC (India) to be able to participate in International Robotics Challenge: The Grand Finale which will be held during Techfest 2017-18.
<br>
 The International participants who could not compete in the zonal rounds are allowed to participate in IRC International Open to be held at Techfest 2017-18.
<br>
 Zonal round for Indian Participants (IRC India) to be held at IIT Bombay on 28th December,2017. Top two teams from each of the zonal rounds and IRC International Open will be qualified to compete at International Robotics Challenge Grand Finale to be held at Techfest, IIT Bombay.
<br>

		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">FAQs</p>
		<p>
<b> Who can participate ?</b><br> Student from any college & university with a valid ID card.
<br><br>
<b>How to register ?</b><br>
Please follow this process:- www.techfest.org -> Competitions -> International Challenge -> IRC -> Register
<br><br>
<b>How many persons can be there in one team?
</b><br>
One team can have maximum 5 members.
 <br><br>
<b>Can a team have members from different colleges?</b><br>
Yes, Students from different college can form a team.<br><br>
<b>Will any charging facility for our equipment be provided at the venue?</b><br>
Any kind of charging facility will not be provided to the participants at the venue.<br>
<b>What should I do if I want to change my team member?</b><br>
The participants who wish to change their team member will have to register once again with the details about their new team member, the new team formed will be provided with a different team id.
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-5">
		Harsh Sharma<br>
				Events Manager<br>
				harsh@techfest.org<br>
				+91 9407268415<br>
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-5">
			<p style="white-space: nowrap;">Prithviraj Gawande<br>
                    Events Manager<br>
                    prithviraj@techfest.org<br>
                    +91 9421741200<br>
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
							<a href="resource/IRC.pdf" target="_blank">
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
			<p class="prizes">Prizes worth<br>INR 3,00,000/-</p>
		</div>
	</div>
</div>
</div>

<!-- center element left section for laptop compleate -->



<!-- center elements start for mobile -->


<div class="mobileCenter">
	
	<h4 id="heading" class="heading">INTERNATIONAL ROBOTICS CHALLENGE</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
Since 1998, with it's motto of spreading science and technology, Techfest has evolved to give an International platform to all the tech-enthusiasts who want to prove their calibre in science and technology. Hence, Techfest brings forth the International Robotics Challenge,a perfect combat between robotic gladiators finally leading to the survival of the fittest. 
<br>
The zonal qualifying rounds for International Robotics Challenge will be held in various countries. Winning entries of these zonal rounds will be invited to compete in the International Robotics Challenge Grand Finale to be held at Techfest 2017-18, IIT Bombay. The international participants who could not compete in the zonal rounds of IRC are allowed to participate in IRC International Open to be held at Techfest.
</p>
		</div>

		<div class="child">
			<p class="headMobile">TASK</p>
			<p class="contentMobile">
1. There will be two bots, a manual bot and an autonomous bot. They need to coordinate with each other to complete the task. <br>
2. The autonomous bot has to solve the grid by following the white lines while avoiding the node,with help of image processing transfer blue block in a transfer zone which would be based on the direction of arrow on the sign board,put red block in red pit,cross the incline and Seesaw, transfer block with Techfest logo to third transfer zone. <br>
3. The manual bot has to cross curved and regular bridge, transfer the blocks from transfer zone to  pits and throw magnetic dart on the target. <br>
4. A maximum of 7 minutes will be allotted to each participating team.

			</p>
		</div>
		<div class="child">
			<p class="headMobile">STRUCTURE</p>
			<p class="contentMobile">The International zonal rounds for International Robotics Challenge will be held in different countries. The winners of the international zonals rounds will be invited to compete in International Robotics Challenge: The Grand Finale which will be held during Techfest.

 The Indian teams will have to qualify the IRC (India) to be able to participate in International Robotics Challenge: The Grand Finale which will be held during Techfest 2017-18.

 The International participants who could not compete in the zonal rounds are allowed to participate in IRC International Open to be held at Techfest 2017-18.

 Zonal round for Indian Participants (IRC India) to be held at IIT Bombay on 28th December,2017. Top two teams from each of the zonal rounds and IRC International Open will be qualified to compete at International Robotics Challenge Grand Finale to be held at Techfest, IIT Bombay.
				
			</p>
		</div>

		<div class="child">
			<p class="headMobile">FAQs</p><ul class="contentMobile" style="text-align: left;"> 
					<li>
						 Who can participate ?
				    </li>
				    <p>Student from any college & university with a valid ID card.</p>

				    <li>
						 How to register ?
				    </li>
				    <p>Please follow this process:- www.techfest.org -> Competitions -> International Challenge -> IRC -> register</p>
				    <li>
						How many persons can be there in one team?
				    </li>
				    <p>One team can have maximum 5 members.</p>
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

			<p class="contentMobile">
				

			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					Harsh Sharma<br>
				Events Manager<br>
				harsh@techfest.org<br>
				+91 9407268415<br>
				</div>
				<div class="row" style="margin: 5vh;text-align: center;">
				Prithviraj Gawande<br>
                    Events Manager<br>
                    prithviraj@techfest.org<br>
                    +91 9421741200<br>
				</div>
			</div>
		</div>

		<div class="child">
			Div Six
		</div>
	
</div>




			<div class="psMobi">
			<!-- <hr style="width: 93%;text-align: center;">			 -->
			<a href="#" style="color:white;text-decoration: none;"><b>Prizes Worth INR 3,00,000</b></a>
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
		</div>

</div>

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav(0)">&times;</a>
  <div class="overlay-content">
    <a href="#" onclick="closeNav(1)">About</a>
    <a href="#" onclick="closeNav(2)">Task</a>
    <a href="#" onclick="closeNav(6)">PROBLEM STATEMENT</a>
    <a href="#" onclick="closeNav(3)">Structure</a>
    <a href="#" onclick="closeNav(4)">FAQs</a>
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

	window.location.href="resource/IRC.pdf";
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
				<p class="yo" id="yo-2">STRUCTURE</p>
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