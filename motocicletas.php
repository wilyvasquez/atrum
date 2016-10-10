<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzuki</title>

    <link rel="shortcut icon" sizes="57x57" href="images/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">

    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
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
                    <a class="navbar-brand" href="index.php"><img width="110" height="60" src="images/suzuki.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Suzuki</a></li>
                        <li class="active"><a href="motocicletas.php">Motocicletas</a></li>
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

    <section id="portfolio">
        <div class="container">
            <div class="center">
               <div class="col-md-12">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/slider/moto.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slider/urban.jpg" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slider/amazing.jpg" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="motocicletas.php" data-filter=".scooter">SCOOTER</a></li>
                <li><a class="btn btn-default" href="motocicletas.php" data-filter=".urbanas">URBANAS</a></li>
                <li><a class="btn btn-default" href="motocicletas.php" data-filter=".trabajo">TRABAJO</a></li>
                <li><a class="btn btn-default" href="motocicletas.php" data-filter=".deportivas">DEPORTIVAS</a></li>
                <li><a class="btn btn-default" href="motocicletas.php" data-filter=".ciudad">CIUDAD</a></li>
                <li><a class="btn btn-default" href="motocicletas.php" data-filter=".doble">DOBLE PROPOSITO</a></li>
                <li><a class="btn btn-default" href="motocicletas.php" data-filter=".boulevard">BOULEVARD</a></li>
                <li><a class="btn btn-default" href="motocicletas.php" data-filter=".cross">CROSS Y ENDURO</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <?php 
                        include("php/conexion.php");
                        $res='SCOOTERS';                            
                        $consulta = "SELECT * FROM moto WHERE tipo_moto='$res'";
                        $imagen = mysql_query($consulta);
                    ?>
                    <?php 
                    while ($datos = mysql_fetch_array($imagen)) { 
                    $ruta = "php/imagenes/" . $datos['imagen'];
                    $id = $datos['id_moto'];
                    ?>
                    <div class="portfolio-item scooter col-xs-12 col-sm-4 col-md-2">
                        <div class="recent-work-wrap thumbnail" style="margin-left: 2px">
                            <img class="img-responsive" src="<?= $ruta ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <font size="2"><?= $datos['modelo'] ?></font><br>
                                    <font size="3">PRECIO: $12000</font>
                                    <center><a class="btn btn-danger" href="detalles.php?id=<?= $datos['id_moto'] ?>" role="button">Detalles !
                                      <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a></center>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <?php } ?>
                    <?php 
                        include("php/conexion.php");
                        $res='URBANAS';                            
                        $consulta = "SELECT * FROM moto WHERE tipo_moto='$res'";
                        $imagen = mysql_query($consulta);
                    ?>
                    <?php 
                    while ($datos = mysql_fetch_array($imagen)) { 
                    $ruta = "php/imagenes/" . $datos['imagen'];
                    $id = $datos['id_moto'];
                    // echo $tipo=$_GET['tipo'];
                    ?>
                    <div class="portfolio-item urbanas col-xs-12 col-sm-4 col-md-2">
                        <div class="recent-work-wrap thumbnail" style="margin-left: 2px">
                            <img class="img-responsive" src="<?= $ruta ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <font size="2"><?= $datos['modelo'] ?></font><br>
                                    <font size="3">PRECIO: $12000</font>
                                    <a class="btn btn-danger" href="detalles.php?id=<?= $datos['id_moto'] ?>" role="button">Detalles !
                                      <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <?php } ?>
                    <?php 
                        include("php/conexion.php");
                        $res='MOTOCARRO';                            
                        $consulta = "SELECT * FROM moto WHERE tipo_moto='$res'";
                        $imagen = mysql_query($consulta);
                    ?>
                    <?php 
                    while ($datos = mysql_fetch_array($imagen)) { 
                    $ruta = "php/imagenes/" . $datos['imagen'];
                    $id = $datos['id_moto'];
                    // echo $tipo=$_GET['tipo'];
                    ?>
                    <div class="portfolio-item motocarro col-xs-12 col-sm-4 col-md-2">
                        <div class="recent-work-wrap thumbnail" style="margin-left: 2px">
                            <img class="img-responsive" src="<?= $ruta ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <font size="2"><?= $datos['modelo'] ?></font><br>
                                    <font size="3">PRECIO: $12000</font>
                                    <a class="btn btn-danger" href="detalles.php?id=<?= $datos['id_moto'] ?>" role="button">Detalles !
                                      <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <?php } ?>
                    <?php 
                        include("php/conexion.php");
                        $res='DOBLE PROPOSITO';                            
                        $consulta = "SELECT * FROM moto WHERE tipo_moto='$res'";
                        $imagen = mysql_query($consulta);
                    ?>
                    <?php 
                    while ($datos = mysql_fetch_array($imagen)) { 
                    $ruta = "php/imagenes/" . $datos['imagen'];
                    $id = $datos['id_moto'];
                    // echo $tipo=$_GET['tipo'];
                    ?>
                    <div class="portfolio-item doble col-xs-12 col-sm-4 col-md-2">
                        <div class="recent-work-wrap thumbnail" style="margin-left: 2px">
                            <img class="img-responsive" src="<?= $ruta ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <font size="2"><?= $datos['modelo'] ?></font><br>
                                    <font size="3">PRECIO: $12000</font>
                                    <a class="btn btn-danger" href="detalles.php?id=<?= $datos['id_moto'] ?>" role="button">Detalles !
                                      <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <?php } ?>
                    <?php 
                        include("php/conexion.php");
                        $res='TRABAJO';                            
                        $consulta = "SELECT * FROM moto WHERE tipo_moto='$res'";
                        $imagen = mysql_query($consulta);
                    ?>
                    <?php 
                    while ($datos = mysql_fetch_array($imagen)) { 
                    $ruta = "php/imagenes/" . $datos['imagen'];
                    $id = $datos['id_moto'];
                    // echo $tipo=$_GET['tipo'];
                    ?>
                    <div class="portfolio-item trabajo col-xs-12 col-sm-4 col-md-2">
                        <div class="recent-work-wrap thumbnail" style="margin-left: 2px">
                            <img class="img-responsive" src="<?= $ruta ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <font size="2"><?= $datos['modelo'] ?></font><br>
                                    <font size="3">PRECIO: $12000</font>
                                    <a class="btn btn-danger" href="detalles.php?id=<?= $datos['id_moto'] ?>" role="button">Detalles !
                                      <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <?php } ?>
                    <?php 
                        include("php/conexion.php");
                        $res='BOULEVARD';                            
                        $consulta = "SELECT * FROM moto WHERE tipo_moto='$res'";
                        $imagen = mysql_query($consulta);
                    ?>
                    <?php 
                    while ($datos = mysql_fetch_array($imagen)) { 
                    $ruta = "php/imagenes/" . $datos['imagen'];
                    $id = $datos['id_moto'];
                    // echo $tipo=$_GET['tipo'];
                    ?>
                    <div class="portfolio-item boulevard col-xs-12 col-sm-4 col-md-2">
                        <div class="recent-work-wrap thumbnail" style="margin-left: 2px">
                            <img class="img-responsive" src="<?= $ruta ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <font size="2"><?= $datos['modelo'] ?></font><br>
                                    <font size="3">PRECIO: $12000</font>
                                    <a class="btn btn-danger" href="detalles.php?id=<?= $datos['id_moto'] ?>" role="button">Detalles !
                                      <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <?php } ?>
                    <?php 
                        include("php/conexion.php");
                        $res='DEPORTIVAS (GSX-R)';                            
                        $consulta = "SELECT * FROM moto WHERE tipo_moto='$res'";
                        $imagen = mysql_query($consulta);
                    ?>
                    <?php 
                    while ($datos = mysql_fetch_array($imagen)) { 
                    $ruta = "php/imagenes/" . $datos['imagen'];
                    $id = $datos['id_moto'];
                    // echo $tipo=$_GET['tipo'];
                    ?>
                    <div class="portfolio-item deportivas col-xs-12 col-sm-4 col-md-2">
                        <div class="recent-work-wrap thumbnail" style="margin-left: 2px">
                            <img class="img-responsive" src="<?= $ruta ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <font size="2"><?= $datos['modelo'] ?></font><br>
                                    <font size="3">PRECIO: $12000</font>
                                    <a class="btn btn-danger" href="detalles.php?id=<?= $datos['id_moto'] ?>" role="button">Detalles !
                                      <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <?php } ?>
                    <?php 
                        include("php/conexion.php");
                        $res='ADVENTURA QUADS (KINGQUAD)';                            
                        $consulta = "SELECT * FROM moto WHERE tipo_moto='$res'";
                        $imagen = mysql_query($consulta);
                    ?>
                    <?php 
                    while ($datos = mysql_fetch_array($imagen)) { 
                    $ruta = "php/imagenes/" . $datos['imagen'];
                    $id = $datos['id_moto'];
                    // echo $tipo=$_GET['tipo'];
                    ?>
                    <div class="portfolio-item ciudad col-xs-12 col-sm-4 col-md-2">
                        <div class="recent-work-wrap thumbnail" style="margin-left: 2px">
                            <img class="img-responsive" src="<?= $ruta ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <font size="2"><?= $datos['modelo'] ?></font><br>
                                    <font size="3">PRECIO: $12000</font>
                                    <a class="btn btn-danger" href="detalles.php?id=<?= $datos['id_moto'] ?>" role="button">Detalles !
                                      <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <?php } ?>
                    <?php 
                        include("php/conexion.php");
                        $res='CROSS Y ENDURO';                            
                        $consulta = "SELECT * FROM moto WHERE tipo_moto='$res'";
                        $imagen = mysql_query($consulta);
                    ?>
                    <?php 
                    while ($datos = mysql_fetch_array($imagen)) { 
                    $ruta = "php/imagenes/" . $datos['imagen'];
                    $id = $datos['id_moto'];
                    // echo $tipo=$_GET['tipo'];
                    ?>
                    <div class="portfolio-item cross col-xs-12 col-sm-4 col-md-2">
                        <div class="recent-work-wrap thumbnail" style="margin-left: 2px">
                            <img class="img-responsive" src="<?= $ruta ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <font size="2"><?= $datos['modelo'] ?></font><br>
                                    <font size="3">PRECIO: $12000</font>
                                    <a class="btn btn-danger" href="detalles.php?id=<?= $datos['id_moto'] ?>" role="button">Detalles !
                                      <span class="fa fa-eye" aria-hidden="true"></span>
                                    </a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <?php } ?>
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
    
    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/altadatos.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
