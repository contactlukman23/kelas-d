<?php

echo time() . "<br><br>";
echo date("l", mktime(0,0,0,4,19,2003)) . "<br><br>";
echo date("l", strtotime("19 apr 2003"));

?>