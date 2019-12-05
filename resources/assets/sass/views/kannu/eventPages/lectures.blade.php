@extends('kannu.eventLayer')

@section('title','Lectures')

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
#mobi{margin-top: -12vh;}

@media (max-width: 62em) and (orientation: landscape){

.center{width: 61vw;margin-left: 14vw;margin-top: 5vh;height:70%;background-image: none}
.hrMobi{width: 81%;}
.inelement{font-size:2.6vh;padding: 6vw;padding-top: 1vw;}

#mobi{top:-15vh}
}

@endsection




@section('content')

<!-- center element left section for laptop compleate -->
<div style="" class="contentLaptop">
	<img src="img/eventFinal/tabImg.png" class="img-responsive" style="width: 107%; margin-left: 2%; ">
	<div style="position: fixed;
    top: 26vh;
    left: 10vw;
    width: 35%;
    ">

	<h4 style="font-family: 'pirulen';    font-size: 4rem;text-align: left;
    letter-spacing: 3px;color: #fefefe" id="abhinav">LECTURES</h4>
    <hr style="margin-top: 0px;
    border: 1.5px solid #dafcff;
    -webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
-moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
">
</div>
<!-- <div class="row" > -->
	<div class="col-sm-5 centerLapi" style="position: fixed;
    top: 38vh;font-size: 2.5vh;text-align: left;
    left: 9vw;color: #fefefe;font-family: 'Play', sans-serif; height: 44vh; overflow: auto;
    ">
		<p id="kaushik" style="text-align:left">
			Step into the shoes of some of the most dynamic and pioneering personalities of the Zion, as they give you an insight into their lives and research. A segment tailored for the amateur minds of the country. Inspiring, Innovative, Revolutionary, Unorthodox stories, we've got them all here at Techfest, IIT Bombay.
		</p>

            <div style="margin-top: 3vh">
          <section class="demo-3" class="lapitopi" >
                    <div class="grid">
                        <a  id="compi01" href="#">
                            <div class="box" style="margin-left: 0rem;">
                                <p class="btnText" style="color:#dafdff;margin-top:7%;" >
                                    <a href="/lectures17" style="color:#dafdff">Explore More
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
<img src="img/2018/lectures.png" style="position: absolute;
    width: 65%;left:65%;top:-2%;" >
</div>


</div>




<div class="center" style="background: none">
<div class="content" style="position: absolute;">
<div>
	<h4 id="heading" class="heading">LECTURES</h4>
    <hr class="hrMobi">
</div>
<p class="inelement" id="inelement" style="height:54vh;overflow:auto;text-align: justify;">
	Step into the shoes of some of the most dynamic and pioneering personalities of the Zion, as they give you an insight into their lives and research. A segment tailored for the amateur minds of the country. Inspiring, Innovative, Revolutionary, Unorthodox stories, we've got them all here at Techfest, IIT Bombay.
</p>

<div class="row" style="margin-top: 3vh">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
    <section class="demo-3" id="mobi" onclick="openNav()">
                    <a href="/lectures17"><div class="grid" style="position:absolute;left:15%;">
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
                    </div></a>
    </section>
</div>
    <div class="col-xs-4"></div>
</div>

</div>
</div>



<!-- center element left section for laptop compleate -->


@endsection
