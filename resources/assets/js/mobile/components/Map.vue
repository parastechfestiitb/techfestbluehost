<template>
    <div class="d-flex w-100 h-100 pt-80">
        <div class="img-zoom-container w-100 d-flex flex-column">
            <img id="myimage" src="https://projectheena.com/uploads/ngo/30152652683986/overviewImages/images/1526526839.jpg" class="map-1" alt="map">
            <div id="myresult" class="img-zoom-result shrink" :class="toggler?'active':''"></div>
            <div class="locations overflow-auto shrink d-flex flex-wrap" :class="toggler?'':'active'">
                <div>Convocation Hall</div>
                <div>Gymkhana</div>
                <div>Convocation Hall</div>
                <div>Gymkhana</div>
                <div>Gymkhana</div>
                <div>Convocation Hall</div>
                <div>Gymkhana</div>
                <div>Gymkhana</div>
                <div>Convocation Hall</div>
                <div>Gymkhana</div>
                <div>Gymkhana</div>
                <div>Convocation Hall</div>
                <div>Gymkhana</div>
                <div>Gymkhana</div>
                <div>Convocation Hall</div>
                <div>Gymkhana</div>
                <div>Gymkhana</div>
                <div>Convocation Hall</div>
                <div>Gymkhana</div>
            </div>
        </div>
        <i class="fa fa-map-marker" @click="toggler=!toggler"></i>
    </div>
</template>

<script>
    function imageZoom(imgID, resultID) {
        var img, lens, result, cx, cy;
        img = document.getElementById(imgID);
        result = document.getElementById(resultID);
        /*create lens:*/
        lens = document.createElement("DIV");
        lens.setAttribute("class", "img-zoom-lens");
        /*insert lens:*/
        img.parentElement.insertBefore(lens, img);
        cx = result.offsetWidth / lens.offsetWidth;
        cy = result.offsetHeight / lens.offsetHeight;
        result.style.backgroundImage = "url('" + img.src + "')";
        result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
        /*execute a function when someone moves the cursor over the image, or the lens:*/
        lens.addEventListener("mousemove", moveLens);
        img.addEventListener("mousemove", moveLens);
        /*and also for touch screens:*/
        lens.addEventListener("touchmove", moveLens);
        img.addEventListener("touchmove", moveLens);
        function moveLens(e) {
            var pos, x, y;
            /*prevent any other actions that may occur when moving over the image*/
            e.preventDefault();
            /*get the cursor's x and y positions:*/
            pos = getCursorPos(e);
            /*calculate the position of the lens:*/
            x = pos.x - (lens.offsetWidth / 2);
            y = pos.y - (lens.offsetHeight / 2);
            /*prevent the lens from being positioned outside the image:*/
            if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
            if (x < 0) {x = 0;}
            if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
            if (y < 0) {y = 0;}
            /*set the position of the lens:*/
            lens.style.left = x + "px";
            lens.style.top = y + "px";
            /*display what the lens "sees":*/
            result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
        }
        function getCursorPos(e) {
            var a, x = 0, y = 0;
            e = e || window.event;
            /*get the x and y positions of the image:*/
            a = img.getBoundingClientRect();
            /*calculate the cursor's x and y coordinates, relative to the image:*/
            x = e.pageX - a.left;
            y = e.pageY - a.top;
            /*consider any page scrolling:*/
            x = x - window.pageXOffset;
            y = y - window.pageYOffset;
            return {x : x, y : y};
        }
    }

    export default {
        name: "Map.vue",
        data:function () {
            return {
                toggler: true
            }
        },
        created: function(){
            setTimeout(function(){
                imageZoom("myimage", "myresult");
            },500);
        }
    }
</script>

<style>
    .map-1{
        width: 100%;
        padding-bottom: 10px;
    }
    html,body{
        width: 100%;
        background: black;
        height: 100%;
    }
    .pt-80{
        padding: 60px 10px 10px;
    }
    * {box-sizing: border-box;overflow-x:hidden;}

    .img-zoom-container {
        position: relative;
    }

    .img-zoom-lens {
        position: absolute;
        /*   border-top: 5px double #d4d4d4; */
        /*set the size of the lens:*/
        width: 40px;
        height: 40px;
    }
    .overflow-auto{
        overflow: auto;
    }
    .img-zoom-result {
        border: 1px solid black;
        height: 100%;
    }
    .fa-map-marker{
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: black;
        padding: 20px;
        color: white;
        border-radius: 100%;
        z-index:10;
        border:2px solid white;
    }
    .shrink{
        overflow:hidden;
        height:0;
        visibility: hidden;
        pointer-events: none;
        transition: all 1s;
    }
    .shrink.active{
        overflow: auto !important;
        height: 100% !important;
        visibility: visible !important;
        pointer-events: unset !important;
    }
    .locations>div{
        color: white;
        border: 2px solid white;
        line-height: -moz-block-height;
        padding: 10px;
        margin: 5px 2px;
    }
</style>