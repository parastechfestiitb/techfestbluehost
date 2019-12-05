    <template>
    <main v-if="competition!==null">
        <div class="navigation play">
            <div class="title">{{competition.name}}</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>><span @click="$root.changeRoute('/workshops')">Workshops</span>><span>{{competition.name}}</span></div>
        </div>
        <div class="description" >
            <div class="content" v-html="competition.description.short_description">
            </div>
            <div class="d-flex  justify-content-between flex-wrap">
                <div v-if="competition.id===83|| competition.id===84" class="button-6 w-100">
                    <button class="w-100">Slot 1 Closed!</button>
                    <button class="w-100" @click="register">Register (Slot 2)</button>
                </div>
                <template v-else-if="competition.id===76 || competition.id===77 || competition.id===78">
                    <div class="dropdown w-100 mt-4">
                        <button class="w-100 register-team" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Register
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" @click="registerData(76)">Student</a>
                            <a class="dropdown-item" @click="registerData(77)">Professor</a>
                            <a class="dropdown-item" @click="registerData(78)">Professional</a>
                        </div>
                    </div>
                </template>
                <div v-else class="button-6 w-100">
                    <button class="w-100" v-if="competition.id===59 || competition.id===56  || competition.payment_amount===null || competition.payment_amount===''">Closed!</button>
                    <button class="w-100" v-else @click="register">Register</button>
                </div>
            </div>
        </div>
        <div class="problems-statements p-3 pt-1">
            <div v-for="p in competition.description.problem_statements" class="mb-2">
                <a :href="p.url" target="_blank" class="w-100">
                    <button class="w-100">Content Details</button>
                </a>
            </div>
        </div>
        <div class="navigation-group">
            <div class="nav-tab" v-for="(description,key) in competition.description.description" :class="'compi-'+key">
                <div class="name"  @click="compiActivate(key)" >{{key}}</div>
                <div class="description" v-if="activeCompi===key">
                    <div class="desc" v-html="description"></div>
                </div>
            </div>
        </div>
        <div class="register-modal" v-if="registerModal && competition!==null">
            <div class="close-btn-top" @click="registerModal=false">X</div>
            <div class="">
                <div class="workshop-information">
                    <div class="content-wrapper">
                        <div class="message-container">
                            <h3 class="message h2">Informations</h3>
                            <p class="message">
                                For registering in {{competition.name}}, select number of participants you want. On registering
                                each participant will recive one Team Id email. Please fill all the informations clearly as it
                                will be required in future.
                            </p>
                        </div>
                        <div class="members-count" v-if="competition.participants!==1">
                            <div class="left-wrapper w-100 text-left">
                                <div class="title text-lef">How many members are there in your team?</div>
                                <select name="gender" id="gender" class="w-100 d-block" v-model="participantCount">
                                    <option selected disabled value="0">Select number of members</option>
                                    <option v-for="v in competition.participants" :value="v">{{v}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="members-count" v-else>
                            Enter details below
                        </div>
                        <div v-for="(p,k) in participants" v-if="!valid(p)[0]" class="participant">
                            <div class="designation text-white-50">{{titleCase(participantNumber[k])}}</div>
                            <div class="name">{{p.name}}</div>
                        </div>
                    </div>
                </div>
                <div class="input-box overflow-auto" >
                    <template v-for="(participant,key) in participants">
                        <div v-if="key<participantCount">
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
                        </div>
                    </template>
                    <div class="input-group mb-5" v-if="participantCount!==0">
                        <button type="button" @click="submitFunction">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="register-modal" v-if="successModal && competition!==null">
            <div class="close-btn-top" @click="successModal=false">X</div>
            <div class="d-flex h-100 justify-content-between">
                <div class="d-flex m-auto bg-black p-5 align-self-center">
                    <div class="content-wrapper">
                        <div class="message-container">
                            <h3 class="message h2">Success</h3>
                            <p class="message">
                                You have been successfully registered for {{competition.name}}. <br>
                                Your <span class="text-warning">Team Id</span> is <span class="text-warning h4">{{competition.code}}-{{('000000'+success.id).slice(-6)}}</span><br>
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
    </main>
</template>

<script>
    export default {
        name: "Competition",
        data: function(){
            return{
                competition: null,
                activeCompi: -1,
                showReg: null,
                isRegistered: false,
                isLeader: false,
                team: [],
                myEmail: null,
                newTFID: '',
                newEmail: '',
                inviteLink: '',
                currentParticipant: 0,
                registerModal: false,
                participantCount: 0,
                successModal: false,
                participantNumber: ['leader','2nd','3rd','4th','5th','6th','7th'],
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

                zonalName: null
            }
        },
        methods:{
            titleCase: function(str){
                return str.replace(
                    /\w\S*/g,
                    function(txt) {
                        return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
                    }
                );
            },
            registerData: function(e){
                this.competition.id = e;
                if(e===76) this.competition.code = 'D1';
                else if(e===77) this.competition.code = 'D2';
                else if(e===78) this.competition.code = 'D3';
                this.register();
            },
            register: function(){
                this.registerModal = true;
            },valid: function(reg){
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
                    arr.push('Name is a required field');
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
                else if(f!==e) arr.push('Phone is not a comirmed field');
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
                axios.post('https://m.techfest.org/api/workshop/register', {
                    participant: this.participants,
                    count: this.participantCount,
                    event: this.competition.id
                }).then(r => {
                    console.log(r.data);
                    if (r.data.success) {
                        this.success = r.data;
                        this.registerModal = false;
                        this.successModal = true;

                        setTimeout(function(){
                            window.location.href = 'https://techfest.org/payment/direct/'+r.data.id;
                        },150);
                    }
                    else iziToast.error({message: r.data});
                });
            },
            compiActivate: function(e){
                if($('.compi-'+e).hasClass('active')) {
                    $('.nav-tab').css('height',50).removeClass('active');
                    this.activeCompi = -1;
                }
                else {
                    this.activeCompi = e;
                    $('.nav-tab').css('height',50).remove('active');
                    setTimeout(function(){
                        $('.compi-'+e).css('height',$('.desc').height()+100).addClass('active');
                    },10);
                }
            },
            prettyNumber: function(x){
                x=x.toString();
                let lastThree = x.substring(x.length-3);
                let otherNumbers = x.substring(0,x.length-3);
                if(otherNumbers !== '')
                    lastThree = ',' + lastThree;
                return  otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            }
        },
        created: function(){
            if(this.$route.params.name==='Summit') window.location.href="https://techfest.org/summit18";
            axios.post('/api/event/name',{
                name: this.$route.params.name
            }).then(r=>{
                let c = r.data;
                if(c.participants === 1) this.participantCount = 1;
                c.description = JSON.parse(c.description);
                this.competition = c;
            });

            var $_GET=[];
            window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(a,name,value){$_GET[name]=value;});
            let t = this;
            setTimeout(function(){
                if($_GET['join-team']) t.joinModal = 1;
                console.log($_GET['join-team']);

            },1000);
        },
        watch: {
            joinModal: function(){
                let t = this;
                if(t.joinModal===0) return false;
                if(this.$root.loginStatus !== 'Exists' && this.$root.loginStatus !== 'New'){
                    t.joinModal = 0;
                    window.auth2.grantOfflineAccess().then(response => {
                        axios.post(_routes['loginPost'],{code: response.code,_token:csrf['token'],url: _routes['currentUrl']})
                            .then((response)=>{
                                if(response.data==='success' || response.data==='Exists'){
                                    t.joinModal = 1;
                                }
                                else{
                                    window.location.href = window.location.href+'?join-team=true';
                                }
                            });
                    });
                }
            },
            $route: function(){
                this.updateRegister();
                axios.post('/api/event/name',{
                    name: this.$route.params.name
                }).then(r=>{
                    let c = r.data;
                    c.description = JSON.parse(c.description);
                    this.competition = c;
                });
                this.$on('loginUpdated',function(){
                    alert('yo');
                });
            }
        }
    }
</script>

<style scoped>
    #gender{
        padding: 5px;
        background: transparent;
        border: 0;
        border-bottom: 2px solid white;
        color: white;
    }
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
        margin:10px;
    }
    .close-btn-top{
        position: fixed;
        top: 1vw;
        right: 1vw;
        font-size: 2vw;
        cursor:pointer;
    }
    .workshop-information>.content-wrapper{
    }
    .help{
        position: fixed;
        bottom: 1vw;
        right: 2vw;
        font-size: 1.7vw;
    }
    .register-modal{
        position: absolute;
        top: 125px;
        height: calc(100% - 125px);
        left: 0;
        width: 100%;
        background-color: #000;
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
    .navigation{
        padding-left: 15px;
        margin-bottom: 10px;
        padding-bottom: 15px;
        left: 0;
        right: 0;
        height: 80px;
        position: fixed;
        top: 50px;
        -webkit-backface-visibility: hidden;
        border-bottom: 2px solid white;
        background: #000000;
        z-index: 2;
    }
    main{
        background: #000;
        color: #fff;
    }
    .navigation .title{
        font-size: 30px;
        width: 90vw;
        overflow: hidden;
        white-space: nowrap;
        -ms-text-overflow: ellipsis;
        text-overflow: ellipsis;
        text-align:left !important;
    }
    .hirarchy{
        font-size: 13px;
        width:90vw;
        white-space: nowrap;
        text-overflow:ellipsis;
        overflow: hidden;
    }
    .hirarchy span{
        margin: auto 0.5em;
    }
    .description{
        padding: 15px;
        text-align: justify;
        font-size: 15px;
    }
    .description .title{
        font-size: 1.5em;
    }
    .nav-tab{
        border-bottom: 2px solid white;
        padding: 15px 10px;
        position: relative;
        transition: all 1s;
        height:55px;
        overflow: hidden;
    }
    .nav-tab .name:after{
        content: "›";
        position: absolute;
        right: 10px;
        padding: 15px;
        top:0;
        transition: all 1s;
    }
    .nav-tab.active .name:after{
        transform: rotate(90deg);
    }
    .nav-tab:first-child{
        border-top: 2px solid white;
        margin-top:10px;
    }
    .nav-tab:last-child{
        margin-bottom: 10px;
    }
    .content{
        top: 80px;
        width: 100%;
        margin-top: 140px;
    }
    .no-wrap{
        white-space: nowrap;
    }
    .prize-money{
        color: lightgoldenrodyellow;
        font-size: 1.2em;
        margin-top: 10px;
    }
    .name{
        font-size:20px;
        line-height: 20px;
    }
    .desc{
        line-height: 22px;
        font-size: 15px;
    }
    .explore-more{
        font-size: 16px;
        line-height: 16px;
        margin-top: 10px;
    }
    .login-modal{
        position: fixed;
        top: 50px;
        left: 0;
        width: 100vw;
        height: 100%;
        background: #000000;
        z-index: 10;
        overflow:auto;
        padding-bottom: 80px;
    }
    .input-group {
        width: 100%;
        margin-top: 15px;
    }
    .input-group input, .input-group select, .input-group textarea {
        margin-left: 1rem;
        display: block;
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
        color: white;
        line-height: 20px;
        width: calc(100% - 40px);
    }
    option{
        color:black;
    }
    input:focus,input:active,
    select:focus,select:active,
    textarea:focus,textarea:active{
        outline: none;
    }
    .title-modal-login{
        padding-top: 20px;
        font-size: 2em;
    }
    textarea{
        height:30px;
    }
    .title {
        display: block;
        width: 100%;
        padding-left: 10px;
        font-family: 'Play',sans-serif;
    }
    .input-group button{
        width: 80vw;
        margin: auto;
    }
    .error{
        color:#ffce00;
        font-size:10px;
        padding-left:18px;
    }
    .manage-modal,.join-modal{
        position: fixed;
        top:50px;
        left:0;
        height: calc(100% - 50px);
        overflow: auto;
        width: 100vw;
        z-index: 9;
        background: #000000;
        padding: 1rem;
    }
    .instructions{
        border-bottom: 2px solid white;
        padding-bottom: 1rem;
        margin-bottom: 1rem;
    }
    .instructions .inst{
        font-size: 2em;
    }
    .team-member {
        margin-bottom: 10px;
        border-bottom: 2px solid rgba(255, 255, 255, 0.4);
        padding: 0 1rem 1rem;
    }
    .manage-modal input,  .join-modal input {
        background: transparent;
        border: none;
        border-bottom: 2px solid white;
        margin-bottom: 10px;
        width: 90%;
        color: white;
        margin-left: 10%;
    }
    .message{
        color: #ffe0ef;
    }
    .add-members{
        border-bottom: none !important;
        padding-bottom: 0 !important;
    }
    .footer-add-member{
        text-align:right;
    }
    .invite-link{
        margin-left: 0!important;
        font-size: 0.8em !important;
        padding: 0.3em !important;
        border: 2px solid white !important;
        text-overflow: ellipsis !important;
    }
    .fa-clipboard{
        font-size: 1.5em;
        padding-top: 0.2em;
    }
</style>