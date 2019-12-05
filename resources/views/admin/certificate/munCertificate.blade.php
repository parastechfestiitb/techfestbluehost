<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TWMUN Certificate Portal</title>
    <link rel="stylesheet" href="/css/app.css">
    <style>
        html,body{
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="container d-flex flex-column justify-content-center h-100">
    <form action="/mun-certificate" method="post" class="w-50 m-auto">@csrf
        <div class="display-4 text-black-50">Certificate Portal</div>
        <input type="text" class="form-control mb-2" required name="name" placeholder="Your Name">
        <select name="agenda" required class="form-control mb-2">
            <option disabled selected>Select Commmittee</option>
            @foreach($ag as $a)
            <option value="{{$a}}">{{$a}}</option>
            @endforeach
        </select>
        <select name="country" required class="form-control mb-2">
            <option selected disabled>Assigned Country</option>@foreach($country as $c)<option value="{{$c}}">{{$c}}</option>@endforeach
        </select>
        <button class="btn btn-primary w-100">Submit</button>
    </form>
</div>
</body>
</html>