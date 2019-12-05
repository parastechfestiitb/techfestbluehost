<?php
/*
 * File Name: taskCreateGet.blade.php
 * Author   : Kuldeep
*/
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Task Creator | CA | Admin | TF-2018-19</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/ui-darkness/jquery-ui.min.css">
    <style>
        html,body{
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            height: 100%;
            width: 100%;
        }
        .h-100{
            height: 100%;
        }
        .w-100{
            width: 100%;
        }
        body {
            background-color: #363E4A;
            font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 16px;
            color: #ffffff !important;
            line-height: 1.5;
            width: 100%;
            height: 100%;
        }
        h1 {
            font-family: "Texta", "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 4px;
            text-align: center;
        }
        h2 {
            font-weight: 400;
            font-size: 24px;
            color: rgba(255, 255, 255, 0.4);
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px 16px 40px 16px;
            transform: translateZ(0);
            text-align: center;
        }
        .form-footer {
            margin-top: 2em;
        }
        .ui-input {
            position: relative;
            padding: 0;
            border: 0;
        }
        .ui-input input {
            font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
            border: 0;
            background: none;
            padding: 16px 0 16px 0;
            font-size: 24px;
            outline: 0;
            width: 100%;
            tap-highlight-color: rgba(0, 0, 0, 0);
            touch-callout: none;
        }
        .ui-input input + label {
            position: relative;
            display: block;
            padding: 8px 0 8px 0;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: .0875em;
            font-weight: 500;
            text-align: left;
        }
        .ui-input input + label::before, .ui-input input + label::after {
            position: absolute;
            top: 0;
            left: 0;
            content: "";
            width: 100%;
            height: 1px;
        }
        .ui-input input + label::before {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .ui-input input + label::after {
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
            background-color: #6EB1FF;
            height: 2px;
        }
        .ui-input input + label span {
            position: relative;
            color: rgba(255, 255, 255, 0.2);
            transition: color 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
        }
        .ui-input input + label span::after {
            content: attr(data-text);
            position: absolute;
            overflow: hidden;
            left: 0;
            white-space: nowrap;
            color: #fff;
            background-image: linear-gradient(to right, #4A90E2 50%, rgba(255, 255, 255, 0) 0%);
            background-position: 100% 50%;
            background-size: 200%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            backface-visibility: hidden;
            perspective: 1000;
            transform: translateZ(0);
            transition: background-position 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
        }
        .ui-input input:focus + label::after,
        .ui-input input.error + label::after,
        .ui-input input:invalid + label::after,
        .ui-input input.filled + label::after {
            transform: scaleX(1);
            transform-origin: left;
        }
        .ui-input input:focus + label span::after,
        .ui-input input.error + label span::after,
        .ui-input input:invalid + label span::after,
        .ui-input input.filled + label span::after {
            background-image: linear-gradient(to right, white 50%, rgba(255, 255, 255, 0) 0%);
            background-position: 0% 50%;
        }
        .ui-input input.filled {
            color: #ffffff;
        }
        .ui-input input.filled + label::after {
            background-color: #ffffff;
        }
        .ui-input input.filled + label span::after {
            background-image: linear-gradient(to right, #ffffff 50%, rgba(255, 255, 255, 0) 0%);
            background-position: 0% 50%;
        }
        .ui-input input:focus {
            color: #6EB1FF;
        }
        .ui-input input:focus + label::after {
            background-color: #6EB1FF;
        }
        .ui-input input:focus + label span::after {
            background-image: linear-gradient(to right, #6EB1FF 50%, rgba(255, 255, 255, 0) 0%);
            background-position: 0% 50%;
        }
        .btn {
            border: 0;
            background-color: #50617A;
            padding: 18px 30px;
            font-size: 14px;
            line-height: 1.5;
            text-transform: uppercase;
            letter-spacing: .0875em;
            font-weight: 500;
            color: #ffffff;
            font-family: "Avenir Next", "Avenir", "Helvetica Neue", Helvetica, Arial, sans-serif;
            border-radius: 100px;
            outline: 0;
            transition: background-color 300ms cubic-bezier(0.215, 0.61, 0.355, 1), color 300ms cubic-bezier(0.215, 0.61, 0.355, 1);
        }
        .btn:focus, .btn:active,
        .btn:hover {
            background-color: #6EB1FF;
            color: white;
        }
        .__first, .__second, .__third, .__fourth {
            animation-name: fadeIn;
            animation-duration: 180ms;
            animation-fill-mode: both;
            animation-iteration-count: 1;
        }
        .__first {
            animation-delay: 0;
        }
        .__second {
            animation-delay: 80ms;
        }

        .__third {
            animation-delay: 180ms;
        }
        .__fourth {
            animation-delay: 360ms;
        }
        label{
            margin-bottom: 0;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translate3d(0, -25%, 0);
            }
            to {
                opacity: 1;
                transform: translate3d(0, 0, 0);
            }
        }

        textarea {
            color: white;
            width:100%;
            box-shadow: 0 1px 0 #59616d;
            margin-top: 50px; 
            background: transparent;
            padding: 10px;
            font-size: medium;
            height:auto;
            border:none;
            font-family: 'Helvetica', serif;
        }
        div.line1 {
            width: 100vw;
            height: 3px;
            background-color: orange;
            margin-left: -10px;
            box-shadow: #846711;
        }

        div.line2 {
            width: 100vw;
            height: 3px;
            background-color: #846711;
            margin-left: -10px;
        }
        #toast-btn {
            display: inline-block;
            float: left;
            background: #fff;
            padding: 10px;
            cursor: pointer;
            border: 2px solid #3B2F63;
            white-space: no-wrap;
            font-size: 20px;
            color: #3B2F63;
            width: 40%;
            text-align: center;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        #toast-btn:hover {
            background: #3B2F63;
            color: #fff;
        }

        #textbox {
            background: transparent;
            border: none;
            font-size: 20px;
            padding: 0 10px;
            color: #fff;
            border-left: 2px solid #fff;
            width: 60%;
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
</head>
<body>
<div id="app">
    <div class="container" style="background-color:#2a3038; margin-top: 15px" >
        <div style="margin-top: 75px; color: rgb(110, 177, 255)">
            <h1>College Ambassador</h1>
            <h2>Create tasks for College Ambassadors</h2>
        </div>
        <form class="form" action="{{route('admin.ca.taskCreatePost')}}" method="POST">
            @csrf
            <fieldset class="form-fieldset ui-input __first">
                <input type="text" id="title" name="title" tabindex="0" required />
                <label for="username">
                    <span data-text="Title">Title</span>
                </label>
            </fieldset>
            <fieldset class="form-fieldset ui-input __first">
                <textarea id="description" name="information" rows="3" cols="5" placeholder="Description:" required> </textarea>
            </fieldset>
            <fieldset class="form-fieldset ui-input __first">
                <textarea id="task" name="task" rows="3" cols="5" placeholder="Task" required> </textarea>
            </fieldset>
            <fieldset class="form-fieldset ui-input __first">
                <input type="text" name="start_date" id="start_event" tabindex="0"  required/>
                <label for="username">
                    <span data-text="Start Date">Start Date</span>
                </label>
            </fieldset>
            <fieldset class="form-fieldset ui-input __first">
                <input type="text" id="end_event" name="end_date" tabindex="0" required />
                <label for="username">
                    <span data-text="End Date">End Date</span>
                </label>
            </fieldset>
            <fieldset class="form-fieldset ui-input __first">
                <input type="number" id="points" name="points" tabindex="0" required/>
                <label for="username">
                    <span data-text="Points">Points</span>
                </label>
            </fieldset>
            <fieldset class="form-fieldset ui-input __first">
                <input type="text" id="twitter" name="twitter" tabindex="0"  />
                <label for="username">
                    <span data-text="Twitter Link">Twitter Link</span>
                </label>
            </fieldset>
            <fieldset class="form-fieldset ui-input __first">
                <input type="text" id="facebook" name="facebook" tabindex="0"  />
                <label for="username">
                    <span data-text="Facebook Link">Facebook Link</span>
                </label>
            </fieldset>
            <fieldset class="form-fieldset ui-input __first">
                <input type="text" id="whatsapp" name="whatsapp" tabindex="0" />
                <label for="username">
                    <span data-text="Whatsapp Message">Whatsapp Message</span>
                </label>
            </fieldset>
            <fieldset class="form-fieldset ui-input __first">
                <input type="text" id="linkedin" name="linkedin" tabindex="0" />
                <label for="username">
                    <span data-text="LinkedIn Link">LinkedIn Link</span>
                </label>
            </fieldset>
            <fieldset class="form-fieldset ui-input __first">
                <input type="text" id="linkedin" name="instagram" tabindex="0" />
                <label for="username">
                    <span data-text="Instagram Link">Instagram Link</span>
                </label>
            </fieldset>
            <div class="form-footer">
                <button class="btn">upload task</button>
            </div>
        </form>
    </div>
</div>
<script SRC="{{asset('js/app.js')}}"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    let $input = $('.form-fieldset > input');
    $input.blur(function (e) {
        $(this).toggleClass('filled', !!$(this).val());
    });
    $(document).ready(function(){
        $("#start_event, #end_event").datepicker({
            dateFormat: 'dd-M-yy',
            changeMonth: true,
            defaultDate: new Date()
        });
    });

    // requires jQuery ... for now

    function ToastBuilder(options) {
        // options are optional
        let opts = options || {};

        // setup some defaults
        opts.defaultText = opts.defaultText || 'default text';
        opts.displayTime = opts.displayTime || 3000;
        opts.target = opts.target || 'body';

        return function (text) {
            $('<div/>')
                .addClass('toast')
                .prependTo($(opts.target))
                .text(text || opts.defaultText)
                .queue(function(next) {
                    $(this).css({
                        'opacity': 1
                    });
                    let topOffset = 15;
                    $('.toast').each(function() {
                        let $this = $(this);
                        let height = $this.outerHeight();
                        let offset = 15;
                        $this.css('top', topOffset + 'px');

                        topOffset += height + offset;
                    });
                    next();
                })
                .delay(opts.displayTime)
                .queue(function(next) {
                    let $this = $(this);
                    let width = $this.outerWidth() + 20;
                    $this.css({
                        'right': '-' + width + 'px',
                        'opacity': 0
                    });
                    next();
                })
                .delay(600)
                .queue(function(next) {
                    $(this).remove();
                    next();
                });
        };
    }

    let myOptions = {
        defaultText: 'Toast, yo!',
        displayTime: 3000,
        target: 'body'
    };
    let showtoast = new ToastBuilder(myOptions);

    $('#textbox').keypress(function(e) {
        if (e.which === 13) {
            showtoast($('#textbox').val());
            return false;
        }
    });

    @if(isset($success))
    $('body')
        .queue(function(next) {
            showtoast('Task Created!');
            next();
        }).delay(100);
    @endif
</script>
</body>
</html>