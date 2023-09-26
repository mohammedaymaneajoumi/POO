<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    /*
    variable inside class = properties 
    class user properties has as email usernanme password / methods as log in log out add artical remove artical
    variable outside class = variable

    [->] object operator
    [public, privet, protected] visibility markers
    [$this] psudo variable use Inside the class
    */

    class appelDevice
    {

        //properties
        public $Ram;
        public $inch;
        public $space;
        public $color;
        public $ownerName;

        //constants
        const  chip = 'A9';
        const ownerLastNmae = 10;


        /*mehtodes or function in php
        public function functioNmae(){
        }
        */
        public function getSpecification()
        {
            //psudo is fake if the propertie not exist this not exist ether
            echo 'this iphone Ram Is: ' . $this->Ram . '<br>';
        }
        public function setOwnerName(){
            if(strlen($this->ownerName) > 3){
                echo "Owner Name Can Not Depass 3 Chars";
            }else{
                echo "Your Name Has Been Set";
            }
        }

    }
    //Objects are created using the new keyword.
    $iphon6plus = new appelDevice();

    //change properties
    $iphon6plus->Ram = "16gb";
    $iphon6plus->inch = "5 inch";
    $iphon6plus->space = "32gb";
    $iphon6plus->color = "gold";

    //F
    $iphon6plus->getSpecification();
    echo var_dump($iphon6plus);

    echo "<br>";

    $iphon7plus = new appelDevice();
    $iphon7plus->ownerName = "osdddd";
    echo var_dump($iphon7plus);

    echo "<br>";

    //F
    $iphon7plus->setOwnerName();

    //
    echo "<br>";
    echo appelDevice::ownerLastNmae;
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

    ?>

    <!--==================ex2======================-->
    <?php
    class samsungDevice
    {

        //properties
        public $Ram;
        public $inch;
        public $space;
        public $color;


        /*mehtodes or function in php
        public function functioNmae(){
        }
        */
        public function changeSpecification($r , $in , $sp , $co)
        {
            //psudo is fake if the propertie not exist this not exist ether
            $this->Ram = $r ;
            $this->inch = $in;
            $this->space = $sp;
            $this->color = $co;
        }
        
    }
    $iphon6plus = new samsungDevice();

    //change properties with parametre
    $iphon6plus->changeSpecification("2gb", "5 inch", "32gb", "gold");

    //
    echo var_dump($iphon6plus);

    echo "<br>";

    $iphon7plus = new samsungDevice();
    $iphon7plus->changeSpecification("4gb", "5.5 inch", "64gb", "black");
    echo var_dump($iphon7plus);



    ?>
</body>

</html>