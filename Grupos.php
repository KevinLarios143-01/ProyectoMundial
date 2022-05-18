<?php
require('conn.php');
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
                    <strong>Grupo</strong>
                </h4>
                <div class="row d-flex justify-content-center">
                    <div class="btn-group shadow-0" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-outline-secondary" data-mdb-color="dark">Todos</button>
                        <button type="button" class="btn btn-outline-secondary" data-mdb-color="dark">A</button>
                        <button type="button" class="btn btn-outline-secondary" data-mdb-color="dark">B</button>
                        <button type="button" class="btn btn-outline-secondary" data-mdb-color="dark">C</button>
                        <button type="button" class="btn btn-outline-secondary" data-mdb-color="dark">D</button>
                        <button type="button" class="btn btn-outline-secondary" data-mdb-color="dark">E</button>
                        <button type="button" class="btn btn-outline-secondary" data-mdb-color="dark">F</button>
                        <button type="button" class="btn btn-outline-secondary" data-mdb-color="dark">G</button>
                        <button type="button" class="btn btn-outline-secondary" data-mdb-color="dark">H</button>
                    </div>
                </div><br><br>
                <div class="row d-flex justify-content-center">
                    <?php
                    $query_grupos = "SELECT g.cod_grupo, g.nombre_grupo FROM grupo g";
                    $result_grupos = pg_query($link, $query_grupos) or die('Query failed: ' . pg_last_error($link));
                    while ($line = pg_fetch_array($result_grupos)) {
                        $cod_grupo = $line['cod_grupo'];
                        $nombre_grupo = $line['nombre_grupo'];
                        echo " 
                        <table class='table align-middle mb-0 bg-white'>
                            <thead class='bg-light'>
                                <tr>
                                    <th>Grupo $nombre_grupo</th>
                                    <th>PG</th>
                                    <th>PE</th>
                                    <th>PP</th>
                                    <th>GF</th>
                                    <th>GC</th>
                                    <th>+/-</th>
                                    <th>PTS</th>
                                </tr>
                            </thead>
                            <tbody>";
                    ?>

                    <?php
                        $query_grupo_esp = "SELECT p.nombre_participante,p.cod_participante,f.nombre_federacion,p.wins,p.draws,p.loses, g.nombre_grupo, p.skin
                                            FROM participantes p, grupo g, federacion f
                                            WHERE p.cod_grupo=$cod_grupo and p.cod_grupo=g.cod_grupo and p.cod_federacion=f.cod_federacion
                                            ORDER BY p.wins DESC,p.draws DESC";

                        $result_grupo_esp = pg_query($link, $query_grupo_esp) or die('Query failed: ' . pg_last_error($link));
                        $makeorno = true;
                        $ganadas=3;
                        $empatadas=1;
                        $perdidas=0;
                        $punticos=0;
                        while ($line = pg_fetch_array($result_grupo_esp)) {
                            $participante = $line['nombre_participante'];
                            $cod_participante=$line['cod_participante'];
                            $federacion= $line['nombre_federacion'];
                            $wins= $line['wins'];
                            $draws= $line['draws'];
                            $loses= $line['loses'];
                            $grupo = $line['nombre_grupo'];
                            $skin = $line['skin'];
                            
                            $punticos=($wins*$ganadas)+($draws*$empatadas)+($loses*$perdidas);

                            $query_partidos_cod = "SELECT m.marcador1, m.marcador2,p.cod_participante, m.cod_participante1,m.cod_participante2,m.fase
                                                    FROM participantes p, partidos m
                                                    WHERE p.cod_participante=$cod_participante and (p.cod_participante=m.cod_participante1 or p.cod_participante=m.cod_participante2)
                                                    GROUP BY m.marcador1, m.marcador2,p.cod_participante, m.cod_participante1,m.cod_participante2,m.fase;";
                            
                            $result_partidos_cod = pg_query($link, $query_partidos_cod) or die('Query failed: ' . pg_last_error($link));
                            
                            $goles_a_favor=array();
                            $goles_en_contra=array();
                            while ($line = pg_fetch_array($result_partidos_cod)) {
                                $marcador1 = $line['marcador1'];
                                $marcador2=$line['marcador2'];
                                $par_general= $line['cod_participante'];
                                $par1= $line['cod_participante1'];
                                $par2= $line['cod_participante2'];
                                $fase_par=$line['fase'];
                                if($cod_participante==$par1 && $fase_par=="G"){
                                    array_push($goles_a_favor,$marcador1);
                                    array_push($goles_en_contra,$marcador2);
                                }else if($cod_participante==$par2 && $fase_par=="G"){
                                    array_push($goles_a_favor,$marcador2);
                                    array_push($goles_en_contra,$marcador1);
                                }

                            }
                            $goles_favor=array_sum($goles_a_favor);
                            $goles_contra=array_sum($goles_en_contra);
                            $dif_goles=$goles_favor-$goles_contra;
                            echo "
                                    <tr>
                                        <td>
                                            <div class='d-flex align-items-center'>
                                                <img src='$skin' alt='' style='width: 45px; height: 45px' class='rounded-circle'/>
                                                <div class='ms-3'>
                                                    <p class='fw-bold mb-1'>$participante</p>
                                                    <p class='text-muted mb-0'>$federacion</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class='fw-normal mb-1'>$wins</p>
                                        </td>
                                        <td>
                                            <p class='fw-normal mb-1'>$draws</p>
                                        </td>
                                        <td>
                                            <p class='fw-normal mb-1'>$loses</p>
                                        </td>
                                        <td>
                                        <p class='fw-normal mb-1'>$goles_favor</p>
                                        </td>
                                        <td>
                                            <p class='fw-normal mb-1'>$goles_contra</p>
                                        </td>
                                        <td>
                                            <p class='fw-normal mb-1'>$dif_goles</p>
                                        </td>
                                        <td>
                                            <p class='fw-normal mb-1'>$punticos</p>
                                        </td>
                                        
                                    </tr>";
                        }
                        echo"
                            </tbody>
                        </table>
                        <hr class='my-5'/>";
                    }    
                    ?>


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