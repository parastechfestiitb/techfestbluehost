<template>
    <main v-if="competition!==null">
        <div class="navigation play">
            <div class="title">{{$route.name}}</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>&gt;<span>{{competition.name}}</span></div>
        </div>
        <div class="description" >
            <div class="content" v-html="competition.description.short_description"></div>
        </div>
        <div class="navigation-group">
            <div class="nav-tab" v-for="(description,key) in competition.description.description" :class="'compi-'+key">
                <div class="name"  @click="compiActivate(key)" >{{key}}</div>
                <div class="description" v-if="activeCompi===key">
                    <div class="desc" v-html="description"></div>
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Hospitality",
        data: function(){
            return{
                competition: null,
                activeCompi: -1,
                showReg: null,
                isRegistered: false,
                isLeader: false,
                team: []
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
            }
        },
        created: function(){
            axios.post('/api/event/name',{
                name: 'About'
            }).then(r=>{
                let c = r.data;
                c.description = JSON.parse(c.description);
                this.competition = c;
                setTimeout(function(){
                    $('.page-transition').animate({
                        left:'-200vw'
                    },500);
                },300);
            });
            this.$on('loginUpdated',function(){
                alert('yo');
            });
        },
        watch: {
            registerModal: function(){
                this.manageTeam();
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
        border-bottom: 2px solid white;
        padding: 15px 10px;
        position: relative;
        transition: all 1s;
        height:55px;
        overflow: hidden;
    }
    .nav-tab .name:after{
        content: "›";
        position: absolute;
        right: 10px;
        padding: 15px;
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
        margin-top: 140px;
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
        text-transform: capitalize;
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