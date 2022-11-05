<?php
require("../controllers/product_controller.php");



if(isset($_GET['submit'])){
    $brand=$_GET['mybrand'];
    $category=$_GET['mycat'];
    $pname=$_GET['ptitle'];
    $pprice=$_GET['pprice'];
    $pdesc=$_GET['pdesc'];
    $pimage=NULL;
    $pkeywords=$_GET['pkeyword'];

    $addproduct= addProduct_ctr($category, $brand, $pname, $pprice, $pdesc, $pimage, $pkeywords);
    if(!$addproduct){
        echo "failed";
    }
    else{
        echo "success";
    }
}


?>