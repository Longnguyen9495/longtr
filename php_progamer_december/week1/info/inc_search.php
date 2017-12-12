<?php
session_start();
if (isset($_GET['action'])) {
    $keyword = $_GET['search'];
    $result = '';
    foreach ($_SESSION['start'] as $key => $value) {
        if ($keyword === $value['email']) {
            $result = $key;
            ?>
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
<?php
            break;
        } else {
            $result = "<h3>ko</h3>";
            echo
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
        <input class="form-control" type="text" value="" name="search" placeholder="Tên tìm kiếm">
    </div>

    <button type="submit" name="action" class="btn btn-primary">Tìm Kiếm</button>

    <button class="btn btn-warning"><a href="inc_insert.php">Danh Sách</a></button>
</form>

</body>
</html>


