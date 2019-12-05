<template>
    <main>
        <div class="content" v-if="nameChange">
            <div class="e-message message">
                You have registered with name <span class="text-warning">{{newName}}</span>. You can only change your name once before downloading certificate. Once you are sure, click on the checkbox below to proceed to certificate portal.
                <br>
                <br>
                <div class="d-flex">
                    <span>If you want to change your name, edit it here:</span>
                    <input class=" ml-5 p-2" type="text" v-model="newName">
                </div>
            </div>
            <div class="w-100">
                <div class="mt-5 e-message message d-flex justify-content-between" v-if="newName===participant.name">
                    <div>
                        <label>
                            <input v-model="confirmCheck" type="checkbox" class="checkbox"> Yes, I <span class="text-warning" >confirm</span> that above mentioned name is my name, and I <span class="text-warning">don't want to update it.</span>
                        </label>
                    </div>
                    <div v-if="confirmCheck">
                        <div class="button" @click="confirmClick">Confirm</div>
                    </div>
                </div>
                <div class="mt-5 e-message message d-flex justify-content-between" v-else>
                    <div>
                        <label>
                            <input v-model="nameCheck" type="checkbox" class="checkbox"> I <span class="text-warning">confirm</span> that I want to update my name, and am aware that I <span class="text-warning">won't be able to change it again.</span>
                        </label>
                    </div>
                    <div v-if="nameCheck">
                        <div class="button" @click="updateClick">Update</div>
                    </div>

                </div>
            </div>
        </div>
        <div class="content" v-else>
            <div class="e-message message">
                <div>You are eligible for the following events:</div>
            </div>
            <div class="message text-warning">Click on the buttons to download your certificates</div>
            <div v-for="e in eligible" class="eligible">
                <div class="but ebut" :data-id="e.id" @click="getCertificate(e.id)" title="Click to Download">{{e.name}}</div>
            </div>
            <div class="noneligiblecontainer">
                <div class="ne-message message">
                    You are not eligible for the following events:
                </div>
                <div v-for="e in nonEligible" class="noneligible">
                    <div class="but nebut">{{e.name}},</div>
                </div>
            </div>
        </div>
        <v-footer></v-footer>
    </main>
</template>

<script>
    let scriptLoad = false;
    let imgData = null;
    jQuery.loadScript = function (url, callback) {
        jQuery.ajax({
            url: url,
            dataType: 'script',
            success: callback,
            async: true
        });
    };
    function generatePdf(){
        let doc = new jsPDF('l','mm',[926.041666667,654.84375]);
        let width = doc.internal.pageSize.width;
        let height = doc.internal.pageSize.height;
        console.log(width);
        doc.addImage(imgData, 'JPEG', 0,0,width,height);
        doc.save('certificate');
    }
    export default {
        name: "Hospitality",
        data: function(){
            return {
                eligible:null,
                certificates:null,
                nonEligible:null,
                nameChange: false,
                participant: null,
                newName: null,
                confirmCheck: false,
                nameCheck: false
            }
        },
        methods: {
            getCertificate: function (eid) {
                let cid=this.certificates[eid];
                axios.post("https://techfest.org/api/certificate/generate",{cid,eid})
                    .then(r=>{
                        imgData = r.data;
                        generatePdf();
                    })
            },
            confirmClick: function(){
                axios.post('https://techfest.org/api/certificate/confirm-name').then(r=>window.location.reload());
            },
            updateClick: function(){
                axios.post('https://techfest.org/api/certificate/update-name',{name: this.newName}).then(r=>window.location.reload());
            }
        },
        created: function(){
            $.ajax({
                url: 'https://unpkg.com/jspdf@1.4.1/dist/jspdf.min.js',
                dataType: 'script',
                success: function(){scriptLoad = true;},
                async: false
            });
            axios.post('https://techfest.org/api/certificate/eligible')
                .then((r)=>{
                    if(r.data.status==="change"){
                        this.participant = r.data.participant;
                        this.newName = r.data.participant.name;
                        return this.nameChange = true;
                    }
                    let certi=r.data.certificates;
                    let events = r.data.events;
                    let tempC = {};
                    $(certi).each(function(e){tempC[this.event_id] = this.id;});
                    let eventEligibleIds = certi.map(function (a) {return a.event_id;});
                    let nonEligible = events.filter(function(a){return !eventEligibleIds.includes(a.id);});
                    let eligible= events.filter(function(a){return eventEligibleIds.includes(a.id);});
                    this.certificates = tempC;
                    this.nonEligible=nonEligible;
                    this.eligible=eligible;
                });
            setTimeout(function(){
                $('.page-transition').animate({
                    left:'-200vw'
                },500);
            },300);
        },
        components:{
            'v-footer':require('./Footer')
        },
        watch: {
            nameCheck: function(){
                this.confirmCheck = false;
            },
            confirmCheck: function(){
                this.nameCheck = false;
            },
            newName: function(){
                this.confirmCheck = false;
                this.nameCheck = false;
            }
        }
    }
</script>

<style scoped>
    .content
    {
        top: 50%;
        left: 50%;
        position: fixed;
        color: white;
        transform: translate(-50%,-50%);
        width: 80vw;
    }
    .but
    {
        min-width: 20vw;
        margin: 1vw;
        padding: 1vw;
        background: #000;
        color: white;
        border:2px solid white;
        text-align: center;
        transition: all 1s;
        font-family: "Play",sans-serif;
        font-size: 1.3vw;
    }
    .but:hover
    {
        font-weight: bold;
        background: white;
        color: #000;
    }
    .eligible
    {
        display: inline-block;
    }
    .noneligible
    {
        display: inline-block;
    }
    .message
    {
        font-family: "Roboto",sans-serif;
        font-size: 1.3vw;
    }
    .noneligiblecontainer
    {
        transform: scale(0.8) translateX(-12%);
        opacity: 0.8;
    }
    .nebut{
        border: 2px solid transparent !important;
        background: transparent !important;
        text-align: left;
        padding: 0.5em;
        margin: 0.1em;
        color:white !important;
        width: auto !important;
        min-width: auto !important;
    }
    .checkbox{
        border: 1px solid white;
        padding: 0.2vw;
        background: transparent;
        transform: scale(1.2);
        margin-right: 1vw;
    }
    .button{
        padding: 1vw;
        color:white;
        border: 2px solid white;
        transition: all 1s;
    }
    .button:hover{
        color:black;
        background: white;
    }
</style>
