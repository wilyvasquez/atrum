<?php
include ("conexion.php");

	/////////////////////////alta equipo ///////////////////////////////////
	if ($_FILES["imagen"]["error"] > 0){
	echo "ha ocurrido un error";
} else {

	$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
	$limite_kb = 100;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
		
		$ruta = "imagenes/" . $_FILES['imagen']['name'];

		if (!file_exists($ruta)){

			$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $ruta);
			if ($resultado){

				$nombre = $_FILES['imagen']['name'];
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

				mysql_query("INSERT INTO moto VALUES ('id','$tipo1','$modelo','$motor','$trasmision','$tipomoto','$numcilindros','$diametro','$carrera','$desplazamiento','$relacompre','$sistelubri','$sistecombu','$sistearran','$nombre')");
				echo "el archivo ha sido movido exitosamente";
				header("Location: ../admin.php");
			} else {
				echo "ocurrio un error al mover el archivo.";

			}
		} else {
			echo $_FILES['imagen']['name'] . ", este archivo existe";
		}
	} else {
		echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
	}
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