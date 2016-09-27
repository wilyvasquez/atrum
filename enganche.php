<?php
	require ("php/conexion.php");
	$consulta= "SELECT * FROM tipo_credito INNER JOIN credito_enganche on credito_enganche.ref_credito=tipo_credito.id_credito INNER JOIN enganche on enganche.id_enganche=credito_enganche.ref_enganche WHERE tipo_credito.id_credito='".$_GET['c']."'"; 
	$resultado= mysql_query($consulta) or die (mysql_error());
	?>
	<?php
	while($fila = mysql_fetch_array($resultado)){	
				echo "<option value='".$fila['enganche']."'>".$fila['enganche']."</option>";
		}
?>