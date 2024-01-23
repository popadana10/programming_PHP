<?php

// sort


$customerAges = [1, 2 , 3, 4, 5, 6, 7, 8, 9];

$customers_sorted = $customerAges;
sort($customers_sorted);


$last = count($customer_sorted);

// print var_dump($customer_sorted);
print "Youngest is $customers_sorted[0] years old.";
print "Oldest is $customers_sorted[$last] years old.";