<template>
    <main>
        <div class="navigation play">
            <div class="title">Certificate</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span><span>Certificates</span></div>
        </div>
        <div class="description description-top">

            <div class="content" v-if="nameChange">
                <div class="e-message message">
                    You have registered with name <span class="text-warning">{{newName}}</span>. You can only change your name once before downloading certificate. Once you are sure, click on the checkbox below to proceed to certificate portal.
                    <br>
                    <br>
                    <div>
                        <span>If you want to change your name, edit it here:</span>
                        <input class="w-100 p-2" type="text" v-model="newName">
                    </div>
                </div>
                <div class="w-100">
                    <div class="mt-5 e-message message " v-if="newName===participant.name">
                        <div>
                            <label>
                                <input v-model="confirmCheck" type="checkbox" class="checkbox"> Yes, I <span class="text-warning" >confirm</span> that above mentioned name is my name, and I <span class="text-warning">don't want to update it.</span>
                            </label>
                        </div>
                        <div v-if="confirmCheck">
                            <button class="button w-100" @click="confirmClick">Confirm</button>
                        </div>
                    </div>
                    <div class="mt-5 e-message message " v-else>
                        <div>
                            <label>
                                <input v-model="nameCheck" type="checkbox" class="checkbox"> I <span class="text-warning">confirm</span> that I want to update my name, and am aware that I <span class="text-warning">won't be able to change it again.</span>
                            </label>
                        </div>
                        <div v-if="nameCheck">
                            <button class="button w-100"  @click="updateClick">Update</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="content" v-else>
                <div class="e-message message">
                    <div style="font-size:1.5em;">You are eligible for the following events:</div st>
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
        </div>
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
                axios.post("https://m.techfest.org/api/certificate/generate",{cid,eid})
                    .then(r=>{
                        imgData = r.data;
                        generatePdf();
                    })
            },
            confirmClick: function(){
                axios.post('https://m.techfest.org/api/certificate/confirm-name').then(r=>window.location.reload());
            },
            updateClick: function(){
                axios.post('https://m.techfest.org/api/certificate/update-name',{name: this.newName}).then(r=>window.location.reload());
            }
        },
        created: function(){
            $.ajax({
                url: 'https://unpkg.com/jspdf@1.4.1/dist/jspdf.min.js',
                dataType: 'script',
                success: function(){scriptLoad = true;},
                async: false
            });
            axios.post('https://m.techfest.org/api/certificate/eligible')
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
    .navigation {
        color:white !important;
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
    .navigation .title{
        font-size: 30px;
    }

    .name-text{
        text-transform: capitalize;
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

    .description-top{
        text-align: justify;
        font-size: 15px;
        margin-top:100px;
        padding: 40px 15px 15px;
    }
    .description .title{
        font-size: 1.5em;
    }
    .nav-tab{
        border-bottom: 2px solid white;
        padding: 0 10px 15px 10px;
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
        width: 100%;
        color: #ffffff !important;
    }
    .prize-money{
        color: lightgoldenrodyellow;
        font-size: 1.2em;
        margin-top: 10px;
    }
    .name{
        font-size:20px;
        line-height: 20px;
        padding-top:15px;
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
    .name-text{
        text-transform: capitalize;
    }

    .image-gallery{
        width:100%;
        margin-bottom: 2em;
    }
    .image-gallery img{
        width:100%;
    }
    .noneligiblecontainer{
        margin-top: 2em;
        opacity: 0.5;
    }
    .ebut{
        width: 100%;
        text-align: center;
        margin: 5px auto;
        padding: 5px;
        border: 2px solid white;
    }
</style>