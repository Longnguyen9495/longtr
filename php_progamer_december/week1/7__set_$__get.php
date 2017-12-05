<?php
    echo "<h3>__set $ __get</h3>";
    # __set() : Xuất hiện khi ta truyền dữ liệu cho một thuộc tính không được phép truy cập
    # __get() : Xuất hiện khi ta lấy dữ liệu cho một thuộc tính không được phép truy cập

    echo "<h3>Example 1</h3>";

    class foo {

        public $bar;
        // thiết lập hàm get để lấy dữ liệu
        public function __get($name) {

            echo "Get:$name";
            return $this->$name;
        }
        // thiết lập hàm set để lấy dữ liệu
        public function __set($name, $value) {

            echo "Set:$name to $value";
            $this->$name = $value;
        }
    }


    $foo = new foo();

    echo $foo->bar;
    $foo->bar = 'test';

    echo "[$foo->bar]";

    echo '<br>';

    echo "<h3>Example 2</h3>";

    class newClass
    {
        public $name;


        public function __set($name, $value){
            throw new Exception("Variable ".$name." has not been set.", 1);
        }

        public function __get($name){
            throw new Exception("Variable ".$name." has not been declared and can not be get.", 1);
        }
    }

    $c = new newClass();

    $c->name = "Person Name";
    $c->email = "email@address.com";

    // Trong các ngôn ngữ khác như c # điều này sẽ tạo ra một lỗi nhưng nó hoạt động hoàn hảo trong PHP. Bởi vì tính năng này trong PHP chúng cung cấp cho bạn hai phương pháp kỳ diệu __get () và __set () .

    // Mục đích của các phương pháp này sẽ được chạy khi bạn cố gắng truy cập vào một biến mà không được khai báo. Ví dụ nếu bạn cố gắng thiết lập một biến như trong ví dụ trên, PHP sẽ chạy phương thức __set () hoặc khi nó cố gắng để có được một biến không được đặt, nó sẽ chạy phương thức __get () . Ở đây, bạn có thể làm bất cứ điều gì bạn muốn để xử lý biến, bạn có thể chấp nhận các chức năng đánh máy lỏng lẻo hoặc làm cho nó vì vậy bạn cần phải khai báo các biến bằng cách ném một ngoại lệ trong các phương pháp này.

    echo "<h3>Tại sao và khi nào sử dụng set và het trong php</h3>";
    // Trong trường hợp  nó là private nhưng vẫn sử dụng được nó thì đòi hỏi ta phải truy xuất thông qua một function trung gian, và function trung gian này ta gọi là set và get.

    # ví dụ cụ thể xử lý __set về việc sử dụng private

    class ClassName
    {
        private $__password;

        function setPassword($value){
            $this->__password = md5('prefix'.$value);
        }
    }

    $class = new ClassName();
    $class->setPassword('freetuts.net');

    // hoặc ghi sử dụng để lấy dữ liệu __get() khi sử dụng private

    class ClassNames
    {
        private $__password;

        function setPassword($value){
            $this->__password = md5('prefix'.$value);
        }
    }

    $class = new ClassNames();
    $class->setPassword('freetuts.net');

    echo '<br>';

    echo "<h3>Cấu trúc chung của __set & __get</h3>";

    /**
     *  __set($key,$value)
        + $key : là tên thuộc tính
        + $value : là giá trị thuộc tính
     */


    /**
     * __get($key)
        + $key là tên thuộc tính cần lấy
     */

    # __set trong php

    class ClassNamess
    {
        public $username = '';

        function __set($key, $value){
            if ($key = 'somekey'){
                $this->username = $value;
            }
        }

    }

    $class = new ClassNamess();
    $class->somekey = 'thehalfheart';
    echo $class->username;

    // kết quả sau khi echo là : "thehalfheart"

    # __get trong php

    class ClassNamessss
    {
        public $username = 'thehalfheart';

        function __get($key){
            if ($key == 'somekey'){
                return $this->username;
            }
        }

    }

    $class = new ClassNamessss();
    echo $class->somekey;
