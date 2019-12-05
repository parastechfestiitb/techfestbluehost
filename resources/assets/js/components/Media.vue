<template>
    <main>
        <div class="heading title">TECHFEST IN MEDIA</div>
        <div class="images d-flex justify-content-between">
            <div class="r1">
                <img v-for="img in images[0]" :src="img" alt="side-1">
                <div class="yt" v-for="ytv in youtube[0]" v-html="ytv"></div>
            </div>
            <div class="r2">
                <img v-for="img in images[1]" :src="img" alt="side-2">
                <div class="yt" v-for="ytv in youtube[1]" v-html="ytv"></div>
            </div>
            <div class="r3">
                <img v-for="img in images[2]" :src="img" alt="side-3">
                <div class="yt" v-for="ytv in youtube[2]" v-html="ytv"></div>
            </div>
            <div class="r4">
                <img v-for="img in images[3]" :src="img" alt="side-3">
                <div class="yt" v-for="ytv in youtube[3]" v-html="ytv"></div>
            </div>
        </div>
        <v-footer></v-footer>
    </main>
</template>

<script>
    export default {
        name: "Search",
        data: ()=>{
            return {
                searchQuery: null,
                searchElements: [],
                images:[
                    [
                        'https://techfest.org/2018/Media/highcompress-m-11.jpg',
                        //'https://techfest.org/2018/Media/highcompress-m-17.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-10.jpg',
                        //'https://techfest.org/2018/Media/highcompress-m-11.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-31.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-7.jpg',

                        'https://techfest.org/2018/Media/highcompress-m-1.jpg',

                        'https://techfest.org/2018/Media/highcompress-m-12.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-16.jpg',
                        //'https://techfest.org/2018/Media/highcompress-m-17.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-34.jpg',
                    ],[
                        'https://techfest.org/2018/Media/highcompress-m-30.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-35.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-36.jpg',
                        // 'https://techfest.org/2018/Media/highcompress-m-1.jpg',
                        //'https://techfest.org/2018/Media/highcompress-m-11.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-2.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-3.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-4.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-5.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-13.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-22.jpg',
                        //'https://techfest.org/2018/Media/highcompress-m-9.jpg'
                        'https://techfest.org/2018/Media/highcompress-m-26.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-24.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-33.jpg',

                    ],[

                        'https://techfest.org/2018/Media/highcompress-m-9.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-18.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-19.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-20.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-21.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-25.jpg',
                    ],[
                        'https://techfest.org/2018/Media/highcompress-m-17.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-29.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-6.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-14.jpg',
                        'https://techfest.org/2018/Media/highcompress-m-32.jpg',
                        //'https://techfest.org/2018/Media/highcompress-m-36.jpg'
                    ]
                ],
                youtube: [
                    [
                        '<iframe class="youtube-video" src="https://www.youtube.com/embed/J32EifT1AGc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                        '<iframe class="youtube-video" src="https://www.youtube.com/embed/IqJBnKUXcDI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
                    ],
                    [
                        '<iframe class="youtube-video" src="https://www.youtube.com/embed/d32xw27ScK8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                        '<iframe class="youtube-video" src="https://www.youtube.com/embed/HVYPV48qQDI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
                    ],
                    [
                        '<iframe class="youtube-video" src="https://www.youtube.com/embed/BECTxCVcpv8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                        '<iframe class="youtube-video" src="https://www.youtube.com/embed/sBDtYoxqlYE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
                    ],
                    [
                        '<iframe class="youtube-video" src="https://www.youtube.com/embed/NX_bFoJPTEE" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
                        '<iframe class="youtube-video" src="https://www.youtube.com/embed/e1NbKFTnaxI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>'
                    ]
                ]
            }
        },
        watch: {
            searchQuery: function(e){
                clearTimeout(this.searchDebounce);
                this.searchDebounce = setTimeout(()=>{
                    this.searchDebounce = true;
                    if(e==="") this.searchElements = [];
                    else axios.get('/api/search?q='+e)
                        .then((response)=>{
                            this.searchElements  = response.data;
                        });
                },500);
            }
        },
        created: function(){
            $('.page-transition').animate({
                left:'-200vw'
            },500);
        },
        components: {
            'v-footer':require('./Footer')
        }
    }

</script>

<style scoped>
    .heading
    {
        font-family:'Play',sans-serif;
        font-weight: bold;
        color: #fff;
        font-size: 1.45834vw;
        text-align: center;
    }
    .images{
        margin:2vh;
        height:65vh;
        overflow: auto;
    }
    .r1,.r2,.r3,.r4{
        width: 25% ;
    }
    .youtube{
        padding-bottom: 5vw;
        width: 100%;
    }
    .yt{
        text-align: center;
        width: 100%;
        margin:2vh;
    }
    .yt>*{
        width: 100%;
    }
    main{
        padding-top:16vh;
        height:100%;
    }
    img{
        margin: 2vh 2vw;
        width: calc(100% - 2vw);
    }

    .title{
        font-size: 2.2vw;
        margin-left:auto;
        margin-right: auto;
        margin-bottom: 5vh;
        text-transform: uppercase;
        text-decoration: underline;
    }
</style>
<style>
    .youtube-video{
        width: 21vw !important;
        height: 14vw !important;
    }
</style>