<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Registered</title>
</head>
<body>
Hello {{$participant->name}},<br>
Greetings from Techfest, IIT Bombay <br>
<br>
Congratulations for registering for Techfest, IIT Bombay 2018-19. <br>
Kindly keep a note of the following: <br>
1.Techfest ID: TF-{{substr('00000'.$participant->id,-6)}} <br>
2.Techfest dates: 14th-16th December 2018 <br>
<br>
Please remember your Techfest Id as it will be used for all further occasions.
<br>
For any further queries feel free to contact us on <a href="mailto:registration@techfest.org">registration@techfest.org</a>
</body>
</html>