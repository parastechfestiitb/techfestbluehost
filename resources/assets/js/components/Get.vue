<template>
    <main>
        <div class="fixed">
            <div class="relative">
                <div class="story">
                    <div class="relative" v-if="theme">
                        <img class="story-background" :src="s3.replace('img-temp','background.jpg')" alt="story-background">
                        <img class="tv pen" :src="s3.replace('img-temp','tv.png')" alt="television">
                        <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/beJEBBTPDnI?rel=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                        <div class="story-right-content">
                            <h2 class="play-font the-story">
                                The Story
                            </h2>
                            <p>
                                Nova wants to continue on its space expedition with more efficiency and lesser time delay. He builds a device, that supposedly will make him travel faster in space. As soon as he plugs the switch and starts the device, things go wrong, resulting in Nova getting stuck in the Calabi-Yau Manifold, a continuously warping state of spacetime, where all sense of elapsed time is lost.
                            </p>
                        </div>
                        <div class="story-left-content">
                            <p>
                                He witnesses the fabric of time in its elementary form, where time slows down, moves backwards, forward or stops altogether. Witnessing the various eras of history, he learns about previous technology, and how nature was an essential part of life on earth. Similarly, he is able to glance into the future and learn about their technologies and ideas.
                            </p>
                            <p>
                                Having gained this knowledge, he evolves into a better self and vows to bring about a change in the world, by making  the best out of technology while respecting the nature.
                            </p>
                        </div>
                        <img :src="s3.replace('img-temp','mascot.png')" alt="Mascot" class="mascot">
                    </div>
                </div>
                <div class="homepage">
                    <div class="relative">
                        <div class="background-image pen" :style="{backgroundImage: 'url('+s3.replace('img-temp','background.jpg')+')'}"></div>
                        <img :src="s3.replace('img-temp','bottom-smoke.png')" alt="bottom-smoke" class="bottom-smoke pen">
                        <img :src="s3.replace('img-temp','portal.png')" alt="portal" class="portal pen">
                        <img :src="s3.replace('img-temp','middle-smoke.png')" alt="middle-smoke" class="middle-smoke pen">
                        <img :src="s3.replace('img-temp','upper-smoke.png')" alt="upper-smoke" class="upper-smoke pen">
                        <img :src="s3.replace('img-temp','nova.png')" alt="nova" class="nova">
                        <div class="item-interaction">
                            <img :src="s3.replace('img-temp','items.png')" alt="history-book" title="About Techfest" class="interaction item-img history-book pointer" @click="bookClick">
                        </div>
                        <div class="item-interaction">
                            <img :src="s3.replace('img-temp','items.png')" alt="camera" title="Techfest Memories" class="interaction item-img camera pointer" data-toggle="modal" @click="showVideo" >
                        </div>
                        <div class="item-interaction">
                            <img :src="s3.replace('img-temp','items.png')" alt="controller" class="item-img controller pointer" data-toggle="modal" >
                        </div>
                        <div class="item-interaction">
                            <img :src="s3.replace('img-temp','items.png')" alt="cc-tv" title="Theme" class="interaction item-img cc-tv pointer" @click="ccTvClick()">
                        </div>
                        <div class="item-interaction">
                            <img :src="s3.replace('img-temp','items.png')" alt="harddisk" title="Problem Statements" class="interaction item-img harddisk pointer" @click="hardDiskClick">
                        </div>
                        <div class="item-interaction">
                            <img :src="s3.replace('img-temp','items.png')" alt="lamp" class="interaction item-img lamp pointer" @click="lampClick">
                        </div>

                        <div class="scene">
                            <div class="panel" @click="$root.routeChange('/ca')">CA Portal is now live!</div>
                        </div>
                    </div>
                    <div class="homepage-footer">
                        <a class="message-footer" href="https://techfest.org/innovationchallenge">Know more about Innovation Challenge</a>
                        <img src="https://techfest.org/2018/footer.svg" alt="footer-background" class="footer-background">
                        <div class="d-flex justify-content-between">
                            <div class="left-footer d-flex justify-content-start">
                                <div class="nav-button" @click="$root.routeChange('/about-techfest')">About</div>
                                <div class="nav-button" @click="$root.routeChange('/Sponsors')">Sponsors</div>
                                <div class="nav-button" @click="$root.routeChange('/media')">Media</div>
                                <!--<div class="nav-button">Merchandise</div>-->
                            </div>
                            <div class="center-footer d-flex justify-content-center ">
                                <a aria-label="facebook" href="https://www.facebook.com/iitbombaytechfest/" target="_blank" class="fa fa-facebook footer-icon"></a>
                                <a aria-label="instagram" href="https://www.instagram.com/techfest_iitbombay/" target="_blank" class="fa fa-instagram footer-icon"></a>
                                <a aria-label="twitter" href="https://twitter.com/Techfest_IITB"  target="_blank" class="fa fa-twitter footer-icon"></a>
                                <a aria-label="linkedin" href="https://www.linkedin.com/company/techfest/" target="_blank" class="fa fa-linkedin footer-icon"></a>
                                <a aria-label="pinterest" href="https://in.pinterest.com/techfestiitbombay/" target="_blank" class="fa fa-pinterest footer-icon"></a>
                                <a aria-label="youtube" href="https://www.youtube.com/user/techfestiitbombay" target="_blank" class="fa fa-youtube footer-icon"></a>
                                <a aria-label="blog" href="https://blog.techfest.org" target="_blank" class="fa fa-bold footer-icon"></a>
                            </div>
                            <div class="right-footer d-flex justify-content-end">
                                <div class="nav-button" @click="$root.routeChange('/Hospitality')">Hospitality</div>
                                <div @click="$root.routeChange('/legal')" class="nav-button">Legal</div>
                                <div class="nav-button" @click="$root.routeChange('/contact-us')">Contact Us</div>
                            </div>
                        </div>
                        <div class="bottom-line"></div>
                        <div class="developer d-flex" style="margin-top: -1vw">
                            <div>
                                &COPY; 2018 TECHFEST, IIT BOMBAY
                            </div>
                            <div class="ml-auto">
                               Hosting partner : <img src="https://techfest.org/2018/Sponsors/bigrock.jpg" alt="Bigrock" style="height: 3vw">
                            </div>
                        </div>
                    </div>

                    <div class="scroll-down">&#10095; <span class="scroll-text">SCROLL</span></div>
                </div>
                <div class="footer">
                    <div class="about">
                        <h1 class="about-techfest">ABOUT TECHFEST</h1>
                        <p class="para-1">Techfest provides a platform for one and all to witness one of the most beautiful and groundbreaking amalgamations
                            of science and technology with pure delight and enthusiasm. With a display of motivating orations, state
                            of the art technology, cut-throat competitions and breathtaking performances for its audience, Techfest for
                            the past 21 years has served to be the ideal destination for the millennials to learn, create and experience the beauty of technology.</p>
                        <button class="button-style play-font btn btn-primary" data-toggle="modal" @click="stopScroll" >Watch the Aftermovie</button>
                    </div>
                    <div class="pm">
                        <img :src="s3.replace('img-temp','letter.jpg')" alt="PM Letter" class="letter">
                    </div>
                </div>
            </div>
            <div class="glass-block pen">
                <img v-for="x in arr9" :src="s3.replace('img-temp','items.png')" alt="glass" class="item-img glass pen" :class="'glass-'+x">
            </div>
        </div>

        <div class="modal fade" id="afterMovie" tabindex="-1" role="dialog" aria-labelledby="after-movie" aria-hidden="true" v-if="showAfterMovie" @click="hideAfterMovie">
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

        <div class="modal fade" id="showMovies" tabindex="-1" role="dialog" aria-labelledby="show-movies" aria-hidden="true" v-if="showMovies" @click="hideAfterMovie">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="d-flex w-100 h-100 justify-content-center">
                        <div class="d-flex h-100  align-items-center">
                            <div class="modal-body">
                                <div class="cross">
                                    <button type="button" class="close fa-3x " data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="d-flex  justify-content-around">
                                        <iframe width="960" height="500" src="https://www.youtube.com/embed/nfUkkjoFte8?controls=0&rel=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        <iframe width="960" height="500" src="https://www.youtube.com/embed/VaZVMXZP6II?controls=0&rel=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <div>
                                        <iframe width="960" height="500" src="https://www.youtube.com/embed/Pmp1R6Bw_Jw?controls=0&rel=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        <iframe width="960" height="500" src="https://www.youtube.com/embed/kZDed6XLb0Q?controls=0&rel=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    // navigation
    // function to change slides
    let movements = (homepageY, footerY, storyY = false) => {
        if (storyY) $(".story").css({ top: storyY });
        $(".homepage").css({ top: homepageY });
        $(".footer").css({ top: footerY });
    };
    //variables for slides
    let story = false,totalSlides = 2,counterSlides = 1, percentMouse;
    let glassCoordinates = [
        [[0,0],[-13, 65],[17 ,4],[5 ,-9],[-5, 58],[10 ,9],[13 ,16],[23 ,1],[26 ,64],[19 ,48]],
        [[0,0],[-5,91.2],[4,-6],[15,-9],[-12,46],[15,-19],[-3 ,13],[17 ,-7],[25 ,56],[19 ,58]]
    ];
    let counter = (dir) => {
        if (
            (counterSlides === totalSlides && dir === 1) ||
            (counterSlides === 1 && dir === -1) ||
            (counterSlides === 0 && dir === -1)
        ) return false;
        else counterSlides += dir;
    };
    let glassPageSet = (k) => {
        glassCoordinates[k].forEach((e,k)=>{
            $('.glass-'+k).css({'bottom':e[0]+'vw','left':e[1]+'vw'});
        });
    };
    $('.interaction').on('hover',function(){
        alert('yo');
    });
    var st = 0,
        lastScrollTop = 0,
        deBounce = true;
    var wheelFunction = function(e) {
        if (deBounce) {
            deBounce = false;
            if (e.deltaY > 0) {
                if (counterSlides === 0) {
                    movements("0", "100%", "-100%");
                    story = false;
                    glassPageSet(0);
                    $('.glass-block').animate({
                        'opacity':1
                    },1000);
                }
                else if (counterSlides === 1) {
                    movements("-100%", "0%");
                    glassPageSet(1);
                    setTimeout(function(){
                        $('.about,.pm').css('opacity',1).addClass('active');
                    },500);
                    $('.homepage-footer').addClass('active');
                }
                counter(1);
            }
            else if (e.deltaY < 0 && counterSlides === 2) {
                movements("0%", "100%");
                glassPageSet(0);
                counter(-1);
                $('.about,.pm').css('opacity',0);
                setTimeout(function(){
                    $('.about,.pm').removeClass('active');
                },600);
                $('.homepage-footer').removeClass('active');
            }
            setTimeout(function() {
                deBounce = true;
            }, 1000);
        }
    }
    require('../templates/cursor');

    export default {
        name: "Get",
        data:function(){
            return {
                homePng: _routes['homePng'],
                bgLeft: 0,
                s3: s3Link,
                deb: true,
                historyBookLeft: 0,
                arr9: [1,2,3,4,5,6,7,8,9],
                showAfterMovie: false,
                showMovies: false,
                theme: false
            }
        },
        methods: {
            handleMouseEvents: function(e){
                let per = e.pageX/window.innerWidth;
                let pet = e.pageY/window.innerHeight;
                if(this.deb){
                    this.deb = false;
                    this.bgLeft = -per;
                    $('.history-book,.camera').css('transform','translate('+per*3+'vw,'+pet+'vw)');
                    $('.controller').css('transform','translate('+per+'vw,'+pet+'vw)');
                    $('.harddisk').css('transform','translate(-'+per*2+'vw, '+pet+'vw)');
                    per=per*3;
                    $(".glass-1,.glass-2").css('transform','translate('+per*2+'vw,'+pet*2+'vw)');
                    $(".glass-3,.glass-4").css('transform','translate('+per*3+'vw,'+pet+'vw)');
                    $(".glass-6,.glass-5").css('transform','translate('+per+'vw,-'+pet*3+'vw)');
                    $(".glass-7,.glass-8").css('transform','translate(-'+per*2+'vw,'+pet*2+'vw)');
                    $(".glass-9").css('transform','translate('+per*2+'vw,'+pet*2+'vw)');
                    setTimeout(()=>{this.deb=true;},200);
                }
            },
            bookClick:function(){
                window.open('./about-techfest');
            },
            ccTvClick: function(){
                story = true;
                counterSlides = 0;
                this.theme = true;
                setTimeout(()=>movements("100%", "200%", "0%"),200);
                $('.glass-block').animate({
                    opacity: 0
                },1000);
            },
            hardDiskClick:function(){
                window.open('http://ps.techfest.org');
            },
            lampClick:function(){
                window.open('http://solarstudents.org/');
            },
            showVideo: function(){
                deBounce = false;
                this.showMovies= true;
                setTimeout(()=>$('#showMovies').modal('show'),10);
            },
            stopScroll: function(){
                deBounce = false;
                this.showAfterMovie= true;
                setTimeout(()=>$('#afterMovie').modal('show'),10);
            },
            hideAfterMovie: function(){
                deBounce = true;
                this.showAfterMovie = false;
            },
            createdFunction: function(){
                window.addEventListener('mousemove',this.handleMouseEvents);
                movements("-100%", "0%");
                setTimeout(()=>{
                    glassPageSet(0);
                },10);
                window.addEventListener('wheel',wheelFunction);
            }
        },
        destroyed: function(){
            window.removeEventListener('mousemove',this.handleMouseEvents);
            window.removeEventListener('wheel',wheelFunction);
        },
        created: function(){
            this.createdFunction();
            console.log(this.showMovies);
        },
        mounted:function(){

            setTimeout(function(){
                let countdown, init_countdown, set_countdown;

                countdown = init_countdown = function() {
                    let cd = document.getElementById('countdown');
                    countdown = new FlipClock(cd, {
                        clockFace: 'DailyCounter',
                        language: 'en',
                        autoStart: false,
                        countdown: true,
                        showSeconds: true,
                        callbacks: {
                            start: function() {
                                return false;
                            },
                            stop: function() {
                                return false;
                            },
                            interval: function() {
                                var time;
                                time = this.factory.getTime().time;
                                if (time) {
                                    return false;
                                }
                            }
                        }
                    });
                    return countdown;
                };

                set_countdown = function(days, hours, minutes, start) {
                    var elapsed, end, left_secs, now, seconds;
                    if (countdown.running) {
                        return;
                    }
                    now = new Date();
                    end = new Date('14 Dec 2018');
                    end = end.getTime();
                    left_secs = Math.round((end - now.getTime()) / 1000);
                    elapsed = false;
                    if (left_secs < 0) {
                        left_secs *= -1;
                        elapsed = true;
                    }
                    countdown.setTime(left_secs);
                    return countdown.start();
                };

                init_countdown();

                set_countdown(14, 5, 48, new Date());

            },500);

            $('.scroll-down').click(function(){
                wheelFunction({
                    deltaY:100
                });
            });
            let t = this;
            $("#showMovies").on("hidden.bs.modal", function () {
                t.showMovies = false;
            });
            setTimeout(()=>{
                $('.page-transition').animate({
                    left:'-200vw'
                },500);
            },1000);
        },
        watch: {
            $route:()=>{
                this.$root.pageLoad = true;
                this.createdFunction();
            }
        }
    }
</script>

<style scoped>
    .message-footer{
        padding-bottom: 1vw;
        text-decoration: none;
        color: #ffffff !important;
    }
    .homepage,.relative{
        background:black;
    }
    .fixed>.relative>*{
        position: absolute;
        height: 100%;
        width: 100%;
    }
    .scroll-down{
        font-size:2vw;
        color: #ffffff;
        position: absolute;
        bottom: 4.5vw;
        right: 3.4896vw;
        animation-name: goDown;
        animation-direction: alternate;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-out;
    }
    .scroll-text{
        position: absolute;
        bottom: 0.7vw;
        right:1.3vw;
        font-size: 0.5em;
        transform: rotate(180deg);
        letter-spacing: 0.3em;
        padding-left: 0.5em;
        margin-top: -2em;
    }
    @keyframes goDown {
        0%{
            transform: rotate(90deg) translateX(0vw);
        }
        100%{
            transform: rotate(90deg) translateX(1vw);
        }
    }
    .background-image{
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        width: 100vw;
        height: 51.854583vw;
        background-position: bottom center;
        background-size: 100% auto;
    }
    .item-interaction{
        z-index: 1;
    }
    .interaction:hover{
        mix-blend-mode: luminosity;
        filter:blur(1px);
    }
    .item-img{
        position: absolute;
        width:44vw;
        height:27vw;
    }
    .nova{
        position: absolute;
        bottom: 5vw;
        left: 0;
        right: 0;
        margin: auto;
        height: 13vw;
    }
    .history-book{
        clip: rect(21vw,26vw,27vw,19vw);
        left:40vw;
        bottom: 15vw;
        transition: transform 1s ease-out;
    }
    .camera{
        clip: rect(11vw,30vw,19vw,24vw);
        bottom:22vw;
        right:4vw;
        transition: transform 1s ease-out;
    }
    .controller{
        bottom: 12vw;
        left: -18vw;
        transition: transform 1s ease-out;
        clip: rect(0vw,38vw,7vw,31vw);
    }
    .cc-tv{
        left: 25vw;
        bottom:25vw;
        clip: rect(8vw,11vw,25vw,0);
    }
    .harddisk{
        left: 17vw;
        bottom: 9vw;
        clip: rect(22vw,18vw,27vw,11vw);
        transition: transform 1s ease-out
    }
    .glass-block{
        z-index:2;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }
    .glass{
        transition: transform 2s ease-out,left 2s ease-out,bottom 2s ease-out;
    }
    .glass-1{
        clip: rect(0,8vw,8vw,0);
    }
    .glass-2{
        clip: rect(0vw,13vw,6vw,8vw);
    }
    .glass-3{
        clip:rect(0,18vw,5.7vw,14vw);
    }
    .glass-4{
        clip:rect(0vw,24vw,6vw,20vw);
    }
    .glass-5{
        clip: rect(0vw,30vw,4vw,25vw);
    }
    .glass-6{
        clip: rect(17vw,18vw,21vw,13vw);
    }
    .glass-7{
        clip: rect(17vw,23vw,21vw,19vw);
    }
    .glass-8{
        clip: rect(20vw,30vw,25vw,27vw);
    }
    .glass-9{
        clip: rect(6vw,30vw,10vw,25vw);
    }
    /*portal*/
    .portal{
        width: 39.5vw;
        left: 0;
        right: 0;
        margin: auto;
        position: absolute;
        bottom: 5vw;
    }
    .bottom-smoke{
        width: 20vw;
        left: 0;
        right: 0;
        margin: auto;
        position: absolute;
        bottom: 13.2vw;
        animation-name: rotate;
        animation-duration: 30s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
    }
    .middle-smoke{
        width: 28vw;
        left: 0;
        right: 0;
        margin: auto;
        position: absolute;
        bottom: 8.7vw;
        animation-name: rotate;
        animation-duration: 40s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        animation-direction: reverse;
    }
    .upper-smoke{
        width: 39vw;
        left: 0;
        right: 0;
        margin: auto;
        position: absolute;
        bottom: 3.1vw;
        animation-name: rotate;
        animation-duration: 60s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        animation-direction: reverse;
    }
    @keyframes rotate {
        from{
            transform: rotate(0deg);
        }
        to{
            transform: rotate(360deg);
        }
    }
    .story{
        z-index: 0;
        background: #000;
        position: absolute;
        top:-100%;
    }
    .story-background{
        filter:blur(5px);
        width: 100vw;
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
    }
    .homepage-footer{
        position: fixed;
        bottom: -3.5vw;
        left: 3vw;
        right:3vw;
        margin: auto;
        font-size: 1.04vw;
        color: white;
        font-family: "Roboto", sans-serif;
        transition: bottom 300ms;
    }
    .homepage-footer.active{
        bottom: 0;
    }
    .homepage-footer .footer-background{
        width: 140vw;
        position: absolute;
        bottom: .7vw;
        left: -200vw;
        right: -200vw;
        margin: auto;
    }
    .footer {
        width: 100vw;
        height: 100vh;
        top:100vh;
    }
    .footer .about {
        position: absolute;
        top: 20vh;
        opacity:0;
        transition: opacity 500ms;
        left: 15vw;
        width: 40vw;
        font-size: 1.000003vw;
        color: white;
        font-family: "Roboto", sans-serif;
    }
    .footer .pm{
        left:60vw;
        top:20vh;
        width:35vw;
        opacity: 0;
        height:60vh;
        position: absolute;
    }
    .pm img{
        max-width: 35vw;
        max-height:60vh;
    }
    .footer .about.active,.pm.active{
        transition: opacity 300ms;
    }
    .about-techfest {
        margin-bottom: 3vw;
        font-size: 1.25vw;
        font-family: "Play", sans-serif;
    }
    .footer .about p {
        margin-bottom: 1.000003vw;
    }
    .button-style {
        background: black;
        color: white;
        border: 0.0520833333vw solid white;
        padding: 1vw;
        margin-top: 1vw;
        font-size:1vw;
    }
    footer {
        color: white;
        position: absolute;
        bottom: 0;
        left: 3vw;
        right: 3vw;
        font-size: 1.0000033333vw;
        font-family: "Play", sans-serif;
    }
    .bottom-line {
        margin-top: 2vw;
        margin-bottom: 1vw;
        padding-top:1px;
        border: none !important;
        background: linear-gradient(to right, rgba(0,0,0,1) 0%, rgba(0,0,0,1) 20%,  rgba(255,255,255,1) 35%, rgba(255,255,255,1) 50%, rgba(255,255,255,1) 65%, rgba(232,232,232,1) 72%, rgba(0,0,0,1) 80%, rgba(0,0,0,1) 100%);
    }
    .left-footer > * {
        margin-right: 2vw;
    }
    .right-footer > * {
        margin-left: 2vw;
    }
    .center-footer > * {
        margin-left: 1vw;
    }
    .center-footer a{
        color:white !important;
        text-decoration: none !important;
        transition: color 1s;
    }
    .center-footer a:hover{
        color: #aaa !important;
    }
    .developer {
        text-align: center;
        font-size:1em;
    }
    .pen{
        pointer-events: none;
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

    .cross {
        position: absolute;
        top: 0;
        right: 0.3vw;
    }

    .close {
        color: white;
    }

    #showMovies .modal-dialog{
        padding: 10vh 10vw 10vh 10vw;
        max-width: 100vw;
        margin:0;

    }
    #showMovies iframe{
        width:30vw !important;
        margin: 0.5vw;
        height: 15.62500vw !important;
    }
    .modal-content>div{
        background:#333;
    }
    .modal-body{
        background:#333;
    }
    .modal {
        z-index: 9999999;
    }
    .story>.relative{
        width:100%;
        height: 100%;
        position: relative;
    }
    #showMovies .modal-content{
        width:auto;
        margin:auto;
    }
    .tv{
        position: absolute;
        width: 32.1vw;
        height: 23.4vw;
        left: 10.4vw;
        top: 7.1vw;
        z-index: 1;
    }
    .lamp{
        clip: rect(10vw,43vw,24vw,30vw);
        POSITION: ABSOLUTE;
        bottom: 1vw;
        right: 7vw;
        transform: scale(0.6);
    }
    .story-right-content{
        position: absolute;
        top: 10vw;
        left: 47vw;
        color: #ffffff;
        font-size: 1vw;
        width: 40vw;
    }
    .story-left-content p{
        margin-bottom:2vw !important;
        padding-bottom:0!important;
    }
    .the-story{
        margin-bottom: 5vh;
        font-size:4em;
    }
    .story-left-content{
        position: absolute;
        left: 12vw;
        top: 31vw;
        width: 48vw;
        font-size: 1vw;
        color: white;
    }
    .video{
        position: absolute;
    }
    .story iframe{
        position: absolute;
        top: 20vh;
        left: 11.8vw;
        transform: scale(0.9);
        width: 29.3vw !important;
        height: 16.4vw !important;
    }
    .mascot{
        height:50vh;
        position: absolute;
        bottom: 0;
        right: 12vw;
    }

    @keyframes sceneText{
        0%{		color: rgba(255,255,255,0);	}
        20%{ color:rgba(255,255,255,0.3)}
        40%{color:rgba(255,255,255,0)}
        50%{ color: rgba(255,255,255,0)}
        60%{color: rgba(255,255,255,0.6)}
        100%{	color: rgba(255,255,255,1);	}
    }
    .scene{
        -webkit-animation: sceneText 1s infinite;
        animation: sceneText 1s infinite;
        -webkit-animation-direction: alternate;
        animation-direction: alternate;
        position: absolute;
        bottom: 14.4vw;
        left: 8.5vw;
        height: 7vw;
        width: 14.5vw;
    }
    .panel {
        width: 100%;
        height: 85%;
        -webkit-transform: perspective(20.6vw) rotateY(50deg) rotateZ(2deg) rotateX(3deg);
        transform: perspective(20.3vw) rotateY(43deg) rotateZ(3deg) rotateX(-2deg);
        text-align: center;
        font-size: 1.8vw;
        padding-top: 0.6vw;
        padding-left: 0;
    }
    .panel:hover{
        opacity:0.5;
    }
    body {
        background: black;
    }

    .countdown-wrapper {
        left: 50%;
        position: absolute;
        bottom: 2vw;
        transform: translate(-54%, -47%) scale(0.35);
    }

    .countdown.flip-clock-wrapper ul {
        height: 3.75vw;
        margin: 0 0.18vw;
        width: 2.5vw;
        box-shadow: 0 0.1vw 0.26vw rgba(0, 0, 0, 0.7);
    }

    .countdown.flip-clock-wrapper ul li {
        line-height: 3.75vw;
    }

    .countdown.flip-clock-wrapper ul li a div div.inn {
        background-color: white;
        color: black;
        font-size: 3.12vw;
        text-shadow: 0 0.05vw 0.10vw #000;
    }

    .countdown.flip-clock-wrapper ul,
    .countdown.flip-clock-wrapper ul li a div div.inn {
        border-radius: 0.26vw;
    }

    .countdown.flip-clock-wrapper ul li a div.down {
        border-bottom-left-radius: 0.26vw;
        border-bottom-right-radius: 0.26vw;
    }

    .countdown.flip-clock-wrapper ul li a div.up:after {
        top: 1.83vw;
    }

    .countdown .flip-clock-dot.top {
        top: 1.07vw;
    }

    .countdown .flip-clock-dot.bottom {
        top: 2.32vw;
    }

    .countdown .flip-clock-dot {
        height: 0.36vw;
        left: 0.36vw;
        width: 0.36vw;
        background: white;
    }

    .countdown .flip-clock-divider {
        height: 3.75vw;
        width: 1.1vw;
    }
    .countdown .flip-clock-divider:first-child {
        width: 0;
    }

    .countdown .flip-clock-divider.seconds .flip-clock-label,
    .countdown .flip-clock-divider.minutes .flip-clock-label {
        right: -5.73vw;
    }

    .countdown .flip-clock-divider .flip-clock-label {
        color: white;
        display: none;
        font-size: 0.78vw;
        width: 5.73vw;
    }

</style>
