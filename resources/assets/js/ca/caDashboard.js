require('../bootstrap');
window.Vue = require('vue');
let dashboard =  require('./components/dashboard');
let upload =  require('./components/upload');
const app = new Vue({
    el: '#app',
    components: {
        dashboard,upload
    },
    methods: {

    }
});
