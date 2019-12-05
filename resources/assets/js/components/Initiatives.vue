<template>
    <main>
        <div class="tf-icon">
            <div class="logo"></div>
            <div class="text"></div>
        </div>
        <div class="d-flex">
            <div class="left-container">
                <h1 class="title play">Initiatives</h1>
                <div class="container-nav d-flex justify-content-between flex-nowrap">
                    <div @click="changeContent('about')" class="about active">About</div>
                    <div @click="changeContent('SPEAK')" class="SPEAK">SPEAK</div>
                    <div @click="changeContent('SSAP')" class="SSAP">SSAP</div>
                    <!--<div @click="changeContent('exhibitors')" class="exhibitors">Exhibitors</div>-->
                    <div @click="changeContent('Innovation-Challenge')" class="Innovation-Challenge">Innovation Challenge</div>
                </div>
                <div class="description" v-html="content[contentIndex]"></div>
                <button v-if="contentIndex==='SSAP'" data-toggle="modal" class="button-style play-font btn btn-primary" data-target="#afterMovie">Watch the Aftermovie of SSAP</button>

                <div class="modal fade" id="afterMovie" tabindex="-1" role="dialog" aria-labelledby="after-movie" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="d-flex w-100 h-100 justify-content-center">
                                <div class="d-flex h-100  align-items-center">
                                    <div class="modal-body">
                                        <div class="cross">
                                            <button type="button" class="close fa-3x " data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <iframe width="960" height="500" src="https://www.youtube.com/embed/2z3CEBv8PLI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="right-container">
                <div class="gallery-images d-flex flex-nowrap" v-if="contentIndex!=='SPEAK'">
                    <div class="img-group g1">
                        <div class="img-1">
                            <img class="group-1" :src="images[0][imagesArr[0]]" alt=""/>
                            <div class="slider"></div>
                        </div>
                        <div class="img-2">
                            <img :src="images[1][imagesArr[1]]" alt=""/>
                            <div class="slider"></div>
                        </div>
                    </div>
                    <div class="img-group g2">
                        <div class="img-2">
                            <img :src="images[2][imagesArr[2]]" alt=""/>
                            <div class="slider"></div>
                        </div>
                        <div class="img-1">
                            <img :src="images[3][imagesArr[3]]" alt=""/>
                            <div class="slider"></div>
                        </div>
                    </div>
                </div>
                <div class="gallery-images speak-container d-flex flex-column align-items-center" v-else>
                    <div class="speak-logo w-100">
                        <img src="https://techfest.org/events/speak/img/logo-white.png" alt="" class="img-speak">
                    </div>
                    <div class="h-50px p-1">in association with</div>
                    <div class="ngos d-flex align-items-center">
                        <div class="ngo-img-1">
                            <img src="https://techfest.org/events/speak/img/khushilifelearning.png" alt="">
                        </div>
                        <div class="ngo-img-2">
                            <img src="https://techfest.org/events/speak/img/bi.JPG" alt="" class="w50">
                        </div>
                        <div class="ngo-img-3">
                            <img src="https://techfest.org/events/speak/img/spif.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="glass-block">
            <img v-for="x in arr9" :src="s3.replace('img-temp','items.png')" alt="glass" class="item-img glass pen" :class="'glass-'+x">
        </div>
        <v-footer></v-footer>
    </main>
</template>

<script>
    let glassCoordinates = [
        [0,0],
        [-6,87.2],[-11,4],[-5,-9],
        [-16,-15],[-17,56],[-4 ,57],
        [34 ,25],[26 ,65],[15 ,60],
        [14,-19],[24,15],[18,71],
        [22,-29],[7,-22], [1,0],
        [5,20],[0,20],[0,14]
    ];
    if(window.intervals===null)
        window.intervals = [];
    export default {
        name: "Initiatives",
        components:{
            'v-footer':require('./Footer')
        },
        data: function(){
            return {
                showAfterMovie:true,
                content: {
                    'about':'&ldquo;They always say time changes things, but you actually have to change them yourself.&rdquo;<br><br>We at Techfest have always believed in such ideas and strive to give the world that small nudge which will set the gears of change in motion on a magnanimous scale. We unite volunteers, organizations and leaders to innovate, strategize, and execute measures that would touch a million lives and inspire a sense of responsibility towards the world at large.',
                    'SPEAK':'&ldquo;In the end, its the life in your years that matters, and not the years in your life.&rdquo;<div><br></div><div>With an aim of spreading the message of positive mental health, Techfest, IIT Bombay has launched the <b>SPEAK: Stand to express Initiative</b>. Studies show that almost 65% of Indian youth display symptoms which require attention at the grass root level. It all boils down to the fact that people never open up and speak freely about their problems. By bringing together experienced volunteers and students in around 50 colleges across 18 cities in 8 states, we hope to encourage people to be vocal and take a stand for themselves, thus creating a happier nation.</div><br><button type="button" style="width: 100%; color: white; padding: 1vw; background: transparent;" onclick="window.open(\'https://techfest.org/events/speak/\')">Click Here To Visit The Main Website</button>',
                    'SSAP':'&ldquo;Right to Light.&rdquo;<br> <br><div>With the above motto, Techfest IIT Bombay has taken up Student Solar Ambassador Program (SSAP) aimed at sensitizing school students on solar energy. On the day of 2nd October 2018, 1250000 children across India will get a chance to build their own solar lamps from scratch, making them Solar Student Ambassadors. On the same day, 5500 students from 120 Schools will be trained by professional trainers at IIT Bombay, thereby breaking into the Guinness Book of World Records. </div>',
                    'Innovation-Challenge':'Techfest brought Innovation Challenge for young minds of the generation having passion for science and curiosity to learn. Techfest, in collaboration with SOF (Science Olympiad Foundation) aimed to ignite a spark in the creative minds of the country. Students of class 8, 9 and 10 were challenged to develop their innovative and imaginative skills and look at science in a new way. Young explorers awaited with enthusiasm to grab great prizes.'
                },
                s3: s3Link,
                contentIndex: 'about',
                images:[[
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
                ]],
                imagesArr:[0,0,0,0],
                arr9: [1,3,4,5,6,7,8,11,12,13,14,15,16,17,18],
            }
        },
        methods: {
            handleMouseMove: function(e){
                let per = e.pageX*3/window.innerWidth;
                let pet = e.pageY*2/window.innerHeight;
                $(".glass-3").css('transform','translate('+per+'vw,'+pet*5+'vw)');
                $(".glass-6,.glass-5").css('transform','translate('+per+'vw,-'+pet*3+'vw)');
                $(".glass-7,.glass-8").css('transform','translate('+(-per*2)+'vw,'+pet*2+'vw)');
                $(".glass-9,.glass-10,.glass-4,.glass-1").css('transform','translate('+per*2+'vw,'+pet*2+'vw)');
                $(".glass-12,.glass-11,.glass-13").css('transform','translate('+per*4+'vw,'+pet*4+'vw)');
                $(".glass-14,.glass-18").css('transform','translate('+per+'vw,'+pet+'vw)');
                $(".glass-17,.glass-15,.glass-16").css('transform','translate('+per*3+'vw,'+pet*3+'vw)');
            },
            imageChange: function(c,e,d){
                let t = this;
                window.clearInterval(window.intervals[d]);
                window.intervals[d]=setInterval(function(){
                    setTimeout(function(){
                        Vue.set(t.imagesArr,d,(t.imagesArr[d]+1)%t.images[d].length);
                    },500);
                    $(c+' .slider').animate({
                        left: '-94vh'
                    },1000,function(){
                        $(c+' .slider').css('left','34vh');
                    });
                },e);
            },
            changeContent: function(e){
                this.contentIndex=e;
                $('.container-nav>*').removeClass('active');
                $('.'+e).addClass('active');
            }
        },
        created: function(){
            let t = this;
            setTimeout(function(){
                $('.page-transition').animate({
                    left:'-200vw'
                },500);
                glassCoordinates.forEach((e,k)=>{
                    $('.glass-'+k).css({'bottom':e[0]+'vw','left':e[1]+'vw'});
                });
            },300);
            let p = ['.g1 .img-1','.g1 .img-2','.g2 .img-2','.g2 .img-1']
            for(let d=1;d<4;d+=1){
                setTimeout(function(){
                    window.clearInterval(window.intervals[d]);
                    setTimeout(function(){
                        Vue.set(t.imagesArr,d,(t.imagesArr[d]+1)%t.images[d].length);
                    },500);
                    $(p[d]+' .slider').animate({
                        left: '-94vh'
                    },1000,function(){
                        $(p[d]+' .slider').css('left','34vh');
                    });
                },2500*d);
            }
            this.imageChange('.g1 .img-1',10000,0);
            setTimeout(function(){
                t.imageChange('.g1 .img-2',10000,1);
            },2500);
            setTimeout(function(){
                t.imageChange('.g2 .img-2',10000,2);
            },5000);
            setTimeout(function(){
                t.imageChange('.g2 .img-1',10000,3);
            },7500);
            window.addEventListener('mousemove',this.handleMouseMove);
        },
        mounted: function(){
            let t = this;
            setTimeout(function(){
                $('.page-transition').animate({
                    left:'-200vw'
                },500);
                glassCoordinates.forEach((e,k)=>{
                    $('.glass-'+k).css({'bottom':e[0]+'vw','left':e[1]+'vw'});
                });
            },300);
            this.imageChange('.g1 .img-1',10000,0);
            setTimeout(function(){
                t.imageChange('.g1 .img-2',10000,1);
            },2500);
            setTimeout(function(){
                t.imageChange('.g2 .img-2',10000,2);
            },5000);
            setTimeout(function(){
                t.imageChange('.g2 .img-1',10000,3);
            },7500);
            window.addEventListener('mousemove',this.handleMouseMove);
        },
        destroyed: function(){
            window.removeEventListener('mousemove',this.handleMouseMove);
            window.clearInterval(window.intervals[0]);
            window.clearInterval(window.intervals[1]);
            window.clearInterval(window.intervals[2]);
            window.clearInterval(window.intervals[3]);
        }
    }
</script>
<style scoped>
    main {
        height: 100%;
        width: 100%;
        color: white;
        background: url('https://techfest.org/2018/event-background.jpg') bottom left;
        background-size: 100vw auto;
        overflow: hidden;
    }
    .button-style {
        background: black;
        color: white;
        border: 0.0520833333vw solid white;
        padding: 1vw;
        margin-top: 1vw;
        font-size:1vw;
    }
    .modal-body{
        padding-top: -0;
        margin-top: -1rem;
    }
    #afterMovie .modal-content {
        background-color: #333;
        height: 520px;
        width:980px;
        margin-left: calc(45vw - 490px);
    }

    #afterMovie .modal-dialog {
        max-width: 100vw;
        width:100vw;
        margin:0;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        border-radius: 0;
        height: 100vh;
        position: relative;
        padding:5vw;
        background: rgba(0,0,0,0.8)
    }
    .main-container .left-container, .main-container .right-container {
        position: absolute;
        top: 0;
        z-index: 3;
        width: 50vw;
    }
    main p{
        font-size: 0.83333333vw !important;
    }
    main h1{
        font-size: 2vw !important;
        margin-bottom: 0.83333333vw;
    }
    .main-container .left-container {
        left: 0;
    }
    .main-container .right-container {
        left: 50vw;
    }

    .gallery-images{
        margin-top:5vh;
        width: 40vw;
    }
    .gallery-images>div,.gallery-images>div>div{
        overflow:hidden;
        position: relative;
    }
    .gallery-images img{
        margin: 0.5vh;
    }
    .img-1{
        width: 31vh;
        height:31vh;
    }
    .img-1 img{
        width:30vh;
        height: 30vh;
    }
    .px1{
        width:1px;
        height:1px;
    }
    .img-2{
        width: 31vh;
        height:16vh;
    }
    .img-2 img{
        width:30vh;
        height:15vh;
    }
    .slider{
        width: 94vh;
        position: absolute;
        top: 0;
        left: 34vh;
        background: linear-gradient(to right, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 10%, rgba(0,0,0,1) 90%, rgba(0,0,0,0) 100%);
        z-index: 2;
        height: 31vh;
    }
    .description {
        font-size: 1vw;
        width: 33vw;
        margin-top: 3vh;
        text-align: justify;
    }
    .description-html{
        font-size:1vw;
        height:60vh;
        overflow: auto;
    }
    .item-img{
        position: absolute;
        width:44vw;
        height:27vw;
    }
    .glass-block{
        z-index:2;
        position: absolute;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        pointer-events: none;
        overflow:hidden;
    }
    .glass{
        transition: transform 2s ease-out,left 2s ease-out,bottom 2s ease-out;
        position: absolute;
    }
    .glass-1,.glass-10{
        clip: rect(0,8vw,8vw,0);
    }
    .glass-2,.glass-11{
        clip: rect(0vw,13vw,6vw,8vw);
    }
    .glass-3,.glass-12{
        clip:rect(0,18vw,5.7vw,14vw);
    }
    .glass-4,.glass-13{
        clip:rect(0vw,24vw,6vw,20vw);
    }
    .glass-5,.glass-14{
        clip: rect(0vw,30vw,4vw,25vw);
    }
    .glass-6,.glass-15{
        clip: rect(17vw,18vw,21vw,13vw);
    }
    .glass-7,.glass-16{
        clip: rect(17vw,23vw,21vw,19vw);
    }
    .glass-8,.glass-17{
        clip: rect(20vw,30vw,25vw,26vw);
    }
    .glass-9,.glass-18{
        clip: rect(6vw,30vw,10vw,25vw);
    }

    .left-container{
        width:40vw;
        margin-top: 20vh;
        margin-left: 10vw;
        display: inline-block;
        color:white;
    }
    .title{
        font-size: 2vw;
    }
    .container-nav{
        width:30vw;
        font-size:1vw;
        margin-bottom: 2.5vh;
        margin-top: 2.5vh;
    }
    .container-nav>*{
        white-space:nowrap;
        font-size:1vw;
        font-family: 'Play', sans-serif;
        border-bottom: 0.104166667vw solid rgba(0,0,0,0);
        transition: border 1s;
    }
    .container-nav>*.active{
        border-bottom: 2px solid white;
    }
    .right-container{
        margin-top: 15vh;
        margin-left: 2vw;
    }
    .speak-container{
        height: 35vw;
        overflow: hidden;
    }
    .ngos{
        width: 100%;
    }
    .ngos>div{
        text-align: center;
        background: #ffffff;
    }
    .ngo-img-1,.ngo-img-3{
        width: 40%;
    }
    .ngo-img-2{
        width: 18%;
    }
    .ngos img{
        height: 100%;
        max-height: 3.645833333vw;
    }
    .h-50px{
        height: 2.60416666667vw;
    }
    .speak-logo img {
        width: 80%;
        margin: 10%;
    }
    .fullbutton {
        width: 100%;
        padding: 1vw;
        background: transparent;

    }
</style>
