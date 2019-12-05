<template>
    <div class="page-transition" :class="{'active':active}"></div>
</template>

<script>
    export default {
        name: "transition",
        props: {'active':false},
    }
</script>

<style scoped>
    .page-transition{
        position: fixed;
        top: 0;
        left: 0;
        width:100%;
        height:0;
        transition: all 4s, height 0ms 4s;
        background: rgba(0,0,0,0);
        z-index:9999;
    }
    .page-transition.active{
        height:100vh;
        background: rgba(0,0,0,1);
        transition: height 0ms;
    }
</style>