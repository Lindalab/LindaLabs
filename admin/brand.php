<?php
require("../functions/getbrand.php");
require("../settings/core.php");





function adminLoginPrivilleges()

{

    if(checkLogin() === false){
        echo "
        <h2>Menu</h2>
        <h6>Register </h6>
        <a href='../login/register.php'><button type='button' class='btn btn-primary'>Register</button></a><br>
        <h6>Login</h6>
        <a href='../login/login.php'><button type='button' class='btn btn-primary'>Login</button></a><br>
        
        ";

    }
    else{
        if(checkUserRole($_SESSION['userRole']) === true){
                    echo "
                 
                <h6>Add a brand</h6>
                <a href='#addbrandModal'class='btn btn-primary' data-toggle='modal'><span>Add Product brand</span></a>
                
                <h6>Add a Category</h6>
                <a href='#categoryModal' class='btn btn-primary' data-toggle='modal'><span>Add Product Category</span></a>
                <br>
                <button type='button' class='btn btn-link'><a href='../view/addproduct.php' class='btn btn-primary' >Add Product</a></button><br>
                <button type='button' class='btn btn-link'><a href='../login/login.php' class='btn btn-primary' >Logout</a></button><br><br>
        
               
                ";
                showrandbTable_fnc();
                echo "<br><br>";
                showrCategoryTable_fnc();
                }
                else{
                    echo "
                    <h6>Buy a Products</h6>
                    <a href='#brandModal'class='btn btn-primary' data-toggle='modal'><span>Buy Products</span></a><br>
                    <button type='button' class='btn btn-link'><a href='../login/login.php' class='btn btn-primary'>Logout</button>
                    ";
                }

    }
    //if you are not logined in see register and login
    // if($_SESSION['userLogin'] === true){
    //     if(checkUserRole($_SESSION['userRole']) === true){
    //         echo "
         
    //     <h6>Add a brand</h6>
    //     <a href='#addbrandModal'class='btn btn-primary' data-toggle='modal'><span>Add brand</span></a>
        
    //     <h6>Add a Category</h6>
    //     <a href='#categoryModal' class='btn btn-primary' data-toggle='modal'><span>Add Product Category</span></a>
    //     <br>
    //     <button type='button' class='btn btn-link'><a href='../login/login.php' class='btn btn-primary' >Logout</a></button><br><br>

       
    //     ";
    //     showrandbTable_fnc();
    //     echo "<br><br>";
    //     showrCategoryTable_fnc();
    //     }
    //     else{
    //         echo "
    //         <h6>Buy a Products</h6>
    //         <a href='#brandModal'class='btn btn-primary' data-toggle='modal'><span>Buy Products</span></a><br>
    //         <button type='button' class='btn btn-link'><a href='../login/login.php' class='btn btn-primary'>Logout</button>
    //         ";
    //     }

    // }
    // else{
    //     echo "
    //     <h2>Menu</h2>
    //     <h6>Register </h6>
    //     <a href='../login/register.php'><button type='button' class='btn btn-primary'>Register</button></a><br>
    //     <h6>Login</h6>
    //     <a href='../login/login.php'><button type='button' class='btn btn-primary'>Login</button></a><br>
        
    //     ";

    // }
    //if you are loged in
    // a)as customer see buy ,sign out an
    // if (checkUserRole($_SESSION['userRole']) === True && $_SESSION['userLogin'] === true) {
    //     echo "
         
    //     <h6>Add a brand</h6>
    //     <a href='#addbrandModal'class='btn btn-primary' data-toggle='modal'><span>Add brand</span></a>
        
    //     <h6>Add a Category</h6>
    //     <a href='#categoryModal' class='btn btn-primary' data-toggle='modal'><span>Add Product Category</span></a>
    //     <br>
    //     <button type='button' class='btn btn-link'><a href='../login/login.php' class='btn btn-primary' >Logout</a></button><br><br>

       
    //     ";
    //     showrandbTable_fnc();
    //     echo "<br><br>";
    //     showrCategoryTable_fnc();
    // } else if ($_SESSION['userLogin'] === true) {
    //     echo "
    //     <h6>Buy a Products</h6>
    //     <a href='#brandModal'class='btn btn-primary' data-toggle='modal'><span>Buy Products</span></a><br>
    //     <button type='button' class='btn btn-link'><a href='../login/login.php' class='btn btn-primary'>Logout</button>
    //     ";
    // } else {
    //     header("location:../login/login.php");
    // }

    
}

?>
