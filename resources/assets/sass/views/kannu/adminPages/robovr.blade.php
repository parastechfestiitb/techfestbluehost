
@extends('kannu.eventLayer')

@section('title','Privacy Policy')
@section('style')

<link rel="stylesheet" type="text/css" href="css/button.css">
<link rel="stylesheet" type="text/css" href="css/eventmobile.css">
<link rel="stylesheet" type="text/css" href="css/hamburger.css">
<link rel="stylesheet" href="css/topNavBar.css">
<style type="text/css">
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
.inelement{
  width:78%;
}
}
</style>


@endsection


@section('styling')
#inelement li{list-style-type:none}

#inelement b{font-size:110%}

#inelement li{
  margin-top:1vh;
    margin-bottom:1vh;
}


  #big{
    
    background-repeat: no-repeat;
    background-size: 1080px;
    background-image:url('');
    height: 100%;
    margin-top:2%;
    margin-left:5%;
    margin-right: 5%; 

  }

  
#small{
background-repeat: no-repeat;
    
    background-size:100% 100%;

    background-image:url('');
    height: 100%;
    width: 100%;
    margin-top:5%;
    margin-right: 5%;

}
body:not(:-moz-handler-blocked) {
    height: 100%;
}
html:not(:-moz-handler-blocked) {
    height: 100%;
}
#big:not(:-moz-handler-blocked) {
margin-top: 8%;
}

.inelement{font-size:2.4vh;text-align: justify;text-decoration: none;overflow:scroll;height:48vh;}
.center{margin-left: -5%;width:100vw;height:79%;background-image: url('img/eventsMob/box.png')}
.hrMobi{width: 86%;}

@media (max-width: 62em) and (orientation: landscape){
.center{width: 61vw;margin-left: 14vw;margin-top: 5vh;height:70%;background-image: none}
.hrMobi{width: 81%;}
.inelement{font-size:2.6vh;padding: 6vw;padding-top: 1vw;}
.content{padding-top:1vh}
}



@endsection




@section('content')




<div class="center" style="background: none">
<div class="content" style="position: absolute;">
<div>
    <h4 id="heading" class="heading">RoboVR 2017</h4>
    <hr class="hrMobi">
</div>   

   <ul class="inelement" id="inelement" style="" >
   <!-- <b>Commitment</b> -->
    <li style="text-align: justify;">
      A Robot Sports Competition!
Wondering what's human sports doing on a tech site?
Lets change the monotony in Sports & Games with a little twist!
Robots will play and entertain and you would manage the drill,
It would be your Robots rather than you, to make you win your hue.

    </li>

    <li style="text-align: center;"><a href="http://www.robovr.world/RoboVR/RoboVR.html" style="color: white;
    text-decoration: none;font-size: 150%;" target="_blank">Explore More</a></li>

   </ul>

   <div class="row">
<div class="col-sm-12 col-xs-12" style="text-align:center">
  <img src="img/2018/robovr.png" width="50%">
</div>



</div>




</div>
</div>







<!-- lappy -->

<div id="big" class="container hidden-sm hidden-xs"  style="width:80vw; overflow-x: hidden;">

<div  class="col-md-12 col-xs-12 col-sm-12 col-lg-10"  style=" position:absolute; overflow:hidden;height: 60vh; float: left;" >
  <div data-v-5ab1ab80="" class="header col-md-12 col-sm-12 col-lg-12"  style=" position: relative; overflow: hidden; overflow-y: hidden;" >
                                    <h1 class="workshop-name" style="color: #fefefe; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family: pirulen">RoboVR 2017<br>
                                    <hr style="margin-top: 10px;border: 1.5px solid #dafcff;
                                 width: 60%; text-align: center;
                                      -webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
                                      -moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
                                      box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
                                      "> 

                                    </h1>
                                    </div>
                                  
<div  class="header col-md-12 col-sm-12 col-lg-12" style="scroll-behavior: smooth; margin-top: 2%; float:left; position:relative; overflow:scroll; height: 100%; ">

  <p style="color: #fefefe; opacity: 0.9; text-align:justify; transform: matrix(1, 0, 0, 1, 0, 0);width: 100%; font-family:Play; font-size: 20px;">A Robot Sports Competition!
Wondering what's human sports doing on a tech site?
Lets change the monotony in Sports & Games with a little twist!
Robots will play and entertain and you would manage the drill,
It would be your Robots rather than you, to make you win your hue.
</p>

<div class="row">
<div class="col-sm-12 col-xs-12" style="font-size: 200%;">
    <br>
    <a href="http://www.robovr.world/RoboVR/RoboVR.html" class="exploreButton" style="color: white;">
        EXPLORE MORE
    </a>
</div>
<div class="col-sm-12 col-xs-12">
  <img src="img/2018/robovr.png" width="20%">
</div>
</div>


</div>
</div>

</div>


@endsection