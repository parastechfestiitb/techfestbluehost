@extends('admin.mail.template')

@section('header')
    <link rel="stylesheet" href="{{asset('fontello/css/fontello.css')}}">
    <link rel="stylesheet" href="{{asset('css/hover-min.css')}}">
    <link href="{{asset('summernote/summernote.css')}}" rel="stylesheet">
    <style>
        body,html{
            height:100% !important;
            width:100% !important;
            overflow: hidden !important;
        }
        .border-right{
            border-right:4px solid black;
        }
        .output{
            width:100%;
            height:100%;
        }
        .templates{
            display:none;
        }
        .note-editing-area{
            width:100%;
            max-height:600px !important;
            overflow: auto !important;
        }
        .preview{
            width: auto !important;
            height:600px !important;
            margin:60px;
            overflow: auto !important;
            border: 2px double gold;
        }
        .badge{
            cursor: pointer;
        }
        .note-resizebar{
            display:none;
        }
        .overflow-auto{
            overflow:auto !important;
        }
        .nav-top{
            right:10px;
            left:auto;
        }
        .demo-icon{
            font-size: 2em;
        }
        .pointer{
            cursor:pointer;
        }
    </style>
@endsection()

@section('body')
    <div class="nav-top fixed-top w-50 d-flex align-content-around pl-5">
        <div class="text-danger">Do not upload image, use image links!!!!</div>
        <i class="demo-icon text-secondary hvr-wobble-vertical pointer ml-auto" onclick="window.location = '{{url()->previous()}}'">&larr;</i>
        <i class="demo-icon icon-home text-primary hvr-wobble-vertical pointer" onclick="window.location = '{{route('admin.mail.Get')}}'"></i>
    </div>
    <div class="h-100 w-100 d-inline-block d-flex flex-row">
        <form method="post" class="w-50 border-right p-2 editor overflow-auto" action="{{isset($email)?route('admin.mail.mail.editPost',$id):route('admin.mail.create.templateGet')}}">
            <div style="z-index: 1">
                <div class="display-3 d-inline-block" style="margin-bottom:8px">Editor</div>
                <div class="d-inline-block w-50 pb-2 mt-4 float-right text-right" style="z-index:9999;">
                    <input type="text" name="name" class="form-control d-inline-block w-50" value="{{$email->name or ''}}" required placeholder="Email Name" aria-label="Email Name" aria-describedby="basic-addon2">
                    <input type="submit" class="btn btn-success d-inline-block">
                </div>
                <div class="d-flex flex-row mb-1">
                    <div class="badge badge-success btn-template-1">Template 1</div>
                    <div class="badge badge-success btn-template-2">Template 2</div>
                    <div class="badge badge-success btn-template-3">Template 3</div>
                    <div class="badge badge-success btn-template-4">Template 4</div>
                </div>
            </div>
            @csrf
            <div>
                <textarea id="summernote" name="editordata" autofocus row="5" cols="5">
                </textarea>
            </div>
        </form>
        <div class="output w-50 pt-2">
            <div class="display-3 pt-3">Preview</div>
            <hr>
            <div class="pt-1"/>
            <div class="preview b-1 mt-5 p-1">
            </div>
        </div>
    </div>
    <div class="templates">
        <div class="template-1">
            <style>
                @media only screen and (max-width: 600px) {
                    .template1 .main {
                        width: 320px !important;
                    }
                    .template1 .main .top-image {
                        width: 100% !important;
                    }
                    .template1 .inside-footer {
                        width: 320px !important;
                    }
                    .template1 table[class="contenttable"] {
                        width: 320px !important;
                        text-align: left !important;
                    }
                    .template1 td[class="force-col"] {
                        display: block !important;
                    }
                    .template1 td[class="rm-col"] {
                        display: none !important;
                    }
                    .template1 .mt {
                        margin-top: 15px !important;
                    }
                    .template1 *[class].width300 {
                        width: 255px !important;
                    }
                    .template1 *[class].block {
                        display: block !important;
                    }
                    .template1 *[class].blockcol {
                        display: none !important;
                    }
                    .template1 .emailButton {
                        width: 100% !important;
                    }
                    .template1 .emailButton a {
                        display: block !important;
                        font-size: 18px !important;
                    }
                }
            </style>
            <div class="template1">

                <div class="template1" link="#00a5b5" vlink="#00a5b5" alink="#00a5b5">

                    <table class=" main contenttable" align="center" style="font-weight: normal;border-collapse: collapse;border: 0;margin-left: auto;margin-right: auto;padding: 0;font-family: Arial, sans-serif;color: #555559;background-color: white;font-size: 16px;line-height: 26px;width: 600px;">
                        <tr>
                            <td class="border" style="border-collapse: collapse;border: 1px solid #eeeff0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                    <tr>
                                        <td colspan="4" valign="top" class="image-section" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff;border-bottom: 4px solid #00a5b5">
                                            <a href="https://tenable.com"><img class="top-image" src="https://info.tenable.com/rs/tenable/images/tenable-white-email.png" style="line-height: 1;width: 600px;" alt="Tenable Network Security"></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" class="side title" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;vertical-align: top;background-color: white;border-top: none;">
                                            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                                <tr>
                                                    <td class="head-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 28px;line-height: 34px;font-weight: bold; text-align: center;">
                                                        <div class="mktEditable" id="main_title">
                                                            Title of Email is super long and detailed
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="sub-title" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px 0 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 18px;line-height: 29px;font-weight: bold;text-align: center;">
                                                        <div class="mktEditable" id="intro_title">
                                                            Sub title:
                                                        </div></td>
                                                </tr>
                                                <tr>
                                                    <td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"></td>
                                                </tr>
                                                <tr>
                                                    <td class="grey-block" style="border-collapse: collapse;border: 0;margin: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background-color: #fff; text-align:center;">
                                                        <div class="mktEditable" id="cta">
                                                            <img class="top-image" src="https://info.tenable.com/rs/tenable/images/webinar-no-text.png" width="560"/><br><br>
                                                            <strong>Date:</strong> Caecuss, Dabico xx, XXXX<br>
                                                            <strong>Time</strong>: 9:00 am &#8211; 4:00 pm<br><br>
                                                            <a style="color:#ffffff; background-color: #ff8300;  border: 10px solid #ff8300; border-radius: 3px; text-decoration:none;" href="#">Download Now</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="top-padding" style="border-collapse: collapse;border: 0;margin: 0;padding: 15px 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 21px;">
                                                        <hr size="1" color="#eeeff0">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                                        <div class="mktEditable" id="main_text">
                                                            Hello @{{lead.First Name:default=Sir/Madam}},<br><br>

                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br><br>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
                                                        &nbsp;<br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
                                                        <div class="mktEditable" id="download_button" style="text-align: center;">
                                                            <a style="color:#ffffff; background-color: #ff8300; border: 10px solid #ff8300;border-right-width: 20px;border-left-width: 20px;border-radius: 3px; text-decoration:none;" href="#">Download Now</a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding:20px; font-family: Arial, sans-serif; -webkit-text-size-adjust: none;" align="center">
                                            <table>
                                                <tr>
                                                    <td align="center" style="font-family: Arial, sans-serif; -webkit-text-size-adjust: none; font-size: 16px;">
                                                        <a style="color: #00a5b5;" href="@{{system.forwardToFriendLink}}">Forward this Email</a>
                                                        <br/><span style="font-size:10px; font-family: Arial, sans-serif; -webkit-text-size-adjust: none;" >Please only forward this email to colleagues or contacts who will be interested in receiving this email.</span>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px; padding: 20px;">
                                            <div class="mktEditable" id="cta_try">
                                                <table border="0" cellpadding="0" cellspacing="0" class="mobile" style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                                    <tr>
                                                        <td class="force-col" valign="top" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">

                                                            <table class="mb mt" style="font-weight: normal;border-collapse: collapse;border: 0;padding: 0;font-family: Arial, sans-serif;margin: 0 0 15px;">
                                                                <tr>
                                                                    <td class="grey-block" style="border-collapse: collapse;margin: 0;padding: 18px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;background-color: #fff; border: 1px solid #E6E6E6;border-top: 3px #00a5b5;width: 250px; text-align: center;">

                                                                        <span style="font-family: Arial, sans-serif; font-size: 24px; line-height: 39px; border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559; text-align: center;font-weight: bold;">Try Our Products</span><br>
                                                                        Get started with a trial for your organization<br><br>
                                                                        <a style="color:#ffffff; background-color: #00a5b5;  border: 10px solid #00a5b5;border-right-width: 20px;border-left-width: 20px;border-radius: 3px; text-decoration:none;" href="https://www.tenable.com/evaluate">Try Now</a>

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td class="rm-col" style="border-collapse: collapse;border: 0;margin: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;padding: 0 15px 0 0;"></td>
                                                        <td class="force-col" valign="top" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;">
                                                            <table class="mb mt" style="font-weight: normal;border-collapse: collapse;border: 0;padding: 0;font-family: Arial, sans-serif;margin: 0 0 15px;">
                                                                <tr>
                                                                    <td class="grey-block" style="border-collapse: collapse;margin: 0;padding: 18px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 24px;background-color: #fff; border: 1px solid #E6E6E6;border-top: 3px #00a5b5;width: 250px; text-align: center;">

                                                                        <span style="font-family: Arial, sans-serif; font-size: 24px; line-height: 39px; border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559; text-align: center;font-weight: bold;">Buy Our Products</span><br>
                                                                        Get the full power of Tenable working for you<br><br>
                                                                        <a style="color:#ffffff; background-color: #00a5b5;  border: 10px solid #00a5b5;border-right-width: 20px;border-left-width: 20px;border-radius: 3px; text-decoration:none;" href="https://www.tenable.com/products/buy">Buy Now</a>

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top" align="center" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;">
                                            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                                <tr>
                                                    <td align="center" valign="middle" class="social" style="border-collapse: collapse;border: 0;margin: 0;padding: 10px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;text-align: center;">
                                                        <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                                            <tr>
                                                                <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.tenable.com/blog"><img src="https://info.tenable.com/rs/tenable/images/rss-teal.png"></a></td>
                                                                <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://twitter.com/tenablesecurity"><img src="https://info.tenable.com/rs/tenable/images/twitter-teal.png"></a></td>
                                                                <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.facebook.com/Tenable.Inc"><img src="https://info.tenable.com/rs/tenable/images/facebook-teal.png"></a></td>
                                                                <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.youtube.com/tenablesecurity"><img src="https://info.tenable.com/rs/tenable/images/youtube-teal.png"></a></td>
                                                                <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://www.linkedin.com/company/tenable-network-security"><img src="https://info.tenable.com/rs/tenable/images/linkedin-teal.png"></a></td>
                                                                <td style="border-collapse: collapse;border: 0;margin: 0;padding: 5px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;"><a href="https://plus.google.com/107158297098429070217"><img src="https://info.tenable.com/rs/tenable/images/google-teal.png"></a></td>

                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr bgcolor="#fff" style="border-top: 4px solid #00a5b5;">
                                        <td valign="top" class="footer" style="border-collapse: collapse;border: 0;margin: 0;padding: 0;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 16px;line-height: 26px;background: #fff;text-align: center;">
                                            <table style="font-weight: normal;border-collapse: collapse;border: 0;margin: 0;padding: 0;font-family: Arial, sans-serif;">
                                                <tr>
                                                    <td class="inside-footer" align="center" valign="middle" style="border-collapse: collapse;border: 0;margin: 0;padding: 20px;-webkit-text-size-adjust: none;color: #555559;font-family: Arial, sans-serif;font-size: 12px;line-height: 16px;vertical-align: middle;text-align: center;width: 580px;">
                                                        <div id="address" class="mktEditable">
                                                            <b>Tenable Network Security</b><br>
                                                            7021 Columbia Gateway Drive<br>  Suite 500 <br> Columbia, MD 21046<br>
                                                            <a style="color: #00a5b5;" href="https://www.tenable.com/contact-tenable">Contact Us</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="template-2">
            <style>
                @font-face {
                .template2 {
                    font-family: "Special Elite";
                    font-style: normal;
                    font-weight: 400;
                    src: local("Special Elite"), local("SpecialElite-Regular"), url(https://fonts.gstatic.com/s/specialelite/v6/9-wW4zu3WNoD5Fjka35JmwYWpCd0FFfjqwFBDnEN0bM.woff2) format("woff2");
                    unicode-range: U+0000-00ff, U+0131, U+0152-0153, U+02c6, U+02da, U+02dc, U+2000-206f, U+2074, U+20ac, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
                }
                }
                .template2 body {
                    font-family: "Special Elite", monospace, Courier New;
                    background: #eee;
                }
                .template2 .email {
                    display: block;
                    width: 470px;
                    padding: 60px 100px;
                    margin: 50px auto;
                    background: #fff;
                    box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.3);
                    border-radius: 10px;
                }
                .template2 .signature-name {
                    text-align: initial;
                    font: 16px;
                    color: #666;
                    padding: 0 20px;
                    line-height: 24px;
                }
                .template2 .signature-title {
                    font-size: 14px;
                    color: #666;
                }
                .template2 .signature-contact {
                    color: #999;
                    font-size: 14px;
                    text-align: initial;
                    padding: 20px 20px;
                }
                .template2 .signature-contact a {
                    color: #999;
                    text-decoration: none;
                    line-height: 24px;
                }
                .template2 p {
                    font-size: 18px;
                    margin-bottom: 1.5em;
                    line-height: 1.6;
                    color: #444;
                }

            </style>
            <div class="template2">

                <div class="email">
                    <p>Dear Lorem Ipsum,</p>
                    <p>Praesent dui ex, dapibus eget mauris ut, finibus vestibulum enim. Quisque arcu leo, facilisis in fringilla id, luctus in tortor. Nunc vestibulum est quis orci varius viverra. Curabitur dictum volutpat massa vulputate molestie. In at felis ac velit maximus
                        convallis.</p>
                    <p>Sincerly,</p>
                    <!-- EMAIL SIGNATURE STARTS HERE -->
                    <table border="0" cellspacing="0" cellpadding="0" width="100%" style="width:100%;border-top: 3px dashed #eee;padding-top:20px;margin-top: 40px;">
                        <tbody>
                        <tr valign="top">
                            <td style="padding-left:20px;width:10px;padding-right:20px;"> <a href="https://github.com/CoffeeAndEmails"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/332663/profile/profile-512_2.jpg" height="120" alt="Coffee and Emails"></a></td>
                            <td style="border-right:3px dashed #eee;"></td>
                            <td>
                                <div class="signature-name">LEV PIAUTZER<br> <span class="signature-title">Webdesign</span> </div>
                                <div class="signature-contact">Get Coffee and Emails on<br><a href="https://twitter.com/CoffeeAndEmails/">Twitter</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="https://github.com/CoffeeAndEmails/">Github</a>&nbsp;&nbsp;-&nbsp;&nbsp;Skype</div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <!-- EMAIL SIGNATURE ENDS HERE -->
                </div>
            </div>
        </div>
        <div class="template-3">
            <div id="archivebody" class="body template3">
                <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f2f2f3">
                    <tbody>
                    <tr>
                        <td align="center" valign="top">
                            <table width="600" border="0" cellspacing="0" cellpadding="0" class="w320">
                                <tbody>
                                <tr>
                                    <td class="content-spacing2" style="font-size:0pt; line-height:0pt; text-align:left" width="0"></td>
                                    <td>
                                        <div style="font-size:0pt; line-height:0pt; height:16px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="16" style="height:16px" alt=""></div>

                                        <!-- Top bar -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tbody>
                                            <tr>
                                                <td class="column-300">
                                                    <div class="img-logo" style="font-size:0pt; line-height:0pt; text-align:left">
                                                        <a href="https://www.eventbrite.com/" target="_blank" style="color: #a59e9b;text-decoration: none;"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/a0800a9f-feef-4952-8e22-8ab1d5d4c3ad.png" border="0" width="113" height="" alt=""></a>
                                                    </div>
                                                    <div style="font-size:0pt; line-height:0pt;" class="mobile-br-15"></div>

                                                </td>

                                                <td class="column-300" width="400">
                                                    <div class="text-top" style="color:#999999; font-family:Arial; font-size:11px; line-height:15px; text-align:right">
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!-- END Top bar -->
                                        <div style="font-size:0pt; line-height:0pt; height:16px" bgcolor="#ffffff"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="16" style="height:16px" alt=""></div>

                                        <a href="http://www.eventbrite.com/rally/" border="0" style="color: #a59e9b;text-decoration: none;"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/9e8e07bd-e8f6-46bc-b57a-d8e3f8008a6b.jpg" width="100%" alt="Rally, By Eventbrite" style="display:block;"></a>
                                        <!-- Green section -->
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                            <tbody>
                                            <tr>
                                                <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="43"></td>
                                                <td>
                                                    <div style="font-size:0pt; line-height:0pt; height:22px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="22" style="height:22px" alt=""></div>


                                                    <div class="hide-for-mobile">
                                                        <div style="font-size:0pt; line-height:0pt; height:20px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="20" style="height:20px" alt=""></div>

                                                    </div>

                                                    <div style="font-size:0pt; line-height:0pt; height:10px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="10" style="height:10px" alt=""></div>

                                                    <div class="text-white" style="color:#00a8f2; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 300; font-size:24px;  line-height: 32px; text-align:center">What's in? What's out? What's next? Here's your weekly dose of in-the-know from Rally.<br><br>
                                                    </div>
                                                    <div style="font-size:0pt; line-height:0pt; height:18px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="18" style="height:18px" alt=""></div>


                                                    <!-- Rally Article 1 -->
                                                    <div style="font-size:0pt; line-height:0pt; height:16px" bgcolor="#ffffff"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="16" style="height:16px" alt=""></div>

                                                    <a href="http://www.eventbrite.com/rally/sf-weekend-guide-june-5-7/" border="0" style="color: #a59e9b;text-decoration: none;"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/c14b3a01-1e5a-4214-8e40-774609aaacab.jpg" width="100%" alt=""></a>

                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                                        <tbody>
                                                        <tr>
                                                            <td>

                                                                <div class="hide-for-mobile">
                                                                    <div style="font-size:0pt; line-height:0pt; height:5px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="5" style="height:5px" alt=""></div>
                                                                </div>

                                                                <div style="font-size:0pt; line-height:0pt; height:20px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="20" style="height:20px" alt=""></div>

                                                                <div class="text-white">
                                                                    <div style="color:#4d4d4d; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 600; font-size:15px; line-height:25px; text-align:left">SF Weekend Guide: June 5-7</div>
                                                                    <div style="font-size:0pt; line-height:0pt; height:8px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="8" style="height:8px" alt=""></div>
                                                                    <div class="text-sub" style="color:#999999; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 300; font-size:15px; line-height:25px; text-align:left">Warriors watch party, concerts in the park, and beer by the barrel are coming in hot this weekend. Take that, Karl.</div>
                                                                    <div style="font-size:0pt; line-height:0pt; height:15px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="5" style="height:15px" alt=""></div>


                                                                    <div width="100%">
                                                                        <table border="0" cellpadding="0" cellspacing="0" class="emailButton" style="border-radius:3px; background-color:#00cc52;">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td align="center" valign="middle" class="emailButtonContent" style="padding-top:10px; padding-right:30px; padding-bottom:10px; padding-left:30px;">
                                                                                    <a href="http://www.eventbrite.com/rally/sf-weekend-guide-june-5-7/" target="_blank" style="color:#FFFFFF; font-family:HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size:15px; font-weight:300; text-decoration:none;">READ MORE</a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>


                                                                    <div style="font-size:0pt; line-height:0pt; height:20px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="20" style="height:20px" alt=""></div>


                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- END Rally Article 1 section -->

                                                    <div style="font-size:0pt; line-height:0pt; height:16px" bgcolor="#ffffff"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="16" style="height:16px" alt=""></div>

                                                    <!-- Rally Article 2 -->
                                                    <div style="font-size:0pt; line-height:0pt; height:16px" bgcolor="#ffffff"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="16" style="height:16px" alt=""></div>

                                                    <a href="http://www.eventbrite.com/rally/sf-neighborhood-guide-clement-street/" border="0" style="color: #a59e9b;text-decoration: none;"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/40fd8d9f-5853-49ae-8c3e-1f189698d7b5.jpg" width="100%" alt=""></a>

                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                                        <tbody>
                                                        <tr>
                                                            <td>


                                                                <div class="hide-for-mobile">
                                                                    <div style="font-size:0pt; line-height:0pt; height:5px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="5" style="height:5px" alt=""></div>

                                                                </div>

                                                                <div style="font-size:0pt; line-height:0pt; height:20px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="20" style="height:20px" alt=""></div>

                                                                <div class="text-white">
                                                                    <div class="text-sub" style="color:#4d4d4d; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 600; font-size:15px; line-height:25px; text-align:left">How to Raise a Ruckus in the Inner Richmond</div>
                                                                    <div style="font-size:0pt; line-height:0pt; height:8px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="8" style="height:8px" alt=""></div>
                                                                    <div style="color:#999999; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 300; font-size:15px; line-height:25px; text-align:left">Want to explore a new 'hood? Here's our guide to spending morning, noon, and night in the Inner Richmond.</div>

                                                                    <div style="font-size:0pt; line-height:0pt; height:15px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="5" style="height:15px" alt=""></div>


                                                                    <div width="100%">
                                                                        <table border="0" cellpadding="0" cellspacing="0" class="emailButton" style="border-radius:3px; background-color:#00cc52;">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td align="center" valign="middle" class="emailButtonContent" style="padding-top:10px; padding-right:30px; padding-bottom:10px; padding-left:30px;">
                                                                                    <a href="http://www.eventbrite.com/rally/sf-neighborhood-guide-clement-street/" target="_blank" style="color:#FFFFFF; font-family:HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size:15px; font-weight:300; text-decoration:none;">READ MORE</a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>


                                                                    <div style="font-size:0pt; line-height:0pt; height:20px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="20" style="height:20px" alt=""></div>


                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- END Rally Article 2 section -->


                                                    <div style="font-size:0pt; line-height:0pt; height:16px" bgcolor="#ffffff"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="16" style="height:16px" alt=""></div>

                                                    <!-- Rally Article 3 -->
                                                    <div style="font-size:0pt; line-height:0pt; height:16px" bgcolor="#ffffff"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="16" style="height:16px" alt=""></div>

                                                    <a href="http://www.eventbrite.com/rally/capturing-lightning-bottle/" border="0" style="color: #a59e9b;text-decoration: none;"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/2f93e5f4-fed5-4343-bd50-2f128e51930f.jpg" width="100%" alt=""></a>

                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                                        <tbody>
                                                        <tr>
                                                            <td>


                                                                <div class="hide-for-mobile">
                                                                    <div style="font-size:0pt; line-height:0pt; height:5px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="5" style="height:5px" alt=""></div>

                                                                </div>

                                                                <div style="font-size:0pt; line-height:0pt; height:20px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="20" style="height:20px" alt=""></div>
                                                                <div class="text-white">
                                                                    <div class="text-sub" style="color:#4d4d4d; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 600; font-size:15px; line-height:25px; text-align:left">Mind = Blown. Photos from Lightning in a Bottle Festival</div>
                                                                    <div style="font-size:0pt; line-height:0pt; height:8px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="8" style="height:8px" alt=""></div>
                                                                    <div style="color:#999999; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 300; font-size:15px; line-height:25px; text-align:left">What happens when you mix crowds from Burning Man and Coachella into one transformational festival? This photo essay chronicles the escapades of one Lightning in a Bottle goer.</div>
                                                                    <div style="font-size:0pt; line-height:0pt; height:15px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="5" style="height:15px" alt=""></div>


                                                                    <div width="100%">
                                                                        <table border="0" cellpadding="0" cellspacing="0" class="emailButton" style="border-radius:3px; background-color:#00cc52;">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td align="center" valign="middle" class="emailButtonContent" style="padding-top:10px; padding-right:30px; padding-bottom:10px; padding-left:30px;">
                                                                                    <a href="http://www.eventbrite.com/rally/capturing-lightning-bottle/" target="_blank" style="color:#FFFFFF; font-family:HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size:15px; font-weight:300; text-decoration:none;">READ MORE</a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>


                                                                    <div style="font-size:0pt; line-height:0pt; height:20px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="20" style="height:20px" alt=""></div>


                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- END Rally Article 3 section -->

                                                    <div style="font-size:0pt; line-height:0pt; height:16px" bgcolor="#ffffff"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="16" style="height:16px" alt=""></div>

                                                    <!-- Rally Article 4 -->
                                                    <div style="font-size:0pt; line-height:0pt; height:16px" bgcolor="#ffffff"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="16" style="height:16px" alt=""></div>

                                                    <a href="http://www.eventbrite.com/rally/top-free-events-this-june-in-sf/" border="0" style="color: #a59e9b;text-decoration: none;"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/e36880bd-3bce-4a28-bb71-18a828e5dbf4.jpg" width="100%" alt=""></a>

                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                                                        <tbody>
                                                        <tr>
                                                            <td>


                                                                <div class="hide-for-mobile">
                                                                    <div style="font-size:0pt; line-height:0pt; height:5px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="5" style="height:5px" alt=""></div>

                                                                </div>

                                                                <div style="font-size:0pt; line-height:0pt; height:20px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="20" style="height:20px" alt=""></div>
                                                                <div class="text-white">
                                                                    <div class="text-sub" style="color:#4d4d4d; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 600; font-size:15px; line-height:25px; text-align:left">10 Events That Won't Break the Bank</div>
                                                                    <div style="font-size:0pt; line-height:0pt; height:8px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="8" style="height:8px" alt=""></div>
                                                                    <div style="color:#999999; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-weight: 300; font-size:15px; line-height:25px; text-align:left">No need to get spendy this summer. Check out our favorite free events in SF this month.</div>

                                                                    <div style="font-size:0pt; line-height:0pt; height:15px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="5" style="height:15px" alt=""></div>


                                                                    <div width="100%">
                                                                        <table border="0" cellpadding="0" cellspacing="0" class="emailButton" style="border-radius:3px; background-color:#00cc52;">
                                                                            <tbody>
                                                                            <tr>
                                                                                <td align="center" valign="middle" class="emailButtonContent" style="padding-top:10px; padding-right:30px; padding-bottom:10px; padding-left:30px;">
                                                                                    <a href="http://www.eventbrite.com/rally/top-free-events-this-june-in-sf/" target="_blank" style="color:#FFFFFF; font-family:HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size:15px; font-weight:300; text-decoration:none;">READ MORE</a>
                                                                                </td>
                                                                            </tr>
                                                                            </tbody>
                                                                        </table>

                                                                    </div>


                                                                    <div style="font-size:0pt; line-height:0pt; height:20px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="20" style="height:20px" alt=""></div>


                                                                </div>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- END Rally Article 4 section -->
                                                    <br><br><br>

                                                </td>
                                                <td class="content-spacing" style="font-size:0pt; line-height:0pt; text-align:left" width="40">
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!-- END Green section -->


                                        <!-- END Green section -->
                                        <div style="font-size:0pt; line-height:0pt; height:36px"><img src="https://gallery.mailchimp.com/95f9f5ca81ac7f41ddc1360bc/images/dda1eb19-70ad-40d9-89c6-c7fe76da8ef8.gif" width="1" height="36" style="height:36px" alt=""></div>

                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin: 0;padding: 0;font-family: HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; width: 100%;">
                                            <tbody style="margin: 0;padding: 0;font-family: HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;">

                                            <tr>
                                                <td class="grid__col" style="font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding: 12px 20px; ">


                                                    <table cellspacing="0" cellpadding="0" width="100%" style="" align="" class="col-layout">


                                                        <tbody>
                                                        <tr style="" class="">


                                                            <td width="50%" height="" style="" align="" valign="top" class="col-footer-cta">

                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">


                                                                    <tbody>
                                                                    <tr class="">
                                                                        <td class="grid__col" style="font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding: 0 28px 0 0; ">


                                                                            <table cellspacing="0" cellpadding="0" width="100%" style="" align="" class="col-layout">


                                                                                <tbody>
                                                                                <tr style="" class="">


                                                                                    <td width="75%" height="" style="padding-right: 10px;" align="" valign="middle" class="col-container">

                                                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">


                                                                                            <tbody>
                                                                                            <tr style="" class="">


                                                                                                <td width="" height="" style="" align="" valign="" class="">


                                                                                                    <h2 style="color: #404040; font-weight: 300; margin: 0 0 12px 0; font-size: 17px; line-height: 24px; padding-top: 0; padding-bottom: 0; margin-top: 0; margin-bottom: 0; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; ">

                                                                                                        Create your own event

                                                                                                    </h2>


                                                                                                    <div style="color: #666666; font-weight: 400; font-size: 13px; line-height: 18px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding-bottom: 6px;" class="">

                                                                                                        Anyone can sell tickets or manage registration with Eventbrite.

                                                                                                    </div>


                                                                                                    <div style="color: #666666; font-weight: 400; font-size: 13px; line-height: 18px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " class="">


                                                                                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " href="http://www.eventbrite.com/features/" class="">Learn More</a>


                                                                                                    </div>


                                                                                                </td>


                                                                                            </tr>


                                                                                            </tbody>
                                                                                        </table>

                                                                                    </td>


                                                                                    <td width="25%" height="" style="" align="" valign="middle" class="col-container">

                                                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">


                                                                                            <tbody>
                                                                                            <tr style="" class="">


                                                                                                <td width="" height="" style="" align="" valign="" class="">


                                                                                                    <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " href="http://www.eventbrite.com/features/" class="hide-for-small">


                                                                                                        <img src="https://ebmedia.eventbrite.com/s3-s3/marketing/emails/images/icons/tickets.png" title="" alt="" style="" border="0" width="60" height="60" class="">


                                                                                                    </a>


                                                                                                </td>


                                                                                            </tr>


                                                                                            </tbody>
                                                                                        </table>

                                                                                    </td>


                                                                                </tr>


                                                                                </tbody>
                                                                            </table>


                                                                        </td>
                                                                    </tr>


                                                                    </tbody>
                                                                </table>

                                                            </td>


                                                            <td width="1px" height="" style="height: 100%; background: #dedede;" align="" valign="" class="col_container">

                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">


                                                                </table>

                                                            </td>


                                                            <td width="50%" height="" style="" align="" valign="top" class="col-footer-cta">

                                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">


                                                                    <tbody>
                                                                    <tr class="">
                                                                        <td class="grid__col" style="font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding: 0 0 0 28px; ">


                                                                            <table cellspacing="0" cellpadding="0" width="100%" style="" align="" class="col-layout">


                                                                                <tbody>
                                                                                <tr style="" class="">


                                                                                    <td width="75%" height="" style="padding-right: 10px;" align="" valign="middle" class="col-container">

                                                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">


                                                                                            <tbody>
                                                                                            <tr style="" class="">


                                                                                                <td width="" height="" style="" align="" valign="" class="">


                                                                                                    <h2 style="color: #404040; font-weight: 300; margin: 0 0 12px 0; font-size: 17px; line-height: 24px; padding-top: 0; padding-bottom: 0; margin-top: 0; margin-bottom: 0; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; ">

                                                                                                        Find more events on your phone
                                                                                                    </h2>


                                                                                                    <div style="color: #666666; font-weight: 400; font-size: 13px; line-height: 18px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; padding-bottom: 6px;" class="">
                                                                                                        Find events, buy tickets, and access them on your phone.
                                                                                                    </div>


                                                                                                    <div style="color: #666666; font-weight: 400; font-size: 13px; line-height: 18px; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " class="">


                                                                                                        <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " href="http://www.eventbrite.com/eventbriteapp/" class="">Download</a>


                                                                                                    </div>


                                                                                                </td>


                                                                                            </tr>


                                                                                            </tbody>
                                                                                        </table>

                                                                                    </td>


                                                                                    <td width="25%" height="" style="" align="" valign="middle" class="col-container">

                                                                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">


                                                                                            <tbody>
                                                                                            <tr style="" class="">


                                                                                                <td width="" height="" style="" align="" valign="" class="">


                                                                                                    <a style="text-decoration: none; color: #0f90ba; font-family: 'Helvetica neue', Helvetica, arial, sans-serif; " href="http://www.eventbrite.com/eventbriteapp/" class="hide-for-small">


                                                                                                        <img src="https://ebmedia.eventbrite.com/s3-s3/marketing/emails/images/icons/screen-s.png" title="" alt="" style="" border="0" width="60" height="60" class="">


                                                                                                    </a>


                                                                                                </td>


                                                                                            </tr>


                                                                                            </tbody>
                                                                                        </table>

                                                                                    </td>


                                                                                </tr>


                                                                                </tbody>
                                                                            </table>


                                                                        </td>
                                                                    </tr>


                                                                    </tbody>
                                                                </table>

                                                            </td>


                                                        </tr>


                                                        </tbody>
                                                    </table>


                                                </td>
                                            </tr>


                                            <tr style="margin: 0;padding: 0;font-family: HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;">
                                                <td style="margin: 0;padding: 0;font-family: HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;">
                                                    <p style="font-family: HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif;text-decoration: none;font-size: 11px;text-align: center;color: rgb(153, 153,153);padding-top: 0px;line-height: 21px;padding-bottom: 0px;font-weight: 300;padding: 0 !important;margin: 0 !important;">Eventbrite, Inc. | 155 5th St. | San Francisco, CA | 94103 | <a style="color: #0f90ba;text-decoration: none;margin: 0;padding: 0;font-family: HelveticaNeue-Light, 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 11px;"
                                                                                                                                                                                                                                                                                                                                                                                                                                                               href="http://eventbrite.us11.list-manage.com/unsubscribe?u=95f9f5ca81ac7f41ddc1360bc&amp;id=2c4c162fb1&amp;e=[UNIQID]&amp;c=702da84ca3">Unsubscribe</a> <br> Copyright © 2015 Eventbrite. All rights reserved.
                                                    </p>

                                                    <div style="text-align: center;padding-bottom: 0px;margin-top: 0px;margin-bottom: 0px;font-weight: 300;font-size: 13px;line-height: 1.6;color: #666;">
                                                        <a href="http://www.eventbrite.com/" style="margin: 0;padding: 0; color: #999;font-size: 11px;text-transform: uppercase ! important;text-decoration: none;">
                                                            <img border="0" alt="" src="https://eventbrite-design.s3.amazonaws.com/images/emails/ReservedSeatingEmail/img/LogoBadge.png" style="margin: 0;padding-top: 4px; max-width: 100%;"></a><br><br><br></div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="template-4">
            <div class="template4" style="max-width:550px; min-width:320px;  background-color: white; border: 1px solid #DDDDDD; margin-right: auto; margin-left: auto;">
                <div style="margin-left:30px;margin-right:30px;">
                    <p>&nbsp;</p>
                    <p><a href="https://logico.com.ar" style="text-decoration:none;font-family:Verdana, Geneva, sans-serif;font-weight: bold; color: #3D3D3D;font-size: 15px;">yourwebsite.com</a></p>
                    <hr style="margin-top:10px;margin-bottom:65px;border:none;border-bottom:1px solid red;"/>
                    <h1 style="font-family: Tahoma, Geneva, sans-serif; font-weight: normal; color: #2A2A2A; text-align: center; margin-bottom: 65px;font-size: 20px; letter-spacing: 6px;font-weight: normal; border: 2px solid black; padding: 15px;">THANKS FOR YOUR FEEDBACK!</h1>
                    <h3 style="font-family:Palatino Linotype, Book Antiqua, Palatino, serif;font-style:italic;font-weight:500;">Your opinion is <span style="border-bottom: 1px solid red;">very important</span> to us:</h3>
                    <p style="font-family:Palatino Linotype, Book Antiqua, Palatino, serif;font-size: 15px; margin-left: auto; margin-right: auto; text-align: justify;color: #666;line-height:1.5;margin-bottom:75px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel metus eu urna lobortis condimentum vel aenim. Pellentesque malesuada sapien id pellentesque suscipit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean porta tincidunt malesuada. Curabitur ac consectetur tellus. Etiam aliquet ante sed nibh lobortis maximus. In at egestas justo.</p>
                    <table style="width:100%;">
                        <th>
                        <td style="width:25%;"></td>
                        <td style="background-color:black;with:50%;text-align:center;padding:15px;"><a href="https://logico.com.ar/" style="margin-left: auto; margin-right: auto;text-decoration:none;color: white;text-align:center;font-family:Courier New, Courier, monospace;font-weight:600;letter-spacing:2px;background-color:black;padding:15px;">CALL TO ACTION</a></td>
                        <td style="width:25%;"></td>
                        </th>
                    </table>
                    <hr style="margin-top:10px;margin-top:75px;"/>
                    <p style="text-align:center;margin-bottom:15px;"><small style="text-align:center;font-family:Courier New, Courier, monospace;font-size:10px;color#666;">CC BY-SA 4.0 <a href="https://logico.com.ar/" style="color:#666;">Lógico Software</a> | Made with <span style="color:red;">&hearts;</span> in Argentina</small></p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('summernote/summernote.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote().on('summernote.change',function(){
                $('.preview').html($('#summernote').val());
            });
            @if(isset($email))
            $('#summernote').summernote("code",`{!! $email->content !!}`);
            @endif
            $('.popover').hide();

        });
        $('.btn-template-1').click(function(){
            $('#summernote').summernote("code",$('.template-1').html());
        });
        $('.btn-template-2').click(function(){
            $('#summernote').summernote("code",$('.template-2').html());
        });
        $('.btn-template-3').click(function(){
            $('#summernote').summernote("code",$('.template-3').html());
        });
        $('.btn-template-4').click(function(){
            $('#summernote').summernote("code",$('.template-4').html());
        });

    </script>
@endsection
