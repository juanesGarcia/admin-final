<?php
  include("cn.php");
   $id = $_POST['id'];
   $nombre = $_POST['primernombre'];
   $correo = $_POST['email'];
   $psdw = $_POST['contraseña'];

   if($id==1000){
    echo 'no se puede eliminar el usuario admistrador' ;
  }else{
   $actualizar = "UPDATE usuario SET primernombre='$nombre',email='$correo', contraseña='$psdw'  WHERE idusuario = '$id'";
   $resultadoActualizar=mysqli_query($conexion,$actualizar);
   if($resultadoActualizar){
     header("Location: administrador.php");
   }
   echo 'no se puede eliminar el usuario admistrador' ;
  }
