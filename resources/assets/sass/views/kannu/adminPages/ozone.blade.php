@extends('kannu.eventLayer')

@section('title','Ozone')
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

    @media (max-width: 62em) and (orientation: landscape){

    .center{width: 61vw;margin-left: 14vw;margin-top: 5vh;height:70%;background-image: none}
    .hrMobi{width: 81%;}
    .inelement{font-size:2.6vh;padding: 6vw;padding-top: 1vw;}

    }
@endsection
@section('content')
    <div style="" class="contentLaptop">
        <img src="img/eventFinal/tabImg.png" class="img-responsive" style="width: 107%; margin-left: 2%; ">
        <div style="position: fixed;
    top: 26vh;
    left: 10vw;text-align: center;
    width: 35%;
    ">

            <h4 style="font-family: 'pirulen';    font-size: 4rem;text-align: left;
    letter-spacing: 3px;color: #fefefe" id="abhinav">OZONE</h4>
            <hr style="margin-top: 0px;
    border: 1.5px solid #dafcff;
    -webkit-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
-moz-box-shadow: 0px 0px 289px 104px rgba(0,131,177,0.77);
box-shadow: 0px 0px 13px 2px rgba(0,131,177,0.77);
">
        </div>
        <div class="col-sm-5 centerLapi" style="position: fixed;
    top: 38vh;font-size: 2.5vh;
    left: 9vw;color: #fefefe;font-family: 'Play', sans-serif; height: 44vh; overflow: auto;
    ">
            <p id="kaushik" style="text-align:left; height: 80%; overflow: auto;">
                “Most of the time I don't have much fun. The rest of the time I don't have any fun at all.”
                -Woody Allen<br>
                ...but then Woody hasn’t experienced Ozone yet, has he?<br>
                With offbeat eccentric events, Ozone keeps the festive spirit alive. From every imaginable angle with a dazzling array of addictive games, enchanting street events, whacky competitions and funky workshops with a tinge of tech, Ozone is the place where you can lose yourself and enjoy to the fullest.<br>
                If you aren’t the typical geeky engineer, then ozone is the place for you. No pre-registrations, No pre-requisites, you just need some adrenaline to expect the unexpected this December.
                Miss it at your own risk!
            </p>
        </div>
    </div>
    <div class="circleLapi">
        <div style="position: relative;top: 15%;left: -6%;" class="circleLapi">
            <img src="img/2018/ozone.png" style="position: absolute;
    width: 65%;top:-2%;left:65%" >
        </div>
    </div>
    <div class="center" style="background:none">
        <div class="content" style="position: absolute;">
            <div>
                <h4 id="heading" class="heading">OZONE</h4>
                <hr class="hrMobi">
            </div>
            <p class="inelement" id="inelement"  style="height:54vh;overflow:auto;text-align: justify;">
                “Most of the time I don't have much fun. The rest of the time I don't have any fun at all.”
                -Woody Allen<br>
                ...but then Woody hasn’t experienced Ozone yet, has he?<br>
                With offbeat eccentric events, Ozone keeps the festive spirit alive. From every imaginable angle with a dazzling array of addictive games, enchanting street events, whacky competitions and funky workshops with a tinge of tech, Ozone is the place where you can lose yourself and enjoy to the fullest.<br>
                If you aren’t the typical geeky engineer, then ozone is the place for you. No pre-registrations, No pre-requisites, you just need some adrenaline to expect the unexpected this December.
                Miss it at your own risk!
            </p>
        </div>
    </div>

@endsection
