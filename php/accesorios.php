<?php
 include("conexion.php");
 $contador=0;
 $totalarticulo=0;
 $importe=0;
 $idnombre=$_POST['parametro'];
 $tiempo=$_POST['tiempo'];
 	$anios="SELECT * FROM anios where id_anios=$tiempo";
    $resulanios = mysql_query($anios);  
    $aniores = mysql_fetch_array($resulanios);
    $resanio = $aniores['meses'];

 if (!empty($_POST['credito'])) {
 	# code...
 	$dito=$_POST['credito'];
 	$variable="SELECT * FROM tipo_credito where id_credito=$dito";
    $resultado = mysql_query($variable);  
    $credito1 = mysql_fetch_array($resultado);
    $credito = $credito1['tasa_base'];
    $importe=$resanio*$credito+1;

 }
 if (!empty($_POST['id'])) {
 	# code...
 	$id=$_POST['id'];
	$query = "delete from accesorio where id_accesorio = $id";
	$result = mysql_query($query);
 }
if (!empty($_POST['accesorios'])) {
	# code...
	$accesorios=$_POST['accesorios'];
 	$precio=$_POST['precio'];
 	$cantidad=$_POST['cantidad'];
 	$total=$precio*$cantidad;
 mysql_query("INSERT INTO accesorio VALUES ('id','$accesorios', '$precio','$cantidad','$total','$idnombre')");
}
// data-toggle='table' data-pagination='true' data-page-size='3'
$query="select * from accesorio where ref_usuario='$idnombre'";
$result = mysql_query($query);
echo 	'<link rel="stylesheet" href="css/bootstrap-table.min.css">
    	<script src="js/bootstrap-table.min.js"></script>';
echo "<table data-toggle='table'>
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
		        <button type='submit' class='btn btn-danger btn-xs' onclick='limpiar($idnombre);tablaprecio()'>
		        <span class='glyphicon glyphicon-remove-sign' aria-hidden='true'></span>
		        </button>
	        </th>
	        </tr>
        </thead>
        <tbody>
        ";while ($registro = mysql_fetch_array($result)){
	        $contador=$contador+1;
	        $totalarticulo=$totalarticulo+$registro['total'];
	echo "
	        <tr>
		        <td>".$registro['nombre_accesorio']."</td>
		        <td>".$registro['precio']."</td>
		        <td>".$registro['cantidad']."</td>
		        <td>".$registro['total']."</td>
		        <td>
			        <button type='button' onclick='bajas(".$registro['id_accesorio'].",".$idnombre.",".$dito.",".$tiempo.")' class='btn btn-default btn-xs'>
			        	<span class='glyphicon glyphicon-trash' aria-hidden='true'></span>
		        	</button>
		        </td>
	        </tr>
	        ";}
	        $totaac=$totalarticulo*$importe;
	echo "
        </tbody>
    </table>
    <div class='col-md-2'>
		<h6>Total Articulos</h6>        
	    </div>
	    <div class='col-md-2' style='margin-top:5px'>
	    <input type='text' id='articulos' name='articulos' value='".$contador."' class='form-control' onfocus='this.blur()'/>
	    </div>
	    <div class='col-md-1'>
	    <h6>Total S/I.V.A</h6>
	    </div>
	    <div class='col-md-2' style='margin-top:5px'>
	    <input type='text' id='iva' name='iva' value='".$totalarticulo."' class='form-control' onfocus='this.blur()'/>
	    </div>
	    <div class='col-md-1' style='margin-top:5px'>
	    <label><h6>Costo</h6></label>        
	    </div>
	    <div class='col-md-3' style='margin-top:5px'>
	    <input type='text' id='costoarti' name='costoarti' value='".round($totaac*1.16,2)."' class='form-control' onfocus='this.blur()'/>
    </div>
		";
?>