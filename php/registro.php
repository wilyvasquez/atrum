<?php
	////////////////////// alta equipo ////////////////////////////////
	if (!empty($_POST['modelo'])) {
		# code...
		$modelo = $_POST['modelo'];
		$tipo = $_POST['tipo'];
		$costo = $_POST['costo'];
		$amplio = $_POST['amplio'];
		$basico = $_POST['basico'];
		$limitado = $_POST['limitado'];
		$motor = $_POST['motor'];
		$trasmision = $_POST['trasmision'];
		$timo = $_POST['timo'];
		$cilindros = $_POST['cilindros'];
		$diametro = $_POST['diametro'];
		$carrera = $_POST['carrera'];
		$desplazamiento = $_POST['desplazamiento'];
		$compresion = $_POST['compresion'];
		$lubricacion = $_POST['lubricacion'];
		$combustible = $_POST['combustible'];
		$arranque = $_POST['arranque'];
		include ("conexion.php");
	mysql_query("INSERT INTO alta_equipo VALUES ('id','$modelo', '$tipo','$costo','$amplio','$basico','$limitado','$motor','$trasmision','$timo','$cilindros','$diametro','$carrera','$desplazamiento','$compresion','$lubricacion','$combustible','$arranque','sdad','asda')");

		header("Location: ../admin.php");
	}
	///////////////////////// alta personal ////////////////////////////////

		if (!empty($_POST['nombre'])) {
			# code...
			$nombre = $_POST['nombre'];
			$telefono = $_POST['telefono'];
			$celular = $_POST['celular'];
			$correo = $_POST['correo'];
			include ("conexion.php");
			mysql_query("INSERT INTO alta_personal VALUES ('','$nombre', '$telefono','$correo','$celular')");
			$usuario = $_POST['usuario'];
			$contrasenia = $_POST['contrasenia'];
			$permisos = $_POST['permisos'];
			$ultimo_id = mysql_insert_id();
			// include ("conexion.php");
			mysql_query("INSERT INTO usuarios VALUES ('id_usuario','$usuario', '$contrasenia','$permisos',$ultimo_id)");
			header("Location: ../admin.php");
		}

	//////////////////// alta credito /////////////////////////////////
			if (!empty($_POST['credito'])) {
				# code...
				$credito = $_POST['credito'];
				$base = $_POST['base'];
				$apertura = $_POST['apertura'];
				mysql_query("INSERT INTO credito VALUES ('id_credito','$credito', '$base','$apertura')");
			}

			if (!empty($_POST['seguros'])) {
				# code...
				$seguros = $_POST['seguros'];
				mysql_query("INSERT INTO seguro VALUES ('id_seguro','$seguros')");
			}

			if (!empty($_POST['anios'])) {
				# code...
				$anios = $_POST['anios'];
				mysql_query("INSERT INTO anios VALUES ('id_anios','$anios')");
			}


?>