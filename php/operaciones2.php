<?php
$final=0;
include("conexion.php");
include("consultas.php");
	///////////// costo apertura//////////////////////////////////
	// echo '<span class="input-group-addon">$</span>';
 //    echo "<input type='text' id='resultado' name='financiamiento' value='".$costo."' class='form-control'>";

echo		'<div class="col-md-6">';
echo        '<label>FINANCIAMIENTO</label>';
echo        '<div class="input-group">';
echo          '<span class="input-group-addon">$</span>';
echo          "<input type='text' id='financiamiento' name='financiamiento' value='".$_POST['plazo'],'con el',$_POST['enganche']." % de enganche' class='form-control' onfocus='this.blur()'>";
echo        '</div>';
echo      '</div>';
echo	'<div class="col-md-6">';
echo    '<label>COSTO APERTURA</label>';
echo        '<div class="input-group" id="resultado">';
echo          '<span class="input-group-addon">$</span>';
echo          "<input type='text' id='apertura' name='apertura' value='".$costo."' class='form-control' onfocus='this.blur()'>";
echo        '</div>';
echo    '</div>';
echo    '<div class="col-md-4">';
echo    '<label>COSTO MOTOCICLETA</label>';
echo        '<div class="input-group">';
echo          '<span class="input-group-addon">$</span>';
echo          "<input type='text' id='motocicleta' name='motocicleta' value='".$res."' class='form-control' onfocus='this.blur()'>";
echo        '</div>';
echo    '</div>';
echo			"<div class='col-md-4'>
		        <label>BASE DEL CREDITO</label>
		        <div class='input-group'>
		          <span class='input-group-addon'>$</span>
		          <input type='text' id='credito' name='credito' value='".$base."' class='form-control' onfocus='this.blur()'>      
		        </div>
		        </div>";
echo        	"<div class='col-md-4'>
			    <label>ENGANCHE</label>
			    <div class='input-group'>
			          <span class='input-group-addon'>$</span>
			          <input type='text' id='enganche' name='enganche' value='".$ope."' class='form-control' onfocus='this.blur()'>
			    </div>
			    </div>";
echo		    "<div class='col-md-4'>
			        <label>IMPORTE CREDITO</label>
			        <div class='input-group'>
			          <span class='input-group-addon'>$</span>
			          <input type='text' id='importe' name='importe' value='".$importe."' class='form-control' onfocus='this.blur()'>      
			        </div>
			    </div>";
echo		    "<div class='col-md-4'>
			        <label>SEGURO UNIDADd</label>
			        <div class='input-group'>
			          <span class='input-group-addon'>$</span>
			          <input type='text' id='seguro' name='seguro' value='".$final."' class='form-control' onfocus='this.blur()'>      
			        </div>
			    </div>";
echo		    '<div class="col-md-4">
			        <label>NOMBRE DEL CLIENTE</label>
			          <input type="text" id="nombre" name="nombre" value="" class="form-control">
			      </div>
			      <div class="col-md-4">
			        <label>TELEFONO</label>
			        <div class="input-group">
			          <span class="input-group-addon">#</span>
			          <input type="text" id="telefono" name="telefono" value="" class="form-control"> 
			        </div>
			    </div>';
echo 			'<div class="col-md-2"><br>
			        <button class="btn btn-info" type="submit">Generar PDF !</button>
			    </div>';

?>