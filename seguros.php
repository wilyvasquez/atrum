<?php
	echo '<label for="tipo">TIPO DE SEGURO </label>';
	echo '<select name="seguros" class="form-control">';
	require ("conexion.php");
	$consulta= "SELECT * FROM seguro"; 
	$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
	?>
	<option value="">Seleccione</option>
	<?php
	while($fila = mysql_fetch_array($resultado)){	
			// if($fila['ref_tipo'] == $_GET['c']){
				echo "<option value='".$fila['id_seguro']."'>".$fila['tipo_seguro']."</option>";
			// }
		}
	mysql_close($conexion);
	echo '</select>';
?>