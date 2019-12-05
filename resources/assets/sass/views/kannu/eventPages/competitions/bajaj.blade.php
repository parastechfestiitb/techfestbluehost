@extends('kannu.topLayer')

@section('title','Bajaj Electricals Hackathon | Competitions ')




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
	<img src="https://techfest.org/img/sponsors/18/bajaj.png"  style="height:100px !important;position: fixed;top: 23vh;right: 27vw;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 3vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">Bajaj Electricals Hackathon</h4>
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
		<p style="color: yellow">Date: 29th and 30th December 2017</p>

		This competition is launched with the vision to ignite ideas and foster innovations to reform and transfigure the present scenario in India. Techfest summons all tinkerers to bring in their ideas and act to change the life of millions. This hackathon is part of Bajaj Electricals’ collaborative innovation initiative, Navachar.
		Please visit <a href="http://navachar.in" target="_blank"> Navachar.in </a> for more exciting innovation possibilities
		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TASK</p>
		<p>
		Participants are required to come up with new innovative solutions that are directed towards the following end Goals, through the given Themes
		</p>
	</div>
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">Rules</p>
		<p>


<b>Prizes:</b><br>

Top 5 teams will be given 10,000 INR Prize money each. Teams with positions 6th to 30th will get 2,000 INR each for their innovative ideas.<br><br>
		<b>General Rules:</b><br>
Working prototypes of these innovative solutions must be submitted once the Hackathon is
completed, so that the process of evaluation can be completed by the respected judges for finalizing the winners.
<br><br>
<b>Timeline:</b><br>
Participants are expected to ideate and do background research on the above stated problems statements before the days of the Hackathon. After the Ideation phase, on the day of the Hackathon, you will be required to implement your ideas, make a prototype and submit it there and then.<br><br>


<b>Hardware Provided and Resources Allowed:</b>

1.Basic electronics (will be provided by Techfest)<br>
a.Breadboards, wires, switches, LEDs (will be provided by Techfest)<br>
b.Microcontroller units – Arduino (will be provided by Techfest)<br>
2.Interfacing unit - ESP8266 (IoT) (will be provided by Techfest)<br>

3.All Open Source Code/Libraries, Google APIs etc (with clear mention of source in documentation)<br>
4.If any team feels the need to use any specific component apart from those mentioned here, please write a mail justifying your requirement at himanshu@techfest.org and we will look into it.<br><br>

<b>Team Specifications:</b><br>
A team may consist of a maximum of 4 participants. <br>
Students from different educational institutes can form a team.
<br><br>
<b>Note:</b><br>
Intellectual Property Rights-
The IP rights in the content(s) of the submitted entries and related prototype shall be assigned
to Bajaj Electricals Limited (“BEL”) without any further consideration. BEL shall have the rights to implement and commercialize the innovative solution submitted in the entries and prototype on industrial and manufacturing level.

<br><br>


		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">FAQs</p>
		<p>
		<b>Who can participate ?</b><br>
Anyone having a valid student ID card of their college or university is eligible to participate in this competition
<br><br>
<b>How to register ?</b><br> Please follow this process:- www.techfest.org -> Competitions -> Spectacle -> Bajaj Electricals Hackathon -> Register
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
		<div class="col-sm-12">
			<p>Himanshu Kala<br>
				Competitions Manager<br>
				himanshu@techfest.org<br></p>
		</div>
		<div class="col-sm-2"></div>
		<!-- <div class="col-sm-5">
			Rushikesh Bankar<br>
				Competitions Coordinator<br>
				+91 7021482393<br>
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
							<p class="btnText" style="color:#dafdff;margin-top:3%;" >
								Problem Statement
							</p>
							<a href="resource/Bajajhackathon.pdf" target="_blank">
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
		</div>
	</div>
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi">
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">Registration Closed !</a>
							</p>
							<a id="compi02">
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

	<h4 id="heading" class="heading">Bajaj Electricals Hackathon</h4>

	<hr class="hrMobi">


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
				This competition is launched with the vision to ignite ideas and foster innovations to reform and transfigure the present scenario in India. Techfest summons all tinkerers to bring in their ideas and act to change the life of millions.This hackathon is part of Bajaj Electricals’ collaborative innovation initiative, Navachar.
		Please visit <a href="http://navachar.in" target="_blank"> Navachar.in </a> for more exciting innovation possibilities
			</p>
		</div>

		<div class="child">
			<p class="headMobile">TASK</p>
			<p class="contentMobile">
					Participants are required to come up with new innovative solutions that are directed towards the following end Goals, through the given Themes
			</p>
		</div>


		<div class="child">
			<p class="headMobile">FAQs</p>
			<p>
				<ul class="contentMobile" style="list-style-type: none;">
					<b>Who can participate ?</b><br>
Anyone having a valid student ID card of their college or university is eligible to participate in this competition
<br><br>
<b>How to register ?</b><br> Please follow this process:- www.techfest.org -> Competitions -> Spectacle -> Bajaj Electricals Hackathon -> Register
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
			<p class="headMobile">RULES</p>

			<p>
				<ul class="contentMobile">

<b>Prizes:</b><br>

Top 5 teams will be given 10,000 INR Prize money each. Teams with positions 6th to 30th will get 2,000 INR each for their innovative ideas.<br><br>
		<b>General Rules:</b><br>
Working prototypes of these innovative solutions must be submitted once the Hackathon is
completed, so that the process of evaluation can be completed by the respected judges for finalizing the winners.
<br><br>
<b>Timeline:</b><br>
Participants are expected to ideate and do background research on the above stated problems statements before the days of the Hackathon. After the Ideation phase, on the day of the Hackathon, you will be required to implement your ideas, make a prototype and submit it there and then.<br><br>


<b>Hardware Provided and Resources Allowed:</b>

1.Basic electronics (will be provided by Techfest)<br>
a.Breadboards, wires, switches, LEDs (will be provided by Techfest)<br>
b.Microcontroller units – Arduino (will be provided by Techfest)<br>
2.Interfacing unit - ESP8266 (IoT) (will be provided by Techfest)<br>

3.All Open Source Code/Libraries, Google APIs etc (with clear mention of source in documentation)<br>
4.If any team feels the need to use any specific component apart from those mentioned here, please write a mail justifying your requirement at himanshu@techfest.org and we will look into it.<br><br>

<b>Team Specifications:</b><br>
A team may consist of a maximum of 4 participants. <br>
Students from different educational institutes can form a team.
<br><br>
<b>Note:</b><br>
Intellectual Property Rights-
The IP rights in the content(s) of the submitted entries and related prototype shall be assigned
to Bajaj Electricals Limited (“BEL”) without any further consideration. BEL shall have the rights to implement and commercialize the innovative solution submitted in the entries and prototype on industrial and manufacturing level.

<br><br>


				</ul>

			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					<p>Himanshu Kala<br>
				Competitions Manager<br>
				himanshu@techfest.org<br></p>
				</div>
				<!-- <div class="row" style="margin: 5vh;text-align: center;">
				Rushikesh Bankar<br>
				Competitions Coordinator<br>
				+91 7021482393
				</div> -->
			</div>
		</div>

		<div class="child">
			Div Six
		</div>

</div>







			<div class="psMobi">
			<!-- <hr style="width:93%">	 		 -->
			<a href="#" style="color:white;"><b>Prizes Worth INR 1,00,000</b></a>
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
					margin-top: 1.5rem;">Registration Closed</p>
					<a id="compi02" >
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

	window.location.href="resource/Bajajhackathon.pdf";
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