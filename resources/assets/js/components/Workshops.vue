<template>
    <main>
        <!--<div class="scroll-down">&#10095; <span class="scroll-text"></span></div>-->
        <div class="fade-out"></div>
        <div class="row">
            <div class="card-ws" v-for="workshop in workshops" :data-id="workshop.id">
                <div class="card-container">
                    <div class="head">
                        <div class="image"> <img :src="workshop.description.image"/></div>
                        <!--<div class="register-status bg-success" v-if="workshop.registration"> <span>Registrations Open</span></div>-->
                        <!--<div class="register-status bg-danger" v-else> <span>Registrations Closed</span></div>-->
                    </div>
                    <div class="body">
                        <div v-if="workshop.id==79" class="title">AI Summit</div>
                        <div v-else class="title">{{workshop.name}}</div>
                        <div class="description">{{workshop.description.short_description}}</div>
                        <div @click="$root.routeChange(workshop.url)" v-if="workshop.id===59 || workshop.id===56 || workshop.payment_amount==null || workshop.payment_amount===''" class="explore"> <div class="span-white">Registrations Closed</div> </div>
                        <div v-else class="explore" @click="$root.routeChange(workshop.url)"> <div class="sp an-white">Register &amp; Explore More</div> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fade-in"></div>
        <v-footer></v-footer>
    </main>
</template>

<script>
    let s3= "https://techfest.org/2018/:img";
    let debounce = false;
    let ob = 1.5;
    let or = 4;
    const parts = [
        [[0,0],[11.3+or,18.1+ob],[25.6+or,18.6+ob],[52+or,15.3+ob],[56+or,30.9+ob],[87+or,22.9+ob],[40+or,2.9+ob]],
        [[0,0],[6.9+or,8.5+ob],[8+or,14.7+ob],[30+or,18.8+ob],[32+or,22.9+ob],[54+or,20+ob],[26.8+or,5.3+ob]],
        [[0,0],[3.2+or,3.8+ob],[-1+or, 6.3+ob],[13.5+or,14.3+ob],[11.5+or,14.2+ob],[25.5+or,15.6+ob],[13.6+or,8.2+ob]]
    ];
    $('.scroll-down').click(function(){
        $(window).scrollPageDown();
    });
    export default {
        name: "Workshops",
        components: {
            'v-footer':require('./Footer')
        },
        data: function(){
            return {
                s3: s3,
                portalImg: [1,2,3,4,5,6],
                elemGroup: [],
                workshops:[]
            }
        },
        created: function () {
            axios.get('https://techfest.org/api/workshop/')
                .then((r) => {
                    let e = r.data;
                    e = e.filter((a)=>{
                        return a.id!==24;
                    });
                    $(e).each((e,c)=>{
                        c.description = JSON.parse(c.description);
                        c.registration = (new Date() - new Date(c.registration))>0;
                    });
                    this.elements = e.sort((a,b)=>a.order_by>b.order_by);
                    e = e.reverse();
                    this.workshops = e;
                    $('.page-transition').animate({left:'-200vw'},500);
                });
        },
        mounted: function(){

        },
        methods: {
            numberWithCommas: (x) => {
                x=x.toString();
                let lastThree = x.substring(x.length-3);
                let otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers !== '')
                    lastThree = ',' + lastThree;
                return  otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            },
            elems: function(){
                return this.elements;
            },
            changeDescription: function(){
            },
            handleScroll: function(e){
                if(debounce) return;
                debounce = true;
                setTimeout(()=>{
                    debounce=false;
                },1000);
                let t = $(e.target);
                // console.log(e.screenX/t.width())
            }
        },
        watch: {
            op: function(){

            },
            elements: function(){
                let e = this.elements,t = [];
                $(e).each((k,l)=>{
                    if(!(k%3)) t[k/3]=[];
                    t[parseInt(k/3)][k%3] = l;
                });
                this.elemGroup = t;
            }
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

<style>
    main{
        height: 100vh;
        overflow: hidden;
        position: absolute;
        top: 0;
        left: 0;
    }
    html,body{
        overflow:hidden;
    }
    .row{
        height: 74vh;
        overflow-x:hidden;
        overflow-y: auto;
        padding-bottom: 5vh;
        margin: 15vh auto;
        width: 100vw;
    }
    .card-ws {
        width: 20vw;
        height: 17.95vw;
        border-radius: 10px;
        box-shadow: 0 0 15px white;
        transform: scale(0.8);
        transition: all 1s;
    }
    .card-ws * {
        transition: all 1s;
    }
    .card-ws .card-container {
        position: relative;
        height: 21.95vw;
        width: 20vw;
        border-radius:10px;
        overflow: hidden;
        font-size: 1.3vw;
    }
    .head {
        position: absolute;
        top: 0;
        left: 0;
        width: 20vw;
        height: 12.5vw;
        box-shadow: 4px 0 10px 2px white;
        overflow: hidden;
    }
    .head .register-status {
        position: absolute;
        bottom: 1vw;
        padding: 0.5vw;
        font-size: 1vw;
        color: white;
        font-weight: bold;
        left: 0;
    }
    .head .image {
        height: 11.5vw;
        margin: auto -200vw;
        text-align: center;
    }
    .head .image img {
        margin: auto;
        min-width: 20vw;
        height: 100%;
    }
    .card-ws .card-container .body {
        border: 2px solid white;
        border-top: none;
        height: 10.2vw;
        position: absolute;
        color: white;
        color: black;
        background: white;
        top: 11.5vw;
        width: 100%;
        font-size: 1.3vw;
        margin-top:-1vw;
    }
    .title {
        font-size: 1.5vw;
        font-weight: bold;
        padding: 0 0.5vw 0 0.5vw;
        white-space: nowrap;
        text-overflow: ellipsis;
        width: 100%;
        overflow: hidden;
    }
    .card-ws .card-container .body .description {
        /*opacity: 0;*/
        padding: 0.5vw;
        font-size:1vw;
        line-height: 1.1vw;
    }
    .card-ws .card-container .body .explore {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        font-size: 1vw;
        margin: 0.3vw;
        padding: 0.5vw;
        background: black;
        color: white;
        text-align: center;
    }

    .span-white{
        border: 0.1vw solid transparent;
        height: 100%;
        width: 100%;
        padding: 0.5vw;
    }
    /*.card-ws .card-container:hover .body {
        margin-top: -6.25vw;
        height: 12.5vw;
        box-shadow: 0 5px 10px 1px rgba(255, 255, 255, 0.35);
    }
    .card-ws .card-container:hover .body .description {
        opacity: 1;
    }
    .card-ws .card-container:hover .head .register-status {
        bottom: 6.25vw;
    }
    .card-ws .card-container:hover .head .image {
        background: black;
    }
    .card-ws .card-container:hover .head .image img {
        transform: scale(1.2);
        filter: opacity(0.5);
    }*/
    .fade-out,.fade-in{
        position: absolute;
        left: 0;
        right: 0;
        width: 100%;
        height: 5vh;
        z-index: 3;
    }
    .fade-out{
        background: linear-gradient(to bottom, black, rgba(0,0,0,0));
        top:15vh;
    }
    .fade-in{
        background: linear-gradient(to top, rgba(0,0,0,1) 0%, rgba(0,0,0,0.7) 50%,rgba(0,0,0,0) 100%);
        bottom:11vh;
    }
    .scroll-down{
        font-size:3vw;
        color: #fff;
        position: absolute;
        bottom: 3vw;
        right: 50.4896vw;
        margin: auto;
        animation-name: goDown;
        animation-direction: alternate;
        animation-duration: 1s;
        animation-iteration-count: infinite;
        animation-timing-function: ease-out;
        z-index: 5;
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
</style>