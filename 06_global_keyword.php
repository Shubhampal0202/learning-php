<!DOCTYPE html>

<html>

<body>
    <?php

    $x = 10;
    $y = 20;
    $z = 50;
    function myTest()
    {
        global $x, $y; // using global keyword we can use global variables inside a function.
        echo $x + $y;
        $x = $x + $y;
        echo "<br/>";
        echo $GLOBALS['z'];
        $GLOBALS['z'] = 500; // update global variable inside a function
    }
    myTest();
    echo "<br/>";
    echo $x;
    echo "<br/>";
    echo $z;
    ?>
</body>

</html>