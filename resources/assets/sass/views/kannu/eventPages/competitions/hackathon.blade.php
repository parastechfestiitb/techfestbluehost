@extends('kannu.topLayer')
@section('title','News Article Recommender | Competitions ')

@section('centerOne')





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


<!-- center element left section for laptop compleate -->
<div style="" class="contentLaptop">
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="max-width: 107%;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 5vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">News Article Recommender</h4>
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
			Have you ever thought, why the stuff that interests you the most is always on the top of your web feed. Here is where the intelligence of computer comes into picture. The internet stores data of each and every step you do and reacts accordingly. 
Techfest in association with Times Internet brings to you a competition that deals with the way that machine learns from the user and how better it improves user’s experience.



		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TASK</p>
		<p>
	The objective of this challenge is to develop a model to predict click
probability of recommended items based on attributes of context and user and predict
which recommended ad will be clicked.
		</p>
	</div>
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">FAQs</p>
		<p>
	<br><b>Who can participate ?</b><br>

Student from any college or university with a valid ID card can participate in the competition.
Non students(working professionals)  who are not current or ex TIL employees can participate. <br>

<br><b>How to register ?</b><br>
Please follow this process:- www.techfest.org -> Competitions -> News article recommender-> Register<br>
Or<br>
You can directly sign up on Techgig where the competition is hosted and register there.<br> 

<br><b>How many persons can be there in one team?</b><br>
You can register individually or in team. Max team size is 3 members. <br>

All participants of a team will have to register, only the leader will be allowed to make submissions. <br>

<br><b>Can a team have person from different colleges?</b> <br>
Yes<br>


<br><b>Can I register in more than one competition?</b> <br>
Yes, you can participate in more than one competition. It is recommended to focus on one competition as there may be some chances of slot clash.<br>


<br><b>What should I do if I want to change my team member?</b><br>
The participants who wish to change their team member will have to register once again with the details about their new team member, the new team formed will be provided with a different team id.<br>

		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TIMELINE</p>
		<p>
 <br><b>Nov 3 2017 </b>– Competition Live<br>
<br><b>Dec 10, 2017 </b>- Entry deadline. Registration closes<br>
<br><b>December 12, 2017</b> - Final submission deadline<br>

<br><b>December 15 2017</b> - Private leader board live<br>
<br><b>December 31 2017</b> - Final event at Techfest, IIT Bombay<br>


		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-5">
			Pranjal Agrawal<br>
				<!-- Events Manager<br> -->
				pranjal@techfest.org<br>
				+91 8828291914<br>
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-5">
			<p>Abbey George<br>
			<!-- Events Manager<br> -->
			abbey.techfest@gmail.com<br>
			+91 8454929799
		</div>
	</div>	

<div style="height:2vh;"></div>
</div>





<div class="row comeon" style="position:relative; left:10vh;">
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					<a  id="compi01" href="https://www.techgig.com/hackathon/NewsArticeRecommender">
						<div class="box" style="margin-left: 0rem;">

							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="https://www.techgig.com/hackathon/NewsArticeRecommender" id="compiName02" style="color:#dafdff">REGISTER</a>
							</p>
							<a id="compi02" href="https://www.techgig.com/hackathon/NewsArticeRecommender">
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
			<p class="prizes">Prizes worth<br>INR 250,000/-</p>
		</div>
	</div>
	<div class="col-sm-4">
        <!-- <section class="demo-3" class="lapitopi">   
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">Register !</a>
							</p>
							<a id="compi02" href="/register/enigma">
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
		</section> -->
	</div>
</div>
</div>

<!-- center element left section for laptop compleate -->



<!-- center elements start for mobile -->


<div class="mobileCenter">
	
	<h4 id="heading" class="heading">News Article Recommender</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
				Have you ever thought, why the stuff that interests you the most is always on the top of your web feed. Here is where the intelligence of computer comes into picture. The internet stores data of each and every step you do and reacts accordingly. 
Techfest in association with Times Internet brings to you a competition that deals with the way that machine learns from the user and how better it improves user’s experience.


			</p>
		</div>

		<div class="child">
			<p class="headMobile">TASK</p>
			<p class="contentMobile">
				The objective of this challenge is to develop a model to predict click
probability of recommended items based on attributes of context and user and predict
which recommended ad will be clicked. 


			</p>
		</div>


		<div class="child">
			<p class="headMobile">FAQs</p>
			<p class="contentMobile">
			<br><b>Who can participate ?</b><br>

Student from any college or university with a valid ID card can participate in the competition.
Non students(working professionals)  who are not current or ex TIL employees can participate. <br>

<br><b>How to register ?</b><br>
Please follow this process:- www.techfest.org -> Competitions -> News article recommender-> Register<br>
Or<br>
You can directly sign up on Techgig where the competition is hosted and register there.<br> 

<br><b>How many persons can be there in one team?</b><br>
You can register individually or in team. Max team size is 3 members. <br>

All participants of a team will have to register, only the leader will be allowed to make submissions. <br>

<br><b>Can a team have person from different colleges?</b> <br>
Yes<br>


<br><b>Can I register in more than one competition?</b> <br>
Yes, you can participate in more than one competition. It is recommended to focus on one competition as there may be some chances of slot clash.<br>


<br><b>What should I do if I want to change my team member?</b><br>
The participants who wish to change their team member will have to register once again with the details about their new team member, the new team formed will be provided with a different team id.<br>


			</p>
		</div>

		<div class="child">
			<p class="headMobile">TIMELINE</p>

             <p class="contentMobile"><br>
 <br><b>Nov 3 2017 </b>– Competition Live<br>
<br><b>Dec 10, 2017 </b>- Entry deadline. Registration closes<br>
<br><b>December 12, 2017</b> - Final submission deadline<br>

<br><b>December 15 2017</b> - Private leader board live<br>
<br><b>December 31 2017</b> - Final event at Techfest, IIT Bombay<br>

			</p>

		</div>


		<div class="child">
			<div class="contentMobile">
				<div class="row" style="margin: 5vh;text-align: center;">
					Pranjal Agrawal<br>
				<!-- Events Manager<br> -->
				pranjal@techfest.org<br>
				+91 8828291914<br>
				</div>
				<div class="row" style="margin: 5vh;text-align: center;">
				Abbey George<br>
				<!-- Events Manager<br> -->
				abbey.techfest@gmail.com<br>
				+91 8454929799<br>
				</div>
			</div>
		</div>

		<div class="child">
			Div Six
		</div>
	
</div>







			<div class="psMobi">
            
			<a href="#" style="color:white; margin-left: 14%; font-size:2vh;"><b>Prizes Worth INR 250,000</b></a>
			</div>



		<div style="padding-top:1vh;  margin-top: 4%;" >
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
					margin-top: 1.5rem;">REGISTER</p>
					<a id="compi02" href="https://www.techgig.com/hackathon/NewsArticeRecommender">
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
    <a href="#" onclick="closeNav(3)">FAQs</a>
    <a href="#" onclick="closeNav(4)">TIMELINE</a>
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
				<p class="yo" id="yo-2">FAQs</p>
				<div class="bro" id="bro-2"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(3)">
				<p class="yo" id="yo-3">TIMELINE</p>
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