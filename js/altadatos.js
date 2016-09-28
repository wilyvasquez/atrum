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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        alert(credito2);
        alert(tiempo);
      },
      success: function(response)
      {
        alertify.success("Insertado Correctamente");
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
        // $("#alta_personal").html(response);
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
      "arranque" : arranque
    };
    $.ajax({
      data: par,
      url: 'php/equipo/update.php',
      type: 'post',
      beforeSend: function()
      {
        alert(moto);
      },
      success: function(response)
      {
        alertify.success("Actualizado Correctamente");
        $("#alta_personal").html(response);
      }
    });
}