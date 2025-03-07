<?php
// while loop

$i = 1;
while ($i <= 10) {
    echo $i;
    echo "<br/>";
    $i++;
}

// do whole loop

$i = 1;

do {
    echo "<br/>";
    echo $i;
    $i++;
} while ($i < 6);

// for loop

for ($x = 0; $x <= 10; $x++) {
    echo "<br/>";
    echo "The number is: $x <br>";
}
?>