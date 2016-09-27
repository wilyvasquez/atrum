<?php
?>
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
	<div id="toolbar" class="btn-group">
	<form action="index.php" method="post">
		<input class="btn btn-default" type="submit" value="Registro">
	</form>	
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
		$query = "select * from usuario";
    	$result = mysql_query($query);  
		 while ($registro = mysql_fetch_array($result)){ ?>
	    <tr>
	      <td><?= $registro['nombre']?></td>
	      <td><?= $registro['telefono']?></td>
	      
	      <td>
	      	<form action="tabla.php" method="post">
	      <div style="display:none">
	      		<input type="text" class="form-control" id="id" name="id" value="<?= $registro['id']?>">
	      </div>
	      		<input class="btn btn-default" type="submit" value="Eliminar">
	      	</form>
	      </td>
	      <td>
	      	<form action="actualizar.php" method="post">
	      	<div style="display:none">
	      		<input type="text" class="form-control" id="id" name="id" value="<?= $registro['id']?>">
	      	</div>
	      		<div>
	      			<input class="btn btn-default" type="submit" value="Actualizar">
	      		</div>
	      	</form>
	      </td>
	    </tr>
	    <?php } ?>
	  </tbody>
	</table>		
</div>
</div>
</body>
</html>