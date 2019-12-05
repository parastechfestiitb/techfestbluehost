<!doctype html>
<html lang="en" style="font-family: sans-serif;height: 100%;width: 100%;background: rgba(200,200,200,0.2);">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrations Completed</title>
</head>
<body style="font-family: sans-serif;height: 100%;width: 100%;background: rgba(200,200,200,0.2);padding-top: 30px">
@if(!isset($participant,$event,$teamId))
    There was some error in the message, plese send me this message @ <a href="mailto:vaibhaw@techfest.org">vaibhaw@techfest.org</a>
@else
    <div class="container-720" style="  max-width: 720px;margin: auto;background: #fff;">
        <div class="heading" style="background: #5cb85c;display:flex; align-items: center;justify-content: space-between;margin-left:-20px;margin-right: -20px;box-shadow: 0 5px 10px -5px green;padding-left: 30px;padding-right:30px;">
            <h1 style="line-height: 50px;padding-left: 10px;color:white">Registration Successful</h1>
            <img src="https://techfest.org/2018/logo-main.png" alt="" style="height: 50px;">
        </div>
        <main style="padding: 10px;">
            <p>Hello {{$participant->name}},</p>
            <p>
                You have successfully registered for <b>{{$event->name}}.</b><br> Your team id is
            <h3 style="margin-left: 50px"><b>{{$event->code}}-{{substr('000000'.$teamId,-6)}}</b></h3>
            </p>

            <p>
                <i>
                    Kindly note that your registration is not yet complete.
                    To confirm your seat during Workshop, you need to do the payment of the workshop.
                    We urge you to pay as soon as possbile as payment (hence workshop registraion) will close after the seats are filled.
                </i>
            </p>
            <p>
                To pay for the workshop, click on the &ldquo;pay now&rdquo; button below.
            </p>
            <p>
                <a href="https://techfest.org/payment/direct/{{$teamId}}" target="_blank" style="background: #f77b00;text-decoration: none;color: white;font-weight: 700;padding: 20px;min-width: 220px;display: inline-block;text-align: center;border-radius: 8px;box-shadow: 0 5px 5px -3px rgba(247, 123, 0, 0.6588235294117647);font-size: 1.4em;">
                    Pay Now
                </a>
            </p>
            <p>By paying for workshop you will also become eligible for availing the accommodation during Techfest.Once the payment is done, <a href="https://techfest.org/accommodation">click here</a> to register for accommodation.</p>
        </main>
        <footer style="padding:20px 10px 20px 10px;font-size: 0.9em;border-top:2px double #1f3f1f;">
            <p>
                If you have any querries related to workshops, feel free to contact me at <a href="mailto:{{$event->contact}}">{{$event->contact}}</a>
            </p>
            <p>
                <i>
                    For more information related to techfest, you can visit our website <a href="https://techfest.org">https://techfest.org</a> <br>
                    For latest updates, you can follow us at our social media platforms: <a href="https://www.facebook.com/iitbombaytechfest/">Facebook</a>,<a href="https://twitter.com/Techfest_IITB/">Twitter</a>, <a href="https://www.instagram.com/techfest_iitbombay/">Instagram</a>
                </i>
            </p>
        </footer>
    </div>
@endif
</body>
</html>

