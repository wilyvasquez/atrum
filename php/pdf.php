<?php

include ('fpdf/fpdf.php');
	
	if (!empty($_POST['modelo'])) {
		# code...
	$conexion =mysql_connect("localhost","root","");
	mysql_select_db("atrum");
	$query="select * from tipo_moto inner join alta_equipo on alta_equipo.ref_tipo= tipo_moto.id_tipo
			where id_equipo='".$_POST['modelo']."'";
 	$result = mysql_query($query);  
    $apertura = mysql_fetch_array($result);
    $modelo=$apertura['tipo'];

    $query1="select * from seguro where id_seguro='".$_POST['seguros']."'";
 	$seguros = mysql_query($query1);  
    $res = mysql_fetch_array($seguros);
    $res_seguro=$res['tipo_seguro'];

    $consulta="select * from tiempo where id_tiempo='".$_POST['pagos']."'";
 	$var1 = mysql_query($consulta);  
    $var2 = mysql_fetch_array($var1);
    $tiempo=$var2['tipo_tiempo'];

    $con="select * from usuarios inner join alta_personal on alta_personal.id_personal=usuarios.ref_personal where usuarios.usuarios='".$_POST['user']."'";
 	$use = mysql_query($con);  
    $var3 = mysql_fetch_array($use);

    $credito1="select * from credito where tipo_credito='".$_POST['credito']."'";
 	$credito2 = mysql_query($credito1);  
    $crefinal = mysql_fetch_array($credito2);    

    $aperope=($crefinal['costo_apertura']*$crefinal['descuento_aper']);
    // $finalo=$aperope-$crefinal['costo_apertura'];

        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf->Ln(15);//ahora salta 15 lineas

        ///////////amarillo ///////////
        $pdf->Image('../images/fondo.jpg',30,100,150,80,'');
        $pdf->Image('../images/suzuki.jpg',140,10,60,30,'');
        $pdf->Image('../images/texto.jpg',20,20,100,10,'');
        $pdf->Image('../images/final.jpg',50,270,120,13,'');

		$pdf->SetXY(118, 43);
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(5, 6, utf8_decode('Oaxaca de Juárez., a'), 0 , 1);
		$pdf->SetXY(153, 43);
		$pdf->Cell(5, 6,$_POST['fecha'], 0 , 1);

		///////////azul////////// 

		$pdf->SetXY(15, 50);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15, 6, $_POST['nombre'], 0 , 1); /////////////// nombre cliente
		$pdf->SetXY(15, 55);
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(20, 6, 'CELULAR: ', 0 , 1);
		$pdf->SetXY(35, 55);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(20, 6, $_POST['telefono'], 0 , 1); ///////// TELEFONO CLIENTE
		$pdf->SetXY(15, 60);
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(20, 6, 'P R E S E N T E', 0 , 1);
		///////////verde ///////////

		$pdf->SetXY(122, 55);
		$pdf->SetFont('Arial','B',13);
		$pdf->Cell(5, 6, utf8_decode('TIPO DE CRÉDITO:'), 0 , 1);
		$pdf->SetXY(165, 55);
		$pdf->Cell(5, 6,$_POST['credito'], 0 , 1);

		/////////// SALMON///////////////
	
		$pdf->SetXY(143, 60);
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(5, 6, utf8_decode('NÚMERO DE COTIZACIÓN:123'), 0 , 1);


		///////////// ROSA //////////////

		$pdf->SetXY(15, 75);
		$pdf->SetFont('Arial','',11);
		$pdf->Cell(15, 6, utf8_decode('En atención a su amable  solicitud tenemos el gusto de presentar la siguiente cotización.'), 0 , 1);

		$pdf->SetXY(85, 85);
		$pdf->SetFont('Arial','B',11);
		$pdf->Cell(15, 6, utf8_decode('CARACTERÍSTICAS TÉCNICAS:'), 0 , 1);

		$pdf->SetXY(85, 90);
		$pdf->SetFont('Arial','',8.5);
		$pdf->Cell(15, 6, 'TIPO DE MOTO:', 0 , 1);

		$pdf->SetXY(85, 95);
		$pdf->Cell(15, 6, 'MOTOR:', 0 , 1);

		$pdf->SetXY(85, 100);
		$pdf->Cell(15, 6, utf8_decode('TRANSMISIÓN:'), 0 , 1);

		$pdf->SetXY(85, 105);
		$pdf->Cell(15, 6, 'TIPO DE MOTOR:', 0 , 1);

		$pdf->SetXY(85, 110);
		$pdf->Cell(15, 6, utf8_decode('NÚMERO DE CILINDROS:'), 0 , 1);

		$pdf->SetXY(85, 115);
		$pdf->Cell(15, 6, utf8_decode('DIÁMETRO:'), 0 , 1);

		$pdf->SetXY(85, 120);
		$pdf->Cell(15, 6, 'CARRERA:', 0 , 1);

		$pdf->SetXY(85, 125);
		$pdf->Cell(15, 6, 'DESPLAZAMIENTO:', 0 , 1);

		$pdf->SetXY(85, 130);
		$pdf->Cell(15, 6, utf8_decode('RELACION DE COMPRENSIÓN:'), 0 , 1);

		$pdf->SetXY(85, 135);
		$pdf->Cell(15, 6, 'SISTEMA DE LUBRICACION:', 0 , 1);

		$pdf->SetXY(85, 140);
		$pdf->Cell(15, 6, 'SISTEMA DE COMBUSTIBLE:', 0 , 1);

		$pdf->SetXY(85, 145);
		$pdf->Cell(15, 6, 'SISTEMA DE ARRANQUE:', 0 , 1);

		$pdf->SetXY(135, 90);
		$pdf->SetFont('Arial','',8.5);
		$pdf->Cell(15, 6, $modelo, 0 , 1);/////////////// TIPO DE MOTO

		$pdf->SetXY(135, 95);
		$pdf->Cell(15, 6, $apertura['motor'], 0 , 1);

		$pdf->SetXY(135, 100);
		$pdf->Cell(15, 6, $apertura['transmision'], 0 , 1);

		$pdf->SetXY(135, 105);
		$pdf->Cell(15, 6, $apertura['tipo_motor'], 0 , 1);

		$pdf->SetXY(135, 110);
		$pdf->Cell(15, 6, $apertura['numero_cilindros'], 0 , 1);

		$pdf->SetXY(135, 115);
		$pdf->Cell(15, 6, $apertura['diametro'], 0 , 1);

		$pdf->SetXY(135, 120);
		$pdf->Cell(15, 6, $apertura['carrera'], 0 , 1);

		$pdf->SetXY(135, 125);
		$pdf->Cell(15, 6, $apertura['desplazamiento'], 0 , 1);

		$pdf->SetXY(135, 130);
		$pdf->Cell(15, 6, $apertura['relacion_compresion'], 0 , 1);

		$pdf->SetXY(135, 135);
		$pdf->Cell(15, 6, $apertura['sistema_lubricacion'], 0 , 1);

		$pdf->SetXY(135, 140);
		$pdf->Cell(15, 6, $apertura['sistema_combustible'], 0 , 1);

		$pdf->SetXY(135, 145);
		$pdf->Cell(15, 6, $apertura['sistema_arranque'], 0 , 1);
		/////////////////////////////////

		$pdf->SetXY(15, 160);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(5, 6, 'FINANCIAMIENTO A:', 0 , 1);

		$pdf->SetXY(130, 160);
		$pdf->Cell(5, 6, 'COSTO DEL SEGURO:', 0 , 1);

		$pdf->SetXY(175, 160);
		$pdf->SetFont('Arial','',10);
		$pdf->Cell(5, 6, $_POST['seguro'], 0 , 1);

		$pdf->SetXY(170, 160);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(15, 165);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(5, 6, 'TIPO DE SEGURO:', 0 , 1);

		$pdf->SetXY(15, 170);
		$pdf->Cell(5, 6, 'FORMA DE PAGOS:', 0 , 1);

		$pdf->SetXY(130, 175);
		$pdf->Cell(5, 6, 'PAGOS POR ', 0 , 1);
		$pdf->SetXY(153, 175);
		$pdf->Cell(5, 6, $tiempo, 0 , 1);

		$pdf->SetXY(60, 160);
		$pdf->SetFont('Arial','',9);
		$pdf->Cell(5, 6, utf8_decode($_POST['financiamiento']), 0 , 1);
		$pdf->SetXY(60, 165);
		$pdf->Cell(5, 6, $res_seguro, 0 , 1);////////// tipo de seguro

		$pdf->SetXY(60, 170);
		$pdf->Cell(5, 6, $tiempo, 0 , 1);
		/////////////////////////////////

		$pdf->Rect(15, 180, 110 , 6, '');
		$pdf->Rect(15, 186, 110 , 6, '');
		$pdf->Rect(15, 192, 110 , 6, '');

		$pdf->Rect(130, 180, 60 , 6, '');
		$pdf->Rect(130, 186, 60 , 6, '');
		////////////////////////////////////

		$pdf->SetXY(17, 180);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, 'MODELO', 0 , 1);

		$pdf->SetXY(17, 186);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(5, 6, $apertura['modelo'], 0 , 1);

		$pdf->SetXY(17, 192);
		$pdf->Cell(5, 6, utf8_decode('APERTURA DE CRÉDITO'), 0 , 1);

		$pdf->SetXY(80, 180);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, utf8_decode('AÑO'), 0 , 1);
		$pdf->SetXY(100, 180);
		$pdf->Cell(5, 6, 'ENGANCHE', 0 , 1);

		$pdf->SetXY(80, 186);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(5, 6, $apertura['anio'], 0 , 1);


		$pdf->SetXY(80, 192);
		$pdf->Cell(5, 6,$crefinal['descuento_aper'], 0 , 1); //////////descuento apertura

		$pdf->SetXY(55, 192);
		$pdf->Cell(5, 6, 'DESCUENTO DE', 0 , 1);

		$pdf->SetXY(85, 192);
		$pdf->Cell(5, 6, '%', 0 , 1);

		$pdf->SetXY(95, 186);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(100, 186);
		$pdf->Cell(5, 6,$_POST['enganche'], 0 , 1);

		$pdf->SetXY(95, 192);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(100, 192);
		$pdf->Cell(5, 6, $aperope, 0 , 1);

		$pdf->SetXY(130, 180);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, 'PAGOS MOTOCICLETA', 0 , 1);

		$pdf->SetXY(130, 186);
		$pdf->Cell(5, 6, 'PAGOS DEL SEGURO', 0 , 1);

		$pdf->SetXY(175, 180);
		$pdf->SetFont('Arial','',8);
		$pdf->Cell(5, 6, $_POST['vehiculo'], 0 , 1); ////////// pago motocicleta

		$pdf->SetXY(170, 180);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(175, 186);
		$pdf->Cell(5, 6, $_POST['seguro1'], 0 , 1);/// pagos seguro

		$pdf->SetXY(170, 186);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(130, 192);
		$pdf->SetFont('Arial','B',10);
		$pdf->Cell(5, 6, 'TOTAL:', 0 , 1);

		$pdf->SetXY(60, 198);
		$pdf->Cell(5, 6, 'PAGO INICIAL DE:', 0 , 1);

		$pdf->SetXY(95, 198);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->SetXY(100, 198);
		$pdf->Cell(5, 6,$_POST['enganche']+$aperope, 0 , 1);

		$pdf->SetXY(170, 192);
		$pdf->Cell(5, 6, $_POST['total'], 0 , 1);

		$pdf->SetXY(165, 192);
		$pdf->Cell(5, 6,'$', 0 , 1);

		$pdf->Image('http://chart.googleapis.com/chart?cht=p3&chd=t:60,40&chs=250x100&chl=Hello|World',20,90,50,50,'PNG');

		//////////////////////////////////////

		$pdf->SetXY(15, 220);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, 'ASESOR DE VENTAS:', 0 , 1);

		$pdf->SetXY(47, 220);
		$pdf->Cell(5, 6,$var3['nombre_asesor'], 0 , 1);

		$pdf->SetXY(15, 223);
		$pdf->Cell(5, 6, 'CORREO:', 0 , 1);

		$pdf->SetXY(47, 223);
		$pdf->Cell(5, 6,$var3['email'], 0 , 1);

		$pdf->SetXY(15, 226);
		$pdf->Cell(5, 6, 'REQUISITOS:', 0 , 1);

		$pdf->SetXY(15, 230);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(5, 6, utf8_decode('1.-PAGO DE AFILIACIÓN.'), 0 , 1);

		$pdf->SetXY(15, 233);
		$pdf->Cell(5, 6, '2.-CREDENCIAL DE ELECTOR IFE O INE VIGENTE.', 0 , 1);

		$pdf->SetXY(15, 236);
		$pdf->Cell(5, 6, '3.-COMPROBANTE DE DOMICILIO NO MAYOR A 3 MESES.', 0 , 1);

		$pdf->SetXY(15, 239);
		$pdf->Cell(5, 6, '4.-CREDENCIAL DE SINDICALIZADO O CARTA COMPROBANTE DEL MISMO.', 0 , 1);

		$pdf->SetXY(15, 242);
		$pdf->Cell(5, 6, utf8_decode('5.-RECIBIDO DE NOMINA (DOS ÚLTIMAS QUICENAS).'), 0 , 1);

		$pdf->SetXY(120, 220);
		$pdf->SetFont('Arial','B',8);
		$pdf->Cell(5, 6, utf8_decode('TELÉFONO:'), 0 , 1);

		$pdf->SetXY(140, 220);
		$pdf->Cell(5, 6,$var3['telefono'], 0 , 1);

		$pdf->SetXY(120, 223);
		$pdf->Cell(5, 6, 'CELULAR:', 0 , 1);

		$pdf->SetXY(140, 223);
		$pdf->Cell(5, 6,$var3['celular'], 0 , 1);

		$pdf->SetXY(120, 226);
		$pdf->Cell(5, 6, 'BENEFICIOS:', 0 , 1);

		$pdf->SetXY(120, 230);
		$pdf->SetFont('Arial','',7);
		$pdf->Cell(5, 6, '1.-SEGURO DE VIDA (SUZUKI FINANCIAL SERVICES).', 0 , 1);

		$pdf->SetXY(120, 233);
		$pdf->Cell(5, 6, '2.-15% DE DESCUENTO EN REFACCION ALTERNAS.', 0 , 1);

		$pdf->SetXY(120, 236);
		$pdf->Cell(5, 6, '3.-10% DE DESCUENTO EN REFACCIONES ORIGINALES.', 0 , 1);

		$pdf->SetXY(120, 239);
		$pdf->Cell(5, 6, '4.-20% DE DESCUENTO EN ACCESORIOS DE BOUTIQUE.', 0 , 1);

		$pdf->SetXY(15, 250);
		$pdf->Cell(5, 6, 'JUEGO EN ORIGINAL Y COPIA.', 0 , 1);

		$pdf->SetXY(120, 250);
		$pdf->Cell(5, 6, utf8_decode('*DURANTE TODA LA VIDA DEL CRÉDITO.'), 0 , 1);

		$pdf->SetXY(120, 253);
		$pdf->Cell(5, 6, '*DIA DE ENTREGA DE LA UNIDAD.', 0 , 1);

		//////////////////////////////////////
		$pdf->Ln();
		$pdf->Ln(); //salto de linea
		$pdf->Ln(15);//ahora salta 15 lineas 
        $pdf->Output("pdf.pdf",'D');
		echo "<script language='javascript'>window.open('pdf.pdf','_self','');</script>";//para ver el archivo pdf generado
		exit;
	}else{
		echo "Error al generar el PDF...!";
		echo " Dejaste campos vacios";
	}

	?>