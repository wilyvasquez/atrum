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
    include("php/tiempo.php");
    if (!empty($_POST['moto'])) {
      # code...
     $img=$_POST['moto'];
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
      <form action="cotizador.php" method="post" enctype="multipart/form-data">
      <div class="row col-md-7">
          <div class="col-md-4">
            <label for="tipo">TIPO DE MOTO </label>
              <select id="moto" name="moto" class="form-control" onchange="showselect(this.value)" required/>
              <option value="">Seleccione</option>
              <?php include "php/tipo_moto.php" ?>
              </select>
          </div>
          <div class="form-group col-md-5" style="margin-left:40px" id="modelo">
            <!-- <div id="modelo"> -->
              <label for="modelo">MODELO </label>
                <select id="modelo" name="modelo" class="form-control">
                  <option value="">Seleccione</option>
                </select>
            <!-- </div> -->
          </div>
          <div class="col-md-4">
            <label for="tipo">TIPO DE CREDITO </label>
              <select id="credito" name="credito" class="form-control" onchange="showselect1(this.value);showselect2(this.value);showselect3(this.value)" required/>
              <option value="">Seleccione</option>
              <?php include "credito.php" ?>
              </select>
          </div>
          <div class="form-group col-md-5" style="margin-left:40px" id="seguros">
            <!-- <div id="seguros"> -->
              <label for="modelo">TIPO DE SEGURO </label>
                <select id="seguros" name="seguros" class="form-control">
                  <option value="">Seleccione</option>
                </select>
            <!-- </div> -->
          </div>
          <div class="form-group col-md-5" id="plazo">
            <!-- <div id="municipios"> -->
              <label for="modelo">CREDITO A </label>
                <select id="plazo" name="plazo" class="form-control">
                  <option value="">Seleccione</option>
                </select>
            <!-- </div> -->
          </div>
          <div class="form-group col-md-5">
            <label for="tipo">ENGANCHE </label>
            <input type="text" id="enganche" name="enganche" class="form-control" required/>
          </div>
          <div class="form-group col-md-5" id="tiempo">
            <label for="tiempo">TIEMPO </label>
            <select name="tiempo" id="tiempo" class="form-control">
                  <option value="">Seleccione</option>
                </select>
          </div>
          <div style="display:none">            
            <input type="text" id="user" name="user" value="<?= $user ?>">
            <input type="text" id="pass" name="pass" value="<?= $pass ?>">
          </div>
          <div class="col-md-1" style="margin-top:25px">
            <!-- <button onclick="javascript:pasar()" class="btn btn-info">Cotizar</button> -->
            <input class="btn btn-info" type="submit" value="Cotizar">                   
          </div>
          </div>
      </form>
      <div>
      <div class="row col-md-5">
        <table data-toggle="table" data-click-to-select="true" data-single-select="true">
            <thead>
              <td>
                  <!-- <th data-checkbox="true">Opcion</th> -->
                  <th>Tiempo</th>
                  <th>$ Vehiculo</th>
                  <th>$ Seguro</th>
                  <th>Total</th>
              </td>
            </thead>
            <tbody>
              <tr>
                <!-- <td></td> -->
                <td>SEMANAS</td>
                <td><?= round($semanas,2) ?></td>
                <td><?= round($semanas_se,2) ?></td>
                <td><?= round($total_se,2) ?></td>
              </tr>
              <tr>
                <!-- <td></td> -->
                <td>QUINCENAS</td>
                <td><?= round($quincenas,2) ?></td>
                <td><?= round($quincenas_se,2) ?></td>
                <td><?= round($total_qui,2) ?></td>
              </tr>
              <tr>
                <!-- <td></td> -->
                <td>MESES</td>
                <td><?= round($meses,2) ?></td>
                <td><?= round($meses_se,2) ?></td>
                <td><?= round($total_mes,2) ?></td>
              </tr>
            </tbody>
        </table>
      </div>        
      </div>
    </div>
    <div class="container">
      <form name="pdf" method="post" action="php/pdf.php">
      <hr>
      <div class="row col-md-8">
        <div class="col-md-4" id="financiamiento">
          <label>FINANCIAMIENTO</label>
          <input type="text" id="financiamiento" name="financiamiento" value="<?= $credito_a ?> A <?= $enganche_de?> % de enganche" class="form-control" onfocus="this.blur()">      
        </div>
        <div class="col-md-4">
          <label>COSTO APERTURA</label>
          <input type="text" id="apertura" name="apertura" value="<?= $costo ?>" class="form-control" onfocus="this.blur()">      
        </div>
        <div class="col-md-4">
          <label>COSTO MOTOCICLETA</label>
          <input type="text" id="motocicleta" name="motocicleta" value="<?= round($res,2) ?>" class="form-control" onfocus="this.blur()">      
        </div>
        <div class="col-md-4">
          <label>BASE DEL CREDITO</label>
          <input type="text" id="credito" name="credito" value="<?= round($base,2) ?>" class="form-control" onfocus="this.blur()">      
        </div>
        <div class="col-md-4">
          <label>ENGANCHE DE</label>
          <input type="text" id="enganche" name="enganche" value="<?= round($ope,2)?>" class="form-control" onfocus="this.blur()">      
        </div>
        <div class="col-md-4">
          <label>IMPORTE DEL CREDITO</label>
          <input type="text" id="importe" name="importe" value="<?= round($importe,2) ?>" class="form-control" onfocus="this.blur()">      
        </div>
        <div class="col-md-4">
          <label>SEGURO DE LA UNIDAD</label>
          <input type="text" id="seguro" name="seguro" value="<?= round($final,2)?>" class="form-control" onfocus="this.blur()">  
        </div>
        <div class="col-md-4">
          <label>NOMBRE DEL CLIENTE</label>
          <input type="text" id="nombre" name="nombre" value="" class="form-control" required/>  
        </div>
        <div class="col-md-4">
          <label>TELEFONO</label>
          <input type="text" id="telefono" name="telefono" value="" class="form-control" required/>  
        </div>
        <div class="col-md-4" style="display:none">
          <label>id modelo</label>
          <input type="text" id="modelo1" name="modelo1" value="<?= $_POST['moto'] ?>" class="form-control">  
          <label>seguro</label>
          <input type="text" id="seguros1" name="seguros1" value="<?= $_POST['seguros'] ?>" class="form-control">  
          <label>credito</label>
        <?php
          $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        ?>
          <input type="text" id="credito1" name="credito1" value="<?= $_POST['credito'] ?>" class="form-control">  
        <input type="text" id="fecha" name="fecha" value="<?= date('d')." de ".$meses[date('n')-1]. " de ".date('Y') ;  ?>" class="form-control">  
        </div>
        <div class="col-md-4">
          <label>numero1</label>
          <input type="text" id="numero1" name="numero1" value="<?= $numero1 ?>" class="form-control" required/>  
        </div>
        <div class="col-md-4">
          <label>numero2</label>
          <input type="text" id="numero2" name="numero2" value="<?= $numero2 ?>" class="form-control" required/>  
        </div>
        <div class="col-md-4">
          <label>numero3</label>
          <input type="text" id="numero3" name="numero3" value="<?= $numero3 ?>" class="form-control" required/>  
        </div>
        <div class="col-md-1">
            <!-- <button onclick="javascript:pasar()" class="btn btn-info">Cotizar</button> -->
            <input class="btn btn-info" type="submit" value="pdf">                   
          </div>
        <div class="col-md-1"><br>
          <!-- <input class="btn btn-info" type="submit" value="PDF">                    -->
        </div>
        </div>
      </form>
      <div class="col-md-3 col-sm-6 hero-feature">
        <div class="thumbnail" style="width:300px; height:200px">
            <form action="" method="POST" enctype="multipart/form-data" >
              <img src="php/foto.php?id=<?= $img ?>" style="margin-left:50px;margin-top:10px"/>
            </form>
        </div>
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