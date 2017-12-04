<?php
    echo "<h3>Object iteration</h3>";
    /** theo như mặc định thì tất cả các thuộc tính có thể được lặp lại nhờ cách dùng vòng lặp foreach
     *
     */

    echo "<h3>Example 1</h3>";

    # Example 1

    class MyClass // khởi tạo một lớp chưa các thuộc tính var1,var2,var3
    {
        public $var1 = 'value 1';
        public $var2 = 'value 2';
        public $var3 = 'value 3';

        protected $protected = 'protected var';
        private   $private   = 'private var';

        function iterateVisible() {
            echo "MyClass::iterateVisible:\n";

            # sử dụng vòng lặp foreach để lấy giá trị các thuộc tính trong value
            foreach ($this as $key => $value) {
                print "$key => $value\n";
            }
        }
    }

    # khởi tạo lớp có tên "class"
    $class = new MyClass();

    foreach($class as $key => $value) {
        print "$key => $value\n";
    }
    echo "\n";


    $class->iterateVisible();

    echo "<h3>Example 2</h3>";

    # Example 2

    class MyIterator implements Iterator
    {
        private $var = array();

        public function __construct($array)
        {
            if (is_array($array)) {
                $this->var = $array;
            }
        }

        public function rewind()
        {
            echo "rewinding\n";
            reset($this->var);
        }

        public function current()
        {
            $var = current($this->var);
            echo "current: $var\n";
            return $var;
        }

        public function key()
        {
            $var = key($this->var);
            echo "key: $var\n";
            return $var;
        }

        public function next()
        {
            $var = next($this->var);
            echo "next: $var\n";
            return $var;
        }

        public function valid()
        {
            $key = key($this->var);
            $var = ($key !== NULL && $key !== FALSE);
            echo "valid: $var\n";
            return $var;
        }

    }

    $values = array(1,2,3);
    $it = new MyIterator($values);

    foreach ($it as $a => $b) {
        print "$a: $b\n";
    }