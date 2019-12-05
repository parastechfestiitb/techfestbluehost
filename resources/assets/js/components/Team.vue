<template>
    <main>
        <div class="team-page">
            <div v-for="(dept,key) in team" class="person" :class="dept[0]">
                <img src="https://techfest.org/2018/Team/hex.png" alt="" class="hexagon">
                <!--<img class="image-holder" :src="'https://techfest.org/2018/Team/'+key+'.jpg'" :alt="dept+'-image'" @click="teamSelect=key">-->
                <img class="image-glitch-2 nav-button" :src="'https://techfest.org/2018/Team/'+key+'.jpg'" :alt="dept[0]+'-image'" @click="teamSelect=key">
            </div>
            <div v-for="dept in team" class="dept-text" :class="dept[0]+'-text'" v-html="dept[1]"></div>
        </div>
        <div class="show-team" v-if="teamSelect" :class="teamSelect!==null?'active':''">
            <div class="show-back">
                <button class="btn back-button" @click="teamSelect = null">Back</button>
            </div>
            <div class="show-person d-flex justify-content-center h-100">
                <div v-for="person in team[teamSelect][2]" class="one-person text-center">
                    <template v-if="person.img==='Kala'">
                        <img :src="'https://techfest.org/2018/Team/'+person.img+'.jpg'" :alt="person.img">
                        <div class="name">{{person.name}}</div>
                        <div class="dest" v-html="team[teamSelect][1]"></div>
                        <div class="email"> <a :href="'mailto:'+person.email">{{person.email}}</a></div>
                    </template>
                    <template v-else>
                        <img :src="'https://techfest.org/2018/Team/'+person.img+'.jpg'" :alt="person.img">
                        <div class="name">{{person.name}}</div>
                        <template v-if="person.dept!==undefined">
                            <div class="dest" v-html="person.dept + ' Manager'"></div>
                        </template>
                        <template v-else>
                            <div class="dest" v-html="team[teamSelect][1] + ' Manager'"></div>
                        </template>
                        <div class="email"> <a :href="'mailto:'+person.email" >{{person.email}}</a></div>
                        <div class="phone"><a :href="'tel:'+person.phone">{{person.phone}}</a></div>
                    </template>
                </div>
            </div>
        </div>
        <v-footer></v-footer>
    </main>
</template>

<script>
    export default {
        name: "Team",
        data:function(){
            return {

                team: {
                    'infra': [
                        'infra',
                        'Infrastructure',
                        [
                            {

                                'name': 'Vaibhav Shinde',
                                'email': "vaibhav@techfest.org",
                                'phone': '+91 703 053 0275',
                                'img': 'rathi'
                            },
                            {

                                'name': 'Kushal Verma',
                                'email': "kushal@techfest.org",
                                'phone': '+91 908 240 1361',
                                'img': 'rathi'
                            }
                        ]

                    ],
                    'compi': [
                        'compi',
                        'Events',
                        [
                            {

                                'name': 'Abhinav Kumar',
                                'email': "abhinav@techfest.org",
                                'phone': '+91 829 954 4527',
                                'img': 'rathi'
                            },
                            {

                                'name': 'Abhyuday Chauhan',
                                'email': "abhyuday@techfest.org",
                                'phone': '+91 770 090 1981',
                                'img': 'rathi'
                            }
                        ]
                    ],
                    'exhi': [
                        'exhi',
                        'Events',
                        [
                            {

                                'name': 'Adamya Gupta',
                                'email': "adamya@techfest.org",
                                'phone': '+91 9833958399',
                                'img': 'rathi'
                            },
                            {

                                'name': 'Akshat Johri',
                                'email': "akshat@techfest.org",
                                'phone': '+91 9892897448',
                                'img': 'rathi'
                            }
                        ]

                    ],
                    'wnc': [
                        'wnc',
                        'Web & Creatives',
                        [
                            {
                                'dept': 'Creatives',
                                'name': 'Ansh Shah',
                                'email': "ansh.shah@techfest.org",
                                'phone': '+91 9664742683',
                                'img': 'rathi'
                            },
                            {
                                'dept': 'Web',
                                'name': 'Paras Jain',
                                'email': "paras@techfest.org",
                                'phone': '+91 7700901992',
                                'img': 'rathi'
                            }
                        ]

                    ],
                    'marki': [
                        'marki',
                        'Marketing',
                        [
                            {

                                'name': 'Pratik Phule',
                                'email': "pratik@techfest.org",
                                'phone': '+91 7038560585',
                                'img': 'rathi'
                            },
                            {

                                'name': 'Sahil Dixit',
                                'email': "sahildixit@techfest.org",
                                'phone': '+91 8433834838',
                                'img': 'rathi'
                            }
                        ]

                    ],
                    'media': [
                        'media',
                        'Media &nbsp;&nbsp;&nbsp;<br>& Publicity',
                        [
                            {

                                'name': 'Siddharth Maniar',
                                'email': "siddarth@techfest.org",
                                'phone': '+91 7045524155',
                                'img': 'rathi'
                            },
                            {

                                'name': 'Shreshth Geevith',
                                'email': "shreshth@techfest.org",
                                'phone': '+91 7506191721',
                                'img': 'rathi'
                            }
                        ]

                    ],
                    'hospi': [
                        'hospi',
                        'Hospitality<br>&amp; F&B&nbsp;&nbsp;&nbsp;',
                        [
                            {
                                'dest': 'Hospitality',
                                'name': 'Waqas Ahmad',
                                'email': "waqas@techfest.org",
                                'phone': '+91 8875713858',
                                'img': 'rathi'
                            },
                            {
                                'dest': 'Food and Beverage',
                                'name': 'Bhuvanesh Gupta',
                                'email': "bhuvnesh@techfest.org",
                                'phone': '+91 8949802814',
                                'img': 'rathi'
                            }
                        ]

                    ],
                    'ozone': [
                        'ozone',
                        'Events',
                        [
                            {

                                'name': 'Manjeet Singh',
                                'email': "manjeet@techfest.org",
                                'phone': '+91 7568387238',
                                'img': 'rathi'
                            },
                            {

                                'name': 'Naman Agarwal',
                                'email': "naman@techfest.org",
                                'phone': '+91 7700906731',
                                'img': 'rathi'
                            }
                        ]

                    ],
                    'techx': [
                        'techx',
                        'Events',
                        [
                            {

                                'name': 'Om Jaiswal',
                                'email': "omjaiswal@techfest.org",
                                'phone': '+91 7400400933',
                                'img': 'rathi'
                            },
                            {

                                'name': 'Prafull Gupta',
                                'email': "prafull@techfest.org",
                                'phone': '+91 7985743808',
                                'img': 'rathi'
                            }
                        ]

                    ],
                    'lectures': [
                        'lectures',
                        'Events',
                        [
                            {

                                'name': 'Prateek Mohanani',
                                'email': "prateek@techfest.org",
                                'phone': '+91 7045409458',
                                'img': 'rathi'
                            }
                        ]

                    ],
                    'ideate': [
                        'ideate',
                        'Ideate &amp;<br>Accounts',
                        [
                            {

                                'name': 'Vibhav Bhargava',
                                'email': "vibhav@techfest.org",
                                'phone': '+91 9827323969',
                                'img': 'rathi'
                            }
                        ]

                    ],
                    'robowars': [
                        'robowars',
                        'Events',
                        [
                            {

                                'name': 'Sachit Shanbhag',
                                'email': "sachit@techfest.org",
                                'phone': '+91 9967235914',
                                'img': 'rathi'
                            },
                            {

                                'name': 'Syed Muztaba Ali',
                                'email': "muztaba@techfest.org",
                                'phone': '+91 7980868943',
                                'img': 'rathi'
                            }
                        ]
                    ],
                    'Kala':[
                        'oc',
                        'Overall Coordinator',
                        [
                            {
                                'name': 'Himanshu Rathore',
                                'img':'himanshu',
                                'email':'rathore@techfest.org'
                            },
                            {
                                'name': 'Sahil Singh',
                                'img':'sahil',
                                'email':'sahil@techfest.org'
                            }
                        ]
                    ]
                },


                teamSelect: null
            }
        },
        methods:{
            showTeam: function(d){
                this.teamSelect = d;
                $('.show-team').addClass('active');
            }
        },
        components:{
            'v-footer': require('./Footer')
        },
        mounted:function(){
            $('.page-transition').animate({
                left:'-200vw'
            },500);
        }
    }
</script>

<style scoped>
    main{
        height: 100%;
        width: 100%;
        overflow:hidden;
        font-size: 0.8vw;
    }
    .team-page{
        width:100%;
        height:100%;
        transform:scale(1.2);
    }
    .person{
        text-align: center;
        position: absolute;
    }
    .oc {
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%) scale(1.5);
    }
    .infra{
        top: 59%;
        left: 40%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .hospi{
        top: 41%;
        left: 40%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .compi{
        top: 41%;
        left: 60%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .techx{
        top: 59%;
        left: 60%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .media{
        top: 50%;
        left: 32%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .exhi{
        top: 50%;
        left: 68%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .wnc{
        top: 68.5%;
        left: 32%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .lectures{
        top: 68%;
        left: 68%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .marki{
        top: 41.5%;
        left: 24%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .ozone{
        top: 59%;
        left: 76%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .robowars{
        top: 50%;
        left: 84%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .ideate{
        top: 50.7%;
        left: 16.2%;
        transform: translateX(-50%) translateY(-50%) scale(1.1)
    }
    .person svg{
        width: 9.21875vw;
    }
    .hexagon{
        fill:url('https://techfest.org/2018/Team/Kala.jpg');
        stroke: whitesmoke;
        width:8.9vw;
        filter: hue-rotate(190deg);
    }
    .image-holder,.image-glitch-1,.image-glitch-2{
        position: absolute;
        left: 0;
        top: 0;
        right: 0;
        margin: auto;
        width: 9.21875vw;
        z-index: -1;
        clip-path: polygon(6.77083333vw 0.520833333vw, 8.80208333vw 3.90625vw, 6.82291667vw 7.70833333vw, 2.1875vw 7.70833333vw, 0.5208333vw 3.85416667vw, 2.76041667vw 0.52083333vw);
    }
    .image-glitch-1{

    }
    .dept-text{
        position: absolute;
        color:white;
        font-size:1em;
        transform:translateX(-50%) translateY(-50%);
    }
    .infra-text{
        position:absolute;
        left: 39.9%;
        top: 68%;
    }
    .techx-text{
        position:absolute;
        left: 59.8%;
        top: 68%;
    }
    .oc-text{
        font-size:1.5em;
        left:50%;
        top: 64%;
        line-height: 1em;
        text-align: center;
    }
    .hospi-text{
        text-align: right;
        top: 35%;
        left: 35%;
    }
    .compi-text{
        text-align: left;
        top: 33%;
        left: 65.5%;
    }
    .exhi-text{
        top: 41.6%;
        left: 72.8%;
    }
    .wnc-text{
        top: 78%;
        left: 31.9%;
    }
    .lectures-text{
        left: 68%;
        top: 77%;
    }
    .media-text{
        left: 27%;
        top: 56%;
        text-align: right;
    }
    .robowars-text{
        left: 83.6%;
        top: 40%;
    }
    .ozone-text{
        left: 76%;
        top: 68%;
    }
    .marki-text{
        left: 19%;
        top: 33.2%;
    }
    .ideate-text{
        left: 16%;
        top: 60.7%;
        text-align: center;
        line-height: 1em;
    }
    .person:hover .image-glitch-2{
        z-index: 3;
        filter: sepia(100%);
    }
    .person:hover .hexagon{
        filter:invert(100%);
    }
    @keyframes opacityBubble {
        0%{
            opacity: 0;
        }
        50%{
            opacity: 100%;
        }
        100%{
            opacity: 0;
        }
    }
    .show-team{
        position:absolute;
        top:120vw;
        left:0;
        background: #000000;
        width: 100vw;
        height: 100vw;
    }
    .show-team.active{
        top:0;
    }
    .show-person{
        width: 100vw;
        margin-left: 0;
        margin-top: 8vw;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
    }
    .one-person img{
        border: 10px solid #00000077;
        width:30vw;
    }
    .show-back{
        position: relative;
    }
    .back-button{
        position: absolute;
        top: 70vh;
        left: 10vw;
        border: 2px solid white;
        background: transparent;
        color: white;
        padding: 1vw 3vw;
        font-size: 1vw;
        z-index: 10;
    }
    .name,.dest{
        font-size:1vw;
        color:white;
    }
    a{
        text-decoration: underline !important;
    }
</style>