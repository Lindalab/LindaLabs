<?php
require("../controllers/product_controller.php");



//show brand table
function showrandbTable_fnc()
{
    $mydata = selectAllBrand_ctr();
    $brandId = NULL;
    $brandName = NULL;
    echo "<table class='table'>
    <thead class='table-primary'>
      <tr>
        <th scope='col'>Brand Name</th>
        <th scope='col'>Delete</th>
        <th scope='col'>Edit</th>
      </tr>
    </thead>
    <tbody>";
    foreach ($mydata as $brand) {
        $brandId = $brand['brand_id'];
        $brandName = $brand['brand_name'];
        showBrandRow_fnc($brandId, $brandName);
    }
    echo "
    </tbody>
</table>";
}

function showBrandRow_fnc($brandId, $brandName)
{
    echo "
    <tr>
      <td>$brandName</td>
      <td>
      <a href = '../actions/deleteContact.php?id=$brandId'class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
      </td>
      <td>
      <a href = '../admin/update_brand.php?id=$brandId&brName=$brandName'class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i></a>
      </td>
    </tr>
    ";
}

// Show Category table

function showrCategoryTable_fnc()
{
    $myCategories = selectAllCategory_ctr();
    $catId = NULL;
    $catName = NULL;
    echo "<table class='table'>
    <thead class='table-primary'>
      <tr>
        <th scope='col'>Category Name</th>
        <th scope='col'>Delete</th>
        <th scope='col'>Edit</th>
      </tr>
    </thead>
    <tbody>";
    foreach ($myCategories as $category) {
        $catId = $category['cat_id'];
        $catName =$category['cat_name'];
        showCatRow_fnc($catId, $catName);
    }
    echo "
    </tbody>
</table>";
}



function showCatRow_fnc($catId, $catName)
{
    echo "
    <tr>
      <td>$catName</td>
      <td>
      <a href = '../actions/deleteCat.php?id=$catId'class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
      </td>
      <td>
      <a href = '../admin/update_category.php?id=$catId&catName=$catName'class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i></a>
      </td>
    </tr>
    ";
} 



// Show All Proudct Table
function getAllProduct(){
  $data= selectAllProduct_ctr();
  $productId=NULL;
  $productCat=NULL;
  $productbrand=NULL;
  $productName=NULL;
  $productPrice=NULL;
  $productDescription=NULL;
  $productImage=NULL;
  $productKeyword=NULL;

  
  echo "

  <table class='table'>
  <thead class='table-primary'>
      <tr>
        <th scope='col'> Product</th>
        <th scope='col'>Brand</th>
        <th scope='col'>Category</th>
        <th scope='col'>Price</th>
        <th scope='col'>Description</th>
        <th scope='col'>Image</th>
        <th scope='col'>Keyword</th>
        <th scope='col'>Delete</th>
        <th scope='col'>Edit</th>
      </tr>
    </thead>
    <tbody>
  
  ";

  foreach($data as $product){
    $productId=$product['product_id'];
    $productCat=$product['cat_name'];
    $productbrand=$product['brand_name'];
    $productName=$product['products_title'];
    $productPrice=$product['product_price'];
    $productDescription=$product['product_desc'];
    $productImage=$product['product_image'];
    $productKeyword=$product['product_keywords'];
    myProducts($productId,$productCat,$productbrand,$productName,$productPrice,$productDescription,$productImage,$productKeyword);
      
  }
  echo "
    </tbody>
</table>";
}

function myProducts($productId,$productCat,$productbrand,$productName,$productPrice,$productDescription,$productImage,$productKeyword){
  echo "
  <tr>
    <td>$productName</td>
    <td>$productCat</td>
    <td>$productbrand</td>
    <td>$productPrice</td>
    <td>$productDescription</td>
    <td>$productImage</td>
    <td>$productKeyword</td>
    <td>
    <a href = '?id=$productId' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash-fill'></i></a>
    </td>
    <td>
    <a href = '../admin/update_product.php?id=$productId&pname=$productName&category=$productCat&brand=$productbrand&pprice=$productPrice&pdes=$productDescription&pimage=$productImage&pkeyword=$productKeyword' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-pencil-square'></i></a>
    </td>
  </tr>
  ";

}








?>