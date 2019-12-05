<template>
    <div class="container">
        <div class="score current-score">
            score<br><span></span>
        </div>
        <div class="score high-score">
            high score<br><span></span>
        </div>
        <button class="trigger left-trigger">tap!</button>
        <button class="trigger right-trigger">tap!</button>
    </div>
</template>

<script>
    export default {
        name: "error.vue",
        created:function(){
            this.$root.loadScript('https://cdn.rawgit.com/schteppe/poly-decomp.js/1ef946f1/build/decomp.min.js');
            this.$root.loadScript('https://cdn.rawgit.com/liabru/matter-js/0895d81f/build/matter.min.js');
            this.$root.loadScript('https://cdn.rawgit.com/liabru/matter-attractors/c470ed42/build/matter-attractors.min.js');
        }
    }
</script>

<style scoped>

</style>