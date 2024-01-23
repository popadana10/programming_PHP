<?php

/* Write a function called boolToString which returns string value "true" or "false" based on boolean input. */

//examples: 

function checkAge($age) {
    if (is_numeric($age) && $age >= 18 && $age < 120) {
        return TRUE;
    } else {
        return FALSE;
    }  
}

function boolToString($bool) {
    if ($bool) {
        return'true';
    }
    return'false';
}

print "Age 25" . boolToString(checkAge(25)) . "\n"; // true
print "Age -2" . boolToString(checkAge(-2)) . "\n"; // false
print "Age 12" . boolToString(checkAge(12)) . "\n"; // -"-false 
print "Age XL" . boolToString(checkAge(123456)) . "\n"; // -"- true 
print "Age 12" . boolToString(checkAge("12")) . "\n";