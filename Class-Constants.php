<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    class Goodbye
    {
        const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
    }

    echo Goodbye::LEAVING_MESSAGE;
    ?>

    <?php
    class wlecom
    {
        const LEAVING_MESSAGE = "Thank you for entering W3Schools.com!";
        public function byebye()
        {
            echo self::LEAVING_MESSAGE;
        }
    }

    $wlecomSir = new wlecom();
    $wlecomSir->byebye();
    ?>
</body>

</html>