<?php 

echo time() . "<br><br>";
echo date("l", mktime(0, 0, 0, 11, 8, 1992)) . "<br><br>";
echo date("l", strtotime("8 Nov 1992"));

?>