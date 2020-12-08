<?php
    namespace app\models;

use UK\UK_DataBase;

class product_image extends UK_DataBase
{
    //protected $dbTable = "product_image";
    public $id;
    public $product_id;
    public $image;

    /**
    * Get $id
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Get $productid
    */
    public function getProduct_id()
    {
        return $this->product_id;
    }

    /**
    * Get $image
    */
    public function getImage()
    {
        return $this->image;
    }

    /**
    * Set $id
    */
    public function setId( $id)
    {
        $this->id = $id;
    }

    /**
    * Set $productid
    */
    public function setProduct_id( $product_id)
    {
        $this->product_id = $product_id;
    }

    /**
    * Set $image
    */
    public function setImage( $image)
    {
        $this->image = $image;
    }

}
