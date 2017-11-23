<?php
    echo "<h3>Php Switch - case</h3>";
    echo '<pre>';
    /**
     * Switch(biến)
        {
        Case giá trị 1: Hành động; Break;
        …………
        Case giá trị N: Hành động; Break;
        Default: Hành động; Break;
        }
     */
    echo "<h3>Example 1</h3>";
    # Example 1
    /**
     * Kiểm tra màu có phù hợp với điều kiện đã cho hay không
     * @param string
     * @return boolean|string
     */
    $color = "red";

    switch ($color) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    echo "<h3>Example 2</h3>";
    # Example 2
    /**
     * Kiểm tra xem có phải là string hay không
     * @param string
     * @return boolean|string
     */
    echo '<br>';
    $string="2string";

    switch($string)
    {
        case (string) 1:
            echo "this is 1";
            break;
        case (string) 2:
            echo "this is 2";
            break;
        case '2string':
            echo "this is a string";
            break;
    }
    echo '<br>';
    echo "<h3>Example 3</h3>";
    # Example 3
    /**
     * Kiểm tra năm nay là năm con gì ?
     * @param string
     * @return boolean|string
     */
    function getZodiacYear($year){

        switch ($year % 12) :
            case  0: return 'Year is Monkey';
            case  1: return 'Year is Rooster';
            case  2: return 'Year is Dog';
            case  3: return 'Year is Boar';
            case  4: return 'Year is Rat';
            case  5: return 'Year is Ox';
            case  6: return 'Year is Tiger';
            case  7: return 'Year is Rabit';
            case  8: return 'Year is Dragon';
            case  9: return 'Year is Snake';
            case 10: return 'Year is Horse';
            case 11: return 'Year is Lamb';
        endswitch;
    }
    echo getZodiacYear(2000);