<?php
if (!empty($_POST['credito'])) {
	# code...
	if ($_POST['credito']=="CREDINOMINA") {
		# code...
		$quincenas=($importe/24);
		$quincenas_se=($final/24);
		$total_qui=($quincenas+$quincenas_se);
	}
	if ($_POST['credito']=="SUZUCREDIT") {
		# code...
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
	}
	if ($_POST['credito']=="CREDITO CASA") {
		# code...
		$meses=($importe/12);
		$meses_se=($final/12);
		$total_mes=($meses+$meses_se);
	}
}
?>