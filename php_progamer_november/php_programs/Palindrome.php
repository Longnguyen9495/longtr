<?php  
    function adder(&$str2)  
    {  
        $str2 .= 'Call By Reference';  
    }  
    $str = 'Hello ';  
    adder($str);  
    echo $str;  
    ?>  
    <?php  
    function sayHello($name="Sonoo"){  
    echo "Hello $name<br/>";  
    }  
    sayHello("Rajesh");  
    sayHello();//passing no value  
    sayHello("John");  
?> 