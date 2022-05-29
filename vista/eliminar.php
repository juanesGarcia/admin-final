<?php
$conexion = mysqli_connect("localhost", "root", "","datospg1");
mysqli_set_charset($conexion,"utf8")
?>
<?php
   
    $id = $_GET['id'];
    $eliminar = "DELETE FROM usuario WHERE idusuario = '$id'";
    $resultadoEliminar=mysqli_query($conexion,$eliminar);
    if($resultadoEliminar){
      header("Location: adminmodificar.php");
    }else{
      echo"<script>alert('No se pudo eliminar'); window.history.go(-1);</script>";
    }
?>
 




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="node_modules/open-iconic/font/css/open-iconic-bootstrap.min.css" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/adminmodificar.css" />  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <title>Datos del usuario</title>
</head>

<body onload="__construct()">
  <div class="navbar navbar-expand-sm bg-dark fixed-top">
    <ul class="navbar-nav mr-auto">
      <li class="nave-item">
        <a class="nav-link" href="#"><img class="imge" src="image/gimnasio.png"></a>
            
      </li>
      <li class="nave-item">
        <a class="nav-link" href="/vista/administrador.php"><span
            class="oi oi-calendar"></span> Inicio</a>
      </li>
      <li class="nave-item">
        <a class="nav-link" href="/vista/adminmodificar.php"><span class="oi oi-briefcase"></span> Modificar</a>
      </li>
      
    </ul>

        <ul class="nav">
            <li><a href="#"><img src="image/console.png" class="imgRedonda"><?php echo $_SESSION['NOMBRE_USUARIO']  ?></a>
          <ul>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="modificar.php">Modificar</a></li>
            <li><a href="../controlador/accion/act_login.php">Cerrar sesión</a></li>
            </li>
          </ul>
  </div>
    <form action="../modelo/dao/DataSource.php" id="form" method="POST" enctype="multipart/form-data">
            <?php $resultado = mysqli_query($conexion,$usuarios); ?>

                      <div class="container__tabla container__tabla__editar" >
                        <div class="titulo__tabla tabla__titulo__edit">
                          <div class="tabla__header">Nombre</div>
                          <div class="tabla__header">Email</div>
                          <div class="tabla__header">Contraseña</div>
                        </div>
                          <?php $resultado = mysqli_query($conexion,$usuarios)?>
                          <?php while($row=mysqli_fetch_assoc($resultado)){ ?>
                              <div class="tabla__item"><?php echo $row["primernombre"] ?></div>
                              <div class="tabla__item"><?php echo $row["email"] ?> </div>
                              <div class="tabla__item"><?php echo $row["contraseña"] ?> </div>
                               
                           <?php } mysqli_free_result($resultado) ?>
                          </div> 
    </form>
</body>

</html>