<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Registrations</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <style>
        .c1 {
            background: #656176;
        }

        .c2 {
            background: #DECDF5;
        }

        .c3 {
            background: #534D56;
        }

        .c4 {
            background: #1B998B;
        }

        .c5 {
            background: #F8F1FF;
        }

        .c1t {
            color: #656176;
        }

        .c2t {
            color: #DECDF5;
        }

        .c3t {
            color: #534D56;
        }

        .c4t {
            color: #1B998B;
        }

        .c5t {
            color: #F8F1FF;
        }

        .pointer{
            cursor: pointer;
        }

        .badge {
            font-size: 0.6em;
            line-height: 1.9em;
            font-weight: 100;
            margin-right: 10px;
            min-width: 5em;
        }

        html, body {
            background: #F8F1FF;
            height: 100%;
            width: 100%;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Open Sans', Helvitica, Arial;
            font-size: 16px/26px;
        }

        .competition-list {
            height: 100%;
        }
        .competition-list .list {
            height: 100%;
            list-style: none;
            padding: 0;
            margin: 0;
            background: #656176;
            box-shadow: 0 0 15px rgba(101, 97, 118, 0.7);
            color: rgba(248, 241, 255, 0.8);
            overflow: auto;
        }
        .competition-list .list li {
            padding: 10px 2em 10px 2em;
            overflow: hidden;
            line-height: 2em;
            width: 15em;
            white-space: nowrap;
            text-overflow: ellipsis;
            cursor: pointer;
            transition: all 0.3s;
        }
        .competition-list .list li.header {
            font-weight: bold;
            color: rgba(248, 241, 255, 0.5);
            margin-bottom: 10px;
            border-bottom: 2px solid rgba(248, 241, 255, 0.5);
        }
        .competition-list .list li:hover{
            color: #f8f1ff;
            background: rgba(70, 67, 86, 0.5);
        }
        .competition-list .list li.active{
            color: #f8f1ff;
            background: #464356;
        }
        .competition-list .list li.header:hover{
            background: #656176;
            color: rgba(248, 241, 255, 0.5);
        }

        main .option-menu {
            background: #1B998B;
            padding: 10px;
        }
        main .option-menu .list-props .badge {
            background: rgba(83, 77, 86, 0.5);
        }
        main .option-menu .list-props .badge.active {
            background: #534D56;
        }
        main .option-menu .additional .badge {
            background: rgba(111, 95, 79, 0.5);
        }
        main .option-menu .additional .badge.active {
            background: #6f5f4f;
        }
        main .details {
            padding: 10px;
        }
        main .details .count i {
            margin-right: 1em;
        }
        main .details > .d-flex .badge {
            margin-right: 5px;
        }
        main .details select, main .details select option {
            background: transparent;
            border: none;
            color: tranparentize(#F8F1FF, 0.2);
            font-size: 0.5;
        }
        main .details select:active, main .details select:focus {
            outline: none;
        }
        main .main-container {
            overflow: auto;
        }
        .number-count,.number-count .badge{
            padding: 0 !important;
            text-align: left !important;
            overflow: hidden;
        }
        .number-count{
            margin-top:0.3em;
        }
        .number-count .counter{
            padding: 0.25em 0.4em !important;
            height:140%;
            width: 40%;
            display: inline-block;
            text-align: center;
        }
        .count-number{
            display: inline-block;
            text-align: center;
            width: 60%;
        }
    </style>
</head>
<body>
<div id="app1" class="d-flex h-100 w-100">
    <div class="competition-list">
        <ul class="list scrollbars" v-if="competitions!==[]">
            <li class="header">Competitions</li>
            <li v-for="competition in competitions" @click="changeCompetition(competition.id)" :id="'compi-'+competition.id" class="pointer competition-prop">@{{competition.name}}</li>
        </ul>
    </div>
    <main class="w-100 d-flex flex-column h-100">
        <div class="option-menu d-flex c5t w-100">
            <div class="d-flex mr-auto list-props">
                <div v-for="(i,x) in sendData" @click="sendDataMethod(x)" class="badge pointer" :class="['prop-'+x,i?'active':'']">@{{ x }}</div>
            </div>
            <div class="d-flex additional">
                <div class="badge secondary pointer details-toggle" :class="details?'active':''" @click="detailsShow()">Details</div>
                <div class="badge secondary pointer leader-toggle" :class="leader?'active':''" @click="leaderOnly()">Leader Only</div>
                <div class="badge bg-danger pointer" @click="resetStorage">Reset</div>
            </div>
        </div>
        <div class="details c2" v-if="details">
            <div class="d-flex">
                <div class="export count">
                    <i class="far fa-file-excel pointer" @click="exportToCSV"></i>
                </div>
                <div class="participants-count count">
                    <div class="badge badge-primary"> <i class="fa fa-user"></i><span>@{{detailProps.users}}</span></div>
                </div>
                <div class="team-count count">
                    <div class="badge badge-primary"> <i class="fa fa-users"> </i><span>@{{detailProps.teams}}</span></div>
                </div>
                <div class="count number-count" v-for="(v,x) in detailProps.counts">
                    <div class="badge badge-primary"><div class="counter bg-secondary">@{{ x }}</div> <div class="count-number">@{{ v }}</div></div>
                </div>
                <div class="male-count count">
                    <div class="badge badge-primary"><i class="fa fa-male"></i><span>@{{detailProps.male}}</span></div>
                </div>
                <div class="female-count count mr-auto">
                    <div class="badge badge-primary"><i class="fa fa-female"></i><span>@{{detailProps.female}}</span></div>
                </div>
                <div class="filter-zonal" v-if="event!==null && event.zonal===1"><strong>Filter Zonal:</strong>
                    <select id="zonal-option" v-model="zonal">
                        <option value="all" selected="selected">All</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Balnglore">Bangalore</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Bhopal">Bhopal</option>
                        <option value="Jaipur">Jaipur</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="main-container p-5 h-100" v-if="sortedUsers!==null">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th scope="row" v-for="(v,k) in sendData" v-if="v">@{{k}} <span class="float-right"><i class="fas fa-sort-numeric-down pointer" :class="sortBy===k?'text-warning':'text-white'" @click="sortByMethod(k)"></i></span></th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="user in sortedUsers">
                    <template v-for="(v,k) in sendData" >
                        <td scope="row" v-if="v && k==='id'" @click="console.log(user)">@{{'TF-'+('000000'+user['participant_id']).slice(-6)}}</td>
                        <td scope="row" v-else-if="v && k==='team_id'">@{{event.code+'-'+('000000'+user[k]).slice(-6)}}</td>
                        <td scope="row" v-else-if="v">@{{user[k]}}</td>
                    </template>
                </tr>
                </tbody>
            </table>
        </div>
    </main>
</div>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('asset/js/jquery.tabletoCSV.js')}}"></script>
<script>
    function Counter(array) {
        var count = {};
        array.forEach(val => count[val] = (count[val] || 0) + 1);
        return count;
    }
    let p = new Vue({
        el: '#app1',
        data:function(){
            return {
                competitions: [],
                users: null,
                sendData: {
                    id: true,
                    name: true,
                    phone: true,
                    email: true,
                    pin: false,
                    college: false,
                    address: false,
                    zonal: false,
                    gender: false,
                    team_id: false,
                    timestamp: false
                },
                zonal: 'all',
                hasZonal: false,
                event: null,
                sortBy:'id',
                sortedUsers: null,
                leader: false,
                details: false,
                detailProps: {
                    counts:null,
                    male: 0,
                    female: 0,
                    teams: 0,
                    users: 0
                }
            }
        },
        mounted: function(){
            if(localStorage.getItem('sendData')!==null)
                this.sendData = JSON.parse(localStorage.getItem('sendData'));
            if(localStorage.getItem('leaderOnly')!==null)
                this.leader = localStorage.getItem('leaderOnly')==='true';
            if(localStorage.getItem('detailsShow')!==null)
                this.details = localStorage.getItem('detailsShow')==='true';
            axios.get('{{route('admin.competitions.listGet')}}')
                .then(r=>{
                    this.competitions = r.data;
                    if(localStorage.getItem('zonal')!==null)
                        setTimeout(function(){
                            this.zonal = localStorage.getItem('zonal');
                            p.changeCompetition(localStorage.getItem('listItem'));
                        },100);
                    else if(localStorage.getItem('listItem')!==null)
                        setTimeout(function(){
                            p.changeCompetition(localStorage.getItem('listItem'));
                        },100);
                    });
        },
        methods: {
            resetStorage: function(){
                localStorage.clear();
                window.location.reload();
            },
            detailsShow: function(){
                this.details=!this.details;
                localStorage.setItem('detailsShow',this.details);
            },
            leaderOnly: function(){
                this.leader=!this.leader;
                localStorage.setItem('leaderOnly',this.leader);
                this.displayUsers();
            },
            sortByMethod: function(e){
                this.sortBy = e;
                this.displayUsers();
            },
            sendDataMethod :function(e){
                let prop = $('.prop-'+e);
                this.sendData[e]=!this.sendData[e];
                localStorage.setItem('sendData',JSON.stringify(this.sendData));
            },
            mountId:function(e,f){
                let k = {};
                for(x in e){
                    k[e[x][f]] = e[x];
                }
                return k;
            },
            updateDetails: function(){
                let u = this.users;
                let t = 0, c = 0, m = 0, f = 0;
                let q = [];
                for(a in u){
                    let b = u[a];
                    if(b.is_leader===1) {
                        t+=1;
                    }
                    q.push(b.team_id);
                    c+=1;
                    if(b.gender==='male') m+=1;
                    else if(b.gender==='female') f+=1;
                }
                let teams = [0,0,0,0,0,0,0];
                this.detailProps = {
                    counts:Counter(Object.values(Counter(q))),
                    users: c,
                    teams: t,
                    male: m,
                    female: f
                };
            },
            changeCompetition: function(e){
                this.hasZonal=false;
                $('.competition-prop').removeClass('active');
                $('#compi-'+e).addClass('active');
                localStorage.setItem('listItem',e);
                axios.post('{{route('api.admin.competitions.getDetailsPost')}}',{id:e})
                    .then(r=>{
                        let a = this.mountId(r.data.participants,'id');
                        let b = this.mountId(r.data.details,'participant_id');
                        this.users = Object.values($.extend(true, a, b)).filter(function(a){
                            return a.name!==undefined;
                        });
                        let z = this.zonal;
                        if(z!=='all'){
                            let temp = this.users.filter(function(e){
                                return e.zonal===z;
                            }).map(function(e){
                                return e.team_id;
                            });
                            this.users = this.users.filter(function(e){
                                return $.inArray(e.team_id,temp)!==-1;
                            })
                        }
                        this.event = r.data.event;
                        this.displayUsers();
                        this.updateDetails();
                    });
            },
            displayUsers: function(){
                let k = this.sortBy;
                this.sortedUsers =  this.users.sort(function(a,b){
                    let x = a[k].toString().toLowerCase();
                    let y = b[k].toString().toLowerCase();
                    return x.localeCompare(y);
                });
                if(this.leader){
                    this.sortedUsers = this.sortedUsers.filter(function(a){
                        return a.is_leader===1;
                    });
                }
                console.log(this.sortedUsers);

            },
            exportToCSV: function(){
                $('.table').tableToCSV();
            }
        },
        watch: {
            zonal: function(k){
                localStorage.setItem('zonal',k);
                this.changeCompetition(localStorage.getItem('listItem'));
            }
        }
    });

</script>
</body>
</html>