<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="mobile-web-app-capable" content="yes">

    <title>{{$meta['title']}}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{{$meta['description']}}">
    <meta name="keywords" content="{{$meta['keywords']}}">
    <link rel="canonical" href="https://techfest.org">
    <link rel="author" href="https://plus.google.com/117706965098999491468" />
    <link rel="icon" href="https://techfest.org/2018/favicon.png">
    <meta name="theme-color" content="#000">
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
    <link rel="stylesheet" href="{{asset('mobile/css/Get.css')}}">
    <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
    <link rel="manifest" href="{{asset('mobile/manifest.json')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="manifest" href="/manifest.json" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
        var OneSignal = window.OneSignal || [];
        OneSignal.push(function() {
            OneSignal.init({
                appId: "a5f3d20c-79a4-40e2-b85b-4336d5f708a0",
                autoRegister: false,
                notifyButton: {
                    enable: true,
                },
            });
        });
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-81222017-1');if (screen.width > 699) {document.location = (window.location.href).replace('https://m.techfest.org','https://techfest.org');}</script>
    <style>*{transition: blur 300ms;}html,body,#app{overflow-x:hidden;font-family: 'Roboto', sans-serif;background: #000000;height: 100vh;width: 100vw;font-size:18px;}</style>
</head>
<body>
<div id="app">
    <v-dashboard></v-dashboard>
    <v-search></v-search>
    <v-sideboard v-if="loginStatus==='Exists'"></v-sideboard>
    <router-view :loginStatus="loginStatus"></router-view>
</div>
<script>const _routes = {'loginPost':'{{route('loginPost')}}', 'registerUrlGet':'{{route('registerUrlGet')}}', 'currentUrl':'{{Request::path()}}', 'templateUrlPost': '{{route('templateUrlPost')}}', 'competitionsPost': '{{route('api.event.competitionsPost')}}', 'ideatesPost': '{{route('api.event.ideatesPost')}}', 'eventIdGet': '{{route('event.getIdPost',':id')}}', 'homePng':'https://techfest.org/2018/home.png'};const csrf = {'token':'{!! csrf_token() !!}','field':'{!! csrf_field() !!}'};const s3Link = 'https://techfest.org';</script>
<script src="{{asset('js/iziToast.min.js')}}"></script>
@if(session()->has('admin'))
<script src="{{asset('mobile/js/alpha.js')}}?v=5.24"></script>
@else
<script src="{{asset('mobile/js/Get.js')}}?v=5.50"></script>
@endif
<script src="https://apis.google.com/js/platform.js?onload=start" async defer></script>
<script>function start() {gapi.load('auth2',function(){window.auth2 = gapi.auth2.init({client_id: '412974755773-i5amaa5ioscg47775o45tfkk835l1n88.apps.googleusercontent.com'});});} var authCheck = function(){window.auth2.grantOfflineAccess().then(response => {axios.post(_routes['loginPost'],{code: response.code,_token:csrf['token'],url: _routes['currentUrl']}).then((response)=>{if(response.data === 'new' || response.data === "empty"){window.location.href  = _routes['registerUrlGet'];}else if(response.data === 'exist') window.location.reload();else {console.log(response.data);}});});};$(document).on('click','#signinButton', function() {authCheck();});
</script>
</body>
</html>
