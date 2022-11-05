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


//Actions for Products

function addProduct_ctr($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords){
    $product =new product_class();
    return $product->addProduct($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords);

}

function selectAllProduct_ctr(){
    $product=new product_class();
    return $product->selectAllProduct();
}

function deletAProduct_ctr($productid){
    $product=new product_class();
    return $product->deletAProduct($productid);

}

function editAProduct_ctr($productid,$productCat,$productbrand,$productName,$productPrice,$productDescription,$productImage,$productKeyword){
    $product=new product_class();
    return $product->editAProduct($productid,$productCat,$productbrand,$productName,$productPrice,$productDescription,$productImage,$productKeyword);

}
    


//--INSERT--//