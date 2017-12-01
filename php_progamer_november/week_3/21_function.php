<?php
    echo '<h3>Php Function</h3>';
    // là tập hợp một đoạn mã và nó sẽ thực thi đoạn mã đó khi gọi hàm ra
    /** đếm độ đài giá trị value trong mảng
     * @param $key
     * @return array
     */
    function array_counti_value($key)
    {
        $newArray = array();
        foreach ($key as $value)
        {
            if (!array_key_exists(($value), $newArray))
            {
                $newArray[$value] = 0;
            }else
            {
                $newArray[$value] += 1;
            }
        }
        return $newArray;
    }
    $name = '3,4,5,6,7,8,4,4,5,6,2,2,5,3,3,5,5,3,3,3,5,5,2,1,6,6,7,8,8,9';
    $newName = explode(',', $name);
    echo '<pre>';
    // print_r($arrayName);
    print_r(array_counti_value($newName));

    /** Tạo hàm tính trung bình cộng
     * @param $x
     * @param $y
     * @param $z
     * @return float|int
     */
    function avg($x,$y,$z)
    {
        return ($x + $y + $z) / 3;
    }
    echo "Trung bình cộng của dãy số là : ".avg(10,20,10);
    echo '<br>';


    // Function by value : gọi chức năng theo giá trị
    /** add text 'Call By Value'
     * @param $str2
     */
    function adder($str2)
    {
        $str2 .= 'Call By Value';
    }
    $str = 'Hello ';
    adder($str);
    echo $str;
    echo '<br>';
    function increment($i)
    {
        $i++;
    }
    $i = 10;
    increment($i);
    echo $i;

    echo '<br>';


    // PHP Call By Reference : gọi bằng ham chiếu, gía trị sẽ bị thay đổi nếu nó được sửa đổi trong hàm.
    /**
     * @param $str2
     */
    function adders(&$str2) // Trong trường hợp này bạn cần dùng '&' với các đối số chính thức
    {
        $str2 .= 'Call By Value';
    }
    $str = 'Hello ';
    adders($str);
    echo $str;
    echo '<br>';
    function increments(&$i)
    {
        $i++;
    }
    $i = 10;
    increments($i);
    echo $i;
    echo '<br>';


    // PHP Default Argument Values Function : Xác định được đối số mặc định. Trong trường hợp không có giá trị nào thì đối số vẫn giữ nguyên mặc định
    /** Tính tổng của $n1 và $n2
     * @param int $n1
     * @param int $n2
     * @return integer $sumNumber
     */
    function sumNumber($n1=20,$n2=10){
        $n3=$n1+$n2;
        echo "Sum of numbers is: $n3<br/>";
    }
    sumNumber();
    sumNumber(20);
    sumNumber(40,40);
    echo '<pre>';

    /** Lấy dữ liệu "Making a cup of $type.\n" trong function makeCoffe
     * @param string $type
     * @return string
     */
    function makeCoffe($type = "cappuccino")
    {
        return "Making a cup of $type.\n";
    }
    echo makecoffee();
    echo makecoffee(null);
    echo makecoffee("espresso");
?>