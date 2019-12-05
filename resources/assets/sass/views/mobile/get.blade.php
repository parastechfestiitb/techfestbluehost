{{--
    META TAGS ADD KARNE HAI
    ICON ADD KARNA HAI
    BOOTSTRAP KA SIZE CHOTA KARNA HAI
--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="mobile-web-app-capable" content="yes">

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


    <link rel="stylesheet" href="{{asset('mobile/css/Get.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
    <link rel="manifest" href="{{asset('mobile/manifest.json')}}">
    <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
</head>
<body>
<div id="app">
    <v-dashboard></v-dashboard>
    <v-search></v-search>
    <v-sideboard v-if="loginStatus==='Exists'"></v-sideboard>
    <router-view :loginStatus="loginStatus"></router-view>
</div>
<script>
    const _routes = {
        'loginPost':'{{route('loginPost')}}',
        'registerUrlGet':'{{route('registerUrlGet')}}',
        'currentUrl':'{{Request::path()}}',
        'templateUrlPost': '{{route('templateUrlPost')}}',
        'competitionsPost': '{{route('api.event.competitionsPost')}}',
        'ideatesPost': '{{route('api.event.ideatesPost')}}',
        'eventIdGet': '{{route('event.getIdPost',':id')}}',
        'homePng':'https://techfest.org/2018/home.png'
    };
    const csrf = {
        'token':'{!! csrf_token() !!}',
        'field':'{!! csrf_field() !!}'
    };
    const s3Link = 'https://techfest.org';
</script>
<script src="{{asset('js/iziToast.min.js')}}"></script>
<script src="{{asset('mobile/js/Get.js?v=1')}}"></script>
</body>
</html>
