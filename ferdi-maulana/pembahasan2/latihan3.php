<?php 

echo time()."<br><br>";
echo date("l",mktime(0,0,0,5,26,2003))."<br><br>";
echo date("l",strtotime("26 may 2003"));

?>