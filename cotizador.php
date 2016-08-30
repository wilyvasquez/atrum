<?php
    include('datos.php');
    include("conexion.php");
    if (isset($_POST['estados'])) {
      # code...
      $var=$_POST['estados'];
      $enganche2=$_POST['enganche2'];
      $enganche=$_POST['enganche'];
      ///////////////////////////////////////
      $credito=$_POST['credito'];
      $query = "select * from credito where tipo_credito ='$credito'";  
      $result = mysql_query($query);  
      $registro = mysql_fetch_array($result);
      $tasa_base=$registro['tasa_base'];
      ///////////////////////////////////////
      $municipios=$_POST['municipios'];
      $query2 = "select * from alta_equipo where id_equipo ='$municipios'";  
      $result2 = mysql_query($query2);  
      $registro2 = mysql_fetch_array($result2);
      $var=$registro2['costo_unidad'];
      $var2=$registro2['seguro_limitado'];
      $por=($var*0.16)+$var;
      $enga=(($por*$enganche2)/100);
      $base=($por-$enga);
      ///////////////////////////////////////////
      $mul=($tasa_base*12);
      $res=($mul*$base);
      $suma=$res+$base;
      //////////////////////////////////////////
      $seguro=($var2*0.16);
      $suma2=$var2+$seguro;
      $suma3=($suma2*$mul);
      $res2=$suma3+$suma2;
      // $seguro2=;
      // echo $res2;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Suzuki</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <script type="text/javascript">
    function showselect(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("municipios").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","municipios.php?c="+str,true);
      xmlhttp.send();
    }
    function showselect1(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("seguros").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","seguros.php?c="+str,true);
      xmlhttp.send();
    }
    function showselect2(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("enganche").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","enganche.php?c="+str,true);
      xmlhttp.send();
    }
  </script>

</head><!--/head-->
<body>
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  (951) 144 88 05</p></div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <img width="110" height="60" src="images/suzuki.png" alt="logo">
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Cotizador</a></li>
                        <li><a href="index.php">Sign Out</a>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->        
    </header>    
    <div class="container">
      <div class="row">
        <div class="col-md-10">
          <h3><strong>COTIZADOR</strong></h3>
        </div>
        <div class="col-md-2" style="margin-top:20px">
          <!-- <button onclick="javascript:pasar()" class="btn btn-info">Cotizar</button> -->
          <!-- <input class="btn btn-info" onclick="javascript:pasar()" type="submit" value="Cotizar">                    -->
        </div>
      </div>
      <hr>
      <form action="cotizador.php" method="post">
      <div class="row col-md-7">
          <div class="col-md-4">
            <label for="tipo">TIPO DE MOTO </label>
              <select name="estados" id="estados" class="form-control" onchange="showselect(this.value)" required/>
              <option value="">Seleccione</option>
              <?php include "estados.php" ?>
              </select>
          </div>
          <div class="form-group col-md-5" style="margin-left:40px" id="municipios">
            <!-- <div id="municipios"> -->
              <label for="modelo">MODELO </label>
                <select name="municipios" class="form-control">
                  <option value="">Seleccione</option>
                </select>
            <!-- </div> -->
          </div>
          <div class="col-md-4">
            <label for="tipo">TIPO DE CREDITO </label>
              <select name="credito" class="form-control" onchange="showselect1(this.value);showselect2(this.value)" required/>
              <option value="">Seleccione</option>
              <?php include "credito.php" ?>
              </select>
          </div>
          <div class="form-group col-md-5" style="margin-left:40px" id="seguros">
            <!-- <div id="seguros"> -->
              <label for="modelo">TIPO DE SEGURO </label>
                <select name="seguros" class="form-control">
                  <option value="">Seleccione</option>
                </select>
            <!-- </div> -->
          </div>
          <div class="form-group col-md-5" id="enganche">
            <!-- <div id="municipios"> -->
              <label for="modelo">CREDITO A </label>
                <select name="enganche" class="form-control">
                  <option value="">Seleccione</option>
                </select>
            <!-- </div> -->
          </div>
          <div class="form-group col-md-5">
            <label for="tipo">ENGANCHE </label>
            <input type="text" name="enganche2" class="form-control" required/>
          </div>
          <div style="display:none">            
            <input type="text" name="user" value="<?= $user ?>">
            <input type="text" name="pass" value="<?= $pass ?>">
          </div>
      </div>
      <div><br><br><br><br><br><br><br><br><br><br><br></div>
          <div class="col-md-4"><br>
            <input class="btn btn-info" type="submit" value="Cotizar">                   
          </div>
      </form>
      <div class="row col-md-5">
        <!-- <table data-toggle="table"
               data-click-to-select="true"
               data-single-select="true">
            <thead>
            <tr>
                <th data-field="state" data-checkbox="true"></th>
                <th data-field="name">Name</th>
                <th data-field="stargazers_count">Stars</th>
                <th data-field="forks_count">Forks</th>
                <th data-field="description">Description</th>
            </tr>
            <tr>
              <th>hola</th>
              <th>hola</th>
              <th>hola</th>
              <th>hola</th>
              <th>hola</th>
            </tr>
            <tr></tr>
            </thead>
        </table> -->
      </div>
    </div>
    <div class="container">
      <div class="row col-md-8">
      <hr>
        <div class="col-md-4" id="financiamiento">
          <label>FINANCIAMIENTO</label>
          <input type="text" id="financiamiento" name="financiamiento" value="<?= $enganche ?> A <?= $enganche2?>% de enganche" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>COSTO APERTURA</label>
          <input type="text" id="apertura" name="apertura" value="<?= $registro['costo_apertura'] ?>" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>COSTO MOTOCICLETA</label>
          <input type="text" id="motocicleta" name="motocicleta" value="<?= $por ?>" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>BASE DEL CREDITO</label>
          <input type="text" id="credito" name="credito" value="<?= $base ?>" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>ENGANCHE DE</label>
          <input type="text" id="enganche" name="enganche" value="<?= $enga ?>" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>IMPORTE DEL CREDITO</label>
          <input type="text" id="importe" name="importe" value="<?= $suma ?>" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>SEGURO DE LA UNIDAD</label>
          <input type="text" id="seguro" name="seguro" value="<?= $res2 ?>" class="form-control" disabled/>      
        </div>
      </div>
    </div><br><br><br><br>
    <!-- </section> -->
     <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy;SuzukiOaxaca (951) 144 88 05.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="js/operaciones.js"></script>
    <script src="js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/js/bootstrap-select.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
    <script src="js/validaciones.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>