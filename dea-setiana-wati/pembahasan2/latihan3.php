<?php  

echo time()."<br><br>";
echo date("l",mktime(0,0,0,9,24,2003))."<br><br>";
echo date("l",strtotime("24 sep 2003"));


?>