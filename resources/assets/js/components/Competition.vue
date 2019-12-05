<template>
    <main v-if="element!==null" :style="{height:mainHeight+'px'}">
        <div class="tf-icon">
            <div class="logo"></div>
            <div class="text"></div>
        </div>
        <div class="left-container" :class="loginModal?'blur':''">
            <div class="back-button" @click="$root.routeChange('/competitions')">
                <i class="fa fa-chevron-left"></i>
            </div>
            <div class="short-description" v-html="element.description.short_description"></div>
            <div class="prize-money">Prizes Worth INR {{numberWithCommas(element.amount)}}/-</div>
            <div class="name play-font">{{element.name}}</div>
            <div class="img" :style="{backgroundImage: 'url('+element.description.image+')'}"></div>
        </div>
        <div class="right-section" :class="loginModal?'blur':''" v-if="element!==null">
            <div class="fixed-section">
                <div class="relative ">
                    <div class="sponsors-container d-flex" v-if="element.description.sponsors!=null">
                        <div v-for="sponsor in element.description.sponsors" class="sponsor">
                            <img v-if="element.id!==13 && element.id!==61" :src="sponsor" alt="sponsor">
                            <a v-else href="https://www.mouser.in/" rel="nofollow" target="_blank"><img :src="sponsor" alt="sponsor"></a>
                        </div>
                    </div>
                    <div class="register-container" v-if="element.id==63 || element.id===38 || element.id===35 ">
                        <button class="global-button register">Registration Closed!</button>
                    </div>
                    <div class="register-container" v-else-if="element.id==64">
                        <button class="global-button register" onclick="window.open('https://skillenza.com/challenge/yes-bank-datathon')">Register</button>
                    </div>
                    <div class="register-container" v-else-if="isSignedIn!==null">
                        <template v-if="element.registration">
                            <button v-if="isRegistered&&isLeader&&element.participants!==1" class="global-button register" @click="manageTeam">Manage Team</button>
                            <button v-if="isRegistered&&isLeader&&element.participants!==1" class="global-button register" @click="leaveAndJoinTeam">Join Another Team</button>
                            <button v-else-if="isRegistered&&element.participants!==1" class="global-button register" @click="manageTeam">See Team</button>
                            <button v-else-if="isRegistered" class="global-button register">Already Registered</button>
                            <button v-else class="global-button register" @click="register">Register</button>
                            <button v-if="!isRegistered" @click="joinTeam" class="global-button">Join A Team</button>
                            <button v-if="isRegistered&&isLeader&&element.participants !==1" class="global-button delete-team" @click="deleteTeam">Delete Team</button>
                            <button v-else-if="isRegistered" class="global-button delete-team" @click="deleteTeam">Unregister</button>
                        </template>
                        <template v-else>
                            <button v-if="isRegistered"  class="global-button register"@click="manageTeam" >Show Members</button>
                            <button v-else class="global-button register disabled">Registrations Closed</button>
                        </template>
                    </div>
                    <div class="problem-statement">
                        <button v-for="(v,k) in element.description.problem_statements" class="global-button " @click="openPS(v.url)">{{v.name}}</button>
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
        <div class="register-modal d-flex justify-content-center" v-if="registerModal">
            <div class="centered">
                <div class="modal-body">
                    <div class="instructions" v-if="isLeader===1"><span class="inst">Instruction</span>
                        <div class="message">Hi, you have been successfully registered for {{element.name}}, and you are the leader. Share the below link with your teammates and ask them to join your team.</div>
                        <div class="message-2" v-if="isLeader===1">
                            <div class="copy-invite w-100 d-flex justify-content-between" @click="copyContent">
                                <input type="text" v-bind:value="inviteLink" class="invite-link" id="invite-link" readonly>
                                <i class="fa fa-copy"></i>
                            </div>
                        </div>
                        <div class="message">Your Team Id is : {{element.code}}-{{('000000'+team_id).slice(-6)}}</div>
                        <div class="message" v-if="element.participants - team.length > 0">Maximum number of participants in a team: {{element.participants}}</div>
                        <div class="message" v-else>No More participants can be added</div>
                    </div>
                    <div class="instructions" v-else><span class="inst">Instruction</span>
                        <div class="message" v-if="!element.registration">Deadlines for registrations are over, you can no longer modify your teams.</div>
                        <div class="message" v-else>Hi, you have been successfully registered for {{element.name}}. You can ask your team leader to add more members.</div>
                        <div class="message">Your Team Id is : {{element.code}}-{{('000000'+team_id).slice(-6)}}</div>
                    </div>
                    <div class="leader team-member" v-for="person in team" v-if="person.isLeader===true">
                        <div class="message">Team Leader</div>
                        <input class="email" type="email" :value="person.email" disabled="disabled"/>
                        <input class="tf-id" type="text" :value="'TF'+('000000'+person.id).substr(-6)" disabled="disabled"/>
                    </div>
                    <div class="team-member" v-for="person in team" v-if="person.isLeader!==true">
                        <div class="message">Team Member</div>
                        <input class="email" type="email" :value="person.email" disabled="disabled"/>
                        <input class="tf-id" type="text" :value="'TF'+('000000'+person.id).substr(-6)" disabled="disabled"/>
                        <button class="remove-member" @click="removeMember(person)" v-if="isLeader===1">X</button>
                    </div>
                    <!--<div class="team-member add-members" v-if="isLeader===1&& element.participants - team.length > 0" @keypress="addMemberKeyPress">
                        <div class="message">Add Member</div>
                        <input class="email" type="email" placeholder="Email" v-model="newEmail"/>
                        <input class="tf-id" type="text" placeholder="Techfest ID" v-model="newTFID"/>
                    </div>-->
                    <br>
                    <div class="footer-add-member">
                        <button @click="copyContent" v-if="element.participants - team.length > 0 && isLeader===1">+ Add Member</button>
                        <button @click="registerModal=0" v-if="element.participants - team.length > 0">Close</button>
                        <button class="finished" @click="registerModal=0" v-if="element.participants - team.length <= 0">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="join-modal d-flex justify-content-center" v-if="joinModal">
            <div class="centered">
                <div class="modal-body">
                    <div class="title-modal-login text-center">Enter Details</div>
                    <div class="input-group">
                        <div class="title">Leader's Email:</div>
                        <input type="email" placeholder="Enter Email" name="email" v-model="joinTeamDetails.email">
                        <div class="error error-join-email" v-for="x in errorJoinTeamDetails.email">{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">Team Id</div>
                        <input type="text" placeholder="Team Id" name="teamid" v-model="joinTeamDetails.team">
                        <div class="error error-team-id" v-for="x in errorJoinTeamDetails.team">{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="d-flex justify-content-between w-100">
                            <button @click="joinModal = 0" class="ml-0">Close</button>
                            <button @click="joinTeamSubmit()" class="ml-2">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-modal d-flex justify-content-center" v-if="loginModal">
            <div class="centered">
                <div class="modal-body">
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
                        <input type="date" placeholder="DOB" name="dob" v-model="registerDetails.dob" max="2012-12-31" min="1800-01-01">
                        <div class="error error-dob" v-for="x in errorRegisterDetails.dob">{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">Phone No.</div>
                        <input type="number" placeholder="Enter Phone number " max="9999999999" min="1000000000" name="phone" v-model="registerDetails.phone">
                        <div class="error error-phone" v-for="x in errorRegisterDetails.phone">{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">Confirm No.</div>
                        <input type="number" placeholder="Re-enter phone number" name="phone_confirmation" v-model="registerDetails.phone_confirmation">
                    </div>
                    <div class="input-group">
                        <div class="title">College</div>
                        <input type="text" placeholder="College Full Name" name="college" v-model="registerDetails.college">
                        <div class="error error-college" v-for="x in errorRegisterDetails.college">{{x}}</div>
                    </div>
                    <div class="input-group">
                        <div class="title">ZIP Code</div>
                        <input type="number" placeholder="ZIP/Postal code" name="pin" v-model="registerDetails.pin">
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
            </div>
        </div>
        <div class="help huv" onclick="window.open('https://ps.techfest.org/registration.pdf')">
            <i class="fa fa-info-circle fa-2x blinking huv"></i>
            <div class="glide-in-help huv">How to Register</div>
        </div>
    </main>
</template>

<script>
    export default {
        name: "Competition",
        data: function(){
            return {
                element: null,
                mainHeight: 100,
                w: 0,
                mt:0,
                r:1,
                zonal_select: null,
                description:null,
                windowSize: window.innerHeight,
                addable: 0,
                team: [],
                isSignedIn:null,
                registerModal: false,
                loginModal:false,
                joinModal: false,
                registerDetails: {
                    name: "",
                    gender: "",
                    pin: "",
                    phone:"",
                    email:"",
                    country:"",
                    dob: "",
                    address: "",
                    college: "",
                    phone_confirmation: ""
                },
                errorRegisterDetails: {
                    name: [],
                    gender: [],
                    pin: [],
                    phone: [],
                    email: [],
                    country: [],
                    dob: [],
                    address: [],
                    college: []
                },
                joinTeamDetails:{
                    email:"",
                    team:""
                },
                errorJoinTeamDetails:{
                    email:"",
                    team:""
                },
                inviteLink: '',
                isRegistered: false,
                isLeader: false,
                myEmail: null,
                newEmail: '',
                newTFID: '',
                team_id: null
            }
        },
        methods: {
            openPS: function(e){
                window.open(e);
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
            retryThings: function(){
                this.loginModal  = false;
                this.registerModal = false;
                axios.get('/api/check-login')
                    .then((r)=>{
                        this.isSignedIn = r.data;
                        axios.post('/api/get-participant').then((r)=>{
                            let e = r.data;
                            let t = this;
                            $.each(e,function(k,v){
                                t.registerDetails[k] = v;
                            });
                        });
                        axios.post('/api/register/check',{
                            event:this.$route.params.name
                        }).then(r=>{
                            this.isRegistered = r.data.isRegistered;
                            if(this.element.registration) this.isLeader = r.data.isLeader;
                            else this.isLeader=false;
                            this.team_id = r.data.team_id;
                        });
                        if(this.element.zonal===1)
                            this.registerZonal(this.zonal_select);
                        else this.register();
                    });

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
                        message: "Cancelled"
                    });
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
                            else{
                                iziToast.error({
                                    message:r.data
                                });
                            }
                        });
                else
                    console.log('dont');
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
            },

            leaveAndJoinTeam: function(){
                if(this.deleteTeam()==='deleted')
                    this.joinTeam();
            },
            manageTeam: function(){
                console.log('yo');
                axios.post('/api/register/get-team',{event:this.$route.params.name})
                    .then(r=>{
                        this.team = r.data.team;
                        if(this.element.registration) this.isLeader = r.data.isLeader;
                        else this.isLeader = false;
                        this.registerModal = true;
                        this.myEmail = r.data.myEmail;
                        this.newTFID = '';
                        this.newEmail = '';
                        this.inviteLink = r.data.inviteLink;
                        this.team_id = r.data.team_id;
                    });
            },
            register: function(){
                let messages = {
                    'Success': "You have been successfully registered",
                    'Already Exists': "You have already registered"
                };
                if(!this.isSignedIn){
                    window.auth2.grantOfflineAccess().then(response => {
                        axios.post(_routes['loginPost'],{code: response.code,_token:csrf['token'],url: _routes['currentUrl']})
                            .then((response)=>{
                                if(response.data === 'new' || response.data === "empty")
                                    this.loginModal = true;
                                else if(response.data === 'exist')
                                    this.retryThings();
                            });
                    });
                    return false;
                }
                else{
                    axios.post('/api/get-status').then(r=>{
                        if(r.data==="Exists"){
                            axios.post('/api/register/leader',{
                                event: this.$route.params.name
                            })
                                .then(r=>{
                                    if(r.data==="Success"|| r.data==="Already Exists") {
                                        iziToast.success({
                                            message: messages[r.data]
                                        });
                                        this.isRegistered = true;
                                        if(this.element.registration) this.isLeader = true;
                                        else this.isLeader = false;
                                        if(this.element.participants>1) this.manageTeam();
                                    }
                                    else{
                                        iziToast.error({
                                            message: r.data
                                        });
                                    }
                                })
                                .catch(e=>console.log(e.response));
                        }
                        else if(r.data==="Not Logged In"){
                            window.location.reload();
                        }
                        else{
                            this.loginModal = true;
                        }
                    })
                }
            },
            registerZonal: function(e){
                let messages = {
                    'Success': "You have been successfully registered",
                    'Already Exists': "You have already registered"
                };
                this.zonal_select = e;
                if(!this.isSignedIn){
                    window.auth2.grantOfflineAccess().then(response => {
                        axios.post(_routes['loginPost'],{code: response.code,_token:csrf['token'],url: _routes['currentUrl']})
                            .then((response)=>{
                                if(response.data === 'new' || response.data === "empty")
                                    this.loginModal = true;
                                else if(response.data === 'exist')
                                    this.retryThings();
                            });
                    });
                    return false;
                }
                else{
                    axios.post('/api/get-status').then(r=>{
                        if(r.data==="Exists"){
                            axios.post('/api/register/leader',{
                                event: this.$route.params.name,
                                zonal: 'Mumbai'
                            })
                                .then(r=>{
                                    if(r.data==="Success"|| r.data==="Already Exists") {
                                        iziToast.success({
                                            message: messages[r.data]
                                        });
                                        this.isRegistered = true;
                                        if(this.element.registration) this.isLeader = true;
                                        else this.isLeader = false;
                                        if(this.element.participants>1) this.manageTeam();
                                    }
                                    else{
                                        iziToast.error({
                                            message: r.data
                                        });
                                    }
                                })
                                .catch(e=>console.log(e.response));
                        }
                        else if(r.data==="Not Logged In"){
                            window.location.reload();
                        }
                        else{
                            this.loginModal = true;
                        }
                    })
                }
            },
            joinTeam:function(){
                let p = this;
                axios.get('/api/check-login')
                    .then(r=>{
                        if(r.data===true)
                            this.joinModal = true;
                        else {
                            window.auth2.grantOfflineAccess().then(response => {
                                axios.post(_routes['loginPost'],{code: response.code,_token:csrf['token'],url: _routes['currentUrl']})
                                    .then((response)=>{
                                        if(response.data === 'new' || response.data === "empty"){
                                            this.loginModal = true;
                                            this.toggleJoinTeam = true;
                                        }
                                        else if(response.data === 'exist'){
                                            p.joinTeam();
                                        }

                                    });
                            });
                        }
                    });
            },
            joinTeamSubmit:function(){
                let t = this;
                axios.post('/api/event/join-team',{
                    'email': t.joinTeamDetails.email,
                    'team': t.joinTeamDetails.team,
                    'event': t.$route.params.name
                }).then(r=>{
                    if(r.data==='success') {
                        window.location.reload();
                    }
                    else {
                        iziToast.error({
                            message: r.data
                        });
                    }
                }).catch(e=>{
                    t.errorJoinTeamDetails = e.response.data.errors;
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
                            if(this.element.registration) this.isLeader = true;
                            else this.isLeader = false;
                        })
                });
            axios.post('/api/event/name',{
                name: this.$route.params.name
            }).then((r)=>{
                let k = r.data;
                k.description = JSON.parse(k.description);
                k.registration = new Date(k.registration) - new Date() > 0;
                this.element = k;
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
                    };

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
            loginModal: function(){
                axios.post('/api/get-participant').then((r)=>{
                    let e = r.data;
                    let t = this;
                    $.each(e,function(k,v){
                        t.registerDetails[k] = v;
                    });
                })
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
                                if(this.element.registration) this.isLeader = true;
                                else this.isLeader = false;
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
            }
        }
    }
</script>

<style scoped>
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
        height: auto;
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
        top:14vh;
        left:2vw;
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
        bottom: 50vh;
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
        bottom: 15vh;
        padding-left:3vw;
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
    .global-button{
        margin-left:0;
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
    }
    .fa-chevron-left{
        font-size: 6vw;
        margin-top: 8vw;
        margin-left: 8.2vw;
    }
    button{
        color:white;
        border: 2px solid white;
        background: transparent;
        -webkit-transition: color 300ms, background 300ms;
        -moz-transition: color 300ms, background 300ms;
        -ms-transition: color 300ms, background 300ms;
        -o-transition: color 300ms, background 300ms;
        transition: color 300ms, background 300ms;
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
        padding-left:3vw;
        font-size: 0.9vw;
    }
    .problem-statement button {
        font-size: 0.85vw !important;
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
        top:50vh;
        left:52.5vw;
        height: 46.3vh;
        width: 40vw; /*change content wrapper too*/
        overflow: hidden;
    }
    .content-wrapper{
        height:auto;
        width:40vw;
        font-size: 1vw;
        margin-top:-1;
        padding-bottom:10vh;
    }
    .content-wrapper .html-content-wrapper{
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
        width: 28vw;
        position: fixed;
        top: 15vh;
        left: 19.1vw;
    }
    .prize-money {
        font-size: 1.04166666667vw;
        position: fixed;
        bottom: calc(49.125vh + 3.64583333333vw);
        font-weight: bold;
        left: 19.1vw;
    }
    .content-wrapper p{
        margin-bottom: 1.0000000003vw !important;
    }
    .name {
        position: absolute;
        bottom:47.5625vh;
        left: 19.1vw;
        font-size: 2.08333vw;
    }
    .img {
        position: fixed;
        top: 55.5vh;
        margin: 0.39vw 0;
        left: 10.995vw;;
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
        bottom: 3.7vh;
        height: 10vh;
    }
    .register-modal,.login-modal,.join-modal{
        background: rgba(0,0,0,0.7);
        position: fixed;
        z-index:99;
        left:0;
        right:0;
        top:0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.85);
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
        width: 30vw;
        overflow: hidden;
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
        width: 20vw;
        margin-left:2vw;
        display: inline-block;
        background:transparent;
        border:none;
        border-bottom: 0.0520833333vw solid white;
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
        width:30vw;
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
    .register-modal div:first-child{
        margin-top: 2vw ;
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
    .footer-add-member button.finished{
        margin-left:25.4vw;
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
        height: 10vh;
        margin-left: 1vw;
    }
    .sponsor img{
        max-height: 100%;
        max-width: 100%;
    }
    .global-button{
        margin-right: 1vw;
    }
    .global-button.disabled{
        opacity: 0.5;
        cursor: not-allowed !important;
        font-size: 0.7em !important;
    }
</style>

