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


function myFunc(){
    echo "<br/> I came from function";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => "myFunc");

$myArr["message"]();