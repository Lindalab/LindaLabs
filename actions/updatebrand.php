<?php
// connect to product controller 
require("../controllers/product_controller.php");


if (isset($_POST['submit'])) {
    $brandId=$_POST['id'];
    $brandName = $_POST['brName'];


    if (checkIfBrandExist_ctr($brandName) === NULL) {
        $editbrand = editBrand_ctr($brandId,$brandName);
        if (!$editbrand ) {
            echo '<script>alert("Brand update failed")</script>';
        } else {
            echo '<script>alert("Brand name updated successfully")</script>';
        }
    } else {
        echo '<script>alert("Brand name exist")</script>';
    }
}