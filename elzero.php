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

    print-r shows object as array
    var_dump() shows type is it int or string to sure that same type you want as base donner
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
        // it is recommended to name the constants in all uppercase letters.
        //access a constant from outside the class  const LEAVING_MESSAGE = "Thank you for bying this phone";
        //can access a constant from inside the class echo self::LEAVING_MESSAGE;

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


    //F
    echo "<br>";
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

        private $lock;

        /*Encapsulation access modifiers
        public the property or method can be accessed from everywhere
        privet can't change $lock value only insid function changLock($lo)
        protected the method can be accessed within the class and by classes derived from that class

        */

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

        public function changLock($lo){
            $this->lock = sha1($lo);
        }

    }
    $iphon6plus = new samsungDevice();

    //change properties with parametre
    $iphon6plus->changeSpecification("2gb", "5 inch", "32gb", "gold");
    $iphon6plus->changLock("123456");

    //
    echo print_r($iphon6plus);

    echo "<br>";
    echo $iphon6plus->Ram;
    echo "<br>";
    echo $iphon6plus->inch;
    echo "<br>";
    echo $iphon6plus->space;
    echo "<br>";
    echo $iphon6plus->color;
    echo "<br>";
    //Fatal error: Uncaught Error: Cannot access private property samsungDevice::$lock in
    //echo $iphon6plus->lock;


    //
    $iphon7plus = new samsungDevice();
    $iphon7plus->changeSpecification("4gb", "5.5 inch", "64gb", "black");
    echo print_r($iphon7plus);

    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

    ?>

    <!--==================ex3======================-->
    <?php
    class samsung {

        //properties
        public $Ram ;
        public $inch ;
        public $space ;
        public $color ;
        public $name ;

        public function changeSpecification($r , $in , $sp , $co)
        {
            $this->Ram = $r ;
            $this->inch = $in;
            $this->space = $sp;
            $this->color = $co;
        }
        public function sayHello($n)
        {
            $this->name = $n;
            echo "Welcom To " .$n ."<br>";
        }

    }

    class sony extends samsung {

        //properties same as samsung plus ca,era and sould assing a value
        public $camera = '25mb';

        //all method and properties are messing, exetend keyword inport from samsung
        //.
        //.
        //Overriding Inherited Method is by redefining the methods (use the same name) in the child class
        public function sayHello($n)
        {
            $this->name = $n;
            echo "Welcom To " .$n . " and this phone has ". $this->Ram ." Ram <br>";
        }
        //The final keyword to prevent class inheritance or to prevent method overriding.
        //final public function.. or final class samsung

    }
    //declare object
    $samsungS = new samsung();

    //apply functions
    $samsungS->changeSpecification("2gb", "5 inch", "32gb", "gold");
    $samsungS->sayHello("samsung");

    echo print_r($samsungS);
    echo "<br>";

    //declare object
    $sonyX = new sony();

    //apply functions
    $sonyX->changeSpecification("2gb", "5 inch", "32gb", "gold");
    $sonyX->sayHello("sony");
    ///you creat a property has anything with any class and only in sonyX object
    $sonyX->price = '$400';

    echo print_r($sonyX);
    echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";

    ?>

</body>

</html>