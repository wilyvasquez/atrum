<?php
include("conexion.php");

$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$fecha=date('d').' de '.$meses[date('n')-1]. ' de '.date('Y');

$tiempo=$_POST['tiempo'];
$query2="SELECT * FROM anios where id_anios=$tiempo";
      $result = mysql_query($query2);  
      $tiempo = mysql_fetch_array($result);
      $tiempore = $tiempo['anios'];
      $tiempomul = $tiempo['meses'];

      $porce=$_POST['porcentaje'];
      $query="SELECT * FROM enganche where id_enganche=$porce";
      $resultado8 = mysql_query($query);  
      $credito11 = mysql_fetch_array($resultado8);
      $porcentaje = $credito11['enganche'];

      $moto=$_POST['moto'];
      $anio=$_POST['anio'];
      // echo $anio;
      $credito=$_POST['credito'];

      $query10 = "SELECT * FROM moto_anio_precio INNER JOIN moto ON moto.id_moto= moto_anio_precio.ref_moto INNER JOIN anio_moto on anio_moto.id_anio_moto= moto_anio_precio.ref_anio INNER JOIN precio_moto on precio_moto.id_precio_moto= moto_anio_precio.ref_precio WHERE moto_anio_precio.ref_moto=$moto AND moto_anio_precio.ref_anio=$anio";
      $result6 = mysql_query($query10);  
      $apertura5 = mysql_fetch_array($result6);
      $varvar = $apertura5['precio'];
      $iva=($varvar*0.16);
      $ivares=$iva+$varvar;
      $enganche=$ivares*($porcentaje/100);
      // echo $_POST['porcentaje'];
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
	<input type='text' id='financiamiento' name='financiamiento' value='".$tiempore,' con el ',$porcentaje." % de enganche' class='form-control' onkeypress='letras()' onfocus='this.blur()'>
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
	<div style='display:none'>
		<input type='text' id='fecha' name='fecha' value='".$fecha."'>
	</div>";
?>