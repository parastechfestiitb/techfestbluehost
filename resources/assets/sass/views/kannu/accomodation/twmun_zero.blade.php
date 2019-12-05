@extends('kannu.workshopLayer')

@section('title')

Registration | Accommodation, Techfest IIT Bombay

@endsection

@section('style')
<meta name="viewport" content="width=device-width, user-scalable=no">
<link rel="icon" href="https://techfest.org/img/2018/icon.ico">

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-81222017-1', 'auto');
  ga('send', 'pageview');
</script>
<style type="text/css">

  </style>

@endsection


@section('content')
<div class="container" style="margin-top: 10vh;">
<div class="row">
<div class="col-sm-1"></div>  
<div class="col-sm-4">
      <p>Hotel Crescent (Rs. 750 for one day)</p>
      <img src="https://techfest.org/img/eventPage/cres1.png" style="width: 100%;height: 40vh;">
      <img src="https://techfest.org/img/eventPage/cres2.jpg" style="width: 100%;height: 40vh;">
</div>
<!-- <div class="col-sm-4">
</div>   -->
<div class="col-sm-2">
  <a href="https://techfest.org/twmun/accommodation" style="text-decoration: none;border: 2px solid white;padding: 5px;font-size: 20px;color: white" target="_blank">Proceed</a>
</div>
<div class="col-sm-4">
<p>Hotel Bluebells (Rs. 1000 For one day)</p>
      <img src="https://techfest.org/img/eventPage/tree1.png" style="width: 100%;height: 40vh;">
      <img src="https://techfest.org/img/eventPage/tree2.png" style="width: 100%;height: 40vh;">
</div>
<!-- <div class="col-sm-4">
      
</div>   -->
<div class="col-sm-1"></div>  
</div>
</div>

<!-- <div class="row">
  <div style="width: 40%;float: left;text-align: center;">
  <p>Hotel One, Amount 3 Days, 2300 </p>
  </div>
  <div style="float: left;width: 20%;border:2px solid transparent;">
  	
  </div>
  
  <div class="column" style="width: 40%;float: left;text-align: center;">
  <p>Hotel One, Amount 3 Days, 2300 </p>
  </div>
</div>
 -->


@endsection




