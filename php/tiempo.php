<?php
require ("conexion.php");
$tipocredito= $_POST['credito'];
$consulta= "SELECT * FROM tiempo INNER JOIN credito_tiempo ON credito_tiempo.ref_tiempo=tiempo.id_tiempo
INNER JOIN tipo_credito ON tipo_credito.id_credito=credito_tiempo.ref_credito WHERE tipo_credito.id_credito=$tipocredito"; 
$resultado= mysql_query($consulta) or die (mysql_error());
 
	echo "<label for=''>PLAZO DE PAGO</label>";
    echo " <select name='plazo' id='plazo' class='form-control'>";
while($fila = mysql_fetch_array($resultado)){
	echo "<option value='".$fila['id_tiempo']."'>".$fila['tiempo']."</option>";	
}
    echo "</select>";
mysql_close($conexion);
?>