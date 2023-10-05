<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //To access a static property use the class name, double colon (::), and the property name:
    class pi
    {
        public static $value = 3.14159;
    }

    // Get static property
    echo pi::$value;

    //A static property can be accessed from a method in the same class using the self keyword and double colon (::):
    class mi
    {
        public static $value = 3.14159;
        public function staticValue()
        {
            return self::$value;
        }
    }

    $mi = new mi();
    echo $mi->staticValue();
    echo '<br>';

    ?>
</body>

</html>