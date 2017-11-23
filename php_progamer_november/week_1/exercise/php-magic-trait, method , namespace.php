<?php
echo "<h3>Example for __TRAIT__</h3>";  
trait created_trait{  
function abc(){  
echo __TRAIT__;//will print name of the trait created_trait  
}  
}  
class anew{  
use created_trait;  
}  
$a = new anew;  
$a->abc();

echo "<h3>Example for __METHOD__</h3>";  
class meth{  
public function __construct() {  
echo __METHOD__ . "<br><br>";//print meth::__construct  
}  
public function meth_fun(){  
echo __METHOD__;//print meth::meth_fun  
}  
}  
$a = new meth;  
$a->meth_fun();
echo "<h3>Example for __NAMESPACE__</h3>";  
class name{  
public function __construct() {  
echo 'This line will be printed on calling namespace';  
}  
}  
$clas_name= __NAMESPACE__ .'\name';  
$a = new $clas_name;  
?>  