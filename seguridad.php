<?php
session_start();
include("php/conexion.php");
?>
<?php
	if(isset($_POST['pass'])&&isset($_POST['user']))
	{
		$pass=$_POST['pass'];
		$user=$_POST['user'];
		$query=mysql_query("SELECT * FROM password INNER JOIN usuario ON password.ref_usuario= usuario.id_usuario WHERE password.user='$user' AND password.pass='$pass'");
		$numrows=mysql_num_rows($query);
		$segu = mysql_fetch_array($query);
	 	if($numrows!=0)
		{	
			$_SESSION['pass'] = $_POST['pass'];
			if ($segu['permiso']==admin) {
				# code...
				header("Location: admin.php");		
			}else
			{
				$res=$segu['id_usuario'];
				header("Location: cotizador.php?user=$res");				
			}
		}else
			{
				header("Location: index.php");
			}
	}else{
	if(isset($_SESSION['pass']))
	{
	}else
	{
		header("Location: index.php");
	}
	}
?>