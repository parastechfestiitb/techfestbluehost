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
    <meta rel="canonical" content="https://m.techfest.org">
    <link rel="author" href="https://plus.google.com/117706965098999491468" />
    <link rel="icon" href="https://techfest.org/2018/favicon.png">
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

    <link rel="stylesheet" href="{{asset('asset/css/Get.css')}}">
    <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M2RJ5L8');</script>
    <script>
        if (screen.width <= 699) {
            document.location = (window.location.href).replace('https://techfest.org/2018','https://m.techfest.org');
        }
    </script>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2RJ5L8"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="app">
    <div class="logo-container" @click="routeChange('/2018')">
        <img class="background-logo" src="https://techfest.org/2018/header.png" alt="header-logo">
    </div>
    <div class="navigation d-flex flex-row-reverse" v-if="showNav">
        <div class="icon user-search-icons text-center ">
            <img src="https://techfest.org/2018/Icons/hamburger.svg" class="i fa-2x fa-search search-nav" @click="searchClick" alt="search-nav"/>
            <img src="https://techfest.org/2018/Icons/person.svg" class="i fa-2x fa-user" id="{{session()->has('participant')?'dashboard':'signinButton'}}" alt="dashboard-nav">
        </div>
        <div class="block d-flex flex-column">
            <div @click="routeChange('/2018/lectures')" data-text="Lectures" class="lecture nav-button">Lectures</div>
            <div @click="routeChange('/2018/exhibitions')" data-text="Exhibitions" class="exhi nav-button">Exhibitions</div>
            <div @click="routeChange('/2018/technoholix')" data-text="Technoholix" class="techX nav-button">Technoholix</div>
            <div @click="routeChange('/2018/ozone')" data-text="Ozone" class="ozone nav-button">Ozone</div>
        </div>
        <div class="block d-flex flex-column">
            <div @click="routeChange('/2018/competitions')" class="competitions nav-button">Competitions</div>
            <div @click="routeChange('/2018/ideates')" class="ideate nav-button">Ideate</div>
            {{--<div @click="routeChange('/2018/esports')" class="esports nav-button">Esports</div>--}}
            <div @click="routeChange('/2018/robowars')" class="robo nav-button">Robowars</div>
        </div>
        <div class="block d-flex flex-column">
            <div @click="routeChange('/2018/workshops')" class="workshop nav-button">Workshops</div>
            <div @click="routeChange('/2018/summit')" class="summit nav-button">Summit</div>
            <div @click="routeChange('/2018/twmun')" class="TWMUN nav-button">TWMUN</div>
        </div>
        <div class="block d-flex flex-column">
            <div @click="routeChange('/2018')" class="home nav-button">Home</div>
            <div @click="routeChange('/2018/initiatives')" class="initiatives nav-button">Initiatives</div>
        </div>
    </div>
    <div class="navigation d-flex flex-row-reverse" v-else>
        <div class="icon user-search-icons text-center">
            <div class="i fas fa-address-book"></div>
            <div class="i fas fa-search" @click="searchClick" ></div>
            <div class="i fas fa-user"></div>
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

                <div class="close-search" @click="searchClick">
                    X
                </div>
                <div class="search-results">
                    <div class="search-item" v-for="(val,key) in searchElements" @click="routeChange(val.url)">@{{val.name}}</div>
                </div>
            </div>
            <div class="d-flex justify-content-around search-list play">
                <div class="column">
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018')">Home</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/initiatives')">Initiatives</div>
                        {{--<div class="hd2 pointer">lorem</div>--}}
                        {{--<div class="hd2 pointer">lorem</div>--}}
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/robowars')">Robowars</div>
                    </div>
                    {{--<div class="group">--}}
                        {{--<div class="hd1 pointer" @click="routeChange('/2018/esports')">Esports</div>--}}
                    {{--</div>--}}
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/exhibitions')">Exhibitions</div>
                        {{--<div class="hd2 pointer">Techconnect</div>--}}
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/technoholix')">Technoholix</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/ozone')">Ozone</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/lectures')">Lectures</div>
                    </div>

                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/media')">Media</div>
                    </div>
                </div>
                <div class="column">
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/summit')">Summit</div>
                        {{--<div class="hd2 pointer">Lorem</div>--}}
                        {{--<div class="hd2 pointer">Lorem</div>--}}
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/twmun')">TWMUN</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/ideates')">International Ideate</div>
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
                        <div class="hd1 pointer" @click="routeChange('/2018/competitions')">Competitions</div>
                        @foreach($competition as $event)
                            <div class="hd2 pointer" @click="routeChange('{{$event['url']}}')">{{$event['name']}}</div>
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
                        <div class="hd1 pointer" @click="routeChange('/2018/hospitality')">Hospitality</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer">Merchendise</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/2018/legal')">Privacy Policy</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer">Contact Us</div>
                    </div>
                    <div class="group">
                        <div class="hd1 pointer" onclick="window.open('https://ftp.techfest.org')">FTP</div>
                    </div>
                </div>
                <div class="column">
                    <div class="hd1 pointer play" @click="routeChange('/2018/Sponsors')">Sponsors</div>
                </div>
            </div>
        </div>
    </div>
    @if($participant!==null && $participant->phone !==null)
        <div class="dashboard-overlay">
            <div class="close-button">X</div>
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
                                <div class="event" @if($event->url) @click="routeChange('{{$event->url}}')" @endif>
                                    {{$event->name}}
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
    <div class="page-transition"></div>
    <transition :duration="500">
        <router-view></router-view>
    </transition>
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
{{--<script src="https://techfest.org/js/parallex.js"></script>--}}
<script src="{{asset('js/iziToast.min.js')}}"></script>
<script src="{{asset('asset/js/Get.js')}}?v=5.11"></script>
</body>
</html>

