<?php
// connect to product controller 
require("../controllers/product_controller.php");


if (isset($_POST['submit'])) {
    $brandName = $_POST['brandName'];


    if (checkIfBrandExist_ctr($brandName) === NULL) {
        $addbrand = addProductBrand_ctr($brandName);
        if (!$addbrand) {
            echo "Failed";
        } else {
            echo '<script>alert("Brand name Successfully created")</script>';
            header("location:../view/index.php");
        }
    } else {
        echo '<script>alert("Brand name exist")</script>';
    }
}

?>