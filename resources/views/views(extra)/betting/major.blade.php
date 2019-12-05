<!DOCTYPE html>
<html lang="en">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Robowars | Techfest 2017</title>
    <link rel="stylesheet" href="/public/css/m.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        body{
            width:100vw;
            height:100vh;
            overflow: hidden;
        }
        .chartHolder{
            position: relative;
        }
        .col{
            margin:0;
            padding:0 !important;
        }
        #robowarsHeading{
            text-align: center;
            color: #ffea00;
            font-family: cursive;
            text-shadow: 0 0 4px red;
            box-shadow: 0 6px 5px #4d3e3e66;
            margin: auto 10px;
        }
        .topAllTable{
            box-shadow:1px 0 5px 5px black;
        }
        .topTable thead{
            margin-bottom:5px;
        }
        .topTable tbody{
            border-left:1px solid black;
            box-shadow:-1px -7px 8px black;
        }
        #botNames{
            margin-top:50px;
        }
        #botNames tr{
            box-shadow:1px 0 5px black;
        }
        .bot2{
            background: #DC3912;
            color:white;
        }
        .bot1{
            background:#3366cc;
            color:white;
        }
        .bot3{
            background:#ff9900;
            color:white;
        }
        .addSpace .col{
            box-shadow: -5px 0 5px rgba(0,0,0,0.4);
        }
    </style>
</head>
<body>
<div class="row">
    <div class="col l8 m8 s8" style="position:relative;">
        <h1 id="robowarsHeading">Robowars</h1>
        <div style="width:100%;height: 350px;">
            <div class="row">
                <div class="col s1 m1 l1"></div>
                <div class="col s4 m4 l4">
                    <table id="botNames">
                        <tr class="bot1"></tr>
                        <tr class="bot2"></tr>
                        <tr class="bot3"></tr>
                    </table>
                </div>
                <div class="col s7 m7 l7 chartHolder" style="height:350px">
                    <div id="piechart" style="width: 600px;height:400px;position:absolute;right:-150px;top:-70px"></div>
                </div>
            </div>
        </div>
        <div class="row addSpace" style="position:absolute;width:calc(100% - 20px);margin:8px;">
            <div class="col s4 m4 l4">
                <table>
                    <thead>
                    <tr class="bot1"><th><span class="bot1Name"></span></th><th></th></tr>
                    </thead>
                    <tbody id="topThis0"></tbody>
                    <tfooter>
                        <tr class="bot1">
                            <th>Total</th>
                            <td><span class="bot1Total"></span></td>
                        </tr>
                    </tfooter>
                </table>
            </div>
            <div class="col s4 m4 l4 ">
                <table>
                    <thead>
                    <tr class="bot2">
                        <th><span class="bot2Name"></span><th></th></th>
                    </tr>
                    </thead>
                    <tbody id="topThis1"></tbody>
                    <tfooter>
                        <tr class="bot2">
                            <th>Total</th>
                            <td><span class="bot2Total"></span></td>
                        </tr>
                    </tfooter>
                </table>
            </div>
            <div class="col s4 m4 l4">
                <table class="thirdBot">
                    <thead>
                    <tr class="bot3">
                        <th><span class="bot3Name"></span><th></th></th>
                    </tr>
                    </thead>
                    <tbody id="topThis2"></tbody>
                    <tfooter>
                        <tr class="bot3">
                            <th>Total</th>
                            <td><span class="bot3Total"></span></td>
                        </tr>
                    </tfooter>
                </table>
            </div>
        </div>
    </div>
    <div class="col l4 m4 s4 leadingTable ">
        <table class="striped topTable">
            <thead class="grey darken-4 white-text topAllTable">
            <tr>
                <th>Name</th>
                <th>Amount</th>
            </tr>
            </thead>
            <tbody id="topAll">
            </tbody>
        </table>
    </div>
</div>


<script src="/public/js/j.js"></script>
<script src="/public/js/m.js"></script>
<script src="/public/js/v.js"></script>

<script>
    var allUsers = {};
    var allBots = {};
    $count = 0;
    var globalBot1,globalBot2,globalBot3,amount1,amount2,amount3;
    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    $(document).ready(function(){
        $.ajax({
            url      :   '{{route('bettingAllUsers')}}',
            type:'POST',
            data:{_token: CSRF_TOKEN},
            dataType:'JSON',
            success  :   function(e){
                for(var k in e.users){
                    allUsers[e.users[k].email] = e.users[k].name;
                }
                for(var k in e.bots){
                    allBots[e.bots[k].id] = e.bots[k].name;
                }
            }
        });
        var topAll = function(){
            $.ajax({
                url      :   '{{route('topAllBetting')}}',
                type:'POST',
                data:{_token: CSRF_TOKEN},
                dataType:'JSON',
                success  :   function(e){
                    $("#topAll").html('');
                    for (var key in e) {
                        if (!e.hasOwnProperty(key)) continue;
                        var obj = e[key];

                        $row = `<tr><td>${obj.name}</td><td>${obj.amount}</td></tr>`;
                        $("#topAll").append($row);

                    }
                }
            });
        };
        topAll();
        setInterval(topAll,1000);
        var topThis = function(){
            $.ajax({
                url      :   '{{route('topThisBetting')}}',
                type:'POST',
                data:{_token: CSRF_TOKEN},
                dataType:'JSON',
                success  :   function(e){
                    $("#topThis0").html('');
                    $("#topThis1").html('');
                    $("#topThis2").html('');
                    for (var key in e.term0) {
                        if (!e.term0.hasOwnProperty(key)) continue;
                        var obj = e.term0[key];

                        $row = `<tr><td>${allUsers[obj.email]}</td><td>${obj.amount}</td></tr>`;
                        $("#topThis0").append($row);

                    }
                    for (var key in e.term1) {
                        if (!e.term1.hasOwnProperty(key)) continue;
                        var obj = e.term1[key];

                        $row = `<tr><td>${allUsers[obj.email]}</td><td>${obj.amount}</td></tr>`;
                        $("#topThis1").append($row);

                    }
                    for (var key in e.term2) {
                        if (!e.term2.hasOwnProperty(key)) continue;
                        var obj = e.term2[key];

                        $row = `<tr><td>${allUsers[obj.email]}</td><td>${obj.amount}</td></tr>`;
                        $("#topThis2").append($row);

                    }
                }
            });
        };
        setInterval(topThis,1000);
        var majorChange = function(){
            $.ajax({
                url      :   '{{route('totalAmountBetting')}}',
                type:'POST',
                data:{_token: CSRF_TOKEN},
                dataType:'JSON',
                success  :   function(e){
                    if(e.admin.count === 2){
                        $('.thirdBot').hide();
                        $('.seconddBot').show();
                    }
                    else {
                        $('.thirdBot').show();
                        $('.seconddBot').hide();
                    }
                    globalBot1 = allBots[e.admin.bot1];
                    globalBot2 = allBots[e.admin.bot2];
                    globalBot3 = allBots[e.admin.bot3];
                    amount1 = parseInt(e.b1) || 0;
                    amount2 = parseInt(e.b2) || 0;
                    amount3 = parseInt(e.b3) || 0;
                    drawChart();
                    $('.bot1Name').html(globalBot1);
                    $('.bot2Name').html(globalBot2);
                    $('.bot3Name').html(globalBot3);
                    $('.bot1Total').text(amount1);
                    $('.bot2Total').text(amount2);
                    $('.bot3Total').text(amount3);
                    console.log(amount1);
                }
            });
        };
        setInterval(majorChange,1000);
    });
</script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Bot Name', 'Amount Bet'],
            [globalBot1,  amount1],
            [globalBot2, amount2],
            [globalBot3,    amount3]
        ]);

        var options = {
//            title: 'My Daily Activities',
            is3D : true,
            backgroundColor: 'transparent',
            legend:'none'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }
</script>
</body>
</html>