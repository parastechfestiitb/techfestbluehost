<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Techfest Certificate Portal</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/iziToast.min.css')}}">
    <style>
        html, body {
            height: 100%;
            width: 100%;
        }

        .input-field {
            min-height: 35vh;
            overflow: auto;
            height: 100%;
        }

    </style>
</head>
<body class="h-100">

<div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="navbar-brand">Techfest Admin Portal</div>
    <div class="ml-auto navbar-nav">
        <button class="btn btn-outline-info my-sm-0 my-2">Search</button>
    </div>
</div>
<div class="container-fluid" id="app1">
    <div class="row pt-5">
        <div class="col-md-8">
            <textarea class="form-control shadow-sm input-field p-3" placeholder="Enter Team/Techfest IDs of all the Teams/Participants" required="required" id="ids"></textarea>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <select class="custom-select" id="certificateSelected" required="required" @change="getCertificate()">
                    <option disabled="disabled" selected="selected">Select the certificate</option>
                    <template v-for="(certificate,key) in certificates">
                        <option :value="certificate.id">@{{certificate.name}}</option>
                    </template>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" @click="authenticate()">Authenticate</button>
                </div>
            </div>
            <img v-if="certificateImage" class="mt-5 img-fluid" :src="certificateImage"/>
        </div>
    </div>
    <div class="row pt-5">
        <div class="col-md-8">
            <textarea class="form-control shadow-sm input-field p-3" placeholder="Enter Name of Participants for whom you want certificates" required="required" id="ids2"></textarea>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <select class="custom-select" id="certificateSelected2" required="required" @change="getCertificate2()">
                    <option disabled="disabled" selected="selected">Select the certificate</option>
                    <template v-for="(certificate,key) in certificates">
                        <option :value="certificate.id">@{{certificate.name}}</option>
                    </template>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" @click="authenticate2()">Create</button>
                </div>
            </div>
            <img v-if="certificateImage2" class="mt-5 img-fluid" :src="certificateImage2"/>
        </div>
    </div>
</div>
<script src="{{asset('js/iziToast.min.js')}}"></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="https://unpkg.com/jspdf@1.4.1/dist/jspdf.min.js"></script>
<script>
    let scriptLoad = false;
    let imgData = null;
    function generatePdf(){
        let doc = new jsPDF('l','mm',[926.041666667,654.84375]);
        let width = doc.internal.pageSize.width;
        let height = doc.internal.pageSize.height;
        console.log(width);
        doc.addImage(imgData, 'JPEG', 0,0,width,height);
        doc.save('certificate');
    }
    let vue = new Vue({
        el: '#app1',
        data: function(){
            return {
                certificates: [],
                certificateImage: undefined,
                certificateImage2: undefined,
            }
        },
        created: function(){
            axios.get('/api/admin/certificate/certificates')
                .then(r=> this.certificates=r.data );
        },
        methods: {
            getCertificate: function () {
                axios.post('/api/admin/certificate/certificate', {'id': parseInt($('#certificateSelected').val())}).then(r => {
                    this.certificateImage = r.data;
                });
            },
            getCertificate2: function () {
                axios.post('/api/admin/certificate/certificate', {'id': parseInt($('#certificateSelected2').val())}).then(r => {
                    this.certificateImage2 = r.data;
                });
            },
            authenticate: function () {
                let vals = $('#ids').val().replace(/[-]+/g,'').toUpperCase().replace(/[\s,\n]+/g, ',').split(',');
                let tfIds = vals.filter((r)=>{return r.startsWith('TF')}).map(r=>{return parseInt(r.replace(/\D/g,''))});
                let teamIds = vals.filter((r)=>{return !r.startsWith('TF')}).map(r=>{return parseInt(r.replace(/\D/g,''))});
                let certificate = parseInt($('#certificateSelected').val());
                if(!certificate) {
                    iziToast.error({message:'You need to select one of the certificates'});
                    return;
                }
                axios.post('/api/admin/certificate/authenticate',{tfIds, teamIds, certificate})
                    .then(r=>{if(r.data==='Done!') iziToast.success({message:'Successfully authenticated all the participants for the certificate!'})});
            },
            authenticate2: function () {
                let names = $('#ids2').val().split(',');
                let certificate = parseInt($('#certificateSelected2').val());
                if(!certificate) {
                    iziToast.error({message:'You need to select one of the certificates'});
                    return;
                }
                axios.post('/api/admin/certificate/nameInsert',{names, certificate})
                    .then(r=>{
                        if(r.data==='Done!')
                            iziToast.success({message:'Successfully authenticated all the participants for the certificate!'})
                        let e = r.data;
                        e.forEach(function(a){
                            axios.get('https://techfest.org/admin/certificate/generate/'+a)
                                .then(response=>{
                                    imgData = response.data;
                                    generatePdf();
                                });
                        });
                    });
            },
            nameInsert: function(){
                let names = $('#ids2').val().split(',');
                axios.post('/api/admin/certificate/nameInsert',{names})
                    .then((r)=>{
                        console.log('hello');
                        console.log(r);
                    });
            }
        }
    });
</script>
</body>
</html>