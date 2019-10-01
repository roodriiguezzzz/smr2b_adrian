<a href="http://192.168.0.177/smr2b_jesus/smr2b.php">jesus</a>
adrian
<a href="http://192.168.0.171/smr2b_cesar/smr2b.php">cesar</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)
?>