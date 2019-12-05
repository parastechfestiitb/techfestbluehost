<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Attendance</title>
    <link rel="stylesheet" href="https://techfest.org/css/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html,body,#app1{
            height: 100%;
            width: 100%;
        }
        .wrapper{
            width: 70%;
            margin: 20px auto auto;
        }
        @media(max-width:992px){
            .wrapper{
                width:100%;
            }
        }
        .panel{
            border:2px solid black;
            border-bottom:2px solid transparent;
        }
        .panel:last-child{
            border-bottom: 2px solid black;
        }
        .pointer{
            cursor:pointer;
        }
        .panel-heading {
            padding: 0;
            border:0;
        }
        .panel-title>a, .panel-title>a:active{
            display:block;
            padding:15px;
            color:#555;
            font-size:16px;
            font-weight:bold;
            text-transform:uppercase;
            letter-spacing:1px;
            word-spacing:3px;
            text-decoration:none;
        }
        .panel-heading  a:before {
            font-family: 'Glyphicons Halflings', serif;
            content: "\e114";
            float: right;
            transition: all 0.5s;
        }
        .panel-heading.active a:before {
            -webkit-transform: rotate(180deg);
            -moz-transform: rotate(180deg);
            transform: rotate(180deg);
        }
    </style>
</head>
<body>
<div id="app1">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Techfest Details Access</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control mr-sm-2" v-model="searchContent" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info my-2 my-sm-0" type="submit" @click="search">Search</button>
    </nav>
    <main class="w-100">
        <div class="wrapper center-block">
            <div class="panel-group" id="accordion">
                <div class="panel panel-secondary" v-for="(event,key) in events">
                    <div class="panel-heading active" role="tab" id="headingOne">
                        <h4 class="panel-title">
                            <a role="button" data-toggle="collapse" data-parent="#accordion" :href="'#collapse'+key" aria-expanded="true" :aria-controls="'#collapse'+key">
                                @{{ event.name }} <span class="text-primary">(@{{ event.code }}-@{{  event.team.id }})</span>
                            </a>
                        </h4>
                    </div>
                    <div :id="'collapse'+key" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body container">
                            <table class="table">
                                <tbody>
                                <tr v-for="participant in event.participants">
                                    <th scope="row">TF-@{{('000000'+participant.id).slice(-6)}}</th>
                                    <td>@{{participant.name}}</td>
                                    <td>@{{participant.email}}</td>
                                    <td>@{{participant.phone}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <table class="table ">
            <tbody>
            <tr v-for="participant in participants" class="pointer" @click="participantSearch(participant.id)">
                <th scope="row">TF-@{{('000000'+participant.id).slice(-6)}}</th>
                <td>@{{participant.name}}</td>
                <td>@{{participant.email}}</td>
                <td>@{{participant.phone}}</td>
            </tr>
            </tbody>
        </table>
    </main>
</div>
<script src="https://techfest.org/js/app.js"></script>
<script>
    let app = new Vue({
        el: '#app1',
        data: function(){
          return {
              searchContent: null,
              events: [],
              participants: []
          }
        },
        methods: {
            isEmail: function(email){
                let re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                return re.test(String(email).toLowerCase());
            },
            isMobile: function(number){
                let no = number.replace(/\s/g,'').replace('+91','');
                return no == parseInt(no);
            },
            isTechfestId: function(id){
                return id.indexOf("TF")!==-1;
            },
            isTeamId: function(id){
                let re = /[a-zA-Z]{2}[-]?[0-9]{6}$/;
                return re.test(id);
            },
            search: function(){
                let data = this.searchContent, type = 'name';
                if( this.isEmail(data)) type = 'email';
                else if(this.isMobile(data)) type = 'phone';
                else if(this.isTechfestId(data)) type = 'id';
                else if(this.isTeamId(data)) type = 'teamId';
                axios.post('https://techfest.org/api/admin/get-details',{data,type})
                    .then(r=>{
                        if(r.data.nonAll===true){
                            this.events = [];
                            this.participants = r.data.participants;
                        }
                        else{
                            this.participants =[];
                            this.events = r.data;
                        }
                        console.log(r.data);
                    });
            },
            participantSearch: function(e){
                this.searchContent = 'TF'+('000000'+e).slice(-6);
                this.search();
            }
        }
    });
    $('.panel-collapse').on('show.bs.collapse', function () {
        $(this).siblings('.panel-heading').addClass('active');
    });

    $('.panel-collapse').on('hide.bs.collapse', function () {
        $(this).siblings('.panel-heading').removeClass('active');
    });
</script>
</body>
</html>