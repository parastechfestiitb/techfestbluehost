<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate Generated</title>
</head>
<body>
Hi {!! $participant->name !!}!,<br>
Thank you for participating in Techfest 2018-19. A certificate has successfully been generated for you.<br>
You can download it by clicking <a href="https://techfest.org/certificate/gen/{{$id}}/{{$participant->id}}/{{md5($id.'/'.$participant->id.'asd324q23jw4khluh')}}">here</a>. <br>
<br>
You will be asked to change your name once, <strong>you won't get a chance to change your name again</strong>.
</body>
</html>