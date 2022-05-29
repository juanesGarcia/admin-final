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
    <link rel="stylesheet" href="vista/css/main.css" />
    <title>Fit Life Pro</title>
    <script>
    function deshabilitaRetroceso() {
        window.location.hash = "";
        window.onhashchange = function() {
            window.location.hash = "";
        }
    }
    </script>
</head>

<body onload="deshabilitaRetroceso()">
    <div class="navbar navbar-expand-sm bg-dark fixed-top">
        <ul class="navbar-nav mr-auto">
            <li class="nave-item">
                <a class="nav-link" href="
              #"><img class="img" src="vista/image/gimnasio.png"></a>

            </li>
            <li class="nave-item">
                <a class="nav-link" href="paquetes.html"><span class="oi oi-calendar"></span> Paquetes</a>
            </li>
            <li class="nave-item">
                <a class="nav-link" href="contacto.html"><span class="oi oi-briefcase"></span> Contacto</a>
            </li>
            <li class="nave-item">
                <a class="nav-link" href="precios.html"> <span class="oi oi-dollar"></span>Precios</a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto" id="ini">
            <li class="nave">
                <a class="nav-link" href="vista/iniciar.php"> <button type="button" class="btn btn-light">Iniciar
                        sesión</button></a>
            </li>
            <li class="navereg">
                <a class="nav-link" href="vista/registrar.php"> <button type="button"
                        class="btn btn-light">Registrar</button></a>
            </li>
        </ul>
    </div>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="vista/image/hobrefit.jpg" alt="Hombrefit" class="d-block" width="100%">
            </div>
            <div class="carousel-item">
                <img src="vista/image/carrots-gbe5b98cab_1920.jpg" alt="Alimentos" class="d-block" width="100%">
            </div>
            <div class="carousel-item">
                <img src="vista/image/training-g86ff0d4a6_1920.jpg" alt="Mujerfit" class="d-block" width="100%">
            </div>
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

    <div>-</div>

    <div class="container">
        <h1>Ingenieros : </h1>
        <br>
        <br>
        <div class="card-group">
            <div class="card">
                <img class="card-img" src="vista/image/yo.jpeg" alt="Card image" style="width:60%">
                <div class="card-body">
                    <h4 class="card-title">Juan Esteban Cubillos Garcia </h4>
                    <p class="card-text">Encargado del area de diseño y mantenimiento de paginas web para una
                        multinacional canadiense</p>
                    <a href="https://hoja-de-vida-juancubillos.000webhostapp.com/" class="btn btn-dark">Mira su
                        perfil</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img" src="vista/image/WhatsApp Image 2022-03-25 at 9.43.22 AM.jpeg" alt="Card image"
                    style="width:60%">
                <div class="card-body">
                    <h4 class="card-title">Cristian jose Caamaño</h4>
                    <p class="card-text" id="acom">Encargado del area de programacion en el lenguaje JavaScript</p>
                    <br><br>
                    <a href="https://fhdv.000webhostapp.com/" class="btn btn-dark">Mira su perfil</a>
                </div>
            </div>

            <div class="card">
                <img class="card-img" src="vista/image/eliasib.jpeg" alt="Card image" style="width:60%">
                <div class="card-body">
                    <h4 class="card-title">Eliasib Guevara</h4>
                    <p class="card-text" id="acom">Encargado del diseño de paginas web con el framework de bootstrap</p>
                    <br><br>
                    <a href="https://hoja-de-vida-eliasib-ruz.000webhostapp.com/" class="btn btn-dark">Mira su
                        perfil</a>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <div class="row aling-items-end bg-secondary">
        <div class="col-sm-4">
            <h4 class="redesde">Redes Sociales</h4>
            <img src="https://cdn-icons-png.flaticon.com/128/1384/1384031.png" class="imgredes">
            <a class="links" href="https://instagram.com/juanestebancubillos?utm_medium=copy_link"> instagram</a><br>
            <img src="https://cdn-icons-png.flaticon.com/128/2111/2111392.png" class="imgredes">
            <a class="links" href="https://www.facebook.com/juanesteban.cubillosgarcia.77">Facebook</a><br>
            <img src="https://cdn-icons-png.flaticon.com/128/2111/2111738.png" class="imgredes">
            <a class="links" href="https://twitter.com/?lang=es"> Twitter</a>
            <h4 class="redesde">Video juego</h4>
            <img src="vista/image/console.png" class="imgredes"><a href="https://jdamas.000webhostapp.com/"
                class="damas">Damas</a>
        </div>
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <h4 class="redesde">Información</h4>
            <img class="imgredes" src="https://cdn-icons-png.flaticon.com/128/25/25453.png"><a>+57 3186699925 </a><br>
            <img class="imgredes" src="https://cdn-icons-png.flaticon.com/128/25/25694.png"><a> calle 48cs#25-94</a><br>
            <img class="imgredes"
                src="https://cdn-icons-png.flaticon.com/128/25/25236.png"><a>fitlifepro2022@gmail.com</a>
        </div>
    </div>
</footer>

</html>