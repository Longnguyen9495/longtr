<?php
echo '<h1>Magic constants function</h1>';
function testfunction(){
    echo 'ten cua ban la' . __function__ . "<br><br>";
}
testfunction();
function test(){
    echo 'xin chao nguyen thanh long';
}
test();
echo __function__ . '<br><br>';
?>
<?php
echo "<h3>Example for __CLASS__</h3>";  
class abc  
{  
public function __construct() {  
;  
}  
function abc_method(){  
echo __CLASS__ . "<br><br>";//print name of the class abc.  
}  
}  
$t = new abc;  
$t->abc_method();  
class first{  
function test_first(){  
echo __CLASS__;//will always print parent class which is first here.  
}  
}  
class second extends first  
{  
public function __construct() {  
;  
}  
}  
$t = new second;  
$t->test_first();
?>