<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Techfest Certificate Verification Portal</title>
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
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <link rel="stylesheet" href="https://techfest.org/css/app.css">
    <style>*{box-sizing:border-box;cursor: url(https://techfest.org/2018/cursor.cur), auto;font-family: 'Roboto', sans-serif;font-weight: 300;transition: filter 500ms;}  html, body, #app{width: 100%;height: 100%;background: #000 url("https://techfest.org/2018/countdown.jpg");}  .blur{filter: blur(15px);pointer-events: none;}  img {-moz-user-select: none;-webkit-user-select: none;-ms-user-select: none;user-select: none;-webkit-user-drag: none;user-drag: none;}  a{color: white !important;;text-decoration: underline !important;}</style>
    <style></style>
</head>
<body class="h-100 w-100">
<div class="d-flex align-items-center text-white w-100 h-100" style="font-size: 2em;">
    <div style="padding: 3em;background: rgba(255,255,255,0.1);width: 100%;">
        This certificate was given to <span class="text-warning">{{$participant->name}}</span> for <br><span class="text-warning">{{$certificate->message}}</span>.
    </div>
</div>
</body>
</html>