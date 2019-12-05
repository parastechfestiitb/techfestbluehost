<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        th,td{
            min-width: 250px;
            padding: 10px;
            box-sizing: border-box;
        }
        tr:nth-child(odd){
            box-sizing: border-box;
            background: rgba(0,0,0,0.1);
        }
        html,body{
            padding: 0;
            margin: 0;
            width: 100%;
            text-align: center;
            display: inline-block;
            box-sizing: border-box;
        }
        table{
            box-sizing: border-box;
            margin: 30px;
            max-width: 800px;
            overflow-x:auto;
            display:inline-block;
            margin:auto;
        }
    </style>
</head>
<body>

<table>
    @foreach($res as $k=>$r)
    <tr>
        <th>{{$k}}</th>
        <td>{{$r}}</td>
    </tr>
    @endforeach
</table>
</body>
</html>