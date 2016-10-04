<?php

include ('fpdf/fpdf.php');
include("php/conexion.php");

$id = 7;

$consulta = "SELECT imagen FROM moto WHERE id_moto = $id";
$imagen = mysql_query($consulta);
$datos = mysql_fetch_array($imagen);
$ruta = "php/imagenes/" . $datos['imagen'];
        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf->Ln(15);//ahora salta 15 lineas

        ///////////amarillo ///////////
        $pdf->Image('images/fondo.jpg',30,80,150,70,'');
        $pdf->Image('images/suzuki.jpg',140,10,60,30,'');
        $pdf->Image('images/texto.jpg',20,20,100,10,'');
        $pdf->Image('images/final.jpg',45,275,120,13,'');

		$pdf->SetXY(118, 43);
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(5, 6, utf8_decode('Oaxaca de Juárez., a'), 0 , 1);
		$pdf->SetXY(153, 43);
		$pdf->Cell(5, 6,"var", 0 , 1);

		///////////azul////////// 

		$pdf->SetXY(15, 50);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15, 6, "var", 0 , 1); /////////////// nombre cliente
		$pdf->SetXY(15, 55);
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(20, 6, 'CELULAR: ', 0 , 1);
		$pdf->SetXY(35, 55);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(20, 6, "var", 0 , 1); ///////// TELEFONO CLIENTE
		$pdf->SetXY(15, 60);
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(20, 6, 'P R E S E N T E', 0 , 1);
		///////////verde ///////////

		$pdf->SetXY(122, 55);
		$pdf->SetFont('Arial','B',13);
		$pdf->Cell(5, 6, utf8_decode('TIPO DE CRÉDITO:'), 0 , 1);
		$pdf->SetXY(165, 55);
		$pdf->Cell(5, 6,"var", 0 , 1);

		/////////// SALMON///////////////
	
		$pdf->SetXY(143, 60);
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(5, 6, utf8_decode('NÚMERO DE COTIZACIÓN:123'), 0 , 1);


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
		$pdf->Cell(15, 6, "var", 0 , 1);/////////////// TIPO DE MOTO

		$pdf->SetXY(135, 85);
		$pdf->Cell(15, 6, "var", 0 , 1);

		$pdf->SetXY(135, 90);
		$pdf->Cell(15, 6, "var", 0 , 1);

		$pdf->SetXY(135, 95);
		$pdf->Cell(15, 6, "var", 0 , 1);

		$pdf->SetXY(135, 100);
		$pdf->Cell(15, 6, "var", 0 , 1);

		$pdf->SetXY(135, 105);
		$pdf->Cell(15, 6, "var", 0 , 1);

		$pdf->SetXY(135, 110);
		$pdf->Cell(15, 6, "var", 0 , 1);

		$pdf->SetXY(135, 115);
		$pdf->Cell(15, 6, "var", 0 , 1);

		$pdf->SetXY(135, 120);
		$pdf->Cell(15, 6, "var", 0 , 1);

		$pdf->SetXY(135, 125);
		$pdf->Cell(15, 6, "var", 0 , 1);

		$pdf->SetXY(135, 130);
		$pdf->Cell(15, 6, "var", 0 , 1);

		$pdf->SetXY(135, 135);
		$pdf->Cell(15, 6, "var", 0 , 1);
		/////////////////////////////////

		$pdf->SetXY(15, 145);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(5, 6, 'FINANCIAMIENTO A:', 0 , 1);

		$pdf->SetXY(15, 150);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(5, 6, 'TIPO DE SEGURO:', 0 , 1);

		$pdf->SetXY(15, 155);
		$pdf->Cell(5, 6, 'FORMA DE PAGOS:', 0 , 1);

		$pdf->SetXY(60, 145);
		$pdf->SetFont('Arial','',9);
		$pdf->Cell(5, 6, utf8_decode("var"), 0 , 1);
		$pdf->SetXY(60, 150);
		$pdf->Cell(5, 6, "var", 0 , 1);////////// tipo de seguro

		$pdf->SetXY(60, 155);
		$pdf->Cell(5, 6, "var", 0 , 1);
		/////////////////////////////////

		$pdf->Rect(15, 161, 110 , 6, '');
		$pdf->Rect(15, 167, 110 , 6, '');
		$pdf->Rect(15, 173, 110 , 6, '');

		$pdf->Rect(130, 161, 60 , 6, '');
		$pdf->Rect(130, 167, 60 , 6, '');
		////////////////////////////////////

		$pdf->SetXY(17, 161);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, 'MODELO', 0 , 1);

		$pdf->SetXY(17, 167);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(5, 6, "vari", 0 , 1);

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
		$pdf->Cell(5, 6, "var", 0 , 1);


		$pdf->SetXY(80, 173);
		$pdf->Cell(5, 6,"var", 0 , 1); //////////descuento apertura

		$pdf->SetXY(55, 173);
		$pdf->Cell(5, 6, 'DESCUENTO DE', 0 , 1);

		$pdf->SetXY(85, 173);
		$pdf->Cell(5, 6, '%', 0 , 1);

		$pdf->SetXY(95, 167);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(100, 167);
		$pdf->Cell(5, 6,"vari", 0 , 1);

		$pdf->SetXY(95, 173);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(100, 173);
		$pdf->Cell(5, 6, "var", 0 , 1);

		$pdf->SetXY(130, 161);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, 'PAGOS MOTOCICLETA', 0 , 1);

		$pdf->SetXY(130, 167);
		$pdf->Cell(5, 6, 'PAGOS DEL SEGURO', 0 , 1);

		$pdf->SetXY(175, 161);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(5, 6, "var", 0 , 1); ////////// pago motocicleta

		$pdf->SetXY(170, 161);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(175, 167);
		$pdf->Cell(5, 6, "var", 0 , 1);/// pagos seguro

		$pdf->SetXY(170, 167);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(130, 173);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(5, 6, 'SUB TOTAL:', 0 , 1);

		$pdf->SetXY(175, 173);
		$pdf->Cell(5, 6, "var", 0 , 1);

		$pdf->SetXY(170, 173);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->Image($ruta,15,90,65,40,'');
		////////////////////////////////////////
		$consulta = mysql_query("SELECT * FROM accesorio");

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
		$pdf->Cell(5, 6, 'PAGO INICIAL DE:', 0 , 1);
		//////////////////////////////////////
		$consul = mysql_query("SELECT * FROM accesorio");
		$pdf->Rect(130, 187, 60 , 6, '');
		$pdf->SetFont('Arial','B',9);
		$pdf->SetXY(135,187);
		$pdf->Cell(5, 6, 'CANTIDAD', 0 , 1);
		$pdf->SetXY(165,187);
		$pdf->Cell(5, 5, 'IMPORTE', 0 , 1);
		$pdf->SetXY(130,193);
		while($cantidad = mysql_fetch_array($consul)){
		$pdf->Cell(60,5,$cantidad['cantidad'],1,2);
		} 
		/////////////////////////////////////////
		$consult = mysql_query("SELECT * FROM accesorio");
		$pdf->SetXY(170,193);
		while($cantidad = mysql_fetch_array($consult)){
			$pdf->Cell(60,5,'$'.$cantidad['total'],0,2);
		} 
		/////////////////////////////////////////

		$pdf->SetX(130);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(1, 4, 'SUB TOTAL:'.'                             '.'$'.'var', 0 , 1);
		$pdf->SetFont('Arial','B',10);
		$pdf->SetX(130);
		$pdf->Cell(1, 4, 'TOTAL:'.'                           '.'$'.'var', 0 , 2);
		$pdf->SetX(170);

		/////////////////////////////////////

		$pdf->SetXY(15, 232);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, 'ASESOR DE VENTAS:', 0 , 1);

		$pdf->SetXY(47, 232);
		$pdf->Cell(5, 6,"var", 0 , 1);

		$pdf->SetXY(15, 235);
		$pdf->Cell(5, 6, 'CORREO:', 0 , 1);

		$pdf->SetXY(47, 235);
		$pdf->Cell(5, 6,"var", 0 , 1);

		$pdf->SetXY(15, 238);
		$pdf->Cell(5, 6, 'REQUISITOS:', 0 , 1);
		$pdf->SetXY(15, 241);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(5, 6, utf8_decode('1.-PAGO DE AFILIACIÓN.'), 0 , 1);

		$pdf->SetXY(15, 244);
		$pdf->Cell(5, 6, '2.-CREDENCIAL DE ELECTOR IFE O INE VIGENTE.', 0 , 1);

		$pdf->SetXY(15, 247);
		$pdf->Cell(5, 6, '3.-COMPROBANTE DE DOMICILIO NO MAYOR A 3 MESES.', 0 , 1);

		$pdf->SetXY(15, 250);
		$pdf->Cell(5, 6, '4.-CREDENCIAL DE SINDICALIZADO O CARTA COMPROBANTE DEL MISMO.', 0 , 1);
		$pdf->SetXY(15, 253);
		$pdf->Cell(5, 6, '4.-CREDENCIAL DE SINDICALIZADO O CARTA COMPROBANTE DEL MISMO.', 0 , 1);
		$pdf->SetXY(15, 256);
		$pdf->Cell(5, 6, '4.-CREDENCIAL DE SINDICALIZADO O CARTA COMPROBANTE DEL MISMO.', 0 , 1);
		$pdf->SetXY(15, 259);
		$pdf->Cell(5, 6, '4.-CREDENCIAL DE SINDICALIZADO O CARTA COMPROBANTE DEL MISMO.', 0 , 1);
		$pdf->SetXY(15, 262);
		$pdf->Cell(5, 6, '4.-CREDENCIAL DE SINDICALIZADO O CARTA COMPROBANTE DEL MISMO.', 0 , 1);
		$pdf->SetXY(15, 265);
		$pdf->Cell(5, 6, '4.-CREDENCIAL DE SINDICALIZADO O CARTA COMPROBANTE DEL MISMO.', 0 , 1);

		$pdf->SetXY(120, 232);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, utf8_decode('TELÉFONO:'), 0 , 1);

		$pdf->SetXY(140, 232);
		$pdf->Cell(5, 6,"var", 0 , 1);

		$pdf->SetXY(120, 235);
		$pdf->Cell(5, 6, 'CELULAR:', 0 , 1);

		$pdf->SetXY(140, 235);
		$pdf->Cell(5, 6,"var", 0 , 1);

		$pdf->SetXY(120, 238);
		$pdf->Cell(5, 6, 'BENEFICIOS:', 0 , 1);

		$pdf->SetXY(15,270);
		$pdf->Cell(5, 6, 'JUEGO EN ORIGINAL Y COPIA.', 0 , 2);

		$pdf->SetXY(120,267);
		$pdf->Cell(5, 6, utf8_decode('*DURANTE TODA LA VIDA DEL CRÉDITO.'), 0 , 2);

		$pdf->SetXY(120,270);
		$pdf->Cell(5, 6, '*DIA DE ENTREGA DE LA UNIDAD.', 0 , 2);

		//////////////////////////////////////
		$pdf->Ln();
		$pdf->Ln(); //salto de linea
		$pdf->Ln(15);//ahora salta 15 lineas 
        $pdf->Output("pdf.pdf",'D');
		echo "<script language='javascript'>window.open('pdf.pdf','_self','');</script>";//para ver el archivo pdf generado
		exit;

	?>