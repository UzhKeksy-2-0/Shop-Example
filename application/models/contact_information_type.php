<?php
    namespace app\models;

use UK\UK_DataBase;

class contact_information_type extends UK_DataBase
{
    //protected $dbTable = "contact_information_type";
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

