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
echo $GLOBALS["p"];
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


?>



<html>

<body>

    <form method="post"
          action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text"
               name="fname"
               placeholder="Enter Text">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = htmlspecialchars($_REQUEST['fname']);
        $name = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    }


    ?>

</body>

</html>