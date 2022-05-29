
<!-- AGREGUÉEEEEEEEEEEEEEEEE ESTE AJAX Y LA CARPETA LIBBBBBBBBBBBBBBBBB-->


<?php
    //Con session_start() se puede iniciar una nueva sesión 
    //o reanudar la sesión existente
    session_start();

    //Con require_once se incluye el archivo mdbUsuario.php
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    require (__DIR__.'/../../lib/PHPMailer/PHPMailerAutoload.php');
        
        //Se obtiene el correo del formulario del Olvido Contraseña,
        //los datos son recibidos por el método POST
        $email = filter_input(INPUT_POST,'email');
       
        //Se llama a la funcion autenticarUsuario() que esta en mdbUsuario.php
        $user = verUsuarioPorCorreo($email);
        $msg = "El correo electrónico no es válido";
        $type_msg="error";
        
        if($user != null){
            //Si el usuario existe se envía un correo de recuperación de contraseña
            $msg = "El correo electrónico se encontró en nuestra Base de Datos";

            $mail = new PHPMailer();
            $mail->IsSMTP();  // telling the class to use SMTP
            $mail->CharSet = 'UTF-8';
            $mail->Encoding = "base64";
            $mail->Host = "smtp.gmail.com";
            $mail->Port = 587;
            $mail->SMTPAuth = true;
            $mail->Username = "usuarioFit@gmail.com"; // Usuario servidor de correo
            $mail->Password = "contraseña123";      // Contraseña del usuario
            $mail->setFrom('usuarioFit@gmail.com', 'Administrador de FitLifePro');
        
            $mail->AddAddress($email);
            $mail->Subject  = "Cambio de contraseña en FitLifePro";
            $mail->IsHTML(true);
            $body= file_get_contents(__DIR__."/../../controlador/accion/mensajecorreo.html");
            $body = str_replace('%usuario%', $user->getNombre(), $body);
            $body = str_replace('%password%', $user->getPassword(), $body);
                        
            $mail->Body = $body;
            $mail->MsgHTML($body);
            $mail->WordWrap = 50;
            $type_msg="success"; //Con éxito

            if($mail->Send()){
                $msg="Puede realizar la recuperación de la contraseña ingresando a  su correo: ".$email;
            }else{
                $msg="No se pudo enviar el correo a ".$email;
                $type_msg="error";
                
            }


        }

        $resultado = [
            'msg' => $msg,
            "type" => $type_msg
        ]; //Vector PHP
        
        echo json_encode($resultado); // Convirtiendo en jSon
        




