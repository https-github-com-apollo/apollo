<?php
    set_time_limit(0);
    ignore_user_abort(1);

    $ServerName = "localhost";
    $UserName = "root";
    $Password = "";
    $Db_Name = "kablinsupercycleid";

    $Conex = mysqli_connect($ServerName,$UserName,$Password,$Db_Name);

    if(mysqli_connect_error()):
        $GLOBALS["Erros"] = "<li> Erro de conexão </li>";
    endif;
    
?>