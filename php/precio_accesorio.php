<?php
	$totalarticulo=0;
	$query02="select * from accesorio where ref_usuario='$idnombre'";
	$wily = mysql_query($query02);
	while ($reg = mysql_fetch_array($wily))
	{
	 	$totalarticulo=$totalarticulo+$reg['total'];
	}

?>