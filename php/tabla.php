<?php
// include("conexion.php");
$plazo1=1;
include("consultas.php");

// echo "hola";
// echo $_POST['tiempo'];
	//////////////////// total///////////
if ($_POST['tiempo']==1) {
	# code...
	$vehiculo=round($importe/52,2,2);
	$precio_se=round($final/52,2);
	$total=round($vehiculo+$precio_se,2);
}
if ($_POST['tiempo']==2) {
	# code...
	/////////////////// seguro /////////////
	$vehiculo=round($importe/24,2);
	$precio_se=round($final/24,2);
	$total=round($vehiculo+$precio_se,2);
}
if ($_POST['tiempo']==3) {
	# code...
	/////////////////// totales ////////////
	$vehiculo=round($importe/12,2);
	$precio_se=round($final/12,2);
	$total=round($vehiculo+$precio_se,2);
}

echo	"<div style='display:none'>
		<div class='col-md-4'>
			<label>pagos</label>
			<input type='text' id='pagos' name='pagos' value='".$_POST['tiempo']."' class='form-control'>
		</div>
		<div class='col-md-4'>
			<label>modelo</label>
			<input type='text' id='modelo' name='modelo' value='".$modelo."' class='form-control'>
		</div>
		<div class='col-md-4'>
			<label>seguros</label>
			<input type='text' id='seguros' name='seguros' value='".$_POST['seguros']."' class='form-control'>
			<input type='text' id='credito' name='credito' value='".$_POST['credito']."' class='form-control'>
		</div>
		<div class='col-md-4'>
			<label>vehiculo</label>
			<input type='text' id='vehiculo' name='vehiculo' value='".$vehiculo."' class='form-control'>
		</div>
		<div class='col-md-4'>
			<label>seguro</label>
			<input type='text' id='seguro1' name='seguro1' value='".$precio_se."' class='form-control'>
		</div>
		<div class='col-md-4'>
			<label>total</label>
			<input type='text' id='total' name='total' value='".$total."' class='form-control'>
		</div>
		</div>";
?>