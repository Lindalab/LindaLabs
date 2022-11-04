<?php error_reporting(0);
//require customer controller file
require("../controllers/customer_controller.php");


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //password issues

    //check if email 
    $login = checkLoginCred_ctr($email);
    if ($login) {
        $hashpassword = $login['customer_pass'];
        if (password_verify($password, $hashpassword)) {
            session_start();
            $_SESSION['customerName'] = $login['customer_name'];
            $_SESSION['customerEmail'] = $login['customer_email'];
            $_SESSION['customerPasswd'] = $login['customer_pass'];
            $_SESSION['customerCountry'] = $login['customer_country'];
            $_SESSION['customerCity'] = $login['customer_city'];
            $_SESSION['customerContact'] = $login['customer_contact'];
            $_SESSION['customerImage'] = $login['customer_image'];
            $_SESSION['userRole'] = $login['user_role'];
            $_SESSION['userLogin'] = true;
            // $_SESSION['userLogin'] =1;
            header("location:../view/index.php");
        } else {
            echo 'Invalid password.';
        }
    } else {
        echo "Email unaviable";
    }
}

?>