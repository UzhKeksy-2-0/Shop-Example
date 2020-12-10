<?php
    namespace app\models;

use UK\UK_DataBase;

class product_feedback extends UK_DataBase
{
    protected $dbTable = "product_feedback";
    public $id;
    public $productid;
    public $clientid;
    public $stars;
    public $description;

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
    * Get $clientid
    */
    public function getClient_id()
    {
        return $this->client_id;
    }

    /**
    * Get $stars
    */
    public function getStars()
    {
        return $this->stars;
    }

    /**
    * Get $description
    */
    public function getDescription()
    {
        return $this->description;
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
    * Set $clientid
    */
    public function setClient_id( $client_id)
    {
        $this->client_id = $client_id;
    }

    /**
    * Set $stars
    */
    public function setStars( $stars)
    {
        $this->stars = $stars;
    }

    /**
    * Set $description
    */
    public function setDescription( $description)
    {
        $this->description = $description;
    }

}
