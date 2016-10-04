<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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
</head>
<body>
	<header id ="header">
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
                        <li class="active"><a href="#">Cotizador</a></li>
                        <li><a href="#">Salir</a>                      
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->        
    </header>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="col-md-12"><h3><strong>COTIZADOR</strong></h3><hr></div>
    			<div class="col-md-6">
                    <div class="col-md-5">
                        <div><label for="">MOTO</label></div>
                        <div>
                            <select id="moto" name="moto" onchange="funciontipo(this.value)" class="selectpicker" data-size="5" data-live-search="true" title="Choose one option">
                              <!-- <option value="">Seleccionar</option> -->
                              <?php include("php/moto.php") ?>
                            </select>
                        </div> 
                    </div>
                    <div class="col-md-4">
			          <label for="">AÑO</label>
			          <select name="anio" id="anio" class="form-control">
			            <option value="">Seleccionar</option>
			          </select>
			        </div>
                    <div class="col-md-5">
                        <div><label for="">TIPO DE CREDITO</label></div>
                        <div>
                            <select id="credito" name="credito" onchange="funcionseguro(this.value);funciontiempo(this.value);funcionenganche(this.value)" class="selectpicker" data-size="5" data-live-search="true" title="Choose one option">
                              <!-- <option value="">Seleccionar</option> -->
                              <?php include("php/credito.php") ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div><label for="">TIPO DE SEGURO</label></div>
                        <div>
                            <select id="seguro" name="seguro" class="form-control">
                              <option value="">Seleccionar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div><label for="">TIEMPO</label></div>
                        <div>
                            <select id="tiempo" name="tiempo" class="form-control">
                              <option value="">Seleccionar</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div><label for="">ENGANCHE</label></div>
                        <div class="input-group col-md-10">
                            <select id="porcentaje" name="porcentaje" class="form-control">
                              <option value="">Seleccionar</option>
                            </select>
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div><label for="">EMPLACAMIENTO</label></div>
                        <div>
                            <select id="placas" name="placas" class="selectpicker" data-size="5" data-live-search="true" title="Choose one option">
                              <!-- <option value="">Seleccionar</option> -->
                              <?php include("php/placas.php") ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div style="margin-top:27px">
                            <button class="btn btn-info" type="submit" onclick="datoscotizador();resultados($('#porcentaje').val(),$('#tiempo').val(),$('#moto').val(),$('#anio').val(),$('#credito').val());tablaprecio($('#moto').val(),$('#anio').val(),$('#seguro').val(),$('#placas').val(),$('#credito').val(),$('#porcentaje').val(),$('#tiempo').val());tiempo($('#credito').val())">Cotizar !</button>
                        </div>
                    </div>
                </div><!-- fin modulo 1 -->
                <div class="col-md-6" id="precios"> <!-- inicio mudulo 2 -->
                     <div class="thumbnail col-md-6" style="width:260px; height:200px"></div><br><br>
                     <div class="col-md-6"> 
                         <div class="col-md-5" style="margin-top:5px">
                            <label>COSTO</label>        
                        </div>
                        <div class="col-md-7" style="margin-top:5px">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" id="costo" name="costo" value="100" class="form-control" onfocus="this.blur()">      
                            </div>
                        </div>
                        <div class="col-md-5" style="margin-top:5px">
                            <label>SEGURO</label>        
                        </div>
                        <div class="col-md-7" style="margin-top:5px">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" id="seguromoto" name="seguro" value="100" class="form-control" onfocus="this.blur()">      
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label><h6>EMPLACAMIENTO</h6></label>        
                        </div>
                        <div class="col-md-7" style="margin-top:5px">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" id="costoempla" name="costoempla" value="100" class="form-control" onfocus="this.blur()">      
                            </div>
                        </div>
                     </div>
                </div> <!-- fin modulo 2 -->
    		</div> <!-- fin capa 1 -->
    	<div class="col-md-12">
            <div class="col-md-12"><h3><strong>RESULTADOS</strong></h3><hr></div>
    		<div class="row">
    			<div class="col-md-6" id="resultados">
                        <div class="col-md-3">
                            <label>FINANCIAMIENTO</label>        
                        </div>
                        <div class="col-md-9">
                            <input type="text" id="financiamiento" name="financiamiento" value="" class="form-control" onkeypress='letras()' onfocus="this.blur()">
                        </div>
                        <div class="col-md-3" style="margin-top:5px">
                            <label>ENGANCHE</label>        
                        </div>
                        <div class="col-md-3" style="margin-top:5px">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" id="engancheresul" name="engancheresul" value="0" class="form-control" onfocus="this.blur()">
                            </div>
                        </div>
                        <!-- fin row -->
                        <div class="col-md-3">
                            <label><h6>COSTO APERTURA</h6></label>
                        </div>
                        <div class="col-md-3" style="margin-top:5px">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" id="apertura" name="apertura" value="0" class="form-control" onfocus="this.blur()">   
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label><h6>BASE DEL CREDITO</h6></label>        
                        </div>
                        <div class="col-md-3" style="margin-top:5px">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" id="base" name="base" value="0" class="form-control" onfocus="this.blur()">      
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label><h6>IMPORTE CREDITO</h6></label>        
                        </div>
                        <div class="col-md-3" style="margin-top:5px">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input type="text" id="importe" name="importe" value="0" class="form-control" onfocus="this.blur()">      
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-top:5px">
                            <label>TELEFONO</label>        
                        </div>
                        <div class="col-md-3" style="margin-top:5px">
                            <div class="input-group">
                                <span class="input-group-addon">#</span>
                                <input type="text" id="telefono" name="telefono" value="" class="form-control" onkeypress="numeros()"> 
                            </div>
                        </div>
                        <div class="col-md-3" style="margin-top:5px">
                            <label>CLIENTE</label>        
                        </div>
                        <div class="col-md-3" style="margin-top:5px">
                            <input type="text" id="nombre" name="nombre" value="" class="form-control" onkeypress='letras()'>
                        </div>
                    </div><!-- fin resultados -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Agregar Accesorio</h4>
                              </div>
                              <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-5" style="margin-top:5px">
                                    <label>ACCESORIO</label>        
                                    </div>
                                    <div class="col-md-5" style="margin-top:5px">
                                        <input type="text" id="accesorios" name="accesorios" value="" class="form-control" onkeypress="letras()">
                                    </div>
                                    <div class="col-md-5" style="margin-top:5px">
                                        <label>PRECIO</label>        
                                    </div>
                                    <div class="col-md-5" style="margin-top:5px">
                                        <input type="text" id="costoacce" name="costoacce" value="" class="form-control" onkeypress="numeros()">
                                    </div>
                                    <div class="col-md-5" style="margin-top:5px">
                                        <label>CANTIDAD</label>        
                                    </div>
                                    <div class="col-md-5" style="margin-top:5px">
                                        <input type="text" id="cantidad" name="cantidad" value="" class="form-control" onkeypress="numeros()">
                                    </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button onclick="accesorios($('#accesorios').val(),$('#costoacce').val(),$('#cantidad').val());tablaprecio()" type="button" class="btn btn-info">Save</button>
                              </div>
                            </div><!-- /.modal-content -->
                          </div><!-- /.modal-dialog -->
                        </div>
                    <div class="row col-md-5">
                       <div id="tabla">
                           <table data-toggle="table" data-pagination="true" data-page-size="3">
                            <thead>
                            <tr>
                                <th class="col-xs-7" data-field="name">Accesorios</th>
                                <th class="col-xs-1" data-field="stargazers_count">Precio S/I.V.A</th>
                                <th class="col-xs-1" data-field="forks_count">Cantidad</th>
                                <th class="col-xs-2" data-field="description">Total</th>
                                <th class="col-xs-1" data-field="accion">
                                    <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                    </button>
                                </th>
                            </tr>
                            </thead>
                        </table>
                        <div class="row">
                            <div class="col-md-2">
                            <h6>Total articulos</h6>        
                            </div>
                            <div class="col-md-2" style="margin-top:5px">
                                <input type="text" id="articulos" name="articulos" value="0" class="form-control" onfocus="this.blur()"/>
                            </div>
                            <div class="col-md-1">
                                <h6>Total S/I.V.A</h6>
                            </div>
                            <div class="col-md-2" style="margin-top:5px">
                                <input type="text" id="iva" name="iva" value="0" class="form-control" onfocus="this.blur()"/>
                            </div>
                            <div class="col-md-1" style="margin-top:5px">
                                <label><h6>Costo</h6></label>        
                            </div>
                            <div class="col-md-3" style="margin-top:5px">
                                <input type="text" id="costoarti" name="costoarti" value="0" class="form-control" onfocus="this.blur()"/>
                            </div>
                        </div>
                       </div> 
                    </div>
    		</div> <!-- fin row -->
    	</div> <!-- fin 12 -->
        <div class="col-md-12">
            <div class="col-md-12"><h3><strong>PAGOS</strong></h3><hr></div>
            <div class="col-md-offset-1 col-md-6">
                <center><label for="">PRECIOS</label></center>
            <div id="tablaprecios">
                <table data-toggle="table" data-click-to-select="true" data-single-select="true">
                <thead>
                  <td>
                      <th class="col-xs-2">Tiempo</th>
                      <th class="col-xs-1">$ Vehiculo</th>
                      <th class="col-xs-1">$ Seguro</th>
                      <th class="col-xs-1">$ Accesorios</th>
                      <th class="col-md-1">Total</th>
                  </td>
                </thead>
                <tbody>
                  <tr>
                    <td>SEMANAS</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>QUINCENAS</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                  <tr>
                    <td>MESES</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                    <td>0</td>
                  </tr>
                </tbody>
            </table>
            </div>
        </div>
        <div>
            <div class="row col-md-2" id="ajaxtiempo">
              <label for="">TIEMPO</label>
              <select name="tiempo" id="tiempo" class="form-control">
                <option value="">Seleccionar</option>
              </select>
            </div>
        </div>
        <div class="col-md-2" style="margin-top:27px">
            <button type="button" onclick="abrir()" class="btn btn-info">General PDF !</button>
        </div>
    </div>
    </div> <!-- fin row 1 -->
    </div><br>
	<footer id="footer">
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
    <script src="js/altadatos.js"></script>
    <script src="js/funciones.js"></script>
    <script src="js/operaciones.js"></script>
    <script src="js/eliminar.js"></script>
    <script src="js/bootstrap-table.min.js"></script>
    <script src="js/validaciones.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>