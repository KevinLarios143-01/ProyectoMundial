<?php
require('conn.php');
session_start();
date_default_timezone_set('America/Guatemala');
$fechaActual = date('Y-m-d');
$horaActual = date('h:i:s');
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
                            <a class="nav-link" href="./Eliminatorias.php" rel="nofollow">Eliminatorias</a>
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
                                <a class="btn btn-outline-light btn-lg m-2" href="./index.php#ingresar" role="button" rel="nofollow">Quinielas</a>
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
    <!--Main layout-->
    <main class="mt-5">
        <a name="content"></a>
        <hr class="my-5" />
        <div class="container">
            <!--Section: Content-->
            <section class="mb-5">
                <h4 class="mb-5 text-center">
                    <strong>RESULTADOS</strong><br />
                </h4>

                <div class="row d-flex justify-content-center">
                    <div class="text-align:center;">

                        <!--Tomar los datos de la tabla de partidos-->

                        <table class="table align-middle mb-0 bg-white">
                            <thead class='bg-light'>
                                <tr>
                                    <th>FASE</th>
                                    <th>USUARIO </th>
                                    <th>PUNTOS ACUMULADOS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $aux = 0;
                                $link = pg_connect("$host $port $dbname $user $password") or die('Could not connect: ' . " error de conexion");
                                $sqlUs = "select * from usuarios";
                                $acumuladisimo=0;
                                $resultUs = pg_query($link, $sqlUs) or die('Query failed: ' . pg_last_error($link));
                                while ($lineUs = pg_fetch_array($resultUs)) {
                                    $username = $lineUs['usuario'];
                                    $acum = $lineUs['acumulado'];
                                    $acumuladisimo=$acum;
                                    $puntosG = 0;
                                    $puntosE = 0;
                                    $uf = '';

                                    $sql = "select * from quinielas q, partidos m 
                                            where q.num_partido = m.num_partido and q.usuario = '$username';";
                                    $result = pg_query($link, $sql) or die('Query failed: ' . pg_last_error($link));
                                    while ($line = pg_fetch_array($result)) {

                                        $id = $line['num_partido'];
                                        $fecha = $line['fecha'];
                                        $fase = $line['fase'];
                                        $equipo1 = $line['cod_participante1'];
                                        $equipo2 = $line['cod_participante2'];
                                        $marc1 = $line['marcador1'];
                                        $marc2 = $line['marcador2'];
                                        $uf = $fase;

                                        if ($fechaActual > $fecha) {
                                            if ($marc1 == 0 and $marc2 == 0) {

                                                $numero_aleatorio1 = rand(0, 10);
                                                $numero_aleatorio2 = rand(0, 10);
                                                $marc1 = $numero_aleatorio1;
                                                $marc2 = $numero_aleatorio2;
                                                $acl = "UPDATE partidos SET marcador1=$numero_aleatorio1, marcador2 =$numero_aleatorio2 WHERE num_partido=$id;";
                                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                            }

                                            if ($fase == 'G') {

                                                $pro1 = 0;
                                                $pro2 = 0;

                                                $pro1 = $line['m_1'];
                                                $pro2 = $line['m_2'];


                                                if (($pro1 == $marc1) && (($pro2 == $marc2))) {

                                                    $puntosG = $puntosG + 6;
                                                } else {
                                                    if ($pro1 > $pro2) {
                                                        $p1 = 1;
                                                    } else {
                                                        $p1 = 2;
                                                    }

                                                    if ($p1 == 1) {
                                                        if ($marc1 > $marc2) {
                                                            $puntosG = $puntosG + 3;
                                                        }
                                                    } elseif ($p1 == 2) {
                                                        if ($marc2 > $marc1) {
                                                            $puntosG = $puntosG + 3;
                                                        }
                                                    }
                                                }
                                            }

                                            if ($fase == 'E') {

                                                if ($aux == 0) {
                                ?>
                                                    <tr>
                                                        <td><?php echo $fase; ?></td>
                                                        <td><?php echo $username; ?></td>
                                                        <td><?php echo $puntosG; ?></td>
                                                    </tr>
                                    <?php
                                                    $aux = 1;
                                                }

                                                $pro1 = 0;
                                                $pro2 = 0;
                                                $principal = $vr['usuario'];
                                                $pro1 = $vr['m_1'];
                                                $pro2 = $vr['m_2'];


                                                if (($pro1 == $marc1) && (($pro2 == $marc2))) {

                                                    $puntosE = $puntosE + 6;
                                                } else {
                                                    if ($pro1 > $pro2) {
                                                        $p1 = 1;
                                                    } else {
                                                        $p1 = 2;
                                                    }

                                                    if ($p1 == 1) {
                                                        if ($marc1 > $marc2) {
                                                            $puntosE = $puntosE + 3;
                                                        }
                                                    } elseif ($p1 == 2) {
                                                        if ($marc2 > $marc1) {
                                                            $puntosE = $puntosE + 3;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }


                                    ?>
                                    <tr>
                                        <td>
                                            <p class="fw-bold mb-1"><?php echo $uf; ?></p>
                                        </td>
                                        <td>
                                            <p class="fw-bold mb-1"><?php echo $username; ?></p>
                                        </td>
                                        <td>
                                            <p class='fw-normal mb-1'><?php echo $acumuladisimo; ?></p>
                                        </td>
                                    </tr>
                                <?php

                                } //END CONSULTA DE USUARIOS


                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
            <!--Section: Content-->

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