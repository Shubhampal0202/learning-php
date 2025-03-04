<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 5;
    function myTest()
    {
        echo "<p>Variable x inside function is: $x</p>"; // can't use global variable inside a function
    }
    myTest();

    echo "<p>Variable x outside function is: $x</p>";
    ?>

</body>

</html>