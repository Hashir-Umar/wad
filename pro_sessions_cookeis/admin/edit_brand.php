<?php
require_once "db_connection.php";
    if (isset($_GET['cat_title']))
        session_start();
    if(!isset($_SESSION['user_email'])){
        header('location: login.php?not_admin=You are not Admin!');
    }
    if (isset($_GET['edit_brand']))
    {
    	$id = $_GET['edit_brand'];
    	$_SESSION['edit_brand'] = $id;
        $sql = "SELECT * FROM brands WHERE brand_id = $id;";
        $result = mysqli_query($con, $sql);
        $title;
        if (mysqli_num_rows($result) > 0) {
        	$title = mysqli_fetch_assoc($result)['brand_title'];
        }
        else
        	header("Location: index.php?view_brands");
    }
    if (isset($_GET['cat_title']))
    {
    	$id = $_SESSION['edit_brand'];
    	$title = $_GET['cat_title'];
        $sql = "UPDATE brands SET brand_title = '$title' WHERE brand_id = $id;";
       	mysqli_query($con, $sql);
    	header("Location: index.php?view_brands");
    }
?>

<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Edit </span> Brand </h1>
    <form action="edit_cat.php" method="GET">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Brand </span> Title:</label>
            </div>
            <div class="col-sm-9 col-md-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="pro_title" name="cat_title" value = <?php echo "$title" ?> placeholder="Enter Category Title" required>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8">
                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Update </button>
            </div>
        </div>
    </form>
</div>
