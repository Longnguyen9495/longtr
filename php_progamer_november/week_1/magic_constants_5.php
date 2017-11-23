<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 
<?php
    // Có 8 kiểu magic constants


    // __line__ in số dòng hiện tại
    echo "<h3>Example for __line__</h3>";
    echo "You are at line number " . __line__ . "<br></br>";

    // __file__ in đường dẫn tuyệt đối của file đang chạy hiện tại.
    echo "<h3>Example for __file__</h3>";
    echo "You are at line number " . __file__ . "<br></br>";

    // __dir__ in thư mục chứa file PHP đang chạy
    echo "<h3>Example for __dir__</h3>";
    echo "You are at line number " . __dir__ . "<br></br>";

    // __function__ in tên hàm đang được thực thi
    echo '<h3>Magic constants function</h3>';
    function testfunction(){
        echo 'ten cua ban la' . __function__ . "<br><br>";
    }
    testfunction();
    function test(){
        echo 'xin chao nguyen thanh long';
    }
    test();
    echo __function__ . '<br><br>';

    // __class__ in tên class đang được gọi
    echo "<h3>Example for __CLASS__</h3>";
    class abc
    {
        public function __construct() {
            ;
        }
        function abc_method(){
            echo __CLASS__ . "<br><br>";//print name of the class abc.
        }
    }
    $t = new abc;
    $t->abc_method();
    class first{
        function test_first(){
            echo __CLASS__;//will always print parent class which is first here.
        }
    }
    class second extends first
    {
        public function __construct() {
            ;
        }
    }
    $t = new second;
    $t->test_first();

    // __trait__ in tên đặc tính
    echo "<h3>Example for __TRAIT__</h3>";
    trait created_trait{
        function abc(){
            echo __TRAIT__;//will print name of the trait created_trait
        }
    }
    class anew{
        use created_trait;
    }
    $a = new anew;
    $a->abc();

    // __method__  in ra tên phương thức trong một lớp (class). Đồng thời xác định phương thức đó thuộc class nào
    echo "<h3>Example for __METHOD__</h3>";
    class meth{
        public function __construct() {
            echo __METHOD__ . "<br><br>";//print meth::__construct
        }
        public function meth_fun(){
            echo __METHOD__;//print meth::meth_fun
        }
    }
    $a = new meth;
    $a->meth_fun();

    // __namespace__ in Lấy ra tên namespace đang được thực thi.
    echo "<h3>Example for __NAMESPACE__</h3>";
    class name{
        public function __construct() {
            echo 'This line will be printed on calling namespace';
        }
    }
    $clas_name= __NAMESPACE__ .'\name';
    $a = new $clas_name;
?>

</body>
</html>


