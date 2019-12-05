<template>
    <div class="dashboard-overlay" v-if="participant && $root.loginStatus === 'Exists'" :class="$root.sideboardOpen?'active':''">
        <div class="layer-1">
            <div class="profile row">
                <div class="col-12 picture">
                    <img class="picture" :src="profileImage" alt="profile-picture"/>
                </div>
                <div class="details col-12 pl-4">
                    <div class="name">{{participant.name}}</div>
                    <div class="email">{{participant.email}}</div>
                    <div class="tf-if"><span v-if="participant.accomodation===1" class="text-success"><i class="fa fa-home"></i></span>TF-ID : TF-{{("0000000"+participant.id).slice(-6)}}</div>
                    <div class="certi border-warning text-warning p-1" v-if="showCerti" @click="$root.changeRoute('/certificate')">Click to download certificates</div>
                    <div class="logout text-right pr-5 text-danger p-1" @click="logout">Logout</div>
                </div>
            </div>
            <div class="events">
                <div class="event" v-for="event in events">
                    <div class="event-body d-flex justify-content-between">
                        <div class="event-name" @click="$root.changeRoute(event.url.replace('/2018',''))">{{event.name}}</div>
                        <template v-if="event.cards.length!==0">
                            <div class="event-pay btn btn-active" v-if="event.team.ticket_id===null" @click="directPay(event.team.id)">Pay</div>
                            <div class="event-pay btn" v-else>Paid</div>
                        </template>
                    </div>
                    <div class="event-footer">
                        <span class="badge badge-secondary">{{event.code}}-{{("000000"+event.team.id).substr(-6)}}</span>&nbsp;&nbsp;
                        <template v-if="event.zonal===1">
                            <span class="badge badge-light">{{event.region}}</span>&nbsp;&nbsp;
                        </template>
                    </div>
                </div>
            </div>
            <!--<div v-else class="events">-->
                <!--<div class="event" v-for="event in events" @click="$root.changeRoute(event.url.replace('/2018',''))">-->
                    <!--<div class="event-name">{{event.name}}</div>-->
                    <!--<div class="event-footer"></div>-->
                <!--</div>-->
            <!--</div>-->
            <!--<div class="attendance d-flex flex-row">-->
                <!--<img class="qr" src="https://cdn.ttgtmedia.com/rms/misc/qr_code_barcode.jpg" alt="QR">-->
                <!--<div class="details mr-1">-->
                    <!--<button class="print-qr mb-2">Print Your QR Code</button>-->
                    <!--<div class="attendance-reason">-->
                        <!--Lorem ipsum dolor sit amet, consectetur adipisicing-->
                        <!--elit. Eligendi enim libero tempora vitae!-->
                    <!--</div>-->
                <!--</div>-->
            <!--</div>-->
        </div>
    </div>
</template>

<script>
    export default {
        name: "Sideboard",
        data: function(){
            return {
                participant: {},
                events: {},
                profileImage: null,
                admin: false,
                showCerti: false
            }
        },
        methods: {
            logout: function(){
                axios.get('/api/session-flush').then(r=>{
                    window.location.reload();
                })
            },
            directPay: function(e){
                window.location.href='https://techfest.org/payment/direct/'+e;
            }
        },
        created: function(){
            axios.post('/api/get-details')
                .then(r=>{
                    this.participant = r.data.participant;
                    this.$root.participant = r.data.participant;
                    let events = r.data.events;
                    for(let x in events){
                        if(events[x].code==="MD") events[x].name="Techfest World MUN 2018";
                    }
                    this.showCerti = r.data.certi !== 0;
                    this.events = events;
                    this.admin = r.data.admin;
                    this.profileImage = r.data.img;
                })
        }
    }
</script>

<style scoped>
    .dashboard-overlay{
        position: fixed;
        left:100vw;
        top:0;
        height: 100%;
        overflow:auto;
        padding-top:50px;
        width:100vw;
        background:black;
        z-index:12;
        color: #ffffff;
        font-size: 1.3em;
        transition:left 300ms;
    }
    .dashboard-overlay.active{
        left:0!important;
    }
    .close{
        position: absolute;
        top:1rem;
        right: 1rem;
        font-size: 2em;
        color: #fff;
        z-index: 2;
    }
    .picture{
        width: 30vw;
        height: 30vw;
        border-radius: 100%;
        margin-right: 0.5rem;
        margin-left: 0.5rem;
    }
    .profile{
        margin-top: 2em;
        padding-bottom: 2em;
        border-bottom: 2px solid white;
        background: #000;
    }
    .name{
        font-size: 1.3em;
    }
    .event{
        font-size: 20px;
        padding: 24px 15px;
        border-bottom: 2px solid white;
        position: relative;
    }
    .events{
        margin-bottom: 2em;
    }
    .qr{
        width:30vw;
        height:30vw;
        margin-left: 0.5rem;
        margin-right: 0.5rem;
    }
    .attendance-reason{
        font-size:0.6em;
    }
    .event-footer{
        position: absolute;
        bottom: 3px;
        left: 17px;
        font-size: 14px;
    }
    .event-pay{
        border: 2px solid white;
    }
    .btn-active{
        background: white;
        color:black;
        font-weight: bold;
        max-height:45px;
    }
    .certi{
        padding: 5px;
        font-size: 12px;
        border-width: 2px;
        border-style: solid;
        width: calc(100% - 20px);
    }
    .logout{
        padding: 5px;
        font-size: 12px;
        border-width: 2px;
        border-style: solid;
        margin-top: 10px;
        max-width: calc(100% - 20px);
    }
</style>