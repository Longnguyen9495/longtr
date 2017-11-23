<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php
    echo '<h3>Php Variable</h3>';
    // Variable: String, integer, float

    $varialbeString = 'My name is Long'; // Khai báo string
    
    $variableInteger = 1995; // Khai báo Integer

    $variableFloat = 96.69; // Khai báo float

    echo "String is : $varialbeString <br/>"; // In ra giá trị string

    echo "Integer is : $variableInteger <br/>"; // In ra giá trị integer

    echo "Float is : $variableFloat <br/>"; // In ra giá trị float

    // Variable Tính toán đơn giản (cộng, trừ, nhân, chia, trung bình cộng...)
    /**
     * Tính Tổng, hiệu, trung bình cộng của 2 số $x và $y
     * @param integer
     * @return integer
     */
    $x = 10;

    $y = 5;

    $sum = $x + $y;

    $brand = $x - $y;

    $avg = ($x + $y)/2;

    echo "Sum is $sum<br/>"; // Tính tổng

    echo "Brand is $brand<br/>"; // Tính hiệu

    echo "Avg is $avg<br/>"; // Tính Trung bình cộng
?>




</body>
</html>


