function pasar()
{
  var estados = document.getElementById('estados').value;
  // var sicipo = document.getElementById('sicipo').value;
  // var rfsi = document.getElementById('rfsi').value;
  // var factura = document.getElementById('factura').value;
  // if(estados!="" && sicipo!="" && rfsi!="" && factura!="")
  // {
      var par = 
    {
      'estados' : document.getElementById('estados').value,
      // 'sicipo' : document.getElementById('sicipo').value,
      // 'rfsi' : document.getElementById('rfsi').value,
      // 'tipoequipo' : document.getElementById('tipoequipo').value,
      // 'tipotecla' : document.getElementById('tipotecla').value,
      // 'marca' : document.getElementById('marca').value,
      // 'modelo' : document.getElementById('modelo').value,
      // 'fecha' : document.getElementById('fecha').value,
      // 'factura' : document.getElementById('factura').value,
      // 'recurso' : document.getElementById('recurso').value,
    };
    $.ajax({
      data: par,
      url: 'http://localhost/atrum/cotizador.php',
      type: 'post',
      beforeSend: function()
      {
      // sweetAlert("Oops...","error al guardar datos");
      },
      success: function(response)
      {
        // $.get("radios/"+'tablaequipo', function(htmlexterno){
        // $("#cargaexterna").html(htmlexterno);
        // });
      }
    });
  // }
  // else
  // {
  //   if(serie=="")
  //   {
  //   document.getElementById("serie").style.borderColor= '#E46262';
  //   }
  //   if (serie!="") {document.getElementById("serie").style.borderColor= '#DBD4D4';}
  //   else(sicipo=="")
  //   {
  //   document.getElementById("sicipo").style.borderColor= '#E46262';
  //   }
  //   if (sicipo!="") {document.getElementById("sicipo").style.borderColor= '#DBD4D4';}
  //   if(rfsi=="")
  //   {
  //   document.getElementById("rfsi").style.borderColor= '#E46262';
  //   }
  //   if (rfsi!="") {document.getElementById("rfsi").style.borderColor= '#DBD4D4';}
  //   if(factura=="")
  //   {
  //   document.getElementById("factura").style.borderColor= '#E46262';
  //   }
  //   if (factura!="") {document.getElementById("factura").style.borderColor= '#DBD4D4';}
      
  // }
}