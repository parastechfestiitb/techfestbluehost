<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Page-->
    <title>Admin Dashboard</title>
    <!-- Fontfaces CSS-->
    <link href="/2019/adminDashboard/css/font-face.css" rel="stylesheet" media="all">
    <link href="/2019/adminDashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="/2019/adminDashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="/2019/adminDashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <!-- Bootstrap CSS-->
    <link href="/2019/adminDashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
    <!-- Vendor CSS-->
    <link href="/2019/adminDashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="/2019/adminDashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="/2019/adminDashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="/2019/adminDashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="/2019/adminDashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="/2019/adminDashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="/2019/adminDashboard/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">
    <!-- Main CSS-->
    <link href="/2019/adminDashboard/css/theme.css" rel="stylesheet" media="all">
    <script src="/2019/ca/js/excellentexport.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.5.1/pixi.min.js"></script>

    <script src="/2019/adminDashboard/js/mouse-trail.js"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>
</head>


<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER MOBILE-->
{{--    <header class="header-mobile d-block d-lg-none">--}}
{{--        <div class="header-mobile__bar">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="header-mobile-inner">--}}
{{--                    <a class="logo" href="">--}}
{{--                        <img src="/2019/adminDashboard/images/icon/logo.png" alt="CoolAdmin" />--}}
{{--                    </a>--}}
{{--                    <button class="hamburger hamburger--slider" type="button">--}}
{{--                            <span class="hamburger-box">--}}
{{--                                <span class="hamburger-inner"></span>--}}
{{--                            </span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <nav class="navbar-mobile">--}}
{{--            <div class="container-fluid">--}}
{{--                <ul class="navbar-mobile__list list-unstyled">--}}
{{--                    <li class="has-sub">--}}
{{--                        <a class="js-arrow" href="#">--}}
{{--                            <i class="fas fa-tachometer-alt"></i>Compi</a>--}}
{{--                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">--}}
{{--                            <li>--}}
{{--                                <a href="#">Compi 1</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Compi 2</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">Compi 3</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <ul class="navbar-mobile__list list-unstyled">--}}
{{--                    <li class="has-sub">--}}
{{--                        <a class="js-arrow" href="#">--}}
{{--                            <i class="fas fa-tachometer-alt"></i>Workshop</a>--}}
{{--                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">--}}
{{--                            <li>--}}
{{--                                <a href="#">w1</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="#">w2</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <ul class="navbar-mobile__list list-unstyled">--}}
{{--                    <li class="has-sub">--}}
{{--                        <a class="js-arrow" href="#">--}}
{{--                            <i class="fas fa-tachometer-alt"></i>CA Dashboard</a>--}}
{{--                        <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">--}}
{{--                            <li>--}}
{{--                                <a href="https://techfest.org/admins">CA Data</a>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <a href="https://techfest.org/adminca">CA Events</a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </nav>--}}
{{--    </header>--}}
    <!-- END HEADER MOBILE-->

    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="#">
                <img src="/2019/adminDashboard/images/icon/logo.png" alt="Cool Admin" />
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li class="active has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Compi</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li><a href="#">Compi 1</a></li>
                            <li><a href="#">Compi 2</a></li>
                        </ul>
                    </li>
                    <li class="active has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>Workshop</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li><a href="#">W 1</a></li>
                            <li><a href="#">W 2</a></li>
                        </ul>
                    </li>
                    <li class="active has-sub">
                        <a class="js-arrow" href="#"><i class="fas fa-tachometer-alt"></i>CA Dashboard</a>
                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                            <li><a href="https://techfest.org/admins">CA Data</a></li>
                            <li><a href="https://techfest.org/adminca">CA Events</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- END MENU SIDEBAR-->

    <!-- PAGE CONTAINER-->
    <div class="page-container">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="header-wrap">
                        <form class="form-header" action="" method="POST">
                            <!--                                <input class="au-input au-input&#45;&#45;xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />-->
                            <!--                                <button class="au-btn&#45;&#45;submit" type="submit">-->
                            <!--                                    <i class="zmdi zmdi-search"></i>-->
                            <!--                                </button>-->
                        </form>
                        <div class="header-button">
                            <div class="noti-wrap">
                                <div class="noti__item js-item-menu">
                                    <i class="zmdi zmdi-comment-more"></i>
                                    <span class="quantity">1</span>
                                    <div class="mess-dropdown js-dropdown">
                                        <div class="mess__title">
                                            <p>You have 2 news message</p>
                                        </div>
                                        <div class="mess__item">
                                            <div class="image img-cir img-40">
                                                <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                            </div>
                                            <div class="content">
                                                <h6>Michelle Moreno</h6>
                                                <p>Have sent a photo</p>
                                                <span class="time">3 min ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="account-wrap">
                                <div class="account-item clearfix js-item-menu">
                                    <div class="image">
                                        <img src="/2019/adminDashboard/images/icon/avatar-01.jpg" alt="{{$admin->name}}" />
                                    </div>
                                    <div class="content">
                                        <a class="js-acc-btn" href="#">{{$admin->name}}</a>
                                    </div>
                                    <div class="account-dropdown js-dropdown">
                                        <div class="info clearfix">
                                            <div class="image">
                                                <a href="#">
                                                    <img src="/2019/adminDashboard/images/icon/avatar-01.jpg" alt="{{$admin->name}}" />
                                                </a>
                                            </div>
                                            <div class="content">
                                                <h5 class="name">
                                                    <a href="#">{{$admin->name}}</a>
                                                </h5>
                                                <span class="email">{{$admin->email}}</span>
                                            </div>
                                        </div>
{{--                                        <div class="account-dropdown__body">--}}
{{--                                            <div class="account-dropdown__item">--}}
{{--                                                <a href="#">--}}
{{--                                                    <i class="zmdi zmdi-account"></i>Account</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="account-dropdown__item">--}}
{{--                                                <a href="#">--}}
{{--                                                    <i class="zmdi zmdi-settings"></i>Setting</a>--}}
{{--                                            </div>--}}
{{--                                            <div class="account-dropdown__item">--}}
{{--                                                <a href="#">--}}
{{--                                                    <i class="zmdi zmdi-money-box"></i>Billing</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="account-dropdown__footer">
                                            <a href="https://techfest.org/logout">
                                                <i class="zmdi zmdi-power"></i>Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER DESKTOP-->

        <!-- MAIN CONTENT-->
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive table--no-card m-b-40">
                                <button id="btnExport" onclick="javascript:xport.toCSV('compi');"> Export to CSV</button>
                                <table class="table table-borderless table-striped table-earning" id="compi">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Compi</th>
                                        <th>Compi Team</th>
                                    </tr>
                                    </thead>
                                    @foreach($big_data as $i)
                                        @if($i->ift >= 1)
                                    <tbody>
                                        <tr>
                                            <td>{{$i->name}}</td>
                                            <td>{{$i->email}}</td>
                                            <td>IFT</td>
                                            <td>{{$i->ift_team}}</td>
                                        </tr>
                                    </tbody>
                                        @endif
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN CONTENT-->
        <!-- END PAGE CONTAINER-->
    </div>

</div>

<!-- Jquery JS-->
<script src="/2019/adminDashboard/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="/2019/adminDashboard/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="/2019/adminDashboard/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="/2019/adminDashboard/vendor/slick/slick.min.js"></script>
<script src="/2019/adminDashboard/vendor/wow/wow.min.js"></script>
<script src="/2019/adminDashboard/vendor/animsition/animsition.min.js"></script>
<script src="/2019/adminDashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<script src="/2019/adminDashboard/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="/2019/adminDashboard/vendor/counter-up/jquery.counterup.min.js"></script>
<script src="/2019/adminDashboard/vendor/circle-progress/circle-progress.min.js"></script>
<script src="/2019/adminDashboard/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="/2019/adminDashboard/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="/2019/adminDashboard/vendor/select2/select2.min.js"></script>
<!-- Main JS-->
<script src="/2019/adminDashboard/js/main.js"></script>
<script>
    var xport = {
        _fallbacktoCSV: true,
        toXLS: function(tableId, filename) {
            this._filename = (typeof filename == 'undefined') ? tableId : filename;

            //var ieVersion = this._getMsieVersion();
            //Fallback to CSV for IE & Edge
            if ((this._getMsieVersion() || this._isFirefox()) && this._fallbacktoCSV) {
                return this.toCSV(tableId);
            } else if (this._getMsieVersion() || this._isFirefox()) {
                alert("Not supported browser");
            }

            //Other Browser can download xls
            var htmltable = document.getElementById(tableId);
            var html = htmltable.outerHTML;

            this._downloadAnchor("data:application/vnd.ms-excel" + encodeURIComponent(html), 'xls');
        },
        toCSV: function(tableId, filename) {
            this._filename = (typeof filename === 'undefined') ? tableId : filename;
            // Generate our CSV string from out HTML Table
            var csv = this._tableToCSV(document.getElementById(tableId));
            // Create a CSV Blob
            var blob = new Blob([csv], { type: "text/csv" });

            // Determine which approach to take for the download
            if (navigator.msSaveOrOpenBlob) {
                // Works for Internet Explorer and Microsoft Edge
                navigator.msSaveOrOpenBlob(blob, this._filename + ".csv");
            } else {
                this._downloadAnchor(URL.createObjectURL(blob), 'csv');
            }
        },
        _getMsieVersion: function() {
            var ua = window.navigator.userAgent;

            var msie = ua.indexOf("MSIE ");
            if (msie > 0) {
                // IE 10 or older => return version number
                return parseInt(ua.substring(msie + 5, ua.indexOf(".", msie)), 10);
            }

            var trident = ua.indexOf("Trident/");
            if (trident > 0) {
                // IE 11 => return version number
                var rv = ua.indexOf("rv:");
                return parseInt(ua.substring(rv + 3, ua.indexOf(".", rv)), 10);
            }

            var edge = ua.indexOf("Edge/");
            if (edge > 0) {
                // Edge (IE 12+) => return version number
                return parseInt(ua.substring(edge + 5, ua.indexOf(".", edge)), 10);
            }

            // other browser
            return false;
        },
        _isFirefox: function(){
            if (navigator.userAgent.indexOf("Firefox") > 0) {
                return 1;
            }

            return 0;
        },
        _downloadAnchor: function(content, ext) {
            var anchor = document.createElement("a");
            anchor.style = "display:none !important";
            anchor.id = "downloadanchor";
            document.body.appendChild(anchor);

            // If the [download] attribute is supported, try to use it

            if ("download" in anchor) {
                anchor.download = this._filename + "." + ext;
            }
            anchor.href = content;
            anchor.click();
            anchor.remove();
        },
        _tableToCSV: function(table) {
            // We'll be co-opting `slice` to create arrays
            var slice = Array.prototype.slice;

            return slice
                .call(table.rows)
                .map(function(row) {
                    return slice
                        .call(row.cells)
                        .map(function(cell) {
                            return '"t"'.replace("t", cell.textContent);
                        })
                        .join(",");
                })
                .join("\r\n");
        }
    };

</script>
</body>
</html>
<!-- end document-->