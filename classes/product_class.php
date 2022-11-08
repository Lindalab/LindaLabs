<?php
//connect to database class
require("../settings/db_class.php");

/**
 *A class to handle all customer functions 
 */
/**
 *@author Linda
 *
 */

class product_class extends db_connection
{
    //Add product Brand
    public function addProductBrand($brandName)
    {
        $sql = "INSERT INTO `brands`(`brand_name`) VALUES ('$brandName')";
        return $this->db_query($sql);
    }
    //Check if brand exist
    public function checkIfBrandExist($brandName)
    {
        $sql = "SELECT`brand_name`FROM `brands` WHERE `brand_name`= '$brandName'";
        return $this->getAData($sql);
    }
    // Select all from Brand
    public function selectAllBrand()
    {
        $sql = "SELECT * FROM `brands` ";
        return $this->getAllData($sql);
    }
    //Edit Brand
    public function editBrand($brandId,$brandName)
    {
        $sql = "UPDATE `brands` SET `brand_name`='$brandName' WHERE `brand_id`= '$brandId'";
        return $this->db_query($sql);
    }


    //Add product Category
    public function addProductCategory($cat_name)
    {
        $sql = "INSERT INTO `categories`(`cat_name`) VALUES ('$cat_name')";
        return $this->db_query($sql);
    }
    // Select All Category
    public function selectAllCategory(){
        $sql="SELECT * FROM `categories`";
        return $this->getAllData($sql);
    }
    // Check if category exist already
    public function checkIfCategoryExist($catName){
        $sql="SELECT  `cat_name` FROM `categories` WHERE `cat_name`='$catName' ";
        return $this->getAData($sql);

    }
    // Edit Category
    public function editProductCategory($catId,$catName){
        $sql="UPDATE `categories` SET `cat_name`='$catName' WHERE `cat_id`='$catId' ";
        return $this->db_query($sql);
    }

    //Add product 
    public function addProduct($product_cat, $product_brand, $product_title, $product_price, $product_desc, $product_image, $product_keywords)
    {
        $sql = "INSERT INTO `products`(`product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES ('$product_cat','$product_brand','$product_title','$product_price','$product_desc','$product_image','$product_keywords')";
        return $this->db_query($sql);
    }

    // Select all from Prodtc
    public function selectAllProduct()
    {
        $sql = "select products.product_id as product_id,products.product_title as products_title ,products.product_price as product_price,products.product_desc as product_desc ,products.product_image as product_image,products.product_keywords as product_keywords,brands.brand_name as brand_name,categories.cat_name as cat_name
        FROM products,brands,categories
        where products.product_cat=categories.cat_id 
        and products.product_brand = brands.brand_id";
        return $this->getAllData($sql);
    }

    // Delete A product
    public function deletAProduct($productid)
    {
        $sql = "DELETE FROM `products` WHERE `product_id`='$productid' ";
        return $this->db_query($sql);
    }

     // Edit A product 
     public function editAProduct($productid,$productCat,$productbrand,$productName,$productPrice,$productDescription,$productImage,$productKeyword)
     {
         $sql = "UPDATE `products` SET `product_cat`='$productCat',`product_brand`='$productbrand',`product_title`='$productName',`product_price`='$productPrice',`product_desc`='$productDescription',`product_image`='$productImage',`product_keywords`='$productKeyword' WHERE `product_id`='$productid' ";
         return $this->db_query($sql);
     }

     public function searchAProduct($searchterm)
     {
         $sql = "select products.product_id as product_id,products.product_title as products_title ,products.product_price as product_price,products.product_desc as product_desc ,products.product_image as product_image,products.product_keywords as product_keywords,brands.brand_name as brand_name,categories.cat_name as cat_name FROM products,brands,categories where products.product_cat=categories.cat_id and products.product_brand = brands.brand_id and products.product_title LIKE '%$searchterm%'";
         return $this->getAllData($sql);
     }


}