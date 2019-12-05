<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cozmo Create Team</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="/2019/compi/ContactFrom_v10/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/compi/ContactFrom_v10/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/compi/ContactFrom_v10/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/compi/ContactFrom_v10/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/compi/ContactFrom_v10/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/compi/ContactFrom_v10/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/compi/ContactFrom_v10/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/compi/ContactFrom_v10/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="/2019/compi/ContactFrom_v10/css/util.css">
    <link rel="stylesheet" type="text/css" href="/2019/compi/ContactFrom_v10/css/main.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">

    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post" action="/2019/competitions/zonals_form">
            {{csrf_field()}}
            <span class="contact100-form-title">
					Registration Form
				</span>

            <div class="wrap-input100 validate-input" data-validate="Please enter your name">
                <input class="input100" type="text" name="name" placeholder="Full Name" value="{{$current_user_data->name}}" disabled="disabled">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                <input class="input100" type="text" name="email" placeholder="E-mail" value="{{$current_user_data->email}}" disabled="disabled">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
                <input class="input100" type="number" name="phone" placeholder="Phone" required max="9999999999" min="1000000000">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
                <input class="input100" type="text" name="college_name" placeholder="College Name" required>
                <span class="focus-input100"></span>
            </div>
            {{--            <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">--}}
            {{--                <input class="input100" type="text" name="college_address" placeholder="College Address" required>--}}
            {{--                <span class="focus-input100"></span>--}}
            {{--            </div>--}}
            <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
                <input class="input100" type="number" name="college_pincode" placeholder="College Pincode" required>
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 " >
                <select name="zonal" class="wrap-input100 validate-input" style="margin-bottom: 0px;border-radius: 31px;height: 62px;" class="input100" placeholder="College Pincode" >
                    <option value="Mumbai">Mumbai</option>
                    <option value="Jaipur">Jaipur</option>
                    <option value="Lucknow">Lucknow</option>
                    <option value="Bhopal">Bhopal</option>
                    <option value="Banglore">Banglore</option>
                    <option value="Kolkata">Kolkata</option>
                </select>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
                <input class="input100" type="number" name="college_year" placeholder="Year of study(1,2,3,4,5)" required>
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
                <input class="input100" type="text" name="student_address" placeholder="Home Address" required>
                <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100 validate-input" data-validate = "Please enter your message">
                <textarea class="input100" name="message" placeholder="Any feedback"></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Submit
						</span>
                </button>
            </div>
        </form>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="/2019/compi/ContactFrom_v10/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="/2019/compi/ContactFrom_v10/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="/2019/compi/ContactFrom_v10/vendor/bootstrap/js/popper.js"></script>
<script src="/2019/compi/ContactFrom_v10/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="/2019/compi/ContactFrom_v10/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="/2019/compi/ContactFrom_v10/vendor/daterangepicker/moment.min.js"></script>
<script src="/2019/compi/ContactFrom_v10/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="/2019/compi/ContactFrom_v10/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="/2019/compi/ContactFrom_v10/js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
