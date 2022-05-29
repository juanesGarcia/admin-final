<?php
$conexion = mysqli_connect("localhost", "root", "","datospg1");
mysqli_set_charset($conexion,"utf8")
?>

<?php
$nombre = $_POST['primernombre'];
$correo = $_POST['email'];
$psdw = $_POST['contraseña'];

//insertar
$insertar="INSERT INTO usuario (primernombre,email,contraseña) VALUES('$nombre','$correo','$psdw')";
$resultado= mysqli_query($conexion,$insertar);

if($resultado){
    echo "<script>alert('Se ha registrado el usuario con éxito')";
    Header("Location:administrador.php");
    
}else {
    echo "<script>alert('No se ha podido registrado el usuario')";
}