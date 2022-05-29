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
    <link rel="stylesheet" href="css/info.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Datos del usuario</title>
    <script>
    function deshabilitaRetroceso() {
        window.location.hash = "no-back-button";
        window.location.hash =
        "Again-No-back-button"; //again because google chrome don't insert first hash into history
        window.onhashchange = function() {
            window.location.hash = "no-back-button";
        }
    }
    </script>
</head>

<body onload="deshabilitaRetroceso()">
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
                <a class="nav-link" href="#rutina"><span class="oi oi-briefcase"></span> Rutina</a>
            </li>
            <li class="nave-item">
                <a class="nav-link" href="#alimentación"> <span class="oi oi-dollar"></span> Alimentación</a>
            </li>
        </ul>

        <ul class="nav">
            <li><a href="#"><img src="<?php echo $_SESSION['IMG_USUARIO']?>" 
                        class="imgRedonda"><?php echo $_SESSION['NOMBRE_USUARIO']  ?></a>
                <ul>
                    <li><a href="perfil.php">Perfil</a></li>
                    <li><a href="modificar.php">Modificar</a></li>
                    <li><a href="../controlador/accion/act_logout.php">Cerrar sesión</a></li>
            </li>
        </ul>

    </div>

    <div class="grid1" id="rutina">

        <div onload="deshabilitaRetroceso()">
            <h2>RUTINA</h2>
            <h4>Día 1: Piernas/abs</h4>
            <ul>
                <li>Sentadillas con barra: 4 series x 8/10 reps.</li>
                <li>Prensa en máquina: 4 series x 8/10 reps.</li>
                <li>Peso muerto: 4 series x 8/10 reps.</li>
                <li>Zancada con mancuernas: 4 series x 8/10 reps.</li>
                <li>Extensión de gemelos: 4 series x 8/10 reps.</li>
                <li>HIIT de 20 minutos, correr, bici, elíptica: 30 seg. suave moderado / 30 seg. máximo.</li>
            </ul>
            <h4>Dia 2: Pecho</h4>
            <ul>
                <li>Press de banca con barra en banco plano: 4 series x 8/10 reps.</li>
                <li>Press banco inclinado con mancuernas: 4 series x 8/10 reps.</li>
                <li>Aperturas banco plano/inclinado 'alternar semanalmente': 4 series x 8/10 reps.</li>
                <li>Press declinado con barra: 4 series x 8/10 reps.</li>
                <li>Flexiones : 4 series x 8/10 reps.</li>
            </ul>
            <h4>Día 3: Espalda/abs</h4>
            <ul>
                <li>Dominadas: 4 series x 8/10 reps.</li>
                <li>Remo sentado: 4 series x 8/10 reps.</li>
                <li>Jalón al pecho polea alta: 4 series x 8/10 reps.</li>
                <li>Peso muerto rumano: 4 series x 8/10 reps.</li>
                <li>Remo horizontal con barra: 4 series x 8/10 reps.</li>
                <li>HIIT de 5 o 10 minutos: 20 burpees + 30 jumping jacks + 20 abdominales 'varíalos' + 40 saltos a los
                    lados 'repetir proceso durante 5 o 10 minutos'.</li>
            </ul>
            <h4>Dia4: Abdominales</h4>
            <ul>
                <li>Elevaciones de piernas: 4 series x 20 reps.</li>
                <li> Crunches: 4 series x 20 reps.</li>
                <li>Oblíquos con polea: 4 series x 20 reps.</li>
            </ul>

            <h4>Día 5: Hombros</h4>
            <ul>
                <li>Press hombro sentado con barra: 4 series x 8/10 reps.</li>
                <li>Elevaciones laterales con mancuernas: 4 series x 8/10 reps.</li>
                <li>Press sentado con mancuernas: 4 series x 8/10 reps.</li>
                <li>Pájaros 'posterior mancuernas': 4 series x 8/10 reps.</li>
                <li>Encogimientos de hombro con mancuernas 'trapecios': 4 series x 8/10 reps.</li>
                <li> HIIT de 20 minutos, correr, bici, elíptica: 30 seg. suave y moderado / 30 seg. máximo.</li>
            </ul>

            <h4>Día 6: Brazos</h4>
            <ul>
                <li>Curl bíceps con barra: 4 series x 8/10 reps.</li>
                <li>Francés de tríceps barra Z: 4 series x 8/10 reps.</li>
                <li>Bíceps 'curl' banco inclinado: 4 series x 8/10 reps.</li>
                <li> Fondos de tríceps: 4 series x 8/10 reps.</li>
                <li>Curl bíceps inverso en polea: 4 series x 8/10 reps.</li>
                <li> Press con barra agarre estrecho: 4 series x 8/10 reps.</li>
            </ul>
        </div>
        <div class="grid1">
            <img src="image/pectorales.jpg" alt="">
        </div>
        <br><br>

        <div id="alimentación">
            <img src="image/alimentación 2.jpg" class="alimentación">
        </div>

        <div onload="deshabilitaRetroceso()">
            <h2>ALIMENTACIÓN</h2>
            <h4>Desayuno para aumentar masa muscular</h4>
            <ul>
                <li> Leche desnatada o semi-desnatada.</li>
                <li>Cereales ricos en fibra.</li>
                <li>Avena.</li>
                <li>Zumo.</li>
                <li>Una pieza de fruta.</li>
                <li>Café.</li>
            </ul>
            <h4>Comida de media mañana para aumentar masa muscular</h4>
            <ul>
                <li>Pan integral.</li>
                <li>Pechuga de pollo.</li>
                <li>Jamón serrano o york sin grasa.</li>
                <li>Queso sin materia grasa.</li>
                <li>Tomate.</li>
                <li>Frutos secos.</li>
                <li>Una pieza de fruta.</li>
            </ul>
            <h4>Almuerzo para aumentar masa muscular</h4>
            <ul>
                <li>Pasta o arroz integral.</li>
                <li>Carne como el pavo, el pollo o la ternera.</li>
                <li>Verdura de hoja verde.</li>
                <li>Setas.</li>
                <li>Pescado como el atún, la merluza o el salmón.</li>
                <li>Verduras como berenjena, calabaza, coliflor, brócoli, espárragos o alcachofas.</li>
                <li>Aceite de oliva.</li>
                <li>Una pieza de fruta.</li>
                <li>Tostadas de pan integral.</li>
                <li>Yogur desnatado.</li>
            </ul>
            <h4>Merienda para aumentar masa muscular</h4>
            <ul>
                <li>Yogur líquido.</li>
                <li>Zumo.</li>
                <li>Piezas de fruta.</li>
                <li> Avena en copos.</li>
                <li> Tortitas de arroz.</li>
                <li> Pan integral con jamón, queso o pavo.</li>
            </ul>
            <h4>Cena para aumentar masa muscular</h4>
            <ul>
                <li>Patata cocida.</li>
                <li> Carne como el pollo, la ternera, el conejo, el pavo o el buey.</li>
                <li> Pescado como lenguado, merluza, salmón o langostinos.</li>
                <li>Ensalada.</li>
                <li>Verduras variadas.</li>
                <li> Pan integral.</li>
                <li>Yogur desnatado.</li>
            </ul>
        </div>

    </div>


</body>

</html>