<?php
$txt = "is the best student in coding and innovative at all";
echo "vinny" . $txt .  "<br>";
echo "";
$string=234674;
echo "234674";
echo "<br>";
$x = 5;
$y = 10;
echo $x + $y;
$cars= array("mazda","volvo","bmw");
echo "<br>";
echo "cars";
echo "<br>";
$txt = "cocktail is a member of a strong society that deals with hacking and tracking lost websites and applications";
echo "$txt";
$x = 5;
$y = 12;
echo "<br>";
echo $x * $y;
$a = 100;
$b =20;
echo $a / $b;
$txt = "Brilliant qoutes by cocktail...@stay at your place and play your position";
echo "<br>";
echo "$txt";
echo "<br>";
echo "<br>";
$m = 10;
$h = 30;
$e = 60;
$total = $m + $h + $e;
$average = $total/3;
echo $average . "%";
echo "<br>";
if ($average >= 60 ) {
	echo "you got 1 division";
}
elseif ($average >= 50) {
	echo "you got second division";
}
elseif ($average >= 35) {
	echo "you got third division";
}
else {
	echo "failed";
	echo "<br>";
}

//form in php
$french ='';
$french ='';
$french ='';
$sum ='';
$average= '';
 if (isset($_post{'save'})) {
 	# code...
 	$french =$post {'french'};
 	$french =$post {'french'};
 	$french =$post {'french'};
 	$sum = $french + $french + $french; 
 	$avaerage = $sum/3;
 	echo "<h1>" . $avaerage. "<h1>" ;
 	
 }
//arrays in php
$cars = array("bmw", "volvo" , "caldina");
echo count ($cars);
echo "" . $cars[2];
echo "<br>"
//loops
$x = 23;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
?>