require('../bootstrap');
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
}
function start() {
    gapi.load('auth2', function() {
        auth2 = gapi.auth2.init({
            client_id: '218886856483-4lnh6s9mvguid18098antfdltvosd7ln.apps.googleusercontent.com',
        });
    });
}
function authCheck(){
    auth2.grantOfflineAccess().then(response => {
        axios.post(app.routes.login,{code: response.code,_token:_csrf['csrf_token']})
            .then((response)=>{
                // window.location.reload();
                console.log(response.data);
            }, (error)=>{
                alert('Sorry, no new registrations ');
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

const app = new Vue({
    el: '#app',
    components: {
    },
    data: function(){
        return {
            routes : _routes,
            csrf: _csrf['csrf_token']
        }
    },
    created: function(){

    },
    methods: {
        
    }
});
$('[data-toggle="tooltip"]').tooltip();
