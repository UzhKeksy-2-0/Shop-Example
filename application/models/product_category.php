<?php
    namespace app\models;

use UK\UK_DataBase;

class product_category extends UK_DataBase
{
    protected $dbTable = "product_category";
    public $id;
    public $name;
    public $parentid;
    public $description;

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
    * Get $parentid
    */
    public function getParent_id()
    {
        return $this->parent_id;
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
    * Set $name
    */
    public function setName( $name)
    {
        $this->name = $name;
    }

    /**
    * Set $parentid
    */
    public function setParent_id( $parent_id)
    {
        $this->parent_id = $parent_id;
    }

    /**
    * Set $description
    */
    public function setDescription( $description)
    {
        $this->description = $description;
    }
      
}