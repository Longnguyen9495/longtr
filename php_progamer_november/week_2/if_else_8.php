<?php
    echo "<h3>Php If-else</h3>";
    echo '<pre>';
    /**
      * If(Điều kiện)
        {
        hành động
        }
     */
    echo "<h3>Example 1</h3>";
    # Example 1
    /**
     * Kiểm tra có phải là năm nhuận hay không
     * @param integer
     * @return boolean|string
     */
    $nam = 1990;
    if ($nam % 4 == 0 && $nam % 100 != 0 || $nam % 400 == 0){
        echo 'Năm ' . $nam . ' Là Năm Nhuận';
    }else
    {
        echo 'Năm ' . $nam . ' Không phải là Năm Nhuận';
    }
    echo '<br>';
    echo "<h3>Example 2</h3>";
    # Example 2
    /**
     * Kiểm tra năm nay là chẵn hay lẻ
     * @param integer
     * @return boolean|string
     */
    $year = 1990;
    if ($year / 2 == 0){
        echo 'Năm ' . $nam . ' Là Năm chẵn';
    }else
    {
        echo 'Năm ' . $nam . ' Là Năm lẻ';
    }
    // Kết hợp nhiều câu lệnh if-else với nhau
    echo "<h3>Example 3</h3>";
    # Example 3
    /**
     * Kiểm tra xem đúng màu cần tìm hay không
     * @param string
     * @return boolean|string
     */
    $mau = 'màu xanh';

    if ($mau == 'màu xanh'){
        echo 'Đây là màu xanh';
    }
    else if ($mau == 'màu đỏ')
    {
        echo "Đây là màu đỏ";
    }
    else if ($mau == 'màu vàng'){
        echo 'Đây là màu vàng';
    }
    else{
        echo 'Các màu khác';
    }
    echo '<br>';
    echo "<h3>Example 4</h3>";
    # Example 4
    /**
     * Kiểm tra xem sỗ là số chẵn và lớn hơn 100 hay không
     * @param string
     * @return boolean|string
     */
    $so = 80; // Nhập vào số 80
    if ($so % 2 == 0) // Nếu số dư khi chia cho 2 = o, tức là số chẵn ta sẽ chạy tiếp câu lệnh bên trong
    {
        if ($so > 100){ // Nếu số lớn hơn 100 thì chạy lệnh bên trong
            echo 'Số chẵn và lớn hơn 100';
        }
        else if ($so < 100){ // Ngược lại nếu số nhỏ hơn 100 thì chạy lệnh bên trong
            echo 'Số chẵn và nhỏ hơn 100';
        }
    }