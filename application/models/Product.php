<?php
    namespace app\models;

use UK\UK_DataBase;

class product extends UK_DataBase
{
    protected $dbTable = "product";
    public $id;
    public $name;
    public $discription;
    public $price;

    /**
    * Get $id
    */
    public function getId()
    {
        return $this->id;
    }

    /**
    * Get $name
    */
    public function getName()
    {
        return $this->name;
    }

    /**
    * Get $discription
    */
    public function getDiscription()
    {
        return $this->discription;
    }

    /**
    * Get $price
    */
    public function getPrice()
    {
        return $this->price;
    }

    /**
    * Set $id
    */
    public function setId( $id)
    {
        $this->id = $id;
    }

    /**
    * Set $name
    */
    public function setName( $name)
    {
        $this->name = $name;
    }

    /**
    * Set $discription
    */
    public function setDiscription( $discription)
    {
        $this->discription = $discription;
    }

    /**
    * Set $price
    */
    public function setPrice( $price)
    {
        $this->price = $price;
    }

}

