<?php
	//////////////////// vehiculo///////////
	$semanas=($importe/52);
	$quincenas=($importe/24);
	$meses=($importe/12);
	/////////////////// seguro /////////////
	$semanas_se=($final/52);
	$quincenas_se=($final/24);
	$meses_se=($final/12);

	/////////////////// totales ////////////
	$total_se=($semanas+$semanas_se);
	$total_qui=($quincenas+$quincenas_se);
	$total_mes=($meses+$meses_se);
?>