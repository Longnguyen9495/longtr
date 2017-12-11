<?php
    /** Session :
     *  Cú pháp
     *  Cách sử dụng
     */
    echo '<pre>';
    // thiết lập session
    session_start();



?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
<form action="" method="get">
<table class="table table-hover">
    <thead>
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>Year</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($_SESSION['infomation'] as $key => $value) { ?>
    <tr>
        <td><?php echo $value['id']?></td>
        <td><?php echo $value['name']?></td>
        <td><?php echo $value['year']?></td>
        <td><a href="info/inc_delete.php?id=<?php echo $value['id']?>">delete</a></td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</form>
</body>
</html>
