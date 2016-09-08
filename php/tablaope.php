<?php
include("conexion.php");
include("consultas.php");
echo 	'<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css">
    	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>';

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
                <td>SEMANAS</td>
                <td>".$semanas."</td>
                <td>".$semanas_se."</td>
                <td>".$total_se."</td>
              </tr>
              <tr>
                <td>QUINCENAS</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>MESES</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
            </tbody>
        </table>";
?>