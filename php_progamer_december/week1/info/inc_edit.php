<?php
session_start();
$id = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (isset($_POST['submit'])) {

    $_SESSION['start'][$id] = $_POST;
    header('location:inc_insert.php');
}
if (array_key_exists($id, $_SESSION['start']))
{
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
<form action="" method="post" class="col-sm-10" style="margin: 20px">
    <legend>Chỉnh Sửa Cấu Hình</legend>
    <div class="form-group">
        <label for="">Email</label>
        <input class="form-control" value="<?php echo $_SESSION['start'][$id]['email'] ?>" type="text" name="email"
               placeholder="tên truy cập....">
    </div>

    <div class="form-group">
        <label for="">Password</label>
        <input class="form-control" value="<?php echo $_SESSION['start'][$id]['password'] ?>" type="text"
               name="password" placeholder="năm sinh....">
    </div>

    <button class="btn-primary" name="submit" type="submit">Sửa</button>
</form>
</body>
<?php
} else {
    header('location:inc_insert.php');
}
?>

