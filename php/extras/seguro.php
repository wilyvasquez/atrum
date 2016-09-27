<?php
require ("conexion.php");
$consulta= "SELECT * FROM tipo_seguro"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
 
while($fila = mysql_fetch_array($resultado)){
	echo "<option value='".$fila['id_seguro']."'>".$fila['tipo_seguro']."</option>";	
}
mysql_close($conexion);
?>