<?php
require ("conexion.php");
$tipocredito= $_POST['credito'];
$consulta= "SELECT * FROM tiempo INNER JOIN credito_tiempo ON credito_tiempo.ref_tiempo=tiempo.id_tiempo
INNER JOIN tipo_credito ON tipo_credito.id_credito=credito_tiempo.ref_credito WHERE tipo_credito.id_credito=$tipocredito"; 
$resultado= mysql_query($consulta) or die (mysql_error());
 
	echo "<label for=''>TIEMPO</label>";
    echo " <select name='tiempo' id='tiempo' class='form-control'>";
while($fila = mysql_fetch_array($resultado)){
	echo "<option value='".$fila['id_credito']."'>".$fila['tiempo']."</option>";	
}
    echo "</select>";
mysql_close($conexion);
?>