@extends('kannu.topLayer')

@section('title','Innovation Challenge | Techfest ')


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
    
    <div>
    <a href="http://www.sofworld.org/" target="_blank">
<img src="img/techfest_sof/logo.png" style="position: fixed;
    width: 20vh;
    top: 23vh;
    right: 40vw;
    z-index: 2;
    ">
    
    </a> 
    </div>
    
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="width: 107%;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 3.5vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">Innovation Challenge</h4>
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
		<p>Techfest IIT Bombay is pleased to present Innovation Challenge in collaboration with Science Olympiad Foundation (SOF) and support from Vikram Sarabhai Space Centre, ISRO for the innovative and creative minds of the country.
            <br>
            
Students from classes 8, 9 & 10 who appear in the SOF-National Science Olympiad can participate in “SOF-Techfest Innovation Challenge”. The competition will be conducted in two phases. In the first phase, students have to submit the solution of the problem statement which will be available in National Science Olympiad examination paper held on 9th Nov & 23rd Nov.<br>
<br>
		Top 15 participants from the country will be invited to Techfest: Asia’s Largest Science & Technology Festival for 2nd phase of the challenge. The 2nd phase will be a pen paper based examination to be held in IIT Bombay on 29th December. The final result will be announced on 30th December. Each of 15 students qualifying for the final round will be permitted to have an adult accompany her/him to IIT Bombay.
<br>
</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">SCHEDULE</p>
		<p>
		  <table style="width: 80%; height: 70%" >
                                            <tr>
                                                <th>NSO DATE</th>
                                                <th>CLASS</th>
                                                <th>SUBMISSION DATE & TIME</th>
                                            </tr>
                                            
                                            <tr>
                                                <td rowspan="3">9th November</td>
                                                <td>10th</td>
                                                <td> 24th Nov: 3PM to 8PM</td>
                                            </tr>
                                            <tr>
                                               
                                                <td>9th</td>
                                                <td> 25th Nov: 3PM to 8PM</td>
                                            </tr>
                                            <tr>
                                                <td>8th</td>
                                                <td>26th Nov: 3PM to 8PM</td>
                                            </tr>
                                            
                                            <tr>
                                                <td rowspan="3">23rd November</td>
                                                <td>10th</td>
                                                <td>26th Nov: 8AM to 1PM</td>
                                            </tr>
                                            <tr>
                                            
                                                <td>9th</td>
                                                <td>27th Nov: 3PM to 8PM</td>
                                            </tr>
                                            <tr>
                                                
                                                <td>8th</td>
                                                <td>28th Nov: 3PM to 8PM</td>
                                            </tr>
                                        </table>
		</p>
	</div>	
	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:20px;">Incentives</p>
		<p>
 Boarding, lodging and reimbursement of travel expenses for qualifying student and accompanying adult will be provided (up to Rs.2000/-  person). 
<br>
<ul>
<p>Coming to the interesting part now, the prizes that await the students….</p>
    <li>6 students to visit Vikram Sarabhai Space Centre, ISRO, Kerala. </li>
    <li>Merit Certificate and trophies for toppers of the Innovation Challeng</li>
    <li>Tablets for all 15 students qualified for 2nd level </li>
    <li>Opportunity to attend all programs at Techfest, IIT Bombay on 29th and 30th December </li>
    <li>Robotics Kit to top 5 students </li>
</ul>



		</p>
	</div>
	<div id="kaushik3" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">FAQs</p>
		<p>
<b> Who can participate ?</b><br> Students from class 8th, 9th and 10th who have registered for National Science Olympiad can participate.The problem statement will be found in NSO paper.

 <br><br>
 <b>What is the procedure to upload the solution?</b><br> 
 These Information will be provided later in November.
 <br><br>
 
 <!--<b>What is the procedure to upload the solution?</b><br> -->
 <!--These Information will be provided later in November.-->
 <!--<br><br>-->
 
<b>Where can I upload the solutions? </b><br>
The online portal will go live after NSO examination as per schedule. The link for Uploading the solution will be updated on this website.<br><br>

<b>What is the registration fee to participate in innovation challenge?</b><br>
Any student registered for NSO can participate for innovation challenge examination.<br>
		</p>
	</div>
	<div id="kaushik4" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-6">
		Naman<br>
		+91 9799560580 <br>
		</div>
		<div class="col-sm-2"></div>
		<div class="col-sm-6">
			<p style="white-space: nowrap;">Koustav<br>
                    +91 8209813265 <br>
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
							<p class="btnText" style="color:#dafdff;" >
							Know More
							</p>
							<a href="http://www.sofworld.org/sof-techfest-iit-bombay-innovation-challenge" target="_blank">
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
		<!--<div class="col-sm-12 prize">-->
		<!--	<p class="prizes">Prizes worth<br>INR 3,00,000/-</p>-->
		<!--</div>-->
	</div>
	<div class="col-sm-4">
  <!--      <section class="demo-3" class="lapitopi">   -->
		<!--		<div class="grid">-->
		<!--			<a id="compi02" href="#">-->
		<!--				<div class="box" style="margin-left: 0rem;">-->
		<!--					<p class="btnText" style="color:#dafdff" id="compiName02">-->
		<!--						<a href="#" id="compiName02" style="color:#dafdff">Register !</a>-->
		<!--					</p>-->
		<!--					<a id="compi02" href="/register/irc">-->
		<!--					<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">-->
		<!--						<line class="top" x1="0" y1="0" x2="200" y2="0"/>-->
		<!--						<line class="left" x1="0" y1="0" x2="0" y2="50"/>-->
		<!--						<line class="bottom" x1="0" y1="50" x2="200" y2="50"/>-->
		<!--						<line class="right" x1="200" y1="50" x2="200" y2="0"/>-->

		<!--						<line id="ro01" x1="0" y1="0" x2="200" y2="0"/>-->
		<!--						<line id="ro02" x1="0" y1="0" x2="0" y2="50"/>-->
		<!--						<line id="ro03" x1="0" y1="50" x2="200" y2="50"/>-->
		<!--						<line id="ro04" x1="200" y1="50" x2="200" y2="0"/>-->
		<!--					</svg>-->
		<!--					</a>-->
		<!--				</div>-->
		<!--			</a>-->
		<!--		</div>-->
		<!--</section>-->
	</div>
</div>

</div>

<!-- center element left section for laptop compleate -->



<!-- center elements start for mobile -->


<div class="mobileCenter">
	
	<h4 id="heading" class="heading">Innovation Challenge 2017</h4>

	<hr class="hrMobi">  


<div class="parent" style="font-family: 'Play';">

		<div class="child">
			<p class="headMobile">ABOUT</p>
			<p class="contentMobile">
Techfest IIT Bombay is pleased to present Innovation Challenge in collaboration with Science Olympiad Foundation (SOF) and support from Vikram Sarabhai Space Centre, ISRO for the innovative and creative minds of the country.
            <br>
            
Students from classes 8, 9 & 10 who appear in the SOF-National Science Olympiad can participate in “SOF-Techfest Innovation Challenge”. The competition will be conducted in two phases. In the first phase, students have to submit the solution of the problem statement which will be available in National Science Olympiad examination paper held on 9th Nov & 23rd Nov.
<br>
 Top 15 participants from the country will be invited to Techfest: Asia’s Largest Science & Technology Festival for 2nd phase of the challenge. The 2nd phase will be a pen paper based examination to be held in IIT Bombay on 29th December. The final result will be announced on 30th December. Each of 15 students qualifying for the final round will be permitted to have an adult accompany her/him to IIT Bombay.


</p>
		</div>

		<div class="child">
			<p class="headMobile">SCHEDULE</p>
			<p class="contentMobile">
  <table style="width: 80%; height: 70%" >
                                            <tr>
                                                <th>NSO DATE</th>
                                                <th>CLASS</th>
                                                <th>SUBMISSION DATE & TIME</th>
                                            </tr>
                                            
                                            <tr>
                                                <td rowspan="3">9th November</td>
                                                <td>10th</td>
                                                <td> 24th Nov: 3PM to 8PM</td>
                                            </tr>
                                            <tr>
                                               
                                                <td>9th</td>
                                                <td> 25th Nov: 3PM to 8PM</td>
                                            </tr>
                                            <tr>
                                                <td>8th</td>
                                                <td>26th Nov: 3PM to 8PM</td>
                                            </tr>
                                            
                                            <tr>
                                                <td rowspan="3">23rd November</td>
                                                <td>10th</td>
                                                <td>26th Nov: 8AM to 1PM</td>
                                            </tr>
                                            <tr>
                                            
                                                <td>9th</td>
                                                <td>27th Nov: 3PM to 8PM</td>
                                            </tr>
                                            <tr>
                                                
                                                <td>8th</td>
                                                <td>28th Nov: 3PM to 8PM</td>
                                            </tr>
                                        </table>			</p>
		</div>
		<div class="child">
			<p class="headMobile">Incentives</p>
			<p class="contentMobile">
			    Boarding, lodging and reimbursement of travel expenses for qualifying student and accompanying adult will be provided (up to Rs.2000/-  person). 
<br>
<ul>
<p>Coming to the interesting part now, the prizes that await the students….</p>
    <li>6 students to visit Vikram Sarabhai Space Centre, ISRO, Kerala. </li>
    <li>Merit Certificate and trophies for toppers of the Innovation Challeng</li>
    <li>Tablets for all 15 students qualified for 2nd level </li>
    <li>Opportunity to attend all programs at Techfest, IIT Bombay on 29th and 30th December </li>
    <li>Robotics Kit to top 5 students </li>
</ul>


			</p>
		</div>

		<div class="child">
			<p class="headMobile">FAQs</p><ul class="contentMobile" style="text-align: left;"> 
			
		
 <b>What is the procedure to upload the solution?</b><br> 
 These Information will be provided later in November.
 <br><br>
 
 <!--<b>What is the procedure to upload the solution?</b><br> -->
 <!--These Information will be provided later in November.-->
 <!--<br><br>-->
 
 <b>What is the procedure for online submission?</b><br>
 Students have to visit this site ( www.techfest.org/innovationchallenge) after NSO exam and type the solution in the space provided.<br><br> 
<b>Where can I upload the solutions? </b><br>
The online portal will go live after NSO examination as per schedule. The link for Uploading the solution will be updated on this website.<br><br>

<b>What is the registration fee to participate in innovation challenge?</b><br>
<br>


					<li>
						 Who can participate ?
				    </li>
				    <p>Students from class 8th, 9th and 10th who have registered for National Science Olympiad can participate.The problem statement will be found in NSO paper.
				    </p>

				    <li>
						What is the procedure to upload the solution?
				    </li>
				    <p> These Information will be provided later in November.
				    </p>
				    <li>
					Where can I upload the solutions?
				    </li>
				    <p>The online portal will go live after NSO examination as per schedule. The link for Uploading the solution will be updated on this website</p>
				    <li>
						 What is the registration fee to participate in innovation challenge?
				    </li>
				    <p>Any student registered for NSO can participate for innovation challenge examination.
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
				<section class="demo-3" id="mobi01">
								<div class="grid"  style="position:absolute;right:15%;">
									<div class="box" id="regi">
									<p class="btnText" style="font-size: 1.5rem;
					text-align: center;
					margin-top: 1.5rem;">Register</p>
					<a id="compi02" href="/register/irc">
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
    <a href="#" onclick="closeNav(2)">Scehdule</a>
    <a href="#" onclick="closeNav(6)">Incentives</a>
    <!--<a href="#" onclick="closeNav(3)">Structure</a>-->
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
				<p class="yo" id="yo-1">Schedule</p>
				<div class="bro" id="bro-1" ></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(2)">
				<p class="yo" id="yo-2">Incentives</p>
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