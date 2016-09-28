<?php
	require ("../conexion.php");
	$consulta= "SELECT * FROM tiempo"; 
	$resultado= mysql_query($consulta) or die (mysql_error());
	?>
	<?php
	while($fila = mysql_fetch_array($resultado)){	
				echo "<option value='".$fila['id_tiempo']."'>".$fila['tiempo']."</option>";
		}
?>