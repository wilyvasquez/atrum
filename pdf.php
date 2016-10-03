<?php 
include("php/conexion.php");
$query='select * from accesorio';
$result = mysql_query($query);
$query1='select * from accesorio';
$accesorio = mysql_query($query1);

// $id = $_GET['id'];
$id = 7;

$consulta = "SELECT imagen FROM moto WHERE id_moto = $id";
$imagen = mysql_query($consulta);
$datos = mysql_fetch_array($imagen);
$ruta = "php/imagenes/" . $datos['imagen'];

ob_start();
?>
<html>
<body>
<div>
	<img style="margin-left:50px" src="images/texto.jpg" width="400px" height="40px">
	<img style="margin-left:10px" src="images/suzuki.jpg" width="200px" height="90px">
</div><br>
<div style="margin-left:10.5cm">
	<font size="2" face="sans-serif">Oaxaca de Juarez, Oax.,a</font>
	<font size="2" face="sans-serif"><?= $_GET['fecha'] ?></font>
</div>
<div><font size="2" face="sans-serif"><?= $_GET['nombre'] ?></font></div>
<div>
<b>
	<font size=2 face="sans-serif">CELULAR:</font>
	<font size=2 face="sans-serif"><?= $_GET['telefono'] ?></font>
	<font size=3 face="sans-serif" style="margin-left:350px">TIPO DE CREDITO:</font>
	<font size=3 face="sans-serif">variable</font>	
</b>
<div>
	<b><font size="3">P R E S E N T E</font></b>
	<font size="1" face="sans-serif" style="margin-left:380px">NUMERO DE COTIZACION:</font>
	<font size="1" face="sans-serif">variable</font>
</div>
<!-- /////////////////////////////////// -->
<div style="background-image:url(images/fondo.jpg)">
	<div><font size="2" face="sans-serif">En atencion a su amable solicitud tenemos el gusto de presentar la siguiente cotizacion</font></div>
<div style="float:left;width:0px"><br><br>
        <img src="<?= $ruta ?>" style="margin-left:20px;margin-top:10px"/>
</div>
<div style="float:left;width:400px;margin-left:300px">
	<div><b><font size="2" face="sans-serif">CARACTERISTICAS TECNICAS:</font></b></div>
	<div>
		<b><font size="1" face="sans-serif">TIPO DE MOTO:</font></b>
		<font size="1" face="sans-serif" style="margin-left:110px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">MOTOR:</font></b>
		<font size="1" face="sans-serif" style="margin-left:148px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">TRANSMISION:</font></b>
		<font size="1" face="sans-serif" style="margin-left:113px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">TIPO DE MOTOR:</font></b>
		<font size="1" face="sans-serif" style="margin-left:103px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">NUMERO DE CILINDROS:</font></b>
		<font size="1" face="sans-serif" style="margin-left:62px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">DIAMETRO:</font></b>
		<font size="1" face="sans-serif" style="margin-left:132px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">CARRERA:</font></b>
		<font size="1" face="sans-serif" style="margin-left:136px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">DESPLAZAMIENTO:</font></b>
		<font size="1" face="sans-serif" style="margin-left:91px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">RELACION DE COMPRESION:</font></b>
		<font size="1" face="sans-serif" style="margin-left:41px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">SISTEMA DE LUBRICACION:</font></b>
		<font size="1" face="sans-serif" style="margin-left:48px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">SISTEMA DE COMBUSTIBLE:</font></b>
		<font size="1" face="sans-serif" style="margin-left:45px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">SISTEMA DE ARRANQUE:</font></b>
		<font size="1" face="sans-serif" style="margin-left:61px">variable</font>
	</div>
</div>
</div>
<!-- /////////////////////////////////// -->
<div>
	<div>
		<b><font size="1" face="sans-serif">FINANCIAMIENTO A:</font></b>
		<font size="1" face="sans-serif" style="margin-left:20px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif" >TIPO DE SEGURO:</font></b>
		<font size="1" face="sans-serif" style="margin-left:31px">variable</font>
	</div>
	<div>
		<b><font size="1" face="sans-serif">FORMA DE PAGOS:</font></b>
		<font size="1" face="sans-serif" style="margin-left:26px">variable</font>
	</div><br>
</div>
<div>
	<table style="width: 100%">
		<thead>
			<tr>
				<td>
					<table style="border: thick solid ; border-collapse: collapse;border-width: 1px;width: 100%">
						<thead>
							<tr>
								<th align="left"><b><font style="margin-left: 5px" size="1" face="sans-serif">MODELO</font></b></th>
								<th><b><font size="1" face="sans-serif">AÑO</font></b></th>
								<th align="right"><b><font size="1" face="sans-serif">ENGANCHE</font></b></th>
							</tr>
						</thead>
						<tbody style="border: thick solid;border-width: 1px">
							<tr>
								<td><font style="margin-left: 5px" size="1" face="sans-serif">var</font></td>
								<td><font size="1" face="sans-serif">var</font></td>
								<td align="right"><font style="margin-right: 10px" size="1" face="sans-serif">var</font></td>
							</tr>
						</tbody>
						<tbody style="border: thick solid;border-width: 1px">
							<tr>
								<td><b><font style="margin-left: 5px" size="1" face="sans-serif">APERTURA CREDITO</font></b></td>
								<td><font size="1" face="sans-serif">var</font></td>
								<td align="right"><font style="margin-right: 10px" size="1" face="sans-serif">var</font></td>
							</tr>			
						</tbody>
					</table>
				</td>
				<td>
					<table style="border: thick solid ; border-collapse: collapse;border-width: 1px;width: 75%">
						<thead>
							<tr>
								<td><b><font style="margin-left: 5px" size="1" face="sans-serif">COSTO MOTOCICLETA</font></b></td>
								<td><font size="1" face="sans-serif">var</font></td>
							</tr>
						</thead>
						<tbody >
							<tr>
								<td><b><font style="margin-left: 5px" size="1" face="sans-serif">COSTO SEGURO</font></b></td>
								<td><font size="1" face="sans-serif">var</font></td>
							</tr>
						</tbody>
						<tbody style="border: thick solid;border-width: 1px">
							<tr>
								<td><b><font style="margin-left: 5px" size="1" face="sans-serif">SUB TOTAL</font></b></td>
								<td><b><font size="1" face="sans-serif">var</font></b></td>
							</tr>							
						</tbody>
					</table>
				</td>
			</tr>
		</thead>
	</table>
	<table style="width: 100%">
		<thead>
			<tr>
				<td>
					<table style="border: thick solid ; border-collapse: collapse;border-width: 1px;width: 100%">
						<thead>
							<tr>
								<th align="left"><b><font style="margin-left: 5px" size="1" face="sans-serif">ACCESORIOS</font></b></th>
								<!-- <th><b><font size="1" face="sans-serif">PRECIO</font></b></th> -->
							</tr>
						</thead>
						<tbody style="border: thick solid;border-width: 1px">
							<tr>
								<td><b><font style="margin-left: 20px" size="1" face="sans-serif">DESCRIPCION DEL ARTICULO</font></b></td>
							</tr>
						</tbody>
						<?php while ($registro = mysql_fetch_array($result)){?>
						<tbody style="border: thick solid;border-width: 1px">
							<tr>
								<td><font style="margin-left: 20px" size="1" face="sans-serif"><?= $registro['nombre_accesorio'] ?></font></td>
							</tr>			
						</tbody>
						<?php }?>
					</table>
				</td>
				<td>
					<table style="border: thick solid ; border-collapse: collapse;border-width: 1px;width: 50%">
						<thead>
							<tr>
								<td><b><font style="margin-left: 5px" size="1" face="sans-serif">CANTIDAD</font></b></td>
								<td><b><font style="margin-left: 5px" size="1" face="sans-serif">IMPORTE</font></b></td>
							</tr>
						</thead>
						<?php while ($hola = mysql_fetch_array($accesorio)) { ?>
						<tbody style="border: thick solid;border-width: 1px;">
							<tr>
								<td><b><font style="margin-left: 5px" size="1" face="sans-serif"><?= $hola['cantidad'] ?></font></b></td>
								<td align="right"><font size="1" face="sans-serif"><?= $hola['cantidad'] ?></font></td>
							</tr>
						</tbody>
						<?php }?>
						<tbody>
							<tr>
								<td><b><font style="margin-left: 5px" size="1" face="sans-serif">SUB TOTAL</font></b></td>
								<td align="right"><b><font style="margin-right:10px" size="1" face="sans-serif">var</font></b></td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td align="right">
					<b><font size="1" face="sans-serif">PAGO INICIAL DE:</font></b>
					<b><font style="margin-right:10px" size="1" face="sans-serif">$12123.2131</font></b>
				</td>
				<td align="left">
					<b><font style="margin-left: 15px" size="1" face="sans-serif">TOTAL:</font></b>
					<b><font style="margin-left: 40px" size="1" face="sans-serif">$12123.21</font></b>
				</td>
			</tr>
		</tbody>
	</table>
</div><br>
</div>
<div>
	<b><font size="1" face="sans-serif">ASESOR DE VENTAS:</font></b>
	<font size="1" face="sans-serif">variable</font>
</div>	
<div>
	<b><font size="1" face="sans-serif">CORREO:</font></b>
	<font size="1" face="sans-serif" style="margin-left:62px">variable</font>
	<b><font size="1" face="sans-serif" style="margin-left:202px">TELEFONO:</font></b>
	<font size="1" face="sans-serif">variable</font>
</div>
<div>
	<b><font size="1" face="sans-serif">REQUISITOS:</font></b>
	<b><font size="1" face="sans-serif" style="margin-left:288px">BENEFICIOS:</font></b>
</div>
<div>
	<img style="position:absolute;margin-left: 20px;margin-top: 100px" src="images/uno.jpg" width="300px">
	<img style="position:absolute;margin-left: 400px;margin-top: 100px" src="images/dos.jpg" width="250px" style="margin-left:60px">
</div>
<div>
	<center><img style="position:absolute;margin-left: 100px;margin-top: 200px" src="images/final.jpg" width="500px"></center>
</div>
</body>
</html>
<?php
require_once("dompdf/dompdf_config.inc.php");
$dompdf = new DOMPDF();
$dompdf->load_html(ob_get_clean());
$dompdf->render();
$pdf = $dompdf->output();
$filename = 'nombre.pdf';
$dompdf->stream($filename, array("Attachment" => 0));
?>