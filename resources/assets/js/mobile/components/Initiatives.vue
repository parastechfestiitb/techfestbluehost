<template>
    <main>
        <div class="navigation play">
            <div class="title">Initiatives</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>><span>Initiatives</span></div>
        </div>
        <div class="description description-top">
            <div class="image-gallery" v-if="competitions.images[0].length!==0">
                <img :src="competitions.images[0][ind]" alt="Loading Image">
            </div>
            <div class="content" v-html="competitions.about"></div>
        </div>
        <div class="navigation-group">
            <div class="nav-tab" v-for="(competition,key) in competitions.content" :class="'compi-'+key">
                <div class="name d-flex justify-content-between"  @click="compiActivate(key)" >
                    <div class="name-text">{{key}}</div>
                    <div class="is-zonal" v-if="competition.zonal===1">ZONAL</div>
                </div>
                <div class="description" v-if="activeCompi===key">
                    <div class="desc" v-html="competition">
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Exhibitions",
        data: function(){
            return{
                competitions: {
                    about:'<span class="quote">&ldquo;They always say time changes things, but you actually have to change them yourself.&rdquo;</span><br><br>We at Techfest have always believed in such ideas and strive to give the world that small nudge which will set the gears of change in motion on a magnanimous scale. We unite volunteers, organizations and leaders to innovate, strategize, and execute measures that would touch a million lives and inspire a sense of responsibility towards the world at large.',
                    content: {
                        'SPEAK':'&ldquo;In the end, its the life in your years that matters, and not the years in your life.&rdquo;<div><br></div><div>With an aim of spreading the message of positive mental health, Techfest, IIT Bombay has launched the SPEAK: Stand to express Initiative. Studies show that almost 65% of Indian youth display symptoms which require attention at the grass root level. It all boils down to the fact that people never open up and speak freely about their problems. By bringing together experienced volunteers and students in around 50 colleges across 18 cities in 8 states, we hope to encourage people to be vocal and take a stand for themselves, thus creating a happier nation.</div><br>',
                        'SHE':'Every year one out of five girls in India drop out of school when they hit puberty because of menstrual cycle. Techfest took the initiative SHE (Sanitation & Health Education) to emancipate the society from the taboo and ill practices of menstruation though menstrual health awareness campaign. SHE initiative witnessed its inauguration in the presence of Ms. Taapsee Pannu, bollywood actress, at IIT Bombay. Menstrual hygiene management workshops and seminars were conducted in 25+ villages, with 2,00,000 sanitary napkins distributed in 120+ BMC schools.\n',
                        'SSAP':'&ldquo;Right to Light.&rdquo;<br> <br><div>With the above motto, Techfest IIT Bombay has taken up Student Solar Ambassador Program (SSAP) aimed at sensitizing school students on solar energy. On the day of 2nd October 2018, 1250000 children across India will get a chance to build their own solar lamps from scratch, making them Solar Student Ambassadors. On the same day, 5500 students from 120 Schools will be trained by professional trainers at IIT Bombay, thereby breaking into the Guinness Book of World Records. </div>',
                        'Innovation-Challenge':'Techfest brought Innovation Challenge for young minds of the generation having passion for science and curiosity to learn. Techfest, in collaboration with SOF (Science Olympiad Foundation) aimed to ignite a spark in the creative minds of the country. Students of class 8, 9 and 10 were challenged to develop their innovative and imaginative skills and look at science in a new way. Young explorers awaited with enthusiasm to grab great prizes.'
                    },
                    s3: s3Link,
                    contentIndex: 'about',
                    images:[
                        [
                            'https://techfest.org/2018/initiatives/s-1.jpg',
                            'https://techfest.org/2018/initiatives/s-2.jpg'
                        ],[
                            'https://techfest.org/2018/initiatives/l-1.jpg',
                            'https://techfest.org/2018/initiatives/l-2.jpg'
                        ],[
                            'https://techfest.org/2018/initiatives/l-3.jpg',
                            'https://techfest.org/2018/initiatives/l-4.jpg'
                        ],[
                            'https://techfest.org/2018/initiatives/s-3.jpg',
                            'https://techfest.org/2018/initiatives/s-4.jpg'
                        ]
                    ]
                },
                ind: 0,
                activeCompi: -1
            }
        },
        methods:{
            compiActivate: function(e){
                if($('.compi-'+e).hasClass('active')) {
                    $('.nav-tab').css('height',50).removeClass('active');
                    this.activeCompi = -1;
                }
                else {
                    this.activeCompi = e;
                    $('.nav-tab').css('height',50).remove('active');
                    setTimeout(function(){
                        console.log($('.desc').height() + 80);
                        $('.compi-'+e).css('height',$('.desc').height()+100).addClass('active');
                    },100);
                }
            },
            prettyNumber: function(x){
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        },
        created: function(){
            this.competitions.images[0] = this.competitions.images[0].concat(this.competitions.images[3]);
            setInterval(function(){
                t.ind = (t.ind+1)%t.competitions.images[0].length;
            },3000);
        }
    }
</script>

<style scoped>
    .navigation{
        padding-left: 15px;
        margin-bottom: 10px;
        padding-bottom: 15px;
        left: 0;
        right: 0;
        height: 80px;
        position: fixed;
        top: 50px;
        -webkit-backface-visibility: hidden;
        border-bottom: 2px solid white;
        background: #000000;
        z-index: 2;
    }
    main{
        background: #000;
        color: #fff;
    }
    .navigation .title{
        font-size: 30px;
    }

    .name-text{
        text-transform: capitalize;
    }
    .hirarchy{
        font-size: 13px;
    }
    .hirarchy span{
        margin:auto 0.5em;
    }
    .description{
        text-align: justify;
        font-size: 15px;
        padding: 40px 15px 15px;
    }
    .description-top{
        text-align: justify;
        font-size: 15px;
        margin-top:100px;
        padding: 40px 15px 15px;
    }
    .description .title{
        font-size: 1.5em;
    }
    .nav-tab{
        border-bottom: 2px solid white;
        padding: 0 10px 15px 10px;
        position: relative;
        transition: all 1s;
        height:55px;
        overflow: hidden;
    }
    .nav-tab.active{
        height: 400px;
    }
    .nav-tab .name:after{
        content: "›";
        position: absolute;
        right: 10px;
        padding: 13px;
        top:0;
        transition: all 1s;
    }
    .nav-tab.active .name:after{
        transform: rotate(90deg);
    }
    .nav-tab:first-child{
        border-top: 2px solid white;
        margin-top:10px;
    }
    .nav-tab:last-child{
        margin-bottom: 10px;
    }
    .content{
        width: 100%;
    }
    .prize-money{
        color: lightgoldenrodyellow;
        font-size: 1.2em;
        margin-top: 10px;
    }
    .name{
        font-size:20px;
        line-height: 20px;
        padding-top:15px;
    }
    .desc{
        line-height: 22px;
        font-size: 15px;
    }
    .explore-more{
        font-size: 16px;
        line-height: 16px;
        margin-top: 10px;
    }
    .is-zonal{
        font-size: 0.5em;
        padding-right:30px;
    }
    .name-text{
        text-transform: capitalize;
    }
</style>
