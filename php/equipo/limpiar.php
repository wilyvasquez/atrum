<?php
include("../conexion.php");
$idnombre=$_POST['idnombre'];
mysql_query("DELETE FROM accesorio where ref_usuario=$idnombre");
$query='select * from accesorio';
$result = mysql_query($query);
echo 	'<link rel="stylesheet" href="css/bootstrap-table.min.css">
    	<script src="js/bootstrap-table.min.js"></script>';
echo "<table data-toggle='table' data-pagination='true' 
	data-page-size='3'>
        <thead>
	        <tr>
	        <th class='col-xs-7' data-field='name'>Accesorios</th>
	        <th class='col-xs-1' data-field='stargazers_count'>Precio S/I.V.A</th>
	        <th class='col-xs-1' data-field='forks_count'>Cantidad</th>
	        <th class='col-xs-2' data-field='description'>Total</th>
	        <th class='col-xs-1' data-field='accion'>
		        <button type='button' class='btn btn-info btn-xs' data-toggle='modal' data-target='#myModal'>
		        <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span>
		        </button>
	        </th>
	        </tr>
        </thead>
        <tbody>
        ";while ($registro = mysql_fetch_array($result)){
	echo "
	        <tr>
		        <td>".$registro['nombre_accesorio']."</td>
		        <td>".$registro['precio']."</td>
		        <td>".$registro['cantidad']."</td>
		        <td>".$registro['total']."</td>
		        <td>
			        <button type='button' class='btn btn-default btn-xs'>
			        	<span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
		        	</button>
		        </td>
	        </tr>
	        ";}

	echo "
        </tbody>
    </table>
    <div class='col-md-2'>
		<h6>Total articulos</h6>        
	    </div>
	    <div class='col-md-2' style='margin-top:5px'>
	    <input type='text' id='articulos' name='articulos' value='0' class='form-control' onfocus='this.blur()'/>
	    </div>
	    <div class='col-md-1'>
	    <h6>Total S/I.V.A</h6>
	    </div>
	    <div class='col-md-2' style='margin-top:5px'>
	    <input type='text' id='iva' name='iva' value='0' class='form-control' onfocus='this.blur()'/>
	    </div>
	    <div class='col-md-1' style='margin-top:5px'>
	    <label><h6>Costo</h6></label>        
	    </div>
	    <div class='col-md-3' style='margin-top:5px'>
	    <input type='text' id='costoarti' name='costoarti' value='0' class='form-control' onfocus='this.blur()'/>
    </div>";
?>