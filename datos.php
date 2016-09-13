<?php
session_start();
	if(!empty($_POST['user'] and $_POST['pass'] ))
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		include ("conexion.php");
		$query=mysql_query("SELECT * from usuarios WHERE usuarios='".$user."' AND pass='".$pass."'");
		$rs=mysql_num_rows($query);
		$permisos = mysql_fetch_array($query);
		$entrar=$permisos['permisos'];
		// echo $entrar;
		if ($rs>0 and $entrar == 'admin' ) 
		{	
			header("Location: admin.php");
		}
		if($rs>0){
			$consulta="select * from usuarios inner join alta_personal on alta_personal.id_personal=usuarios.ref_personal where usuarios.usuarios='".$_POST['user']."'";
 			$use = mysql_query($consulta);  
    		$variable = mysql_fetch_array($use);
    		$nom_usu=$variable['nombre_asesor'];
		}else{
			header("Location: index.php");
		}

	}else{
		header("Location:index.php");	
	}
?>