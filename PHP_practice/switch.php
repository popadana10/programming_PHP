<?php

$country = "Romania";

switch ($country) {
    case "Romania":
        echo "You live in Romania";
        break;
    case "Finland":
        echo "You live in Romania";
        break;
    case "USA":
        echo "You live in USA";
        break;
    default:
        echo "I don't know where you live";
}

// Write a PHP script that takes a day of the week as input and prints out a message based on the day.

$input = 'Monday';

switch ($input) {
    case "Monday":
        echo "It's Monday, the start of the week!";
        break;
    case "Tuesday":
        echo "Today is Tuesday. Have a great day!";
        break;
    case "Wednesday":
        echo "Today is Wednesday. Have a great day!";
        break;
    case "Thursday":
        echo "Today is Thursday. Have a great day!";
        break;
    case "Friday":
        echo "TGIF! It's Friday, time to relax!";
        break;
    case "Saturday":
        echo "Today is Saturday. Have a great weekend!";
        break;
     case "Sunday":
        echo "Today is Sunday. Have a great weekend!";
        break;
    default:
        echo "I don't what day is today.";
}

?>