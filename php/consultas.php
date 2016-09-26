<?php
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

      $query="SELECT * FROM moto INNER JOIN moto_seguro ON moto_seguro.ref_moto= moto.id_moto INNER JOIN tipo_seguro ON  tipo_seguro.id_seguro=moto_seguro.ref_seguro WHERE moto.id_moto=$moto AND tipo_seguro.id_seguro=$seguro";
      $reseguro = mysql_query($query);  
      $var = mysql_fetch_array($reseguro);
      $resul = $var['precio_seguro'];
      ////////////////tiempo//////////////
      $anios="SELECT * FROM anios where id_anios=$tiempo";
      $resulanios = mysql_query($anios);  
      $aniores = mysql_fetch_array($resulanios);
      $resanio = $aniores['meses'];

      ///////////////// precio seguro ////////////
      $variable="SELECT * FROM tipo_credito where id_credito=$credito";
      $resultado = mysql_query($variable);  
      $credito1 = mysql_fetch_array($resultado);
      $credito = $credito1['tasa_base'];
      $base=($resanio*$credito);
      $resulseguro=($resul*0.16)+$resul;
      $suma=($base*$resulseguro)+$resulseguro;
      ////////////////////////////////////////////

      $query1="SELECT * FROM placas where id_placas=$placas";
      $result = mysql_query($query1);  
      $var1 = mysql_fetch_array($result);
      $placas = $var1['precio'];


?>