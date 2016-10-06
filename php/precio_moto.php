<?php
include("conexion.php");
$ivares="";
$suma="";
$placas="";
include("consultas.php");
if (isset($_POST['moto'])) {
    header("Content-Type: text/html;charset=utf-8");
    # code...
    $res=$_POST['moto'];
    $consulta = "SELECT imagen FROM moto WHERE id_moto = $res";
    $imagen = mysql_query($consulta);
    $datos = mysql_fetch_array($imagen);
    $ruta = "php/imagenes/" . $datos['imagen'];
}else{
    $ruta="images/no disponible.jpg";
    $final=0;
}

echo    "<div class='thumbnail col-md-6' style='width:260px; height:200px'>
            <form action='' method='POST' enctype='multipart/form-data' >
              <img src='".$ruta."' style='margin-top:10px'/>
            </form>
        </div>";
echo    "<br><br>
        <div class='col-md-6'> 
          <div class='col-md-5' style='margin-top:5px'>
            <label>COSTO</label>        
        </div>
        <div class='col-md-7' style='margin-top:5px'>
            <div class='input-group' id='precio'>
                <span class='input-group-addon'>$</span>
                <input type='text' id='costo' name='costo' value='".round($ivares,2)."' class='form-control' onfocus='this.blur()'>      
            </div>
        </div>
        <div class='col-md-5' style='margin-top:5px'>
            <label>SEGURO</label>        
        </div>
        <div class='col-md-7' style='margin-top:5px'>
            <div class='input-group'>
                <span class='input-group-addon'>$</span>
                <input type='text' id='seguromoto' name='seguro' value='".round($suma,2)."' class='form-control' onfocus='this.blur()'>      
            </div>
        </div>
        <div class='col-md-5'>
            <label><h6>EMPLACAMIENTO</h6></label>        
        </div>
        <div class='col-md-7' style='margin-top:5px'>
            <div class='input-group'>
                <span class='input-group-addon'>$</span>
                <input type='text' id='costoempla' name='costoempla' value='".round($placas,2)."' class='form-control' onfocus='this.blur()'>      
            </div>
        </div>
      </div>"
?>