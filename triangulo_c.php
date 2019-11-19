<?php
function segun_lados($a,$b,$c){
$r='escaleno';
if($b==$c or $a==$b or $c==$a)
	$r='isósceles';
if($a==$b and $b==$c)
	$r='equilatero';

return $r;
}

function segun_angulos($A,$B,$C){
$r='acutangulo';

if($B==90 or $A==90 or $C==90)
	$r='rectangulo';
	
if($A>90 or $B>90 or $C>90)
	$r='obtusangulo';

return $r;
}

function trilados ($a,$b,$c,$A,$B,$C){
	$r1=segun_lados($a,$b,$c);
	$r2=segun_angulos($A,$B,$C);
	
	return $r1.' - '.$r2;
	}
	
	echo trilados (2,2,2,60,60,60), '=> equilatero acutangulo <br>';
	echo trilados (2,2,1,90,45,45), '=> isosceles rectangulo <br>';
	echo trilados (1,3,2,120,30,30),'=> escaleno obtusangulo <br>';
	echo trilados (1,1,1,90,30,60), '=> equilatero rectangulo <br>';
	echo trilados (2,1,3,80,80,20), '=> escaleno acutangulo <br>';
	echo trilados (1,3,3,90,40,50), '=> isosceles rectangulo <br>';
	echo trilados (1,1,1,40,40,100),'=> equilatero obtusangulo <br>';