<?php
echo PHP_INT_MAX;
echo "<br/>";
echo PHP_INT_MIN;
echo "<br/>";
echo PHP_INT_SIZE; // 8
echo "<br/>";
echo var_dump(is_int(12));
echo "<br/>";
echo var_dump(is_int("12"));
echo "<br/>";
echo PHP_FLOAT_MAX;
echo "<br/>";
echo PHP_FLOAT_MIN;
echo "<br/>";
echo PHP_FLOAT_EPSILON;
echo "<br/>";
echo PHP_FLOAT_DIG;
echo "<br/>";
echo var_dump(is_float(12.32));

$x = 1.9e411;
echo "<br/>";
echo var_dump(is_finite($x));

$x = acos(4);
echo "<br/>";
var_dump($x);

$x = 5985;
echo "<br>";
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
echo $x;
echo "<br>";
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));

// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo "<br>";
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
$int_cast = (float)$x;
echo $int_cast;