<!-- Convert object into array -->
<?php
class Car
{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Volvo");
echo var_dump($myCar);
echo "<br>";
$myCar = (array) $myCar;
var_dump($myCar);
echo "<br>";
echo $myCar["color"];
echo $myCar["model"];


$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

//To verify the type of any object in PHP, use the var_dump() function:
echo "<br>";
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);

// converting arrays to objects

$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Peter" => "35", "Ben" => "37", "Joe" => "43"); // associative array

$a = (object) $a;
$b = (object) $b;

var_dump($a);
var_dump($b);


?>