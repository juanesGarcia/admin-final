<!DOCTYPE html>
<html lang="en">

<head>
    <title>Inicio de sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/registrar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    function mover() {
        window.location.href = '../index.php';
    }

    function deshabilitaRetroceso() {
        window.location.hash = "no-back-button";
        window.location.hash =
        "Again-No-back-button"; //again because google chrome don't insert first hash into history
        window.onhashchange = function() {
            window.location.hash = "no-back-button";
        }
    }
    

    function mover2() {
        window.location.href = 'iniciar.php';
    }
    </script>
</head>

<body onload=" deshabilitaRetroceso()">
    <div class="total">
        <div class="container">
            <div class="iniciarsesion">
                <h2 class="letras" onclick="mover()">Registrar Sesión</h2>
                <form action="../controlador/accion/act_registrarUsuario.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nom">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Digite su nombre" name="nom">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter password"
                            name="pswd">
                    </div>
                    <div class="form-group">
                        <label for="pwd1">Verificar Password:</label>
                        <input type="password" class="form-control" id="password" placeholder="Verificar password"
                            name="pswd1">
                    </div>
                    <div class="form-group">
                        <label for="image">Subir imagen</label>
                        <input type="file" class="form-control" id="imagenes" name="imagenes"> 
                    </div>

                    <div class="form-group form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                    <br>

                    <button type="submit" class="btn btn-dark" name="register">Submit</button>
                                </form>
                <br></br>
            </div>
            <div class="fotos-ini">
                <img src="image/box-gcf7a16011_1920.jpg" alt="mujerini" class="foto">

            </div>

        </div>

    </div>

</body>

</html>