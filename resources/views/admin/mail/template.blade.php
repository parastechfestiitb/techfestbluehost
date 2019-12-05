<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title or 'Developer | Techfest'}}</title>
    <link rel="shortcut icon" href="{{asset('images/icons/techfest.png')}}" type="image/png">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/icons/techfest.png')}}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script>
        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-M2RJ5L8');

        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '290926481441111');
        fbq('track', 'PageView');
    </script>
    @yield('header')
</head>
<body id="app">
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2RJ5L8" height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
</noscript>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=290926481441111&ev=PageView&noscript=1"/>
</noscript>
@yield('body')
<script type="text/javascript" src="{{asset('js/app.js')}}" ></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-116702322-1"></script>
@yield('script')

</body>
</html>