<template>
    <div id="fullpage">
        <div class="section active">
            <div class="slide" id="slide1">
                <div class="form-bg">
                    <h3 class="head-profile bg-bf p-2 text-center playfair">Registration Form</h3>
                    <form :action="routes['profileSubmit']" method="POST" id="caForm" class="form-group">
                        <span v-html="csrf"></span>

                        <div class="alert alert-danger mt-2" v-if="errors">
                            <div v-for="error in errors">
                                {{error}}
                            </div>
                        </div>

                        <fieldset>
                            <input id="first" type="text" placeholder=" " name="name" required :value="user.name" disabled style="color: #ccc;margin-left: 0;padding-left: 0;">
                            <div class="after dark"></div>
                        </fieldset>
                        <fieldset>
                            <input id="email" type="text" placeholder=" " name="email" required  :value="user.email" disabled style="color: #ccc;margin-left: 0;padding-left: 0;">
                            <div class="after dark"></div>
                        </fieldset>
                        <div class="row ml-0 mr-0">
                            <div class="col-6 pl-0">
                                <fieldset>
                                    <input id="dob" type="text" name="dob" required  class="input-text required-entry" placeholder="DD-MMM-YYYY" v-model="prevVals.dob" @change="updateDob()">
                                    <label for="dob">DOB</label>
                                    <div class="after"/>
                                </fieldset>
                            </div>
                            <div class="col-6 pr-0 gender">
                                <fieldset>
                                    <select name="gender" id="gender" required="required" v-model="prevVals.gender">
                                        <option value="" disabled selected>Select Gender</option>
                                        <option value="male" id="male">Male</option>
                                        <option value="female" id="female">Female</option>
                                        <option value="others" id="others">Others</option>
                                    </select>
                                    <div class="after"/>
                                </fieldset>
                            </div>
                        </div>
                        <fieldset>
                            <input id="address" type="text" name="address" placeholder=" " required v-model="prevVals.address" maxlength="255">
                            <label for="address">Address</label>
                            <div class="after"/>
                        </fieldset>
                        <fieldset>
                            <input id="pin" type="number" name="pin" max="999999" placeholder=" " maxlength="6" required @keyup="inputLength(6,'#pin')" v-on:change="inputLength(6,'#pin')" v-model="prevVals.pin" >
                            <label for="pin">Pincode</label>
                            <div class="after"/>
                        </fieldset>
                        <fieldset>
                            <input id="college" type="text" name="college" placeholder=" " required v-model="prevVals.college" maxlength="255">
                            <label for="college">College</label>
                            <div class="after"/>
                        </fieldset>
                        <fieldset>
                            <select name="semester" id="semester" required v-model="prevVals.sem">
                                <option disabled value="">Select Year</option>
                                <option value="1">1st Year</option>
                                <option value="2">2nd Year</option>
                                <option value="3">3rd Year</option>
                                <option value="4">4th Year</option>
                                <option value="other">Other</option>
                            </select>
                            <div class="after"/>
                        </fieldset>
                        <fieldset>
                            <input id="phone" type="number" name="phone" placeholder=" " required v-model="prevVals.phone" max="9999999999" min="1000000000" @keyup="inputLength(10,'#phone')" @change="inputLength(10,'#phone')">
                            <label for="phone">Mobile Number</label>
                            <div class="after"/>
                        </fieldset>
                        <div style="position:relative;" class="row ml-0 mr-0">
                            <div class="col-6">
                                <button class="text-white p-2 w-100 " type="button" style="background:#4267b2;position:absolute;border:none;bottom:0;left:0;padding-left:20px; padding-right:20px" onclick="fb_login();">
                                    Get Facebook User Id
                                </button>
                            </div>
                            <div class="col-6 pr-0">
                                <fieldset>
                                    <input type="text" id="fbid" name="facebookid" placeholder="Facebook User Id" required readonly v-model="prevVals.facebookid" class="pl-3" style="color: #ccc;" v-on:change="fbidUpdate()">
                                    <div class="after dark"/>
                                </fieldset>
                            </div>
                        </div>
                        <div class="row mt-1 mb-0 ml-0 mr-0 mt-4">
                            <div class="col-6 pl-0">
                                <a :href="routes.logout" id="logout" class="ml-auto mr-0">
                                    <button class="btn w-100 ml-auto mr-0 mt-2 " type="button" style="background:transparent;color:#bfbfbf; border:5px solid #bfbfbf">Home</button>
                                </a>
                            </div>
                            <div class="col-6 pr-0">
                                <a href="#profile/1" id="firstNextBtn" class="ml-auto mr-0 bg-secondary">
                                    <button class="btn w-100 ml-auto mr-0 mt-2" type="button" style="background:#bfbfbf;color:#1a1a1a;border:5px solid #bfbfbf">Next</button>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="slide " id="slide2">
                <div class="form-bg">
                    <h3 class="head-profile bg-bf p-2 text-center playfair">Terms and conditions</h3>
                    <ol>
                        <li> All the proofs submitted by the College Ambassador should be genuine to their fullest knowledge.</li>
                        <li>Techfest, IIT Bombay holds the right to retract the Ambassadorship from the student if the performance is not upto the mark.</li>
                        <li>The certification will be provided only if all the specified criteria are met.</li>
                        <li>All the selected College Ambassadors during their entire tenure would represent Techfest, IIT Bombay in their respective colleges.</li>
                    </ol>
                    <div>
                        <label class="check-box" >I accept all Terms and Conditions
                            <input type="checkbox" name="policy" id="policy" :checked="true">
                            <span class="checkmark"></span>
                        </label>

                    </div>
                    <div class="row ml-0 mr-0 mt-4 mb-2">
                        <div class="col-6">
                            <a href="#profile" id="middlePrevBtn" >
                                <button class="btn w-100 mt-2" type="button" style="background:transparent;color:#bfbfbf; border:5px solid #bfbfbf">Previous</button>
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#profile/2" id="middleNextBtn">
                                <button class="btn w-100 mt-2 ml-auto mr-0" type="button" style="background:#bfbfbf;color:#1a1a1a;border:5px solid #bfbfbf">Next</button>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="slide" id="slide3">
                <div class="form-bg">
                    <h3 class="head-profile text-center bg-bf p-2 playfair">Follow us to stay updated</h3>
                    <div class="row ml-0 mr-0 mt-4">
                        <div class="col-4">
                            <a href="https://www.facebook.com/iitbombaytechfest/" target="_black">
                                <img src="/img/ca/facebook.svg" alt="facebook-subscribe">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="https://twitter.com/Techfest_IITB" target="_black">
                                <img src="/img/ca/twitter.svg" alt="twitter-subscribe">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="https://www.youtube.com/user/techfestiitbombay" target="_black">
                                <img src="/img/ca/youtube.svg" alt="youtube-subscribe">
                            </a>
                        </div>
                    </div>
                    <div class="row ml-0 mr-0 mt-4 mb-4">
                        <div class="col-4">
                            <a href="https://www.linkedin.com/company/techfest/" target="_blank">
                                <img src="/img/ca/linkedin.svg" alt="linkedin-subscribe">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="https://www.instagram.com/techfest_iitbombay/" target="_black" >
                                <img src="/img/ca/instagram.svg" alt="facebook">
                            </a>
                        </div>
                        <div class="col-4">
                            <a href="https://www.quora.com/topic/Techfest-IIT-Bombay-1" target="_blank">
                                <img src="/img/ca/quora.svg" alt="facebook">
                            </a>
                        </div>
                    </div>

                    <div class="row ml-0 mr-0 mt-4 mb-4">
                        <div class="col-6">
                            <a href="#profile/1" id="lastprevbtn">
                                <button class="btn w-100 mt-2" type="button" style="background:transparent;color:#bfbfbf; border:5px solid #bfbfbf">Previous</button>
                            </a>
                        </div>
                        <div class="col-6">
                            <button type="submit" id="myButton " @click="submitform" class="btn w-100 ml-auto mt-2" style="background:#bfbfbf;color:#1a1a1a;border:5px solid #bfbfbf">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "profile",
        data: function(){
            return {
                errors: _errors,
                routes: _routes,
                csrf: _csrf,
                user: _user,
                prevVals: _vals,
                buttonClick: false
            }
        },
        created: function(){
            console.log(this.prevVals.sem);
            if(this.prevVals.sem){
                $('#sem-'.this.prevVals.sem).select();
            }
        },
        methods: {
            submitform : function() {
                if ($('#policy').is(':checked')) $("#caForm").submit();
                else alert('Please accept Terms and Conditions first');
            },
            inputLength: function(e,id){
                $(id).val($(id).val().substr(0,e));
                if(id==='#pin') this.prevVals.pin = $(id).val();
                else if(id==='#phone') this.prevVals.phone = $(id).val();
            },
            updateDob: function(){
                this.prevVals.dob = $('#dob').val();
            },
            fbidUpdate: function(){
                this.prevVals.facebookid = $('#fbid').val();
            }
        }
    }
</script>
<style scoped>
    input:placeholder{
        padding-left:20px;
    }
    .btn{
        font-weight:bold;
        border-radius:0;
        padding:12px auto;
    }
    body,html{
        background: linear-gradient(to right, #000, #58595b);
    }
    input::-webkit-datetime-edit{
        color: transparent;
    }
    ::-webkit-scrollbar{
        display: none !important;
    }
    form{
        width: 100%;
        padding-left:10px;
        padding-right:10px;
    }
    select{
        padding:10px;
    }
    input,select{
        display: block;
        width:100%;
        margin:5px 0;
        padding-top:20px;
        padding-bottom:2px;
    }
    .bg-light-btn{
        background:#fff;
    }
    .gender{
        padding-top:1px;
    }
    .s2{
        width:100vw;
    }
    input[type=number]::-webkit-inner-spin-button,
    input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        margin: 0;

    }
    #dob::placeholder{
        color:transparent !important;
    }
    #dob:focus::placeholder{
        color:white !important;
    }
    @media only screen and (max-width: 600px) {
        .form-bg{
            background: rgba(255, 255, 255, 0.07);;
            width: 400px;
            margin: auto;
        }
    }
    .bg-bf{
        padding-top:10px!important;
        background-color:#bfbfbf !important;
        padding-bottom:15px!important;
        color:black;
    }
    .form-bg{
        background: rgba(255, 255, 255, 0.07);
        max-width: 900px;
        width: 100%;
        height:90vh;
        margin: auto;
        padding: 5px;
        overflow: auto !important;
    }
    form{
        overflow: auto;
    }
    @media (min-width: 992px) {
        .form-bg{
            padding-left:114px;
            padding-right:114px;
            padding-top:60px;
            padding-bottom:60px;
        }
    }
    .form-bg::-webkit-scrollbar{
        display: none;
    }
    .head-profile{
        font-family: 'Playfair Display SC',serif;
    }
    .check-box {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        margin-left: 15px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    .check-box input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
    }
    .check-box:hover input ~ .checkmark {
        background-color: #ccc;
    }
    .check-box input:checked ~ .checkmark {
        background-color: rgba(255,255,255,0.07);
    }
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }
    .check-box input:checked ~ .checkmark:after {
        display: block;
    }
    .check-box .checkmark:after {
        left: 9px;
        top: 5px;
        width: 5px;
        height: 10px;
        border: solid white;
        border-width: 0 3px 3px 0;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
    }
    fieldset {
        position: relative;
        border: none;
    }
    label {
        position: absolute;
        top: 18px;
        color: #fff;
        transform-origin: left;
        transition: all 0.3s ease;

    }
    input:focus ~ label {
        color: #fff;
    }
    input{
        color: #fff;
    }
    input:focus ~ label,
    input:valid ~ label, input:not(:placeholder-shown) ~ label {
        top: 0;
        transform: scale(0.6, 0.6);
    }
    input {
        font-size: 18px;
        width: 100%;
        border: none;
        background: transparent;
    }

    input:focus {
        outline: none;
    }

    .after {
        width: 100%;
        height: 2px;
        background-size: 200% 100%;
        background: #fff linear-gradient(to right, #fff 50%, transparent 50%) 100% 0;
        transition: all 0.6s ease;
    }
    .after.dark{
        width:100%;
        height:2px;
        background-size:100%;
        background:grey;
    }

    input:focus ~ .after {
        background-position: 0 0;
    }
    select{
        background: transparent !important;
        font-family: 'Roboto',serif;
        border: 0;
        color: white;
        margin-left: 0;
        padding-left: 0;
    }    img{
             width:500px;
             max-width:100%;
         }
    select:focus {
        outline: 0;
    }
    option{
        background: rgb(58, 58, 59);
        margin-left: 0;
    }

    #semester{
        background: transparent !important;
        font-family: 'Roboto',serif;
        border: 0;
        color: white ;
        margin-left: 0;
    }
    #first{
        color: #ccc;
        margin-left: 0;
        padding-left: 0;
    }
    #email{
        color: #ccc;
        margin-left: 0;
        padding-left: 0;
    }
    img{
        cursor: pointer;
    }
    img:hover{
        transform: scale(0.9);
    }
    ol li{
        padding-top:20px;
    }

</style>
