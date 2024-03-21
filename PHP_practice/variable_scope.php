<?php
/*
$age = 30; // global scope
//this will give error because the variable is defined outside the function
function myAge () {
    // echo $age;
}
myAge();
echo $age; // this will work because it is outside the function
*/

/*
function myAge() {
    $age = 30; // local scope
    echo $age;
}
myAge();
echo $age; // will show error because the variable is defined locally
*/

/*
$age = 30; 
function myAge () {
    global $age; // global keyword
    echo $age;
  // echo $GLOBALS['age']; // can be called this way as well
}
myAge();
*/

function myAge() {
    static $age = 0; // static keyword 
    echo $age; 
    $age++; // $age = $age + 1; --> 0 + 1 = 1
}
myAge(); // 0
myAge();// 1 // this won't work without the static and the output would be 0
?>