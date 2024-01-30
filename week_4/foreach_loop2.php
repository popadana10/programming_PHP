<?php

$student_grades = array(
    "Alice" => 85,
    "Bob" =>  90,
    "David" => 88,
    "Charlie" => 75
);

foreach($student_grades as $student => $grade) {
    print "$student: $grade\n";
}

?>