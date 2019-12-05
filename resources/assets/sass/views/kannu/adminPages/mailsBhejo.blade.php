<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Mailer</title>
    <link rel="stylesheet" href="{{asset('public/css/m.css')}}">
    <script src="{{asset('public/js/j.js')}}"></script>
    {{--<script src="//code.jquery.com/jquery-2.2.4.min.js"></script>--}}
    <script src="{{asset('public/js/m.js')}}"></script>
    <script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
</head>
<body>

<form action="{{route('bapMailer')}}" method="POST" style="width:800px;margin:auto">
    {{csrf_field()}}
    <div class="row">
        <div class="col s6 input-field">
            <input id="password" type="password" class="validate" autofocus required name="password">
            <label for="password">Password</label>
        </div>
        <div class="col s6 input-field">
            <input id="emailForm" type="text" class="validate" required name="emailFrom">
            <label for="emailForm">Email From</label>
        </div>
        <div class="input-field col s6">
            <input id="name" type="text" class="validate" name="subject">
            <label for="name">Subject</label>
        </div>
        <div class="input-field col s6">
            <input id="nameOfSender" type="text" class="validate" name="nameOfSender">
            <label for="nameOfSender">Name Of Sender</label>
        </div>
        <div class="col s12">
            <label ><textarea name="message" id="message"></textarea></label>
        </div>
        <div class="input-field col s12">
            <textarea id="emails" class="materialize-textarea" name="emails"></textarea>
            <label for="emails">Emails</label>
        </div>
        <div class="col s12">

            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                send
            </button>
        </div>

    </div>
</form>
<script>
    $('#textarea1').val('New Text');
    $('#textarea1').trigger('autoresize');
    CKEDITOR.replace( 'message' );

</script>
</body>
</html>