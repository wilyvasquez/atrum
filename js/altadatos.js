function insertarcredito()
{
  var credito = document.getElementById('credito').value;
  var base = document.getElementById('base').value;
  var apertura = document.getElementById('apertura').value;
    var par = 
    {
      "credito" : credito,
      "base" : base,
      "apertura" : apertura
    };
    $.ajax({
      data: par,
      url: 'php/equipo/insertar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function insertaranios()
{
  var anios = document.getElementById('anios').value;
  var meses = document.getElementById('meses').value;
    var par = 
    {
      "anios" : anios,
      "meses" : meses
    };
    $.ajax({
      data: par,
      url: 'php/equipo/insertar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function insertarseguro()
{
  var seguro = document.getElementById('seguro').value;
    var par = 
    {
      "seguro" : seguro
    };
    $.ajax({
      data: par,
      url: 'php/equipo/insertar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function insertarenganche()
{
  var enganche = document.getElementById('enganche').value;
    var par = 
    {
      "enganche" : enganche
    };
    $.ajax({
      data: par,
      url: 'php/equipo/insertar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function insertaranio()
{
  var anio = document.getElementById('anio').value;
    var par = 
    {
      "anio" : anio
    };
    $.ajax({
      data: par,
      url: 'php/equipo/insertar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function insertarplacas()
{
  var placas = document.getElementById('placas').value;
  var precio = document.getElementById('precio').value;
    var par = 
    {
      "placas" : placas,
      "precio" : precio
    };
    $.ajax({
      data: par,
      url: 'php/equipo/insertar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function insertartiempo()
{
  var tiempo = document.getElementById('tiempo').value;
    var par = 
    {
      "tiempo" : tiempo
    };
    $.ajax({
      data: par,
      url: 'php/equipo/insertar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function unionmoto()
{
  var moto = document.getElementById('moto').value;
  var anio = document.getElementById('anio').value;
  var costo = document.getElementById('costo').value;
    var par = 
    {
      "moto" : moto,
      "anio" : anio,
      "costo" : costo
    };
    $.ajax({
      data: par,
      url: 'php/equipo/union.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function unionmotosegu()
{
  var tipo = document.getElementById('tipo').value;
  var seguro = document.getElementById('seguro').value;
  var cosegu = document.getElementById('cosegu').value;
    var par = 
    {
      "tipo" : tipo,
      "seguro" : seguro,
      "cosegu" : cosegu
    };
    $.ajax({
      data: par,
      url: 'php/equipo/union.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function unioncrese()
{
  var credito = document.getElementById('credito').value;
  var seguro2 = document.getElementById('seguro2').value;
    var par = 
    {
      "credito" : credito,
      "seguro2" : seguro2
    };
    $.ajax({
      data: par,
      url: 'php/equipo/union.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function unioncretiem()
{
  var credito2 = document.getElementById('credito2').value;
  var tiempo = document.getElementById('tiempo').value;
    var par = 
    {
      "credito2" : credito2,
      "tiempo" : tiempo
    };
    $.ajax({
      data: par,
      url: 'php/equipo/union.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function unioncreenga()
{
  var credito3 = document.getElementById('credito3').value;
  var enganche = document.getElementById('enganche').value;
    var par = 
    {
      "credito3" : credito3,
      "enganche" : enganche
    };
    $.ajax({
      data: par,
      url: 'php/equipo/union.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function unioncreanios()
{
  var credi = document.getElementById('credi').value;
  var lapso = document.getElementById('lapso').value;
    var par = 
    {
      "credi" : credi,
      "lapso" : lapso
    };
    $.ajax({
      data: par,
      url: 'php/equipo/union.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
      }
    });
}
function actualizar()
{
    $.ajax({
      data: null,
      url: 'php/equipo/actualizar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        $("#alta_personal").html(response);
      }
    });
}
function actu_equipo()
{
    $.ajax({
      data: null,
      url: 'php/equipo/actu_equipo.php',
      type: 'post',
      beforeSend: function()
      {

      },
      success: function(response)
      {
        $("#alta_personal").html(response);
      }
    });
}
function actucredito()
{
    var credito = document.getElementById('credito').value;
    var base = document.getElementById('base').value;
    var costo = document.getElementById('costo').value;
    var par = 
    {
      "credito" : credito,
      "base" : base,
      "costo" : costo
    };
    $.ajax({
      data: par,
      url: 'php/equipo/update.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Actualizado Correctamente");
      }
    });
}
function actuplacas()
{
    var placa = document.getElementById('placa').value;
    var costoape = document.getElementById('costoape').value;
    var par = 
    {
      "placa" : placa,
      "costoape" : costoape
    };
    $.ajax({
      data: par,
      url: 'php/equipo/update.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Actualizado Correctamente");
      }
    });
}
function actuequipo()
{
    var moto = document.getElementById('moto').value;
    var modelo = document.getElementById('modelo').value;
    var motor = document.getElementById('motor').value;
    var trasmision = document.getElementById('trasmision').value;
    var timo = document.getElementById('timo').value;
    var cilindros = document.getElementById('cilindros').value;
    var diametro = document.getElementById('diametro').value;
    var carrera = document.getElementById('carrera').value;
    var desplazamiento = document.getElementById('desplazamiento').value;
    var compresion = document.getElementById('compresion').value;
    var lubricacion = document.getElementById('lubricacion').value;
    var combustible = document.getElementById('combustible').value;
    var arranque = document.getElementById('arranque').value;
    var imagen = document.getElementById('imagen').value;
    var par = 
    {
      "moto" : moto,
      "modelo" : modelo,
      "motor" : motor,
      "trasmision" : trasmision,
      "timo" : timo,
      "cilindros" : cilindros,
      "diametro" : diametro,
      "carrera" : carrera,
      "desplazamiento" : desplazamiento,
      "compresion" : compresion,
      "lubricacion" : lubricacion,
      "combustible" : combustible,
      "arranque" : arranque,
      "imagen" : imagen
    };
    $.ajax({
      data: par,
      url: 'php/equipo/update.php',
      type: 'post',
      beforeSend: function()
      {
        
      },
      success: function(response)
      {
        alertify.success("Actualizado Correctamente");
        $("#alta_personal").html(response);
      }
    });
}
function cotiprecio()
{
    var moto = document.getElementById('moto').value;
    var anio = document.getElementById('anio').value;
    var par = 
    {
      "moto" : moto,
      "anio" : anio
    };
    $.ajax({
      data: par,
      url: 'php/extras/precio_moto.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        $("#precio").html(response);
      }
    });
}
function actupreciomoto()
{
    var costomoto = document.getElementById('costomoto').value;
    var idprecio = document.getElementById('idprecio').value;
    var par = 
    {
      "costomoto" : costomoto,
      "idprecio" : idprecio
    };
    $.ajax({
      data: par,
      url: 'php/equipo/update.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Actualizado Correctamente");
      }
    });
}
function actupreciosegu()
{
    var idmoto = document.getElementById('moto').value;
    var idseguro = document.getElementById('seguro').value;
    var par = 
    {
      "idmoto" : idmoto,
      "idseguro" : idseguro
    };
    $.ajax({
      data: par,
      url: 'php/extras/seguro_moto.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        $("#preciose").html(response);
      }
    });
}
function actusegu()
{
    var costoseguro = document.getElementById('costoseguro').value;
    var idprecio = document.getElementById('idprecio').value;
    var par = 
    {
      "costoseguro" : costoseguro,
      "idprecio" : idprecio
    };
    $.ajax({
      data: par,
      url: 'php/equipo/update.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Actualizado Correctamente");
      }
    });
}
function eliminar()
{
    $.ajax({
      data: null,
      url: 'php/extras/eliminar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        $("#alta_personal").html(response);
      }
    });
}
function contador()
{
    $.ajax({
      data: null,
      url: 'php/contador.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        // $("#alta_personal").html(response);
      }
    });
}
function abrir()
{
  var nombre = document.getElementById('nombre').value;
  var telefono = document.getElementById('telefono').value;
  var moto = document.getElementById('moto').value;
alert(moto);
if (window.fecha && nombre.length>=1 && telefono.length>=1&&moto!=0) {
    var nombre = document.getElementById('nombre').value;
    var telefono = document.getElementById('telefono').value;
    var fecha = document.getElementById('fecha').value;
    var credito = document.getElementById('credito').value;
    var moto = document.getElementById('moto').value;
    var financiamiento = document.getElementById('financiamiento').value;
    var seguro = document.getElementById('seguro').value;
    var tiempo = document.getElementById('tiempo').value;
    var anio = document.getElementById('anio').value;
    var engancheresul = document.getElementById('engancheresul').value;
    var enganche = document.getElementById('porcentaje').value;
    var suma = document.getElementById('suma').value;
    var final = document.getElementById('final').value;
    var articulos = document.getElementById('articulos').value;
    var parametro = document.getElementById('parametro').value;
    var plazo = document.getElementById('plazo').value;
    var placas = document.getElementById('costoempla').value;

    opciones = "toolbar=yes,scrollbars=yes,resizable=yes,_target"
    window.open("pdf.php?nombre="+nombre+
                  "&telefono="+telefono+
                  "&fecha="+fecha+
                  "&credito="+credito+
                  "&moto="+moto+
                  "&financiamiento="+financiamiento+
                  "&seguro="+seguro+
                  "&tiempo="+tiempo+
                  "&anio="+anio+
                  "&engancheresul="+engancheresul+
                  "&enganche="+enganche+
                  "&suma="+suma+
                  "&final="+final+
                  "&placas="+placas+
                  "&articulos="+articulos+
                  "&parametro="+parametro+
                  "&plazo="+plazo
                  ,opciones);
}else{
      if (fecha==null) {alertify.error("Faltan Campos");}
    }
}

function prueba()
{
    $.ajax({
      data: null,
      url: 'php/tabla_precios.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        $("#tablaprecios").html(response);
      }
    });
}
