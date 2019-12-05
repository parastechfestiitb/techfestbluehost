<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{asset('img/ca/favicon.png')}}" />
    <title> College Ambassador | Techfest</title>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M2RJ5L8');</script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/ca/caMiddleware.css')}}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('dropzone/dropzone.min.css')}}">

</head>
<body>
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        let js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div id="app" class="d-flex flex-column">
    <div class="nav">
        <nav class="navbar fixed-top navbar-expand-sm d-flex  justify-content-between">
            <a class="navbar-brand ml-3" href="//techfest.org">
                <img src="{{asset('img/ca/tflogo.svg')}}" alt="Brand">
            </a>
            <div id="wide-nav">
                <ul class="navbar-nav mr-0 white-text">
                    <li class="d-block profile-nav mr-2">
                        <a href="#" class="nav-link" id="profile-nav">Profile</a>
                    </li>
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="#" data-toggle="modal" data-target=".bd-example-modal-lg">Information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('ca.logoutGet')}}">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="main-container">
        <div class="d-flex justify-content-center h-100 pt-2">
            <div class="left-container d-flex flex-column" style="overflow: auto;margin-right:2rem !important;">
                <div class="sidenav">
                    <div id="profile">
                        <div class="profile">
                            <img src="https://graph.facebook.com/{{$ca->facebookid}}/picture?type=large" alt="user profile" style="margin-bottom:25px;border-radius: 0">
                        </div>
                        <div class="h3 mt-2 text-bold" style="font-size:32px;padding-bottom:20px">{{$user->name}}</div>
                        <div class="point-user">Points : {{$ca->points or "0"}}</div>
                        <div class="point-user">Rank : {{$rank}}</div>
                    </div>
                </div>
                <div class="sidenav mt-3 only-mobile">
                    <div class="text-left text-white">
                        <span>Upload files of <br>size less than 2mb</span>
                    </div>
                    <upload></upload>
                </div>
            </div>
            <main class="fluid-container text-dark">
                <dashboard></dashboard>
            </main>
            <div class="right-container">
                <div class="sidenav" style="margin-left:2rem !important;">
                    <div class="text-left text-white">
                        <span>Upload files of <br>size less than 2mb</span>
                    </div>
                    <upload></upload>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-3">
            <div class="h3">How to Secure Points and Rank Up!</div>
            <ul>
                <li>Share the posts on various social media platforms as specified in the tasks.</li>
                <li>Take a screenshot of the post after 3 hours.</li>
                <li>Upload it by clicking on the UPLOAD button.</li>
                <li>Make sure you complete these steps before the deadline.</li>
            </ul>
            <br>
            <div class="h3">Terms and Conditions</div>
            <ul>
                <li>All the proofs submitted by the College Ambassador should be genuine to their fullest knowledge.</li>
                <li>Techfest, IIT Bombay holds the right to retract the position of Ambassadorship from the student if the performance is not up to the mark.</li>
                <li>The certification will be provided only if all the specified criteria are met.</li>
                <li>All the selected College Ambassadors during their entire tenure would represent Techfest, IIT Bombay in their respective colleges.</li>
            </ul>
            <button type="button" class="text-center margin-auto close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">Close</span>
            </button>
        </div>
    </div>
</div>

<script>
    let _file = "others";
    let _routes = {
        'index':'{!! route('ca.event.index') !!}',
        'create': '{!! route('ca.event.create') !!}',
        'script': '{!! asset('dropzone/dropzone.min.js') !!}',
        'upload': '{!! route('ca.uploadPost') !!}'
    };
    let _csrf_token = '{!! csrf_token() !!}';
    let _fileType = "others";
</script>

<script src="{{asset('dropzone/dropzone.min.js')}}"></script>
<script src="{{asset('js/ca/caDashboard.js')}}"></script>
<script>

    let upload = function(e){
        $('#_file').val(e);
        $('.main-uploader').toggleClass('active') ;
    };
    let uploadEvent = function(e){
        upload($(e).attr('id'));
    };
    $('.main-uploader .closer').click(function() {
        $('.main-uploader').removeClass('active');
    });
    $('#profile-nav').click(function(){
        $('.left-container').addClass('active');
    });
    $('.left-container').click(function(){
        $('.left-container').removeClass('active');
    });
</script>
</body>
</html>
