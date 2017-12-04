<?php
    echo "<h3>Magic Methods</h3>";
    /** Tổng hợp các special methods được kêu gọi để đáp ứng với một sự kiệ hoặc kịch bản cụ thể
     *
     */

    echo "<h3>Tổng hợp các magic method</h3>";
    /**
     * Có các magic methods sau:

    1) void __construct ([ mixed$args [, $... ]] )

    2) void __destruct ( void )

    3) public void __set ( string $name , mixed$value ) : xuất hiện khi ta truyền dữ liệu cho một thuộc tính không được phép truy cập.

    4) public mixed__get ( string $name ) : được dùng khi đọc dữ liệu từ một thuộc tính không được phép truy cập.

    5) public bool __isset ( string $name ): được kích hoạt khi gọi hàm isset() hoặc empty() trên một thuộc tính không được phép truy cập.

    6) public void __unset ( string $name ): được gọi khi hàm unset() được sử dụng trong một thuộc tính không được phép truy cập.

    7) public mixed__call ( string $name , array $arguments ): được kích hoạt khi ta gọi một phương thức không được phép truy cập trong phạm vi của một đối tượng.

    8) public static mixed__callStatic ( string $name , array $arguments ): được kích hoạt khi ta gọi một phương thức không được phép truy cập trong phạm vi của một phương thức tĩnh.

    9) public string __toString ( void ): phương thức này giúp class chỉ định xem sẽ in ra cái gì khi nó được dùng như một kiểu chuỗi (ví dụ: echo $obj; ). Phương thức này sẽ trả về một kiểu chuỗi hay một lỗi nghiêm trọng.

    10) mixed__invoke ([ $... ] ): phương thức này được gọi khi một lệnh cố gắng gọi một đối tượng như một hàm. Ví dụ:
     */

    echo '<br>';

    echo "<h3>__construct</h3>";

    class BaseClass {
        function __construct() {
            print "In BaseClass constructor\n";
        }
    }

    class SubClass extends BaseClass {
        function __construct() {
            parent::__construct();
            print "In SubClass constructor\n";
        }
    }

    class OtherSubClass extends BaseClass {
        // inherits BaseClass's constructor
    }

    // In BaseClass constructor
    $obj = new BaseClass();

    // In BaseClass constructor
    // In SubClass constructor
    $obj = new SubClass();

    // In BaseClass constructor
    $obj = new OtherSubClass();


    echo "<h3>Example2</h3>";

    #Example 2

    class MyDestructableClass {
        function __construct() {
            print "In constructor\n";
            $this->name = "MyDestructableClass";
        }

        function __destruct() {
            print "Destroying " . $this->name . "\n";
        }
    }

    $obj = new MyDestructableClass();