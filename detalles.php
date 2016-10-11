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
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
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
                        <li><a href="index.php">Atrum</a></li>
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
    <?php
        include("php/conexion.php");
        $res=$_GET['id'];
       $consulta = "SELECT * FROM moto INNER JOIN moto_anio_precio on moto_anio_precio.ref_moto=moto.id_moto INNER JOIN anio_moto on anio_moto.id_anio_moto=moto_anio_precio.ref_anio INNER JOIN precio_moto on precio_moto.id_precio_moto=moto_anio_precio.ref_precio WHERE moto.id_moto=$res";
        $imagen = mysql_query($consulta);
        $datos = mysql_fetch_array($imagen);
        $ruta = "php/imagenes/" . $datos['imagen'];
    ?>
    <section id="blog" class="container" style="background-image: url(images/fondo.png)">
        <div class="center">
            <h2 style=" text-shadow: -5px -5px 5px #aaa"><?= $datos['modelo'] ?> ($ <?=$datos['precio'] ?>) <?= $datos['anio'] ?></h2>
            <div class="row team-bar">
                    <div class="first-one-arrow hidden-xs">
                        <hr>
                    </div>
                    <div class="first-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="second-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                    <div class="third-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-up"></i>
                    </div>
                    <div class="fourth-arrow hidden-xs">
                        <hr> <i class="fa fa-angle-down"></i>
                    </div>
                </div>
        </div>
        <div class="">
            <div class="row" >
                <div class="col-md-12">
                    <div class="blog-item">
                        <div class="col-md-4"><br>
                            <img class="img-responsive img-blog" src="<?= $ruta ?>" width="100%" style=" box-shadow: -5px -5px 5px #aaa"/>
                        </div>
                        <div class="col-md-6" style="margin-left: 20px">
                            <h5><b>TIPO MOTOCICLETA:</b>
                                <font style="margin-left: 60px"><?= $datos['tipo_moto'] ?></font></h5>
                            <h5><b>MODELO:</b>
                                <font style="margin-left: 133px"><?= $datos['modelo'] ?></font></h5>
                            <h5><b>MOTOR:</b>
                                <font style="margin-left: 142px"><?= $datos['motor'] ?></font></h5>
                            <h5><b>TRASMISION:</b> 
                                <font style="margin-left: 109px"><?= $datos['trasmision'] ?></font></h5>
                            <h5><b>TIPO DE MOTOR:</b>
                                <font style="margin-left: 86px"><?= $datos['tipo_motor'] ?></font></h5>
                            <h5><b>NUMERO DE CILINDROS:</b>
                                <font style="margin-left: 32px"><?= $datos['numero_cilindros'] ?></font></h5>
                            <h5><b>DIAMETRO:</b>
                                <font style="margin-left: 124px"><?= $datos['diametro'] ?></font></h5>
                            <h5><b>CARRERA:</b>
                                <font style="margin-left: 135px"><?= $datos['carrera'] ?></font></h5>
                            <h5><b>DESPLAZAMIENTO:</b>
                                <font style="margin-left: 72px"><?= $datos['desplazamiento'] ?></font></h5>
                            <h5><b>RELACION COMPRESION:</b>
                                <font style="margin-left: 30px"><?= $datos['relacion_compresion'] ?></font></h5>
                            <h5><b>SISTEMA LUBRICACION:</b>
                                <font style="margin-left: 42px"><?= $datos['sistema_lubricacion'] ?></font></h5>
                            <h5><b>SISTEMA COMBUSTIBLE:</b>
                                <font style="margin-left: 40px"><?= $datos['sistema_combustible'] ?></font></h5>
                            <h5><b>SISTEMA DE ARRANQUE:</b>
                                <font style="margin-left: 39px"><?= $datos['sistema_arranque'] ?></font></h5>
                        </div>
                    </div><!--/.blog-item-->
                </div><!--/.col-md-8-->  
            </div><!--/.row-->
         </div><!--/.blog-->
    </section><!--/#blog-->
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

    <script src="js/jquery.js"></script>
    <script src="js/altadatos.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
