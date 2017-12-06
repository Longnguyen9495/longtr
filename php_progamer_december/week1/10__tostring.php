<?php
    echo "<h3>__Tostring</h3>";
    // Phương thức này sẽ gọi ra khi chúng ta dùng một đối tượng như một string

    /**
        public function __toString()
            {

                //code

            }
     */

    echo "<h3>Example 1 </h3>";

    class ToString
    {
        private $var = "Nguyễn Thành Long";
        public function __toString()
        {
            return "ToString: var = '$this->var'";
        }
    }
    $ifo = new ToString();
    echo $ifo;

    echo '<br>';


    // Declare a simple class
    class GetTextString
    {
        public $foo;

        public function __construct($foo)
        {
            $this->foo = $foo;
        }

        public function __toString()
        {
            return $this->foo;
        }
    }

    $class = new GetTextString('nguyễn thành long');
    echo $class;

    echo '<br>';

    echo "<h3>Example 2</h3>";

    Class Text
    {
        private $information = "Số 102 Thái thịnh đống đa hà nội";

        public function __toString()
        {
            return "$this->information";
        }
    }

    $pb = new Text();
    echo $pb;