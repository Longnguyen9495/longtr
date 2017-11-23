<body>
<form method="POST">
    Tổng của hai số là
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