<!DOCTYPE html>
<html>

<body>


    <?php
    echo "Hello <br/>";
    echo ("Hello");

    ?>


    <?php
    $text1 = "Learning php";
    $text2 = "W3Schools.com";
    echo "<h1>$text1</h1>";
    echo "<h3> Study PHP at $text2</h3>";
    ?>
    <!-- using single quotes -->
    <?php
    $text1 = "Learning php";
    $text2 = "W3Schools.com";
    echo '<h1>' . $text1 . '</h1>';
    echo '<h3> Study PHP at ' . $text2 . '</h3>';
    ?>

    <!-- using print -->

    <?php
    print "Hello";
    print "<br/>";
    print("Hello");
    ?>
    <?php
    $text1 = "Learning php";
    $text2 = "W3Schools.com";
    print "<h1>$text1</h1>";
    print "<h3> Study PHP at $text2</h3>";
    ?>

    <?php
    $text1 = "Learning php";
    $text2 = "W3Schools.com";
    print "<h1>$text1</h1>";
    print "<h3> Study PHP at $text2</h3>";
    ?>
</body>

</html>