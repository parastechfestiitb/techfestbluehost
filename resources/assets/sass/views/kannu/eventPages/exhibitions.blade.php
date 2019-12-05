@extends('kannu.topLayer')


@section('styling')

    .overlay-content{top:15%}

    @media (max-width: 62em) and (orientation: landscape){
    .hrMobi{width: 96%;}
    .overlay-content{top:1%}
    }

@endsection




@section('title', 'Exhibitions')

@section('centerOne')



    <div style="" class="contentLaptop">
        <img src="img/eventFinal/tabImg.png" class="img-responsive" style="width: 107%; margin-left: 2%; ">
        <div style="position: fixed;
    top: 26vh;
    left: 10vw;text-align: center;
    width: 35%;
    ">

            <h4 style="font-family: 'pirulen';    font-size: 4rem; text-align: left;
    letter-spacing: 3px;color: #fefefe" id="abhinav">EXHIBITIONS</h4>
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

                In its 21st edition, Techfest promises to mesmerize you with a unique collection of exhibitions from across the globe and leave you enchanted and astounded. Exhibitions at Techfest are one of those rare avenues where you can see and experience the grandeur of what the world calls modern science and technology. It provides unparalleled variety and have something for each one to look forward to. With exhibits of such quality coming down to Techfest, IIT Bombay, Exhibitions provide you an ideal platform to broaden your visions and update your tech know-how.
                <br><b>"See it to believe it!"</b>


            </div>


            <div id="kaushik01">
                <p style="font-size:25px;color:lightslategray;">
                    About
                </p>
                In its 21st edition, Techfest promises to mesmerize you with a unique collection of exhibitions from across the globe and leave you enchanted and astounded. Exhibitions at Techfest are one of those rare avenues where you can see and experience the grandeur of what the world calls modern science and technology. It provides unparalleled variety and have something for each one to look forward to. With exhibits of such quality coming down to Techfest, IIT Bombay, Exhibitions provide you an ideal platform to broaden your visions and update your tech know-how.
                <br><b>"See it to believe it!"</b>
            </div>
            <div id="kaushik02">
                <p>
				<span style="color:#df9111;">
				There is no entry fee for Exhibitions at Techfest, everybody can attend it free of cost.</span>
                    <br>
                    They must, at all times carry a valid ID proof with them. Visitors below 14 years of age are advised to visit the Exhibitions in early morning. Exhibitions will be at display from 09:00 am to 03:30 pm on all 3 days of the Festival.
                </p>
                <div class="col-sm-4"></div>
            </div>

            <div id="kaushik03">
                <p style="font-size:25px;color:lightslategray;">
                    Techconnect
                </p>
                <!--<p>
                    Bridging the industry-academia divide, TechConnect is an endeavor to connect with the students, and with the society at large. To disseminate IIT Bombay's endeavour to make a difference through its R&D activities.
                </p>-->
                <p>
                    Techfest in collaboration with IRCC, IIT Bombay is organizing TechConnect to showcase the R&D activities of IIT Bombay. It will also highlight the fundamental research being carried out and the technologies developed at IIT Bombay. TechConnect aims to highlight the technologies created in IIT Bombay, reaching out to critical social needs of the country, also to simultaneously satisfy the requirements of industry and maximize the benefit to society.
                </p>
            </div>


            <div id="kaushik04" style="display:none;">
                <p style="font-size:25px;color:lightslategray;">
                    Exhibits
                </p>
                <p>
                    Don't miss out on the opportunity to showcase your Exhibit at Asia's largest Science and Technological Festival. Students, Researchers Innovators, Industrialists and people from various backgrounds are invited to present their Exhibits.
                    <br>
                </p><p style="color: #df9111;">Interested people please send abstract to: prathamesh@techfest.org</p>
                Note: The abstract should contain not more than 250 words, with relevant images and videos attached in the abstract.

                <p></p>
            </div>



            <div id="kaushik05" style="display:none;">
                <p style="font-size:25px;color:lightslategray;text-align: center;">
                    Feel free to drop any queries !
                </p>
                <p style="text-align: center;">
                    <a href="https://www.facebook.com/sagare.prathamesh5" style="text-decoration: none;color: white;">Prathamesh Sagare</a><br>
                    <a href="mailto:prathamesh@techfest.org" style="text-decoration: none;color: #fefefe">	prathamesh@techfest.org</a>
                </p>
                <p style="text-align: center;">
                    <a href="https://www.facebook.com/kumar16akash" style="text-decoration: none;color: #fefefe">	Akash Kumar</a><br>
                    <a href="mailto:akash@techfest.org" style="text-decoration: none;color: #fefefe">	akash@techfest.org</a>
                </p>

            </div>


        </div>

    </div>




    <!-- center element left section for laptop compleate -->



    <!-- center elements start for mobile -->


    <div class="mobileCenter">

        <h4 id="heading" class="heading">EXHIBITIONS</h4>
        <hr class="hrMobi">


        <div class="parent" style="font-family: 'Play';">

            <div class="child">
                <p class="headMobile">ABOUT</p>
                <p class="contentMobile">
                    In its 21st edition, Techfest promises to mesmerize you with a unique collection of exhibitions from across the globe and leave you enchanted and astounded. Exhibitions at Techfest are one of those rare avenues where you can see and experience the grandeur of what the world calls modern science and technology. It provides unparalleled variety and have something for each one to look forward to. With exhibits of such quality coming down to Techfest, IIT Bombay, Exhibitions provide you an ideal platform to broaden your visions and update your tech know-how.
                    <br><b>"See it to believe it!"</b>

                </p>
            </div>

            <div class="child">
                <p class="headMobile">FOR VISITORS</p>
                <p class="contentMobile">
				<span style="color:#df9111;">
				There is no entry fee for Exhibitions at Techfest, everybody can attend it free of cost.</span>
                    <br>
                    They must, at all times carry a valid ID proof with them. Visitors below 14 years of age are advised to visit the Exhibitions in early morning. Exhibitions will be at display from 09:00 am to 03:30 pm on all 3 days of the Festival.
                </p>

                <!-- </div> -->
                <!-- <div class="col-sm-4"></div> -->
            </div>
            <div class="child">
                <p class="headMobile">TECHCONNECT</p>
                <p class="contentMobile">
                    <!--     			<p class="contentMobile" style="font-size:25px;color:lightslategray;">
                                   Techconnect
                               </p> -->
                    <!--<p>
                        Bridging the industry-academia divide, TechConnect is an endeavor to connect with the students, and with the society at large. To disseminate IIT Bombay's endeavour to make a difference through its R&D activities.
                    </p>-->
                <p class="contentMobile">
                    Techfest in collaboration with IRCC, IIT Bombay is organizing TechConnect to showcase the R&D activities of IIT Bombay. It will also highlight the fundamental research being carried out and the technologies developed at IIT Bombay. TechConnect aims to highlight the technologies created in IIT Bombay, reaching out to critical social needs of the country, also to simultaneously satisfy the requirements of industry and maximize the benefit to society.
                </p>
                </p>
            </div>
            <div class="child">
                <p class="headMobile">EXHIBIT</p>
                <p class="contentMobile">
                    Don't miss out on the opportunity to showcase your Exhibit at Asia's largest Science and Technological Festival. Students, Researchers Innovators, Industrialists and people from various backgrounds are invited to present their Exhibits.
                    <br>
                <p class="contentMobile" style="color: #df9111;">
                    Interested people please send abstract to: prathamesh@techfest.org
                </p>
                <p class="contentMobile">
                    Note: The abstract should contain not more than 250 words, with relevant images and videos attached in the abstract.
                </p>
            </div>
            <div class="child">
                <p class="headMobile">CONTACT US</p>
                <p class="contentMobile">
                <p class="contentMobile">
                    <a href="https://www.facebook.com/kumar16akash" style="text-decoration: none;color: #fefefe">Akash Kumar</a><br>
                    <a href="mailto:akash@techfest.org" style="text-decoration: none;color: #fefefe"> akash@techfest.org</a>
                </p>
                <p class="contentMobile">
                    <a href="https://www.facebook.com/sagare.prathamesh5" style="text-decoration: none;color: #fefefe">  Prathamesh Sagare</a><br>
                    <a href="mailto:prathamesh@techfest.org" style="text-decoration: none;color: #fefefe"> prathamesh@techfest.org</a>
                </p>
            </div>
        </div>


        <section class="demo-3" id="mobi" onclick="openNav()" style="margin-top: 20px;width:100%;">
            <div class="grid" style="position:absolute;left:15%;width:70%;">
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
    </div>





    <!-- circular bar  right section start for lapi  -->
    <div class="circleLapi">
        <div style="position: relative;
    top: 17%;
    left: 59%;" class="circleLapi">
            <img src="img/2018/exhibitions.png" style="position: absolute;
    width: 65%;top:-4%;" >
        </div>
        <svg height="100%" width="100%" style="position: absolute;
    left: -17%;
    bottom: 1%;" stroke="white"  stroke-width="1.5" >
            <ellipse cx="110%" cy="50%" rx="38%" ry="44%" fill="transparent"/>
            <text x="80%" y="15.2620519696%" id="oneL" class="nav-tab" fill="#fefefe" text-anchor="end" onmouseover="compibtn(1)">
                ABOUT
            </text>
            <text x="70%" y="30.5386704767%" id="twoL" class="nav-tab" text-anchor="end" onmouseover="compibtn(2)">
                FOR VISITORS
            </text>
            <text x="65%" y="51%" id="threeL" class="nav-tab" text-anchor="end" onmouseover="compibtn(3)">
                TECHCONNECT
            </text>
            <text x="70%" y="71.5386704767%" id="fourL" class="nav-tab" text-anchor="end">
                EXHIBITORS
            </text>
            <text x="80%" y="87.7379480304%" id="fiveL" class="nav-tab" text-anchor="end" onmouseover="compibtn(5)">
                CONTACT
            </text>
            <circle  cx="72%" cy="50%" r="4" stroke="white" fill="white"/>
            <circle id="cc03" class="svg_circle" cx="72%" cy="50%" r="12" stroke="white" stroke-width="2" fill="transparent"/>
            <circle id="c03" class="svg_circle" cx="72%" cy="50%" r="14" stroke="white" stroke-width="2" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>
            <!-- <circle x="20" y="20" width="90" height="90" /> -->
            <circle  cx="76%" cy="30%" r="4" stroke="white" fill="white"/>
            <circle id="cc02"  cx="76%" cy="30%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
            <circle id="c02"  cx="76%" cy="30%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>
            <circle  cx="87.9871204473%" cy="14.2620519696%" r="4" stroke="white" fill="white"/>
            <circle id="cc01"  cx="87.9871204473%" cy="14.2620519696%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
            <circle id="c01"  cx="87.9871204473%" cy="14.2620519696%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>
            <circle  cx="76%" cy="69.5386704767%" r="4" stroke="white" fill="white"/>
            <circle id="cc04" cx="76%" cy="69.5386704767%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
            <circle id="c04" cx="76%" cy="69.5386704767%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>
            <circle  cx="87.9871204473%" cy="85.7379480304%" r="4" stroke="white" fill="white"/>
            <circle id="cc05" cx="87.9871204473%" cy="85.7379480304%" r="12" stroke="white" stroke-width="1" fill="transparent"/>
            <circle id="c05" cx="87.9871204473%" cy="85.7379480304%" r="14" stroke="white" stroke-width="1" fill="transparent" style="stroke: none; fill: rgba(0,131,177,0.77); filter: url(#blurFilter4);"/>
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
            <a href="#" onclick="closeNav(2)">FOR VISITORS</a>
            <a href="#" onclick="closeNav(3)">TECHCONNECT</a>
            <a href="#">EXHIBITORS</a>
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
                k01.style.display="block";
                k02.style.display="none";
                k03.style.display="none";
                k04.style.display="none";
                k05.style.display="none";
            }
            if (argument==2) {
                k00.style.display="none";
                k01.style.display="none";
                k02.style.display="block";
                k03.style.display="none";
                k04.style.display="none";
                k05.style.display="none";
            }
            if (argument==3) {
                k00.style.display="none";
                k01.style.display="none";
                k02.style.display="none";
                k03.style.display="block";
                k04.style.display="none";
                k05.style.display="none";
            }
            if (argument==4) {
                k00.style.display="none";
                k01.style.display="none";
                k02.style.display="none";
                k03.style.display="none";
                k04.style.display="block";
                k05.style.display="none";
            }
            if (argument==5) {
                k00.style.display="none";
                k01.style.display="none";
                k02.style.display="none";
                k03.style.display="none";
                k04.style.display="none";
                k05.style.display="block";
            }
        }
    </script>
@endsection
