<!DOCTYPE html>
<html>
<head>
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
<div style="text-align: center;" class="container container-fluid">
	<div class="alert alert-info">
		<u>
			<h1>LOG IN</h1>
		</u>
		<p style="color: red;">Your employee number is your username and your ID number is your password</p>
		<form class="form-inline" method="POST" action="log.php">
			<div class="form-group">
		<label>Username:</label>
		<input type="text" class="form-control" placeholder="username" name="user_name"><br><br>
	</div>
	<div class="form-group">
		<label>Password:</label>
		<input type="text" class="form-control" placeholder="Password" name="pass_word"><br><br>
	</div>
	<br><br>
		<a href="mang.html">
		<input title="make sure all details are correctly filled" type="submit" class="btn btn-primary" value="submit" name="submit">
		</a>
		<a href="cre.html">
		<p style="text-align: right;">CREATE NEW ACCOUNT</p>
		</a>
	</form>
	</div>
</div>
<footer>
			<p style="text-align: center;">copyright of cocktailtech hub</p>
	<p style="text-align: center;">you can contact us at 0707955352 or email us at cocktailtechhub@gmail.com</p>
	</footer>
	<?php
if (isset($_POST["submit"])) 

$username =test_input ($_POST["user_name"]);
echo "username:" . $username;
echo "<br>"
$password =test_input ($_POST["pass_word"]);
echo "password:" . $password;



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

</body>
</html>