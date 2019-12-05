<!doctype html>
<html lang="en">
<head>
    <title>Techfest</title>
    <link rel="stylesheet" href="https://oss.maxcdn.com/semantic-ui/2.1.4/semantic.min.css">
    <style>
        form {
            margin: 100px;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align:left;
            padding: 8px;
        }

    </style>
</head>
<body>
<a href="https://techfest.org/penaltymail">CA uploads</a>
<a href="https://techfest.org/adminca">CA Events</a>
<a href="https://techfest.org/admins">CA Database</a>
<table>
    <tr>
        <th>Task</th>
        <th>Info</th>
        <th>End Date</th>
        <th>Points</th>
        <th>FB_Link</th>
        <th>Insta_Link</th>
    </tr>
    @foreach($all_events as $i)
        <tr>
            <th>{{$i->task}}</th>
            <th>{{$i->info}}</th>
            <th>{{$i->end_date}}</th>
            <th>{{$i->points}}</th>
            <th>{{$i->facebook_link}}</th>
            <th>{{$i->insta_link}}</th>

        </tr>
    @endforeach
</table>
@foreach($all_events as $i)
<div class="ui form">
    <form  method="POST" action="/adminca">
        {!! csrf_field() !!}
        <div class="field">
            <label>Task</label>
            <input name="task" type="text" placeholder="Task" value="{{$i->task}}">
        </div>
        <div class="field">
            <label>Info</label>
            <input name="info" type="text" placeholder="Info" value="{{$i->info}}">
        </div><div class="field">
            <label>End Date</label>
            <input name="end_date" type="text" placeholder="2019-12-31" value="{{$i->end_date}}">
        </div>
        <div class="field">
            <label>Points</label>
            <input name="points" type="text" placeholder="Points" value="{{$i->points}}">
        </div>
        <div class="field">
            <label>Facebook Link</label>
            <input name="facebook_link" type="text" placeholder="FB link" value="{{$i->facebook_link}}">
        </div>
        <div class="field">
            <label>Insta Link</label>
            <input name="insta_link" type="text" placeholder="Insta" value="{{$i->insta_link}}">
        </div>
        <div class="p-t-30">
            <button class="btn btn--radius btn--green" type="submit" name="reg-submit">Submit</button>
        </div>
    </form>
</div>

@endforeach



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
    $('form').form({
        on: 'blur',
        fields: {
            empty: {
                identifier: 'empty',
                rules: [{
                    type: 'empty',
                    prompt: 'Please enter a value'
                }]
            },
            dropdown: {
                identifier: 'dropdown',
                rules: [{
                    type: 'empty',
                    prompt: 'Please select a dropdown value'
                }]
            },
            checkbox: {
                identifier: 'checkbox',
                rules: [{
                    type: 'checked',
                    prompt: 'Please check the checkbox'
                }]
            }
        }
    });
</script>
</body>
</html>