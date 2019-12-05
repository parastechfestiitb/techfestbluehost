@extends('kannu.workshopLayer')

@section('title')

    Accommodations | Techfest, IIT Bombay

@endsection

@section('style')
    <meta name="viewport" content="width=device-width, user-scalable=no">

    <style type="text/css">

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 24px;
        }

        .switch input {display:none;}

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }




    </style>

@endsection


@section('content')

   <!--  <label class="switch switch_type3" role="switch">
        <input type="checkbox" class="switch__toggle" checked>
        <span class="switch__label"></span>
    </label> -->

    <div class="container" style="padding-top: 50px;">
        <h2>Your Team </h2>
        <h4>(* Choose who need accomodation* )</h4>

        <form action="/acco/update" method="post">
            {{ csrf_field() }}
            <input type="text" name="compi" value="{{$compiName}}" readonly style="color: white;background-color: transparent;border:none;">
            <input type="hidden" value="{{$count}}" name="counts" />
            <input type="hidden" value="{{$team_id}}" name="team_id" />
            <input type ="hidden" value ="{{$session}}" name="session" />
            <table class="table">
                <thead>
                <tr>
                <!-- <th>{{$count}}</th> -->
                    <th>Participant No.</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th style="text-align: center;">Accomodation(Yes/No)</th>
                    <th>Tshirts(Y/N)</th>
                </tr>
                </thead>
                <tbody>
                @for ($i = 0; $i < $count; $i++)
                    <tr>
                        <td>
                            <label>{{$i}}</label> 
                            <!--<input type="number" readonly > -->

                        <input type="number" name="unique_id{{$i}}" value="{{$number[$i]}}" readonly style="display: none;"> 
                        
                        <input type="text" name="college{{$i}}" value="{{$college[$i]}}" readonly style="display: none;">
                        
                         <input type="text" name="email{{$i}}" value="{{$email[$i]}}" readonly style="display: none;">
                         
                          <input type="text" name="phone{{$i}}" value="{{$phone[$i]}}" readonly style="display: none;">
                          
                         
                        </td>
                        <td>
                        <!-- <label>{{$name[$i]}}</label> -->
                            <input type="text" name="name{{$i}}" value="{{$name[$i]}}" readonly style="color: white;background-color: transparent;border:none;">
                        </td>
                        <td>
                            <select name="gender{{$i}}" style="color: black;" required >
                                <option value="">Choose</option>
                                <option value="MALE">MALE</option>
                                <option value="FEMALE">FEMALE</option>
                            </select>
                        </td>
                        
                        <td style="text-align: center;">
                            <label class="switch">
                                <input type="checkbox" name="acco_check{{$i}}" data-toggle="toggle">
                                <span class="slider"></span>
                            </label>
                        </td>
                        
                        <td>
                            <select name="tshirt{{$i}}" style="color: black;">
                                <option value="none">None</option>
                               <!--  <option value="small">Small</option>
                                <option value="medium">Medium</option>
                                <option value="large">Large</option>
                                <option value="X large">X Large</option> -->
                            </select>
                        </td>
                        
                    </tr>
@endfor
                </tbody>
            </table>
            <button type="submit" class="btn btn-default" name="submit">Submit</button>
        </form>
        
        
        <div style="margin-top:10vh;">
            <p>Accomodation Fee : INR 2,100 (Inclusive of INR 100 caution money)</p>
            <p>Price of T-shirt : INR 350 </p>
        </div>
    </div>
@endsection




