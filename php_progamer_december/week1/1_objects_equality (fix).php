<?php
    echo "<h3>Object iteration</h3>";
    echo '<pre>';
    /** So sánh các các đối tượng bằng giá trị thuộc tính của chúng và theo các loại. Hai giá trị bằng nhau nếu chúng thể hiện cùng một llowps có cùng các giá trị thuộc tính
     * Toán tử nhận dạng bằng cú pháp "==="
     */


    /**
     * Class myIterator
     */
    class myIterator implements Iterator {
        private $position = 0;
        private $array = array(
            "firstelement",
            "secondelement",
            "lastelement",
        );

        public function __construct() {
            $this->position = 0;
        }

        public function rewind() {
            var_dump(__METHOD__);
            $this->position = 0;
        }

        public function current() {
            var_dump(__METHOD__);
            return $this->array[$this->position];
        }

        public function key() {
            var_dump(__METHOD__);
            return $this->position;
        }

        public function next() {
            var_dump(__METHOD__);
            ++$this->position;
        }

        public function valid() {
            var_dump(__METHOD__);
            return isset($this->array[$this->position]);
        }
    }

    $it = new myIterator;

    foreach($it as $key => $value) {
        var_dump($key, $value);
        echo "\n";
    }