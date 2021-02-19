<!DOCTYPE html>
<html>
<head>
	<title></title>
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/movie.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fluid">
	<u>
<h2>Sanitizing a form</h2>
</u>
	<form class="form-inline" action="assign.php" method="POST">
		<div class="form-group">
		<label>name:</label>
		<input type="text" placeholder="name" class="form-control" name="name">
	</div>
			<div class="form-group">
			<label>contact no:</label>
		<input type="" placeholder="contact no" class="form-control" name="contact_no">
	</div>
			<div class="form-group">
			<label>email address:</label>
		<input type="text" placeholder="email address" class="form-control" name="email_address">
	</div>
	<input type="submit" class="btn btn-primary" name="submit" value="submit">
	</form>
</div>
<?php


if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$name = filter_var($name, FILTER_SANITIZE_STRING);
	echo ("$name is a valid name");
	echo "<br>";
	$contact =  $_POST["contact_no"];
	
if (filter_var($contact, FILTER_VALIDATE_INT) === 0707955352 || !filter_var($contact, FILTER_VALIDATE_INT) === false) {
  echo("$contact");
} else {
  echo("Integer is not valid");
}	
	echo "<br>";
	$email =  $_POST["email_address"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}	
}



?>
</body>
</html>