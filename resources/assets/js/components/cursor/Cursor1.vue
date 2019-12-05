<template>
    <div class="cursor">
        <div class="first" :style="{transformX: screenX}"></div>
        <div class="second"></div>
        <div class="third"></div>
    </div>
</template>

<script>
    export default {
        name: "Cursor1",
        data: function(){
            return {
                screenX: 0,
                screenY: 0
            }
        },
        methods: {
            handleMouseMove: function(e){
                this.screenX = e.screenX;
                this.screenY = e.screenY;
            }
        },
        created: function(){
            document.body.addEventListener('mousemove',this.handleMouseMove);
        },
        destroyed: () => document.body.removeEventListener('mousemove',this.handleMouseMove)
    }
</script>

<style scoped>
    .cursor{
        z-index:16777271;
        height:100vh;
        width: 100vw;
        position: fixed;
        top:0;
        left:0;
    }
    .cursor *{
        -webkit-transition: all 100ms;
        -moz-transition: all 100ms;
        -ms-transition: all 100ms;
        -o-transition: all 100ms;
        transition: all 100ms;
        -webkit-transition-timing-function: linear;
        -moz-transition-timing-function: linear;
        -ms-transition-timing-function: linear;
        -o-transition-timing-function: linear;
        transition-timing-function: linear;
    }
    .first,.second,.third{
        position: fixed;
        border: 1px solid red;
        padding: 4px;
        border-radius: 100%;
    }
</style>