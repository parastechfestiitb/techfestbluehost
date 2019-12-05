<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="/2019/ca/images/favicon_logo.png" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#000000">

    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#000000">

    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-81222017-1');
    </script>

    <!-- Title Page-->
    <title>Registeration Forms</title>

    <!-- Icons font CSS-->
    <link href="2019/ca/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="2019/ca/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="2019/ca/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="2019/ca/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="2019/ca/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
        <div class="wrapper wrapper--w960">
            <div class="card card-2">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Update Profile</h2>
                    <form method="POST" action="/regform">
                        {!! csrf_field() !!}

                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Name" name="name" value="{{$name123}}" readonly>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
{{--                                 todo referto this--}}
                                    <input class="input--style-2" type="text" placeholder="Email"  name="email" value="{{$email123}}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--<div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2 js-datepicker" type="text" placeholder="Birthdate" name="birthday">
                                    <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="gender">
                                            <option disabled="disabled" selected="selected">Gender</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="rs-select2 js-select-simple select--no-search">

                                    <div class="input-group">
                                        @if(empty($college_name123))
                                            <input class="input--style-2" type="text" placeholder="College Name" required  name="college_name" value="{{$college_name123}}">
                                        @endif
                                            @if(!empty($college_name123))
                                            <input class="input--style-2" type="text" placeholder="College Name" required  name="college_name" value="{{$college_name123}}" readonly>
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="number" placeholder="Year" required name="address" value="{{$year123}}" max="5" min="1">

{{--                                    <div class="rs-select2 js-select-simple select--no-search" >--}}
{{--                                        <select name="year" required value="{{$year123}}"  >--}}
{{--                                            <option disabled="disabled"  selected="selected">Year</option>--}}
{{--                                            <option value="">Year</option>--}}
{{--                                            <option value="1st Year">1st Year</option>--}}
{{--                                            <option value="2nd Year">2nd Year</option>--}}
{{--                                            <option value="3rd Year">3rd Year</option>--}}
{{--                                            <option value="4th Year">4th Year</option>--}}
{{--                                            <option value="5th Year">5th Year</option>--}}
{{--                                        </select>--}}
{{--                                        <div class="select-dropdown"></div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>

                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="text" placeholder="Address" required name="address" value="{{$address123}}">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="number" placeholder="Pincode" required name="pincode" value="{{$pincode123}}"  max="999999" min="100000">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-2" type="number" placeholder="Mobile Number" required name="number" value="{{$number123}}" max="9999999999" min="1000000000">
                                </div>
                            </div>
                            @if( empty( $refer123) )
                                <div class="col-2">
                                    <div class="input-group">
                                        <input class="input--style-2" type="text" placeholder="CA reference email" name="refer" value="{{$refer123}}">
                                    </div>
                                </div>
                            @endif

                        </div>
                        <div class="p-t-30">
                            <button class="btn btn--radius btn--green" type="submit" name="reg-submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="2019/ca/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="2019/ca/vendor/select2/select2.min.js"></script>
    <script src="2019/ca/vendor/datepicker/moment.min.js"></script>
    <script src="2019/ca/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="2019/ca/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->