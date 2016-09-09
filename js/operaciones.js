function datoscotizador(credito,modelo,enganche,seguros,moto,plazo)
{

  if(credito.length > 1) {
    
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
  }else{
    if (credito.length<1) {
      alertify.error("Falta campo Credito");
      // alert('falta campo credito');
    }
    if (modelo.length<1) {
      alertify.error("Falta campo Modelo");
      // alert('falta campo credito');
    }
  }
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
function foto(moto)
{
    var par = 
    {
      "moto" : moto
    };
    $.ajax({
      data: par,
      url: 'php/id_moto.php',
      type: 'post',
      beforeSend: function()
      {
        // $("#resultado").html("procesando");
      },
      success: function(response)
      {
        $("#foto").html(response);
      }
    });
}