<?php
    include('datos.php');
    include("php/iniciador.php");
    include("conexion.php");
    include("php/financiamiento.php");
    include("php/costo_apertura.php");
    include("php/costo_moto.php");
    include("php/consultas.php");
    include("php/base_credito.php");
    include("php/enganche.php");
    include("php/importe_de.php");
    include("php/seguro.php");
    include("php/tabla.php");

    // echo $pass;
    // echo $user;

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
      <form action="cotizador.php" method="post">
      <div class="row col-md-7">
          <div class="col-md-4">
            <label for="tipo">TIPO DE MOTO </label>
              <select name="moto" class="form-control" onchange="showselect(this.value)" required/>
              <option value="">Seleccione</option>
              <?php include "php/tipo_moto.php" ?>
              </select>
          </div>
          <div class="form-group col-md-5" style="margin-left:40px" id="modelo">
            <!-- <div id="modelo"> -->
              <label for="modelo">MODELO </label>
                <select name="modelo" class="form-control">
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
          <div class="form-group col-md-5" id="plazo">
            <!-- <div id="municipios"> -->
              <label for="modelo">CREDITO A </label>
                <select name="plazo" class="form-control">
                  <option value="">Seleccione</option>
                </select>
            <!-- </div> -->
          </div>
          <div class="form-group col-md-5">
            <label for="tipo">ENGANCHE </label>
            <input type="text" name="enganche" class="form-control" required/>
          </div>
          <div style="display:none">            
            <input type="text" name="user" value="<?= $user ?>">
            <input type="text" name="pass" value="<?= $pass ?>">
          </div>
      </div>
      <div>
      <div class="row col-md-5">
        <table data-toggle="table" data-click-to-select="true" data-single-select="true">
            <thead>
              <td>
                  <th data-checkbox="true">Opcion</th>
                  <th>Tiempo</th>
                  <th>$ Vehiculo</th>
                  <th>$ Seguro</th>
                  <th>Total</th>
              </td>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td>SEMANAS</td>
                <td><?= round($semanas,2) ?></td>
                <td><?= round($semanas_se,2) ?></td>
                <td><?= round($total_se,2) ?></td>
              </tr>
              <tr>
                <td></td>
                <td>QUINCENAS</td>
                <td><?= round($quincenas,2) ?></td>
                <td><?= round($quincenas_se,2) ?></td>
                <td><?= round($total_qui,2) ?></td>
              </tr>
              <tr>
                <td></td>
                <td>MESES</td>
                <td><?= round($meses,2) ?></td>
                <td><?= round($meses_se,2) ?></td>
                <td><?= round($total_mes,2) ?></td>
              </tr>
            </tbody>
        </table>
      </div>        
      </div>
          <div class="col-md-4"><br>
            <input class="btn btn-info" type="submit" value="Cotizar">                   
          </div>
      </form>
    </div>
    <div class="container">
      <hr>
      <div class="row col-md-8">
        <div class="col-md-4" id="financiamiento">
          <label>FINANCIAMIENTO</label>
          <input type="text" id="financiamiento" name="financiamiento" value="<?= $credito_a ?> A <?= $enganche_de?> % de enganche" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>COSTO APERTURA</label>
          <input type="text" id="apertura" name="apertura" value="<?= $costo ?>" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>COSTO MOTOCICLETA</label>
          <input type="text" id="motocicleta" name="motocicleta" value="<?= round($res,2) ?>" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>BASE DEL CREDITO</label>
          <input type="text" id="credito" name="credito" value="<?= round($base,2) ?>" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>ENGANCHE DE</label>
          <input type="text" id="enganche" name="enganche" value="<?= round($ope,2)?>" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>IMPORTE DEL CREDITO</label>
          <input type="text" id="importe" name="importe" value="<?= round($importe,2) ?>" class="form-control" disabled/>      
        </div>
        <div class="col-md-4">
          <label>SEGURO DE LA UNIDAD</label>
          <input type="text" id="seguro" name="seguro" value="<?= round($final,2)?>" class="form-control" disabled/>      
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