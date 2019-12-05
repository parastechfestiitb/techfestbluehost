<template>
    <main>
        <div class="navigation play">
            <div class="title">{{$route.name}}</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>&gt;<span>{{$route.name}}</span></div>
        </div>
        <div class="description" >
            <div class="content">
                <div class="heading">TECHFEST IN MEDIA</div>
            </div>
        </div>
        <div class="navigation-group">
            <div class="nav-tab" v-for="(image,key) in visibleImages" :class="'compi-'+key">
                <img :src="image" :alt="'media-'+key" class="media-image">
            </div>
            <div class="nav-tab" v-if="medias.length<count" v-for="(video,key) in videos" v-html="video">
            </div>
            <div class="nav-tab" v-if="medias.length>=count">
                <button @click="loadMore" class="w-100">Load More</button>
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Media",
        data: function(){
            return{
                competition: null,
                activeCompi: -1,
                medias: [
                    'https://techfest.org/2018/Media/highcompress-m-1.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-2.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-3.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-4.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-5.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-6.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-7.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-8.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-9.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-10.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-11.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-12.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-13.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-14.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-15.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-16.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-17.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-18.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-19.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-20.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-21.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-22.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-23.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-24.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-25.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-26.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-29.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-30.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-31.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-32.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-33.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-34.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-35.jpg',
                    'https://techfest.org/2018/Media/highcompress-m-36.jpg'
                ],
                videos:[
                    '<iframe class="youtube-video" src="https://www.youtube.com/embed/J32EifT1AGc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                    '<iframe class="youtube-video" src="https://www.youtube.com/embed/IqJBnKUXcDI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                    '<iframe class="youtube-video" src="https://www.youtube.com/embed/d32xw27ScK8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                    '<iframe class="youtube-video" src="https://www.youtube.com/embed/HVYPV48qQDI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                    '<iframe class="youtube-video" src="https://www.youtube.com/embed/BECTxCVcpv8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                    '<iframe class="youtube-video" src="https://www.youtube.com/embed/sBDtYoxqlYE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                    '<iframe class="youtube-video" src="https://www.youtube.com/embed/NX_bFoJPTEE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                    '<iframe class="youtube-video" src="https://www.youtube.com/embed/e1NbKFTnaxI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
                ],
                count: 3,
                videoCount: 3,
                visibleVideos: [],
                visibleImages: []
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
                        $('.compi-'+e).css('height',$('.desc').height()+100).addClass('active');
                    },10);
                }
            },
            prettyNumber: function(x){
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            },
            loadMore: function(x){
                this.count+=3;
                this.visibleImages = this.medias.slice(0,this.count);
            }
        },
        created: function(){
            this.visibleImages = this.medias.slice(0,this.count);
        }
    }
</script>

<style scoped>
    .heading
    {
        padding: 4px;
        width: 100%;
        font-family: 'Play',sans-serif;
        font-weight: bold;
        color: #fff;
        font-size: 5.45834vw;
        text-align: center;
    }
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
        width: 90vw;
        overflow: hidden;
        white-space: nowrap;
        -ms-text-overflow: ellipsis;
        text-overflow: ellipsis;
        text-align:left !important;
    }
    .hirarchy{
        font-size: 13px;
        width:90vw;
        white-space: nowrap;
        text-overflow:ellipsis;
        overflow: hidden;
    }
    .hirarchy span{
        margin: auto 0.5em;
    }
    .description{
        padding: 15px;
        text-align: justify;
        font-size: 15px;
    }
    .description .title{
        font-size: 1.5em;
    }
    .nav-tab{
        padding: 15px 30px;
        position: relative;
        transition: all 1s;
        height:auto;
        overflow: hidden;
    }
    .nav-tab:first-child{
        margin-top:10px;
    }
    .nav-tab:last-child{
        margin-bottom: 10px;
    }
    .nav-tab img{
        width:100%;
    }
    .content{
        top: 80px;
        width: 100%;
        margin-top: 120px;
    }
    .no-wrap{
        white-space: nowrap;
    }
    .prize-money{
        color: lightgoldenrodyellow;
        font-size: 1.2em;
        margin-top: 10px;
    }
    .name{
        font-size:20px;
        line-height: 20px;
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
    .login-modal{
        position: fixed;
        top: 50px;
        left: 0;
        width: 100vw;
        height: 100%;
        background: #000000;
        z-index: 4;
        overflow:auto;
    }
    .input-group {
        width: 100%;
        margin-top: 25px;
    }
    .input-group input, .input-group select, .input-group textarea {
        margin-left: 1rem;
        display: inline-block;
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
        color: white;
        line-height: 20px;
        width: 60vw;
    }
    option{
        color:black;
    }
    input:focus,input:active,
    select:focus,select:active,
    textarea:focus,textarea:active{
        outline: none;
    }
    .title-modal-login{
        font-size: 2em;
    }
    textarea{
        height:30px;
    }
    .title {
        width: 30vw;
        display: inline-block;
        text-align: right;
        padding-right: 5px;
        font-family: 'Play',sans-serif;
    }
    .input-group button{
        width: 80vw;
        margin: auto;
    }
    .error{
        color:#ffce00;
        font-size:10px;
        padding-left:35vw;
    }
    .manage-modal{
        position: fixed;
        top:50px;
        left:0;
        height: calc(100% - 50px);
        overflow: auto;
        width: 100vw;
        z-index: 9;
        background: #000000;
        padding: 1rem;
    }
    .instructions{
        border-bottom: 2px solid white;
        padding-bottom: 1rem;
        margin-bottom: 1rem;
    }
    .instructions .inst{
        font-size: 2em;
    }
    .team-member {
        margin-bottom: 10px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.4);
        padding: 0 1rem 1rem;
    }
    .manage-modal input {
        background: transparent;
        border: none;
        border-bottom: 2px solid white;
        margin-bottom: 10px;
        width: 90%;
        color: white;
        margin-left: 10%;
    }
    .message{
        color: #ffe0ef;
    }
    .add-members{
        border-bottom: none !important;
        padding-bottom: 0 !important;
    }
    .footer-add-member{
        text-align:right;
    }
    .invite-link{
        margin-left: 0!important;
        font-size: 0.8em !important;
        padding: 0.3em !important;
        border: 2px solid white !important;
        text-overflow: ellipsis !important;
    }
    .fa-clipboard{
        font-size: 1.5em;
        padding-top: 0.2em;
    }
</style>
<style>
    iframe{
        width: 100% !important;
    }
</style>