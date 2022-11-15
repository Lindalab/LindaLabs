<?php
require("../functions/getbrand.php");
require("../settings/core.php");





function adminLoginPrivilleges()

{

    if(checkLogin() === true){
        
        if(isset($_SESSION['userRole'])){
            if(checkUserRole($_SESSION['userRole'])){
                echo "
                 
                <h6>Welcome </h6>
                <a href='#addbrandModal'class='btn btn-primary' data-toggle='modal' style='margin: 0px 20px;'><span>Add Product brand</span></a>
                
                
                <a href='#categoryModal' class='btn btn-primary' data-toggle='modal' style='margin: 0px 20px;' ><span>Add Product Category</span></a>
               
                <button type='button' class='btn btn-link'><a href='../admin/addproduct.php' class='btn btn-primary'  style='margin: 0px 20px;' >Add Product</a></button>
                
                <a href='../admin/brand.php?Logout=Logout' class='btn btn-primary'><span>Logout</span></a> <br><br>
        
               
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
                <a href='../view/allproduct.php'class='btn btn-primary' data-toggle='modal' style='margin: 0px 20px;' ><span>Buy Products</span></a>
                <a href='../admin/brand.php?Logout=Logout' class='btn btn-primary' style='margin: 0px 20px;'><span>Logout</span></a>
            
                 <a href='../view/allproduct.php'><button type='button' class='btn btn-primary'> All Products<i class='bi bi-eye-fill'></i></button></a><br>
                 
                ";
               
            }

        }
        

    }
    else{
        echo "
        <h2>Menu</h2>
       
        
        <a href='../login/register.php'><button type='button' class='btn btn-primary' style='margin: 0px 20px;' >Register</button></a>
        
        <a href='../login/login.php'><button type='button' class='btn btn-primary' style='margin: 0px 20px;' >Login</button></a>
        
      
        
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
