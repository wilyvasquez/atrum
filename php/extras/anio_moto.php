<?php
require ("conexion.php");
$consulta= "SELECT * FROM anio_moto"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
 
while($fila = mysql_fetch_array($resultado)){
	echo "<option value='".$fila['id_anio_moto']."'>".$fila['anio']."</option>";	
}
mysql_close($conexion);
?>