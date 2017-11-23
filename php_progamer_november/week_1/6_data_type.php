<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 
<?php
    echo '<h3>Php Data type</h3>';
    echo '<pre>';
    // có 8 kiểu data


    // kiểu string
    $name = 'Số 102 Thái Thịnh - Đống Đa, Hà Nội';

    echo 'Kiểu String :'.$name.'<br/>';

    echo '<br>';
    // kiểu Integer
    $number = 1999;

    echo 'Kiểu Integer :'.$number.'<br/>';

    echo '<br>';
    // kiểu float
    $numberFloat = 19.6;

    echo 'Kiểu Float :'.$number.'<br/>';

    echo '<br>';
    // Kiểu boolen

    $foo = true or false;
    echo 'Kiểu boolean : '.$foo.'<br/>';

    echo '<br>';

    // kiểu array
    echo 'Kiếu Array'.'<br/>';
    $arrayProduct = array('black', 'white', 'red', 'ping');
    $arrayProductNumber = array('black'=>1000,'white'=>2000,'red'=>4000, 'ping'=>8000);
    $arrayInfomation['long'] = array("name"=>"long","birthday"=>1995,"love"=>"guitar");

    print_r($arrayProduct);

    print_r($arrayProductNumber);

    print_r($arrayInfomation['long']);

    echo '<br>';
    // Kiểu null
    $foe = null;

    echo '<br>';

    // Kiểu object
    echo 'Kiểu Object'.'<br/>';
    /**
     * Lấy giá trị trong function get()
     * @param string
     * @return string
     */
    # Example 1
    class getValue
    {
        function get()
        {
            return 'Hello, My name is';
        }
    }
    $getinfo = new getValue();
    echo $getinfo->get();
    # Example 2
    class GetInfomation
    {
        public $name;
        public $year;
        public $job;
        function __construct($name, $year, $job)
        {
            $this->name = $name;
            $this->year = $year;
            $this->job = $job;
        }

        function hello()
        {
            return "Hello, my name is $this->name, year is $this->year,my job is $this->job ";
        }
    }

    $say = new GetInfomation('long',24,'IT');
    echo $say->hello();
?>

</body>
</html>


