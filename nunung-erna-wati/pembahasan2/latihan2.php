<?php 

echo time()."<br><br>";
echo date("l",time()+172800)."<br><br>";
echo date("l",time()+60*60*24*3)."<br><br>";
echo date("l",time()-60*60*24*50);

 ?>