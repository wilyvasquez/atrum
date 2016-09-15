<div class="container">
	<div class="col-md-10" id="altacredito">
	<div class="row">
        <div class="col-md-12">
          <h3><strong>CREDITO</strong></h3>
          <hr>
        </div>
        <form action="php/registro.php" method="POST"> 
            <div class="col-md-4">
            <label for="">Tipo Credito</label>
            <input type="text" id="credito" name="credito" class="form-control" placeholder="Username" required/>
            </div>
            <div class="col-md-4">
                <label for="">tasa base</label>
                <input type="text" id="base" name="base" class="form-control" placeholder="Username" required/>
            </div>
            <div class="col-md-4">
                <label for="">Costo Apertura</label>
                <input type="text" id="apertura" name="apertura" class="form-control" placeholder="Username" required/>
            </div>
            <div class="col-md-4">
                <label for="">Descuento por Apertura</label>
                <input type="text" id="descuento" name="descuento" class="form-control" placeholder="Username" required/>
            </div>
            <!-- <div class="col-md-4">
                <label for="">Tiempo</label>
                <input type="text" class="form-control" placeholder="Username">
            </div> -->
           <!--  <div class="col-md-4">
                <label for="">Años</label>
                <input type="text" id="anios" name="anios" class="form-control" placeholder="Username">
            </div>  -->
    	<button class="btn btn-info" type="submit" style="margin-top:25px">Subir Personal !</button>
        </form>      
    </div><br>
        <div class="row col-md-12">
            <button class="btn btn-success" type="submit">Actualizar Articulo !</button>
            <button class="btn btn-danger" type="submit">Cancelar !</button>
        </div>
</div>
</div><br>