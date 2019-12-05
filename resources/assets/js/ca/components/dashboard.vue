<template>
    <div class="main-wrapper">
        <div class="tasks bg-white pt-3" v-for="(task,key) in tasks">
            <div class="description w-100 pr-3 pl-3">
                <div class="title h2" v-html="task.title" />
                <div class="date pb-1"><span class="text-danger">End Date: </span> {{task.date.toDateString()}}</div>
                <div class="information" v-html="task.information" />
            </div>
            <div class="task-detail p-3 m-t2 bg-light">
                <div class="task" v-html="task.task" />
                <div class="row social-links mt-3 mb-2">
                    <div class="col-8">
                        <div class="fb-share-button" v-if="task.social_links.facebook" :data-href="task.social_links.facebook" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a target="_blank" :href="task.social_links.facebook" class="fb-xfbml-parse-ignore">Share</a></div>
                        <a class="whatsapp" v-if="task.social_links.whatsapp" :href="'whatsapp://send?text='+task.social_links.whatsapp" data-action="share/whatsapp/share"> <i class="fa fa-whatsapp" aria-hidden="true"></i> Whatsapp</a>
                        <a  v-if="task.social_links.linkedin" class="share-icon linkedin" :href="task.social_links.linkedin" target="_blank"><i class="fab fa-linkedin-in"></i> LinkedIn</a>
                        <a  v-if="task.social_links.twitter" class="share-icon twitter" :href="task.social_links.twitter" target="_blank"><i class="fab fa-twitter"></i> Twitter</a>
                        <a  v-if="task.social_links.instagram" class="share-icon instagram" :href="task.social_links.instagram" target="_blank"><i class="fab fa-instagram"></i> Instagram</a>
                    </div>
                    <div class="col-4 pr-4">
                        <div class="float-right upload-btn" onclick="uploadEvent(this)" :id="task.id">
                            <img src="/img/ca/upload.svg" alt="Upload Icon">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "dashboard",
        data: function(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                tasks : null,
                upload: _routes['upload'],
                typeOfFile: 'others'
            }
        },
        created: function(){
            axios.get(_routes.index)
                .then((response)=>{
                    this.tasks = response.data;
                    this.tasks.forEach(function(e){
                        e.social_links  = JSON.parse(e.social_links);
                        e.date = new Date(e.end_date);
                    });
                })
        },
        methods: {
            sortedTasks: function(){
                return  this.tasks;
            }
        }
    }
</script>

<style scoped>
    .fb-share-button{
        z-index:0;
    }
    @media (min-width:992px){
        .tasks {
            width: 600px;
        }
    }
    .tasks{
        max-width:600px;
        margin-bottom:2rem !important;
    }
    .share-icon{
        border-radius:5px;
        font-size:16px;
        color:white !important;
        text-decoration:none!important;
    }
    .linkedin{
        background-color:#127bb6;
        color:white !important;
        padding: 2px 5px;
    }
    .twitter{
        background-color: #55acee;
        color:white !important;
        padding: 5px;
    }
    .instagram{
        background:#c23584;
        padding:5px;
        color:white !important;
    }
    .upload-btn{
        height:35px;
        cursor: pointer;
    }
    .upload-btn img{
        height:35px;
    }
    .social-links a{
        white-space: nowrap;
    }
</style>