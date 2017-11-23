<body>
<form method="POST">
    Tinh năm nhuận hay không nhuận
    <br>
    </br>
    <input type="text" name="year"><br></br>
    <input type="submit" name="yearsubmit" value="xem">
</form>
</body>
<?php
    if (isset($_POST['yearsubmit'])){
        $year = $_POST['year'];
        if($year == 0){
            echo "Vui lòng nhập năm vào ô trống";
        }else{
            if(($year % 4) and ($year % 100 !=0) or ($year % 400)){
                echo "Năm".' '.$year.' '."là năm nhuận";
            }else{
                echo "Năm".' '. $year.' '."không phải là năm nhuận";
            }
        }
        
    }

?>