<?php
include("conexion.php");
$con = "SELECT contador FROM contador";
$con1 = mysql_query($con);
$con2 = mysql_fetch_array($con1);
$con3 = $con2['contador'];
$conta=$con3+1;
mysql_query("INSERT INTO contador VALUES ('id','$conta')");
?>