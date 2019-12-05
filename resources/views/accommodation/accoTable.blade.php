<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acco Table</title>
    <style>
        .table{
            width: 100%;
        }
        .table td,.table th{
            padding:2px;
            text-align: left;
        }
    </style>
</head>
<body>
<table class="table">
    <tr>
    @foreach($list[0] as $k=>$l)
        <th>{{$k}}</th>
    @endforeach
    </tr>
    @foreach($list as $l)
        <tr>
            @foreach($l as $m)
                <td>{{$m}}</td>
            @endforeach
        </tr>
    @endforeach
</table>
</body>
</html>