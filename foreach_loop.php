<?php

$colors = array("red", "blue", "green", "yellow");

/* for($i = 0; i < count($colors); $i++) {
    print $colors[$i]."\n";

}
?>
*/

// for each item in "$colors", we know them as "$color" (one at a time)
foreach($colors as $color) {
    print $color."\n";
}
?>