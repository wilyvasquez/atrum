<?php
function verificar_login($user,$password,&$result) {
    $sql = "SELECT * FROM usuarios WHERE usuario = '$user' and pass = '$password'";
    $rec = mysql_query($sql);
    $count = 0;

    while($row = mysql_fetch_object($rec))
    {
        $count++;
        $result = $row;
        echo $rec;
    }

    if($count == 1)
    {
        return 1;
    }

    else
    {
        return 0;
    }
}

if(!isset($_SESSION['userid']))
{
    if(isset($_POST['login']))
    {
        if(verificar_login($_POST['user'],$_POST['password'],$result) == 1)
        {
            $_SESSION['userid'] = $result->idusuario;
            header("location:index2.php");
        }
        else
        {   
            // echo '<script language="javascript">document.getElementById("user").style.borderColor= "#E46262";</script>';
            // header("location:index.php");
            // echo '<script language="javascript">alert("juas");</script>'; 
            // echo '<div class="error">Su usuario es incorrecto, intente nuevamente.</div>';
        }
    }
} 
?>