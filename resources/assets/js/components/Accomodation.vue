<template>
    <div class="main" :class="doNothing?'do-nothing':''">
        <div class="sign-in-hover" v-if="signIn">
            <div class="container-center">
                To proceed with payment, you need to <br>
                <div class="btn sign-in-btn" @click="signinButton">Sign In</div>
            </div>
        </div>
        <div class="payment-container  o-hidden-x" v-else>
            <div class="d-flex segments w-100">
                <div class="team-members">
                    <div class="heading">Team Members</div>
                    <div class="d-flex">
                        <input :autofocus="true" class="item border-top-0 border-left-0" type="text" placeholder="Enter Team Id or Techfest Id" v-model="teamId">
                        <input class="global-button w-auto border-left-0 border-top-0 border-right-0" type="submit" value="Get Members" @click="getTeam">
                    </div>
                    <div class="items">
                        <template v-for="(participant,key) in participants" >
                            <template v-if="participant.events.hasOwnProperty(43)">
                                <div class="d-flex w-100 item">
                                    <div class="badge badge-success w-auto play-font" v-if="participant.accomodation">Paid</div>
                                    <div class="badge badge-danger w-auto play-font" v-else>Pay</div>
                                    <div class="pl-2">
                                        {{participant.name}}
                                    </div>
                                    <div class="dropdown" v-if="participant.events.hasOwnProperty(43)" :data-hostel="participant.id">
                                        <button class="p-0 border-none bg-transparent text-white" role="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">{{ hostels[participant.id]===undefined?'Select Days':hostels[participant.id] }}</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item text-black-50" href="#">Day-Night</a>
                                            <a class="dropdown-item" @click="hostelToggle(participant,3,key)" href="#">13-15 Dec</a>
                                            <a class="dropdown-item" @click="hostelToggle(participant,2,key)" href="#">14-15 Dec</a>
                                            <a class="dropdown-item" @click="hostelToggle(participant,4,key)" href="#">13-16 Dec</a>
                                        </div>
                                    </div>
                                </div>
                            </template>
                            <template v-else>
                                <div class="d-flex w-100 item" @click="toggleSelected(key)">
                                    <div class="badge badge-success w-auto play-font" v-if="participant.accomodation">Paid</div>
                                    <div class="badge badge-danger w-auto play-font" v-else>Pay</div>
                                    <div class="pl-2">
                                        {{participant.name}}
                                    </div>
                                </div>
                            </template>
                        </template>
                    </div>
                    <div class="footer footer-1">
                        <p>Please select the members for whom you want to pay</p>
                    </div>
                </div>
                <div class="selected-members" :class="{'noBorder':selectedMembersCount!==0}" >
                    <div class="h-100 w-100 o-hidden-x cont" v-if="selectedMembersCount!==0">
                        <div class="heading d-flex">
                            <div class="w-100 mr-auto">
                                Selected Participants
                            </div>
                            <div class="w-auto mr-0 text-danger" @click="reset()">
                                Reset
                            </div>
                        </div>
                        <div class="items slctd2">
                            <template v-for="(p,key) in selectedMembers">
                                <div class="item-group d-flex" :data-participant-id="p.id">
                                    <div class="item slctd" :title="p.name">
                                        <div class="w-100 mr-auto" >
                                            {{p.name}}
                                        </div>
                                    </div>
                                    <div class="dropdown" :data-tshirt="p.id">
                                        <button class="global-button register slctd" role="button" aria-haspopup="true" data-toggle="dropdown" aria-expanded="false">{{ tshirts[p.id]===undefined?'Get T-Shirts':tshirts[p.id] }}</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <a class="dropdown-item text-black-50" @click="tshirtToggle(p,undefined)" href="#">NONE</a>
                                            <a class="dropdown-item" @click="tshirtToggle(p,'XL(Black)')" href="#">XL(Black)</a>
                                            <a class="dropdown-item" @click="tshirtToggle(p,'L(Black)')" href="#">L(Black)</a>
                                            <a class="dropdown-item" @click="tshirtToggle(p,'M(Black)')" href="#">M(Black)</a>
                                            <a class="dropdown-item" @click="tshirtToggle(p,'S(Black)')" href="#">S(Black)</a>
                                            <a class="dropdown-item" @click="tshirtToggle(p,'XL(White)')" href="#">XL(White)</a>
                                            <a class="dropdown-item" @click="tshirtToggle(p,'L(White)')" href="#">L(White)</a>
                                            <a class="dropdown-item" @click="tshirtToggle(p,'M(White)')" href="#">M(White)</a>
                                            <a class="dropdown-item" @click="tshirtToggle(p,'S(White)')" href="#">S(White)</a>
                                            <a class="dropdown-item navy" @click="tshirtToggle(p,'XL(Navy)')" href="#">XL(Navy)</a>
                                            <a class="dropdown-item navy" @click="tshirtToggle(p,'L(Navy)')" href="#">L(Navy)</a>
                                            <a class="dropdown-item navy" @click="tshirtToggle(p,'M(Navy)')" href="#">M(Navy)</a>
                                            <a class="dropdown-item navy" @click="tshirtToggle(p,'S(Navy)')" href="#">S(Navy)</a>
                                        </div>
                                    </div>
                                </div>
                            </template>
                        </div>

                        <div class="footer footer-1 text-white d-flex">
                            <label for="" class="d-flex">
                                <input type="checkbox" name="student">
                                <div>Check this if you are a school student
                                </div>
                            </label>
                        </div>
                        <div class="footer footer-2 text-white d-flex">
                            <div class="w-100 mr-auto">Total Amount</div>
                            <div class="mr-0 amnt no-space">&#8377; {{totalAmount()}}/-</div>
                        </div>
                        <div class="footer footer-3 d-flex">
                            <div class="proceed-payment" @click="pay()">Proceed to Payment Portal</div>
                        </div>
                    </div>
                </div>
                <div class="information-left align-self-end">
                    <div class="heading">Important Information</div>
                    <div class="items h-smart d-flex flex-column justify-content-between text-white">
                        <div class="hospi-message p-3">
                            <p>Please Note:</p>
                            <ul class="acco-list">
                                <template ></template>
                                <li>Charges for accommodation are INR 2000 + 100(Cautionary amount) per head for three days that is 12th (5 P.M.) to 17th (10 A.M.) December.</li>
                                <li>
                                    Accommodation facility would be made available from 5 PM on 12th of December, 2018 onwards and you would be required to vacate the room on or before 10 AM on 17th December, 2018.
                                </li>
                                <li>
                                    Only one member of the team will recive the payment done message. All participants for whom the payment was done can see <i class="fa fa-home text-success"></i> icon in their dashboard(<i class="fa fa-user"></i>) once the payment is done.
                                </li>
                                <li>
                                    Accommodation Fees (i.e. INR 2100) is irrespective of the number of days you are staying in the institute.
                                </li>
                                <li>
                                    Participants will be given accommodation on first-come-first-serve payment basis.
                                </li>
                                <li>
                                    Refund request before 1st November will only be entertained.
                                </li>
                                <li>
                                    For MUN participants, we are providing accommodation in hotel Blue Bells Residency. You can know more about the hotel
                                    <a href="https://hostel-blue-bell-mumbai-in.book.direct/en-us" target="_blank">here</a>.
                                </li>
                                <li>
                                    If you want a different dates combination for accommodation, kindly mail us at accommodation@techfest.org
                                </li>
                            </ul>
                            <br><br><br>
                        </div>
                        <div class="scroll-height"></div>
                        <div class="sponsors p-3 pb-1 text-center">
                            <h3 class="text-center">Merchandise Sponsor</h3>
                            <img src="https://techfest.org/2018/Workshops/ezgif-4-6c8ebfefe5ce.png" alt="" class="img-responsive sponsor-image">
                        </div>
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
        <v-footer></v-footer>
    </div>
</template>

<script>
    export default {
        name: "Accomodation",
        data:function(){
            return {
                doNothing: false,
                teamId: null,
                key: null,
                showTickets: false,
                participants: null,
                tshirts: {},
                hostels: {},
                events: null,
                selectedEvent: null,
                selectedMembers: {},
                selectedMembersCount: 0,
                signIn: false,
                shirtCount: 0,
                hostelCount: 0,
            }
        },
        components: {
            'v-footer':require('./Footer')
        },
        created:function(){
            setTimeout(function(){
                $('.page-transition').animate({left:'-200vw'},500);
            },300); // remove screen
            axios.post('/api/get-status').then(r=>{
                if(r.data!=='Exists') this.signIn = true;
            });
        },
        methods: {
            eventSelect: function (e) {
                this.selectedEvent = e;
                this.showTickets = (this.events[this.selectedEvent].cards.length !== 0);
            },
            getTeam: function () {
                let dt = {};
                console.log(this.teamId);
                if(this.teamId.substring(0,2).toLowerCase()=='tf')
                    dt = {participant:parseInt(this.teamId.split('-').pop().replace(/[^0-9]/g, ''), 10)};
                else
                    dt = {teamId: parseInt(this.teamId.split('-').pop().replace(/[^0-9]/g, ''), 10)};
                axios.post('/api/get-team-details', dt)
                    .then(r => {
                        if (r.data.error !== undefined) {
                            iziToast.error({'message': r.data.error});
                            return false;
                        }
                        let temp = r.data, count = 0, eventKey = 0;
                        let participants = {};
                        $(temp).each(function () {
                            let x = this;
                            let p = x.participants;
                            $(p).each(function(){
                                let y = this;
                                if (participants[y.id] === undefined) {
                                    participants[y.id] = y;
                                    participants[y.id].events = {};
                                }
                                participants[y.id].events[x.id] = x;
                            });
                        });
                        this.participants = participants;
                        for (let x in temp) {
                            for (let y in temp[x].cards) {
                                temp[x].cards[y].description = JSON.parse(temp[x].cards[y].description);
                                temp[x].cards[y].special_fixed = temp[x].cards[y].special;
                            }
                        }
                        temp.forEach(function (e, k) {
                            if (e.payment_amount) {
                                count += 1;
                                eventKey = k;
                            }
                            e.cards.sort((a, b) => {
                                return a.priority > b.priority;
                            });
                        });
                        this.events = temp;
                        if (count === 1) this.eventSelect(eventKey)
                    });
            },
            toggleSelected: function (e) {
                if (this.participants[e].accomodation) {
                    let g = this.participants[e].gender === 'male' ? 'him' : 'her';
                    iziToast.info({message: 'Payment of Accomodation already done for ' + g});
                    return;
                }
                let k = this.participants[e].id;
                if (this.selectedMembers[k]) {
                    delete this.selectedMembers[k];
                    if (this.tshirts[this.participants[e].id]) {
                        delete this.tshirts[this.participants[e].id];
                        this.shirtCount -= 1;
                    }
                    this.selectedMembersCount -= 1;
                }
                else {
                    this.selectedMembersCount += 1;
                    this.selectedMembers[k] = this.participants[e];
                }
            },
            totalAmount: function () {
                let k = this.selectedMembers, e = this.events, total = 0, tshirts = this.tshirts;
                for (let x in k) {
                    total += 2100;
                }
                total += 200 * this.shirtCount;
                return total;
            },
            signinButton: function () {
                this.$root.authLogin();
            },
            reset: function () {
                this.selectedEvent = null;
                this.selectedMembersCount = 0;
                this.selectedMembers = {};
                this.shirtCount = 0;
                this.tshirts = {};
            },
            decrement: function (e) {
                if (e.special_fixed < e.special) e.special -= 1;
            },
            increment: function (e) {
                e.special += 1;
            },
            checkStatus: function () {
                let event = this.events[this.selectedEvent].id;
                let ticket = this.events[this.selectedEvent].cards[this.key].id;
                axios.post('/api/payment/status', {event, ticket})
                    .then(r => {
                        if (r.data === 'success') {
                            iziToast.success({message: 'Payment done, window will reload in 5 seconds'});
                            setTimeout(function () {
                                window.location.reload()
                            }, 5000);
                        }
                        else {
                            iziToast.error({message: 'Payment not done yet'});
                        }
                    });
            },
            pay: function () {
                let participants = this.selectedMembers, k = [];
                for (let x in participants) {
                    k.push(x);
                }
                let shirts = this.tshirts;
                axios.post('/api/payment/accomodation/get-link', {participants: k, shirts})
                    .then(r => {
                        window.location.href = r.data.pgUrl;//,'a',features.join(','));
                    });
            },
            tshirtToggle: function (p, a) {
                if(this.tshirts[p.id]){
                    if(a===undefined) this.shirtCount-=1;
                }
                else{
                    this.shirtCount += a===undefined?0:1;
                }
                Vue.set(this.tshirts, p.id, a);
            },
            hostelToggle: function (p, a, key) {
                if(this.hostels[p.id]){
                    if(a===undefined) this.hostelCount-=1;
                }
                else{
                    this.hostelCount += a===undefined?0:1;
                }
                Vue.set(this.hostels, p.id, a);
                this.toggleSelected(key);
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
        padding: 1.5vw;
        background: white;
        overflow: auto;
        color:black;
    }
    i{
        display: inline-block;
        width: auto !important;
    }
    .items{
        height: calc(100% - 11.7vw);
        overflow:auto;
    }
    .slctd2{
        height: calc(100% - 17.55vw) !important;
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
    .footer-1{
        padding: 1.5vw !important;
    }
    .footer-1>*{
        margin: 0;
    }
    .footer-2{
        padding: 0;
    }
    .footer-2>*{
        padding: 1.5vw !important;
    }
    .footer-2>.amnt{
        width: 44%;
        border-left: 2px solid white;
    }
    .footer-3{
        background: white;
        color: black !important;
        padding: 1.3vw;
        text-align: center;
    }
    .footer-3>*{
        font-size:1.5vw !important;
    }
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
    .item-group{
        position: relative;
    }
    .border-none{
        border:none !important;
    }
    .p-0{
        padding: 0 !important;
    }
    .global-button{
        padding: 1vw;
        border: none;
        border-bottom: 2px solid white;
        border-left: 2px solid white;
    }
    .dropdown{
        width:50%;
    }
    .dropdown-menu{
        font-size: 1vw;
        width: 8vw;
        min-width: 5vw;
        background: #000000;
        font-weight: bold;
        border: 2px solid white;
        text-align: center;
        margin-left: 10vw;
    }
    .dropdown-item{
        color: #ffffff !important;
        text-decoration: none !important;
    }
    .dropdown-item:hover,
    .dropdown-item:focus,
    .dropdown-item:active{
        color: #000000 !important;
        background: #fff;
    }
    .slctd{
        padding: 1.25vw !important;
    }
    .h-smart{
        height: calc(100% - 4vw);
    }
    .acco-list li{
        line-height: 1.6em;
    }
    .o-hidden-x{
        overflow-x: hidden;
    }
    .sponsors{
        position: absolute;
        bottom: 0;
        left:0;
        width: 100%;
    }
    .hospi-message{
        height: calc(100% - 18vh);
        padding-bottom: 8em;
        overflow: auto;
    }
    .scroll-height{
        position: absolute;
        bottom: 7.5vw;
        height: 4em;
        background: linear-gradient(to top,rgba(0,0,0,1) 0%, rgba(0,0,0,0.8) 60%, rgba(0,0,0,0) 100%);
    }
    .sponsor-image{
        height: 12vh;
        width: auto;
        margin-bottom: -1.7vw;
    }
</style>