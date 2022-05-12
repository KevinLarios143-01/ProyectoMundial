<?php
            $link = mysqli_connect('localhost', 'root', '','Mundial') or die('Could not connect: '. mysqli_connect_error());
            $query = "SELECT * FROM usuarios WHERE usuario='kevin'";

            $result = mysqli_query($link,$query) or die('Query failed: ' . mysqli_error($link));
        
            while ($line = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                $userr = $_POST['usuario'];
                $passr = $_POST['contra'];
                $nomr=$_POST['nombre'];
                $rolr=$_POST['rol'];
                $acumr=$_POST['acumulado'];
                //$apellido=$_POST['apellido'];
                if($username==$userr){
                    echo '<p class="error">The email address is already registered!</p>';
                }     
            }
?>