<?php

echo time (). "<br><br>";
echo date ("l",mktime(0,0,0,10,12,2002)). "<br><br>";
echo date ("l",strtotime("12 oct 2002"));

?>