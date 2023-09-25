<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        class Fruit
        {
            public $name;
            public $color;

            function __construct($name, $color)
            {
                $this->name = $name;
                $this->color = $color;
            }
            function get_name()
            {
                return $this->name;
            }
            function get_color()
            {
                return $this->color;
            }
        }

        $apple = new Fruit("Apple", "red");
        echo $apple->get_name();
        echo "<br>";
        echo $apple->get_color();
        ?>
    </div>
</body>

</html>