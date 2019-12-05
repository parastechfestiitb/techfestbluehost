@extends('kannu.eventLayer')

@section('title')

Registeration Successfull

@endsection

@section('style')
<style>
body{font-family: 'Pirulen';}

.content{
font-family: 'Pirulen';
  padding-left: 40px;
  padding-right: 40px;
    width: 60%;
    position: absolute;
    top:50%;
    left: 50%;
    transform:translate(-50%,-50%);
    background-color: rgba(256,256,256,0.1);
    font-family: 'Pirulen';
    color: white;
    text-align: center;
  }

.card {
  font-family: 'Pirulen';
  background: rgba(255, 255, 255, 0.34);;
  border-radius: 2px;
  display: inline-block;
  height: 70vh;
  margin: 1rem;
  position: relative;
  width: 70vw;
  margin-top: 2.2rem;
}


.card-1 {

  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgb(86, 86, 90), 0 10px 10px rgb(86, 86, 90);
}


  @media (min-width: 62em){
    body {

    -webkit-user-select: text;
    -khtml-user-select: text;
    -moz-user-select: text;
    -o-user-select: text;
    user-select: text;
    }

}


</style>
<script src="https://apis.google.com/js/platform.js" async defer></script>


@endsection


@section('content')


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=1086221628179602";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- <p class="content">Hello</p> -->

<div class="row">
  <div class="col-sm-12 col-xs-12">
    <div class="card card-1">

              <h2 style="text-align: center;">Hey There, </h2>
              <h5 style="text-align: center;">You have Been Successfully Registered</h5>

              <h5 style="text-align: center;">A Confermation mail will be sent to you shortly </h5>

              <h5 style="text-align: center;">Hope to see you at Techfest | IIT Bombay. <br>
              Be there from 29th to 31st December. </h5>

              <h3>
                So you want your friends to participate too,
              </h3>
              <p>   Refer Friends and get a chance to win VIP tickets for Techfest.
              </p>

<h5>share you participation on social media with your Ticket ID and Be the hero</h5>
              <div>
                <div class="col-sm-4">
                  <g:plusone size="tall" href="http://techfest.org/workshops"></g:plusone>
                </div>
                <div class="col-sm-4">

                  <div class="fb-share-button" data-href="http://techfest.org/workshops" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Ftechfest.org%2Fworkshops&amp;src=sdkpreparse">Share</a></div>

                </div>
                <div class="col-sm-4">
                  <a class="twitter-share-button"
  href="https://twitter.com/intent/tweet?text=Hello%20world #techfest via @Techfest_IITB"
  data-size="large" hashtags="techfest workshops" rel="me">
Tweet</a>

                </div>


              </div>

    </div>

  </div>
  <div class="col-sm-6 col-xs-12"><div class="card card-1"></div></div>
</div>


 
@endsection




