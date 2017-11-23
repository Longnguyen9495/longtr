<?php
    $number = 0;
    $number1 = 0;
    $number2 = 1;
    echo $number1.' '.$number2.' ';
    while($number < 10){
        $number3 = $number2 + $number1;
        echo $number3.' ';
        $number1 = $number2;
        $number2 = $number3;
        $number = $number + 1;
    }
?>