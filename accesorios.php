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
                        <li><a href="index.php">Atrum</a></li>
                        <li><a href="motocicletas.php">Motocicletas</a></li>
                        <li class="active"><a href="accesorios.php">Accesorios</a></li>
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
               <h2>Accesorios</h2>
               <p class="lead">Contamos con una amplia gama de accesorios para tu moto suzuki, ha precios muy accesibles<br> Visitanos no te arrepentiras, te esperamos !</p>
            </div>
        

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="#" data-filter="*">Todos Accesorios</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".strom">V-Strom 650</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".inazuma">Inazuma</a></li>
                <li><a class="btn btn-default" href="#" data-filter=".seguridad">Seguridad</a></li>
            </ul><!--/#portfolio-filter-->

            <div class="row">
                <div class="portfolio-items">
                    <div class="portfolio-item strom col-xs-12 col-sm-3 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Kit de Maletas</a></h3>
                                    <p>Maletas traseras y laterales<br>
                                        Soporte para maletas<br>
                                        Kit de fijación<br>
                                        Juego de llaves<br>
                                    </p>
                                    <a class="preview" href="images/accesorios/img.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item inazuma seguridad col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img15.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Protector de tanque</a></h3>
                                    <p>Numero de parte: 990D0-48H00-CRB</p>
                                    <a class="preview" href="images/accesorios/img15.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item inazuma seguridad col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img17.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Tapon</a></h3>
                                    <p>Numero de parte: 09259-36008-000</p>
                                    <a class="preview" href="images/accesorios/img17.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item strom col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img2.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Conector de 12v</a></h3>
                                    <p>Numero de parte: 38800-09810-000</p>
                                    <a class="preview" href="images/accesorios/img2.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item inazuma col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img9.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Parabrisas o deflector de air</a></h3>
                                    <p>Numero de parte: 99000-9900A-48H</p>
                                    <a class="preview" href="images/accesorios/img9.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item strom seguridad col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img3.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Soporte GPS</a></h3>
                                    <p>Numero de parte: 990D0-17HNB-000</p>
                                    <a class="preview" href="images/accesorios/img3.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>        
                    </div><!--/.portfolio-item-->
                    
                    <div class="portfolio-item strom seguridad col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img4.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Protector de tanque</a></h3>
                                    <p>Numero de parte: 990D0-11JTP-000</p>
                                    <a class="preview" href="images/accesorios/img4.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>           
                    </div><!--/.portfolio-item-->
          
                    <div class="portfolio-item strom seguridad col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img5.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Defensa Lateral</a></h3>
                                    <p>Numero de parte: 990D0-11J0-030</p>
                                    <a class="preview" href="images/accesorios/img5.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>      
                    </div><!--/.portfolio-item-->

                    <div class="portfolio-item strom seguridad col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img6.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Parador central</a></h3>
                                    <p>Numero de parte: 42100-06860-000</p>
                                    <a class="preview" href="images/accesorios/img6.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>         
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item strom seguridad col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img8.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Cubierta de motor</a></h3>
                                    <p>Numero de parte: 94400-11820-291</p>
                                    <a class="preview" href="images/accesorios/img8.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    
                    <div class="portfolio-item inazuma seguridad col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img11.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Defensa</a></h3>
                                    <p>Numero de parte: 99000-99031-317</p>
                                    <a class="preview" href="images/accesorios/img11.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item inazuma seguridad col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img12.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Parador Central</a></h3>
                                    <p>Numero de parte: 42100-48811-000</p>
                                    <a class="preview" href="images/accesorios/img12.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item inazuma col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img13.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Maleta 26 lts</a></h3>
                                    <p>Numero de parte:990D0-TC26L-BKL</p>
                                    <a class="preview" href="images/accesorios/img13.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item strom seguridad col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img7.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Protector de puños</a></h3>
                                    <p>Numero de parte: 57300-27824-291</p>
                                    <a class="preview" href="images/accesorios/img7.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item inazuma col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img14.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Base para maleta</a></h3>
                                    <p>Numero de parte: 990D0-99999-076</p>
                                    <a class="preview" href="images/accesorios/img14.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->
                    <div class="portfolio-item inazuma col-xs-12 col-sm-4 col-md-3">
                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="images/accesorios/img16.png" alt="">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#">Parrilla</a></h3>
                                    <p>Numero de parte:  46100-48851-000</p>
                                    <a class="preview" href="images/accesorios/img16.png" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>          
                    </div><!--/.portfolio-item-->                    
                </div>
            </div>
        </div>
    </section><!--/#portfolio-item-->
    
    <!-- <section id="bottom">
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
                </div>/.col-md-3
    
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
                </div>/.col-md-3
    
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
                </div>/.col-md-3
    
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
                </div>/.col-md-3
            </div>
        </div>
    </section>/#bottom -->

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
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>
