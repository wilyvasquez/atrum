<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suzuki</title>

    <link rel="shortcut icon" sizes="57x57" href="images/favicon.png">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/shop-homepage.css" rel="stylesheet">

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
                    <a class="" href="index.php"><img width="110" height="60" src="images/suzuki.png" alt="logo"></a>
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
    <div class="body-inner">
    <section id="service" class="wow fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <div class="service-content">
                        <a href="#."><span class="service-icon"><i class="fa fa-cogs img-circle wow flipInX"></i></span></a>
                        <h3>Transmision Automatica</h3>
                        <p>Para una condicion tan sencilla como acelerar y frenar.</p>
                    </div>
                </div><!--/ End first service -->
                <div class="col-md-3 col-sm-3">
                    <div class="service-content">
                        <a href="#."><span class="service-icon"><i class="fa fa-thumbs-o-up img-circle wow flipInX"></i></span></a>
                        <h3>Faro de Halogeno</h3>
                        <p>Ofrece una luz potente para mayor visibilidad y vida util.</p>
                    </div>
                </div><!--/ End 2nd service -->
                <div class="col-md-3 col-sm-3">
                    <div class="service-content">
                        <a href="#."><span class="service-icon"><i class="fa fa-motorcycle img-circle wow flipInX"></i></span></a>
                        <h3>Gancho de Seguridad</h3>
                        <p>Ayuda a transportar cosas con tan solo colgar en la moto.ffad00.</p>
                    </div>
                </div><!--/ End 3rd service -->
                <div class="col-md-3 col-sm-3">
                    <div class="service-content last">
                        <a href="#."><span class="service-icon"><i class="fa fa-wrench img-circle wow flipInX"></i></span></a>
                        <h3>Cerradura con cubierta magnetica</h3>
                        <p>Podras sentir seguridad al dejar tu moto estacionada.</p>
                    </div>
                </div><!--/ End 4th service -->
            </div>
        </div>
    </section><!-- Service box end -->

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <div class="feature-image">
                        <img class="img-responsive" src="http://themewinter.com/html/dart/multipage/images/feature-mock.png" alt="feature img" width="500px" height="7000" />
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRight">
                    <div class="feature-wrapper">
                        <div class="feature-content-wrapper">
                            <h2>SCOOTER LET'S</h2>
                            <p>La mas ligera de su segmento</p>

                            <div class="feature-box clearfix">
                                <div class="feature-icon pull-left">
                                    <i class="fa fa-cogs"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h3>Motor</h3>
                                    <p>On the other hand, we denounce with righteo.</p>
                                </div>
                            </div>
                            <div class="feature-box clearfix">
                                <div class="feature-icon pull-left">
                                    <i class="fa fa-tachometer"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h3>TRASMISION</h3>
                                    <p>On the other hand, we denounce with righteo.</p>
                                </div>
                            </div>
                            <div class="feature-box clearfix">
                                <div class="feature-icon pull-left">
                                    <i class="fa fa-ioxhost"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h3>TIPO DE MOTOR</h3>
                                    <p>On the other hand, we denounce with righteo.</p>
                                </div>
                            </div>
                            <div class="feature-box clearfix">
                                <div class="feature-icon pull-left">
                                    <i class="fa fa-bars"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h3>NUMERO DE CILINDROS</h3>
                                    <p>On the other hand, we denounce with righteo.</p>
                                </div>
                            </div>
                            <div class="feature-box clearfix">
                                <div class="feature-icon pull-left">
                                    <i class="fa fa-arrows-h"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h3>DIAMETRO</h3>
                                    <p>On the other hand, we denounce with righteo.</p>
                                </div>
                            </div>
                            <div class="feature-box clearfix">
                                <div class="feature-icon pull-left">
                                    <i class="fa fa-road"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h3>CARRERA</h3>
                                    <p>On the other hand, we denounce with righteo.</p>
                                </div>
                            </div>
                            <div class="feature-box clearfix">
                                <div class="feature-icon pull-left">
                                    <i class="fa fa-fire-extinguisher"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h3>SISTEMA DE LUBRICACION</h3>
                                    <p>On the other hand, we denounce with righteo.</p>
                                </div>
                            </div>
                            <div class="feature-box clearfix">
                                <div class="feature-icon pull-left">
                                    <i class="fa fa-tint"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h3>SISTEMA DE COMBUSTIBLE</h3>
                                    <p>On the other hand, we denounce with righteo.</p>
                                </div>
                            </div>
                            <div class="feature-box clearfix">
                                <div class="feature-icon pull-left">
                                    <i class="fa fa-repeat"></i>
                                </div>
                                <div class="feature-box-content">
                                    <h3>SISTEMA DE ARRANQUE</h3>
                                    <p>On the other hand, we denounce with righteo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Features right side end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section> <!-- Features end -->

    <!-- Portfolio start -->
    <section id="portfolio">
        <div class="container">
          <div class="row wow bounceIn">
                <div class="col-md-12">
                    <div class='text-center'>
                        <h2 class="title"><span>Galeria Motocicleta</span></h2>
                    </div>
                </div>
          </div><!--/ Title row end -->
          <div class='row wow fadeInUp'>
            <div class='col-lg-12'>
              <div class="carousel slide" id="portfolio-carousel">
                <div class="carousel-inner">
                    <div class="item  active">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 col-md-3">   
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <span>
                                                <a data-rel="prettyPhoto" href="images/portfolio/img.png">
                                                    <i class="fa fa-search"></i>              
                                                </a>
                                                <a href="portfolio-item.html" class=""><i class="fa fa-link"></i></a>
                                            </span>
                                            <h3>Creative Vision</h3>
                                            <p>Effektive is more than your average agency.</p>
                                        </div>
                                    </div>
                                    <img src="images/img.png" alt="portfolio">
                                </div>
                            </div>          
                            <div class="col-xs-6 col-sm-3 col-md-3">   
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <span>
                                                <a data-rel="prettyPhoto" href="images/img.png">
                                                    <i class="fa fa-search"></i>              
                                                </a>
                                                <a href="portfolio-item.html" class=""><i class="fa fa-link"></i></a>
                                            </span>
                                            <h3>Sunlight Shine</h3>
                                            <p>Effektive is more than your average agency.</p>
                                        </div>
                                    </div>
                                    <img src="images/img.png" alt="portfolio">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">   
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <span>
                                                <a data-rel="prettyPhoto" href="images/img.png">
                                                    <i class="fa fa-search"></i>              
                                                </a>
                                                <a href="portfolio-item.html" class=""><i class="fa fa-link"></i></a>
                                            </span>
                                            <h3>All Quiet Western</h3>
                                            <p>Effektive is more than your average agency.</p>
                                        </div>
                                    </div>
                                    <img src="images/img.png" alt="portfolio">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">   
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <span>
                                                <a data-rel="prettyPhoto" href="images/img.png">
                                                    <i class="fa fa-search"></i>              
                                                </a>
                                                <a href="portfolio-item.html" class=""><i class="fa fa-link"></i></a>
                                            </span>
                                            <h3>The GodFather</h3>
                                            <p>Effektive is more than your average agency.</p>
                                        </div>
                                    </div>
                                    <img src="images/img.png" alt="portfolio">
                                </div>
                            </div>
                        </div>
                    </div><!--/ Item active end -->
                    <div class="item">
                        <div class="row">
                            <div class="col-xs-6 col-sm-3 col-md-3">   
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <span>
                                                <a data-rel="prettyPhoto" href="images/img.png">
                                                    <i class="fa fa-search"></i>              
                                                </a>
                                                <a href="#" class=""><i class="fa fa-link"></i></a>
                                            </span>
                                            <h3>Creative Vision</h3>
                                            <p>Effektive is more than your average agency.</p>
                                        </div>
                                    </div>
                                    <img src="images/img.png" alt="portfolio">
                                </div>
                            </div>          
                            <div class="col-xs-6 col-sm-3 col-md-3">   
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <span>
                                                <a data-rel="prettyPhoto" href="images/img.png">
                                                    <i class="fa fa-search"></i>              
                                                </a>
                                                <a href="#" class=""><i class="fa fa-link"></i></a>
                                            </span>
                                            <h3>Creative Vision</h3>
                                            <p>Effektive is more than your average agency.</p>
                                        </div>
                                    </div>
                                    <img src="images/img.png" alt="portfolio">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">   
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <span>
                                                <a data-rel="prettyPhoto" href="images/img.png">
                                                    <i class="fa fa-search"></i>              
                                                </a>
                                                <a href="#" class=""><i class="fa fa-link"></i></a>
                                            </span>
                                            <h3>Creative Vision</h3>
                                            <p>Effektive is more than your average agency.</p>
                                        </div>
                                    </div>
                                    <img src="images/img.png" alt="portfolio">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-3 col-md-3">   
                                <div class="thumbnail">
                                    <div class="caption">
                                        <div class="caption-content">
                                            <span>
                                                <a data-rel="prettyPhoto" href="images/img.png">
                                                    <i class="fa fa-search"></i>              
                                                </a>
                                                <a href="#" class=""><i class="fa fa-link"></i></a>
                                            </span>
                                            <h3>Creative Vision</h3>
                                            <p>Effektive is more than your average agency.</p>
                                        </div>
                                    </div>
                                    <img src="images/img.png" alt="portfolio">
                                </div>
                            </div>
                        </div>
                    </div><!--/ Item end -->
                </div><!-- Carousel inner end -->

                <div class="dart-carousel-controller">
                    <a data-slide="prev" href="#portfolio-carousel" class="left"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#portfolio-carousel" class="right"><i class="fa fa-chevron-right"></i></a>
                </div><!-- Controller end -->

              </div><!-- Carousel end -->                          
            </div><!-- Main Col end -->
          </div><!--/ Main row end -->
        </div><!--/ Container end -->
    </section><!-- Portfolio end -->

    <!-- Blog & Service -->
  <!--   <section id="blog-service">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class='text-center'>
                      <h2 class="title wow bounceIn"><span>Latest Post &amp; Services</span></h2>
                  </div>
              </div>
  
              Blog start
              <div class="col-md-6 wow slideInLeft">
                  <div class="row">
                      <div class="col-sm-6 col-xs-6">
                          <div class="media recent-post">
                              <img src="images/img.png" alt="blog" />
                                  <div class="blog-date">
                                      <span class="date">15
                                          <span>feb</span>
                                      </span>
                                  </div>
                              <div class="media-body post-body">
                                  <h3><a href="#">Harmony from the blog heart</a></h3>
                                  <p class="post-meta">
                                      <span class="post-meta-author"><a href="#">Posted by: Tatania Lu</a></span>
                                      <span class="post-meta-comments"><a href="#">16 comments</a></span>
                                  </p>
                                  <div class="post-excerpt">
                                  <p>Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus</p>
                                  <a href="#" class="read-more">Read More <i class="fa fa fa-long-arrow-right"></i></a>
                                  </div>
                              </div>
                          </div>end media
                      </div>/ end col-sm-6
                      <div class="col-sm-6 col-xs-6">
                          <div class="media recent-post">
                              <img src="images/img.png" alt="img" />
                                  <div class="blog-date">
                                      <span class="date">25
                                          <span>May</span>
                                      </span>
                                  </div>
                              <div class="media-body post-body">
                                  <h3><a href="#">Harmony from the blog heart</a></h3>
                                  <p class="post-meta">
                                      <span class="post-meta-author"><a href="#">Posted by: Tatania Lu</a></span>
                                      <span class="post-meta-comments"><a href="#">16 comments</a></span>
                                  </p>
                                  <div class="post-excerpt">
                                  <p>Quisque sed metus at justo vestibulum congue at et arcu. Maecen pellentesque lobortis ante. Vestibulum quam cursus eget augue purus</p>
                                  <a href="#" class="read-more">Read More <i class="fa fa fa-long-arrow-right"></i></a>
                                  </div>
                              </div>
                          </div>end media
                      </div>/ end col-sm-6
                  </div>Row end
              </div>Blog end
  
              Services start
              <div class="col-md-6 wow slideInRight">
                  Toggle start
                  <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                      <div class="panel-heading">
                      <h4 class="panel-title"> 
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"> Web Application Design </a> 
                      </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                          <p>Aliquam mattis ultricies dolor ac vulputate. Pellentesque lectus tellus, varius vitae est et, ullamcorper porttitor urna. Praesent tristique tempor erat quis tincidunt. Sed elementum porta ullamcorper.</p> <p>Cras mattis dui ac elit sollicitudin, eu rutrum quam pharetra. Etiam consectetur nunc vitae nibh egestas scelerisque. Nam sed auctor eros, et euismod leo. Integer ut fringilla nunc. Donec eget lacus lobortis, aliquam nulla ultricies, cursus libero.</p>
                        </div>
                      </div>
                    </div>/ Panel 1 end
                    <div class="panel panel-default">
                      <div class="panel-heading">
                      <h4 class="panel-title">
                      <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo"> Search Enginee Optimization </a>
                      </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Pellentesque tincidunt sagittis velit vel tristique. Etiam pellentesque consequat odio in dictum. Nunc sed viverra nunc. commodo nisi in, lacinia luctus augue. Nunc rutrum eleifend </p>
                        </div>
                      </div>
                    </div>/ Panel 2 end
                    <div class="panel panel-default">
                      <div class="panel-heading">
                      <h4 class="panel-title">
                      <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree"> Business Development &amp; Marketing </a> 
                      </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                          <p>Pellentesque tincidunt sagittis velit vel tristique. Etiam pellentesque consequat odio in dictum. Nunc sed viverra nunc. commodo nisi in, lacinia luctus augue. Nunc rutrum eleifend </p>
                        </div>
                      </div>
                    </div>/ Panel 3 end
                  </div>Toggle end
              </div>Services end
          </div>/ row end
      </div>/ Container end
  </section> -->
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
