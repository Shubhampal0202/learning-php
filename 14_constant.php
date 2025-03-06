<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
const name = "Shubham";
echo "<br/>";
echo name;
if (true) {

    define("x", " Aman");
    echo x;
    // const y = "Ankit"; const cannot be created inside another block scope
}
define("arr", ["harsh", "Rishav", "viru"]);
echo "<br/>";
echo arr[0];
const arr1 = ["harsh", "Rishav", "viru"];
echo "<br/>";
echo arr1[1];
// arr1[1] = "hello"; cant update 
$arr2 = ["ram", "Shyam", "ghanshyam"];
print_r($arr2);
$arr2[2] = "rohan";
print_r($arr2);
// constants are automatically global;

define("GREETINGS", "Welcome to W3Schools.com!");
echo "<br/>";
const a = 12;

function myTest()
{
    echo GREETINGS;
    echo "<br/>";
    echo a;
}

myTest();