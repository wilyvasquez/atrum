<?php
	///////////////////// CREDITO //////////////
	$query = "select * from credito where tipo_credito ='$apertura'";  
    $result = mysql_query($query);  
    $apertura = mysql_fetch_array($result);

    ////////////////////// SEGURO //////////////
    // $cosulta = "select $seguro from alta_equipo where id_equipo ='$modelo'";  
    // $t_seguro = mysql_query($consulta);  
    // $seg = mysql_fetch_array($t_seguro);

    ///////////////////// ALTA_EQUIPO //////////
    $query2 = "select * from alta_equipo where id_equipo ='$modelo'";  
    $equipo = mysql_query($query2);  
    $equipo = mysql_fetch_array($equipo);

    $var=$equipo['costo_unidad'];
    $res=($var*0.16)+$var;

    //////////////////////////////////////////

?>