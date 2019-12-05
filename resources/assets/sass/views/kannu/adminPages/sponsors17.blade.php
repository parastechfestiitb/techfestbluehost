@extends('kannu.eventLayer')

@section('title','Sponsors | Techfest, IIT Bombay')
@section('style')

    <link rel="stylesheet" type="text/css" href="/css/button.css">
    <link rel="stylesheet" type="text/css" href="/css/eventmobile.css">
    <link rel="stylesheet" type="text/css" href="/css/hamburger.css">
    <link rel="stylesheet" href="/css/topNavBar.css">
    <meta property="og:title" content="Workshops | Techfest 2017-18, IIT Bombay | Asia's Largest Science and Technology Festival" />

    <meta property="og:url" content="/workshop"/>
    <meta property="og:image" content="/img/workshop/workshop_dp.jpg" />
    <meta name="theme-color" content="#010202">
    <meta name="description" content="Techfest 2017-18: IIT Bombay presents Asia's Largest Science and Technology Festival">

    <meta name="viewport" content="width=device-width, user-scalable=no">
    <style>
        .sponsorMain .row img{
            height:80px;
            width:auto;
        }
        #overall,body,html{
            height:100% !important;
        }
        .mediabody{
            color:black;
        }
        .mediabody:first-child{
            padding-top:30px;
        }
        .sponsorMain .titleS{
            height:150px  !important;
        }
    </style>

    <style type="text/css">
        #curr-sponsor{
            text-align: center;
            vertical-align: center;
            position: absolute;
            top:5vh;
            left:0;
            width:100%;
            color: black;
            font-size: 2.5vh;
            z-index:1;
            font-family: 'pirulen', serif;
        }

        .contact{
            text-align: center;
            vertical-align: center;
            width:100%;
            color: black;
            /*font-size: 2.5vh;*/
            font-family: 'pirulen', serif;
        }
        .s_heading{
            text-align: center;
            font-size: 16px;
            color: black;
        }
        .otherColabs img{
            height:60px !important;
        }
        .chotuLogo{
            height:80px !important;
        }

    </style>
@endsection



@section('content')

    <div style="width:100%;height:76vh;margin-top:2vh;overflow:scroll;background: white;" class="sponsorMain">
        <p id="curr-sponsor" style="background-color: white;">
            OUR SPONSORS
        </p>
        <div style="padding-top: 7vh; color: black;" >

            <p class="contact" style="font-size: 2.5vh;">
                FOR QUERIES CONTACT
            </p>

            <div class="col-sm-6 col-xs-12" >
                <p class="contact" ><a href="https://www.facebook.com/frodoadarsh" target="_blank" style="color: black; border: 1px solid black; padding: 5px;" ><b>Adarsh Rathi</b></a></p>
                <p>Manager, Marketing</p>
                <p><a href="mailto:adarshrathi@techfest.org" style="color: black;">adarshrathi@techfest.org</a></p>
                <p>+91 998 709 1615</p>
                <hr>
            </div>

            <div class="col-sm-6 col-xs-12">
                <p class="contact"><a href="https://www.facebook.com/sourabh.iitb" target="_blank" style="color: black; border: 1px solid black; padding: 5px;"><b>Sourabh Surage</b></a></p>
                <p>Manager, Marketing</p>
                <p><a href="mailto:sourabh@techfest.org" style="color: black;">sourabh@techfest.org</a></p>
                <p>+91 702 139 5589</p>
                <hr>
            </div>

            <style type="text/css">
                .lapi{display: none;}
                .mobi{display: block;}
                @media(min-width: 62em){
                    .lapi{display: block;}
                    .mobi{display: none;}
                }
            </style>
        </div>
        <div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-xs-12">
                    <p class="s_heading"><b style="font-size: 35px !important;margin:;">Presented By</b></p>
                    <div class="col-md-2"></div>
                    <div class="col-sm-12 col-md-6 col-xs-12">
                        <a href="http://www.larsentoubro.com/" target="_blank"><img src="/img/sponsors/18/LnT.JPG" class="lapi titleS" style="height: 100px !important;"> </a>
                    </div>

                    <div class="col-md-4"></div>
                </div>
                <div class="col-sm-12 col-md-6 col-xs-12">
                    <p class="s_heading"><b style="font-size: 35px !important;margin:;">Partnered By</b></p>
                    <div class="col-md-2"></div>
                    <div class="col-sm-12 col-md-6 col-xs-12">
                        <a href="https://www.britishcouncil.in/" target="_blank"><img src="/img/sponsors/18/bc.png" class="lapi titleS" style="height: 100px !important;"> </a>
                    </div>

                    <div class="col-md-4"></div>
                </div>
            </div>
            <br><br>

            <div>
                <p class="s_heading" style="font-weight: bold;font-size: 25px !important;">
                    Associate Title Sponsor</p>
                <div class="row">
                    <div class="col-sm-2 col-xs-12">

                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <a href="https://bhimupi.org.in/" target="_blank"><img src="/img/sponsors/18/bhim.jpeg" style="height:100px;margin-left: 250px;margin-top: 10px">
                    </div>
                    <div class="col-sm-4 col-xs-12">

                    </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Brought to you by</b></p>
                        <a href="http://www.dnaindia.com/" target="_blank"> <img src="/img/sponsors/18/dna.png" width="200px" height="auto"></a>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Supported by</b></p>
                        <a href="http://hindi.moneycontrol.com/tv/" target="_blank"><img src="/img/sponsors/18/0 (2).png" style="width: 100px !important; height: 100px !important;"></a>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Powered by</b></p>
                        <a href="https://www.capgemini.com/" target="_blank"><img src="/img/sponsors/18/capgemini.png" width="200px" style="
                              height: 100;
                              "></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <p style="" class="s_heading"><b>Gujarati Media Partner</b></p>
                        <a href=" http://www.janmabhoominewspapers.com/" target="_blank"> <img src="/img/sponsors/18/janmabhoomi.png" style="width: 180px;height: 140px;"></a>
                        <!--                     <p>Maharashtra Times</p>
                         -->                </div>
                    <div class="col-sm-4 col-xs-12">
                        <p style="margin-top: 25px !important" class="s_heading"><b>Marathi Media Partner</b></p>
                        <a href="https://maharashtratimes.indiatimes.com/" target="_blank"> <img src="/img/sponsors/18/0 (7).jpg"></a>
                        <p>Maharashtra Times</p>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <p style="margin-top: 25px !important" class="s_heading"><b>Hindi Media Partner</b></p>
                        <a href="https://navbharattimes.indiatimes.com/" target="_blank"> <img src="/img/sponsors/18/0 (9).jpg"></a>
                        <p>Navbharat Times</p>
                    </div>
                    ]            </div>
            </div>
            <br><br>
            <div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p style="margin-top: 25px !important" class="s_heading"><b>Radio Partner</b></p>
                        <a href="https://www.redfmindia.in/delhi" target="_blank"> <img src="/img/sponsors/18/redfm.jpg"></a>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p style="margin-top: 25px !important" class="s_heading"><b>Music Broadcast Partner</b></p>
                        <a href="" target="_blank"> <img src="/img/sponsors/18/9xo.png"></a>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p style="margin-top: 25px !important" class="s_heading"><b>Print Media Partner</b></p>
                        <img src="/img/sponsors/18/freepress.PNG">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Ozone Title</b></p>
                        <a href="http://www.financepeer.com/" target="_blank"><img src="/img/sponsors/18/Financepeer.jpg" width="200px" style="
                           height: 65px;
                           "></a>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Innovation Partner</b></p>
                        <img src="/img/sponsors/18/Odin.png" width="100px" height="auto" style="
                              height: 120px; margin-top: -15px !important
                              ">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Legal Partner</b></p>
                        <img src="/img/sponsors/18/royzz.jpg" width="140px" style="
                              height: 70;
                              ">
                    </div>
                </div>
                <br><br>
            </div>
            <div>

                <p style="font-size: 35px !important; font-weight: bold;color:black !important;">E-Sports Partners</p>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <br>
                        <p style="font-size: 19px !important; font-weight: bold;color:black !important;">Title</p>
                        <a href="https://www.razerzone.com/" target="_blank"><img src="/img/sponsors/18/razer01.png" width="auto" height="auto" class="lapi titleS" style="margin-left: 345px; height: 120px"></a>
                        <a href="https://www.razerzone.com/" target="_blank"><img src="/img/sponsors/18/razer01.png" width="80%" height="auto" class="mobi titleS"></a>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/cobx.PNG" width="140px" height="auto" style="height: 100px">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/RML.png" width="auto" height="60px">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/signify.jpg" width="140px" height="auto" style="height: 100px">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-2"></div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/tp.PNG" height="100px style="margin-top: -12px" style="margin-right: 120px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/savex.jpg" height="100px style="margin-top: -12px" style="margin-right: 120px !important">
                    </div>
                    <div class="col-sm-2"></div>
                </div>
                <br><br><br><br>
            </div>
            <p class="s_heading" style="font-size: 35px; font-weight: bold;"><b>Major Sponsors</b></p>
            <br><br>
            <div>
                <div class="row ">
                    <div class="col-sm-12 col-xs-4 col-md-4 titleS">
                        <p class="s_heading" style=""><b>Sustainability Partner</b></p>
                        <img src="/img/sponsors/18/CEEW.png" class="titleS" style=" margin-top: -30">
                    </div>

                    <div class="col-sm-12 col-xs-4 col-md-4 titleS">
                        <p class="s_heading" style=""><b>SWC Presenting Partner</b></p>
                        <img src="/img/sponsors/18/pa.jpeg" class="titleS" style="height:75px !important;">
                    </div>


                    <div class="col-sm-12 col-xs-4 col-md-4 titleS">

                        <img src="/img/sponsors/18/bajaj.png" class="titleS" style="height:100px !important;">

                    </div>


                </div>
                <br><br>
            </div>
            <div>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Robotics Partner</b></p>
                        <img src="/img/sponsors/18/RoboVR.png" style="height: 80px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>3D Print Partner</b></p>
                        <img src="/img/sponsors/18/Fracktal_Work.PNG" style="background: black;">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Airlines Partner</b></p>
                        <img src="/img/sponsors/18/Air_India.jpg" style="height: 100px">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading" style="margin: 0px;"><b>Prize Partner</b></p>
                        <img src="/img/sponsors/18/Tata.png" style="height: 120px !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/nrb_bearings.jpg" style="height: 120px !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/Boeing.jpg" style="height: 120px !important ;">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading" style="margin: 0px;"><b>Prize Partner</b></p>
                        <img src="/img/sponsors/18/afcons.png">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Fuelled By</b></p>
                        <img src="/img/sponsors/18/ONGC.jpg" height="120px !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Beverage Partner</b></p>
                        <img src="/img/sponsors/18/Pepsi.png" height="120px !important;">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Chocolate Partner</b></p>
                        <img src="/img/sponsors/18/nestle.jpg" height="120px !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Startup Ecosystem Partner</b></p>
                        <img src="/img/sponsors/18/chatur_ideas.jpg" style="height: 115px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Money Coach Partner</b></p>
                        <img src="/img/sponsors/18/skfl.png" style="height: 110px; margin-top: -15">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Electronics Component Sponsor</b></p>
                        <img src="/img/sponsors/18/Mouser_Electronics.png" style="height: 80px !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Education Partner</b></p>
                        <img src="/img/sponsors/18/toppr.png" style="margin-top: -5px !important; height: 100px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Pricing Partner</b></p>
                        <img src="/img/sponsors/18/dji.png" style="height: 80px !important">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Competition Partner</b></p>
                        <img src="/img/sponsors/18/airbus.png" style="margin-top: -20px !important; height: 100px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Network Solution Partner</b></p>
                        <img src="/img/sponsors/18/aruba.png" style="margin-top: -5px !important; height: 100px !important">
                    </div>
                    <div class="col-sm-4">

                            <p class="s_heading"><b>Merchandise Partner </b></p>
                            <img src="/img/sponsors/18/mysoul.png" style="height:90px !important;">
                    </div>
                </div>
                <br><br>
                <div class="row">

                    <div class="col-sm-4"></div>
                </div>
                <br>
            </div>
            <div>

                <p class="s_heading" style="font-weight: bold; font-size: 35px !important;">
                    Summit Partners</p>
                <p class="s_heading" style="font-weight: bold;font-size: 18px !important; margin-top: 50">
                    Brought to you by</p>
                <div class="row">

                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/Intel.png" style="height: 90px !important; margin-top: -10px !important">
                    </div>

                    <div class="col-sm-4 col-xs-12">

                        <img src="/img/sponsors/18/times_internet.jpg" style="height: 110px; margin-top: -80px">
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/microsoft.png" style="height: 110px !important; margin-top: -25px !important">
                    </div>

                </div>
                <br><br>

                <div class="row">

                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/Ansys.png" style="height: 60px; margin-top: 40px !important" >
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Stationery Partner</b></p>
                        <a href="http://classmatestationery.com/" target="_blank"> <img src="/img/sponsors/18/classmate.png" style="margin-top: 20px;"></a>
                    </div>

                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/WNS.jpg" style="margin-top: 40px !important">
                    </div>

                </div>
                <br><br><br>





                <p class="s_heading" style="font-size: 35px; font-weight: bold;"><b>Foreign Collaborations</b></p>
                <br><br>
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <p class="s_heading"><b>Hungary</b></p>
                        <img src="/img/sponsors/18/hungary.png" style="height: 125px; margin-left: 100px !important">
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <p class="s_heading"><b>Campus France </b></p>
                        <img src="/img/sponsors/18/france.png">
                    </div>
                </div>
                <br><br><br>
            </div>
            <div class="otherColabs">
                <p class="s_heading" style="font-size: 35px;"><b>Other Collaborations</b></p>
                <br><br>
                <div class="row">

                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/swiss.png" style="height:90px !important;">
                        <p>Swiss Zebra</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Coding Partner</b></p>
                        <img src="/img/sponsors/18/Pitney_Bowes.png" style="height: 100px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/IBM_Logo.jpg" style="margin-top: 10%;">
                    </div>
                </div>


                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Banking Partner</b></p>
                        <img src="/img/sponsors/18/ubi.png">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/NSDL.JPG" style="height:110px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/hilti.png" style="margin-top: 8%;">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/Dassault_ Systemes.png" style="margin-top: 30px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/rscomponent.png"
                             style="margin-top: 25px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>MUN Stationery Partner</b></p>
                        <img src="/img/sponsors/18/kores.jpg" style="height: 90px !important; margin-top: -10px !important">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Payment Partner</b></p>
                        <img src="/img/sponsors/18/Paytm.png" style="margin-top: 25px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/Citius_Tech.png" style="height: 100px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Prize Partner</b></p>
                        <a href="/sponsors" target="_blank"><img src="/img/sponsors/18/ama.jpg" style="height: 80px !important; margin-top: -12px"></a>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading" style="margin: 0px;"><b>Prize Partner</b></p>
                        <img src="/img/sponsors/18/avi.jpg" style="height:
                        90px !important">
                        <p>Aviorone</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/ba.jpg" style="height: 90px !important">
                        <p>Armada</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Hosting Partner</b></p>
                        <img src="/img/sponsors/18/bh.png" style="height: 90px !important">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/Essar_Steel.png" style="height: 100px !important; margin-top: 15px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Wardrobe Partner</b></p>
                        <img src="/img/sponsors/18/0 (5).png" style="height: 90px !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/ultratech.png" style="height: 90px !important">
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Renting Partner</b></p>
                        <img src="/img/sponsors/18/Rentomojo.png" style="height: 100px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/zebronics.png" style="margin-top: 20px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Energy Partner</b></p>
                        <a href="http://www.ntpc.co.in/" target="_blank"><img src="/img/sponsors/18/0 (1).png" style="height:80px !important; margin-top: -17px !important"></a>
                        <p>NTPC</p>
                    </div>
                </div>
                <br><br>
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Entertainment Partner</b></p>
                        <a href="http://www.rcity.co.in/stores/snow-kingdom/" target="_blank"> <img src="/img/sponsors/18/0 (1).jpg" style="height:100px !important; margin-top: -11px !important"></a>
                        <p>Snow Kingdom</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Multiplex Partner</b></p>
                        <a href="/sponsors" target="_blank"><img src="/img/sponsors/18/0 (3).png"></a>
                        <p style="margin-top: 20px !important;" >Inox Leisure Ltd.</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Mobility Partner</b></p>
                        <a href="https://www.olacabs.com/" target="_blank"> <img src="/img/sponsors/18/0 (0).jpg" style="height:100px !important; margin-top: -10px !important"></a>
                    </div>
                </div>
                <div class="row" style="color:black !important;">
                    <div class="col-sm-4 col-xs-12">
                        <p>&nbsp;</p>
                        <a href="/sponsors" target="_blank"><img src="/img/sponsors/18/cc.png" style="height: 100px !important"></a>
                        <p>Class Connect</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/18/Dailyhunt.png" style="height: 100px !important; margin-top: 30px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/think.jpg" style="height: 100px !important; margin-top: 30px !important">
                    </div>
                </div>
                <div class="row" style="color:black !important;">
                    <div class="col-sm-4 col-xs-12" style="margin-top: 20px;">
                        <p class="s_heading"><b>Banking Partner</b></p>
                        <img src="/img/sponsors/18/kotak_logo.png" style="width: 240px;
    height: auto !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <img src="/img/sponsors/robomate.png" style="height: 100px !important; margin-top: 30px !important">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading" style="margin:0px;"><b>Official Logistics Partner</b></p>
                        <img src="/img/sponsors/18/bluedart.png" style="height: 100px !important;">
                    </div>
                </div>
                <div class="row" style="color:black !important;">
                    <div class="col-sm-4 col-xs-12" style="margin-top: 20px;">
                        <p class="s_heading"><b>Official Laser Partner</b></p>
                        <img src="/img/sponsors/18/laser.jpeg" style="width: 200px;height: auto !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12" style="margin-top: 20px;">
                        <p class="s_heading"><b>Digital Media Partner</b></p>
                        <img src="/img/sponsors/18/QUBE.JPG" style="width: 200px;height: auto !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12" style="margin-top: 20px;">
                        <p class="s_heading"><b>Electric equipment partner</b></p>
                        <img src="/img/sponsors/18/nutronic.png" style="width: 200px;height: auto !important;">
                    </div>

                </div>
                <div class="row" style="color:black !important;">
                    <div class="col-sm-4 col-xs-12" style="margin-top: 20px;">
                        <p class="s_heading"><b>Student partner</b></p>
                        <img src="/img/sponsors/18/frap.png" style="width: 200px;height: auto !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Virat ecobags</b></p>
                        <img src="/img/sponsors/18/hospikit.PNG" style="height:90px !important;">
                        <p>Virat ecobags</p>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Official Aftermovie Partner</b></p>
                        <img src="/img/sponsors/18/aftermovie.jpg" style="height:150px !important;">
                    </div>
                </div>
                <div class="row" style="color:black !important;">
                    <div class="col-sm-4 col-xs-12" style="margin-top: 20px;">
                        <p class="s_heading"><b>Coverage Partner</b></p>
                        <img src="/img/sponsors/18/bird.jpg" style="width: 150px;height: auto !important;">
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <p class="s_heading"><b>Official Live Coverage Partner</b></p>
                        <img src="/img/sponsors/18/live.jpg" style="height:90px !important;">

                    </div>
                </div>

            </div>
        </div>

        <br><br>

        <div class="alalala">
            <p class="s_heading" style="font-size: 35px; font-weight: bold;"><b>Workshop Partners</b></p>


            <div class="row mediabody ">
                <style>
                    .alalala img{
                        height:60px !important;
                    }
                </style>
                <br><br><br>
                <div class="col-sm-4 col-xs-12">

                    <a href="https://www.softbank.jp/en/" target="_blank"><img src="/img/sponsors/18/softbank.png"></a>
                </div>
                <div class="col-sm-4 col-xs-12">

                    <a href="https://console.developers.google.com/apis/dashboard" target="_blank"> <img src="/img/sponsors/18/google.png" style="height: 125px !important; margin-top: -40px !important"></a>
                </div>
                <div class="col-sm-4 col-xs-12">

                    <a href="http://www.nvidia.in/page/home.html" target="_blank"><img src="/img/sponsors/18/nvidia.png" style="height: 110px !important; margin-top: -35px !important"></a>
                </div>
            </div>

            <br><br>


            <div class="row mediabody">
                <div class="col-sm-4 col-xs-12">

                    <a href="http://www.shilpmis.com/" target="_blank"> <img src="/img/sponsors/18/smis.png" style="height: 80px !important; margin-top: 25px !important"></a>
                </div>
                <div class="col-sm-4 col-xs-12">

                    <a href="http://www.ixar.in/Home.aspx" target="_blank"> <img src="/img/sponsors/18/ixar.png" style="height: 100px !important"></a>
                </div>
                <div class="col-sm-4 col-xs-12">

                    <a href="http://www.blazeclan.com/" target="_blank"> <img src="/img/sponsors/18/blazeclan.PNG" style="height: 100px !important"></a>
                </div>
            </div>


            <br><br>

            <div class="row mediabody">
            </div>
            <br><br>
        </div>



        <div>
            <p class="s_heading" style="font-size: 35px; font-weight: bold;"><b>Food and Hospitality Partners</b></p>
            <br><br>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/sponsors/18/Sprightly.png" style="height: 100px !important">
                </div>
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/sponsors/18/cafe_chokolade.jpe" style="height: 125px !important" >
                </div>
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/sponsors/18/Dominos.png" style="height: 100px !important" >
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/sponsors/18/Box8.png" style="height: 100px !important" >
                </div>
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/sponsors/18/Faasos.jpg" style="height: 130px !important" >
                </div>
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/sponsors/18/Wall&#39;s_Logo.svg.png" style="height: 100px !important" >
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/sponsors/18/Bombay_burger.jpg" style="height: 100px !important" >
                </div>
                <div class="col-sm-4 col-xs-4">
                    <img src="/img/sponsors/18/det.png" style="height: 130px !important" >
                </div>
                <div class="col-sm-4 col-xs-4">
                    <img src="/img/sponsors/18/Himalaya.jpeg" style="height: 100px !important" >
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-sm-4 col-xs-12">
                    <img src="/img/sponsors/18/doy.png" style="height: 80px !important;" >
                </div>
            </div>
            <br><br>
        </div>
        <div class="alalala">
            <p class="s_heading" style="font-size: 35px; font-weight: bold;"><b>Media Partners</b></p>


            <div class="row mediabody ">
                <style>
                    .alalala img{
                        height:60px !important;
                    }
                </style>
                <br><br>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Tech Magazine Partner</b></p>
                    <a href="https://autotechreview.com/" target="_blank"><img src="/img/sponsors/18/0 (2).jpg"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Tech Magazine Partner</b></p>
                    <a href="http://www.scientificindia.com/" target="_blank"> <img src="/img/sponsors/18/0 (7).png" style="margin-top: -10px !important"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Online Education Partner</b></p>
                    <a href="http://www.educationtimes.com/" target="_blank"><img src="/img/sponsors/18/0 (5).jpg"></a>
                </div>
            </div>

            <br><br>


            <div class="row mediabody">
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Magazine Partner</b></p>
                    <a href="http://www.brainfeedmagazine.com/" target="_blank"> <img src="/img/sponsors/18/0 (4).jpg"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>SWC Media Partner</b></p>
                    <a href="https://bizztor.com/" target="_blank"> <img src="/img/sponsors/18/01.jpg"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Media Partner</b></p>
                    <a href="https://pricebaba.com/" target="_blank"> <img src="/img/sponsors/18/pb.jpg"></a>
                </div>
            </div>


            <br><br>


            <div class="row mediabody">
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Blogger Outreach Partner</b></p>
                    <a href="http://www.blogadda.com/" target="_blank"> <img src="/img/sponsors/18/blogadda.PNG" style="height: 75px !important"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Online Media</b></p>
                    <a href="http://beingstudent.com/" target="_blank"> <img src="/img/sponsors/18/beingstudent.PNG"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Online Media</b></p>
                    <a href="https://www.brainbuxa.com/" target="_blank"> <img src="/img/sponsors/18/BrainBuxa2.png"></a>
                </div>
            </div>


            <br><br>


            <div class="row mediabody">
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Online Media</b></p>
                    <a href="http://festpav.com/" target="_blank"> <img src="/img/sponsors/18/festpav.png" style="height: 60px !important"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Online Media</b></p>
                    <a href="http://www.festsamachar.com/" target="_blank"> <img src="/img/sponsors/18/festsamachar.png"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Online Media</b></p>
                    <a href="http://www.indiaeve.com/" target="_blank"> <img src="/img/sponsors/18/indiaeve.jpg" style="height: 40px !important"></a>
                </div>
            </div>


            <br><br>


            <div class="row mediabody">
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Online Media</b></p>
                    <a href="https://www.inshorts.com/" target="_blank"> <img src="/img/sponsors/18/inshorts.png" style="height: 100px !important; margin-top: -25px !important"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Online Media</b></p>
                    <a href="https://www.thecollegefever.com/" target="_blank"> <img src="/img/sponsors/18/TheCollegeFever.png" style="height: 130px !important; margin-top: -30px !important"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Online Media</b></p>
                    <a href="http://techyyouth.com/" target="_blank"> <img src="/img/sponsors/18/techyyouth.png"></a>
                </div>
            </div>


            <br><br>


            <div class="row mediabody">

                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading" style="color:black"><b>Online Media</b></p>
                    <a href="https://www.thecollegefever.com/" target="_blank"> <img src="/img/sponsors/18/ignite.png" style="height: 100px !important; margin-top: -30px !important"></a>
                </div>
                <div class="col-sm-4 col-xs-12">
                    <p class="s_heading"><b>Online Media</b></p>
                    <a href="http://techyyouth.com/" target="_blank"> <img src="/img/sponsors/18/qrius.png"></a>
                </div>
            </div>
            <br><br>
        </div>
    </div>



    </div>

@endsection
