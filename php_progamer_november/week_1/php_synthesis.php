<?php
    // Php example
    echo '<h3>Php Variable</h3>';
    // Variable: String, integer, float
        $varialbeString = 'My name is Long';
        $variableInteger = 1995;
        $variableFloat = 96.69;
        echo "String is : $varialbeString <br/>";
        echo "Integer is : $variableInteger <br/>";
        echo "Float is : $variableFloat <br/>";
    // Variable Tính toán đơn giản (cộng, trừ, nhân, chia, trung bình cộng...)
        $x = 10;
        $y = 5;
        $sum = $x + $y;
        $brand = $x - $y;
        $avg = ($x + $y)/2;
        echo "Sum is $sum<br/>";
        echo "Brand is $brand<br/>";
        echo "Avg is $avg<br/>";
    echo '<h3>$ & $$</h3>';
    /** Khai báo $ là một biến bình thường lưu trữ các giá trị như string, integer, float
       Khai báo $$ là một biến khai báo trong đó có giá trị của $ bên trong nó */
        $x = 'long';
        $$x = 200;
        echo $x.'<br/>';
        echo $$x.'<br/>';
        echo $long.'<br/>';
    echo '<h3>Php constants</h3>';
    // Php constants
        # define($name,$value,case-insensitive)
            define("name",'Nguyễn Thành Long',true);
            echo name.'<br/>';
            echo NAME.'<br/>';
        # const
            const PI = 3.14;
    echo '<h3>Php Magic constants</h3>';
    /** Có 8 kiểu magic constants
         * __line__ in số dòng hiện tại
         * __class__ in tên của lớp cần truy xuất
         * __dir__   in đường dẫn
         * __namespace__ in tên đại điện
         * __trait__ in tên đặc tính
         * __method__  in tên phương thức
         * __function__ in tên chức năng
         * __file__ in tên thư mục
     */
        include  'exercise/php-magic-line,file,dir.php';
        include  'exercise/php-magic-constants function,class,.php';
        include  'exercise/php-magic-trait, method , namespace.php';
    echo '<h3>Php Data type</h3>';
    // có 8 kiểu data
        $name = 'Số 102 Thái Thịnh - Đống Đa, Hà Nội'; // kiểu string
        $number = 1999; // kiểu integer
        $numberFloat = 19.6; // kiểu float
        $foo = true or false;
        echo $foo; // kiểu boolean
        $arrayProduct = array('black', 'white', 'red', 'ping'); // kiểu array
        $foe = null; // Kiểu null
        echo '<br>';
        class getValue
        {
            function get()
            {
                return 'Hello, My name is';
            }
        }
        $getinfo = new getValue();
        echo $getinfo->get(); // kiểu object
    echo '<h3>Php Operators</h3>';
    echo '<h3>Php Comments</h3>';
     // khai báo phổ thông của C++
     #  khai báo đơn dòng
    /**  khai báo nhiều dòng
        * Thành phần bên trong
     */




