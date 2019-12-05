<!DOCTYPE html>
<html lang="en">
<head>
    <title>Techfest</title>
    <style>
        body{
            overflow: hidden;
            background-color: #ff8a45;
        }

        .mandala_1 {
            position: absolute;
            top: calc(50% + 175px  );
            left: calc(50% + 150px );
            height: 150px;
            animation: rotate1 10s infinite linear;
        }

        <?php
        $m1 = 800;
        $m1t = $m1/2;
        $m1l = $m1/2;

        ?>
        @keyframes rotate1 {
            from
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(0deg) ;
            }
            to
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(-360deg) ;
            }
        }
        .mandala_2 {
            height: {{$m1}}px;
            position: absolute;
            top: calc(50% - {{$m1t}}px);
            left: calc(50% - {{$m1l}}px);
            /*-webkit-animation: rotate 10s infinite linear;*/
            animation: rotate2 10s infinite linear;
        }

        @keyframes rotate2 {
            from
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(0deg);

            }
            to
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(360deg) ;
            }
        }
        .mandala_3 {
            position: absolute;
            top: calc(50% - 240px);
            left: calc(50% - 220px);
            height: 650px;
            animation: rotate3 reverse 10s infinite linear;
        }

        @keyframes rotate3 {
            from
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(0deg);
            }
            to
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(360deg) ;
            }
        }
        .mandala_4 {
            position: absolute;
            top: calc(50% - 345px);
            left: calc(50% - 325px);
            height: 600px;
            animation: rotate4 10s infinite linear;
        }

        @keyframes rotate4 {
            from
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(0deg);
            }
            to
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(360deg) ;
            }
        }
        .mandala_5 {
            position: absolute;
            top: calc(50% - 445px);
            left: calc(50% - 425px);
            height: 850px;
            animation: rotate5 reverse 10s infinite linear;
        }

        @keyframes rotate5 {
            from
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(0deg);
            }
            to
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(360deg) ;
            }
        }
        .mandala_6 {
            position: absolute;
            top: calc(50% - 420px);
            left: calc(50% - 350px);
            height: 600px;
            animation: rotate6 10s infinite linear;
        }

        @keyframes rotate6 {
            from
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(0deg);
            }
            to
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(360deg) ;
            }
        }
        .mandala_7 {
            position: absolute;
            top: calc(50% - 125px);
            left: calc(50% - 125px);
            height: 150px;
            animation: rotate7 reverse 10s infinite linear;
        }

        @keyframes rotate7 {
            from
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(0deg);
            }
            to
            {
                transform: rotateX(65deg) rotateY(-25deg) rotateZ(360deg) ;
            }
        }


    </style>
</head>
<body>
<div class="circle"></div>

<img  class="mandala_1" src="/2019/homepage/images/mandala_1.png" >
<img  class="mandala_2" src="/2019/homepage/images/mandala_2.png" >
<img  class="mandala_3" src="/2019/homepage/images/mandala_3.png" >
<!--<img  class="mandala_4" src="/2019/homepage/images/mandala_4.png" >-->
<!--<img  class="mandala_5" src="/2019/homepage/images/mandala_5.png" >-->
<!--<img  class="mandala_6" src="/2019/homepage/images/mandala_6.png" >-->
<!--<img  class="mandala_7" src="/2019/homepage/images/mandala_1.png" >-->

</body>
</html>