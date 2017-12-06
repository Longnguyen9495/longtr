<?php
    echo "<h3>__isset</h3>";

    // -Phương thức __isset() sẽ được gọi khi chúng ta thực hiện kiểm tra một thuộc tính không được phép truy cập của một đối tượng, hay kiểm tra một thuộc tính không tồn tại trong đối tượng đó. Cụ thể là hàm isset() và hàm empty().

    // phương thức __isset() không sử dụng được với thuộc tính tĩnh.

    /** Cú pháp
        public function __isset($name)
            {
                //code
            }
     */

    echo "<h3>Example 1</h3>";

    # không sử dụng isset

    class ConNguoi
    {
        private $name;
    }
    //Khởi tạo đối tượng
    $connguoi = new ConNguoi();

    isset($connguoi->name);
    //Kết quả: false

    empty($connguoi->name);
    //Kết quả: true

    # Sau khi sử dụng isset

    class ConNguois
    {
        private static $name;
        public function __isset($name)
        {
            echo 'Bạn vừa kiểm tra thuộc tính: ' . $name;
        }
    }
    //Khởi tạo đối tượng
    $connguoi = new ConNguois();

    isset($connguoi->name);
    //Kết quả: Bạn vừa kiểm tra thuộc tính: name

    empty($connguoi->name);
    //Kết quả Bạn vừa kiểm tra thuộc tính: name

    /*kiểm tra thuộc tính không tồn tại trong đối tượng*/
    isset($connguoi->age);
    //Kết quả: Bạn vừa kiểm tra thuộc tính: age

    echo "<h3>__unset</h3>";
    // -Phương thức __unset() sẽ được gọi khi chúng ta thực hiện hủy (unset) một thuộc tính không được phép truy cập của một đối tượng, hay hủy một thuộc tính không tồn tại trong đối tượng đó. Cụ thể là hàm unset().

    // phương thức __unset()  cũng không sử dụng được với thuộc tính tĩnh.

    /** Cú pháp
    public function __unset($name)
        {
            //code
        }
     */

    echo "<h3>Example 1</h3>";

    # Khi chưa sử dụng __unset()

    class Info
    {
        private $names;
    }
    //Khởi tạo đối tượng
    $connguoi = new Info();

    unset($connguoi->names);
    //Kết quả: Cannot access private property ConNguoi::$name

    # Sau khi sử dụng __unset

    class Infos
    {
        private $names;
        public function __unset($names)
        {
            echo 'Bạn vừa hủy thuộc tính: ' . $names;
        }
    }
    //Khởi tạo đối tượng
    $connguoi = new Infos();

    unset($connguoi->names);
    //Kết quả: Bạn vừa hủy thuộc tính: name

    /* unset thuộc tính không tồn tại trong đối tượng*/
    unset($connguoi->age);
    //Kết quả: Bạn vừa hủy thuộc tính: age

    echo "<h3>Kết hợp __isset & __unset</h3>";

    class PropertyTest
    {
        /**  Location for overloaded data.  */
        private $data = array();

        /**  Overloading not used on declared properties.  */
        public $declared = 1;

        /**  Overloading only used on this when accessed outside the class.  */
        private $hidden = 2;

        public function __isset($name)
        {
            echo "Is '$name' set?\n";
            return isset($this->data[$name]);
        }

        /**  As of PHP 5.1.0  */
        public function __unset($name)
        {
            echo "Unsetting '$name'\n";
            unset($this->data[$name]);
        }

        /**  Not a magic method, just here for example.  */
        public function getHidden()
        {
            return $this->hidden;
        }
    }


    echo "<pre>\n";

    $obj = new PropertyTest;

    $obj->a = 1;
    echo $obj->a . "\n\n";

    var_dump(isset($obj->a));
    unset($obj->a);
    var_dump(isset($obj->a));
    echo "\n";

    echo $obj->declared . "\n\n";

    echo "Let's experiment with the private property named 'hidden':\n";
    echo "Privates are visible inside the class, so __get() not used...\n";
    echo $obj->getHidden() . "\n";
    echo "Privates not visible outside of class, so __get() is used...\n";
    echo $obj->hidden . "\n";