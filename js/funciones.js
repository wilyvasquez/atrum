function funciontipo(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("anio").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","anio_moto.php?c="+str,true);
      xmlhttp.send();
    }
function funcionseguro(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("seguro").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","seguro.php?c="+str,true);
      xmlhttp.send();
    }
function funciontiempo(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("tiempo").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","tiempo.php?c="+str,true);
      xmlhttp.send();
    }
function funcionenganche(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("porcentaje").innerHTML=xmlhttp.responseText;
      }
      }
      // alert(str);
      xmlhttp.open("GET","enganche.php?c="+str,true);
      xmlhttp.send();
    }
function updatecred(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("datos").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","php/datos.php?c="+str,true);
      xmlhttp.send();
    }
function updateplacas(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("datos2").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","php/datos2.php?c="+str,true);
      xmlhttp.send();
    }
function updatequipo(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("equipo").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","php/equipo.php?c="+str,true);
      xmlhttp.send();
    }
function funtionanio(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("plazo").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","php/anio.php?c="+str,true);
      xmlhttp.send();
    }
function costomoto(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("precios").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","php/precio_moto.php",true);
      xmlhttp.send();
    }
function result(str)
    {
      var xmlhttp; 
      if (str=="")
       {
       document.getElementById("txtHint").innerHTML="";
      return;
       }
      if (window.XMLHttpRequest)
      {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
       }
      else
       {// code for IE6, IE5
       xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("resultados").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","php/resultados.php",true);
      xmlhttp.send();
    }