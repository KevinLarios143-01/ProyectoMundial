<?php
    $host = "host=localhost";
    $port = "port=5432";
    $dbname = "dbname=Mundial";
    $user = "user=postgres";
    $password = "password=1234";
    $link = pg_connect("$host $port $dbname $user $password")or die('Could not connect: '. " error de conexion");

    $query = "SELECT * FROM usuarios";

    $result = pg_query($link,$query) or die('Query failed: ' . pg_last_error($link));

    while ($line = pg_fetch_array($result)) {
        $userr = $line['usuario'];
        $passr = $line['contra'];
        $nomr=$line['nombre'];
        $apr=$line['apellido'];
        $rolr=$line['rol'];
        $acumr=$line['acumulado'];
        echo "".$userr." ".$passr;
    }
?>