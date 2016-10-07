<?php
include("php/conexion.php");
session_start();
session_destroy();
if (!empty($_GET['id'])) {
	# code...
	$id=$_GET['id'];
	mysql_query("DELETE FROM accesorio where ref_usuario=$id");
}
header("Location: index.php");
?>