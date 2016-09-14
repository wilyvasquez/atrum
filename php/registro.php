<?php
include ("conexion.php");

	///////////////////////imagen/////////////////////////////////////
	if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0)
{
    echo "Ha ocurrido un error.";
}
else
{
    // Verificamos si el tipo de archivo es un tipo de imagen permitido.
    // y que el tamaño del archivo no exceda los 16MB
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384;

    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024)
    {

        // Archivo temporal
        $imagen_temporal = $_FILES['imagen']['tmp_name'];

        // Tipo de archivo
        $tipo = $_FILES['imagen']['type'];

        // Leemos el contenido del archivo temporal en binario.
        $fp = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
        
        //Podríamos utilizar también la siguiente instrucción en lugar de las 3 anteriores.
        // $data=file_get_contents($imagen_temporal);

        // Escapamos los caracteres para que se puedan almacenar en la base de datos correctamente.
        $data = mysql_escape_string($data);

        $modelo = $_POST['modelo'];
		$tipo1 = $_POST['tipo'];
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
		
	mysql_query("INSERT INTO alta_equipo VALUES ('id','$modelo', '$tipo1','$costo','$amplio','$basico','$limitado','$motor','$trasmision','$timo','$cilindros','$diametro','$carrera','$desplazamiento','$compresion','$lubricacion','$combustible','$arranque','$tipo','$data')");

		header("Location: ../admin.php");


        // Insertamos en la base de datos.
        /*$resultado = @mysql_query("INSERT INTO imagenes (imagen, tipo_imagen) VALUES ('$data', '$tipo')");*/

        if ($resultado)
        {
            echo "El archivo ha sido copiado exitosamente.";
        }
        else
        {
            echo "Ocurrió algun error al copiar el archivo.";
        }
    }
    else
    {
        echo "Formato de archivo no permitido o excede el tamaño límite de $limite_kb Kbytes.";
    }
}
	
	////////////////////// alta equipo ////////////////////////////////
	if (!empty($_POST['modelo'])) {
		# code...
	// 	$modelo = $_POST['modelo'];
	// 	$tipo = $_POST['tipo'];
	// 	$costo = $_POST['costo'];
	// 	$amplio = $_POST['amplio'];
	// 	$basico = $_POST['basico'];
	// 	$limitado = $_POST['limitado'];
	// 	$motor = $_POST['motor'];
	// 	$trasmision = $_POST['trasmision'];
	// 	$timo = $_POST['timo'];
	// 	$cilindros = $_POST['cilindros'];
	// 	$diametro = $_POST['diametro'];
	// 	$carrera = $_POST['carrera'];
	// 	$desplazamiento = $_POST['desplazamiento'];
	// 	$compresion = $_POST['compresion'];
	// 	$lubricacion = $_POST['lubricacion'];
	// 	$combustible = $_POST['combustible'];
	// 	$arranque = $_POST['arranque'];
		
	// mysql_query("INSERT INTO alta_equipo VALUES ('id','$modelo', '$tipo','$costo','$amplio','$basico','$limitado','$motor','$trasmision','$timo','$cilindros','$diametro','$carrera','$desplazamiento','$compresion','$lubricacion','$combustible','$arranque','sdad','asda')");

	// 	header("Location: ../admin.php");
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