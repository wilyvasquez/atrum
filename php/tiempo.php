<?php
	if (!empty($_POST['tiempo'])) {
		# code...
		if ($_POST['tiempo']==1) {
			# code...
			$numero1=round($importe/52,2);
			$numero2=round($final/52,2);
			$numero3=round($semanas+$semanas_se,2);
		}
		if ($_POST['tiempo']==2) {
			# code...
			$numero1=round($importe/24,2);
			$numero2=round($final/24,2);
			$numero3=round($quincenas+$quincenas_se,2);
		}
		if ($_POST['tiempo']==3) {
			# code...
			$numero1=round($importe/12,2);
			$numero2=round($final/12,2);
			$numero3=round($meses+$meses_se,2);
		}
	}
?>