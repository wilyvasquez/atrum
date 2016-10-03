<?php
$res=$_POST['moto'];
$consulta = "SELECT imagen FROM moto WHERE id_moto = $res";
$imagen = mysql_query($consulta);
$datos = mysql_fetch_array($imagen);
$ruta = "php/imagenes/" . $datos['imagen'];

//ahora solamente debemos mostrar la imagen
// echo    "<div class='thumbnail' style='width:300px; height:200px;margin-left:50px'>
//             <form action='' method='POST' enctype='multipart/form-data' >
//               <img src='php/foto.php?id=$res' style='margin-left:20px;margin-top:10px'/>
//             </form>
//      	</div>";
// echo    "<div class='thumbnail' style='width:300px; height:200px;margin-left:50px'>
//             <form action='' method='POST' enctype='multipart/form-data' >
//      			<img src='$ruta'/>         
//             </form>
//      	</div>";
echo $ruta;
// echo "<img src='$ruta' />";
?>