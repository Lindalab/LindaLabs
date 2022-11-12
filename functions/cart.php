<?php
require("../controllers/cart_controller.php");


function myCartViewTable_fnc()
{
    if(!isset($_SESSION['customerId']))
        session_start();
    
    $data = showAPersonCart_ctr($_SESSION['customerId'], get_client_ip());
    $productId = NULL;
    $productName = NULL;
    $productPrice = NULL;
    $productQuantity = NULL;
    $productImage = NULL;
    $customerIpadd=NULL;
    $customerId=NULL;
   

    foreach ($data as $cartItem) {
        $productId=$cartItem['p_id'];
        $productName=$cartItem['product_title'];
        $productPrice=$cartItem['product_price'];
        $productQuantity=$cartItem['qty'];
        $productImage=$cartItem['product_image'];
        $customerIpadd=$cartItem['ip_add'];
        $customerId=$cartItem['c_id'];
        

        myCartItems_fnc($productId,$productName,$productPrice,$productQuantity,$productImage,$customerIpadd, $customerId);
    }
}

function myCartItems_fnc($productId,$productName,$productPrice,$productQuantity,$productImage,$customerIpadd, $customerId)
{
    $total= $productQuantity *$productPrice ;
    echo "
    <tr>
      <td>$productName</td>
      <td>$productPrice</td>
      <td>$productImage</td>
      <td>$productQuantity</td>
      <td>$total</td>
      <td>
      <a href ='../actions/deleteCart.php?id=$productId&ipaddress=$customerIpadd&customerid=$customerId&quantity=$productQuantity' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash3'></i></a>
      </td>
     
    </tr>
    ";
}

?>