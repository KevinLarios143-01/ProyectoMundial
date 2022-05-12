<?php
    $host = "host=localhost";
    $port = "port=5432";
    $dbname = "dbname=postgres";
    $user = "user=postgres";
    $password = "password=1234";
    $con = pg_connect("$host $port $dbname $user $password");
    if($con){
        echo "eso";
    }else{
        echo "nada";
    }


    

    
?>