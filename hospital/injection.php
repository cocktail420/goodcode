<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/wagwan.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="jumbotron">
<div class="alert alert-danger">
	<u>
	<h3 style="text-align: center;">The injection Room</h3>
	</u>
	<div style="text-align: center;">
			<label>Search:</label>
		<input type="text" placeholder="patient no:" name="">
		<button class="btn btn-primary">SUBMIT</button>
		</div>
		<br>
		<div style="text-align: center;">
			<label>Search:</label>
		<input type="text" placeholder="patient name:" name="">
		<button class="btn btn-primary">SUBMIT</button>
		</div>
		<form class="form-inline" action="injection.php" method="POST">
			<div class="form-group">
<label>first name:</label>
		<input type="text" class="form-control" placeholder="first name" name="first_name">
	</div>
	<div class="form-group">
		<label>last name:</label>
		<input type="text" class="form-control" placeholder="last name" name="last_name">
	</div>
	<div class="form-group">
		<label>type of injection:</label>
		<input type="text" class="form-control" placeholder="type of injection" name="type_of_injection">
	</div>
	<div class="form-group">
		<label>Age:</label>
		<input type="text" class="form-control" placeholder="Age" name="age"><br><br>
	</div>
	<div class="form-group">
		<label>patient no.:</label>
		<input type="text" class="form-control" placeholder="patient no." name="patient_no">
	</div>
		<br>
		<a href="doc.html">
		<input type="submit" class="btn btn-primary" name="submit" value="submit">
		</a>
		<p>!!SUBMIT IT TO THE CASH POINT THEN TO THE DOCTOR!!</p>
		<a href="cash.html">
		<input type="submit" class="btn btn-primary" name="submit" value="submit">
		
		</a>
	</form>
		
</div>	
</div>
<footer>
			<p style="text-align: center;">copyright of cocktailtech hub</p>
	<p style="text-align: center;">you can contact us at 0707955352 or email us at cocktailtechhub@gmail.com</p>
	</footer>
	<?php
if (isset($_POST["submit"])) {
$firstname = $_POST["first_name"];
echo "firstname:" .$firstname ;
echo "<br>";
$lastname = $_POST["last_name"];
echo "lastname:" .$lastname ;
echo "<br>";
$typeofinjection = $_POST["type_of_injection"];
echo "type of injection:" .$typeofinjection ;
echo "<br>";
$age = $_POST["age"];
echo "age:" .$age ;
echo "<br>";
$patientno= $_POST["patient_no"];
echo "patient no:" .$patientno ;
	
}
	?>

</body>
</html>