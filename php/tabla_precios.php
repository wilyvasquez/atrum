<?php
include ("conexion.php");
$suma=0;
$totalarticulo=0;
if (isset($_POST['moto'])&&$_POST['anio']&&$_POST['credito']&&$_POST['parametro']) {
  # code...
  include ("consultas.php");
      $moto=$_POST['moto'];
      $tiempocoti=$_POST['moto'];
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
    $anual = $credito1['tasa_anual'];
    $apertura = $credito1['costo_apertura'];
    // $importe=12*$credito;
      if ($resanio>12) {
        # code...
        $importe=$resanio*($credito+($anual*$resulanio));
        // echo $resulanio;
      }else{
      $importe=($resanio*$credito);       
      }
      $final=($base*$importe)+$base;

    $semanas=$final/$semana;
    $quincenas=$final/$quincena;
    $meses=$final/$resanio;

    $segurosemanas=$suma/$semana;
    $seguroquincena=$suma/$quincena;
    $seguromeses=$suma/$resanio;

  $idnombre=$_POST['parametro'];
  include ("precio_accesorio.php");
  $totaliva;

    $articulosema=$totaliva/$semana;
    $articuloquin=$totaliva/$quincena;
    $articulomes=$totaliva/$resanio;

    $placasem=$placas/$semana;
    $placasqui=$placas/$quincena;
    $placasmes=$placas/$resanio;

    $totalsemana=$semanas+$segurosemanas+$articulosema+$placasem;
    $totalquincena=$quincenas+$seguroquincena+$articuloquin+$placasqui;
    $totalmeses=$meses+$seguromeses+$articulomes+$placasmes;
}else{
  $semanas=0;
  $segurosemanas=0;
  $articulosema=0;
  $totalsemana=0;
  $quincenas=0;
  $seguroquincena=0;
  $articuloquin=0;
  $totalquincena=0;
  $meses=0;
  $seguromeses=0;
  $articulomes=0;
  $totalmeses=0;
  $final=0;
  $suma=0;
  $totaliva=0;
  $placasem=0;
  $placasqui=0;
  $placasmes=0;
  $resanio=0;
  $quincena=0;
  $semana=0;
}
	echo 	'<link rel="stylesheet" href="css/bootstrap-table.min.css">
    	<script src="js/bootstrap-table.min.js"></script>';
	echo "<table data-toggle='table' data-click-to-select='true' data-single-select='true' data-toolbar='#toolbar'>
                <thead>
                  <td>
                      <th class='col-xs-2'>Tiempo</th>
                      <th class='col-xs-1'>$ Vehiculo</th>
                      <th class='col-xs-1'>$ Seguro</th>
                      <th class='col-xs-1'>$ Accesorios</th>
                      <th class='col-xs-1'>$ Placas</th>
                      <th class='col-md-1'>Total</th>
                  </td>
                </thead>
                <tbody>
                  <tr>
                    <td>SEMANAS (".$semana.")</td>
                    <td>".round($semanas,2)."</td>
                    <td>".round($segurosemanas,2)."</td>
                    <td>".round($articulosema,2)."</td>
                    <td>".round($placasem,2)."</td>
                    <td>".round($totalsemana,2)."</td>
                  </tr>
                  <tr>
                    <td>QUINCENAS (".$quincena.")</td>
                    <td>".round($quincenas,2)."</td>
                    <td>".round($seguroquincena,2)."</td>
                    <td>".round($articuloquin,2)."</td>
                    <td>".round($placasqui,2)."</td>
                    <td>".round($totalquincena,2)."</td>
                  </tr>
                  <tr>
                    <td>MESES (".$resanio.")</td>
                    <td>".round($meses,2)."</td>
                    <td>".round($seguromeses,2)."</td>
                    <td>".round($articulomes,2)."</td>
                    <td>".round($placasmes,2)."</td>
                    <td>".round($totalmeses,2)."</td>
                  </tr>
                </tbody>
            </table>
            <div style='display:none'>
              <input type='text' id='final' name='final' value='".$final."'>
            <input type='text' id='suma' name='suma' value='".$suma."'>
            input type='text' id='articulos' name='articulos' value='".$totaliva."'>
            </div>";
?>