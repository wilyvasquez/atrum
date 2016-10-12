<?php
      if (isset($_POST['moto'])&&$anio=$_POST['anio']&&$placas=$_POST['placas']&&$credito=$_POST['credito']&&$tiempo=$_POST['tiempo']) {
            # code...
      $moto=$_POST['moto'];
      $anio=$_POST['anio'];
      $seguro=$_POST['seguro'];
      $placas=$_POST['placas'];
      $credito=$_POST['credito'];
      $tiempo=$_POST['tiempo'];

      $query10 = "SELECT * FROM moto_anio_precio INNER JOIN moto ON moto.id_moto= moto_anio_precio.ref_moto INNER JOIN anio_moto on anio_moto.id_anio_moto= moto_anio_precio.ref_anio INNER JOIN precio_moto on precio_moto.id_precio_moto= moto_anio_precio.ref_precio WHERE moto_anio_precio.ref_moto=$moto AND moto_anio_precio.ref_anio=$anio";
      $result6 = mysql_query($query10);  
      $apertura5 = mysql_fetch_array($result6);
      $varvar = $apertura5['precio'];

      ////////////// precio moto ////////////////
      $iva=($varvar*0.16);
      $ivares=$iva+$varvar;
      // echo $ivares;
      ////////////////////////////////////////////
      // echo $seguro;
      if (!empty($seguro)) {
            # code...
      $query="SELECT * FROM moto INNER JOIN moto_seguro ON moto_seguro.ref_moto= moto.id_moto INNER JOIN tipo_seguro ON  tipo_seguro.id_seguro=moto_seguro.ref_seguro WHERE moto.id_moto=$moto AND tipo_seguro.id_seguro=$seguro";
      $reseguro = mysql_query($query);  
      $var = mysql_fetch_array($reseguro);
      $resul = $var['precio_seguro'];
      }else{
            $resul=0;
      }
      ////////////////tiempo//////////////
      $anios="SELECT * FROM anios where id_anios=$tiempo";
      $resulanios = mysql_query($anios);  
      $aniores = mysql_fetch_array($resulanios);
      $resanio = $aniores['meses'];
      $quincena = $aniores['quincenas'];
      $semana = $aniores['semanas'];
      $resulanio = $aniores['anio'];

      ///////////////// precio seguro ////////////
      $variable="SELECT * FROM tipo_credito where id_credito=$credito";
      $resultado = mysql_query($variable);  
      $credito1 = mysql_fetch_array($resultado);
      $credito = $credito1['tasa_base'];
      // echo $resanio;
      // echo $credito;
      if (!empty($resanio)) {
            # code...
      $base=($resanio*$credito);
      // echo $base;
      }else{
            $base=0;
      }
      $resulseguro=($resul*0.16)+$resul;
      // echo $resulseguro;
      $suma=($base*$resulseguro)+$resulseguro;
      ////////////////////////////////////////////

      $query1="SELECT * FROM placas where id_placas=$placas";
      $result = mysql_query($query1);  
      $var1 = mysql_fetch_array($result);
      $placas = $var1['precio'];
      }


?>