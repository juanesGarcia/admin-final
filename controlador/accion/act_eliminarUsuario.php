<?php
    
    session_start();
    
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    $idUsuario = $_SESSION['ID_USUARIO'];
     session_destroy();
    eliminarUsuario($idUsuario);
   

    header("Location: ../../vista/iniciar.php");
    