<?php
// $a = 10;
/*
if ($a == 10) {
    echo 'The value is 10';
} 
*/

/*
if($a == 10):
 echo 'The value is 10';
endif;
*/

/*
// this is the standard syntax
if($a == 10) {
    echo 'Correct vale';
} else {
    echo 'Incorrect value';
}
*/

/*
if($a == 10):
    echo 'The value is 10';
else: 
    echo 'Correct vale';
endif;
echo 'Incorrect value';
*/

/*
$age = 18;

if($age < 18) {
    echo 'The age is'. $age . '. Not an adult yet.';
} elseif($age == 18){
    echo 'The age is'. $age . '. Just reached the adult age.';
} else 
     echo 'The age is over'. $age . 'and is adult';

*/
// Exercise: create a program that checks whether a given number is positive, negative or 0.

$number = 0;

function checkNumber ($number) {
    if ($number > 0) {
    echo $number . 'is a positive number.';
} elseif ($number < 0) {
    echo $number . 'is a negative number.';
} else {
    echo 'The value is 0.';
  }
}
checkNumber(10);
checkNumber(0);
checkNumber(-20);
?>