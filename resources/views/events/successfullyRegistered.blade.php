<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$meta['title']}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$meta['description']}}">
    <meta name="keywords" content="{{$meta['keywords']}}">
    <link rel="canonical" href="https://m.techfest.org">
    <link rel="author" href="https://plus.google.com/117706965098999491468" />
    <link rel="icon" href="https://techfest.org/favicon.png">
    <meta name="theme-color" content="#333333">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{asset('2018/thumbnail.png')}}">
    <meta property="og:description" content="{{$meta['description']}}">
    <meta property="og:title" content="{{$meta['title']}}">
    <meta property="og:site_name" content="Techfest 2018-19">
    <meta property="og:see_also" content="https://m.techfest.org">

    <meta itemprop="name" content="{{$meta['title']}}">
    <meta itemprop="description" content="{{$meta['description']}}">
    <meta itemprop="image" content="{{asset('2018/thumbnail.png')}}">

    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:title" content="{{$meta['title']}}">
    <meta name="twitter:description" content="{{$meta['description']}}">
    <meta name="twitter:image" content="{{asset('2018/thumbnail.png')}}">
    <style>
        .registered{
            position: absolute;
            top: 50vh;
            left: 0;
            right: 0;
            margin: auto;
            display: inline-block;
            max-width: 80vw;
            color: white;
            padding: 5vw;
            transform: translateY(-50%);
            background: #33333359;
            border-radius: 1.5vw;
        }
        .homepage-footer{
            position: fixed;
            bottom: 0.6vw;
            left: 3vw;
            right:3vw;
            margin: auto;
            font-size: 1.04vw;
            color: white;
            font-family: "Roboto", sans-serif;
            transition: bottom 300ms;
            z-index:2;
        }
        .homepage-footer .footer-background{
            width: 140vw;
            position: absolute;
            bottom: -3.4vw;
            left: -200vw;
            right: -200vw;
            margin: auto;
        }
        .center-footer a{
            color:white !important;
            text-decoration: none !important;
            transition: color 1s;
        }
        .center-footer a:hover{
            color: #aaa !important;
        }
        .pen{
            pointer-events: none;
        }
        h2{
            font-size: 2vw;
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>

    <script>
        if (screen.width <= 699) {
            document.location = (window.location.href).replace('https://techfest.org','https://m.techfest.org');
        }
        var giftofspeed = document.createElement('link');
        giftofspeed.rel = 'stylesheet';
        giftofspeed.href = '{{asset('asset/css/Get.css')}}';
        giftofspeed.type = 'text/css';
        var godefer = document.getElementsByTagName('link')[0];
        godefer.parentNode.insertBefore(giftofspeed, godefer);
    </script>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2RJ5L8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="app">
    <div class="logo-container" @click="routeChange('/')">
        <img class="background-logo" src="https://techfest.org/2018/header.png" alt="header-logo">
    </div>
    <div class="navigation d-flex flex-row-reverse">
        <div class="icon user-search-icons text-center ">
            <img src="https://techfest.org/2018/Icons/hamburger.svg" class="i fa-2x fa-search search-nav" @click="searchClick" alt="search-nav"/>
            <img src="https://techfest.org/2018/Icons/person.svg" class="i fa-2x fa-user" id="{{session()->has('participant')?'dashboard':'signinButton'}}" alt="dashboard-nav">
        </div>
        <div class="block d-flex flex-column">
            <div @click="routeChange('/lectures')" data-text="Lectures" class="lecture nav-button">Lectures</div>
            <div @click="routeChange('/exhibitions')" data-text="Exhibitions" class="exhi nav-button">Exhibitions</div>
            <div @click="routeChange('/technoholix')" data-text="Technoholix" class="techX nav-button">Technoholix</div>
            <div @click="routeChange('/ozone')" data-text="Ozone" class="ozone nav-button">Ozone</div>
        </div>
        <div class="block d-flex flex-column">
            <div @click="routeChange('/competitions')" class="competitions nav-button">Competitions</div>
            <div @click="routeChange('/ideate')" class="ideate nav-button">Ideate</div>
            {{--<div @click="routeChange('/esports')" class="esports nav-button">Esports</div>--}}
            <div @click="routeChange('/robowars')" class="robo nav-button">Robowars</div>
        </div>
        <div class="block d-flex flex-column">
            <div @click="routeChange('/workshops')" class="workshop nav-button">Workshops</div>
            <div @click="routeChange('/summit')" class="summit nav-button">Summit</div>
            <div @click="routeChange('/twmun')" class="TWMUN nav-button">TWMUN</div>
        </div>
        <div class="block d-flex flex-column">
            <div @click="routeChange('/')" class="home nav-button">Home</div>
            <div @click="routeChange('/initiatives')" class="initiatives nav-button">Initiatives</div>
        </div>
    </div>
    <div class="search-overlay">
        <div class="search-container">
            <div class="top-bar">
                <div class="search-group" @click="focusSearch">
                    <div class="search-icon">
                        <i class="fa fa-search"></i>
                        <input type="text" class="search-box" v-model="searchQuery" placeholder="What are you looking for ... ">
                    </div>
                </div>
                <div class="close-search" @click="searchClick">X</div>
                <div class="search-results">
                    <div class="search-item" v-for="(val,key) in searchElements" @click="routeChange(val.url)">@{{val.name}}</div>
                </div>
            </div>
            <div class="d-flex justify-content-around search-list play">
                <div class="column">
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/')">Home</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/initiatives')">Initiatives</div>
                        {{--<div class="hd2 pointer">lorem</div>--}}
                        {{--<div class="hd2 pointer">lorem</div>--}}
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/robowars')">Robowars</div>
                    </div>
                    {{--<div class="group">--}}
                    {{--<div class="hd1 pointer" @click="routeChange('/esports')">Esports</div>--}}
                    {{--</div>--}}
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/exhibitions')">Exhibitions</div>
                        {{--<div class="hd2 pointer">Techconnect</div>--}}
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/technoholix')">Technoholix</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/ozone')">Ozone</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/lectures')">Lectures</div>
                    </div>

                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/media')">Media</div>
                    </div>
                </div>
                <div class="column">
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/summit')">Summit</div>
                        {{--<div class="hd2 pointer">Lorem</div>--}}
                        {{--<div class="hd2 pointer">Lorem</div>--}}
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/twmun')">TWMUN</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/ideate')">International Ideate</div>
                        @foreach($ideate as $event)
                            <div class="d-flex hd2">
                                <div class="pointer" @click="routeChange('{{$event['url']}}')">{{$event['name']}}</div>
                                {{--<div class="team-name">{{}}</div>--}}
                            </div>
                        @endforeach
                    </div>
                    <div class="group">
                        <div class="pointer"><a href="https://www.youtube.com/watch?v=2z3CEBv8PLI" target="_blank" class="hd1 tdn">After-Movie</a></div>
                        <div class="pointer"><a href="http://techfest.org/lookback-18" target="_blank" class="hd1 tdn">Lookback 2018</a></div>
                        <div class="pointer"><a href="https://en.wikipedia.org/wiki/Techfest#History_and_Growth" target="_blank" class="hd1 tdn">History of Techfest</a></div>
                    </div>
                </div>
                <div class="column">
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/competitions')">Competitions</div>
                        @foreach($competition as $event)
                            @if($event['order_by']>0 && $event['order_by']<999)
                                <div class="hd2 pointer" @click="routeChange('{{$event['url']}}')">{{$event['name']}}</div>
                            @endif
                        @endforeach
                    </div>
                </div>
                {{--<div class="column">--}}
                {{--<div class="group">--}}
                {{--<div class="hd1 pointer">Workshops</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="column">--}}
                {{--<div class="group">--}}
                {{--<div class="hd1 pointer">&nbsp;</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--<div class="hd2 pointer">Lorem</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="column">
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/hospitality')">Hospitality</div>
                    </div>
                    <div class="group">
                        {{--<div class="hd1 pointer" @click="routeChange('/about-techfest')">Merchendise</div>--}}
                        <div class="hd1 pointer" @click="routeChange('/about-techfest')">About Techfest</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/legal')">Legal</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/contact-us')">Contact Us</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" onclick="window.open('https://ps.techfest.org')">Problem Statements</div>
                    </div>
                </div>
                <div class="column">
                    <div class="hd1 pointer play" @click="routeChange('/Sponsors')">Sponsors</div>
                </div>
            </div>
        </div>
    </div>
    @if($participant!==null && $participant->phone !==null)
        <div class="dashboard-overlay">
            <div class="close-button">X</div>l
            <div class="layer-1">
                <div class="layer-1-container">
                    <div class="profile d-flex flex-row">
                        <img class="picture" src="{{session()->get('googleData')->picture}}" />
                        <div class="details">
                            <div class="name">{{$participant->name or ""}}</div>
                            <div class="email">{{$participant->email or ""}}</div>
                            <div class="TFID">TF ID : TF{{substr("0000000".$participant->id,-6)}}</div>
                            <div class="logout text-danger" @click="logout">Logout</div>
                        </div>
                    </div>
                    <div>

                    </div>
                    <div class="events">
                        @if($participant->events()->count()>0)
                            @foreach($participant->events()->get() as $event)
                                <div class="event">
                                    <div class="event-name" @if($event->url) @click="routeChange('{{$event->url}}')" @endif>
                                        {{$event->name}}
                                    </div>
                                    @if($participant->email==="vaibhawofficial@gmail.com" && $event->payment_link!==null)
                                        <div class="payment-button button pay-payment global-button" @click="paymentLink='{{$event->payment_link}}'">
                                            PAY
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        @else
                        @endif
                    </div>
                    <div class="attendance">
                        @if(false)
                            <img class="qr" src="https://cdn.ttgtmedia.com/rms/misc/qr_code_barcode.jpg" alt="QR">
                            <button class="print-qr">Print Your QR Code</button>
                            <div class="message">
                                QR Code will be required during online attendance at Zonals and during fest
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="layer-2"></div>
        </div>
    @endif
    @if(isset($e))
    <div class="registered">
        <h2>Congratulations, you have been successfully registered for Robowars.</h2>
        <p> Please save a screenshot of this page, as it may be required in case there are some errors during your registrations.</p>
        <p>Your team has following members registered:</p>
        <table class="table table-alternate">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Techfest Id</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
            @foreach($e->participants as $participant)
                <tr>
                    <th>{{$participant->name}}</th>
                    <td>TF-{{substr('000000'.$participant->id,-6)}}</td>
                    <td>{{$participant->email}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <p style="color: lightgoldenrodyellow">
            Please note Techfest ID of all the members as it will be required for many future occasions
        </p>
    </div>
    @endif
    <div class="homepage-footer">
        <img src="https://techfest.org/2018/footer.svg" alt="footer-background" class="pen footer-background">
        <div class="d-flex justify-content-between">
            <div class="left-footer d-flex justify-content-start">
                <div class="nav-button" @click="$root.routeChange('/about-techfest')">About</div>
                <div class="nav-button" @click="$root.routeChange('/Sponsors')">Sponsors</div>
                <div class="nav-button" @click="$root.routeChange('/media')">Media</div>
                <!--<div class="nav-button">Merchandise</div>-->
            </div>
            <div class="center-footer d-flex justify-content-center">
                <a href="https://www.facebook.com/iitbombaytechfest/" target="_blank" class="fa fa-facebook footer-icon"></a>
                <a href="https://www.instagram.com/techfest_iitbombay/" target="_blank" class="fa fa-instagram footer-icon"></a>
                <a href="https://twitter.com/Techfest_IITB"  target="_blank" class="fa fa-twitter footer-icon"></a>
                <a href="https://www.linkedin.com/company/techfest/" target="_blank" class="fa fa-linkedin footer-icon"></a>
                <a href="https://in.pinterest.com/techfestiitbombay/" target="_blank" class="fa fa-pinterest footer-icon"></a>
                <a href="https://www.youtube.com/user/techfestiitbombay" target="_blank" class="fa fa-youtube footer-icon"></a>
                <a href="https://blog.techfest.org" target="_blank" class="fa fa-bold footer-icon"></a>
            </div>
            <div class="right-footer d-flex justify-content-end">
                <div class="nav-button" @click="$root.routeChange('/Hospitality')">Hospitality</div>
                <div @click="$root.routeChange('/legal')" class="nav-button">Legal</div>
                <div class="nav-button" @click="$root.routeChange('/contact-us')">Contact Us</div>
            </div>
        </div>
    </div>
</div>
<script>
    const _routes = {
        'loginPost':'{{route('loginPost')}}',
        'registerUrlGet':'{{route('registerUrlGet',['url'=>Request::path()])}}',
        'currentUrl':'{{Request::path()}}',
        'templateUrlPost': '{{route('templateUrlPost')}}',
        'competitionsPost': '{{route('api.event.competitionsPost')}}',
        'ideatesPost': '{{route('api.event.ideatesPost')}}',
        'eventIdGet': '{{route('event.getIdPost',':id')}}',
        'homePng':'https://techfest.org/public/home.png'
    };
    const csrf = {
        'token':'{!! csrf_token() !!}',
        'field':'{!! csrf_field() !!}'
    };
    const s3Link = 'https://techfest.org/2018/Get/img-temp';
</script>
<script src="{{asset('js/iziToast.min.js')}}" defer async></script>
</body>
</html>

