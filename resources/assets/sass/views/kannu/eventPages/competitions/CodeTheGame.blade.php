@extends('kannu.topLayer')

@section('title','Code The Game | Competitions ')


@section('styling')
.overlay-content{top:20%;}
.psMobi{width:100%;text-align:center;font-size:2vh;margin: 1vh;margin-top:0.5vh;}
@media (max-width: 62em) and (orientation: landscape){

.mobileCenter{overflow-x: hidden;}

.parent {
    height: 50%;
}
.overlay-content{top:2%;}
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
	<img src="https://techfest.org/img/sponsors/18/IBM_Logo.jpg" style="margin-top: 10%;position: fixed;top:5vh;right: 29vw;width: 180px;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 5vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">Code The Game</h4>
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
	top: 32vh;font-size: 1.8rem;height: 37vh;overflow: scroll;overflow-x: hidden;
	left: 9vw;color: #fefefe;font-family: 'Play', sans-serif;width:50%;

	">

	<div id="kaushik0" class="kaushik" style="display: block;">
		<p class="content-sub-heading" style="font-size:25px;">ABOUT</p>
		<p>
			You've probably come across tons of fantasy cricket sites, where you select 11 players before the start of a season and then depending on how your well the players you selected perform, you just might become eligible for the prizes on offer. We have a similar Problem.

  Techfest in collaboration with <b>IBM</b> brings forth, Code The Game, a competition based on Data Analytics of T-20 matches. If you are a sports freak or if you like number crunching, this is a competition, you must participate in.

		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TASK</p>
		<p>
			The goal of the problem is to use the power of data analytics to analyse T-20 matches and build your T-20 Dream Team.
			<br><br>
			<b>Important Guidelines</b> <br><br>
Language to be used : Any open source language <br>
Platform : IBM Bluemix . <a href="https://www.ibm.com/cloud-computing/bluemix/" target="_blank">https://www.ibm.com/cloud-computing/bluemix/</a> <br>
Watson APIs to be used : Discovery, Alchemy API & ML Tools on IBM BlueMix: <a href="https://www.ibm.com/watson/developercloud/discovery.html" target="_blank">https://www.ibm.com/watson/developercloud/discovery.html</a> <br>
Outcome in the form of :  UI  where one can upload match data and get the output<br>

		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TIMELINE</p>
		<p>
			<b>1. Last date for registration:</b> 1st November <br>
<b>2. Last date for Final Analysis Report of Stage-1 (for all registered teams):</b> 1st November <br>
<b>3. Results and Shortlisting of top 30 teams:</b> 27th November <br>
<b>4. Preparation for Stage-2 (for top 30 teams):</b> 27th November-28th December<br>
<b>5. Presentation of your complete report:</b> 29th-31st December 2017 at Techfest, IIT Bombay<br>
		<p class="content-sub-heading" style="font-size:20px;">A Shortlist based on abstracts will be uploaded on this webpage, and please refer Problem Statement for Judging and other criteria.</p>
		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">FAQs</p>
		<p>
<b>Who can participate ?</b><br>
Anyone having a valid student ID card of their college or university is eligible to participate in this competition 
<br><br>
<b>How to register ?</b><br> Please follow this process:- www.techfest.org -> Competitions -> Contrivance -> Code The Game -> Register 
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
			Aditya Jadhav<br>
			Competitions Coordinator<br>
			+91 7821984483
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-5">
			<p>Shubham Punjabi<br>
			Competitions Coordinator<br>
			+91 9987092014
		</div>
	</div>
		<div id="kaushik5" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">RESOURCES</p>
<b> DATA </b> <br>
The T-20 Match Data which is to be analysed for Stage-1 is available at <br>

<a href="http://www.techfest.org/resources/MIvsKKR.pdf
" target="_blank">http://www.techfest.org/resources/MIvsKKR.pdf
</a>
Note: The Data is for Academic Purposes only<br>
<br><br>
<b>TUTORIALS</b><br>
		Primary Watson APIs Link which will help the Participants to solve the stage 1 and 2.<br><br>

 <a href="https://www.ibm.com/watson/services/discovery/" target="_blank">https://www.ibm.com/watson/services/discovery/</a><br>
<a href="https://www.ibm.com/watson/services/natural-language-understanding/
" target="_blank">https://www.ibm.com/watson/services/natural-language-understanding/
</a><br><br>
<b>FORUM FOR QUERIES</b><br>
<a href="https://join.slack.com/t/codethegamequeries/shared_invite/MjM1NTg2NjIyMzEwLTE1MDQyMDgwMDMtN2IyMzFjZmIwMQ" target="_blank">https://join.slack.com/t/codethegamequeries/shared_invite/MjM1NTg2NjIyMzEwLTE1MDQyMDgwMDMtN2IyMzFjZmIwMQ</a>
<br>
<a href="https://www.facebook.com/IBMUR/" target="_blank">https://www.facebook.com/IBMUR/</a>
<br>
	</div>	

<div style="height:2vh;"></div>
</div>





<div class="row comeon" style="position:relative; left:10vh;">
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;margin-top:3%;" >


								<a href="#" id="compiName01" style="color:#dafdff" target="_blank">Problem Statement</a>
							</p>
							<a  id="compi01" href="resource/CodeTheGame.pdf" target="_blank">
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
			<p class="prizes">Prizes worth<br>INR 1,00,000/-</p>
			<!-- <p style="font-size: 1vh;color:white;">Refer Problem Statement</p> -->
		</div>
	</div>
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi">   
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">Closed !</a>
							</p>
							<a id="compi02" href="/CodeTheGame">
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
				<p class="yo" id="yo-2">TIMELINE</p>
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
			<a class="vertical" onclick="btn(5)">
				<p class="yo" id="yo-4">RESOURCES</p>
				<div class="bro" id="bro-4"></div>
				<div class="crax"></div>
			</a>
		</li>		
		<li>
			<a class="vertical" onclick="btn(4)">
				<p class="yo" id="yo-5">CONTACT US</p>
				<div class="bro" id="bro-5"></div>
				<div class="crax"></div>
			</a>
		</li>					


		<li>
			<div class="crax-bottom"></div>
		</li>
	</ul>
	</div>
</div>




<!-- circular bar right section ends for lapi  -->


<!-- mobile side  navigation bar  -->

<!-- center elements start for mobile -->


<div class="mobileCenter">
	
	<h4 id="heading" class="heading">Code The Game</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
				You've probably come across tons of fantasy cricket sites, where you select 11 players before the start of a season and then depending on how your well the players you selected perform, you just might become eligible for the prizes on offer. We have a similar Problem.

  Techfest in collaboration with IBM brings forth, Code The Game, a competition based on Data Analytics of T-20 matches. If you are a sports freak or if you like number crunching, this is a competition, you must participate in.
			</p>
		</div>

		<div class="child">
			<p class="headMobile">TASK</p>
			<p class="contentMobile">
The goal of the problem is to use the power of data analytics to analyse T-20 matches and build your T-20 Dream Team.
<b>Important Guidelines</b> <br><br>
Language to be used : Any open source language <br>
Platform : IBM Bluemix . <a href="https://www.ibm.com/cloud-computing/bluemix/" target="_blank">https://www.ibm.com/cloud-computing/bluemix/</a> <br>
Watson APIs to be used : Discovery, Alchemy API & ML Tools on IBM BlueMix: <a href="https://www.ibm.com/watson/developercloud/discovery.html" target="_blank">https://www.ibm.com/watson/developercloud/discovery.html</a> <br>
Outcome in the form of :  UI  where one can upload match data and get the output<br>

			</p>
		</div>


		<div class="child">
			<p class="headMobile">FAQs</p>
		<p class="contentMobile">
<b>Who can participate ?</b><br>
Anyone having a valid student ID card of their college or university is eligible to participate in this competition 
<br><br>
<b>How to register ?</b><br> Please follow this process:- www.techfest.org -> Competitions -> Contrivance -> Code The Game -> Register 
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

		<div class="child">
			<p class="headMobile">TIMELINE</p>
		<p class="contentMobile">
			<b>1. Last date for registration:</b> 1st November <br>
<b>2. Last date for Final Analysis Report of Stage-1 (for all registered teams):</b> 1st November <br>
<b>3. Results and Shortlisting of top 30 teams:</b> 27th November <br>
<b>4. Preparation for Stage-2 (for top 30 teams):</b> 27th November-28th December<br>
<b>5. Presentation of your complete report:</b> 29th-31st December 2017 at Techfest, IIT Bombay<br>s
		<p class="contentMobile" style="font-size:3.2vh;color:lightslategrey;">A Shortlist based on abstracts will be uploaded on this webpage, and please refer Problem Statement for Judging and other criteria.</p>
		</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					
						Aditya Jadhav<br>
			Competitions Coordinator<br>
			+91 7821984483
				</div>
				<div class="row" style="margin: 5vh;text-align: center;">
				Shubham Punjabi<br>
			Competitions Coordinator<br>
			+91 9987092014
				</div>
			</div>
		</div>

		<div class="child">
			<p class="headMobile">RESOURCES</p>
					<p class="contentMobile" style="">
		<b> DATA </b> <br>
The T-20 Match Data which is to be analysed for Stage-1 is available at <br>
<a href="http://www.techfest.org/resources/MIvsKKR.pdf
" target="_blank">http://www.techfest.org/resources/MIvsKKR.pdf
</a>
Note: The Data is for Academic Purposes only.<br>
<br><br>
<b>TUTORIALS</b><br>
		Primary Watson APIs Link which will help the Participants to solve the stage 1 and 2.<br><br>

 <a href="https://www.ibm.com/watson/services/discovery/" target="_blank">https://www.ibm.com/watson/services/discovery/</a><br>
<a href="https://www.ibm.com/watson/services/natural-language-understanding/
" target="_blank">https://www.ibm.com/watson/services/natural-language-understanding/</a><br><br>

<b>FORUM FOR QUERIES</b><br>

<a href="https://join.slack.com/t/codethegamequeries/shared_invite/MjM1NTg2NjIyMzEwLTE1MDQyMDgwMDMtN2IyMzFjZmIwMQ" target="_blank">https://join.slack.com/t/codethegamequeries/shared_invite/MjM1NTg2NjIyMzEwLTE1MDQyMDgwMDMtN2IyMzFjZmIwMQ</a>
<br>
<a href="https://www.facebook.com/IBMUR/" target="_blank">https://www.facebook.com/IBMUR/</a>
<br>

		</p>
		</div>
	
</div>







			<div style="width:100%;text-align:center;font-size:2vh;margin-bottom: 3vh;">
			<!-- <hr style="width:93%">	 		 -->
			<a href="#" style="color:white;"><b>Prizes Worth INR 1,00,000/-</b></a><br>
			<a href="#" style="font-size:1vh;color:white;">Refer Problem Statement</a>
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
					margin-top: 1.5rem;">Closed !</p>
					<a id="compi02" href="/CodeTheGame">
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
    <a href="resource/CodeTheGame.pdf" target="_blank">PROBLEM STATEMENT</a>
    <a href="#" onclick="closeNav(4)">TIMELINE</a>
    <a href="#" onclick="closeNav(3)">FAQs</a>
    <a href="#" onclick="closeNav(6)">RESOURCES</a>
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
    // con[5].style.display="none";
	}

	if (argument== 2 ) {
    document.getElementById("myNav").style.width = "0%";
   con[0].style.display="none";
    con[1].style.display="block";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
    // con[6].style.display="none";
	}
	if (argument== 3 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="block";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
    // con[6].style.display="none";
	}
	if (argument== 4 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="block";
    con[4].style.display="none";
    con[5].style.display="none";
    // con[6].style.display="none";
	}
	if (argument== 5 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="block";
    con[5].style.display="none";
    // con[6].style.display="none";
	}
	if (argument== 6 ) {

	// window.location.href="resource/FullThrottle.pdf";
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="block";
    // con[6].style.display="block";
	}
	if (argument==7){
		// window.location.href=="techfest.org/resource/Robowars_v1.0.pdf"
	}





}

</script>

@endsection