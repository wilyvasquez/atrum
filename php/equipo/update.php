<?php
include("../conexion.php");
if (!empty($_POST['credito'])) {
	# code...
	$credito=$_POST['credito'];
	$base=$_POST['base'];
	$costo=$_POST['costo'];
	mysql_query("UPDATE tipo_credito set tasa_base='$base', costo_apertura='$costo' where id_credito='$credito'");
}
if (!empty($_POST['placa'])) {
	# code...
	$placa=$_POST['placa'];
	$costoape=$_POST['costoape'];
	mysql_query("UPDATE placas set precio='$costoape' where id_placas='$placa'");
}
?>