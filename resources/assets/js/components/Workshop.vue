<template>
    <div class="main-container h-100 w-100">
        <main v-if="element!==null" :class="{blur:registerModal||successModal}" >
            <div class="tf-icon">
                <div class="logo"></div>
                <div class="text"></div>
            </div>
            <div class="left-container" :class="loginModal?'blur':''">
                <div class="back-button" @click="$root.routeChange('/workshops')">
                    <i class="fa fa-chevron-left"></i>
                </div>
                <div class="short-description" v-html="element.description.short_description"></div>
                <div class="prize-money">Workshop Dates: {{element.description.date}}</div>
                <div class="name-all play-font no-wrap">{{element.name}}</div>
                <div class="img" :style="{backgroundImage: 'url('+element.description.image+')'}"></div>
            </div>
            <div class="right-section" :class="loginModal?'blur':''" v-if="element!==null">
                <div class="fixed-section">
                    <div class="relative ">
                        <div class="sponsors-container d-flex" v-if="element.description.sponsors!=null">
                            <div v-for="sponsor in element.description.sponsors" class="sponsor">
                                <img v-if="element.id!==13" :src="sponsor" alt="sponsor">
                                <a v-else href="https://www.mouser.in/" rel="nofollow" target="_blank"><img :src="sponsor" alt="sponsor"></a>
                            </div>
                        </div>
                        <div class="register-container" v-if="isSignedIn!==null">
                            <template v-if="element.id===83 || element.id===84">
                                <buttton class="global-button register-team" style="width: 20vw;padding-left: 3.5vw;padding-right: 3.8vw;">Slot 1 Closed</buttton>
                                <buttton class="global-button register-team" @click="register" style="width: 20vw;padding-left: 3.5vw;padding-right: 3.8vw;">Register (Slot 2)</buttton>
                            </template>
                            <template v-else-if="element.id===76 || element.id===77 || element.id===78">
                                <div class="dropdown">
                                    <button class="global-button register-team" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Register
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" @click="registerData(76)">Student</a>
                                        <a class="dropdown-item" @click="registerData(77)">Professor</a>
                                        <a class="dropdown-item" @click="registerData(78)">Professional</a>
                                    </div>
                                </div>
                            </template>
                            <buttton v-else-if="element.id===59" class="global-button register-team">Registrations Closed</buttton>
                            <buttton v-else-if="element.id===56" class="global-button register-team">Registrations Closed</buttton>
                            <buttton v-else-if="element.payment_amount===null || element.payment_amount===''" class="global-button register-team">Registrations Closed</buttton>
                            <button v-else class="global-button register-team" @click="register">Register</button>
                        </div>
                        <div class="problem-statement">
                            <button v-for="(v,k) in element.description.problem_statements" class="global-button " @click="openPS(v.url)">Content Details</button>
                        </div>
                        <div class="nav-section d-flex flex-row play-font">
                            <div v-for="(val,key) in element.description.description" class="submenu" :id="'menu-'+key" @click="changeDescription(key)">{{key}}</div>
                        </div>
                    </div>
                </div>
                <div class="content-fixed">
                    <div class="content-wrapper" :style="{marginTop:mt+'px'}">
                        <div v-html="description" class="html-content-wrapper"></div>
                    </div>
                    <div class="hider-wrapper"></div>
                </div>
            </div>
        </main>
        <div class="register-modal" v-if="registerModal && element!==null">
            <div class="close-btn-top" @click="registerModal=false">X</div>
            <div class="d-flex h-100">
                <div class="workshop-information">
                    <div class="content-wrapper">
                        <div class="message-container">
                            <h3 class="message h2">Informations</h3>
                            <p class="message">
                                For registering in {{element.name}}, select number of participants you want. On registering
                                each participant will recive one Team Id email. Please fill all the informations clearly as it
                                will be required in future.
                            </p>
                        </div>
                        <div class="members-count" v-if="element.participants!==1">
                            <div class="left-wrapper w-100 text-left">
                                <div class="title text-lef">How many members are there in your team?</div>
                                <select name="number" id="gender" class="w-100 d-block" v-model="participantCount">
                                    <option selected disabled value="0">Select Number of members in your team</option>
                                    <option v-for="v in element.participants" :value="v">{{v}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="members-count" v-else>
                            Enter Details on the right side
                        </div>
                        <div v-for="(p,k) in participants" v-if="!valid(p)[0]" class="participant">
                            <div class="designation text-white-50">{{titleCase(participantNumber[k])}}</div>
                            <div class="name">{{p.name}}</div>
                        </div>

                    </div>
                </div>
                <div class="input-box w-50 overflow-auto" >
                    <template v-for="(participant,key) in participants">
                        <div v-if="key<participantCount">
                            <hr v-if="key!==0">
                            <div class="title-modal-login text-center">Enter {{titleCase(participantNumber[key])}}'s Details</div>
                            <div class="input-group">
                                <div class="title">Name</div>
                                <input type="name" placeholder="Name" v-model="participant.name">
                                <div class="error error-name" v-for="x in nameValidate(participant.name)">{{x}}</div>
                            </div>
                            <div class="input-group">
                                <div class="title">Email</div>
                                <input type="email" placeholder="Only Gmail Emails" v-model="participant.email">
                                <div class="error error-email" v-for="x in emailValidate(participant.email,participant.email_confirmation)">{{x}}</div>
                            </div>
                            <div class="input-group">
                                <div class="title">Confirm Email</div>
                                <input type="email" placeholder="Email" v-model="participant.email_confirmation">
                            </div>
                            <div class="input-group">
                                <div class="title">DOB</div>
                                <input type="date" placeholder="DOB" name="dob" v-model="participant.dob" max="2012-12-31" min="1800-01-01">
                                <div class="error error-dob" v-for="x in dateConfirm(participant.dob)">{{x}}</div>
                            </div>
                            <div class="input-group">
                                <div class="title">Gender</div>
                                <select type="gender" placeholder="Gender" name="dob" v-model="participant.gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                <div class="error error-dob" v-for="x in dateConfirm(participant.gender)">{{x}}</div>
                            </div>
                            <div class="input-group">
                                <div class="title">Phone No.</div>
                                <input type="number" placeholder="Enter Phone number " max="9999999999" min="1000000000" name="phone" v-model="participant.phone">
                                <div class="error error-phone" v-for="x in phoneConfirmation(participant.phone,participant.phone_confirmation)">{{x}}</div>
                            </div>
                            <div class="input-group">
                                <div class="title">Confirm No.</div>
                                <input type="number" placeholder="Re-enter phone number" name="phone_confirmation" v-model="participant.phone_confirmation">
                            </div>
                            <div class="input-group">
                                <div class="title">College</div>
                                <input type="text" placeholder="College Full Name" name="college" v-model="participant.college">
                                <div class="error error-college" v-for="x in requiredValidation(participant.college)">{{x}}</div>
                            </div>
                            <div class="input-group">
                                <div class="title">ZIP Code</div>
                                <input type="number" placeholder="ZIP/Postal code" name="pin" v-model="participant.pin">
                                <div class="error error-pin" v-for="x in requiredValidation(participant.pin)">{{x}}</div>
                            </div>
                            <div class="input-group">
                                <div class="title">Address</div>
                                <textarea name="address" id="address" cols="5" rows="5" placeholder="Permanent Address" v-model="participant.address"></textarea>
                                <div class="error error-address" v-for="x in requiredValidation(participant.address)">{{x}}</div>
                            </div>
                            <div class="input-group">
                                <div class="title">Country</div>
                                <input type="country" placeholder="Country" v-model="participant.country">
                                <div class="error error-email" v-for="x in requiredValidation(participant.country)">{{x}}</div>
                            </div>
                            <br><br>
                        </div>
                    </template>
                    <div class="input-group" v-if="participantCount!==0">
                        <button type="button" @click="submitFunction">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="register-modal" v-if="successModal && element!==null">
            <div class="close-btn-top" onclick="window.location.reload()">X</div>
            <div class="d-flex h-100 justify-content-between">
                <div class="d-flex m-auto bg-black p-5 align-self-center">
                    <div class="content-wrapper">
                        <div class="message-container">
                            <h3 class="message h2">Success</h3>
                            <p class="message">
                                You have been successfully registered for {{element.name}}. <br>
                                Your <span class="text-warning">Team Id</span> is <span class="text-warning h4">{{element.code}}-{{('000000'+success.id).slice(-6)}}</span><br>
                                <br>
                                All the members will also be reciving an email with the registration details.
                                <br>
                                You will be redirected to payment portal in 15 seconds. <br><a class="text-warning h5" target="_blank" :href="'https://techfest.org/payment/direct/'+success.id">Click here</a> to go to payment portal immediately
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <v-footer></v-footer>
    </div>
</template>

<script>
    export default {
        name: "Competition",
        components: {
            'v-footer':require('./Footer')
        },
        data: function(){
            return {
                addable: 0,
                description:null,
                element: null,
                currentParticipant: 0,
                registerModal: false,
                participantCount: 0,
                participantNumber: ['leader','second memeber','third member','fourth member','fifth member','sixth member','seventh member'],
                participants: [{
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                },{
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                },{
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                },{
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                },{
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                },{
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                },{
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                },{
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                }],
                registerDetails: {
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                },
                errorRegisterDetails: {
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                },
                loginModal: false,
                mt: 0,
                isSignedIn: false,
                successModal: false,
                success: null
            }
        },
        methods: {
            openPS: function(e){
                window.open(e);
            },
            titleCase: function(str){
                return str.replace(
                    /\w\S*/g,
                    function(txt) {
                        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                    }
                );
            },
            handleScroll: function(e){
                this.mt= -e.target.scrollingElement.scrollTop;
            },
            numberWithCommas: (x) => {

                x=x.toString();
                let lastThree = x.substring(x.length-3);
                let otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers !== '')
                    lastThree = ',' + lastThree;
                return  otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            },
            changeDescription: function(x){
                this.description = (this.element.description.description[x]);
                $('.submenu').removeClass('active');
                $('#menu-'+x).addClass('active');
            },
            addMemberKeyPress: function(e){
                if(e.keyCode===13) this.addMember();
            },
            updateMainImage: function(){
                let time = new Date();
                let hours = time.getHours() + time.getMinutes()/60 - 1;
                if(hours>12) hours = 24 - hours;
                $('main,.hider').css('backgroundPosition','center -'+hours*100+ 'vh');
            },
            loginSubmit: function(){
                axios.post('/api/register/event',this.registerDetails)
                    .then((r)=>{
                        this.retryThings();
                    })
                    .catch((error)=>this.errorRegisterDetails = error.response.data.errors);
            },
            registerData: function(e){
                this.element.id = e;
                if(e===76) this.element.code = 'D1';
                else if(e===77) this.element.code = 'D2';
                else if(e===78) this.element.code = 'D3';
                this.register();
            },
            copyContent: function(){
                $('#invite-link').select();
                try{
                    document.execCommand('copy');
                }
                catch (e) {
                    iziToast.error({
                        message: "Sorry, failed to copy, select the input box and manually copy the text"
                    });
                }
                iziToast.success({
                    message: "Link Copied, Share this link with your friends and ask them to join",
                    timeout: 8000
                })
            },
            register: function(){
                this.registerModal = true;
            },
            valid: function(reg){
                let trouble = false;
                let errors = {
                    name: [],
                    gender: [],
                    pin: [],
                    phone: [],
                    email: [],
                    country: [],
                    dob: [],
                    address: [],
                    college: []
                };
                if(! /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(reg.email)) {
                    errors.email = ["Not a valid google email"];
                    trouble = true;
                }
                if(reg.email_confirmation!==reg.email){
                    errors.email.push('Emails do not match');
                    trouble = true;
                }
                if(reg.phone.length===0 || !reg.phone){
                    errors.phone.push('Phone number is a required field');
                    trouble = true;
                }
                if(reg.phone_confirmation!==reg.phone){
                    errors.phone.push('Phone numbers do not match');
                    trouble = true;
                }
                if(reg.pin.length!==6){
                    errors.pin.push('Invalid Zip/Postal Code, enter a valid 6 digit code');
                    trouble = true;
                }
                if(reg.college==="" || !reg.college){
                    errors.college.push('College field is required');
                    trouble = true;
                }
                if(reg.address==="" || !reg.address){
                    errors.address.push('Address field is required');
                    trouble = true;
                }
                if(reg.country==="" || !reg.country){
                    errors.country.push('Country field is required');
                    trouble = true;
                }
                if(reg.dob==="" || !reg.dob){
                    errors.dob.push('Dob field is required');
                    trouble = true;
                }
                return [trouble,errors];
            },
            addParticipant: function(){
                let reg = this.registerDetails;
                let v = this.valid(reg);
                let trouble = v[0];
                this.errorRegisterDetails = v[1];
                if(trouble) return false;
                else {
                    this.participants.push(reg);
                    this.currentParticipant+=1;
                    this.registerDetails.name="";
                    this.registerDetails.email="";
                    this.registerDetails.email_confirmation="";
                    this.registerDetails.phone_confirmation="";
                    this.registerDetails.phone="";
                    this.registerDetails.dob="";
                }
            },
            submitParticipants: function(){
                let reg = this.registerDetails;
                let v = this.valid(reg);
                let trouble = v[0];
                this.errorRegisterDetails = v[1];
                if(trouble) return false;
                else {
                    this.participants.push(reg);
                    axios.post('https://techfest.org/admin/hello')
                        .then(r=>{
                            console.log(r.data);
                        })
                        .catch(e=>{
                            console.log(e.response);
                        })
                }
            },
            previousParticipant: function(){
                return 'yo';
            },
            nameValidate: function(e){
                let arr = [];
                if(e===null || e===""){
                    arr.push('Full name is a required field');
                }
                return arr;
            },
            emailValidate: function(e,f){
                let arr=[];
                if(e===null||e==="") arr.push('Email is a required field');
                else if(!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(e)) arr.push('Not a valid email format');
                else if(f!==e) arr.push('Email is not same as confirmation email');
                return arr;
            },
            phoneConfirmation: function(e,f){
                let arr = [];
                if(e===null || e==="") arr.push('Phone is a required field');
                else if(f!==e) arr.push('Phone is not same as confirmation phone');
                return arr;
            },
            dateConfirm: function(e){
                if(e===null || e==='') return ['Date is a required field'];
            },
            requiredValidation: function(e){
                if(e===null || e==='') return ['This field is required'];
                else return false;
            },
            submitFunction: function(e){
                let c = this.participantCount;
                let p = this.participants;
                for(let x = 0; x<c;x+=1) {
                    if(!this.valid(p[x]))
                        return false;
                }
                axios.post('https://techfest.org/api/workshop/register', {
                    participant: this.participants,
                    count: this.participantCount,
                    event: this.element.id
                }).then(r => {
                    console.log(r.data);
                    if (r.data.success) {
                        this.success = r.data;
                        this.registerModal = false;
                        this.successModal = true;
                        setTimeout(function(){
                            window.location.href = 'https://techfest.org/payment/direct/'+r.data.id;
                        },100);
                    }
                    else iziToast.error({message: r.data});
                });
            }
        },
        created: function(){
            axios.get('/api/check-login')
                .then((r)=>{
                    this.isSignedIn = r.data;
                    if(r.data)
                        axios.post('/api/register/check',{
                            event:this.$route.params.name
                        }).then(r=>{
                            this.isRegistered = r.data.isRegistered;
                            this.isLeader = r.data.isLeader;
                        })
                });
            axios.post('/api/event/name',{
                name: this.$route.params.name
            }).then((r)=>{
                let k = r.data;
                k.description = JSON.parse(k.description);
                this.element = k;
                if(k.participants === 1) this.participantCount = 1;
                window.addEventListener('scroll',this.handleScroll);
                $('.page-transition').animate({left:'-200vw'},500);
            });
            this.registerM0odal = true;
        },
        watch:{
            element: function(){
                setTimeout(()=>{
                    this.r = $('.content-fixed').height() - $('.content-wrapper').height();
                    this.mainHeight =  $('.content-wrapper').height()/$('.content-fixed').height() * 100;
                    this.w = (this.mainHeight - 100)*$(window).height() /100;
                    let temp = this.element.description.description;
                    for(let key in temp){
                        $('#menu-'+key).addClass('active');
                        this.description = temp[key];
                        break;
                    }

                },100);
            },
            description: function(){
                let k = this;
                setTimeout(function(){
                    k.r = $('.content-fixed').height() - $('.content-wrapper').height();
                    k.mainHeight =  -k.r + $(window).height();
                    $(document).scrollTop(0);
                },100);
            },
            $route: function(){
                axios.get('/api/check-login')
                    .then((r)=>{
                        this.isSignedIn = r.data;
                        if(r.data)
                            axios.post('/api/register/check',{
                                event:this.$route.params.name
                            }).then(r=>{
                                this.isRegistered = r.data.isRegistered;
                                this.isLeader = r.data.isLeader;
                            })
                    });
                axios.post('/api/event/name',{
                    name: this.$route.params.name
                }).then((r)=>{
                    let k = r.data;
                    k.description = JSON.parse(k.description);
                    this.element = k;
                    window.addEventListener('scroll',this.handleScroll);
                    $('.page-transition').animate({left:'-200vw'},500);
                });
                this.registerM0odal = true;
            },
            participantCount: function(){
                let def= {
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    email_confirmation:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                }, len= this.participants.length,fl= this.participantCount;
                if(fl>len){
                    for(let x=len;x<fl;x+=1){
                        this.participants[x]
                    }
                }
                if(fl<len){
                    for(let x = fl-1;x<len;x++){
                        delete this.participants.splice(x,1);
                    }
                }
            },
            currentParticipant: function(){
                this.registerDetails = this.participants[this.currentParticipant];
            }
        }
    }
</script>

<style scoped>
    .overflow-auto{
        overflow: auto;
    }
    .participant{
        border: 2px solid white;
        padding: 1vw;
        margin: 1vw auto;
    }
    .participant .designation {
        padding-right: 2vw;
    }
    .participant>*{
        display: inline-block;
    }
    .workshop-information{
        width: 50%;
    }
    .close-btn-top{
        position: fixed;
        top: 1vw;
        right: 1vw;
        font-size: 2vw;
        cursor:pointer;
    }
    .workshop-information>.content-wrapper{
        width:80%;
        padding-left:20%;
    }
    .help{
        position: fixed;
        bottom: 1vw;
        right: 2vw;
        font-size: 1.7vw;
    }
    .glide-in-help{
        width: 0;
        overflow: hidden;
        position: fixed;
        bottom: 1.5vw;
        right: 6vw;
        height: 3vw;
        font-size: 1.7vw;
        line-height: 3vw;
        white-space: nowrap;
        transition: all 1s;
        text-align: right;
    }
    .huv:hover .glide-in-help{
        width: 10em;
    }
    main {
        text-overflow: ellipsis;
        position: relative;
        height: 100vh;
    }
    main,.hider,.block,.right-section{
        color: #fff;
    }
    .content-fixed *{
        transition-timing-function: linear;
        -webkit-transition-duration: 30ms;
        -moz-transition-duration: 30ms;
        -ms-transition-duration: 30ms;
        -o-transition-duration: 30ms;
        transition-duration: 30ms;
    }
    .back-button{
        position: fixed;
        top: 29vh;
        left: -5vw;
    }
    .right-section {
        width: 45vw;
        height: 100%;
        margin-left: 50vw;
        padding-top: 40vh;
        position: relative;
    }
    .fixed-section {
        font-size: 1.35416667vw;
        position: fixed;
        bottom: 47vh;
        height: 50vh;
        left: 50vw;
        right: 0;
        z-index:3;
    }
    .submenu{
        font-family: 'Play',sans-serif;
    }
    .fixed-section button{
        height:3vw;
        width:13.333333vw;
        padding:0.2vw;
        font-size: 1.35416667vw !important;
        border-radius: 0;
    }
    .relative {
        position: relative;
        height: 100%;
    }
    .register-container{
        position: absolute;
        bottom: 16vh;
        padding-left: 3vw;
    }
    .delete-team{
        width: 100%;
        margin-left: 2.65vw;
    }
    .dropdown-menu{
        font-size: 1vw;
        width:12vw;
        background: #000000;
        font-weight: bold;
        border:2px solid white;
    }
    .dropdown-menu .dropdown-item{
        color: #ffffff !important;
    }
    .dropdown-menu .dropdown-item:hover,
    .dropdown-menu .dropdown-item:focus,
    .dropdown-menu .dropdown-item:active{
        color: #000000 !important;
        background: #fff;
    }
    button.register {
        border-radius: 0;
        font-family: 'play-font',sans-serif;
        margin-left: 3vw;
    }
    .fa-chevron-left{
        font-size: 6vw;
        margin-top: 8vw;
        margin-left: 8.2vw;
    }
    button{
        color:white;
        margin-left: 3vw;
        border: 2px solid white;
        background: transparent;
        -webkit-transition: color 300ms, background 300ms;
        -moz-transition: color 300ms, background 300ms;
        -ms-transition: color 300ms, background 300ms;
        -o-transition: color 300ms, background 300ms;
        transition: color 300ms, background 300ms;
    }
    .not-signed{
        position: absolute;
        bottom: 8vw;
    }
    button:hover{
        color:black;
        background:white;
    }
    .dropdown a{
        color:#000 !important;
        text-decoration: none !important;
    }
    .problem-statement {
        position: absolute;
        bottom: 8vh;
        padding-left: 3vw;
    }
    .problem-statement button {
        font-size: 1vw !important;
    }
    .nav-section {
        position: absolute;
        bottom: 2.1vh;
        left: 3vw;
    }
    .nav-section div {
        margin-right: 1.7vw;
        text-transform: uppercase;
        padding-left: 0.260416667vw;
        padding-right: 0.260416667vw;
        transition: border-bottom-color 1s;
        border-bottom: 0.1vw solid rgba(255, 255, 255, 0)
    }
    .nav-section div.active{
        border-bottom: 0.2vw solid rgb(255, 255, 255);
    }
    .content-fixed {
        font-size: 0.900000000033333vw;
        position: fixed;
        top:55.5vh;
        left:52.5vw;
        height: 39.3vh;
        width: 40vw; /*change content wrapper too*/
        overflow: auto;
    }
    .content-wrapper{
        height:auto;
        width:40vw;
        font-size: 1vw;
        margin-top:-1;
        padding-bottom:10vh;
    }
    .content p {
        margin-bottom: 0.9000000000vw;
    }
    .left-container {
        width: 50vw;
        height: 100vh;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 4;
    }
    .short-description {
        font-size: 0.900000000033333vw;
        margin-bottom: 0.9000000000333vw;
        width: 38.6vw;
        position: fixed;
        top: 78vh;
        left: 11.1vw;
    }
    .prize-money {
        font-size: 1.641667vw;
        position: fixed;
        bottom: calc(16.125vh + 3.64583333333vw);
        font-weight: bold;
        left: 11.1vw;
    }
    .content-wrapper p{
        margin-bottom: 1.0000000003vw !important;
    }
    .img {
        position: fixed;
        top: 31.5vh;
        margin: 0.39vw 0;
        left: 10.995vw;
        width: 38.6158vw;
        height: 36.8545vh;
        right: 50vw;
        overflow: hidden;
        background: no-repeat top center;
        background-size: auto 100%;
    }
    .hider-wrapper{
        width:50vw;
        position: fixed;
        left:52.5vw;
        background: linear-gradient(to top, rgba(0,0,0,1),rgba(0,0,0,0.9),rgba(0,0,0,0));
        bottom: 4.7vh;
        height: 10vh;
    }
    .register-modal{
        background: rgba(0,0,0,0.9);
        position: fixed;
        z-index:99;
        left:0;
        right:0;
        top:0;
        bottom: 0;
        padding: 5vw;
        background: rgba(0, 0, 0, 0.85);
        color:white;
    }
    .centered{
        margin:auto;
    }
    .modal-body{
        font-size: 0.90000000003vw;
        margin-bottom: 2vh;
    }
    .modal-body .instructions{
        color:rgba(255,255,255,0.7);
    }
    .input-group{
        width: 80%;
        overflow: scroll;
        margin-bottom: 1vh;
        min-height: 4.6vh;
    }
    .input-group .title{
        width: 8vw;
        text-align: right;
        display: inline-block;
        font-size: 1.2vw;
        line-height: 1.8vw;
        font-family: 'Play',sans-serif;
        margin-top: 0.5vh;
    }
    .input-group input,.input-group select,.input-group textarea{
        width: 70%;
        margin-left:2vw;
        display: inline-block;
        background:transparent;
        border:none;
        border-bottom: 2px solid white;
        color:white;
        line-height: 1.8vw;
    }
    .input-group textarea{
        height: 2vw !important;
        line-height: 1.5vw;
    }
    .input-group input[readonly="readonly"] {
        color:grey !important;
        border-bottom: none !important;
    }
    .input-group .error{
        width:80%;
        margin-left:10vw;
        font-size: 0.6vw;
        color: #ffce00;
    }
    .input-group > .error:first-child{
        margin-top:0.8vh;
    }
    .input-group option{
        color:white;
        background:black;
        line-height: 1.8vw;
        height:1.8vw;
        padding: 1vw;
    }
    input:focus,select:focus,textarea:focus{
        outline:none;
    }
    .title-modal-login{
        font-size:1.66666vw;
        margin-bottom: 4vh;
        font-family: 'Play',sans-serif;
    }
    .input-group button{
        margin-left: 10vw;
        border: 0.104166667vw solid white;
        background: transparent;
        color: white;
        line-height: 1.5vw;
        padding: 0.7vh 5vh;
        transition: all 0.2s;
        margin-top: 1.7vh;
    }
    .input-group button:hover{
        background: white;
        color: black;
    }
    .register-modal .modal-body{
        width: 45vw;
        font-size: 0.90000000003vw;
    }
    .register-modal .instructions .inst{
        margin-left: 12vw;
        width: 30vw;
        font-size: 1.66vw;
    }
    .register-modal .instructions div{
        color: #ffce00;
        margin-left: 12vw;
    }
    .team-member{
        height:3vw;
    }
    .team-member .message{
        width: 10vw;
        display: inline-block;
        text-align: right;
        margin-right:2vw;
    }
    .global-button{
        margin-left:0;
        padding: 1vw;
    }
    .team-member input{
        background: transparent;
        padding: 0.8333vw 0.8333vw 0.2vw;
        border: none;
        border-bottom: 0.05vw solid white;
        color:white;
        width:12vw;
        margin-right:1vw;
    }
    .team-member{
        white-space: nowrap;
        margin-right:-20vw;
        overflow: visible;
    }
    .team-member button{
        background:transparent;
        color:white;
        border-radius: 100%;
        border: 0.104166667vw solid white;
        line-height: 1.5vw;
        padding: 0.2vh 1vh;
        transition: all 0.2s;
        margin-top: 1.7vh;
    }
    .team-member input::placeholder{
        color: rgba(255, 255, 255, 0.77);
    }
    .footer-add-member button{
        background: transparent;
        border: 0.1vw solid white;
        line-height: 1.5vh;
        color:white;
        width: 12vw;
        transition: all 0.2s;
        margin-top: 1.7vh;
        height:2.5vw;
        margin-left: 1vw;
    }
    .footer-add-member button:hover{
        background:white;
        color:black;
    }
    .footer-add-member button:first-child{
        margin-left:12.2vw;
    }
    .copy-invite{
        margin: 1vh 0 !important;
    }
    .invite-link{
        width: 90%;
        background: transparent;
        color: inherit;
        margin-left: 0!important;
        font-size: 0.8em !important;
        padding: 0.3em !important;
        border: 2px solid white !important;
        text-overflow: ellipsis !important;
    }
    .fa-clipboard{
        font-size: 1.5em;
        padding-top: 0.2em;
        margin-left: 1vw;
    }
    .sponsors-container{
        position:absolute;
        bottom: 23vh;
        left: 3vw;
        width: 40vw;
    }
    .sponsor{
        width:10vw;
    }
    .sponsor img{
        width:100%;
    }
    .close-btn{
        min-width: unset;
        width: 4vw!important;
    }
    .pay-now{
        border-color: #ffce00 !important;
        color: #ffce00 !important;
    }
    .dropdown-menu.relative{
        position: relative;
        display: block;
    }
    .left-wrapper{
        width: 100%;
        overflow: scroll;
        margin-bottom: 1vh;
        min-height: 4.6vh;
    }
    .left-wrapper .title{
        width: 100%;
        display: block;
        font-size: 1.2vw;
        line-height: 1.8vw;
        font-family: 'Play',sans-serif;
        margin-top: 0.5vh;
    }
    .left-wrapper select{
        width: 100%;
        display: block;
        background:transparent;
        border:none;
        border-bottom: 2px solid white;
        color:white;
        line-height: 1.8vw;
        margin-bottom: 1vw;
        margin-top: 1vw;
    }
    .left-wrapper select option{
        background: black;
        color:white;
    }
    .name-all{
        position: absolute;
        bottom: 69vh;
        font-size: 2.6vw;
        left: 10.9vw;
    }
    .register-title{
        margin-left: 3vw;
    }
</style>

