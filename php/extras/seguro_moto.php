<?php
include("../conexion.php");
if (!empty($_POST['idmoto'])) {
    # code...
    $idmoto=$_POST['idmoto'];
    $idseguro=$_POST['idseguro'];
    $query="SELECT * FROM moto INNER JOIN moto_seguro ON moto_seguro.ref_moto= moto.id_moto INNER JOIN tipo_seguro ON  tipo_seguro.id_seguro=moto_seguro.ref_seguro WHERE moto.id_moto=$idmoto AND tipo_seguro.id_seguro=$idseguro";
      $reseguro = mysql_query($query);  
      $var = mysql_fetch_array($reseguro);
      $resul = $var['precio_seguro'];
      $idseguro = $var['id_seguro'];
}
echo "	<label for=''>COSTO SEGURO</label>
        <input type='text' class='form-control' id='costoseguro' name='costoseguro' value='".$resul."'>
        <input style='display:none' type='text' class='form-control' id='idprecio' name='idprecio' value='".$idseguro."'>";
?>