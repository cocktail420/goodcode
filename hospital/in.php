 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container container-fluid">
<div class="alert alert-info">
	<u>
	<h2><i>In patient records</i></h2>
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
		<form class="form-inline" action="in.php" method="POST">
			<div class="form-group">
		<label>first name:</label>
		<input type="text" class="form-control" placeholder="first name" name="first_name">
	</div>
	<div class="form-group">
		<label>last name:</label>
		<input type="text" class="form-control" placeholder="last name" name="last_name">
	</div>
	<div class="form-group">
		<label>Address:</label>
		<input type="text" class="form-control" placeholder="Address" name="address">
	</div>
	<div class="form-group">
		<label>Age:</label>
		<input type="text" class="form-control" placeholder="Age" name="age"><br><br>
	</div>
	<div class="form-group">
		<label>patient no.:</label>
		<input type="text" class="form-control" placeholder="patient no." name="patient_no">
	</div>
	<a href="doc.html">
		<input type="submit" class="btn btn-primary" name="submit" value="submit"> 
		</form>
		
</a>
	
</div>	
</div>
<footer>
			<p style="text-align: center;">copyright of cocktailtech hub</p>
	<p style="text-align: center;">you can contact us at 0707955352 or email us at cocktailtechhub@gmail.com</p>
	</footer>
	<?php


if (isset($_POST["submit"])) {
	
	$firstname = $_POST["first_name"];
	echo "firstname:" . $firstname ;
	echo "<br>";
	$lastname = $_POST["last_name"];
	echo "lastname:" . $lastname ;
	echo "<br>";
	$address = $_POST["address"];
	echo "addresss:" . $address ;
	echo "<br>";	
	$age= $_POST["age"];
	echo "age:" .$age;
	echo "<br>";

	$patientno= $_POST["patient_no"];
	echo "patient no:" .$patientno;
	echo "<br>";
	
	
	
}

?>
	

</body>
</html>