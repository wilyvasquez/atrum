<?php
$res=$_POST['moto'];
$consulta = "SELECT imagen FROM moto WHERE id_moto = $res";
$imagen = mysql_query($consulta);
$datos = mysql_fetch_array($imagen);
$ruta = "php/imagenes/" . $datos['imagen'];
echo $ruta;
?>