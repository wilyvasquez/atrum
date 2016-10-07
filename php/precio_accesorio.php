<?php
	$query02="select * from accesorio where ref_usuario='$idnombre'";
	$wily = mysql_query($query02);
	while ($reg = mysql_fetch_array($wily))
	{
	 	$totalarticulo=$totalarticulo+$reg['total'];
	}
	$impor=(12*$resulanio)*$credito+1;
	$totaac=$totalarticulo*$impor;
	$totaliva=round($totaac*1.16,2);
?>