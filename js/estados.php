<?php
require ("conexion.php");
$consulta= "SELECT * FROM tipo_moto"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
 
while($fila = mysql_fetch_array($resultado)){
	echo "<option value='".$fila['id_tipo']."'>".$fila['tipo']."</option>";	
}
mysql_close($conexion);
?>