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
}

strong {
  color: #333;
}

#wrapper {
  width: 100%;
  max-width: 600px;
  margin: 0 auto;
  text-align: center;
  padding: 30px 0;
}

.page-head-image img {
  border-radius: 50%;
}

#form-trabalhe {
  margin-top: 30px;
  text-align: left;
}

label {
  font-weight: normal;
  margin-top: 15px;
}

input {
  border: 2px solid #CCC !important;
  height: 35px;
  border-radius: 3px;
  max-width: 100%;
}

.input-group-addon {
  border: 2px solid #CCC !important;
  border-right: 0px !important;
}

.btn {
  border: 0;
  border-radius: 3px;
  margin-top: 20px;
}

.form-group {
  margin-bottom: 0;
  text-align: left;
}


	</style>
</head>
<body>
<div class="container">
<p style="text-align: center;"><strong>
Ask Your Question </strong>
</p>
</div>

<div id="wrapper" class="container">


    <form id="form-work" class="" name="form-work" action="/ask" method="POST">
      {{ csrf_field() }}
      <fieldset>
        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="name"> Name: </label>
            <input type="text" name="name" class="form-control" placeholder="Full Name" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-6">
            <label class="control-label" for="Email"> Email ID: </label>
            <input name="email" class="form-control" placeholder="Email" type="text" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <label class="control-label" for="team_id"> Question </label>
            <textarea class="form-control" name="question" type="text" placeholder="Your Question here" required></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary btn-lg btn-block info">Submit</button>
          </div>
        </div>
      </fieldset>
    </form>
</div>
<!-- <p style="text-align: center;"><strong>FOR ORGANISERS CERTIFICATION, VISIT :</strong> <a href="http://techfest.org/eCerti/orgi">http://techfest.org/eCerti/orgi</a></p> -->

</body>
</html>


