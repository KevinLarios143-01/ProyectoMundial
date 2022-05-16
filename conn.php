<?php
    $host = "host=localhost";
    $port = "port=5432";
    $dbname = "dbname=Mundial";
    $user = "user=postgres";
    $password = "password=1234";
    $link = pg_connect("$host $port $dbname $user $password")or die('Could not connect: '. " error de conexion");
    $disabled1="disabled";

?>