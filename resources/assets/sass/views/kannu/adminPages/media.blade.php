
@extends('kannu.eventLayer')
@section('title','Media')
@section('style2')
<style type="text/css">




  .gallery-title
{
    font-size: 36px;
    color: #22B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 26.5%;
    height: 25px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #c7e6e9;
    border-radius: 5px;
    text-align: center;
    color: #c7e6e9;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid black;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: black;

}
.btn-default:active .filter-button:active
{
    background-color: black;
    color: #616667;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
/* optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}

@-moz-document url-prefix(){

 .gallery-title
{
    font-size: 36px;
    color: #22B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 26.5%;
    height: 25px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #c7e6e9;
    border-radius: 5px;
    text-align: center;
    color: #c7e6e9;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid black;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: black;

}
.btn-default:active .filter-button:active
{
    background-color: black;
    color: #616667;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
/* optional: show position indicator in red */
::-webkit-scrollbar-thumb {
    background: #FF0000;
}
}

.container{
    height: 100%;
     margin-top:20%;
}
.container:not(:-moz-handler-blocked){
    height: 75vh;
    margin-top:10%;
}
#upar{
    /*margin-top: 0%;*/
    position: relative;
    /*top: 1vh;*/
}
#upar:not(:-moz-handler-blocked){

}
.row:not(:-moz-handler-blocked){
 ::-webkit-scrollbar {
    width: 0px;  /* remove scrollbar space */
    background: transparent;  /* optional: just make scrollbar invisible */
}
}


#pop{ top: 2vh}

#image{top: 15%;}



@media (min-width:62em) {

#image{top: 1%;}

#upar{
    margin-top: 0%;
    position: relative;
    top: 3vh;
}
#pop{
     margin-top:8%;
}

    ul#menu1 li {
             font-size: 0.8vw;
                }
    ul#menu2 li {
                font-size: 0.8vw;
         }



}



@media (max-width:62em) and (orientation: landscape){
           #bodymovin{ margin-top:-5%;width:50vw; }
           #ab023{margin-bottom: 10vh;}
            #menu1 {
                left: 1.5vw;
            }
            ul#menu1 li {
                font-size: 1.1vw;
                }
            ul#menu2 li {
                font-size: 1.1vw;
                }

    #upar{
    margin-top: 2%;
    position: relative;
    top: 3vh;
}
}

@media (min-width:62em){
    .container{
    height: 100%;
     margin-top:2%;
}
body{
  height:100%;
}
html{
  height: 100%;
}
#overall{
  height: 100%;
}
}

</style>

@endsection

@section('content')


<div class="container" style="overflow-x:hidden;">
        <div class="row" style="overflow-x:hidden;  ">


        <div align="right" id="upar" style="">

            <a id="clic" class="btn filter-button active" data-filter="national" >Print</a>
            <!-- <a class="btn  filter-button" data-filter="intl">International</a> -->
            <a class="btn filter-button" data-filter="video">Video</a>
            <a class="btn filter-button" data-filter="facebook">Facebook</a>
            <a class="btn filter-button" data-filter="contact">Contact</a>
            <!-- <button class="btn btn-default filter-button" data-filter="facebook">Irrigation Pipes</button> -->
        </div>
        <br/>


            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national" >
                <img onclick="popup()" src="img/2018/media/1.jpg" class="img-responsive" style="opacity: 1; height: 20vh; width:30vh; ">
            </div>

             <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national" >
                <img onclick="popup()" src="img/2018/media/2.jpg" class="img-responsive" style="opacity: 1; height: 20vh; width:30vh;" >
            </div>
            <!-- div  class="gallery_product col-lg-2 col-md-2 col-sm-2 col-xs-6 pic filter national"  style="opacity: 1; height: 20vh; width:30vh;">
                <img onclick="popup()" src="img/2018/media/3.jpg" class="img-responsive">
            </div> -->
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national" >
                <img onclick="popup()" src="img/2018/media/4.JPG" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/5.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/6.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>

            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national" style="top:-0vh;">
                <img onclick="popup()" src="img/2018/media/7.jpg" class="img-responsive"  style="top:-3vh; opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/8.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/9.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/10.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/11.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/12.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/13.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/14.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/15.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/16.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/17.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/18.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/19.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/20.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/21.JPG" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/22.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/23.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/24.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/25.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/26.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/27.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/28.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/29.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/30.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/31.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/32.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/33.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/34.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/35.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/36.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/37.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/38.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/39.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
           <!--  <div  class="gallery_product col-lg-2 col-md-2 col-sm-2 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/40.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div> -->
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/41.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/42.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/43.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/44.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/45.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/46.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/47.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/48.png" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <div  class="gallery_product col-lg-2 col-md-2 col-sm-4 col-xs-6 pic filter national">
                <img onclick="popup()" src="img/2018/media/49.jpg" class="img-responsive"  style="opacity: 1; height: 20vh; width:30vh;">
            </div>
            <!-- Videos -->

            <div  class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-6 pic filter video">
                <iframe width="315" height="177.5" src="https://www.youtube.com/embed/videoseries?list=PLsfmjZL1sMSerR0Y24a2AcVr0Ke9MDrHf" frameborder="0" allowfullscreen></iframe>
            </div>
<div  class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-6 pic filter video">
                <iframe width="315" height="177.5" src="https://www.youtube.com/embed/d32xw27ScK8?list=PLsfmjZL1sMSerR0Y24a2AcVr0Ke9MDrHf" frameborder="0" allowfullscreen></iframe>
            </div>

            <div  class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-6 pic filter video" style="top:-3vh">
               <iframe width="315" height="177.5" src="https://www.youtube.com/embed/BECTxCVcpv8?list=PLsfmjZL1sMSerR0Y24a2AcVr0Ke9MDrHf" frameborder="0" allowfullscreen></iframe>
            </div>
            <div  class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-6 pic filter video" style="top:-3vh">
               <iframe width="315" height="177.5" src="https://www.youtube.com/embed/NX_bFoJPTEE?list=PLsfmjZL1sMSerR0Y24a2AcVr0Ke9MDrHf" frameborder="0" allowfullscreen></iframe>
            </div>
            <div  class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-6 pic filter video" style="top:-3vh">
               <iframe width="315" height="177.5" src="https://www.youtube.com/embed/IqJBnKUXcDI?list=PLsfmjZL1sMSerR0Y24a2AcVr0Ke9MDrHf" frameborder="0" allowfullscreen></iframe>
            </div>
            <div  class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-6 pic filter video" style="top:-3vh">

<iframe width="315" height="177.5" src="https://www.youtube.com/embed/HVYPV48qQDI?list=PLsfmjZL1sMSerR0Y24a2AcVr0Ke9MDrHf" frameborder="0" allowfullscreen></iframe>

            </div>
            <div  class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-6 pic filter video" style="top:-3vh">
              <iframe width="315" height="177.5" src="https://www.youtube.com/embed/sBDtYoxqlYE?list=PLsfmjZL1sMSerR0Y24a2AcVr0Ke9MDrHf" frameborder="0" allowfullscreen></iframe>
            </div>
            <div  class="gallery_product col-lg-4 col-md-4 col-sm-6 col-xs-6 pic filter video" style="top:-3vh">
              <iframe width="315" height="177.5" src="https://www.youtube.com/embed/xr7HkSEYqK4?list=PLsfmjZL1sMSerR0Y24a2AcVr0Ke9MDrHf" frameborder="0" allowfullscreen></iframe>
            </div>
            <div  class="gallery_product col-lg-3 col-md-3 col-sm-2 col-xs-2 pic filter facebook" style="height:100%; ">
            </div>
            <div  class="gallery_product col-lg-6 col-md-6 col-sm-4 col-xs-6 pic filter facebook" style="height:100%; ">
               <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftechfest.iitb%2F&tabs=timeline&width=500&height=600&small_header=false&adapt_container_width=false&hide_cover=false&show_facepile=true&appId" width="500" height="600" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
            </div>
            <div  class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-3 pic filter facebook" style="height:100%;">
            </div>
                <div  class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-3 pic filter contact" >

            </div>


            <div  class="gallery_product col-lg-6 col-md-6 col-sm-6 col-xs-6 pic filter contact" style="font-size: 20px; color: #fefefe; text-align:center;">
                <p style="color:lightslategray">Contact Us</p>
                <p>
                <a href="https://www.facebook.com/profile.php?id=100000252125137&ref=br_rs" style="text-decoration:none; color:#c2e0e3; ">Anirudh Poddar</a>
                <br>
                Manager,Media and Marketing
                <br>
                anirudh@techfest.org
                <br>
                +91 9920198901
                </p>
            </div>
            <div  class="gallery_product col-lg-3 col-md-3 col-sm-3 col-xs-3 pic filter contact" >

            </div>
    </div>
</section>

<div id="pop"  style="display:none; position: fixed; width: 100%; height: 100%;    background-color:black; top:0px; left: 0px; z-index: 5;">
<a type="button" onclick="XX()" id="close" style=" position:relative; font-size:40px; top:-12vh; right:2vh;  text-decoration: none; z-index:8;cursor:pointer;">X</a><img id="image" src="http://fakeimg.pl/365x365/" style="position: relative; height: 70%;  width: 70%"> </div>

</div>

@endsection
@section('java')
<script type="text/javascript">

  $(document).ready(function(){

    $(function() {
    $('#clic').click();
});

    $(".filter-button").click(function(){
        var value = $(this).attr('data-filter');

        if(value == "all")
        {
            //$('.filter').removeClass('hidden');
            $('.filter').show('1000');
        }
        else
        {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
            $(".filter").not('.'+value).hide('3000');
            $('.filter').filter('.'+value).show('3000');

        }
    });

    if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});

$('.gallery_product').click(function(event) {
  $source=$(this).find('img').attr('src');

  $("#image").attr("src",$source);
});

  function popup(){
   document.getElementById('pop').style.opacity=1;

   document.getElementById('pop').style.display="block";



  }

  function XX(){
    console.log(2);
    document.getElementById('pop').style.display="none";
  }
  </script>
@endsection