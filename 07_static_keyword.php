<!DOCTYPE html>
<html>

<body>

    <?php
    function myTest()
    {
        static $x = 0; // variable x will not destroy after execution of function is finished.
        echo $x;
        $x++;
    }

    myTest();
    echo "<br>";
    myTest();
    echo "<br>";
    myTest();
    ?>

</body>

</html>