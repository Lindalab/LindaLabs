<?php
// connect to product controller 
require("../controllers/product_controller.php");


if (isset($_POST['submit'])) {
    $cat_name = $_POST['catName'];


    if (checkIfCategoryExist_ctr($cat_name) === NULL) {
        $addCategory = addProductCategory_ctr($cat_name);
        if (!$addCategory) {
            echo '<script>alert("Creation of Category name Failed ")</script>';
        } else {
            echo '<script>alert("Category name successfully created")</script>';
        }
    } else {
        echo '<script>alert("Category name exist")</script>';
    }
}

?>