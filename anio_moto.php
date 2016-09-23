<?php
	require ("php/conexion.php");
	$consulta= "SELECT * FROM moto_anio_precio INNER JOIN moto on moto.id_moto=moto_anio_precio.ref_moto 
	INNER JOIN anio_moto on anio_moto.id_anio_moto= moto_anio_precio.ref_anio WHERE moto.id_moto='".$_GET['c']."'"; 
	$resultado= mysql_query($consulta) or die (mysql_error());
	?>
	<?php
	while($fila = mysql_fetch_array($resultado)){	
				echo "<option value='".$fila['id_anio_moto']."'>".$fila['anio']."</option>";
		}
?>