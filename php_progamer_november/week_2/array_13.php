<?php
    echo "<h3>Array</h3>";
    echo '<pre>';
    /** Là một bản đồ ra lênh, trong đó chưa một hoặc rất nhiều giá trị trong một biến duy nhất
     * Mảng có 3 kiểu chuyên dụng nhất !
     * array();
     */
    echo "<h3>Mảng chỉ mục</h3>";
    /** bắt đầu bằng số 0, các phần tử trong mảng được chỉ định cho một số chỉ mục mặc định
     * @param array $name
     * @return array
     */
    $name = array("long","hưng","chien","văn anh","phú");
//    print_r($name);
//    var_dump($name);
    echo "<h3>Mảng kết hợp</h3>";
    /** Là mảng kết hợp tên với mỗi phần tử trong mảng
     * @param array $name
     * @return array
     */
    $nameYear = array("long"=>22,"hưng"=>25,"chiến"=>22,"văn anh"=>23,"phú"=>23);
    print_r($nameYear);
    //    var_dump($nameYear);

    echo "<h3>Mảng đa chiều</h3>";
    /** Còn được gọi là mảng của mảng, nơi đó chưa các dữ liệu dạng bảng trong một mảng
     * @param array $name
     * @return array
     */
    $information['Shose'][] = array("name"=>"Adidas","Size"=>"full size","color"=>"black, white, red");
    $information['Shose'][] = array("name"=>"Nike","Size"=>"full size","color"=>"black, white, red");
    $information['Shose'][] = array("name"=>"Van","Size"=>"full size","color"=>"black, white, red");
    $information['Shose'][] = array("name"=>"Converse","Size"=>"full size","color"=>"black, white, red");
    print_r($information['Shose']);
    //    var_dump($nameYear);

