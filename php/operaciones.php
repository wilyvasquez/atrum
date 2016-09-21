<?php
header("Content-Type: text/html;charset=utf-8");
$final=0;
include("conexion.php");
include("consultas.php");
      $unde=$_POST['plazo'];
      $query10 = "select * from anios where id_anios ='$unde'";
      $result6 = mysql_query($query10);  
      $apertura5 = mysql_fetch_array($result6);
      $varvar = $apertura5['anios'];

echo "<div class='col-md-3'>
        <label>FINANCIAMIENTO</label>        
     </div>
      <div class='col-md-4'>
        <div class='input-group'>
          <span class='input-group-addon'>$</span>
          <input type='text' id='financiamiento' name='financiamiento' value='".$varvar,' , ',$_POST['enganche']." % de enganche' class='form-control' onfocus='this.blur()'>
        </div>
      </div>
      <div class='col-md-2'>
        <label>ENGANCHE</label>        
      </div>
      <div class='col-md-3'>
        <div class='input-group'>
          <span class='input-group-addon'>$</span>
          <input type='text' id='enganche' name='enganche' value='".$ope."' class='form-control' onfocus='this.blur()'>
        </div>
      </div>
      <div class='col-md-3' style='margin-top:5px'>
        <label>COSTO APERTURA</label>
      </div>
       <div class='col-md-3' style='margin-top:5px'>
        <div class='input-group'>
          <span class='input-group-addon'>$</span>
          <input type='text' id='apertura' name='apertura' value='".$costo."' class='form-control' onfocus='this.blur()'>   </div>
      </div>
      <div class='col-md-3' style='margin-top:5px'>
          <label>COSTO MOTOCICLETA</label>        
      </div>
      <div class='col-md-3' style='margin-top:5px'>
        <div class='input-group'>
          <span class='input-group-addon'>$</span>
          <input type='text' id='motocicleta' name='motocicleta' value='".$res."' class='form-control' onfocus='this.blur()'>      
        </div>
      </div>
      <div class='col-md-3' style='margin-top:5px'>
        <label>BASE DEL CREDITO</label>        
      </div>
      <div class='col-md-3' style='margin-top:5px'>
        <div class='input-group'>
          <span class='input-group-addon'>$</span>
          <input type='text' id='credito' name='credito' value='".$base."' class='form-control' onfocus='this.blur()'>      
        </div>
      </div>
      <div class='col-md-3' style='margin-top:5px'>
        <label>IMPORTE CREDITO</label>        
      </div>
      <div class='col-md-3' style='margin-top:5px'>
        <div class='input-group'>
          <span class='input-group-addon'>$</span>
          <input type='text' id='importe' name='importe' value='".$importe."' class='form-control' onfocus='this.blur()'>      
        </div>
      </div>
      <div class='col-md-3' style='margin-top:5px'>
        <label>SEGURO UNIDAD</label>        
      </div>
      <div class='col-md-3' style='margin-top:5px'>
        <div class='input-group'>
          <span class='input-group-addon'>$</span>
          <input type='text' id='seguro' name='seguro' value='".$final."' class='form-control' onfocus='this.blur()'>      
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
        <label>NOMBRE DEL CLIENTE</label>        
      </div>
      <div class='col-md-4' style='margin-top:5px'>
          <input type='text' id='nombre' name='nombre' value='' class='form-control' onkeypress='letras()' required/>
      </div>
      <div class='col-md-offset-2 col-md-2' style='margin-top:5px'>
        <button class='btn btn-info' onclick='pdf()' type='submit'>Generar PDFF !</button>
      </div>"
?>