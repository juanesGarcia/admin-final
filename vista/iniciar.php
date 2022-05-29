
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio de sesion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="google-signin-client_id" content="266544528076-s161ij2r23ul5umaq0jiah79g3r39c16.apps.googleusercontent.com">
  <link rel="stylesheet" href="css/iniciar1.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script>
     document.getElementById('enviar').addEventListener('click', salir);
    function mover() {
        window.location.href = 'registrar.php';
    }
    function mover2() {
        window.location.href = '../index.php';
    }
    
    function deshabilitaRetroceso(){
      window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}} 

</script>


</head>

<body onload="deshabilitaRetroceso()">
  <div class="total">
    <div class="container">
      <div class="iniciarsesion">
        <h2 class="letras" id="back" onclick="mover2()">Iniciar Sesión</h2>
        <form action="../controlador/accion/act_login.php" method="POST">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="pswd">
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="remember"> Remember me
            </label>
          </div>
          <br>
          <button type="submit" class="btn btn-dark" id="submit">Submit</button>
             <button type="button" class="btn btn-dark" id="enviar" onclick="mover()">registrar</button>

         
     </form>
      </div>
      <div class="fotos-ini">
        <img src="image/karate-g30a34823e_1920.jpg" alt="mujerini" class="foto">

      </div>

    </div>

  </div>

</body>

</html>

<script src="https://apis.google.com/js/platform.js" async defer></script>