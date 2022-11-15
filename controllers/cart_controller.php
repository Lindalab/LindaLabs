<?php
//connect to the customer class
include("../classes/cart_class.php");

function  addToCart_ctr($p_id, $ip_add, $c_id,$qty){
    $cart =new cart_class();
    return $cart->addToCart($p_id, $ip_add, $c_id,$qty);

}

function deletFromCart_ctr($p_id,$ip_add, $c_id,$qty){
    $cart =new cart_class();    
    return $cart->deletFromCart($p_id,$ip_add, $c_id,$qty);
}

function showAllProductInCart_ctr(){
    $cart= new cart_class();
    return $cart->showAllProductInCart();

}

function showAPersonCart_ctr($c_id,$ip_add){
    $cart =new cart_class();
    return $cart->showAPersonCart($c_id,$ip_add);
}

function increaseCartItemByOne_ctr($p_id,$ip_add, $c_id,$qty){
    $cart =new cart_class();
    return $cart->increaseCartItemByOne($p_id,$ip_add, $c_id,$qty);
}

function decreaseCartItemByOne_ctr($p_id,$ip_add, $c_id,$qty){
    $cart = new cart_class();
    return $cart->decreaseCartItemByOne($p_id,$ip_add, $c_id,$qty);
}

function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else{
        $ipaddress = 'UNKNOWN';
    } 
    return $ipaddress;
}
    

?>