<?php
include("iniciador.php");
include("conexion.php");
include("consultas.php");
// echo $seguro; 
if ($_POST['credito']=='CREDINOMINA') {
  # code...
  $quincenas=round($importe/24,2);
  $quincenas_se=round($final/24,2);
  $total_qui=round($quincenas+$quincenas_se,2);
}
if ($_POST['credito']=='SUZUCREDIT') {
  # code...
  $semanas=round($importe/52,2);
  $quincenas=round($importe/24,2);
  $meses=round($importe/12,2);
  /////////////////// seguro /////////////
  $semanas_se=round($final/52,2);
  $quincenas_se=round($final/24,2);
  $meses_se=round($final/12,2);

  /////////////////// totales ////////////
  $total_se=round($semanas+$semanas_se,2);
  $total_qui=round($quincenas+$quincenas_se,2);
  $total_mes=round($meses+$meses_se,2);
}
if ($_POST['credito']=='CREDITO CASA') {
  # code...
  $meses=round($importe/12,2);
  $meses_se=0;
  $total_mes=round($meses+$meses_se,2);
}
echo 	'<link rel="stylesheet" href="css/bootstrap-table.min.css">
    	<script src="js/bootstrap-table.min.js"></script>';

echo 		"<center><label for='precio'>PRECIOS</label></center>
			<table data-toggle='table'>
            <thead>
              <td>
                  <th>Tiempo</th>
                  <th>$ Vehiculo</th>
                  <th>$ Seguro</th>
                  <th>Total</th>
              </td>
            </thead>
            <tbody>
              <tr>
                <td>SEMANAS (52)</td>
                <td>".$semanas."</td>
                <td>".$semanas_se."</td>
                <td>".$total_se."</td>
              </tr>
              <tr>
                <td>QUINCENAS (24)</td>
                <td>".$quincenas."</td>
                <td>".$quincenas_se."</td>
                <td>".$total_qui."</td>
              </tr>
              <tr>
                <td>MESES (12)</td>
                <td>".$meses."</td>
                <td>".$meses_se."</td>
                <td>".$total_mes."</td>
              </tr>
            </tbody>
        </table>
        ";
?>
        <!-- <div class='row col-md-6'>
          <label for=''>TIEMPO</label>
          <select name='seguros' id='seguros' class='form-control'>
            <option value=''>Seleccionar</option>
          </select>
        </div>
        <div class='col-md-3' style='margin-top:25px'>
          <button class='btn btn-info' type='submit'>Agregar !</button>
        </div> -->