<?php
$credito=$_GET['credito'];
$moto=$_GET['moto'];
$moto1=$_GET['moto'];
$idmoto=$_GET['moto'];
$idseguro=$_GET['seguro'];
$seguro=$_GET['seguro'];
$tiempo=$_GET['plazo'];
$anio=$_GET['anio'];
$tiemanios=$_GET['tiempo'];

    $anios="SELECT * FROM anios where id_anios=$tiemanios";
      $resulanios = mysql_query($anios);  
      $aniores = mysql_fetch_array($resulanios);
      $resanio = $aniores['meses'];
      $quincena = $aniores['quincenas'];
      $semana = $aniores['semanas'];
      $resulanio = $aniores['anio'];

    $query3="SELECT * FROM tiempo where id_tiempo=$tiempo";
    $resul3 = mysql_query($query3);  
    $tiempo = mysql_fetch_array($resul3);
    $res1 = $tiempo['tiempo'];

      if ($res1=='MESES') {
        # code...
        $temporal=$resanio;
      }
      if ($res1=='QUINCENAS') {
        # code...
        $temporal=$quincena;
      }
      if ($res1=='SEMANAS') {
        # code...
        $temporal=$semana;
      }

  $query="SELECT * FROM tipo_credito where id_credito=$credito";
    $resul = mysql_query($query);  
    $res = mysql_fetch_array($resul);
    $credito = $res['nombre_credito'];
    $descuento = $res['descuento_aper'];
    $costo = $res['costo_apertura'];
    $tasa = $res['tasa_base'];

    // $tb=($tasa*$resulanio)+1;
    // $totalarti=($precio*$tb*1.16);

    $query1="SELECT * FROM moto where id_moto=$moto";
    $resul1 = mysql_query($query1);  
    $moto = mysql_fetch_array($resul1);
    // $moto = $moto['nombre_credito'];

    $query2="SELECT * FROM tipo_seguro where id_seguro=$seguro";
    $resul2 = mysql_query($query2);  
    $seguro = mysql_fetch_array($resul2);
    $res = $seguro['tipo_seguro'];


    $query4 = "SELECT * FROM moto_anio_precio INNER JOIN moto ON moto.id_moto= moto_anio_precio.ref_moto INNER JOIN anio_moto on anio_moto.id_anio_moto= moto_anio_precio.ref_anio INNER JOIN precio_moto on precio_moto.id_precio_moto= moto_anio_precio.ref_precio WHERE moto_anio_precio.ref_moto=$moto1 AND moto_anio_precio.ref_anio=$anio";
      $resul4 = mysql_query($query4);  
      $apertura = mysql_fetch_array($resul4);
      $anio = $apertura['anio'];
      $precio = $apertura['precio'];

    $query="SELECT * FROM moto INNER JOIN moto_seguro ON moto_seguro.ref_moto= moto.id_moto INNER JOIN tipo_seguro ON  tipo_seguro.id_seguro=moto_seguro.ref_seguro WHERE moto.id_moto=$idmoto AND tipo_seguro.id_seguro=$idseguro";
      $reseguro = mysql_query($query);  
      $var = mysql_fetch_array($reseguro);
      $resul = $var['precio_seguro'];
?>