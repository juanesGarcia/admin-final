<?php

session_start();

require_once(__DIR__ . "/../mdb/mdbUsuario.php");
require_once(__DIR__ . "/../../modelo/entidad/Usuario.php");

$nombre = $_POST['nom'];
$correo = $_POST['email'];
$password1 = $_POST['pswd'];
$password2 = $_POST['pswd1'];
$nom_img=$_FILES['imagenes']['tmp_name'];
$archivo=$_FILES['imagenes']['name'];
$ruta="../../image";
$ruta_p="../image";
$mos=$ruta."/".$archivo;
$mos_f=$ruta_p."/".$archivo;

move_uploaded_file($nom_img,$mos);

if ($nombre != "" and $correo != "" and $password1 != "" and $password1 == $password2 ) {

                $usuario = new Usuario(NULL, $nombre, $correo, $password1,$mos_f);
        $registro = registrarUsuario($usuario);
        if ($registro)
            header("Location: ../../vista/usuarioini.php");
        else {

            header("Location: ../../vista/registrar.php");
        }
 } 
 else {

    header("Location: ../../vista/registrar.php");
}


    
    
