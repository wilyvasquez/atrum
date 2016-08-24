<?php
session_start();
	if(!empty($_POST['user'] and $_POST['pass'] ))
	{
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		include ("conexion.php");
		$query=mysql_query("SELECT * from usuarios WHERE usuario='".$user."' AND pass='".$pass."'");
		$rs=mysql_num_rows($query);
		if ($rs!=0) 
		{	
			// header("Location: cotizador.php");
		}else{
			header("Location: index.php");
		}

	}else{
		header("Location:index.php");	
	}
?>