function showselect(str)
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
      document.getElementById("modelo").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","modelo.php?c="+str,true);
      xmlhttp.send();
    }
    function showselect1(str)
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
      document.getElementById("seguros").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","seguros.php?c="+str,true);
      xmlhttp.send();
    }
    function showselect2(str)
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
      document.getElementById("enganche").innerHTML=xmlhttp.responseText;
      }
      }
      xmlhttp.open("GET","enganche.php?c="+str,true);
      xmlhttp.send();
    }