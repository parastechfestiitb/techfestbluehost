<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>

</head>
<body>
<div>
    {{$user->name}}<br>
    {{$user->email}}
</div>




<span class="d-block d-lg-none"><img src="/2019/ca/ca_images_upload/google.svg" id="signinButton" style="max-height: 37px "> </span>

<form action="" method="post" id="h-form" class="">
    {{csrf_field()}}
    <input type="hidden" name ="code" id="name2" style="background-color: blue">
</form>

@if(empty($user->ift))
    <a href="https://techfest.org/reg-ift" class="w3-btn w3-green">Register for IFT</a>
@endif
@if(!empty($user->ift))
    <a href="#" class="w3-btn w3-green">Already register for IFT</a>
@endif



<form action="/reg-ift-createteam" method="post">
    {{ csrf_field() }}
    <input class="input--style-2" type="text" placeholder="Email" name="email2" value="">
    <input class="input--style-2" type="text" placeholder="Email" name="email3" value="">
    <input class="input--style-2" type="text" placeholder="Email" name="email4" value="">
    <div class="p-t-30">
        <button class="btn btn--radius btn--green" type="submit" name="reg-submit">Create a Team</button>
    </div>
</form>

<form action="/reg-ift-jointeam" method="post">
    {{ csrf_field() }}
    <input class="input--style-2" type="text" placeholder="Email" name="email" value="">

    <div class="p-t-30">
        <button class="btn btn--radius btn--green" type="submit" name="reg-submit">Join a Team</button>
    </div>
</form>


<form action="/reg-ift-leaveteam" method="post">
    {{ csrf_field() }}
<div class="p-t-30">
    <button class="btn btn--radius btn--green" type="submit" name="reg-submit">Leave current Team</button>
</div>
</form>





<a href="https://techfest.org/reg_logout" class="w3-btn w3-red">logout</a>



{{--<script src="ISME KOI SCRIPTS KA LINK"></script>--}}

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
    function loadScript( url, callback ){
        script = document.createElement("script");
        script.type = "text/javascript";
        if(script.readyState) {
            script.onreadystatechange = function() {
                if ( script.readyState === "loaded" || script.readyState === "complete" ) {
                    script.onreadystatechange = null;
                    callback();
                }
            };
        } else {
            script.onload = function() {
                callback();
            };
        }
        script.src = url;
    }
    function start() {
        gapi.load('auth2', function() {
            auth2 = gapi.auth2.init({
                client_id: '218886856483-4lnh6s9mvguid18098antfdltvosd7ln.apps.googleusercontent.com',
            });
        });

    }
    function authCheck(){
        console.log('called');
        auth2.grantOfflineAccess().then(response => {
            $('#name2').val(response.code);
            $("#h-form").submit();
        });

    }
    loadScript("https://apis.google.com/js/client:platform.js",function(){
        start();
        $('#signinButton, #googleLogin').click(function(){

            authCheck();
        });

    });
    document.getElementsByTagName( "head" )[0].appendChild( script );

    // $("#h-form").submit();
    // document.getElementById("h-form").submit();// Form submission

</script>
</body>
</html>