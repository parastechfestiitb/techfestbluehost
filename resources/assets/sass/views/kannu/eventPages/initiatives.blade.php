@extends('kannu.topLayer')


@section('styling')

    .overlay-content{top:15%}

    @media (max-width: 62em) and (orientation: landscape){
    .hrMobi{width: 96%;}
    .overlay-content{top:1%}
    }

@endsection




@section('title', 'Initiatives')

@section('centerOne')



    <div style="" class="contentLaptop">
        <img src="img/eventFinal/tabImg.png" class="img-responsive" style="width: 107%; margin-left: 2%; ">
        <div style="position: fixed;
    top: 26vh;
    left: 10vw;text-align: center;
    width: 35%;
    ">

            <h4 style="font-family: 'pirulen';    font-size: 4rem; text-align: left;
    letter-spacing: 3px;color: #fefefe" id="abhinav">INITIATIVES</h4>
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
    left: 9vw;color: #fefefe;font-family: 'Play', sans-serif; height: 34vh; overflow: auto;
    ">
            <div id="kaushik00">
                <p style="font-size:25px;color:lightslategray;">
                    About
                </p>

                Initiative is doing the right thing without being told. Volunteers, organizations and leaders unite to innovate, strategize and execute measures that would touch a million lives and inspire a sense of responsibility towards the world at large.

            </div>
            <div id="kaushik02">
                With the aim to empower women to a life of dignity & self respect through self defense, this year, Techfest at IIT Bombay is going to organize self-defense and mental training workshops for women.  Techniques involving a deep understanding of human anatomy will be taught. Stay tuned for ways of involvement in  the campaign.<br><br>


            </div>
            <div id="kaushik03" style="text-align: left;">
                <!--  <p style="font-size:25px;color:lightslategray;">
                 Innovation Challenge
                 </p> -->
                Techfest brings Innovation Challenge for young minds of the generation having passion for science and curiosity to learn. Techfest, in collaboration with SOF(Science Olympiad Foundation) has aimed to ignite a spark in the creative minds of the country. Students of class 8, 9 and 10 will be challenged  to develop their innovative and imaginative skills and look at science in a new way. Great prizes await the young explorers.<br><br>



            </div>

            <div id="kaushik04">
                Every year one out of five girls drop out of school due to start of menstrual cycle.Thousands of young women/girls die due to unhygienic cloth practices. It is time we took a stand against the taboo and ill practices. Techfest takes up the responsibility to initiate the menstrual health awareness campaign by organizing seminars and distribution of sanitary napkins in 50+ villages all across India.   <br><br>

            </div>


        </div>

    </div>




    <!-- center element left section for laptop compleate -->



    <!-- center elements start for mobile -->


    <div class="mobileCenter">

        <h4 id="heading" class="heading">INITIATIVES</h4>

        <hr class="hrMobi">


        <div class="parent" style="font-family: 'Play';height: 70%;">

            <div class="child">
                <p class="headMobile">ABOUT</p>
                <p class="contentMobile">
                    Initiative is doing the right thing without being told. Volunteers, organizations and leaders unite to innovate, strategize and execute measures that would touch a million lives and inspire a sense of responsibility towards the world at large.
                </p>
            </div>

            <div class="child">
                <p class="headMobile">NIRBHAYA</p>
                <p class="contentMobile">
                    With the aim to empower women to a life of dignity & self respect through self defense, this year, Techfest at IIT Bombay is going to organize self-defense and mental training workshops for women.  Techniques involving a deep understanding of human anatomy will be taught. Stay tuned for ways of involvement in  the campaign.
                </p>

                <div class="row" style="margin-top:1vh;">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                    </div>
                </div>

            </div>


            <div class="child" style="color: white;">
                <p class="headMobile">SHE</p>
                <p class="contentMobile">
                    Every year one out of five girls drop out of school due to start of menstrual cycle. Thousands of young women/girls die due to unhygienic cloth practices. It is time we took a stand against the taboo and ill practices. Techfest takes up the responsibility to initiate the menstrual health awareness campaign by organizing seminars and distribution of sanitary napkins in 50+ villages all across India.
                </p>
                <div class="row" style="margin-top:1vh;">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                    </div>
                </div>
            </div>

            <div class="child">
                <p class="headMobile">INNOVATION CHALLENGE</p>
                <p class="contentMobile">
                    Techfest brings Innovation Challenge for young minds of the generation having passion for science and curiosity to learn. Techfest, in collaboration with SOF(Science Olympiad Foundation) has aimed to ignite a spark in the creative minds of the country. Students of class 8, 9 and 10 will be challenged  to develop their innovative and imaginative skills and look at science in a new way. Great prizes await the young explorers.
                </p>
                <div class="row" style="margin-top:1vh;">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                    </div>
                    <div class="col-xs-4"></div>
                </div>

            </div>

        </div>






        <div class="row" style="margin-top:1vh;">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
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
            </div>
            <div class="col-xs-4"></div>
        </div>
    </div>





    <!-- circular bar  right section start for lapi  -->
    <div class="circleLapi">
        <div style="position: relative;
    top: 17%;
    left: 59%;" class="circleLapi">
            <img src="img/2018/initiatives.png" style="position: absolute;
    width: 65%;top:-4%;" >
        </div>
        <svg height="100%" width="100%" style="position: absolute;
    left: -17%;
    bottom: 1%;" stroke="white"  stroke-width="1.5" >
            <ellipse cx="110%" cy="50%" rx="38%" ry="44%" fill="transparent"/>
            <!--  <text x="80%" y="15.2620519696%" id="oneL" class="nav-tab" fill="#fefefe" text-anchor="end" onmouseover="compibtn(1)">
                  Introduction
                  </text> -->
            <text x="70%" y="30.5386704767%" id="twoL" class="nav-tab" text-anchor="end" onmouseover="compibtn(2)">
                NIRBHAYA
            </text>
            <text x="65%" y="51%" id="threeL" class="nav-tab" text-anchor="end" onmouseover="compibtn(3)">
                INNOVATION CHALLENGE
            </text>
            <text x="70%" y="71.5386704767%" id="fourL" class="nav-tab" text-anchor="end" onmouseover="compibtn(4)">
                SHE
            </text>
            <!-- <text x="80%" y="87.7379480304%" id="fiveL" class="nav-tab" text-anchor="end" onmouseover="compibtn(5)">
                CONTACT
            </text> -->
            <circle  cx="72%" cy="50%" r="4" stroke="white" fill="white"/>
            <circle id="cc03" class="svg_circle" cx="72%" cy="50%" r="12" stroke="white" stroke-width="2" fill="transparent"/>
            <circle id="c03" class="svg_circle" cx="72%" cy="50%" r="14" stroke="white" stroke-width="2" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>
            <!-- <circle x="20" y="20" width="90" height="90" /> -->
            <circle  cx="76%" cy="30%" r="4" stroke="white" fill="white"/>
            <circle id="cc02"  cx="76%" cy="30%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
            <circle id="c02"  cx="76%" cy="30%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>
            <!-- <circle  cx="87.9871204473%" cy="14.2620519696%" r="4" stroke="white" fill="white"/> -->
            <!-- <circle id="cc01"  cx="87.9871204473%" cy="14.2620519696%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->
            <!-- <circle id="c01"  cx="87.9871204473%" cy="14.2620519696%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/> -->
            <circle  cx="76%" cy="69.5386704767%" r="4" stroke="white" fill="white"/>
            <circle id="cc04" cx="76%" cy="69.5386704767%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
            <circle id="c04" cx="76%" cy="69.5386704767%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>
            <!-- <circle  cx="87.9871204473%" cy="85.7379480304%" r="4" stroke="white" fill="white"/> -->
            <!-- <circle id="cc05" cx="87.9871204473%" cy="85.7379480304%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->
            <!-- <circle id="c05" cx="87.9871204473%" cy="85.7379480304%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/> -->
            <circle  cx="99.2%" cy="8%" r="4" stroke="white" fill="white"/>
            <!-- <circle  cx="99.2%" cy="8%" r="12" stroke="white" stroke-width="1" fill="transparent"/> -->
            <circle  cx="99.2%" cy="92.2%" r="4" stroke="white" fill="white"/>
            <!-- <circle  cx="76%" cy="69.5386704767%" r="12" stroke="white" fill="white"/> -->
            <defs>
                <filter id="blurFilter4" x="-20" y="-20" width="200" height="200">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" />
                </filter>
            </defs>
        </svg>
    </div>



    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav(0)">&times;</a>
        <div class="overlay-content">
            <a href="#" onclick="closeNav(1)">About</a>
            <a href="#" onclick="closeNav(2)">NIRBHAYA</a>
            <a href="#" onclick="closeNav(3)">SHE</a>
            <a href="#" onclick="closeNav(4)">INNOVATION CHALLENGE</a>
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

    <script type="text/javascript">
        var k00 = document.getElementById("kaushik00");
        var k01 = document.getElementById("kaushik01");
        var k02 = document.getElementById("kaushik02");
        var k03 = document.getElementById("kaushik03");
        var k04 = document.getElementById("kaushik04");
        var k05 = document.getElementById("kaushik05");

        function compibtn(argument) {
            // body...
            if (argument==1) {
                k00.style.display="none";
                // k01.style.display="block";
                k02.style.display="none";
                k03.style.display="none";
                k04.style.display="none";
                // k05.style.display="none";
            }
            if (argument==2) {
                k00.style.display="none";
                // k01.style.display="none";
                k02.style.display="block";
                k03.style.display="none";
                k04.style.display="none";
                // k05.style.display="none";
            }
            if (argument==3) {
                k00.style.display="none";
                // k01.style.display="none";
                k02.style.display="none";
                k03.style.display="block";
                k04.style.display="none";
                // k05.style.display="none";
            }
            if (argument==4) {
                k00.style.display="none";
                // k01.style.display="none";
                k02.style.display="none";
                k03.style.display="none";
                k04.style.display="block";
                // k05.style.display="none";
            }
            if (argument==5) {
                k00.style.display="none";
                // k01.style.display="none";
                k02.style.display="none";
                k03.style.display="none";
                k04.style.display="none";
                // k05.style.display="block";
            }

        }
    </script>



    <!-- center elements ends here  -->


@endsection
