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

let profile = require('./components/profile');

const vue = new Vue({
    el: '#app',
    components: {
        profile
    },
    created: function(){
    },
    methods: {

    }
});
