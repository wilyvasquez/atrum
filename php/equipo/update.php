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
if (!empty($_POST['moto'])) {
	# code...
	$moto=$_POST['moto'];
	$motor=$_POST['motor'];
	$trasmision=$_POST['trasmision'];
	$timo=$_POST['timo'];
	$cilindros=$_POST['cilindros'];
	$diametro=$_POST['diametro'];
	$carrera=$_POST['carrera'];
	$desplazamiento=$_POST['desplazamiento'];
	$compresion=$_POST['compresion'];
	$lubricacion=$_POST['lubricacion'];
	$combustible=$_POST['combustible'];
	$arranque=$_POST['arranque'];
	mysql_query("UPDATE moto set motor='$motor', trasmision='$trasmision', tipo_motor='$timo', numero_cilindros='$cilindros', diametro='$diametro', carrera='$carrera', desplazamiento='$desplazamiento', relacion_compresion='$compresion', sistema_lubricacion='$lubricacion', sistema_combustible='$combustible', sistema_arranque='$arranque' where id_moto='$moto'");
}
?>