<template>
    <main>
        <div class="row text-center">
            <div class="col-12 col-sm-12">
                <div class="ourteam">OUR TEAM</div>
            </div>
            <br>
            <!--<div class="col-12 col-sm-12 mb-3">-->
                <!--<img src="https://techfest.org/2018/Team/Kala.jpg" alt="oc" class="oc picture">-->
                <!--<br>-->
                <!--<div class="name">-->
                    <!--Himanshu Kala-->
                <!--</div>-->
                <!--<div class="des">-->
                    <!--Overall Coordinator-->
                <!--</div>-->
                <!--<div class="email">-->
                    <!--<a href="mailto:himanshu@techfest.org">himanshu@techfest.org</a>-->
                <!--</div>-->
            <!--</div>-->
            <template v-for="t in team">
                <div class="col-6 col-sm-6 mb-3" v-for="person in t[2]">
                    <div>
                        <!--<img :src="'https://techfest.org/2018/Team/'+person.img+'.jpg'" class="picture" alt="picture">-->
                        <br>
                        <div class="name" v-html="person.name">
                        </div>
                        <div class="des" v-html="t[1]">
                        </div>
                        <div class="email">
                            <a :href="'mailto:'+person.email">{{person.email}}</a>
                        </div>
                        <div class="phone">
                            <a :href="'tel:'+person.phone">{{person.phone}}</a>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Team",
        data:function(){
            return{

                team: {
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
                    ],
                    'marki': [
                        'marki',
                        'Marketing Manager',
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
                    'infra': [
                        'infra',
                        'Infrastructure Manager',
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
                        'Events Manager',
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
                        'Events Manager',
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

                    'media': [
                        'media',
                        'Media &nbsp;&nbsp;&nbsp;<br>& Publicity Manager',
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
                        'Hospitality<br>&amp; F&B Manager &nbsp;&nbsp;&nbsp; Manager',
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
                        'Events Manager',
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
                        'Events Manager',
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
                        'Events Manager',
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
                        'Events Manager',
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

                },


            }
        }
    }
</script>

<style scoped>
    main
    {
        color: #fff;
        padding-top: 80px;
    }
    .picture
    {
        width: 80%;
        height: auto;
    }
    .oc
    {
        width: 60% !important;
    }
    a
    {
        font-size: 16px;
        text-decoration: none !important;
        color: white !important;

    }
    .ourteam
    {
        font-size: 30px;
        font-weight: bold;
        font-family: play;
    }
    .email{
        font-size:0.9em;
    }
</style>
