<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Suzuki</title>
    
    <link rel="shortcut icon" sizes="57x57" href="images/favicon.png">
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">    

</head><!--/head-->

<body class="homepage">
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
                    <a class="navbar-brand" href="index.php"><img width="110" height="60" src="images/suzuki.png" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Suzuki</a></li>
                        <li><a href="motocicletas.php">Motocicletas</a></li>
                        <li><a href="accesorios.php">Accesorios</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portafolio <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Promociones</a></li>
                                <li><a href="nosotros.php">About Us</a></li>
                                <li><a href="contacto.php">Contacto</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <div id="login">
                                    <form action="cotizador.php" method="post">
                                    <center>
                                    <img class="img-circle" src="images/su.png" width="50px" height="50px" style="margin-top:5px">
                                    </center>
                                    <li style="margin-top:5px">
                                        <input type="text" id="user" onkeypress="letranumero()" class="form-control input" name="user" placeholder="Usuario" required/>
                                    </li>
                                    <li style="margin-top:5px">
                                        <input type="password" onkeypress="letranumero()" class="form-control input" id="pass" name="pass" placeholder="Password" required/>
                                    </li>
                                    <li>
                                        <div id="freeow-tr" class="freeow freeow-top-right" style="margin-top:5px;margin-left:10px;margin-bottom:5px">
                                            <input class="btn btn-default" name="login" type="submit" value="Aceptar">
                                        </div> 
                                    </li>   
                                </form>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">DOBLE PROPÓSITO V-STROM 650 ABS</h1>
                                    <h2 class="animation animated-item-2">Convierte las calles en la puerta de salida para la aventura...</h2>
                                    <!-- <a class="btn-slide animation animated-item-3" href="#">Leer Mas</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/moto2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Suzuki GSX-1300R Hayabusa</h1>
                                    <h2 class="animation animated-item-2">Considerada como una de las más veloces del mundo y de mayor aceleración estrictamente de serie...</h2>
                                    <!-- <a class="btn-slide animation animated-item-3" href="#">Leer Mas</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(images/slider/moto3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">CROSS Y ENDURO RMX-450Z</h1>
                                    <h2 class="animation animated-item-2">Precisa, ligera, delgada, potente, con todo el equipo necesario pra Enduro...</h2>
                                    <!-- <a class="btn-slide animation animated-item-3" href="#">Leer Mas</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
    <div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Requisitos Credito ISSSTE</h4>
              </div>
              <div class="modal-body">
                <p>1.-Copia Credencial IFE (INE).</p>
                <p>2.-Dos Ultimos talones de pago.</p>
                <p>3.-Dos referencias personales.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="suzucredit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Requisitos SUZUCREDIT</h4>
              </div>
              <div class="modal-body">
                <p>1.-Copia Credencial IFE (INE).</p>
                <p>2.-Dos Comprobantes de domicilio original y copia.</p>
                <p>3.-Comprobante de ingresos.</p>
                <p>4.-Croquis de vivienda.</p>
                <p>5.-Dos referencias no familiares.</p>
                <p>6.-Aval si el caso lo requiere.</p>
                <p>7.-Autorizacion para buro de credito.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="casa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Requisitos Credito Casa</h4>
              </div>
              <div class="modal-body">
                <p>1.-Copia Credencial IFE (INE).</p>
                <p>2.-Dos Comprobantes de domicilio original y copia.</p>
                <p>3.-Comprobante de ingresos.</p>
                <p>4.-Croquis de vivienda.</p>
                <p>5.-Dos referencias no familiares.</p>
                <p>6.-Aval si el caso lo requiere.</p>
                <p>7.-Autorizacion para buro de credito.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="stpeidceo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Requisitos STPEIDCEO</h4>
              </div>
              <div class="modal-body">
                <p>1.-Copia Credencial IFE (INE).</p>
                <p>2.-Credencial del sindicalizado o carta compromiso del mismo.</p>
                <p>3.-Dos comprobantes de domicilio.</p>
                <p>4.-Recibos de nominados (2 ultimas quincenas).</p>
                <p>5.-Pago de afiliacion.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="paribas" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Requisitos BNP Paribas</h4>
              </div>
              <div class="modal-body">
                <p>1.-Copia Credencial IFE (INE).</p>
                <p>2.-Dos Comprobantes de domicilio original y copia.</p>
                <p>3.-Estado de cuente de 3 meses.</p>
                <p>5.-Dos referencias no familiares.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="fonacot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Requisitos FONACOT</h4>
              </div>
              <div class="modal-body">
                <p>1.-Copia Credencial IFE (INE).</p>
                <p>2.-Dos Comprobantes de domicilio original y copia.</p>
                <p>3.-Dos ultimos talones de pago.</p>
                <p>4.-Dos referencias no familiares original y copia.</p>
                <p>5.-Estar afiliado a la empresa con FONACOT.</p>
                <p>6.-Tener minimo un año en la empresa.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </div>
    <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <h2>Canales de Venta</h2>
                <p class="lead">Aceptamos tarjetas Banamex, Bancomer, Banorte y AmericanExpress <br> Contamos con sistema de apartado que te permite mantener el costo de tu Moto Suzuki</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-money"></i>
                            <h2><a data-toggle="modal" data-target="#myModal" href="#myModal" style="color:#000000">Credito ISSSTE</a></h2>
                            <h3>Atrum en coordinacion con el ISSSTE te ofrece el mejor credito.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-credit-card"></i>
                            <h2><a data-toggle="modal" data-target="#paribas" href="#paribas" style="color:#000000">BNP Paribas</a></h2>
                            <h3>Financiamiento para motocicletas de gran cilindrada.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-motorcycle" aria-hidden="true"></i>
                            <h2><a data-toggle="modal" data-target="#suzucredit" href="#suzucredit" style="color:#000000">Suzucredit</a></h2>
                            <h3>Te apoya a adquirir tu motocicleta SUZUKI con garantiade 2 años.</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-home"></i>
                            <h2><a data-toggle="modal" data-target="#casa" href="#casa" style="color:#000000">Credito Casa</a></h2>
                            <h3>Menor plazo, sin pago de apertura.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-users"></i>
                            <h2><a data-toggle="modal" data-target="#stpeidceo" href="#stpeidceo" style="color:#000000">Credinomina STPEIDCEO</a></h2>
                            <h3>Tu credito en cualquiera de nuestro modelos.</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-usd"></i>
                            <h2><a data-toggle="modal" data-target="#fonacot" href="#fonacot" style="color:#000000">FONACOT</a></h2>
                            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->    

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy;SuzukiOaxaca (951) 144 88 05.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="index.php">Suzuki</a></li>
                        <li><a href="nosotros.php">About Us</a></li>
                        <li><a href="contacto.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/validaciones.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>