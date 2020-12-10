<?php
    namespace app\models;

use UK\UK_DataBase;

class order_status extends UK_DataBase
{
    protected $dbTable = "order_status";
    public $id;
    public $name;

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

}