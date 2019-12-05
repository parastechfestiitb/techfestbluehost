<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Robowars | 2017</title>
    <script src="/js/app.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <style>
        html,body{
            height:100%;
            width:100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            margin:0;
            width:0;
        }
        body{
            background-size:cover;
            background-color:black;
            background-repeat:no-repeat;
        }
        .facebook-signin{
            position: absolute;
            bottom:1rem;
            right:1rem;
        }
    </style>
</head>
<body>
{{csrf_field()}}
<div class="facebook-signin">
    <div class="fb-login-button" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="true" data-use-continue-as="false" data-onlogin="checkLoginState()" scope="public_profile,email"></div>
</div>

<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1952356715083062',
            cookie     : true,
            xfbml      : true,
            version    : 'v2.11'
        });

        FB.AppEvents.logPageView();

        FB.getLoginStatus(function(response) {
            login(response);
        });

    };
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            if(response.status === "connected") return login(response);
            else checkLoginState();
        });
    }

    let login = (resp) =>{
        if(resp.status==="not_authorized") {
            return false;
        }
        if (resp.status==="connected"){
            $.ajax({
                url:'{{route('logUser')}}',
                type:'POST',
                dataType: 'JSON',
                data:{
                    accessToken:resp.authResponse.accessToken,
                    _token:'{{csrf_token()}}'
                },
                success:function(e){
                    location.href = '{{URL::route('home')}}';
                },
                error:function(e,p){
                    console.log(e);
                },
                beforeSend: function(request) {
                    return request.setRequestHeader('X-CSRF-Token', '{{csrf_token()}}');
                }
            });
        }
    };

    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>