<?php
// Conexion a la base de datos
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("atrum") or die(mysql_error());

if ($_GET['id'] > 0)
{
    // Consulta de búsqueda de la imagen.
    $consulta = "SELECT foto, tipo FROM alta_equipo WHERE id_equipo={$_GET['id']}";
    $resultado = @mysql_query($consulta) or die(mysql_error());
    $datos = mysql_fetch_assoc($resultado);

    $foto = $datos['foto']; // Datos binarios de la foto.
    $tipo = $datos['tipo']; //alta_equipo Mime Tid_equipo de la foto.
    // Mandamos las cabeceras al navegador indicando el tipo de datos que vamos a enviar.
    header("Content-type: $tipo");
    // A continuación enviamos el contenido binario de la foto.
    echo $foto;
}
?>