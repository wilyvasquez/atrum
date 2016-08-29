<?php
    include('datos.php');
    include("conexion.php");
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
          <input class="btn btn-info" type="submit" value="Cotizar">                   
        </div>
      </div>
      <hr>
      <div class="row col-md-7">
          <div class="col-md-4">
            <label for="tipo">TIPO DE MOTO </label>
              <select name="estados" class="selectpicker" data-live-search="true" data-size="5" onchange="showselect(this.value)" >
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
              <select name="credito" class="selectpicker" data-live-search="true" data-size="5" onchange="showselect1(this.value)" >
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
      </div>
      <div class="row col-md-5">
        <input type="text" class="form-control">
      </div>
    </div> 
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