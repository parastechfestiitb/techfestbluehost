<template>
    <main>
        <div class="navigation play">
            <div class="title">Workshops</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>><span>Workshops</span></div>
        </div>
        <div class="description">
            <div class="content">
                <span class="quote">
                    "Knowledge is of no value unless put into practical use."
                </span>
                <br>
                <br>
                To gain practical wisdom and have an uncompromised learning experience,
                Techfest, IIT Bombay brings to you various workshops with a number of
                international companies displaying their top-notch technology.
            </div>
            <!--<div class="prize-money">Prize Money : Rs. 10,000</div>-->
        </div>
        <div class="navigation-group">
            <div class="nav-tab" v-for="(competition,key) in competitions" :class="'compi-'+key">
                <div class="name d-flex justify-content-between"  @click="compiActivate(key)" >
                    <div class="name-text" v-if="competition.id==79">AI Summit</div>
                    <div class="name-text" v-else>{{competition.name}}</div>
                    <div class="is-zonal" v-if="competition.zonal===1">Technorion</div>
                </div>
                <div class="description" v-if="activeCompi===key && (competition.id!==59 || competition.id!==56) " @click="$root.changeRoute('/'+competition.name+'/workshop')">
                    <div class="desc" v-html="competition.description.short_description"></div>
                    <div class="explore-more text-warning">
                        Explore More & Register >>>
                    </div>
                </div>
                <div class="description" v-else-if="activeCompi===key || competition.payment_amount===null || competition.payment_amount===''" @click="$root.changeRoute('/'+competition.name+'/workshop')">
                    <div class="desc" v-html="competition.description.short_description"></div>
                    <div class="explore-more text-warning" >
                        Registrations Closed!
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
                        $('.compi-'+e).css('height',$('.desc').height()+130).addClass('active');
                    },10);
                }
            },
            prettyNumber: function(x){
                x=x.toString();
                let lastThree = x.substring(x.length-3);
                let otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers !== '')
                    lastThree = ',' + lastThree;
                return  otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            }
        },
        created: function(){
            axios.get('/api/workshop')
                .then(r=>{
                    let e = r.data;
                    e = e.filter((a)=>{
                        return a.id!==24;
                    });
                    $(e).each((e,c)=>{
                        c.description = JSON.parse(c.description);
                        c.registration = (new Date() - new Date(c.registration))>0;
                    });
                    this.elements = e.sort((a,b)=>{return a.order_by>b.order_by;});
                    e = e.reverse();
                    this.competitions = e;
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
    .description{
        text-align: justify;
        font-size: 15px;
        padding: 40px 15px 15px;
    }
    .description .title{
        font-size: 1.5em;
    }
    .border-transparent>td{
        border-right-color:transparent !important;
        border-left-color:transparent !important;
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
    table{
        width:100%;
        margin-top: 10px;
    }
    td,th{
        border: 1px solid white;
        width:50%;
        padding: 5px;
    }
</style>