<template>
    <main>
        <div class="navigation play">
            <div class="title">Payment Portal</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>><span>Payment</span></div>
        </div>
        <div class="navigation-group" v-if="doNothing">
            <div class="sign" v-if="$root.loginStatus!=='Exists'">
                <button class="signin w-100 mt-4" @click="$root.authChecker">Click here to sign-in</button>
                <div class="text-center">to proceed to payment portal</div>
            </div>
            <div class="nav-tab"  v-for="(event,key) in events" :class="'compi-'+key" v-if="event.cards.length!==0"  @click="compiActivate(key)">
                <div class="name d-flex">
                    <div class="payment-status" v-if="events[key].team.ticket_id!==null">
                        <span class="badge badge-success">Paid</span>&nbsp;&nbsp;
                    </div>
                    <div class="payemnt-status" v-else>
                        <span class="badge badge-warning">Pay&nbsp;</span>&nbsp;&nbsp;
                    </div>
                    <div class="name-text">{{event.name}}</div>
                </div>
                <div class="sign" v-if="$root.loginStatus!=='Exists'">
                    <div class="signin" @click="">Sign In</div>
                    <div>to proceed to payment portal</div>
                </div>
                <div class="description" v-if="activeCompi===key && selectedEvent!==-1">
                    <div class="desc ticket-container" v-for="(ticket,key) in events[selectedEvent].cards">
                        <div class="ticket-header d-flex">
                            <div class="title mr-auto">
                                {{ticket.title}}
                            </div>
                            <div class="amount w-auto ustrike" v-if="ticket.description.crossMoney"> {{ticket.description.crossMoney}} {{ticket.description.type}}&nbsp;</div>
                            <div class="amount w-auto" v-if="ticket.description.visibleAmount">{{ticket.description.visibleAmount}} {{ticket.description.type}}&nbsp;</div>
                            <div class="amount w-auto" v-else>{{ticket.amount}} {{ticket.description.type}}&nbsp;</div>
                        </div>
                        <div class="ticket-body" v-html="ticket.description.description"></div>
                        <div v-if="ticket.special!==null">Select number of tickets</div>
                        <div class="special w-auto text-center d-flex" v-if="ticket.special!==null">
                            <div class="decrement" @click="decrement(ticket)"><i class="fa fa-minus"></i></div>
                            <div class="w-100">{{ticket.special}}</div>
                            <div class="increment" @click="increment(ticket)"><i class="fa fa-plus"></i></div>
                        </div>
                        <div class="pay w-auto tt-uppercase" v-if="!events[selectedEvent].team.ticket_id" @click="pay(key)">
                            CLICK TO PAY NOW
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="opening-portal" v-else>
                <h3 class="heading-1">Opening Payment Gateway</h3>
                <div class="message">
                    <ul>
                        <li>
                            Refresh this page once the payment is done.
                        </li>
                        <li>
                            You will recieve an email from college fever with payment successfull link
                        </li>
                        <li>
                            If you don't recive payment successfull message and/or the payment-done message does not aprear on your dashboard even after you have paid, email us at payment@techfest.org
                        </li>
                    </ul>
                    <div class="d-flex flex-row-reverse footer p-0">
                        <button class="check-status" @click="checkStatus()">Check Status</button>
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
                selectedMembersCount: 0,
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
            prettyNumber: function(x){
                x=x.toString();
                let lastThree = x.substring(x.length-3);
                let otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers !== '')
                    lastThree = ',' + lastThree;
                return  otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            },
            pay: function(key){
                let event = this.events[this.selectedEvent].id;
                this.key = key;
                this.doNothing = true;
                let special = this.events[this.selectedEvent].cards[key].special;
                let ticket = this.events[this.selectedEvent].cards[key].id;
                axios.post('/api/payment/get-link',{event,ticket,special})
                    .then(r=>{
                        window.location.href = (r.data.pgUrl);
                    });
                this.doNothing = false;
            },
            decrement: function(e){
                if(e.special_fixed<e.special) e.special-=1;
            },
            increment: function(e){
                e.special+=1;
            }
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
</style>