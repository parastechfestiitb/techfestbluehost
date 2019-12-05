<!DOCTYPE html>
<html>
    <head>
        <title>Registration Successful | Techfest, IIT Bombay</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="icon" href="https://techfest.org/img/2018/icon.ico">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 56px;
                font-weight: 300;
                margin-bottom: 60px;

            }

             .title__one {
                font-size: 32px;
                font-weight: 300;
                margin-top: 40px;
            }
            .tt{
                text-decoration: none;
                color:black;
            }
            .tt:hover{
                text-decoration: none;
            }

            .btn{
                color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;

    display: inline-block;
    padding: 8px 16px;
    margin-bottom: 0;
    font-size: 22px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    border-radius: 4px;

            }
        </style>
            <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-81222017-1', 'auto');
  ga('send', 'pageview');
</script>


    </head>
    <body>
        
        <div class="container">
            <div class="content">
                <div class="title">
                Registration Successful
                <p style="font-size: 40%;"><b>Your Event/Team ID : {{$team_id_mail}}</b></p>
                
                <p style="font-size: 30%;">Only the team leader(if more than one students in team) will recieve a mail on your registered Email ID :<b> {{$email}} </b></p>
                
                    </div>
                <a href="{{$payment_link}}">
                <button class="btn">Proceed to Accommodation</button>
                </a>
                <div class="title__one">
                <a class="tt" href="https://techfest.org">Back Home</a>
                </div>

            </div>
        </div>
    </body>
</html>
