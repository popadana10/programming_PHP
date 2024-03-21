<?php
/*
define('AUTHOR_NAME', 'Dana Popa');
// define('AUTHOR_NAME', 'Dana'); // in the constant you can't have another value so this won't work
echo AUTHOR_NAME;
*/
define('cities', ['Helsinki', 'Bucharest']);
echo cities[0];
echo cities[1];

define('AUTHOR_NAME', 'Dana Popa');

function user_list() {
    echo AUTHOR_NAME;
}
user_list();

echo AUTHOR_NAME;
?>