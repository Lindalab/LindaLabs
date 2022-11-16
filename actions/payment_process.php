<?php
require_once("../controllers/cart_controller.php");

session_start();
$customer_id= $_SESSION['customerId'] ;
$invoice_no=mt_rand();
$order_date=date("Y-m-d"); 
$order_status="success";

// add to order table
$getOrderId= addToOrderTable_ctr($customer_id,$invoice_no,$order_date,$order_status);


$curl = curl_init();
 
$reference=$_GET['reference'];
//echo $reference;

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.paystack.co/transaction/verify/".$reference,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "Authorization: Bearer sk_test_5d00a1fb2621b4392db24cae7bb5e77ba9a8cc81",
    "Cache-Control: no-cache",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
$paystackdata = json_decode($response,true);
$amt=$paystackdata['data']['amount'];
$currency=$paystackdata['data']['currency'];
$payment_date=date("Y-m-d");

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
//   echo $response;
// }

// add to payment table
addToPayment_ctr($amt,$customer_id,$getOrderId,$currency,$payment_date);
$ip_add=get_client_ip();

$getdataFromCart=showAPersonCart_ctr($customer_id,$ip_add);
foreach($getdataFromCart as$cartItem){
    $product_id= $cartItem['p_id'];
    $qty= $cartItem['qty'];
    addToOrderDetails_ctr($getOrderId,$product_id,$qty);
    $deleteCurrentCart= deletFromCart_ctr($product_id,$ip_add,$customer_id, $qty);
    if (!$deleteCurrentCart){
        header("location:../view/payment_failed.php");
    }
    else{
        header("location:../view/payment_success.php");
    }



}


?>