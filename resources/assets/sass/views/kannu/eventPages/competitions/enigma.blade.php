@extends('kannu.topLayer')
@section('title','Enigma | Competitions ')

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
	letter-spacing: 3px;color: #fefefe" id="abhinav">ENIGMA</h4>
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
			<p style="color: yellow">Wildcard Round-29th December 2017 (9am-12pm)<br>
			Final Round- 30th December 2017 (9am-12pm)<br>
			Please note that Online Compiler is not allowed in the Competition</p><br>

			Planet Zion came out to be perfectly suitable for establishing civilization. But still more things were needed to be known about Zion in order to plan the necessities. He soon came to know that all the information he needs has been studied by the livings over there and stored somewhere. He somehow gets to the place but he came to know that the information is completely encrypted. <br>
            Now he's got all the hints which he needs to decode. Can you help Nova to decode it and help him establish a better living for humans?

		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">TASK</p>
		<p>
			Teams are required to solve the real life problems through coding. Programming skills of participants would be tested.

		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">FORMAT</p>
		<p>
			Event Description:<br>
            1. It is a 3 hour coding contest.<br>
            2. The teams will write codes for solving some of the trickiest numerical problems which can't be solved by using a calculator.<br>
3. Problems will be based on mathematical intricacies, statistical inferences, physics, seepage, real-life situations and other related stuff.<br><br>

Given below is a sample problem:<br>
Given n numbers such that their sum is not divisible by 4, remove k numbers such that after every removal, the sum of remaining numbers is not divisible by 4. Find the maximal sum of n-k remaining numbers.
<br><br>
Solution:<br>
Divide the initial n numbers into 4 separate arrays corresponding to the 4 different remainders they leave when divided by 4. Now, sort them. Lets call these arrays a0, a1, a2, a3. Now, if say the sum of n numbers is divisible by 4.<br>
f(k, a0, a1, a2, a3) = max {f(k-1, a0, a1+1,a2,a3), f(k-1,a0,a1,a2+1,a3), f(k-1,a0,a1,a2,a3+1) }
If the sum upon dividing with 4 gives a remainder of 1, we would have considered the arrays a0, a2 and a3.<br><br>

Test case: n = 10 {44, 12, 45, 23, 22, 34, 47, 37, 50, 31}, Sum = 345
<br><br>

Answers:<br>
k = 1, 333<br>
k = 2, 311<br>
k = 3, 279<br>
k = 4, 257<br>
k = 5, 223<br>
k = 6, 186<br>
k = 7, 142<br>
k = 8, 97<br>
k = 9, 50<br>
k = 10, 0<br><br>
Programming Languages Allowed:<br>

1. C<br>
2. C++<br>
3. Java<br>
4. Python<br>
5. Perl<br>

		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">JUDGING</p>
		<p>
		Scoring<br>
The exact marking scheme will be disclosed later. In case of a tie, the teams that tie will be given a problem and the winner will be decided on the basis of time taken to solve that problem.<br><br>


Eligibility<br>
All students with a valid identity card of their respective educational institutes are eligible to participate in the event.<br><br>


Certificate Policy<br>
1. Top three teams will qualify for the finale and will be awarded Certificate of Excellence for the Zonal round.<br>
2. Certificate of participation will be given to the top 50% teams(provided they have a non-zero score).<br><br>


		General Rules:<br>

1. The organisers reserve the rights to change any or all of the above rules as they deem fit. Change in rules, if any, will be highlighted on the website and notified to the registered teams.
<br>
2. Note that at any point of time, the latest information will be that which is on the site. The information provided in the pdf downloaded earlier may not be the latest. However, registered participants will be informed through mail about any such changes.<br>

3. Participants have to bring their own laptops during the competition.<br>

4. Charging points will be provided at the venue for assistance.<br>


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
			<p>Himanshu Kala<br>
			Events Manager<br>
			himanshu@techfest.org<br>
			+91 8828290544
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

							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">Register</a>
							</p>
							<a id="compi02" href="register/wildcard_enigma">
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
			<p class="prizes">Prizes worth<br>INR 26,000/-</p>
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
	
	<h4 id="heading" class="heading">ENIGMA</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
			<p style="color: yellow">	Wildcard Round-29th December 2017 (9am-12pm)<br>
			Final Round- 30th December 2017 (9am-12pm)<br>
			Please note that Online Compiler is not allowed in the Competition</p>
			<br>


				Planet Zion came out to be perfectly suitable for establishing civilization. But still more things needed to be known about Zion in order to plan the necessities. He soon came to know that all the information he needs has been studied by the livings over there and stored somewhere. He somehow gets to the place but he came to know that the information is completely encrypted.<br>
Now he's got all the hints which he needs to decode. Can you help Nova to decode it and help him establish a better living for humans?

			</p>
		</div>

		<div class="child">
			<p class="headMobile">TASK</p>
			<p class="contentMobile">
				Teams are required to solve the real life problems through coding. Programming skills of participants would be tested.

			</p>
		</div>


		<div class="child">
			<p class="headMobile">FORMAT</p>
			<p class="contentMobile">
				Event Description:<br>
1. It is a 3 hour coding contest.<br>
2. The teams will write codes for solving some of the trickiest numerical problems which can't be solved by using a calculator.<br>
3. Problems will be based on mathematical intricacies, statistical inferences, physics, seepage, real-life situations and other related stuff.
<br><br>
Given below is a sample problem:<br>
Given n numbers such that their sum is not divisible by 4, remove k numbers such that after every removal, the sum of remaining numbers is not divisible by 4. Find the maximal sum of n-k remaining numbers.<br><br>

Solution:<br>
Divide the initial n numbers into 4 separate arrays corresponding to the 4 different remainders they leave when divided by 4. Now, sort them. Lets call these arrays a0, a1, a2, a3. Now, if say the sum of n numbers is divisible by 4.
f(k, a0, a1, a2, a3) = max {f(k-1, a0, a1+1,a2,a3), f(k-1,a0,a1,a2+1,a3), f(k-1,a0,a1,a2,a3+1) }
If the sum upon dividing with 4 gives a remainder of 1, we would have considered the arrays a0, a2 and a3.
<br>
Test case: n = 10 {44, 12, 45, 23, 22, 34, 47, 37, 50, 31}, Sum = 345

<br>
Answers:<br>
k = 1, 333<br>
k = 2, 311<br>
k = 3, 279<br>
k = 4, 257<br>
k = 5, 223<br>
k = 6, 186<br>
k = 7, 142<br>
k = 8, 97<br>
k = 9, 50<br>
k = 10, 0<br><br>
Programming Languages Allowed:<br>

1. C<br>
2. C++<br>
3. Java<br>
4. Python<br>
5. Perl<br>


			</p>
		</div>

		<div class="child">
			<p class="headMobile">JUDGING</p>

             <p class="contentMobile">Scoring<br>
The exact marking scheme will be disclosed later. In case of a tie, the teams that tie will be given a problem and the winner will be decided on the basis of time taken to solve that problem.<br><br>


Eligibility<br>
All students with a valid identity card of their respective educational institutes are eligible to participate in the event.<br><br>


Certificate Policy<br>
1. Top three teams will qualify for the finale and will be awarded Certificate of Excellence for the zonal round.<br>
2. Certificate of participation will be given to the top 50% teams(provided they have a non-zero score).<br><br>


		General Rules:<br>

1. The organisers reserve the rights to change any or all of the above rules as they deem fit. Change in rules, if any, will be highlighted on the website and notified to the registered teams.
<br>
2. Note that at any point of time, the latest information will be that, which is on the site. The information provided in the pdf downloaded earlier may not be the latest. However, registered participants will be informed through mail about any such changes.<br>

3. Participants have to bring their own laptops during the competition.<br>

4. Charging points will be provided at the venue for assistance.
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
				Himanshu Kala<br>
				Events Manager<br>
				himanshu@techfest.org<br>
				+91 8828290544<br>
				</div>
			</div>
		</div>

		<div class="child">
			Div Six
		</div>
	
</div>







			<div class="psMobi">
            
			<a href="#" style="color:white; margin-left: 14%; font-size:2vh;"><b>Prizes Worth INR 26,000</b></a>
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
					margin-top: 1.5rem;">Register</p>
					<a id="compi02" href="/register/wildcard_enigma">
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
    <a href="#" onclick="closeNav(3)">FORMAT</a>
    <a href="#" onclick="closeNav(4)">JUDGING</a>
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
				<p class="yo" id="yo-2">FORMAT</p>
				<div class="bro" id="bro-2"></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(3)">
				<p class="yo" id="yo-3">JUDGING</p>
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