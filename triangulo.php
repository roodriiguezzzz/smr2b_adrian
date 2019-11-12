<?php
function segun_lados($a,$b,$c){
$r='escaleno';
if($b==$c or $a==$b or $c==$a)
	$r='isósceles';
if($a==$b and $b==$c)
	$r='equilatero';

return $r;
}

echo segun_lados(1,1,1).' = equilatero<br/>';
echo segun_lados(2,1,1).' = isósceles<br/>';
echo segun_lados(3,2,1).' = escaleno<br/>';
echo segun_lados(2,2,2).' = equilátero<br/>';
echo segun_lados(2,1,2).' =isósceles<br/>';
echo segun_lados(3,1,2).' = escaleno<br/>';
echo segun_lados(3,3,3).' = equilátero<br/>';
echo segun_lados(3,1,1).' = isósceles<br/>';
echo segun_lados(1,3,2).' = escaleno<br/>';
echo segun_lados(1,2,1).' = isósceles<br/>';
echo segun_lados(3,1,3).' = isósceles<br/>';