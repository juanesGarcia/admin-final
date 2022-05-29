<?php
   
    session_start();
    
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require_once (__DIR__."/../../modelo/entidad/Usuario.php");

        $nombre = filter_input(INPUT_POST,'nom');
        $correo = filter_input(INPUT_POST,'email');
        $password = filter_input(INPUT_POST,'contraseña');
 
        
        $usuario = new usuario(NULL, $nombre, $correo, $password, NULL);
        $estado  = registrarUsuario($usuario);
        $msg="Se logró registrar el usuario";
       
    $resultado = [
        'estado' => $estado,
        'msg' => $msg
    ];
    
    echo json_encode($resultado);
        
        

