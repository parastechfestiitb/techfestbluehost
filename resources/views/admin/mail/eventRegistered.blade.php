@if($event->category!=='Workshop')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration successful for {{$event->name}} | Techfest 2018-19 </title>
</head>
<body>
Hello {{$participant->name}}, <br><br>
Thank you for registering in <b>{{$event->name}}</b>@if($event->zonal===1 && isset($k->zonal))
    at {{$event_participant->zonal==="Balnglore"?"Bengaluru":$k->zonal}} Zonals
@endif. <br><br>
Your registration Team ID is <b> {{$event->code}}-{{substr('000000'.$teamId,-6)}}</b>.
Kindly take a note of your Team ID since it will be used for all further occasions.</br>
<br><br>We hope to see you there at Techfest this year, on <b>14th-16th of December 2018</b>.
<br><br>
For any further queries feel free to reach us at {{$event->contact}}
</body>
</html>
@else
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registration successful for {{$event->name}} | Techfest 2018-19 </title>
    </head>

    <body>
    Hello {{$participant->name}}, <br><br> Thank you for registering in <b>{{$event->name}}</b>. <br><br> Your registration Team
    ID is <b> {{$event->code}}-{{substr('000000'.$teamId,-6)}}</b>. Kindly take a note of your Team ID since it will be used for all further occasions.</br>
    <br><br>For proceeding with payment <a href="https://techfest.org/payment">click here</a>
    <br><br>We hope to see you there at Techfest this year, on <b>14th-16th of December 2018</b>.
    <br><br> For any further queries feel free to reach us at {{$event->contact}}
    </body>

    </html>
@endif