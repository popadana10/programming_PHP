<?php
// make a program which asks for a positive number from the user and prints all even positive numbers until the number given by the user
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positive numbers</title>
</head>
<body>
    <?php
    if (!is_numeric( $_POST['number'])) {
        echo 'It is not a number';
    } elseif ( $_POST['number']<= 0 ) {
        echo 'It is not a positive integer';
    } else {
        for ($i = 0; $i < $_POST['number']; $i = $i + 2) {
            echo $i, '<br>';
        }
    }
    ?>
</body>
</html>