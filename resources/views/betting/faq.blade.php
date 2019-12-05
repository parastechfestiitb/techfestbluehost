<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Template For Betting</title>
    <link rel="stylesheet" href="/public/css/m.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body{
            background: url('http://techfest.org/public/img/r.png') ;
            background-repeat:no-repeat;
            width:100%;
            height:100%;
            background-position:center 100px;
            -webkit-background-size: cover;
            background-size: cover;
        }
        nav{
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            position: fixed;
            z-index: 1;
        }
        main{
            padding-top:5rem;
            padding-bottom:5rem;
            z-index:-1;
        }
        .winners{
            width:100%;
            position: fixed;
            bottom:0;
            box-shadow:0 0 20px black;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding-left:1rem;
            padding-right:1rem;
            padding-bottom:0.5rem;
        }
        .botCard{
            min-height:calc(100px + 10em);
            background-color:ghostwhite;
            box-shadow:0 0 10px black;
            border-radius:10px;
            position:relative;
            overflow:hidden;
            padding:2px;
            margin-bottom:1rem;
            margin-left:1rem;
            margin-right:1rem;
            background-size:cover;
        }
        .botCard .content{
            background: radial-gradient(rgba(0,0,0,0.6),rgba(0,0,64,0.6));
            min-height:calc(100px + 10em);
            width:100%;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            padding:5px;
            text-align:justify;
            overflow: auto;
            color:white;
            transition:background 0.5s,border 0.5s;
        }
        .botCard .content h4{
            text-align:center;
        }
        .botCard.selected .content{
            background: radial-gradient(rgba(0,0,0,0.8),rgba(0,0,64,0.8));
            border:5px solid gold;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        main>h4{
            text-align: center;
        }
        .totalBet{
            margin-top:5px;
            color:red;
        }
    </style>
</head>
<body>
<ul id="slide-out" class="side-nav">
    <li><div class="user-view">
            <div class="background">
                <img id="background-image" src="{{asset('/public/img/zion.jpg')}}">
            </div>
            <a href="#"><img class="circle" id="profilePic" alt="No Profile Picture"></a>
            <a href="#"><span class="white-text name" id="profileName">Name Not Loaded Yet</span></a>
            <a href="#"><span class="white-text email">Your Score : <span class="right">{{$data['user']->amount}}</span> </span></a>

        </div></li>
    <li><a href="#!">FAQ</a></li>
    <li><a href="#!">Rules</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Top 5</a></li>
    @foreach($data['top10'] as $user)
        <li><a class="waves-effect" href="#!">{{$user->name }}<span class="right">{{$user->amount}}</span></a></li>
    @endforeach
    <li><div class="divider"></div></li>
    <li class="right" style="padding-right:1em">&copy;{{date('Y')}} Techfest</li>
</ul>
<nav class="white z-depth-4">
    <div class="nav-wrapper ">
        <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="material-icons">menu</i></a>
        <a href="#" class="brand-logo center black-text">Robowars</a>
    </div>
</nav>
<main class="container">
</main>
<script src="/public/js/j.js"></script>
<script src="/public/js/m.js"></script>
<script src="/public/js/v.js"></script>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1952356715083062',
            cookie     : true,
            xfbml      : true,
            version    : 'v2.11'
        });

        FB.AppEvents.logPageView();
        checkLoginState();

        FB.getLoginStatus(function(response) {
            login(response);
        });

    };
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            login(response);
        });
    }
    let login = (resp) =>{
        if (resp.status==="connected"){
            var id = resp.authResponse.userID;
            var at = resp.authResponse.accessToken;
            $('#profilePic').attr('src',`https://graph.facebook.com/v2.7/${id}/picture?type=large`);
            $.ajax({
                url:`https://graph.facebook.com/v2.7/${id}/?access_token=${at}`,
                data:'JSON',
                success:function(e){
                    $('#profileName').text(e.name)
                }
            })
        }
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    $(document).ready(function (){
        $(".button-collapse").sideNav();
    });
</script>
</body>
</html>