<!DOCTYPE html>
<html>

<body>
    <!-- String -->
    <?php
    $x = "Hello world!";
    $y = 'Hello world!';

    var_dump($x);
    echo "<br>";
    var_dump($y);
    ?>

    <!-- Interger -->
    <?php
    $x = 5985;
    echo "<br>";
    var_dump($x);
    ?>

    <!-- Float -->

    <?php
    $x = 10.365;
    echo "<br>";
    var_dump($x);
    ?>

    <!-- Boolean -->

    <?php
    $x = true;
    echo "<br>";
    var_dump($x);
    ?>


    <!-- Array -->
    <?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "<br>";
    var_dump($cars);
    ?>


    <!-- Object -->

    <?php
    class Car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return "My car is a $this->color $this->model !";
        }
    }
    $car1 = new Car("black", "BMW");
    echo "<br/>";
    echo $car1->message();
    echo "<br/>";
    var_dump($car1);
    ?>


    <!-- Null -->
    <?php
    $x = "Hello world!";
    $x = null;
    echo "<br/>";
    var_dump($x);
    ?>

</body>

</html>