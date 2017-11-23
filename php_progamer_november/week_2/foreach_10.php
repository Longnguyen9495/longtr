<?php
    echo "<h3>PHP foreach</h3>";
    echo '<pre>';
    /** Cú pháp vòng lặp foreach
     * foreach ($array as $key => $value){
            // Các dòng lệnh
        }

     * foreach ($array as $value){
            // Các dòng lệnh
        }
     */
    echo "<h3>Example 1</h3>";
    # Example 1 :
    /** Lặp các phần tử trong mảng chỉ mục
     * @parram array
     * @return string|integer
     */
    $a = array(1, 2, 3, 17);

    foreach ($a as $v) {
        echo "Current value of \$a: $v.\n";
    }
    echo "<h3>Example 2</h3>";
    # Example 2 :
    /** Lặp các phần tử value trong mảng chỉ mục
     * @parram array
     * @return string|integer $value
     */
    $a = array(1, 2, 3, 17);

    $i = 0;

    foreach ($a as $v) {
        echo "\$a[$i] => $v.\n";
        $i++;
    }

    echo "<h3>Example 3</h3>";
    # Example 3 :
    /** Lặp các phần tử có $key với giá trị $value
     * @parram array $key, $value
     * @return string|integer $value
     */
    $a = array(
        "one" => 1,
        "two" => 2,
        "three" => 3,
        "seventeen" => 17
    );

    foreach ($a as $k => $v) {
        echo "\$a[$k] => $v.\n";
    }

    echo "<h3>Example 4</h3>";
    # Example 4 :
    /** Lặp các phần tử trong mảng đa chiều
     * @parram array $key, $value
     * @return string|integer $value
     */
    $a = array();
    $a[0][0] = "a";
    $a[0][1] = "b";
    $a[1][0] = "y";
    $a[1][1] = "z";

    foreach ($a as $v1) {
        foreach ($v1 as $v2) {
            echo "$v2\n";
        }
    }
    echo "<h3>Example 5</h3>";
    # Example 5 :
    /** Lặp các phần tử để tạo ra danh sách 'ul-li'
     * @parram array $key, $value
     * @return string|integer $value
     */
    $teamVstore['vstore'][] = array('name' => "long", 'year' => 23, 'job' => 'IT');
    $teamVstore['vstore'][] = array('name' => "hưng", 'year' => 25, 'job' => 'IT');
    $teamVstore['vstore'][] = array('name' => "chiến", 'year' => 23, 'job' => 'IT');
    echo 'Danh sách thành viên trong team Vstore';
    foreach ($teamVstore['vstore'] as $key => $value)
    {
        echo "<ul>";
        echo "<li>".$value['name']."</li>";
        echo "<li>".$value['year']."</li>";
        echo "<li>".$value['job']."</li>";
        echo "</ul>";
    }

?>