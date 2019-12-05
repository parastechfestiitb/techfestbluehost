<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://techfest.org/css/app.css">
</head>
<body>
<table class="table">
    <tr>
        <td>Hostel</td>
        <td>Room</td>
        <td>Lock Code</td>
    </tr>
    @for($x=0;$x<1200;$x+=1)
        <tr>
            <td>{{$id}}</td>
            <td>{{$x}}</td>
            <td>{{substr(preg_replace('/\D/','',md5(($id*1000+$x).' ')),-3)}}</td>
        </tr>
    @endfor
</table>
</body>
</html>