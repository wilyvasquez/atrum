<div class="container">
    <div class="col-md-10" id="altaquipo">
    <div class="row">
        <div class="col-md-12">
          <h3><strong>ACTUALIZAR CREDITO</strong></h3>
          <hr>
        </div>
        <div class="col-md-12">
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
                <button class="btn btn-info" onclick="actucredito()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12">
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
                    <button class="btn btn-info" onclick="actuplacas()" type="submit" style="margin-top:26px">Enviar</button>
                </div>
        </div>
    </div><br>
    </div>
</div>