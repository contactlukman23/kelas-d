<?php

echo time (). "<br><br>";
echo date ("l", mktime(0,0,0,11,22,2003)). "<br><br>";
echo date ("l", strtotime ("22 nov 2003"));

?>