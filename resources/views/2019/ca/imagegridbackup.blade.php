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
<div id="app">
    <div class="d-flex justify-content-center container">
        <div class="d-flex flex-column">
            @for($i=0;$i<$count/3;$i++)
                <?php
                /** @var object $images */
                $event = DB::table('ca_reg_events')->whereId($images[$i]->event_id)->first();
                if(!$event) {
                    $event = new stdClass();
                    $event->title='Manual Upload';
                    $event->points=0;
                }
                ?>
                <div class="grid" id="image-{{$images[$i]->id}}" title="{{$event->task}} | {{$images[$i]->user_id}}">
                    <img src="{{Storage::url($images[$i]->file)}}" alt="ca image upload">
                    <div class="icons d-flex justify-content-center">
                        <div class="close-icon" onclick="points({{$images[$i]->id}},0)">
                            <i class="fa fa-close"></i>
                        </div>
                        <div class="pts-2 pts" onclick="points({{$images[$i]->id}},2)">
                            2
                        </div>
                        <div class="pts-3 pts" onclick="points({{$images[$i]->id}},3)">
                            3
                        </div>
                        <div class="pts-5 pts" onclick="points({{$images[$i]->id}},5)">
                            5
                        </div>
                        <div class="pts-10 pts" onclick="points({{$images[$i]->id}},10)">
                            10
                        </div>
                        <div class="pts-10 pts pts-smart approve" onclick="points({{$images[$i]->id}},{{$event->points or 0}})">
                            {{$event->points or 0}}
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="d-flex flex-column">
            @for($i=ceil($count/3);$i<$count*2/3;$i++)
                <?php
                /** @var object $images */
                $event = DB::table('ca_events')->whereId($images[$i]->event_id)->first();
                if(!$event) {
                    $event = new stdClass();
                    $event->title='Manual Upload';
                    $event->points=0;
                }
                ?>
                <div class="grid" id="image-{{$images[$i]->id}}" title="{{$event->title}}| {{$images[$i]->user_id}}">
                    <img src="{{Storage::url($images[$i]->file)}}" alt="img">
                    <div class="icons d-flex justify-content-center">
                        <div class="close-icon" onclick="points({{$images[$i]->id}},0)">
                            <i class="fa fa-close"></i>
                        </div>
                        <div class="pts-2 pts" onclick="points({{$images[$i]->id}},2)">
                            2
                        </div>
                        <div class="pts-3 pts" onclick="points({{$images[$i]->id}},3)">
                            3
                        </div>
                        <div class="pts-5 pts" onclick="points({{$images[$i]->id}},5)">
                            5
                        </div>
                        <div class="pts-10 pts" onclick="points({{$images[$i]->id}},10)">
                            10
                        </div>
                        <div class="pts-10 pts pts-smart approve" onclick="points({{$images[$i]->id}},{{$event->points or 0}})">
                            {{$event->points or 0}}
                        </div>
                    </div>
                </div>
            @endfor
        </div>
        <div class="d-flex flex-column">
            @for($i=ceil($count*2/3);$i<$count;$i++)
                <?php
                /** @var object $images */
                $event = DB::table('ca_events')->whereId($images[$i]->event_id)->first();
                if(!$event) {
                    $event = new stdClass();
                    $event->title='Manual Upload';
                    $event->points=0;
                }
                ?>
                <div class="grid" id="image-{{$images[$i]->id}}" title="{{$event->title}}| {{$images[$i]->user_id}}">
                    <img src="{{Storage::url($images[$i]->file)}}" alt="img">
                    <div class="icons d-flex justify-content-center">
                        <div class="close-icon" onclick="points({{$images[$i]->id}},0)">
                            <i class="fa fa-close"></i>
                        </div>
                        <div class="pts-2 pts" onclick="points({{$images[$i]->id}},2)">
                            2
                        </div>
                        <div class="pts-3 pts" onclick="points({{$images[$i]->id}},3)">
                            3
                        </div>
                        <div class="pts-5 pts" onclick="points({{$images[$i]->id}},5)">
                            5
                        </div>
                        <div class="pts-10 pts" onclick="points({{$images[$i]->id}},10)">
                            10
                        </div>
                        <div class="pts-10 pts pts-smart approve" onclick="points({{$images[$i]->id}},{{$event->points or 0}})">
                            {{$event->points or 0}}
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <button class="btn btn-success w-100 mt-5 border-0 approve-all p-5">Approve All</button>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script>
    let points = function(a,b){
        axios.get('/admin/ca/image/update/'+a+'/'+b)
            .then((response)=>{
                console.log(response.data);
            },(error)=>{
                console.log(error.data);
            });
        $('#image-'+a).remove();
    };
    $('.approve-all').click(function(){
        setInterval(function(){
            if($('.approve').length)
                $('.approve')[0].click();
            else{
                window.location.reload();
            }
        },300);
    });
</script>
</body>
</html>