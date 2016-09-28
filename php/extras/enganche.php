<?php
require ("../conexion.php");
$consulta= "SELECT * FROM enganche"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
 
while($fila = mysql_fetch_array($resultado)){
	echo "<option value='".$fila['id_enganche']."'>".$fila['enganche']."</option>";	
}
mysql_close($conexion);
?>