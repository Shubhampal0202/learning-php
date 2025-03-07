<!-- Arithmetic Operators -->

<?php
$x = 10;
$y = 20;
echo $x + $y;
echo "<br/>";
echo $x - $y;
echo "<br/>";
echo $x * $y;
echo "<br/>";
echo $x / $y;
echo "<br/>";
echo $x % $y;
echo "<br/>";
echo $x ** $y;

?>

<!-- Assignment Operators -->

<?php
$x = 10;
$y = 20;
$x += $y;
echo "<br/>";
echo $x . "<br/>";
$z = $y;
$z -= $x;
echo $z . "<br/>";
$x *= $y;
echo $x . "<br/>";

?>

<!-- Comparison Operators -->
<?php
$x = 10;
$y = 20;
$z = "10";
echo var_dump($x == $y);
echo "<br/>";
echo var_dump($x == $z);
echo "<br/>";
echo var_dump($x === $z);
echo "<br/>";
echo var_dump($x !== $z);
echo "<br/>";
echo var_dump($x >= $y);
echo "<br/>";
echo var_dump($x <=> $y);

?>

<!-- Increment / Decrement Operators -->

<?php
$x = 10;
$y = 20;
$a = 40;
echo "<br/>";
echo $x++;
echo "<br/>";
echo ++$y;

echo "<br/>";
echo $a--;
echo "<br/>";
echo --$a;
?>

<!-- Logical Operators -->

<?php
$x = 100;
$y = 50;
echo "<br/>";
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}

$x = 100;
$y = 50;
echo "<br/>";
if ($x == 100 || $y == 80) {
    echo "Hello world!";
}

$x = 100;
echo "<br/>";
if (!($x == 90)) {
    echo "Hello world!";
}
?>

<!-- String Operators -->
<?php
$txt1 = "Hello";
$txt2 = " world!";
echo "<br/>";
echo $txt1 . $txt2;

$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo "<br/>";
echo $txt1;
?>

<!-- Conditional Assignment Operators -->
<?php
$status = (empty($user)) ? "anonymous" : "logged in";
echo "<br/>";
echo $status;
echo "<br/>";
$user = "Shubham";
$status = (empty($user)) ? "anonymous" : "logged in";
echo $status;

$user = "Shubham" ?? "Aman";
echo "<br/>";
echo $user;

$user = null ?? "Aman";
echo "<br/>";
echo $user;
?>