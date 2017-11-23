<?php
        function ham_kiem_tra_so_nguyen_to($n)  
		{  
		 for($x = 2; $x < $n; $x++)  
		   {  
			  if($n % $x ==0)  
				{  
				  return 0;  
				}  
		   }  
		  return 1;  
		}  
		$a = ham_kiem_tra_so_nguyen_to(3);  
		if ($a==0)  
		  echo 'Đây không phải là số nguyên tố'."<br>";  
		else  
		  echo 'Đây là số nguyên tố'."<br>";
       ?>