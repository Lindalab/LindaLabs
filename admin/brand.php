<?php
require("../functions/getbrand.php");
require("../settings/core.php");





function adminLoginPrivilleges()

{

    if(checkLogin() === true){
        
        if(isset($_SESSION['userRole'])){
            if(checkUserRole($_SESSION['userRole'])){
                echo "
                 
                <h6>Add a brand</h6>
                <a href='#addbrandModal'class='btn btn-primary' data-toggle='modal'><span>Add Product brand</span></a>
                
                <h6>Add a Category</h6>
                <a href='#categoryModal' class='btn btn-primary' data-toggle='modal'><span>Add Product Category</span></a>
                <br>
                <button type='button' class='btn btn-link'><a href='../view/addproduct.php' class='btn btn-primary' >Add Product</a></button><br>
                
                <a href='../admin/brand.php?Logout=Logout' class='btn btn-primary'><span>Logout</span></a>
        
               
                ";
                showrandbTable_fnc();
                echo "<br><br>";
                showrCategoryTable_fnc();
                echo "<br><br>";
                getAllProduct();
                
            }
            else{
                echo "
                <h6>Buy a Products</h6>
                <a href='#brandModal'class='btn btn-primary' data-toggle='modal'><span>Buy Products</span></a><br>
                <a href='../admin/brand.php?Logout=Logout' class='btn btn-primary'><span>Logout</span></a>
                ";
                getAllProduct();
            }

        }
        

    }
    else{
        echo "
        <h2>Menu</h2>
        <h6>Register </h6>
        <a href='../login/register.php'><button type='button' class='btn btn-primary'>Register</button></a><br>
        <h6>Login</h6>
        <a href='../login/login.php'><button type='button' class='btn btn-primary'>Login</button></a><br>
        <h6>All Product</h6>
        <a href='../view/allproduct.php'><button type='button' class='btn btn-primary'>Products</button></a><br>
    
        
        ";
    }
   
    
}

function destroyallSessions(){
    if(isset($_GET['Logout'])){
        session_destroy();
        header("location:../login/login.php");
    }
}

destroyallSessions();

?>
