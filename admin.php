<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Suzuki</title>
    
    <link rel="shortcut icon" sizes="57x57" href="images/favicon.png">
    <link rel="stylesheet" href="css/bootstrap-table.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="css/alertify.core.css" />
    <link rel="stylesheet" href="css/alertify.default.css" id="toggleCSS" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css">

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
                            <div class="top-number"><p></p></div>
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
                        <!-- <li class="active"><a href="#" onclick="personal()">Alta Personal</a></li> -->
                        <li class="active" class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">AGREGAR DATOS <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#" onclick="equipo()">EQUIPO</a></li>
                                <li><a href="#" onclick="personal()">PERSONAL</a></li>
                                <li><a href="#" onclick="agregar()">REFERENCIAS</a></li>
                                <li><a href="#" onclick="extras()">ALTAS</a></li>
                            </ul>
                        </li>
                        <li class="active"><a href="#" onclick="actualizar()">ACTUALIZAR DATOS</a></li>
                        <li><a href="index.php">Salir</a>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->        
    </header>    
    <div>
      <div id="alta_personal"></div>
    </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/js/bootstrap-select.min.js"></script>
    <script src="js/alertify.min.js"></script>
    <script src="js/bootstrap-table.min.js"></script>
    <script src="js/altadatos.js"></script>
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