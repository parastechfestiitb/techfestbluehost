<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Media Updates 2017 | Techfest</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <style>
        h3 {
            display: inline-block;
            padding: 10px;
            background: #B9121B;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .full-screen {
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
        }
    </style>

</head>

<body>
<div id="mycarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
        <li data-target="#mycarousel" data-slide-to="1"></li>
        <li data-target="#mycarousel" data-slide-to="2"></li>
        <li data-target="#mycarousel" data-slide-to="3"></li>
        <li data-target="#mycarousel" data-slide-to="4"></li>
        <li data-target="#mycarousel" data-slide-to="5"></li>
        <li data-target="#mycarousel" data-slide-to="6"></li>
        <li data-target="#mycarousel" data-slide-to="7"></li>
        <li data-target="#mycarousel" data-slide-to="8"></li>
        <li data-target="#mycarousel" data-slide-to="9"></li>
        <li data-target="#mycarousel" data-slide-to="10"></li>
        <li data-target="#mycarousel" data-slide-to="11"></li>
        <li data-target="#mycarousel" data-slide-to="12"></li>
        <li data-target="#mycarousel" data-slide-to="13"></li>
        <li data-target="#mycarousel" data-slide-to="14"></li>
        <li data-target="#mycarousel" data-slide-to="15"></li>
        <li data-target="#mycarousel" data-slide-to="16"></li>
        <li data-target="#mycarousel" data-slide-to="17"></li>
        <li data-target="#mycarousel" data-slide-to="18"></li>
        <li data-target="#mycarousel" data-slide-to="19"></li>
        <li data-target="#mycarousel" data-slide-to="20"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item">
            <img src="/media/1.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/2.png" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/3.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/4.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/5.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/6.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/7.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/8.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/9.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/10.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/11.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/19.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/12.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/13.png" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/14.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/15.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/16.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/17.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/18.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/20.jpg" data-color="lightblue" alt="First Image">
        </div>
        <div class="item">
            <img src="/media/21.jpg" data-color="lightblue" alt="First Image">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<script src="{{asset('js/app.js')}}"></script>

<script>
    var $item = $('.carousel .item');
    var $wHeight = $(window).height();
    $item.eq(0).addClass('active');
    $item.height($wHeight);
     $item.addClass('full-screen');

    $('.carousel img').each(function() {
        var $src = $(this).attr('src');
        var $color = $(this).attr('data-color');
        $(this).parent().css({
            'background-image' : 'url(' + $src + ')',
            'background-color' : $color
        });
        $(this).remove();
    });

    $(window).on('resize', function (){
        $wHeight = $(window).height();
        $item.height($wHeight);
    });

    $('.carousel').carousel({
        interval: 60000,
        pause: "false"
    });
</script>
</body>
</html>
