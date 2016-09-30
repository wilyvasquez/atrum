<?php
	require ("conexion.php");
	$consulta= "SELECT * FROM tiempo INNER JOIN credito_tiempo ON credito_tiempo.ref_tiempo=tiempo.id_tiempo
				INNER JOIN tipo_credito ON tipo_credito.id_credito=credito_tiempo.ref_credito 
				WHERE tipo_credito.id_credito='".$_GET['c']."'"; 
	$resultado= mysql_query($consulta) or die (mysql_error());
	?>
	<?php
	while($fila = mysql_fetch_array($resultado)){	
				echo "<option value='".$fila['id_tiempo']."'>".$fila['tiempo']."</option>";
		}
?>