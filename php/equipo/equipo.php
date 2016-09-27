<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.css">
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.0/bootstrap-table.min.js"></script>
</head>
<body>
<div class="row">
<div class="col-md-offset-2 col-md-8"><br>
<!-- <P ALIGN=center>TABLA CON TODOS LOS DATOS</P> -->
	<div id="toolbar" class="btn-group">
	<!-- <form action="index.php" method="post"> -->
		<input class="btn btn-default" type="submit" onclick="persona()" value="Registro">
	<!-- </form>	 -->
	</div>
	<table data-toggle="table" 
	data-pagination="true"
	data-search="true" 
	data-page-size="5" 
	data-pagination="true"
	data-toolbar="#toolbar">
	  <thead>
	    <tr>
	      <th>TIPO MOTO</th>
	      <th>MODELO</th>
	      <th>ELIMINAR</th>
	      <th>ACTUALIZAR</th>
	    </tr>
	  </thead>
	  <tbody>
	  <?php
	  	include ("../conexion.php");
		$query = "select * from moto";
    	$result = mysql_query($query);  
		 while ($registro = mysql_fetch_array($result)){ ?>
	    <tr>
	      <td><?= $registro['tipo_moto']?></td>
	      <td><?= $registro['modelo']?></td>
	      <td>
	      	<button class="btn btn-default" onclick="eliminar()" type="submit" value="<?= $registro['id_moto']?>">Eliminar</button>
	      </td>
	      <td>
	      	<button class="btn btn-default" onclick="actualizar()" type="submit" value="<?= $registro['id_moto']?>">Actualizar</button>
	      </td>
	    </tr>
	    <?php } ?>
	  </tbody>
	</table>		
</div>
</div>
</body>
</html>