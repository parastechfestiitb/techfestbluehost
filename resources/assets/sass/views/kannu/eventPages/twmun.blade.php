@extends('kannu.eventLayer')

@section('title','TWMUN')
@section('style')

<link rel="stylesheet" type="text/css" href="css/button.css">
<link rel="stylesheet" type="text/css" href="css/eventmobile.css">
<link rel="stylesheet" type="text/css" href="css/hamburger.css">
<link rel="stylesheet" href="css/topNavBar.css">

@endsection



@section('styling')

.inelement{font-size:2.4vh}
.center{margin-left: -5%;height:79%;background-image: url('img/eventsMob/box.png')}
.hrMobi{width: 86%;}
#mobi{margin-top: -4vh;}

@media (max-width: 62em) and (orientation: landscape){

.center{width: 61vw;margin-left: 14vw;margin-top: 5vh;height:70%;background-image: none}
.hrMobi{width: 81%;}
.inelement{font-size:3vh;padding: 6vw;padding-top: 1vw;}

.content{padding-top:1vh}
#mobi{top:-12vh}
}

@endsection





@section('content')

<!-- center element left section for laptop compleate -->
<div style="" class="contentLaptop">
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="width: 107%; margin-left: 2%; ">
	<div style="position: fixed;
	top: 26vh;
	left: 10vw;text-align: center;
    width: 35%;
	">

	<h4 style="font-family: 'pirulen';    font-size: 4rem;
	letter-spacing: 3px;color: #fefefe; text-align:left;" id="abhinav">TWMUN</h4>
	<hr style="margin-top: 0px;
	border: 1.5px solid #dafcff;
	-webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
-moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
">
</div>
<!-- <div class="row" > -->
	<div class="col-sm-5 centerLapi" style="position: fixed;
	top: 38vh;font-size: 2.5vh;
	left: 9vw;color: #fefefe;font-family: 'Play', sans-serif; height: 45vh; overflow: auto;
	">
		<p id="kaushik" style="text-align:left">
			We should recognize the limitless potential in the young minds of the world to come up with comprehensive and convincing solutions to some of our most pressing concerns, and strengthen our efforts to provide a platform to their ideas. We present to you 3 days of a memorable MUNning experience that will give you such an opportunity with intense debate on gripping agendas in thrilling committees.

		</p>
	</div>

</div>



<div class="circleLapi">
<div style="position: relative;top: 15%;left: -6%;" class="circleLapi">
<img src="img/2018/twmun.png" style="position: absolute;
	width: 65%;top:-2%;left:65%;" >
</div>


</div>




<div class="center" style="background:none">
<div class="content" style="position: absolute;">
<div>
	<h4 id="heading" class="heading">TWMUN</h4>
	<hr class="hrMobi">
</div>
<p class="inelement" id="inelement" style="height:50vh;overflow:auto;margin-top: -4vh;text-align: justify;">
	We should recognize the limitless potential in the young minds of the world to come up with comprehensive and convincing solutions to some of our most pressing concerns, and strengthen our efforts to provide a platform to their ideas. We present to you 3 days of a memorable MUNning experience that will give you such an opportunity with intense debate on gripping agendas in thrilling committees.

</p>
<div class="row" style="margin-top: 3vh">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
	<section class="demo-3" id="mobi" onclick="openNav()">  
					<a href="/events/twmun" style=""><div class="grid" style="position:absolute;left:15%;">
						<div class="box">
						<p class="btnText" style="font-size: 1.5rem;
		text-align: center;
		margin-top: 8%; color:#fefefe; font-family:pirulen ">Explore More</p></a>
		<a href="/events/twmun" style="text-decoration: none;">
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
	<div class="col-xs-4"></div>
</div>

</div>
</div>



<!-- center element left section for laptop compleate -->


@endsection