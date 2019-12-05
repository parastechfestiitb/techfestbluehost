<template>
    <div class="cursor">
        <div class="first" :style="{left: screenX + 'px', top: screenY + 'px'}"></div>
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
                console.log(e,this);
                this.screenX = e.screenX;
                this.screenY = e.screenY;
            }
        },
        created: function(){
            document.body.addEventListener('mousemove',this.handleMouseMove);
        },
        // destroyed: () => document.body.removeEventListener('mousemove',this.handleMouseMove)
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
        background:orange;
    }
    .first,.second,.third{
        position: fixed;
        border: 1px solid red;
        padding: 4px;
        border-radius: 100%;
    }
</style>