<?php
    echo "<h3>__sleep & __wakeup</h3>";

    /**
     * -Phương thức __sleep() sẽ được gọi khi chúng ta thực hiện serialize() đối tượng.

     * - Thông thường khi chúng ta serialize() một đối tượng thì nó sẽ trả về tất cả các thuộc tính trong đối tượng đó. Nhưng nếu sử dụng __sleep() thì chúng ta có thể quy định được các thuộc tính có thể trả về.

     * - Chú ý: phương thức __sleep() luôn trả về giá trị là một mảng.

     */

    /** Cú pháp
        public function __sleep()
            {
                return ['property1', 'property2',..., 'propertyn'];
            }
     */

    echo "<h3>Example 1</h3>";


    # example 1

    class Sleep
    {
        private $name = 'Nguyễn Thành long';
        private $yeah = '09/04/1995';
        public function __sleep()
        {
            return array('name');
        }
    }

    echo serialize(new Sleep());

    echo "<h3>Example 2</h3>";

    # Example 2

    class sleepWakeup {

        public function __construct() {
            // constructor //
        }

        public function __sleep() {
            echo 'Time to sleep.';
        }

        public function __wakeup() {
            echo 'Time to wakeup.';
        }

    }

    $ob = new sleepWakeup();

    // call __sleep method
    echo $ob->__sleep();

    echo "\n";

    // call __wakeup method
    echo $ob->__wakeup();

    echo "<h3> __wakeup()</h3>";

    /**
     * Phương thức __wakeup() sẽ được gọi khi chúng ta unserialize() đối tượng.
     * Chúng thường được sử dụng để thực thi một hoặc nhiều hành động nào đó khi đối tượng được unserialize
     */

    /**
        public function __wakeup()
            {
            //code
            }
     */

    class ConNguoi
    {
        private $name = 'Vũ Thanh Tài';
        private $age = 20;
        public function __sleep()
        {
            return array('name');
        }
        public function getName()
        {
            echo $this->name;
        }
        /**
         * gọi hàm getName khi unserialize()
         */
        public function __wakeup(){
            $this->getName();
        }
    }

    unserialize(serialize(new ConNguoi()));
    //Kết quả: Vũ Thanh Tài.