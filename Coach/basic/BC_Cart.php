<?php
namespace CH\basic;
class BC_Cart
{    
    /**
     * getProductsIDListFromCart
     * retutns list of product id
     * @return array product id list
     */
    public static function getProductsIDListFromCart(): array
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
            return null;
        }
        // get data from session
        $productList = null;
        if(isset($_SESSION['cart']['products'])){
            $productList = $_SESSION['cart']['products'];
        }
        return $productList;
    }  
      
    /**
     * addProductIDToCart
     * add product in cart. If product is already in cart add his quantity
     * @param  mixed $productId
     * @return void
     */
    public static function addProductIDToCart($productId)
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
        }
        if(isset($_SESSION['cart']['products'])){
            if(isset($_SESSION['cart']['products'][$productId])){
                $_SESSION['cart']['products'][$productId] += 1;
            }
            else{
                $_SESSION['cart']['products'][$productId] = 1;
            }
        }
    }    
    
    /**
     * isProductIDInCart
     * returns true if product id exist. False if product id does not exist
     * @param  mixed $productId
     * @return bool
     */
    public static function isProductIDInCart($productId): bool
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
            return false;
        }
        return (bool) isset($_SESSION['cart']['products'][$productId]);
    }
     
    /**
     * removeProductIDInCart
     * removes product id from cart
     * @param  mixed $productId
     * @return void
     */
    public static function removeProductIDInCart($productId)
    {
        if(session_status() == PHP_SESSION_NONE)
        {
            session_start();
            return;
        }
        if(isset($_SESSION['cart']['products'][$productId])){
            unset($_SESSION['cart']['products'][$productId]);
        }
    }
}

