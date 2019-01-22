<?php
require_once "db_connection.php";
if(isset($_POST['insert_brand'])){
    //getting text data from the fields
    $brand_title = $_POST['brand_title'];

    $insert_brand = "insert into brands (brand_title) 
                  VALUES ('$brand_title');";
    $insert_brand = mysqli_query($con, $insert_brand);

    if($insert_brand){
        header("location: index.php?view_brands");
    }
    else {
        echo "<script>alert('Error while inserting Brand')</script>";
    }
}
?>

<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Brand </h1>
    <form action="insert_brand.php" method="post">
        <div class="row">
            <div class="d-none d-sm-block col-sm-3 col-md-2 mt-auto">
                <label for="pro_title" class="float-md-right"> <span class="d-sm-none d-md-inline"> Brand </span> Title:</label>
            </div>
            <div class="col-sm-9 col-md-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-file-signature"></i></div>
                    </div>
                    <input type="text" class="form-control" id="brand_title" name="brand_title" placeholder="Enter Brand Title" >
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
            <div class="col-sm-9 col-md-8 col-lg-8">
                <button type="submit" name="insert_brand" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
            </div>
        </div>
    </form>
</div>

