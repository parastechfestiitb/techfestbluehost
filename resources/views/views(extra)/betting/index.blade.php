<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Robowars | Techfest 2017</title>
    <link rel="stylesheet" href="/public/css/m.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body{
            background: whitesmoke;
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
        @if($userBet == NULL)
            .botCard.selected .content{
        @else
            .botCard[data="{{$userBet->terms}}"]{
        @endif
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
            display: block;
        }
    </style>
</head>
<body>
<ul id="slide-out" class="side-nav">
    <li><div class="user-view" style="box-shadow:0 2px 10px rgba(12,29,65,0.72);border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;">
            <div class="background">
                <img id="background-image" src="{{asset('/public/img/zion.jpg')}}">
            </div>
            <a href="#"><img class="circle" id="profilePic" alt="No Profile Picture"></a>
            <a href="#"><span class="white-text name" id="profileName">Name Not Loaded Yet</span></a>
            <a href="#"><span class="white-text email">Your Score : <span class="right">{{$data['user']->amount}}</span> </span></a>

        </div></li>
    <li><a href="{{route('bettingFAQ')}}">Rules and FAQ</a></li>
    <li><div class="divider"></div></li>
    <li><a style="font-weight: 700;">Top 5</a></li>
    @foreach($data['top10'] as $user)
        <li><a class="waves-effect" href="#">{{$user->name }}<span class="right">{{$user->amount}}</span></a></li>
    @endforeach
    <li><div class="divider"></div></li>
    <li><a href="{{route('bettingLogout')}}">Log Out</a></li>
    <li><div class="divider"></div></li>
    <li><a style="text-space: 1px;color:rgba(0,0,0,0.5)">&copy;{{date('Y')}} Techfest</a></li>
</ul>
<nav class="white z-depth-4">
    <div class="nav-wrapper ">
        <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="material-icons">menu</i></a>
        <a href="#" class="brand-logo center black-text">Robowars</a>
    </div>
</nav>
<main class="container">
    <h4>SELECT BOT</h4>
    <div class="betting">
        <div class="row">
            @if($data['count'] === 3)
                <div class="botCard buttonBot selected" id="b1" data="0" style="background-image:url('{{$data['bot1']->url or "http://techfest.org/public/img/bot.gif"}}');">
                    <div class="content">
                        <h4>{{$data['bot1']->name or ""}}</h4>
                        <table>
                            <tr>
                                <th>
                                    Weapon
                                </th>
                                <td>:</td>
                                <td>
                                    {{$data['bot1']->description or ""}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Odds
                                </th>
                                <td>:</td>
                                <td>
                                    {{$data['bot1']->ods or ""}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="botCard buttonBot" id="b1" data="1" style="background-image:url('{{$data['bot2']->url or "http://techfest.org/public/img/bot.gif"}}');">
                    <div class="content">
                        <h4>{{$data['bot2']->name or ""}}</h4>
                        <table>
                            <tr>
                                <th>
                                    Weapon
                                </th>
                                <td>:</td>
                                <td>
                                    {{$data['bot2']->description or ""}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Odds
                                </th>
                                <td>:</td>
                                <td>
                                    {{$data['bot2']->ods or ""}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="botCard buttonBot" id="b1" data="2" style="background-image:url('{{$data['bot3']->url or "http://techfest.org/public/img/bot.gif"}}');">
                    <div class="content">
                        <h4>{{$data['bot3']->name or ""}}</h4>
                        <table>
                            <tr>
                                <th>
                                    Weapon
                                </th>
                                <td>:</td>
                                <td>
                                    {{$data['bot3']->description or ""}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Odds
                                </th>
                                <td>:</td>
                                <td>
                                    {{$data['bot3']->ods or ""}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            @else
                <div class="botCard buttonBot selected" id="b1" data="0" style="background-image:url('{{$data['bot1']->url or "http://techfest.org/public/img/bot.gif"}}');">
                    <div class="content">
                        <h4>{{$data['bot1']->name or ""}}</h4>
                        <table>
                            <tr>
                                <th>
                                    Weapon
                                </th>
                                <td>:</td>
                                <td>
                                    {{$data['bot1']->description or ""}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Odds
                                </th>
                                <td>:</td>
                                <td>
                                    {{$data['bot1']->ods or ""}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="botCard buttonBot" id="b1" data="1" style="background-image:url('{{$data['bot2']->url or "http://techfest.org/public/img/bot.gif"}}');">
                    <div class="content">
                        <h4>{{$data['bot2']->name or ""}}</h4>
                        <table>
                            <tr>
                                <th>
                                    Weapon
                                </th>
                                <td>:</td>
                                <td>
                                    {{$data['bot2']->description or ""}}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    Odds
                                </th>
                                <td>:</td>
                                <td>
                                    {{$data['bot2']->ods or ""}}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
    <br>
</main>
<div class="winners container white">
    <form action="{{route('winning')}}" method="POST" id="winnersForm">
        {{csrf_field()}}
        @if($data['isBettingGoing'])
            <input type="hidden" value="0" name="terms" id="terms">
            <p class="range-field">
                <label for="test5">Slide to select amount</label>
                <input type="range" min="0" value="0" max="{{$data['user']->amount}}" placeholder="Amount You Want To Bet" required name="amount" id="winner" />
            </p>
            <input type="submit" class="submit btn right">
        @else
            <span class="totalBet">Time to bet is over. Wait for another round</span>
        @endif
        @if($data['totalBet']!==0)
            <span class="totalBet">You have bet a total of {{$data['totalBet']}}</span>
        @endif
        <span class="error totalBet">{{$error or ""}}</span>
    </form>
</div>
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
    $('.buttonBot').click(function(){
        e = $(this)[0];
        $('.buttonBot').css('background-color','inherit');
        $('#terms').val($(e).attr('data'));
        $('.botCard').removeClass('selected');
        $(e).addClass('selected');
    });
    $('#winnersForm').click(function(){
        $.validator.addMethod("amount",function(param,element){
            return this.optional(element) || param<={{$data['user']->amount}};
        },jQuery.validator.format("The amount entered is more than the amount you have. Enter value less than {{$data['user']->amount}}"));
        let validator = $("#winnersForm").validate({
            rules:{
                winner:{
                    amount:true
                }
            },
            errorElement:"span"
        });
    });
    $(document).ready(function (){
        $(".button-collapse").sideNav();
    });
</script>
</body>
</html>