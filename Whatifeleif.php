<?php 
if ( 5>3){
    echo "5 is greater than 3";
} else {
    echo "5 is not greater than 3";
}


// if statement
$t = 14;

if ($t < 20) {
  echo "Have a good day!";
}

$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c ) {
  echo "Both conditions are true";
}

// if statement with multiple conditions
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}


// short-hand if statement
$a = 5;

if ($a < 10) $b = "Hello";

echo $b;


// nested if statements
$abc = 13;

if ($abc > 10) {
  echo "Above 10";
  if ($abc > 20) {
    echo " and also above 20";
  } else {
    echo " but not above 20";
  }
}

?>