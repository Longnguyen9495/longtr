<html>
<?php
if(!isset($_SESSION))
{
    session_start();
}
require_once("product.php");
require_once ("inc-dbcontroller.php")
?>
<head>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    </head>
</head>
<body>
<form action="" method="post" role="form">
    <legend ><h1 style="text-align: center">Kho Hàng Của Bạn</h1></legend>
    <?php foreach ($product as $key => $value) { ?>

        <table class="table table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh minh họa</th>
                <th>Hãng sản xuất</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Tổng giá</th>
                <th>Mua hàng</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><img class="img-reponsive" style="max-width: 50px" src="<?php echo $value['img'] ?>" alt=""></td>
                <td><?php echo $value['manufacturer'] ?></td>
                <td><?php echo $value['stock'] ?></td>
                <td><?php echo $value['price'] ?></td>
                <td><input type="text" value="<?php echo $value['price'] * $value['id'] ?>"></td>
                <td><a href='delete.php?id=".$value['id']."'> Xoa </a></td>
            </tr>
            </tbody>
        </table>
    <?php } ?>
</form>
</body>
</html>