<?php
if (!empty($_POST['seguros'])and($_POST['moto'])) {
	$seg=$_POST["seguros"];
	$moto=$_POST["moto"];
	$query = "select * from seguro where id_seguro ='$seg'";  
    $result = mysql_query($query);  
    $apertura2 = mysql_fetch_array($result);	
  	$seguro=$apertura2['tipo_seguro'];

  	$select = "select $seguro from alta_equipo where id_equipo='$moto'";  
    $alta_equipo = mysql_query($select);  
    $resultado = mysql_fetch_array($alta_equipo);
    $segu=$resultado[$seguro];
    $opera=($segu*0.16)+($segu);

	$vari=$apertura['tasa_base'];    
	$operacion=($vari*12)*($opera);
	$final=$operacion+$opera;
    // $operacion=();
}
?>