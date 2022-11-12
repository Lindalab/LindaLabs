<?php
//connect to database class
require("../settings/db_class.php");

/**
*General class to handle all functions 
*/
/**
 *@author Linda Arthur
 *
 */

class cart_class extends db_connection
{
    public function addToCart($p_id, $ip_add, $c_id,$qty){
        $sql="INSERT INTO `cart`(`p_id`, `ip_add`, `c_id`, `qty`) VALUES ('$p_id','$ip_add','$c_id','$qty')";
        return $this->db_query($sql);
    }

    public function deletFromCart($p_id,$ip_add, $c_id,$qty){
        $sql="DELETE FROM `cart` WHERE p_id='$p_id' and ip_add='$ip_add'and c_id='$c_id'and qty='$qty'";

        return $this->db_query($sql);
    }

    public function showAllProductInCart(){
        $sql="SELECT products.product_title, products.product_price,products.product_image, cart.qty from products,cart where cart.p_id = products.product_id";
        return $this->getAllData($sql);
    }

    public function showAPersonCart($c_id,$ip_add){
        $sql="SELECT products.product_title as product_title , products.product_price as product_price,products.product_image as product_image, cart.qty as qty,cart.p_id as p_id, cart.ip_add as ip_add, cart.c_id as c_id from products,cart,customer where cart.p_id = products.product_id and cart.c_id=customer.customer_id
        and c_id='$c_id' and ip_add ='$ip_add' " ;
        return $this->getAllData($sql);
    }

}



?>