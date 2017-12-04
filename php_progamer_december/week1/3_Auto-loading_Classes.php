<?php
    echo "<h3>Auto-loading Classes</h3>";
    /**
     * muốn khởi tạo một class được khai báo trong một file khác thì chúng phải nhúng file đó vào trong file muốn khởi tạo thì mới có thể sử dụng được, nhưng nếu như chúng ta khởi tạo nhiều class trong một files mà các class đó được khai báo từ các file khác nhau thì sẽ phải include rất nhiều file. Điều đó sẽ khiến cho code của chúng ta trở lên rất rối và để khắc phục được điều đó thì chúng sẽ sử dụng hàm __autoload() trong PHP
     */

    /** Cú pháp :
        function __autoload($clasName)
            {
                //code
            }
     */


    /**
     * Trong đó: $className là biến mà các bạn truyền vào để lấy ra tên class(tên biến là gì cũng được nhưng bắt buộc phải khai báo).

    -Và để chứng minh cho câu nói: 'nó được gọi khi chúng ta khởi tạo một đối tượng không xác định được' thì các bạn xem ví dụ sau:

    +Đầu tiên chúng ta khai báo hàm__autoload và classConNguoi trên cùng một file và đồng thời khởi tạo luôn class .
     */

    echo "<h3>Example 1</h3>";

    # Example 1

    //Khai báo hàm __autoload
    function __autoload($className)
    {
        echo 'Bạn vừa khởi tạo class: '. $className;
    }
    //Khai báo class ConNguoi
    class ConNguoi
    {
        //Khai báo hàm khởi tạo
        public function __construct()
        {
            echo 'Class ConNguoi';
        }
    }
    //Khởi tạo class ConNguoi
    $connguoi = new ConNguoi();


    # sau đó xóa class

    //Khai báo hàm __autoload
    function __autoload($className)
    {
        echo 'Bạn vừa khởi tạo class: '. $className;
    }

    //Khởi tạo class ConNguoi
    $connguoi = new ConNguoi();
    //Kết Quả:
    //Bạn vừa khởi tạo class: ConNguoi
    // Fatal error: Class 'ConNguoi' not found

    echo '<br>';

    echo "<h3>Auto Load thông thường</h3>";


    # File NguoiLon.php, chứa class NguoiLon có nội dung như sau:

    class NguoiLon
    {
        public function __construct()
        {
            echo 'Class NguoiLon';
        }
    }
    # File TreCon.php, chứa class TreCon có nội dung như sau:

    class TreCon
    {
        public function __construct()
        {
            echo 'Class TreCon';
        }
    }
    # Thông thường, để khởi tạo 2 class trên trong file index.php thì chúng ta phải include từng file class như sau:
    //Nhúng file ConNguoi
    include_once 'NguoiLon.php';
    //Nhúng file ConNguoi
    include_once 'TreCon.php';

    //Khởi tạo 2 class
    $nguoilon = new NguoiLon();
    //Kết Quả: Class NguoiLon
    $trecon = new TreCon();
    //Kết Quả: Class TreCon
    # Nhưng nếu chúng ta sử dụng  hàm __autoload() thì sẽ chỉ phải khai báo ngắn gọn như sau:

    //khai báo hàm __autoload
    function __autoload($className)
    {
        //kiểm tra xem file tồn tại không
        if(file_exists($className . '.php')){
            //Nếu tồn tại thì nhúng file vào.
            include_once $className . '.php';
        }
    }
    //Khởi tạo 2 class
    $nguoilon = new NguoiLon();
    //Kết Quả: Class NguoiLon
    $trecon = new TreCon();
    //Kết Quả: Class TreCon

    echo '<br>';

    echo "<h3>Auto Load thông thường</h3>";

    /** Autoload khi gọi phương thức tĩnh.

    -Và hàm __autoload() này cũng được gọi khi chúng ta gọi phương thức tĩnh không xác định.
     *
     */


    class Autoload_2
    {
        private static $name = 'Autoload_2';
        public function __construct()
        {

        }
        public static function getName()
        {
            echo static::$name;
        }

    }
    # File index.php, có nội dung như sau:

    //khai báo hàm __autoload
    function __autoload($className)
    {
        //kiểm tra xem file tồn tại không
        if(file_exists($className . '.php')){
            //Nếu tồn tại thì nhúng file vào.
            include_once $className . '.php';
        }
    }
    Autoload_2::getName();
    //Kết Quả: Autoload_2
?>