<?php
$query02="select * from accesorio where ref_usuario=2";
	$wily = mysql_query($query02);
	while ($reg = mysql_fetch_array($wily))
	{
	 	$totalarticulo=$totalarticulo+$reg['total'];
	}
?>