<?php
//conexion a la base de datos
mysql_connect("localhost", "root", "") or die(mysql_error()) ;
mysql_select_db("suzuki") or die(mysql_error()) ;

$id = $_GET['id'];
$consulta = "SELECT imagen FROM moto WHERE id_moto = $id";
$imagen = mysql_query($consulta);
$datos = mysql_fetch_array($imagen);
$ruta = "php/imagenes/" . $datos['imagen'];

?>