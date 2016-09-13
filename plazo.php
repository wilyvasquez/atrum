<?php
	echo '<label for="plazo">CREDITO A </label>';
	echo '<select id="plazo1" name="plazo1" class="form-control">';
	require ("conexion.php");
	$consulta= "SELECT * FROM credito INNER JOIN anio_credito on anio_credito.ref_credito=credito.id_credito INNER JOIN anios ON anios.id_anios=anio_credito.ref_anios WHERE credito.tipo_credito='".$_GET['c']."'"; 
	$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
	?>
	<!-- <option value="">Seleccione</option> -->
	<?php
	while($fila = mysql_fetch_array($resultado)){	
			// if($fila['ref_tipo'] == $_GET['c']){
				echo "<option value='".$fila['id_anios']."'>".$fila['anios']."</option>";
			// }
		}
	mysql_close($conexion);
	echo '</select>';
?>