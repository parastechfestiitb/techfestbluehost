require('./bootstrap');

window.Vue = require('vue');


let script;
function loadScript( url, callback ){
    script = document.createElement("script");
    script.type = "text/javascript";
    if(script.readyState) {
        script.onreadystatechange = function() {
            if ( script.readyState === "loaded" || script.readyState === "complete" ) {
                script.onreadystatechange = null;
                callback();
            }
        };
    } else {
        script.onload = function() {
            callback();
        };
    }
    script.src = url;
    document.getElementsByTagName( "head" )[0].appendChild( script );
}
function start() {
    gapi.load('auth2', function() {
        window.auth2 = gapi.auth2.init({
            client_id: '412974755773-i5amaa5ioscg47775o45tfkk835l1n88.apps.googleusercontent.com',
        });
    });
}
function authCheck(){
    window.auth2.grantOfflineAccess().then(response => {
        axios.post(_routes['loginPost'],{code: response.code,_token:csrf['token'],url: _routes['currentUrl']})
            .then((response)=>{
                if(response.data === 'new' || response.data === "empty"){
                    window.location.href  = _routes['registerUrlGet'];
                }
                else if(response.data === 'exist') window.location.reload();
                else {
                    console.log(response.data);
                }
            });
    });
}
require('./templates/hamburger');
let w = window;

const app = new Vue({
    el: '#app',
    data: {
        loginModal: false,
        showLogin: false,
        registerDetails: {
            name: "",
            gender: "",
            pin: "",
            phone:"",
            email:"",
            dob: "",
            address: "",
            college: "",
            country: "",
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
            college: [],
            country: []
        },
        isSignedIn: false
    },
    methods:{

        loginSubmit: function(){
            axios.post('/api/register/event',this.registerDetails)
                .then((r)=>{
                    console.log(r.data);
                    w.location.reload();
                })
                .catch((error)=>{
                    console.log(error);
                    this.errorRegisterDetails = error.response.data.errors;
                });
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
                        this.isLeader = r.data.isLeader;
                    });
                    this.register();
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
                            if(response.data === 'new' || response.data === "empty") {
                                this.loginModal = true;
                                this.showLogin = false;
                            }
                            else if(response.data === 'exist')
                                window.location.reload();
                        });
                });
                return false;
            }
            else{
                axios.post('/api/get-status').then(r=>{
                    if(r.data==="Exists"){
                        console.log('exists');
                    }
                    else if(r.data==="Not Logged In"){
                        window.location.reload();
                    }
                    else{
                        this.loginModal = true;
                    }
                })
            }
        }


    },
    created: function(){
        let t = this;
        loadScript("https://apis.google.com/js/client:platform.js",function(){
            start();
            axios.post('/api/get-status')
                .then(r=>{
                    console.log(r.data);
                    if(r.data==='Exists') {
                        t.isSignedIn = true;
                        t.showLogin = false;
                        window.location.href='/';
                    }
                    else if(r.data==='Not Logged In') {
                        t.isSignedIn = false;
                        t.showLogin = true;
                    }
                    else{
                        t.loginModal = true;

                    }
                })
        });
    },
    watch: {
        loginModal: function() {
            axios.post('/api/get-participant').then((r) => {
                let e = r.data;
                let t = this;
                $.each(e, function (k, v) {
                    t.registerDetails[k] = v;
                });
            })
        }
    }
});