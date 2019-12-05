/*
* Meta tags add karne hai
* Google login ka add karna hai
* Popup to add on homescreen
* Dashboard add karna hai
*/
require('../bootstrap');
import VueRouter from 'vue-router';
window.Vue = require('vue');
window.Vue = require('vue');
Vue.use(VueRouter);
let script = null;
var global_loginStatus = false;
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
loadScript("https://apis.google.com/js/client:platform.js",function(){
    start();
    $('#signinButton, #googleLogin').click(function(){
        authCheck();
    });
});

document.getElementsByTagName( "head" )[0].appendChild( script );
let pageLoad = (onload = false) =>{
};
let Event = require('./components/Event');
const routes = [
    {path:'/',component:require('./components/Get'),name:'Get'},
    {path:'/BEL',redirect: './BEL%20Innovate%20to%20illuminate/competition'},
    {path:'/bel-innovate',redirect: './BEL%20Innovate%20to%20illuminate/competition'},
    {path:'/makerthon',redirect: 'https://m.techfest.org/Tata%20Makerthon%20Challenge/competition'},
    {path:'/hospitality',component:require('./components/Hospitality'),name:'Hospitality'},
    {path:'/media',component:require('./components/Media'),name:'Media'},
    {path:'/ideate',component:require('./components/Ideates'),name:'Ideate'},
    {path:'/exhibitions',component:require('./components/Exhibitions'),name:'Exhibitions'},
    {path:'/legal',component:require('./components/Legal'),name:'Legal'},
    {path:'/sponsors',component:require('./components/Sponsors'),name:'Sponsors'},
    {path:'/competitions',component:require('./components/Competitions'),name:'Competitions'},
    {path:'/technorion',redirect:'/competitions'},
    {path:'/:name/competition',component:require('./components/Competition'),name:'Competition'},
    {path:'/competitions/:name',redirect:'/:name/competition'},
    {path:'/lectures',component:require('./components/Lectures'),name:'Lectures'},
    {path:'/technoholix',component:require('./components/Technoholix'),name:'Technoholix'},
    {path:'/robowars/2018',component:Event,name:'Robowars'},
    {path:'/esports',component:Event,name:'Esports'},
    {path:'/ozone',component:Event,name:'Ozone'},
    {path:'/summit',component:Event,name:'Summit'},
    {path:'/twmun',component:Event,name:'TWMUN'},
    {path:'/workshops',component:require('./components/Workshops'),name:'Workshops'},
    {path:'/:name/workshop',component:require('./components/Workshop'),name:'Workshop'},
    {path:'/payment',component:require('./components/Payment'),name:'Payment'},
    {path:'/accommodation',component:require('./components/Accomodation'),name:'Accomodation'},
    {path:'/initiatives',component:require('./components/Initiatives'),name:'Initiatives'},
    {path:'/map',component:require('./components/Map'),name:'Map'},
    {path:'/about-techfest',component: require('./components/About'),name: 'About'},
    {path:'/about',redirect:'/about-techfest'},
    {path:'/contact-us',component:require('./components/Team'),name:'Team'},
    {path:'/certificate',component:require('./components/Certificate'),name:'Certificate'},
    {path:'/contact',redirect:'/contact-us'},
    {path:'/404',component: require('./components/Error')},
    {path:'*',redirect: '/404'}
];
const router = new VueRouter({
    mode: 'history',
    routes
});

const app = new Vue({
    el: '#app',
    data: function(){
        return {
            searchOpen: false,
            sideboardOpen: false,
            loginStatus: false,
            authCheck: authCheck,
            paymentLink: null
        }
    },
    methods: {
        changeRoute: function(e){
            this.searchOpen = false;
            this.sideboardOpen = false;
            this.Open = false;
            if(e.includes('techfest.org')) window.open(e);
            else router.push(e)
        },
        loadScript: function(url,callback){
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
        },
        authChecker: function(){
            authCheck();
        }
    },
    router,
    components: {
        'v-dashboard':require('./components/Dashboard'),
        'v-search':require('./components/Search'),
        'v-sideboard':require('./components/Sideboard')
    },
    created: function(){
        axios.post('/api/get-status')
            .then(r=>this.loginStatus = r.data);
    },
    watch: {
        loginStatus: function(e){
            global_loginStatus = e;
        }
    }
});
