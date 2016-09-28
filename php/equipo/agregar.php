<div class="container">
    <div class="col-md-10" id="altaquipo">
    <div class="row">
        <div class="col-md-12">
          <h3><strong>MOTO PRECIO</strong></h3>
          <hr>
        </div>
        <div class="col-md-12">
            <div class="col-md-3">
                <div><label for="">MOTO</label></div>
                <select id="moto" name="moto" class="form-control">
                    <?php include("../moto.php") ?>
                </select>
            </div>
            <div class="col-md-3">
                <div><label for="">AÑO MOTO</label></div>
                <select id="anio" name="anio" class="form-control">
                    <?php include("../extras/anio_moto.php") ?>
                </select>
            </div>
            <div class="col-md-3">
                <label for="">Costo Motocicleta</label>
                <input type="text" class="form-control" onkeypress='numeros()' id="costo" name="costo" placeholder="Costo Apertura">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="insertarcredito()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12">
            <h3><strong>MOTO Y SEGURO</strong></h3>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="col-md-3">
                <div><label for="">TIPO MOTO</label></div>
                <select id="tipo" name="tipo" class="form-control">
                  <?php include("../moto.php") ?>
                </select>
            </div>
            <div class="col-md-3">
                <div><label for="">SEGURO</label></div>
                <select id="seguro" name="seguro" class="form-control">
                    <?php include("../extras/seguro.php") ?>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="insertaranios()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12">
            <h3><strong>CREDITO SEGURO</strong></h3>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="col-md-3">
                <div><label for="">CREDITO</label></div>
                <select id="credito" name="credito" class="form-control">
                  <?php include("../credito.php") ?>
                </select>
            </div>
            <div class="col-md-3">
                <div><label for="">SEGURO</label></div>
                <select id="seguro2" name="seguro2" class="form-control">
                  <?php include("../extras/seguro.php") ?>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="insertarseguro()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12"><h3><strong>TIEMPO CREDITO</strong></h3><hr></div>
        <div class="col-md-12">
            <div class="col-md-3">
                <div><label for="">CREDITO</label></div>
                <select id="credito2" name="credito2" class="form-control">
                  <?php include("../credito.php") ?>
                </select>
            </div>
            <div class="col-md-3">
                <div><label for="">TIEMPO</label></div>
                <select id="tiempo" name="tiempo" class="form-control">
                  <?php include("../extras/anio.php") ?>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="insertarenganche()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12"><h3><strong>CREDITO ENGANCHE</strong></h3><hr></div>
        <div class="col-md-12">
            <div class="col-md-3">
                <div><label for="">CREDITO</label></div>
                <select id="credito3" name="credito3" class="form-control">
                  <?php include("../credito.php") ?>
                </select>
            </div>
            <div class="col-md-3">
                <div><label for="">ENGANCHE</label></div>
                <select id="enganche" name="enganche" class="form-control">
                  <?php include("../extras/enganche.php") ?>
                </select>
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onkeypress='letranumero()' onclick="insertaranio()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
    </div><br>
    </div>
</div>