<?php
require("../controllers/product_controller.php");

if(isset($_POST['submit'])){
    $brand=$_POST['mybrand'];
    $category=$_POST['mycat'];
    $pname=$_POST['ptitle'];
    $pprice=$_POST['pprice'];
    $pdesc=$_POST['pdesc'];
    $pimage=NULL;
    $pkeywords=$_POST['pkeyword'];

    $addproduct= addProduct_ctr($category, $brand, $pname, $pprice, $pdesc, $pimage, $pkeywords);
    if(!$addproduct){
        echo '<script>alert("Product Addition Failed")</script>';
    }
    else{
        echo '<script>alert("Product Added Successfully")</script>';
    }
}


?>