<?php
    echo '<pre>';
    echo "<h3>Array sort</h3>";
    /** Sắp xêp các phần tử trong mảng theo chữ cái hoặc số, tăng dần hoặc giảm dần
     * sort($array)
     */
    $information = array("Chanel"=>44,"Dior"=>12,"Gucci"=>23,"Versace"=>32);
    echo '<br>';
    // sắp xếp tăng dần
    print_r(sort($information));

    // Sắp xếp giảm dần
    print_r(rsort($information));

    // Sắp xếp tăng dần theo $key và $value
    print_r(asort($information));
    echo '<br>';
    print_r(ksort($information));

    // Sắp xếp giảm dần theo $key và $value
    print_r(arsort($information));
    echo '<br>';
    print_r(krsort($information));


    echo '<h3>Array intersect</h3>';
    /** Trả về một mảng chứa các phần tử chung
     * array_intersect($array1, $array2, .... )
     */
    $array1 = array("a" => "green", "red", "blue");

    $array2 = array("b" => "green", "yellow", "red");

    $result = array_intersect($array1, $array2);
    print_r($result);

    echo '<br>';

    echo '<h3>Array Difference</h3>';
    /** Trả về một mảng chứa các phần tử khác biệt
     * array_diff($array1, $array2, .... )
     */
    $array1 = array("a" => "green", "red", "blue" , "black");

    $array2 = array("b" => "green", "yellow", "red");

    $result = array_diff($array1, $array2);
    print_r($result);

    echo '<br>';

    echo '<h3>Array Key Exits</h3>';
    /** Kiểm tra trong mảng một khóa chỉ định xem có tồn tại hay không
     * array_key_exists(key,array)
     */

    /** Tìm từ khóa "Toyota" có tồn tại trong mảng $a hay không
     * @param array|string "Toyota"|$a
     * @return boolean
     */
    $a=array("Volvo"=>"XC90","BMW"=>"X5");
    if (array_key_exists("Toyota",$a))
    {
        echo "Key exists!";
    }
    else
    {
        echo "Key does not exist!";
    }

    echo '<br>';

    echo '<h3>Array Combine</h3>';
    /** Trộn 2 mảng vào 1 với một mảng có phần từ $key và mảng có giá trị $value ( cả hai mảng đều phải là số nguyên tố
     * array_combine($array[$key],$array[$value])
     */
    $fname=array("Peter","Ben","Joe");

    $age=array("35","37","43");

    $c=array_combine($fname,$age);
    print_r($c);

    echo '<br>';

    echo '<h3>Array fill</h3>';
    /** Điền vào một mảng với các giá trị
     * array_fill(index,number,value);
     */
    $longname = array_fill(4,5,"long");

    print_r($longname);
?>