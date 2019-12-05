<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Update the Notification portal here with count, First one will appear on the Top</h2>
  <form class="form-inline" action="/admin/notify" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}" >

   <div class="form-group">
      <label for="id">ID:</label>
      <input type="text" class="form-control" id="id" placeholder="Enter Rank(1,2,3) " name="id">
    </div>

    <div class="form-group">
      <label for="line">Line:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Tag line" name="line">
    </div>

    <div class="form-group">
      <label for="line">Second Line:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Tag line" name="lineName">
    </div>

    <div class="form-group">
      <label for="line">Line Link:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter Second line Link" name="lineLink">
    </div>


    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>








</body>
</html>
