function pasar()
{
    var par = 
    {
      'motocicleta' : document.getElementById('motocicleta').value,
      'nombre' : document.getElementById('nombre').value,
      'telefono' : document.getElementById('telefono').value,
      'moto' : document.getElementById('moto').value,
      // 'modelo' : document.getElementById('modelo').value,
      // 'credito' : document.getElementById('credito').value,
      // 'seguros' : document.getElementById('seguros').value,
      // // 'plazo' : document.getElementById('plazo').value,
      // // 'enganche' : document.getElementById('enganche').value,
      // 'user' : document.getElementById('user').value,
      // 'pass' : document.getElementById('pass').value,
    };
    $.ajax({
      data: par,
      url: 'atrum/pdf.php',
      type: 'post',
      beforeSend: function()
      {
        alert(document.getElementById('moto').value);
      },
      success: function(response)
      {
        // alert(document.getElementById('modelos').value);
        // $.get("radios/"+'tablaequipo', function(htmlexterno){
        // $("#cargaexterna").html(htmlexterno);
        // });
      }
    });
}