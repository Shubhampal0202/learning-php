<!DOCTYPE html>
<html>

<Sbody>

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
    $upr = strtoupper($x);
    echo $x;
    echo "<br/>";
    echo $upr;
    ?>

    <?php
    $x = "Hello World!";
    echo "<br/>";
    $low = strtolower($x);
    echo $x;
    echo "<br/>";
    echo $low;
    ?>

    <?php
    $x = "Hello World!";
    echo "<br/>";
    $newStr = str_replace("World", "Shubham", $x);
    echo $newStr;
    echo "<br/>";
    echo $x;
    ?>

    <?php
    $x = "Hello World!";
    echo "<br/>";
    $strRev = strrev($x);
    echo $strRev;
    echo "<br/>";
    echo $x;
    ?>

    <?php
    $x = "    Hello World! ";
    $trimedStr = trim($x);
    echo "<br/>";
    echo "<input value='$x'/>";
    echo "<br/>";
    echo "<input value='$trimedStr'/>";
    ?>

    <!-- Convert string into an array -->
    <?php
    $str = "Hello World";
    $arr = explode(" ", $str);
    echo "<br/>";
    echo $arr[0];
    echo "<br/>";
    echo $arr[1];
    echo "<br/>";
    print_r($arr);

    ?>

    <!-- String Concatenation -->
    <?php
    $x = "Hello";
    $y = "World";
    $z = $x . " " . $y;
    echo "<br/>";
    echo $z;
    ?>

    <?php
    $x = "Hello";
    $y = "World";
    $z = "$x $y";  // using double quotes
    echo "<br/>";
    echo $z;
    ?>
    <?php
    $x = 5;
    $y = 10;
    $z = "$x . $y";
    echo "<br/>";
    echo $z;
    ?>

    <!-- slicing a string -->
    <?php
    $x = "Hello World!";
    $newStr =  substr($x, 6, 5);
    echo "<br/>";
    echo $newStr;
    echo "<br/>";
    echo $x;
    ?>
    <?php
    $str = "Hello World";
    $newStr = substr($str, 6); // start index to end
    echo "<br/>";
    echo $newStr;
    echo "<br/>";
    echo $str;
    ?>
    <?php
    $x = "Hello World!";
    echo "<br/>";
    echo substr($x, -5, 3); // negative index also exist. The last character has index -1
    ?>

    <?php
    $x = "Hi, how are you?";
    echo substr($x, 5, -3);  //  if length is negative number => element select from index 5 to index -3
    ?>

    <!-- Escape Character -->
    <?php
    echo "<br/>";
    $x = "We are the so-called \"Vikings\" from the north.";
    echo $x;
    ?>

</Sbody>

</html>