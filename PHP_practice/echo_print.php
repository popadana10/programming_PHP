<?php
// echo is used to get output on the screen, has no value, takes multiple arguments
// print also gets output on the screen, has value of 1, takes only one argument
// echo is faster than print and more used

echo 'My country is Romania';
echo ('My country is Romania');
echo '<h1>Romania</h1>';
echo 'Romania', 'is', 'my country'; // here are more arguments

print 'My country is Romania';
print ('My country is Romania');
print '<h1>Romania</h1>';
// print 'Romania', 'is', 'my country'; // here it won't work because it doesn't take more than 1 argument

?>