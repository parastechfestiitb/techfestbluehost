<template>
    <main v-if="event!==null">
        <div class="main-container">
            <div class="left-container" :style="{marginTop:contHeight}">
                <div class="description">
                    <h1 class="play-font">{{event.name}}</h1>
                    <div class="description-html" v-html="event.description.description"></div>
                </div>
            </div>
            <div class="right-container" :style="{marginTop:contHeight}">
                <div class="gallery-images d-flex flex-nowrap">
                    <div class="img-group g1">
                        <div class="img-1">
                            <img class="group-1" :src="event.description.images[0][imagesArr[0]]" alt=""/>
                            <div class="slider"></div>
                        </div>
                        <div class="img-2">
                            <img :src="event.description.images[1][imagesArr[1]]" alt=""/>
                            <div class="slider"></div>
                        </div>
                    </div>
                    <div class="img-group g2">
                        <div class="img-2">
                            <img :src="event.description.images[2][imagesArr[2]]" alt=""/>
                            <div class="slider"></div>
                        </div>
                        <div class="img-1">
                            <img :src="event.description.images[3][imagesArr[3]]" alt=""/>
                            <div class="slider"></div>
                        </div>
                    </div>
                </div>
                <div class="previous-year-message text-warning" v-if="$route.name==='Lectures'">*Previous Lecturers*</div>
                <div class="previous-year-message text-warning" v-if="$route.name==='Technoholix'">*Previous Artists*</div>
                <div class="previous-year-message text-warning" v-if="$route.name==='Workshop'">*Previous Workshops*</div>
                <div class="previous-year-message text-warning" v-if="$route.name==='Summit'">*Previous Summits*</div>
                <div class="nav-button" style="width:30vw; text-align: center; font-size:1.3vw" v-if="$route.name==='Robowars'" @click="changeLocation('/robowars')">Click here to visit the website</div>
                <div class="nav-button mt-5 explore-button btn" v-if="$route.name==='twmun'" @click="changeLocation('/twmun/2018')">Click here to visit the website</div>
                <div v-if="$route.name==='twmun'" class="nav-button mt-3 explore-button btn text-warning" @click="$root.routeChange('/payment')">Click here to go to payment portal</div>
            </div>
        </div>
        <div class="1px">
            <div class="i" v-for="k in event.description.images">
                <div v-for="x in k" :style="{backgroundImage: 'url('+x+')'}"></div>
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
        [-6,87.2],[-11,4],[-5,-14],
        [-16,-15],[-17,56],[-4 ,57],
        [34 ,25],[26 ,65],[15 ,60],
        [14,-19],[24,15],[18,71],
        [22,-29],[7,-22], [1,0],
        [5,20],[0,20],[0,13]
    ];
    if(window.intervals!==null)
    window.intervals = [];
    export default {
        name: "Events",
        data:function(){
            return {
                s3: s3Link,
                event: null,
                images: [],
                arr5: [0,1,2,3,4],
                arr9: [1,3,4,5,6,7,8,11,12,13,14,15,16,17,18],
                contHeight: 0,
                count: 0,
                imagesArr: [0,0,0,0],
                i:[],
                signInStatus:false
            }
        },
        components: {
            'v-footer':require('./Footer')
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
            changeLocation: function(e){
                window.location.href = e;
            }
        },
        created: function(){
            axios.post('/api/get-status').then(r=>{this.signInStatus=r.data === 'Exists'});
            axios.post('/api/event/name/'+this.$route.name)
                .then((response)=>{
                    this.event = response.data;
                    this.event.description = JSON.parse(response.data.description);
                    let t = this;
                    setTimeout(()=>{
                        this.contHeight=(($('.navigation').height())/$(window).height()/0.01) + 'vh';
                        $('.page-transition').animate({
                            left:'-200vw'
                        },500);
                        glassCoordinates.forEach((e,k)=>{
                            $('.glass-'+k).css({'bottom':e[0]+'vw','left':e[1]+'vw'});
                        });
                        let t = this;
                        let p = ['.g1 .img-1','.g1 .img-2','.g2 .img-2','.g2 .img-1']
                        for(let d=1;d<4;d+=1){
                            setTimeout(function(){
                                window.clearInterval(window.intervals[d]);
                                setTimeout(function(){
                                    Vue.set(t.imagesArr,d,(t.imagesArr[d]+1)%t.event.description.images[d].length);
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
                    },100);
                });
            window.addEventListener('mousemove',this.handleMouseMove)
        },
        watch: {
            $route: function(){
                this.event=null;
                axios.post('/api/event/name/'+this.$route.name)
                    .then((response)=>{
                        let t = this;
                        this.event = response.data;
                        this.event.description = JSON.parse(response.data.description);
                        $('.page-transition').animate({
                            left:'-200vw'
                        },500);
                        setTimeout(function(){
                            glassCoordinates.forEach((e,k)=>{
                                $('.glass-'+k).css({'bottom':e[0]+'vw','left':e[1]+'vw'});
                            });
                        },300);

                        this.imageChange('.g1 .img-1',11383,0);
                        setTimeout(function(){
                            t.imageChange('.g1 .img-2',10247,1);
                        },2500);
                        setTimeout(function(){
                            t.imageChange('.g2 .img-2',10099,2);
                        },5000);
                        setTimeout(function(){
                            t.imageChange('.g2 .img-1',10597,3);
                        },7500);
                    });
            }
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
        background: url('https://s3.ap-south-1.amazonaws.com/techfest/public/event-background.jpg') bottom left;
        background-size: 100vw auto;
    }

    .main-container .left-container, .main-container .right-container {
        position: absolute;
        top: 0;
        width: 50vw;
        z-index: 3;
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
        z-index: 3;
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
    .px1 *{
        width: 1px;
        height: 1px;
        opacity:0;
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
        width: 30vw;
        margin-left: 10vw;
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
    .quote{
        font-size:1.2em;
    }
    .previous-year-message{
        font-size:1vw;
    }
    .explore-button{
        border-radius: 0;
        font-family: 'play-font',sans-serif;
        font-size: 1vw !important;
        border: 0.15vw solid white;
        background: transparent;
        padding: 0.6vw;
        color:white;
        min-width: 8.8vw;
        transition: color 300ms, background 300ms;
        width: 31.5vw;
    }
    .explore-button:hover{
        background:#fff;
        color:#000;
    }
</style>