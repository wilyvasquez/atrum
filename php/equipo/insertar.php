<?php
include("../conexion.php");
if (!empty($_POST['credito'])) {
	# code...
	$credito=$_POST['credito'];
 	$base=$_POST['base'];
 	$apertura=$_POST['apertura'];
 	mysql_query("INSERT INTO tipo_credito VALUES ('id','$credito', '$base','$apertura')");
}
if (!empty($_POST['anios'])) {
	# code...
	$anios=$_POST['anios'];
 	$meses=$_POST['meses'];
 	mysql_query("INSERT INTO anios VALUES ('id','$anios', '$meses')");
}
if (!empty($_POST['seguro'])) {
	# code...
	$seguro=$_POST['seguro'];
 	mysql_query("INSERT INTO tipo_seguro VALUES ('id','$seguro')");
}
if (!empty($_POST['enganche'])) {
	# code...
	$enganche=$_POST['enganche'];
 	mysql_query("INSERT INTO enganche VALUES ('id','$enganche')");
}
if (!empty($_POST['anio'])) {
	# code...
	$anio=$_POST['anio'];
 	mysql_query("INSERT INTO anio_moto VALUES ('id','$anio')");
}
if (!empty($_POST['placas'])) {
	# code...
	$placas=$_POST['placas'];
	$precio=$_POST['precio'];
 	mysql_query("INSERT INTO placas VALUES ('id','$placas','$precio')");
}
if (!empty($_POST['tiempo'])) {
	# code...
	$tiempo=$_POST['tiempo'];
 	mysql_query("INSERT INTO tiempo VALUES ('id','$tiempo')");
}
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
 	mysql_query("INSERT INTO credito_tiempo VALUES ('id','$tiempo','$credito2')");
}
if (!empty($_POST['credito3'])) {
	# code...
	$credito3=$_POST['credito3'];
	$enganche=$_POST['enganche'];
 	mysql_query("INSERT INTO credito_enganche VALUES ('id','$credito3','$enganche')");
}
?>