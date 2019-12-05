<template>
    <main v-if="competition!==null">
        <div class="navigation play">
            <div class="title">{{competition.name}}</div>
            <div class="hirarchy"><span @click="$root.changeRoute('/')">Home</span>><span @click="$root.changeRoute('/competitions')">Competitions</span>><span>{{competition.name}}</span></div>
        </div>
        <div class="description" >
            <div class="content" v-html="competition.description.short_description">
            </div>
            <div class="d-flex  justify-content-between flex-wrap">
                <div class="prize-money mr-auto no-wrap">Prize Money : Rs. {{prettyNumber(competition.amount)}}</div>
                <div class="button-1" v-if="competition.id===63 || competition.id===38 || competition.id===35 ">
                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Registration Closed!
                    </button>
                </div>
                <div class="button-1" v-else-if="competition.id===64">
                    <button type="button" onclick="window.location.href='https://skillenza.com/challenge/yes-bank-datathon'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Register
                    </button>
                </div>
                <!--<div class="button-1" v-else-if="$root.loginStatus==='Not Logged In' && competition.zonal === 1">-->
                    <!--<button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                        <!--Register-->
                    <!--</button>-->
                    <!--<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">-->
                        <!--<a class="dropdown-item text-white" @click="loginZonal('Mumbai')">Mumbai</a>-->
                        <!--<a class="dropdown-item text-white" @click="loginZonal('Kolkata')">Kolkata</a>-->
                        <!--<a class="dropdown-item text-white" @click="loginZonal('Jaipur')">Jaipur</a>-->
                        <!--<a class="dropdown-item text-white" @click="loginZonal('Bhopal')">Bhopal</a>-->
                        <!--<a class="dropdown-item text-white" @click="loginZonal('Banglore')">Bengaluru</a>-->
                    <!--</div>-->
                    <!--<button type="join-team" id="joinTeam" @click="joinModal=1">Join Team</button>-->
                <!--</div>-->
                <div class="button-2" v-else-if="$root.loginStatus==='Not Logged In'">
                    <button @click="signIn">Register</button>
                    <button type="join-team" id="joinTeam" @click="joinModal=1">Join Team</button>
                </div>
                <!--<div class="button-3" v-else-if="!isRegistered && competition.zonal===1">-->
                    <!--<div class="dropdown">-->
                        <!--<button type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
                            <!--Register-->
                        <!--</button>-->
                        <!--<button type="join-team" id="joinTeam" @click="joinModal=1">Join Team</button>-->
                        <!--<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">-->
                            <!--<a class="dropdown-item text-white" @click="registerZonal('Mumbai')">Mumbai</a>-->
                            <!--<a class="dropdown-item text-white" @click="registerZonal('Kolkata')">Kolkata</a>-->
                            <!--<a class="dropdown-item text-white" @click="registerZonal('Jaipur')">Jaipur</a>-->
                            <!--<a class="dropdown-item text-white" @click="registerZonal('Bhopal')">Bhopal</a>-->
                            <!--<a class="dropdown-item text-white" @click="registerZonal('Balnglore')">Bengaluru</a>-->
                        <!--</div>-->
                    <!--</div>-->
                <!--</div>-->
                <div class="button-4 w-100" v-else-if="!isRegistered" >
                    <button @click="register">Register</button>
                    <button type="join-team" id="joinTeam" @click="joinModal=1">Join Team</button>
                </div>
                <div class="button-5 w-100" v-else-if="!isLeader" >
                    <button @click="registerModal = 1">See Team</button>
                    <button @click="deleteTeam">Unregister</button>
                </div>
                <div class="button-6 w-100" v-else>
                    <button @click="registerModal=1">Manage Team</button>
                    <button @click="deleteTeam" class="float-right">Delete Team</button>
                </div>
            </div>
        </div>
        <div class="navigation-group">
            <div class="nav-tab compi-problem-statements"  v-if="competition.description.problem_statements">
                <div class="name"  @click="compiActivate('problem-statements')">Problem Statement{{competition.description.problem_statements.length>1?'s':''}}</div>
                <div class="description" v-if="activeCompi==='problem-statements'">
                    <div class="desc mt-4">
                        <div v-for="p in competition.description.problem_statements" class="mb-2">
                            <a :href="p.url" target="_blank" class="w-100">
                                <button class="w-100">{{p.name}}</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-tab" v-for="(description,key) in competition.description.description" :class="'compi-'+key">
                <div class="name"  @click="compiActivate(key)" >{{key}}</div>
                <div class="description" v-if="activeCompi===key">
                    <div class="desc" v-html="description"></div>
                </div>
            </div>
        </div>
        <div class="manage-modal" v-if="registerModal===1">
            <div class="instructions"><span class="inst">Instruction</span>
                <div class="message">
                    <div class="message-1" v-if="isLeader!==1">
                        Ask your team leader to add more members to your team.
                    </div>
                    <div class="message-2" v-if="isLeader===1">
                        Share the below link with your teammates and ask them to join your team.
                        <div class="copy-invite w-100 d-flex justify-content-between" @click="copyContent">
                            <input type="text" v-bind:value="inviteLink" class="invite-link" id="invite-link" readonly>
                            <i class="far fa-clipboard"></i>
                        </div>
                    </div>
                </div>
                <div class="message" v-if="competition.participants - team.length > 0 && isLeader===1">
                    You can add more members to your team
                </div>
                <div class="message" v-else>No More participants can be added</div>
            </div>
            <div class="leader team-member" v-for="person in team" v-if="person.isLeader===true">
                <div class="message">Team Leader</div>
                <input class="email" type="email" :value="person.email" disabled="disabled"/>
                <input class="tf-id" type="email" :value="'TF'+('000000'+person.id).substr(-6)" disabled="disabled"/>
            </div>
            <div class="team-member" v-for="person in team" v-if="person.isLeader!==true">
                <div class="d-flex">
                    <div class="message w-100">Team Member</div>
                    <div class="remove-member text-danger" @click="removeMember(person)" v-if="isLeader">remove</div>
                </div>
                <input class="email" type="email" :value="person.email" disabled="disabled"/>
                <input class="tf-id" type="text" :value="'TF'+('000000'+person.id).substr(-6)" disabled="disabled"/>
            </div>
            <!--<div class="team-member add-members" v-if="isLeader===1&& competition.participants - team.length > 0" @keypress="addMemberKeyPress">
                <div class="message">Add Team Member</div>
                <input class="email" type="email" placeholder="Email" v-model="newEmail"/>
                <input class="tf-id" type="text" placeholder="Techfest ID" v-model="newTFID"/>
            </div>-->
            <div class="footer-add-member"  v-if="competition.participants - team.length > 0 && isLeader===1">
                <button @click="copyContent" v-if="competition.participants - team.length > 0">+ Add Member</button>
                <button @click="registerModal=0">Close</button>
            </div>
            <div class="footer-add-memeber" v-else>
                <button class="finished" @click="registerModal=0">Close</button>
            </div>
        </div>
        <div class="join-modal team-modal" v-if="joinModal===1 && !isRegistered">
            <div class="instructions"><span class="inst">Join team</span>
                <div class="message">
                    <div class="message-1">Enter the leader's email and team id of team you want to join.</div>
                </div>
            </div>
            <div class="team-member add-members">
                <div class="message">Add Team Member</div>
                <input class="email" type="email" placeholder="Leader's Email" v-model="teamJoin.email"/>
                <input class="tf-id" type="text" placeholder="Team Id" v-model="teamJoin.tfId"/>
            </div>
            <div class="footer-add-member">
                <button @click="teamModal">Join Team</button>
                <button @click="joinModal=0">Close</button>
            </div>
        </div>
        <div class="login-modal" v-if="(($root.loginStatus!=='Not Logged In') && ($root.loginStatus!=='Exists'))">
            <div class="title-modal-login text-center">Enter Details</div>
            <div class="input-group">
                <div class="title">Name</div>
                <input type="name" placeholder="Name" v-model="registerDetails.name" readonly>
                <div class="error error-name" v-for="x in errorRegisterDetails.name">{{x}}</div>
            </div>
            <div class="input-group">
                <div class="title">Email</div>
                <input type="email" placeholder="Email" v-model="registerDetails.email" readonly>
                <div class="error error-email" v-for="x in errorRegisterDetails.email">{{x}}</div>
            </div>
            <div class="input-group">
                <div class="title">Gender</div>
                <select name="gender" id="gender" v-model="registerDetails.gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="others">Other</option>
                </select>
                <div class="error error-gender" v-for="x in errorRegisterDetails.gender">{{x}}</div>
            </div>
            <div class="input-group">
                <div class="title">DOB</div>
                <input type="date" placeholder="DOB" name="dob" v-model="registerDetails.dob">
                <div class="error error-dob" v-for="x in errorRegisterDetails.dob">{{x}}</div>
            </div>
            <div class="input-group">
                <div class="title">College</div>
                <input type="text" placeholder="Full college name" name="College" v-model="registerDetails.college">
                <div class="error error-dob" v-for="x in errorRegisterDetails.college">{{x}}</div>
            </div>
            <div class="input-group">
                <div class="title">Phone No.</div>
                <input type="number" placeholder="Phone number with country code" name="phone" v-model="registerDetails.phone">
                <div class="error error-phone" v-for="x in errorRegisterDetails.phone">{{x}}</div>
            </div>
            <div class="input-group">
                <div class="title">Confirm No.</div>
                <input type="number" placeholder="Re-enter phone number" name="phone_confirmation" v-model="registerDetails.phone_confirmation">
            </div>
            <div class="input-group">
                <div class="title">Zip/Postal Code</div>
                <input type="number" placeholder="Zip/Postal code" name="pin" v-model="registerDetails.pin">
                <div class="error error-pin" v-for="x in errorRegisterDetails.pin">{{x}}</div>
            </div>
            <div class="input-group">
                <div class="title">Address</div>
                <textarea name="address" id="address" cols="5" rows="5" placeholder="Permanent Address" v-model="registerDetails.address"></textarea>
                <div class="error error-address" v-for="x in errorRegisterDetails.address">{{x}}</div>
            </div>
            <div class="input-group">
                <div class="title">Country</div>
                <input type="country" placeholder="Country" v-model="registerDetails.country">
                <div class="error error-email" v-for="x in errorRegisterDetails.country">{{x}}</div>
            </div>
            <div class="input-group">
                <button @click="loginSubmit">Submit</button>
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
                registerModal: 0,
                joinModal: 0,
                teamJoin:{
                    email:null,
                    tfId: null
                },
                registerDetails: {
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    dob: "",
                    address: "",
                    country: "",
                    college: "",
                    phone_confirmation: ""
                },
                errorRegisterDetails: {
                    name: [],
                    gender: [],
                    pin: [],
                    phone: [],
                    email: [],
                    dob: [],
                    address: [],
                    college: []
                },
                zonalName: null
            }
        },
        methods:{
            loginSubmit: function(){
                axios.post('/api/register/event',this.registerDetails)
                    .then((r)=>{
                        axios.post('/api/get-status')
                            .then(r=>{
                                this.$root.loginStatus = r.data;
                                this.updateRegister();
                            });
                    })
                    .catch((error)=>this.errorRegisterDetails = error.response.data.errors);
            },
            updateRegister: function(){
                axios.post('/api/get-status')
                    .then((r)=>{
                        this.$root.loginStatus = r.data;
                        console.log(r);
                        if(r.data==='Exists'){
                            axios.post('/api/register/check',{
                                event:this.$route.params.name
                            }).then(r=>{
                                this.isRegistered = r.data.isRegistered;
                                this.isLeader = r.data.isLeader;
                                this.manageTeam();
                            });
                        }
                        else if(r.data==='Not Logged In'){
                        }
                        else{
                            axios.post('/api/get-participant').then((r)=>{
                                let e = r.data;
                                let t = this;
                                $.each(e,function(k,v){
                                    t.registerDetails[k] = v;
                                });
                            })
                        }
                    });
            },
            signIn: function(){
                let t = this;
                window.auth2.grantOfflineAccess().then(response => {
                    axios.post(_routes['loginPost'],{code: response.code,_token:csrf['token'],url: _routes['currentUrl']})
                        .then((response)=>{
                            this.$root.loginStatus = response.data;
                            setTimeout(function(){
                                t.updateRegister();
                            },10)
                        });
                });
                return false;
            },
            manageTeam: function(){
                axios.post('/api/register/get-team',{event:this.$route.params.name})
                    .then(r=>{
                        this.team = r.data.team;
                        this.isLeader = r.data.isLeader;
                        this.myEmail = r.data.myEmail;
                        this.inviteLink = r.data.inviteLink;
                        this.newTFID = '';
                        this.newEmail = '';
                    });
            },
            addMemberKeyPress: function(e){
                if(e.keyCode===13) this.addMember();
            },
            removeMember: function(e){
                if(confirm("Are you sure you want to remove "+e.name+"?")){
                    axios.post('/api/register/remove',{
                        event: this.$route.params.name,
                        id: e.id
                    }).then(r=>{
                        if(r.data==="Success"){
                            iziToast.warning({
                                message: e.name + " has been removed from your team"
                            });
                            this.manageTeam();
                        }
                        else {
                            iziToast.error({
                                message: r.data
                            });
                        }
                    })
                } else{
                    iziToast.show({
                        message: "Cancled"
                    });
                }
            },
            addMember: function(){
                if(this.isLeader===1)
                    axios.post('/api/register/add-member',{event:this.$route.params.name,email:this.newEmail,tfID:this.newTFID})
                        .then(r=>{
                            if(r.data==="Success") {
                                this.manageTeam();
                                iziToast.success({
                                    message: "New member added successfully"
                                });
                            }
                            else {
                                iziToast.error({
                                    message: r.data
                                })
                            }
                        })
                else{
                    iziToast.error({
                        message: 'Sorry, you are not the leader, you can not add members'
                    })
                }
            },
            deleteTeam: function(){
                if(prompt("Type 'CONFIRM' to delete your team") === 'CONFIRM')
                    axios.post('/api/register/delete-team',{
                        event:this.$route.params.name
                    }).then(r=>{
                        if(r.data==="Success"){
                            iziToast.success({
                                message:"Team has been deleted successfully."
                            });
                            this.isRegistered = false;
                            this.isLeader = false;
                        }
                    });
                else
                    console.log('dont');
            },
            teamModal: function(){
                let t = this;
                axios.post('/api/event/join-team',{
                    email:  t.teamJoin.email,
                    team: t.teamJoin.tfId,
                    event: this.$route.params.name
                })
                    .then(r=>{
                        if(r.data!=='success'){
                            iziToast.error({
                                message: r.data
                            });
                        }
                        else{
                            iziToast.success({
                                message: 'Registered Successfully!'
                            });
                            setTimeout(function(){
                                window.location.reload();
                            })
                        }
                    })
                    .catch(e=>{
                        let err = '';
                        for(let i in e.response.data.errors){
                            err = i;
                            break;
                        }
                        iziToast.error({
                            message: e.response.data.errors[err]
                        })
                    })
            },
            registerZonal: function(e){
                let messages = {
                    'Success': "You have been successfully registered",
                    'Already Exists': "You have already registered"
                };
                axios.post('/api/register/leader',{
                    event: this.$route.params.name,
                    zonal: 'Mumbai'
                }).then(r=>{
                    if(r.data==="Success"||r.data==="Already Exists"){
                        iziToast.success({
                            message: messages[r.data]
                        });
                        this.isRegistered = true;
                        this.isLeader = true;
                        this.manageTeam();
                    }
                    else{
                        isiToast.error({message:r.data});
                    }
                })
            },
            loginZonal : function(e){
                let t = this;
                t.zonalName = e;
                window.auth2.grantOfflineAccess().then(response => {
                    axios.post(_routes['loginPost'],{code: response.code,_token:csrf['token'],url: _routes['currentUrl']})
                        .then((response)=>{
                            this.$root.loginStatus = response.data;
                            setTimeout(function(){
                                t.updateRegister();
                            },10);
                            console.log(response.data);
                            if(response.data==='success' || response.data==='exist'){
                                t.registerZonal(t.zonalName);
                            }
                        });
                });
                return false;
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
                let messages = {
                    'Success': "You have been successfully registered",
                    'Already Exists': "You have already registered"
                };
                axios.post('/api/register/leader',{
                    event: this.$route.params.name,
                }).then(r=>{
                    if(r.data==="Success"||r.data==="Already Exists"){
                        iziToast.success({
                            message: messages[r.data]
                        });
                        this.isRegistered = true;
                        this.isLeader = true;
                        this.manageTeam();
                    }
                    else{
                        isiToast.error({message:r.data});
                    }
                })
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
            this.updateRegister();
            axios.post('/api/event/name',{
                name: this.$route.params.name
            }).then(r=>{
                let c = r.data;
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
            registerModal: function(){
                this.manageTeam();
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
        margin-top: 25px;
    }
    .input-group input, .input-group select, .input-group textarea {
        margin-left: 1rem;
        display: inline-block;
        background: transparent;
        border: none;
        border-bottom: 1px solid white;
        color: white;
        line-height: 20px;
        width: 60vw;
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
        font-size: 2em;
    }
    textarea{
        height:30px;
    }
    .title {
        width: 30vw;
        display: inline-block;
        text-align: right;
        padding-right: 5px;
        font-family: 'Play',sans-serif;
    }
    .input-group button{
        width: 80vw;
        margin: auto;
    }
    .error{
        color:#ffce00;
        font-size:10px;
        padding-left:35vw;
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