<?php
include('conn.php');
session_start();
$nombresa = $_SESSION['nombre_usuario'];
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
    <!-- JQUERY 
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="js/quinela.js"></script>
    <title>FIFA</title>-->
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
                            <a class="nav-link" aria-current="page" href="./Grupos.php">Grupos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Partidos.php" rel="nofollow">Partidos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Eliminatorias.php" rel="nofollow">Eliminatorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./Resultados.php">Resultados</a>
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
                <div class="carousel-item  active">
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
                                <h1 class="mb-3">Copa Mundial de la FIFA Catar 2022&trade;</h1>
                                <h2>Bienvenido</h2>
                                <h4><?php echo "$nombresa"; ?></h4>
                                <a class="btn btn-outline-light btn-lg m-2" href="salir.php" role="button">Salir</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single item -->
                <div class="carousel-item">
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
                                <a class="btn btn-outline-light btn-lg m-2" href="./index.php#ingresar" role="button" rel="nofollow">Quinielas</a>
                                <a class="btn btn-outline-light btn-lg m-2" href="./registro.php#regis" role="button">Registrarse</a>
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
                                <h2>Quinielas para vivir la emoci??n</h2>
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
    <a name="ingreso"></a>
    <main class="mt-5">
        <!--Section: Content-->
        <hr class="my-5" />
        <div class="container">
            <section class="mb-5">
                <h4 class="mb-5 text-center">
                    <strong>Estadios</strong>
                </h4>
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query_estadios = "SELECT * FROM lugar l ORDER BY l.cod_lugar ";
                        $result_estadios = pg_query($link, $query_estadios) or die('Query failed: ' . pg_last_error($link));
                        $makeorno = true;
                        while ($line = pg_fetch_array($result_estadios)) {
                            $cod = $line['cod_lugar'];
                            $nombre = $line['nombre_estadio'];
                            echo "<tr>
                                        <th scope='row'>$cod</th>
                                        <td>$nombre</td>
                                    </tr>";
                        }
                        ?>
                    </tbody>

                </table><br>
                <hr class="my-5" />
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <a name="ingresar"></a>
                        <h4 class="mb-5 text-center">
                            <strong>Crear Estadio</strong>
                        </h4>
                        <form action="Estadios.php" method="POST">
                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="nombre_e" name="nombre_e" class="form-control" />
                                <label class="form-label" for="nombre_e">Nombre</label>
                            </div>
                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form5Example3" checked />
                                <label class="form-check-label" for="form5Example3">
                                    Pertenece a Qatar
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" name="agregar" class="btn btn-primary btn-block mb-4">Agregar</button>
                        </form>
                    </div>

                </div>
            </section>
            <!--Section: Content-->
            <?php
            if (isset($_POST['agregar'])) {
                $nombre_e = "";
                $id = 0;
                $trabajoono = false;
                if (isset($_POST["nombre_e"])) {
                    $nombre_e = $_POST["nombre_e"];
                    //particiones
                    $trabajoono = true;
                }

                if ($trabajoono) {
                    $id_que_toca = "SELECT count(*) AS ids FROM lugar;";
                    $id = val_id($id_que_toca, $link);
                    $id++;
                    $query = "INSERT INTO lugar VALUES ($id,'$nombre_e');";
                    $result = pg_query($link, $query) or die('Query failed: ' . pg_last_error($link));
                    if (!$result) {
                        echo pg_last_error($dbconn);
                    } else {
                        echo '<div class="alert alert-success" role="alert">
                                    Datos Insertado Correctamente!
                                    </div>';
                    }
                }
            }

            //separando valores de variables
            function verificar_existencia($querys, $links)
            {
                $makeornos = false;
                $result = pg_query($links, $querys) or die('Query failed: ' . pg_last_error($links));
                $verify_exist = pg_num_rows($result);

                if ($verify_exist > 0) {
                    $makeornos = false;
                    echo '<div class="alert alert-warning" role="alert">Este equipo ya esta participando!</div>';
                } else {
                    $makeornos = true;
                }
                return $makeornos;
            }

            function val_id($querys, $links)
            {
                $id = 0;
                $result = pg_query($links, $querys) or die('Query failed: ' . pg_last_error($links));

                while ($line = pg_fetch_array($result)) {
                    $id = $line['ids'];
                }
                return $id;
            }


            ?>
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
        <div class="py-4 text-center">
            <a role="button" class="btn btn-primary btn-lg m-2" href="./PortalAdmin.php#content">
                Panel de Control
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
            ?? 2022:
            <b> Kevin Larios and Yair Mench??</b><br>
            <a class="text-dark" href="https://github.com/KevinLarios143-01/ProyectoMundial.git">Repositorio</a>
        </div>

        <!-- Copyright -->
    </footer>

    <!--Footer-->
</body>

</html>