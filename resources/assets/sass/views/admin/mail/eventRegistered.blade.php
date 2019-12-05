<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration successful for {{$event->name}} | Techfest 2018-19 </title>
</head>
<body>
Hello {{$participant->name}}, <br>
Thank you for registering in {{$event->name}} and your Team ID is {{$event->code}}-{{substr('000000'.$teamId,-6)}}.Kindly keep this mail as proof for your registration and remember your Team ID</br>

For any query related to {{$event->name}} contact mail us at
</body>
</html>