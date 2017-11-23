<?php
    echo '<pre>';
    echo "<h3>In array</h3>";
    /** Kiểm tra tra xem phẩn tử đó có trong mảng hay không
     * @parram array $name
     * @return boolean true|false
     */
    $name = array("long", "chiến", "hưng", "văn anh", "phú");
    $job = array("IT","Doctor","Police","chef","architect");

    if (in_array("phú", $name))
    {
        echo "Phần tử có xuất hiện trog mảng";
    }
    else
    {
        echo "Phần tử khôn xuất hiện trong mảng";
    }
    echo '<br>';

    echo "<h3>Array Length</h3>";
    # Đếm độ dài của mảng
//    print_r(count($name));
    $namecount = count($name);
    echo 'Độ dài của mảng là : '.$namecount.'<br/>';

    echo '<br>';

    echo "<h3>Array merge</h3>";
    // Gộp 2 mảng vào 1
    print_r(array_merge($name, $job));

    echo '<br>';

    echo "<h3>Array combine</h3>";
    // Trộn 2 mảng
    print_r(array_combine($name,$job));

    echo '<br>';

    echo "<h3>Array implode - explode</h3>";
    // Implode
    /** Trả về một chuỗi các phần tử của mảng $arr
     * @param array $arr = array()
     * @return string $arr = ''
     */
    $arr = array('My','Name','Is','Long');
    echo implode(" ",$arr).'<br/>';
    echo '<br>';
    // Explode
    /** Tách các giá trị trong chuỗi ra thành mảng
     * @param string $arr = ''
     * @return array $arr = array()
     */
    $address = 'Số 102 thái thịnh, đống đa, hà nội';
    print_r(explode(" ",$address));

    echo '<br>';
?>