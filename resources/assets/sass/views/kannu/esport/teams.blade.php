
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Gamesleague Techfest IIT Bombay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Games Zone Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <link href="https://techfest.org/events/sport/css/bootstrap1.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://techfest.org/events/sport/css/popup-box.css" rel="stylesheet" type="text/css" media="all" />
    <link href="https://techfest.org/events/sport/css/style.css" rel="stylesheet" type="text/css" media="all" />


    <link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<style type="text/css">

</style>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-81222017-1', 'auto');
        ga('send', 'pageview');
    </script>
    <script src="https://techfest.org/events/sport/js/jquery.min.js"></script>
    <script src="https://techfest.org/events/sport/js/bootstrap.js"></script>
</head>
<body>

<div class="sub-banner" style="background-size: cover">

    <nav class="navbar navbar-default" style="background: url(/events/sport/images/header.jpg);
    background-size: cover;background-repeat: no-repeat;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/gamersleague/index.html" style="float: left;width: 20vw;"><img src="/events/sport/images/tflogo4.png" style="width: 85%;"></a>
                <a href="/gamersleague/index.html" style="float: left;width: 20vw;"><img src="/events/sport/images/iitblogo.png" style="width: 100%;"></a>
            </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hover-effect"><a href="https://techfest.org/gamersleague/index.html">Home</a></li>
                        <li class="hover-effect"><a href="https://techfest.org/gamersleague/about.html">About</a></li>
                        <li class="hover-effect"><a href="https://techfest.org/gamersleague/teams/csgo">Teams CS-GO</a></li>
                        <li class="hover-effect"><a href="https://techfest.org/gamersleague/teams/dota">Teams DOTA-2</a></li>
                        <li class="hover-effect"><a href="https://techfest.org/gamersleague/schedule.html">Schedule</a></li>
                        <!-- <li class="hover-effect"><a href="contact.html">Contact</a></li> -->
                    </ul>
                </div>
        </div>
    </nav>
</div>

<style>
    .gg a{
        font-size:1.5em;
        letter-spacing:2px;

    }
    .gg a:link {
        color: black;
    }

    .gg a:visited {
        color: black;
    }

    .gg a:hover {
        color: red;
    }

    .gg/    a:active {
        color: red;
    }
    .col-sm-4{
        padding-bottom: 20px;
    }

</style>
<div class="gallery-w3layouts" id="gallery">
    <div class="container">
        <h2>Teams</h2>
        <br>
        <div class="row" style="min-height:500px">
            @foreach($teams as $team)
                <div class="col-sm-6" style="padding:1rem;">
                    <div class="row" style="height:200px;">
                        <div class="col-xs-8" style="text-align:right">
                            <img src="/public/eimages/{{$team->image_file}}" alt=" " class="img-responsive" style="height:200px;width:200px;float:left;  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);"/>
                        </div>
                        <div class="col-xs-4 gg" style="float: right;">
                            <span style="font-size:1.5em;display:block;color:red;font-weight: bold;">{{$team->team_name}}</span>
                            <a href="https://steamcommunity.com/profiles/{{$team->steam1}}" style="font-size: 0.8em">{{$team->fname1}}</a><br>
                            <a href="https://steamcommunity.com/profiles/{{$team->steam2}}" style="font-size: 0.8em">{{$team->fname2}}</a><br>
                            <a href="https://steamcommunity.com/profiles/{{$team->steam3}}" style="font-size: 0.8em">{{$team->fname3}}</a><br>
                            <a href="https://steamcommunity.com/profiles/{{$team->steam4}}" style="font-size: 0.8em">{{$team->fname4}}</a><br>
                            <a href="https://steamcommunity.com/profiles/{{$team->steam5}}" style="font-size: 0.8em">{{$team->fname5}}</a>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

<script src="https://techfest.org/events/sport/js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="https://techfest.org/events/sport/js/modernizr.custom.53451.js"></script>
<script>
    $(document).ready(function() {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<div class="pop-up">
    <div id="small-dialog" class="mfp-hide book-form">
        <div class="pop-up-content-agileits-w3layouts">
            <div class="col-md-6 w3ls-left">
                <img src="images/g1.jpg" alt=" " class="img-responsive zoom-img" />
            </div>
            <div class="col-md-6 w3ls-right">
                <h4>Game-1</h4>
                <p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
                <p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
                <div class="span span1">
                    <p class="left">NAME</p>
                    <p class="right">: Sed Perst</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span2">
                    <p class="left">DEVELOPER</p>
                    <p class="right">: Martina</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span3">
                    <p class="left">REQUIRES</p>
                    <p class="right">: 2GB Hard Disk Space</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="pop-up">
    <div id="small-dialog2" class="mfp-hide book-form">
        <div class="pop-up-content-agileits-w3layouts">
            <div class="col-md-6 w3ls-left">
                <img src="images/g2big.jpg" alt=" " class="img-responsive zoom-img" />
            </div>
            <div class="col-md-6 w3ls-right">
                <h4>Game-2</h4>
                <p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
                <p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
                <div class="span span1">
                    <p class="left">NAME</p>
                    <p class="right">: Vivamus</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span2">
                    <p class="left">DEVELOPER</p>
                    <p class="right">: Quentin</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span3">
                    <p class="left">REQUIRES</p>
                    <p class="right">: 3GB Hard Disk Space</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="pop-up">
    <div id="small-dialog3" class="mfp-hide book-form">
        <div class="pop-up-content-agileits-w3layouts">
            <div class="col-md-6 w3ls-left">
                <img src="images/g3big.jpg" alt=" " class="img-responsive zoom-img" />
            </div>
            <div class="col-md-6 w3ls-right">
                <h4>Game-3</h4>
                <p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
                <p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
                <div class="span span1">
                    <p class="left">NAME</p>
                    <p class="right">: Venenatis</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span2">
                    <p class="left">DEVELOPER</p>
                    <p class="right">: Stanley</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span3">
                    <p class="left">REQUIRES</p>
                    <p class="right">: 1GB Hard Disk Space</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="pop-up">
    <div id="small-dialog4" class="mfp-hide book-form">
        <div class="pop-up-content-agileits-w3layouts">
            <div class="col-md-6 w3ls-left">
                <img src="images/g5.jpg" alt=" " class="img-responsive zoom-img" />
            </div>
            <div class="col-md-6 w3ls-right">
                <h4>Game-4</h4>
                <p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
                <p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
                <div class="span span1">
                    <p class="left">NAME</p>
                    <p class="right">: Interdum</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span2">
                    <p class="left">DEVELOPER</p>
                    <p class="right">: Spielberg</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span3">
                    <p class="left">REQUIRES</p>
                    <p class="right">: 3GB Hard Disk Space</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="pop-up">
    <div id="small-dialog5" class="mfp-hide book-form">
        <div class="pop-up-content-agileits-w3layouts">
            <div class="col-md-6 w3ls-left">
                <img src="images/g6.jpg" alt=" " class="img-responsive zoom-img" />
            </div>
            <div class="col-md-6 w3ls-right">
                <h4>Game-5</h4>
                <p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
                <p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
                <div class="span span1">
                    <p class="left">NAME</p>
                    <p class="right">: Faucibus</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span2">
                    <p class="left">DEVELOPER</p>
                    <p class="right">: Cameron</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span3">
                    <p class="left">REQUIRES</p>
                    <p class="right">: 2GB Hard Disk Space</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="pop-up">
    <div id="small-dialog6" class="mfp-hide book-form">
        <div class="pop-up-content-agileits-w3layouts">
            <div class="col-md-6 w3ls-left">
                <img src="images/g7big.jpg" alt=" " class="img-responsive zoom-img" />
            </div>
            <div class="col-md-6 w3ls-right">
                <h4>Game-6</h4>
                <p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
                <p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
                <div class="span span1">
                    <p class="left">NAME</p>
                    <p class="right">: Tincidunt</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span2">
                    <p class="left">DEVELOPER</p>
                    <p class="right">: Jackson</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span3">
                    <p class="left">REQUIRES</p>
                    <p class="right">: 4GB Hard Disk Space</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="pop-up">
    <div id="small-dialog7" class="mfp-hide book-form">
        <div class="pop-up-content-agileits-w3layouts">
            <div class="col-md-6 w3ls-left">
                <img src="images/g4big.jpg" alt=" " class="img-responsive zoom-img" />
            </div>
            <div class="col-md-6 w3ls-right">
                <h4>Game-7</h4>
                <p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
                <p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
                <div class="span span1">
                    <p class="left">NAME</p>
                    <p class="right">: Vestibulum</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span2">
                    <p class="left">DEVELOPER</p>
                    <p class="right">: Daniel</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span3">
                    <p class="left">REQUIRES</p>
                    <p class="right">: 2GB Hard Disk Space</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<div class="pop-up">
    <div id="small-dialog8" class="mfp-hide book-form">
        <div class="pop-up-content-agileits-w3layouts">
            <div class="col-md-6 w3ls-left">
                <img src="images/g8.jpg" alt=" " class="img-responsive zoom-img" />
            </div>
            <div class="col-md-6 w3ls-right">
                <h4>Game-8</h4>
                <p>Duis sodales nibh vitae augue feugiat efficitur. Sed vel urna sollicitudin, interdum massa nec, sagittis massa. </p>
                <p class="agileits">Etiam porttitor neque enim, sit amet mollis est sollicitudin sed.</p>
                <div class="span span1">
                    <p class="left">NAME</p>
                    <p class="right">: Vehicula ligula</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span2">
                    <p class="left">DEVELOPER</p>
                    <p class="right">: Cyrill</p>
                    <div class="clearfix"></div>
                </div>
                <div class="span span3">
                    <p class="left">REQUIRES</p>
                    <p class="right">: 3GB Hard Disk Space</p>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div class="footer" style="background-color: black; padding-bottom: 0px;">
    <div class="container" style="width: 100vw;">
        <div class="col-md-4 footer-left-w3">
            <h4 style="color: white">Contact</h4>
            <ul>

            	<div class="row">
            	<div>
                <li><span style="color: white" class="glyphicon glyphicon-envelope" aria-hidden="true"></span></li>
                <li><a href="/cdn-cgi/l/email-protection#086d70696578646d4865696164266b6765"><h6 style="color: white">gamersleague@techfest.org</h6></a></li>
                </div>
                <div>
                <li><span style="color: white" class="glyphicon glyphicon-earphone" aria-hidden="true"></span></li>
                <li><h6 style="color: white">+91 9460313067 | +91 8828290544</h6></li>
                </div>
                </div>
            </ul>
<!--             <ul>
                <li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span></li>
                <li style="padding-right: 8px;"><h6>4th Avenue,London</h6></li>
                <li><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span></li>
                <li><h6>(0033)6544 5453 644</h6></li>
            </ul> -->
        </div>
        <div class="col-md-8 footer-middle-w3">
            <img src="/img/esports/footer1.jpg">
<!--             @foreach($teams as $team)
                <div class="col-md-3 img-w3-agile">
                    <a href="single.html"><img src="images/ng1.jpg" alt=" " /></a>
                </div>
            @endforeach
            <div class="clearfix"></div> -->
        </div>
        <div class="clearfix"></div>
        <div class="copyright">
            <p style="color: white; border-top-color: white;padding: 0px;">&copy; 2017 Techfest, IIT Bombay <a href="http://techfest.org/" target="_blank">  </a></p>
        </div>
    </div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/ddc5a536/cloudflare-static/email-decode.min.js"></script></body>
</html></title>
</head>
<body>

</body>
</html>