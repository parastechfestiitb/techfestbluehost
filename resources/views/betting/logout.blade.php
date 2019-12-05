<!DOCTYPE html>
<html lang="en">
<head>
    <title>Logout</title>
</head>
<body>
Please wait while we log you out..
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '1952356715083062',
            cookie     : true,
            xfbml      : true,
            version    : 'v2.11'
        });
        FB.getLoginStatus(handleSessionResponse);
    };
    function handleSessionResponse(response){
        if (!response.session) {
            setTimeout(function(){
                window.location = '{{route('home')}}';
            },1000);
        }
        FB.logout(handleSessionResponse);
    }

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