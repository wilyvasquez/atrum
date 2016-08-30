<?php
	echo '<label for="tipo">MODELO </label>';
	echo '<select name="modelo" class="form-control">';
	require ("conexion.php");
	$consulta= "SELECT * FROM alta_equipo"; 
	$resultado= mysql_query($consulta,$conexion) or die (mysql_error());
	?>
	<!-- <option value="">Seleccione</option> -->
	<?php
	while($fila = mysql_fetch_array($resultado)){	
			if($fila['ref_tipo'] == $_GET['c']){
				echo "<option value='".$fila['id_equipo']."'>".$fila['modelo']."</option>";
			}
		}
	mysql_close($conexion);
	echo '</select>';
?>