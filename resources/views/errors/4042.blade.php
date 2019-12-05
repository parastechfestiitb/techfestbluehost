<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Techfest IIT Bombay</title>
    <meta name="description" content="For a limited period of time, we are giving you a chance of winning something from what was supposed to be nothing. ">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="https://techfest.org/404-Glass.png">
    <meta property="og:url" content="https://techfest.org/404">
    <meta property="og:description" content="For a limited period of time, we are giving you a chance of winning something from what was supposed to be nothing. ">
    <meta property="og:title" content="404 | Page Not Found | Techfest 2018-19">
    <meta property="og:site_name" content="Techfest 2018-19">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-81222017-1');</script>
    <link rel="stylesheet" href="https://techfest.org/css/app.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tingle/0.13.2/tingle.min.css">

    <style>
        html,body{
            background: black;
        }
        .fa-2x{
            font-size: 2em;
        }
        .tingle-modal-box,.tingle-modal-box>*{
            background: black;
        }
    </style>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-81222017-1');</script>
    <link rel="author" href="https://plus.google.com/117706965098999491468" />
    <link rel="icon" href="https://techfest.org/favicon.png">
    <meta name="theme-color" content="#333333">

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-10 mt-md-5">
            <div class="404 p-2">
                <div class="display-1 text-danger">404</div>
                <h1 class="h1 text-white">Page Not Found &#x2639;</h1>
                <br>
                <div class="h2 text-white-50 tj text-justify">While you are here, check out this youtube video, answer a simple question and win a chance to enter
                    <div class="text-warning">Imagine Dragons Fan Event in Las Vegas</div>
                </div>
                <br>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6 mb-2">
                    <div class="btn btn-primary p-3 fa-2x border-0 w-100 btn-lg" id="yt-v">Watch Video</div>
                </div>
                <div class="col-md-6 mb-5">
                    <div class="btn btn-danger p-3 fa-2x border-0 w-100 btn-lg" id="fb-v">Answer The Question</div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="fb-comments" data-href="https://www.facebook.com/tusharlallofficial/posts/733973460283467" data-numposts="5"></div>
        </div>
    </div>

</div>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-bottom ">
    <a class="navbar-brand text-white" href="https://techfest.org/">Go back to home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ml-auto" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link text-white-50" href="#">Powered by Corning Gorilla Glass<span class="sr-only">(current)</span></a>
            </li>



        </ul>

    </div>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tingle/0.13.2/tingle.min.js"></script>
<script>
    var modal = new tingle.modal({
        footer: true,
        stickyFooter: false,
        closeMethods: ['overlay', 'button', 'escape'],
        closeLabel: "Close",
        cssClass: ['custom-class-1', 'custom-class-2'],
        onOpen: function() {
            console.log('modal open');
        },
        onClose: function() {
            console.log('modal closed');
        },
        beforeClose: function() {
            // here's goes some logic
            // e.g. save content before closing the modal
            return true; // close the modal
            return false; // nothing happens
        }
    });

    // set content
    modal.setContent(`
<div class="embed-responsive embed-responsive-16by9">
  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oHvCAOBHY44" frameborder="0"></iframe>
</div>`);
    $('#yt-v').click(function(){

// open modal
        modal.open();

    });
    var modal2= new tingle.modal({
        footer: true,
        stickyFooter: false,
        closeMethods: ['overlay', 'button', 'escape'],
        closeLabel: "Close",
        cssClass: ['custom-class-1', 'custom-class-2'],
        onOpen: function() {
            console.log('modal open');
        },
        onClose: function() {
            console.log('modal closed');
        },
        beforeClose: function() {
            // here's goes some logic
            // e.g. save content before closing the modal
            return true; // close the modal
            return false; // nothing happens
        }
    });
    modal2.setContent(`
<div class="text-white black">
  <div class="h2">Which instrument was played by Mr. Tushar Lall in the video?</div>
  <div class="h4">a) Guitar</div>
  <div class="h4">b) Flute</div>
  <div class="h4">c) Harmonium</div>
</div>
  <div class="h3">Comment your answer in the post linked below</div>
`);
    modal2.addFooterBtn('Comment Here!', 'tingle-btn tingle-btn--primary', function() {
        window.open('https://www.facebook.com/tusharlallofficial/posts/733973460283467')
    });

    $('#fb-v').click(function(){
        console.log('yo');
        modal2.open();
    });
</script>
</body>
</html>