<?php
$a = 10;
$s = (int)$a; // I am telling to change this variable to integer all the time
var_dump($a); // tells you info about the type of variable --> for example in this case will say int(10) which means that the variable is an integer
echo is_float($a); // will return 0/ not true
echo is_int($a); // will return 1/ true

?>