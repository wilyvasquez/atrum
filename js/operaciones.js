function datoscotizador(credito,modelo,enganche,seguros,moto,plazo)
{

  if(credito.length >= 1 && modelo.length >= 1&& enganche>= 1) 
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
    // if (seguros.length<1) {
    //   alertify.error("Falta Tipo de Seguros");
    // }
    // if (moto.length<1) {
    //   alertify.error("Falta Tipo de Moto");
    // }
    // if (plazo.length<1) {
    //   alertify.error("Falta campo Plazo");
    // }
  }
}
function datostabla(credito,modelo,enganche,seguros,moto,plazo)
{
  if(credito.length >= 1 && modelo.length >= 1 && enganche.length >= 1) 
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
      url: 'php/tablaope.php',
      type: 'post',
      beforeSend: function()
      {
        // alert(plazo);
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
function tabla(tiempo,credito,modelo,enganche,seguros,moto,plazo)
{   
  if(tiempo.length >= 1 && credito.length >= 1 && modelo.length >= 1 && enganche.length >= 1) 
  {
    var par = 
    {
      "tiempo" : tiempo,
      "credito" : credito,
      "modelo" : modelo,
      "enganche" : enganche,
      "seguros" : seguros,
      "moto" : moto,
      "plazo" : plazo
    };
    
    $.ajax({
      data: par,
      url: 'php/tabla.php',
      type: 'post',
      beforeSend: function()
      {
        // alert(plazo);
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

function equipo()
{
    $.ajax({
      data: null,
      url: 'php/alta_equipo',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        $("#alta_equipo").html(response);
      }
    });
}
function personal()
{
    $.ajax({
      data: null,
      url: 'php/alta_personal.php',
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
function credito()
{
    $.ajax({
      data: null,
      url: 'php/alta_credito.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        $("#alta_credito").html(response);
      }
    });
}
function seguros()
{
     $.ajax({
      data: null,
      url: 'php/seguro_credito.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        $("#seguro_credito").html(response);
      }
    });
}