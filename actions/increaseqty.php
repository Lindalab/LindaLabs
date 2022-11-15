<?php
require("../controllers/cart_controller.php");

$p_id=$_GET['id'];
$ip_add=$_GET['ipaddress'];
$c_id=$_GET['customerid'];
$qty=$_GET['quantity'];

$increaseQtyByOne= increaseCartItemByOne_ctr($p_id,$ip_add, $c_id,$qty);


if($increaseQtyByOne){
    header("location:../view/cart.php");

}

?>