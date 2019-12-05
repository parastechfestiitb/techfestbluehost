<template>
    <main>
        <div class="navigation play">
            <div class="title">Accomodation Portal</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>><span>Accomodation</span></div>
        </div>
        <div class="navigation-group" v-if="doNothing">
            <div class="sign" v-if="$root.loginStatus!=='Exists'">
                <button class="signin w-100 mt-4" @click="$root.authChecker">Click here to sign-in</button>
                <div class="text-center">to proceed to accomodation portal</div>
            </div>
            <div class="nav-tab nobb" v-else>
                Enter the team id or techfest id to list all the members
                <input type="text" placeholder="Enter Team Id or Techfest Id" class="w-100 p-2 mt-2 mb-2" v-model="teamId">
                <button class="w-100" @click="getTeam">Get Members</button>
            </div>
            <div class="container-participants" v-if="participants.length!==0">
                <br>
                <br>
                Select members to pay for:
            </div>
            <div class="nav-tab items" v-if="participants.length!==0" v-for="(participant,key) in participants" :id="'select-'+key">
                <div class="item">
                    <div class="d-flex w-100 name" @click="toogleSelected(key)">
                        <div class="payment-status" v-if="participant.accomodation!==null">
                            <span class="badge badge-success">Paid</span>&nbsp;&nbsp;
                        </div>
                        <div class="payemnt-status" v-else>
                            <span class="badge badge-warning">Pay</span>&nbsp;&nbsp;
                        </div>
                        <div class="name-text">{{participant.name}}</div>
                    </div>
                </div>
            </div>
            <div class="container-selected" v-if="selectedMembersCount!==0">
                <div class="nav-tab nobt">
                    <br>
                    <br>
                    Selected members
                </div>
                <div class="nav-tab" v-for="(participant,key) in selectedMembers">
                    <div class="item">
                        <div class="d-flex w-100 name" @click="toogleSelected(key)">
                            <div class="payment-status" v-if="participant.accomodation!==null">
                                <span class="badge badge-success">Paid</span>&nbsp;&nbsp;
                            </div>
                            <div class="payemnt-status" v-else>
                                <span class="badge badge-warning">Pay</span>&nbsp;&nbsp;
                            </div>
                            <div class="name-text">{{participant.name}}</div>
                        </div>
                    </div>
                </div>
                <div class="nav-tab">
                    <div class="item">
                        <div class="footer footer-2 text-white d-flex">
                            <div class="w-100 mr-auto">Total Amount</div>
                            <div class="mr-0 amnt amount">&#8377; {{totalAmount()}}/-</div>
                        </div>
                    </div>
                </div>

                <div class="pay w-auto tt-uppercase" @click="pay()">
                    CLICK TO PAY NOW
                </div>
            </div>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Events",
        data: function(){
            return{
                events: null,
                activeCompi: -1,
                doNothing: true,
                key: null,
                showTickets: false,
                selectedEvent: null,
                selectedMembers: {},
                shirtCount: 0,
                selectedMembersCount: 0,
                tshirts: 0,
                getMembers: [],
                teamId: 7125,
                participants: [],
            }
        },
        methods:{
            compiActivate: function(e){
                if($('.compi-'+e).hasClass('active')) {
                    return false;
                }
                else {
                    if(this.events[e].team.ticket_id!==null) return false;
                    this.activeCompi = e;
                    this.selectedEvent = e;
                    $('.nav-tab').css('height',50).removeClass('active');
                    setTimeout(function(){
                        $('.compi-'+e).css('height',$('.compi-'+e+' .description').height()+100).addClass('active');
                    },10);
                }
            },
            totalAmount: function(){
                let k = this.selectedMembers, e = this.events, total=0, tshirts = this.tshirts;
                for(let x in k){total+=2100;}
                total+=200*this.shirtCount;
                return total;
            },
            toogleSelected: function(e){
                if(this.participants[e].accomodation) {
                    let g =  this.participants[e].gender==='male'?'him':'her';
                    iziToast.info({message:'Payment of Accomodation already done for '+g});
                    return;
                }
                let k = this.participants[e].id;
                if(this.selectedMembers[k]) {
                    delete this.selectedMembers[k];
                    if(this.tshirts[this.participants[e].id]){
                        delete this.tshirts[this.participants[e].id];
                        this.shirtCount-=1;
                    }
                    this.selectedMembersCount-=1;
                    $('#select-'+e).removeClass('disabled');
                }
                else {
                    this.selectedMembersCount+=1;
                    $('#select-'+e).addClass('disabled');
                    this.selectedMembers[k] = this.participants[e];
                }
            },
            prettyNumber: function(x){
                x=x.toString();
                let lastThree = x.substring(x.length-3);
                let otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers !== '')
                    lastThree = ',' + lastThree;
                return  otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            },
            pay: function(){
                let participants = this.selectedMembers, k = [];
                for(let x in participants){
                    k.push(x);
                }
                let shirts = this.tshirts;
                axios.post('/api/payment/accomodation/get-link',{participants:k,shirts})
                    .then(r=>{
                        window.location.href = (r.data.pgUrl); //,'a',features.join(','));
                    });
            },
            decrement: function(e){
                if(e.special_fixed<e.special) e.special-=1;
            },
            increment: function(e){
                e.special+=1;
            },
            eventSelect: function(e){
                this.selectedEvent = e;
                this.showTickets = (this.events[this.selectedEvent].cards.length!==0);
            },
            getTeam: function(){
                let dt = {};
                console.log(this.teamId);
                if(this.teamId.substring(0,2).toLowerCase()=='tf')
                    dt = {participant:parseInt(this.teamId.split('-').pop().replace(/[^0-9]/g, ''), 10)};
                else
                    dt = {teamId: parseInt(this.teamId.split('-').pop().replace(/[^0-9]/g, ''), 10)};
                axios.post('/api/get-team-details',dt)
                    .then(r=>{

                        if(r.data.error!==undefined) {
                            iziToast.error({'message':r.data.error});
                        }
                        let temp = r.data,count=0,eventKey=0;
                        let participants  = {};
                        $(temp).each(function(){
                            let x  = this;
                            let p = x.participants;
                            $(p).each(function(){
                                let y =this;
                                if(participants[y.id]===undefined) {
                                    participants[y.id] = y;
                                    participants[y.id].events = {};
                                }
                                participants[y.id].events[x.id] = x;
                            });
                        });
                        this.participants = participants;
                        for(let x in temp){
                            for(let y in temp[x].cards){
                                temp[x].cards[y].description = JSON.parse(temp[x].cards[y].description);
                                temp[x].cards[y].special_fixed = temp[x].cards[y].special;
                            }
                        }
                        temp.forEach(function(e,k){
                            if(e.payment_amount) {
                                count+=1;
                                eventKey= k;
                            }
                            e.cards.sort((a,b)=>{
                                return a.priority>b.priority;
                            });
                        });
                        this.events = temp;
                        if(count===1) this.eventSelect(eventKey)
                    });
            },
        },
        created: function(){
            axios.post('/payment/get-relations')
                .then(r=>{
                    let temp = r.data,count=0,eventKey=0;
                    for(let x in temp){
                        if(temp[x].code==="MD") temp[x].name="Techfest World MUN 2018";
                        for(let y in temp[x].cards){
                            temp[x].cards[y].description = JSON.parse(temp[x].cards[y].description);
                            temp[x].cards[y].special_fixed = temp[x].cards[y].special;
                        }
                    }
                    temp.forEach(function(e,k){
                        if(e.payment_amount) {
                            count+=1;
                            eventKey= k;
                        }
                        e.cards.sort((a,b)=>{
                            return a.priority>b.priority;
                        });
                    });
                    this.events = temp;
                    if(count===1) this.eventSelect(eventKey)
                })
        }
    }
</script>

<style scoped>
    .pay{
        background:white;
        padding: 10px;
        color: black;
        text-align: center;
        font-weight: 700;
    }
    .navigation-group{
        margin-top: 128px;
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
    .amount{
        white-space: nowrap;
    }
    .description .title{
        font-size: 1.5em;
    }
    .ustrike{
        text-decoration: line-through;
        font-size: 0.8em;
    }
    .border-transparent>td{
        border-right-color:transparent !important;
        border-left-color:transparent !important;
    }
    .nav-tab{
        border-bottom: 2px solid white;
        min-height:50px;
        padding: 15px 10px;
        position: relative;
        transition: all 1s;
        overflow: hidden;
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
        border: 2px solid white;
        margin-bottom: 15px;
        border-bottom: none;
    }
    .desc>div{
        border-bottom: 2px solid white;
        padding: 10px;
    }
    .desc>div:first-child{
        border-bottom-color: #aaa;
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
    .opening-portal{
        position: absolute;
        z-index: 2;
        padding-top:160px;
    }
    .check-status{
        border: 2px solid white;
        font-family: 'Play',sans-serif;
        background: #ffffff;
        color: black;
        padding: 10px 30px;
        width: 100vw;
        position: fixed;
        bottom: 0;
    }
    input{
        background-color: transparent;
        border: 2px solid white;
        color:white;
    }
    .disabled.nav-tab{
        filter:grayscale(90%);
    }
    .nobt{
        border-top: none;
    }
    .nobb{
        border-bottom: none;
    }
    .container-participants{
        border-bottom: 2px solid white;
    }
</style>