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
        <form class="contact100-form validate-form" method="post" action="/2019/competitions/cozmo/createteam">
            {{csrf_field()}}
				<span class="contact100-form-title">
					Create a Team
				</span>
            <p>Hi {{$current_user_data->name}},  After successfully submitting this form you will become the <b>TEAM LEADER</b>. Now use the Registered Email Id of your friends to add them in your team.</p>
            <p>You need not add all the team members at once. DO READ THE EXAMPLES</p>
            <p>Eg.1 You did add only 2 new members in your team. Later, if you want to add one more member to your team.</p>
            <p>Either Team leader should dissolve the existing Team or Form a New team.</p>
            <p>New member should Join the existing team using the Registered Mail Id of any member of the existing team  (not necessarily team leader) by clicking on Join a Team Button.</p>
            <br>
            <p>Eg.2 You have no team member to add in your team at the stage of registration. But still, you will have to Create a Team and Submit the form without filling the other details, since only Registering, does not form your Team even though you are a Single member team. Team ID will be generated after team formation which is very important and will be used in future. Later you can add them using the steps stated in Eg 1. </p>
            @if($errors->any())
                <h4>{{$errors->first()}}</h4>
            @endif

            <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                <input class="input100" type="text" name="email2" placeholder="E-mail" value="{{$current_user_data->email}}(TEAM LEADER)" disabled>
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                <input class="input100" type="text" name="email2" placeholder="E-mail" required>
                <span class="focus-input100"></span>
            </div>
             <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                <input class="input100" type="text" name="email3" placeholder="E-mail">
                <span class="focus-input100"></span>
            </div>
             <div class="wrap-input100 validate-input" data-validate = "Please enter your email: e@a.x">
                <input class="input100" type="text" name="email4" placeholder="E-mail">
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
