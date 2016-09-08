function datoscotizador(credito,modelo,enganche,seguros,moto,plazo)
{
    var par = 
    {
      "credito" : credito,
      "modelo" : modelo,
      "enganche" : enganche,
      "seguros" : seguros,
      "moto" : moto,
      "plazo" : plazo
    };
    $.ajax({
      data: par,
      url: 'php/operaciones.php',
      type: 'post',
      beforeSend: function()
      {
        // $("#resultado").html("procesando");
      },
      success: function(response)
      {
        $("#resultado").html(response);
      }
    });
}
function datostabla(credito,modelo,enganche,seguros,moto)
{
    var par = 
    {
      "credito" : credito,
      "modelo" : modelo,
      "enganche" : enganche,
      "seguros" : seguros,
      "moto" : moto
    };
    
    $.ajax({
      data: par,
      url: 'php/tablaope.php',
      type: 'post',
      beforeSend: function()
      {
        // $("#resultado").html("procesando");
      },
      success: function(response)
      {
        $("#tabla").html(response);
      }
    });
}
function tabla(tiempo,credito,modelo,enganche,seguros,moto)
{
    var par = 
    {
      "tiempo" : tiempo,
      "credito" : credito,
      "modelo" : modelo,
      "enganche" : enganche,
      "seguros" : seguros,
      "moto" : moto
    };
    
    $.ajax({
      data: par,
      url: 'php/tabla.php',
      type: 'post',
      beforeSend: function()
      {
        // $("#resultado").html("procesando");
      },
      success: function(response)
      {
        $("#tablatiempo").html(response);
        alert("Agregado Correctamente !");
      }
    });
}