<?php
    namespace app\models;

use UK\UK_DataBase;

class order_product extends UK_DataBase
{
    protected $dbTable = "order_product";
    public $id;
    public $orderid;
    public $productid;

    /**
    * Get $id
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Get $orderid
    */
    public function getOrder_id()
    {
        return $this->order_id;
    }

    /**
    * Get $productid
    */
    public function getProduct_id()
    {
        return $this->product_id;
    }
    

    /**
    * Set $id
    */
    public function setId( $id)
    {
        $this->id = $id;
    }

    /**
    * Set $orderid
    */
    public function setOrder_id( $order_id)
    {
        $this->order_id = $order_id;
    }

    /**
    * Set $productid
    */
    public function setProduct_id( $product_id)
    {
        $this->product_id = $product_id;
    }

}

