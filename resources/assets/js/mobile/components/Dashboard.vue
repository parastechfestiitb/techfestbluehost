<template>
    <header>
        <div class="d-flex flex-row h-100">
            <div class="search d-flex align-self-center fa-2x ml-2" @click="searchOpen()">
                <div class="search-icon">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
            <div class="title mr-auto ml-auto">
                <img @click="$root.changeRoute('/')" src="https://techfest.org/2018/logo-large.svg" alt="logo">
            </div>
            <div class="menu d-flex align-self-center fa-2x mr-2">
                <div class="menu-icon dashboard-icon" v-if="$root.loginStatus==='Not Logged In'" id="signinButton">
                    <i class="fa fa-user"></i>
                </div>
                <div class="menu-icon dashboard-icon" v-else id="dashboardOpen" @click="dashboardOpen">
                    <i class="fa fa-user"></i>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        name: "Dashboard",
        methods:{
            searchOpen: function(){
                this.$root.searchOpen =! this.$root.searchOpen;
                    this.$root.sideboardOpen = false;
            },
            dashboardOpen: function(e){
                axios.post('/api/get-status')
                    .then(r=>{
                        this.loginStatus = r.data;
                        this.$root.sideboardOpen = !this.$root.sideboardOpen;
                        this.$root.searchOpen = false;
                    });
            }
        }
    }
</script>

<style scoped>
    header{
        background:#000;
        height: 50px;
        color:white;
        position: fixed;
        top:0;
        left: 0;
        right: 0;
        width: 100vw;
        -webkit-backface-visibility: hidden;
        z-index: 15;
    }
    .title{
        height: 30px;
        margin-top: 10px;
    }
    .title img{
        height: 100%;
        margin-left: 10px;
    }
</style>
