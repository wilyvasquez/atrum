<?php
include ("conexion.php");

	///////////////////////imagen/////////////////////////////////////
	if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0)
{
    echo "Ha ocurrido un error.";
}
else
{
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384;

    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024)
    {

        $imagen_temporal = $_FILES['imagen']['tmp_name'];

        $tipo = $_FILES['imagen']['type'];

        $fp = fopen($imagen_temporal, 'r+b');
        $data = fread($fp, filesize($imagen_temporal));
        fclose($fp);
        
        $data = mysql_escape_string($data);

        $tipo1=$_POST['tipo'];
        $modelo=$_POST['modelo'];
        $motor=$_POST['motor'];
        $trasmision=$_POST['trasmision'];
        $tipomoto=$_POST['timo'];
        $numcilindros=$_POST['cilindros'];
        $diametro=$_POST['diametro'];
        $carrera=$_POST['carrera'];
        $desplazamiento=$_POST['desplazamiento'];
        $relacompre=$_POST['compresion'];
        $sistelubri=$_POST['lubricacion'];
        $sistecombu=$_POST['combustible'];
        $sistearran=$_POST['arranque'];
        // $anio=$_POST['anio'];
        // $costo=$_POST['costo'];

		
	$resultado=mysql_query("INSERT INTO moto VALUES ('id','$tipo1','$modelo','$motor','$trasmision','$tipomoto','$numcilindros','$diametro','$carrera','$desplazamiento','$relacompre','$sistelubri','$sistecombu','$sistearran','$tipo','$data')");
	$ultimo = mysql_insert_id();

	// $query10 = "SELECT * FROM anio_moto where id_anio_moto=$anio";
 //      $result6 = mysql_query($query10);  
 //      $apertura5 = mysql_fetch_array($result6);
 //      $anio = $apertura5['id_anio_moto'];

 //    mysql_query("INSERT INTO precio_moto VALUES ('id','$costo')");
 //    $precio = mysql_insert_id();
	// $resultado=mysql_query("INSERT INTO moto_anio_precio VALUES ('id','$ultimo','$anio','$precio')");

		header("Location: ../admin.php");

        if ($resultado)
        {
            // echo "El archivo ha sido copiado exitosamente.";
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
			mysql_query("INSERT INTO usuario VALUES ('id','$nombre', '$telefono','$celular','$correo')");
			$usuario = $_POST['usuario'];
			$contrasenia = $_POST['contrasenia'];
			$permisos = $_POST['permisos'];
			$ultimo_id = mysql_insert_id();
			// include ("conexion.php");
			mysql_query("INSERT INTO password VALUES ('id_usuario','$usuario', '$contrasenia','$permisos',$ultimo_id)");
			header("Location: ../admin.php");
		}

	//////////////////// alta credito /////////////////////////////////
			if (!empty($_POST['credito'])) {
				# code...
				$credito = $_POST['credito'];
				$base = $_POST['base'];
				$apertura = $_POST['apertura'];
				$descuento = $_POST['descuento'];
				mysql_query("INSERT INTO credito VALUES ('id_credito','$credito', '$base','$apertura','$descuento')");
				header("Location: ../admin.php");
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