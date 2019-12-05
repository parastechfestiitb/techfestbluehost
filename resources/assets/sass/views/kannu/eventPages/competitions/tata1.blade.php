@extends('kannu.topLayer')

@section('title','Automation Challenge')
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
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 3vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">AUTOMATION CHALLENGE</h4>
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
		<p>Tata brings to you an out of the league competition, in which you would not have to play with bots or codes, but an opportunity to get a totally different industrial exposure. The purpose is to automate the alignment of the tail end of the Wire rod coil, which otherwise is aligned manually. The coil if not aligned, it will get stuck and may cause damage to the finished product (Wire rod). The production line may be also stopped. Thus, it is essential to automate the process. The system should work in red hot zone (550-900 Deg. Celsius).
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TASK</p>
		<p>
           The Participants need to build a mechanism which aligns the tail end of the coil automatically. Thus, making the operation very safe.         <br><br>
		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">STRUCTURE</p>
		<p>
		 <b>Competition will take place in 2 phases</b><br><br>
1. Phase I-Submission of detailed theoretical description of the solution. Successful
submissions must have the technical specs mentioned.<br>		
2. Phase II- Selected teams will move to phase II. Here the actual system will be developed.
These teams will have an opportunity to visit the shop floor and understand the challenge
directly. The final system needs to be demonstrated on the shop floor.<br><br>


 			<b>Rules:</b> <br>
			1. Challenge is open to Btech, Mtech and PhD students of any discipline.<br>
2. A team can comprise no more than 4 members.<br>
3. A team can have no more than one mentor or advisor.<br>
4. Each team needs to nominate a point-of-contact member.<br>
5. Each team needs to submit a proposal in the Phase I<br>
6. Mentor(s) from Tata will be available to guide selected teams during the competition.<br>
		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">FAQs</p>
		<p>

<b> Who can participate ?</b><br> 
Challenge is open to Btech, Mtech and PhD students having a valid Id.
<br><br>
<b>How to Register ?</b><br>
Please follow this process:- www.techfest.org -> Competitions -> TATA Pioneer's Makerthon -> AUTOMATION CHALLENGE -> Register
<br><br>
<b>How many persons can be there in one team?
</b><br>
One team can have maximum 4 members.
 <br><br>
<b>Can a team have members from different colleges?</b><br>
Yes, Students from different college can form a team.<br><br>

<b>What should I do if I want to change my team member?</b><br>
The participants who wish to change their team member will have to register once again with the details about their new team member, the new team formed will be provided with a different team id.
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-5">
			Himanshu Kala<br>
			Events Manager<br>
			himanshu@techfest.org<br>
			+91 8828290544
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-5">
			<p>
			Harsh Sharma<br>
				Events Manager<br>
				harsh@techfest.org<br>
				+91 9407268415<br>
		</div>
	</div>	

<div style="height:2vh;"></div>
</div>




<!-- lapi linking of ps -->

<div class="row comeon" style="position:relative; left:10vh;">
	<?php /*<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					<a  id="compi01" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;margin-top:3%;" >
								Problem Statement
							</p>
							<a href="resource/TataAutomationChallenge.pdf" target="_blank">
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
    </div>*/?>

	<div class="col-sm-2"></div>
	<div class="col-sm-4">
		<div class="col-sm-12 prize">
			<p class="prizes">Prizes worth<br>INR 3,00,000/-</p>
		</div>
	</div>

	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi">   
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">REGISTER NOW !</a>
							</p>
							<a id="compi02"  <?php /*href="/register/tata_automation_challenge" */ ?> href="https://www.tatainnoverse.com/tatapioneermakerthon/">
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
	
	<h4 id="heading" class="heading">AUTOMATION CHALLENGE</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
Tata brings to you an out of the league competition, in which you would not have to play with bots or codes, but an opportunity to get a totally different industrial exposure. The purpose is to automate the alignment of the tail end of the Wire rod coil, which otherwise is aligned manually. The coil if not aligned, it will get stuck and may cause damage to the finished product (Wire rod). The production line may be also stopped. Thus, it is essential to automate the process. The system should work in red hot zone (550-900 Deg. Celsius).
</p>
		</div>

		<div class="child">
			<p class="headMobile">TASK</p>
			<p class="contentMobile">
				 The Participants need to build a mechanism which aligns the tail end of the coil automatically. Thus, making the operation very safe. 
			</p>
		</div>
		<div class="child">
			<p class="headMobile">FAQs</p>
			<p>
				<ul class="contentMobile" style="list-style-type: none;"> 
					
					<li>
						 Who can participate ?<br>
						 <p>Student from any college & university with a valid ID card.</p>
				    </li>
				    

				    <li>
						 How to register ?<p>Please follow this process:- www.techfest.org -> Competitions -> Tata Pioneer's Makerthon -> Automation Challenge -> Register</p>
				    </li>
				    
				    <li>
						How many persons can be there in one team?
						<p>One team can have maximum 4 members.</p>
				    </li>
				    
				    <li>
						 Can a team have members from different colleges? 
						  <p>Yes, Students from different college can form a team.
				    </li>
				   
					</p>
				    
					<li>
						  What should I do if I want to change my team member?
						   <p>The participants who wish to change their team member will have to register once again with the details about their new team member, the new team formed will be provided with a different team id.
					</p>
				    </li>
				   
				</ul>
			</p>
		</div>

		<div class="child">
			<p class="headMobile">STRUCTURE</p>

			<p class="contentMobile">
				<b>Competition will take place in 2 phases</b><br><br>
1. Phase I-Submission of detailed theoretical description of the solution. Successful
submissions must have the technical specs mentioned.<br>		
2. Phase II- Selected teams will move to phase II. Here the actual system will be developed.
These teams will have an opportunity to visit the shop floor and understand the challenge
directly. The final system needs to be demonstrated on the shop floor.<br><br>


 			<b>Rules:</b> <br>
			1. Challenge is open to Btech, Mtech and PhD students of any discipline.<br>
2. A team can comprise no more than 4 members.<br>
3. A team can have no more than one mentor or advisor.<br>
4. Each team needs to nominate a point-of-contact member.<br>
5. Each team needs to submit a proposal in the Phase I<br>
6. Mentor(s) from Tata will be available to guide selected teams during the competition.<br>
			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;">
					Himanshu Kala<br>
					Events Manager<br>
					himanshu@techfest.org<br>
					+91 8828290544<br>
				</div>
				<div class="row" style="margin: 5vh;">
				Harsh Sharma<br>
				Events Manager<br>
				harsh@techfest.org<br>
				+91 9407268415<br>
				</div>
			</div>
		</div>

		<div class="child">
			Div Six
		</div>
	
</div>






<!-- linking of pdf for mobile -->

			<div class="psMobi">
			<!-- <hr style="width:93%">	 		 -->
			<a href="#" style="color:white;"><b>Prizes Worth INR 3,00,000</b></a>
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
					margin-top: 1.5rem;">REGISTER NOW !</p>
					<a id="compi02" <?php /*href="/register/tata1"*/?> href="https://www.tatainnoverse.com/tatapioneermakerthon/">
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
    <?php /*<a href="#" onclick="closeNav(6)">PROBLEM STATEMENT</a>*/ ?>
    <a href="#" onclick="closeNav(3)">FAQs</a>
    <a href="#" onclick="closeNav(4)">STRUCTURE</a>
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

	window.location.href="resource/TataAutomationChallenge.pdf";
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