<?php
    echo "<h3>Static properties and Methods</h3>";
    // dùng để cấp lớp cần chọn mà không cần một cả thể lớp để chọn

    # Example 1

    /**
     * Class Utilis
     * @return
     */
    class Utilis {
        static public $numCars = 0;

        static public function addToNumCars($int)
        {
            $int = (int)$int;
            self::$numCars += $int;
        }
    }

    echo Utilis::$numCars.'<br/>';

    Utilis::addToNumCars(3);
    echo Utilis::$numCars.'<br/>';

    Utilis::addToNumCars(-1);
    echo Utilis::$numCars.'<br/>';
?>