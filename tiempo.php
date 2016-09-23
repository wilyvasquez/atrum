<?php
	require ("php/conexion.php");
	$consulta= "SELECT * FROM anios_credito INNER JOIN tipo_credito on tipo_credito.id_credito=anios_credito.ref_credito INNER JOIN anios on anios.id_anios= anios_credito.ref_anios WHERE tipo_credito.id_credito=1"; 
	$resultado= mysql_query($consulta) or die (mysql_error());
	?>
	<?php
	while($fila = mysql_fetch_array($resultado)){	
				echo "<option value='".$fila['id_anios']."'>".$fila['anios']."</option>";
		}
?>