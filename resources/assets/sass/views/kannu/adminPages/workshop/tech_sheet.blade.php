<html>
    <title>DO NOT COME HERE</title>
    
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-81222017-1', 'auto');
  ga('send', 'pageview');
</script>


    <head>
        <style>
            
            
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:75vh;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}

        </style>
    </head>
    <body>
        <section>
  <!--for demo wrap-->
  <h1>Techfest IIT Bombay</h1>
  
   @if($req->workshop_list=="accomodationdatasheet");
   <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>UID</th>
          <th>Team ID</th>
          <th>Compi</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
          <th>Gender</th>
          <th>Accomodation</th>
          <th>Tshirt</th>
          <th>Payment</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          
        </tr>
      </thead>
      <tbody>
    @foreach ($boys as $boy)
        <tr>
          @foreach ($boy as $k)
          <td>{{$k}}</td>
          @endforeach
        </tr>
    @endforeach
   
      </tbody>
    </table>
  @elseif($req->workshop_list=="workshop_count");
   <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>Table Name</th>
          <th>Count</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          
        </tr>
      </thead>
      <tbody>
    @foreach ($boys as $boy)
        <tr>
          @foreach ($boy as $k)
          <td>{{$k}}</td>
          @endforeach
        </tr>
    @endforeach
   
      </tbody>
    </table>
    
  @else
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>TeamID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Mobile</th>
           <!-- <th>College</th> -->
            <!-- <th>Year</th> -->
          <th>City</th>
          <th>TimeStamp</th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
    @foreach ($boys as $boy)
        <tr>
          <td>{{$boy->id}}</td>
          <td>{{$boy->event_id}}</td>
          <td>{{$boy->name}}</td>
          <td>{{$boy->email}}</td>
          <td style="text-align:right;">{{$boy->phone}}</td>
          <td>{{$boy->city}}</td>
          <td>{{$boy->timestamp}}</td>
        </tr>
    @endforeach
   
      </tbody>
    </table>
  @endif
  </div>
</section>


<script>
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();

</script>

    </body>
</html>