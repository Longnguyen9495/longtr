<?php
    echo "<h3>Class Contants</h3>";
    /** Khai báo PI
     * Class MyClass
     */

    # Example 1
    class MyClass
    {
        const PI = 3.14159;

        function showPI() {
            echo self::PI . "<br>"; // thay vì dùng $this, ta thay bằng "self::"
        }
    }

    echo MyClass::PI . "<br>";
    $class = new MyClass();
    $class->showPI();
    echo $class::PI . "<br>"; // Show PI

    # Example 2

    /** In ra hằng số trong MyClasss
     * Class MyClasss
     * @return CONTSTANT
     */
    class MyClasss
    {
        const CONSTANT = 'constant value';

        function showConstant() {
            echo  self::CONSTANT . "\n";
        }
    }

    echo MyClass::CONSTANT . "\n";

    $classname = "MyClass";
    echo $classname::CONSTANT . "\n"; // in ra CONSTANT

    $class = new MyClass();
    $class->showConstant();

    echo $class::CONSTANT."\n"; // As of PHP 5.3.0
?>