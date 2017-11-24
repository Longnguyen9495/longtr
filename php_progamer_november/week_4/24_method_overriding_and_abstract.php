<?php
    echo "<h3>Method overriding</h3>";
    echo '<pre>';
    // Là quá trình phân lớp xác định lại phương thức lớp cha để thay đổi hành động

    /** Thêm giá trị trong phương thức của aMethod trong class kế thừa
     * Class A
     */
    class A {
        function aMethod() {
            return "aMethod from A";
        }
    }

    class B extends A {
        function aMethod() {
            return "aMethod from B, ".'<br>'. parent::aMethod();
        }
    }

    $a = new A;
    echo($a->aMethod());
    echo('<br>');
    $b = new B;
    echo($b->aMethod());

    echo "<h3>Abstract Class</h3>";
    // là một lớp trừu tượng, không thể được khởi tạo, chỉ được kế thừa
    /** Cấu chúc chung của Abstract class

        abstract class MyAbstractClass {
            abstract function myAbstractFunction() {
            }
        }

     */

    # Example 1

    abstract class Aset{
        abstract protected function aMethod();

        public function doSomething(){
            $this->aMethod();
        }
    }
    class Bset extends Aset{
        protected function aMethod(){
            echo 'aMethod called';
        }
    }

    $b = new Bset();
    $b->doSomething();

    echo '<br>';

    # Example 2

    /** Tạo lớp trừu tượng AbstractClass
     * Class AbstractClass
     */
    abstract class AbstractClass
    {
        // Force Extending class to define this method
        abstract protected function getValue();
        abstract protected function prefixValue($prefix);

        // Common method
        public function printOut() {
            print $this->getValue() . "\n";
        }
    }

    class ConcreteClass1 extends AbstractClass
    {
        protected function getValue() {
            return "ConcreteClass1";
        }

        public function prefixValue($prefix) {
            return "{$prefix}ConcreteClass1";
        }
    }

    class ConcreteClass2 extends AbstractClass
    {
        public function getValue() {
            return "ConcreteClass2";
        }

        public function prefixValue($prefix) {
            return "{$prefix}ConcreteClass2";
        }
    }

    $class1 = new ConcreteClass1;
    $class1->printOut();
    echo $class1->prefixValue('FOO_') ."\n";

    $class2 = new ConcreteClass2;
    $class2->printOut();
    echo $class2->prefixValue('FOO_') ."\n";
?>