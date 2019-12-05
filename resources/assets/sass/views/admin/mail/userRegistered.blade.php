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
    Hello {{$participant->name}},
    Your Techfest ID is TF-{{substr('00000'.$participant->id,-6)}}
</body>
</html>