<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Suzuki</title>
    
    <!-- core CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/css/bootstrap-select.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css">
        
    <script src="js/custom.js"></script>
    <script type="text/javascript">
      if(history.forward(1)){
        location.replace( history.forward(1) );
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
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            </ul>
                            <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Buscar">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div>
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
                    <a class="navbar-brand" href="index2.php"><img width="110" height="60" src="images/suzuki.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index2.php">Suzuki</a></li>
                        <li><a href="motocicletas2.php">Motocicletas</a></li>
                        <li><a href="accesorios2.php">Accesorios</a></li>
                        <li class="active"><a href="cotizador2.php">Cotizador</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portafolio <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Promociones</a></li>
                                <!-- <li><a href="#">Eventos</a></li> -->
                                <li><a href="nosotros2.php">About Us</a></li>
                                <li><a href="contacto2.php">Contacto</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php">Cerrar Sesion</a>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->        
    </header>    
    <!-- <section id="cotizador"> -->
    <div class="container">
      <div class="row">
            <div class="col-md-10">
                <h3><strong>COTIZADOR</strong></h3>
            </div>
            <div class="col-md-2" style="margin-top:20px">
                <input class="btn btn btn-info" type="submit" value="Cotizar">                   
            </div>
        </div>
        <hr>
        <div class="row col-md-7">
                <div class="col-md-4 form-group">
                    <label for="tipo">TIPO DE MOTO </label>
                    <div class="row" style="margin-left:2px">
                      <select class="selectpicker" data-live-search="true" data-size="5" data-width="150px" data->
                        <option>suzuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                        <option>suxuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="modelo">MODELO </label>
                    <select class="selectpicker" data-live-search="true" data-size="5" data-width="150px" data->
                        <option>suzuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                        <option>suxuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                      </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="anio">AÑO </label><br>
                    <select class="selectpicker" data-live-search="true" data-size="5" data-width="150px" data->
                        <option>suzuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                        <option>suxuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                      </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="credito">TIPO DE CREDITO: </label>
                    <select class="selectpicker" data-live-search="true" data-size="5" data-width="150px" data->
                        <option>suzuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                        <option>suxuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                      </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="seguro">TIPO DE SEGURO: </label>
                    <select class="selectpicker" data-live-search="true" data-size="5" data-width="150px" data->
                        <option>suzuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                        <option>suxuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                      </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="credi">CREDITO A: </label>
                    <select class="selectpicker" data-live-search="true" data-size="5" data-width="150px">
                        <option>suzuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                        <option>suxuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                      </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="enganche">ENGANCHE DE: </label>
                    <!-- <input type="text" name="enganche"> -->
                    <input type="text" class="form-control"  placeholder="ENGANCHE">
                </div>
                <div class="col-md-4 form-group">
                    <label for="asesor">NOMBRE DEL ASESOR: </label>
                    <select class="selectpicker" data-live-search="true" data-size="5" data-width="150px" data->
                        <option>suzuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                        <option>suxuki</option>
                        <option>honda</option>
                        <option>bajaj</option>
                      </select>
                </div>
                <div class="col-md-4 form-group">
                    <label for="fecha">FECHA DE COTIZACION: </label>
                    <input type="date" id="fecha" name="fecha" class="form-control" value="<?php echo date('Y-md') ?>">
                </div>
        </div>
        <div class="row" style="margin-top:50px">
            <div class="col-md-5">
                    <table data-toggle="table" data-click-to-select="true" data-single-select="true">
                        <thead>
                            <tr>
                              <th data-checkbox="true"></th>
                              <th></th>
                              <th>TIEMPO</th>
                              <th>$ VEHICULO</th>
                              <th>$ SEGURO</th>
                              <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                              <td style="border: hidden"></td>
                              <td>QUINCENAS</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>MES</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>AÑO</td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                            </tr>
                          </tbody>
                    </table>
            </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <h3><strong>COSTOS</strong></h3>
              </div>
            </div>
            <hr>
            <div class="row col-md-9">
              <div class="col-md-3">
                <label>FINANCIONAMIENTO</label>
              </div>
              <div class="col-md-3">
                <input type="text" class="form-control" placeholder="FINANCIAMIENTO" disabled/>
              </div>
              <div class="col-md-3">
                <label>COSTO APERTURA</label>
              </div>
              <div class="col-md-3 borde">
                <input type="text" class="form-control" placeholder="COSTO APERTURA" disabled/>
              </div>
              <div class="col-md-3 borde">
                    <label>COSTO MOTOCICLETA</label>              
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control"  placeholder="COSTO MOTOCICLETA" disabled/>
                  </div>
                  <div class="col-md-3 borde">
                    <label>BASE DEL CREDITO</label>              
                  </div>
                  <div class="col-md-3 borde">
                      <input type="text" class="form-control"  placeholder="BASE DEL CREDITO" disabled/>
                  </div>
                  <div class="col-md-3 borde">
                    <label>ENGANCHE</label>              
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control"  placeholder="ENGANCHE" disabled/>
                  </div>
                  <div class="col-md-3 borde">
                    <label>IMPORTE DEL CREDITO</label>              
                  </div>
                  <div class="col-md-3 borde">
                      <input type="text" class="form-control"  placeholder="IMPORTE DEL CREDITO" disabled/>
                  </div>
                  <div class="col-md-3 borde">
                    <label>SEGURO DE LA UNIDAD</label>              
                  </div>
                  <div class="col-md-3">
                      <input type="text" class="form-control"  placeholder="SEGURO DE LA UNIDAD" disabled/>
                  </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                        <!-- <div class="col-lg-3 col-md-4 col-xs-6 thumb"> -->
                    <a class="thumbnail" href="#">
                        <img width=400 height=200 class="img-responsive" src="http://www.yamaha-motor.com.mx/images/motos/yz250fx_2015.jpg" alt="">
                    </a>
                        <!-- </div> -->
                </div>
            </div>
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
                        <li><a href="index2.php">Suzuki</a></li>
                        <li><a href="nosotros2.php">About Us</a></li>
                        <li><a href="contacto2.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.0/js/bootstrap-select.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>