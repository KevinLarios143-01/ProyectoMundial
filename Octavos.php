<?php
require('conn.php');
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
    <?php
    $octavos = array();
    $horas=array("20:00", "21:00", "22:00","18:00");
    if (isset($_POST['ejecutar'])) {
        $id_que_toca = "SELECT count(*) AS ids FROM partidos;";
        $id = val_id($id_que_toca, $link);
        if ($id == 49) {
            $query_grupos = "SELECT g.cod_grupo FROM grupo g";
            $result_grupos = pg_query($link, $query_grupos) or die('Query failed: ' . pg_last_error($link));
            $trabajo_nel = false;
            while ($line = pg_fetch_array($result_grupos)) {
                $cod_grupo = $line['cod_grupo'];
                $query_grupo_esp = "SELECT p.cod_participante,p.wins,p.draws, p.loses
                                    FROM participantes p, grupo g, federacion f
                                    WHERE p.cod_grupo=$cod_grupo and p.cod_grupo=g.cod_grupo and p.cod_federacion=f.cod_federacion
                                    ORDER BY p.wins DESC,p.draws DESC;";

                $result_grupo_esp = pg_query($link, $query_grupo_esp) or die('Query failed: ' . pg_last_error($link));
                $makeorno = true;
                $cont = 1;

                while ($line = pg_fetch_array($result_grupo_esp)) {
                    $part_jugados = array();
                    if ($cont <= 2) {
                        $cod_participante = $line['cod_participante'];
                        $wins = $line['wins'];
                        $draws = $line['draws'];
                        $loses = $line['loses'];
                        array_push($part_jugados, $wins);
                        array_push($part_jugados, $draws);
                        array_push($part_jugados, $loses);

                        array_push($octavos, $cod_participante);
                        if (array_sum($part_jugados) == 3) {
                            $trabajo_nel = true;
                        } else {
                            $trabajo_nel = false;
                        }
                    }
                    $cont++;
                }
            }
            $makeorno1 = false;
            $makeorno2 = false;
            if ($trabajo_nel) {                                              
                $lugar = rand(1, 8);
                $ahorita = rand(0, 3);
                $hora=$horas[$ahorita];
                $fecha=randomDate(date("03-12-2022"), date("06-12-2022"));
                $insert = "INSERT INTO partidos VALUES ($id,$lugar,'$hora','$fecha','E',$octavos[0],$octavos[3],0,0)";
                $resultado = pg_query($link, $insert);
                $id = val_id($id_que_toca, $link);
                $lugar = rand(1, 8);
                $ahorita = rand(0, 3);
                $hora=$horas[$ahorita];
                $fecha=randomDate(date("03-12-2022"), date("06-12-2022"));
                $insert = "INSERT INTO partidos VALUES ($id,$lugar,'$hora','$fecha','E',$octavos[4],$octavos[7],0,0)";
                $resultado = pg_query($link, $insert);
                $id = val_id($id_que_toca, $link);
                $lugar = rand(1, 8);
                $ahorita = rand(0, 3);
                $hora=$horas[$ahorita];
                $fecha=randomDate(date("03-12-2022"), date("06-12-2022"));
                $insert = "INSERT INTO partidos VALUES ($id,$lugar,'$hora','$fecha','E',$octavos[6],$octavos[5],0,0)";
                $resultado = pg_query($link, $insert);
                $id = val_id($id_que_toca, $link);
                $lugar = rand(1, 8);
                $ahorita = rand(0, 3);
                $hora=$horas[$ahorita];
                $fecha=randomDate(date("03-12-2022"), date("06-12-2022"));
                $insert = "INSERT INTO partidos VALUES ($id,$lugar,'$hora','$fecha','E',$octavos[2],$octavos[1],0,0)";
                $resultado = pg_query($link, $insert);
                $id = val_id($id_que_toca, $link);
                $lugar = rand(1, 8);
                $ahorita = rand(0, 3);
                $hora=$horas[$ahorita];
                $fecha=randomDate(date("03-12-2022"), date("06-12-2022"));
                $insert = "INSERT INTO partidos VALUES ($id,$lugar,'$hora','$fecha','E',$octavos[8],$octavos[11],0,0)";
                $resultado = pg_query($link, $insert);
                $id = val_id($id_que_toca, $link);
                $lugar = rand(1, 8);
                $ahorita = rand(0, 3);
                $hora=$horas[$ahorita];
                $fecha=randomDate(date("03-12-2022"), date("06-12-2022"));
                $insert = "INSERT INTO partidos VALUES ($id,$lugar,'$hora','$fecha','E',$octavos[12],$octavos[15],0,0)";
                $resultado = pg_query($link, $insert);
                $id = val_id($id_que_toca, $link);
                $lugar = rand(1, 8);
                $ahorita = rand(0, 3);
                $hora=$horas[$ahorita];
                $fecha=randomDate(date("03-12-2022"), date("06-12-2022"));
                $insert = "INSERT INTO partidos VALUES ($id,$lugar,'$hora','$fecha','E',$octavos[10],$octavos[9],0,0)";
                $resultado = pg_query($link, $insert);
                $id = val_id($id_que_toca, $link);
                $lugar = rand(1, 8);
                $ahorita = rand(0, 3);
                $hora=$horas[$ahorita];
                $fecha=randomDate(date("03-12-2022"), date("06-12-2022"));
                $insert = "INSERT INTO partidos VALUES ($id,$lugar,'$hora','$fecha','E',$octavos[14],$octavos[13],0,0)";
                $resultado = pg_query($link, $insert);


                if (!$resultado) {
                    echo pg_last_error($dbconn);
                } else {
                    echo '<div class="alert alert-success" role="alert">
                            Datos Insertado Correctamente!
                            </div>';
                }
            } else {
                echo '<div class="alert alert-warning" role="alert">
                Deben Haberse Jugado Todos los partidos!
                </div>';
            }
        }else if($id>49){
            echo '<div class="alert alert-warning" role="alert">
            Los partidos ya están programados, solo el administrador puede actualizar!
            </div>';
        }
    }
    function verificar_existencia($querys, $links)
    {
        $makeornos = false;
        $result = pg_query($links, $querys) or die('Query failed: ' . pg_last_error($links));
        $verify_exist = pg_num_rows($result);

        if ($verify_exist > 0) {
            $makeornos = false;
            echo '<div class="alert alert-warning" role="alert">Este partido ya fue programado!</div>';
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
        $id++;
        return $id;
    }
    function randomDate($start_date, $end_date)
    {
        // Convert to timetamps 
        $min = strtotime($start_date);
        $max = strtotime($end_date);
        // Generate random number using above bounds 
        $val = rand($min, $max);
        // Convert back to desired date format 
        return date('Y-m-d', $val);
    }

    ?>
    <!--Main layout-->
    <main class="mt-5">
        <a name="content"></a>
        <hr class="my-5" />
        <div class="container">
            <!--Section: Content-->
            <section class="mb-5">
                <h4 class="mb-5 text-center">
                    <strong>Octavos de Final</strong><br />
                </h4>

                <div class="row d-flex justify-content-center">
                    <div class="text-align:center;">

                        <!--Tomar los datos de la tabla de partidos-->

                        <table class="table align-middle mb-0 bg-white">
                            <thead class='bg-light'>
                                <tr>
                                    <th>Datos </th>
                                    <th>Equipo1 </th>
                                    <th>Marcador1 </th>
                                    <th>Marcador2 </th>
                                    <th>Equipo2 </th>
                                    <th>Estado </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * from partidos WHERE fase='E' ORDER BY num_partido ASC;";
                                $result = pg_query($link, $sql) or die('Query failed: ' . pg_last_error($link));
                                while ($line = pg_fetch_array($result)) {
                                    $id = $line['num_partido'];
                                    $codlugar = $line['cod_lugar'];

                                    $query_lugar = "SELECT * FROM lugar WHERE cod_lugar=$codlugar;";
                                    $result_lugar = pg_query($link, $query_lugar) or die('Query failed: ' . pg_last_error($link));
                                    while ($line3 = pg_fetch_array($result_lugar)) {
                                        $line3['cod_lugar'];
                                        $nomlugar = $line3['nombre_estadio'];
                                    }
                                    $hora = $line['hora'];
                                    $fecha = $line['fecha'];
                                    $equipo1 = $line['cod_participante1'];
                                    $equipo2 = $line['cod_participante2'];
                                    $marc1 = $line['marcador1'];
                                    $marc2 = $line['marcador2'];
                                    $fechaAcomparar = $fecha;
                                ?>
                                    <tr>
                                        <td>
                                            <p class="fw-bold mb-1"><?php echo $fecha; ?></p>
                                            <p class='fw-normal mb-1'><?php echo $hora . " Local Time"; ?></p>
                                            <p class='text-muted mb-0'><?php echo $nomlugar; ?></p>
                                            <span class='badge badge-success rounded-pill d-inline'><?php echo "Match " . $id; ?></span>
                                        </td>
                                        <?php

                                        $sql2 = "select * from participantes";
                                        $result2 = pg_query($link, $sql2) or die('Query failed: ' . pg_last_error($link));
                                        while ($line2 = pg_fetch_array($result2)) {

                                            if ($equipo1 == $line2['cod_participante']) {

                                                $nom1 = $line2['nombre_participante'];
                                                $band1 = $line2['skin'];
                                            } elseif ($equipo2 == $line2['cod_participante']) {

                                                $nom2 = $line2['nombre_participante'];
                                                $band2 = $line2['skin'];
                                            }
                                        }
                                        ?>
                                        <td>
                                            <div class='d-flex align-items-center'>
                                                <img src="<?php echo $band1 ?>" alt='' style='width: 45px; height: 45px' class='rounded-circle' />
                                                <div class='ms-3'>
                                                    <p class='fw-bold mb-1'><?php echo $nom1; ?></p>
                                                </div>

                                            </div>
                                        </td>
                                        <td>
                                            <p class='text-muted mb-0'><?php echo $marc1; ?></p>
                                        </td>
                                        <td>
                                            <p class='text-muted mb-0'><?php echo $marc2; ?></p>
                                        </td>
                                        <td>
                                            <div class='d-flex align-items-center'>
                                                <img src="<?php echo $band2 ?>" alt='' style='width: 45px; height: 45px' class='rounded-circle' />
                                                <div class='ms-3'>
                                                    <p class='fw-bold mb-1'><?php echo $nom2; ?></p>
                                                </div>

                                            </div>
                                        </td>


                                        <?php
                                        if ($fechaActual > $fechaAcomparar) {

                                        ?>
                                            <td>
                                                <button type='button' class="btn btn-outline-dark btn-rounded" data-mdb-ripple-color="dark">
                                                    Finalizado
                                                </button>
                                            </td>
                                        <?php


                                        } elseif ($fechaActual == $fechaAcomparar) {

                                        ?>
                                            <td>
                                                <button type='button' class="btn btn-outline-success btn-rounded" data-mdb-ripple-color="dark">
                                                    Hoy es el partido
                                                </button>
                                            </td>
                                        <?php

                                        } else {
                                        ?>
                                            <td>
                                                <button type='button' class="btn btn-outline-primary btn-rounded" data-mdb-ripple-color="dark">
                                                    Próximamente
                                                </button>
                                            </td>
                                        <?php
                                        }
                                        ?>
                                    </tr>
                                <?php
                                }
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
            <a role="button" class="btn btn-primary btn-lg m-2" href="./Partidos.php#content" rel="nofollow">
                Partidos
            </a>
            <a role="button" class="btn btn-primary btn-lg m-2" href="./Resultados.php#content">
                Resultados
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