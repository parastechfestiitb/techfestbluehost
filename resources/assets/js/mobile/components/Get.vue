<template>
    <main :class="$root.searchOpen?'hidden-overflow blur':''">
        <div class="name play">
            A Timeless Lapse
        </div>
        <div class="name play" style="top: calc(50px + 10vh);font-size: 1em;">
            14<sup>th</sup> - 16<sup>th</sup> December 2018
        </div>
        <div class="app-work d-flex justify-content-around align-items-center">
            <!--<i @click="$root.changeRoute('/map')" class="fa fa-map-marked-alt"></i>-->
            <i @click="$root.changeRoute('/schedule')" class="fa fa-calendar"></i>
        </div>
        <div> <p style="color: #fff;position: absolute;left: 0;right: 0;bottom: calc(60px + 0vh);font-weight:bold;text-align: center;">
            <a href="https://techfest.org/ca">CA Portal is Live now!</a></p></div>
        <div class="portal-image">
            <img :src="s3.replace('img-temp','bottom-smoke.png')" alt="bottom-smoke" class="bottom-smoke pen">
            <img :src="s3.replace('img-temp','portal.png')" alt="portal" class="portal pen">
            <img :src="s3.replace('img-temp','middle-smoke.png')" alt="middle-smoke" class="middle-smoke pen">
            <img :src="s3.replace('img-temp','upper-smoke.png')" alt="upper-smoke" class="upper-smoke pen">
            <img :src="s3.replace('img-temp','nova.png')" alt="nova" class="nova">
        </div>
        <div class="about">
            <h1 class="heading play">About Techfest</h1>
            <div class="description mb-3">
                Techfest provides a platform for one and all to witness one of the most beautiful and
                groundbreaking amalgamation of science and technology with pure delight and enthusiasm.
                With display of motivating orations, state of the art technology, cut-throat competitions
                and breathtaking performances for its audience, Techfest for the past 21 years has served
                to be the ideal destination for the millenials to learn, create and experience the
                beauty of technology.
            </div>
            <a href="https://www.youtube.com/watch?v=2z3CEBv8PLI" target="_blank" class="watch-movie mt-5">
                <button class="play">
                    Watch After Movie
                </button>
            </a>
            <div class="footer">
                &copy; Techfest 2018
                <div class="line"></div>
                Designed &amp; Developed By Team Techfest
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Get",
        data:function(){
            return {
                s3: 'https://techfest.org/2018/Get/img-temp'
            }
        }
    }
</script>

<style scoped>
    main{
        width: 100vw;
        color:white;
        overflow:auto;
        background: black;
        height: 100%;
        position: relative;
        overflow-x:hidden;
    }
    main.hidden-search{
        overflow: hidden !important;
    }
    .name{
        font-size:2em;
        text-align:center;
        position: absolute;
        left: 0;
        right: 0;
        top: calc(50px + 2vh);
    }
    .portal-image{
        position: absolute;
        bottom:20vmin;
        height:50vh;
        width:100vw;
    }
    .portal-image img{
        position: absolute;
        left:0;
        right:0;
        margin:auto;
        animation-name: rotate;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }
    .bottom-smoke{
        width: 70vmin;
        bottom: 20vmin;
        animation-duration: 40s;
        animation-direction: normal;
    }
    .portal{
        width: 100vmin;
        z-index:4;
        bottom: 10vmin;
    }
    .menu{
        z-index: 2;
    }
    .middle-smoke{
        width: 90vmin;
        z-index: 3;
        bottom: 10vmin;
        animation-duration: 60s;
        animation-direction: reverse;
    }
    .upper-smoke{
        z-index: 4;
        width: 100vmin;
        bottom: 10vmin;
        animation-duration: 30s;
        animation-direction: normal;
    }
    .nova{
        bottom: 7vmin;
        z-index: 5;
        width: 35vmin;
    }
    .about{
        position: absolute;
        top:calc(100vh + 50px);
        color:white;
        width:80vw;
        margin-left:10vw;
        text-align: justify;
        margin-bottom: 10px;
        min-height: calc(90vh - 50px);
    }
    .about .heading{
        text-transform: uppercase;
        font-size: 2em;
    }
    .watch-movie{

    }
    @keyframes rotate{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
    }
    .footer{
        margin-top:50px;
        text-align: center;
    }

    .line {
        margin-top: 2vw;
        margin-bottom: 1vw;
        padding-top:1px;
        border: none !important;
        background: linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 20%,  rgba(255,255,255,1) 35%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 65%, rgba(232,232,232,1) 72%, rgba(0,0,0,1) 80%, rgba(0,0,0,1) 100%);
    }
    .app-work{
        position: absolute;
        bottom: 0;
        height: 50px;
        border: 2px solid white;
        border-left: none;
        border-right: none;
        font-size: 35px;
        width: 100%;
        line-height: 50px;
    }
</style>