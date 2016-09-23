<?php
require ("conexion.php");
$consulta= "SELECT * FROM placas"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
 
while($fila = mysql_fetch_array($resultado)){
	echo "<option value='".$fila['id_placas']."'>".$fila['lugar_placas']."</option>";	
}
mysql_close($conexion);
?>