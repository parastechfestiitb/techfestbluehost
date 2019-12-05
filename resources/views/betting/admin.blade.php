<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <style>
        form{
            width:400px;
            height:auto;
            padding:10px;
            margin:10px auto;
        }
        fieldset,input{
            display: block;
            margin-bottom:10px;
            width:100%;
            padding:1em;
        }
        .inline-checkbox{
            display: inline-block;
            padding:1rem;
        }
        .btn-medium{
            padding:1em;
            width:90px;
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="/public/css/m.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body style="overflow-x: hidden;">
<form action="{{route('adminSubmit')}}" method="post">
    {{csrf_field()}}
    <fieldset>
        <legend>Select Bot</legend>
        <div class="input-field">
            <input id="passwordForEnable2" type="password" name="password" class="validate">
            <label for="passwordForEnable2">Password</label>
        </div>
        @foreach($bots as $bot)
            <p class="inline-checkbox">
                <input type="checkbox" class="filled-in inline" id="{{$bot->id}}" name="bot{{$bot->id}}" />
                <label for="{{$bot->id}}">{{$bot->name}}</label>
            </p>
        @endforeach
        <input type="submit" value="Submit" class="waves-effect waves-light btn-large right">
    </fieldset>
</form>
<form action="{{route('startBetting')}}" method="post">
    <fieldset>
        <legend>Start Betting</legend>
        {{csrf_field()}}
        <div class="">
            <div class="input-field">
                <input id="passwordForEnable3" type="password" name="password" class="validate">
                <label for="passwordForEnable3">Password</label>
            </div>
            <div class="row">
                <div class="col s4">
                    <input class="waves-effect waves-light btn-medium green white-text" value="Start" type="submit" name="toggle">
                </div>
                <div class="col s4">
                </div>
                <div class="col s4">
                    <input class="waves-effect waves-light btn-medium right red white-text" value="Stop" type="submit" name="toggle">
                </div>
            </div>
        </div>
    </fieldset>
</form>
<form action="{{route('updateWinners')}}" method="post">
    {{csrf_field()}}
    <fieldset>
        <legend>Update Winners</legend>
        <div class="input-field">
            <input type="number" name="terms" id="updateInformation">
            <label for="updateInformation">Select term of robot</label>
        </div>
        <div class="input-field">
            <input id="passwordForEnable" type="password" name="password" class="validate">
            <label for="passwordForEnable">Password</label>
        </div>
        <input type="submit">
    </fieldset>
</form>

<script src="/public/js/j.js"></script>
<script src="/public/js/m.js"></script>
<script src="/public/js/v.js"></script>
</body>
</html>