<html>

<head>
    <title>
        $_REQUEST
    </title>

<body>
    <form action="./23_$_request.php"
          method="post">
        <input type="text"
               placeholder="Enter Your name"
               name="user_name">
        <br />
        <input type="text"
               placeholder="Enter Your password"
               name="user_password">
        <button type="submit">Submit</button>
    </form>
    <?php
    
    if ($_REQUEST) {
        $name = $_REQUEST["user_name"];
        $password = $_REQUEST["user_password"];
        echo $name;
        echo "<br/>";
        echo $password;
    }



    ?>
</body>
</head>

</html>