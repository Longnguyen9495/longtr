
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
<form method="POST" style="margin: 10px">
    Thêm vào danh sách :
    <br></br>
    <input type="text" name="name" placeholder="name..."><br></br>
    <input type="text" name="year" placeholder="year..."><br></br>
    <input type="submit" name="submit" value="Tính">
</form>
<?php
session_start();
echo '<pre>';
if(isset($_POST['submit']))
{
    $_SESSION['start'][] = $_POST;
    header("location:insert.php");
}
?>
<br>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>name</th>
            <th>year</th>
            <th>edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($_SESSION['start'] as $key => $value) {?>
        <tr>
                <td><?php echo $value['name']?></td>
                <td><?php echo $value['year']?></td>
                <td><a href="../info/edit.php?id=<?php echo $key?>">Sửa</a></td>
                <td><a href="../info/delete.php?id=<?php echo $key?>">Xóa</a></td>
        </tr>
        <?php }?>
        </tbody>
    </table>
</body>
</html>
