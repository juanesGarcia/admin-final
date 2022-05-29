<?php
    //Con session_start() se puede iniciar una nueva sesión 
    //o reanudar la sesión existente
    session_start();

    //Con require_once se incluye el archivo mdbUsuario.php
    require_once (__DIR__."/../mdb/mdbUsuario.php");
        
        //Se obtiene el correo y password del formulario del login,
        //los datos son recibidos por el método POST
        $correo = $_POST['email'];
        $password = $_POST['pswd'];

        //Se llama a la funcion autenticarUsuario() que esta en mdbUsuario.php
        $user = autenticarUsuario($correo, $password);
        
        if($user != null){
            //Si el usuario fue encontrado, se guarda su ID en una sesión con $_SESSION
            $_SESSION['ID_USUARIO'] = $user->getIdusuario();
            $_SESSION['NOMBRE_USUARIO'] = $user->getPrimernombre();
            $_SESSION['EMAIL_USUARIO'] = $user->getEmail();
            $_SESSION['CONTRASEÑA_USUARIO'] = $user->getContraseña();
            $_SESSION['IMG_USUARIO']= $user->getFoto();
            
                header("Location: ../../vista/usuarioini.php");

        }else{

 
            header("Location: ../../vista/iniciar.php");
        }



