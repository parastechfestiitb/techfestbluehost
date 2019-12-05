<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/accommodation/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/accommodation/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/accommodation/bower_components/Ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="/accommodation/dist/css/AdminLTE.css">
    <link rel="stylesheet" href="/accommodation/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="/accommodation/bower_components/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/accommodation/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="/accommodation/bower_components/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="/accommodation/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/accommodation/main.css">
    <link rel="stylesheet" href="/accommodation/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

    @include('attendance.layouts.header')
    @include('attendance.layouts.sideboard')

    <div class="content-wrapper" style="min-height: 1126.3px;">
        <section class="content-header">
            <form action="/admin/attendance">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <select name="event" class="input form-control" id="events">
                            @if(isset($r->event))
                                <option value="{{$r->event}}" selected>{{$events->where('id',$r->event)->first()->name}}</option>
                            @endif
                            @foreach ($events as $event)
                                <option value="{{$event->id}}" onclick="$('#searchIp').val('{{$event->code}}-')">{{$event->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="hidden" name="linktest" value="{{DB::table('events')->whereId($r->event)->first()->code}}">
                        <input type="password" value="{{$r->secret or 'dreamontf'}}" name="secret" class="form-control input">
                    </div>
                    <div class="col-md-3">
                        <select name="slot" id="slot" class="input form-control">
                            @for($x=1;$x<12;$x+=1)
                                <option value="{{$x}}">Slot {{$x}}</option>
                            @endfor
                        </select>
                    </div>

                    <div class="col-md-6" style="margin-top: 20px;">
                        <input id="searchIp" class="input form-control" name="e" placeholder="Search" tabindex="2" type="text" autofocus onfocus="var temp_value=this.value; this.value=''; this.value=temp_value" value="{{$events->where('id',$r->event)->first()->code}}-">
                    </div>
                    <div class="col-md-6" style="margin-top: 20px;">
                        <input type="submit" class="form-control input btn-primary" value="search" name="submit" tabindex="3">
                    </div>
                </div>
            </form>
        </section>
        <section class="content" >
            <div class="row">
                @if(isset($teams))
                    @foreach($teams as $team)
                    <div class="col-md-3">
                        <div class="box box-{{$team['event']->team->ticket_id!==null?'success':'danger'}}">
                            <form action="/admin/attendance/mark/{{$r->event}}/{{$team['event']->team->id}}/slot{{$r->slot}}" method="POST">
                                @csrf
                                <div class="box-body box-profile">
                                <div class="box-header with-border" style="margin-bottom: 20px">
                                    <h3 class="box-title">{{$team['event']->team->ticket_id!==null?'Paid':'Not Paid'}}</h3>
                                </div>
                                <h3 class="profile-username text-center">{{$team['event']->code}}-{{substr('000000'.$team['event']->team->id,-6)}}</h3>
                                <p class="text-muted text-center"></p>
                                <ul class="list-group list-group">
                                    @foreach($team['participants'] as $participant)
                                        <li class="list-group-item">
                                            <label class="w-100 noselect pointer">
                                                <input type="checkbox" checked name="members[{{$participant->id}}]">
                                                <b>{{$participant->name}}</b> <a class="pull-right">TF-{{substr('000000'.$participant->id,-6)}}</a> <br>
                                                <span>{{$participant->email}}</span> <span class="pull-right text-success">{{$participant->status?'Marked':''}}</span>
                                            </label>
                                        </li>
                                    @endforeach
                                </ul>
                                <div class="box-footer with-border">
                                    <button class="btn btn-primary w-100">Mark Attendance</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
        </section>
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.22
        </div>
        <strong>Copyright &copy; {{date('Y')}}</strong> Techfest, IIT Bombay
    </footer>
</div>
<script src="/accommodation/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.6.2/mousetrap.js"></script>
<!-- Context Menu -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
<script src="https://raw.githubusercontent.com/nbubna/store/master/dist/store2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.0/jQuery.print.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>
<script src="/accommodation/bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="/accommodation/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/accommodation/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="/accommodation/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/accommodation/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="/accommodation/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="/accommodation/bower_components/moment/min/moment.min.js"></script>
<script src="/accommodation/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/accommodation/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="/accommodation/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="/accommodation/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/accommodation/bower_components/fastclick/lib/fastclick.js"></script>
<script src="/accommodation/dist/js/adminlte.min.js"></script>
<script src="/accommodation/dist/js/pages/dashboard.js"></script>
<script src="/accommodation/dist/js/demo.js"></script>
<script src="/accommodation/main.js"></script>
</body>
</html>