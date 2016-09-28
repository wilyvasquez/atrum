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