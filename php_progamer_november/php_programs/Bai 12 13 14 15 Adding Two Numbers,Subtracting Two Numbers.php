<body>
<form method="POST">
    Tổng của hai số là :
    <br></br>
    <input type="number" name="number1"><br></br>
    <input type="number" name="number2"><br></br>
    <input type="submit" name="submit" value="Tính">
</form>
</body>
<?php
    if(isset($_POST['submit']))
    {
        $numberx = $_POST['number1'];
        $numbery = $_POST['number2'];
        $sum = $numberx * $numbery;
        echo $sum;
    }
?>
<br>
</br>
<body>
<form method="POST">
    Hiệu của hai số là :
    <br></br>
    <input type="number" name="numberx"><br></br>
    <input type="number" name="numbery"><br></br>
    <input type="submit" name="submits" value="Tính">
</form>
</body>
<?php
    if(isset($_POST['submits']))
    {
        $numberxx = $_POST['numberx'];
        $numberyy = $_POST['numbery'];
        $sums = $numberxx - $numberyy;
        echo $sums;
    }
?>
<br>
</br>
<body>
<form method="POST">
    Tính diện tích tam giác :
    <br>
    </br>
    <input type="number" name="base"><br></br>
    <input type="number" name="height"><br></br>
    <input type="submit" name="area">
</form>
</body>
<?php
    if(isset($_POST['area'])){
        $bases = $_POST['base'];
        $height = $_POST['height'];
        $sumss = ($bases * $height) / 2;
        echo $sumss;
    }
?>
<br>
</br>
<body>
<form method="POST">
    Tính diện tích hình chữ nhật :
    <br>
    </br>
    <input type="number" name="length"><br></br>
    <input type="number" name="width"><br></br>
    <input type="submit" name="areas">
</form>
</body>
<?php
    if(isset($_POST['areas'])){
        $lengths = $_POST['length'];
        $widths = $_POST['width'];
        $sumsss = $lengths * $widths;
        echo $sumsss;
    }
?>