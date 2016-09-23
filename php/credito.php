<?php
require ("conexion.php");
$consulta= "SELECT * FROM tipo_credito"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
 
while($fila = mysql_fetch_array($resultado)){
	echo "<option value='".$fila['id_credito']."'>".$fila['nombre_credito']."</option>";	
}
mysql_close($conexion);
?>