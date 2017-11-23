<body>  
 <form method="post">  
     Enter the Number:  
   <input type="number" name="number">  
   <input type="submit" value="Submit">  
  </form>  
</body>  
<?php
    $num = $_POST['number'];
    $total=0;  
    $x=$num;  
    while($x!=0)  
    {  
        $rem=$x%10;
        $total=$total+$rem*$rem*$rem;  
        $x=$x/10;  
    }  
    if($num==$total)  
    {  
        echo "Yes it is an Armstrong number";  
    }  
    else  
    {  
        echo "No it is not an armstrong number";  
    }  
?>  