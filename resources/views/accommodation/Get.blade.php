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
    <link rel="stylesheet" href="/accommodation/dist/css/jquery.contextMenu.min.css">
    <link rel="stylesheet" href="/accommodation/dist/css/iziToast.min.css">
    <link rel="stylesheet" href="/accommodation/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="/accommodation/dist/css/print.min.css">
    <!--[if lt IE 9]>
    <script src="/accommodation/dist/js/html5shiv.min.js"></script>
    <script src="/accommodation/dist/js/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="/accommodation/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini sidebar-collapse">
<div class="wrapper">

    @include('accommodation.layouts.header')
    @include('accommodation.layouts.sideboard')

    <div class="content-wrapper" style="min-height: 1126.3px;">
        <section class="content-header">
            <form action="/admin/accommodation">
                <div class="row"><div class="col-md-10">
                        <input id="searchIp" class="input form-control" name="e" placeholder="Search" tabindex="2" type="text" value="{{$r->e}}">
                    </div>
                    <div class="col-md-2 col-6">
                        <input type="submit" class="form-control input btn-primary" value="search" name="submit" tabindex="3">
                    </div>
                </div>
            </form>
        </section>
        @if(isset($r->e))
            <section class="content" >

                <div class="row">
                    <div class="col-md-3">
                        @if(isset($participant))
                            <div class="box box-primary">
                                <div class="box-body box-profile">
                                    <div class="box-header with-border" style="margin-bottom: 20px">
                                        <h3 class="box-title">About Participant</h3>
                                    </div>
                                    @if($participant->gender === 'male')
                                        <img class="profile-user-img img-responsive img-circle" src="/accommodation/dist/img/avatar.png" alt="User profile picture">
                                    @else
                                        <img class="profile-user-img img-responsive img-circle" src="/accommodation/dist/img/avatar2.png" alt="User profile picture">
                                    @endif

                                    <h3 class="profile-username text-center">{{$participant->name}}</h3>

                                    <p class="text-muted text-center">TF{{substr("00000".$participant->id,-6)}}</p>

                                    <ul class="list-group list-group">
                                        <li class="list-group-item">
                                            <b>Phone</b> <a class="pull-right ellipse">{{$participant->phone or  "null"}}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="pull-right ellipse">{{$participant->email or  "null"}}</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>College</b> <a class="pull-right ellipse" title="{{$participant->college or  "null"}}">{{$participant->college or  "null"}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.box-body -->
                            </div>
                        @endif
                        @if(isset($participants))
                            <div class="box box-primary">
                                <div class="box-body">
                                    <h3 class="box-title">Accommodated Members</h3>
                                    <hr class="m-0">
                                    @foreach($participants as $participant)
                                        @if($participant->accomodation)
                                            <a class="acco-slctd-1 no-td p-20-px acco-left-panel" data-id="{{$participant->id}}" href="{{url()->current()}}/?e=TF{{substr("00000".$participant->id,-6)}}">
                                                <strong><i class="fa fa-home text-success margin-r-5"></i>{{$participant->name}}</strong>
                                                <span class="pull-right">TF{{substr("00000".$participant->id,-6)}}</span></a>
                                            <hr class="m-0">
                                        @endif
                                    @endforeach
                                    <h3 class="box-title">Other Members</h3>
                                    <hr class="m-0">
                                    @foreach($participants as $participant)
                                        @if(!$participant->accomodation)
                                            <a class="no-td p-20-px noacco-left-panel" data-id="{{$participant->id}}" href="{{url()->current()}}/?e=TF{{substr("00000".$participant->id,-6)}}">
                                                <span class="text-white-50"><i class="fa fa-crop text-light margin-r-5"></i>{{$participant->name}}</span>
                                                <span class="pull-right">TF{{substr("00000".$participant->id,-6)}}</span>
                                            </a>
                                            <hr class="m-0">
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                    </div>
                    @if(isset($participants))
                        <div class="col-md-9">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#accommodation" data-toggle="tab">Accommodation</a></li>
                                    <li><a href="#settings" data-toggle="tab">Settings</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="active tab-pane">
                                        <!-- Post -->
                                        <div class="container-fluid" id="accommodation" style="padding-left: 30px;padding-top:30px; transform: scale(0.9); width: 200mm;">
                                            <div class="post">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="https://techfest.org/2018/logo.png" alt="" style="filter:invert(100%);height: 40px; margin-bottom: 30px;">
                                                </div>
                                                <div class="col-md-8">
                                                    <h1>Accommodation Portal</h1>
                                                </div>
                                                <hr>
                                            </div>
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Room</th>
                                                        <th>Lock Code</th>
                                                        <th>TF ID</th>
                                                        <th>Name</th>
                                                        <th>Shirt</th>
                                                        <th>Shirt Status</th>
                                                        <th>Kit Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody style="padding-left:10px;">
                                                @foreach($rooms['males'] as $k=>$roomG)
                                                    @foreach($roomG['ids'] as $id)
                                                        <tr class="{{$k%2?'bg-aqua':'bg-light'}}">
                                                            <th class="w-25" style="padding-right: 40px;"><strong>Hostel-{{$roomG['room']->hostel}}-Room-{{$roomG['room']->room}}</strong></th>
                                                            <th class="w-25" style="padding-right: 40px;"><strong>{{substr('000'.$roomG['room']->lockcode,-3)}}</strong></th>
                                                            <td>TF{{substr("00000".$id,-6)}}</td>
                                                            <td>{{$participants->where('id',$id)->first()->name}}</td>
                                                            <td>
                                                                @if($participants->where('id',$id)->first()->shirt===null)
                                                                    -
                                                                @else
                                                                    {{$participants->where('id',$id)->first()->shirt}}
                                                                @endif
                                                            </td>
                                                            <label>
                                                                <td>
                                                                    @if($participants->where('id',$id)->first()->shirt===null)
                                                                        &#10007;
                                                                    @elseif($participants->where('id',$id)->first()->shirt_given===1)
                                                                        &#10004;
                                                                    @elseif(in_array($id,$checked))
                                                                        <input class="shirtcheck" type="checkbox" name="shirtChecked[]" checked value="{{$participants->where('id',$id)->first()->id}}">
                                                                    @else
                                                                        <input class="shirtcheck" type="checkbox" name="shirtChecked[]" value="{{$participants->where('id',$id)->first()->id}}">
                                                                    @endif
                                                                </td>
                                                            </label>
                                                            <label>
                                                                <td>
                                                                    @if($participants->where('id',$id)->first()->kit_given===1)
                                                                        &#10004;
                                                                    @elseif(in_array($id,$checked))
                                                                        <input class="kitcheck" type="checkbox" name="kitChecked[]" checked value="{{$participants->where('id',$id)->first()->id}}">
                                                                    @else
                                                                        <input class="kitcheck" type="checkbox" name="kitChecked[]" value="{{$participants->where('id',$id)->first()->id}}">
                                                                    @endif
                                                                </td>
                                                            </label>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                                @foreach($rooms['females'] as $k=>$roomG)
                                                    @foreach($roomG['ids'] as $id)
                                                        <tr class="{{$k%2?'bg-primary':'bg-light'}}">
                                                            <th class="w-25" style="padding-right: 40px;"><strong>Hostel-{{substr("00".$roomG['room']->hostel,-3)}}-Room-{{$roomG['room']->room}}</strong></th>
                                                            <th class="w-25" style="padding-right: 40px;"><strong>{{substr('000'.$roomG['room']->lockcode,-3)}}</strong></th>
                                                            <td>
                                                                TF{{substr("00000".$id,-6)}}
                                                            </td>
                                                            <td>
                                                                {{$participants->where('id',$id)->first()->name}}
                                                            </td>
                                                            <td>
                                                                @if($participants->where('id',$id)->first()->shirt===null)
                                                                    -
                                                                @else
                                                                    {{$participants->where('id',$id)->first()->shirt}}
                                                                @endif
                                                            </td>
                                                            <label>
                                                                <td>
                                                                    @if($participants->where('id',$id)->first()->shirt===null)
                                                                        &#10007;
                                                                    @elseif($participants->where('id',$id)->first()->shirt_given===1)
                                                                        &#10004;
                                                                    @elseif(in_array($id,$checked))
                                                                        <input class="shirtcheck" type="checkbox" name="shirtChecked[]" checked value="{{$participants->where('id',$id)->first()->id}}">
                                                                    @else
                                                                        <input class="shirtcheck" type="checkbox" name="shirtChecked[]" value="{{$participants->where('id',$id)->first()->id}}">
                                                                    @endif
                                                                </td>
                                                            </label>

                                                            <label>
                                                                <td>
                                                                    @if($participants->where('id',$id)->first()->kit_given===1)
                                                                        &#10004;
                                                                    @elseif(in_array($id,$checked))
                                                                        <input class="kitcheck" type="checkbox" name="kitChecked[]" checked value="{{$participants->where('id',$id)->first()->id}}">
                                                                    @else
                                                                        <input class="kitcheck" type="checkbox" name="kitChecked[]" value="{{$participants->where('id',$id)->first()->id}}">
                                                                    @endif
                                                                </td>
                                                            </label>
                                                        </tr>
                                                    @endforeach
                                                @endforeach
                                                @foreach($rooms['alreadyAllocated'] as $k=>$p)
                                                    <tr>
                                                        <th style="padding-right: 40px;"><strong>{{explode('-code-',$p->allocated)[0]}}</strong></th>
                                                        <th style="padding-right: 40px;"><strong>{{explode('-code-',$p->allocated)[1]}}</strong></th>
                                                        <td>
                                                            TF{{substr("00000".$p->id,-6)}}
                                                        </td>
                                                        <td>
                                                            {{$p->name}}
                                                        </td>
                                                        <td>
                                                            @if($p->shirt===null)
                                                                -
                                                            @else
                                                                {{$p->shirt}}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($p->shirt===null)
                                                                &#10007;
                                                            @elseif($p->shirt_given===1)
                                                                &#10004;
                                                            @elseif(in_array($p->id,$checked))
                                                                <input class="shirtcheck" type="checkbox" name="shirtChecked[]" checked value="{{$p->id}}">
                                                            @else
                                                                <input class="shirtcheck" type="checkbox" name="shirtChecked[]" value="{{$p->id}}">
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($p->kit_given===1)
                                                                &#10004;
                                                            @elseif(in_array($p->id,$checked))
                                                                <input class="kitcheck" type="checkbox" name="kitChecked[]" checked value="{{$p->id}}">
                                                            @else
                                                                <input class="kitcheck" type="checkbox" name="kitChecked[]" value="{{$p->id}}">
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <hr>
                                            <div>
                                                Check-Out Procedure<br>
                                                Lock the rooms properly. Do not change the lockcodes. If found changed, no refund will be done.<br>
                                                Heavy Fine will be imposed if damage is done to any institute property<br>
                                                There is no need to report at Hospitality Desk during Check-Out. <br>
                                                <br>
                                                Refund <br>
                                                The Caution money would be refunded within 30 working days from the 20th December 2018.
                                                <br>
                                                If any discrepancy is found, there would be no refund.<br>
                                                <br>
                                                For any queries, contact: <br>
                                                <table style="width:100%">
                                                    <tr>
                                                        <td>Manjeet Singh</td>
                                                        <td>Abhinav Kumar</td>
                                                        <td>Mohit Agarwal</td>
                                                    </tr>
                                                    <tr>
                                                        <td>+91 75683 87238</td>
                                                        <td>+91 82995 44527</td>
                                                        <td>+91 74004 01399</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        </div>
                                        <!-- Post -->
                                        <div class="post clearfix" style="margin-top: 20px;">
                                            <div class="allocate-btn w-100">
                                                <button name="rooms" class="bg-primary btn w-50 pull-left print-btn text-white" autofocus id="printBtn" style="color: #fff !important;">Print</button>
                                                <form action="/admin/accommodation/reset" method="POST">
                                                    @csrf
                                                    <button name="rooms" class="bg-red btn w-25 pull-right " value="{{json_encode($participants->pluck('id'))}}" tabindex="5" id="resetBtn">Reset</button
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.tab-content -->
                            </div>
                            <!-- /.nav-tabs-custom -->
                        </div>
                @endif
                <!-- /.col -->
                </div>
                <!-- /.row -->

            </section>
        @endif
    </div>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 0.22
        </div>
        <strong>Copyright &copy; {{date('Y')}}</strong> Techfest, IIT Bombay
    </footer>
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="/accommodation/#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="/accommodation/#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="/accommodation/javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
        </div>
    </aside>
    <div class="control-sidebar-bg"></div>

</div>
<script src="/accommodation/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/js/iziToast.min.js"></script>
<script src="/accommodation/dist/js/mousetrap.js"></script>
<!-- Context Menu -->
<script src="/accommodation/dist/js/axios.js"></script>
<script src="/accommodation/dist/js/store2.min.js"></script>
<script src="/accommodation/dist/js/jQuery.print.js"></script>
<script src="/accommodation/dist/js/jquery.contextMenu.min.js"></script>
<script src="/accommodation/dist/js/jquery.ui.position.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/accommodation/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/accommodation/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Sparkline -->
<script src="/accommodation/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/accommodation/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/accommodation/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/accommodation/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/accommodation/bower_components/moment/min/moment.min.js"></script>
<script src="/accommodation/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/accommodation/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/accommodation/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/accommodation/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/accommodation/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/accommodation/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/accommodation/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/accommodation/dist/js/demo.js"></script>
<script src="/accommodation/main.js"></script>
<style>
    @page { size: auto;  margin: 0mm; }
</style>
</body>
</html>