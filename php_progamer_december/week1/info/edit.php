<?php
    session_start();
echo '<pre>';
    print_r($_SESSION['start']);
    header('location:')
 ?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
</head>
<body>
<form action="" style="margin: 10px">
    Sửa danh sách :
    <br></br>
    <input type="text" value="<?php echo $_SESSION['start']['name']?>" placeholder="name..."><br></br>
    <input type="text" value="<?php echo $_SESSION['start']['year']?>" name="year" placeholder="year..."><br></br>
    <input type="submit" name="submit" value="Sửa"><br></br>
</form>
</body>
</html>