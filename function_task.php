<?php
/* 

Write a function called checkAge which will return  true if the age is equal or over 18.
Otherwise returns false.

*/


function checkAge($age) {
    if (is_numeric($age) && $age >= 18 && $age < 120) {
        return TRUE;
    } else {
        return FALSE;
    }  
}

print "Age 25" . checkAge(25) . "\n"; // true
print "Age -2" . checkAge(-2) . "\n"; // false
print "Age 12" . checkAge(12) . "\n"; // -"-false 
print "Age XL" . checkAge(123456) . "\n"; // -"- true 
print "Age 12" . checkAge("12") . "\n";