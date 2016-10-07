<?php
include("../conexion.php");
if (!empty($_POST['moto'])) {
	# code...
	$moto=$_POST['moto'];
	$anio=$_POST['anio'];
	$costo=$_POST['costo'];
	mysql_query("INSERT INTO precio_moto VALUES ('id','$costo')");
	$ultimo = mysql_insert_id();
 	mysql_query("INSERT INTO moto_anio_precio VALUES ('id','$moto','$anio','$ultimo')");
}
if (!empty($_POST['tipo'])) {
	# code...
	$tipo=$_POST['tipo'];
	$seguro=$_POST['seguro'];
	$cosegu=$_POST['cosegu'];
 	mysql_query("INSERT INTO moto_seguro VALUES ('id','$seguro','$tipo','$cosegu')");
}
if (!empty($_POST['credito'])) {
	# code...
	$credito=$_POST['credito'];
	$seguro2=$_POST['seguro2'];
 	mysql_query("INSERT INTO seguro_credito VALUES ('id','$credito','$seguro2')");
}
if (!empty($_POST['credito2'])) {
	# code...
	$credito2=$_POST['credito2'];
	$tiempo=$_POST['tiempo'];
 	mysql_query("INSERT INTO anios_credito VALUES ('id','$credito2','$tiempo')");
}
if (!empty($_POST['credito3'])) {
	# code...
	$credito3=$_POST['credito3'];
	$enganche=$_POST['enganche'];
 	mysql_query("INSERT INTO anios_enganche VALUES ('id','$credito3','$enganche')");
}
if (!empty($_POST['credi'])) {
	# code...
	$credito=$_POST['credi'];
	$lapso=$_POST['lapso'];
 	mysql_query("INSERT INTO credito_tiempo VALUES ('id','$lapso','$credito')");
}
?>