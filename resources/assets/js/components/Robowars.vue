<template>
    <main>
        <div class="tf-icon">
            <div class="logo"></div>
            <div class="text"></div>
        </div>
        <div class="d-flex">
            <div class="left-container">
                <h1 class="title play">Exhibitions</h1>
                <div class="container-nav d-flex justify-content-between flex-nowrap">
                    <div v-for="(val,key) in content" @click="chaneContent(key)">{{key}}</div>
                </div>
                <div class="description" v-html="content[contentIndex]"></div>
            </div>
            <div class="right-container">
                <div class="gallery-images d-flex flex-nowrap">
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
        name: "Robowars",
        components:{
            'v-footer':require('./Footer')
        },
        data: function(){
            return {
                content: {
                    'about':'<span class="quote">&ldquo;Fate rarely calls upon us at the moment of our choosing.&rdquo;</span><br><br> Everyone has watched and enjoyed Transformers since their childhood. Autobots using their advanced weapons to protect the Earth from Decepticons or Hugh Jackman punching through Robots in Real Steel; Ever wondered how a battle between two such extremely powerful futuristic robots would look like? Techfest brings you one of the largest battle arena in Asia and the best robots from all over the world converging to battle it out to decide who takes the glory. Gear up to witness the largest Robowars in India with charming artist performances for non-stop entertainment. Be a part of the largest audience for international robowars at one of the largest and grandest venues on the campus!',
                    'for-visitors':'There is no entry fee for Exhibitions at Techfest, everybody can attend it free of cost. \n They must, at all times carry a valid ID proof with them. Visitors below 14 years of age are advised to visit the Exhibitions in the early morning. Exhibitions will be at display from _______ to ________ on all 3 days of the Festival.\n',
                    'tech-connect':'Techfest in association with IRCC (Industrial Research and Consulting Centre), IIT Bombay is organizing TechConnect to demonstrate the R&D activities of IIT Bombay. It will also highlight the fundamental research being carried out and the technologies developed at IIT Bombay. TechConnect showcased 120+ projects from 15 Academic Units from IIT Bombay which included working models, demos, and products. TechConnect brings out the technologies flourished in IIT Bombay, reaching out to critical social needs of the country, also to simultaneously satisfy the requirements of industry and maximize the benefit to society. ',
                    'exhibitors':'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugiat magnam, modi mollitia nam nobis obcaecati odio officiis reiciendis tempore! Accusantium commodi doloremque doloribus officiis rem repellat repellendus veniam veritatis!\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugiat magnam, modi mollitia nam nobis obcaecati odio officiis reiciendis tempore! Accusantium commodi doloremque doloribus officiis rem repellat repellendus veniam veritatis!\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugiat magnam, modi mollitia nam nobis obcaecati odio officiis reiciendis tempore! Accusantium commodi doloremque doloribus officiis rem repellat repellendus veniam veritatis!\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugiat magnam, modi mollitia nam nobis obcaecati odio officiis reiciendis tempore! Accusantium commodi doloremque doloribus officiis rem repellat repellendus veniam veritatis!\n',
                    'contact':'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugiat magnam, modi mollitia nam nobis obcaecati odio officiis reiciendis tempore! Accusantium commodi doloremque doloribus officiis rem repellat repellendus veniam veritatis!\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugiat magnam, modi mollitia nam nobis obcaecati odio officiis reiciendis tempore! Accusantium commodi doloremque doloribus officiis rem repellat repellendus veniam veritatis!\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugiat magnam, modi mollitia nam nobis obcaecati odio officiis reiciendis tempore! Accusantium commodi doloremque doloribus officiis rem repellat repellendus veniam veritatis!\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam fugiat magnam, modi mollitia nam nobis obcaecati odio officiis reiciendis tempore! Accusantium commodi doloremque doloribus officiis rem repellat repellendus veniam veritatis!\n'
                },
                s3: s3Link,
                contentIndex: 'about',
                images:[[
                    'https://techfest.org/2018/Exhibitions/s-1.jpg',
                    'https://techfest.org/2018/Exhibitions/s-2.jpg'
                ],[
                    'https://techfest.org/2018/Exhibitions/l-1.jpg',
                    'https://techfest.org/2018/Exhibitions/l-2.jpg'
                ],[
                    'https://techfest.org/2018/Exhibitions/l-3.jpg',
                    'https://techfest.org/2018/Exhibitions/l-4.jpg'
                ],[
                    'https://techfest.org/2018/Exhibitions/s-3.jpg',
                    'https://techfest.org/2018/Exhibitions/s-4.jpg'
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
                        Vue.set(t.imagesArr,d,(t.imagesArr[d]+1)%t.event.description.images[d].length);
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

    .main-container .left-container, .main-container .right-container {
        position: absolute;
        top: 0;
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
</style>