<?php
$contador=0;
$descuento=0;
$pago=0;
$semanas=0;
$quincenas=0;
$meses=0;
$final=0;
$var2=0;
$segurosemanas=0;
$seguroquincena=0;
$seguromeses=0;

include ('fpdf/fpdf.php');
include("php/conexion.php");
include("php/consultas_pdf.php");
$id = $_GET['moto'];
$consulta = "SELECT imagen FROM moto WHERE id_moto = $id";
$imagen = mysql_query($consulta);
$datos = mysql_fetch_array($imagen);
$ruta = "php/imagenes/" . $datos['imagen'];

$con = "SELECT MAX(id_contador) as num FROM contador";
$con1 = mysql_query($con);
$con2 = mysql_fetch_array($con1);
$con3 = $con2['num'];

$con = "SELECT contador FROM contador where id_contador=$con3";
$con1 = mysql_query($con);
$con2 = mysql_fetch_array($con1);
$con3 = $con2['contador'];

$requisitos="SELECT requisito,beneficios FROM tipo_credito INNER JOIN crerebe on crerebe.ref_credito= tipo_credito.id_credito INNER JOIN requisitos ON requisitos.id_requisito= crerebe.ref_requisito INNER JOIN beneficios ON beneficios.id_beneficios= crerebe.ref_beneficio WHERE tipo_credito.id_credito='$credito'";
$query = mysql_query($requisitos);
$resultado = mysql_fetch_array($query);

$tb=($tasa*$resanio)+1;
$totalarti=($precio*$tb*1.16);

if ($res1=='SEMANAS') {
	# code...
    $final=$_GET['final']/$semana;
    $var2=$_GET['suma']/$semana;
    $var3=$_GET['articulos']/$semana;
    $var4=$_GET['placas']/$semana;
}
if ($res1=='QUINCENAS') {
	# code...
    $final=$_GET['final']/$quincena;
    $var2=$_GET['suma']/$quincena;
    $var3=$_GET['articulos']/$quincena;
    $var4=$_GET['placas']/$quincena;
}
if ($res1=='MESES') {
	# code...   
    $final=$_GET['final']/$resanio;
    $var2=$_GET['suma']/$resanio;
    $var3=$_GET['articulos']/$resanio;
    $var4=$_GET['placas']/$resanio;
}

        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf->Ln(15);

        ///////////amarillo ///////////
        $pdf->Image('images/fondo.jpg',30,80,150,70,'');
        $pdf->Image('images/suzuki.jpg',140,10,60,30,'');
        $pdf->Image('images/texto.jpg',20,20,100,10,'');
        $pdf->Image('images/final.jpg',45,275,120,13,'');

		$pdf->SetXY(120, 43);
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(5, 6, utf8_decode('Oaxaca de Juárez., a'), 0 , 1);
		$pdf->SetXY(156, 43);
		$pdf->Cell(5, 6,$_GET['fecha'], 0 , 1);

		///////////azul////////// 

		$pdf->SetXY(15, 50);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15, 6, $_GET['nombre'], 0 , 1); /////////////// nombre cliente
		$pdf->SetXY(15, 55);
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(20, 6, 'CELULAR: ', 0 , 1);
		$pdf->SetXY(35, 55);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(20, 6, $_GET['telefono'], 0 , 1); ///////// TELEFONO CLIENTE
		$pdf->SetXY(15, 60);
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(20, 6, 'P R E S E N T E', 0 , 1);
		///////////verde ///////////

		$pdf->SetXY(110, 55);
		$pdf->SetFont('Arial','B',12);
		$pdf->Cell(5, 6, utf8_decode('TIPO DE CRÉDITO:'), 0 , 1);
		$pdf->SetXY(150, 55);
		$pdf->Cell(5, 6,$credito, 0 , 1);

		/////////// SALMON///////////////
	
		$pdf->SetXY(143, 60);
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(5, 6, utf8_decode('NÚMERO DE COTIZACIÓN:'.$con3), 0 , 1);


		///////////// ROSA //////////////

		$pdf->SetXY(15, 65);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15, 6, utf8_decode('En atención a su amable  solicitud tenemos el gusto de presentar la siguiente cotización.'), 0 , 1);

		$pdf->SetXY(85, 72);
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(15, 6, utf8_decode('CARACTERÍSTICAS TÉCNICAS:'), 0 , 1);

		$pdf->SetXY(85, 80);
		$pdf->SetFont('Arial','',8.5);
		$pdf->Cell(15, 6, 'TIPO DE MOTO:', 0 , 1); 
		$pdf->SetXY(85, 85);
		$pdf->Cell(15, 6, 'MOTOR:', 0 , 1);

		$pdf->SetXY(85, 90);
		$pdf->Cell(15, 6, utf8_decode('TRANSMISIÓN:'), 0 , 1);

		$pdf->SetXY(85, 95);
		$pdf->Cell(15, 6, 'TIPO DE MOTOR:', 0 , 1);

		$pdf->SetXY(85, 100);
		$pdf->Cell(15, 6, utf8_decode('NÚMERO DE CILINDROS:'), 0 , 1);

		$pdf->SetXY(85, 105);
		$pdf->Cell(15, 6, utf8_decode('DIÁMETRO:'), 0 , 1);

		$pdf->SetXY(85, 110);
		$pdf->Cell(15, 6, 'CARRERA:', 0 , 1);

		$pdf->SetXY(85, 115);
		$pdf->Cell(15, 6, 'DESPLAZAMIENTO:', 0 , 1);

		$pdf->SetXY(85, 120);
		$pdf->Cell(15, 6, utf8_decode('RELACION DE COMPRENSIÓN:'), 0 , 1);

		$pdf->SetXY(85, 125);
		$pdf->Cell(15, 6, 'SISTEMA DE LUBRICACION:', 0 , 1);

		$pdf->SetXY(85, 130);
		$pdf->Cell(15, 6, 'SISTEMA DE COMBUSTIBLE:', 0 , 1);

		$pdf->SetXY(85, 135);
		$pdf->Cell(15, 6, 'SISTEMA DE ARRANQUE:', 0 , 1);

		$pdf->SetXY(135, 80);
		$pdf->SetFont('Arial','',8.5);
		$pdf->Cell(15, 6, $moto['tipo_moto'], 0 , 1);/////////////// TIPO DE MOTO

		$pdf->SetXY(135, 85);
		$pdf->Cell(15, 6, utf8_decode($moto['motor']), 0 , 1);

		$pdf->SetXY(135, 90);
		$pdf->Cell(15, 6, utf8_decode($moto['trasmision']), 0 , 1);

		$pdf->SetXY(135, 95);
		$pdf->Cell(15, 6, utf8_decode($moto['tipo_motor']), 0 , 1);

		$pdf->SetXY(135, 100);
		$pdf->Cell(15, 6, utf8_decode($moto['numero_cilindros']), 0 , 1);

		$pdf->SetXY(135, 105);
		$pdf->Cell(15, 6, utf8_decode($moto['diametro']), 0 , 1);

		$pdf->SetXY(135, 110);
		$pdf->Cell(15, 6, utf8_decode($moto['carrera']), 0 , 1);

		$pdf->SetXY(135, 115);
		$pdf->Cell(15, 6, utf8_decode($moto['desplazamiento']), 0 , 1);

		$pdf->SetXY(135, 120);
		$pdf->Cell(15, 6, utf8_decode($moto['relacion_compresion']), 0 , 1);

		$pdf->SetXY(135, 125);
		$pdf->Cell(15, 6, utf8_decode($moto['sistema_lubricacion']), 0 , 1);

		$pdf->SetXY(135, 130);
		$pdf->Cell(15, 6, utf8_decode($moto['sistema_combustible']), 0 , 1);

		$pdf->SetXY(135, 135);
		$pdf->Cell(15, 6, utf8_decode($moto['sistema_arranque']), 0 , 1);
		/////////////////////////////////

		$pdf->SetXY(15, 145);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(5, 6, 'FINANCIAMIENTO A:', 0 , 1);

		$pdf->SetXY(15, 149);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(5, 6, 'TIPO DE SEGURO:', 0 , 1);

		$pdf->SetXY(15, 153);
		$pdf->Cell(5, 6, 'FORMA DE PAGOS:', 0 , 1);

		$pdf->SetXY(60, 145);
		$pdf->SetFont('Arial','',9);
		$pdf->Cell(5, 6, utf8_decode($_GET['financiamiento']), 0 , 1);
		$pdf->SetXY(60, 149);
		$pdf->Cell(5, 6, $res, 0 , 1);

		$pdf->SetXY(60, 153);
		$pdf->Cell(5, 6, $res1, 0 , 1);
		/////////////////////////////////

		$pdf->Rect(15, 161, 110 , 6, '');
		$pdf->Rect(15, 167, 110 , 6, '');
		$pdf->Rect(15, 173, 110 , 6, '');

		$pdf->Rect(130, 161, 60 , 6, '');
		$pdf->Rect(130, 167, 60 , 6, '');
		$pdf->Rect(130, 173, 60 , 6, '');
		////////////////////////////////////

		$pdf->SetXY(17, 161);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, 'MODELO', 0 , 1);

		$pdf->SetXY(17, 167);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(5, 6, $moto['modelo'], 0 , 1);

		$pdf->SetXY(17, 173);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, utf8_decode('APERTURA DE CRÉDITO'), 0 , 1);

		$pdf->SetXY(80, 161);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, utf8_decode('AÑO'), 0 , 1);
		$pdf->SetXY(100, 161);
		$pdf->Cell(5, 6, 'ENGANCHE', 0 , 1);

		$pdf->SetXY(80, 167);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(5, 6, $anio, 0 , 1);


		$pdf->SetXY(80, 173);
		$pdf->Cell(5, 6,$descuento, 0 , 1); //////////descuento apertura

		$pdf->SetXY(55, 173);
		$pdf->Cell(5, 6, 'DESCUENTO DE', 0 , 1);

		$pdf->SetXY(85, 173);
		$pdf->Cell(5, 6, '%', 0 , 1);

		$pdf->SetXY(95, 167);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(100, 167);
		$pdf->Cell(5, 6,$_GET['engancheresul'], 0 , 1);

		$pdf->SetXY(95, 173);
		$pdf->Cell(5, 6,'$', 0 , 1);
		if ($descuento>0) {
			# code...
		$descuento=(($costo*$descuento)/100);
		}else{
			$descuento=$costo;			
		}
		$pdf->SetXY(100, 173);
		$pdf->Cell(5, 6,$descuento, 0 , 1);

		$pdf->SetXY(130, 161);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, 'PAGOS MOTOCICLETA', 0 , 1);

		$pdf->SetXY(130, 167);
		$pdf->Cell(5, 6, 'PAGOS DEL SEGURO', 0 , 1);
		$pdf->SetXY(130, 173);
		$pdf->Cell(5, 6, 'PAGOS EMPLACAMIENTO', 0 , 1);

		$pdf->SetXY(175, 173);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(5, 6, round($var4,2), 0 , 1); ///////////////pagos placas
		$pdf->SetXY(170, 173);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(175, 161);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(5, 6, round($final,2), 0 , 1); ////////// pago motocicleta

		$pdf->SetXY(170, 161);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(175, 167);
		$pdf->Cell(5, 6, round($var2,2), 0 , 1);/// pagos seguro

		$pdf->SetXY(170, 167);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(130, 178);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(5, 6, 'SUB TOTAL:', 0 , 1);

		$pdf->SetXY(172, 178);
		$pdf->Cell(5, 6,round($final+$var2+$var4), 0 , 1);

		$pdf->SetXY(169, 178);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->Image($ruta,15,90,60,40,'');
		////////////////////////////////////////
		$usuario=$_GET['parametro'];
		$consulta = mysql_query("SELECT * FROM accesorio where ref_usuario=$usuario");

		$pdf->Rect(15, 181, 110 , 6, '');
		$pdf->Rect(15, 187, 110 , 6, '');
		$pdf->SetXY(15,181);
		$pdf->SetFont('Arial','B',9);
		$pdf->Cell(5, 6, 'ACCESORIOS', 0 , 1);
		$pdf->SetXY(15,187);
		$pdf->Cell(5, 6, 'DESCRIPCION DEL ARTICULO', 0 , 1);
		$pdf->SetXY(15,193);
		$pdf->SetFont('Arial','',10);
		while($resultado = mysql_fetch_array($consulta)){
		$pdf->Cell(110,5,$resultado['nombre_accesorio'],1,2);
		} 
		$pdf->SetX(65);
		$pdf->SetFont('Arial','B',10);
		$pago=$_GET['engancheresul']+$descuento;
		$pdf->Cell(5, 6, 'PAGO INICIAL DE:     $ '.$pago, 0 , 1);
		//////////////////////////////////////
		$consul = mysql_query("SELECT * FROM accesorio where ref_usuario=$usuario");
		$pdf->Rect(130, 187, 60 , 6, '');
		$pdf->SetFont('Arial','B',9);
		$pdf->SetXY(135,187);
		$pdf->Cell(5, 6, 'CANTIDAD', 0 , 1);
		$pdf->SetXY(165,187);
		$pdf->Cell(5, 5, 'IMPORTE', 0 , 1);
		$pdf->SetXY(130,193);
		$pdf->SetFont('Arial','',9);
		while($cantidad = mysql_fetch_array($consul)){
		$pdf->Cell(60,5,$cantidad['cantidad'],1,2);
		} 
		/////////////////////////////////////////
		$consult = mysql_query("SELECT * FROM accesorio where ref_usuario=$usuario");
		$pdf->SetXY(170,193);
		while($cantidad = mysql_fetch_array($consult)){
			$tem=($cantidad['total']*$tb);
			$tem1=($tem*1.16)/$temporal;
			$pdf->Cell(60,5,'$'.round($tem1,2),0,2);
			$contador=round($contador+$tem1,2);
		} 
		/////////////////////////////////////////
		$suma=0;
		$suma=$contador+($final+$var2+$var4);
		$pdf->SetX(130);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(1, 4, 'SUB TOTAL:'.'                             '.'$'.$contador, 0 , 1);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetX(130);
		$pdf->Cell(6, 4, 'TOTAL:'.'                           '.'$'.round($suma), 0 , 2);
		$pdf->SetX(170);
		/////////////////////////////////////

		$pdf->SetXY(10, 232);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, 'ASESOR DE VENTAS:', 0 , 1);

		$cliente="SELECT * FROM usuario WHERE id_usuario='$usuario'";
		$query = mysql_query($cliente);
		$user = mysql_fetch_array($query);
		// $var = $resultado['nombre'];

		$pdf->SetXY(42, 232);
		$pdf->SetFont('Arial','B',9);
		$pdf->Cell(5, 6,$user['nombre'], 0 , 1);

		$pdf->SetXY(10, 235);
		$pdf->Cell(5, 6, 'CORREO:', 0 , 1);

		$pdf->SetXY(42, 235);
		$pdf->SetFont('Arial','B',9);
		$pdf->Cell(5, 6,$user['correo'], 0 , 1);

		$pdf->SetXY(10, 238);
		$pdf->Cell(5, 6, 'REQUISITOS:', 0 , 1);
		$resultado = mysql_query("SELECT requisito,beneficios FROM tipo_credito INNER JOIN crerebe on crerebe.ref_credito= tipo_credito.id_credito INNER JOIN requisitos ON requisitos.id_requisito= crerebe.ref_requisito INNER JOIN beneficios ON beneficios.id_beneficios= crerebe.ref_beneficio WHERE tipo_credito.id_credito=8");
		$pdf->SetFont('Arial','',7);
		$pdf->SetXY(10,243);
		while($papel = mysql_fetch_array($resultado)){
			$pdf->Cell(60,2.4,$papel['requisito'],0,2);
		} 

		$pdf->SetXY(115, 232);
		$pdf->SetFont('Arial','B',9);
		$pdf->Cell(5, 6, utf8_decode('TELÉFONO:'), 0 , 1);

		$pdf->SetXY(140, 232);
		$pdf->Cell(5, 6,$user['telefono'], 0 , 1);

		$pdf->SetXY(115, 235);
		$pdf->Cell(5, 6, 'CELULAR:', 0 , 1);

		$pdf->SetXY(140, 235);
		$pdf->Cell(5, 6,$user['celular'], 0 , 1);

		$pdf->SetXY(115, 238);
		$pdf->Cell(5, 6, 'BENEFICIOS:', 0 , 1);
		$resultado = mysql_query("SELECT requisito,beneficios FROM tipo_credito INNER JOIN crerebe on crerebe.ref_credito= tipo_credito.id_credito INNER JOIN requisitos ON requisitos.id_requisito= crerebe.ref_requisito INNER JOIN beneficios ON beneficios.id_beneficios= crerebe.ref_beneficio WHERE tipo_credito.id_credito=9");
		$pdf->SetFont('Arial','',7);
		$pdf->SetXY(115,243);
		while($papel = mysql_fetch_array($resultado)){
			$pdf->Cell(30,2.4,$papel['beneficios'],0,2);
		} 

		$pdf->SetXY(15,270);
		$pdf->SetFont('Arial','B',7);
		$pdf->Cell(5, 6, 'JUEGO EN ORIGINAL Y COPIA.', 0 , 2);

		$pdf->SetXY(120,267);
		$pdf->Cell(5, 6, utf8_decode('*DURANTE TODA LA VIDA DEL CRÉDITO.'), 0 , 2);

		$pdf->SetXY(120,270);
		$pdf->Cell(5, 6, '*DIA DE ENTREGA DE LA UNIDAD.', 0 , 2);

		//////////////////////////////////////
		$pdf->Ln();
		$pdf->Ln(); //salto de linea
		$pdf->Ln(15);//ahora salta 15 lineas 
        $pdf->Output("pdf.pdf",'I');
		echo "<script language='javascript'>window.open('pdf.pdf','_target','');</script>";//para ver el archivo pdf generado
		exit;

	?>