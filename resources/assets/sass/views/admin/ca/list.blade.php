<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CR List</title>
    <style>
        body {
            font-family: "Open Sans", sans-serif;
            line-height: 1.25;
        }
        table {
            border: 1px solid #ccc;
            border-collapse: collapse;
            table-layout: fixed;
            width: 100%;
            cursor: pointer !important;
        }
        table caption {
            font-size: 1.5em;
            margin: .5em 0 .75em;
        }
        table tr {
            border: 1px solid #ddd;
            padding: .35em;
        }
        table tr:nth-child(even) {
            background: #f8f8f8;
        }
        table th,
        table td {
            padding: .625em;
            text-align: left;
        }
        table th {
            background: #999;
            color: #fff;
            font-size: .8em;
            letter-spacing: .1em;
            text-transform: uppercase;
        }
        table td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            font-size:.75em;
        }
        .min {
            width: 5%;
            white-space: nowrap;
        }
        .phone{
            width:5%;
        }
    </style>
</head>

<body>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th class="phone">Phone</th>
                <th class="min">Points</th>
                <th>Address</th>
                <th>College</th>
                <th>DOB</th>
                <th>Pin</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cas as $id=>$ca)
                <tr>
                    <td title="{{$users[$id]->id}}">{{$users[$id]->id}}</td>
                    <td title="{{$users[$id]->name}}">{{$users[$id]->name}}</td>
                    <td title="{{$users[$id]->email}}">{{$users[$id]->email}}</td>
                    <td class="phone" title="{{$ca->phone}}">{{$ca->phone}}</td>
                    <td class="min" title="{{$ca->points}}">{{$ca->points}}</td>
                    <td title="{{$ca->address}}">{{$ca->address}}</td>
                    <td title="{{$ca->college}}">{{$ca->college}}</td>
                    <td title="{{$ca->dob}}">{{$ca->dob}}</td>
                    <td title="{{$ca->pin}}">{{$ca->pin}}</td>
                    <td title="{{$ca->updated_at}}">{{$ca->updated_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>