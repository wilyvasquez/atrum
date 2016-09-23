<?php
header("Content-Type: text/html;charset=utf-8");
$final=0;
include("conexion.php");
include("consultas.php");

echo "<div class='thumbnail col-md-6' style='width:300px; height:200px;'></div><br><br>
      <div class='col-md-6'> 
          <div class='col-md-5' style='margin-top:5px'>
            <label>COSTO</label>        
        </div>
        <div class='col-md-7' style='margin-top:5px'>
            <div class='input-group' id='precio'>
                <span class='input-group-addon'>$</span>
                <input type='text' id='costo' name='costo' value='".$ivares."' class='form-control' onfocus='this.blur()'>      
            </div>
        </div>
        <div class='col-md-5' style='margin-top:5px'>
            <label>SEGURO</label>        
        </div>
        <div class='col-md-7' style='margin-top:5px'>
            <div class='input-group'>
                <span class='input-group-addon'>$</span>
                <input type='text' id='seguromoto' name='seguro' value='".$suma."' class='form-control' onfocus='this.blur()'>      
            </div>
        </div>
        <div class='col-md-5'>
            <label><h6>EMPLACAMIENTO</h6></label>        
        </div>
        <div class='col-md-7' style='margin-top:5px'>
            <div class='input-group'>
                <span class='input-group-addon'>$</span>
                <input type='text' id='costoempla' name='costoempla' value='".$placas."' class='form-control' onfocus='this.blur()'>      
            </div>
        </div>
      </div>"
?>