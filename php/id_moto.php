<?php
$res=$_POST['moto'];
// echo $res;
echo    "<div class='thumbnail' style='width:300px; height:200px;margin-left:50px'>
            <form action='' method='POST' enctype='multipart/form-data' >
              <img src='php/foto.php?id=$res' style='margin-left:20px;margin-top:10px'/>
            </form>
     	</div>";
?>