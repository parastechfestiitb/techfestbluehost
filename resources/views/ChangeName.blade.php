<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Name Confirmations</title>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-81222017-1"></script>
    <link rel="stylesheet" href="https://techfest.org/mobile/css/Get.css">
    <script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-81222017-1');</script>
    <style>
        div{
            color:white !important;
        }
    </style>
</head>
<body>
<div class="description description-top container p-3" id="tempApp">

    <div class="content">
        <div class="e-message message">
            You have registered with name <span class="text-warning">{{$participant->name}}</span>. You can only change your name once before downloading certificate. Once you are sure, click on the checkbox below to proceed to certificate portal.
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
</div>
<script src="https://techfest.org/js/app.js"></script>
<script>
    let k = new Vue({
        el: '#tempApp',
        name: "Hospitality",
        data: function(){
            return {
                eligible:null,
                certificates:null,
                nonEligible:null,
                nameChange: true,
                participant: {!! json_encode($participant) !!},
                newName: '{{$participant->name}}',
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
                axios.post('https://m.techfest.org/api/certificate/confirm-name/{{$cert->id}}/{{$participant->id}}/{{md5($cert->id.'/'.$participant->id.'asd324q23jw4khluh')}}').then(r=>window.location.reload());
            },
            updateClick: function(){
                axios.post('https://m.techfest.org/api/certificate/update-name-new',{name: this.newName,id: {{$participant->id}} }).then(r=>window.location.reload());
            }
        },
        created: function(){
            this.nameChange = true;
        },  Cerr
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
    })
</script>
</body>
</html>