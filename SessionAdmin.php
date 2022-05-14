<?php
    require('conn.php');
    session_start();

    if (isset($_POST['login'])) {
        
        $username = $_POST['user'];
        $passwords = $_POST['pass'];
        $trabajoono=true;
        if($username=="" || $passwords==""){
            $trabajoono=false;
            echo '<div class="alert alert-warning" role="alert">Debe llenar ambos campos</div>';
        }
        
        if($trabajoono){
            $query = "SELECT usuario, contra FROM usuarios WHERE usuario='$username' AND contra='$passwords' AND rol='A'";
            $result = pg_query($link,$query) or die('Query failed: ' . pg_last_error($link));
            $login_check = pg_num_rows($result);
            $makeorno=true;
            if($login_check > 0){ 
                $makeorno=true;
                echo '<div class="alert alert-success" role="alert">
                        Logueo correcto!
                        </div>';
                $_SESSION['nombre_usuario']=$username;
                header($header="Location: ./PortalAdmin.php");
            }else{ 
                echo '<div class="alert alert-danger" role="alert">
                Datos incorrectos!
                </div>';
            }
            
        }  
    }
?>