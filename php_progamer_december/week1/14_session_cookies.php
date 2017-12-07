<?php
    /** Session :
     *  Cú pháp
     *  Cách sử dụng
     */
    echo '<pre>';
    // thiết lập session
    session_start();
    $_SESSION['id'] = 1;
    $_SESSION['name'] = 'nguyễn long';
    $_SESSION['year'] = '09/04/1995';
    // gán giá trị
    $info = array("nguyễn long","1995");
    $_SESSION['user'] = $info;
    $_SESSION['start'] = array();
    var_dump($_SESSION);
    $_SESSION['start'][] = [
        'name' => 'phú',
        'year' => 22
    ];
    array_push($_SESSION['start'],array("name"=>"long","year"=>22));
    $_SESSION['start'][] = [
        'name' => "vân anh",
        'year'  => 24
    ];
    $_SESSION['start'][] = [
        'name' => "chiến",
        'year'  => 34
    ];
    echo '<br>';
    // Kiểm tra quy có trong start hay không ?
    if (in_array(array("name"=>"quy","year"=>25),$_SESSION['start'],true))
    {
        echo "oke";
    }else
    {
        // thêm quy vào mảng nếu chưa có
        array_push($_SESSION['start'],array("name"=>"quy","year"=>25));
    }
    var_dump($_SESSION['start']);
    // Tính tổng số người trong start
    var_dump(count($_SESSION['start']));
    // in ra html
    // xóa
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
<table class="table table-hover">
    <thead>
    <tr>
        <th>Name</th>
        <th>Year</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($_SESSION['start'] as $key => $value) { ?>
    <tr>
        <td><?php echo $value['name']?></td>
        <td><?php echo $value['year']?></td>
        <td><a href="javascript:;"><?php unset($_SESSION['start'][$key])?>delete</a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>
