<?php
    echo "<h3>Php While loop</h3>";
    echo '<pre>';
    /** Cú Pháp của vòng lặp while
     * While(điều kiện)
        {
            Hành động – thực thi
        }
     * Vòng lặp này phải thõa mãn điều kiện mơí thực hiện vòng lặp
     */
    /** Cú pháp của vòng lặp do while
     * Do
        {
            Hành động thực thi
        }while(điều kiện)
     * Vòng lặp đc thực thi ít nhất một lần, sẽ thực hiện vòng lặp trước khi kiểm tra điêù kiện
     */
    echo '<br>';
    echo "<h3>Example 1: Liệt kê các số nhỏ hơn 10</h3>";
    # Example 1
    /** Liệt kê giá trị nhỏ hơn 10
     * @param integer $i
     * @return integer|null
     */
    $i = 1;
    while ($i <= 10) {
        echo $i++.'<br/>';
    }
    echo '<br>';
    $i = 1;
    while ($i <= 10):
        echo $i.'<br/>';
        $i++;
    endwhile;
    echo '<br>';
    echo "<h3>Example 2: Xây dựng Kim Tự Tháp =))</h3>";
    # Example 2
    /** Xây dựng kim tự tháp bằng vòng lặp while
     * @param integer $i
     * @return integer|null
     */
    $i=1;
    while($i<=5)
    {
        $j=1;
        while($j<=$i)
        {
            echo"*&nbsp&nbsp";
            $j++;
        }
        echo"<br>";
        $i++;
    }
    echo '<br>';
    echo "<h3>Example 3: Vòng lặp while với mảng (array)</h3>";
    # Example 3
    /** Liệt kê phần tử trong mảng nhờ dùng vòng lặp while
     * @param array $arrayWhile
     * @return string
     */
    $arrayWhile = array("orange", "banana", "apple", "raspberry");

    $i = 0;
    while ($i < count($arrayWhile)) {
        $a = $arrayWhile[$i];
        echo $a ."\n";
        $i++;
    }
    echo '<br>';
    echo "<h3>Example 4: Bài toán đơn giản về vòng lặp do while</h3>";
    # Example 4
    /**
     *
     */
    $i = 0;
    do
    {
        echo $i++.'<br/>';
    }while($i <= 5);

