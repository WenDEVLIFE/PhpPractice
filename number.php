<?php 

// This is a variable or storing numbers
$a = 5;
$b = 5.34;
$c = "25";

// Check if the variable is an integer
var_dump($a);
var_dump($b);
var_dump($c);

// Check if the variable is a number or numeric string
$x = 5985;
var_dump(is_int($x));

// Check if the variable is a float
$x = 59.85;
var_dump(is_int($x));

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;

?>