<?php
include("conexion.php");
	$query = "SELECT * FROM moto WHERE id_moto='".$_GET['c']."'";
    $result = mysql_query($query);  
    $apertura = mysql_fetch_array($result);
echo 	"
			<div class='col-md-4'>
                <label for=''>Modelo</label>
                    <input type='text' id='modelo' name='modelo' class='form-control' value='".$apertura['modelo']."'/>
            </div>
            <div class='col-md-4'>
                    <label for=''>Motor</label>
                    <input type='text' class='form-control' id='motor' name='motor' value='".$apertura['motor']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Transmision</label>
                    <input type='text' class='form-control' id='trasmision' name='trasmision' value='".$apertura['trasmision']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Tipo motor</label>
                    <input type='text' class='form-control' id='timo' name='timo' value='".$apertura['tipo_motor']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Numero cilindros</label>
                    <input type='text' class='form-control' id='cilindros' name='cilindros' value='".$apertura['numero_cilindros']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Diametro</label>
                    <input type='text' class='form-control' id='diametro' name='diametro' value='".$apertura['diametro']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Carrera</label>
                    <input type='text' class='form-control' id='carrera' name='carrera' value='".$apertura['carrera']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Desplazamiento</label>
                    <input type='text' class='form-control' id='desplazamiento' name='desplazamiento' value='".$apertura['desplazamiento']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Relacion Compresion</label>
                    <input type='text' class='form-control' id='compresion' name='compresion' value='".$apertura['relacion_compresion']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Sistema de Lubricacion</label>
                    <input type='text' class='form-control' id='lubricacion' name='lubricacion' value='".$apertura['sistema_lubricacion']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Sistema Combustible</label>
                    <input type='text' class='form-control' id='combustible' name='combustible' value='".$apertura['sistema_combustible']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Sistema Arranque</label>
                    <input type='text' class='form-control' id='arranque' name='arranque' value='".$apertura['sistema_arranque']."'>
            </div>
            <div class='col-md-4'>
                    <label for=''>Subir foto</label>
                    <input type='file' class='form-control' id='imagen' name='imagen'>
            </div>
		";
?>