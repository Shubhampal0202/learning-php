<?php
$t = 14;

if ($t < 20) {
    echo "Have a good day! <br/>";
}


$a = 200;
$b = 33;
$c = 500;

if ($a > $b && $a < $c) {
    echo "Both conditions are true";
}


$t = date("H");
echo "<br/>";
var_dump($t);
echo "<br/>";
if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
$marks = 60;
if ($marks >= 90) {
    echo "<br/>";
    echo "outstanding";
} else if ($marks >= 70) {
    echo "<br/>";
    echo "Excellent";
} else if ($marks >= 60) {
    echo "<br/>";
    echo "good";
} else {
    echo "<br/>";
    echo "average";
}

$a = 13;

if ($a > 10) {
    echo "<br/>";
    echo "Above 10";
    if ($a > 20) {
        echo " and also above 20";
    } else {
        echo " but not above 20";
    }
}