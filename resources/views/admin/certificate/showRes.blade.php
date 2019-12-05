<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificate</title>
    <link rel="stylesheet" href="https://techfest.org/css/app.css">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-2">
            <table class="table">
                <thead>
                <tr><th>Techfest IDs ({{count($tids)}})</th></tr>
                </thead>
                @foreach($tids as $tid)
                    <tr><td>TF-{{substr('000000'.$tid,-6)}}</td></tr>
                @endforeach
            </table>
        </div>
        <div class="col-md-8">
            <img src="{{$image->encode('data-url')}}" alt="" class="img-fluid img-responsive">
            <br><br><br>
            <form action="/admin/certificate-last/send" method="POST">
                @csrf
                <input type="hidden" name="ids" value="{!! json_encode($tids) !!}">
                <input type="hidden" name="cid" value="{!! $r->certificate !!}">
                <input type="submit" value="Submit" class="btn input w-100 bg-primary text-white">
            </form>
        </div>
    </div>
</div>
</body>
</html>