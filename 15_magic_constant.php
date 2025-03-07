<?php

class Fruits
{
    public function myValue()
    {
        return __CLASS__;
    }
}
$kiwi = new Fruits();
echo $kiwi->myValue();
echo "<br/>";
echo __DIR__;

echo "<br/>";
echo __FILE__;

function myValue()
{
    return __FUNCTION__;
}
echo "<br/>";
echo myValue();

echo "<br/>";
echo __LINE__;

class Car
{
    public function run()
    {
        return __METHOD__;
    }
}
$car1 = new Car();
echo "<br/>";
echo $car1->run();
?>