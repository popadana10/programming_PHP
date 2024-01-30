Task 1: The basic case of looping through numbers

Make a program that prints all positive numbers that are odd and smaller than 100 starting from 1. (1 3 5 7 9 11...)

<?php

$i = 1;

while ($i < 100) {
    if ($i % 2 != 0) { // if the reminder of $i divided by 2 is not equal to 0
        print $i . " ";
    }
    $i += 2;
}
?>
