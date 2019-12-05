<template>
    <main :class="{'do-nothing':doNothing,'hidden-overflow blur':$root.searchOpen}">
        <div class="payment-container">
            <div class="segments">
                <div class="payment-board">
                    <div class="heading">Select event to pay for</div>
                    <div class="items">
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
                                <div class="amount w-auto">&#8377; {{ticket.amount}}/-</div>
                                <div class="pay w-auto tt-uppercase" @click="pay(key)">
                                    CLICK TO PAY NOW
                                </div>
                            </div>
                            <div class="ticket-body" v-html="ticket.description.description"></div>
                        </div>
                        <div v-if="!showTickets" class="message">Registrations for this event have not started yet</div>
                    </div>
                    <div class="footer">
                        <p>Following members are present in the team</p>
                    </div>
                </div>
                <div class="team-members" v-if="selectedEvent!==null">
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
                </div>
                <div class="selected-members" v-if="selectedMembersCount!==0">
                    <div class="heading d-flex">
                        <div class="w-100 mr-auto">
                            Selected Participants
                        </div>
                        <div class="w-auto mr-0 text-danger" @click="reset()">
                            Reset
                        </div>
                    </div>
                    <div class="items">
                        <template v-for="p in selectedMembers">
                            <div class="item d-flex" :title="events[p[0]].name">
                                <div class="w-100 mr-auto" :class="events[p[0]].participants[p[1]].payment?'active':''">
                                    {{events[p[0]].participants[p[1]].name}}
                                </div>
                                <div class="w-auto mr-0 no-space">
                                    &#8377; {{events[p[0]].payment_amount}}
                                </div>
                            </div>
                        </template>
                    </div>
                    <div class="footer text-white d-flex">
                        <div class="w-100 mr-auto">Total Amount</div>
                        <div class="mr-0 w-auto no-space">&#8377; {{totalAmount()}}/-</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="opening-portal" v-if="doNothing">
            <div class="heading">Opening Payment Gateway</div>
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
            }
        },
        created:function(){
            setTimeout(function(){
                $('.page-transition').animate({left:'-200vw'},500);
            },300);
            // axios.post('/payment/get-relations')
            //     .then(r=>{
            //         for(let x in r.data){
            //             for(let y in r.data[x].cards){
            //                 r.data[x].cards[y].description = JSON.parse(r.data[x].cards[y].description);
            //             }
            //         }
            //         this.events = r.data;
            //
            //     });
        },
        methods:{
            eventSelect: function(e){
                this.selectedEvent = e;
                this.showTickets = (this.events[this.selectedEvent].cards.length!==0);
                console.log(this.showTickets);
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
            reset: function(){
                this.selectedEvent=null;
                this.selectedMembersCount=0;
                this.selectedMembers={};
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
                axios.post('/api/payment/get-link',{event,ticket})
                    .then(r=>{
                        let features = [
                            'left=10',
                            'top=10',
                            'location=0',
                            'menubar=0',
                            'postwindow',
                            'resizable=0',
                            'scrollbars=1',
                            'status=0',
                            'titlebar=0',
                            'toolbar=0',
                            'width=' + window.innerWidth - 500,
                            'height=' + window.innerHeight - 150];
                        window.open(r.data.pgUrl,'a',features.join(','));
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
        padding-top: 60px;
    }
    .segments{
        height: 100%;
        border-left: 2px solid white;
    }
    .segments>div{
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
    }
    .heading{
        width: 100%;
        padding: 15px;
        background: white;
        overflow: auto;
        color:black;
    }
    .items{
        height: calc(100% - 7vw);
        overflow:auto;
    }
    .item{
        height: 65px;
        background: transparent;
        color:white;
        border-bottom: 2px solid white;
        padding: 15px;
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
        padding: 15px;
        color: #ffffff;
    }
    /*tickets*/
    .ticket-container{
        width: calc(100% - 2vw);
        margin: 15px;
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
        padding: 15px;
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
        padding: 15px;
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
</style>