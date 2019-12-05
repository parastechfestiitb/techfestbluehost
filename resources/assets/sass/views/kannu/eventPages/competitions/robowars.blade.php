@extends('kannu.topLayer')

@section('title','Robowars | Competitions ')


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
<img src="/img/2018/essar.jpeg" style="height:80px;position:fixed;top:23vh;left:65vw;">
<img src="/img/2018/armada.jpg" style="height:80px;position:fixed;top:23vh;left:78vw;">

	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="width: 107%;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 5vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">INTERNATIONAL ROBOWARS</h4>
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
			We all had fantasies of spinning hand-sized beyblades and watching sparks fly off while growing up.  Ever wondered what 2 life-sized robots battling it out in an arena will look like?  With a sprawling arena to be placed at one of the most happening venues in the campus,  Techfest unveils the all-new Robowars Challenge which is going to be one of the biggest attraction of the festival.  Get ready to witness gears grinding and sparks flying with weapons like pneumatic pincers, weedy axes, chain saw tails, hurling maces, flamethrowers and many more. Get prepared for adrenaline gushing bouts, which will go down to the wire, and will keep you on the edge of your seats for the entire duration.
Be there at the all-new Robowars.
In a bigger arena
And a much larger audience. 
See you there!

		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TASK</p>
		<p>
			Design and construct a remote controlled robot capable of fighting a one on one tournament.
		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TIMELINE</p>
		<p>
			Last date for registration: <b>24th October</b>
			<br>Last date for submission of first abstract (outside Indian-subcontinent):<b> 30th September</b> 
			<br>Deadline for submission of abstract:<b> 15th October </b>
			<br>Submission of Safety Letter(pneumatics and hydraulics) by:<b> 15th October</b><br>
		<p class="content-sub-heading" style="font-size:20px;">A Shortlist based on abstracts will be uploaded on this webpage, and please refer Problem Statement for Judging and other criteria.</p>
		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">FAQs</p>
		<p>
<b>Who can participate ?</b><br>
Anyone can participate. There is no restriction of being a college student etc. 
<br><br>
<b>How to register ?</b><br> Please follow this process:- www.techfest.org -> competitions -> robowars> Register 
<br><br>
<b>How many persons can be there in one team?</b><br>
One team can have maximum 6 members. 
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
			Sachit Mehrotra<br>
			sachit@techfest.org<br>
			+919619264565
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-5">
			<p>Krish Mehta<br>
			krish@techfest.org<br>
			+917990632982
		</div>
	</div>
		<div id="kaushik5" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">RESOURCES</p>
		Security Letter: <a href="" style="text-decoration:none;"> PDF</a><br>
		For event specific terminologies please refer the Problem Statement rigorously.<br>
		<p class="contentMobile" style="margin-top:1%;">TUTORIALS<br>
		<a href="resource/robowarsResources/Introduction.pdf">General Introduction</a><br>
		<a href="resource/robowarsResources/Design%20Fundamentals.pdf">Design Fundamentals</a><br>
		<a href="resource/robowarsResources/Materials.pdf">Materials</a><br>
		<a href="resource/robowarsResources/Joining%20elements.pdf">Joining Elements</a><br>
		<a href="resource/robowarsResources/Motors%20and%20Transmissions.pdf">Motors and Transmissions</a><br>
		<a href="resource/robowarsResources/Weapons.pdf">Weapons</a><br>
		<a href="resource/robowarsResources/Electronics.pdf">Electronics</a><br>
		<a href="resource/robowarsResources/Batteries.pdf">Batteries</a><br>
		<a href="resource/robowarsResources/Combat%20Events.pdf">Combat Events</a><br>
		<a href="resource/robowarsResources/riobotz_combot_tutorial.pdf">Riobotz Combat Tutorial</a><br>
		<a href="resource/robowarsResources/Parts%20of%20a%20Combat%20Robot.pdf">Parts of a combat robot</a><br>
		<a href="http://www.societyofrobots.com/">Other Tutorials and Links: Society of Robotics</a><br>


		</p>
	</div>	

<div style="height:2vh;"></div>
</div>





<div class="row comeon" style="position:relative; left:10vh;bottom: 20vh;">
	<div class="col-sm-12 prize">
			<p class="" style="text-align: center;color: white;">Prizes worth INR 10,00,000/-</p>
		</div>

	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;margin-top:3%;" >


								<a href="#" id="compiName01" style="color:#dafdff" target="_blank">Problem Statement(120LBS)</a>
							</p>
							<a  id="compi01" href="resource/Robowars_v1.0.4.pdf" target="_blank">
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
	<!-- 	<div class="col-sm-12 prize">
			<p class="prizes">Prizes worth<br>INR 10,00,000/-</p>
		</div> -->

		 <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;margin-top:3%;" >


								<a href="#" id="compiName01" style="color:#dafdff" target="_blank">PROBLEM STATEMENT(30 LBS)</a>
							</p>
							<a  id="compi01" href="/resource/robowarsResources/Robowars30lbs_v1.0.4.pdf" target="_blank">
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
								<a href="#" id="compiName02" style="color:#dafdff">Results !</a>
							</p>
							<a id="compi02" href="/resource/robowarsResources/RobowarsSelections1718.pdf" target="_blank">
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
	
	<h4 id="heading" class="heading">ROBOWARS</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
				We all had fantasies of spinning hand-sized beyblades and watching sparks fly off while growing up.  Ever wondered what 2 life-sized robots battling it out in an arena will look like?  With a sprawling arena to be placed at one of the most happening venues in the campus,  Techfest unveils the all-new Robowars Challenge which is going to be one of the biggest attraction of the festival.  Get ready to witness gears grinding and sparks flying with weapons like pneumatic pincers, weedy axes, chain saw tails, hurling maces, flamethrowers and many more. Get prepared for adrenaline gushing bouts, which will go down to the wire, and will keep you on the edge of your seats for the entire duration.
Be there at the all-new Robowars.
In a bigger arena
And a much larger audience. 
See you there!
			</p>
		</div>

		<div class="child">
			<p class="headMobile">TASK</p>
			<p class="contentMobile">
Design and construct a remote controlled robot capable of fighting a one on one tournament.

			</p>
		</div>


		<div class="child">
			<p class="headMobile">FAQs</p>
		<p class="contentMobile">
<b>Who can participate ?</b><br>
Anyone can participate. There is no restriction of being a college student etc. 
<br><br>
<b>How to register ?</b><br> Please follow this process:- www.techfest.org -> competitions -> XXXX> Register 
<br><br>
<b>How many persons can be there in one team?</b><br>
One team can have maximum 6 members. 
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
			Last date for registration: <b>24th October</b>
			<br>Last date for submission of first abstract (outside Indian-subcontinent):<b> 30th September</b> 
			<br>Deadline for submission of abstract:<b> 15th October </b>
			<br>Submission of Safety Letter(pneumatics and hydraulics) by:<b> 15th October</b><br>
		<p class="contentMobile" style="font-size:3.2vh;color:lightslategrey;">A Shortlist based on abstracts will be uploaded on this webpage, and please refer Problem Statement for Judging and other criteria.</p>
		</p>

		</div>

		



		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					<a href="https://www.facebook.com/abhinav.kaushik.568" target="_blank" style="text-decoration: none;color: white;">
						Sachit Mehrotra</a><br>
				sachit@techfest.org<br>
				+91 9619264565<br>
				</div>
				<div class="row" style="margin: 5vh;text-align: center;">
				Krish Mehta<br>
				krish@techfest.org<br>
				+91 7990632982<br>
				</div>
			</div>
		</div>

		<div class="child">
			<p class="headMobile">RESOURCES</p>
					<p class="contentMobile" style="">
		Security Letter: <a href="" style="text-decoration:none;"> PDF</a><br>
		For event specific terminologies please refer the Problem Statement rigorously.<br>
		<p class="contentMobile" style="margin-top:1%;">TUTORIALS<br>
		<a href="resource/robowarsResources/Introduction.pdf">General Introduction</a><br>
		<a href="resource/robowarsResources/Design%20Fundamentals.pdf">Design Fundamentals</a><br>
		<a href="resource/robowarsResources/Materials.pdf">Materials</a><br>
		<a href="resource/robowarsResources/Joining%20elements.pdf">Joining Elements</a><br>
		<a href="resource/robowarsResources/Motors%20and%20Transmissions.pdf">Motors and Transmissions</a><br>
		<a href="resource/robowarsResources/Weapons.pdf">Weapons</a><br>
		<a href="resource/robowarsResources/Electronics.pdf">Electronics</a><br>
		<a href="resource/robowarsResources/Batteries.pdf">Batteries</a><br>
		<a href="resource/robowarsResources/Combat%20Events.pdf">Combat Events</a><br>
		<a href="resource/robowarsResources/riobotz_combot_tutorial.pdf">Riobotz Combat Tutorial</a><br>
		<a href="resource/robowarsResources/Parts%20of%20a%20Combat%20Robot.pdf">Parts of a combat robot</a><br>
		<a href="http://www.societyofrobots.com/">Other Tutorials and Links: Society of Robotics</a><br>


		</p>
		</p>
		</div>

		<div class="child" style="display:none">
	   <p class="headMobile">Sponsors</p>
           <div class="contentMobile" style="width: 100%;margin: auto;">
        	<img src="img/2018/essar.jpeg" style="width:80%;margin: auto;text-align: center;margin-left: 10%">
        	<img src="img/2018/armada.jpg" style="width:80%;margin: auto;text-align: center;margin-left: 10%">
           </div>
	</div>



	
</div>







			<div style="width:100%;text-align:center;font-size:2vh;margin-bottom: 3vh;">
			<!-- <hr style="width:93%">	 		 -->
			<a href="#" style="color:white;"><b>Prizes Worth INR 10,00,000/-</b></a><br>
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
					margin-top: 1.5rem;">Results</p>
					<a id="compi02" href="/resource/robowarsResources/RobowarsSelections1718.pdf" target="_blank">
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
    <a href="resource/Robowars_v1.0.4.pdf">PROBLEM STATEMENT(120 LBS)</a>
    <a href="resource/robowarsResources/Robowars30lbs_v1.0.4.pdf">PROBLEM STATEMENT(30 LBS)</a>
    <a href="#" onclick="closeNav(4)">TIMELINE</a>
    <a href="#" onclick="closeNav(3)">FAQs</a>
    <a href="#" onclick="closeNav(6)">RESOURCES</a>
    <a href="#" onclick="closeNav(5)">Contact Us</a>
    <a href="#" onclick="closeNav(7)">Sponsors</a>

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
    con[6].style.display="none";
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
    con[6].style.display="none";
	}
	if (argument== 3 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="block";
    con[3].style.display="none";
    con[4].style.display="none";
    con[5].style.display="none";
    con[6].style.display="none";
	}
	if (argument== 4 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="block";
    con[4].style.display="none";
    con[5].style.display="none";
    con[6].style.display="none";
	}
	if (argument== 5 ) {
    document.getElementById("myNav").style.width = "0%";
    con[0].style.display="none";
    con[1].style.display="none";
    con[2].style.display="none";
    con[3].style.display="none";
    con[4].style.display="block";
    con[5].style.display="none";
    con[6].style.display="none";
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
    con[6].style.display="none";
    // con[6].style.display="block";
	}

	if (argument== 7 ) {
		window.location.href="#";
	    document.getElementById("myNav").style.width = "0%";
	    con[0].style.display="none";
	    con[1].style.display="none";
	    con[2].style.display="none";
	    con[3].style.display="none";
	    con[4].style.display="none";
	    con[5].style.display="none";
	    con[6].style.display="block";
	}






}

</script>

@endsection