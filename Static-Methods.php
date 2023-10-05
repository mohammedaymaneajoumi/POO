<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    ///
    class greeting {
    public static function welcome() {
        echo "Hello World!";
    }

    public function __construct() {
        self::welcome();
    }
    }

    new greeting();


    ///
    class A {
    public static function welcome() {
        echo "Hello World!";
    }
    }

    class B {
    public function message() {
        A::welcome();
    }
    }

    $obj = new B();
    echo $obj -> message();


    echo "<br>";echo "<br>";echo "<br>";echo "<br>";
    ?>
</body>
</html>