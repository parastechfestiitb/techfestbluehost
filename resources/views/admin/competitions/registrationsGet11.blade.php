<!DOCTYPE html>
<html>
<head>
    <title>TF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>
    .competitions,.team-participants
    {
        display: inline-block;
    }
    .team-participants
    {
        float: right;
    }
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
    th {
        text-align: left;
    }
</style>
<body class="bg-secondary">
<div id="app1">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand mr-auto" href="#">Competitions Admin Portal</a>
            <div class="dropdown mr-5">
                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Select Compi
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#" v-for="competition in competitions" @click="compiChange(competition.name)">@{{competition.name}}</a>
                </div>
            </div>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active"  @click="type = 'team'">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Teams
                </label>
                <label class="btn btn-secondary" @click="type = 'participant'">
                    <input type="radio" name="options" id="option2" autocomplete="off"> Participants
                </label>
            </div>
        </div>
    </nav>
    <br><br>
    <div class="container-fluid">
        <table class="table table-dark ">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>No. of participants</th>
                <th>Pin Code</th>
                <th>College</th>
                <th>Phone</th>
                <th>Zonal</th>
            </tr>
            <tr v-for="(participant,key) in participants" v-if="participant!==null && participant.name!==null">
                <td>@{{teams[key].team_id}}</td>
                <td>@{{participant.name}}</td>
                <td>@{{participant.email}}</td>
                <td>@{{details[key]}}</td>
                <td>@{{participant.pin}}</td>
                <td>{{--@{{participant.college}}--}}</td>
                <td>@{{participant.phone}}</td>
                <td>@{{teams[key].zonal}}</td>
            </tr>
        </table>
    </div>
</div>
<script src="{{asset('/js/app.js')}}"></script>
<script type="text/javascript">
    let p = new Vue({
        el: '#app1',
        data: {
            message: 'abc',
            type: 'team',
            competitions:{!! $event !!},
            participants:null,
            teams: null,
            details:null
        },
        created:function () {

        },
        methods: {
            compiChange: function(e){
                axios.post('/api/admin/competitions/get-registrations',{
                    competition: e,
                    type: p.type
                }).then(function(r){
                    p.participants = r.data.participants;
                    p.teams = r.data.team;
                    p.details = r.data.details;
                })
            }
        }
    })
</script>
</body>
</html>