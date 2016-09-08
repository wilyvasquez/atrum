<?php
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
      </div>
      <hr>
      <div class="row col-md-6">
        <div class="col-md-6">
          <label for="">TIPO DE MOTO</label>
          <select name="moto" id="moto" class="form-control" onchange="funciontipo(this.value)" required/>
            <option value="">Seleccionar</option>
            <?php include("php/tipo_moto.php") ?>
          </select>
        </div>
        <div class="col-md-6">
          <label for="">MODELO</label>
          <select name="modelo" id="modelo" class="form-control">
            <option value="">Seleccionar</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="">TIPO CREDITO</label>
          <select name="credito" id="credito" class="form-control" onchange="funcioncredito(this.value);funcioncrea(this.value)" required/>
            <option value="">Seleccionar</option>
            <?php include "credito.php" ?>
          </select>
        </div>
        <div class="col-md-6">
          <label for="">TIPO SEGURO</label>
          <select name="seguros" id="seguros" class="form-control">
            <option value="">Seleccionar</option>
          </select>
        </div>
        <div class="col-md-6">
          <label for="">CREDITO</label>
          <select name="plazo" id="plazo" class="form-control">
            <option value="">Seleccionar</option>
          </select>
        </div>
        <div class="col-md-6">
        <label>ENGANCHE</label>
        <div class="input-group">
          <input type="text" id="enganche" name="enganche" class="form-control">
          <span class="input-group-addon">%</span>
        </div>
      </div>
        <div class="col-md-2"><br>
          <button class="btn btn-info" onclick="datoscotizador($('#credito').val(),$('#modelo').val(),$('#enganche').val(),$('#seguros').val(),$('#moto').val());datostabla($('#credito').val(),$('#modelo').val(),$('#enganche').val(),$('#seguros').val(),$('#moto').val())"  type="submit">Cotizar !</button>
        </div>
      </div>
      <div class="col-md-6" id="tabla">
      <center><label for="">PRECIOS</label></center>
        <!-- <table data-toggle="table" data-click-to-select="true" data-single-select="true">
            <thead>
              <td>
                  <th>Tiempo</th>
                  <th>$ Vehiculo</th>
                  <th>$ Seguro</th>
                  <th>Total</th>
              </td>
            </thead>
            <tbody>
              <tr>
                <td>SEMANAS</td>
                <td><?= round($semanas,2) ?></td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <td>QUINCENAS</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <td>MESES</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
            </tbody>
        </table> -->
      </div>
    </div>
    <div class="container">
      <hr>
      <div class="row col-md-8" id="resultado">
      <div class="col-md-4">
        <label>FINANCIAMIENTO</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="financiamiento" name="financiamiento" value="0" class="form-control" onfocus="this.blur()">
        </div>
      </div>
      <div class="col-md-4">
          <label>COSTO APERTURA</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="apertura" name="apertura" value="0" class="form-control" onfocus="this.blur()">      
        </div>
      </div>
      <div class="col-md-4">
          <label>COSTO MOTOCICLETA</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="motocicleta" name="motocicleta" value="0" class="form-control" onfocus="this.blur()">      
        </div>
      </div>
      <div class="col-md-4">
        <label>BASE DEL CREDITO</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="credito" name="credito" value="0" class="form-control" onfocus="this.blur()">      
        </div>
      </div>
      <div class="col-md-4">
        <label>ENGANCHE</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="enganche" name="enganche" value="0" class="form-control" onfocus="this.blur()">
        </div>
      </div>
      <div class="col-md-4">
        <label>IMPORTE CREDITO</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="importe" name="importe" value="0" class="form-control" onfocus="this.blur()">      
        </div>
      </div>
      <div class="col-md-4">
        <label>SEGURO UNIDAD</label>
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="seguro" name="seguro" value="0" class="form-control" onfocus="this.blur()">      
        </div>
      </div>
      <div class="col-md-4">
        <label>NOMBRE DEL CLIENTE</label>
          <input type="text" id="enganche" name="enganche" value="" class="form-control">
      </div>
      <div class="col-md-4">
        <label>TELEFONO</label>
        <div class="input-group">
          <span class="input-group-addon">#</span>
          <input type="text" id="telefono" name="telefono" value="" class="form-control"> 
        </div>
      </div>
      <div class="col-md-2"><br>
        <button class="btn btn-info" type="submit">Generar PDF !</button>
      </div>
      </div>
      </form>
      <div class="row col-md-4">
        <div class="thumbnail" style="width:300px; height:200px;margin-left:50px">
            <form action="" method="POST" enctype="multipart/form-data" >
              <img src="" style="margin-left:50px;margin-top:10px"/>
            </form>
        </div>
      </div>
    </div><br>
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
    <script src="js/funciones.js"></script>
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