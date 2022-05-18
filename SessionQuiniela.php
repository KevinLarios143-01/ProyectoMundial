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
<?php
require('conn.php');
session_start();

    if (isset($_POST['ingresar'])) {

        $username = $_POST['user'];
        $passwords = $_POST['pass'];
        $trabajoono = true;
        if ($username == "" || $passwords == "") {
            $trabajoono = false;
            echo '<div class="alert alert-warning" role="alert">Debe llenar ambos campos</div>';
        }

        if ($trabajoono) {

            $query = "SELECT usuario, contra FROM usuarios WHERE usuario='$username' AND contra='$passwords'";
            $result = pg_query($link, $query) or die('Query failed: ' . pg_last_error($link));
            $login_check = pg_num_rows($result);
            $makeorno = true;
            if ($login_check > 0) {
                $makeorno = true;
                echo '<div class="alert alert-success" role="alert">
                        Logueo correcto!
                        </div>';
                $_SESSION['nombre_usuario'] = $username;
                header($header = "Location: ./PortalQuinielas.php");
            } else {
                echo '<div class="alert alert-danger" role="alert">
                        Datos incorrectos!
                </div>';
            }
        }
    }
?>
</body>

</html>