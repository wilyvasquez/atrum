function datoscotizador(moto,anio,seguro,placas,credito)
{

  if(moto.length >= 1 ) 
  {
    
    var par = 
    {
      "moto" : moto,
      "anio" : anio,
      "seguro" : seguro,
      "placas" : placas,
      "credito" : credito
    };
    $.ajax({
      data: par,
      url: 'php/precio_moto.php',
      type: 'post',
      beforeSend: function()
      {       
      },
      success: function(response)
      {
        $("#precios").html(response);
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
function resultados(porcentaje,tiempo,moto,anio,credito)
{

  if(porcentaje.length >= 1 ) 
  {
    
    var par = 
    {
      "porcentaje" : porcentaje,
      "tiempo" : tiempo,
      "moto" : moto,
      "anio" : anio,
      "credito" : credito
    };
    $.ajax({
      data: par,
      url: 'php/resultados.php',
      type: 'post',
      beforeSend: function()
      {       
      },
      success: function(response)
      {
        $("#resultados").html(response);
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