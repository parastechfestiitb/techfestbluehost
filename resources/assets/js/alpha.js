require('./bootstrap');
import VueRouter from 'vue-router';
window.Vue = require('vue');

Vue.use(VueRouter);
let script;
// https://tc39.github.io/ecma262/#sec-array.prototype.find
if (!Array.prototype.find) {
    Object.defineProperty(Array.prototype, 'find', {
        value: function(predicate) {
            // 1. Let O be ? ToObject(this value).
            if (this == null) {
                throw new TypeError('"this" is null or not defined');
            }

            var o = Object(this);
            var len = o.length >>> 0;
            if (typeof predicate !== 'function') {
                throw new TypeError('predicate must be a function');
            }
            var thisArg = arguments[1];
            var k = 0;
            while (k < len) {
                var kValue = o[k];
                if (predicate.call(thisArg, kValue, k, o)) {
                    return kValue;
                }
                k++;
            }
            return undefined;
        }
    });
}
if (!Array.from) {
    Array.from = (function () {
        var toStr = Object.prototype.toString;
        var isCallable = function (fn) {
            return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
        };
        var toInteger = function (value) {
            var number = Number(value);
            if (isNaN(number)) { return 0; }
            if (number === 0 || !isFinite(number)) { return number; }
            return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
        };
        var maxSafeInteger = Math.pow(2, 53) - 1;
        var toLength = function (value) {
            var len = toInteger(value);
            return Math.min(Math.max(len, 0), maxSafeInteger);
        };

        return function from(arrayLike/*, mapFn, thisArg */) {
            var C = this;
            var items = Object(arrayLike);
            if (arrayLike == null) {
                throw new TypeError('Array.from requires an array-like object - not null or undefined');
            }

            // 4. If mapfn is undefined, then let mapping be false.
            var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
            var T;
            if (typeof mapFn !== 'undefined') {
                // 5. else
                // 5. a If IsCallable(mapfn) is false, throw a TypeError exception.
                if (!isCallable(mapFn)) {
                    throw new TypeError('Array.from: when provided, the second argument must be a function');
                }

                // 5. b. If thisArg was supplied, let T be thisArg; else let T be undefined.
                if (arguments.length > 2) {
                    T = arguments[2];
                }
            }

            // 10. Let lenValue be Get(items, "length").
            // 11. Let len be ToLength(lenValue).
            var len = toLength(items.length);

            // 13. If IsConstructor(C) is true, then
            // 13. a. Let A be the result of calling the [[Construct]] internal method
            // of C with an argument list containing the single item len.
            // 14. a. Else, Let A be ArrayCreate(len).
            var A = isCallable(C) ? Object(new C(len)) : new Array(len);

            // 16. Let k be 0.
            var k = 0;
            // 17. Repeat, while k < len… (also steps a - h)
            var kValue;
            while (k < len) {
                kValue = items[k];
                if (mapFn) {
                    A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k);
                } else {
                    A[k] = kValue;
                }
                k += 1;
            }
            // 18. Let putStatus be Put(A, "length", len, true).
            A.length = len;
            // 20. Return A.
            return A;
        };
    }());
}

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
    $('#dashboard').click(function(e){
        $('main,.navigation,.controller').addClass('blur');
        $('.dashboard-overlay').css({
            left:'75vw',
            top:'0',
            width:'25vw',
            height:'100vh'
        });
        $('.layer-1').animate({
            left:'-150vw',
            top:'-150vw',
            width:'300vw',
            height:'300vw'
        },1000,function(){
            $('.layer-1-container').animate({
                opacity:1
            },'slow')
        });
    });
    $('.close-button').click(function(e){
        $('.blur').removeClass('blur');
        $('.dashboard-overlay').css({
            width:0,
            height:0,
            top:e.pageY,
            left: e.pageX
        });
        $(".layer-1-container").animate({
            opacity: 0
        },'slow',function(){
            $('.layer-1').css({
                left:'100vw',
                top: 0,
                width: 0,
                height:0
            });
        })
    });
});

document.getElementsByTagName( "head" )[0].appendChild( script );
require('./templates/hamburger');
let pageLoad = (onload = false) =>{
    if(onload) $('.page-transition').removeClass('active');
    $('.page-transition').addClass('active');
};
let Get = require('./components/Get');
let Competitions = require('./components/Competitions');
let Competition = require('./components/Competition');
let Event = require('./components/Events');
const routes = [
    {
        path:'/',
        name: 'Get',
        component:Get,
        meta:{
            title: 'Techfest | Asia\'s Largest Science & Technology Festival',
            metaTags:[
                {
                    name: 'description',
                    content: 'Techfest: 14th to 16th December. IIT Bombay presents Asia\'s Largest Science and Technology Festival. Get ready for an awesome adventurous journey.'
                },
                {
                    name: 'keywords',
                    content: 'techfest,iit mumbai,tech fest, mumbai,techfest 2019, techfest 2018, asia, visit IIT Bombay, visit Bombay, competitions, workshops, exhibitions, lectures, fun, mumbai, festival, tf2k18, tf2k19, tech entertainment, tech extravaganza, representative, 2018, leader'
                }
            ]
        }
    },
    {
        path:'/competitions',
        component:Competitions,
        name:'competitions',
        meta:{
            title: 'Competitions | Techfest 2018-19',
            description: 'Competitions conducted by Techfest, IIT Bombay have participation from national as well as international teams and it covers many genres including robotics, aeromodelling, aquatics, coding, image processing, structural engineering, gaming and many more'
        }
    },
    {
        path:'/technorion',
        component:require('./components/Zonals'),
        name:'zonals',
        meta:{
            title: 'Zonals | Techfest 2018-19'
        }
    },
    {
        path:'/zonals',
        redirect:'/technorion'
    },
    {
        path:'/ideate',
        component:require('./components/Ideates'),
        name:'ideates',
        meta: {
            title: 'Ideate | Techfest 2018-19',
        }
    },
    {path:'/BEL',redirect: './BEL%20Innovate%20to%20illuminate/competition'},
    {path:'/makerthon',redirect: './Tata%20Makerthon%20Challenge/competition'},
    {path:'/bel-innovate',redirect: './BEL%20Innovate%20to%20illuminate/competition'},
    {path:'/media',component:require('./components/Media'),name:'media',meta:{title:'Media | Techfest 2018-19'}},
    {path:'/:name/competition',component: Competition, name: 'competition'},
    {path:'/:name/ideate',redirect: './:name/competition'},
    // {path:'/lectures',component:Event,name:'Lectures', meta:{title:'Lectures | Techfest 2018-19'}},
    {path:'/lectures',component:require('./components/Lectures'),name:'Lectures', meta:{title:'Lectures | Techfest 2018-19'}},
    {path:'/technoholix',component:require('./components/Technoholix'),name:'Technoholix',meta:{title:'Technoholix | Techfest 2018-19'}},
    {path:'/robowars/2018',component:Event,name:'Robowars',meta:{title:'Robowars | Techfest 2018-19'}},
    {path:'/esports',component:Event,name:'Esports',meta:{title:'Esports |Techfest 2018-19'}},
    {path:'/ozone',component:Event,name:'Ozone',meta:{title:'Ozone | Techfest 2018-19'}},
    {path:'/summit',component:Event,name:'Summit', meta:{title:'Summit | Techfest 2018-19'}},
    {path:'/twmun',component:Event,name:'twmun', meta:{title:'TWMUN | Techfest 2018-19'}},
    {path:'/initiatives',component:require('./components/Initiatives'),name:'Initiatives', meta:{title:'Initiatives | Techfest 2018-19'}},
    {path:'/exhibitions',component:require('./components/ExhibitionsNew'),name:'Exhibitions',
        meta:{
            title: 'Exhibitions | Techfest 2018-19',
            description: 'In its 22nd edition, Techfest is back and ready to amaze you, showcasing the technologies of the times of ancient civilizations to the modern out of the box innovations.'
        }},
    {path:'/legal',component:require('./components/Legal'),name:'Legal', meta:{title:'Legal | Techfest 2018-19'}},
    {path:'/hospitality',component:require('./components/Hospitality'),name:'Hospitality', meta:{title:'Hospitality | Techfest 2018-19'}},
    {path:'/sponsors',component:require('./components/Sponsors'),name:'Sponsors', meta:{title:'Sponsors | Techfest 2018-19'}},
    {
        path:'/workshops',
        component:require('./components/Workshops'),
        name:'workshops',
        meta:{
            title: 'Workshops | Techfest 2018-19',
            description: 'Competitions conducted by Techfest, IIT Bombay have participation from national as well as international teams and it covers many genres including robotics, aeromodelling, aquatics, coding, image processing, structural engineering, gaming and many more'
        }
    },
    {path:'/:name/workshop',component: require('./components/Workshop'), name: 'Workshop',meta:{title:'Workshop | Techfest 2018-19'}},
    {path:'/about-techfest',component:require('./components/About'),name:'About', meta:{title:'About Techfest'}},
    {path:'/contact-us',component:require('./components/Team'),name:'Team', meta:{title:'Contact Us'}},
    {path:'/compiadmin',component:require('./components/Compi'),name:'Compi', meta:{title:'Compi'}},
    {path:'/payment',component: require('./components/Payment')},
    {path:'/certificate',component: require('./components/Certificate')},
    {path:'/accommodation',component: require('./components/Accomodation')},
    {path:'/:name/compiadmin',component:require('./components/Comp'),name:'Comp', meta:{title:'Comp'}},
    {path:'/404',component: require('./components/Error')},
    {path:'*',redirect: '/404'}
];
const router = new VueRouter({
    mode: 'history',
    routes
});

router.beforeEach((to, from, next) => {
    const nearestWithTitle = to.matched.slice().reverse().find(r => r.meta && r.meta.title);

    const nearestWithMeta = to.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);
    const previousNearestWithMeta = from.matched.slice().reverse().find(r => r.meta && r.meta.metaTags);

    if(nearestWithTitle) document.title = nearestWithTitle.meta.title;

    Array.from(document.querySelectorAll('[data-vue-router-controlled]')).map(el => el.parentNode.removeChild(el));

    if(!nearestWithMeta) return next();

    nearestWithMeta.meta.metaTags.map(tagDef => {
        const tag = document.createElement('meta');

        Object.keys(tagDef).forEach(key => {
            tag.setAttribute(key, tagDef[key]);
        });

        tag.setAttribute('data-vue-router-controlled', '');

        return tag;
    })
        .forEach(tag => document.head.appendChild(tag));

    next();
});

const app = new Vue({
    el: '#app',
    router,
    data: function(){
        return {
            pageLoad: false,
            showNav: true,
            competition:0,
            searchOpen: false,
            s3: s3Link,
            searchElements: [],
            searchQuery: "",
            searchDebounce: null,
            ctrlPressed: false,
            paymentLink: null
        }
    },
    created:function(){
        let t = this;
        window.addEventListener('keydown',function(e){
            if(e.key === "Control")
                t.ctrlPressed = true;
        });
        window.addEventListener('keyup',function(e){
            if(e.key==="Control")
                t.ctrlPressed = false;
        })
    },
    methods: {
        routeChange: function(e){
            if(this.ctrlPressed){
                window.open(e);
                return;
            }
            if(e===this.$route.path) return false;
            if(e.includes('techfest.org')) {
                window.open(e);
                return;
            }
            this.$root.pageLoad = true;
            $('.page-transition').css('left','100vw').animate({
                left: '-50vw'
            },500,function(){
                router.push(e)
            });
            $('.close-button').click();
            if(this.searchOpen)
                $('.close-search').click();
        },
        focusSearch: ()=>{
            $('.search-box').focus();
        },
        searchClick: function(e){
            let searchOpen = !this.searchOpen;
            if(searchOpen){
                $('main, .navigation').addClass('blur');
                $('.search-overlay').css({'left': e.pageX, 'top': e.pageY}).animate({
                    width: '300vmax',
                    height: '300vmax',
                    left: '-150vmax',
                    top: '-150vmax'
                }, 500);
                setTimeout(function () {
                    $('.search-container').show().css('opacity',1);
                }, 500)
            }
            else{
                $('.blur').removeClass('blur');
                $('.search-container').css('opacity',0);
                setTimeout(function(){
                    $('.search-container').hide();
                    $('.search-overlay').animate({
                        width: 0,
                        height: 0,
                        left: e.pageX,
                        top: e.pageY
                    }, 500);
                },500)
            }
            this.searchOpen = searchOpen;
        },
        logout: function(){
            axios.get('/api/session-flush')
                .then(function(){
                    window.location.reload();
                });
        },
        profile: function(){
            $('.profile-details').css('display','block');
            $('.events').css('display','none');
        },
        authLogin: function(){
            authCheck();
        }
    },
    watch:{
        $route: function(to,from){

        },
        searchQuery: function(e){
            clearTimeout(this.searchDebounce);
            this.searchDebounce = setTimeout(()=>{
                this.searchDebounce = true;
                if(e==="") this.searchElements = [];
                else axios.get('/api/search?q='+e)
                    .then((response)=>{
                        this.searchElements  = response.data;
                    });
            },500);
        }
    }
});

$('.overlay-navigation').click(()=>$('.icon').click());