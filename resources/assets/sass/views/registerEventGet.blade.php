<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Techfest 2018</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="icon" href="{{Storage::disk('s3')->url('public/favicon.png')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('asset/css/Get.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
    <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
    <style>
        .register-modal,.login-modal{
            background: rgba(0,0,0,0.7);
            position: fixed;
            z-index:99;
            left:0;
            right:0;
            top:0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.85);
        }
        .centered{
            margin:auto;
        }
        .modal-body{
            font-size: 0.833333vw;
            margin-bottom: 2vh;
        }
        .modal-body .instructions{
            color:rgba(255,255,255,0.7);
        }
        .input-group{
            width: 30vw;
            overflow: hidden;
            margin-bottom: 1vh;
            min-height: 4.6vh;
        }
        .input-group .title{
            width: 8vw;
            text-align: right;
            display: inline-block;
            font-size: 1.2vw;
            line-height: 1.8vw;
            font-family: 'Play',sans-serif;
            margin-top: 0.5vh;
        }
        .input-group input,.input-group select,.input-group textarea{
            width: 20vw;
            margin-left:2vw;
            display: inline-block;
            background:transparent;
            border:none;
            border-bottom: 0.0520833333vw solid white;
            color:white;
            line-height: 1.8vw;
        }
        .input-group textarea{
            height: 2vw !important;
            line-height: 1.5vw;
        }
        .input-group input[readonly="readonly"] {
            color:grey !important;
            border-bottom: none !important;
        }
        .input-group .error{
            width:30vw;
            margin-left:10vw;
            font-size: 0.6vw;
            color: #ffce00;
        }
        .input-group > .error:first-child{
            margin-top:0.8vh;
        }
        .input-group option{
            color:white;
            background:black;
            line-height: 1.8vw;
            height:1.8vw;
            padding: 1vw;
        }
        input:focus,select:focus,textarea:focus{
            outline:none;
        }
        .title-modal-login{
            font-size:1.66666vw;
            margin-bottom: 4vh;
            font-family: 'Play',sans-serif;
        }
        .input-group button{
            margin-left: 10vw;
            border: 0.104166667vw solid white;
            background: transparent;
            color: white;
            line-height: 1.5vw;
            padding: 0.7vh 5vh;
            transition: all 0.2s;
            margin-top: 1.7vh;
        }
        .input-group button:hover{
            background: white;
            color: black;
        }
        .register-modal .modal-body{
            width: 45vw;
            font-size: 0.833333vw;
        }
        .register-modal .instructions .inst{
            margin-left: 12vw;
            width: 30vw;
            font-size: 1.66vw;
        }
        .register-modal .instructions div{
            color: #ffce00;
            margin-left: 12vw;
        }
        .register-modal div:first-child{
            margin-top: 2vw ;
        }
        .team-member{
            height:3vw;
        }
        .team-member .message{
            width: 10vw;
            display: inline-block;
            text-align: right;
            margin-right:2vw;
        }
        button{
            padding:10px;
            border:2px solid white;
            background: transparent;
            color:white;
            transition: color 1s, background 1s;
        }
        button:hover{
            background: #fff;
            color:#000;
        }
    </style>
</head>
<body>
    <div id="app">
        <div class="loginFirst" v-if="showLogin">
            <div class="h-100 w-100">
                <div class="text-white text-center mt-5 fa-2x" > You have been directed here by the invitation link of {{$participant->name}} for the event {{$event->name}}.
                    <br>
                    To join the team, you need to login with your Google account below and fill in the required details as asked.
                    <br><br>
                    <button  @click="register">Click here to Log In</button>
                </div>
            </div>
        </div>
        <div class="login-modal d-flex justify-content-center" v-if="loginModal">
            <div class="centered">
                <div class="modal-body">
                    <div class="title-modal-login text-center">Last Step: Please fill in following details in order to proceed.</div>
                    <div class="input-group">
                        <div class="title">Name</div>
                        <input type="name" placeholder="Name" v-model="registerDetails.name" readonly>
                        <div class="error error-name" v-for="x in errorRegisterDetails.name">@{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">Email</div>
                        <input type="email" placeholder="Email" v-model="registerDetails.email" readonly>
                        <div class="error error-email" v-for="x in errorRegisterDetails.email">@{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">Gender</div>
                        <select name="gender" id="gender" v-model="registerDetails.gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Other</option>
                        </select>
                        <div class="error error-gender" v-for="x in errorRegisterDetails.gender">@{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">DOB</div>
                        <input type="date" placeholder="DOB" name="dob" v-model="registerDetails.dob">
                        <div class="error error-dob" v-for="x in errorRegisterDetails.dob">@{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">College</div>
                        <input type="text" placeholder="Full college name" name="College" v-model="registerDetails.college">
                        <div class="error error-college" v-for="x in errorRegisterDetails.college">@{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">Phone No.</div>
                        <input type="number" placeholder="Phone number with country code" name="phone" v-model="registerDetails.phone">
                        <div class="error error-phone" v-for="x in errorRegisterDetails.phone">@{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">Confirm No.</div>
                        <input type="number" placeholder="Re-enter phone number" name="phone_confirmation" v-model="registerDetails.phone_confirmation">
                    </div>
                    <div class="input-group">
                        <div class="title">Zip Code</div>
                        <input type="number" placeholder="Zip/Pin code" name="pin" v-model="registerDetails.pin">
                        <div class="error error-pin" v-for="x in errorRegisterDetails.pin">@{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">Address</div>
                        <textarea name="address" id="address" cols="5" rows="5" placeholder="Permanent Address" v-model="registerDetails.address"></textarea>
                        <div class="error error-address" v-for="x in errorRegisterDetails.address">@{{x}}</div>
                    </div>
                    <div class="input-group">
                        <button @click="loginSubmit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const _routes = {
            'loginPost':'{{route('loginPost')}}',
            'registerUrlGet':'{{route('registerUrlGet',['url'=>Request::path()])}}',
            'currentUrl':'{{Request::path()}}',
            'templateUrlPost': '{{route('templateUrlPost')}}',
            'competitionsPost': '{{route('api.event.competitionsPost')}}',
            'ideatesPost': '{{route('api.event.ideatesPost')}}',
            'eventIdGet': '{{route('event.getIdPost',':id')}}',
            'homePng':'{{Storage::disk('s3')->url('public/home.png')}}'
        };
        const csrf = {
            'token':'{!! csrf_token() !!}',
            'field':'{!! csrf_field() !!}'
        };
        const s3Link = '{!! Storage::disk('s3')->url('public/Get/img-temp') !!}';
    </script>
    <script src="{{asset('/asset/js/register.js')}}"></script>
</body>
</html>
