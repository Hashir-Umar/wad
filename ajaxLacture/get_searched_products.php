<?php
    
    require_once "server/db_connection.php";
    
    if(isset($_GET['e']))
    {
        $user_query = $_GET['e'];
        $sql = "select * from products where pro_keywords like '%$user_query%'";

        if($_GET['e'] == "displayAll")
            $sql = "select * from products";

        $runSQL = mysqli_query($con,$sql);
        $count = mysqli_num_rows($runSQL);
             
        if($count==0){
            echo "<h4 class='alert-warning align-center my-2 p-2'> No Product found in selected criteria </h4>";
        }
        else
        {
            $result = "";
            while($row = mysqli_fetch_assoc($runSQL)){
                $pro_id = $row['pro_id'];
                $pro_title = $row['pro_title'];
                $pro_price = $row['pro_price'];
                $pro_image = $row['pro_image'];
                $result = $result."
                    <div class='col-sm-6 col-md-4 col-lg-3 text-center product-summary'>
                        <h5 class='text-capitalize'>$pro_title</h5>
                        <img src='admin/product_images/$pro_image'>
                        <p> <b> Rs $pro_price/-  </b> </p>
                        <a href='detail.php' class='btn btn-info btn-sm'>Details</a>
                        <a href='#'>
                            <button class='btn btn-primary btn-sm'>
                                <i class='fas fa-cart-plus'></i> Add to Cart
                            </button>
                        </a>
                    </div>
                ";
            }
            echo $result;
        }
    }
    else
    {
        echo "Search through search bar";
    }