<?php

namespace app\models;

use UK\basic\UK_DataBase;

class product_category extends UK_DataBase
{
    protected $dbTable = "product_category";
    private  $id;
    private  $name;
    private  $parent_id;
    private  $description;


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
    * Set $description
    */
    public function setDescription( $description)
    {
        $this->description = $description;
    }
   
}
