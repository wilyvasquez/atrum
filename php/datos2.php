<?php
	include("conexion.php");
	$query = "SELECT * FROM placas WHERE id_placas='".$_GET['c']."'";
    $result = mysql_query($query);  
    $apertura = mysql_fetch_array($result);
    $precio = $apertura['precio'];
echo "
	<div class='col-md-3'>
    <div><label for=''>PRECIO</label></div>
    <input type='text' class='form-control' onkeypress='numeros()' id='costoape' name='costoape' value='".$precio."'>
    </div>
	";
?>