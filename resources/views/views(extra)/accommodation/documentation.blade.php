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

    @include('accommodation.layouts.header')
    @include('accommodation.layouts.sideboard')

    <div class="content-wrapper" style="min-height: 1126.3px;">
        <section class="content" >
            <div class="row">
                <div class="col-md-12">
                    <h1 class="display-4">Documentation</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="box box-primary p-2 ">
                                <div class="h2">1. Instructions</div>
                                <p>The webapp is divided into 3 parts</p>
                                <dl style="margin-left: 20px;">
                                    <dt>Header</dt>
                                    <dd>Top blue part of every page, that contains the techfest logo</dd>
                                    <dt>Sidebar</dt>
                                    <dd>Left section of everypage, that contains navigation to every other page</dd>
                                    <dt>Main Content</dt>
                                    <dd>Main content that is the remaining area, which changes on changing the page</dd>
                                </dl>
                            </div>
                            <div class="box box-warning p-2 ">
                                <div class="h2">2. Navigation</div>
                                <p>There are four parts in the sidebar</p>
                                <dl style="margin-left: 20px;">
                                    <dt>Set Rooms</dt>
                                    <dd>You will use it to choose which rooms are allocated</dd>
                                    <dt>Configure</dt>
                                    <dd>You will use this to change the settings of every room</dd>
                                    <dt>Allocate</dt>
                                    <dd>The automatic room allocation portal</dd>
                                </dl>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="box box-danger p-2 ">
                                        <div class="h2">3. Set Rooms</div>
                                        <p>In this function you decide which rooms are now available for accommodation in differnet hostels</p>
                                        <p>To do so, first select the hostel from the top panel. Note that 15-A, 15-B etc. are denoted by 151, 152.. respectively. Similarly for hostel 10,16,12,13,15</p>
                                        <p>Once you have selected the hostel, you will see which rooms have been allocated with blue color, and the ones not allocated in simple white. Click on the room to toggle between making it available or not available.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="box box-dark p-2 ">
                                        <div class="h2">4. Configuraiton</div>
                                        <p>You can configure properties of different rooms in configure section. For doing so, click on the configure icon in left side panel</p>
                                        <p>You can change the number of participants, gender and number of rooms per floor. The third option is of no use as of now. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="box box-dark p-2 ">
                                <div class="h2">Allocate</div>
                                <p>Allocation portal is made as much flexible as I could in given time frame. The 'Main Content' section is further divided into 4 parts </p>
                                <ul>
                                    <li>Search</li>
                                    <li>Participant Details</li>
                                    <li>Related Participants</li>
                                    <li>Accommodated Rooms</li>
                                </ul>
                                <p>You will see the last 3 once you search for something. In search, you can search for TF Id, Email, Phone, Team Id, Ticket Id and Name(not accurate).</p>
                                <p>
                                    Once you search, you will get the closest/most important member related to that search query.
                                    Also, you will get the participants who paid together with him, or all the related participants.
                                    In the right section, the participants will be allocated rooms and lock codes will be visible, which you can print if correct or reset if there are some changes.
                                </p>
                                <p>
                                    There are many options available when you click on the users in left section of 'Main Content',
                                    like you can change genders by right-clicking on the participants. If the participant is already accommodated,
                                    you will see option to change his/her gender, remove accommodation/allocation.
                                    <br>
                                    If the participant does not have accommodation you will see option to give him accommodation.
                                    <br>
                                    <strong>Note that once these changes are done, you need to reset and check the team again for updated room results.</strong>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="box box-success p-2">
                                There are a few keyboard shortcuts in this page,
                                <table class="table">
                                    <tr>
                                        <th>Ctrl+F</th><td>Focus on search box</td>
                                        <th>Ctrl+P</th><td>Print the results</td>
                                        <th>Ctrl+Q</th><td>Reset the results</td>
                                    </tr>
                                    <tr>
                                        <th>Ctrl+Shift+1</th><td>Set Room Portal</td>
                                        <th>Ctrl+Shift+2</th><td>Configuration POrtal</td>
                                        <th>Ctrl+Shift+3</th><td>Allocation Portal</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/accommodation/bower_components/jquery/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mousetrap/1.6.2/mousetrap.js"></script>
<!-- Context Menu -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
<script src="https://raw.githubusercontent.com/nbubna/store/master/dist/store2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jQuery.print/1.6.0/jQuery.print.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.contextMenu.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-contextmenu/2.7.1/jquery.ui.position.js"></script>
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
<script>

    $(function() {

    });
</script>
</body>
</html>