@extends('admin.mail.template')
@section('header')
    <link rel="stylesheet" href="{{asset('fontello/css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <style>
        *{
            font-family: 'Noto Serif', serif;
        }
        body,html{
            width:100%;
            height:100%;
        }
        .pointer{
            cursor: pointer;
        }
        .cc{
            background:#ccc;
            height: 25vh !important;
            overflow-x: hidden !important;
        }
        .display-nice{
            height: calc(25vh - 8rem);
            padding-top:20px;
            padding-left:0.5rem;
            overflow: auto;
        }
        .overflow-hidden{
            overflow: hidden;
        }
        .overflow-auto{
            overflow: auto;
        }
        .overflow-x{
            overflow-x: hidden;
        }
        .icon{
            position: fixed;
            font-size:1.5rem;
            z-index:1;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            width:3rem;
            height:3rem;
            text-align: center;
            line-height:3rem;
        }
        .icon-pencil{
            top: calc(25% - 4rem);
            left: calc(75% - 8rem);
        }
        .icon-paper-plane{
            top: calc(25% - 4rem);
            left: calc(75% - 4rem);
        }
        .smart-area{
            max-height:calc(25vh - 8rem);
            width: calc(100% - 1rem);
        }
        .position-fixed{
            position:fixed;
            top: calc(25vh - 5rem);
            left: calc(25vw + 1rem);
            width:calc(50vw);
        }


        .toast {
            padding: 15px 20px;
            color: #fff;
            background: rgba(0,0,10,0.7);
            display: inline-block;
            position: fixed;
            top: -100px;
            right: 15px;
            opacity: 0;
            transition: all 0.4s ease-out;
        }

    </style>
@endsection

@section('body')
    <div id="main" class="h-100 w-100 d-flex flex-row">
        <div class="modal fade" id="sendMail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Send the mail?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">No!</button>
                        <button type="button" class="btn btn-success float-right" v-on:click="finalSend()">Yes</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="mails bg-dark text-white w-25 p-4">
            <h2 class="display-4 mb-4">Mails</h2>
            <div class="w-100 p-2 mb-2 bg-primary mails-mail hvr-forward pointer" v-on:click="manageEmails()">Manage Email Templates</div>
            <div v-for="mail in mails" class="w-100 p-2 mb-2 bg-secondary mails-mail hvr-forward pointer" v-on:click="mailCall(mail.id)">
                @{{ mail.name }}
            </div>
        </div>
        <form class="compose w-50 overflow-hidden d-flex flex-column" method="POST" action="{{route('admin.mail.sendPost')}}" id="emailForm">
            @csrf
            <textarea name="email" id="email" cols="30" rows="10" class="d-none" required>@{{ content }}</textarea>
            <div class="content-container pt-4 pb-2 bg-dark">
                <div class="cc p-2 overflow-auto">
                    <div class="display-nice" :class="editorOff?'':'d-none'">
                        <span>Emails: </span>
                        <div class="badge badge-dark m-1 pointer" v-for="email in emails">@{{ email }}</div>
                    </div>
                    <div class="pr-1 pl-1" :class="editorOff?'d-none':''">
                        <textarea name="sendTo" required id="sendTo" cols="30" rows="10" class="smart-area w-100" v-model="emailString"></textarea>
                    </div>
                    <div class="row position-fixed" style="max-width:40vw; font-size:12px">
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">From</span>
                                </div>
                                <input type="text" name="sender" id="sender" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1" value="{{$admin->email or "2"}}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Name</span>
                                </div>
                                <input type="text" name="name" id="subject" class="form-control" placeholder="Subject" required aria-label="Username" aria-describedby="basic-addon1" value="{{$admin->name or ""}}">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Subject</span>
                                </div>
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject" required aria-label="Username" aria-describedby="basic-addon1" value="">
                            </div>
                        </div>
                    </div>
                    <i class="demo-icon icon icon-pencil text-white bg-primary hvr-wobble-vertical pointer" v-on:click="editorOff=!editorOff"></i>
                    <i class="demo-icon icon icon-paper-plane text-white bg-success hvr-wobble-vertical pointer" v-on:click="send()"></i>
                </div>
            </div>
            <div class="content h-75 w-100 overflow-auto">
                <div class="code"  v-html="content"></div>
            </div>
        </form>
        <div class="recipents bg-dark text-white w-25 text-right p-4">
            <h2 class="display-3 mb-4">Recipents</h2>
            <div class="w-100 p-2 mb-2 bg-primary mails-mail hvr-backward pointer" v-on:click="manageRecipents()">Manage Recipents Templates</div>
            <div v-for="recipent in recipents" class="w-100 p-2 mb-2 bg-secondary mails-mail hvr-backward pointer" v-on:click="recipentCall(recipent.id)">
                @{{ recipent.name }}
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let main = new Vue({
            el: '#main',
            data: {
                mails: {},
                recipents: {},
                emails: '',
                content: '',
                editorOff: true,
                emailString: '',
            },
            created:function(){
                $.ajax({
                    url: '{{route('admin.mail.mail.listGet')}}',
                    dataType: 'JSON',
                    success: function(e){
                        main.mails = e;
                    }
                });
                $.ajax({
                    url: '{{route('admin.mail.recipents.listGet')}}',
                    dataType: 'JSON',
                    success: function(e){
                        main.recipents = e;
                    }
                })
            },
            methods: {
                recipentCall: function(e){
                    let url = '{{ route('admin.mail.recipents.recipentGet', ":id") }}';
                    url = url.replace(':id', e);
                    $.ajax({
                        url: url,
                        dataType: 'JSON',
                        success: function(e){
                            main.emails = e.emails.split(',');
                            main.emailString = e.emails;
                        }
                    });
                },
                mailCall: function(e){
                    let url = '{{ route('admin.mail.mailGet', ":id") }}';
                    url = url.replace(':id', e);
                    $.ajax({
                        url: url,
                        dataType: 'JSON',
                        success: function(e){
                            main.content = e.content;
                        }
                    });
                },
                send: function(){
                    if($('#sender').val()==='') alert('senders mail missing');
                    else if($('#sendTo').val()==='') alert('Reception List not Selected');
                    else if($('#subject').val()==='') alert('subject missing');
                    else if($('#email').val()==='') alert('Email Template Missing');
                    else $('#sendMail').modal('show');
                },
                finalSend: function(){
                    if($('#sender').val()==='') alert('senders mail missing');
                    else if($('#sendTo').val()==='') alert('Reception List not Selected');
                    else if($('#subject').val()==='') alert('subject missing');
                    else if($('#email').val()==='') alert('Email Template Missing');
                    else $('#emailForm').submit();
                },
                manageEmails: function(){
                    window.location.href = '{{route("admin.mail.listGet")}}';
                },
                manageRecipents: function(){
                    window.location.href = '{{route("admin.mail.recipents.createGet")}}';
                }
            },
            watch:{
                emails: function(){
                    main.emailString = main.emails.toString(",");
                },
                emailString: function(){
                     main.emails = main.emailString.split(",");
                }
            }
        });
    </script>
@endsection
