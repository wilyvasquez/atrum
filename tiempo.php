<?php
	echo '<label for="tiempo">TIEMPO </label>';
	echo '<select id="tiempo" name="tiempo" class="form-control">';
	require ("conexion.php");
	$consulta= "SELECT * FROM tiempo inner JOIN cre_tiempo on cre_tiempo.ref_tiempo=tiempo.id_tiempo
					 INNER JOIN credito on credito.id_credito= cre_tiempo.ref_credito
                     WHERE credito.tipo_credito='".$_GET['c']."'"; 
	$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
	?>
	<!-- <option value="">Seleccione</option> -->
	<?php
	while($fila = mysql_fetch_array($resultado)){	
			// if($fila['ref_tipo'] == $_GET['c']){
				echo "<option value='".$fila['id_tiempo']."'>".$fila['tipo_tiempo']."</option>";
			// }
		}
	mysql_close($conexion);
	echo '</select>';
?>