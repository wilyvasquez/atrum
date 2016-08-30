<?php
	$seg=$_POST["seguros"];
	$moto=$_POST["moto"];
	$query = "select * from seguro where id_seguro ='$seg'";  
    $result = mysql_query($query);  
    $apertura2 = mysql_fetch_array($result);	
  	$seguro=$apertura2['tipo_seguro'];  
?>