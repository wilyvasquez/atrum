<?php
	require ("php/conexion.php");
	$anios=$_GET['c'];
	$consulta= "SELECT * FROM anios INNER JOIN anios_enganche on anios_enganche.ref_anios=anios.id_anios INNER JOIN enganche on enganche.id_enganche=anios_enganche.ref_enganche 
		WHERE anios.id_anios='".$anios."'"; 
	$resultado= mysql_query($consulta) or die (mysql_error());
	?>
	<?php
	while($fila = mysql_fetch_array($resultado)){	
				echo "<option value='".$fila['id_enganche']."'>".$fila['enganche']."</option>";
		}
?>