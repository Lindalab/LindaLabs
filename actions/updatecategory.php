<?php
// connect to product controller 
require("../controllers/product_controller.php");


if (isset($_POST['submit'])) {
    $catId=$_POST['id'];
    $catName = $_POST['cat_name'];


    if (checkIfCategoryExist_ctr($catName) === NULL) {
        $editbrand = editProductCategory_ctr($catId,$catName);
        if (!$editbrand ) {
            echo '<script>alert("Brand update failed")</script>';
        } else {
            echo '<script>alert("Brand name updated successfully")</script>';
        }
    } else {
        echo '<script>alert("Brand name exist")</script>';
    }
}

?>