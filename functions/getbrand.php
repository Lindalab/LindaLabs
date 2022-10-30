<?php
require("../controllers/product_controller.php");



//show brand table
function showrandbTable_fnc()
{
    $mydata = selectAllBrand_ctr();
    $brandId = NULL;
    $brandName = NULL;
    echo "<table class='table'>
    <thead class='thead-dark'>
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
      <a href = '../actions/deleteContact.php?id=$brandId'>Delete</i></a>
      </td>
      <td>
      <a href = '../view/update_brand.php?id=$brandId&brName=$brandName'>Edit</a>
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
    <thead class='thead-dark'>
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
      <a href = '../actions/deleteCat.php?id=$catId'>Delete</i></a>
      </td>
      <td>
      <a href = '../view/update_category.php?id=$catId&catName=$catName'>Edit</a>
      </td>
    </tr>
    ";
} 

?>