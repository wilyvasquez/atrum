function datoscotizador(credito,modelo,enganche,seguros,moto,plazo)
{

  if(credito.length >= 1 && modelo.length >= 1 && enganche.length >= 1 && seguros.length >= 1 && moto.length >= 1 && plazo.length >= 1) 
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
      },
      success: function(response)
      {
        $("#resultado").html(response);
      }
    });
  }else{
    if (credito.length<1) {
      alertify.error("Falta campo Credito");
    }
    if (modelo.length<1) {
      alertify.error("Falta campo Modelo");
    }
    if (enganche.length<1) {
      alertify.error("Falta campo Enganche");
    }
    if (seguros.length<1) {
      alertify.error("Falta Tipo de Seguros");
    }
    if (moto.length<1) {
      alertify.error("Falta Tipo de Moto");
    }
    if (plazo.length<1) {
      alertify.error("Falta campo Plazo");
    }
  }
}
function datostabla(credito,modelo,enganche,seguros,moto)
{
  if(credito.length >= 1 && modelo.length >= 1 && enganche.length >= 1 && seguros.length >= 1 && moto.length >= 1) 
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
      },
      success: function(response)
      {
        $("#tabla").html(response);
      }
    });}else{
    if (credito.length<1) {}
    if (modelo.length<1) {}
    if (enganche.length<1) {}
    if (seguros.length<1) {}
    if (moto.length<1) {}
    if (plazo.length<1) {}
  }
}
function tabla(tiempo,credito,modelo,enganche,seguros,moto)
{   
  if(tiempo.length >= 1 && credito.length >= 1 && modelo.length >= 1 && enganche.length >= 1 && seguros.length >= 1 && moto.length >= 1) 
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
      },
      success: function(response)
      {
        $("#tablatiempo").html(response);
        alertify.success("Agregado con Exito");
      }
    });}else{
    if (credito.length<1) {}
    if (modelo.length<1) {}
    if (enganche.length<1) {}
    if (seguros.length<1) {}
    if (moto.length<1) {}
    if (tiempo.length<1) 
      {
        alertify.error("Error ! Sin datos");
      }
  }
}
function foto(moto)
{
  if(moto.length >= 1 ) 
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
      },
      success: function(response)
      {
        $("#foto").html(response);
      }
    });}else{
    if (foto.length<1) {}
  }
}