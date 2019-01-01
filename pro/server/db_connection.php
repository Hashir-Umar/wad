<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $databaseName = "techbox";
    $connection = mysqli_connect($host, $username, $password, $databaseName);

    if(!$connection)
        die("Connection failed");
?>