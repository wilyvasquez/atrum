<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Suzuki</title>
    
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
                        <li><a href="index.php">Suzuki</a></li>
                        <li><a href="motocicletas.php">Motocicletas</a></li>
                        <li><a href="accesorios.php">Accesorios</a></li>
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portafolio <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Promociones</a></li>
                                <!-- <li><a href="#">Eventos</a></li> -->
                                <li class="active"><a href="nosotros.php">About Us</a></li>
                                <li><a href="contacto.php">Contacto</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <form action="cotizador.php" method="post">
                                    <center>
                                    <img class="img-circle" src="images/su.png" width="50px" height="50px" style="margin-top:5px">
                                    </center>
                                    <li style="margin-top:5px">
                                        <input type="text" id="user"  class="form-control input" name="user" placeholder="Usuario" required/>
                                        <!-- <label>Username</label><input name="user" type="text" > -->
                                    </li>
                                    <li style="margin-top:5px">
                                        <input type="password"  class="form-control input" name="pass" placeholder="Password" required/>
                                        <!-- <label>Password</label><input name="password" type="password"> -->
                                    </li>
                                    <li>
                                        <div class="freeow freeow-top-right" style="margin-top:5px;margin-left:10px;margin-bottom:5px">
                                            <input class="btn btn-default" name="login" type="submit" value="login">
                                        </div> 
                                    </li>   
                                </form>
                            </ul>
                        </li>                       
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->        
    </header><!--/header-->
    
   <section id="about-us">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Atrum Motors de Mexico SA de CV</h2>
                <p class="lead"><b>¿Quienes Somos?</b><br> Es una empresa dedicada a la compra-venta de motocicletas, asi como tambien a la venta de refacciones y accesorios.</p>
            </div>
            
            <!-- about us slider -->
            <div id="about-slider">
                <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators visible-xs">
                        <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-slider" data-slide-to="1"></li>
                        <li data-target="#carousel-slider" data-slide-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/slider_one.jpg" class="img-responsive" alt=""> 
                       </div>
                       <div class="item">
                            <img src="images/slider_one.jpg" class="img-responsive" alt=""> 
                       </div> 
                       <div class="item">
                            <img src="images/slider_one.jpg" class="img-responsive" alt=""> 
                       </div> 
                    </div>
                    
                    <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                        <i class="fa fa-angle-left"></i> 
                    </a>
                    
                    <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                        <i class="fa fa-angle-right"></i> 
                    </a>
                </div> <!--/#carousel-slider-->
            </div><!--/#about-slider-->
            
            
            <!-- Our Skill -->
            <div class="skill-wrap clearfix">
            
                <div class="col-md-6">
                    <h2>MISION</h2>
                    <p class="lead">Ofrecer a nuestros clientes motocicletas de la prestigiada marca suzuki, basada en una entrega de calidad, seguimiento de postventa y servicio de calidad a precios adecuados, para la satisfacción de las necesidades del cliente con un respaldo de calidad.</p>
                </div>
                <div class="col-md-6">
                    <h2>VISION</h2>
                    <p class="lead">Somos una empresa enfocada al servicio, por lo que innovamos constantemente para exceder los estándares establecidos. Nuestravisión es a largo plazo, ya que la relación con nuestros clientes no termina con la venta de una motocicleta, justamente en ese momento es cuando comienza.</p>
                </div>
                <div class="center wow fadeInDown">
                    <h2>OBJETIVO</h2>
                    <p class="lead">Brindar un excelente servicio al cliente, dando siempre nuestro mejor esfuerzo y generando las condiciones ideales en financiamiento a nuestros clientes, solo de esta forma lograremos que la empresa sea líder de ventas de motocicletas Suzuki en Oaxaca.La empresa cuenta con un taller certificado por Suzuki Motor de México, S.A. de C.V, contamos con Sistema de Scanner para verificar nuestras motos en servicio, así como con capacitación continua para nuestro personal de servicio.      Ven y comprueba la diferencia… Contamos con un amplio stock de refacciones.</p>
                </div>
                <div class="row">
        
                    <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="joomla-skill">                                   
                                <p><em>100%</em></p>
                                <p>COMPROMISO</p>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="html-skill">                                  
                                <p><em>100%</em></p>
                                <p>RESPONSABILIDAD</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                            <div class="css-skill">                                    
                                <p><em>100%</em></p>
                                <p>INNOVACION</p>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                            <div class="wp-skill">
                                <p><em>100%</em></p>
                                <p>SERVICIO</p>                                     
                            </div>
                        </div>
                    </div>
                    
                </div>
    
            </div><!--/.our-skill-->
            

            <!-- our-team -->
            <div class="team">
                <div class="center wow fadeInDown">
                    <h2>EQUIPO ATRUM</h2>
                    <p class="lead"> La empresa cuenta con un taller certificado por Suzuki Motor de México, S.A. de C.V, contamos con Sistema de Scanner para verificar nuestras motos en servicio, así como con capacitación continua para nuestro personal de servicio.      Ven y comprueba la diferencia… Contamos con un amplio stock de refacciones.</p>
                </div>

                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6"> 
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man1.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <!-- <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul> -->
                                    
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div><!--/.col-lg-4 -->
                    
                    
                    <div class="col-md-4 col-sm-6 col-md-offset-2"> 
                        <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man2.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <!-- <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul> -->
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div><!--/.col-lg-4 -->                    
                </div> <!--/.row -->
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
                </div> <!--skill_border-->       
<!-- 
                <div class="row clearfix">   
                    <div class="col-md-4 col-sm-6 col-md-offset-2"> 
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man3.jpg" alt=""></a>
                                </div>

                                <div class="media-body">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>/.media
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-md-offset-2">
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <a href="#"><img class="media-object" src="images/man4.jpg" alt=""></a>
                                </div>
                                <div class="media-body">
                                    <h4>Jhon Doe</h4>
                                    <h5>Founder and CEO</h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#">Web</a></li>
                                        <li class="btn"><a href="#">Ui</a></li>
                                        <li class="btn"><a href="#">Ux</a></li>
                                        <li class="btn"><a href="#">Photoshop</a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>/.media
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                        </div>
                    </div>
                </div>  /.row -->
            </div><!--section-->
        </div><!--/.container-->
    </section><!--/about-us-->
    
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
    <footer id="footer" class="midnight-blue" style="margin-top:10px">
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