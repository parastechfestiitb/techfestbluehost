<template>
    <main v-if="event!==null">
        <div class="i1px">
            <div v-for="image in event.description.images[0]" :style="{backgroundImage: 'url('+image+')'}"></div>
        </div>
        <div class="navigation play">
            <div class="title">{{event.name}}</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>&gt;<span>{{event.name}}</span></div>
        </div>
        <div class="description">
            <div class="title">{{event.name}}</div>
            <div class="content">
                <div class="image-gallery" v-if="event.description.images[0].length!==0">
                    <img :src="event.description.images[0][ind]" alt="Loading Image">
                </div>
                <div class="warning" v-if="$route.name==='lectures'">*Previous Speakers*</div>
                <div class="warning" v-if="$route.name==='Summit'">*Previous Summits*</div>
                <div v-html="event.description.description"></div>
            </div>
            <button class="w-100 mt-2" v-if="$route.name==='Summit'">Summit 2018-19 will be released soon</button>
            <button class="w-100" v-if="$route.name==='Robowars'" @click="changeLocation('https://techfest.org/robowars')">Click here to visit the website</button>
            <button class="w-100 mt-2" v-if="$route.name==='TWMUN'" @click="changeLocation('https://techfest.org/twmun/2018')">Click here to visit the website</button>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Events",
        data:function(){
            return {
                event: null,
                ind: 0
            }
        },
        methods: {
            changeLocation: function(e){
                window.location.href = e;
            }
        },
        created: function(){
            axios.post('/api/event/name/'+this.$route.name)
                .then((response)=>{
                    this.event = response.data;
                    this.event.description = JSON.parse(response.data.description);
                    this.event.description.images[0] = this.event.description.images[0].concat(this.event.description.images[3]);
                    this.event.description.images[0] = this.event.description.images[0].filter(( element ) => {
                        return element !== undefined;
                    });
                    let t = this;
                    setInterval(function(){
                        t.ind = (t.ind+1)%t.event.description.images[0].length;
                    },3000);
                    setTimeout(()=>{
                        this.contHeight=(($('.navigation').height()+55)/$(window).height()/0.01) + 'vh'
                    },100);
                });
        },
        watch: {
            $route: function(){
                this.event=null;
                axios.post('/api/event/name/'+this.$route.name)
                    .then((response)=>{
                        this.event = response.data;
                        this.event.description = JSON.parse(response.data.description);
                        this.event.description.images[0] = this.event.description.images[0].concat(this.event.description.images[3]);
                        this.event.description.images[0] = this.event.description.images[0].filter(( element ) => {
                            return element !== undefined;
                        });
                        setTimeout(()=>{
                            this.contHeight=(($('.navigation').height()+55)/$(window).height()/0.01) + 'vh'
                        },100);
                    });
            }
        }
    }
</script>

<style scoped>
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
    }
    .i1px{
        width:1px; height:1px;
        overflow: hidden;
    }
    main{
        background: #000;
        color: #fff;
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
    .navigation .title{
        font-size: 30px;
    }
    .hirarchy{
        font-size: 13px;
    }
    .description{
        padding: 15px;
        text-align: justify;
    }
    .description .title{
        font-size: 1.5em;
    }
    .content{
        top: 80px;
        width: 100%;
        margin-top: 100px;
    }
    .image-gallery{
        width:100%;
    }
    .image-gallery img{
        width:100%;
    }
    .warning{
        color:#ffc107;
        margin-bottom: 2em;
    }
</style>