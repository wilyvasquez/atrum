<?php
include("../conexion.php");
if (!empty($_POST['idcredito'])) {
	# code...
	$idcredito=$_POST['idcredito'];
 	mysql_query("DELETE FROM tipo_credito WHERE id_credito=$idcredito");
}
if (!empty($_POST['credito']and$_POST['seguro'])) {
	# code...
	$idcredito=$_POST['credito'];
	$seguro=$_POST['seguro'];
 	mysql_query("DELETE FROM seguro_credito WHERE ref_credito=$idcredito and ref_seguro=$seguro");
}
if (!empty($_POST['credito']and$_POST['tiempo'])) {
	# code...
	$idcredito=$_POST['credito'];
	$tiempo=$_POST['tiempo'];
 	mysql_query("DELETE FROM anios_credito WHERE ref_credito=$idcredito and ref_anios=$tiempo");
}
if (!empty($_POST['credit']and$_POST['plazo'])) {
	# code...
	$idcredito=$_POST['credit'];
	$plazo=$_POST['plazo'];
 	mysql_query("DELETE FROM credito_tiempo WHERE ref_tiempo=$plazo and ref_credito=$idcredito");
}
?>