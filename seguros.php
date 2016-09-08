<?php
	echo '<label for="seguros">TIPO DE SEGURO </label>';
	echo '<select id="seguros" name="seguros" class="form-control">';
	require ("conexion.php");
	$consulta= "SELECT * FROM credito 
				INNER JOIN segu_cre on segu_cre.ref_credito=credito.id_credito
				INNER JOIN seguro ON seguro.id_seguro=segu_cre.ref_seguro
				WHERE credito.tipo_credito='".$_GET['c']."'"; 
	$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
	?>
	<!-- <option value="">Seleccione</option> -->
	<?php
	while($fila = mysql_fetch_array($resultado)){	
			// if($fila['ref_tipo'] == $_GET['c']){
				echo "<option value='".$fila['id_seguro']."'>".$fila['tipo_seguro']."</option>";
			// }
		}
	mysql_close($conexion);
	echo '</select>';
?>