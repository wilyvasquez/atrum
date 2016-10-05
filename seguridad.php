<?php
	include('php/conexion.php');
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	$query="SELECT * FROM password INNER JOIN usuario ON password.ref_usuario= usuario.id_usuario WHERE password.user='$user' AND password.pass='$pass'";
	$seguridad = mysql_query($query);  
	$segu = mysql_fetch_array($seguridad);
?>