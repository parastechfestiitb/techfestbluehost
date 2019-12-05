require('./bootstrap');

window.Vue = require('vue');

let sidenav =  require('./components/admin/sidenav');
let dashboard =  require('./components/admin/dashboard');

const app = new Vue({
    el: '#app',
    components: {
        sidenav,
        dashboard
    },
    data: function(){
        return {
            tableId: -1 ,
        }
    },
});
