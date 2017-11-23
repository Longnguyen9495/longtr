<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document nguye</title>
</head>
<body>
 
<?php
    echo '<h3>$ & $$</h3>';
    /**
     * Khai báo $ là một biến bình thường lưu trữ các giá trị như string, integer, float Khai báo
     * $$ là một biến khai báo trong đó có giá trị của $ bên trong nó
     */
    # Example 1
    $x = 'long';

    $$x = 200;

    echo $x.'<br/>';
    echo $$x.'<br/>';
    echo $long.'<br/>';

    # Example 2
    $name = 'address';

    $$name = 'Công ty cổ phần Vật Giá Việt Nam :  số 102 thái thịnh - đống đa - hà nội';

    echo $name.'<br/>';
    echo $$name.'<br/>';
    echo $address.'<br/>';
?>

</body>
</html>


