<?php

    function getCategories()
    {
        global $connection;
        $query = "SELECT * FROM `categories`";
        $data = mysqli_query($connection, $query);

        if(!$query)
            die("Query Error !");
        
        return $data;
    }
    function getBrands()
    {
        global $connection;
        $query = "SELECT * FROM `brands`";
        $data = mysqli_query($connection, $query);

        if(!$query)
            die("Query Error !");
        
        return $data;
    }
?>