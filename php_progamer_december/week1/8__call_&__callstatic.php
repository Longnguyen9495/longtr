<?php
    echo "<h3>__call $ __callstatic</h3>";
    // public mixed__call ( string $name , array $arguments ): được kích hoạt khi ta gọi một phương thức không được phép truy cập trong phạm vi của một đối tượng.

    // public static mixed__callStatic ( string $name , array $arguments ): được kích hoạt khi ta gọi một phương thức không được phép truy cập trong phạm vi của một phương thức tĩnh.

    echo "<h3>__call()</h3>";

    // Phương thức __call() sẽ được gọi khi bạn gọi tới một phương thức nào đó không tồn tại trong đối tượng.

    class Student
    {

    }

    $student = new Student();
    $student->get_by_id();

    // khi echo ra sẽ bị thông báo lỗi không tồn tại get_by_id()

    // sau khi thêm hàm __call() vào chúng ta sẽ có hàm như sau:

    class Students
    {
        public function __call($method, $params)
        {
            echo 'Tên phương thức: ' .$method . '<br/>'; // $method : $method là tên của phương thức đang gọi
            echo 'Tham số truyền vào: ' .$method . '<br/>'; // $params là danh sách các tham số truyền vào của phương thức đó
            echo '<pre>';
            print_r($params);
        }
    }

    $student = new Students();
    $student->get_by_id();

    echo '<br>';

    echo "<h3>__callstatic()</h3>";

    // Phương thức __callStatic() có tác dụng giống như phương thức __call() và chỉ khác nhau ở chỗ __callStatic() dùng trong trường hợp bạn gọi đến phương thức tĩnh không tồn tại.

    class Studentsss
    {

    }

    $student = new Studentsss();
    $student->get_by_id();

    // khi echo ra sẽ bị thông báo lỗi không tồn tại get_by_id()

    // sau khi thêm hàm __call() vào chúng ta sẽ có hàm như sau:

    class Website
    {
        public static function __callStatic($method, $params) {
            echo 'Tên phương thức: ' .$method . '<br/>'; // $method : $method là tên của phương thức đang gọi
            echo 'Tham số truyền vào: ' .$method . '<br/>'; // $params là danh sách các tham số truyền vào của phương thức đó
            echo '<pre>';
            print_r($params);
        }
    }

    $website = new Website();
    Website::website('vapge.com', 'thanhlong09041995@gmail.com');
    var_dump($website);

    echo '<br>';


    # __call()

    echo "<h3>Một số ví dụ về hàm call và hàm callstatic</h3>";

    class Foo
    {
        public function __call($method, $args)
        {
            echo "Called __call with $method","\n
    \n";
        }
    }

    $object = new Foo;
    print_r($object->someMethod());

    # __callstatic
    class Foos
    {
        static public function someStaticMethod()
        {
            echo "Called";
        }

        public function __call($method, $args)
        {
            echo "Called __call with $method","\n
    \n";
        }
    }
    Foos::someStaticMethod();

