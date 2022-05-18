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
                    <strong>Modificar Partido</strong>
                </h4>

                <div class="row d-flex justify-content-center">
                    <div class="col-md-6">
                        <a name="ingresar"></a>
                        <?php
                        $lugar = "";
                        $hora = "";
                        $fecha = "";
                        $num_part = "";
                        $participante1 = 0;
                        $participante2 = 0;
                        $marcador1 = 0;
                        $marcador2 = 0;
                        $marcor1=0;
                        $marcor2=0;
                        $estatus=0;
                        if ($_GET) {
                            $num_part = $_GET['num_partido'];
                            $hora = $_GET['hora'];
                            $fecha = $_GET['fecha'];
                            $participante1 = $_GET['cod_participante1'];
                            $participante2 = $_GET['cod_participante2'];
                            $marcador1 = $_GET['marcador1'];
                            $marcador2 = $_GET['marcador2'];
                            $marcor1=$marcador1;
                            $marcor2=$marcador2;

                            if ($marcor1 == $marcor2 && $marcor1==0) {
                                $estatus=0;
                            }else if ($marcor1 == $marcor2 && $marcor1!=0) {
                                $estatus=2;
                            }else if ($marcor1 > $marcor2) {
                                $estatus=3;
                            }else if ($marcor1 < $marcor2) {
                                $estatus=4;
                            }
                        }
                        ?>

                        <form action="ModPartido.php" method="POST">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="hidden" id="num_partido" name="num_partido" value="<?php echo "$num_part"; ?>" class="form-control" />
                                        <input type="number" value="<?php echo "$num_part"; ?>" class="form-control" disabled />
                                        <label for="hora">Partido</label>
                                    </div>
                                    <div class="form-floating">
                                        <input type="hidden" id="estatus" name="estatus" value="<?php echo "$estatus"; ?>" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="time" id="hora" name="hora" value="<?php echo "$hora"; ?>" class="form-control" />
                                        <label for="hora">Hora</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="date" id="fecha" name="fecha" value="<?php echo "$fecha"; ?>" class="form-control" />
                                        <label for="fecha">Fecha</label>
                                    </div>
                                </div>
                            </div>

                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="hidden" id="cod_participante1" name="cod_participante1" value="<?php echo "$participante1"; ?>" class="form-control" />
                                        <label for="fecha">Participante 1</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="hidden" id="cod_participante2" name="cod_participante2" value="<?php echo "$participante2"; ?>" class="form-control" />
                                        <label for="hora">Participante 2</label>
                                    </div>
                                </div>
                            </div><br>
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row mb-4">
                                <div class="col">
                                    <div class="form-floating">
                                        <input type="number" id="marcador1" name="marcador1" value="<?php echo "$marcador1"; ?>" class="form-control" />
                                        <label for="fecha">Marcador</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating">
                                        <div class="form-floating">
                                            <input type="number" id="marcador2" name="marcador2" value="<?php echo "$marcador2"; ?>" class="form-control" />
                                            <label for="fecha">Marcador</label>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- Submit button -->
                            <button type="submit" name="Modificar" class="btn btn-primary btn-block mb-4">
                                Guardar
                            </button>

                        </form>
                    </div>

                </div>
            </section>
            <!--Section: Content-->
            <?php
                $num_part =0;
                $hora ="";
                $fecha ="";
                $participante1 = 0;
                $participante2 = 0;
                $marcador1 = 0;
                $marcador2 = 0;
                $trabajoono = false;
            if (isset($_POST['Modificar'])) {

                $trabajoono = false;
                if (isset($_POST["hora"]) && isset($_POST["fecha"]) && isset($_POST["marcador1"]) && isset($_POST["marcador2"])) {
                    $num_part = $_POST['num_partido'];
                    $hora = $_POST['hora'];
                    $fecha = $_POST['fecha'];
                    $participante1 = $_POST['cod_participante1'];
                    $participante2 = $_POST['cod_participante2'];
                    $marcador1 = $_POST['marcador1'];
                    $marcador2 = $_POST['marcador2'];
                    $estatus=$_POST['estatus'];
                    $trabajoono = true;
                } else {
                    echo '<div class="alert alert-warning" role="alert">
                                Debe llenar todos los campos!
                                </div>';
                }

                if ($trabajoono) {

                    $query_traslape = "SELECT * FROM partidos WHERE fecha='$fecha' and hora='$hora';";

                    $hacer = verificar_traslape($query_traslape, $link);

                    if ($hacer) {
                       
                        if ($marcador1 > $marcador2) {
                            if($estatus==0){
                                $acl = "UPDATE participantes SET wins=wins+1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl2 = "UPDATE participantes SET loses=loses+1 WHERE cod_participante=$participante2;";
                                $resultUp2 = pg_query($link, $acl2) or die('Query failed: ' . pg_last_error($link));
                            }else if($estatus==2){
                                $acl = "UPDATE participantes SET draws=draws-1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl2 = "UPDATE participantes SET draws=draws-1 WHERE cod_participante=$participante2;";
                                $resultUp2 = pg_query($link, $acl2) or die('Query failed: ' . pg_last_error($link));
                                $acl3 = "UPDATE participantes SET wins=wins+1 WHERE cod_participante=$participante1;";
                                $resultUp3 = pg_query($link, $acl3) or die('Query failed: ' . pg_last_error($link));
                                $acl4 = "UPDATE participantes SET loses=loses+1 WHERE cod_participante=$participante2;";
                                $resultUp4 = pg_query($link, $acl4) or die('Query failed: ' . pg_last_error($link));
                            }else if($estatus==4){
                                $acl = "UPDATE participantes SET wins=wins-1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET loses=loses-1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET wins=wins+1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET loses=loses+1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                            }
                            
                        } else if ($marcador1 < $marcador2) {
                            if($estatus==0){
                                $acl = "UPDATE participantes SET wins=wins+1 WHERE cod_participante=$participante2";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET loses=loses+1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                            }else if($estatus==2){
                                $acl = "UPDATE participantes SET draws=draws-1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET draws=draws-1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET wins=wins+1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET loses=loses+1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                            }else if($estatus==3){
                                $acl = "UPDATE participantes SET wins=wins-1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET loses=loses-1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET wins=wins+1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET loses=loses+1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                            }
                        } else if ($marcador1 == $marcador2) {
                            if($estatus==0){
                                $acl = "UPDATE participantes SET draws=draws+1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET draws=draws+1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                            }else if($estatus==3){
                                $acl = "UPDATE participantes SET wins=wins-1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET loses=loses-1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET draws=draws+1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET draws=draws+1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                            } else if($estatus==4){
                                $acl = "UPDATE participantes SET wins=wins-1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET loses=loses-1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET draws=draws+1 WHERE cod_participante=$participante2;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                                $acl = "UPDATE participantes SET draws=draws+1 WHERE cod_participante=$participante1;";
                                $resultUp = pg_query($link, $acl) or die('Query failed: ' . pg_last_error($link));
                            }
                        } 

                        $update = "UPDATE partidos SET hora='$hora',fecha='$fecha', marcador1=$marcador1, marcador2=$marcador2 WHERE num_partido=$num_part;";
                        $resultado = pg_query($link, $update);
                        if (!$resultado) {
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
                    echo '<div class="alert alert-warning" role="alert">Este partido ya fue programado!</div>';
                } else {
                    $makeornos = true;
                }
                return $makeornos;
            }
            function verificar_traslape($querys, $links)
            {
                $makeornos = false;
                $result = pg_query($links, $querys) or die('Query failed: ' . pg_last_error($links));
                $verify_exist = pg_num_rows($result);

                if ($verify_exist >= 5) {
                    $makeornos = false;
                    echo '<div class="alert alert-warning" role="alert">No se pueden programar mas partidos en este horario!</div>';
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
            ?>
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">
        <div class="py-4 text-center">
            <a role="button" class="btn btn-primary btn-lg m-2" href="./EditPartidos.php#content">
                Partidos
            </a>
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