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
        public function setOwnerName()
        {
            if (strlen($this->ownerName) > 3) {
                echo "Owner Name Can Not Depass 3 Chars";
            } else {
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
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

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
        public function changeSpecification($r, $in, $sp, $co)
        {
            //psudo is fake if the propertie not exist this not exist ether
            $this->Ram = $r;
            $this->inch = $in;
            $this->space = $sp;
            $this->color = $co;
        }

        public function changLock($lo)
        {
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

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    ?>

    <!--==================ex3======================-->
    <?php
    class samsung
    {

        //properties
        public $Ram;
        public $inch;
        public $space;
        public $color;
        public $name;

        public function changeSpecification($r, $in, $sp, $co)
        {
            $this->Ram = $r;
            $this->inch = $in;
            $this->space = $sp;
            $this->color = $co;
        }
        public function sayHello($n)
        {
            $this->name = $n;
            echo "Welcom To " . $n . "<br>";
        }
    }

    class sony extends samsung
    {

        //properties same as samsung plus ca,era and sould assing a value
        public $camera = '25mb';

        //all method and properties are messing, exetend keyword inport from samsung
        //.
        //.
        //Overriding Inherited Method is by redefining the methods (use the same name) in the child class
        public function sayHello($n)
        {
            $this->name = $n;
            echo "Welcom To " . $n . " and this phone has " . $this->Ram . " Ram <br>";
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
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    ?>


    <!--==================ex4======================-->
    <?php
    /*
    Classe Abstraction
    cannot creat object from
    made for other classes to inhert prop and methods from
    class to register new user, method each user say hi to him and other method ckek if password is correct..

    can hav abstract method and non abstract method
    */

    abstract class makeDevice
    {
        public $lastName;
        public function sayHi()
        {
            echo 'say hi';
        }

        //abstract function can't have body
        //and made to force you to use it*
        abstract public function testPerformance();
        abstract public function verifyOwner();
        abstract public function sayWelckom($n);
    }
    class iphone extends makeDevice
    {
        public $Owner;
        //must includ all three functions
        //if abstract fu public you can use only public if privet you can use all three if protected you can use protected and private
        public function testPerformance()
        {
            echo 'performance is Good 100%';
        }
        public function verifyOwner()
        {
            echo 'owner is verified';
        }
        public function sayWelckom($s)
        {
            $this->Owner = $s;
            echo 'welcome ' . $s;
        }
    }
    class ipad extends makeDevice
    {
        public $Owner;
        //must includ all three functions
        public function testPerformance()
        {
            echo 'performance is Good 100%';
        }
        public function verifyOwner()
        {
            echo 'owner is verified';
        }
        public function sayWelckom($X)
        {
        }
    }
    $Promax = new iphone();
    $Promax->sayWelckom('ossama');
    echo '<br>';
    echo print_r($Promax);
    echo '<br>';

    $ipadAir = new ipad();
    echo print_r($ipadAir);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>


    <?php
    /*
        Magic Methods - Construct, Destruct
        Magic Methods - call????
        Magic Methods - get, set???????
        Magic Methods - clone????

        __Construct excuted start when you creat you object

        __Destruct called when object is destroyed
        methiods like delet file or make disconnect from database

        */
    class mi
    {
        public $name;

        //there is no function name
        //when i creat object happens what insid that function wihtout executed under
        //CALL IT INSID OBJECT BECAUSE THERE IS NO FUNCTION NAME
        public function __construct($n)
        {
            $this->name = $n;
            echo 'function is created <br>';
            echo 'hello' . $n . '<br>';
        }
    }
    $tablte = new mi('Oussama');
    print_r($tablte);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>

    <?php
    /*
    Interfaces Polymorphism 

    Interface are similar to abstract classes(made for other classes to inhert prop and methods from)
    Interfaces cannot have properties, while abstract classes can
    All interface methods must be public, while abstract class methods is public or protected
    All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary

    When one or more classes use the same interface,
    have methods without body code
    Interfaces allow you to specify what methods a class should excut.

    */
    interface DBconnect
    {
        public function getUsers();
        public function getArticales();
        public function showStatus();
    }

    class MySQL implements DBconnect
    {
        public $name;

        public function getUsers()
        {
            echo 'SELECT * FROM users';
        }

        public function getArticales()
        {
            echo 'SELECT * FROM articles';
        }

        public function showStatus()
        {
            echo 'SELECT * FROM status';
        }
    }

    class oracle implements DBconnect
    {
        public $name;

        public function getUsers()
        {
            echo 'GET FROM Users';
        }

        public function getArticales()
        {
            echo 'GET FROM articles';
        }

        public function showStatus()
        {
            echo 'GET FROM Status';
        }
    }

    $row = new MySQL();
    $row->getUsers();
    $row->getArticales();
    $row->showStatus();
    print_r($row);
    echo '<br>';

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>



    <?php
    /*
    Traits
    PHP only supports single inheritance: a child class can inherit only from one single parent.
    Traits are used to declare methods that can be used in multiple classes
    and the methods can have any access modifier (public, private, or protected).

    cannot extend  or implement 
    cannot instantiate
    can have methods
    have property over class

    */
    class LG
    {
        public $feature1;
        public $feature2;
    }
    class nokia
    {
        public $feature3;
        public $feature4;
    }
    class infinix
    {
        public $feature5;
        public $feature6;
    }

    class newPhone extends nokia
    {
    }


    $thisphone = new newPhone();
    print_r($thisphone);
    echo '<br>';
    echo '<br>';


    ///////////////////////////////
    trait fingerPrint
    {
        public function fingerFeatur()
        {
            echo 'have fingerprint';
        }
    }

    trait threeDTouch
    {
        public function threeD()
        {
            echo ' have three dimension touch';
        }
    }

    trait faceDetect
    {
        public function faceFeature()
        {
            echo ' detect face';
        }
    }

    class ipadPro
    {
        use fingerPrint;
        use threeDTouch;
        use faceDetect;

        function sayBy()
        {
            echo ' say by';
        }
    }

    class ipadAir
    {
        //hase only face detect
        use faceDetect;
    }
    class ipadX
    {
    }

    $ipadPro = new ipadPro;
    print_r($ipadPro);
    $ipadPro->fingerFeatur();
    $ipadPro->threeD();
    $ipadPro->faceFeature();
    $ipadPro->sayBy();
    echo "<br>";

    $ipadAir = new ipadAir;
    print_r($ipadAir);
    $ipadAir->faceFeature();
    echo "<br>";

    $ipadX = new ipadX;
    print_r($ipadX);

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>


    <?php
    /*
    Static Properties and Methods

    Static Properties and Methods used to acces properties / methods in evrywere
    Declaring class Properties or Methods as Static Makes Them Accessible Without Needing an Instantiation of the Class.

    Static Method
    To access a static method use the class name ,, double colon (::) ,, and the method name:
    the Pseudo-Variable $this is not Available Inside the Method Declared as Static. cause this return on object you creat and there is no object

    */

    //A class can have both static and non-static methods. 
    //A static method can be accessed from a method in the same class using the self keyword and double colon (::)
    class greeting
    {
        public static function welcome()
        {
            echo "Hello World!";
        }

        public function __construct()
        {
            self::welcome();
        }
    }

    new greeting();

    //Static methods can also be called from methods in other classes. To do this, the static method should be public
    class A
    {
        public static function welcome()
        {
            echo "Hello World!";
        }
    }

    class B
    {
        public function message()
        {
            A::welcome();
        }
    }

    $obj = new B();
    echo $obj->message();


    /*
    
    */
    //To access a static property use the class name, double colon (::), and the property name:
    class pi
    {
        public static $value = 3.14159;
    }

    // Get static property
    echo pi::$value;

    //A static property can be accessed from a method in the same class using the self keyword and double colon (::):
    class ci
    {
        public static $value = 3.14159;
        public function staticValue()
        {
            return self::$value;
        }
    }

    $ci = new ci();
    echo $ci->staticValue();
    echo '<br>';

    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    ?>

    <?php
    /*
    Namespace (space)
    They allow for better organization by grouping classes that work together to perform a task

    They allow the same name to be used for more than one class

    it is possible to have nested namespaces
    <?php namespace Code\Html; ?>

    */
    require 'Htmlsapce.php';

    //namespace\classname in requires files
    $jssapce = new html\Htmlsapce();
    print_r($jssapce);
    $jssapce->sayhaallo();

    ?>
</body>

</html>