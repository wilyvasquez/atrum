<?php
    session_start();
    include('conexion.php');
    include('consulta.php');
?>
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

    <script src="js/custom.js"></script>
    <script type="text/javascript">
      if(history.forward(1)){
        location.replace( history.forward(1) );
      }
    </script>
         
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
                                <form action="" method="post" class="login">
                                    <center>
                                    <img class="img-circle" src="images/su.png" width="50px" height="50px" style="margin-top:5px">
                                    </center>
                                    <li style="margin-top:5px">
                                        <input type="text"  class="form-control input" name="user" placeholder="Usuario" required/>
                                        <!-- <label>Username</label><input name="user" type="text" > -->
                                    </li>
                                    <li style="margin-top:5px">
                                        <input type="password"  class="form-control input" name="password" placeholder="Password" required/>
                                        <!-- <label>Password</label><input name="password" type="password"> -->
                                    </li>
                                    <li>
                                        <div style="margin-top:5px;margin-left:10px;margin-bottom:5px">
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
    
    <section id="mision" class="no-margin" style="margin-top:50px">
    <div class="col-md-offset-1 container ">
    <div class="row col-md-8">
    <div class="row">
        <div class="col-md-5">
            <h2><strong>Perfil</strong></h2>
            <hr>
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea ratione placeat eaque suscipit dicta dolor in, ducimus consequuntur nisi porro velit ipsa commodi earum. Veniam perspiciatis consequatur, tenetur sunt dicta.</h3>
        </div>
        <div class="col-md-7">
            <h2><strong>Mision</strong></h2>
            <hr>
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde corporis libero assumenda veniam amet mollitia earum numquam aliquam tenetur laboriosam. Quidem nisi impedit maxime iste, tempora quaerat aliquam corporis assumenda.</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 hero-feature">
            <div class="">
                <img style="margin-left:80px" width="500px" height="250px" src="images/instalaciones.jpg" alt="">
            </div>
        </div>
    </div>
    </div>
        <div class="col-md-4">
            <h2><strong>Vision</strong></h2>
            <hr>
            <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta minima sequi quo, illum suscipit repudiandae ad fuga itaque ipsum cum, hic vero modi eaque exercitationem officiis, adipisci porro eveniet quod.</h3>
            <h2><strong>Valores</strong></h2>
            <hr>
            <ul>
            <h3>
                <span class="glyphicon glyphicon-chevron-right"> hola</span><br>
                <span class="glyphicon glyphicon-chevron-right"> hola</span><br>
                <span class="glyphicon glyphicon-chevron-right"> hola</span><br>
                <span class="glyphicon glyphicon-chevron-right"> hola</span><br>
                <span class="glyphicon glyphicon-chevron-right"> hola</span><br>
                <span class="glyphicon glyphicon-chevron-right"> hola</span>
            </h3>
            </ul>

        </div>
    </div>
    </section>

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

    <script type="text/javascript" src="js/ocultar.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>