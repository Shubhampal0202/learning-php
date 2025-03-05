<!DOCTYPE html>
<html>

<body>

    <!-- Diff b/t single and double quotes -->

    <?php
    $x = "world";
    echo "hello $x";
    echo "<br/>";
    echo 'hello $x';

    // strlen() function
    echo "<br/>";
    echo strlen("Hello");
    // str_word_count() function 

    echo "<br/>";
    echo str_word_count("Hello world");

    // strpos() function 

    echo "<br/>";
    $str = "My name is Shubham Pal";
    echo strpos($str, "Shubham");
    ?>

    <!-- string modification -->

    <?php
    $x = "Hello World!";
    echo "<br/>";
    echo strtoupper($x);
    ?>

    <?php
    $x = "Hello World!";
    echo "<br/>";
    echo strtolower($x);
    ?>

    <?php
    $x = "Hello World!";
    echo "<br/>";
    echo str_replace("World", "Shubham", $x);
    ?>

    <?php
    $x = "Hello World!";
    echo "<br/>";
    echo strrev($x);
    ?>

</body>

</html>