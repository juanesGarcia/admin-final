<?php
    //Con session_start() se puede iniciar una nueva sesión 
    //o reanudar la sesión existente
    session_start();
    if(!isset(($_SESSION['EMAIL_USUARIO']))){
        header("Location: iniciar.php");
    }
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
     header("Cache-Control: post-check=0, pre-check=0", false);
     header("Pragma: no-cache")

?>

<?php
    include("cn.php");
    $id = $_GET["id"];
    $usuarios = "SELECT * FROM usuario WHERE idusuario = '$id' ";
    
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
        <a class="nav-link" href="
              #"><img class="imge" src="image/gimnasio.png"></a>
            
      </li>
      <li class="nave-item">
        <a class="nav-link" href="/vista/administrador.php"><span
            class="oi oi-calendar"></span> Inicio</a>
      </li>
      <li class="nave-item">
        <a class="nav-link" href="/vista/registrarusuario.php"><span class="oi oi-briefcase"></span> Insertar</a>
      </li>
      
    </ul>

        <ul class="nav">
            <li><a href="#"><img src="image/console.png" class="imgRedonda"><?php echo $_SESSION['NOMBRE_USUARIO']  ?></a>
          <ul>
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="../controlador/accion/act_login.php">Cerrar sesión</a></li>
            </li>
          </ul>
  </div>
  <form action="../vista/actualizar.php" id="form" method="POST" enctype="multipart/form-data">
          

                      <div class="container__tabla container__tabla__editar" >
                          <div class="titulo__tabla tabla__titulo__edit">Datos de usuarios</div>
                            <div class="tabla__header">Nombre</div>
                            <div class="tabla__header">Email</div>
                            <div class="tabla__header">Contraseña</div>                          
                            <div class="tabla__header">Operaciones</div>
                            <?php $resultado = mysqli_query($conexion,$usuarios)?>
                          <?php while($row=mysqli_fetch_assoc($resultado)){ ?>

                            <input type="hidden" class="tabla__item" value="<?php echo $row["idusuario"];?>" name="id">
                            <input type="text" class="tabla__item" value="<?php echo $row["primernombre"];?>" name="primernombre">
                              <input type="text" class="tabla__item" value="<?php echo $row["email"];?>" name="email">
                              <input type="text" class="tabla__item" value="<?php echo $row["contraseña"];?>" name="contraseña">
                           
               <input type="submit" value="Actualizar" class="container__submit container__submit--actualizar">
               
                            <div></div>
                            <?php } mysqli_free_result($resultado) ?>
                      </div> 
                          <script src="confirmacion.js"></script>
    </form>
</body>

</html>