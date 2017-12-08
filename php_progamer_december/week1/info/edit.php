<?php
    session_start();
    echo '<pre>';
    $id = '';
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
    if (isset($_POST['submit']))
    {

        $_SESSION['start'][$id] = $_POST;
        header('location:insert.php');
    }
    if (array_key_exists($id, $_SESSION['start']))
    {
        ?>
        <html>
        <head>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
        </head>
        <body>
        <form action="" style="margin: 10px" method="post">
            Sửa danh sách :
            <br></br>
            <input type="text" value="<?php echo $_SESSION['start'][$id]['name']?>" name="name" placeholder="name..."><br></br>
            <input type="text" value="<?php echo $_SESSION['start'][$id]['year']?>" name="year" placeholder="year..."><br></br>
            <input type="submit" name="submit" value="Sửa"><br></br>
        </form>
        </body>
        <?php
    }else
        {
            header('location:insert.php');
        }
?>

