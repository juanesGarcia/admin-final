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
    <link rel="stylesheet" href="css/usuarioini.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Fit Life Pro</title>
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
              #"><img class="img" src="image/gimnasio.png"></a>

            </li>
            <li class="nave-item">
                <a class="nav-link" href="usuarioini.php"><span class="oi oi-calendar"></span> Inicio</a>
            </li>
            <li class="nave-item">
                <a class="nav-link" href="inicio.php#rutina"><span class="oi oi-briefcase"></span> Rutina</a>
            </li>
            <li class="nave-item">
                <a class="nav-link" href="inicio.php#alimentación"> <span class="oi oi-dollar"></span>Alimentacion</a>
            </li>

            <ul class="nav">
                <li><a href="#"><img src="<?php echo $_SESSION['IMG_USUARIO']?>" 
                            class="imgRedonda"><?php echo $_SESSION['NOMBRE_USUARIO']  ?></a>
                    <ul>
                        <li><a href="perfil.php">Perfil</a></li>
                        <li><a href="modificar.php">Modificar</a></li>
                        <li><a href="administrador.php">Administrador</a></li>
                        <li><a href="../controlador/accion/act_logout.php">Cerrar sesión</a></li>
                </li>
            </ul>


        </ul>
    </div>

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">

            <a href="#entre">
                <div class="carousel-item active">
                    <img src="image/man-gbce7d5a07_1920.jpg" alt="Entrenador" class="d-block" width="100%">
            </a>
        </div>


        <div class="carousel-item">
            <a href="#gimnasio">
                <img src="image/fitness-room-gd5c69acff_1920.jpg" alt="RumbaTerapia" class="d-block" width="100%">
            </a>
        </div>

        <a href="#practica">
            <div class="carousel-item">
                <img src="image/home-fitness-equipment-g9a93a6c82_1920.jpg" alt="Home" class="d-block" width="100%">
        </a>
    </div>

    <a href="#alimento">
        <div class="carousel-item">
            <img src="image/vegetables-g0ec070da2_1920.jpg" alt="Vegetales" class="d-block" width="100%">
    </a>
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

    <div class="informacion">

        <a name="entre"></a>
        <div data-aos="fade-left">
            <br><br>
            <h4><strong>Entrenadores Personales</strong></h4><br>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dicta adipisci eveniet velit perspiciatis vero
                quos veritatis temporibus eius vel laboriosam cupiditate,Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Architecto accusamus cumque deserunt, eius earum id fugiat sequi, in cupiditate
                deleniti ullam, officiis temporibus? Cum excepturi sequi autem inventore eaque optio. praesentium nemo
                commodi nihil, saepe dolores consequatur beatae ipsam! Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Placeat, dolores sequi officiis voluptate beatae, ea recusandae ducimus,Lorem ipsum
                dolor sit amet, consectetur adipisicing elit. Magnam ea adipisci nam, quibusdam voluptate inventore vero
                et itaque maiores delectus,Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi unde,
                blanditiis architecto non animi vitae aliquid deleniti hic numquam accusantium officiis Lorem ipsum
                dolor sit amet, consectetur adipisicing elit. Aut magnam et animi, sunt nihil at maxime explicabo quis
                quam eligendi fugiat consequuntur dolore iusto enim doloribus ullam eveniet minus quibusdam. optio
                delectus explicabo recusandae quas ab, perspiciatis, cupiditate culpa? libero sequi quaerat quis quidem
                obcaecati porro quo quasi voluptatem. modi ullam eveniet nobis soluta dolor distinctio quisquam aperiam
                repellat rem cupiditate velit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae,
                eaque! Porro quaerat voluptas quidem architecto, animi optio labore recusandae, Lorem, ipsum dolor sit
                amet consectetur adipisicing elit. Aperiam, ad accusantium quaerat perspiciatis iusto cumque ipsa omnis
                culpa velit itaque nulla fugiat nihil voluptas facere magnam veniam dolorum deserunt inventore!
                cupiditate minima vero natus rem illo! Id dolore architecto rem exercitationem.</p><br><br>

        </div>

        <a name="alimento"></a>
        <div data-aos="fade-right">
            <h4><strong>Alimentación</strong></h4><br>
            <p>Lorem ipsum dolor,Lorem ipsum dolor, sit amet consectetur adipisicing elit. Commodi quae non officiis,
                ratione praesentium ex earum nemo omnis perferendis fugiat eos corporis et Lorem, ipsum dolor sit amet
                consectetur adipisicing elit. Doloremque magnam consequatur exercitationem incidunt sequi dolor, tenetur
                officia accusamus, amet harum non eius at reiciendis,Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. At ipsam, accusamus itaque nostrum asperiores, alias placeat soluta architecto odio sit laborum
                saepe nemo Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem, impedit. Possimus
                odit mollitia eaque tenetur quae nobis, maiores, ut sed recusandae, fuga expedita voluptates! Itaque
                corrupti sequi fuga quaerat doloribus! ipsa neque reprehenderit officia fugit distinctio! Magni? esse
                perspiciatis rerum accusantium quaerat cupiditate! libero cumque modi pariatur odit, molestiae delectus!
                sit amet Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil reprehenderit magnam quos
                doloremque officiis minima maxime? Consectetur eius hic sequi saepe corporis debitis animi libero ad
                cumque aperiam! Et, error! consectetur adipisicing elit. Deleniti nemo quisquam cum porro, vero quia,
                ducimus voluptate inventore enim iste blanditiis iusto! At ipsam facilis rem, sed nam ad quibusdam.</p>
            <br><br>

        </div>

        <a name="practica"></a>
        <div data-aos="zoom-in">
            <h4><strong>Practica En Casa</strong></h4><br>
            <p>Lorem ipsum dolor, sit amet Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil reprehenderit
                magnam quos doloremque officiis minima maxime? Consectetur eius hic sequi Lorem ipsum dolor sit amet,
                consectetur adipisicing elit. Ex cum commodi, sed deleniti vero, illum nostrum temporibus sint
                repudiandae tempora Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus cum et dolores.
                Delectus distinctio ratione enim nobis praesentium doloremque veritatis porro totam deserunt accusantium
                quas odit, amet, sapiente magni suscipit. itaque dolore. Harum ducimus cum temporibus vitae cupiditate
                omnis optio! saepe corporis debitis animi libero ad cumque aperiam! Et, error! consectetur adipisicing
                elit. Deleniti nemo quisquam cum porro, vero quia, ducimus voluptate inventore enim iste blanditiis
                iusto! At ipsam facilis rem, sed nam ad quibusdam.</p><br><br>

        </div>

        <a name="gimnasio"></a>
        <div data-aos="flip-left">
            <h4><strong>Gimnasios</strong> </h4><br>
            <p>Lorem ipsum dolor sit, Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum corrupti
                consequuntur perspiciatis facilis eos aut, neque sit harum dicta modi obcaecati ratione, voluptatibus
                exercitationem dolorem odit debitis a quaerat consequatur. Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Obcaecati laborum fuga consequuntur, harum odio totam repellat ex quis ullam vel
                blanditiis, excepturi explicabo, sequi accusamus veritatis! Aspernatur aut reprehenderit temporibus.
                amet consectetur adipisicing elit. Quidem sapiente rerum molestias numquam culpa omnis dolores est.
                Perspiciatis doloribus sint quod unde tenetur similique quis assumenda saepe, aut maxime possimus!</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62614.47594331466!2d-74.21741674053796!3d11.231607344223223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ef4f66ff59a173d%3A0x124b95fc153af9b8!2sSanta%20Marta%2C%20Magdalena!5e0!3m2!1ses!2sco!4v1651451355862!5m2!1ses!2sco"
                width="1000" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <br><br>
        </div>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
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
            <img src="console.png" class="imgredes"><a href="https://jdamas.000webhostapp.com/" class="damas">Damas</a>
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