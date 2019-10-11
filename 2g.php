<?php
function mes($n){
	$meses=[
	'Enero',
	'Febrero',
	'Marzo',
	'Abril',
	'Mayo',
	'Junio',
	'Julio',
	'Agosto',
	'Septiembre',
	'Octubre',
	'Noviembre',
	'Diciembre',
	];
	return $meses[$n-1];
}
for($i=1;$i<13;$i++){