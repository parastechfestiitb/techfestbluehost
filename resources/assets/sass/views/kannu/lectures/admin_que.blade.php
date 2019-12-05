<!DOCTYPE html>
<html>
<head>
	<title>Lectures | Techfest IIT Bombay</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, user-scalable=no">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	<style type="text/css">

		body {
  font-family: 'Open Sans', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 300;
}

p {
  color: #999;
  text-align: left;
}

strong {
  color: #333;
}

#wrapper {
  width: 100%;
  max-width: 600px;
  padding: 30px 0;
  margin-left: 40px;
  margin-right: 10px;
}
	</style>
</head>
<body>
<div id="wrapper" class="container">
  @foreach($ques as $que)
  <div class="row">
    <div class="col-md-12">
      <p>{{$que->id}}. {{$que->name}}</p>
      <p>Q:{{$que->question}}</p>
    </div>
  </div>
  @endforeach
</div>
<!-- <p style="text-align: center;"><strong>FOR ORGANISERS CERTIFICATION, VISIT :</strong> <a href="http://techfest.org/eCerti/orgi">http://techfest.org/eCerti/orgi</a></p> -->

</body>
</html>


