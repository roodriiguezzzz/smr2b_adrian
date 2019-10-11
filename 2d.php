<?php
function calcular($a,$b){
/*
$a=5;
$b=6;
*/
echo '+ : '.($a+$b).'<br>';
echo '- : '.($a-$b).'<br>';
echo '* :'.($a*$b).'<br>';
if($b!=0) echo '/ :'.($a/$b).'<br>';
}
calcular(8,0);
calcular(8,2);