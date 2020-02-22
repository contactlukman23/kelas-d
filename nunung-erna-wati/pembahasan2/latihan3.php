<?php 

echo time()."<br><br>";
echo date("l",mktime(0,0,0,9,9,2002))."<br><br>";
echo date("l",strtotime("9 sep 2002"));

 ?>