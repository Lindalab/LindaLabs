<?php
require("../controllers/product_controller.php");

// Get all brand in a drop down function
function getAllBrand()
{
    $data = selectAllBrand_ctr();
    $brandId = NULL;
    $brandName = NULL;
    echo "
    <select class='custom-select' name='mybrand' id='mybrand' >
    ";
    foreach ($data as $brand) {
        $brandId = $brand['brand_id'];
        $brandName = $brand['brand_name'];
        mybrand($brandId, $brandName);
    }
    echo "</select>";
}

function mybrand($brandId, $brandName)
{
    echo "
    <option value='$brandId'>$brandName</option>
    
    ";
}


//Get all category in a drop down function
function getAllCategoryDropdown()
{
    $data = selectAllCategory_ctr();
    $catId = NULL;
    $catName = NULL;
    echo "
    <select class='custom-select' name='mycat' id='mycat' >
    ";
    foreach ($data as $category) {
        $catId = $category['cat_id'];
        $catName = $category['cat_name'];
        mycat($catId, $catName);
    }
    echo "</select>";
}

function mycat($catId, $catName)
{
    echo "
    <option value='$catId'>$catName</option>
    
    ";
}

function myproductViewTable_fnc()
{
    
    $data = selectAllProduct_ctr();
    $productId = NULL;
    $productCat = NULL;
    $productbrand = NULL;
    $productName = NULL;
    $productPrice = NULL;
    $productDescription = NULL;
    $productImage = NULL;
    $productKeyword = NULL;

    foreach ($data as $product) {
        $productId=$product['product_id'];
        $productCat=$product['cat_name'];
        $productbrand=$product['brand_name'];
        $productName=$product['products_title'];
        $productPrice=$product['product_price'];
        $productDescription=$product['product_desc'];
        $productImage=$product['product_image'];
        $productKeyword=$product['product_keywords'];

        myProductsaddcart_fnc($productId,$productCat,$productbrand,$productName,$productPrice,$productDescription,$productImage,$productKeyword);
    }
}

function myProductsaddcart_fnc($productId,$productCat,$productbrand,$productName,$productPrice,$productDescription,$productImage,$productKeyword)
{
    echo "
    <tr>
      <td>$productName</td>
      <td>$productPrice</td>
      <td>$productImage</td>
      <td>
      <a href ='../view/single_product.php?id=$productId&pname=$productName&category=$productCat&brand=$productbrand&pprice=$productPrice&pdes=$productDescription&pimage=$productImage&pkeyword=$productKeyword' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-eye-fill'></i></a>
      </td>
      <td>
      <a href = '../view/setCart_quantity.php?id=$productId&pname=$productName&category=$productCat&brand=$productbrand&pprice=$productPrice&pdes=$productDescription&pimage=$productImage&pkeyword=$productKeyword' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-cart-check'></i></a>
      </td>
    </tr>
    ";
}


function mysearchproductViewTable_fnc($searchterm)
{
    
    $data =searchAProduct_ctr($searchterm) ;
    $productId = NULL;
    $productCat = NULL;
    $productbrand = NULL;
    $productName = NULL;
    $productPrice = NULL;
    $productDescription = NULL;
    $productImage = NULL;
    $productKeyword = NULL;

    foreach ($data as $product) {
        $productId=$product['product_id'];
        $productCat=$product['cat_name'];
        $productbrand=$product['brand_name'];
        $productName=$product['products_title'];
        $productPrice=$product['product_price'];
        $productDescription=$product['product_desc'];
        $productImage=$product['product_image'];
        $productKeyword=$product['product_keywords'];

        myProductsaddcart_fnc($productId,$productCat,$productbrand,$productName,$productPrice,$productDescription,$productImage,$productKeyword);
    }
}

?>
