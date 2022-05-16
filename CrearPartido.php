<?php
require('conn.php');
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
                                <h2>Quinielas para vivir la emoción</h2>
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
                    <strong>Crear Partido</strong>
                </h4>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <a name="ingresar"></a>

                        <form action="CrearPartido.php" method="POST">

                            <div class="form-outline mb-4">
                                <label class="form-label" for="form3Example3">Bombo 1</label>
                                <select class="form-select" id="pais1" name="pais1" multiple aria-label="multiple select example">
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
                                <label class="form-label" for="form3Example3">Estadio</label>
                                <select class="form-select" id="lugar" name="lugar" aria-label="multiple select example">
                                    <option selected>Seleccione el estadio</option>
                                    <?php 
                                        $cod_lugar=0;
                                        $nombre_lugar="";
                                        $que="SELECT * FROM lugar ORDER BY cod_lugar ASC";
                                        $res = pg_query($link, $que) or die('Query failed: ' . pg_last_error($link));
                                        while ($line = pg_fetch_array($res)){
                                            $cod_lugar=$line["cod_lugar"];
                                            $nombre_lugar=$line["nombre_estadio"];
                                            echo "<option value='$cod_lugar'>$nombre_lugar</option>";
                                        }
                                    ?> 
                                </select>
                            </div>
                            <!-- Submit button -->
                            <button type="submit" name="crear" class="btn btn-primary btn-block mb-4">
                                Agregar
                            </button>

                        </form>
                    </div>

                </div>
            </section>
            <!--Section: Content-->
            <?php
            if (isset($_POST['crear'])) {
                $rol = "";
                $pais1 = "";
                $pais2 = "";
                $pais3 = "";
                $pais4 = "";
                $grupo = "";
                $lista1 = array();
                $lista2 = array();
                $lista3 = array();
                $lista4 = array();
                $trabajoono = false;
                if (isset($_POST["pais1"]) && isset($_POST["pais2"]) && isset($_POST["pais3"]) && isset($_POST["pais4"]) && isset($_POST["grupo"])) {
                    $pais1 = $_POST['pais1'];
                    $pais2 = $_POST['pais2'];
                    $pais3 = $_POST['pais3'];
                    $pais4 = $_POST['pais4'];
                    $grupo = $_POST['grupo'];

                    //particiones
                    $lista1 = repartir($pais1);
                    $lista2 = repartir($pais2);
                    $lista3 = repartir($pais3);
                    $lista4 = repartir($pais4);

                    $trabajoono = true;
                }

                if ($trabajoono) {
                    $makeorno1 = false;
                    $makeorno2 = false;
                    $makeorno3 = false;
                    $makeorno4 = false;

                    $query = "SELECT * FROM participantes WHERE nombre_participante='$lista1[0]'";
                    $makeorno1 = verificar_existencia($query, $link);
                    $query = "SELECT * FROM participantes WHERE nombre_participante='$lista2[0]'";
                    $makeorno2 = verificar_existencia($query, $link);
                    $query = "SELECT * FROM participantes WHERE nombre_participante='$lista3[0]'";
                    $makeorno3 = verificar_existencia($query, $link);
                    $query = "SELECT * FROM participantes WHERE nombre_participante='$lista4[0]'";
                    $makeorno4 = verificar_existencia($query, $link);
                    $id_que_toca = "SELECT count(*) AS ids FROM PARTICIPANTES;";
                    $id = val_id($id_que_toca, $link);

                    $verificar_grupo_lleno = "SELECT count(*) AS grupos
                    FROM participantes P, grupo G
                    WHERE P.cod_grupo=$grupo and G.cod_grupo=$grupo;";
                    $hacer = verificar_espacios($verificar_grupo_lleno, $link);
                    if ($makeorno1 && $makeorno2 && $makeorno3 && $makeorno4 && $hacer) {

                        $id++;
                        $query2 = "INSERT INTO participantes VALUES ($id,'$lista1[0]',1,'$lista1[1]',$lista1[2],$grupo)";
                        $result2 = pg_query($link, $query2);
                        $id++;
                        $query3 = "INSERT INTO participantes VALUES ($id,'$lista2[0]',2,'$lista2[1]',$lista2[2],$grupo)";
                        $result3 = pg_query($link, $query3);
                        $id++;
                        $query4 = "INSERT INTO participantes VALUES ($id,'$lista3[0]',3,'$lista3[1]',$lista3[2],$grupo)";
                        $result4 = pg_query($link, $query4);
                        $id++;
                        $query5 = "INSERT INTO participantes VALUES ($id,'$lista4[0]',4,'$lista4[1]',$lista4[2],$grupo)";
                        $result5 = pg_query($link, $query5);
                        if (!$result2 && !$result3 && !$result4 && !$result5) {
                            echo pg_last_error($dbconn);
                        } else {
                            echo '<div class="alert alert-success" role="alert">
                                    Datos Insertado Correctamente!
                                    </div>';
                        }
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

            function verificar_espacios($querys, $links)
            {
                $makeornos = false;
                $id = 0;
                $resultss = pg_query($links, $querys) or die('Query failed: ' . pg_last_error($links));

                while ($line = pg_fetch_array($resultss)) {
                    $id = $line['grupos'];
                }
                if ($id == 0) {
                    $makeornos = true;
                } else {
                    echo '<div class="alert alert-warning" role="alert">Este grupo ya esta lleno!</div>';
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
            function repartir($pais)
            {
                $lista = explode("-", $pais);
                return $lista;
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
            © 2022:
            <b> Kevin Larios and Yair Menchú</b><br>
            <a class="text-dark" href="https://github.com/KevinLarios143-01/ProyectoMundial.git">Repositorio</a>
        </div>

        <!-- Copyright -->
    </footer>

    <!--Footer-->
</body>

</html>