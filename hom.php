<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php


	$x = 1;

while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
	
for ($x=1; $x <=100 ; $x++) { 
	echo "cocktail-dev " .$x;

}
echo "<br>";
$maths =  20;
$eng =  200;
$cre=200;
$sum = $maths + $eng + $cre;
$average = $sum/3;
if ($average<=50) {
	echo "good";
	}
		elseif ($average<=100) {
			echo "best";
		}
	
else
	echo "perfect";
?>





</body>
</html>
