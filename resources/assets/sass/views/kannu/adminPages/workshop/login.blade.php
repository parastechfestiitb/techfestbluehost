<!DOCTYPE html>
<html lang="en">
<head>
	<title>Make Workshop</title>
	<meta charset="utf-8">
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-81222017-1', 'auto');
  ga('send', 'pageview');
</script>

	<style type="text/css" media="screen">
		fieldset{
			margin-bottom: 50px;
		}
	</style>
</head>
<body>
	<form action="/admin/workshop" method="POST" accept-charset="utf-8">
		{{csrf_field()}}
		<fieldset>
			<legend>Account Validation</legend>
			<input type="password" name="password" placeholder="password" style="width:100%">
		</fieldset>
		<fieldset>
			<legend>Type Of Action</legend>
			<input type="radio" name="typeOfEvent" value="createNew" onclick="createEven()">Create New<br>
			<input type="radio" name="typeOfEvent" value="showAll" onclick="showEvent()">Show All<br>
		</fieldset>
		<fieldset id="createNew">
			<legend>Create New Event</legend>
			<input type="text" name="eventNames" placeholder="Event Name">
			<input type="text" name="eventCode" placeholder="Event Code">
			<input type="number" name="eventCount" placeholder="Event Count">
		</fieldset>
		<fieldset id="showAll">
			<legend>Show All</legend>
			<input type="text" name="eventName" placeholder="Event Name">
		</fieldset>
		<input style="float:right;padding:20px" type="Submit" name="submit" value="Proceed">
	</form>
	<script type="text/javascript" charset="utf-8" defer>
		document.getElementById('createNew').style.display='block';
		document.getElementById('showAll').style.display='none';
		var createEven = function(){
			document.getElementById('createNew').style.display='block';
			document.getElementById('showAll').style.display='none';
		}
		var showEvent = function(){
			document.getElementById('createNew').style.display='none';
			document.getElementById('showAll').style.display='block';
		}
	</script>
</body>
</html>