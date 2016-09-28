<div class="container">
    <div class="col-md-10" id="altaquipo">
    <div class="row">
        <div class="col-md-12">
          <h3><strong>ALTA CREDITO</strong></h3>
          <hr>
        </div>
        <div class="col-md-12">
            <div class="col-md-3">
                <label for="">Nombre Credito</label>
                <input type="text" id="credito" onkeypress='letras()' name="credito" class="form-control" placeholder="Nombre Credito"/>
            </div>
            <div class="col-md-3">
              <label for="">Tasa Base</label>
              <input type="text" id="base" name="base" class="form-control" placeholder="Tasa Base"/>
            </div>
            <div class="col-md-3">
                <label for="">Costo Apertura</label>
                <input type="text" class="form-control" onkeypress='numeros()' id="apertura" name="apertura" placeholder="Costo Apertura">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="insertarcredito()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12">
            <h3><strong>ALTA AÑOS</strong></h3>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="col-md-4">
                <label for="">Años</label>
                <input type="text" class="form-control" id="anios" name="anios" placeholder="Años">
            </div>
            <div class="col-md-4">
                <label for="">Meses</label>
                <input type="text" class="form-control" onkeypress='numeros()' id="meses" name="meses" placeholder="Meses">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="insertaranios()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12">
            <h3><strong>ALTA SEGURO</strong></h3>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="col-md-4">
                <label for="">Tipo Seguro</label>
                <input type="text" class="form-control" onkeypress='letras()' id="seguro" name="seguro" placeholder="Tipo Seguros">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="insertarseguro()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12"><h3><strong>ALTA ENGANCHE</strong></h3><hr></div>
        <div class="col-md-12">
            <div class="col-md-4">
                <label for="">Enganche</label>
                <input type="text" class="form-control" onkeypress='numeros()' id="enganche" name="enganche" placeholder="Enganche">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="insertarenganche()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12"><h3><strong>ALTA AÑO MOTO</strong></h3><hr></div>
        <div class="col-md-12">
            <div class="col-md-4">
                <label for="">Año Moto</label>
                <input type="text" class="form-control" id="anio" name="anio" placeholder="Año Moto">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onkeypress='letranumero()' onclick="insertaranio()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12"><h3><strong>ALTA PLACAS</strong></h3><hr></div>
        <div class="col-md-12">
            <div class="col-md-4">
                <label for="">Lugar Placas</label>
                <input type="text" class="form-control" onkeypress='letras()' id="placas" name="placas" placeholder="Lugar Placas">
            </div>
            <div class="col-md-4">
                <label for="">Precio</label>
                <input type="text" class="form-control" id="precio" name="precio" placeholder="Precio">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="insertarplacas()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
        <div class="col-md-12"><h3><strong>ALTA TIEMPO CREDITO</strong></h3><hr></div>
        <div class="col-md-12">
            <div class="col-md-4">
                <label for="">Tiempo Credito </label>
                <input type="text" class="form-control" onkeypress='letras()' id="tiempo" name="tiempo" placeholder="Tiempo Credito">
            </div>
            <div class="col-md-2">
                <button class="btn btn-info" onclick="insertartiempo()" type="submit" style="margin-top:26px">Enviar</button>
            </div>
        </div>
    </div><br>
    </div>
</div>