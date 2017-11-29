<?php
    echo "<h3>Constructors and Destructors</h3>";
    // Constructors Cũng là một hàm khởi tạo bình thường, nhưng có đặc điểm là luôn luôn đc gọi tới khi ta khởi tạo một đối tượng

    /** Khởi tạo một hàm với text bất kì
     * Class MyClass
     */
    class A {
        // hàm khởi tạo Constructors
        function __construct() {
            echo 'Lớp A được khởi tạo <br/>';
        }

        // show function
        function show()
        {
            echo 'Lớp A đang được sử dụng <br/>';
        }

        // Hàm hủy Destructors
        function __destruct() {
            echo 'Lớp A bị hủy  <br/>';
        }
    }

    // Chương trình
    $a = new A();
//    $a->show();

?>


