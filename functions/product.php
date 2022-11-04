<?php
require("../controllers/product_controller.php");

// Get all brand in a drop down function
function getAllBrand(){
    $data=selectAllBrand_ctr();
    $brandId=NULL;
    $brandName=NULL;
    echo "
    <select class='custom-select' name='mycat' id='inputGroupSelect01' >
    ";
    foreach($data as $brand){
        $brandId=$brand['brand_id'];
        $brandName=$brand['brand_name'];
        mybrand($brandId,$brandName);
        
    }
    echo "</select>";
}

function mybrand($brandId,$brandName){
    echo "
    <option value='$brandId'>$brandName</option>
    
    ";

}


//Get all category in a drop down function
function getAllCategoryDropdown(){
    $data=selectAllCategory_ctr();
    $catId=NULL;
    $catName=NULL;
    echo "
    <select class='custom-select' name='mycat' id='inputGroupSelect01' >
    ";
    foreach($data as $category){
        $catId=$category['cat_id'];
        $catName=$category['cat_name'];
        mycat($catId,$catName);
        
    }
    echo "</select>";
    
}

function mycat($catId,$catName){
    echo "
    <option value='$catId'>$catName</option>
    
    ";
}




?>

