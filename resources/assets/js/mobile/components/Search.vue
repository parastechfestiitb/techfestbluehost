<template>
    <div class="search-overlay" :class="$root.searchOpen?'active':''">
        <div class="search-input">
            <input id="search-input" type="text" class="search" placeholder="What do you want to find?" v-model="searchQuery">
            <div class="search-items" v-if="searchElements.length!==0">
                <div class="search-item" v-for="(val,key) in searchElements" @click="$root.changeRoute(val.url)">{{val.name}}</div>
            </div>
        </div>
        <div class="search-container">
            <div class="hd1"></div>
            <div class="hd1">&nbsp;</div>
            <div class="hd1" @click="$root.changeRoute('/')">Home</div>
            <div class="hd1" @click="$root.changeRoute('/initiatives')">Initiatives</div>
            <div class="hd1" @click="$root.changeRoute('/competitions')">Competitions</div>
            <div class="hd1" @click="$root.changeRoute('/ideate')">Ideate</div>
            <div class="hd1" @click="$root.changeRoute('/robowars/2018')">Robowars</div>
            <!--<div class="hd1" @click="$root.changeRoute('/esports')">Esports</div>-->
            <div class="hd1" @click="$root.changeRoute('/exhibitions')">Exhibitions</div>
            <div class="hd1" @click="$root.changeRoute('/ozone')">Ozone</div>
            <div class="hd1" @click="$root.changeRoute('/lectures')">Lectures</div>
            <div class="hd1" @click="$root.changeRoute('/workshops')">Workshops</div>
            <div class="hd1" @click="$root.changeRoute('/summit')">Summit</div>
            <div class="hd1" @click="$root.changeRoute('/technoholix')">Technoholix</div>
            <div class="hd1" @click="$root.changeRoute('/twmun')">TWMUN</div>
            <a href="https://www.youtube.com/watch?v=2z3CEBv8PLI" target="_blank" class="hd1">After-Movie</a>
            <div class="hd1" @click="$root.changeRoute('/media')">Media</div>
            <div class="hd1" @click="$root.changeRoute('/hospitality')">Hospitality</div>
            <div class="hd1" @click="$root.changeRoute('/legal')">Legals</div>
            <div class="hd1" @click="$root.changeRoute('/about')">About Techfest</div>
            <!--<div class="hd1" @click="$root.changeRoute('/merchandise')">Merchandise</div>-->
            <div class="hd1" @click="$root.changeRoute('/contact')">Contact Us</div>
            <div class="hd1" @click="$root.changeRoute('/sponsors')">Sponsors</div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Search",
        data: ()=>{
            return {
                searchQuery: null,
                searchElements: []
            }
        },
        watch: {
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
    }

</script>

<style scoped>
    .zero-opacity{
        opacity:0;
        visibility: hidden;
    }
    .search-close{
        position: absolute;
        top: 0;
        left: 4vw;
        font-size: 12vw;
        z-index: 5;
    }
    .search-overlay{
        width:100vw;
        background: rgba(0, 0, 0, 0.9);
        z-index:12;
        position: fixed;
        top: 0;
        color: #ffffff;
        font-size: 1.3em;
        left:-100vw;
        transition:left 300ms;
    }
    .search-overlay.active{
        left:0;
    }
    .search-container{
        margin-top:5vh;
        overflow: auto;
        height: 95vh;
    }
    .hd1 {
        padding: 5px 1.3vh;
        color: white !important;
    }
    .hd1:first-child{
        margin-top:30px;
    }
    .search-input{
        position: absolute;
        top:50px;
        left:0;
        right: 0;
        min-height:60px;
        background: #000;
        padding: 2vh 1vw;
        text-align: right;
    }
    input{
        width: 100%;
        background: transparent;
        border: 2px solid white;
        padding: 5px;
        border-radius: 2px;
        color: #ffffff;
    }
    .search-items{
        border: 1px solid white;
        border-radius: 2px;
        color:white;
        background:black;
        width: 100%;
        margin-top: 2px;
    }
    .search-item{
        padding:5px;
        border: 1px solid white;
        text-align:left;
    }
</style>