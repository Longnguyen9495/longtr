<?php
echo '<h1>String | Interger | Boolean Php</h1>';
$id = 0;
for ($id =1; $id<10;$id++)
{
    echo $id.'<br>';
}

// khai báo các chuỗi string, integer
$product =  "Tổng quát về gian hàng Vstore";
$shopping_cart1 = "Website bất động sản";
$shopping_cart2 = "Website đồ uống, ẩm thực & thời trang";
$shopping_cart3 = "Website thiết bị điện tử di động";
$detail_cart1 = "Dự án Sunshine City".'<br>'."Resort Ha Long bay";
$detail_cart2 = "Coffe Highland".'<br>'."Royal Restaurant"."
Fashion Chanel";
$detail_cart3 = "Samsung TV".'<br>'."Iphone 8 & Iphone X";
$count_Detail_cart1 = 10;
$count_Detail_cart2 = 50;
$count_Detail_cart3 = 30;
$productAll = $product.'<br>'.$shopping_cart1.'<br>'.$shopping_cart2.'<br>'.$shopping_cart3;
$array_shopping_cart1 = $shopping_cart1.'<br>'.$detail_cart1.'<br>'.$count_Detail_cart1;
$array_shopping_cart2 = $shopping_cart2.'<br>'.$detail_cart2.'<br>'.$count_Detail_cart2;
$array_shopping_cart3 = $shopping_cart3.'<br>'.$detail_cart3.'<br>'.$count_Detail_cart3;

echo '<h1>In chuỗi string</h1>';
// in ra chuỗi string
echo "<ul>$product";
echo "<li>$shopping_cart1</li>";
echo "<li>$shopping_cart2</li>";
echo "<li>$shopping_cart3</li>";
echo "</ul>";
echo '<h1>In hoa, in thường chuỗi string</h1>';


// In hoa chuỗi string
print_r(strtoupper($product).'<br>');
echo '<br>';

// In thường chuỗi string
print_r(strtolower($product).'<br>');
echo '<br>';

// in hoa chữ cái đầu tiên | in thường chữ cái đầu tiên
print_r(ucfirst($product).'<br>');
echo '<br>';
print_r(lcfirst($product).'<br>');


echo '<h1>Đảo kí tự trong string</h1>';
// Đảo chuỗi string
print_r(strrev($product).'<br>');


echo '<h1>Đếm độ dài kí tự trong string</h1>';
// Đảo chuỗi string
print_r('Có'.' '.(strlen($product)).' '.'Kí tự');


echo '<h1>Chuyển đổi sang mảng array</h1>';
$productSmartphone = "Iphone, Samsung, Nokia, Xiaomi";
$stock = "22, 33, 45, 12";
echo '<pre>';
$arrayexplode_smartphone = explode(',',$productSmartphone);
$arrayexplode_stock = explode(',',$stock);

$arraycombine_smartphone = array_combine($arrayexplode_smartphone,$arrayexplode_stock);
print_r($arraycombine_smartphone);
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<form action="" method="post" role="form">
    <h1><?=$product?></h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Danh mục</th>
            <th>Danh sách sản phẩm</th>
            <th>Số lượng</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><?=$id?></td>
            <td><?=$shopping_cart1?></td>
            <td><?=$detail_cart1?></td>
            <td><?=$count_Detail_cart1?></td>
            <td><a href="javascript:;">Sửa</a></td>
            <td><a href="javascript:;">Xóa</a></td>
        </tr>
        <tr>
            <td><?=$id?></td>
            <td><?=$shopping_cart2?></td>
            <td><?=$detail_cart2?></td>
            <td><?=$count_Detail_cart2?></td>
            <td><a href="javascript:;">Sửa</a></td>
            <td><a href="javascript:;">Xóa</a></td>
        </tr>
        <tr>
            <td><?=$id?></td>
            <td><?=$shopping_cart3?></td>
            <td><?=$detail_cart3?></td>
            <td><?=$count_Detail_cart3?></td>
            <td><a href="javascript:;">Sửa</a></td>
            <td><a href="javascript:;">Xóa</a></td>
        </tr>
        </tbody>
    </table>
</form>
</body>
</html>

