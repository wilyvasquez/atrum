<?php
if (!empty($apertura)and($modelo)) {
	///////////////////// CREDITO //////////////
	$query = "select * from credito where tipo_credito ='$apertura'";  
    $result = mysql_query($query);  
    $apertura = mysql_fetch_array($result);
    $costo=$apertura['costo_apertura'];
    ///////////////////// ALTA_EQUIPO //////////
    $query2 = "select * from alta_equipo where id_equipo ='$modelo'";  
    $equipo = mysql_query($query2);  
    $equipo = mysql_fetch_array($equipo);

    $var=$equipo['costo_unidad'];
    $res=($var*0.16)+$var;

    //////////////////////////////////////////
}
?>