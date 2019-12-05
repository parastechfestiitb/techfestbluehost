@extends('admin.mail.template')
@section('header')
    <link rel="stylesheet" href="{{asset('fontello/css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <style>
        html,body{
            height:100%;
            width:100%;
        }
        .pointer{
            cursor: pointer;
        }
        .delete{
            position: absolute;
            right: 1em;
            bottom:1em;
            border-radius:50%;
            width: 2em;
            height:2em;
            font-size:1em;
            line-height:2em;
            text-align: center;
        }
        .circular-icon{
            border-radius:50%;
            width: 2em;
            height:2em;
            font-size:1em;
            line-height:2em;
            text-align: center;;
        }
        .z--1{
            z-index: -1;
        }
        .footer>*{
            margin:10px;
        }
    </style>
@endsection

@section('body')
    <div class="main d-flex flex-row h-100 w-100">
        <div class="h-100 w-25 p-3">
            <div class="p-2 bg-danger text-light mb-1 hvr-forward w-100 pointer" v-on:click="createNew()" style="font-size:16px;">
                <i class="demo-icon icon-plus text-white hvr-wobble-vertical"></i>
                Create New List
            </div>
            <div v-for="recipent in listOfRecipents" class="p-2 bg-dark text-light mb-1 hvr-forward w-100 pointer" v-on:click="update(recipent.id)">
                @{{ recipent.name }}
            </div>
        </div>
        <div class=" d-flex flex-column h-100 w-75 bg-white" id="container">
            <div class="inputs h-100 w-100">
                <div class="input-group mt-4 pl-5 pr-5">
                    <textarea class="form-control" aria-label="With textarea" placeholder="Enter List of Emails" id="inputs" v-model="input" style="max-height:200px"></textarea>
                </div>
                <hr class="mt-2 mb-2">
                <div class="pl-5">
                    <div class="d-inline-block bg-dark p-3 rounded text-white mr-2 mb-2" v-for="(n,email) in listOfEmails">
                        @{{ email }}
                    </div>
                </div>
            </div>
            <div class="w-100 h-auto bg-dark p-5">
                <form :action="latestUrl" method="POST">
                    @csrf
                    <input type="hidden" :value="final" name="emails">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" v-model="name" placeholder="List Name" aria-label="Username" aria-describedby="basic-addon1" name="name">
                        <div class="input-group-append">
                            <input type="submit" class="btn btn-success" value="Add Subscibers">
                        </div>
                    </div>
                </form>
                <div v-if="updateNumber!==-1">
                    <form :action="deleteUrl" method="POST" id="deleter">
                        @csrf
                        <i class="demo-icon icon-trash-empty text-white hvr-wobble-vertical delete bg-danger pointer" v-on:click="deleteRecipent()"></i>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer fixed-bottom w-25">
            <i class="demo-icon icon-home text-white hvr-wobble-vertical circular-icon bg-primary pointer" style="font-size:1.5rem" v-on:click="window.location='{{route('admin.mail.Get')}}'"></i>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function isValidEmailAddress(emailAddress) {
            let pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
            return pattern.test(emailAddress);
        }
        let container = new Vue({
            el: '.main',
            data: {
                input: '',
                listOfEmails: {},
                final: '',
                listOfRecipents: {},
                createUrl: '{{route('admin.mail.recipents.createPost')}}',
                latestUrl: '{{route('admin.mail.recipents.createPost')}}',
                updateNumber : -1,
                deleteUrl: '',
                name: '',
            },
            created:function(){
               $.ajax({
                   url: "{{route('admin.mail.recipents.listGet')}}",
                   dataType: 'JSON',
                   success: function(e){
                       container.listOfRecipents = e;
                   }
               });
            },
            methods: {
                update: function(e){
                    container.updateNumber = e;
                    let url = '{{ route('admin.mail.recipents.updateGet', ":id") }}';
                    url = url.replace(':id', e);
                    let del = '{{ route('admin.mail.recipents.deletePost', ":id") }}';
                    container.deleteUrl = del.replace(':id', e);
                    container.latestUrl = url;
                    $.ajax({
                        url: url,
                        dataType: 'JSON',
                        success: function(e){
                            container.input = e.emails;
                            container.name = e.name;
                        }
                    });
                },
                createNew: function(){
                    container.updateNumber = -1;
                    container.latestUrl = container.createUrl;
                    container.input = '';
                    container.name = '';
                    container.deleteUrl = '';
                },
                deleteRecipent: function(){
                    $('#deleter').submit();
                }
            },
            watch: {
                input: function(){
                    container.listOfEmails = {};
                    container.input.replace(/[\s,\n]+/g, ',').split(',').forEach(function(e,k){
                        if(isValidEmailAddress(e)) container.listOfEmails[e] = null;
                    });
                    container.final = Object.keys(container.listOfEmails).toString(",");
                }
            }
        });
    </script>
@endsection

