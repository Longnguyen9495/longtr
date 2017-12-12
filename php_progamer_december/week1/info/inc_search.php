<?php
session_start();
if (isset($_GET['action'])) {
    $keyword = $_GET['search'];
    foreach ($_SESSION['start'] as $key => $value) {
        if (strcmp($keyword, $value['email'])) {
            ?>
            <body>

            </body>
            <?php
        } else {
            ?>
            <body>
            <table class="table col-sm-12 table-bordered" style="margin: 0 auto;">
                <thead>
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['password'] ?></td>
                </tr>
                </tbody>
            </table>
            </body>
            <?php
        }
    }
}
?>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<form action="" method="get" class="col-sm-10" style="margin: 0 auto;">
    <div class="form-group">
        <label for="">Tên tìm kiếm</label>
        <input class="form-control" type="text" value="<?php echo $keyword ?>" name="search" placeholder="Tên tìm kiếm">
    </div>

    <button type="submit" name="action">Tìm Kiếm</button>

    <button><a href="inc_insert.php">Danh Sách</a></button>
</form>

</body>
</html>


