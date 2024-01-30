Task 2: A bit more challenge

Make a program that prints all positive numbers that are smaller than 100 and even, in this order: 2 98 4 96 6 94... Print result in one line.

<?php
$min = 2;
$max = 98;


while ($min <= 98) {
    if ($min % 2 == 0) { // if the reminder of $min divided by 2 is equal to 0
        print $min . " ";
        print $max . " ";
    }
    $min += 2;
    $max -= 2;
}
?>