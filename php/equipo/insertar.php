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
?>