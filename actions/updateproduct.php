<?php
// connect to product controller 
require("../controllers/product_controller.php");


if (isset($_POST['submit'])) {
    $productid=$_POST['id'];
    $brand=$_POST['mybrand'];
    $category=$_POST['mycat'];
    $pname=$_POST['ptitle'];
    $pprice=$_POST['pprice'];
    $pdesc=$_POST['pdesc'];
    $pimage=NULL;
    $pkeywords=$_POST['pkeyword'];
   
   
    $edit= editAProduct_ctr($productid, $category,$brand,$pname, $pprice,$pdesc,$pimage, $pkeywords);
    if($edit){
        echo '<script>alert("Product Infor updated successfully ")</script>';
    }
    else{
        echo '<script>alert("Product Infor updation failed ")</script>';
    }
    
}

?>