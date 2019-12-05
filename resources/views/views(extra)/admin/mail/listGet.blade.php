@extends('admin.mail.template')

@section('header')
    <link rel="stylesheet" href="{{asset('fontello/css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <style>
        html,body,#container{
            height:100%;
        }
        .email{
            padding:1rem;
            box-shadow: 0 5px 5px -3px black;
            margin-bottom: 3px;
        }
        .email:nth-child(odd){
            background:#aaa;
            color:white;
        }
        .email:nth-child(even){
            background:#fff;
        }
        .email:hover{
            box-shadow: 0 3px 5px 0 black;
        }
        .title{
            font-size: 2rem;
            display: inline-block;
            padding-bottom: 1.55rem;
            padding-top: 1.55rem;
            padding-left:1rem;
            box-shadow: 0 0 5px black;
        }
        .wrapper-closer{
            overflow: hidden;
        }
        .wrapper{
            overflow: auto;
        }
        .hvr-no-change{
            width:100%;
        }
        .sidenav-footer{
        }
    </style>
@endsection

@section('body')
    <div id="container">
        <div class="sidenav-footer fixed-bottom w-25">
            <i class="demo-icon icon-plus text-success hvr-wobble-vertical display-4 pointer" v-on:click="newEmail()"></i>
            <i class="demo-icon icon-home text-success hvr-wobble-vertical display-4 pointer" v-on:click="window.location = '{{route('admin.mail.Get')}}'"></i>
        </div>
        <div class="d-flex d-row h-100">
            <div class="emails h-100 w-25">
                <div class="display-3 bg-dark text-light p-2 m-0">Emails</div>
                <div v-for="message in messages" class="email hvr-forward hvr-no-change" v-on:click="showMail(message.id)">
                    @{{ message.name }}
                </div>
            </div>
            <div class="display w-75 h-100 light-display d-flex flex-column" v-if="currentId!==-1">
                <div class="title">
                    @{{ displayEmail.name }}
                    <div class="float-right">
                        <i class="demo-icon icon-paper-plane text-success hvr-wobble-vertical"></i>
                        <i class="demo-icon icon-pencil text-primary hvr-wobble-vertical" v-on:click="edit()"></i>
                        <i class="demo-icon icon-trash-empty text-danger hvr-wobble-vertical" v-on:click="deleteMail()"></i>
                    </div>
                </div>
                <div class="bg-dark w-100 p-5 h-100 wrapper-closer">
                    <div class="wrapper">
                        <div class="bg-white" v-html="displayEmail.content" ></div>
                    </div>
                </div>
            </div>
            <div class="w-75 h-100 light-display d-flex align-items-center justify-content-center" v-else>
                <div class="text-dark display-4 d-inline-block">
                    Select Some Email To Display
                </div>
            </div>
        </div>
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Are you sure, you want to delete this message?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Don't delete this</button>
                        <button type="button" class="btn btn-danger float-right" v-on:click="destroyMail()">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let container = new Vue({
            el: '#container',
            data: {
                messages:{!! json_encode($mails) !!},
                currentId: -1,
                displayEmail: ''
            },
            methods: {
                showMail: function(id){
                    if(container.currentId===id){
                        container.currentId = -1;
                        container.displayEmail = '';
                    }
                    else {
                        container.currentId = id;
                        $.ajax({
                            url: "{{route('admin.mail.mailGet','')}}/" + id,
                            dataType: 'JSON',
                            success: function (e) {
                                container.displayEmail = e;
                            },
                            error: function (e) {
                                console.log(e);
                            }
                        });
                    }
                },
                newEmail : function(){
                    window.location.href = '{{route('admin.mail.create.templateGet')}}';
                },
                edit: function(){
                    let url = '{{ route('admin.mail.mail.editGet', ":id") }}';
                    url = url.replace(':id', container.currentId);
                    window.location.href = url;
                },
                destroyMail: function(){
                    let url = '{{ route('admin.mail.mail.destroyPost', ":id") }}';
                    url = url.replace(':id', container.currentId);
                    $.ajax({
                        'url':url,
                        'type':'POST',
                        data:{
                            _token: '{{csrf_token()}}'
                        },
                        success: function(){
                            window.location.reload();
                        }
                    })
                },
                deleteMail: function(){
                    $('#deleteModal').modal('show');
                }
            }
        })
    </script>
@endsection