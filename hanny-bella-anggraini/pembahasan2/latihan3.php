<?php

echo time() ."<br><br>";
echo date("l", mktime (0,0,0,6,29,2003))."<br><br>";
echo date("l",strtotime("29 jun 2003"));

?>