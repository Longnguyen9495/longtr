<?php
        function Reverse($str1)  
		{  
		 $n = strlen($str1);  
		 if($n == 1)  
		 {  
			return $str1;
		 }  
		 else  
		 {  
		   $n--;  
		   return Reverse(substr($str1,1, $n)) . substr($str1, 0, 1);  
		 }  
		}  
		print_r(Reverse('234')."<br>");
		print_r(Reverse('2341')."<br>");
		print_r(Reverse('amit')."<br>");
?>