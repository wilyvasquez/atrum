function datoscotizador()
{ 
  var moto = document.getElementById('moto').value;
  var anio = document.getElementById('anio').value;
  var seguro = document.getElementById('seguro').value;
  var placas = document.getElementById('placas').value;
  var credito = document.getElementById('credito').value;
  var tiempo = document.getElementById('tiempo').value;

  if(moto.length >= 1 && placas.length >= 1 && credito.length >= 1) 
  {
    
    var par = 
    {
      "moto" : moto,
      "anio" : anio,
      "seguro" : seguro,
      "placas" : placas,
      "credito" : credito,
      "tiempo" : tiempo
    };
    $.ajax({
      data: par,
      url: 'php/precio_moto.php',
      type: 'post',
      beforeSend: function()
      {     
        // alert(moto);
      },
      success: function(response)
      {
        $("#precios").html(response);
      }
    });
  }else{
    if (moto.length<1) {
      alertify.error("Falta campo Moto");
    }
    if (credito.length<1) {
      alertify.error("Falta campo Credito");
    }
    if (placas.length<1) {
      alertify.error("Falta Emplacamiento");
    }   
  }
}
function resultados(porcentaje,tiempo,moto,anio,credito,placas)
{
  // alert(porcentaje);
  if(porcentaje.length >= 1 && credito.length >= 1 && moto.length >= 1 && placas.length >= 1 && tiempo >=1) 
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
    if (porcentaje.length<1) {
      alertify.error("Falta campo Tiempo");
    }
  }
}
function accesorios(accesorios,precio,cantidad,parametro,credito,tiempo)
{   
  if(accesorios.length >= 1 && precio.length >= 1 && cantidad.length >= 1) 
  {
    var par = 
    {
      "accesorios" : accesorios,
      "precio" : precio,
      "cantidad" : cantidad,
      "parametro" : parametro,
      "credito" : credito,
      "tiempo" : tiempo
    };
    $.ajax({
      data: par,
      url: 'php/accesorios.php',
      type: 'post',
      beforeSend: function()
      {       
      },
      success: function(response)
      {
        $("#tabla").html(response);
      }
    });
  }else{
    if (accesorios.length<1) {
      alertify.error("Falta campo Accesorios");
    }
    if (precio.length<1) {
      alertify.error("Falta campo Precio");
    }
    if (cantidad.length<1) {
      alertify.error("Falta campo Cantidad");
    }
  }
}
function tablaprecio()
{    
  var moto = document.getElementById('moto').value;
  var anio = document.getElementById('anio').value;
  var seguro = document.getElementById('seguro').value;
  var placas = document.getElementById('placas').value;
  var credito = document.getElementById('credito').value;
  var porcentaje = document.getElementById('porcentaje').value;
  var tiempo = document.getElementById('tiempo').value;
  var parametro = document.getElementById('parametro').value;
  // alertify.success("Faltan Campos");
  if(moto.length >= 1 && credito.length >= 1 && porcentaje.length >= 1 && placas.length >= 1) 
  {
    var par = 
    {
      "moto" : moto,
      "anio" : anio,
      "seguro" : seguro,
      "placas" : placas,
      "credito" : credito,
      "porcentaje" : porcentaje,
      "tiempo" : tiempo,
      "parametro" : parametro
    };
    $.ajax({
      data: par,
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
  }else{

  }
}
function tiempo(credito)
{    
  if(credito.length >= 1 ) 
  {
    var par = 
    {
      "credito" : credito
    };
    $.ajax({
      data: par,
      url: 'php/tiempo.php',
      type: 'post',
      beforeSend: function()
      {    
      },
      success: function(response)
      {
        $("#ajaxtiempo").html(response);
      }
    });
  }else{

  }
}
function bajas(id,parametro,credito,tiempo)
{    
    var par = 
    {
      "id" : id,
      "parametro" : parametro,
      "credito" : credito,
      "tiempo" : tiempo
    };
    $.ajax({
      data: par,
      url: 'php/accesorios.php',
      type: 'post',
      beforeSend: function()
      {    
        // alert(credito);
      },
      success: function(response)
      {
        $("#tabla").html(response);
      }
    });
}
function equipo()
{
    $.ajax({
      data: null,
      url: 'php/alta_equipo.php',
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
function persona()
{
    $.ajax({
      data: null,
      url: 'php/alta_equipo.php',
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
function extras()
{
    $.ajax({
      data: null,
      url: 'php/equipo/operaciones.php',
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
function agregar()
{
    $.ajax({
      data: null,
      url: 'php/equipo/agregar.php',
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