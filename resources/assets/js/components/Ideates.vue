<template>
    <div class="controller" :style="{height:controllerHeight + 'px'}" @keyup.left="moveBlock(-1)" @keyup.right="moveBlock(1)">
        <div class="background-events bgp zi0">
            <img :src="s3.replace(':img','event-background.jpg')" alt="background" class="background">
            <img :src="s3.replace(':img','portal-broken.png')" alt="broken portal" class="portal-broken" :style="{filter: 'blur('+(3 - op/33)+'px)'}">
            <img v-for="v in portalImg" :src="s3.replace(':img','portal-parts.png')" :alt="'portal part '+v" class="part" :class="'part-'+v" :style="{right: mex*partSen[v]*(op*1.6<100?(1-op*1.6/100):0) + 'vw',bottom: met*partSen[v]*(op*1.6<100?(1-op*1.6/100):0) + 'vw'}">
            <img :src="s3.replace(':img','event-glow.png')" alt="back-to-start" class="event-glow" :class="op*1.6>100?'active':'pen'">
        </div>
        <main class="d-flex flex-row d-none zi1">
            <div class="navigation-compi d-flex flex-row active">
                <div class="content-nav-compi d-flex align-items-center" v-if="elements!==null">
                    <div class="content">
                        <div class="compi-title nav-compi-item pointer" @click="$root.routeChange('/competitions')">Competitions</div>
                        <div v-for="(elem,key) in competitions.slice(1,competitions.length-1)" class="nav-compi-item pointer" @click="$root.routeChange('/competitions')" v-if="elem.zonal===0">
                            {{elem.name}}
                        </div>
                        <br>
                        <div class="compi-title nav-compi-item pointer" @click="$root.routeChange('/zonals')">TechnoRion</div>
                        <div v-for="(elem,key) in competitions.slice(1,competitions.length-1)" class="nav-compi-item pointer" @click="$root.routeChange('/competitions')" v-if="elem.zonal===1">
                            {{elem.name}}
                        </div>
                        <br>
                        <div class="compi-title nav-compi-item pointer" @click="changeInfo(key+1)">Ideate</div>
                        <div v-for="(elem,key) in elems().slice(1,elems().length-1)" class="nav-compi-item pointer" @click="changeInfo(key+1)">{{elem.name}}</div>
                    </div>
                </div>
                <div class="loader d-flex align-items-center">
                    <div class="bar-1"></div>
                    <div class="bar-2"></div>
                </div>
            </div>
            <div class="block" v-for="(val,key) in elems()" :style="{ transform : 'translateX(' + position(key) +'vw)', width: wid(key) + 'vw'}" :id="'block-'+key" :class="[key===elementLength?'fixed-block pen':'',key===frame?'active-block':'passive-block','compi-'+val.name]" @click="changeInfo(key)">
                <div v-if="key===0" class="relative">
                    <div class="total-count" :style="{top:topTotalCount(key)+'vh',opacity:opacityTotalCount(key),left: (leftName(key)+2.5)+'vw'}">/{{c-1}}</div>
                    <div class="short-description-first" :style="{opacity: opacityPrizeMoney1(key), left: leftName(key) + 'vw'}" v-html="val.description.short_description"></div>
                    <div class="name-first play-font" :style="{fontSize: fontName(key) + 'vw',left: (leftName(key)+4) + 'vw'}" v-html="val.name"></div>
                    <button class="explore-button explore-more play-font" :style="{left: leftName(key) + 'vw'}" @click="changeInfo(1)">Explore All Ideates →</button>
                    <div class="img-block" :style="{backgroundImage: 'url('+val.description.image+')', height: imgBlockHeight(key) +'vh',left: imgBlockLeft(key)+'vw'} " alt="Ideate"></div>
                </div>
                <div v-if="key!==elementLength && key!==0" class="relative">
                    <div class="current-number" :style="{top:topCurrentNumber(key)+'vh',left:leftCurrentNumber(key)+'vw',opacity:opacityCurrentNumber(key)}">{{(key < 10) ? '0' + key.toString() : key}}</div>
                    <div class="total-count" :style="{top:topTotalCount(key)+'vh',opacity:opacityTotalCount(key),left: (leftName(key)+2.5)+'vw'}">/{{c-1}}</div>
                    <div class="short-description" :style="{opacity: opacityPrizeMoney1(key), left: leftName(key) + 'vw'}" v-html="val.description.short_description"></div>
                    <div class="prize-money-1" :style="{opacity: opacityPrizeMoney1(key),left: leftName(key)+'vw'}">Prize Worth INR&nbsp;{{ numberWithCommas(val.amount) }}/-</div>
                    <div class="compi zonal-event" v-if="val.zonal===1" :style="{opacity:opacityPrizeMoney1(key)}">TechnoRion</div>
                    <div class="name play-font" :style="{fontSize: fontName(key) + 'vw',left: leftName(key) + 'vw'}">{{val.name}}</div>
                    <div class="explore-button btn" :style="{opacity:opacityPrizeMoney1(key)}">Explore More</div>
                    <div class="tags" :style="{left: leftName(key) + 'vw'}" v-if="val.description.tags!==null">{{val.description.tags}}</div>
                    <div class="img-block" :style="{backgroundImage: 'url('+val.description.image+')', height: imgBlockHeight(key) +'vh',left: imgBlockLeft(key)+'vw'} " alt="Competition"></div>
                    <div class="prize-money-2" :style="{opacity: opacityPrizeMoney2(key),top: heightPrizeMoney2(key) + 'vh'}">
                        Prizes Worth
                        <br>INR&nbsp;{{ numberWithCommas(val.amount) }}/-
                    </div>
                </div>
                <div v-else class="relative">
                    <!--<div class="endblock" :style="{opacity:opacityPrizeMoney1(key-1)}">-->
                    <!--<div>-->
                    <!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis in inventore ipsum iusto odit soluta. Fugit molestiae nisi non. Amet eveniet fugiat nostrum ratione? Doloribus et labore maiores nemo non?-->
                    <!--</div>-->
                    <!--<div class="go-to-first play-font" @click="goToFirst">-->
                    <!--<i class="fas fa-chevron-left"></i> Back to First-->
                    <!--</div>-->
                    <!--</div>-->
                </div>
            </div>
            <div class="back-to-start-text" v-if="op*1.6>100" @click="goToFirst">BACK TO<br>START</div>
        </main>
        <div class="scroll-down">SCROLL</div> <div class="scroll-text">&#10095;</div>
    </div>
</template>

<script>
    let s3l= "https://techfest.org/2018/:img";
    let ob = 1.5;
    let or = 4;
    const parts = [
        [[0,0],[11.3+or,18.1+ob],[25.6+or,18.6+ob],[52+or,15.3+ob],[56+or,30.9+ob],[87+or,22.9+ob],[40+or,2.9+ob]],
        [[0,0],[6.9+or,8.5+ob],[8+or,14.7+ob],[30+or,18.8+ob],[32+or,22.9+ob],[54+or,20+ob],[26.8+or,5.3+ob]],
        [[0,0],[3.2+or,3.8+ob],[-1+or, 6.3+ob],[13.5+or,14.3+ob],[11.5+or,14.2+ob],[25.5+or,15.6+ob],[13.6+or,8.2+ob]]
    ];
    export default {
        name: "Competitions",
        data: function(){
            return {
                elements: null,
                portalImg: [1,2,3,4,5,6],
                showNav: false,
                elementLength: 0,
                frame: this.$root.competition,
                c: 0,
                w: 0,
                prev: 0,
                fp: 0,
                scale :0,
                controllerHeight: 100,
                op: 0,
                fl: 0,
                smoothScroller: null,
                description: null,
                element: null,
                detailsActive: false,
                prrvOp: 0,
                prevController: 0,
                mt: 0,
                s3: s3l,
                mex: 0,
                met: 0,
                partSen: [0,2,3,5,6,10,5],
                allowSmoothScroll: true,
                debouncer: true,
                zonalsOpen: false,
                zonalsDerscription: ""
            }
        },
        methods: {
            //Data of page
            elems: function(){
                //returns the list of competitions
                //todo add the starter and footer to this section
                if(this.zonalsOpen===true){

                    return this.elements.filter((element)=>{
                        return element.name === 'Competitions' || element.zonal === 1;
                    })
                }
                else return this.elements;
            },
            numberWithCommas: (x) => {
                x=x.toString();
                let lastThree = x.substring(x.length-3);
                let otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers !== '')
                    lastThree = ',' + lastThree;
                return  otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            },
            changeDescription: function(x){
                this.description = (this.element.description.description[x]);
                $('.submenu').removeClass('active');
                $('#menu-'+x).addClass('active');
            },
            position: function(e){
                let frame = this.frame;
                let fp = this.fp;
                if(e===frame)
                    return (52.08333333 - 47.4791666663 * fp);
                else if(e=== frame+1)
                    return (69.9803 - 17.8969667 * fp);
                else if(e===frame+2)
                    return (87.8623 - 17.8969667* fp);
                else if(e===frame+3)
                    return (103.645833 - 15.7986111111 * fp);
                else if(e===frame+4)
                    return (113.194444444 + 2.08333333*4 - 15.7986111111 * fp);
                else if(e===frame-1)
                    return ( 4.6041666667 - 45.3958333333 * fp);
                else if(e===frame-2)
                    return ( -40.7916667 - 45.3958333333 * fp);
                else if(e<frame-3)
                    return (-89.5833333332 - 2.08333333*3);
                else return (113.194444444);
            },
            wid: function(e){
                let frame = this.frame;
                if(e===frame) return (15.7986111111 + 29.5972222222 * this.fp);
                else if(e<frame) return 45.3958333333;
                else return 15.7986111111;
            },
            topCurrentNumber: function(e){
                let frame = this.frame;
                if(e===frame){
                    if(this.fp<0.5) return 36;
                    else return 15;
                }
                else if(e>=frame) return 36;
                else return 15;
            },
            leftCurrentNumber: function(e){
                let frame = this.frame;
                if(e===frame && this.fp>0.5) return 1.506024096 +  18 * (this.fp-0.5);
                else if(e>=frame) return 1.506024096;
                else return 10.506024096;
            },
            opacityCurrentNumber: function(e){
                let frame = this.frame;
                let fp = this.fp;
                if(e===frame && fp<0.4) return 1 - fp*2.5;
                else if(e===frame && fp>0.6) return (fp - 0.6)*2.5;
                else if(frame===e) return 0;
                else return 1;

            },
            topTotalCount: function(e){
                let frame = this.frame;
                if(e===frame) return 38+18*this.fp;
                else if(e<frame) return 50;
                else return 38;
            },
            opacityTotalCount:function(e){
                let frame = this.frame;
                if(e===frame) return 1-10*this.fp;
                else if(e<frame) return 0;
                else if(e>frame) return 1;
            },
            imgBlockHeight: function(e){
                let frame = this.frame;
                if(e===frame) return (17.318181818 + 19.68181818181*this.fp);
                else if(e<frame) return 37;
                else return 17.318181818;
            },
            imgBlockLeft: function(e){
                let frame = this.frame;
                if(e===frame) return (6*this.fp);
                else if(e<frame) return 6;
                else return 0;
            },
            handleMouseMove: function(e){
                this.mex = e.pageX/window.innerWidth;
                this.met = e.pageX/window.innerHeight;
            },
            partCoord: function(x1,x2,x3){
                let a = x3/5000 - x2/2500 + x1/5000;
                let b = -x3/100 + x2/25 - 3*x1/100;
                let c = x1;
                let op = this.op*1.6;
                op = op>100?100:op;
                return -(a * op * op + b * op + c);
            },
            opacityPrizeMoney2: function(e){
                let frame = this.frame;
                if(e===frame) return 1-this.fp*3 ;
                else if(e < frame) return 0;
                else return 1;
            },
            opacityPrizeMoney1: function(e){
                let frame = this.frame;
                if(e===frame) return this.fp;
                else if(e<frame) return 1;
                else return 0;
            },
            heightPrizeMoney2: function(e){
                let frame = this.frame;
                if(e===frame) return 75.72727272 + 30 * this.fp;
                else if(e < frame) return 85.72727272;
                else return 75.72727272;
            },
            fontName: function(e){
                let frame = this.frame;
                if(e===frame) return (1.45833333333+0.625*this.fp);
                else if(e<frame) return 2.08333333333;
                else return 1.45833333333;
            },
            leftName: function(e){
                let frame = this.frame;
                if(e===frame) return 1.506024096 + 13*this.fp;
                if(e<frame) return 14.506024096;
                else return 1.506024096;
            },

            //Scroll
            handleScroll: function(){
                this.op = 100 * (document.scrollingElement.scrollTop / this.w) - 0.000001;
                clearTimeout(this.smoothScroller);
                this.smoothScroller = setTimeout(()=> this.smoothScroll(),300);
                return false;
            },
            macHandleScroll: function(e){
                if(this.debouncer===true){
                    this.debouncer=false;
                    let t = this;
                    let op = t.op;
                    if(e.deltaY>0) {
                        if(op>85) {
                            t.debouncer = true;
                            return;
                        }
                        $({progress: 0}).animate({progress: 14.45}, {
                            duration: 300,
                            step: function() {
                                t.op=op+this.progress;
                            }
                        });
                    }
                    else if(e.deltaY<0) {
                        if(t.frame===0) {
                            t.debouncer = true;
                            return;
                        }
                        $({progress: 0}).animate({progress: 14.45}, {
                            duration: 300,
                            step: function() {
                                t.op=op-this.progress;
                            }
                        });
                    }
                    setTimeout(function(){
                        t.debouncer = true;
                    },500);
                }
            },
            smoothScroll: function(){
                let k = (this.c * this.scale - $(window).height())/this.c;
                if(this.fp<0.5){
                    $("html").stop().animate({
                        scrollTop: (this.frame-1)*k
                    },100,'linear');
                }
                else{
                    $("html").stop().animate({
                        scrollTop: this.frame*k
                    },100,'linear');
                }
                return false;
            },
            handleResize: function(){
                this.controllerHeight = (this.c - 0.8)*this.scale;
                this.w = this.c * this.scale - $(window).height();
                window.addEventListener('scroll',this.handleScroll);
                return false;
            },
            changeInfo: function(e){
                if(e===this.c) return false;
                if(e!==this.frame){
                    $('html,body').stop().animate({
                        scrollTop: e*(this.c * this.scale - $(window).height())/this.c
                    },300,'linear');
                    return false;
                }
                if(this.detailsActive){
                    this.op = this.prevOp;
                    this.controllerHeight = this.prevController;
                    setTimeout(()=>$(window).scrollTop(this.frame*(this.c * this.scale - $(window).height())/this.c),10);
                    return this.detailsActive=false;
                }
                if(this.fp<0.9 || e===0)
                    return false;
                this.$root.routeChange(this.$router.resolve({name:'competition',params:{name:this.elements[e].name}}).href);
                return false;
            },
            goToFirst: function(){
                $("html").stop().animate({
                    scrollTop: 0
                }, 500, 'linear');
                return false;
            },
            handleKeyPress: function(e){
                if(this.$root.searchOpen) return false;
                if(e.keyCode === 39)
                    this.changeInfo(this.frame+1);
                else if(e.keyCode===37)
                    this.changeInfo(this.frame - 1);
                else if(e.keyCode===13)
                    $('#block-'+this.frame).click();
                return false;
            }
        },
        watch: {
            op : function(op){
                if(this.detailsActive===true) {
                    this.mt = -$(window).scrollTop();
                    return;
                }
                this.frame = Math.ceil(op/this.fl);
                this.fp = this.frame===0?1:(op % this.fl) / this.fl;
                for(let p = 1;p<7;p++){
                    $('.part-'+p).css({
                        'transform': 'translate(' + this.partCoord(parts[0][p][0], parts[1][p][0], parts[2][p][0]) + 'vw,' + this.partCoord(parts[0][p][1], parts[1][p][1], parts[2][p][1]) + 'vw)',
                        'filter':'blur('+(1 - op/100)*3+'px)'
                    });
                }
                return false;
            },
            detailsActive: function(d){
                d?$('.block.passive-block').hide():$('.block.passive-block').show();
            }
        },
        created: function () {

            axios.post(_routes.competitionsPost).then(r=>this.competitions=r.data);
            axios.post(_routes.ideatesPost)
                .then((response) => {
                    let elements = response.data;
                    elements.forEach((e, i, a) => {
                        a[i]['description'] = JSON.parse(a[i]['description']);
                    });

                    let c = Object.keys(elements).length - 1,
                        scale = c * 400,
                        // controllerHeight = (c-0.8) * scale,
                        controllerHeight = (c-0.6) * scale,
                        w = c * scale - $(window).height(),
                        fl = 100 / c;

                    this.elements = elements;
                    this.c = c;
                    this.scale = scale;
                    this.controllerHeight = controllerHeight;
                    this.w = w;
                    this.fl = fl;
                    this.element = elements[0];
                    this.elementLength = Object.keys(elements).length - 1;
                    window.addEventListener('resize', this.handleResize);
                    window.addEventListener('keydown',this.handleKeyPress);
                    window.addEventListener('mousemove',this.handleMouseMove);
                    window.addEventListener('scroll', this.handleScroll);

                    for(let key in elements[0].description.description){
                        $('#menu-'+key).addClass('active');
                        this.description = elements[0].description.description[key];
                        break;
                    }
                    setTimeout(function(){
                        $('.navigation-compi').removeClass('active');
                    },2000);
                    this.op = 0.1;
                    setTimeout(function(){
                        $('.page-transition').animate({left:'-200vw'},500);
                    },300);
                    $('html').animate({
                        scrollTop:10
                    },10);
                    return false;
                });
        },
        destroyed (){
            window.removeEventListener('scroll',this.handleScroll);
            window.removeEventListener('scroll',this.macHandleScroll);
            window.removeEventListener('resize',this.handleResize);
            window.removeEventListener('keypress',this.handleKeyPress);
            window.removeEventListener('mousemove',this.handleMouseMove);
        }
    }
</script>

<style scoped>
    .zi0{
        z-index: 0;
    }
    .zi1{
        z-index: 1;
    }
    .bar-1,.bar-2{
        border: 0.15vw solid white;
        height: 3.3vh;
        margin-right: 0.4vw;
        border-radius: 0.3vw;
        transition: transform 300ms;
    }
    .navigation-compi{
        height:100vh;
        position: absolute;
        bottom:0;
        left:-13vw;
        z-index: 2;
        font-size:2vw;
        padding-left:0.4vw;
        background: rgb(0, 0, 0);
        transition: left 300ms;
    }
    .navigation-compi:hover,.navigation-compi.active{
        left:0;
    }
    .navigation-compi:hover .bar-1{
        transform: rotate(-45deg) translateY(1.3vw);
    }
    .navigation-compi:hover .bar-2{
        transform: rotate(45deg) translateY(-0.4vw);
    }
    .navigation-compi .loader{
        margin-right: 2vw;
        margin-left: 2.5vw;
    }
    .compi-title{
        font-size:1.7em;
        color:#aaa;
    }
    .content-nav-compi{
        color: #ffffff;
        font-size: 1vw;
    }
    .content-nav-compi .content{
        width:12vw;
    }
    .nav-compi-item{
        padding-left: 1vw;
        padding-right:2vw;
        transition: font-size 300ms, height 100ms;
        margin-bottom: 0.5vw;
        line-height: 1.5vw;
        height:1.5vw;
        max-width: 14.5vw;
        text-overflow: ellipsis;
        width: 14.5em;
    }
    .nav-compi-item:hover, .nav-compi-item.active{
        font-size: 1.5em;
    }
    .pen{
        pointer-events: none;
    }
    *{
        transition-timing-function: linear !important;
        transition: none;
    }
    .background-position{
        position: fixed;
        top:0;
        left:0;
        width: 100%;
        height: 100%;
        pointer-events: none;
    }
    .bgp *{
        pointer-events: none;
    }
    .bgp .background{
        position: fixed;
        top:0;
        left:0;
        width: 100vw;
        height: 100vh;
        filter: blur(4px);
    }
    .portal-broken{
        position: fixed;
        position: fixed;
        right: 4vw;
        bottom: 3.5vw;
        width: 40vw;
        height: auto;
        z-index: 1;
    }

    .part{
        position: fixed;
        width: 18.7212276vw;
        height: auto;
        right:0;
        bottom: 0;
        transition: right 1s ease-out, bottom 1s ease-out, filter 1s linear,transform 200ms linear;
        z-index:1;
        pointer-events: none;
    }

    .event-glow {
        width: 30vw;
        height: 30vw;
        position: fixed;
        bottom: 5.8vw;
        right: 8.7vw;
        z-index: 0;
        pointer-events: none;
        opacity: 0;
    }

    .event-glow.active {
        animation-name: flicker-in;
        animation-iteration-count: initial;
        animation-duration: 2s;
        opacity: 1;
    }
    @keyframes flicker-in {
        0% {opacity: 0;}
        25%{ opacity: 0.4;}
        30%{opacity: 0.0;}
        40% {opacity: 0.8;}
        60% {opacity: 0;}
        80% {opacity: 1;}
        90% {opacity: 0.4;}
        100% {opacity: 1;}
    }
    .back-to-start-text{
        font-size: 2.9vw;
        position: fixed;
        bottom: 16vw;
        right: 18vw;
        text-align: center;
        font-weight: bold;
        filter: blur(25px);
        animation-name: flicker-in-blur;
        animation-iteration-count: initial;
        animation-duration: 2s;
        filter: blur(0);
    }

    @keyframes flicker-in-blur {
        0% {filter: blur(25px);}
        25%{ filter: blur(15px);}
        30%{filter: blur(20px);}
        40% {filter: blur(5px);}
        60% {filter: blur(15px);}
        80% {filter: blur(5px);}
        90% {filter: blur(10px);}
        100% {filter: blur(0px);}
    }
    .part-1{
        clip: rect(0,15vw,5vw,9vw);
    }
    .part-2{
        clip: rect(0,9vw,6vw,0);
    }
    .part-3{
        clip: rect(6vw,20vw,11.3vw,8vw);
    }
    .part-4{
        clip: rect(6.8vw,7.9vw,15.3vw,0);
    }
    .part-5{
        clip: rect(10.8vw,17vw,26vw,10vw);
    }
    .part-6{
        clip: rect(15.8vw,10vw,26vw,0);
    }

    main {
        height: 100vh;
        width: 100%;
        position: fixed;
        font-size: 0;
        white-space: nowrap;
        overflow: hidden;
        opacity: 1;
    }
    main.visible-main>*{
        opacity:1;
    }
    main .block {
        font-size: 15px;
        height: 100%;
        width: 15vw;
        margin: 0;
        padding: 0;
        display: inline-block;
        position: absolute;
        transform: translateX(100vw);
        color:white;
    }
    .fixed-block{
        width: 50vw !important;
    }
    .short-description-first{
        position: absolute;
        top:21.7vh;
        height:20vh;
        width:28vw;
        font-size: 0.900000000000vw;
    }
    .short-description{
        height: 20vh;
        width: 28vw;
        position: absolute;
        top: 15.5vh;
        font-size: 0.9000000000003vw;
    }
    .relative {
        position: relative;
        width: 100%;
        height: 100%;
        overflow:hidden;
        white-space: normal;
        font-size: 1.04166666667vw;
    }
    .prize-money-1{
        position: absolute;
        opacity: 0;
        font-weight: bold;
        bottom: calc(49.125vh + 3.64583333333vw);
        left: 1.506024096vw;
        font-size: 1.04166666667vw;
    }
    .current-number{
        position:absolute;
        left:1.5064024096vw;
        font-size: 1.04166666667vw;
        font-weight: bold;
        font-size:2.083333333333vw;
    }
    .total-count{
        position: absolute;
        left: 3.5064024096vw;
    }
    .name-first{
        position: absolute;
        bottom: 79.5625vh;
        left:3.506024096vw;
        margin-left:-5vw;
    }
    .name{
        position:absolute;
        bottom:47.5625vh;
        left:1.506024096vw;
        max-width: 20vw;
        text-overflow: clip;
        height:1.5em;
        line-height: 1.2em;

    }
    .tags{
        position:absolute;
        bottom:45vh;
        left:1.506024096vw;
        max-width: 20vw;
        text-overflow: clip;
        text-transform: uppercase;
        font-size:0.8em;
    }
    .explore-button{
        position:absolute;
        bottom:47.5625vh;
        left:34.5035vw;
        border-radius: 0;
        font-family: 'play-font',sans-serif;
        font-size: 1vw !important;
        border: 0.15vw solid white;
        background: transparent;
        padding: 0.6vw;
        color:white;
        min-width: 8.8vw;
        transition: color 300ms, background 300ms;
    }
    .explore-button:hover{
        background:#fff;
        color:#000;
    }
    .zonal-event{
        position:absolute;
        top:40.2625vh;
        left:34.5035vw;
        border-radius: 0;
        font-family: 'play-font',sans-serif;
        min-width: 10.3333vw;
        opacity: 0;
        font-size: 1.5vw !important;
    }
    .img-block {
        max-height: 45.454545vh;
        background: no-repeat top right;
        background-size: auto 100%;
        height:100%;
        position: absolute;
        top: 55.5vh;
        left: 0;
        right: 0;
        margin: 0.39vw;
    }
    .prize-money-2{
        position:absolute;
        opacity:1;
        top:74.2898vh;
        left:1.506024096vw;
        width:calc(100% - 3.012048192vw);
    }
    .zonal-container{
        background-color: rgba(255, 255, 255, 0);
        height: 41vh;
        left:4.5vw;
        padding-left: 9.7vw;
        padding-right:2vw;
    }
    .zonal-title{
        font-size: 1.6666vw;
        margin-top: 1vw;
    }
    .zonal-description{
        font-size: 0.833333vw;
        margin-bottom: 2vh;
    }
    .endblock{
        position:absolute;
        width: 30vw;
        left:10vw;
        top:40vh;
    }
    .details{
        position:fixed;
        width:60vw;
        height:100vw;
        left:50vw;
        z-index:2;
        color:white;
    }
    .navigation-circles{
        position:fixed;
        bottom:2vh;
        right:5vw;
        font-size:0.90000000000033vw;
        padding:2px;

    }
    .navigation-circles>*{
        width: 1.66666666666vw;
        text-align: center;
        color: #ffffff;
    }
    .navigation-circles>*:first-child{
        color:red;
    }
    .navigation-circles>*:last-child{
        color:red;
        margin-right:0.900000000000333vw;
    }
    .bigger{
        font-size: 2em;
    }
    .fixed-section {
        position: fixed;
        bottom: 50vh;
        left: 50vw;
        right: 0;
        z-index:3;
        height:40vh;
        margin-top:0;
    }
    .relative {
        position: relative;
        height: 100%;
    }
    .register {
        position: absolute;
        width: 100%;
        bottom: 26.2vh;
    }
    button.register {
        width: 10.3333vw;;
        border-radius: 0;
        font-family: 'play-font',sans-serif;
        position: absolute;
        bottom: -4.7vh;
        margin-left: 3vw;
    }
    .register i {
        font-size: 30px;
        top: 3px;
        left: 160px;
        position: absolute;
    }
    .register span {
        position: absolute;
        font-size: 10px;
        left: 200px;
        top: 3px;
        width: 150px;
    }
    .problem-statement {
        position: absolute;
        bottom: 15vh;
    }
    .problem-statement button {
        border-radius: 0;
        margin-right: 10px;
        font-family: 'play-font',sans-serif;
        width: 10.3333vw;
        margin-left: 3vw;
    }
    .content-fixed {
        font-size: 0.9000000000003vw;
        position: fixed;
        top:50vh;
        left:52.5vw;
        height: 40vh;
        width: 40vw; /*change content wrapper too*/
        overflow: hidden;
        z-index: 4;
    }
    .explore-more{
        width:20vw;
    }
    .explore-zonal{
        top: 20vh;
        width: 20vw;
        bottom:auto !important;
    }
    .content-wrapper{
        height:auto;
        white-space: normal;
        width:40vw;
    }
    .content p {
        margin-bottom: 12px;
    }


    .scroll-down{
        font-size:1.5vw;
        color: #ffffffaa;
        position: fixed;
        z-index: 2;
        bottom: 4.4vw;
        right: 4.4896vw;
    }
    .scroll-text{
        font-size:2vw;
        color: #ffffff;
        position: fixed;
        z-index: 2;
        bottom: 4.5vw;
        right: 2.4896vw;
        animation-name: goDown;
        animation-direction: alternate;
        animation-duration: 0.5s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-out;
    }

    @keyframes goDown {
        0%{
            transform:rotate(90deg) translateX(0vw);
        }
        100%{
            transform:rotate(90deg) translateX(1vw);
        }
    }
</style>