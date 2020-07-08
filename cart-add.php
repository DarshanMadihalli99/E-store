<?php
require 'includes/common.php';
if (isset($_GET['id']) && is_numeric($_GET['id'])){
    $product_id=$_GET['id'];
    $user_id=$_SESSION['user_id'];
    $query="insert into users_products ('user-id','product-id','status') values ('$user_id','$product_id','Added To cart')";
$result = mysqli_query($con,$query) or die(mysqli_error($con));

        header("location:home.php");
        
    }
?>