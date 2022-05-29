<?php
  include("cn.php");
   $id = $_POST['id'];
   $nombre = $_POST['primernombre'];
   $correo = $_POST['email'];
   $psdw = $_POST['contraseña'];

   $actualizar = "UPDATE SET primernombre='$nombre',email='$correo', contraseña='$psdw'  WHERE idusuario = '$id'";
   $resultadoActualizar=mysqli_query($conexion,$actualizar);
   if($resultadoActualizar){
     header("Location: adminmodificar.php");
   }
     echo"<script>alert('No se pudo eliminar '); window.history.go(-1);</script>";
   
?>

