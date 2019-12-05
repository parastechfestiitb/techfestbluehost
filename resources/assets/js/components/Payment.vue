<template>
    <div class="main" :class="doNothing?'do-nothing':''">
        <div class="sign-in-hover" v-if="signIn">
            <div class="container-center">
                To proceed with paymnt, you need to <br>
                <div class="btn sign-in-btn" @click="signinButton">Sign In</div>
            </div>
        </div>
        <div class="payment-container">
            <div class="d-flex segments">
                <div class="payment-board">
                    <div class="heading">Select event to pay for</div>
                    <div class="items" v-if="events!==null">
                        <template v-if="events.count<=0">
                            <div  class="item payment-item d-flex" title="Do payment for this event">
                                <div class="w-auto"><i class="w-auto fa text-danger fa-exclamation-triangle"></i>&nbsp;&nbsp;&nbsp;</div>
                                <div class="name">
                                    {{event.name}}
                                </div>
                            </div>
                        </template>
                        <template v-for="(event,key) in events" v-if="event.payment_amount">
                            <div v-if="event.team.ticket_id" :id="'event-'+key" class="item payment-item d-flex" :class="selectedEvent===key?'active':''" title="Payment done for this event">
                                <div class="w-auto"><i class="w-auto fa text-success fa-check-circle"></i>&nbsp;&nbsp;&nbsp;</div>
                                <div class="name">
                                    {{event.name}}
                                </div>
                            </div>
                            <div  v-else :id="'event-'+key" class="item payment-item d-flex" :class="selectedEvent===key?'active':''" @click="eventSelect(key)" title="Do payment for this event">
                                <div class="w-auto"><i class="w-auto fa text-danger fa-exclamation-triangle"></i>&nbsp;&nbsp;&nbsp;</div>
                                <div class="name">
                                    {{event.name}}
                                </div>
                            </div>
                        </template>
                    </div>
                    <div class="footer">
                        <p>Please select the events for which you want to proceed with payment</p>
                    </div>
                </div>
                <div class="tickets w-100" v-if="selectedEvent!==null">
                    <div class="heading">Select Ticket</div>
                    <div class="items">
                        <div v-if="showTickets" class="ticket-container" v-for="(ticket,key) in events[selectedEvent].cards">
                            <div class="ticket-header d-flex">
                                <div class="title mr-auto">
                                    {{ticket.title}}
                                </div>
                                <div class="amount strike w-auto" v-if="ticket.description.crossMoney">{{ticket.description.crossMoney}} {{ticket.description.type}}</div>
                                <div class="amount w-auto" v-if="ticket.description.visibleAmount">{{ticket.description.visibleAmount}} {{ticket.description.type}}</div>
                                <div class="amount w-auto" v-else>{{ticket.amount}} {{ticket.description.type}}</div>
                                <div class="special w-auto text-center d-flex" v-if="ticket.special!==null">
                                    <div class="decrement" @click="decrement(ticket)"><i class="fa fa-minus"></i></div>
                                    <div>{{ticket.special}}</div>
                                    <div class="increment" @click="increment(ticket)"><i class="fa fa-plus"></i></div>
                                </div>
                                <div class="pay w-auto tt-uppercase" v-if="!events[selectedEvent].team.ticket_id" @click="pay(key)">
                                    CLICK TO PAY NOW
                                </div>
                            </div>
                            <div class="ticket-body" v-html="ticket.description.description"></div>
                        </div>
                        <div v-if="!showTickets" class="message">Registrations for this event have not started yet</div>
                    </div>
                    <div class="footer">
                        <p>Select a ticket from above.</p>
                    </div>
                </div>
                <!--<div class="team-members" v-if="selectedEvent!==null">
                    <div class="heading">Team Members</div>
                    <div class="items">
                        <template v-for="(participant,key) in events[selectedEvent].participants">
                            <div class="item" :class="(`${selectedEvent}-${key}` in selectedMembers)?'active':''">
                                {{participant.name}}
                            </div>
                        </template>
                    </div>
                    <div class="footer">
                        <p>Please select the members for whom you want to pay</p>
                    </div>
                </div>-->
                <!--<div class="selected-members" v-if="selectedMembersCount!==0">-->
                    <!--<div class="heading d-flex">-->
                        <!--<div class="w-100 mr-auto">-->
                            <!--Selected Participants-->
                        <!--</div>-->
                        <!--<div class="w-auto mr-0 text-danger" @click="reset()">-->
                            <!--Reset-->
                        <!--</div>-->
                    <!--</div>-->
                    <!--<div class="items">-->
                        <!--<template v-for="p in selectedMembers">-->
                            <!--<div class="item d-flex" :title="events[p[0]].name">-->
                                <!--<div class="w-100 mr-auto" :class="events[p[0]].participants[p[1]].payment?'active':''">-->
                                    <!--{{events[p[0]].participants[p[1]].name}}-->
                                <!--</div>-->
                                <!--<div class="w-auto mr-0 no-space">-->
                                    <!--&#8377; {{events[p[0]].payment_amount}}-->
                                <!--</div>-->
                            <!--</div>-->
                        <!--</template>-->
                    <!--</div>-->
                    <!--<div class="footer text-white d-flex">-->
                        <!--<div class="w-100 mr-auto">Total Amount</div>-->
                        <!--<div class="mr-0 w-auto no-space">&#8377; {{totalAmount()}}/-</div>-->
                    <!--</div>-->
                <!--</div>-->
            </div>
        </div>
        <div class="opening-portal" v-if="doNothing">
            <div class="heading">Opening Payment Gateway</div>
            <div class="message">
                <ul>
                    <li>
                        Check that the pop-up is not blocked, otherwise payment page will not open.
                    </li>
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
        <v-footer></v-footer>
    </div>

</template>

<script>
    export default {
        name: "Payment",
        data:function(){
            return {
                doNothing: false,
                key: null,
                showTickets: false,
                events: null,
                selectedEvent: null,
                selectedMembers: {},
                selectedMembersCount: 0,
                signIn: false
            }
        },
        components: {
            'v-footer':require('./Footer')
        },
        created:function(){
            setTimeout(function(){
                $('.page-transition').animate({left:'-200vw'},500);
            },300);
            axios.post('/api/get-status').then(r=>{
                if(r.data!=='Exists') this.signIn = true;
                else{
                    axios.post('/payment/get-relations')
                        .then(r=>{
                            let temp = r.data,count=0,eventKey=0;
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
                                if(e.code==='MD') {
                                    e.name = "Techfest World MUN";
                                }
                                e.cards.sort((a,b)=>{
                                    return a.priority>b.priority;
                                });
                            });
                            this.events = temp;
                            if(count===1) this.eventSelect(eventKey)
                        });
                }
            });
        },
        methods:{
            eventSelect: function(e){
                this.selectedEvent = e;
                this.showTickets = (this.events[this.selectedEvent].cards.length!==0);
            },
            toogleSelected: function(e){
                let k = this.selectedEvent+"-"+e;
                if(this.selectedMembers[k]) {
                    delete this.selectedMembers[k];
                    this.selectedMembersCount-=1;
                }
                else {
                    this.selectedMembersCount+=1;
                    this.selectedMembers[k] = [this.selectedEvent,e];
                }
            },
            totalAmount: function(){
                let k = this.selectedMembers, e = this.events, total=0;
                for(let x in k){
                    total+=e[k[x][0]].payment_amount;
                }
                return total;
            },
            signinButton: function(){
                this.$root.authLogin();
            },
            reset: function(){
                this.selectedEvent=null;
                this.selectedMembersCount=0;
                this.selectedMembers={};
            },
            decrement: function(e){
                if(e.special_fixed<e.special) e.special-=1;
            },
            increment: function(e){
                e.special+=1;
            },
            checkStatus: function(){
                let event = this.events[this.selectedEvent].id;
                let ticket = this.events[this.selectedEvent].cards[this.key].id;
                axios.post('/api/payment/status',{event,ticket})
                    .then(r=>{
                        if(r.data==='success'){
                            iziToast.success({message:'Payment done, window will reload in 5 seconds'});
                            setTimeout(function(){window.location.reload()},5000);
                        }
                        else{
                            iziToast.error({message:'Payment not done yet'});
                        }
                    });
            },
            pay: function(key){
                let event = this.events[this.selectedEvent].id;
                this.key = key;
                this.doNothing = true;
                let ticket = this.events[this.selectedEvent].cards[key].id;
                let special = this.events[this.selectedEvent].cards[key].special;
                axios.post('/api/payment/get-link',{event,ticket,special})
                    .then(r=>{
                        window.location.href = r.data.pgUrl;
                    });
            }
        }
    }
</script>

<style scoped>
    .no-space{white-space:nowrap;}
    .main.do-nothing .payment-container{
        pointer-events: none !important;
        filter: blur(15px);
    }
    .main{
        height: 100%;
        width: 100%;
    }
    .payment-container{
        padding-top: 9vw;
        height: calc(100vh - 10vw);
    }
    .segments{
        margin-left:5vw;
        margin-right: 5vw;
        height: 100%;
        border-left: 2px solid white;
    }
    .segments>div{
        width: 30vw;
        height: 100%;
        padding:0;
        border-bottom: 2px solid white;
        overflow: hidden;
        border-right: 2px solid rgba(255, 255, 255, 0.54);
    }
    .segments *{
        transition: all 0.5s;
        width: 100%;
        position: relative;
        font-size:1vw;
        line-height: 1vw;
    }
    .heading{
        width: 100%;
        padding: 1vw;
        background: white;
        overflow: auto;
        color:black;
    }
    .items{
        height: calc(100% - 7vw);
        overflow:auto;
    }
    .item{
        background: transparent;
        color:white;
        border-bottom: 2px solid white;
        padding: 1vw;
    }
    .item:first{
        margin-top: 3vw;
    }
    .item:hover{
        background: rgba(255, 240, 239, 0.11);
    }
    .item.active{
        background: rgba(255, 240, 239, 0.32);
    }
    .items>.message{
        padding: 1vw;
        color: #ffffff;
    }
    .footer{
        line-height: 1.25vw;
        font-size:1vw;
        padding-left: 1vw;
        padding-right: 1vw;
        padding-top: 0.5vw;
        height: 4vw;
        border-top: 2px solid white;
        color:#aaa;
    }
    /*tickets*/
    .ticket-container{
        width: calc(100% - 2vw);
        margin: 1vw;
        border: 2px solid white;
        border-radius: 2px;
        color:white;
    }
    .ticket-header{
        border-bottom: 2px solid white;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
    }
    .ticket-header>div{
        padding: 1vw;
        white-space: nowrap;
    }
    .pay{
        background: rgba(255, 255, 255, 0.12);
        border-left: 2px solid white;
        transition: all 0.5s;
    }
    .pay:hover{
        background: white;
        color:black;
    }
    .ticket-body{
        color: #fff0ef;
        padding: 1em;
    }
    .tt-uppercase{
        text-transform: uppercase;
    }
    .opening-portal{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        border:2px solid white;
    }
    .opening-portal .heading{
        font-size: 2em;
    }
    .opening-portal .message{
        color: white;
    }
    .opening-portal .message ul{
        padding: 2vw;
    }
    .opening-portal .footer{
        border-top: 2px solid white;
    }
    .check-status{
        padding: 1vw;
        background: black;
        color: white;
        border: none;
        border-left: 2px solid white;
        width: 10vw;
        transition: all 0.5s;
        outline: none !important;
    }
    .check-status:hover{
        background: white;
        color: black;
    }
    .strike{
        text-decoration: line-through;
    }
    .decrement{
        margin-right: 0.5vw;
        padding-right: 0.5vw;
    }
    .increment{
        margin-left: 0.5vw;
        padding-left: 0.5vw;
    }
    .sign-in-hover{
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 100vw;
        z-index: 5;
        background: black;
    }
    .container-center{
        position: fixed;
        top:50vh;
        left:50vw;
        transform: translate(-50%, -50%);
        color:white;
        line-height:2vw;
        text-align: center;
    }
    .sign-in-btn{
        border: 2px solid white;
        width:20vw;
    }
</style>