@extends('kannu.workshopLayer')

@section('title')

    Successful | Esport

@endsection

@section('content')
    <div class="contain" style="padding-top:10vh;font-size:2em;">
        Registration Successfull, Email has been sent to you. <br>
        Your Team Id is : {{$unique or "Unsuccessfull Registeration, please retry"}}<br>
        <br>
        Redirecting to homepage.
    </div>

    <script>
        setTimeout(function(){
            window.location.href = 'https://techfest.org/gamersleague';
        },5000);
    </script>
@endsection