<?php
    echo '<pre>';
    echo "<h3>Duyệt từng phần tử của mảng</h3>";
    $information['Shose'][] = array("name"=>"Adidas","Size"=>"full size","color"=>"black, white, red");
    $information['Shose'][] = array("name"=>"Nike","Size"=>"full size","color"=>"black, white, red");
    $information['Shose'][] = array("name"=>"Vans","Size"=>"full size","color"=>"black, white, red");
    $information['Shose'][] = array("name"=>"Converse","Size"=>"full size","color"=>"black, white, red");
    /** Duyệt từng phần tử của mảng
     * @param array $information
     * @return string html>ul>li
     */
    echo '<ul>';
    foreach ($information['Shose'] as $key => $value)
    {
        echo '<li>';
        echo 'Name : ' . $value['name'] . '<br/>';
        echo 'Size : ' . $value['Size'] . '<br/>';
        echo 'Color : ' . $value['color'] . '<br/>';
        echo '</li>';
    }
    echo '</ul>';
    echo '<br>';
    echo "<h3>Truy xuất đến phần tử của mảng</h3>";
    // Truy xuất giá trị của phần tử thứ $key trong mảng $information['Shose']
    $name = $information['Shose'][0]['name'];
    print_r($name);

    echo '<br>';

    echo "<h3>Thêm phần tử vào mảng</h3>";
    // Thêm phần tử vào cuối mảng
    $information['Shose'][] = 'D&G';
    print_r($information['Shose']);
    // Cách 2 : Dùng array_push
    $arrayPush = array_push($information['Shose'], 'Lacoste');
    print_r($arrayPush);

    echo '<br>';

    echo "<h3>Xóa phần tử của mảng</h3>";
    // Xóa phần tử bất kì trong mảng
    unset($information['Shose'][0]);
    print_r($information['Shose']);

    echo '<br/>';

    echo "<h3>Xóa phần tử của mảng</h3>";
    // Xóa phần tử bất kì trong mảng
    unset($information['Shose'][0]);
    print_r($information['Shose']);
?>


