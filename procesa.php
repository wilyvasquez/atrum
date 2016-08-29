<?php
if(isset($_POST["idmarca"]))
	{
		include('conexion.php');
		$strConsulta = "select * from alta_equipo where tipo_equipo = ".$_POST["idmarca"];
		$result = $conexion->query($strConsulta);
		

		while( $fila = $result->fetch_array() )
		{
			$opciones.='<option>'.$fila["modelo"].'</option>';
		}

		echo $opciones;
	}
?>