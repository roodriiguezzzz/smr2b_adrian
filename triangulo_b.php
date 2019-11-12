<?php
function segun_angulos($a,$b,$c){
$r='acutangulo';
if($b==90 or $a==90 or $c==90)
	$r='rectangulo';
if($a>90 or $b>90 or $c>90)
	$r='obtusangulo';

return $r;
}

echo segun_angulos(30,90,60).' = rectangulo<br/>';
echo segun_angulos(80,40,60).' = acutangulo<br/>';
echo segun_angulos(110,40,30).' = obtusangulo<br/>';
echo segun_angulos(20,80,80).' = acutangulo<br/>';
echo segun_angulos(90,10,80).' = rectangulo<br/>';
echo segun_angulos(130,30,20).' = obtusangulo<br/>';
echo segun_angulos(50,50,80).' = acutangulo<br/>';
echo segun_angulos(60,30,90).' = rectangulo<br/>';