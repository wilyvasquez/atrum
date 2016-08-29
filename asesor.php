<?php
require ("conexion.php");
$consulta= "SELECT * FROM alta_personal"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
 
while($fila = mysql_fetch_array($resultado)){
	echo "<option value='".$fila['id_personal']."'>".$fila['nombre_asesor']."</option>";	
}
mysql_close($conexion);
?>