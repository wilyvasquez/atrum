<div class="container">
    <div class="col-md-10" id="altaquipo">
    <div class="row">
        <div class="col-md-12">
          <h3><strong>ELIMINAR DATOS</strong></h3>
          <hr>
        </div>
        <div class="col-md-12">
        <div><label for="">ELIMINAR EQUIPO CREDITO</label></div>
        <hr>
            <div class="col-md-12">
                <div class="col-md-3"><label for="">MOTOCICLETA</label></div>
                <div class="col-md-4">
                    <select id="" name="" class="form-control" onchange="funciontipo(this.value)">
                        <?php include("../moto.php") ?> 
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-info" onclick="eliminarmoto()" type="submit">Eliminar</button>
                </div>
            </div>
            <div id="datos">
                <div class="col-md-12"><br>
                    <div class="col-md-3"><label for="">AÑO</label></div>
                    <div class="col-md-4">
                        <select id="anio" name="anio" class="form-control">
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-info" onclick="" type="submit">Eliminar</button>
                    </div>
                </div>
                <div class="col-md-12"><br>
                    <div class="col-md-3"><label for="">SEGURO</label></div>
                    <div class="col-md-4">
                        <select id="seguro1" name="seguro1" class="form-control">
                            <?php include("seguro.php") ?> 
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-info" onclick="" type="submit">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12"><br>
        <hr>
            <div class="col-md-12">
                <div class="col-md-3"><label for="">CREDITO</label></div>
                <div class="col-md-4">
                    <select id="idcredito" name="idcredito" class="form-control" onchange="funcionseguro(this.value);funciontiempo(this.value);funcionenganche(this.value);funtionanio(this.value)">
                        <?php include("../credito.php") ?> 
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-info" onclick="eliminarcredito()" type="submit">Eliminar</button>
                </div>
            </div>
            <div id="datos">
                <div class="col-md-12"><br>
                    <div class="col-md-3"><label for="">SEGURO</label></div>
                    <div class="col-md-4">
                        <select id="seguro" name="seguro" class="form-control">
                        <option value="">Seleccionar</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-info" onclick="eliminarcresegu()" type="submit">Eliminar</button>
                    </div>
                </div>
                <div class="col-md-12"><br>
                    <div class="col-md-3"><label for="">AÑOS</label></div>
                    <div class="col-md-4">
                        <select id="tiempo" name="tiempo" class="form-control">
                        <option value="">Seleccionar</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-info" onclick="eliminarcreanio()" type="submit">Eliminar</button>
                    </div>
                </div>
                <div class="col-md-12"><br>
                    <div class="col-md-3"><label for="">ENGANCHE</label></div>
                    <div class="col-md-4">
                        <select id="porcentaje" name="porcentaje" class="form-control">
                        <option value="">Seleccionar</option>
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-info" onclick="eliminarcreenga()" type="submit">Eliminar</button>
                    </div>
                </div>
                <div class="col-md-12"><br>
                    <div class="col-md-3"><label for="">TIEMPO</label></div>
                    <div class="col-md-4">
                        <select id="plazo" name="plazo" class="form-control">
                        <option value="">Seleccionar</option> 
                        </select>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-info" onclick="eliminartiempo()" type="submit">Eliminar</button>
                    </div>
                </div>
            </div>
        </div>
    </div><br>
    </div>
</div>