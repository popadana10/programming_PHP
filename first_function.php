<?php

function firstFunction() {
    print "Hello World!\n";
}

firstFunction();


function hello_person($name) {
    // global $foo; --- try to make your program work wwithout using global
    print "Hello $name!\n";
}

hello_person("Dana");

// print $name;//won't work. it's undefined 

function double_number($number) {
    if (is_numeric($number)) {
        return 2 * $number;
    }
    return 0;
}

print double_number(5); 
print double_number("foobar"); 