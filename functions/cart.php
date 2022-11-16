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
    $catTotal=0;
   

    foreach ($data as $cartItem) {
        $productId=$cartItem['p_id'];
        $productName=$cartItem['product_title'];
        $productPrice=$cartItem['product_price'];
        $productQuantity=$cartItem['qty'];
        $productImage=$cartItem['product_image'];
        $customerIpadd=$cartItem['ip_add'];
        $customerId=$cartItem['c_id'];
        $total= $productQuantity *$productPrice ;
        $catTotal+=$total;
        myCartItems_fnc($productId,$productName,$productPrice,$productQuantity,$productImage,$customerIpadd, $customerId, $total);
        
    }
     echo " <a href='payment.php' class='btn btn-primary ' role='button' aria-disabled='true' style=' margin: 20px 40px;'>Proceed to Payment</a>
      ";

    echo "<h3 style='margin-left:70%;'>Cart Total<span class='badge badge-primary'>$catTotal</span></h3>";
}


function myCartItems_fnc($productId,$productName,$productPrice,$productQuantity,$productImage,$customerIpadd, $customerId,$total)
{ 
    echo "
    <tr>
      <td>$productName</td>
      <td>$productPrice</td>
      <td>$productImage</td>
      <td>
      <a href ='../actions/increaseqty.php?id=$productId&ipaddress=$customerIpadd&customerid=$customerId&quantity=$productQuantity' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-plus'></i></a>
      </td>
      <td>$productQuantity</td>
      <td>
      <a href ='../actions/decreaseQtyCart.php?id=$productId&ipaddress=$customerIpadd&customerid=$customerId&quantity=$productQuantity' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-dash'></i></a>
      </td>
      <td>$total</td>
      <td>
      <a href ='../actions/deleteCart.php?id=$productId&ipaddress=$customerIpadd&customerid=$customerId&quantity=$productQuantity' class='btn btn-primary btn-sm active' role='button' aria-pressed='true'><i class='bi bi-trash3'></i></a>
      </td>
     
    </tr>
    ";
}


// summary of payment

function myTableProduct_fnc()
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
    $catTotal=0;
   

    foreach ($data as $cartItem) {
        $productId=$cartItem['p_id'];
        $productName=$cartItem['product_title'];
        $productPrice=$cartItem['product_price'];
        $productQuantity=$cartItem['qty'];
        $productImage=$cartItem['product_image'];
        $customerIpadd=$cartItem['ip_add'];
        $customerId=$cartItem['c_id'];
        $total= $productQuantity *$productPrice ;
        $catTotal+=$total;
        myProductSummary_fnc($productName,$productQuantity,$total);
        
    }
    
    echo "<h3 style='margin-left:70%;'>Total<span class='badge badge-primary'>$catTotal</span></h3>";
    return $catTotal;
}

function myProductSummary_fnc($productName,$productQuantity,$total)
{ 
    echo "
    <tr>
      <td>$productName</td>
      <td>x$productQuantity</td>
      <td>$total</td>
     
    </tr>
    ";
    
}

?>