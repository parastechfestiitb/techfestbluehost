<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cozmo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/bootstrap.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/flexslider.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="/2019/compi/cozmo/css/style.css">

    <!-- Modernizr JS -->
    <script src="/2019/compi/cozmo/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="/2019/compi/cozmo/js/respond.min.js"></script>
    <![endif]-->
    <style>
        #toast {
            visibility: hidden;
            max-width: 50px;
            height: 50px;
            /*margin-left: -125px;*/
            margin: auto;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 2px;

            position: fixed;
            z-index: 1;
            left: 0;right:0;
            bottom: 30px;
            font-size: 17px;
            white-space: nowrap;
        }
        #toast #img{
            width: 50px;
            height: 50px;

            float: left;

            padding-top: 16px;
            padding-bottom: 16px;

            box-sizing: border-box;


            background-color: #111;
            color: #fff;
        }
        #toast #desc{


            color: #fff;

            padding: 16px;

            overflow: hidden;
            white-space: nowrap;
        }

        #toast.show {
            visibility: visible;
            -webkit-animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 2s, fadeout 0.5s 2.5s;
            animation: fadein 0.5s, expand 0.5s 0.5s,stay 3s 1s, shrink 0.5s 4s, fadeout 0.5s 4.5s;
        }

        @-webkit-keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @keyframes fadein {
            from {bottom: 0; opacity: 0;}
            to {bottom: 30px; opacity: 1;}
        }

        @-webkit-keyframes expand {
            from {min-width: 50px}
            to {min-width: 350px}
        }

        @keyframes expand {
            from {min-width: 50px}
            to {min-width: 350px}
        }
        @-webkit-keyframes stay {
            from {min-width: 350px}
            to {min-width: 350px}
        }

        @keyframes stay {
            from {min-width: 350px}
            to {min-width: 350px}
        }
        @-webkit-keyframes shrink {
            from {min-width: 350px;}
            to {min-width: 50px;}
        }

        @keyframes shrink {
            from {min-width: 350px;}
            to {min-width: 50px;}
        }

        @-webkit-keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 60px; opacity: 0;}
        }

        @keyframes fadeout {
            from {bottom: 30px; opacity: 1;}
            to {bottom: 60px; opacity: 0;}
        }
    </style>
    <style>
        .border {
            scrollbar-width: none;
        }

        .scroll{
            background-color: #2cffff;
            height: 50%;
        }
        scroll_inside{
            height:150px;
            width:200px;
            display:block;
        }
    </style>
</head>
<body>
<div id="colorlib-page"  >
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
        <h1 id="colorlib-logo"><a href="index.html"><span>Techfest</span></a></h1>
        <nav id="colorlib-main-menu" role="navigation" style="margin-top: 200%">
            <ul>
                <li class="colorlib-active"><a href="index.html">Timeline</a></li>
                <li><a href="">Structure</a></li>
                <li><a href="">FaQs</a></li>
                <li><a href="">Contact Us</a></li>

            </ul>
        </nav>


    </aside>

    <div id="colorlib-main">


        <div class="colorlib-about">
            <div class="container-fluid">
                <div class="row ">
                    <div class="col-md-4">
                        <div class="about-img animate-box" data-animate-effect="fadeInLeft" style="background-image: url(/2019/compi/cozmo/images/img_bg_2.jpg);">
                        </div>
                    </div>
                    <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                        <div class="about-desc">
                            {{--                            <span class="heading-meta">Welcome &amp; Introduce</span>--}}
                            <h3>Hola! {{$user_row->name}}!</h3>
                            <p>echfest is the annual science and technology festival of Indian Institute of Technology Bombay.[1] It also refers to the independent body of students who organize this event along with many other social initiatives and outreach programs around the year. Techfest is known for hosting a variety of events that include competitions, exhibitions, lectures as well as workshops.</p>

                            <p>
                                @if($user_row->cozmo > 0)
                                    <select class="btn btn-primary btn-learn">
                                        <option value="volvo">Create a team</option>
                                        <option value="volvo">Join a team</option>
                                    </select>
                                @endif
                                @if($user_row->cozmo == 0)
                                    <a href="https://techfest.org/reg-cozmo" class="btn btn-primary btn-learn">Register button</a>
                                @endif
                                <a href="#" class="btn btn-primary btn-learn">Problem Statement</a>
                                <button class="btn btn-primary btn-learn" onclick="launch_toast()">Show Toast</button>

                            <div id="toast"><div id="img">Icon</div><div id="desc">A notification message..</div></div>
                            </p>
                            <p>HI {{$user_row->name}}, you are successfully registered for this compi, now create/join a team.</p>


                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="row scroll">
            <div class="col-md-12 animate-box scroll_inside" data-animate-effect="fadeInLeft" style="height: 200px;">
                sdkjfbskl
            </div>
        </div>
        {{--        <div class="fancy-collapse-panel">--}}
        {{--            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">--}}
        {{--                <div class="panel panel-default">--}}
        {{--                    <div class="panel-heading" role="tab" id="headingOne">--}}
        {{--                        <h4 class="panel-title">--}}
        {{--                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why choose me?--}}
        {{--                            </a>--}}
        {{--                        </h4>--}}
        {{--                    </div>--}}
        {{--                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">--}}
        {{--                        <div class="panel-body">--}}
        {{--                            <div class="row">--}}
        {{--                                <div class="col-md-6">--}}
        {{--                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>--}}
        {{--                                </div>--}}
        {{--                                <div class="col-md-6">--}}
        {{--                                    <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="panel panel-default">--}}
        {{--                    <div class="panel-heading" role="tab" id="headingTwo">--}}
        {{--                        <h4 class="panel-title">--}}
        {{--                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What I do?--}}
        {{--                            </a>--}}
        {{--                        </h4>--}}
        {{--                    </div>--}}
        {{--                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">--}}
        {{--                        <div class="panel-body">--}}
        {{--                            <!--									            <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>-->--}}
        {{--                            <ul>--}}
        {{--                                <li>Q. Why should I participate in Cozmo Clench?</li>--}}
        {{--                                <li>A. The competition provides its participants with a reasonable grasp of important mechanical and programming principles that will take them in the direction of being able to design and construct their own gripping robot. Participants work together to design and build a robotic vehicle that can navigate on an obstacle-filled course while moving blocks from one location to another.</li>--}}
        {{--                                <li>Q. How to register?</li>--}}
        {{--                                <li>A. Follow these steps for registration :</li>--}}
        {{--                                <p>   www.techfest.org -> Competitions > Cozmo Clench -> Explore More -> Register -> Fill all your details -> Your team will be formed and now you can add other team members </p>--}}
        {{--                                <li>Q. How many people can be there in one team?</li>--}}
        {{--                                <li>A. One team can have maximum of 4 members.</li>--}}
        {{--                                <li>Q. Can a team have members from different colleges?</li>--}}
        {{--                                <li>A. Yes, students from different college can form a team.</li>--}}
        {{--                                <li>Q. How many stages does the competition have?</li>--}}
        {{--                                <li>A. Two, namely zonal qualifier and finale. Top five teams from Each Zonal Qualifier will qualify for the Grand Finale at Techfest 2019-20.</li>--}}
        {{--                                <li>Q. Can I register in more than one competition?</li>--}}
        {{--                                <li>A. Yes, you can participate in more than one competition. However, it is recommended to focus on one competition as there may be some chances of slot clash.</li>--}}
        {{--                                <li>Q. Will any charging facility for our equipment be provided at the venue?</li>--}}
        {{--                                <li>A. Any kind of charging facility will not be provided to the participants at the venue. The bot must have an onboard power supply.</li>--}}
        {{--                            </ul>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="panel panel-default">--}}
        {{--                    <div class="panel-heading" role="tab" id="headingThree">--}}
        {{--                        <h4 class="panel-title">--}}
        {{--                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">My Specialties--}}
        {{--                            </a>--}}
        {{--                        </h4>--}}
        {{--                    </div>--}}
        {{--                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">--}}
        {{--                        <div class="panel-body">--}}
        {{--                            <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}

    </div>
</div>

<!-- jQuery -->
<script src="/2019/compi/cozmo/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="/2019/compi/cozmo/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="/2019/compi/cozmo/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="/2019/compi/cozmo/js/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="/2019/compi/cozmo/js/jquery.flexslider-min.js"></script>
<!-- Sticky Kit -->
<script src="/2019/compi/cozmo/js/sticky-kit.min.js"></script>


<!-- MAIN JS -->
<script src="/2019/compi/cozmo/js/main.js"></script>

<script>
    function launch_toast() {
        var x = document.getElementById("toast")
        x.className = "show";
        setTimeout(function(){ x.className = x.className.replace("show", ""); }, 5000);
    }
</script>

</body>
</html>

