@extends('kannu.topLayer')

@section('title','Iot Challenge | Techfest IIT Bombay ')

@section('styling')
.overlay-content{top:20%;}
.psMobi{width:100%;text-align:center;font-size:2vh;margin: 1vh;margin-top:0.5vh;}
@media (max-width: 62em) and (orientation: landscape){
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
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="max-width: 107%;">
	<div style="position: fixed;
	top: 23vh;
	left: 10vw;
	">

	<h4 style="font-family: 'pirulen';    font-size: 3vh;
	letter-spacing: 3px;color: #fefefe" id="abhinav">IOT Challenge</h4>
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
			We believe that IoT is not only about connecting smart objects to the Internet. It's about solving challenges in our day-to-day lives.International IOT Challenge 2017 is the biggest challenge in the field of Internet of Things and will attract the best talent from across the world.


		</p>
	</div>
	<div id="kaushik1" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">REGISTER</p>
		<div class="col-sm-12">
		<p>To register for the event  :  <a href="http://robotechlabs.com/techfest-iot-challenge/" target="_blank">  Click Here  </a></p>
		</div>

	</div>

	<div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-12">
		<p> Isha </p>
             <p>Email: techfest.iot@gmail.com</p>
            <p>Contact No. +91 9540932700</p>
		</div>
		
	</div>



	<!-- <div id="kaushik2" class="kaushik">
		<p class="content-sub-heading" style="font-size:25px;">CONTACT US</p>
		<div class="col-sm-12">
		<p> Isha </p>
             <p>Email: techfest.iot@gmail.com</p>
            <p>Contact No. +91 9540932700</p>
		</div>
		
	</div> -->


<div style="height:2vh;"></div>
</div>






<div class="row comeon" style="position:relative; left:10vh;">
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi" >
				<div class="grid">
					<a  id="compi01" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;margin-top:3%;" >


								Problem Statement</sup>
							</p>
							<a href="/resource/workshop/IOT.pdf" target="_blank">
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
		<!--  -->
	</div>
	<div class="col-sm-4">
        <section class="demo-3" class="lapitopi">
				<div class="grid">
					<a id="compi02" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff" id="compiName02">
								<a href="#" id="compiName02" style="color:#dafdff">Register !</a>
							</p>
							<a id="compi02" href="http://robotechlabs.com/techfest-iot-challenge/" target="_blank">
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

	<h4 id="heading" class="heading">IOT CHALLENGE</h4>

	<hr class="hrMobi">


<div class="parent" style="font-family: 'Play';">

    <div class="child">
        <p class="headMobile">ABOUT</p>
        <p class="contentMobile">
            We believe that IoT is not only about connecting smart objects to the Internet. It's about solving challenges in our day-to-day lives.International IOT Challenge 2017 is the biggest challenge in the field of Internet of Things and will attract the best talent from across the world.
           

    </div>

    <div class="child">
        <p class="headMobile">Register</p>
        <p class="contentMobile">
         
		
		To register for the event  :  <a href="http://robotechlabs.com/techfest-iot-challenge/" target="_blank">  Click Here  </a>
		


        </p>
    </div>

   
    <div class="child">
        <div class="contentMobile">
            <div class="row" style="margin: 5vh;text-align: center;">
                <a href="https://www.facebook.com/profile.php?id=100001555552168" style="text-decoration: none;color: white;">Isha</a>
                <br>Email: techfest.iot@gmail.com<br>
               Contact No. +91 9540932700
                <br>
            </div>
        </div>
    </div>

	

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
					<a id="compi02" href="http://robotechlabs.com/techfest-iot-challenge/" target="_blank">
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
    <a href="#" onclick="closeNav(4)">Problem  Statement </a>
    <a href="#" onclick="closeNav(2)">Register</a>
    <a href="#" onclick="closeNav(3)">Contact </a>
    <!-- <a href="#" onclick="closeNav(4)">JUDGING</a> -->
    <!-- <a href="#" onclick="closeNav(5)">FAQs</a> -->
    <!-- <a href="#" onclick="closeNav(6)">Contact Us</a> -->
    <!-- <a href="#" onclick="closeNav(7)">Sponsors</a> -->
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
	else if (argument== 1 ) {
	    document.getElementById("myNav").style.width = "0%";
	    con[0].style.display="block";
	    con[1].style.display="none";
	    con[2].style.display="none";
	    con[3].style.display="none";
	    con[4].style.display="none";
	    
	    // con[7].style.display="none";
	}
	else if (argument== 2 ) {
	    document.getElementById("myNav").style.width = "0%";
	   con[0].style.display="none";
	    con[1].style.display="block";
	    con[2].style.display="none";
	    con[3].style.display="none";
	    con[4].style.display="none";
	  
	}
	else if (argument== 3 ) {
	    document.getElementById("myNav").style.width = "0%";
	    con[0].style.display="none";
	    con[1].style.display="none";
	    con[2].style.display="block";
	    con[3].style.display="none";
	    con[4].style.display="none";
	    
	}
	else if (argument== 4 ) {
	    document.getElementById("myNav").style.width = "0%";
	    window.location.href= "https://techfest.org/resource/workshops/IOT.pdf";
	    con[0].style.display="block";
	    con[1].style.display="none";
	    con[2].style.display="none";
	    con[3].style.display="none";
	    con[4].style.display="none";

	    
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
				<p class="yo" id="yo-1">Register</p>
				<div class="bro" id="bro-1" ></div>
				<div class="crax"></div>
			</a>
		</li>
		<li>
			<a class="vertical" onclick="btn(2)">
				<p class="yo" id="yo-2">Contact</p>
				<div class="bro" id="bro-2"></div>
				<div class="crax"></div>
			</a>
		</li>
		<!-- <li>
			<a class="vertical" onclick="btn(3)">
				<p class="yo" id="yo-3">Contact</p>
				<div class="bro" id="bro-3"></div>
				<div class="crax"></div>
			</a>
		</li> -->



		<!-- <li>
			<a class="vertical" onclick="btn(5)">
				<p class="yo" id="yo-4">FAQs</p>
				<div class="bro" id="bro-4"></div>
				<div class="crax"></div>
			</a>
		</li>



		<li>
			<a class="vertical" onclick="btn(4)">
				<p class="yo" id="yo-4">CONTACT US</p>
				<div class="bro" id="bro-4"></div>
				<div class="crax"></div>
			</a>
		</li> -->






		<li>
			<div class="crax-bottom"></div>
		</li>
	</ul>
	</div>
</div>


@endsection
