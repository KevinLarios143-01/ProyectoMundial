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

    $sql3 = "INSERT INTO quinielas VALUES ($M1,$M2,'$username',$id)";
    $result = pg_query($link, $sql3);
    //echo "El marcador se ha ingresado con éxito";

    if(!$result){
        echo "Hubo un error al ingresar los datos";
     } else {
         echo "El marcador se ha ingresado con éxito";
    }

?>