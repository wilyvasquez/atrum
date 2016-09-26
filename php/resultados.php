<?php
include("conexion.php");
$tiempo=$_POST['tiempo'];
$query2="SELECT * FROM anios where id_anios=$tiempo";
      $result = mysql_query($query2);  
      $tiempo = mysql_fetch_array($result);
      $tiempore = $tiempo['anios'];
      $tiempomul = $tiempo['meses'];

      $moto=$_POST['moto'];
      $anio=$_POST['anio'];
      $credito=$_POST['credito'];

      $query10 = "SELECT * FROM moto_anio_precio INNER JOIN moto ON moto.id_moto= moto_anio_precio.ref_moto INNER JOIN anio_moto on anio_moto.id_anio_moto= moto_anio_precio.ref_anio INNER JOIN precio_moto on precio_moto.id_precio_moto= moto_anio_precio.ref_precio WHERE moto_anio_precio.ref_moto=$moto AND moto_anio_precio.ref_anio=$anio";
      $result6 = mysql_query($query10);  
      $apertura5 = mysql_fetch_array($result6);
      $varvar = $apertura5['precio'];
      $iva=($varvar*0.16);
      $ivares=$iva+$varvar;
      $enganche=$ivares*($_POST['porcentaje']/100);
      $base=$ivares-$enganche;

      $variable="SELECT * FROM tipo_credito where id_credito=$credito";
      $resultado = mysql_query($variable);  
      $credito1 = mysql_fetch_array($resultado);
      $credito = $credito1['tasa_base'];
      $apertura = $credito1['costo_apertura'];
      $importe=($tiempomul*$credito);
      $final=($base*$importe)+$base;

echo "<div class='col-md-3'>
	<label>FINANCIAMIENTO</label>        
	</div>
	<div class='col-md-9'>
	<input type='text' id='financiamiento' name='financiamiento' value='".$tiempore,' con el ',$_POST['porcentaje']." % de enganche' class='form-control' onkeypress='letras()' onfocus='this.blur()'>
	</div>
	<div class='col-md-3' style='margin-top:5px'>
	<label>ENGANCHE</label>        
	</div>
	<div class='col-md-3' style='margin-top:5px'>
	<div class='input-group'>
	<span class='input-group-addon'>$</span>
	<input type='text' id='engancheresul' name='engancheresul' value='".round($enganche,2)."' class='form-control' onfocus='this.blur()'>
	</div>
	</div>
	<!-- fin row -->
	<div class='col-md-3'>
	<label><h6>COSTO APERTURA</h6></label>
	</div>
	<div class='col-md-3' style='margin-top:5px'>
	<div class='input-group'>
	<span class='input-group-addon'>$</span>
	<input type='text' id='apertura' name='apertura' value='".round($apertura,2)."' class='form-control' onfocus='this.blur()'>   
	</div>
	</div>
	<div class='col-md-3'>
	<label><h6>BASE DEL CREDITO</h6></label>        
	</div>
	<div class='col-md-3' style='margin-top:5px'>
	<div class='input-group'>
	<span class='input-group-addon'>$</span>
	<input type='text' id='base' name='base' value='".round($base,2)."' class='form-control' onfocus='this.blur()'>      
	</div>
	</div>
	<div class='col-md-3'>
	<label><h6>IMPORTE CREDITO</h6></label>        
	</div>
	<div class='col-md-3' style='margin-top:5px'>
	<div class='input-group'>
	<span class='input-group-addon'>$</span>
	<input type='text' id='importe' name='importe' value='".round($final,2)."' class='form-control' onfocus='this.blur()'>      
	</div>
	</div>
	<div class='col-md-3' style='margin-top:5px'>
	<label>TELEFONO</label>        
	</div>
	<div class='col-md-3' style='margin-top:5px'>
	<div class='input-group'>
	<span class='input-group-addon'>#</span>
	<input type='text' id='telefono' name='telefono' value='' class='form-control' onkeypress='numeros()' required/> 
	</div>
	</div>
	<div class='col-md-3' style='margin-top:5px'>
	<label>CLIENTE</label>        
	</div>
	<div class='col-md-3' style='margin-top:5px'>
	<input type='text' id='nombre' name='nombre' value='' class='form-control' onkeypress='letras()' required/>
	</div>";
?>