<a href="http://192.168.0.101/smr2b_jesus/smr2b.php">jesus</a>
adrian
<a href="http://192.168.0.171/smr2b_cesar/smr2b.php">cesar</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f);
?>