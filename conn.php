To connect from PHP, make sure that it supports PostgreSQL. The version included with macOS doesn't support PostgreSQL. We recommend MAMP for an easy way to install a current version of PHP that works.

You can use PDO (object oriented):


Or the pg_connect() functions (procedural):

<?php
    $conn = pg_connect("host=localhost, port=5432,dbname='Mundial' ");
    $result = pg_query($conn, "SELECT * FROM ");
    while ($row = pg_fetch_row($result)) {
        echo "<p>" . htmlspecialchars($row[0]) . "</p>\n";
    }
?>