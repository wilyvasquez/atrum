function eliminarcredito()
{
  var idcredito = document.getElementById('idcredito').value;
  var par = 
    {
      "idcredito" : idcredito
    };
    $.ajax({
      data: par,
      url: 'php/equipo/eliminar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Borrado Correctamente");
        // $("#alta_personal").html(response);
      }
    });
}
function eliminarcresegu()
{
  var idcredito = document.getElementById('idcredito').value;
  var seguro = document.getElementById('seguro').value;
  var par = 
    {
      "credito" : idcredito,
      "seguro" : seguro
    };
    $.ajax({
      data: par,
      url: 'php/equipo/eliminar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Borrado Correctamente");
        // $("#alta_personal").html(response);
      }
    });
}
function eliminarcreanio()
{
  var idcredito = document.getElementById('idcredito').value;
  var tiempo = document.getElementById('tiempo').value;
  var par = 
    {
      "credito" : idcredito,
      "tiempo" : tiempo
    };
    $.ajax({
      data: par,
      url: 'php/equipo/eliminar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Borrado Correctamente");
        // $("#alta_personal").html(response);
      }
    });
}
function eliminarcreenga()
{
  var idcredito = document.getElementById('idcredito').value;
  var porcentaje = document.getElementById('porcentaje').value;
  var par = 
    {
      "creditos" : idcredito,
      "porcentaje" : porcentaje
    };
    $.ajax({
      data: par,
      url: 'php/equipo/eliminar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Borrado Correctamente");
        // $("#alta_personal").html(response);
      }
    });
}
function eliminartiempo()
{
  var credit = document.getElementById('idcredito').value;
  var plazo = document.getElementById('plazo').value;
  var par = 
    {
      "credit" : credit,
      "plazo" : plazo
    };
    $.ajax({
      data: par,
      url: 'php/equipo/eliminar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Borrado Correctamente");
        // $("#alta_personal").html(response);
      }
    });
}
function eliminarplaca()
{
  var placa = document.getElementById('placa').value;
  var par = 
    {
      "placa" : placa
    };
    $.ajax({
      data: par,
      url: 'php/equipo/eliminar.php',
      type: 'post',
      beforeSend: function()
      {
      },
      success: function(response)
      {
        alertify.success("Borrado Correctamente");
        // $("#alta_personal").html(response);
      }
    });
}