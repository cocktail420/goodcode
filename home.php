<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
		<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/movie.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="conatiner container-fluid">
		<div class="jumbotron">
	
	<div id="#n">

			<img src="image/download.png">
	</div>
	<br>
	<br>
	<div id="#b">
	<div class="alert alert-info">
				<h5>Real and Reel.Buy one get two free</h5>
</div>
<a href="movie.html">
<button type="button" class="btn btn-primary">Back to Homepage</button>
</a>
<br>
<br>
<div class="row">
	
	<div class="col-lg-12">
		<form class="form-group" action="home.php" method="post">
			<div class="row">
				<div class="col-lg-6">
				<label>Movie Name</label>
				<input type="text"  class="form-control" placeholder="Movie Name" name="movie_name">	
				</div>
				<div class="col-lg-6">
				<label>Lead Actor</label>
				<input type="text"  class="form-control" placeholder="Lead Actor" name="lead_actor">	
				</div>
				<div class="col-lg-6">
				<label>Duration</label>
				<input type="text" class="form-control" name="time" placeholder="time">
					
				
				</div>
				<div class="col-lg-6">
				<label>Movie Poster</label>
				<div class="input-group">
    <span class="input-group-addon">Browse</span>

			
				<input  type="text"  class="form-control"  placeholder="Movie Poster">
					</div>
				</div>
				<div class="col-lg-6">
				<label>Rating</label>
				<input type="text"  class="form-control" placeholder="PG" name="PG">	
				</div>
				<div class="col-lg-6">
				<label>Genre</label>
				<input type="text"  class="form-control" placeholder="Action" name="Action">	
				</div>
				

				<div class="col-lg-6">
			<input type="submit" class="btn btn-primary btn-block"  value=" Submit "  name="submit">
		</div>
				
				
				<div  class="col-lg-6">
				<button class="btn btn-danger btn-block">Reset</button>
					
				
				</div>




			</div>
			
		</form>
	


	</div>
	<div class="col-lg-6">
		
	</div>
	
</div>

	
</div>

  
		</div>
		</div>
	</div>


</body>
</html>



	<?php


if (isset($_POST["submit"])) {
	
	$Moviename = $_POST["movie_name"];
	echo "MOVIENAME:" . $Moviename ;
	echo "<br>";
	$LeadActor = $_POST["lead_actor"];
	echo "leadactor:" . $LeadActor ;
	echo "<br>";
	$Duration = $_POST["time"];
	echo "Durations:" . $Duration ;
	echo "<br>";	
	$PG = $_POST["PG"];
	echo "Rating:" .$PG ;
	echo "<br>";

	$Action= $_POST["Action"];
	echo "Genre:" .$Action;
	echo "<br>";
	
	
	
}

?>