<?php
    echo "<h3>Final Keyword</h3>";
    /** Final keyword : ngăn ngừa việc ghi đè của lớp con bằng cách thêm tiền tố cuối. nếu nó được định nghĩa cuối thì không được mở rộng
     */

    echo '<br>';

    echo "<h3>Example 1</h3>";

    class Objectclass
    {
        public function number()
        {
            echo "Objectclass::number() called\n";
        }
        public function numberFinal()
        {
            echo "Objectclass::numberFinnal() called\n";
        }
    }
    class Oppclass extends Objectclass
    {
        public function testNumber()
        {
            echo "Oppclass::testNumber() called\n";
        }
    }

    echo '<br>';

    echo "<h3>Example 2</h3>";

    //decorator must inherit the interface(the methods, type info etc.) //of the decorated class by *extending* it.
//    class FooDecorator extends Foo
//    {
//        private $foo;
//
//        public function __construct(Foo $foo)
//        {
//            $this->foo = $foo;
//        }
//
//        public function doFoo()
//        {
//            $result = $this->foo->Foo();
//            // ... customize result ...
//            return $result;
//        }
//    }
//
//    function fooFoo(Foo $f) {}
//    $f = new Foo;
//    $fd = new FooDecorator($f);
//
//    var_dump($fd instanceof $f); //true
//    fooFoo($fd); //no E_RECOVERABLE_ERROR here;


    echo '<br>';

    echo "<h3>Example 3</h3>";
    /** Thiết lập trường khóa với lớp con không thể ghi đè
     *
     */
    class TestA
    {
        public function getNumberTest()
        {
            echo "TestA::getNumberTest() called\n";
        }
        public function getTextTest()
        {
            echo "TestA::getTextTest() call\n";
        }
    }
    class TestB extends TestA
    {
        public function getAll()
        {
            echo "TestB::getAll called\n";
        }
    }
    $test = new TestB();
    print_r($test->getAll());
