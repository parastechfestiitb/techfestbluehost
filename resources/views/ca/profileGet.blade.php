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
    <link rel="stylesheet" href="{{asset('asset/css/jquery.fullpage.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/ca/caNoMiddleware.css')}}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        html,body,#app{
            width:100% !important;
            height:100% !important;
        }
    </style>
</head>
<body>
<div id="fb-root"></div>
<div id="app" class="app">
    <profile></profile>
</div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=1867283513520450&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId   : '806802646185279',
            oauth   : true,
            status  : true,
            cookie  : true,
            xfbml   : true,
            version : 'v2.8'
        });

    };

    function fb_login(){
        FB.login(function(response) {

            if (response.authResponse) {
                access_token = response.authResponse.accessToken;
                user_id = response.authResponse.userID;
                $('#fbid').val(user_id);
                $('#fbid').trigger2('change');
            } else {
                console.log('User cancelled login or did not fully authorize.');
            }
        });
    }
    (function() {
        let e = document.createElement('script');
        e.src = document.location.protocol + '//connect.facebook.net/en_US/all.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
    }());
</script>
<script>
    const _errors = {!! $errors->any()?json_encode($errors->all()):'false' !!};
    const _routes = {
        'profileSubmit': '{{route('ca.profilePost')}}',
        'logout': '{{route('ca.logoutGet')}}'
    };
    const _csrf = '{!! csrf_field() !!}';
    const _user = {!! json_encode($user) !!};
    const _csrf_token = '{!! csrf_token() !!}';
    const _vals = {
        pin: '{{old('pin')}}',
        address: '{{old('address')}}',
        college: '{{old('college')}}',
        phone: '{{old('phone')}}',
        dob: '{{old('dob')}}',
        sem: '{{old('semester')}}',
        gender: '{{old('gender')}}',
        facebookid: '{{old('facebookid')}}',
    };
</script>
<script src="{{asset('js/ca/caProfile.js')}}"></script>
<script src="{{asset('asset/js/jquery.fullpage.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

    $(document).ready(function() {
        (function($) {

            $.fn.trigger2 = function(eventName) {
                return this.each(function() {
                    var el = $(this).get(0);
                    triggerNativeEvent(el, eventName);
                });
            };

            function triggerNativeEvent(el, eventName){
                if (el.fireEvent) { // < IE9
                    (el.fireEvent('on' + eventName));
                } else {
                    var evt = document.createEvent('Events');
                    evt.initEvent(eventName, true, false);
                    el.dispatchEvent(evt);
                }
            }

        }(jQuery));
        $('#dob').change(function(){
            $('#dob').trigger2('change');
        });
        $('#fullpage').fullpage({
            controlArrows: false,
            loopHorizontal: false,
            anchors: ['profile', 'terms-and-condition', 'subscribe'],
            responsiveWidth: 992
        });
        $("#dob").datepicker({
            dateFormat: 'dd-M-yy',
            changeMonth: true,
            changeYear:true,
            autoClose: true,
            yearRange: '1990:2005',
            defaultDate: '01-Jan-1996'
        });
        function setAllowScrolling(value, directions){
            if(typeof directions !== 'undefined'){
                directions = directions.replace(/ /g,'').split(',');
                $.each(directions, function (index, direction){
                    setIsScrollAllowed(value, direction, 'm');
                });
            }
            else if(value){
                setMouseWheelScrolling(true);
                addTouchHandler();
            }else{
                setMouseWheelScrolling(false);
                removeTouchHandler();
            }
        }
        $.fn.fullpage.setMouseWheelScrolling(false);
        $.fn.fullpage.setAllowScrolling(false);
        $('form').on('focus', 'input[type=number]', function (e) {
            $(this).on('mousewheel.disableScroll', function (e) {
                e.preventDefault()
            })
        });
        $('form').on('blur', 'input[type=number]', function (e) {
            $(this).off('mousewheel.disableScroll')
        });
    });
</script>
</body>
</html>