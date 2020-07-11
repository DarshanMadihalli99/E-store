<?php
function check_if_added_to_cart($item_id){
require 'common.php';
$user_id=$_SESSION['user_id'];
$query="select * from users_products where productid='$item_id' and userid='$user_id' and status='Added to cart'";
$result= mysqli_query($con, $query);
if(mysqli_num_rows($result) >= 1){
            return TRUE;
        }else{
            return FALSE;
        }
    }
?>


