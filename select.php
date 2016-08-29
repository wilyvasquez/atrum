<?php

include 'conexion.php';

// $con=conexion();

// $res=mysql_query("select * from alta_equipo where id_equipo='".$_POST['cod_banda']."'");

$res=mysql_query("select * from tipo_moto inner JOIN alta_equipo on alta_equipo.ref_tipo=tipo_moto.id_tipo WHERE tipo_moto.id_tipo='".$_POST['cod_banda']."'")

?>
<label for="modelo">MODELO </label><br>
<select>

<?php while($fila=mysql_fetch_array($res)){ ?>

	<option value=""><?php echo $fila['modelo']; ?></option>

<?php } ?>

</select>

