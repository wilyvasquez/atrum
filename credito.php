<?php
require ("conexion.php");
$consulta= "SELECT * FROM credito"; 
$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
 
while($fila = mysql_fetch_array($resultado)){
	echo "<option value='".$fila['tipo_credito']."'>".$fila['tipo_credito']."</option>";	
}
mysql_close($conexion);
?>