<?php
// How to create an array.

$arr = ["Shubham", "Rohit", "Mohan"];
print_r($arr);
echo "<br/>";
$arr = array("Shubham", "Rohit", "Mohan");
echo var_dump($arr);


function myFunction()
{
    echo "Hello from myFunc <br/>";
}
$myArr = array("Shubham", 25, ["Aman", "Ankit"], "myFunction");

$myArr[3]();

// counting the length of the array;
$items = ["Rishav", "Harsh", "Ankit"];
echo count($items) . "<br/>";

// Indexed array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
echo "<br/>";

// Access Indexed Arrays
echo $cars[0] . "<br/>";
echo $cars[1] . "<br/>";
echo $cars[2] . "<br/>";

// change array items
$cars[1] = "Ford";
var_dump($cars);
echo "<br/>";

// Loop on indexed array 


foreach ($cars as $x) {
    echo "$x <br/>";
}
for ($x = 0; $x < count($cars); $x++) {
    echo "$cars[$x] <br/>";
}

// push an element in an array;
echo array_push($cars, "Thar"); // returns the new length of the array
echo "<br/>";
var_dump($cars);

$cars = [];
$cars[5] = "Volvo";
$cars[7] = "BMW";
$cars[14] = "Toyota";

array_push($cars, "Ford");
echo "<br/>";
var_dump($cars);
echo $cars[0]; // it will give the warning(Undefined array key 0 )



// Associative array 
$car = ["name" => "Ford", "model" => "Mustang", "year" => 1994];
var_dump($car);
echo "<br/>";
print_r($car);
echo "<br/>";
echo $car["model"];

$car["year"] = 2025;
echo "<br/>";
var_dump($car);

foreach ($car as $key => $data) {
    echo $key . " : " . $data . "<br/>";
}


$cars = [
    0 => "Volvo",
    1 => "BMW",
    2 => "Toyota"
];


var_dump($cars);
echo "<br/>";
echo $cars[0];
echo $cars[1];
echo $cars[2];
echo "<br/>";

$cars = [
    "0" => "Volvo",
    "1" => "BMW",
    "2" => "Toyota"
];

var_dump($cars);
echo "<br/>";
echo $cars[0];
echo $cars[1];
echo $cars[2];


function myFunc()
{
    echo "<br/> I came from function";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => "myFunc");

$myArr["message"]();

// update array elements
$myArr = ["Shubham", "Aman", "Rohit"];

foreach ($myArr as &$x) {
    $x = "Ankit";
}
// still &$x having the reference of last array item
unset($x);
echo "<br/>";
var_dump($myArr);

// without using unset 

$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
    $x = "Ford";
}

$x = "ice cream";

var_dump($cars);

// Add Array Item

// $cars = ["Brand"=>"Ford","Model"=>"Mustand","Color"=>"Red"];
$cars = ["Volvo", "Ford", "Toyota"];
$cars[] = "Mahindra";
echo "<br/>";
var_dump($cars);

// Add multiple elemennts
array_push($cars, "Shubham", "Aman");
echo "<br/>";
var_dump($cars);

$cars = ["Brand" => "Ford", "Model" => "Mustand", "Color" => "Red"];
echo "<br/>";
var_dump($cars);
$cars["year"] = 1964;
echo "<br/>";
var_dump($cars);

// Add multiple items in associative array
$cars =  ["Brand" => "Ford", "Model" => "Mustand"];
$cars += ["Color" => "Blue", "years" => 2024];
echo "<br/>";
var_dump($cars);
echo "<hr/>";

// splice method
$cars = ["Volvo", "BMW", "Toyota"];
array_splice($cars, 1, 1);
echo "<br/>";

var_dump($cars);
echo "<br/>";

array_push($cars, "BMW", "Mercedes", "Tata");
var_dump($cars);
array_splice($cars, 1, 3);
echo "<br/>";
var_dump($cars);
echo "<br/>";
$count = [1, 2, 3, 4, 5];
$newCount = array_diff($count, [1, 2, 3]);
var_dump($newCount);
$cars = array("Volvo", "BMW", "Toyota");
echo "<br/>";
echo "<hr/>";
array_pop($cars);
var_dump($cars);

$cars = array("Volvo", "BMW", "Toyota");
echo "<br/>";
echo "<hr/>";
array_shift($cars);
var_dump($cars);


// Sort Array in Ascending Order - sort()

$cars = ["VOLVO", "BMW", "TOYOTA"];
sort($cars);
$cLength = count($cars);
echo "<br/>";
for ($x = 0; $x < $cLength; $x++) {
    echo $cars[$x];
    echo "<br/>";
}
// $arr = ["Shubham", "aman", 55, 102, 88, 1, 20,"Rishav","harsh",97];
$arr = ["Shubham", "37", 100];
sort($arr);
$arrLength = count($arr);
for ($x = 0; $x < $arrLength; $x++) {
    echo $arr[$x];
    echo "<br/>";
}

$age = array("Peter" => "Shubham", "Ben" => "37", "Joe" => 100);
asort($age);

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}


$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
ksort($age);

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}

// Multi dimentional array 

$cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
);

echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";
echo $cars[1][0] . ": In stock: " . $cars[1][1] . ", sold: " . $cars[1][2] . ".<br>";
echo $cars[2][0] . ": In stock: " . $cars[2][1] . ", sold: " . $cars[2][2] . ".<br>";
echo $cars[3][0] . ": In stock: " . $cars[3][1] . ", sold: " . $cars[3][2] . ".<br>";


$mulArr = [[10, 20, 30], [100, 200, 300, 400]];
for ($x = 0; $x < count($mulArr); $x++) {
    for ($y = 0; $y < count($mulArr[$x]); $y++) {
        echo $mulArr[$x][$y];
        echo "<br/>";
    }
}