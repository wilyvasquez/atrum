<?php
	require ("php/conexion.php");
	$consulta= "SELECT * FROM tipo_credito INNER JOIN seguro_credito on seguro_credito.ref_credito= tipo_credito.id_credito INNER JOIN tipo_seguro on tipo_seguro.id_seguro= seguro_credito.ref_seguro WHERE tipo_credito.id_credito='".$_GET['c']."'"; 
	$resultado= mysql_query($consulta) or die (mysql_error());
	?>
	<?php
	while($fila = mysql_fetch_array($resultado)){	
				echo "<option value='".$fila['id_seguro']."'>".$fila['tipo_seguro']."</option>";
		}
?>