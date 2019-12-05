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
<form action="" class="bg-gray p-5">
    <div class="container">
        <div class="display-4">Online Attendance</div>
        <select name="event" required class="input w-100 mb-2 form-control">
            <option disabled selected>Select the event (carefull!)</option>
            @foreach($events as $event)
                <option value="{{$event->id}}">{{$event->name}}</option>
            @endforeach
        </select>
        <select name="certificate" id="" required class="form-control mb-2">
            <option disabled selected>Select Certificate</option>
            @foreach($certificates as $certificate)
                <option value="{{$certificate->id}}">{{$certificate->name}}</option>
            @endforeach
        </select>
        <select name="slots" id="" required class="form-control mb-2">
            <option disabled selected>Select min no. of slots</option>
            @for($x=1;$x<13;$x+=1)
                <option value="{{$x}}">Minimum {{$x}} slots</option>
            @endfor
        </select>
        <input type="submit" value="Submit" class="btn btn-white w-100 ">
    </div>
</form>
<form method="POST" action="/admin/certificate-last/teamids" class="mt-4 p-5 bg-white">
    <div class="container">
        <div class="display-4">Team Id wise Certificate</div>
        @csrf
        <textarea name="teamids" id="" cols="30" rows="10" class="form-control"></textarea>

        <select name="certificate" id="" required class="form-control mt-2 mb-2">
            <option disabled selected>Select Certificate</option>
            @foreach($certificates as $certificate)
                <option value="{{$certificate->id}}">{{$certificate->name}}</option>
            @endforeach
        </select>
        <button class="btn btn-dark w-100">Submit</button>
    </div>
</form>
<form action="/admin/certificate-last/create" method="POST" class="bg-gray p-5">
    <div class="container">
        @csrf
        <div class="display-4">Create Certificate</div>
        <input type="text" class="form-control" required placeholder="Certificate Name" name="name">
        <input type="text" class="form-control mt-2" placeholder="Message" name="message">
        <select name="event" required class="input w-100 mt-2 form-control">
            <option disabled selected>Select the event (carefull!)</option>
            @foreach($events as $event)
                <option value="{{$event->id}}">{{$event->name}}</option>
            @endforeach
        </select>
        <select name="image" required class="form-control mt-2 mb-2">
            <option disabled selected class="disabled">Select the image file you want to use</option>
            @foreach($imageFiles as $image)
                <option value="{{end(explode('/',$image))}}">{{end(explode('/',$image))}}</option>
            @endforeach
        </select>
        <button class="btn btn-danger w-100">Generate Certificate</button>
    </div>
</form>

</body>
</html>