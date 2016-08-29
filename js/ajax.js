function mostrarInfo(cod)
{

  if (window.XMLHttpRequest)
  {
    xmlhttp=new XMLHttpRequest();
  }
  else
  {
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("datos").innerHTML=xmlhttp.responseText;
    }else{ 
      document.getElementById("datos").innerHTML='Cargando...';
    }
  }
  xmlhttp.open("POST","select.php",true);
  xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
  xmlhttp.send("cod_banda="+cod);

}