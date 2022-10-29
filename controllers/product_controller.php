<?php
//connect to the product class
include("../classes/product_class.php");



//sanitize data


function addProductBrand_ctr($brandName)
{
    $brand = new product_class();
    return $brand->addProductBrand($brandName);
}

function checkIfBrandExist_ctr($bName)
{
    $brand = new product_class();
    return $brand->checkIfBrandExist($bName);
}
    


//--INSERT--//