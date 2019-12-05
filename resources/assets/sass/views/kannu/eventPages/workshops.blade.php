@extends('kannu.eventLayer')

@section('title','Workshops')
@section('style')

<link rel="stylesheet" type="text/css" href="css/button.css">
<link rel="stylesheet" type="text/css" href="css/eventmobile.css">
<link rel="stylesheet" type="text/css" href="css/hamburger.css">
<link rel="stylesheet" href="css/topNavBar.css">

@endsection


<!-- @section('styling')


.inelement{font-size:2.4vh}
.center{margin-left: -5%;height:79%;background-image: url('img/eventsMob/box.png')}
.hrMobi{width: 86%;}

@media (max-width: 62em) and (orientation: landscape){

.center{width: 61vw;margin-left: 14vw;margin-top: 5vh;height:70%;background-image: none}
.hrMobi{width: 81%;}
.inelement{font-size:2.6vh;padding: 6vw;padding-top: 1vw;}
}

@endsection
 -->

@section('styling')

.inelement{font-size:2.4vh}
.center{margin-left: -5%;height:79%;background-image: url('img/eventsMob/box.png')}
.hrMobi{width: 86%;}
#mobi{margin-top: -4vh;}

@media (max-width: 62em) and (orientation: landscape){

.center{width: 61vw;margin-left: 14vw;margin-top: 5vh;height:70%;background-image: none}
.hrMobi{width: 81%;}
.inelement{font-size:2.6vh;padding: 6vw;padding-top: 1vw;}

#mobi{top:-15vh}
}

#button_coming{
     margin-top: 3vh;
}

#button_coming:not(:root:root){ 
    /* ^_^ */ 
    margin-top: 7vh;
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

    <h4 style="font-family: 'pirulen';    font-size: 4rem;text-align: left;
    letter-spacing: 3px;color: #fefefe" id="abhinav">WORKSHOPS</h4>
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
    left: 9vw;color: #fefefe;font-family: 'Play', sans-serif; height: 44vh; overflow: auto;
    ">
        <p id="kaushik" style="text-align:left">
            Did you dream of making the Iron Man suit? Did you dream of building the Autobots? Are you fascinated by the gadgets and want to know how they work? Well, here's an opportunity for you to learn and explore the ingenious technologies, a chance to work under the guidance of renowned professionals and interact with other students who share common interests. Buckle up and get ready to have hands-on, enriching experience and realize your dreams.<br>
         <!--    Workshops will be launched soon. -->
        </p>
        <div class="col-sm-4"></div>
        <div class="col-sm-4" style="margin-top: 3vh;">
        <section class="demo-3" class="lapitopi" >  
				<div class="grid">
					<a  id="compi01" href="#">
						<div class="box" style="margin-left: 0rem;">
							<p class="btnText" style="color:#dafdff;margin-top:7%;" >


								<a href="#" id="compiName01" style="color:#dafdff" target="_blank">COMING SOON</a>
							</p>
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



<div class="circleLapi">
<div style="position: relative;top: 15%;left: -6%;" class="circleLapi">
<img src="img/2018/workshops.png" style="position: absolute;
    width: 65%;left:65%;top:-2%;" >
</div>


</div>




<div class="center" style="background:none">
<div class="content" style="position: absolute;">
<div>
    <h4 id="heading" class="heading">WORKSHOPS</h4>
    <hr class="hrMobi">
</div>
<p class="inelement" id="inelement"  style="height:54vh;overflow:auto;text-align: justify;">
   Did you dream of making the Iron Man suit? Did you dream of building the Autobots? Are you fascinated by the gadgets and want to know how they work? Well, here's an opportunity for you to learn and explore the ingenious technologies, a chance to work under the guidance of renowned professionals and interact with other students who share common interests. Buckle up and get ready to have hands-on, enriching experience and realize your dreams<br>Workshops will be launched soon.
</p>
</div>


<div class="row" style="position: relative;
    margin-top: 3vh;
    bottom: -57vh;">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <section class="demo-3" id="mobi" onclick="openNav()">  
                    <a href="#"><div class="grid" style="position:absolute;left:15%;">
                        <div class="box">
                        <p class="btnText" style="font-size: 1.5rem;
        text-align: center;
        margin-top: 8%;">Coming Soon</p>
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
                    </div></a>
    </section>
</div>
    <div class="col-xs-4"></div>
</div>




</div>



<!-- center element left section for laptop compleate -->


@endsection