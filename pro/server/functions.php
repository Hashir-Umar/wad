<?php

    require_once "db_connection.php";
    function getCategories()
    {
        global $connection;
        $query = "SELECT * FROM `categories`";
        $data = mysqli_query($connection, $query);

        if(!$data)
            die("Query Error: while fetching category table");
        
        return $data;
    }
    function getBrands()
    {
        global $connection;
        $query = "SELECT * FROM `brands`";
        $data = mysqli_query($connection, $query);

        if(!$data)
            die("Query Error: while fetching brand table");
        
        return $data;
    }

    function displayContent()
    {
        global $connection;
        $query = "SELECT * FROM `products` as pro join `categories` as cat on pro.pro_cat = cat.cat_id join `brands` as b on pro.pro_brand = b.brand_id";
        $data = mysqli_query($connection, $query);

        if(!$data)
            die("Query Error: while fetching product, category, brand table");
        
        return $data;
    }
?>