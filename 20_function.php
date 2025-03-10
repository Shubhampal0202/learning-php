 <!-- how to create a function -->


 <?php

    function myFunc()
    {
        echo "Hello from myFunc";
    }

    myFunc();

    // Passing parameter to a function

    function calc($a, $b)
    {
        return $a + $b;
    }
    echo "<br/>";
    echo calc(10, 12);

    // Passing Arguments by Reference

    function add_five(&$value)
    {
        $value += 5;
        echo "<br/>";
        echo $value;
        echo "<br/>";
    }

    $num = 2;
    add_five($num);
    echo $num;

    // PHP Default Argument Value

    function sum($a, $b = 5)
    {
        return $a * $b;
    }
    echo "<br/>";
    echo  sum(2, 5);
    echo "<br/>";
    echo  sum(10);

    // Variable Number of Arguments

    function accum($a, ...$rest)
    {
        $sum = $a;
        foreach ($rest as $val) {
            $sum += $val;
        }
        return $sum;
    }
    echo "<br/>";
    echo accum(1, 2, 3, 4, 5);
    ?>