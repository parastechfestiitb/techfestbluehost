<template>
    <main v-if="event!==null">
        <div class="main-container">
            <div class="left-container" :style="{marginTop:contHeight}">
                <div class="description">
                    <h1 class="play">{{event.name}}</h1>
                    <div class="description-html" v-html="event.description.description"></div>
                </div>
            </div>
            <div class="right-container" :style="{marginTop:contHeight}">
                <div class="gallery-images d-flex flex-nowrap">
                    <img src="https://techfest.org/2018/Twmun/s-1.jpg" alt="twmun-img">
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
        [-6,87.2],[-11,4],[-5,-14],
        [-16,-15],[-17,56],[-4 ,57],
        [34 ,25],[26 ,65],[15 ,60],
        [14,-19],[24,15],[18,71],
        [22,-29],[7,-22], [1,0],
        [5,20],[0,20],[0,13]
    ];
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
                i:[]
            }
        },
        components: {
            'v-footer':require('./Footer')
        },
        methods: {
            handleMouseMove: function(e){
                let per = e.pageX*3/window.innerWidth;
                let pet = e.pageY/window.innerHeight;
                $(".glass-3").css('transform','translate('+per+'vw,'+pet*5+'vw)');
                $(".glass-6,.glass-5").css('transform','translate('+per+'vw,-'+pet*3+'vw)');
                $(".glass-7,.glass-8").css('transform','translate('+(-per*2)+'vw,'+pet*2+'vw)');
                $(".glass-9,.glass-10,.glass-4,.glass-1").css('transform','translate('+per*2+'vw,'+pet*2+'vw)');
                $(".glass-12,.glass-11,.glass-13").css('transform','translate('+per*4+'vw,'+pet*4+'vw)');
                $(".glass-14,.glass-18").css('transform','translate('+per+'vw,'+pet+'vw)');
                $(".glass-17,.glass-15,.glass-16").css('transform','translate('+per*3+'vw,'+pet*3+'vw)');
            },
        },
        created: function(){
            axios.post('/api/event/name/'+this.$route.name)
                .then((response)=>{
                    this.event = response.data;
                    this.event.description = JSON.parse(response.data.description);
                    setTimeout(()=>{
                        this.contHeight=(($('.navigation').height()+55)/$(window).height()/0.01) + 'vh';
                        $('.page-transition').animate({
                            left:'-200vw'
                        },500);
                        glassCoordinates.forEach((e,k)=>{
                            $('.glass-'+k).css({'bottom':e[0]+'vw','left':e[1]+'vw'});
                        });
                    },100);
                });
            window.addEventListener('mousemove',this.handleMouseMove)
        },
        watch: {
            $route: function(){
                this.event=null;
                axios.post('/api/event/name/'+this.$route.name)
                    .then((response)=>{
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
                    });
            }
        },
        destroyed: function(){
            window.clearInterval(this.i[0]);
            window.clearInterval(this.i[1]);
            window.clearInterval(this.i[2]);
            window.clearInterval(this.i[3]);
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
    .gallery-images img{
        height: 50vh;
    }
    .px1{
        width:1px;
        height:1px;
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
</style>