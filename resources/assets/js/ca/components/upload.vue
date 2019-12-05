<template>
    <div class="main-uploader">
        <div class="closer"></div>
        <div class="upload-container">
            <form :action="upload" id="zdrop" class="fileuploader center-align">
                <input type="hidden" name="_token" :value="csrf">
                <input type="hidden" name="file_name" value="typeOfFile" id="_file">
                <div id="upload-label" style="width: 200px;">
                    <i class="fa fa-cloud"></i>
                </div>
                <span class="tittle">Click the Button or Drop Files Here</span>
            </form>
            <div class="preview-container">
                <div class="collection card" id="previews">
                    <div class="collection-item clearhack valign-wrapper item-template" id="zdrop-template">
                        <div class="left pv zdrop-info" data-dz-thumbnail>
                            <div>
                                <span data-dz-name></span> <span data-dz-size></span>
                            </div>
                            <div class="progress">
                                <div class="determinate" style="width:0" data-dz-uploadprogress></div>
                            </div>
                            <div class="dz-error-message"><span data-dz-errormessage></span></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    $(document).ready(function(){
        initFileUploader("#zdrop");
        function initFileUploader(target) {
            let previewNode = document.querySelector("#zdrop-template");
            previewNode.id = "";
            let previewTemplate = previewNode.parentNode.innerHTML;
            previewNode.parentNode.removeChild(previewNode);


            let zdrop = new Dropzone(target, {
                acceptedFiles: 'image/*',
                url: _routes['upload'],
                data: {
                    token: _csrf_token,
                },
                maxFiles: 1,
                maxFilesize: 2,
                previewTemplate: previewTemplate,
                previewsContainer: "#previews",
                clickable: "#upload-label"
            });

            zdrop.on("addedfile", function(file) {
                $('.preview-container').css('visibility', 'visible');

            });

            zdrop.on("totaluploadprogress", function (progress) {
                let progr = document.querySelector(".progress .determinate");
                if (progr === undefined || progr === null)
                    return;

                progr.style.width = progress + "%";
            });

            zdrop.on('dragenter', function () {
                $('.fileuploader').addClass("active");
            });

            zdrop.on('dragleave', function () {
                $('.fileuploader').removeClass("active");
            });

            zdrop.on('drop', function () {
                $('.fileuploader').removeClass("active");
            });

            zdrop.on('complete', function(file) {
                zdrop.removeFile(file);
                $('.fileuploader').removeClass('active');
                $('.main-uploader').removeClass('active');
                $('.preview-container').css('visibility', 'hidden');
                if(file.accepted)
                    alert('File Uploaded!');
                else
                    alert('File size should not be more than 5mb');
            });
        }

    });
    export default {
        name: "upload",
        data: function(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                tasks : null,
                upload: _routes['upload'],
                typeOfFile: 'others'
            }
        },
        methods: {
        }
    }
</script>

<style scoped>
    .main-uploader,.main-uploader *{
        transition: all 1s;
    }
    .main-uploader{
        display:none;
        opacity:0;
        position: fixed;
        top:0;
        left:0;
        height:100vh;
        width:100vw;
        background: rgba(82, 82, 82, 0.5);
        z-index: 999;
    }
    .main-uploader.active{
        display:block;
        opacity:1;
    }
    .upload-container{
        z-index:99;
    }
    .closer{
        position: absolute;
        top:0;
        left:0;
        height:100%;
        width:100%;
    }
    .upload{
        z-index:2;
        max-width:1200px;
        margin: auto;
    }
    .fileuploader {
        position: relative;
        width: 60%;
        margin: auto;
        height: 400px;
        border: 4px dashed #ddd;
        background: #f6f6f6;
        margin-top: 85px;
    }
    .fileuploader #upload-label{
        background: rgba(231, 97, 92, 0);
        color: #fff;
        position: absolute;
        height: 115px;
        top: 20%;
        left: 0;
        right: 0;
        margin-right: auto;
        margin-left: auto;
        min-width: 20%;
        text-align: center;
        cursor: pointer;
    }
    .fileuploader.active{
        background: #fff;
    }
    .fileuploader.active #upload-label{
        background: #fff;
        color: #e7615c;
    }

    .fileuploader #upload-label i:hover {
        color: #444;
        font-size: 9.4rem;
        -webkit-transition: width 2s;
    }

    .fileuploader #upload-label span.title{
        font-size: 1em;
        font-weight: bold;
        display: block;
    }

    span.tittle {
        position: relative;
        top: 222px;
        color: #bdbdbd;
        display: block;
        text-align: center;
    }

    .fileuploader #upload-label i{
        text-align: center;
        display: block;
        color: #e7615c;
        height: 115px;
        font-size: 9.5rem;
        position: absolute;
        top: -12px;
        left: 0;
        right: 0;
        margin-right: auto;
        margin-left: auto;
    }
    /** Preview of collections of uploaded documents **/
    .preview-container{
        position: relative;
        bottom: 0px;
        width: 35%;
        margin: auto;
        top: 25px;
        visibility: hidden;
    }
    .preview-container #previews{
        max-height: 400px;
        overflow: auto;
    }
    .preview-container #previews .zdrop-info{
        width: 88%;
        margin-right: 2%;
    }
    .preview-container #previews.collection{
        margin: 0;
        box-shadow: none;
    }

    .preview-container #previews.collection .collection-item {
        background-color: #e0e0e0;
    }

    .preview-container #previews.collection .actions a{
        width: 1.5em;
        height: 1.5em;
        line-height: 1;
    }
    .preview-container #previews.collection .actions a i{
        font-size: 1em;
        line-height: 1.6;
    }
    .preview-container #previews.collection .dz-error-message{
        font-size: 0.8em;
        margin-top: -12px;
        color: #F44336;
    }



    /*media querie*/

    @media only screen and (max-width: 601px){
        .fileuploader {
            width: 100%;
        }

        .preview-container {
            width: 100%;
        }
    }

    .upload{
        display: none;
    }
</style>