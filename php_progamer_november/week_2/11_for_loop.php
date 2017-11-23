<?php
    echo "<h3>Php For</h3>";
    echo '<pre>';
    /** Cú pháp vòng lặp for
     * for ($bien_dieu_khien; $bieu_thuc_dieu_kien; $bieu_thuc_thay_doi_bien_dieu_khien)
        {
            // lệnh
        }
     * $bien_dieu_khien: là một câu lệnh gán giá trị ban đầu cho biến điều khiển trước khi thực hiên vòng lặp, hoặc là một biến có giá trị sẵn mà ta đã truyền vào cho nó trước khi tạo vòng lặp này, lệnh này được thực hiện duy nhất một lần.

     * $bieu_thuc_dieu_kien: là một biểu thức quan hệ xác định điều kiện thoát khỏi vòng lặp.

     * $bieu_thuc_thay_doi_bien_dieu_khien: Xác định biến điều khiển sẽ bị thay đổi như thế nào sau mỗi lần lặp được lặp lại (thường là tăng hoặc giảm giá trị của biến điều khiển).
     */
    echo "<h3>Example 1</h3>";
    # Example 1
    /**
     * Xếp hình tam giác bằng việc sử dụng vòng lặp for
     * @param string
     * @return string
     */
    for ($i = 1; $i < 10; $i++)
    {
        for ($j = 9; $j >= $i; $j--)
        {
            echo $j;
        }
        echo '<br/>';;
    }
    echo '<br>';
    echo "<h3>Example 2 : Kết Quả Sổ Số Ngày Hôm Nay</h3>";
    # Example 2
    /**
     * Random ngẫu nhiên kết quả sổ xổ bằng việc dùng vòng lặp for
     * @param string
     * @return string
     */
    $lotteryResults = array(
        array('name' => 'Giải Đặc Biệt', 'salt' => 856412),
        array('name' => 'Giải Nhất', 'salt' => 215863)
    );

    for($i = 0, $size = count($lotteryResults); $i < $size; ++$i) {
        $lotteryResults[$i]['salt'] = mt_rand(000000, 999999);
    }
    print_r($lotteryResults);
    echo '<br>';
    echo "<h3>Example 3 : 1 Chữ cái ngẫu nhiên nào đó ^^</h3>";
    # Example 3
    /**
     * Xuất ngẫu nhiên một chữ cái nào đó trong bảng chữ cái
     * param string
     * return string
     */
    function random($length = 1)
    {
        $chars = range('A','Z');

        for ($p = 0; $p < $length; $p++)
        {
            $result = ($p%2) ? $chars[mt_rand(19, 23)] : $chars[mt_rand(0, 18)];
        }

        return $result;
    }
    echo random();
    echo '<br>';
    echo "<h3>Example 4 : Vòng lặp trong vòng lặp</h3>";
    # Example 4
    /** thực hiện vòng lặp tới khi nào kết thúc điều kiện
     * @param integer $a,$b,$c
     * @return integer $a,$b,$c
     */
    for($a=0;$a<1;$a++){
        for($b=0;$b<10;$b++){
            for($c=0;$c<10;$c++){
                echo $a.$b.$c.",";
            }
        }
    }
    echo '<br>';
    echo "<h3>Example 5 : In ra mảng cửu chương</h3>";
    # Example 5
    /** Thiết lập vòng lặp for để tạo bảng cửu chương
     * @param integer
     * @return integer
         */
    echo "<table>";
    for($i=1; $i <= 9; $i++)
    {
        echo "<tr>&nbsp;";
        for ($j=1; $j <= 9; $j++)
        {
            echo "<td>$i * $j = ".$i*$j."</td>"."&nbsp;";
        }
        echo "</tr>";
    }
    echo "</table>";
?>