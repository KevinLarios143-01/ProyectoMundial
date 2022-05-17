<?php
    require('conn.php');
    session_start();
    $username = $_SESSION['nombre_usuario'];


    //Datos
    $id = $_POST['codigo'];
    $M1 = $_POST['marcadorUno'];
    $M2 = $_POST['marcadorDos'];

    //echo "codigo: ".$id."   marcador uno:".$M1."   marcador dos:".$M2;

    /*if($id !== $M1){
        echo "No ingresó ningún valor"
    }else{
       echo "Se registró con éxito el marcador ingresado"
    }*/
    function val_id($querys, $links)
            {
                $id = 0;
                $result = pg_query($links, $querys) or die('Query failed: ' . pg_last_error($links));

                while ($line = pg_fetch_array($result)) {
                    $id = $line['ids'];
                }
                return $id;
            }

    $link = pg_connect("$host $port $dbname $user $password")or die('Could not connect: '. " error de conexion");
    $id_que_toca = "SELECT count(*) AS ids FROM quinielas;";
    $sigCod = val_id($id_que_toca,$link);
    $sigCod = $sigCod + 1;

    $sql3 = "INSERT INTO quinielas VALUES ($sigCod,$M1,$M2,'$username',$id)";
    $result = pg_query($link, $sql3);
    //echo "El marcador se ha ingresado con éxito";

    if(!$result){
        echo "Hubo un error al ingresar los datos";
     } else {
         echo "El marcador se ha ingresado con éxito";
    }

?>