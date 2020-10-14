<?php
    session_start();
    session_unset();
    session_destroy();

    header("location: ../inicial/Entrar_Cadastrar.php");

    exit();
?>