@extends('kannu.eventLayer')
@section('title','About')


@section('style')

<style type="text/css">

.header p{font-size: 40px;}
.sums{
	color: #fefefe; opacity: 0.9; text-align:justify; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 30px;
}
	#big{
		
		background-repeat: no-repeat;
		background-size: 1080px;
		background-image:url('img/final3/rectangle.png');
		margin-top:2%;
		margin-left:5%;
		margin-right: 5%; 
	}
body:not(:-moz-handler-blocked) {
    height: 100%;
}
html:not(:-moz-handler-blocked) {
    height: 100%;
}
	#big{
		height: 100%;
	}
	#big:not(:-moz-handler-blocked){
		height: auto;
	}
	#big:not(:-moz-handler-blocked){

		margin-top:10%;
		margin-right:5%;
height:100vh;
	}
	
#small{
background-repeat: no-repeat;
		
		background-size:100% 100%;

		/*background-image:url('img/final3/rectangleMobi.png');*/
		height: 100%;
		width: 100%;
		/*margin-top:5%;*/
		margin-right: 5%;

}
#one{
	height: 76%;
}
#one:not(:-moz-handler-blocked){
	height:auto;
}
#two{
	 height: 100%;
}
#two:not(:-moz-handler-blocked){
	height:50vh;
	overflow-x:hidden;
	overflow-y: scroll;
}
#three{
	height: 90%;
}
#three:not(:-moz-handler-blocked){
	height:auto;	
}


}

</style>

@endsection


@section('style2')
<style>
@media (max-width: 62em) (orientation: landscape){

#menu1 {
    /*left: 1.5vw;*/
    /*font-size: 1.1vw;*/

}
ul#menu1 li {
font-size: 1.1vw;
	}

ul#menu2 li {
font-size: 1.1vw;
}

.header h1{font-size: 110%;}

.header p{font-size: 20px;}
.sums{
	color: #fefefe; opacity: 0.9; 
	text-align:justify; transform: matrix(1, 0, 0, 1, 0, 0);
	width: 100%; font-family:Play; font-size: 15px;
}
.workshop-name{

}

}


@media (min-width: 62em) {
/*#small{*/

ul#menu1 li {
font-size: 0.8vw;
	}

ul#menu2 li {
font-size: 0.8vw;
}


}

@media (min-width:62em){
body{
	height:100%; 
}
html{
	height: 100%;
}
#overall{
	height: 100%;
}
}

</style>

@endsection

    <!-- @yield('content') -->		
@section('content')


<div id="small" class="container hidden-md hidden-lg"  style="width:100%; overflow-x: hidden; ">

<div  class="col-md-12 col-xs-12 col-sm-12 col-lg-6"  style=" position:absolute; overflow:hidden;height: 100%; float: left;" >
	<div data-v-5ab1ab80="" class="header col-md-12 col-sm-12 col-lg-12"  style=" position: relative; overflow: hidden; overflow-y: hidden;" >
                                    <h1 class="workshop-name" style="color: #fefefe; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family: pirulen">About Us<br>
                                    <hr style="margin-top: 10px;border: 1.5px solid #dafcff;
                                      width: 100%; text-align: center;
                                      -webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
                                      -moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
                                      box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
                                      "> 

                                    </h1>
                                    </div>
                                  
<div  class="header col-md-12 col-sm-12 col-lg-12" style="scroll-behavior: smooth; float:left; position:relative; overflow:scroll; height: 100%; ">
	<p style="color: lightslategray; opacity: 1; text-align:justify; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; "> Who we are?
	</p>
	<p class="sums">Started in 1998 with the motive of encouraging technology, scientific thinking and innovation, Techfest is now recognised as Asia's Largest Science and Technology festival with a footfall of more than 1,60,000 annually and a reach of over 2500+ Indian colleges and over 500+ colleges abroad.</p>




	<p style="color: lightslategray; opacity: 1; text-align:justify; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; "> How is Techfest built?
	</p>
	<p class="sums">Complete conceptualisation and execution of Techfest is done by students of IIT Bombay in a three-tier team structure. The core managerial team is of 23 members with 1 Overall Coordinator guiding 22 Managers. Techfest is a true believer in the concept of a team of equals. Every brickbat is shared equally by the team as is in every bouquet. Although every aspect of Techfest is no closer to one manager than the other but for smooth functioning, certain portfolios are allocated to every manager.
	
	<br>
The portfolios can be broadly categorised into two sections - administration and events. The administrative portfolios primarily include tasks like accounts, infrastructure, media and marketing, hospitality, publicity, web and creatives. The events portfolios include responsibility for each of the numerous happenings and initiatives taken by Techfest each year. A team of over 800 Coordinators and Organisers along with their respective managers work in synchronisation to execute and implement the splendid spectacle called Techfest.

</p>


<!-- second -->

	<p style="color: lightslategray; opacity: 1; text-align:justify; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; ">  Why come to Techfest?
	</p>
	<p class="sums">In its endeavour to provide an international platform for the youth to showcase their talents and skills in fierce competitions, displaying cutting edge technology and research from all over the globe, having world renowned personalities motivate the youth and promoting solutions to alleviate the common man of his banal yet significant problems, Techfest strives for one and all to get inspired and look up to.<br> <br><br><br><br><br></p>


<!-- thirds -->                                 
  </div>

</div>

</div>

<!-- Lappy -->
<div id="big" class="container hidden-sm hidden-xs"  style="width:100%; overflow-y: hidden; background:none">

<div  class="col-md-6 col-xs-12 col-sm-12 col-lg-6" id="one" style=" position:absolute; overflow:hidden; float: left;" >
	<div data-v-5ab1ab80="" class="header col-md-12 col-sm-12 col-lg-12"  style=" position: relative; overflow: hidden; overflow-y: hidden;" >
                                    <h1 class="workshop-name" style="color: #fefefe; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family: pirulen">About Us<br>
                                    <hr style="margin-top: 10px;border: 1.5px solid #dafcff;
                                 width: 60%; text-align: center;
                                      -webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
                                      -moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
                                      box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
                                      "> 

                                    </h1>
                                    </div>
                                  
<div  class="header col-md-12 col-sm-12 col-lg-12" id="two" style="scroll-behavior: smooth;  float:left; position:relative; overflow-y:scroll; overflow-x: hidden; ">
	<p style="color: lightslategray; opacity: 1; text-align: left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px;"> Who we are?
	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 16px;">Started in 1998 with the motive of encouraging technology, scientific thinking and innovation, Techfest is now recognised as Asia's Largest Science and Technology festival with a footfall of more than 1,60,000 annually and a reach of over 2500+ Indian colleges and over 500+ colleges abroad.</p>

	<p style="color: lightslategray; opacity: 1; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px;">How is Techfest built?
	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 16px;">Complete conceptualisation and execution of Techfest is done by students of IIT Bombay in a three-tier team structure. The core managerial team is of 23 members with 1 Overall Coordinator guiding 22 Managers. Techfest is a true believer in the concept of a team of equals. Every brickbat is shared equally by the team as is in every bouquet. Although every aspect of Techfest is no closer to one manager than the other but for smooth functioning, certain portfolios are allocated to every manager.
<br>
<br>
The portfolios can be broadly categorised into two sections - administration and events. The administrative portfolios primarily include tasks like accounts, infrastructure, media and marketing, hospitality, publicity, web and creatives. The events portfolios include responsibility for each of the numerous happenings and initiatives taken by Techfest each year. A team of over 800 Coordinators and Organisers along with their respective managers work in synchronisation to execute and implement the splendid spectacle called Techfest.

</p>

	<p style="color: lightslategray; opacity: 1; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px;"> Why come to Techfest?

	</p>
	<p style="color: #fefefe; opacity: 0.9; text-align: left; float:left; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 16px; ">In its endeavour to provide an international platform for the youth to showcase their talents and skills in fierce competitions, displaying cutting edge technology and research from all over the globe, having world renowned personalities motivate the youth and promoting solutions to alleviate the common man of his banal yet significant problems, Techfest strives for one and all to get inspired and look up to.
	<br>
	<br>
<br>
<br>
<br>
<br>

	</p>
                                       
                                </div>
</div>
<div  class=" col-md-6 col-lg-6 hidden-sm hidden-xs" id="three" style=" position: relative;  float:right; 
">

<iframe style="float: left; margin-top:20%;  " width="400" height="225" src="https://www.youtube.com/embed/IqU-eh-qbwQ?rel=0" frameborder="0" allowfullscreen=""></iframe>
</div>
</div>

<!-- center element left section for laptop compleate -->

@endsection