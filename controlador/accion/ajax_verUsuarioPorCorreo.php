<!--AGREGUÉEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE-->

<?php
    session_start();
    require_once (__DIR__.'/../mdb/mdbUsuario.php');
    
    $email = $_POST['email'];

    $usuario = verUsuarioPorCorreo($email);
    
    echo json_encode($usuario);  
