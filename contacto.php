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
    
</head>
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
                        <li><a href="motocicletas.php">Motocicletas</a></li>
                        <li><a href="accesorios.php">Accesorios</a></li>                        
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portafolio <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Promociones</a></li>
                                <!-- <li><a href="#">Eventos</a></li> -->
                                <li><a href="nosotros.php">About Us</a></li>
                                <li class="active"><a href="contacto.php">Contacto</a></li>
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

    <div class="container">
        <div class="col-md-4">
            <div class="col-md-12">
                <label for="comment">NOMBRE:</label>
                <input type="text" class="form-control"  placeholder="NOMBRE COMPLETO">
            </div>
            <div class="col-md-12 borde">
                <label for="comment">EMAIL:</label>
                <input type="text" class="form-control"  placeholder="EXAMPLE@EXAMPLE.COM.MX">
            </div>
            <div class="col-md-12 borde">
            <label for="comment">ASUNTO:</label>
                <input type="text" class="form-control"  placeholder="ASUNTO">
            </div>
            <div class="form-group col-md-12">
              <label for="comment">MENSAJE:</label>
              <textarea class="form-control" rows="5" id="comment" placeholder="MENSAJE"></textarea>
            </div>
        </div> 
        <div class="col-md-8">
            <h2>Encuentranos AQUI..!</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1907.3367961715908!2d-96.7176081!3d17.0396734!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd9c463db0929b3e!2sSuzuki!5e0!3m2!1ses!2smx!4v1471553711952" width="500" height="300" frameborder="10" style="border:5"></iframe>              
        </div>
    </div><br>
    </div>
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