<?php
include('conn.php');
session_start();
$nombresa = $_SESSION['nombre_usuario'];
echo "$nombresa";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="./styles/estilosmain.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />

    <title>FIFA</title>
</head>

<body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>

    <!--Main Navigation-->
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark d-none d-lg-block" style="z-index: 2000">
            <div class="container-fluid">
                <!-- Navbar brand -->
                <a class="navbar-brand nav-link" href="index.php">
                    <img src="./img/logo.png" class="me-2" height="25" width="25" alt="WC Logo" loading="lazy" />
                    <strong>FIFA</strong></a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="Grupos.php">Grupos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Partidos.php" rel="nofollow">Partidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Resultados.php">Resultados</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav list-inline">
                        <!-- Icons -->
                        <li class="">
                            <a class="nav-link" href="https://www.youtube.com/fifa" rel="nofollow" target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li class="">
                            <a class="nav-link" href="https://www.facebook.com/fifaworldcup/" rel="nofollow" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://twitter.com/FIFAWorldCup?s=20&t=RQ55fP7wMinXP9pq8NBEBw" rel="nofollow" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://github.com/KevinLarios143-01/ProyectoMundial.git" rel="nofollow" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar -->

        <!-- Carousel wrapper -->
        <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
                <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
            </ol>

            <!-- Inner -->
            <div class="carousel-inner">
                <!-- Single item -->
                <div class="carousel-item active">
                    <video style="min-width: 100%; min-height: 100%" playsinline autoplay muted loop>
                        <source class="h-100" src="./media/video1.mp4" type="video/mp4" />
                    </video>
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h1 class="mb-3">Copa Mundial de la FIFA Catar 2022&trade;</h1>
                                <h5 class="mb-4">
                                    21 de noviembre - 17 de diciembre
                                </h5>
                                <a class="btn btn-outline-light btn-lg m-2" href="#ingresar" role="button" rel="nofollow">Quinielas</a>
                                <a class="btn btn-outline-light btn-lg m-2" href="./registro.php#regis" target="_blank" role="button">Registrarse</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <video style="min-width: 100%; min-height: 100%" playsinline autoplay muted loop>
                        <source class="h-100" src="./media/video2.mp4" type="video/mp4" />
                    </video>
                    <div class="mask" style="background-color: rgba(0, 0, 0, 0.3)">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h2>Quinielas para vivir la emoción</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single item -->
                <div class="carousel-item">
                    <video style="min-width: 100%; min-height: 100%" playsinline autoplay muted loop>
                        <source class="h-100" src="./media/video3.mp4" type="video/mp4" />
                    </video>
                    <div class="mask" style="
                  background: linear-gradient(
                  45deg,
                  rgba(29, 236, 197, 0.7),
                  rgba(91, 14, 214, 0.7) 100%
                  );
                  ">
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="text-white text-center">
                                <h2>¿Eres administrador?</h2>
                                <a class="btn btn-outline-light btn-lg m-2" href="Admin.php#ingreso" target="_blank" role="button">Ingresar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Inner -->

            <!-- Controls -->
            <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
    <a name="ingreso"></a>
    <main class="mt-5">
        <!--Section: Content-->
        <hr class="my-5" />
        <div class="container">
            <section class="mb-5">
                <h4 class="mb-5 text-center">
                    <strong>Crear Grupos</strong>
                </h4>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <a name="ingresar"></a>
                        <form action="PortalAdmin.php" method="POST">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Bombo 1</label>
                                <select class="form-select" id="pais1" name="pais1" aria-label="Default select example">
                                    <option selected>Selecci&oacute;n</option>
                                    <option value="Qatar-./img/QAT.webp-4">Qatar</option>
                                    <option value="Inglaterra-./img/ENG.webp-1">Inglaterra</option>
                                    <option value="Argentina-./img/ARG.webp-2">Argentina</option>
                                    <option value="Francia-./img/FRA.webp-1-4">Francia</option>
                                    <option value="Espa&ntilde;a-./img/ESP.avif-1">Espa&ntilde;a</option>
                                    <option value="B&eacute;lgica-./img/BEL.webp-1">B&eacute;lgica</option>
                                    <option value="Brasil-./img/BRA.avif-2">Brasil</option>
                                    <option value="Portugal-./img/POR.avif-1">Portugal</option>
                                </select>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Bombo 2</label>
                                <select class="form-select" id="pais2" name="pais2" aria-label="Default select example">
                                    <option selected>Selecci&oacute;n</option>
                                    <option value="Ecuador-./img/ECU.avif-2">Ecuador</option>
                                    <option value="Ir&aacute;n-./img/IRN.webp-4">Ir&aacute;n</option>
                                    <option value="Arabia Saud&iacute;-./img/KSA.webp-4">Arabia Saud&iacute;</option>
                                    <option value="Qatar-./img/QAT.webp-4">Pendiente</option>
                                    <option value="Qatar-./img/QAT.webp-4">Pendiente</option>
                                    <option value="Canad&aacute;-./img/CAN.webp-3">Canad&aacute;</option>
                                    <option value="Serbia-./img/SRB.avif-1">Serbia</option>
                                    <option value="Ghana-./img/QAT.webp-6">Ghana</option>
                                </select>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Bombo 3</label>
                                <select class="form-select" id="pais3" name="pais3" aria-label="Default select example">
                                    <option selected>Selecci&oacute;n</option>
                                    <option value="Qatar-./img/QAT.webp-6">Senegal</option>
                                    <option value="USA-./img/QAT.webp-3">Estados Unidos</option>
                                    <option value="M&eacute;xico-./img/MEX.avif-3">M&eacute;xico</option>
                                    <option value="Dinamarca-./img/DEN.webp-1">Dinamarca</option>
                                    <option value="Alemania-./img/GER.avif-1">Alemania</option>
                                    <option value="Marruecos-./img/MAR.webp-6">Marruecos</option>
                                    <option value="Suiza-./img/SUI.webp-1">Suiza</option>
                                    <option value="Uruguay-./img/URU.webp-2">Uruguay</option>
                                </select>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Bombo 4</label>
                                <select class="form-select" id="pais4" name="pais4" aria-label="Default select example">
                                    <option selected>Selecci&oacute;n</option>
                                    <option value="Dinamarca-./img/DEN.webp-1">Paises Bajos</option>
                                    <option value="Escocia-./img/DEN.webp-1">Escocia</option>
                                    <option value="Polonia-./img/POL.webp-1">Polonia</option>
                                    <option value="Tunez-./img/TUN.webp-6">Tunez</option>
                                    <option value="Jap&oacute;n-./img/JPN.webp-4">Japon</option>
                                    <option value="Croacia-./img/CRO.webp-1">Croacia</option>
                                    <option value="Camer&uacute;n-./img/CMR.webp-6">Camer&uacute;n</option>
                                    <option value="Corea del Sur-./img/KOR.avif-4">Corea del Sur</option>
                                </select>
                            </div>
                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Grupo</label>
                                <select class="form-select" id="grupo" name="grupo" multiple aria-label="multiple select example">
                                    <option selected>Seleccione el grupo a crear</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                    <option value="G">G</option>
                                    <option value="H">H</option>
                                </select>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" name="Crear" class="btn btn-primary btn-block mb-4">
                                Agregar
                            </button>

                        </form>
                    </div>

                </div>
            </section>
            <!--Section: Content-->
            <?php
                if (isset($_POST['crear'])) {

                    $nombre = $_POST['nombre'];
                    $apellido = $_POST['apellido'];
                    $username = $_POST['usuario'];
                    $passwords = $_POST['password'];
                    $rol = "U";
                    $trabajoono = true;
                    if (isset($_POST["isadmin"])) {
                        $rol = $_POST["isadmin"];

                        $codadmin = $_POST['codadmin'];
                        if ($codadmin == "adminmero") {
                            $trabajoono = true;
                        } else {
                            echo '<div class="alert alert-warning" role="alert">Solo el administrador puede otorgar este rol</div>';
                            $trabajoono = false;
                        }
                    }

                    $acum = 0;
                    if ($trabajoono) {
                        $link = pg_connect("$host $port $dbname $user $password") or die('Could not connect: ' . " error de conexion");
                        $query = "SELECT * FROM usuarios WHERE usuario='$username'";
                        $result = pg_query($link, $query) or die('Query failed: ' . pg_last_error($link));
                        $makeorno = true;
                        while ($line = pg_fetch_array($result)) {
                            $userr = $line['usuario'];
                            $passr = $line['contra'];
                            $nomr = $line['nombre'];
                            $apr = $line['apellido'];
                            $rolr = $line['rol'];
                            $acumr = $line['acumulado'];
                            if ($username == $userr) {
                                $makeorno = false;
                                echo '<div class="alert alert-warning" role="alert">The email address is already registered!</div>';
                            }
                        }
                        if ($makeorno) {
                            $query2 = "INSERT INTO usuarios VALUES ('$username','$passwords','$nombre','$apellido','$rol',$acum)";
                            $result2 = pg_query($link, $query2);
                            if (!$result2) {
                                echo pg_last_error($dbconn);
                            } else {
                                echo '<div class="alert alert-success" role="alert">
                                    Dato Insertado Correctamente!
                                    </div>';
                            }
                        }
                    }
                }
            ?>
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
        <div class="py-4 text-center">
            <a role="button" class="btn btn-primary btn-lg m-2" href="https://www.youtube.com/fifa" rel="nofollow" target="_blank">
                Calendario de Partidos
            </a>
            <a role="button" class="btn btn-primary btn-lg m-2" href="https://www.facebook.com/fifaworldcup/" target="_blank">
                Grupos
            </a>
        </div>

        <hr class="m-0" />

        <div class="text-center py-4 align-items-center">
            <p>Follow FIFA World Cup on social media</p>
            <a href="https://www.youtube.com/fifa" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.facebook.com/fifaworldcup/" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/FIFAWorldCup?s=20&t=RQ55fP7wMinXP9pq8NBEBw" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://github.com/KevinLarios143-01/ProyectoMundial.git" class="btn btn-primary m-1" role="button" rel="nofollow" target="_blank">
                <i class="fab fa-github"></i>
            </a>
        </div>

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022:
            <b> Kevin Larios and Yair Menchú</b><br>
            <a class="text-dark" href="https://github.com/KevinLarios143-01/ProyectoMundial.git">Repositorio</a>
        </div>

        <!-- Copyright -->
    </footer>

    <!--Footer-->
</body>

</html>