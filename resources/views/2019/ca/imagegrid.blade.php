<?php
use File;
use Illuminate\Support\Facades\Storage;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Images | CA | Admin |Techfest</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    <style>
        *{
            transition:all 0.3s;
        }
        .grid{
            margin:10px;
            position: relative;
        }
        img{
            z-index:0;
            width:100%;
            box-shadow: 0 0 10px -2px #000;
        }
        img:hover{
            transform: scale(0.9);
            box-shadow: 0 5px 20px black;
        }
        .flex-column{
            width:33%;
        }
        .icons{
            position:absolute;
            bottom:5px;
            left:0;
            right:0;
            z-index:1;
            cursor:pointer;
        }
        .close-icon,.pts{
            border-radius:50%;
            height:40px;
            width:40px;
            padding:10px;
            font-size:20px !important;
            margin:10px;
            line-height:20px;
            text-align: center;
            color:white;
            font-weight:bold;
        }
        .close-icon{
            background-color:darkorange;
        }
        .pts{
            background: #808080;
        }
        i{
            font-size:20px !important;
            color:white !important;
            cursor:pointer;
        }

        .icons>*:hover{
            box-shadow:0 0 10px black;
            transform: scale(1.2);
        }
        .pts-smart{
            background: #ff0e13;
        }
    </style>
</head>
<body>
<a href="https://techfest.org/penaltymail">CA uploads</a>
<a href="https://techfest.org/adminca">CA Events</a>
<a href="https://techfest.org/admins">CA Database</a>
<div id="app">
    <div class="d-flex justify-content-center container">
        <div class="row">
            @foreach($images as $i)
                <?php
                /** @var object $images */
//                $event = DB::table('ca_reg_events')->whereId($images->event_id)->first();

                ?>
            <div class="col-2">
                <div class="grid">
                    <img src="{{Storage::url($i->file)}}" alt="ca image upload">
                    <div class="icons d-flex justify-content-center">
{{--                        <div class="close-icon" onclick="points({{$i->points}})">--}}
{{--                            <i class="fa fa-close"></i>--}}
{{--                        </div>--}}
                        <div class="pts-10 pts pts-smart approve" onclick="deleteImage('{{Storage::url($i->file)}}')">
                            {{$i->points}}
                        </div>
{{--                        {{Storage::url($i->file)}}--}}
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
    <button class="btn btn-success w-100 mt-5 border-0 approve-all p-5">Delete All</button>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>