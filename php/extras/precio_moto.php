<?php
include("../conexion.php");
if (!empty($_POST['moto'])) {
    # code...
    $moto=$_POST['moto'];
    $anio=$_POST['anio'];
    $query = "SELECT * FROM moto_anio_precio INNER JOIN moto ON moto.id_moto= moto_anio_precio.ref_moto INNER JOIN anio_moto on anio_moto.id_anio_moto= moto_anio_precio.ref_anio INNER JOIN precio_moto on precio_moto.id_precio_moto= moto_anio_precio.ref_precio WHERE moto_anio_precio.ref_moto=$moto AND moto_anio_precio.ref_anio=$anio";
      $result = mysql_query($query);  
      $apertura = mysql_fetch_array($result);
      $precio = $apertura['precio'];
      $idprecio = $apertura['id_precio_moto'];
}
echo "	<label for=''>COSTO MOTOCICLETA</label>
        <input type='text' class='form-control' id='costomoto' name='costomoto' value='".$precio."'>
        <input style='display:none' type='text' class='form-control' id='idprecio' name='idprecio' value='".$idprecio."'>";
?>