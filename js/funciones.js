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