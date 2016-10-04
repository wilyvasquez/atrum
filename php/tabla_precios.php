<?php
include ("conexion.php");
include ("consultas.php");
  $moto=$_POST['moto'];
      $anio=$_POST['anio'];
      $credito=$_POST['credito'];

      $porce=$_POST['porcentaje'];
      $query="SELECT * FROM enganche where id_enganche=$porce";
      $resultado8 = mysql_query($query);  
      $credito11 = mysql_fetch_array($resultado8);
      $porcentaje = $credito11['enganche'];

      $query10 = "SELECT * FROM moto_anio_precio INNER JOIN moto ON moto.id_moto= moto_anio_precio.ref_moto INNER JOIN anio_moto on anio_moto.id_anio_moto= moto_anio_precio.ref_anio INNER JOIN precio_moto on precio_moto.id_precio_moto= moto_anio_precio.ref_precio WHERE moto_anio_precio.ref_moto=$moto AND moto_anio_precio.ref_anio=$anio";
      $result6 = mysql_query($query10);  
      $apertura5 = mysql_fetch_array($result6);
      $varvar = $apertura5['precio'];
      $iva=($varvar*0.16);
      $ivares=$iva+$varvar;
      $enganche=$ivares*($porcentaje/100);
      $base=$ivares-$enganche;
      
  $variable="SELECT * FROM tipo_credito where id_credito=$credito";
      $resultado = mysql_query($variable);  
      $credito1 = mysql_fetch_array($resultado);
      $credito = $credito1['tasa_base'];
      $apertura = $credito1['costo_apertura'];
      $importe=12*$credito;
      $final=($base*$importe)+$base;

    $semanas=$final/52;
    $quincenas=$final/24;
    $meses=$final/12;

    $segurosemanas=$suma/52;
    $seguroquincena=$suma/24;
    $seguromeses=$suma/12;
    // echo $final;
    include ("precio_accesorio.php");
    $articulosema=$totalarticulo/52;
    $articuloquin=$totalarticulo/24;
    $articulomes=$totalarticulo/12;

		$totalsemana=$semanas+$segurosemanas+$articulosema;
		$totalquincena=$quincenas+$seguroquincena+$articuloquin;
		$totalmeses=$meses+$seguromeses+$articulomes;
	echo 	'<link rel="stylesheet" href="css/bootstrap-table.min.css">
    	<script src="js/bootstrap-table.min.js"></script>';
	echo "<table data-toggle='table' data-click-to-select='true' data-single-select='true'>
                <thead>
                  <td>
                      <th class='col-xs-2'>Tiempo</th>
                      <th class='col-xs-1'>$ Vehiculo</th>
                      <th class='col-xs-1'>$ Seguro</th>
                      <th class='col-xs-1'>$ Accesorios</th>
                      <th class='col-md-1'>Total</th>
                  </td>
                </thead>
                <tbody>
                  <tr>
                    <td>SEMANAS (0)</td>
                    <td>".round($semanas,2)."</td>
                    <td>".round($segurosemanas,2)."</td>
                    <td>".round($articulosema,2)."</td>
                    <td>".round($totalsemana,2)."</td>
                  </tr>
                  <tr>
                    <td>QUINCENAS (0)</td>
                    <td>".round($quincenas,2)."</td>
                    <td>".round($seguroquincena,2)."</td>
                    <td>".round($articuloquin,2)."</td>
                    <td>".round($totalquincena,2)."</td>
                  </tr>
                  <tr>
                    <td>MESES (0)</td>
                    <td>".round($meses,2)."</td>
                    <td>".round($seguromeses,2)."</td>
                    <td>".round($articulomes,2)."</td>
                    <td>".round($totalmeses,2)."</td>
                  </tr>
                </tbody>
            </table>
            <div style='display:none'>
              <input type='text' id='final' name='final' value='".$final."'>
            <input type='text' id='suma' name='suma' value='".$suma."'>
            <input type='text' id='articulos' name='articulos' value='".$totalarticulo."'>
            </div>";
?>