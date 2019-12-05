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
    <link rel="stylesheet" href="https://techfest.org/css/flipclock.css">
    <meta name="theme-color" content="#333333">
    <meta property="og:url" content="{{url()->current()}}">
    <meta property="og:image" content="{{asset('2018/thumbnail.png')}}">
    <meta property="og:description" content="{{$meta['description']}}">
    <meta property="og:title" content="{{$meta['title']}}">
    <meta property="og:site_name" content="Techfest 2018-19">
    <meta property="og:see_also" content="https://m.techfest.org">
    <meta itemprop="name" content="{{$meta['title']}}">
    <meta itemprop="description" content="{{$meta['description']}}">
    <meta itemprop="image" content="{{asset('2018/thumbnail.png')}}"><script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="{{url()->current()}}">
    <meta name="twitter:title" content="{{$meta['title']}}">
    <meta name="twitter:description" content="{{$meta['description']}}">
    <meta name="twitter:image" content="{{asset('2018/thumbnail.png')}}">
    <style>
        *{box-sizing:border-box;cursor: url(https://techfest.org/2018/cursor.cur), auto;font-family: 'Roboto', sans-serif;font-weight: 300;transition: filter 500ms;}  html, body, #app{width: 100%;height: 100%;background: #000;}  .blur{filter: blur(15px);pointer-events: none;}  img {-moz-user-select: none;-webkit-user-select: none;-ms-user-select: none;user-select: none;-webkit-user-drag: none;user-drag: none;}  a{color: white !important;;text-decoration: underline !important;}
        .blinking{
            position: fixed;
            top: 2.84091vh;
            left: 20.76768vw;
            color: #fff;
            z-index: 20;
            text-transform: capitalize;
            letter-spacing: 2px;
            text-align: center;
            text-decoration: blink;
        }
        .blink-text{
            text-decoration: blink;
            -webkit-animation-name: blinker;
            -webkit-animation-duration: 0.6s;
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: ease-in-out;
            -webkit-animation-direction: alternate;
            text-transform: capitalize;
            letter-spacing: 2px;
            text-align: center;
            text-decoration: blink;

        }

    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>if (screen.width <= 699) {document.location = (window.location.href).replace('https://techfest.org','https://m.techfest.org');}window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-81222017-1');</script>
</head>
<body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2RJ5L8" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<div id="app">
    <div class="logo-container" @click="routeChange('/')">
        <img class="background-logo" src="https://techfest.org/2018/header.png" alt="header-logo">
    </div>
    <div class="blinking">
        <p class="blink-text">CA Portal is live now: <a href="/ca">Know More</a></p>
    </div>
    <div class="navigation d-flex flex-row-reverse">
        <div class="icon user-search-icons text-center ">
            <img src="https://techfest.org/2018/Icons/hamburger.svg" class="i fa-2x fa-search search-nav" @click="searchClick" alt="search-nav"/>
            {{--@if(session()->has('participant'))--}}
            {{--<div id="dashboard" class="i fa-2x">Dashboard</div>--}}
            {{--@else--}}
            {{--<div id="signinButton" class="i fa-2x">Login</div>--}}
            {{--@endif--}}
            <img src="https://techfest.org/2018/Icons/person.svg" class="i fa-2x" id="{{session()->has('participant')?'dashboard':'signinButton'}}" alt="dashboard-nav">
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
            <div onclick="window.location.href='https://techfest.org/gamersleague'" class="esports nav-button">Esports</div>
            <div @click="routeChange('/robowars/2018')" class="robo nav-button">Robowars</div>
        </div>
        <div class="block d-flex flex-column">
            <div @click="routeChange('/workshops')" class="workshop nav-button">Workshops</div>
            <div @click="routeChange('/summit')" class="summit nav-button">Summit</div>
            <div @click="routeChange('/twmun')" class="TWMUN nav-button">TWMUN</div>
        </div>
        <div class="block d-flex flex-column">
            <div @click="routeChange('/')" class="home nav-button">Home</div>
            <div @click="routeChange('/initiatives')" class="initiatives nav-button">Initiatives</div>
            @if(DB::table('certificate_participant')->where('participant_id',$participant->id)->count())
                <div @click="routeChange('/certificate')" class="initiatives nav-button yellow-text">Certificate</div>
            @endif
        </div>
        <div class="block d-flex flex-column">
            <a href="https://techfest.org/2018/schedule.pdf" class="home nav-button" target="_blank">Schedule</a>
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
                        <div class="hd2 pointer" onclick="window.location.href='https://techfest.org/events/speak'">SPEAK</div>
                        <div class="hd2 pointer" @click="routeChange('/initiatives')">SSAP</div>
                        {{--<div class="hd2 pointer">Innovation Challenge</div>--}}
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
                <div class="column">
                    <div class="group">
                        <div class="hd1 pointer" @click="routeChange('/hospitality')">Hospitality</div>
                    </div>
                    <div class="group">
                        {{--<div class="hd1 pointer" @click="routeChange('/about-techfest')">Merchendise</div>--}}
                        @if(session()->has('participant') && session()->has('admin'))
                            <div @click="routeChange('/payment')" class="hd1 pointer">Payment</div>
                        @else
                            <div class="hd1 pointer" @click="routeChange('/about-techfest')">About Techfest</div>
                        @endif
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
            <div class="close-button">X</div>
            <div class="layer-1">
                <div class="layer-1-container">
                    <div class="profile d-flex flex-row">
                        <img class="picture" src="{{session()->get('googleData')->picture}}" />
                        <div class="details">
                            <div class="name">{{$participant->name or ""}}</div>
                            <div class="email">{{$participant->email or ""}}</div>
                            <div class="TFID">
                                @if(session()->has('participant') && $participant->accomodation===1)
                                    <span class="accommodation"><i class="fa fa-home text-success"></i></span>
                                @endif
                                TF ID : <span class="text-warning">TF{{substr("0000000".$participant->id,-6)}}</span></div>
                            <div class="logout text-danger" @click="logout">Logout</div>
                        </div>
                    </div>
                    <div>

                    </div>
                    <div class="events">
                        @if($participant->events()->count()>0)
                            @foreach($participant->events()->get() as $event)
                                <div class="event">
                                    <div class="event-name no-wrap" @if($event->url) @click="routeChange('{{$event->url}}')" @endif>
                                        {{$event->name}}
                                    </div>
                                    <div class="event-footer">
                                        <span class="badge badge-secondary">
                                            Team Id : {{$event->code}}-{{substr('000000'.$participant->team($event)->first()->id,-6)}}
                                        </span>
                                        @if($event->zonal===1)
                                            &nbsp;&nbsp;
                                            <span class="badge badge-light">
                                            Zone : {{$participant->zonal($event)}}
                                            </span>
                                        @endif
                                    </div>
                                    @if(session()->has('participant') && $event->tickets()->count()!==0 && $event->category==='Workshop' || $event->category==='WorkshopD')
                                        @if($participant->team($event)->get()[0]->ticket_id===null && ($event->category==='Workshop' || $event->category==='WorkshopD'))
                                            <div class="payment-button button pay-payment global-button" onclick="window.location.href='https://techfest.org/payment/direct/{{$participant->team($event)->first()->id}}'">
                                                PAY
                                            </div>
                                        @else
                                            <div class="payment-button button pay-payment global-button bg-success " @click="$root.routeChange('/Payment')">
                                                &nbsp;<i class="fa fa-check"></i>
                                            </div>
                                        @endif
                                    @endif
                                </div>
                            @endforeach
                        @else
                        @endif
                    </div>
                    {{--@else--}}
                    {{--<div class="events">--}}
                    {{--@if($participant->events()->count()>0)--}}
                    {{--@foreach($participant->events()->get() as $event)--}}
                    {{--<div class="event">--}}
                    {{--<div class="event-name no-wrap" @if($event->url) @click="routeChange('{{$event->url}}')" @endif>--}}
                    {{--{{$event->name}}--}}
                    {{--</div>--}}
                    {{--<div class="event-footer">--}}
                    {{--<span class="badge badge-secondary">--}}
                    {{--Team Id : {{$event->code}}-{{substr('000000'.$participant->team($event)->first()->id,-6)}}--}}
                    {{--</span>--}}
                    {{--@if($event->zonal===1)--}}
                    {{--&nbsp;&nbsp;--}}
                    {{--<span class="badge badge-light">--}}
                    {{--Zone : {{$participant->zonal($event)}}--}}
                    {{--</span>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--@if(session()->has('participant') && $participant->email==="vaibhawofficial@gmail.com" && $event->payment_link!==null)--}}
                    {{--<div class="payment-button button pay-payment global-button" @click="paymentLink='{{$event->payment_link}}'">--}}
                    {{--PAY--}}
                    {{--</div>--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--@endforeach--}}
                    {{--@else--}}
                    {{--@endif--}}
                    {{--</div>--}}
                    {{--@endif--}}
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
    @if(session()->has('participant') && session()->has('admin'))
        <div class="payment-modal d-flex justify-content-center w-100 h-100" v-if="paymentLink!==null">
            <div class="d-flex align-items-center">
                <div class="payment-portal">
                </div>
                <iframe :src="'https://www.thecollegefever.com/events/iframe/widget/'+paymentLink" frameborder="0" allowfullscreen width="320" height="510" overflow="hidden" seamless="seamless"></iframe>
            </div>
        </div>
    @endif
</div>
<script src="https://techfest.org/js/flipclock.js"></script>

<script>var giftofspeed = document.createElement('link');giftofspeed.rel = 'stylesheet';giftofspeed.href = '{{asset('asset/css/Get.css')}}';giftofspeed.type = 'text/css';var godefer = document.getElementsByTagName('link')[0];godefer.parentNode.insertBefore(giftofspeed, godefer);
    const _routes = {'loginPost':'{{route('loginPost')}}', 'registerUrlGet':'{{route('registerUrlGet',['url'=>Request::path()])}}', 'currentUrl':'{{Request::path()}}', 'templateUrlPost': '{{route('templateUrlPost')}}', 'competitionsPost': '{{route('api.event.competitionsPost')}}', 'ideatesPost': '{{route('api.event.ideatesPost')}}', 'eventIdGet': '{{route('event.getIdPost',':id')}}', 'homePng':'https://techfest.org/public/home.png'};const csrf = {'token':'{!! csrf_token() !!}','field':'{!! csrf_field() !!}'};const s3Link = 'https://techfest.org/2018/Get/img-temp';</script>
<script src="{{asset('js/iziToast.min.js')}}" defer async></script>
@if(session()->has('admin'))
    <script src="{{asset('asset/js/alpha.js?v=5.24')}}" defer async></script>{{--Competitions--}}
@else
    <script src="{{asset('asset/js/Get.js?v=5.52')}}" defer async></script>{{--Accommodation wala pain--}}
@endif
</body>
</html>

