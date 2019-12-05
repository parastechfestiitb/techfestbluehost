@extends('kannu.workshopLayer')

@section('title')

    Register| ESports

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
            width:100%;
            position: relative;
            /*left:30vw;*/
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
                /*top: 240px;*/
                font-size: 30px;

            }
        }
        @media (max-width: 62em)
        {
            #sub_heading{
                /*top: 110px;*/
            }
    </style>
@endsection
@section('content')

    <div style="width: 100%;height: 100%;padding-top:0.5em;margin-top:1em;">
        
        <!-- ==================for only one membered workshops========================= -->
        <div id="1member" style="display: block;margin-top:4em;overflow: scroll;">
            
            <div id="sub_heading" style="font-size: 1em">
            Register For GamersLeague
            </div>


            <!-- <div id="wrapper" class="container" style="overflow: scroll;"> -->
            <form id="form-work" class="" name="form-work" method="POST" action="/gamersleague/success" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>

                    <div class="form-group">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="control-label" for="team_id">Team Name - </label>
                            <input name="team_name" required class="form-control" type="text">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-2">
                            <label class="control-label" for="team_id">Upload team Icon Name</label>
                            <input type="file" name="image_file" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="control-label" for="team_id">Game Name - </label>
                            <select name="game_name" required class="form-control">
                                <option disabled selected>- Select -</option>
                                <option value="csgo">Counter Strike Global Offensive</option>
                                <option value="dota">Dota 2</option>
                            </select>
                        </div>
                    </div>

                {{--<div class="col-md-1"></div>--}}
                <!--  <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label" for="team_id">Team Icon-</label>
                            <input name="fname" required class="form-control" value="First Name" type="text">
                            <input type="hidden" name="team_members" class="form-control" value=1 >

                        </div>
                <div class="col-md-1"></div>
                </div> -->
                    <div class="col-md-12" style="padding: 15px;"></div>

                    <!-- <div class="form-group"></div> -->
                    <div class="col-md-12" style="padding: 15px;"></div>

                    <!-- team leader -->
                    <div class="col-md-12">

                        <div class="form-group">
                            <label class="control-label" style="font-size: 150%;">Team Captain Details -</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-1"></div>
                        <div class="col-md-4">
                            <label class="control-label" for="team_id">In-Game Alias -</label>
                            <input name="fname1" required class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>


                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label" for="team_id">Real name -</label>
                            <input name="name1" required class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-12"></div>
                    <div class="col-md-1"></div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label" for="team_id">Steam64 ID - get your steam64 id <a href="http://www.steam64.com/">here</a></label>
                            <input name="steam1" required class="form-control" type="number">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label" for="mobile">Email Address-</label>
                            <input name="email1" required class="form-control" type="email">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-12"></div>
                    <div class="col-md-1"></div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label class="control-label" for="team_id">Contact Number-</label>
                            <input name="mobile1" required class="form-control" type="text">
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-1"></div>
                    <div class="col-md-4">
                        <div class="form-group" style="opacity: 0">
                            <label class="control-label" for="team_id">Contact</label>
                            <input name="mobile654" required class="form-control" type="hidden">
                        </div>
                    </div>
                    <div class="col-md-1"></div>

                    <!-- <div class="col-md-1"></div>  -->
                    <!-- <div class="col-md-1"></div> -->


                    <div class="col-md-6"></div>
                    <div class="col-md-12" style="padding: 20px;"></div>
                    <!-- <div class="col-md-6"></div> -->
                    <!-- <br> -->

                    @for($i=2; $i<=5;$i++)
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="team_id" style="font-size: 150%;">Player {{$i}} Details -</label>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label" for="team_id">In-Game Alias -</label>
                                <input name="fname{{$i}}" required class="form-control" type="text">
                                <input type="hidden" name="team_members" class="form-control" value=1 >
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label" for="team_id">Real name -</label>
                                <input name="name{{$i}}" required class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-12"></div>

                        <div class="col-md-1"></div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label" for="team_id">Steam64 ID - get your steam64 id <a href="http://www.steam64.com/">here</a></label>
                                <input name="steam{{$i}}" required class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>

                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label" for="mobile">Email Address-</label>
                                <input name="email{{$i}}" required class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-md-1"></div>

                        <div class="col-md-12" style="padding: 20px;"></div>
                    @endfor

                    @for($i=6; $i<8;$i++)
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label" for="team_id" style="font-size: 150%;">Standin Player {{$i}} Details -</label>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label" for="team_id">In-Game Alias -</label>
                                <input name="fname{{$i}}"  class="form-control" type="text">
                                <input type="hidden" name="team_members" class="form-control" value=1 >

                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label" for="team_id">Real name -</label>
                                <input name="name{{$i}}"  class="form-control" type="text">

                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-12"></div>
                        <div class="col-md-1"></div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label" for="team_id">Steam64 ID - get your steam64 id <a href="http://www.steam64.com/">here</a></label>
                                <input name="steam{{$i}}"  class="form-control" type="number">
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-1"></div>
                        <div class="form-group">
                            <div class="col-md-4">
                                <label class="control-label" for="mobile">Email Address-</label>
                                <input name="email{{$i}}"  class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-12" style="padding: 20px;"></div>

                    @endfor


                    <div class="form-group" style="opacity: 0;">
                        <div class="col-md-12" style="margin-top: 10px;">
                            <div class="g-recaptcha" data-sitekey="6Ld5vTYUAAAAALVxcP3iV9aLNCf6oUwsKdj9FgY4"></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary btn-lg btn-block info">Register</button>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </fieldset>
            </form>
            <!-- </div> -->
        </div>
@endsection




