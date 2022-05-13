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


    

<<<<<<< HEAD
<?php
    $conn = pg_connect("host=localhost, port=5432,dbname='Mundial' ");
    $result = pg_query($conn, "SELECT * FROM ");
    while ($row = pg_fetch_row($result)) {
        echo "<p>" . htmlspecialchars($row[0]) . "</p>\n";
    }
=======
    
>>>>>>> 67c07e6e23daf7264ca782ad56d0306618d6378d
?>