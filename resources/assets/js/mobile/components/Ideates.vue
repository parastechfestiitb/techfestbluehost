<template>
    <main>
        <div class="navigation play">
            <div class="title">Ideate</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>><span @click="$root.changeRoute('/competitions')">Competitions</span>><span>Ideate</span></div>
        </div>
        <div class="description">
            <div class="content">
                &ldquo;Innovation only survives when people believe in their own ideas&rdquo;<br><br>
                The sole motto of Ideate competition of Techfest IIT Bombay is to encourage youth
                to come up with innovative ideas to reform and transfigure the present situation
                in the world. Ideate competition provides a platform for young college students’
                minds to showcase their talent through novel ideas having the potential to become
                the harbinger of change and crusader of the cause. Let’s bring a change in the world!
            </div>
            <!--<div class="prize-money">Prize Money : Rs. 10,000</div>-->
        </div>
        <div class="navigation-group">
            <div class="nav-tab" v-for="(competition,key) in competitions" :class="'compi-'+key">
                <div class="name d-flex justify-content-between"  @click="compiActivate(key)" >
                    <div class="name-text">{{competition.name}}</div>
                    <div class="is-zonal" v-if="competition.zonal===1">ZONAL</div>
                </div>
                <div class="description" v-if="activeCompi===key" @click="$root.changeRoute('/competitions/'+competition.name)">
                    <div class="desc" v-html="competition.description.short_description"></div>
                    <div class="prize-money">
                        Prize Money : Rs. {{prettyNumber(competition.amount)}}
                    </div>
                    <div class="explore-more">
                        Explore More & Register >>>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Competitions",
        data: function(){
            return{
                competitions: null,
                activeCompi: -1
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
                        $('.compi-'+e).css('height',$('.description').height()+55).addClass('active');
                    },10);
                }
            },
            prettyNumber: function(x){
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        },
        created: function(){
            axios.post('/api/event/ideates')
                .then(r=>{
                    let c = r.data;
                    c.forEach(e=>{
                        e.description = JSON.parse(e.description);
                    });
                    c.pop();
                    c.reverse();
                    c.pop();
                    c.reverse();
                    this.competitions = c;
                })
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
        z-index: 2;
    }
    main{
        background: #000;
        color: #fff;
    }
    .navigation .title{
        font-size: 30px;
    }
    .hirarchy{
        font-size: 13px;
    }
    .hirarchy span{
        margin:auto 0.5em;
    }
    .name-text{
        text-transform: capitalize;
    }
    .description{
        text-align: justify;
        font-size: 15px;
        padding: 40px 15px 15px;
    }
    .description .title{
        font-size: 1.5em;
    }
    .nav-tab{
        border-bottom: 2px solid white;
        padding: 15px 10px;
        position: relative;
        transition: all 1s;
        height:55px;
        overflow: hidden;
    }
    .nav-tab.active{
        height: 400px;
    }
    .nav-tab .name:after{
        content: "›";
        position: absolute;
        right: 10px;
        padding: 13px;
        top:0;
        transition: all 1s;
    }
    .nav-tab.active .name:after{
        transform: rotate(90deg);
    }
    .nav-tab:first-child{
        border-top: 2px solid white;
        margin-top:10px;
    }
    .nav-tab:last-child{
        margin-bottom: 10px;
    }
    .content{
        top: 80px;
        width: 100%;
        margin-top: 100px;
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
    .is-zonal{
        font-size: 0.5em;
        padding-right:30px;
    }
</style>