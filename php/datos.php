<?php
	include("conexion.php");
	// echo $_GET['c'];
	$query = "SELECT * FROM tipo_credito WHERE id_credito='".$_GET['c']."'";
    $result = mysql_query($query);  
    $apertura = mysql_fetch_array($result);
    $tasa = $apertura['tasa_base'];
    $costo = $apertura['costo_apertura'];
echo "
	<div class='col-md-3'>
		<div><label for=''>TASA BASE</label></div>
        <input type='text' class='form-control' id='base' name='base' value='".$tasa."'>
    </div>
    <div class='col-md-3'>
        <label for=''>COSTO APERTURA</label>
        <input type='text' class='form-control' id='costoape' name='costoape' value='".$costo."'>
    </div>
	";
?>