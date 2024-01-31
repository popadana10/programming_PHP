ask 1: Let’s start with the basic case again

Make a program that prints all positive numbers that are even and smaller than 100 starting from 2. (2 4 6 8 10...)

<?php

for($i = 2; $i <= 100;) {
  if($i % 2 == 0) {
     print $i . " ";
  } 
  $i += 2;
}
?>