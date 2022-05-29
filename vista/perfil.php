<?php
    //Con session_start() se puede iniciar una nueva sesión 
    //o reanudar la sesión existente
    session_start();
    if(!isset(($_SESSION['EMAIL_USUARIO']))){
        header("Location: iniciar.php");
    }
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
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
    <link rel="stylesheet" href="css/perfil.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Datos del usuario</title>
 
</head>

<body >
    <div class="navbar navbar-expand-sm bg-dark fixed-top">
        <ul class="navbar-nav mr-auto">
            <li class="nave-item">
                <a class="nav-link" href="
              #"><img class="imge" src="image/gimnasio.png"></a>

            </li>
            <li class="nave-item">
                <a class="nav-link" href="usuarioini.php"><span class="oi oi-calendar"></span> Inicio</a>
            </li>
            <li class="nave-item">
                <a class="nav-link" href="inicio.php"><span class="oi oi-briefcase"></span> Rutina</a>
            </li>
            <li class="nave-item">
                <a class="nav-link" href="iniciar.php"> <span class="oi oi-dollar"></span> Alimentación</a>
            </li>
        </ul>

        <ul class="nav">
            <li><a href="#"><img src="<?php echo $_SESSION['IMG_USUARIO']?>"
                        class="imgRedonda"><?php echo  $_SESSION['NOMBRE_USUARIO']?></a>
                <ul>
                    <li><a href="perfil.php">Perfil</a></li>
                    <li><a href="modificar.php">Modificar</a></li>
                    <li><a href="../controlador/accion/act_logout.php">Cerrar sesión</a></li>
            </li>
        </ul>

    </div>


    <div class="card">
        <div class="img">
            <img src="<?php echo $_SESSION['IMG_USUARIO']?>" >
        </div>
        <div class="content">
            <h1><?php  echo $_SESSION['NOMBRE_USUARIO']?></h1>
            <div class="center">
                <div class="box">
                    <h3>Email</h3>
                    <p><?php  echo $_SESSION['EMAIL_USUARIO']?></p>
                </div>
                <div class="box">
                    <h3>Contraseña</h3>
                    <p><?php  echo $_SESSION['CONTRASEÑA_USUARIO']?></p>
                </div>
            </div>
            <button type="submit" class="btn btn-dark" href="/../controlador/accion/act_logout.php" id="boton">Eliminar Usuario</button>
            
        </div>
    </div>
  </body>
</html>