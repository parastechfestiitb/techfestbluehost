<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin Portal | Techfest 2018</title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html, body {
            height: 100%;
            width: 100%;
        }
        * {
            transition: all 50ms;
        }
        *::-webkit-scrollbar {
            display: none;
        }

        .o-auto {
            overflow: auto;
        }

        .pointer {
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            cursor: pointer;
        }

        .sidenav {
            min-width: 30px;
            border-right: 5px double black;
        }
        .sidenav .tables {
            transition: all 50ms;
        }
        .sidenav .tables:hover {
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 -5px 15px rgba(0, 0, 0, 0.2);
        }
        .sidenav .name {
            display: none;
        }
        .sidenav.active {
            min-width: 10%;
        }
        .sidenav.active .name {
            display: block;
        }
        .database{
            overflow:auto;
        }
        .ellipsis{
            overflow: hidden;
            white-space: nowrap;
            -ms-text-overflow: ellipsis;
            text-overflow: ellipsis;
        }
        .border-2{
            border: 5px double black;
        }
        td{
            min-width: 10vw;
            overflow:hidden;
            -ms-text-overflow: ellipsis;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        .bobn{border-bottom:none;}
        .botn{border-top:none;}
        .boln{border-left:none;}
        .born{border-right:none;}
        @keyframes rotate {
            0%{
                transform: rotate(0deg);
                color: #ffad2d;
            }
            50%{
                color: #ff2942;
            }
            100%{
                transform: rotate(360deg);
                color: #ffad2d;
            }
        }
        .spinner{
            animation-name: rotate;
            animation-duration: 1s;
            animation-iteration-count: infinite;
            animation-timing-function: ease-in-out;
        }
        .noselect{
            user-select: none;
        }
    </style>
</head>
<body>
<main class="w-100 h-100 d-flex flex-column" id="app1">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="https://techfest.org/">Techfest 2018 Test</a>
        <div class="divider mr-auto"> </div>
    </nav>
    <div class="d-flex w-100 o-auto">
        <div class="sidenav h-100 o-auto o-bottom" :class="{active:mainActive}">
            <div class="d-flex p-2 pointer tables bg-light" @click="mainActive=!mainActive">
                <div><i class="fa" :class="mainActive?'fa-arrow-left':'fa-arrow-right'"></i></div>
                <div class="pl-2 hide name"><span>Collapse</span></div>
            </div>
            <div class="d-flex p-2 pointer tables" v-for="table in mainList" @click="table.func">
                <div><i class="fa" :class="'fa-'+table.icon"></i></div>
                <div class="pl-2 hide name"><span>@{{table.name}}</span></div>
            </div>
        </div>
        <div class="sidenav active h-100 o-auto o-bottom" v-if="tables.data.length!==0">
            <div class="d-flex p-2 pointer tables" v-for="table in tables.data" @click="currentFunction(table.name)">
                <div><i class="fa" :class="tables.icon"></i></div>
                <div class="pl-2 hide name ellipsis" :title="titleCase(table.name)"><span>@{{titleCase(table.name)}}</span></div>
            </div>
        </div>
        <div class="main-container w-100 h-100 o-auto">
            <div class="db-view w-100 h-100 d-flex flex-column">
                <header class="p-2 border-2 botn born boln d-flex align-items-center">
                    <div class="table-entries">
                        <div class="badge m-1 pointer badge-secondary" v-for="column in columns" :class="activeColumns.includes(column)?'badge-success':'badge-secondary'" @click="columnToggle(column)">@{{column}}</div>
                    </div>
                    <div class="divider mr-auto"></div>
                    <div class="loader mr-2" v-if="spinner">
                        <i class="fa fa-spinner fa-2x spinner"></i>
                    </div>
                    <div class="search">
                        <input type="text" v-model="searchInput" class="p-2" placeholder="Search...">
                    </div>
                </header>
                <div class="database w-100 h-100">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr class="bg-secondary text-white">
                            <th scope="col" v-for="col in activeColumns">@{{ col }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="d in information">
                            <td v-for="col in d" class="ellipsis noselect" :data-id="d.id" :data-toggle="false" v-on:dblclick="editContent(d)">@{{ col }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <footer class="border-2 bobn boln born">
                    <div class="d-flex w-100 p-1 align-items-center">
                        <div class="export-container">
                            <button class="btn btn-sm btn-outline-dark" onclick="exportTable()">Export</button>
                        </div>
                        <div class="export-container">
                            <div class="btn bgn-sm btn-outline-secondary ml-2">@{{ tableCount }}</div>
                        </div>
                        <div class="divider mr-auto"></div>
                        <div class="count-container mr-2">
                            <select class="input-group-text" v-model="totalCount">
                                <option value="10" selected>10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="999999999">All</option>
                            </select>
                        </div>
                        <div class="page-container p-2">
                            <ul class="pagination">
                                <li class="page-item" >
                                    <div class="page-link" href="#" aria-label="Previous" @click="prevPage">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </div>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">@{{ currentIndex }}</a></li>
                                <li class="page-item" >
                                    <div class="page-link" href="#" aria-label="Next" @click="nextPage" >
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</main>
<script src="{{asset('/js/app.js')}}"></script>
<script src="{{asset('asset/js/jquery.tabletoCSV.js')}}"></script>
<script>
    let app = new Vue({
        el: '#app1',
        data: function(){
            return {
                spinner: true,
                mainActive: false,
                mainList: [
                    {
                        icon:'database',
                        name:'Database',
                        func: this.database
                    },
                    {
                        icon:'clipboard',
                        name:'Form',
                        func: this.formTable
                    },
                    {
                        icon: 'sticky-note',
                        name: 'Notes',
                        func: 'note'
                    },
                    {
                        icon: 'envelope',
                        name: 'Mails',
                        func: 'mail'
                    },
                    @if($user->id!==43)
                    {
                        icon: 'users',
                        name: 'Payments',
                        func: this.payment
                    },
                    @endif
                    {
                        icon: 'cogs',
                        name: 'Robowars',
                        func: this.robowars
                    },
                    @if($user->id===1 || $user->id===30 || $user->id===22 || $user->id===10)
                    {
                        icon: 'home',
                        name: 'Accommodation',
                        func: this.accommodation
                    },
                    @endif
                    {
                        icon: 'trophy',
                        name: 'Competition',
                        func: this.competition
                    },
                ],
                currentFunction: this.eventTable,
                tables: {
                    icon:'fa-database',
                    data:[]
                },
                admins: {46:10,47:41,48:11,49:19,50:4,51:1,52:5,53:12,54:21,55:9,56:26,57:25,58:6,59:53,60:24,62:15,68:53,69:18,9:55,70:8,74:53,75:13,76:20,77:20,78:20},
                currentAdmin: {{$user->id}},
                columns: [],
                activeColumns:[],
                data: {},
                information: {},
                searchInput: null,
                currentIndex: 1,
                totalCount: 999999999,
                tableCount: 0,
            }
        },
        components:{
            dashboard:"./Components/Database"
        },
        created: function(){
            axios.get('https://techfest.org/api/workshop')
                .then(r=>{
                    this.tables.data = r.data;
                    this.st(false);
                    this.formTable();
                });
            let t = this;
            $(document).keyup(function(e){
                if(e.keyCode===39) t.nextPage();
                else if(e.keyCode===37) t.prevPage();
            })
        },
        mounted:function(){
        },
        methods: {
            st: function(k = true){
                this.spinner=k;
            },
            titleCase: function(str){
                return str.replace('_',' ').replace(
                    /\w\S*/g,
                    function(txt) {
                        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                    }
                );
            },
            database: function(){
                this.spinner = true;
                axios.post('https://techfest.org/api/admin/database')
                    .then(r=>{
                        this.tables.data = r.data;
                        this.spinner = false;
                        this.currentFunction = this.dbTable;
                    });
            },
            dbTable: function(e){
                this.st();
                axios.post('https://techfest.org/api/admin/database/table',{table: e})
                    .then(r=>{
                        this.columns = [];
                        this.currentIndex = 1;
                        this.columns = r.data.columns;
                        this.activeColumns = this.columns.slice(0);
                        this.data = r.data.data;
                    })
            },
            formTable: function(e){
                this.spinner = true;
                axios.get('https://techfest.org/api/admin/database/event')
                    .then(r=>{
                        this.tables.data = r.data;
                        this.currentFunction = this.eventTable;
                        this.st(false);
                    });
            },
            eventTable: function(e){
                this.st();
                axios.post  ('https://techfest.org/api/admin/database/event',{event:e})
                    .then(r=>{
                        let p = 1;
                        let e = [],d = r.data;
                        let k = this.admins[d[0].id] === this.currentAdmin;
                        this.columns = ['Count','Team Id','Participant Id','Name','Email','Phone','Payment Status','College','Pin','Address','Country','DOB','Gender','Leader'];
                        this.activeColumns = ['Count','Team Id','Participant Id','Name','Email','Phone','Payment Status','College','Pin','Address','Country','DOB','Gender','Leader'];
                        let c = this.currentAdmin;
                        d.forEach(x=>{
                            x.participants.forEach(y=>{
                                if(c===1 || c===5 || c=== 30 || c===22 || c===10 || 1) {
                                    e.push({
                                        'Count':p,
                                        'Team Id':x.code+'-'+x.team.id,
                                        'Participant Id':'TF-'+y.id,
                                        'Name':y.name,
                                        'Email':y.email,
                                        'Phone':y.phone,
                                        'Payment Status':(x.team.ticket_id)?'Paid':'Not Yet',
                                        'College':y.college,
                                        'Pin':y.pin,
                                        'Address':y.address,
                                        'Country':y.country,
                                        'DOB':y.dob,
                                        'Gender':y.gender,
                                        'Leader':x.participants[0].email===y.email?'Leader':'Member'
                                    });
                                }
                                else{
                                    e.push({
                                        'Count':p,
                                        'Team Id':x.code+'-'+x.team.id,
                                        'Participant Id':'TF-'+y.id,
                                        'Name':y.name,
                                        'Email':y.email,
                                        'Phone':y.phone,
                                        'Payment Status':'You can not see',
                                        'College':y.college,
                                        'Pin':y.pin,
                                        'Address':y.address,
                                        'Country':y.country,
                                        'DOB':y.dob,
                                        'Gender':y.gender,
                                        'Leader':x.participants[0].email===y.email?'Leader':'Member'
                                    });
                                }
                                p+=1;
                            });
                        });
                        this.data = e;
                        this.filteredData();
                    });
            },
            columnToggle: function(e){
                if(this.activeColumns.includes(e)) this.activeColumns.splice(this.activeColumns.indexOf(e),1);
                else this.activeColumns.splice(this.columns.indexOf(e),0,e);
                this.filteredData();
            },
            filteredData: function(){
                let s = this.searchInput;
                let d = this.data;
                let active = this.activeColumns;
                d = d.map((a,b)=>{
                    return Object.entries(a).filter(b=>{
                        return active.indexOf(b[0])!==-1;
                    }).map(c=>c[1]);
                });
                if(s!==null) {
                    d = d.filter(a=> a.some(b=> (b+'').toLowerCase().includes((s+'').toLowerCase())));
                }
                let tc = this.totalCount;
                start = this.currentIndex*tc;
                d = d.slice(start-tc,start);
                this.information = d.sort((a,b)=>{
                    console.log(a[3],b[3],a[3]<b[3]);
                    return a[3]<b[3]
                });
                this.tableCount = this.information.length;
                this.st(false);
            },
            prevPage:function(){
                if(this.currentIndex===1) return false;
                else this.currentIndex-=1;
            },
            nextPage: function(){
                if(this.data.length<this.totalCount*this.currentIndex) return false;
                else this.currentIndex+=1;
            },
            editContent: function(e){
                console.log(e);
                console.log($('[data-id="' + e + '"]'));
            },
            payment: function(){
                this.st();
                axios.get('https://techfest.org/api/admin/database/payment')
                    .then(r=>{
                        this.tables.data = [];
                        let c = this.currentAdmin;
                        if(c === 1 || c === 5 || c === 30 || c === 22 || c === 10 || 1){
                            this.columns = [
                                'name',
                                'count',
                                'payment',
                                'category'
                            ];
                            this.activeColumns = [
                                'name',
                                'count',
                                'payment',
                                'category'];
                        }
                        else {
                            this.columns = [
                                'name',
                                'count',
                                'category'
                            ];
                            this.activeColumns = [
                                'name',
                                'count',
                                'category'
                            ];
                        }

                        this.data = Object.values(r.data.data).filter(k=>{
                            return k.category==='Workshop' || k.category==='Workshop1' || k.category==='Competition';
                        });
                        this.st(false);
                    });
            },
            competition: function(){
                window.open('https://techfest.org/admin/competitions/registrations');
            },
            sorted: function(e){

            },
            robowars: function(){
                this.st();
                axios.get('https://techfest.org/api/admin/database/robowars')
                    .then(r=>{
                        this.tables.data = [];
                        this.columns = ['name','email','phone','address','leader','pin','tName'];
                        this.activeColumns = ['name','email','phone','address','leader','pin','tName'];
                        let l = r.data.data, d = [];
                        for(let m in l){
                            let x = l[m].participants;
                            for(let n in x){
                                let y = x[n];
                                let p = {};
                                p.name = y.name;
                                p.email = y.email;
                                p.phone = y.phone;
                                p.address = y.address;
                                p.leader = y.is_leader===1?'leader':'member';
                                p.pin = y.pin;
                                p.tName = l[m].tname;
                                d.push(p);
                            }
                        }
                        this.data = d;
                        this.st(false);
                    });
            },
            accommodation: function(){
                this.st();
                axios.get('https://techfest.org/api/admin/database/accommodation')
                    .then(r=>{
                        this.tables.data = [];
                        this.columns = r.data.columns;
                        this.activeColumns = r.data.columns;
                        this.data = r.data.data;
                    })
            }
        },

        watch: {
            data:function(){
                this.currentIndex = 1;
                this.searchInput=null;
                this.filteredData();
            },
            searchInput: function(){
                this.filteredData();
            },
            totalCount: function(){
                this.filteredData();
            },
            currentIndex: function(){
                this.filteredData();
            }
        }
    });

    let exportTable= function(){
        $('.table').tableToCSV();
    }
</script>
</body>
</html>