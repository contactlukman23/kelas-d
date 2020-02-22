<?php 

echo time()."<br><br>";
echo date("l",mktime(0,0,0,9,6,2002))."<br><br>";
echo date("l",strtotime("6 sep 2002"));

?>