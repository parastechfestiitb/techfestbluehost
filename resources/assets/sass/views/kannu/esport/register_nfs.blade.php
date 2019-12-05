@extends('kannu.workshopLayer')

@section('title')

    Register| Workshop

@endsection

@section('style')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <style type="text/css">
        h1, h2, h3, h4, h5, h6 {
            font-weight: 300;
        }
        #sub_heading{
            font-size: 2vw;
            font-family: 'pirulen', serif;
            color: white;
            top: 19%;
            width:40vw;
            position: fixed;
            left:30vw;
            text-align: center;
        }
        #sub_heading:not(:-moz-handler-blocked){
            position: relative;
            transform: translate(-22.3%, 0px);
        }
        p {
            color: #999;
        }

        strong {
            color: #333;
        }

        #wrapper {
            height: 82%;
            width: 100%;
            max-width: 700px;
            margin: 15px auto;
            text-align: center;
            /*padding: 30px 0;*/
        }
        .team_leader{
            margin-top: 10px;
        }
        .page-head-image img {
            border-radius: 50%;
        }

        label {
            font-weight: normal;
            margin-top: 15px;
        }

        input {
            border: 2px solid #CCC !important;
            height: 35px;
            border-radius: 3px;
            max-width: 100%;
        }

        .btn {
            border: 0;
            border-radius: 3px;
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 0;
            text-align: left;
        }
        @media only screen and (orientation: portrait)  {

            #sub_heading{
                top: 240px;
                font-size: 30px;

            }
        }
        @media (max-width: 62em)
        {
            #sub_heading{
                top: 110px;
            }
    </style>
@endsection
@section('content')
    <div style="width: 100%;height: 100%;padding-top:2em;margin-top:4em;">
        <div id="sub_heading" style="font-size: 1em">
            Register For Esports
        </div>
        <div id="1member" style="display: block;margin-top:4em;overflow: scroll;">
            <!-- <div id="wrapper" class="container" style="overflow: scroll;"> -->
            <form id="form-work" class="" name="form-work" method="POST" action="/nfs" >
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="control-label" >Name</label>
                            <input name="fname" required class="form-control" type="name">
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label" for="city">email</label>
                            <input name="email" required class="form-control" type="email">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-12"></div>
                    <div class="col-md-1"></div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label">City</label>
                            <input name="city" required class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label" for="mobile">Country</label>
                            <input name="country" required class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-12"></div>

                    <div class="col-md-1"></div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label" for="team_id">Contact Number</label>
                            <input name="phone" required class="form-control" type="number">
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="team_id">Address</label>
                            <input name="address" required class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-12"></div>
                    <div class="col-md-1"></div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label" for="team_id">Pincode</label>
                            <input name="pincode" required class="form-control" type="number">
                        </div>
                    </div>
                    <div class="col-md-12"></div>
                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block info">Register</button>
                        </div>
                        <div class="col-md-4"></div>
                </fieldset>
            </form>
            <!-- </div> -->
        </div>
@endsection




