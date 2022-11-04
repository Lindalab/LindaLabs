<?php

//start session
session_start(); 

//for header redirection
ob_start();

//funtion to check for login

function checkLogin(){
  
    if($_SESSION['userLogin'] === true){
        return true;
    }
    else{
        return false;

    }
}




//function to get user ID


//function to check for role (admin, customer, etc)
function checkUserRole($rolevalue)
{
    if ($rolevalue === '0') {
        return true;
    } else {
        return false;
    }
}



?>