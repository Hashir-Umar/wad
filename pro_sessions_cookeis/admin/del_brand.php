<?php

session_start();
if(!isset($_SESSION['user_email'])) {
    header('location: login.php?not_admin=You are not Admin!');
}

if(isset($_GET['del_brand']))
{
    $del_id = $_GET['del_brand'];
    $sql = "delete from brands where brand_id='$del_id'";

    if(mysqli_query($con,$sql)){
        header('location: index.php?view_brands');
    }
}