<?php
require("../controllers/cart_controller.php");
session_start();


if (isset($_POST['submit'])) {
    $p_id = $_POST['pid'];
    $ip_add = get_client_ip();
    $c_id =  $_SESSION['customerId'] ;
    $qty = $_POST['pqty'];

    // echo $pid ;
    // echo $ip_add; 
    // echo $c_id ;
    // echo $qty;

    $addCart= addToCart_ctr($p_id, $ip_add, $c_id,$qty);
    if(!$addCart){
        echo "<script>alert('Product was not successfully added to cart');</script>";

    }
    else{
        echo "<script>alert('Product successfully added to cart');</script>";
        header("location:../view/allproduct.php");
    }


}

// Function to get the client IP address 



?>