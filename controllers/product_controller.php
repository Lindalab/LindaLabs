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

function selectAllBrand_ctr()
{
    $brand = new product_class();
    return $brand->selectAllBrand();
}

function editBrand_ctr($brandId,$brandName){
    $brand = new product_class();
    return $brand->editBrand($brandId,$brandName);

}


// Actions for Category

function addProductCategory_ctr($cat_name){
    $category = new product_class();
    return $category->addProductCategory($cat_name);

}

function selectAllCategory_ctr(){
    $category = new product_class();
    return $category->selectAllCategory();

}

function checkIfCategoryExist_ctr($catName){
    $category=new product_class();
    return $category->checkIfCategoryExist($catName);
}

function editProductCategory_ctr($catId,$catName){
    $category=new product_class();
    return $category->editProductCategory($catId,$catName);

}
    


//--INSERT--//