<div class="container">
    <div class="col-md-10" id="altaquipo">
    <div class="row">
        <div class="col-md-12">
          <h3><strong>ACTUALIZAR DATOS</strong></h3>
          <hr>
        </div>
        <div class="col-md-12"><br>
        <div><label for="">UPDATE PRECIO CREDITO</label></div>
        <hr>
            <div class="col-md-3">
                <div><label for="">CREDITO</label></div>
                <select id="credito" name="credito" class="form-control" onchange="updatecred(this.value)">
                    <?php include("../credito.php") ?> 
                </select>
            </div>
            <div id="datos">
                <div class="col-md-3">
                    <div><label for="">TASA BASE</label></div>
                    <input type="text" class="form-control" onkeypress='numeros()' id="base" name="base" placeholder="Tasa Base">
                </div>
                <div class="col-md-3">
                    <label for="">COSTO APERTURA</label>
                    <input type="text" class="form-control" onkeypress='numeros()' id="costo" name="costo" placeholder="Costo Apertura">
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="actucredito()" type="submit" style="margin-top:26px">Update</button>
            </div>
        </div>
        <div class="col-md-12"><br>
        <div><label for="">UPDATE PRECIO PLACAS</label></div>
        <hr>
            <div class="col-md-3">
                <div><label for="">PLACAS</label></div>
                <select id="placa" name="placa" class="form-control" onchange="updateplacas(this.value)">
                    <?php include("../placas.php") ?> 
                </select>
            </div>
            <div id="datos2">
                <div class="col-md-3">
                    <div><label for="">PRECIO</label></div>
                    <input type="text" class="form-control" onkeypress='numeros()' id="costo" name="costo" placeholder="Precio">
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="actuplacas()" type="submit" style="margin-top:26px">Update</button>
            </div>
        </div>
        <div class="col-md-12"><br>
        <div><label for="">UPDATE PRECIO MOTO</label></div>
        <hr>
            <div class="col-md-3">
                <div><label for="">MOTO</label></div>
                <select id="moto" name="moto" class="form-control" onchange="funciontipo(this.value)">
                    <?php include("../moto.php") ?> 
                </select>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div><label for="">AÑO</label></div>
                    <select id="anio" name="anio" class="form-control">
                        <option value="">Seleccionar</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-info" onclick="cotiprecio()" type="submit" style="margin-top:26px">Cotizar</button>
                </div>
            </div>
            <div class="col-md-3">
                <div id="precio">
                    <label for="">COSTO MOTOCICLETA</label>
                    <input type="text" class="form-control" id="costomoto" name="costomoto" value="">
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="actupreciomoto()" type="submit" style="margin-top:26px">Update</button>
            </div>
        </div>
        <div class="col-md-12"><br>
        <div><label for="">UPDATE SEGURO MOTO</label></div>
        <hr>
            <div class="col-md-3">
                <div><label for="">MOTO</label></div>
                <select id="moto" name="moto" class="form-control">
                    <?php include("../moto.php") ?> 
                </select>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div><label for="">SEGURO</label></div>
                    <select id="seguro" name="seguro" class="form-control">
                        <?php include("../extras/seguro.php") ?> 
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-info" onclick="actupreciosegu()" type="submit" style="margin-top:26px">Cotizar</button>
                </div>
            </div>
            <div class="col-md-3">
                <div id="preciose">
                    <label for="">COSTO SEGURO</label>
                    <input type="text" class="form-control" id="costoseguro" name="costoseguro" value="">
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="actusegu()" type="submit" style="margin-top:26px">Update</button>
            </div>
        </div>
    </div><br>
    </div>
</div>