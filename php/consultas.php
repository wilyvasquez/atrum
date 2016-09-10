<?php
include("conexion.php");
	///////////////////// CREDITO //////////////
    $apertura=$_POST['credito'];
	$query = "select * from credito where tipo_credito ='$apertura'";  
    $result = mysql_query($query);  
    $apertura = mysql_fetch_array($result);
    $costo=$apertura['costo_apertura'];

    ///////////////////// COSTO MOTOCICLETA //////////
    $modelo=$_POST['modelo'];
    $query2 = "select * from alta_equipo where id_equipo ='$modelo'";  
    $equipo = mysql_query($query2);  
    $equipo = mysql_fetch_array($equipo);
    $var=$equipo['costo_unidad'];
    $res=round(($var*0.16)+$var,2);

    /////////////////// BASE DEL CREDITO ////////////////

    $enganche=$_POST['enganche'];
    $ope=(($res*$enganche)/100);
    $base=round($res-$ope,2);

    /////////////////// ENGANCHE //////////////////////

    $enganche=$_POST['enganche'];
    $ope=round(($res*$enganche)/100,2);

    ////////////////// IMPORTE //////////////////////

    $a =$apertura["tasa_base"];
    $tem=((12*$a)*$base);
    $importe=round($base+$tem,2);

    ////////////////// SEGURO DE LA UNIDAD //////////////
    if (!empty($_POST["seguros"])) {
        # code...
    $seg=$_POST["seguros"];
    $moto=$_POST["moto"];
    $query = "select * from seguro where id_seguro ='$seg'";  
    $result = mysql_query($query);  
    $apertura2 = mysql_fetch_array($result);    
    $seguro=$apertura2['tipo_seguro'];

    $select = "select * from alta_equipo where id_equipo='$moto'";  
    $alta = mysql_query($select);  
    $resultado = mysql_fetch_array($alta);
    $segu=$resultado[$seguro];
    $opera=($segu*0.16)+($segu);

    $vari=$apertura['tasa_base'];    
    $operacion=($vari*12)*($opera);
    $final=round($operacion+$opera);
    }
?>