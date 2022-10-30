<?php
require("../functions/getbrand.php");


session_start();
function checkUserRole($rolevalue)
{
    if ($rolevalue === '0') {
        return true;
    } else {
        return false;
    }
}

function adminLoginPrivilleges()
{
    if (checkUserRole($_SESSION['userRole']) === True && $_SESSION['userLogin'] === true) {
        echo "
         
        <h6>Add a brand</h6>
        <a href='#addbrandModal'class='btn btn-primary' data-toggle='modal'><span>Add brand</span></a>
        
        <h6>Add a Category</h6>
        <a href='#categoryModal' class='btn btn-primary' data-toggle='modal'><span>Add Product Category</span></a>
        <br>
        <button type='button' class='btn btn-link'><a href='../login/login.php' class='btn btn-primary' >Logout</a></button><br><br>

       
        ";
        showrandbTable_fnc();
        echo "<br><br>";
        showrCategoryTable_fnc();
    } else if ($_SESSION['userLogin'] === true) {
        echo "
        <h6>Buy a Products</h6>
        <a href='#brandModal'class='btn btn-primary' data-toggle='modal'><span>Buy Products</span></a><br>
        <button type='button' class='btn btn-link'><a href='../login/login.php' class='btn btn-primary'>Logout</button>
        ";
    } else {
        header("location:../login/login.php");
    }
}
