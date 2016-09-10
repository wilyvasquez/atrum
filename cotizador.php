<?php
include('datos.php');
// echo $_POST['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Suzuki</title>
    
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/alertify.core.css" />
    <link rel="stylesheet" href="css/alertify.default.css" id="toggleCSS" />

</head><!--/head-->
<body>
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class="fa fa-phone-square"></i>  (951) 144 88 05</p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <div class="top-number"><p><?= $nom_usu ?></p></div>
                       </div>
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
                        <li><a href="index.php">Salir</a>                      
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
          <select name="credito" id="credito" class="form-control" onchange="funcioncredito(this.value);funcioncrea(this.value);funciontiempo(this.value)" required/>
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
      <div class="col-md-3"><br>
        <button class="btn btn-info" onclick="datoscotizador($('#credito').val(),$('#modelo').val(),$('#enganche').val(),$('#seguros').val(),$('#moto').val(),$('#plazo').val());datostabla($('#credito').val(),$('#modelo').val(),$('#enganche').val(),$('#seguros').val(),$('#moto').val());foto($('#moto').val())"  type="submit">Cotizar !</button>
      </div>
      </div>
      <div class="col-md-6">
      <div id="tabla">
      <center><label for="">PRECIOS</label></center>
        <table data-toggle="table" data-click-to-select="true" data-single-select="true">
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
                <td>SEMANAS (52)</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <td>QUINCENAS (24)</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
              <tr>
                <td>MESES (12)</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
              </tr>
            </tbody>
        </table>
        </div>
        <div class="row col-md-4">
          <label for="">TIEMPO</label>
          <select name="tiempo" id="tiempo" class="form-control">
            <option value="">Seleccionar</option>
          </select>
        </div>
      <div class="col-md-3" style="margin-top:26px">
        <button class="btn btn-info" onclick="tabla($('#tiempo').val(),$('#credito').val(),$('#modelo').val(),$('#enganche').val(),$('#seguros').val(),$('#moto').val())" type="submit">Agregar !</button>
      </div>
      </div>
    </div>
    <div class="container">
      <hr>
      <!-- inicio -->
      <div class="row col-md-8">
      <form name="pdf" action="php/pdf.php" method="POST">
      <div id="resultado">
      <div class="col-md-3">
        <label>FINANCIAMIENTO</label>        
      </div>
      <div class="col-md-4">
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="financiamiento" name="financiamiento" value="0" class="form-control" onfocus="this.blur()">
        </div>
      </div>
      <div class="col-md-2">
        <label>ENGANCHE</label>        
      </div>
      <div class="col-md-3">
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="enganche" name="enganche" value="0" class="form-control" onfocus="this.blur()">
        </div>
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <label>COSTO APERTURA</label>
      </div>
       <div class="col-md-3" style="margin-top:5px">
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="apertura" name="apertura" value="0" class="form-control" onfocus="this.blur()">   </div>
      </div>
      <div class="col-md-3" style="margin-top:5px">
          <label>COSTO MOTOCICLETA</label>        
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="motocicleta" name="motocicleta" value="0" class="form-control" onfocus="this.blur()">      
        </div>
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <label>BASE DEL CREDITO</label>        
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="credito" name="credito" value="0" class="form-control" onfocus="this.blur()">      
        </div>
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <label>IMPORTE CREDITO</label>        
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="importe" name="importe" value="0" class="form-control" onfocus="this.blur()">      
        </div>
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <label>SEGURO UNIDAD</label>        
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <div class="input-group">
          <span class="input-group-addon">$</span>
          <input type="text" id="seguro" name="seguro" value="0" class="form-control" onfocus="this.blur()">      
        </div>
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <label>TELEFONO</label>        
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <div class="input-group">
          <span class="input-group-addon">#</span>
          <input type="text" id="telefono" name="telefono" value="" class="form-control" required/> 
        </div>
      </div>
      <div class="col-md-3" style="margin-top:5px">
        <label>NOMBRE DEL CLIENTE</label>        
      </div>
      <div class="col-md-4" style="margin-top:5px">
          <input type="text" id="cliente" name="cliente" value="" class="form-control" required/>
      </div>
      <div class="col-md-offset-2 col-md-2" style="margin-top:5px">
        <button class="btn btn-info" type="submit">Generar PDF !</button>
      </div>
      </div>
      <div id="tablatiempo"></div>      
      <div style="display:none">
      <?php
          $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        ?>
        <input type="text" id="fecha" name="fecha" value="<?= date('d')." de ".$meses[date('n')-1]. " de ".date('Y') ;  ?>" class="form-control">
        <input type="text" id="user" name="user" value="<?= $_POST['user'] ?>">
      </div>
      </form>
      </div><!-- fin -->
      <!-- <div id="foto"> -->
        <div class="row col-md-4" id="foto">
        <div class="thumbnail" style="width:300px; height:200px;margin-left:50px">
            <form action="" method="POST" enctype="multipart/form-data" >
              <!-- <img src="php/foto.php?id=<?= $id ?>" style="margin-left:50px;margin-top:10px"/> -->
            </form>
        </div>
      </div>
      <!-- </div> -->
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
    
    
    <script src="js/jquery.js"></script>
    <script src="js/alertify.min.js"></script>
    <script src="js/bootstrap-table.min.js"></script>
    <script src="js/operaciones.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/validaciones.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>