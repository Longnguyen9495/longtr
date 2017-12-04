<?php
    echo "<h3>Object iteration</h3>";
    echo '<pre>';
    /** So sánh các các đối tượng bằng giá trị thuộc tính của chúng và theo các loại. Hai giá trị bằng nhau nếu chúng thể hiện cùng một llowps có cùng các giá trị thuộc tính
     * Toán tử nhận dạng bằng cú pháp "==="
     */


    /**
     * Class myIterator
     */

    echo "<h3>Example 1</h3>";

    # Example 1

    function bool2str($bool)
    {
        if ($bool === false) {
            return 'FALSE';
        } else {
            return 'TRUE';
        }
    }

    function compareObjects(&$o1, &$o2)
    {
        echo 'o1 == o2 : ' . bool2str($o1 == $o2) . "\n";
        echo 'o1 != o2 : ' . bool2str($o1 != $o2) . "\n";
        echo 'o1 === o2 : ' . bool2str($o1 === $o2) . "\n";
        echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . "\n";
    }

    class Flag
    {
        public $flag;

        function __construct($flag = true) {
            $this->flag = $flag;
        }
    }

    class OtherFlag
    {
        public $flag;

        function __construct($flag = true) {
            $this->flag = $flag;
        }
    }

    $o = new Flag();
    $p = new Flag();
    $q = $o;
    $r = new OtherFlag();

    echo "Two instances of the same class\n";
    compareObjects($o, $p);

    echo "\nTwo references to the same instance\n";
    compareObjects($o, $q);

    echo "\nInstances of two different classes\n";
    compareObjects($o, $r);


    /*
     Kết quả in ra sẽ là :

    Two instances of the same class
    o1 == o2 : TRUE
    o1 != o2 : FALSE
    o1 === o2 : FALSE
    o1 !== o2 : TRUE

    Two references to the same instance
    o1 == o2 : TRUE
    o1 != o2 : FALSE
    o1 === o2 : TRUE
    o1 !== o2 : FALSE

    Instances of two different classes
    o1 == o2 : FALSE
    o1 != o2 : TRUE
    o1 === o2 : FALSE
    o1 !== o2 : TRUE


     */

    echo "<h3>Example 2</h3>";

    # Example 2

    class Foo {
        public $x;
    }
    $a = new Foo();
    $b = new Foo();
    $a->x = $b;
    $b->x = $a;

    print_r($a == $b);

    // sẽ xuất hiện lỗi line "print_r($a == $b);" không xác định được phần so sánh

    echo "<h3>Example 3</h3>";

    # Example 3

    class Employee
    {
        public $first;
        public $last;
        public $id;     // the property we're interested in...

        public function __construct($first, $last, $id)
        {
            $this->first = $first;
            $this->last = $last;
            $this->emp_id = $id;
        }

        /*
         * define the rules for sorting this object - using emp_id.
         * Make sure this function returns a -1, 0, or 1.
         */
        public static function compare($a, $b)
        {
            if ($a->id < $b->id) return -1;
            else if($a->id == $b->id) return 0;
            else return 1;
        }

        public function __toString()
        {
            return "Employee[first=$this->first, last=$this->last, id=$this->id]";
        }
    }

    # create a PHP array and initialize it with Employee objects.
    $employees = array(
        new Employee("văn", "hưng", 214),
        new Employee("vương", "chiến", 243),
        new Employee("trung", "phú", 111),
        new Employee("thành", "long", 107),
        new Employee("văn", "anh", 2),
    );

    # sort the $employees array using Employee compare() method.
    usort($employees, array("Employee", "compare"));

    # print the results
    foreach($employees as $employee)
    {
        echo $employee . '<br>';
    }

