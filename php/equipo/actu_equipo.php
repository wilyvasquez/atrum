<div class="container">
	<div class="col-md-10" id="altaquipo">
	<div class="row">
        <div class="col-md-12">
          <h3><strong>ALTA EQUIPO</strong></h3>
          <hr>
        </div>
        <div class="col-md-12">
            <div class="col-md-3">
                <div><label for="">CREDITO</label></div>
                <select id="moto" name="moto" class="form-control" onchange="updatequipo(this.value)">
                    <?php include("../moto.php") ?> 
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div id="equipo">
                <div class="col-md-4">
                    <label for="">Modelo</label>
                    <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo" required/>
                </div>
                <!-- <div class="col-md-4">
                  <label for="">TIPO</label>
                  <input type="text" id="tipo" name="tipo" class="form-control" placeholder="Modelo" required/>
                </div> -->
                <div class="col-md-4">
                    <label for="">Motor</label>
                    <input type="text" class="form-control" id="motor" name="motor" placeholder="Motor">
                </div>
                <div class="col-md-4">
                    <label for="">Transmision</label>
                    <input type="text" class="form-control" id="trasmision" name="trasmision" placeholder="Transmision">
                </div>
                <div class="col-md-4">
                    <label for="">Tipo motor</label>
                    <input type="text" class="form-control" id="timo" name="timo" placeholder="Tipo motor">
                </div>
                <div class="col-md-4">
                    <label for="">Numero cilindros</label>
                    <input type="text" class="form-control" id="cilindros" name="cilindros" placeholder="Numero cilindros">
                </div>
                <div class="col-md-4">
                    <label for="">Diametro</label>
                    <input type="text" class="form-control" id="diametro" name="diametro" placeholder="Diametro">
                </div>
                <div class="col-md-4">
                    <label for="">Carrera</label>
                    <input type="text" class="form-control" id="carrera" name="carrera" placeholder="Carrera">
                </div>
                <div class="col-md-4">
                    <label for="">Desplazamiento</label>
                    <input type="text" class="form-control" id="desplazamiento" name="desplazamiento" placeholder="desplazamiento">
                </div>
                <div class="col-md-4">
                    <label for="">Relacion Compresion</label>
                    <input type="text" class="form-control" id="compresion" name="compresion" placeholder="Compresion">
                </div>
                <div class="col-md-4">
                    <label for="">Sistema de Lubricacion</label>
                    <input type="text" class="form-control" id="lubricacion" name="lubricacion" placeholder="Sistema lubricacion">
                </div>
                <div class="col-md-4">
                    <label for="">Sistema Combustible</label>
                    <input type="text" class="form-control" id="combustible" name="combustible" placeholder="Sistema Combustible">
                </div>
                <div class="col-md-4">
                    <label for="">Sistema Arranque</label>
                    <input type="text" class="form-control" id="arranque" name="arranque" placeholder="Sistema Arranque">
                </div>
                <div class="col-md-4">
                    <label for="">Subir foto</label>
                    <input type="file" class="form-control" id="imagen" name="imagen">
                </div>
            </div>        
            <div class="col-md-4" style="margin-top:25px">
               <button class="btn btn-info" onclick="actuequipo()" type="submit">Actualizar Equipo !</button>
            </div>
        </div>
    </div><br>
	</div>
</div>