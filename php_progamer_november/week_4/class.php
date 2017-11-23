<h1>Class</h1>
<?php
class MyClass {
    // defining a property
    public $myProperty = 'a property value';

    // defining a method
    public function display() {
        echo $this->myProperty;
    }
}

$var = new MyClass();
$var->display();
?>
<h1>Visibility</h1>
<?php
class MyClasss{
    public $var1 = 'public var';
    protected $var2 = 'protected var';
    private $var3 = 'private var';

    function printHello() {
        echo $this->var1 . '<br>';
        echo $this->var2 . '<br>';
        echo $this->var3 . '<br>';
    }
}

$obj = new MyClasss();
echo $obj->var1 . '<br>'; // prints public var
$obj->printHello(); // prints all

// if uncommented followings will produce fatal errors
/*
* echo $obj->var2; // Fatal Error
* echo $obj->var3; // Fatal Error
*/
