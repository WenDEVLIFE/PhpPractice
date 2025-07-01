<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>
<?php

// This is a varialbe or storing string
$txt = "你好 我是 Frouen!";

// integer variables
$x= 5;
$y= 5;

echo $x + $y;
echo $txt;

// var_dump is used to display structured information (type and value)
var_dump($x);


// the method below is used to display the type of variable
function myTest() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

$x = "Hello World!";
echo strtoupper($x);

$x = "Hello World!";
echo str_replace("World", "Dolly", $x);

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>
</body>
</html>