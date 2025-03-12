<?php
$x = 10;
function myFunction()
{
    echo $GLOBALS['x'];
}
myFunction();
echo "<br/>";
function myFunc()
{
    $GLOBALS["p"] = 100;
    
}

myFunc();
echo $p;
echo "<br/>";
echo $p . "<br/>";


// PHP - $_SERVER

echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

echo "<hr/>";
$x = 75;
$y = 60;
$z = "Shubham";

function myfunc2()
{
    echo $GLOBALS["x"];
    echo $GLOBALS["y"];
    echo $GLOBALS["z"];
}

myfunc2()


?>